<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ChatController;
use App\Events\UserTyping;
use Illuminate\Support\Facades\Broadcast;

Broadcast::routes(['middleware' => ['web']]);

Route::get('/', [ChatController::class, 'index']);
Route::post('/send-message', [ChatController::class, 'sendMessage']);

