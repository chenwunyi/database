// // app.js
// // import modules
// const express = require('express')
// const app = express()
// const port = 3000
// const exphbs = require('express-handlebars')

// // route setting
// // app.get('/', (req, res) => {
// //   res.send('This is my first Express app')
// // })

// // create server
// app.listen(port, () => {
//   console.log(`server listen to http://localhost:${port}`)
// })

// // set template engine
// app.engine('handlebars', exphbs.engine('defaultLayout: main'))
// app.set('view engine', 'handlebars')

// // route setting
// app.get('/', (req, res) => {
//   res.render('index')
// })


var mysql = require('mysql');
var connection = mysql.createConnection({
  host: '140.127.74.186',
  user: '410977010',
  password: '410977010',    //你的密碼（就是這個該死的密碼坑死我了）
  database: '410977010'    //你的資料庫
});

connection.connect();

// SELECT * from customer order by customer.sum desc
// customer.id, customer.name, customer.frequency, customer.payment, count(package.id)
//     FROM customer, package GROUP BY package.customer_id order by count(package.id) desc
connection.query('SELECT customer.id, customer.name, customer.frequency, customer.payment, count(package.id) AS num_count from customer, package GROUP BY package.customer_id order by num_count desc', function (error, results, fields) {
  if (error) throw error;
  for (var i = 0; i < results.length; i++) {
    // console.log('The results is: '+results[i]);
    // console.log('The results is: ' + results[i]);
    console.log('The results is: ' + results[i].id + ' ' + results[i].name + ' ' + results[i].frequency + ' ' + results[i].payment, + results[i].num_count);
  }
  //console.log(results)
});

express = require("express");
var app = express();
// var path = require("path");
const exphbs = require('express-handlebars')

// set template engine
app.engine('handlebars', exphbs.engine('defaultLayout: main'))
app.set('view engine', 'handlebars')

// route setting
app.get('/', (req, res) => {
  res.render('index')
})

// setting static files
app.use(express.static('public'))

// app.get("/", function (req, res) {
//   res.sendFile(path.join("C:/Users/tina9/OneDrive/桌面/資料庫/minionsDelivery/dist/package_2.html"));
// });

//create server
app.listen(3000, function () {
  console.log("Server had start http://localhost:3000/");
});