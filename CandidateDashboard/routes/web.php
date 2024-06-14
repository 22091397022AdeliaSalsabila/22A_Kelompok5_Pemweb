<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\KampanyeController;
use App\Http\Controllers\DetailController;


Route::get('/', [DashboardController::class, 'dashboard1'])->name('dashboard');
Route::get('/candidates/candidate', [CandidateController::class, 'candidate1'])->name('candidate');
Route::get('/candidates/kampanye', [KampanyeController::class, 'show'])->name('kampanye');
Route::get('/candidates/detailkampanye/{id}', [DetailController::class, 'showCampaign'])->name('kampanye.detail');


