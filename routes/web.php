<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Rutas Web
|--------------------------------------------------------------------------
|
|Aquí es donde puede registrar rutas web para su aplicación. Estas
|rutas son cargadas por el RouteServiceProvider dentro de un grupo que
|contiene el grupo de middleware "web". ¡Ahora crea algo grandioso!
|
*/

Route::get('/', function () {
    return view('welcome'); //Para la página de inicio (No es necesario poner blade.php)
});

Route::get('/saludos', function () {
    return view('app'); //Otra ruta (Similar a Spring Boot con su etiqueta @RequestMapping)
});

Route::get('/tareas', function () { //GET
    return view('todos.index'); 
})->name('todos');

Route::get('/tareas', [TodosController::class, 'index'])->name('todos'); //Mostrar

Route::post('/tareas', [TodosController::class, 'store'])->name('todos'); //POST
//No importa que cambie el nombre de la ruta porque 'name' se toma como prioridad.
//No importa que las rutas sean las mismas porque una es GET y la otra POST.

Route::get('/tareas/{id}', [TodosController::class, 'show'])->name('todos-edit'); //Buscar y mostrar
Route::patch('/tareas/{id}', [TodosController::class, 'update'])->name('todos-update'); //Editar

Route::delete('/tareas/{id}', [TodosController::class, 'destroy'])->name('todos-destroy'); //Eliminar

//----------------------------------------------------------------------------------------------------

Route::resource('categories', CategoryController::class);