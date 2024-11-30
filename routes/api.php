<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\User;

Route::get('/users', function (Request $request) {
    return User::all();
});

Route::post('/certificate', function (Request $request) {
    $user            = $request->input('user');
    $event           = $request->input('event');
    $certificateCode = $request->input('certificate_code');

    $pdf = PDF::loadView('certificate', 
        [
            'user' => (object) $user, 
            'event' => (object) $event,
            'certificateCode' => $certificateCode
        ]
    );

    return $pdf->download('certificado.pdf');
});
