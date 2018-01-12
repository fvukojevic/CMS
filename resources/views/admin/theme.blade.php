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
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="/public/dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- DataTables -->
    <link rel="stylesheet" href="/public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>

        .nav-tabs-custom>.nav-tabs>li.active {
            border-top-color:#563e7c;
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('admin.header')
@include('admin.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Izgled

            </h1>
            <ol class="breadcrumb">
                <li><a href="/public/admin"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li class="active">Izgled</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="col-md-8">

                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Jeste li sigurni?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Ukoliko želite potvrditi radnju kliknite spremi promjene&hellip;</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">ZATVORI</button>
                                <button type="button" class="btn btn-success">SPREMI PROMJENE</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Personolizacija Teme</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Slider</a>


                        </li>
                        <li><a href="#tab_3" data-toggle="tab">Ostalo</a></li>

                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <b>Što možete promjeniti?</b>

                            <p>Čitav izgled glavne početne stranice bez ikakvog diranja u sami kod. Počevši od izgleda, boje, veličine fontova,
                                vrste fontova, dodavanje teksta i još puno stvari. </p>
                            <hr>
                            <div class="form-group">
                                <label>Boja Glavne Pozadine</label>
                                <select class="form-control">
                                    <option>Bijela</option>
                                    <option>Crvena</option>
                                    <option>Zelena</option>
                                    <option>Zuta</option>
                                    <option>Crna</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Glavna Boja Stranice</label>
                                <select class="form-control">
                                    <option>Bijela</option>
                                    <option>Crvena</option>
                                    <option>Zelena</option>
                                    <option>Zuta</option>
                                    <option>Crna</option>
                                </select>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label>Boja Navigacije</label>
                                <select class="form-control">
                                    <option>Bijela</option>
                                    <option>Crvena</option>
                                    <option>Zelena</option>
                                    <option>Zuta</option>
                                    <option>Crna</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Velicina Teksta Navigacije</label>
                                <select class="form-control">
                                    <option>5px</option>
                                    <option>7px</option>
                                    <optio>8px</option>
                                        <option>10px</option>
                                        <option>12px</option>
                                        <option>14px</option>
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Boja Podnozja</label>
                                <select class="form-control">
                                    <option>Bijela</option>
                                    <option>Crvena</option>
                                    <option>Zelena</option>
                                    <option>Zuta</option>
                                    <option>Crna</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Velicina Teksta Podnozja</label>
                                <select class="form-control">
                                    <option>5px</option>
                                    <option>7px</option>
                                    <optio>8px</option>
                                        <option>10px</option>
                                        <option>12px</option>
                                        <option>14px</option>
                                </select>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label>Velicina Naslova Objava</label>
                                <select class="form-control">
                                    <option>h1</option>
                                    <option>h2</option>
                                    <optio>h3</option>
                                        <option>h4</option>
                                        <option>h5</option>
                                        <option>h6</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Velicina Teksta Objava</label>
                                <select class="form-control">
                                    <option>5px</option>
                                    <option>7px</option>
                                    <optio>8px</option>
                                        <option>10px</option>
                                        <option>12px</option>
                                        <option>14px</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <p> <label>Prikaz Kategorija u Objavama</label> </p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_kategorije" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_kategorije" >
                                </label>

                            </div>

                            <div class="form-group">
                                <p> <label>Prikaz Tagova u Objavama</label> </p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_tag" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_tag" >
                                </label>

                            </div>

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <b>Što možete promjeniti?</b>

                            <p>Trenutno postoje samo 3 slajda s kojima možete manipulirati, brisati slajd ili ga totalno isključiti, sve je na vama. U sljedećim updejtima planiramo puno poboljšati uređivanje slajdova. </p>

                            <div class="form-group">
                                <p> <label>Slajder Upaljen</label> </p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_slajd_gl" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_slajd_gl" >
                                </label>

                            </div>
                            <hr>
                            <h3><label class="label label-warning"> Prvi Slajd</label> </h3>

                            <div class="form-group">
                                <p> <label>Slajd Aktivan</label> </p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_slajd_1" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_slajd_1" >
                                </label></div>

                            <div class="form-group">
                                <label>Boja Pozadine</label>
                                <select class="form-control">
                                    <option>Bijela</option>
                                    <option>Crvena</option>
                                    <option>Zelena</option>
                                    <option>Zuta</option>
                                    <option>Crna</option>
                                </select>
                            </div>

                            <!-- text input -->
                            <div class="form-group">
                                <label>Naslov Slajdera</label>
                                <input type="text" class="form-control" placeholder="Naslov #1">
                            </div>

                            <!-- textarea -->
                            <div class="form-group">
                                <label>Tekst Ispod Naslova</label>
                                <textarea class="form-control" rows="3" placeholder="Tekst #1"></textarea>
                            </div>

                            <div class="form-group">
                                <p> <label>Button Aktivan</label> </p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_slajd_button_1" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_slajd_button_1" >
                                </label></div>

                            <!-- text input -->
                            <div class="form-group">
                                <label>Naziv Buttona</label>
                                <input type="text" class="form-control" placeholder="Button #1">
                            </div>

                            <!-- text input -->
                            <div class="form-group">
                                <label>Link Gdje Button Vodi <small>(http://www.google.com)</small></label>
                                <input type="text" class="form-control" placeholder="Link #1">
                            </div>



                            <hr>
                            <h3><label class="label label-warning"> Drugi Slajd</label> </h3>

                            <div class="form-group">
                                <p> <label>Slajd Aktivan</label> </p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_slajd_2" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_slajd_2" >
                                </label></div>

                            <div class="form-group">
                                <label>Boja Pozadine</label>
                                <select class="form-control">
                                    <option>Bijela</option>
                                    <option>Crvena</option>
                                    <option>Zelena</option>
                                    <option>Zuta</option>
                                    <option>Crna</option>
                                </select>
                            </div>

                            <!-- text input -->
                            <div class="form-group">
                                <label>Naslov Slajdera</label>
                                <input type="text" class="form-control" placeholder="Naslov #2">
                            </div>

                            <!-- textarea -->
                            <div class="form-group">
                                <label>Tekst Ispod Naslova</label>
                                <textarea class="form-control" rows="3" placeholder="Tekst #2"></textarea>
                            </div>

                            <div class="form-group">
                                <p> <label>Button Aktivan</label> </p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_slajd_button_2" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_slajd_button_2" >
                                </label></div>

                            <!-- text input -->
                            <div class="form-group">
                                <label>Naziv Buttona</label>
                                <input type="text" class="form-control" placeholder="Button #2">
                            </div>

                            <!-- text input -->
                            <div class="form-group">
                                <label>Link Gdje Button Vodi <small>(http://www.google.com)</small></label>
                                <input type="text" class="form-control" placeholder="Link #2">
                            </div>


                            <hr>
                            <h3><label class="label label-warning"> Treci Slajd</label> </h3>

                            <div class="form-group">
                                <p> <label>Slajd Aktivan</label> </p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_slajd_3" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_slajd_3" >
                                </label></div>

                            <div class="form-group">
                                <label>Boja Pozadine</label>
                                <select class="form-control">
                                    <option>Bijela</option>
                                    <option>Crvena</option>
                                    <option>Zelena</option>
                                    <option>Zuta</option>
                                    <option>Crna</option>
                                </select>
                            </div>

                            <!-- text input -->
                            <div class="form-group">
                                <label>Naslov Slajdera</label>
                                <input type="text" class="form-control" placeholder="Naslov #3">
                            </div>

                            <!-- textarea -->
                            <div class="form-group">
                                <label>Tekst Ispod Naslova</label>
                                <textarea class="form-control" rows="3" placeholder="Tekst #3"></textarea>
                            </div>


                            <div class="form-group">
                                <p> <label>Button Aktivan</label> </p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_slajd_button_3" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_slajd_button_3" >
                                </label>    </div>

                            <!-- text input -->
                            <div class="form-group">
                                <label>Naziv Buttona</label>
                                <input type="text" class="form-control" placeholder="Button #3">
                            </div>

                            <!-- text input -->
                            <div class="form-group">
                                <label>Link Gdje Button Vodi <small>(http://www.google.com)</small></label>
                                <input type="text" class="form-control" placeholder="Link #3">
                            </div>



                        </div>

                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                            <div class="form-group">
                                <p> <label>Dopusti Komentare</label> </p>
                                <label>
                                    DA
                                    <input type="radio" name="radio_komentar" checked>
                                </label>
                                <label>
                                    NE
                                    <input type="radio" name="radio_komentar" >
                                </label>

                            </div>
                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content --><button type="button" class="btn btn-success  pull-right" data-toggle="modal" data-target="#modal-default">
                        SPREMI PROMJENE
                    </button>
                    <button class="btn btn-warning pull-right"> RESETIRAJ</button>
                </div>
                <!-- nav-tabs-custom -->
            </div>
            <!-- /.col -->


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

<!-- DataTables -->
<script src="/public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
</body>
</html>