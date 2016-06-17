'use strict';

var express = require('express');
var hbs = require('express-hbs');
var sqlite3 = require('sqlite3').verbose();

var app = express();
var db = new sqlite3.Database('production.sqlite');

app.engine('hbs', hbs.express4({
  partialsDir: __dirname + '/views/partials',
  layoutsDir: __dirname + '/views/layouts'
}));
app.set('view engine', 'hbs');
app.set('views', __dirname + '/views');

app.get('/', function(req, res) {
  db.all('SELECT * FROM editions', function(err, rows) {
    rows.forEach(function(row) {
      console.log(row.id + " - " + row.title);
    });
    res.render('home', {is2015: true});
  });
});

app.listen(3000, function() {
  console.log('Listening on port 3000');
});
