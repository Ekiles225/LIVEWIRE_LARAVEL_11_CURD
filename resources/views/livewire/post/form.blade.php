<div class="space-y-6">
    
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input wire:model="form.nombre" id="nombre" name="nombre" type="text" class="mt-1 block w-full" autocomplete="nombre" placeholder="Nombre"/>
        @error('form.nombre')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="apellido" :value="__('Apellido')"/>
        <x-text-input wire:model="form.apellido" id="apellido" name="apellido" type="text" class="mt-1 block w-full" autocomplete="apellido" placeholder="Apellido"/>
        @error('form.apellido')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="edad" :value="__('Edad')"/>
        <x-text-input wire:model="form.edad" id="edad" name="edad" type="text" class="mt-1 block w-full" autocomplete="edad" placeholder="Edad"/>
        @error('form.edad')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="cedula" :value="__('Cedula')"/>
        <x-text-input wire:model="form.cedula" id="cedula" name="cedula" type="text" class="mt-1 block w-full" autocomplete="cedula" placeholder="Cedula"/>
        @error('form.cedula')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>