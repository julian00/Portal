<div>
    <x-jet-dropdown width="96">
        {{--slot del logo--}}
        <x-slot name="trigger">
            <span class="relative inline-block cursor-pointer">
                <x-bell/>
                <span class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
            </span>
        </x-slot>

        <x-slot name="content">
            <div>
                <p class="text-center">Sin notificaciones nuevas</p>
            </div>
        </x-slot>
    </x-jet-dropdown>
</div>
