@extends('layouts.auth',['title'=>'Register'])
@section('content')

    <div class="container-tight py-6">
        <div class="empty">
            <div class="empty-icon">
                <div class="display-4">404</div>
            </div>
            <p class="empty-title h3">Oops… You just found an error page</p>
            <p class="empty-subtitle text-muted">
                We are sorry but the page you are looking for was not found
            </p>
            <div class="empty-action">
                <a href="{{url()->previous()}}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                    Take me home
                </a>
            </div>
        </div>
    </div>

    @endsection
