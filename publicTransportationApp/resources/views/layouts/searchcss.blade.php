<html>
<head>
    <title>SL Ride - @yield('title')</title>

    <style>
        input[type=text] {
            /*width: 500px;*/
            width: 100%;
            height: 50px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            /*background-image: url('image/searchicon.png');*/
            /*background-position: 10px 10px;*/
            /*background-repeat: no-repeat;*/
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;

        }

        /* When the input field gets focus, change its width to 100% */
        input[type=text]:focus {
            width: 100%;
        }
    </style>
</head>
<body>
@include('includes.header')
@include('includes.Navbar')
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
@stack('scripts')
</html>