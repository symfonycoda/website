<?php

/** Page Routes */
Route::get('/', 'PagesController@homePage')->name('home');
Route::get('/laravel-people', 'PagesController@laravelPeople')->name('laravelpeeps');

/** Dashboard Routes **/
Route::get('/members', 'MemberDashboardController@dashboard')->name('dashboard');

/** Authentication Routes */
Auth::routes();
Route::get('login/slack', 'Auth\SlackLoginController@redirectToProvider')->name('login.slack');;
Route::get('login/slack/callback', 'Auth\SlackLoginController@handleProviderCallback');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
