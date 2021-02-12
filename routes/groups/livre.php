
<?php

use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;


Route::prefix('/livres')->group(function (){

    Route::get('/',[LivreController::class, 'showAllLivre'])->name('showAllLivre');

    Route::get('/add',[LivreController::class, 'showAddLivreForm'])->name('showAddLivreForm');
    Route::post('/add',[LivreController::class, 'addLivre'])->name('addLivre');

    Route::get('/{livre:id}',[LivreController::class, 'showUpdateLivreForm'])->name('showUpdateLivreForm');
    Route::patch('/{livre:id}',[LivreController::class, 'updateLivre'])->name('updateLivre');

    Route::delete('/{livre:id}',[LivreController::class, 'deleteLivre'])->name('deleteLivre');








});