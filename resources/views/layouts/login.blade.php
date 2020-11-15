<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ url('frontend/images/lmtour_favicon.png')}}">

@include('includes.style')


</head>


<body>


@yield('content')


@include('includes.script')

</body>

</html>
