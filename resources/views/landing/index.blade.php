<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Stalker2.ru</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
    <body class="landing">
        <div class="wrapper">
            <div class="parallax__group hero-container">
                <div class="parallax__layer header">
                    @include('includes.header')
                </div>
                <div class="parallax__layer back"></div>
                {{--        <div class="parallax__layer layer2"></div>--}}
                <div class="parallax__layer front"></div>
                <div class="parallax__layer anomaly"></div>
                <div class="parallax__layer grass"></div>
                <div class="parallax__layer ashes">@include('landing.particles')</div>
            </div>
            <div class="parallax__group info-container">

            </div>
            <div class="parallax__group underground-container">
                <div class="parallax__layer under-back"></div>
                <div class="parallax__layer under-capsule"></div>
                <div class="parallax__layer under-front"></div>
                <div class="parallax__layer under-right"></div>
                {{-- <div class="parallax__layer ashes">@include('landing.particles')</div> --}}
                <div class="parallax__layer gradient"></div>
            </div>
            <div class="parallax__group info-container">

            </div>
            @include('includes.footer')
        </div>
    </body>
</html>
