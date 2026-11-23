<?php

use App\Http\Controllers\Crudcontroller;
use Illuminate\Support\Facades\Route;





Route::get('/', [Crudcontroller::class, 'main'])->name('main');

Route::get('/create', [Crudcontroller::class, 'create'])->name('create');

Route::post('/store',[Crudcontroller::class, "store"])->name('store');


Route::get('/index', [Crudcontroller::class, 'index'])->name('index');

Route::get('/view/{id}' , [Crudcontroller::class, 'view'])->name('view');

Route::get('/edit/{id}' , [Crudcontroller::class, 'edit'])->name('edit');


route::put('/update/{id}' , [Crudcontroller::class, 'update'])->name('update');

route::delete('/delete/{id}' , [Crudcontroller::class, 'destroy'])->name('delete');
