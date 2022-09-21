<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlas Outdoor</title>
    <link rel="stylesheet" href="{{ asset('assets/clientsite/style/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/clientsite/dist/zoomslider.css') }}" />
    <link href="{{ asset('assets/clientsite/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.jpg') }}" />
    <script type="text/javascript" src=" {{ asset('assets/clientsite/js/modernizr-2.6.2.min.js') }}"></script>
</head>

{{ $slot }}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/clientsite/dist/jquery.zoomslider.min.js') }}"></script>
<script src="{{ asset('assets/clientsite/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/clientsite/js/main.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>

</body>

</html>