import { Component, OnInit } from '@angular/core';
import { Router,ActivatedRoute,Params } from '@angular/router'
import { from } from 'rxjs';

@Component({
  selector: 'app-curso',
  templateUrl: './curso.component.html',
  styleUrls: ['./curso.component.scss']
})
export class CursoComponent implements OnInit {

  constructor(
    private _route: ActivatedRoute,
    private _router: Router
  ) { }

  ngOnInit(): void {
    this._route.params.subscribe((params: Params) => {
      console.log(params);
    });
  }

}
