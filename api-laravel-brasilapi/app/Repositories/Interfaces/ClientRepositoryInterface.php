<?php

namespace App\Repositories\Interfaces;

use App\Models\Client;

interface ClientRepositoryInterface
{
    public function create(array $data): Client;
    
    public function all();

    public function find(int $id): ?Client;

    public function update(Client $client, array $data): bool;
}