<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show User: '). $user->name }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('user-show', ['user' => $user])
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-8">
        <dl class="space-y-0 grid grid-cols-3 gap-x-8 gap-y-10">
            @livewire('user-show-roles', ['user' => $user])
            @livewire('user-show-permissions', ['user' => $user])
        </dl>
    </div>
</x-app-layout>
