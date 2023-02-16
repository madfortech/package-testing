@extends('layouts.app')
@section('content')
            <div class="flex justify-center">
                <form class="bg-white p-8 rounded-lg"
                    method="POST" action="{{ route('login') }}">
                    
                        <h2 class="text-lg font-medium mb-4">Login</h2>
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium mb-2">{{ __('Email Address') }}</label>

                            <input type="email" 
                            class="w-full border border-gray-400 p-2 rounded-lg @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}"
                            required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 font-medium mb-2">{{ __(' Password') }}</label>
                            <input type="password" 
                            class="w-full border border-gray-400 p-2 rounded-lg @error('password') is-invalid @enderror"
                            name="password"
                            required autocomplete="current-password" >
                                
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            
                            <input type="checkbox" 
                            name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label for="remember">
                                {{ __('Remember Me') }}
                            </label>
                           
                        </div>

                        <div class="mb-4">
                         
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="text-center">
                            <button class="bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-600">
                                {{ __('Login') }}
                            </button>
                        </div>
 
                    </form>
                </div>
            </div>
@endsection
