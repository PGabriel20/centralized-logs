<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/hello', function () {
    Log::info('This is a sample info log from laravel!');
    Log::error('This is a sample error log from laravel!');

    return ['msg' => 'Logs sent! Check kibana at localhost:5601'];
});

require __DIR__.'/auth.php';
