const express = require('express')
const app = express()
const cred = require('./config.json')
var mysql = require('mysql');

var con = mysql.createConnection({
  host : cred.host,
  user : cred.user,
  password : cred.password
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});


app.use(express.static('public'))

app.get('/', function (req, res) {
    res.sendfile('index.html')
  })
  
app.get('/addnewitem', function(req, res){
    res.sendfile('newitem.html')
})  

  app.listen(3000, function () {
    console.log('App listening on port 3000')
  })