<div class="card">
    <div class="card-header"> 
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <input wire:model="cedula" class="form-control" type="text" placeholder="Cédula">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input wire:model="nombre" class="form-control" type="text" placeholder="Nombre">
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>C&eacute;dula</th>
                        <th>Asistencia</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invitados as $key => $invitado)
                        <tr>
                            <td>{{ $key+=1 }}</td>
                            <td>{{ $invitado->nombre }}</td>
                            <td>{{ $invitado->documento }}</>
                            <td>
                                <button type="button" class="btn btn-success" wire:loading.attr="disabled" wire:click="registrar({{ $invitado->id }})">Registrar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-body-secondary">
        @php
            $invitadosArray = $invitados->toArray();
            $registros_page = sizeof($invitadosArray['data']);
            $total = $invitadosArray['total'];
        @endphp
        <div class="d-flex pt-0">{{ $invitados->links() }}</div>
        <div class="d-flex text-xs text-secondary mb-0">Mostrando {{ $registros_page }} registros de {{ $total }}.</div>
    </div>
</div>
