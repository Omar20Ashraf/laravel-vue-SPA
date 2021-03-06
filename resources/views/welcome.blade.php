<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
      
    </head>
    <body class="antialiased">
        <div id="app">
            <router-link to="/">Home</router-link>
            <router-link :to="{name : 'about'}">About</router-link>

            <hr>

            <router-view></router-view>

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
