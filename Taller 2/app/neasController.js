const nea = require('../database/neasFactory');
const os = require("os");

const homeNeas = (req, res) => {
  const indiceAleatorio = Math.floor(Math.random() * nea.length);
  const neaSeleccionada = nea[indiceAleatorio];

  const informacion = {
    ID: neaSeleccionada.id,
    Nombre: neaSeleccionada.nombre,
    Altura: neaSeleccionada.altura,
    Habilidad: neaSeleccionada.habilidad
  };

  res.json(informacion);
};

const getNeas = (req, res) => {
  const indiceAleatorio = Math.floor(Math.random() * nea.length);
  const neaSeleccionada = nea[indiceAleatorio];

  let informacion = '';
  informacion += `Imagen: ${neaSeleccionada.imagen}<br>`
  informacion += `Frase Filosofica: ${neaSeleccionada.fraseFilosofica}<br>`
  informacion += "Container Id: " + os.hostname();
  res.send(informacion);
};

module.exports = {
  getNeas,
  homeNeas
};
