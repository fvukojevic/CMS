<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Početna Stranica

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Pocetak</a></li>
            <li class="active">Pocetna</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ $numofPosts }}</h3>

                        <p>Objava</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-file-o"></i>
                    </div>
                    <a href="#" class="small-box-footer">Više <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ $numofComments }}</h3>

                        <p>Komentara</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-comment"></i>
                    </div>
                    <a href="#" class="small-box-footer">Više <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ $numofUsers }}</h3>

                        <p>Korisnika Registrirano</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Više <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{ $numOfCategories }}</h3>

                        <p>Kategorija</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Više <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

    </section>

    <div class="col-md-6" style="margin-top:-30px">
        <div class="box box-primary">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>

                <h3 class="box-title">Podsjetnik</h3>

                <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                <ul class="todo-list">
                    <li>
                        <!-- drag handle -->
                        <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <!-- checkbox -->
                        <input type="checkbox" value="">
                        <!-- todo text -->
                        <span class="text">Marticu reci da pozuri</span>
                        <!-- Emphasis label -->
                        <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Slajder zavrsiti</span>
                        <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Ferdo profili</span>
                        <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Zavrsiti sve</span>
                        <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Predati Projekat</span>
                        <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                        <input type="checkbox" value="">
                        <span class="text">Martic casti ruckom</span>
                        <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
                <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Dodaj Stavku</button>
            </div>
        </div>
        <!-- /.box -->
    </div>
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