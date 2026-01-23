<?php

use App\Models\HungryEntry;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'entries' => HungryEntry::orderBy('date', 'desc')->orderBy('time', 'desc')->limit(5)->get(),
    ]);
})->name('dashboard');

Route::post('/store', function () {
    HungryEntry::create([
        'date' => request('date'),
        'time' => request('time'),
    ]);
    return redirect()->route('dashboard');
})->name('store');