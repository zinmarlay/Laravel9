<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ApiController;

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
Route::prefix('v1')
->group(function(){
    Route::apiResource('/contacts',ApiController::class);
});


// Route::get('/contacts', function () {
//     return apiResource::collection(User::all());
// });



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
