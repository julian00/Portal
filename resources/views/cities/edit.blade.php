<x-app-layout>
    @section('content')
        <h1>Editar Ciudad</h1>
        <div class="bg-white rounded-g shadow overflow-hidden mx-auto max-w-2xl">
            <form action="{{ route('cities.update',$city) }}" method="post">
                @csrf
                <div class="m-4">
                    <label class="form-label" for="province">
                        Nombre:
                        <input type="text" class="form-input" name="city" value="{{ old('city')}}" placeholder="Ingrese ciudad">
                    </label>
                    @error('city')
                        <small class="text-red-500 mt-2" >*{{ $message }}</small>
                    @enderror
                </div>

                <div class="m-4">
                    <label class="form-label" for="id_province">
                        Provincia: 
                        <select name="id_province" id="id_province">
                            @foreach ($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->province }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <div class="grid grid-cols-2">
                    <button class="button-add" type="submit">Guardar</button>
                    <button class="button-delete">Cancelar</button>
                </div>
            </form>
        </div>
    @endsection
</x-app-layout>