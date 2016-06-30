'use strict';

var crypto = require('crypto');
var express = require('express');
var hbs = require('express-hbs');
var cookieSession = require('cookie-session');

// Controllers
var homeController = require('./controllers/home');
var entriesController = require('./controllers/entries');
var submitController = require('./controllers/submit');

var app = express();

app.set('trust proxy', 1)

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

var defaultYear = function(req, res, next){
  req.params.year = req.params.year || '2016';
  next();
};

//js13kgames.com/jugde                    -> panel to judge games. This panel must be active active only when the compo is running. It needs authentication
//js13kgames.com/admin                    -> admin panel. It needs super user authentication
//js13kgames.com/myprofile                -> page where users can see their profiles. It needs authentication
//js13kgames.com/users/<id>               -> page where everyone can see a user profile with his/her participation through the years.
//js13kgames.com/winners                  -> list of winners for the current year
//js13kgames.com/<year>/winners           -> list of winners for the given year

// Routes
app.get('/submit', defaultYear, csrfProtection, submitController.get);
app.post('/submit', defaultYear, submitController.post);
app.get('/entries', defaultYear, entriesController.list);
app.get('/:year', defaultYear, homeController);
app.get('/:year/entries', defaultYear, entriesController.list);
app.get('/:year/entries/:slug', defaultYear, entriesController.show);
app.get('/', defaultYear, homeController);

app.listen(3000, function() {
  console.log('Listening on port 3000');
});
