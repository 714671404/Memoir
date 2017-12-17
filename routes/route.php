<?php

use System\Initial\Route;

Route::get('/home/{id}/show/{page}', 'HomeController@home');