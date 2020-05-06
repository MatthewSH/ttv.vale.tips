@extends('layouts.dashboard')

@section('content')
@section('content')
<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('dashboard.tips.store', ['category' => $category]) }}">
    {{ method_field('POST') }}
    {{ csrf_field() }}
    <button type="submit" class="btn-sm btn-blue">Create Tip</button>
</form>
@endsection
