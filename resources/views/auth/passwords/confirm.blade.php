@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-md-5">
            <div class="card border-0 shadow-lg rounded-4 text-center">
                <div class="card-body p-5">
                    <div class="mb-4">
                        <div class="display-1 text-primary mb-3">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <h3 class="fw-bold">{{ __('Confirm Password') }}</h3>
                        <p class="text-muted small">{{ __('Please confirm your password before continuing.') }}</p>
                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="mb-4 text-start">
                            <label for="password" class="form-label fw-semibold small text-uppercase">{{ __('Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-lock text-muted"></i></span>
                                <input id="password" type="password" class="form-control bg-light border-start-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                            </div>
                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold rounded-pill py-2 shadow-sm">
                                {{ __('Confirm Password') }}
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="mt-4">
                                <a class="small fw-bold text-decoration-none" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif
                    </form>
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
