@extends('layouts.app')

@section('content')

    <h1>Editar Provincia</h1>

    <div class="bg-white rounded-g shadow overflow-hidden mx-auto max-w-2xl">
        <form action="{{ route('provinces.update', $province) }}" method="post">
            @csrf
            @method('PUT')

            <div class="m-4">
                <label class="form-label" for="province">
                    Nombre: 
                    <input type="text" class="border-solid border-1 border-light-blue-500 px-2" name="province" value="{{ old('province', $province->province) }}">
                </label>
                @error('province')
                    <small class="text-red-500 mt-2" >{{ $message }}</small>
                @enderror
            </div>

            <div class="grid grid-cols-2">
                <button class="button-add" type="submit">Guardar</button>
                <a class="button-cancel" href="{{ route('provinces.index') }}">Cancelar</a>
            </div>
        </form>
    </div>

@endsection