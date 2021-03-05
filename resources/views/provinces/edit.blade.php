@extends('layouts.app')

@section('content')

    <h1>Editar Provincia</h1>

    <form action="{{ route('provinces.update', $province) }}" method="post">
        @csrf
        @method('PUT')

        <label class="m-4">
            Nombre: 
            <input type="text" class="border-solid border-1 border-light-blue-500 px-2" name="province" value="{{ old('province', $province->province) }}">
        </label>
        @error('province')
            <small class="text-red-500 mt-2" >{{ $message }}</small>
        @enderror

        <br>
        <br>
        <button class="button-add" type="submit">Guardar</button>
        <button class="button-delete" type="button">Cancelar</button>
    </form>
    
@endsection