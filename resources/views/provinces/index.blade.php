@extends('layouts.app')

@section('title',"Portal inmobiliario - Provincias")

@section('content')
    
    <h1>Lista de provincias</h1>

    <a class="m-5" href="{{ route('provinces.create') }}">Nueva provincia</a>
    
    <table class="table-auto bg-white m-4">
        <thead>
            <tr>
                <th class="border px-4 py-2">Provincia</th>
                <th class="border px-4 py-2" colspan="2">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($provinces as $province) 
                <tr class="border px-4 py-2">
                    <td class="border px-4 py-2">{{ $province->province }}</td>
                    <td class="px-4 py-2">
                        <a href="{{route('provinces.edit',$province)}}" class="button-edit">Editar</a>
                    </td>
                    <td class="px-4 py-2">
                        <form action="{{ route('provinces.destroy', $province) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="button-delete" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    {{ $provinces->links() }}

@endsection