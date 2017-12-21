<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>FSR CMS | Dobrodošli!</title>

    <!-- Bootstrap CSS -->
    <link href="/FSR-CMS/resources/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/FSR-CMS/resources/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="/FSR-CMS/resources/dist/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/FSR-CMS/resources/dist/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="/FSR-CMS/resources/dist/css/bootstrap-reboot.min.css" rel="stylesheet">

    <!-- CSS za FSRCMS -->
    <link href="/FSR-CMS/resources/fsrcms.css" rel="stylesheet">
</head>

<body>

@include('layouts.navbar')

@include('layouts.header')

<hr>

<main role="main">
    <div class="container">

        <div class="row" >

            <!-- SADRZAJ -->
            <div class="col-sm-8">
                @yield('content')
            </div>
            <!-- KRAJ -->

            <!-- SIDEBAR -->
            <div class="col-sm-4">
                <div class="jumbotron" style="padding-top:15px;">
                    <aside>
                        @include('sidebar.socialNetworks')
                        <hr>
                        @include('sidebar.archive')
                        <hr>
                        @include('sidebar.test')
                    </aside>
                </div>
            </div>
            <!-- SIDEBAR KRAJ-->
        </div>

    </div>

</main> <!-- KRAJ MAINA -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../resources/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="/FSR-CMS/resources/assets/js/vendor/popper.min.js"></script>
<script src="/FSR-CMS/resources/dist/js/bootstrap.min.js"></script>
</body>
</html>