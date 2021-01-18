<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">revoke refresh token</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            here you can revoke a refresh token, effectively meaning that the specific token will work to authenticate.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <x-jet-confirms-password wire:then="save">
                        {{ csrf_field() }}
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    @if (session()->has('saved'))
                                        <div class="mb-4 col-span-6 sm:col-span-4">
                                            <span class="mb-4 pt-2 pb-2 pl-4 pr-4 rounded-full text-green-700 bg-green-100">{{ strtolower(session('saved')) }}</span>
                                        </div>
                                    @endif
                                    <div class="mb-4 col-span-6 sm:col-span-6">
                                        <span class="text-red-600">are you sure you would like to revoke the token: <b>{{ $token->accessToken->name }}</b>, this action is permanent and can cause roll on effects throughout the various micro-services that are connected.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <x-jet-button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" wire:loading.attr="disabled">
                                    {{ __('revoke') }}
                                </x-jet-button>
                            </div>
                        </div>
                    </x-jet-confirms-password>
                </div>
            </div>
        </div>


    </div>
</div>
