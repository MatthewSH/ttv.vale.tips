@extends('layouts.dashboard')

@section('content')
<div class="mb-8 flex">
    <a href="{{ route('dashboard.tips.create', ['category' => $category]) }}" class="btn btn-green">New Tip</a>
</div>

<div class="flex">
    <div class="w-3/4">
        @forelse($entries as $entry)
            <div class="bg-white shadow-md p-6 mx-3 mb-6 w-auto rounded">
                <p class="text-xl font-semibold">
                    {{ $entry->title }} <span class="text-sm font-normal {{ $entry->visible ? 'bg-green-600 text-white' : 'bg-red-600 text-white' }} rounded py-1 px-2">{{ $entry->visible ? 'Public' : 'Private' }}</span>
                    <a href="{{ route('dashboard.tips.edit', ['category' => $category, 'tip' => $entry]) }}" class="text-sm font-normal rounded py-1 px-2 bg-blue-600 ml-4 text-white"><i class="far fa-edit"></i></a>
                </p>
                <p class="font-normal ml-4 mt-5">{{ $entry->short }}</p>
                <hr class="my-3"/>
                <div class="flex">
                    <img class="h-8 w-8 rounded-full" src="{{ $entry->user->avatar }}">
                    <a href="https://twitch.tv/{{ $entry->user->name }}" target="_blank" class="text-gray-600 ml-3 italic text-left">{{ $entry->user->nickname }}</a>
                </div>
            </div>
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
