const express = require('express');
const app = express();
const port = 3000;
const neasController = require('./app/controller/neasController');


app.set('view engine', 'ejs');
app.use(express.static('public'));

app.use('/img', express.static('public/img'));

app.get('/', neasController.home);
app.get('/neaJson', neasController.neasJson);

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});