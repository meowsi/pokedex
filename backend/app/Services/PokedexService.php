<?php

namespace App\Services;

class PokedexService {
    protected $repository;

    public function __construct(PokedexRepository $pokedexRepository) {
        $this->repository = $pokedexRepository;
    }

    public function getPokedex() {
        return $this->repository->getAll();
    }

    public function createNewPokemon(array $data) {
        return $this->repository->createNew($data);
    }

    public function getPokemon(string $identify) {
        return $this->repository->getPokemon($identify);
    }

    public function deletePokemon(string $identify, array $data) {
        return $this->repository->delete($identify, $data);
    }
}
