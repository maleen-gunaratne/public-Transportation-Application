<html>
<head>
<title>@yield('SLRide')</title>



    <!-- Latest compiled and minified CSS -->
    <style>
        body{
            background-image: url('image/train.jpg');
            background-repeat: no-repeat;
            /*//background-size: auto|length|cover|contain|initial|inherit;*/
           /*// background-size: 1400px 660px;*/
            background-size: auto;
            /*//background-size: length;*/
        }
        .row{
            padding-left: 430px;

        }

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    {{--<link rel="stylesheet" type="text/css" href="../public/css/style.css">--}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


</head>
<body>
<div class="row">

</div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>