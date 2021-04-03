<html>
<head>
    <title>Beeflix - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="flex-md-row mb-4">
@section('sidebar')
    <h1 style="color: #1f6fb2; text-align: center;">BeeFlix</h1>
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>
