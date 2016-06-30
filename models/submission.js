var fs = require('fs');
var path = require('path');
var unzip = require('unzip');
var im = require('imagemagick');
var config = require('../config');
var messages= require('../messages');
var Sequelize = require('sequelize');
var sequelize = new Sequelize(config.db.name, null, null, config.db.connection);

var Edition = require('./edition');

var Submission = sequelize.define('submission', {
  id: {
    type: Sequelize.INTEGER,
    primaryKey: true
  },
  active: {
    type: Sequelize.BOOLEAN,
    defaultValue: 1
  },
  slug: {
    type: Sequelize.STRING,
    validate: {
      isUnique: function(value, next) {
        Submission.findAll({
          where: { slug: value },
          attributes: ['id']
        })
        .then(function(results) {
          if (results.length > 0) next(messages.error.slugNotUnique);
          next();
        })
        .catch(function(err) {
          next(err);
        })
      }
    }
  },
  author: {
    type: Sequelize.STRING,
    validate: { min: 3 }
  },
  categories: {
    type: Sequelize.VIRTUAL,
    set: function(val) {
      this.setDataValue('categories', val);
    },
    allowNull: false,
    notEmpty: true
  },
  email: {
    type: Sequelize.STRING,
    allowNull: false,
    validate: { isEmail: true }
  },
  twitter: {
    type: Sequelize.STRING,
    validate: { min: 3 }
  },
  websiteUrl: {
    type: Sequelize.STRING,
    allowNull: true,
    field: "website_url",
    validate: { isUrl: true }
  },
  githubUrl: {
    type: Sequelize.STRING,
    field: "github_url",
    allowNull: false,
    validate: { isUrl: true }
  },
  serverUrl: {
    type: Sequelize.STRING,
    field: "server_url",
    validate: { isUrl: true }
  },
  description: {
    type: Sequelize.TEXT,
    allowNull: false
  },
  title: {
    type: Sequelize.STRING,
    allowNull: false,
    validate: { min: 10 }
  },
  editionId: {
    type: Sequelize.INTEGER,
    allowNull: false,
    field: "edition_id",
    validate: { isInt: true }
  },
  score: {
    type: Sequelize.INTEGER,
    validate: { isInt: true }
  },
  fileZip: {
    type: Sequelize.VIRTUAL,
    allowNull: false
  },
  smallScreenshot: {
    type: Sequelize.VIRTUAL,
    allowNull: false
  },
  bigScreenshot: {
    type: Sequelize.VIRTUAL,
    allowNull: false
  },
  uri: {
    type: Sequelize.VIRTUAL,
    get: function() {
      this.setDataValue('uri', config.app.domain + '/' + path.join(this.edition.slug, 'entries', this.slug));
    },
  }
}, {
  timestamps: true,
  createdAt: 'created_at',
  updatedAt: 'updated_at',
  validate: {
    screenshots: function() {
      isImageValid(this.smallScreenshot);
      isImageValid(this.bigScreenshot);
    },
    zip: function() {
      if (this.fileZip.headers['content-type'] !== 'application/zip') {
        throw new Error(messages.error.invalidZipFormat);
      }
      if (this.fileZip.size > config.games.maxSize) {
        throw new Error(messages.error.invalidZipSize);
      }
    },
    files: function() {
      var stat = fs.statSync(this.getStoragePath());
      if (stat.isDirectory()) {
        throw new Error(messages.error.gameAlreadyExists);
      }
    }
  },
  instanceMethods: {
    getStoragePath: function() {
      return path.join('public', 'games', this.slug);
    },
    getFilePath: function(file, newName) {
      var name = newName || file.originalFilename;
      return path.join(this.getStoragePath(), name);
    },
    saveFiles: function() {
      // Create directory
      fs.mkdirSync(this.getStoragePath());
      // Zip
      fs.renameSync(this.fileZip.path, this.getFilePath(this.fileZip));
      fs.createReadStream(this.getFilePath(this.fileZip)).pipe(unzip.Extract({ path: this.getStoragePath() }));
      // Screenshots
      im.resize({
        srcPath: this.smallScreenshot.path,
        dstPath: this.getFilePath(this.smallScreenshot, '__small.jpg'),
        width: 160
      });
      im.resize({
        srcPath: this.bigScreenshot.path,
        dstPath: this.getFilePath(this.bigScreenshot, '__big.jpg'),
        width: 400
      });
    }
  }
});

Submission.belongsTo(Edition);

var isImageValid = function(image) {
  var mimeTypes = ['image/png', 'image/jpeg', 'image/gif'];
  if (mimeTypes.indexOf(image.headers['content-type']) < 0) {
    throw new Error(messages.error.invalidImageFormat);
  }
  if (image.size > config.images.maxSize) {
    throw new Error(messages.error.invalidImageSize);
  }
};

module.exports = Submission;
