<div>
    <div class="text-2xl">
        user information
    </div>

    <div class="mt-6 text-gray-500">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div>
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $user->name }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            email
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $user->email }}
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-{{ $user->email_verified_at == null ? "red" : "green" }}-100 text-{{ $user->email_verified_at == null ? "red" : "green" }}-800">
                              {{ $user->email_verified_at == null ? "not verified" : "verified" }}
                            </span>
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            two factor
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-{{ $user->two_factor_secret == null ? "red" : "green" }}-100 text-{{ $user->two_factor_secret == null ? "red" : "green" }}-800">
                              {{ $user->two_factor_secret == null ? "disabled" : "enabled" }}
                            </span>
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            phone
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $user->phone ? $user->phone : 'no phone' }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $user->address ? $user->address : 'no address' }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>


    </div>
</div>
