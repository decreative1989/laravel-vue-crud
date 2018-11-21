<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 * Now we set up RESTful API routes.
 * The resource method of the Route facade will create all the actions we need automatically.
 *  However, we don't need edit, show or store so we'll exclude those.
 */
Route::resource('/cruds', 'CrudsController', [
    'except' => ['edit', 'show', 'store']
]);
