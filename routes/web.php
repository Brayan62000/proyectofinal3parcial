<?php

use App\Http\Livewire\Adopciones\AdopcionesCreate;
use App\Http\Livewire\Adopciones\AdopcionesDelete;
use App\Http\Livewire\Adopciones\AdopcionesEdit;
use App\Http\Livewire\Adopciones\AdopcionesIndex;
use App\Http\Livewire\Adopciones\AdopcionesShow;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Perros\PerrosCreate;
use App\Http\Livewire\Perros\PerrosDelete;
use App\Http\Livewire\Perros\PerrosEdit;
use App\Http\Livewire\Perros\PerrosIndex;
use App\Http\Livewire\Perros\PerrosShow;
use App\Http\Livewire\Usuarios\UsuariosCreate;
use App\Http\Livewire\Usuarios\UsuariosDelete;
use App\Http\Livewire\Usuarios\UsuariosEdit;
use App\Http\Livewire\Usuarios\UsuariosIndex;
use App\Http\Livewire\Usuarios\UsuariosShow;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", Login::class)->name("login");

Route::get("/usuarios/create", UsuariosCreate::class)->name("usuarios.create");

Route::group(["middleware" => "auth"], function () {
Route::get("/perros", PerrosIndex::class)->name("perros.index");
Route::get("/perros/create", PerrosCreate::class)->name("perros.create");
Route::get("/perros/{perro}/edit", PerrosEdit::class)->name("perros.edit");
Route::get("/perros/{perro}/delete", PerrosDelete::class)->name("perros.delete");
Route::get("/perros/{perro}/show", PerrosShow::class)->name("perros.show");

Route::get("/usuarios", UsuariosIndex::class)->name("usuarios.index");
Route::get("/usuarios/{usuario}/edit", UsuariosEdit::class)->name("usuarios.edit");
Route::get("/usuarios/{usuario}/delete", UsuariosDelete::class)->name("usuarios.delete");
Route::get("/usuarios/{usuario}/show", UsuariosShow::class)->name("usuarios.show");

Route::get("/adopciones", AdopcionesIndex::class)->name("adopciones.index");
Route::get("/adopciones/create", AdopcionesCreate::class)->name("adopciones.create");
Route::get("/adopciones/{adopcion}/edit", AdopcionesEdit::class)->name("adopciones.edit");
Route::get("/adopciones/{adopcion}/delete", AdopcionesDelete::class)->name("adopciones.delete");
Route::get("/adopciones/{adopcion}/show", AdopcionesShow::class)->name("adopciones.show");

});