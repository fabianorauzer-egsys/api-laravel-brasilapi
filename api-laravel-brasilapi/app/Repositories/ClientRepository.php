<?php

namespace App\Repositories;

use App\Models\Client;

class ClientRepository
{
    public function create(array $data): Client
    {
        return Client::create($data);
    }

    public function all()
    {
        return Client::all();
    }

    public function find(int $id): ?Client
    {
        return Client::find($id);
    }

    public function update(Client $client, array $data): bool
    {
        return $client->update($data);
    }
}
