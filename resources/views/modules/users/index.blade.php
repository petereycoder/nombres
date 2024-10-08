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
                                    <form action="" method="POST">
                                        <a href="{{ route('show', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-list" aria-hidden="true"></i> Mostrar
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Editar
                                        </a>
                                        <button class="btn btn-danger">
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
