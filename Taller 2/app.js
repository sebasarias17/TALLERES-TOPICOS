const express = require('express');
const app = express();
const port = 3000;
const neasController = require('./app/neasController');

app.use('/img', express.static('img'));

app.get('/', neasController.homeNeas);
app.get('/home', neasController.getNeas);

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});
