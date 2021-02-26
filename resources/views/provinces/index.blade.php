@extends('layouts.app')

@section('title',"Portal inmobiliario - Agregar Barrios")

@section('content')
    
    <div class="p-4">
        <livewire:province.index-component/>
        @livewire('province.index-component');
    </div>

@endsection