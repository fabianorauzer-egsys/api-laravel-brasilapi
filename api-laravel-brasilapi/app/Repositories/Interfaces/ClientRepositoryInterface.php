<?php

namespace App\Repositories\Interfaces;

use App\Models\Client;

interface ClientRepositoryInterface
{
    /**
     * Create a new Client.
     *
     * @param array $data
     * @return Client
     * @throws Exception
     */
    public function createClient(array $data): Client;

    /**
     * Get all Clients.
     *
     * @return \Illuminate\Database\Eloquent\Collection|Client[]
     * @throws Exception
     */
    public function getAllClients();

    /**
     * Find a Client by ID.
     *
     * @param int $id
     * @return Client|null
     * @throws Exception
     */
    public function findClientById(int $id): ?Client;

    /**
     * Update a Client.
     *
     * @param Client $client
     * @param array $data
     * @return bool
     * @throws Exception
     */
    public function updateClient(Client $client, array $data): bool;
}
