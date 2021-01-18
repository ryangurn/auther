<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">update setting: {{ $setting->key }}</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            here you can update the value for a setting, upon saving the changes will be <b>instantly</b> applied and utilized by the rest of auther.
                        </p>
                        <p class="mt-1 text-xs text-red-600">
                            it is important to provide values that are correct for the specific setting you are updating. <b>improperly providing values will <u>definitely</u> break the system.</b>
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

                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="value" class="block text-sm font-medium text-gray-700">value <span class="text-red-700">*</span></label>
                                        <textarea wire:model="value" type="text" name="value" class="@error('value') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2"></textarea>
                                        @error('value') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="description" class="block text-sm font-medium text-gray-700">description <span class="text-red-700">*</span></label>
                                        <textarea wire:model="description" type="text" name="description" class="@error('description') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2"></textarea>
                                        @error('description') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <x-jet-button type="submit" class="text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500" wire:loading.attr="disabled">
                                    {{ __('update') }}
                                </x-jet-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
