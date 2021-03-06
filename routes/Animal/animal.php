<?php

Route::group(['prefix' => 'animal', 'namespace' => 'Animal'], function () {

    Route::post('add','AnimalController@animal_add')->name('animal.add');
    Route::post('getinfo','AnimalController@animal_getinfo')->name('animal.getinfo');
    Route::get('content','AnimalController@animal_content')->name('animal.content');
    Route::get('animal_del','AnimalController@animal_del')->name('animal.del');
    Route::get('getInfos','AnimalController@getInfos')->name('animal.getInfos');
});