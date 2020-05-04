@extends('layouts.dashboard')

@section('content')
<div class="mb-8 flex">
    <a href="{{ route('dashboard.categories.create') }}" class="btn btn-green">New Category</a>
</div>
@endsection
