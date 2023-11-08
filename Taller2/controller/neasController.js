const nea = require("../database/factory/neasFactory");
const os = require("os");

const home = (req, res) => {
  res.render('home');
};

const showNea = (req, res) => {
  const indiceAleatorio = Math.floor(Math.random() * nea.length);
  const neaSeleccionada = nea[indiceAleatorio];
  res.render('showNea', { nea: neaSeleccionada });
};

const neasJson = (req, res) => {
  const indiceAleatorio = Math.floor(Math.random() * nea.length);
  const neaSeleccionada = nea[indiceAleatorio];

  const informacion = {
    ID: neaSeleccionada.id,
    Nombre: neaSeleccionada.nombre,
    Altura: neaSeleccionada.altura,
    Habilidad: neaSeleccionada.habilidad,
    ContainerID: neaSeleccionada.containerId,
  };
  res.json(informacion);
};

module.exports = {
  home,
  showNea,
  neasJson,
};
