@extends('layouts.main')

<div class="container mt-4">
    <h2>Mostrar la información de: {{ $user->name }} </h2>
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                  <table class="table table-sm text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    </tbody>
                  </table>
                  <a href="{{ route('index') }}" class="btn btn-secondary mt-4">Cancelar</a>
                </div>
            </div>

        </div>
    </div>
</div>
