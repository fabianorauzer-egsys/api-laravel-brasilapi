<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CEPService;

class CEPController extends Controller
{
    private $cepService;

    public function __construct(CEPService $cepService)
    {
        $this->cepService = $cepService;
    }

    public function __invoke(Request $request, string $cep)
    {
        $data = $this->cepService->search($cep);

        return response()->json($data);
    }
}