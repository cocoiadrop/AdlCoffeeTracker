<div>
    <p class="text-md font-light">We need your postcode to find nearby specials.</p>
    <input wire:model="localitySearch" type="text" class="appearance-none transition text-xl p-3 px-4 my-4 rounded-2xl w-full shadow-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 focus:shadow-xl" placeholder="Enter your suburb or postcode here...">
    <div wire:loading.delay>
        Looking...
    </div>
    @if (count($localities) > 0)
        <div class="flex flex-col rounded-md bg-white space-y-1">
            @foreach ($localities as $locality)
                <a href="" class="rounded-md p-3 px-4 transition-all hover:bg-gray-100 ">
                    {{ $locality->name }} ({{ $locality->postcode }})
                </a>
            @endforeach
        </div>
    @endif
</div>
