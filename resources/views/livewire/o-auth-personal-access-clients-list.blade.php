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
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Provider
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Revoked
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @if(!$pacs->isEmpty())
                        @foreach($pacs as $pac)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($pac->client->user_id != null)
                                        @livewire('user-table-cell', ['user' => \App\Models\User::where('id', '=', $pac->client->user_id)->first(), 'show_email' => true])
                                    @else
                                        No User
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @livewire('client-table-cell', ['client' => $pac->client])
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @livewire('provider-table-cell', ['provider' => $pac->client->provider])
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @livewire('revoked-table-cell', ['revoked' => $pac->client->revoked])
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('auth.clients_revoke', $pac->client->id) }}" class="text-red-600 hover:text-red-900">Revoke</a>
                                    <a href="{{ route('auth.clients_show', $pac->client->id) }}" class="text-indigo-600 hover:text-indigo-900">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">None</div>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
