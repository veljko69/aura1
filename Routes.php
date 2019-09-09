<?php

return [
//  App\Core\Route::get('|^category/([0-9]+)/delete/?$|','Category','delete'),
  App\Core\Route::get('|^muski/?$|',                   'Main','muski'),
  App\Core\Route::get('|^product/([0-9]+)/?$|',        'Product','showProductById'),
  App\Core\Route::get('|^zenski/?$|',                  'Main','zenski'),
  App\Core\Route::get('|^getregister/?$|',             'Main','getRegister'),
  App\Core\Route::post('|^postregister/?$|',           'Main','postRegister'),
  App\Core\Route::get('|^getlogin/?$|',                'Main','getLogin'),
  App\Core\Route::post('|^postlogin/?$|',              'Main','postLogin'),
  App\Core\Route::any('|^sizeplus/?$|',                'Main','sizeplus'),

    App\Core\Route::any('|^.*$|',                      'Main','home')

];
