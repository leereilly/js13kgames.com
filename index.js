'use strict';

var crypto = require('crypto');
var express = require('express');
var hbs = require('express-hbs');
var bodyParser = require('body-parser');
var cookieSession = require('cookie-session');

// Controllers
var homeController = require('./controllers/home');
var entriesController = require('./controllers/entries');
var submitController = require('./controllers/submit');
var adminController = require('./controllers/admin');

var Edition = require('./models/edition');

var config = require('./config');

var urlencodedParser = bodyParser.urlencoded({ extended: false })

var app = express();

app.set('trust proxy', 1)

require('./helpers/handlebars')(hbs);

app.engine('hbs', hbs.express4({
  partialsDir: __dirname + '/views/partials',
  layoutsDir: __dirname + '/views/layouts'
}));
app.set('view engine', 'hbs');
app.set('views', __dirname + '/views');
app.use(express.static('public'));
app.use(express.static('public/assets'));
app.use(cookieSession({
  name: 's',
  keys: ['ding', 'dong']
}));

var generateRandom = function(len) {
  return crypto.randomBytes(Math.ceil(len * 3 / 4))
    .toString('base64')
    .slice(0, len);
};

var csrfProtection = function(req, res, next) {
  req.session.csrf = generateRandom(24);
  next();
};

var defaultYear = function(req, res, next) {
  Edition.findOne({
    where: {
      active: true
    }
  })
  .then(function(edition) {
    if (edition === null) {
      Edition.findOne({
        order: 'id DESC'
      })
      .then(function(edition) {
        if (edition !== null) {
          req.params.year = req.params.year || edition.slug;
        }
        next();
      })
    } else {
      req.params.year = req.params.year || edition.slug;
      next();
    }
  })
};

var ensureAuthentication = function(req, res, next) {
  if (req.session.user) {
    next();
  } else {
    res.redirect('/admin/login');
  }
}

var ensureAdminLevel = function(req, res, next) {
  if (req.session.user.level < config.admin.judgeLevel) {
    res.status(401).send('Admin level required');
  } else {
    next();
  }
}

var ensureSuperUserLevel = function(req, res, next) {
  if (req.session.user.level < config.admin.superUserLevel) {
    res.status(401).send('Super user level required');
  } else {
    next();
  }
}

//js13kgames.com/jugde                    -> panel to judge games. This panel must be active only when the compo is running. It needs authentication
//js13kgames.com/myprofile                -> page where users can see their profiles. It needs authentication
//js13kgames.com/users/<id>               -> page where everyone can see a user profile with his/her participation through the years.
//js13kgames.com/winners                  -> list of winners for the current year
//js13kgames.com/<year>/winners           -> list of winners for the given year

// Routes
app.get('/submit', defaultYear, csrfProtection, submitController.get);
app.post('/submit', defaultYear, submitController.post);
app.get('/submit/invalid_csrf', submitController.invalid);
app.get('/submit/no_open', submitController.noOpen);
app.get('/entries', defaultYear, entriesController.list);
app.get('/entries/:slug', defaultYear, entriesController.show);
app.get('/admin', ensureAuthentication, ensureAdminLevel, adminController.panel);
app.get('/admin/login', csrfProtection, adminController.form);
app.post('/admin/login', urlencodedParser, adminController.login);
app.get('/admin/submissions', defaultYear, ensureAuthentication, adminController.submissions);
app.get('/admin/submissions/:id', ensureAuthentication, ensureAdminLevel, adminController.show);
app.post('/admin/submissions/:id/vote', ensureAuthentication, ensureAdminLevel, urlencodedParser, adminController.vote);
app.put('/admin/submissions/:id', ensureAuthentication, ensureSuperUserLevel, adminController.accept);
app.delete('/admin/submissions/:id', ensureAuthentication, ensureSuperUserLevel, adminController.reject);
app.get('/admin/editions', defaultYear, ensureAuthentication, ensureSuperUserLevel, adminController.editions);
app.get('/admin/editions/new', defaultYear, ensureAuthentication, ensureSuperUserLevel, adminController.newEdition);
app.post('/admin/editions', defaultYear, ensureAuthentication, ensureSuperUserLevel, urlencodedParser, adminController.createEdition);
app.put('/admin/editions/:id', defaultYear, ensureAuthentication, ensureSuperUserLevel, urlencodedParser, adminController.updateEdition);
app.delete('/admin/editions/:id', defaultYear, ensureAuthentication, ensureSuperUserLevel, adminController.removeEdition);
app.get('/admin/email/test', csrfProtection, ensureAuthentication, ensureSuperUserLevel, adminController.emailTestForm);
app.post('/admin/email/test', urlencodedParser, ensureAuthentication, ensureSuperUserLevel, adminController.sendTestEmail);

app.get('/:year', defaultYear, homeController);
app.get('/:year/entries', defaultYear, entriesController.list);
app.get('/:year/entries/:slug', defaultYear, entriesController.show);
app.get('/', defaultYear, homeController);

app.listen(3000, function() {
  console.log('Listening on port 3000');
});
