<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/clientsite/style/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/clientsite/dist/zoomslider.css') }}" />
    <link href="{{ asset('assets/clientsite/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src=" {{ asset('assets/clientsite/js/modernizr-2.6.2.min.js') }}"></script>
</head>
{{ $slot }}
<div class="itlabspro-footer">
    <div class="container footer-div1">
        <div class="row">
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12" style="text-align: left;">
                <img src="images/logo-white.png" class="mw-100" alt="" style="padding-bottom: 20px;">
                <p style="color: #ffffff;">Atlas Outdoor is a Moroccan travel agency based in Marrakech,
                    Adventure and cultural holidays
                    in Morocco</p>
                <div class="py-4">
                    <a href="https://www.twitter.com/atlaoutdoor" class="px-2"><img class="footer-social" src="images/twitter-white.png"
                            alt=""></a>
                    <a href="https://www.facebook.com/Atlas.Outdoor.morocco/" class="px-2"><img class="footer-social" src="images/facebook-white.png"
                            alt=""></a>
                    <a href="https://www.instagram.com/atlasoutdoor_morocco/" class="px-2"><img class="footer-social" src="images/instagram-white.png"
                            alt=""></a>
                    <a href="" class="px-2"><img class="footer-social" src="images/pintrest.png" alt=""></a>
                </div>
            </div>
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12 footer-div2">
                <span class="footer-span">Support</span><br><br>
                <a href="" class="footer-a">Customer Support</a><br><br>
                <a href="" class="footer-a">Privacy & Policy</a><br><br>
                <a href="" class="footer-a">Contact Channels</a>
            </div>
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12 footer-div2">
                <span class="footer-span">About Us</span><br><br>
                <a href="" class="footer-a">Our Story</a><br><br>
                <a href="" class="footer-a">Travel Blog &
                    Tips</a><br><br>
                <a href="" class="footer-a">Working With Us</a><br><br>
                <a href="" class="footer-a">Be Our Partner</a>
            </div>
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12 footer-div3">
                <span class="footer-span">Contact Info</span><br><br>
                <a href="" class="footer-a">Square Allal Ben Ahmed street
                    Villa Elabbassia N° 10, Guéliz
                    40 000 Marrakech</a><br><br>
                <a href="tel:05 24 42 29 48" class="footer-a">+212(0)5 24
                    42
                    29 48</a><br><br>
                <a href="mailto:contact@atlas-outdoor.com" class="footer-a">contact@atlas-outdoor.com</a>

            </div>
        </div>
        <hr id="white">
        <div class="row">
            <div class="col-12 col-xl-6 col-md-6 col-sm-12 col-xs-12" style="text-align: left;">
                <p style="color: #ffffff;">© 2022 Atlas outdoor All Rights Reserved</p>
            </div>
            <div class="col-12 col-xl-6 col-md-6 col-sm-12 col-xs-12" style="text-align: right;">
                <img src="images/banks.png" class="mw-100" alt="">
            </div>
        </div>
    </div>
</div>

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