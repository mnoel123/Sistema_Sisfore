<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PlanillasController;
use App\Http\Controllers\admin\ImportController;
use App\Http\Controllers\EstadosFinancierosController;
use App\Http\Controllers\admin\CuentasController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\PreguntasResController;
use App\Http\Controllers\ParametrosController;
use App\Http\Controllers\admin\PersonasController;
use App\Http\Controllers\admin\ReportePlanillasController;
use App\Http\Controllers\admin\ReporteListaPController;
use App\Http\Controllers\ReporteUsuarioController;
use App\Models\planillas;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Otras rutas del perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Ruta para actualizar la contraseña
    Route::put('/profile/password/update', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
   
});

require __DIR__.'/auth.php';
Route::resource('Usuarios',UsuarioController::class);
//generacion de reporte usuarios 
Route::get('/generar-usuariopdf', [ReporteUsuarioController::class, 'generarPdf']);
    Route::resource('Roles',RolesController::class);
    Route::resource('Preguntas',PreguntasController::class);
    Route::resource('Pregunta-respuesta',PreguntasResController::class);
    Route::resource('Persona',PersonaController::class);
    Route::resource('Parametros',ParametrosController::class);


Route::get('/usuario/inactivo', function () {
    return redirect()->route('login')->with('status', 'Su cuenta está inactiva. Por favor, comuníquese con el administrador.');
})->name('usuario.inactivo');



//vistas de personas
Route::resource('personas',PersonasController::class)->names('personas');

Route::get('/personas', [App\Http\controllers\admin\PersonasController::class, 'index']);


//insertar nuevos registros 
Route::resource('personas',PersonasController::class)->names('createpersona');
Route::post('personas', [PersonasController::class, 'store'])->name('personas');



Route::get('personas/editp/{COD_PERSONA}', [App\Http\controllers\admin\PersonasController::class, 'edit']);


Route::put('personas/update/{COD_PERSONA}', [App\Http\controllers\admin\PersonasController::class, 'update']);

Route::delete('/eliminar/personas/{COD}', [PersonaController::class, 'eliminarPersona'])
    ->name('eliminar.personas');





//vistas de planillas
Route::resource('users',UsuarioController::class)->names('users');

Route::get('/users', [App\Http\controllers\admin\UsuarioController::class, 'index']);


//insertar nuevos registros 
Route::resource('users',UsuarioController::class)->names('create');
//Route::post('planillas', [PlanillasController::class, 'store']);
Route::post('users', [UsuarioController::class, 'store'])->name('users');


//Route::get('/planillas/{COD_PLANILLA}', [PlanillasController::class, 'show'])->name('dash.show');

//ruta para actualizar en planillas

Route::get('users/edit/{id}', [App\Http\controllers\admin\UsuarioController::class, 'edit']);
Route::put('users/update/{id}', [App\Http\controllers\admin\UsuarioController::class, 'update']);


//ruta para Eliminar planillas y aportaciones 
Route::delete('users/destroy/{id}', [App\Http\controllers\admin\UsuarioController::class, 'destroy']);










//vistas de planillas
Route::resource('planillas',PlanillasController::class)->names('planilas');

Route::get('/planillas', [App\Http\controllers\admin\PlanillasController::class, 'index']);


//insertar nuevos registros 
Route::resource('planillas',PlanillasController::class)->names('create');
//Route::post('planillas', [PlanillasController::class, 'store']);
Route::post('planillas', [PlanillasController::class, 'store'])->name('planillas');


//Route::get('/planillas/{COD_PLANILLA}', [PlanillasController::class, 'show'])->name('dash.show');

//ruta para actualizar en planillas

Route::get('planillas/edit/{cod_planilla}', [App\Http\controllers\admin\PlanillasController::class, 'edit']);
Route::put('planillas/update/{cod_planilla}', [App\Http\controllers\admin\PlanillasController::class, 'update']);


//ruta para Eliminar planillas y aportaciones 
Route::delete('planillas/destroy/{cod_planilla}', [App\Http\controllers\admin\PlanillasController::class, 'destroy']);

//rutas para excel 
Route::get('dash/import', [ImportController::class, 'import'])->name('dash/import');
Route::post('dash/importData', [ImportController::class, 'importData'])->name('dash/importData');

//rutas de gestionar planillas
Route::get('gestionar', [ImportController::class, 'gestionar'])->name('gestionar');

Route::get('gestionar', [ImportController::class, 'obtenerplanilla'])->name('gestionar');

Route::get('/generar-pdf', [ReportePlanillasController::class, 'generarPdf']);
Route::get('/generarlista-pdf', [ReporteListaPController::class, 'generarPdf']);



Route::get('/cuentas/editar', function(){
    return view('dash.cuentas-edit');
})->name('cuentas-edit');

//Mostrar datos
Route::resource('cuentas',CuentasController::class)->names('cuentas');
Route::get('cuentas', [App\Http\controllers\admin\CuentasController::class, 'index']);

//insertar nuevos registros 
Route::resource('cuentas',CuentasController::class)->names('create');
Route::post('cuentas', [CuentasController::class, 'store'])->name('cuentas');

//Editar cuentas
Route::get('cuentas/edit/{cod_cuenta}', [App\Http\controllers\admin\CuentasController::class, 'edit']);
//Actualizar cuentas
Route::put('cuentas/update/{cod_cuenta}', [App\Http\controllers\admin\CuentasController::class, 'update']);
//Eliminar cuentas
Route::delete('cuentas/destroy/{cod_cuenta}', [App\Http\controllers\admin\CuentasController::class, 'destroy']);









//ROUTE BITACORA
Route::get('/bitacora', [App\Http\Controllers\admin\BitacoraController::class, 'index'])->name('bitacora');

//ROUTE REPORTES
Route::get('/reportes', [App\Http\Controllers\admin\reportesController::class, 'index'])->name('reportes');
