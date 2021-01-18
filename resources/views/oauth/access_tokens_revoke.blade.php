<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if ($token->name != null)
            {{ __('Revoke Access Token: '. $token->name) }}
            @else
            {{ __('Revoke Access Token') }}
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('o-auth-access-token-revoke', ['token' => $token])
        </div>
    </div>
</x-app-layout>
