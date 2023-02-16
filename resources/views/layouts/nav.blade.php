<nav class="bg-gray-800 p-2 flex justify-between items-center">
  <div class="flex items-center">
    <a href="{{ url('/') }}" class="text-white font-medium">
    {{ config('app.name', 'Laravel') }}
    </a>
  </div>
  <div class="flex">
    @guest
        @if (Route::has('login'))

            <a href="{{ route('login') }}" class="text-white mr-4">{{ __('Login') }}</a>
        @endif

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-white mr-4">{{ __('Register') }}</a>
        @endif

        @else


        <a href="#" class="text-white"> {{ Auth::user()->name }}</a>

        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" 
            class="text-white mr-4">
            {{ __('Logout') }}
        </a>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @endguest
  </div>
</nav>
