<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServersController;
use App\Http\Controllers\ChartJsController;
use App\Http\Controllers\UserController;
use App\Models\Servers;
use InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController;
use InfyOm\GeneratorBuilder\Controllers;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoleToUserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\SolutionLocationController;
use App\Http\Controllers\SolutionTypeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ActivityLoggerController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


Route::resource('projects', App\Http\Controllers\ProjectController::class)->middleware('auth');
Route::resource('cities', CityController::class)->middleware('auth');
Route::resource('servers', ServersController::class)->middleware('auth');
Route::resource('activitylogs', ActivityLoggerController::class)->middleware('auth');
Route::resource('roles', RoleController::class)->middleware('auth');
Route::resource('roleToUsers', RoleToUserController::class)->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');
Route::resource('solutionLocations', SolutionLocationController::class)->middleware('auth');
Route::resource('solutionTypes', SolutionTypeController::class)->middleware('auth');
Route::resource('departments', DepartmentController::class)->middleware('auth');
Route::get('docs/', [BlogController::class, 'documentationView'])->name('docs.index')->middleware('auth');
Route::get('single-doc/{id}', [BlogController::class, 'view'])->name('single-doc.index')->middleware('auth');
// Route::get('docs/{id}', [BlogController::class, 'view'])->name('docs.single-blog');
Route::resource('blogs', BlogController::class)->middleware('auth');
    Route::resource('users', UserController::class)->middleware('auth');
    Route::resource('servers', ServersController::class)->middleware('auth');
	Route::resource('permissions', PermissionController::class)->middleware('auth');
	Route::get('file-export', [ServersController::class, 'fileExport'])->name('file-export');
Route::get('file-import-export', [ServersController::class, 'fileImportExport']);
Route::post('file-import', [ServersController::class, 'fileImport'])->name('file-import');
Route::get('truncate', [ServersController::class, 'truncate'])->name('truncate');
Route::get('cities.truncate', [CityController::class, 'truncate'])->name('cities.truncate');
Route::get('solutionlocation.truncate', [SolutionLocationController::class, 'truncate'])->name('solutionlocation.truncate');
Route::get('solutionTypes.truncate', [SolutionTypeController::class, 'truncate'])->name('solutionTypes.truncate');

Route::get('infyom/generator_builder', [GeneratorBuilderController::class, 'builder'])->name('io_generator_builder');

Route::get('field_template', [GeneratorBuilderController::class, 'fieldTemplate'])->name('io_field_template');

Route::get('relation_field_template', [GeneratorBuilderController::class, 'relationFieldTemplate'])->name('io_relation_field_template');

Route::post('generator_builder/generate', [GeneratorBuilderController::class, 'generate'])->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', [GeneratorBuilderController::class, 'rollback'])->name('io_generator_builder_rollback');

Route::post('generator_builder/generate-from-file', [GeneratorBuilderController::class, 'generateFromFile'])->name('io_generator_builder_generate_from_file');

// Route::get('/search', [ServersController::class, 'search']);

Route::get('search', [ServersController::class, 'search'])->name('search');
Route::get('search-doc', [BlogController::class, 'search'])->name('search-doc');
Auth::routes();

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});















