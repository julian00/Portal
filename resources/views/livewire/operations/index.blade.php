<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <x-table>
            <div class="px-6 py-4 flex items-center">
                @livewire('operations.create')
            </div>
            {{--muestro los datos--}}
            @if ($operations->count())   
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="relative cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Operacion
                            </th>
                            <th scope="col" class="w-2 px-6 py-3" colspan="2">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($operations as $operation)   
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="text-m text-gray-900">{{ $operation->operation }}</div>
                                </td>

                                <td class=" py-4 text-right text-sm font-medium">
                                    @livewire('operations.edit', ['operation' => $operation], key($operation->id))
                                    {{--<a class="btn btn-blue" wire:click="edit({{$operation}}">
                                        <i class="fas fa-edit"></i>
                                    </a>--}}
                                </td>
                                <td class="py-4 text-right text-sm font-medium">
                                    <a class="btn btn-red space-x-7" wire:click="destroy({{ $operation }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    {{--<button wire:click="destroy({{ $operation }})" class="button-delete" type="submit">Eliminar</button>--}}
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
