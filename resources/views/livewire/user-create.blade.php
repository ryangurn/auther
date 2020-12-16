<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 space-y-8">
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">create a user</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        here you can create a simple user, you can do more later but this is the start.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form wire:submit.prevent="save">
                    {{ csrf_field() }}
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                @if (session()->has('saved'))
                                    <div class="mb-4 col-span-6 sm:col-span-4">
                                        <span class="mb-4 pt-2 pb-2 pl-4 pr-4 rounded-full text-green-700 bg-green-100">{{ strtolower(session('saved')) }}</span>
                                    </div>
                                @endif

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700">name <span class="text-red-700">*</span></label>
                                    <input wire:model="name" type="text" name="name" class="@error('name') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                    @error('name') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-sm font-medium text-gray-700">email <span class="text-red-700">*</span></label>
                                    <input wire:model="email" type="email" name="email" class="@error('email') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                    @error('email') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-green-700 bg-green-100">password will be auto generated and emailed to the user.</span>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-orange-700 bg-orange-100">roles & permissions can be added via the user specific update form.</span>
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-purple-700 bg-purple-100">the default role (as specified in settings) will be applied to the user.</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <x-jet-button type="submit" class="text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" wire:loading.attr="disabled">
                                {{ __('create') }}
                            </x-jet-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
