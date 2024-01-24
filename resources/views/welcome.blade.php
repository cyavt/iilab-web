<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">
    <div id="app">
        <example-component></example-component>
        <button class="btn btn-primary">Bootstrap btn</button>
    </div>
    <p class="zoomable">
        Click me to zoom
    </p>
    <script type="module">
        $(document).ready(function(){
            $(".zoomable").click(function(){
                $(this).animate({
                    fontSize: "40px"
                }, 1000);
            });
        });
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
