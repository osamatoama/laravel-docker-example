<?php

use App\User;

// temp 



Route::get('/', function () {

    return User::all();
});
