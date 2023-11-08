const os = require("os");

class nea {
    constructor(id, nombre, altura, habilidad, imagen, fraseFilosofica) {
      this.id = id;
      this.nombre = nombre;
      this.altura = altura;
      this.habilidad = habilidad;
      this.imagen = imagen;
      this.fraseFilosofica = fraseFilosofica;
      this.containerId= os.hostname();
    }
  
    mostrarInformacion() {
      console.log(`ID: ${this.id}`);
      console.log(`Nombre: ${this.nombre}`);
      console.log(`Altura: ${this.altura} m`);
      console.log(`Habilidad: ${this.habilidad}`);
      console.log(`Imagen: ${this.imagen}`);
      console.log(`Frase Filosófica: ${this.fraseFilosofica}`);
    }
  }

module.exports=nea;

  