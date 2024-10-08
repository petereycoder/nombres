@extends('layouts.main')

@section('contenido')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h2>Crud Laravel 11</h2>
                <div class="card">
                    <div class="card-body">
                      <a href="{{ route('create') }}" class="btn btn-primary">Agregar</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
