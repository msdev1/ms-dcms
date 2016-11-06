<?php

Route::get('/', function () {
   return view('welcome');
});


Route::group(['prefix' => 'mod'], function () {
 \MS\Core\B::r("Moduels".DS."routes");
});
