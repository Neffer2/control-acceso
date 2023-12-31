<div class="sorteo-container">
    <div class="logo my-4">
        <img src="https://www.bancodeoccidente.com.co/portaltransaccional/logo-03-occidente-01-occidente-01-regular.aa547ca6b936469689ea.svg" alt="Logo bnaco de occidente">
    </div>
    <div class="sorteo-content mb-4">
        <h5 class="bold text-center mb-2">BIENVENIDO AL SORTEO</h5>
        <p class="px-5">
            Oprime el bot&oacute;n para inicar el sorteo entre los invitados presentes. 
        </p> 

        <div class="spinners mb-4" wire:loading>
            <div class="spinner-grow text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        @if ($showGanador) 
            <div class="ganador mb-4">
                <div class="pyro" style="position: absolute; right: 50%">
                    <div class="before"></div>
                    <div class="after"></div>
                </div>
                <div class="form-group">
                    <label for="" class="bold">Felicidades!!</label>
                    <input type="text" class="form-control" value="{{ $ganador->nombre }} - {{ $ganador->documento }}">
                </div>
            </div>
        @endif
        
        <button class="btn btn-primary" wire:click="sorteo" wire:loading.attr="disabled">INICIAR</button>
    </div>
    <div class="footer">
        <img src="https://www.anif.com.co/wp-content/uploads/2020/11/logo-fiduoccidente.png" alt="">
    </div>    
</div>
