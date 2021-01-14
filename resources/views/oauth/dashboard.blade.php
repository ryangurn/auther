<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('OAuth Dashboard') }}
    </h2>
  </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <span class="text-2xl">Statistics</span>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('o-auth-dashboard-statistics')
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-8">
        <span class="text-2xl">Clients</span>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @livewire('o-auth-clients-table')
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <dl class="space-y-0 grid grid-cols-2 gap-x-8 gap-y-10">
            @livewire('o-auth-tokens-table')
            @livewire('o-auth-codes-table')
        </dl>
    </div>

</x-app-layout>
