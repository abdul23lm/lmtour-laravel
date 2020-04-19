<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

@include('includes.style')


</head>


<body>


@yield('content')


@include('includes.script')

</body>

</html>
