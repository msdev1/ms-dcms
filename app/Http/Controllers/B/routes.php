<?php

Route::get('/', function () {
   var_dump($_SERVER);
});


Route::group(['prefix' => 'mod'], function () {
 \MS\Core\B::r("Moduels".DS."routes");
});

