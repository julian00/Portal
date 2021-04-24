<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <x-table>
            <div class="px-6 py-4 flex items-center">
                @livewire('operations.create')
            </div>
            @if ($operations->count())   
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="w-24 cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Operacion
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($operations as $operation)   
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">{{ $operation->operation }}</div>
                                </td>

                                <td class="px-6 py-4 text-right text-sm font-medium">
                                    <a href="#" class="button-edit">Editar</a>
                                    <button wire:click="destroy({{ $operation }})" class="button-delete" type="submit">Eliminar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4">
                    No existe ningun registro coincidente con la busqueda
                </div>
            @endif
        </x-table>
    </div>
</div>
