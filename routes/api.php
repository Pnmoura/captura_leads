<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Aqui me parece um bom lugar para criar as rotas....
Route::prefix('lead')->group(function () {
    Route::name('lead.create')->post('/', 'LeadController@create');
    Route::name('lead.index')->get('/list', 'LeadController@index');
    Route::name('lead.filter')->get('/list/date', 'LeadController@filter');
});
