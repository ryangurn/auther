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
                            Name
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
                    @if(!$access_tokens->isEmpty())
                        @foreach($access_tokens as $token)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @livewire('user-table-cell', ['user' => $token->user, 'show_email' => true])
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @livewire('client-table-cell', ['client' => $token->client, 'link' => '#'])
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ strtolower($token->name) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-{{ $token->revoked ? 'red' : 'green' }}-100 text-{{ $token->revoked ? 'red' : 'green' }}-800">
                                {{ $token->revoked ? 'revoked' : 'valid' }}
                            </span>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            @livewire('timestamp-cell', ['timestamp' => $token->expires_at])
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('auth.access_tokens_revoke', $token->id) }}" class="text-red-600 hover:text-red-900">Revoke</a>
                            <a href="{{ route('auth.access_tokens_show', $token->id) }}" class="text-indigo-600 hover:text-indigo-900">Show</a>
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
