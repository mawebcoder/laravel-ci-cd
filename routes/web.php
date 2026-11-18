<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return  \Illuminate\Support\Facades\DB::table('notifications')
       ->get();
});
