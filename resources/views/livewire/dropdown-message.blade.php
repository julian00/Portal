<div>
    <x-jet-dropdown>
        <x-slot name="trigger">
            <span class="relative inline-block cursor-pointer">
                <x-message />
                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">99</span>
            </span>
        </x-slot>
        <x-slot name="content">
            <div>
                <p class="text-center">No hay mensajes</p>
            </div>
        </x-slot>
    </x-jet-dropdown>
</div>
