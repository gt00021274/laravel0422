<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/blog.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>

<body>
    @include('layouts.header') 

    <div class="container">
        @section('container')
        <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h1>歡迎來到Blogger</h1>
                <h4>還未擁有帳戶？</h4>
                <button class="btn btn-info" onclick="location.href='{{ route('welcome') }}'">註冊去</button>
                <h4>已有帳戶？</h4>
                <button class="btn btn-info" onclick="location.href='{{ route('index') }}'">登入去</button>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>