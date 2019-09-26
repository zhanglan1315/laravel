<?php

Route::get('/', function () {
  return 'hello world';
});

Route::get('/home', 'AppController@home');
