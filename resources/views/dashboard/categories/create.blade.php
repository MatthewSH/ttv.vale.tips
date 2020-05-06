@extends('layouts.dashboard')

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
    </div>

    <button type="submit" class="btn-sm btn-blue">Create Category</button>
</form>
@endsection
