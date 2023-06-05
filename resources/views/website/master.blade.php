<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('website.include.style')
</head>

<body>
@include('website.include.header')

@yield('body')

@include('website.include.footer')

@include('website.include.script')

</body>

</html>
