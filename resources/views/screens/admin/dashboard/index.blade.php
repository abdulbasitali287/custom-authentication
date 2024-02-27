@extends('layouts.admin')
@section('content')
    <div class="container">
        <button type="submit" class="btn btn-success me-2 px-2">{{ auth()->user()->name }}</button>
        {{ Form::open(['route' => 'logout']) }}
        <button class="btn btn-primary px-2">Logout</button>
        {{ Form::close() }}
        <h4 class="display-5 fw-bold text-dark my-2 p-3 shadow-lg">Dashboard</h4>
    </div>
    @auth
    @endauth
@endsection
