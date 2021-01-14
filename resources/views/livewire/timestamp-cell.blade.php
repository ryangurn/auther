<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
    {{ $timestamp->diffForHumans(['parts' => '1', 'options' => \Carbon\Carbon::FLOOR], $shorten) }}
</span>
