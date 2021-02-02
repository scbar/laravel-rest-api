<?php

use illuminate\Support\Facades\Route;

//Resetear estado despues de iniciar el test
Route::post(uri: '/reset', action: 'ResetController@reset');



//obtner balance para la cuenta existente
//Le agregamos de manera especifica un metodo show 
Route::get(uri: '/balance', action: 'BalanceController@show');


//Ruta event, para guardar, transferir, retirar dinero

Route::get(uri: '/event', action: 'EventController@store');
