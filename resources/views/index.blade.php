@extends('layouts.site')

@section('content')
    <div class="bg-purple-200 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-5 pb-10">
            <h2 class="text-2xl font-bold">Nearby Specials</h2>
            <div class="mt-5">
                <livewire:site.location.nearby-specials/>
            </div>
        </div>
    </div>
@endsection
