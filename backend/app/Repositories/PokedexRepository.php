<?php

namespace App\Repositories;
use App\Models\Pokedex;

class PokedexRepository {
    protected $entity;

    public function __construct(Pokedex $pokedex) {
        $this->entity = $pokedex;
    }

    public function getAll() {
        return $this->entity->all();
    }

    public function getPokemon(string $identify) {
        return $this->entity->findOrFail($identify);
    }

    public function createNew(array $data) {
        return $this->entity->create($data);
    }

    public function update(string $identify, array $data) {
        $pokemon = $this->getPokemon($identify);
        return $pokemon->update($data);
    }

    public function delete(string $identify) {
        $pokemon = $this->getPokemon($identify);
        return $pokemon->delete();
    }
}
