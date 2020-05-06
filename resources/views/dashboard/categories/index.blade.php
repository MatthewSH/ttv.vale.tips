@extends('layouts.dashboard')

@section('content')
<div class="mb-8 flex">
    <a href="{{ route('dashboard.categories.create') }}" class="btn btn-green">New Category</a>
</div>

<div class="grid grid-cols-3 gap-4">
    @forelse(\Illuminate\Support\Arr::sort($categories, function($cat) { return $cat->name; }) as $category)
    <div class="bg-white shadow-md hover:shadow-xl p-6 mx-3 w-auto rounded">
        <a href="{{ route('dashboard.categories.show', ['category' => $category->id]) }}" class="text-3xl hover:text-blue-600">{{ $category->name }}</a>
        @if($category->descendants()->count() > 0)
        <div class="ml-1 text-gray-800">
            <p class="text-lg">Sub-categories</p>
            <div class="ml-3 mt-2 grid grid-cols-4 gap-1">
                @foreach(Illuminate\Support\Arr::sort($category->descendants, function($c) { return $c->name; }) as $child)
                    <a href="{{ route('dashboard.categories.show', ['category' => $child->id]) }}" class="font-semibold hover:text-blue-600">{{ $child->name }}</a>
                @endforeach
            </div>
        </div>
        <hr class="my-3"/>
        @endif
        <p class="italic text-gray-600 ml-4 mb-6">
            {{ $category->entries(\App\Models\Tip::class)->count() }} Tips
        </p>
    </div>
    @empty
    <p>No categories...yet.</p>
    @endforelse
</div>
@endsection
