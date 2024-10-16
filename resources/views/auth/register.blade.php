@extends('layouts.guest')

@section('website')
<div class="auth-page page-login">
    <div class="auth-header">
        <h1 class="auth-title">Sign Up</h1>
        <p class="auth-subtitle">Signup to get started!</p>
    </div>
    <div class="auth-content container">
        <div class="row">
            <div class="auth-affiliate-space col-lg-2">
                <div class="auth-affiliate-space-content">
                    Affiliate / Ads Space
                </div>
            </div>
            <div class="auth-form-holder">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Signin with google -->
                    <div class="form-group">
                        <a href="{{ route('socialite.google.redirect') }}" class="btn btn-primary w-full">
                            <i class="fa fa-google"></i>
                            <span>Sign up with Google</span>
                        </a>
                    </div>

                    <!-- Firstname -->
                    <div class="form-group">
                        <x-input-label for="fname" :value="__('First name')" />
                        <x-text-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="fname" />
                        <x-input-error :messages="$errors->get('fname')" class="mt-2" />
                    </div>

                    <!-- Lastname -->
                    <div class="form-group">
                        <x-input-label for="lname" :value="__('Last name')" />
                        <x-text-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')" required autofocus autocomplete="lname" />
                        <x-input-error :messages="$errors->get('lname')" class="mt-2" />
                    </div>

                    <!-- Phone number -->
                    <div class="form-group">
                        <x-input-label for="phone" :value="__('Phone number')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="form-group mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="form-group mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-between mt-4 form-group-submit">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
            
                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
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