<div>
@if(count($items) > 0)
    @foreach($items as $scope)
    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
        {{ $scope }}
    </span>
    @endforeach
@else
    no scopes
@endif
</div>
