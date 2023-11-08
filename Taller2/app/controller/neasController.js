const nea = require("../../database/factory/neasFactory");
const os = require("os");

const home = (req, res) => {
  const indiceAleatorio = Math.floor(Math.random() * nea.length);
  const neaSeleccionada = nea[indiceAleatorio];
  res.render('home', { nea: neaSeleccionada });
};

const neasJson = (req, res) => {
  const indiceAleatorio = Math.floor(Math.random() * nea.length);
  const neaSeleccionada = nea[indiceAleatorio];

  const informacion = {
    ID: neaSeleccionada.id,
    Nombre: neaSeleccionada.nombre,
    Altura: neaSeleccionada.altura,
    Habilidad: neaSeleccionada.habilidad,
  };
  res.json(informacion);
};

module.exports = {
  home,
  neasJson,
};
