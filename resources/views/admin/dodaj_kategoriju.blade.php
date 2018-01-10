<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RWA | Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

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
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Luka Bjelica</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>



            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">NAVIGACIJA</li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="../Pocetna.html"><i class="fa fa-home"></i> <span>Pocetna</span></a></li>
                <li><a href="korisnici.html"><i class="fa fa-users"></i> <span>Korisnici</span></a></li>
                <li class="treeview active">
                    <a href="objave.html">
                        <i class="fa fa-files-o"></i>
                        <span>Objave</span>

                    </a>
                    <ul class="treeview-menu">

                        <li ><a href="objave.html"><i class="fa fa-file"></i> <span>Sve Objave</span></a></li>
                        <li ><a href="dodaj_objavu.html"><i class="fa fa-plus-circle"></i> <span>Dodaj Objavu</span></a></li>
                        <li class="active"><a href="dodaj_kategoriju.html"><i class="fa fa-plus-circle"></i> <span>Dodaj Kategoriju</span></a></li>
                        <li ><a href="dodaj_tag.html"><i class="fa fa-plus-circle"></i> <span>Dodaj Tag</span></a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Kategorije

            </h1>
            <ol class="breadcrumb">
                <li><a href="../Pocetna.html"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li>Objave</li>
                <li class="active">Dodaj Kategoriju</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <div class="input-group margin">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-warning">DODAJ KATEGORIJU</button>
                                </div>
                                <input type="text" id="dodaj_kategoriju" class="form-control"> <!-- Ovaj je input za Kategoriju -->

                            </div>

                            <div class="box-tools">

                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Naziv</th>

                                    <th>Status</th>
                                    <th>Autor</th>
                                    <th>Opis</th>
                                    <th>Upravljanje</th>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>MUŠKARCI</td>

                                    <td><span class="label label-success">AKTIVNA</span></td>
                                    <td> Luka Bjelica </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td><span class="label label-warning">UREDI</span>
                                        <span class="label label-danger">OBRIŠI</span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>ŽENE</td>

                                    <td><span class="label label-success">AKTIVNA</span></td>
                                    <td> Luka Bjelica </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td><span class="label label-warning">UREDI</span>
                                        <span class="label label-danger">OBRIŠI</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>LJUDI</td>

                                    <td><span class="label label-warning">NIJE SPREMLJENO</span></td>
                                    <td> Luka Bjelica </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td><span class="label label-warning">UREDI</span>
                                        <span class="label label-danger">OBRIŠI</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>AUTOMOBILI</td>

                                    <td><span class="label label-warning">NIJE SPREMLJENO</span></td>
                                    <td> Luka Bjelica </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td><span class="label label-warning">UREDI</span>
                                        <span class="label label-danger">OBRIŠI</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>ŽIVOTINJE</td>

                                    <td><span class="label label-warning">NIJE SPREMLJENO</span></td>
                                    <td> Luka Bjelica </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td><span class="label label-warning">UREDI</span>
                                        <span class="label label-danger">OBRIŠI</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>ZEMLJA</td>

                                    <td><span class="label label-warning">NIJE SPREMLJENO</span></td>
                                    <td> Luka Bjelica </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td><span class="label label-warning">UREDI</span>
                                        <span class="label label-danger">OBRIŠI</span></td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

            <div class="pull-right">
                <button class="btn btn-success">SPREMI SVE</button>

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

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>