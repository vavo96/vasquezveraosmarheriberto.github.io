import { Component,OnInit } from '@angular/core';
import { zapatilla } from '../modelo/zapatilla'

@Component({
  selector: 'zapatilla',
  templateUrl:'./zapatilla.component.html'
})

export class ZapatillaComponent implements OnInit{
  public titulo: string = "Zapatillucas titutlo";
  public zapatillas: Array<zapatilla>;
  public marcas: String[];
  public mi_marca:string;
  public color:string;

  constructor(){
    this.color='yellow';
    this.mi_marca = "marca";
    this.marcas= new Array;
    this.zapatillas = [
      new zapatilla('Reebook',800,'Reebook','blanco',true),
      new zapatilla('nike',700,'nike','blanco',true),
      new zapatilla('vans',800,'Reebook','blanco',false),
      new zapatilla('adidas',800,'adidas','blanco',true)
    ];
  }

  ngOnInit(){
    console.log(this.zapatillas);
    this.getMarcas();
  }

  getMarcas(){
    this.zapatillas.forEach((zapatilla,index) =>{
      if(this.marcas.indexOf(zapatilla.marca) < 0){
        this.marcas.push(zapatilla.marca);
      }
    })
    console.log(this.marcas);
  }
  getMarca(){
    alert(this.mi_marca);
  }
  addMarca(){
    this.marcas.push(this.mi_marca);
  }
  borrarMarca(indice){
   this.marcas.splice(indice,1);
  }
  onBlur(){
    console.log("a salido del input");
  }
  enter(){
    alert(this.mi_marca);
  }
}
