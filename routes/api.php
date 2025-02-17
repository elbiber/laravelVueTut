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

Route::apiResource('/bookables', 'Api\BookableController')->only(['index', 'show']);

Route::get('bookables/{bookable}/availability', 'Api\BookableAvailabilityController')
    ->name('bookables.availability.show');
/* Route::get('bookables', function (Request $request) {
    return App\Bookable::all();
});

Route::get('bookables/{id}', function (Request $request, $id) {
    return App\Bookable::findOrFail($id);
}); */
