@extends('layouts.auth',['title'=>'Email Password'])
@section('content')
    <div class="container-tight py-6">
        <div class="text-center mb-4">
            <img src="{{asset('static/logo.svg')}}" height="36" alt="">
        </div>
        <form class="card card-md" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="card-body">
                <h2 class="mb-5 text-center">Forgot password</h2>
                <p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="mb-3">
                    <input id="email" type="email" placeholder="johndoe@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Send me new password</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted">
            Forget it, <a href="{{url('login')}}">send me back</a> to the sign in screen.
        </div>
    </div>

@endsection
