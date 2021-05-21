<div>
    <a class="button-edit" wire:click="$set('open',true)">
        <i class="fas fa-edit"></i>
    </a>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name='title'>
            EDITAR
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="Tipo de operacion"/>
                <x-jet-input wire:model="operation.operation" type="text" class="w-full" />
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-secondary-button class="button-add disabled:opacity-25" wire:click="save" wire:loading.attr="disabled" wire:target="save">
                Editar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal> 
</div>
