@extends('layouts.dashboard')

@section('content')
<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('dashboard.tips.update', ['category' => $category, 'tip' => $tip]) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <p class="text-lg font-thin">Currently editing a tip in <span class="font-semibold">{{ $category->name }}</span>.</p>
    <hr class="my-2"/>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
            Title
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="title" type="text" placeholder="My Tip Title" value="{{ old('title', $tip->title) }}">
        @if($errors->has('title'))
            @foreach($errors->get('title') as $message)
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @endforeach
        @endif
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="short">
            Short / Chat Tip
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="short" type="text" placeholder="Short version of your tip for chats." value="{{ old('short', $tip->short) }}">
        @if($errors->has('short'))
            @foreach($errors->get('short') as $message)
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @endforeach
        @endif
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="long">
            Tip
        </label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="long" type="text" rows="6" placeholder="This is the full on tip information. Markdown is allowed.">{{ old('long', $tip->long) }}</textarea>
        @if($errors->has('long'))
            @foreach($errors->get('long') as $message)
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @endforeach
        @endif
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="visible">
            State
        </label>
        <select name="visible" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-3 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option {{ $tip->visible ? 'selected' : '' }} value="1">Published</option>
            <option {{ $tip->visible ? '' : 'selected' }} value="0">Unpublished</option>
        </select>
        @if($errors->has('visible'))
            @foreach($errors->get('visible') as $message)
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @endforeach
        @endif
    </div>

    <button type="submit" class="btn-sm btn-blue">Save Tip</button>
</form>
@endsection
