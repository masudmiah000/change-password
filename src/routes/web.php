<?php
Route::namespace('Mao\ChangePassword\controllers')->middleware(['web'])->group(function () {
	Route::get('change-password','ChangePasswordController@index');
	Route::post('change-password','ChangePasswordController@change_password');
});