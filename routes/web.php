<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

// Canonical Home (named)
Route::view('/', 'pages.home')->name('home');

// Optional: /home -> /  (no need to name this)
Route::get('/home', function () {
    return redirect()->route('home');
});

Route::view('/contact', 'contact')->name('contact');
Route::view('/portfolio', 'portfolio')->name('portfolio');

Route::get('/project/{slug}', function (string $slug) {
    return view('project-show', compact('slug'));
})->name('project.show');

Route::post('/contact/submit', function (Request $request) {
    if ($request->filled('company')) {
        return back()->with('success', 'Thanks!');
    }

    $data = $request->validate([
        'name'     => ['required', 'string', 'max:120'],
        'email'    => ['required', 'email', 'max:180'],
        'budget'   => ['nullable', 'string', 'max:40'],
        'timeline' => ['nullable', 'string', 'max:40'],
        'message'  => ['required', 'string', 'min:20'],
    ]);

    Log::info('New inquiry', $data);
    return back()->with('success', 'We have received your message — you will get a reply within 24 hours.');
})->name('contact.submit');
