var _ = require('underscore');
var config = require('../config');
var Sequelize = require('sequelize');
var sequelize = new Sequelize(config.db.name, null, null, config.db.connection);

var Submission = require('../models/submission');
var Edition = require('../models/edition');
var Category = require('../models/category');
var Comment = require('../models/comment');
var User = require('../models/user');
var Vote = require('../models/vote');
var CriterionEdition = require('../models/criterion_edition');

var EntriesController = {};

EntriesController.list = function(req, res) {
  var a = Submission.findAll({
    include: [{
      model: Edition,
      where: {
        slug: req.params.year
      }
    }]
  }).then(function(rows) {
    rows = rows.map(function(x) { x.uri = null; return x })
    //todo add category to the title
    //todo set default year if empty
    //todo: load editions from db
    res.render('entries', {
      entries: _.shuffle(rows),
      year: req.params.year,
      categories: [{name:'Desktop',id:8},{name:'Mobile',id:9},{name:'Server',id:10}],
      editions: [{year:2012},{year:2013},{year:2014},{year:2015}],
      title: req.params.year + " Entries | js13kGames"  });
  });
};

EntriesController.show = function(req, res) {
  Promise.all([
    Submission.find({
      where: {
        slug: req.params.slug
      },
      include: [{
        model: Edition,
        where: {
          slug: req.params.year
        }
      }]
    }),
    Comment.findAll({
      include: [{
        model: Submission,
        where: {
          slug: req.params.slug
        }
      }, {
        model: User
      }]
    }),
    Category.getBySubmission(req.params.slug),
    Vote.getByUser(req.params.slug)
  ]).then(function(results) {
    var entry = results[0];
    var title = entry.title + " | " + config.app.name;

    entry.categories = results[2].map(function(c) {
      return c.title;
    }).join(', ');
    entry.description = entry.description.split("\r\n").filter(function(x) { return x !== "" }).map(function(x) { return "<p>" + x + "</p>" }).reduce(function(x, y) { return x + y });

    res.render('entry', { entry: entry, comments: results[1], title: title, votes: results[3] });
  });
};

module.exports = EntriesController;
