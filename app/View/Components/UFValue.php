<?php

// app/View/Components/UFValue.php

namespace App\View\Components;

use App\Services\UFService;
use Illuminate\View\Component;

class UFValue extends Component
{
    public $uf;

    public function __construct(UFService $ufService)
    {
        
        $this->uf = $ufService->getUFValue();  
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        return view('components.uf-value', ['ufValue' => $this->uf]); 
    }
}


