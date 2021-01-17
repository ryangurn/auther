<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            User
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Client
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Scopes
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Revoked
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Expires
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @if(!$codes->isEmpty())
                        @foreach($codes as $code)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @livewire('user-table-cell', ['user' => \App\Models\User::where('id', '=', $code->user_id)->first(), 'show_email' => true])
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @livewire('client-table-cell', ['client' => $code->client])
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @livewire('scopes-table-cell', ['items' => json_decode($code->scopes)])
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @livewire('revoked-table-cell', ['revoked' => $code->revoked])
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    @livewire('timestamp-cell', ['timestamp' => $code->expires_at])
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('auth.auth_codes_revoke', $code->id) }}" class="text-red-600 hover:text-red-900">Revoke</a>
                                    <a href="{{ route('auth.auth_codes_show', $code->id) }}" class="text-indigo-600 hover:text-indigo-900">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="6" class="px-6 py-4 whitespace-nowrap">
                            No Auth Codes
                        </td>
                    </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
