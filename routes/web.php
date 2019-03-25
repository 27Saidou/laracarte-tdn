<?php

Route::get('/', [
    'as'=>'root_path',
    'uses'=>'pagesController@home'
]);

Route::get('/about',[
    'as'=>'about_path',
    'uses'=>'pagesController@about'
]);

Route::get('/contact',[
    'as'=>'contact_path',
    'uses'=>'ContactsController@create'
]);
