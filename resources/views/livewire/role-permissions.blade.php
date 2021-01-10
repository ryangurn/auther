@if ($role->permissions != null)
<div class="p-6 pb-12 sm:px-20 bg-white border-b border-gray-200">
    <div class="mt-8 text-2xl">
        assigned permissions
    </div>

    <div class="mt-6 text-gray-500">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div>
                <dl>
                    @foreach($role->permissions as $permission)
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            {{ $permission->name }}
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $permission->description }}
                        </dd>
                    </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>
</div>
@endif
