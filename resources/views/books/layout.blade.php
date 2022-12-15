<!DOCTYPE html>
<html>

<head>
    <title>CRUD BOOK</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body{
            background-color: #917676;
            color: #ffffff;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: coral;
        }
    </style>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
</head>

<body>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
