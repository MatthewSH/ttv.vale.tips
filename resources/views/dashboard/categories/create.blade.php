@extends('layouts.dashboard')

{{-- TODO: Move all styles to form scss --}}

@section('content')
<form class="w-full max-w-lg" method="POST" action="{{ route('dashboard.categories.store') }}">
    {{ method_field('POST') }}
    {{ csrf_field() }}
    <div class="flex flex-wrap -mx-3 mb-4">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Category Name
            </label>
            <input name="name" type="text" placeholder="Overwatch" value="{{ old('name') }}" class="appearance-none block w-full bg-gray-100 text-gray-700 border {{ $errors->has('name') ? 'border-red-500' : 'border-gray-500 ' }} rounded shadow py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
            @if($errors->has('name'))
                @foreach($errors->get('name') as $message)
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @endforeach
            @endif
        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Parent Category (Not Required)
            </label>
            <div class="inline-block relative w-64">
                <select name="parent" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option value="0">-----</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            @if($errors->has('parent'))
                @foreach($errors->get('parent') as $message)
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @endforeach
            @endif
        </div>
    </div>

    <button type="submit" class="btn-sm btn-blue">Create Category</button>
</form>
@endsection
