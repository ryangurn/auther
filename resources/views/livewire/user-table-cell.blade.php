@if($link == null)
<div class="flex items-center">
@else
<a href="{{ $link }}" class="flex items-center">
@endif
    @if($user->profile_photo_url != null)
        <div class="flex-shrink-0 h-10 w-10">
            <img class="h-10 w-10 rounded-full" src="{{ $user->profile_photo_url }}">
        </div>
    @endif
    <div class="ml-4">
        <div class="text-sm font-medium text-gray-900">
            {{ $user->name }}
        </div>
        @if($show_email)
        <div class="text-sm text-gray-500">
            {{ $user->email }}
        </div>
        @endif
    </div>
@if($link != null)
</a>
@else
</div>
@endif
