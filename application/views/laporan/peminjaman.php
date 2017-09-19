<?php $i = 0 ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Laporan Peminjaman
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-archive"></i> Laporan</a></li>
        <li class="active">Peminjaman</li>
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-10">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?= form_open($form_action) ?>


                <div class="box-body">
                    <div class="form-group">
                        <?= form_label('Tanggal Awal','tanggal_awal') ?>
                    </div>
                    <div class="form-group">
                        <?= form_input('tanggal_awal',$input->tanggal_awal,['class' => 'form-control','placeholder' => 'Tanggal Awal','id' => 'datepicker1']) ?>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <?= form_label('Tanggal Akhir','tanggal_akhir') ?>
                    </div>
                    <div class="form-group">
                        <?= form_input('tanggal_akhir',$input->tanggal_akhir,['class' => 'form-control','placeholder' => 'Tanggal Akhir','id' => 'datepicker2']) ?>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <?= form_button(['type' => 'submit','content' => 'Cari','class' => 'btn btn-primary']) ?>
                    &nbsp;
                    <?= anchor(base_url(),'Batal', ['class' => 'btn btn-default']) ?>
                </div>


            </div>
            <!-- /.box -->


        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
<!-- /.content-wrapper -->
<?= form_close() ?>

<!--Flash message-->
<?php $this->load->view('_partial/flash_message') ?>

<!-- Main content -->
<?php if (!$first_load): ?>
    <section class="content">
        <div class="row">
            <div class="col-xs-10">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php if ($peminjamans) : ?>
                            <table id="table_biasa" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tgl. Pinjam</th>
                                    <th>No Induk</th>
                                    <th>Nama</th>
                                    <th>Kode Buku</th>
                                    <th>Judul Buku</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($peminjamans as $pinjam): ?>

                                    <td><?= ++$i ?></td>
                                    <td><?= $pinjam->tanggal_pinjam ?></td>
                                    <td><?= $pinjam->no_induk ?></td>
                                    <td><?= $pinjam->nama_anggota ?></td>
                                    <td><?= $pinjam->kode_buku ?></td>
                                    <td><?= $pinjam->judul_buku ?></td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <p>Tidak ada data peminjaman</p>
                        <?php endif ?>
                        <?php if ($peminjamans): ?>
                            <div class="row">
                                <div class="col-xs-10">
                                    <?php
                                    $tanggal_awal = $this->input->post('tanggal_awal',true);
                                    $tanggal_akhir = $this->input->post('tanggal_akhir',true);
                                    ?>
                                    <?= anchor("cetak-laporan-peminjaman/$tanggal_awal/$tanggal_akhir", 'Cetak', ['class' => 'btn btn-primary','target' => '_blank']) ?>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>

                    <!-- /.box-body -->
                </div>

                <!-- /.box -->


                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
<?php endif ?>

