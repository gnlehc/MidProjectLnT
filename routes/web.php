<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homectrl;
use App\Http\Controllers\karctrl;
use App\Http\Controllers\userctrl;
use App\Http\Controllers\login;

Route::get('/', [homectrl::class, 'home']);
Route::get('/createKar', [karctrl::class, 'karret']);
Route::get('/login', [login::class, 'login'])->name('user.index');
Route::get('/user', [karctrl::class, 'show']);
Route::post('/store-data', [karctrl::class, 'storeData']);
Route::get('editData/{id}', [karctrl::class, 'edit'])->name('editData');
Route::patch('/updateData/{id}', [karctrl::class, 'update'])->name('update');
Route::delete('/delete/{id}', [karctrl::class, 'delete'])->name('delete');
