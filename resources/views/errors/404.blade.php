<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('error/images/favicon.svg') }}" type="image/x-icon">
    <meta name="keywords"
          content="HTML, CSS, JavaScript, JQuery, Bootstrap, Graphic Design, Printing, Marketing, Motion Graphic">
    <meta name="author" content="Spark Media">
    <title>Spark Media</title>
    <link href="{{ asset('error/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('error/css/foundation-rtl.css') }}" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
        }

        .bg-cover {

            padding-top: 100px;
            height: 100%;
            display: block;

        }
    </style>
</head>

<body class="bg generator set-overflow">
<div class="main">
    <div class="container text-center">
        <div class="bg-cover">
            <div id="intro-content" class="col-lg-12 vflow bg-cover">


                <div class="st-logo">
                    <img src="{{ asset('error/images/background.png') }}" alt="Spark Media">
                </div>

                <h2 class="fw600 text-warning ">404 Not Found<br></h2>
                <br />
                <a href="{{ route('welcome') }}" class="btn btn-buy">Back To Website</a>
                <br />
                <br />
                <br />

            </div>
        </div>

    </div>
</div>
<script src="{{ asset('error/js/bootstrap.min.js') }}"></script>

</body>
</html>
