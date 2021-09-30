<div>
    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <x-table>
            <div class="px-6 py-4 flex items-center">
                @livewire('ownershipType.create')
            </div>

            {{--muestro los datos--}}
            @if ($ownershipTypes->count())
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="relative cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tipo
                            </th>
                            <th scope="col" class="w-2 px-6 py-3" colspan="2">
                                <span class="sr-only">Editar</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach (ownershipTypes as $item)
                            <tr>
                                <td class=px-6 ý-4>
                                    <div class="text-m text-gray-900">{{$item->type}}</div>
                                </td>

                                <td class="py-4 text-right text-sm font-medium">
                                    <a class="btn btn-blue" wire:click="edit({{$item}})">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>

                                <td class="py-4 text-right text-sm font-medium">
                                    <a class="btn btn-red space-x-7" wire:click="destroy({{$item}})">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4">
                    No existe ningun regitro conincidente con la busqueda
                </div>
            @endif
        </x-table>
    </div>

    {{--modal edit--}}
    <x-jet-dialog-modal wire:modal="open_edit">
        <x-slot name='title'>
            EDITAR
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="Tipo"/>
                <x-jet-input wire:model="type" type="text" class="w-full"></x-jet-input>
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('open_edit',false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-secondary-button class="button-add disabled:opacity-25" wire:click="update" wire:loading.attr="disabled" wire:target="save">
                Actualizar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
