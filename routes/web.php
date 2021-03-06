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


/*
 * CRUD conventions (with the names in brackets
 * GET /project (index)
 * GET /projects/create (create)
 * GET /projects/1 (show)
 * POST /projects (store)
 * GET /projects/1/edit (edit)
 * PATCH /projects/1 (update)
 * DELETE /projects/1 (destroy)
 *
 * */


Route::get('/', 'HomeController@show');

Route::resource('blogs', 'BlogController');

Route::prefix('/blogs/{blog}')
    ->group(function () {
        Route::resource('comments', 'CommentController');
    });


