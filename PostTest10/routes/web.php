<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/formData', [
    DataController::class,
    'showFormPesan'
])->name('show-form-pesan');
Route::post('/submit-data', [
    DataController::class, 
    'submitData'
])->name('submit-data');
Route::get('/', function () {
    return redirect()->route('show-form-pesan');
});
