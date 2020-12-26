<?php

namespace App\Traits;

trait UserPermission{

    public function checkRequestPermission()
    {
        if(
            empty(auth()->user()->role->permission['permission']['user']['list']) && \Route::is('user.index') ||
            empty(auth()->user()->role->permission['permission']['user']['add']) && \Route::is('user.create') ||
            empty(auth()->user()->role->permission['permission']['user']['edit']) && \Route::is('user.edit') ||
            empty(auth()->user()->role->permission['permission']['permission']['view']) && \Route::is('permission.index')
        ){
            return response()->view('welcome');
        }
    }
}
