<?php

namespace App\Http\Livewire;
 
use Livewire\Component;
use App\Models\Invitado;

class Sorteo extends Component
{
    public $ganador, $showGanador = false;

    public function render()
    { 
        return view('livewire.sorteo');
    }

    public function mount(){
        
    }
    
    public function sorteo(){
        sleep(3);
        $this->ganador = Invitado::where('asistencia', 1)->inRandomOrder()->first();
        $this->showGanador = true;
    }
}
