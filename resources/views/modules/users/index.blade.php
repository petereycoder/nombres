@extends('layouts.main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h2>Crud Laravel 11</h2>
                <div class="card">
                    <div class="card-body">
                      <a href="{{ route('create') }}" class="btn btn-primary">
                        <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nombre
                      </a>
                      <hr>
                      <table class="table table-sm table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $user as $item )
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <form id="frm_{{$item->id}}" action="{{ route('destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('show', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-list" aria-hidden="true"></i> Mostrar
                                        </a>
                                        <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Editar
                                        </a>
                                        <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $item->id }})">
                                            <i class="fa fa-trash" aria-hidden="true"></i> Borrar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td>No hay datos en la tabla</td>
                                </tr>
                            @endforelse
                        </tbody>
                      </table>
                      <div class="d-flex justify-content-end">
                        {{ $user->links() }}
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @if ($msj = Session::get('success'))
        <script>
            Swal.fire({
                title: "Excelente",
                text: "{{ $msj }}",
                icon: "success"
            });
        </script>
    @endif
@endsection
<script>
    function confirmDelete(elementoId) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Si se confirma, se envía el formulario
                document.getElementById('frm_' + elementoId).submit();
            }
        });
    }
</script>
