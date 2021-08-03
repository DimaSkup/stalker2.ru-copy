<header>
    <a class="logo" href="{{ route('index') }}">
        <img src="{{ asset('images/logo/logo-landing.svg') }}" alt="stalker2.ru">
        <h2>stalker2.ru</h2>
    </a>
    <nav class="menu">
        <a href="{{ route('news') }}">News</a>
        <a href="{{ route('media') }}">Media</a>
        <a href="{{ route('radio') }}">Radio</a>
        <a href="{{ route('wiki') }}">Wiki</a>

        {{-- Here we check if this user is an authenticated user --}}
        @auth
            {{-- if so we'll greet this user --}}
            <a href="#">Welcome to hell, {{ Auth::user()->name }}!</a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            {{-- a logout form (it's a link to the logout route) --}}
            {!! Form::open(
                [
                    'route'     => 'logout',
                    'method'    => 'post',
                    'id'        => 'logout-form'
                ])
            !!}
                {{ csrf_field() }}
            {!! Form::close() !!}  {{-- end of logout form--}}
        @else
            {{-- in another case: we'll show a login and a register route --}}
            </span><a href="{{ route('login') }}">{{ __('Login') }}</a>
            <a href="{{ route('register') }}">{{ __('Register') }}</a>
        @endauth

    </nav>

    <ul class="social-icon-wrapper">
        <li><a href="#" class="social-icon"><span class="mi socicon-telegram icon-3d"></span></a></li>
        <li><a href="#" class="social-icon"><span class="mi socicon-youtube icon-3d"></span></a></li>
        <li><a href="#" class="social-icon"><span class="mi socicon-discord icon-3d"></span></a></li>
        <li><a href="#" class="social-icon"><span class="mi icon-3d">forum</span></a></li>
    </ul>
</header>
