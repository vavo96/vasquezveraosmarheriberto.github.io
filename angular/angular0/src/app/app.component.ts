import { Component } from '@angular/core';
import { configuracion } from './modelo/configuracion';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'angular0';
  public mostrarVideojuegos: boolean=true;
  public config = configuracion;
  constructor(){
    this.title = configuracion.titulo;
  }

  ocultarVideojuegos(visibilidad: boolean ){
    this.mostrarVideojuegos=visibilidad;
  }
}
