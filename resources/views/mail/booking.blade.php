<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>



<body>


    <div class="p-5">

        <p>Name :</p>
        <p class="px-3">{{ $mailData['name'] }}</p>
        <hr>
        <p>Email :</p>
        <p class="px-3">{{ $mailData['email'] }}</p>
        <hr>
        <p>Phone number :</p>
        <p class="px-3">{{ $mailData['phone'] }}</p>
        <hr>
        <p>Trip :</p>
        <p class="px-3">{{ $mailData['trip'] }}</p>
        <hr>
        <p>Number of persons :</p>
        <p class="px-3">{{ $mailData['persons'] }}</p>
        <hr>
        <p>Arrival date :</p>
        <p class="px-3">{{ $mailData['arrival'] }}</p>
        <hr>
        <p>Departure date :</p>
        <p class="px-3">{{ $mailData['departure'] }}</p>
        <hr>
        <p>Message :</p>
        <p class="px-3">{{ $mailData['message'] }}</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>