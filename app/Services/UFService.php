<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UFService
{
    
    public function getUFValue()
    {
        
        $response = Http::get('https://mindicador.cl/api/uf');

        
        if ($response->successful()) {
            
            $data = $response->json();

            
            if (isset($data['serie']) && count($data['serie']) > 0) {
            
                return $data['serie'][0]['valor'] ?? null; 
            } else {
                
                return null;
            }
        } else {
            
            return null;
        }
    }
}
