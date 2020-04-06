@extends('layouts.auth' ,['title'=>'Login'])

@section('content')
<div class="container-tight py-6">
    <div class="text-center mb-4">
        <img src="{{asset('static/logo.svg')}}" height="36" alt="">
    </div>
    <form class="card card-md" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="card-body">
            <h2 class="mb-5 text-center">Login to your account</h2>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

            </div>
            <div class="mb-2">
                <label class="form-label">
                    Password
                    <span class="form-label-description">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                        @endif

                </span>
                </label>
                <div class="input-group input-group-flat">
                    <input id="pass" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="input-group-append">
                  <span class="input-group-text">
                    <a href="#" onclick="showPass()" class="link-secondary" title="Show password" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                    </a>
                  </span>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <label class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <span class="form-check-label">Remember me on this device</span>
                </label>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </div>
        </div>

    </form>
    <div class="text-center text-muted">
        Don't have account yet? <a href="{{url('register ')}}" tabindex="-1">Sign up</a>
    </div>
</div>


@endsection
@section('script')
    <script>
        function showPass() {
            let x= document.getElementById('#pass').value;
            console.log('dd')
            if(x.type==="password")
            {
                x.type="text";
            }else{
                x.type="password";
            }

        }
    </script>
@endsection







