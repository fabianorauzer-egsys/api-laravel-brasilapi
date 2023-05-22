<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CEPService
{
    private $baseUrl = 'https://brasilapi.com.br/api/cep/v1/';

    public function search(string $cep)
    {
        return Http::get($this->baseUrl . $cep)->json();
    }
}