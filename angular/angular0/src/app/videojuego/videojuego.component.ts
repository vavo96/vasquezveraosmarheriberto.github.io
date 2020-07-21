import { Component, OnInit, DoCheck, OnDestroy } from '@angular/core';

@Component({
  selector: 'videojuego',
  templateUrl: './videojuego.component.html'
})

export class VideoJuegoComponent implements OnInit, DoCheck, OnDestroy{
  public titulo: string;
  public listado: string;

  constructor(){
    this.titulo = "Componente videojuego--";
    //console.log("videojuego.ts");
  }

  ngOnInit(){
    //console.log("Estamos usando oniniit");
  }

  ngDoCheck(){
    //console.log("Docheck ejecutado");
  }

  ngOnDestroy(){
    //console.log("Ondestroy ejecutandoce");
  }

  cambiaTitulo(){
    this.titulo="Nuevo titulo bitch";
  }
}
