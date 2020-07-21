//importar  modulos router  de angular
import { ModuleWithProviders } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

//importar componentes
import { HomeComponent } from './home/home.component';
import { ZapatillaComponent } from './zapatilla/zapatilla.component';
import { VideoJuegoComponent } from './videojuego/videojuego.component';
import { CursoComponent } from './curso/curso.component';
import { ContactoComponent } from './contacto/contacto.component';

//array rutas
const   appRoutes: Routes = [
  {path: '', component: ZapatillaComponent},
  {path: 'zapatilla', component: ZapatillaComponent},
  {path: 'videojuego', component: VideoJuegoComponent},
  {path: 'curso', component: CursoComponent},
  {path: 'curso/:nombre', component: CursoComponent},
  {path: 'contacto', component: ContactoComponent},
  {path: '**', component: HomeComponent}
];

//exportar datos
export const appRoutingProviders: any[]=[];
export const routing: ModuleWithProviders= RouterModule.forRoot(appRoutes);
