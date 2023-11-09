const express = require('express');
const app = express();
const port = 3000;
const routes = require('./routes/web');


app.set('view engine', 'ejs');
app.use(express.static('public'));

app.use('/img', express.static('public/img'));

app.use(routes);

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});
