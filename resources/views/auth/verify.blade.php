@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-md-5">
            <div class="card border-0 shadow-lg rounded-4 text-center">
                <div class="card-body p-5">
                    <div class="mb-4">
                        <div class="display-1 text-primary mb-3">
                            <i class="bi bi-envelope-check"></i>
                        </div>
                        <h3 class="fw-bold">{{ __('Verify Your Email Address') }}</h3>
                    </div>

                    @if (session('resent'))
                        <div class="alert alert-success border-0 shadow-sm mb-4" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p class="text-muted mb-4">
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                    </p>

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold rounded-pill py-2 shadow-sm">
                                {{ __('Click here to request another') }}
                            </button>
                        </div>
                    </form>

                    <div class="mt-4">
                        <a href="{{ route('login') }}" class="small fw-bold text-decoration-none text-muted">
                            <i class="bi bi-arrow-left me-1"></i> Back to Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: 100vh;
    }
    .btn-primary {
        background: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
        border: none;
    }
    .btn-primary:hover {
        background: linear-gradient(to right, #00f2fe 0%, #4facfe 100%);
        transform: scale(1.02);
    }
</style>

<!-- Add Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection
