@extends('layouts.guest')
@section('content')
    <div class="container my-4">
        <h4 class="display-4 fw-bold text-center my-4">SIGNIN</h4>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <x-guest.login />
            </div>
        </div>
    </div>
@endsection
