<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Invitado;
use Livewire\WithPagination;

class MainComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    // Models
    public $nombre, $cedula;

    // Useful vars

    public function render()
    {   
        $filters = [];
        if ($this->nombre){
            array_push($filters, ['nombre', 'LIKE', "%{$this->nombre}%"]);
        }

        if ($this->cedula){
            array_push($filters, ['documento', 'LIKE', "%{$this->cedula}%"]);
        }

        $invitados = Invitado::select('id', 'nombre', 'documento')->where($filters)->whereNull('asistencia')->paginate(15);
        return view('livewire.main-component', ['invitados' => $invitados]);
    }

    public function registrar($id){
        $invitado = Invitado::find($id);
        $invitado->asistencia = 1;
 
        $invitado->save();
        return redirect()->back();
    }
}
 