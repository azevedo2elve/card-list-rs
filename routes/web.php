<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(FileController $fileController){
    $fileController->readGoogleSheet();
});