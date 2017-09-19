
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <h1>
            Home
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
            <li class="active">Home</li>
        </ol>
    </section>

    <?php
        $is_login = $this->session->userdata('is_login');
        $username = $this->session->userdata('username');
    ?>

    <?php if ($is_login): ?>
    <!-- Main content -->
    <section class="content">

              <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $jmlAnggota ?></h3>

              <p>Total Anggota</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $jmlBuku ?></h3>

              <p>Total Buku</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $jmlJudul ?></h3>

              <p>Total Judul Buku</p>
            </div>
            <div class="icon">
              <i class="ion ion-pricetags"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $jmlKembali ?></h3>

              <p>Buku Sedang Dipinjam</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-loop-strong fa-spin"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><p>Halo, <strong><?= ucwords($username) ?></strong>!</p>
                </h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>


            <!-- /.box-body -->
            <div class="box-footer">
                <p>Selamat Bekerja</p>
            </div>
            <!-- /.box-footer-->



        </div>
        <!-- /.box -->


        <div class="row">
            <div class="col-md-6">

                <!-- DONUT CHART -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Grafik Lingkaran</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="graf" style="height:250px"></div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>

            <div class="col-md-6">

                <!-- DONUT CHART -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Grafik Batang</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="graf2" style="height:250px"></div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col (LEFT) -->

            <!-- /.col (RIGHT) -->
        </div>

    </section>


    <!-- /.content -->

<?php else: ?>
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><p>Selamat datang di Perpustakaan <strong>SMA Negeri 2 Cileungsi </strong>!</p></h3>


                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                &nbsp;<p>Untuk melihat katalog buku, gunakan menu <strong>"Buku"</strong></p>
            </div>
            <div class="box-footer">

            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
        <div class="row">
            <div class="col-md-6">

                <!-- DONUT CHART -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Grafik Lingkaran</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="graf" style="height:250px"></div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>

                <div class="col-md-6">

                    <!-- DONUT CHART -->
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Grafik Batang</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div id="graf2" style="height:250px"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>

    </section>

    <!-- /.content -->


<?php endif ?>


