<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- firebase -->
        <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
        <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
        <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
        <!-- Add Firebase products that you want to use -->
        <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-firestore.js"></script>
        <script>
            var firebaseConfig = {
            apiKey: "AIzaSyAxpp29gpMYtii4gUTn7iz0EOIisNOJyoQ",
            authDomain: "laraveltesting-a97b8.firebaseapp.com",
            databaseURL: "https://laraveltesting-a97b8.firebaseio.com",
            projectId: "laraveltesting-a97b8",
            storageBucket: "laraveltesting-a97b8.appspot.com",
            messagingSenderId: "567750413175",
            appId: "1:567750413175:web:cfd77cada72d1aadcc6f72",
            measurementId: "G-N2BHPZG2XF"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        // firebase.analytics();
        </script>
        <!-- firebase -->
        <link rel="icon" href="{{url('imgs/Favicon.svg')}}" type="image/png">
        <link rel="stylesheet" href="{{url('css/semantic.min.css')}}">
        <link rel="stylesheet" href="{{url('css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/hover-min.css')}}">
        <link rel="stylesheet" href="{{url('css/animate.css')}}">
        <link rel="stylesheet" href="{{url('css/all.min.css')}}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&display=swap">
        <link rel="stylesheet" href="{{url('css/simple-sidebar.css')}}">
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link rel="stylesheet" href="{{url('../css/styleRideo.css')}}" type="text/css">
    </head>
    <body class="">
        <div class="main">
            @yield('content')
        </div>

        <script src="{{url('js/jquery-3.4.1.js')}}"></script>
        <script src="{{url('js/popper.js')}}"></script>
        <script src="{{url('js/bootstrap.js')}}"></script>
        <script src="{{url('js/lib/js.cookie.js')}}"></script>
        <script src="{{url('js/lib/jquery.scrollbar.min.js')}}"></script>
        <script src="{{url('js/lib/jquery-scrollLock.min.js')}}"></script>

        <script src="{{url('js/semantic.min.js')}}"></script>

        <script src="{{url('js/wow.min.js')}}"></script>
        <script>new WOW().init();</script>

        <script src="{{url('js/main.js')}}"></script>
        <script src="{{url('js/typed.js')}}"></script>
        <script src="{{url('js/firebase.js')}}"></script>

        @yield('scripts')
    </body>
</html>
