<div>
    <x-jet-danger-button wire:click="$set('open',true)">
        Nueva operacion
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Crear nueva operacion
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="operacion"/>
                <x-jet-input type="text" class="w-full" wire:model.defer="operation"/>
                <!--para verifiacar en iempo real tengo que sarcar el .defer-->
                <!--x-jet-input type="text" class="w-full" wire:model="title"/-->

                <x-jet-input-error for="oeration" />
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">
                Crear
            </x-jet-danger-button>

            <span wire:loading wire:target="save">Cargando...</span>
        </x-slot>
    </x-jet-dialog-modal>
</div>
