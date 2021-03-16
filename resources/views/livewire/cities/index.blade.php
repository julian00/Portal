<div>
    <h1>Lista de ciudades</h1>
    <div>
        <a class="m-5 bg-green-500" href="{{ route('cities.create') }}">Agregar ciudad</a>
    </div>
    <div class="m-4">
        <table class="bg-white rounded-lg shadow overflow-hidden mx-auto">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr class="text-xs font-medium text-gray-500 uppercase">
                    <th class="border px-4 py-2">Ciudad</th>
                    <th class="border px-4 py-2"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($cities as $city)
                    <tr>
                        <td class="border px-4 py-2">{{ $city->city }}</td>
                        <td class="border px-4 py-2">
                            <button class="button-edit">Editar</button>
                            <button class="button-delete">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
