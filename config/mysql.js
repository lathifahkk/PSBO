var mysql = require('mysql')

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "akun_MYSQL_hana",
    database: "mysql"
});

con.connect(function(err){
    if(err) throw err;
    console.log("Koneksi Berhasil!");
});