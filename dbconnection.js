var mysql=require('mysql');
var cred=require('./config.json')
var connection=mysql.createPool({

    host:cred.host,
    user:cred.user,
    password:cred.password,
    database:cred.database
});
module.exports=connection;