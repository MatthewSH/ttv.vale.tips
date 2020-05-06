@extends('layouts.dashboard')

@section('content')
@section('content')
<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('dashboard.tips.store', ['category' => $category]) }}">
    {{ method_field('POST') }}
    {{ csrf_field() }}

    <p class="text-lg font-thin">Currently creating a tip in <span class="font-semibold">{{ $category->name }}</span>.</p>
    <hr class="my-2"/>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
            Title
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="title" type="text" placeholder="My Tip Title">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="short">
            Short version of your tip for chats
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="short" type="text" placeholder="A short description of my tip.">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="long">
            Tip
        </label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="long" type="text" rows="6" placeholder="This is the full on tip information. Markdown is allowed."></textarea>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="visible">
            State
        </label>
        <select name="visible" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-3 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option value="true">Published</option>
            <option value="false">Unpublished</option>
        </select>
    </div>

    <button type="submit" class="btn-sm btn-blue">Create Tip</button>
</form>
@endsection
