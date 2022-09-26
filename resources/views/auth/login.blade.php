@extends('frontend.layout.app')
@section('content')



        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" class="col-sm-4 col-xs-12 col-md-4 mx-auto " style="margin-top:4rem" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div  class="form-group">
                <x-label for="email" :value="__('Email')" />

                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div  class="form-group">
                <x-label for="password" :value="__('Password')" />

                <input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div  class="form-group">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div  class="form-group">
                <!-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif -->

                <x-button class="btn btn-primary">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>


@endsection
