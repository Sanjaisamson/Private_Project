<?php

use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use League\Flysystem\UrlGeneration\TemporaryUrlGenerator;
use SebastianBergmann\Template\Template;
use App\Http\Controllers\ApplicationController;

Route::get('/',[TemplateController::class,'index']);
Route::get('/foodtrade',[TemplateController::class,'foodtrade']);
Route::get('/education',[TemplateController::class,'education']);
Route::get('/realestate',[TemplateController::class,'realestate']);
Route::get('/tourism',[TemplateController::class,'tourism']);
Route::get('/construction',[TemplateController::class,'construction']);
Route::get('/itsupport',[TemplateController::class,'itsupport']);
Route::get('/career',[TemplateController::class,'career']);
Route::post('/contact', [ContactController::class, 'contactSubmit'])->name('contact.submit');
Route::post('/apply', [ApplicationController::class, 'submitApplication'])->name('application.submit');

