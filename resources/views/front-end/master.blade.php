<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jahidul Islam</title>

    <link rel="stylesheet" href="{{ asset('front-end-asset') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front-end-asset') }}/css/unicons.css">
    <link rel="stylesheet" href="{{ asset('front-end-asset') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('front-end-asset') }}/css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="{{ asset('front-end-asset') }}/css/tooplate-style.css">

</head>
<body>

<!-- MENU -->
@include('front-end.include.header')

<!-- ABOUT -->
@include('front-end.include.about')

<!-- PROJECTS -->
@include('front-end.include.project')

<!-- FEATURES -->
@include('front-end.include.features')

<!-- CONTACT -->
@include('front-end.include.contact')

<!-- FOOTER -->
@include('front-end.include.footer')

<script src="{{ asset('front-end-asset') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('front-end-asset') }}/js/popper.min.js"></script>
<script src="{{ asset('front-end-asset') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('front-end-asset') }}/js/Headroom.js"></script>
<script src="{{ asset('front-end-asset') }}/js/jQuery.headroom.js"></script>
<script src="{{ asset('front-end-asset') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('front-end-asset') }}/js/smoothscroll.js"></script>
<script src="{{ asset('front-end-asset') }}/js/custom.js"></script>

</body>
</html>
