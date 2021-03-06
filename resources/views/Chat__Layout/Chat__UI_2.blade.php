<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Flying - Chat</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('assets/css/Chat__UI_2.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
    <div id="app">
        <router-view></router-view>
    </div>

<script src="{{ asset('js/app.js') }}"></script>
    <script !src="">
        $(document).ready(function(){
            $('#action_menu_btn').click(function(){
                $('.action_menu').toggle();
            });
        });
    </script>
</body>
</html>

