<html>

<head>
    <title>Lyu - @yield('title')</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #3B5663;
            color: white;
            text-align: center;
            margin-top: 30px;
            padding: 30px;
        }
        .footer p{margin-bottom:0px;}
        body {
            background-color:  #EFF6FA;
        }
        .row{margin-top:40px;}

    </style>

</head>

<body>
    @section('sidebar')

    @show

    <div class="container">
        @yield('content')
    </div>
    <div class="text-center footer">

        <p>+886 906 821 468</p>
        <p>wangyanlyu@gmail.com</p>
        <p>Github: www.github.com/Lyu901</p>

    </div>
</body>

</html>
