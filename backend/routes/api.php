<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    PokedexController
};
use App\Models\User;
use App\Models\Pokedex;

Route::apiResource('pokedex', PokedexController::class);

Route::get('/pokedex', function () {
    $pokedex = Pokedex::get();
    return response()->json($pokedex);
});