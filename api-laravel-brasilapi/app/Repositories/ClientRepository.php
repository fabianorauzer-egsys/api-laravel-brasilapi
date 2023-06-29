<?php

namespace App\Repositories;

use App\Models\Client;
use App\Repositories\Interfaces\ClientRepositoryInterface;
use Exception;

class ClientRepository implements ClientRepositoryInterface
{
    public function create(array $data): Client
    {
        try {
            return Client::create($data);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function all()
    {
        try {
            return Client::all();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function find(int $id): ?Client
    {
        try {
            return Client::find($id);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function update(Client $client, array $data): bool
    {
        try {
            return $client->update($data);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
