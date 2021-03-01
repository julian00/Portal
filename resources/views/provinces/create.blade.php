@extends('layouts.app')

@section('content')

    <h1>Nueva Provincia</h1>

    <form action="{{ route('provinces.store') }}" method="post">
        @csrf

        <label class="m-4">
            Nombre: 
            <input type="text" class="border-solid border-1 border-light-blue-500 px-2" name="province" value="{{ old('province') }}">
        </label>
        @error('province')
            <small class="text-red-500 mt-2" >*{{ $message }}</small>
        @enderror

        <br>
        <br>
        <button class="button-add" type="submit">Guardar</button>
        <button class="button-delete">Cancelar</button>
    </form>
    
@endsection