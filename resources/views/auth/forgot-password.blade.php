@extends('layouts.guest')

@section('website')
<div class="auth-page page-login">
    <div class="auth-header">
        <h1 class="auth-title">Forgot your password?</h1>
        <p class="auth-subtitle">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
    </div>
    <div class="auth-content container">
        <div class="row">
            <div class="auth-affiliate-space col-lg-2">
                <div class="auth-affiliate-space-content">
                    Affiliate / Ads Space
                </div>
            </div>
            <div class="auth-form-holder col-lg-8" style="height: 170px;">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="form-group">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4 form-group-submit">
                        <x-primary-button>
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>

                </form>
            </div>
            <div class="auth-affiliate-space col-lg-2">
                <div class="auth-affiliate-space-content">
                    Affiliate / Ads Space
                </div>
            </div>
        </div>
    </div>
</div>
@endsection