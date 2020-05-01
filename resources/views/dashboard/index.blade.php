@inject('user', 'App\Services\TwitchUser')
@extends('layouts.dashboard')

@section('content')
    <p>
        Welcome, {{ $user->getName() }}
    </p>
@endsection
