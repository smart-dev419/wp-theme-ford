<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ wp_title('') }}</title>
    <script src="https://use.typekit.net/wfv6jeb.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    @yield('head')
    
    {{ wp_head() }}

    

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body {{ body_class('') }}>

    <div id="wrapper">
        <div class="w1">
            @include('partials/header')

            @yield('content')

            @include('partials/footer')
        </div>
    </div>

    {{ wp_footer() }}

</body>
</html>