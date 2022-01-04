<div>
    <div class="w-56">
        <x-jet-label class="mt-1" value="Provincia"/>
        <Select wire:model="province_id" class="form-input">
            <option value="0" selected disabled>Seleccione una provincia</option>
            @foreach ($provinces as $item)
                <option value="{{$item->id}}">{{$item->province}}</option>
            @endforeach
        </Select>
    </div>
</div>
