<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <style>
        #findjobs {
            background-image: url('default-images/find-jobs.png');
            background-color: #f3f7fa;
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: auto;
            position: relative;
            height: 700px;
        }
        #categories {
            background-image: url('default-images/circle-left.png'), url('default-images/circle-right.png');
            background-color: #f3f7fa, #f3f7fa;
            background-position: left, right;
            background-repeat: no-repeat, no-repeat;
        }
        .jobs {
            background-color: black;
            position: relative;
            text-align: center;
        }
        .jobseeker-img {
            background-image: url('default-images/jobseeker.png');
            background-color: #f3f7fa;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 600px;
            opacity: .5;
        }
        .hiring-img {
            background-image: url('default-images/hiring.png');
            background-color: #f3f7fa;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 600px;
            opacity: .5;
        }
        .txt-center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
    </style>
    <body class="app">
        @include('layouts.header')

        <div class="">
            @yield('content')   
        </div><!--//container-fluid-->
        
        @include('layouts.footer')
    </body>
</html>
