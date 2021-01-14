@if($link == null)
<a href="{{ $link }}">
@else
<div>
@endif
    <div class="text-sm text-gray-900">{{ strtolower($client->name) }}</div>
    <div class="text-xs text-gray-500">{{ strtolower($client->redirect) }}</div>
@if($link != null)
</div>
@else
</a>
@endif
