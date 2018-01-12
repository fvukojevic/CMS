<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/resources/assets/img/favicons/favicon.ico">

    <title>FSR CMS | Dobrodošli!</title>

    <!-- Bootstrap CSS -->
    <link href="/resources/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/resources/dist/css/bootstrap.css" rel="stylesheet">
    <link href="/resources/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="/resources/dist/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/resources/dist/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="/resources/dist/css/bootstrap-reboot.min.css" rel="stylesheet">


    <!-- CSS za FSRCMS -->
    <link href="/resources/fsrcms.css" rel="stylesheet">
</head>

<body>

@include('layouts.navbar')


<hr>

<main role="main">
    <div id="right-block" class="col-md-7 offset-3">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="user-settings">
            <form method="POST" action="/public/profile/update" class="form-horizontal"
                  role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <h1 style="margin-left:16%">Vaš profil</h1>
                @if($user->profile_pic)
                    <div class="col-md-2 hidden-xs offset-2">
                        <img style="position:relative;" src="/public/uploads/profile/{{$user->profile_pic}}"
                             class="img-responsive img-thumbnail ">
                        <img style="position:absolute; top:-5px; right:15px;" src="/resources/assets/img/camera.png">
                    </div>
                @else
                    <div class="col-md-2 hidden-xs offset-2">
                        <img style="position:relative;" src="/resources/assets/img/avatar.jpg"
                             class="img-responsive img-thumbnail ">
                        <img style="position:absolute; top:-5px; right:15px;" src="/resources/assets/img/camera.png">
                    </div>
            @endif

            <!-- edit form column -->
                <div class="col-md-9 personal-info">

                    <h3 style="margin-left:22%;">Osobni podatci</h3>


                    <div class="form-group">
                        <label for="first_name" class="col-lg-3 control-label">Name:</label>
                        <div class="col-lg-8">
                            <input id="first_name" name="name" class="form-control" type="text" value="{{Auth::user()->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_email" class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input id="user_email" name="email" class="form-control" type="text" value="{{Auth::user()->email}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="pass" class="col-md-3 control-label">New Password:</label>
                        <div class="col-md-8">
                            <input id="pass" name="password" class="form-control" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass_repet" class="col-md-3 control-label">Confirm password:</label>
                        <div class="col-md-8">
                            <input id="pass_repet" name="password-repeat" class="form-control" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-luksha" value="Save Changes">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


</main> <!-- KRAJ MAINA -->

@include('layouts.footer')


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/resources/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script>
    $(document).ready(function () {
        var mode = false;
        $('a[id="nightmodeID"]').click(function () {
            if (mode == false) {
                $('body').css('background', '#142634');
                $('body').css('color', '#BDC7C1');
                $('div[class="jumbotron"]').css('background', '#142634');
                $('hr').css('background', 'white');
                $('nav').css('border-bottom', '1px solid white');
                $('footer').css('background', '#142634');
                $('ul[class="paginator"]').css('background', '#142634');
                mode = true;
            } else {
                $('body').css('background', '#fff');
                $('body').css('color', 'black');
                $('div[class="jumbotron"]').css('background', '#e9ecef');
                $('hr').css('background', 'grey');
                $('nav').css('background', '#343a40');
                $('footer').css('background', '#e9ecef');
                mode = false;
            }
        });
    })
</script>
<script src="/resources/assets/js/vendor/popper.min.js"></script>
<script src="/resources/dist/js/bootstrap.min.js"></script>
</body>
</html>