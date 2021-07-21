<div>
    <x-jet-danger-button class="button-add" wire:click="$set('open',true)">
        Nueva Ciudad
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Crear nueva ciudad
        </x-slot>

        <x-slot name='content'>
            <div class="mb-4">
                <x-jet-label value="city"/>
                <x-jet-input type="text" class="w-full" wire:model.defer="city"/>
                <x-jet-input-error for="city"/>

                <x-jet-label value="Id_province"/>
                <select name="province" id="province">
                    {{--mustra error en el foreach
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->province }}</option>
                    @endforeach--}}
                </select>
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-jet-danger-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-danger-button>
            <x-jet-secondary-button class="button-add" wire:click="save" wire:loading.attr="disabled" wire:target="save" class="disabled:opacity-25">
                Crear
            </x-jet-secondary-button>

            <span wire:loading wire:target>Cargando...</span>
        </x-slot>
    </x-jet-dialog-modal>
</div>

