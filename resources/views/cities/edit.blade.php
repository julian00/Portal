<x-app-layout>
    @section('content')
        <h1>Editar Ciudad</h1>
        <div class="bg-white rounded-g shadow overflow-hidden mx-auto max-w-2xl">
            <form action="{{ route('cities.update',$city) }}" method="post">
                @csrf
                @method('PUT')
                     
                <div class="m-4">
                    <label class="form-label" for="id_province">
                        Provincia: 
                        <select name="id_province" id="id_province">
                            @foreach ($provinces as $province)
                                @if ($province->id == $city->id_province)
                                    <option selected="select" value="{{ $province->id }}">{{ $province->province }}</option>
                                @else
                                    <option value="{{ $province->id }}">{{ $province->province }}</option>
                                @endif
                            @endforeach
                        </select>
                    </label>
                </div>

                <div class="m-4">
                    <label class="form-label" for="city">
                        Nombre:
                        <input type="text" class="form-input" name="city" value="{{ old('city', $city->city)}}" placeholder="Ingrese ciudad">
                    </label>
                    @error('city')
                        <small class="text-red-500 mt-2" >*{{ $message }}</small>
                    @enderror
                </div>

                <div class="grid grid-cols-2">
                    <button class="button-add" type="submit">Guardar</button>
                    <a class="button-cancel" href="{{ route('cities.index') }}">Cancelar</a>
                </div>
            </form>
        </div>
    @endsection
</x-app-layout>