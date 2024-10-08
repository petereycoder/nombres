@extends('layouts.main')

<div class="container mt-4">
    <h2>Actualizar usuario</h2>
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                  <form action="{{ route('update', $user->id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="name">Escribe el nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                    <label for="email">Escribe el email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                    <label for="email">Escribe el password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <button class="btn btn-warning mt-3">Actualizar</button>
                    <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                  </form>
                </div>
            </div>

        </div>
    </div>
</div>
