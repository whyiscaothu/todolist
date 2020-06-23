<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/asset/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="col-12 d-flex row flex-wrap p-0">
            <div class="col-3 p-0">
                <div class="col-12 text-center py-4 h4 border">
                    To Do App
                </div>
                <a class="col-12 py-3 d-flex align-items-center nav-link text-dark" href="{{ route('admin.home') }}">
                    <i class="fas fa-home fa-2x mr-4"></i>
                    <p class="m-0 h5">Home</p>
                </a>
                <a class="col-12 py-3 d-flex align-items-center nav-link text-dark" href="{{ route('admin.show') }}">
                    <i class="fas fa-list-alt fa-2x mr-4"></i>
                    <p class="m-0 h5">Show List</p>
                </a>
                <a class="col-12 py-3 d-flex align-items-center nav-link text-dark" href="">
                    <i class="fas fa-check-square fa-2x mr-4"></i>
                    <p class="m-0 h5">Completed</p>
                </a>
            </div>
            @section('content')

            @show
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
