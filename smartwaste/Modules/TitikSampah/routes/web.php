<?php

use Illuminate\Support\Facades\Route;
use Modules\TitikSampah\Http\Controllers\TitikSampahController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('titiksampahs', TitikSampahController::class)->names('titiksampah');
});
