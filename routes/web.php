<?php

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
    return view('homew');
});
Route::get('/hom', function () {
        return view('hom');
    });

    Route::get('/mail', function () {
        return view('Mail.register_call');
    });
    
    
//Rutas para el home
Route::post('crear_usuario', 'HomeController@crear_docente');
//Rutas para administrador
Route::get('/admin', 'AdminController@index');
Route::get('listado_docentes/{filtro?}/{orden?}', 'AdminController@listado_docentes')->name('listado');
Route::get('form_editar_docente/{id}', 'AdminController@form_editar_docente');
Route::post('editar_docente', 'AdminController@editar_docente');
Route::post('crear_docente', 'AdminController@crear_docente');
Route::get('inhabilitar_docente/{id?}', 'AdminController@inhabilitar_docente');
Route::get('habilitar_docente/{id?}', 'AdminController@habilitar_docente');
Route::get('eliminar_docente/{id?}', 'AdminController@eliminar_docente');

//Rutas para estudiante   
Route::get('/student', 'StudentController@listado_materias');
Route::get('nota_materia/{id?}', 'StudentController@notas_materia');
Route::get('nota_materia_listado/{id?}', 'StudentController@notas_materias_grupo');
Route::get('video_student', 'StudentController@video_player');
Route::post('enviar_comentario', 'StudentController@enviar_comentario');


//Rutas para profesor
Route::get('/teacher','TeacherController@index');
Route::get('listado_materias/{filtro?}/{orden?}', 'TeacherController@listado_materias');
Route::get('video', 'TeacherController@video_player');
Route::get('form_editar_materia/{id}', 'TeacherController@form_editar_materia');
Route::post('editar_materia', 'TeacherController@editar_materia');
Route::post('crear_materia', 'TeacherController@crear_materia');
Route::get('eliminar_materia/{id?}', 'TeacherController@eliminar_materia');



//Validación para inicio de sesión con google
Route::get('homew/{provider?}', 'Auth\LoginController@getSocialAuth');
Route::get('homew/{provider?}/logout', 'Auth\LoginController@logout');
Route::get('/homew/{provider?}/callback','Auth\LoginController@handleProviderCallback');

 // prueba para la nueva vista
 Route::get('index', 'HomeController@prueba');    