<?php

use App\Mail\ContactMessageCreated;

Route::get('/', [
    'as'=>'root_path',
    'uses'=>'pagesController@home'
]);
Route::get('/test-email',function(){
    return new ContactMessageCreated('Saidou Diallo','saidou360@yahoo.com','je vous remercie pour angular');
});
Route::get('/about',[
    'as'=>'about_path',
    'uses'=>'pagesController@about'
]);

Route::get('/contact',[
    'as'=>'contact_path',
    'uses'=>'ContactsController@create'
]);
Route::post('/contact',[
    'as'=>'contact_path',
    'uses'=>'ContactsController@store'
]);
