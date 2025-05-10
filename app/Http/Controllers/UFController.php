<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class UfController extends Controller
{
    public function mostrarUf()
    {
        $response = Http::get('https://mindicador.cl/api/uf');

        if ($response->successful()) {
            $data = $response->json();
            $uf = $data['serie'][0]['valor'] ?? 'No disponible';
        } else {
            $uf = 'No disponible';
        }

        return view('uf-value', compact('uf'));
    }
}
