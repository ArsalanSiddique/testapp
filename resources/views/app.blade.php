<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('app_name')</title>
</head>

<body>


    @yield('content')


    @auth
    <h1> I'm Authenticated Person. </h1>
    @endauth


    @guest
    <h1> I'm not authenticated person. I'm guest.</h1>
    @endguest



</body>

</html>