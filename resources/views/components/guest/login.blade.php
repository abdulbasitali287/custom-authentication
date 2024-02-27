{!! Form::open(['route' => 'handle-login']) !!}
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
<div>
    <button type="submit" class="btn btn-primary me-2">LOGIN</button>
    <a href="{{ route('register') }}" class="text-dark text-decoration-none">don't have any account?</a>
</div>
{!! Form::close() !!}
