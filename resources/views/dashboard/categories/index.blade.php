@extends('layouts.dashboard')

@section('content')
<div class="mb-8 flex">
    <a href="{{ route('dashboard.categories.create') }}" class="btn btn-green">New Category</a>
</div>

<div class="flex">
    @forelse($categories as $category)
    <div class="flex-1 bg-white shadow-lg p-6 mx-3 w-auto rounded">
        <a href="{{ route('dashboard.categories.show', ['category' => $category->id]) }}" class="text-3xl hover:text-blue-600">{{ $category->name }}</a>
        <p class="italic text-gray-600 ml-4 mb-6">
            {{ $category->descendants()->count() }} Tips
        </p>
        <a href="#" class="btn-sm btn-blue">New Tip</a>
    </div>

    @if(!$loop->last)
        <hr />
    @endif
    @empty
    <p>No categories...yet.</p>
    @endforelse
</div>
@endsection
