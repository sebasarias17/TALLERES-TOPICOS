const nea = require('./neas-factory');

const express = require('express');
const app = express();
const port = 3000;

app.use('/img', express.static('img'));

app.get('/', (req, res) => {
  let informacion = '';
  nea.forEach(nea => {
    informacion += `Nombre: ${nea.nombre}<br>`;
    informacion += `Altura: ${nea.altura} m<br>`;
    informacion += `Habilidad: ${nea.habilidad}<br>`;
    informacion += `Imagen: <img src="${nea.imagen}" alt="${nea.imagen}"><br>`;
    informacion += `Frase Filosófica: ${nea.fraseFilosofica}<br><br>`;
  });
  res.send(informacion);
});

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});

