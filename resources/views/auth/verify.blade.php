@extends('layouts.auth',['title'=>'Verify Email'])
@section('content')
    <div class="container-tight py-6">
        <div class="empty">
            <div class="empty-icon">
                <div class="display-4">Verify Your Email Address</div>
            </div>

            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <p class="empty-title h3">Before proceeding, please check your email for a verification link.</p>
            <p class="empty-subtitle text-muted">
                If you did not receive the email.
            </p>
            <div class="empty-action">

                <form  method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                </form>

            </div>
        </div>
    </div>

@endsection




