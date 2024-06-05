<?php

use App\Livewire\AbsenForm;
use App\Livewire\Dosens;
use App\Livewire\HomePage;
use App\Livewire\JadwalsKalender;
use App\Livewire\Kelas;
use Illuminate\Support\Facades\Route;

Route::get('/',HomePage::class);
Route::get('/jadwal',JadwalsKalender::class);
Route::get('/dosen',Dosens::class);
Route::get('/kelas',Kelas::class);
Route::get('/absen',AbsenForm::class);
