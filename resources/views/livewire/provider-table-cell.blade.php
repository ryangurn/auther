<div>
    @if($provider != null)
    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-purple-100 text-purple-800">
        {{ strtolower($provider) }}
    </span>
    @else
    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
        none
    </span>
    @endif
</div>
