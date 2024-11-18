<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\User;

Route::get('/users', function (Request $request) {
    return User::all();
});

Route::post('/certificate', function (Request $request) {
    $user = $request->input('user');
    $event = $request->input('event');

    $pdf = PDF::loadView('certificate', ['user' => (object) $user, 'event' => (object) $event]);

    return $pdf->download('certificado.pdf');
});
