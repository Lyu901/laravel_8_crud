<html>

<head>
    <title>Lyu - @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/789e0a79b5.js" crossorigin="anonymous"></script>

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

        <p>1107211065 王晏綠</p>
        <p>wangyanlyu@gmail.com</p>
        <p>Github: www.github.com/Lyu901</p>

    </div>
</body>

</html>
