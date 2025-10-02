<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\ConstructionSite;
use App\Models\Measure;
use App\Models\Material;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function() {
    return view('admin.index');
});

Route::get('/logs', function() {
    return view('logs.index');
});

Route::get('/outils', function() {
    return view('outils.index');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/login', function() {
    return (view('login'));
});

Route::get('/chantiers', function() {
  return view('wall.chantier', [
    'chantiers' => ConstructionSite::all(),
  ]);
});

Route::get('/chantiers/{id_site}', function($id_site) {
  return view('wall.mesure', [
    'chantiers' => ConstructionSite::all(),
    'currentChantier' => ConstructionSite::find($id_site),
  ]);
});

Route::get('/chantiers/{id_site}/{id_measure}', function($id_site,$id_measure) {
  return view('wall.page_wall', [
    'chantiers' => ConstructionSite::all(),
    'currentChantier' => ConstructionSite::find($id_site),
    'currentMeasure' => Measure::find($id_measure),
    
  ]);
});

