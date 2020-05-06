@extends('layouts.dashboard')

@section('content')
@section('content')
<form class="w-full max-w-lg" method="POST" action="{{ route('dashboard.categories.tips.store') }}">
    {{ method_field('POST') }}
    {{ csrf_field() }}
    <button type="submit" class="btn-sm btn-blue">Create Tip</button>
</form>
@endsection
