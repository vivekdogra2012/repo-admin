<?php

Route::get('/promotions/any', "PagesController@pages");

Route::get('/how-to-play1', "PagesController@pages");

Route::any('', function () {
    return 'Hello World';
});