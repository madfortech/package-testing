@extends('layouts.app')
@section('content')
                    <div class="flex justify-center">
                        <form class="bg-white p-8 rounded-lg"
                            method="POST" action="{{ route('password.email') }}">

                            @csrf
                            <h2 class="text-lg font-medium mb-4">Reset password</h2>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

 
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-medium mb-2">{{ __('Email Address') }}</label>

                                <input id="email" 
                                type="email" 
                                class="w-full border border-gray-400 p-2 rounded-lg @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" 
                                required autocomplete="email" autofocus>


                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="text-center">
                                <button class="bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-600">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>

                        </form>
                    </div>
@endsection
