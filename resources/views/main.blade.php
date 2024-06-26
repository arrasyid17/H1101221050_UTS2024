<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/argon-dashboard.css">
    <title>Argon Dashboard 2 by Creative Tim</title>
    @include('layout.link')
</head>

<body class="g-sidenav-show bg-gray-100">
    @include('layout.header')
    
    @yield('content')
    @include('layout.footer')
    @include('layout.script')
</body>
<html>