<?php

namespace App\Repositories;

use App\Models\Client;
use App\Repositories\Interfaces\ClientRepositoryInterface;
use Exception;

class ClientRepository implements ClientRepositoryInterface
{
    public function createClient(array $data): Client
    {
        try {
            return Client::create($data);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getAllClients()
    {
        try {
            return Client::all();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function findClientById(int $id): ?Client
    {
        try {
            return Client::find($id);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function updateClient(Client $client, array $data): bool
    {
        try {
            return $client->update($data);
        } catch (Exception $e) {
            throw $e;
        }
    }
}