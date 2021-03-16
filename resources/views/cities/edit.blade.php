<x-app-layout>
    @section('content')
        <h1>Editar Ciudad</h1>

        <form action="{{ route('cities.update',$city) }}" method="post">
            @csrf
            @method('PUT')

            <label for="m-4">
                Nombre:
                <input type="text" class="border-solid border-1 border-light-blue-500 px-2" name="city" value="{{ old('city')}}">
            </label>
            @error('city')
                <small class="text-red-500 mt-2" >*{{ $message }}</small>
            @enderror
            <br><br>
            <button class="button-add" type="submit">Guardar</button>
            <button class="button-delete">Cancelar</button>
        </form>
    @endsection
</x-app-layout>