<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            In Role
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
						@if(!$permissions->isEmpty())
							@foreach($permissions as $permission)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        <a href="" class="hover:underline">{{ $permission->name }}</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm whitespace-nowrap">
							{{ $permission->description }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
							@if(!$permission->roles->isEmpty())
								@foreach($permission->roles as $role)
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-{{ ($role->id % 2) ? 'green' : 'purple' }}-100 text-{{ ($role->id % 2) ? 'green' : 'purple' }}-800">
                              {{ $role->name }}
                            </span>
								@endforeach
							@endif
                        </td>
                    </tr>
							@endforeach
						@endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
