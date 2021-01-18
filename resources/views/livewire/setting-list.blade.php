<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 space-y-8">
    <div class="sm:mt-0">
        <div class="md:grid md:grid-cols-4 md:gap-6">
            @if(isset($settings) && !$settings->isEmpty())
                @foreach($settings as $setting)
            <div class="md:mt-0">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-4">
                        <a href="{{ route('setting.show', $setting->id) }}" class="hover:underline grid grid-cols-1 gap-6">
                            <h1 class="text-lg font-bold">@if(strlen($setting->value) > 16){{ substr($setting->key, 0, 16) }}...@else{{ $setting->key }}@endif</h1>
                        </a>
                        <span class="px-2 inline-flex text-xs width- leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            @if(strlen($setting->value) > 16)
                            {{ substr($setting->value, 0, 16) }}...
                            @else
                            {{ $setting->value }}
                            @endif
                        </span>
                    </div>
                    <div class="px-4 py-1 bg-gray-50 text-left sm:px-4">
                        <a href="{{ route('setting.update', $setting->id) }}" class="hover:underline">Edit</a>
                    </div>
                </div>
            </div>
                @endforeach
            @endif


        </div>
    </div>
</div>
