@extends('layouts.app')
@section('content')
                    <div class="flex justify-center">
                        <form class="bg-white p-8 rounded-lg"
                            method="POST" action="{{ route('register') }}">
                    
                            <h2 class="text-lg font-medium mb-4">Register</h2>
                            @csrf

                        
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-medium mb-2">{{ __('Name ') }}</label>
 
                                <input id="name" 
                                type="text" 
                                class="w-full border border-gray-400 p-2 rounded-lg @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" 
                                required autocomplete="name" 
                                autofocus>

                                @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <!-- name -->
                        
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-medium mb-2">
                                    {{ __('Email Address ') }}
                                </label>

                                 
                                <input id="email" type="email" 
                                class="w-full border border-gray-400 p-2 rounded-lg @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" 
                                required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- email -->

                            <div class="mb-4">
                                <label for="password" class="block text-gray-700 font-medium mb-2">
                                    {{ __('Password') }}
                                </label>

                            
                                <input id="password" 
                                type="password" 
                                class="w-full border border-gray-400 p-2 rounded-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <!-- password -->

                            <div class="mb-4">
                                <label for="password-confirm" class="block text-gray-700 font-medium mb-2">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" 
                                type="password" class="w-full border border-gray-400 p-2 rounded-lg" 
                                name="password_confirmation" required autocomplete="new-password">

                            </div>
                            <!-- confirm password -->

                            <div class="text-center">
                                <button class="bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-600">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
@endsection
