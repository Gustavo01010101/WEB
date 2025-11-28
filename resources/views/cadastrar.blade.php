<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form action="/cadastrar" method="post">
                    @csrf <!--Token de formulário-->

   <!-- Nome -->
<div>
    <x-input-label for="nome" :value="__('Nome')" />
    <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus />
    <x-input-error :messages="$errors->get('nome')" class="mt-2" />
</div>

<!-- Data -->
<div class="mt-4">
    <x-input-label for="data" :value="__('Data')" />
    <x-text-input id="data" class="block mt-1 w-full" type="date" name="data" :value="old('data')" required />
    <x-input-error :messages="$errors->get('data')" class="mt-2" />
</div>

<!-- É Pirata -->
<div class="mt-4">
    <x-input-label for="e_pirata" :value="__('É Pirata?')" />
    <select id="e_pirata" name="e_pirata" class="block mt-1 w-full border-gray-300 rounded-md">
        <option value="1">Sim</option>
        <option value="0">Não</option>
    </select>
    <x-input-error :messages="$errors->get('e_pirata')" class="mt-2" />
</div>

<!-- Valor da Recompensa -->
<div class="mt-4">
    <x-input-label for="valor_recompensa" :value="__('Valor da Recompensa')" />
    <x-text-input id="valor_recompensa" class="block mt-1 w-full" type="number" step="0.01" name="valor_recompensa" :value="old('valor_recompensa')" required />
    <x-input-error :messages="$errors->get('valor_recompensa')" class="mt-2" />
</div>

<!-- Idade -->
<div class="mt-4">
    <x-input-label for="idade" :value="__('Idade')" />
    <x-text-input id="idade" class="block mt-1 w-full" type="number" name="idade" :value="old('idade')" required />
    <x-input-error :messages="$errors->get('idade')" class="mt-2" />
</div>
<div class="flex items-center justify-end mt-4">
    <x-primary-button class="ms-4">
        {{ __('Cadastrar') }}
    </x-primary-button>
</div>
</form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
