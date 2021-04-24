<div>
    <x-jet-danger-button class="button-add" wire:click="$set('open',true)">
        Nueva operacion
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Crear nueva operacion
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="operation"/>
                <x-jet-input type="text" class="w-full" wire:model.defer="operation"/>

                <x-jet-input-error for="operation" />
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-jet-danger-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-danger-button>

            <x-jet-secondary-button class="button-add" wire:click="save" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">
                Crear
            </x-jet-secondary-button>

            <span wire:loading wire:target="save">Cargando...</span>
        </x-slot>
    </x-jet-dialog-modal>
</div>
