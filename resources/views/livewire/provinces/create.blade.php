<div>
    <x-jet-danger-button class="button-add" wire:click="$set('open',true)">
        Nueva Provincia
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Agregar nueva provincia
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="provincia"/>
                <x-jet-input type="text" class="w-full" wire:model.defer="province"/>
                <x-jet-input-error for="province"/>
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-jet-danger-button wire:click="$set('open',flase)">
                Cancelar
            </x-jet-danger-button>
            <x-jet-secondary-button class="button-add" wire:click="save" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">
                Crear
            </x-jet-secondary-button>

            <span wire:loading wire:target>Cargando...</span>
        </x-slot>
    </x-jet-dialog-modal>
</div>

