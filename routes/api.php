<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('students')->group(function () {
    Route::get('/', [App\Http\Controllers\API\StudentController::class, 'list'])->name('api.students.list');
    Route::post('/', [App\Http\Controllers\API\StudentController::class, 'store'])->name('api.students.store');
    Route::get('/{student}', [App\Http\Controllers\API\StudentController::class, 'studentDetails'])->name('api.students.details');
    Route::post('/{student}', [App\Http\Controllers\API\StudentController::class, 'update'])->name('api.students.update');
    Route::delete('/{student}', [App\Http\Controllers\API\StudentController::class, 'destroy'])->name('api.students.destroy');
});


