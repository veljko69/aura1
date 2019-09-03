<?php

return [
//  App\Core\Route::get('|^category/([0-9]+)/delete/?$|','Category','delete'),
  App\Core\Route::any('|^muski/?$|',                   'Main','muski'),
  App\Core\Route::any('|^zenski/?$|',                  'Main','zenski'),
  App\Core\Route::get('|^getregister/?$|',             'Main','getRegister'),
  App\Core\Route::post('|^postregister/?$|',           'Main','postRegister'),
  App\Core\Route::get('|^getlogin/?$|',                'Main','getLogin'),
  App\Core\Route::post('|^postlogin/?$|',              'Main','postLogin'),
  App\Core\Route::any('|^sizeplus/?$|',                'Main','sizeplus'),

    App\Core\Route::any('|^.*$|',                      'Main','home')

];
