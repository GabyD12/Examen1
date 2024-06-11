<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('libro.create');
});

Route::get('libro/create',[LibroController::class,'create']);


Route::post('libro/store', [LibroController::class,'store'])->name('libro.store');


Route::get('libro/listar',[LibroController::class,'index'])->name('libro.index');


Route::delete('libro/{libro}',[LibroController::class,'destroy'])->name('libro.destroy');


Route::get('libro/{libro}/editar',[LibroController::class,'edit'])->name('libro.edit');


Route::put('libro/{libro}',[LibroController::class,'update'])->name('libro.update');


Route::get('libro/{id}',[LibroController::class,'show'])->name('libro.show');