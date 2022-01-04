<x-app-layout>
    @section('content')
        <div class="px-6 py-4 flex items-center">
            @livewire('cities.create')
        </div>
        <div class="flex w-full">
            <div class="pl-4 sm:pl-6 lg:pl-8">
                @livewire('select-province')
            </div>
            <div class="w-full">
                @livewire('cities.index')
            </div>
        </div>
    @endsection

</x-app-layout>