@extends('layouts.guest')

@section('website')
<div class="auth-page page-login">
    <div class="auth-header">
        <h1 class="auth-title">Log in</h1>
        <p class="auth-subtitle">Hi, Welcome Back!</p>
    </div>
    <div class="auth-content container">
        <div class="row">
            <div class="auth-affiliate-space col-lg-2">
                <div class="auth-affiliate-space-content">
                    Affiliate / Ads Space
                </div>
            </div>
            <div class="auth-form-holder col-lg-8">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Signin with google -->
                    <div class="form-group">
                        <a href="{{route('auth.socialite.redirect','google')}}" class="btn btn-primary w-full">
                            <i class="fa fa-google"></i>
                            <span>Sign in with Google</span>
                        </a>
                    </div>

                    <!-- Signin with google -->
                    <div class="form-group">
                        <a href="{{ route('socialite.facebook.redirect') }}" class="btn btn-primary w-full">
                            <i class="fa fa-facebook"></i>
                            <span>Sign in with Facebook</span>
                        </a>
                    </div>

                    <!-- Email Address -->
                    <div class="form-group">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="form-group mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-4 form-group-submit">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                    <div class="flex items-center justify-between mt-4 form-group-signup">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                            {{ __('Dont have an account? Sign Up') }}
                        </a>
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
