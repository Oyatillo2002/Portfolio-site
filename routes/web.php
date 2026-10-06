<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/projects/{project}', [PortfolioController::class, 'project'])->name('project.show');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');