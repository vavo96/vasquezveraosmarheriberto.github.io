import { Component, OnInit } from '@angular/core';
import { ContactoUsuario } from '../modelo/contacto.usuario';
@Component({
  selector: 'app-contacto',
  templateUrl: './contacto.component.html',
  styleUrls: ['./contacto.component.scss']
})
export class ContactoComponent implements OnInit {
  public usuario: ContactoUsuario;

  constructor() { }

  ngOnInit(): void {
  }

  onSubmit(){
    console.log("submeandp"+ this.usuario);
  }
}
