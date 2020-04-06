@extends('layouts.auth',['title'=>'Confirm Password'])
@section('content')

    <div class="container-tight py-6">
        <div class="text-center mb-4">
            <img src="{{asset('static/logo.svg')}}" height="36" alt="">
        </div>
        <form class="card card-md" method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="card-body">
                <h2 class="mb-5 text-center">Confirm Password</h2>
                <div class="mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Confirm password</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted">
            @if (Route::has('password.request'))
                <a  href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
@endsection


