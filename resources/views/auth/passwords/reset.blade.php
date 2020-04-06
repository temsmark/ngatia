@extends('layouts.auth',['title'=>'Reset Password'])
@section('content')
    <div class="container-tight py-6">
        <div class="text-center mb-4">
            <img src="{{asset('static/logo.svg')}}" height="36" alt="">
        </div>
        <form class="card card-md" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="card-body">
                <h2 class="mb-5 text-center">Reset password</h2>

                <div class="mb-3">
                    <input id="email" type="email" placeholder="John Doe" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input id="password" type="password" class="form-control @error('password')  is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>

                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">

                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted">
            Forget it, <a href="{{url('login')}}">send me back</a> to the sign in screen.
        </div>
    </div>

@endsection




