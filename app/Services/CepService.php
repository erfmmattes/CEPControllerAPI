<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CepService
{
    public function getCepsData(array $cepsArray)
    {
        $result = [];

        foreach ($cepsArray as $cep) {
            $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");
            
            if ($response->successful()) {
                $data = $response->json();
                $data['label'] = "{$data['logradouro']}, {$data['localidade']}";
                $result[] = $data;
            }
        }

        return $result;
    }
}