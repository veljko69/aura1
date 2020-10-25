<?php

return [
    App\Core\Route::get('|^m/?$|',                                               'Main',     'muski'),
    App\Core\Route::get('|^product/([0-9]+)/?$|',                             'Product', 'showProductById'),
    App\Core\Route::get('|^products/([a-z]+)/?$|',                            'Product', 'showProductByName'),
    App\Core\Route::get('|^products/([a-z])/([a-z]+)/?$|',                'Product', 'showProductByPolAndName'),
    App\Core\Route::get('|^z/?$|',                                              'Main',    'zenski'),
    App\Core\Route::any('|^sizeplus/?$|',                                           'Main',    'sizeplus'),

    App\Core\Route::get('|^getregister/?$|',                                       'Main',    'getRegister'),
    App\Core\Route::post('|^postregister/?$|',                                   'Main',    'postRegister'),
    App\Core\Route::get('|^getlogin/?$|',                                          'Main',     'getLogin'),
    App\Core\Route::post('|^postlogin/?$|',                                      'Main',     'postLogin'),
    App\Core\Route::get('|^user/logout/?$|',                                      'Main',     'getLogout'),
    App\Core\Route::post('|^user/profile/?$|',                                      'UserDashboard',     'index'),

    App\Core\Route::get('|^getslanje/?$|',                                       'Main',    'getSlanje'),
    App\Core\Route::post('|^postslanje/?$|',                                   'Main',    'postSlanje'),
    App\Core\Route::get('|^korpa/([0-9]+)/?$|',                                'Product',     'showKorpa'),
    App\Core\Route::get('|^korpa1/([0-9]+)/?$|',                                'Product',     'showKorpa1'),

    App\Core\Route::get('|^admin/?$|',                                                   'Main',     'admin'),
    App\Core\Route::post('|^admin/add/?$|',                                       'Product',     'addProduct'),
    App\Core\Route::any('|^admin/([0-9]+)/delete/?$|',                        'Product',     'deleteProduct'),
    App\Core\Route::get('|^admin/([0-9]+)/edit/?$|',                             'Product',     'getEdit'),
    App\Core\Route::post('|^admin/([0-9]+)/edit/?$|',                             'Product',     'postEdit'),


    #Api rute:
    App\Core\Route::get('|^api/product/([0-9]+)/?$|',                    'ApiProduct',            'showProductById'),
    App\Core\Route::get('|^api/bookmarks/?$|',                             'ApiBookmark',            'getBookmarks'),
    App\Core\Route::get('|^api/bookmarks/clear/([0-9]+)?$|',       'ApiBookmark',            'clear'),
    App\Core\Route::get('|^api/bookmarks/add/([0-9]+)?$|',         'ApiBookmark',            'addBookmark'),

    App\Core\Route::any('|^.*$|', 'Main', 'home')

];
