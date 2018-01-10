<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RWA | Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/public/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/public/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/public/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/public/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="/public/dist/css/skins/skin-blue.min.css">

    <link rel="stylesheet" href="/public/plugins/iCheck/all.css">
    <link rel="stylesheet" href="/public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>RWA</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>RWA </b>AdminPanel</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">


                    <li>

                        <a href="#" class="btn btn-danger btn-flat">Odjava</a>

                    </li>


                </ul>
            </div>
        </nav>
    </header>
@include('admin.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <h1>
                Uređivač Objava

            </h1>
            <ol class="breadcrumb">
                <li><a href="/public/admin"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li>Objave</li>
                <li class="active">Uređivač Objava</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">


                <div class="col-md-10">
                    <div class="box box-primary">
                        <div class="box-header">
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <form method="POST" action="/public/create">
                                    {{ csrf_field() }}
                                    <div class="input-group margin">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-warning">Naslov</button>
                                        </div>
                                        <input type="text" id="title" name="title" class="form-control">
                                    </div>

                                    <div class="form-group">
                                         Kategorije:
                                        @foreach ($categories as $category)
                                            <label>
                                                <input type="checkbox"value="{{ $category->id }}" class="flat-red">
                                                <span class="label label-warning" style="padding-top: 5px"> {{ $category->name }}</span>
                                            </label>
                                        @endforeach

                                    </div>





                                    <textarea id="editor1" name="body" rows="10" cols="80">
                                            Tekst koji ćete vi promjeniti da bi napisali novu objavu.
                                    </textarea>
                                    <div class="form-group">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-success"> OBJAVI</button>
                                            <button class="btn btn-warning"> SPREMI KAO SKICU</button>
                                            <button class="btn btn-danger"> OBRIŠI</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col-->
                </div>
                <div class="col-md-2">
                    <div class="box box-primary">
                        <div class="box-header"><h3> TAGOVI </h3><span class="small">Odaberite odgovarajuće tagove za vašu objavu.</span></div>
                        <div class="box-body">
                            <div class="form-group">

                                @foreach ($categories as $category)
                                    <label>
                                        <input type="checkbox"value="{{ $category->id }}" class="flat-red">
                                        <span class="label label-warning" style="padding-top: 5px"> {{ $category->name }}</span>
                                    </label>
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
                <!-- ./row -->
            </div>
        </section>

        <!-- Main content -->

    </div>
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        Admin Panel v1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">RWA_FSR_CMS</a>.</strong> All rights reserved.
</footer>


</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="/public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/public/dist/js/adminlte.min.js"></script>


<!-- FastClick -->
<script src="/public/bower_components/fastclick/lib/fastclick.js"></script>


<!-- CK Editor -->
<script src="/public/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>

</body>
</html>