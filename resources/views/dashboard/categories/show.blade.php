@extends('layouts.dashboard')

@section('content')
<div class="flex">
    <div class="w-3/4">
        @forelse($entries as $entry)
        @empty
            <p class="text-2xl mt-8">No tips yet. Why not create one?</p>
        @endforelse
    </div>
    <div class="w-1/4">
        <div class="bg-white shadow-md hover:shadow-xl p-6 mx-3 w-auto rounded">
            <div class="ml-1 text-gray-800">
                <p class="text-lg">Sub-categories</p>
                <div class="ml-3 mt-2 grid grid-cols-4 gap-1">
                    @foreach(Illuminate\Support\Arr::sort($category->descendants, function($c) { return $c->name; }) as $child)
                        <a href="{{ route('dashboard.categories.show', ['category' => $child->id]) }}" class="font-semibold hover:text-blue-600">{{ $child->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
