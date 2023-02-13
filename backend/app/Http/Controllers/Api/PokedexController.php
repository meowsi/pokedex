<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    protected $pokedexService;

    public function __construct(PokedexService $pokedexService) {
        $this->pokedexService = $pokedexService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokedex = $this->pokedexService->getPokedex();
        return PokedexResource::collection($pokedex);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pokemon = $this->pokedexService->createNewPokemon($request->validated());
        return new PokedexResource($pokemon);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokemon -> $this->pokedexService->getPokemon($id);
        return new PokedexResource($pokemon);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdatePokemon $request, $id)
    {
        $this->pokedexService->updatePokemon($id, $request->validated());
        return response()->json(['updated' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->pokedexService->deletePokemon($id);
        return response()->json([], 204);
    }
}
