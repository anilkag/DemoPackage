<?php

Route::group(['namespace' => 'Dexbytes\Registration\Http\Controllers'], function () {
    Route::get('register', 'RegistrationController@index')->name('registration.index');
    Route::post('register', 'RegistrationController@create')->name('registration.create');
});

