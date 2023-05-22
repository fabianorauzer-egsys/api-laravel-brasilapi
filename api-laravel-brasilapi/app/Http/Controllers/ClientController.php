<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ClientRepository;

class ClientController extends Controller
{
    private $clientRepository;

    public function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function __invoke(Request $request, $id = null)
    {
        switch ($request->method()) {
            case 'POST':
                $validated = $request->validate([
                    'name' => 'required|max:255',
                    'email' => 'required|email|unique:clients',
                    'phone' => 'required|unique:clients'
                ]);

                $client = $this->clientRepository->create($validated);

                return response()->json($client, 201);

            case 'GET':
                if ($id) {
                    $client = $this->clientRepository->find($id);

                    if (!$client) {
                        return response()->json(['message' => 'Client not found'], 404);
                    }

                    return response()->json($client);
                } else {
                    $clients = $this->clientRepository->all();

                    return response()->json($clients);
                }

            case 'PATCH':
                if ($id) {
                    $validated = $request->validate([
                        'name' => 'max:255',
                        'email' => 'email|unique:clients,email,'.$id,
                        'phone' => 'unique:clients,phone,'.$id
                    ]);

                    $client = $this->clientRepository->find($id);

                    if (!$client) {
                        return response()->json(['message' => 'Client not found'], 404);
                    }

                    $this->clientRepository->update($client, $validated);

                    return response()->json($client);
                }

                return response()->json(['message' => 'No client id provided for update'], 400);

            default:
                return response()->json(['message' => 'Method not allowed'], 405);
        }
    }
}