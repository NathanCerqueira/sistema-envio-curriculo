<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CandidacyController;


Route::controller(CandidacyController::class)->group(function (){
    Route::post('/enviar', 'newCandidacy')->name('app.sendCandidacy');
    Route::get('/candidaturas', 'getAllCandidacies')->name('app.getAllCandidacies');
    Route::get('/download/{cv}', 'download')->name('app.download');
});


