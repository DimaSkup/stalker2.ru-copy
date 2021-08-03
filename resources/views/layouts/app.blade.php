<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to S</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    {{--
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <!-- AN IMPLEMENTATION OF RECAPTCHA v3-->
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'}).then(function(token) {
                if (token) {
                    document.getElementById('recaptcha').value = token;
                }
            });
        });
    </script>
    --}}
</head>
<body>

<div class="container">
    {{-- here we render a flash message --}}
    {{-- @include('flash::message') --}}

    {{-- if we have some errors, then we'll show it --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- any section with 'content' name will be embedded here --}}
    @yield('content')
</div>


</body>
</html>