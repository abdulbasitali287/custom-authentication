{!! Form::open(['route' => 'handle-registeration']) !!}
<div class="form-group mb-3">
    {{ Form::label('Name', null, ['class' => 'control-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
    @error('name')
        <div class="text-danger my-2">{{ $message }}</div>
    @enderror
</div>
<div class="form-group mb-3">
    {{ Form::label('Email', null, ['class' => 'control-label']) }}
    {{ Form::email('email', null, ['class' => 'form-control']) }}
    @error('email')
        <div class="text-danger my-2">{{ $message }}</div>
    @enderror
</div>
<div class="form-group mb-3">
    {{ Form::label('Password', null, ['class' => 'control-label']) }}
    {{ Form::password('password', ['class' => 'form-control']) }}
    @error('password')
        <div class="text-danger my-2">{{ $message }}</div>
    @enderror
</div>
<div class="form-group mb-3">
    {{ Form::label('confirm password', 'Confirm Password', ['class' => 'control-label']) }}
    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
    @error('password_confirmation')
        <span class="text-danger py-2">{{ $message }}</span>
    @enderror
</div>
<div>
    <button type="submit" class="btn btn-primary me-2">SIGNUP</button>
    <a href="{{ route('login') }}" class="text-dark text-decoration-none">already have an account?</a>
</div>
{!! Form::close() !!}
