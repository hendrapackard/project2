<?php $i = 0 ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pengembalian
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-cart"></i> Transaksi</a></li>
        <li class="active">Pengembalian</li>
    </ol>
</section>

<!--flash message-->
<?php $this->load->view('_partial/flash_message') ?>

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
                    <div class="form-group col-md-4">
                        <?= form_label('No Induk / Nama Anggota','keywords') ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?= form_input('keywords',$input->keywords,['class' => 'form-control','placeholder' => 'Masukkan No Induk atau Nama Anggota']) ?>
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
                    <?php if ($peminjaman) : ?>
                        <table id="table_biasa" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Tanggal Pinjam</th>
                                <th>No Induk</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Judul</th>
                                <th>Denda</th>
                                <th>Kembalikan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($peminjaman as $pinjam): ?>

                                <td><?= $pinjam->tanggal_pinjam ?></td>
                                <td><?= $pinjam->no_induk ?></td>
                                <td><?= $pinjam->nama_anggota ?></td>
                                <td><?= $pinjam->nama_kelas ?></td>
                                <td><?= $pinjam->judul_buku ?></td>
                                <td>Rp. <?= number_format($pinjam->denda,0,',','.') ?></td>
                                <td>
                                    <?= form_open("pengembalian/kembalikan") ?>
                                    <?= form_hidden('id_pinjam',$pinjam->id_pinjam) ?>
                                    <?= form_hidden('denda',$pinjam->denda) ?>
                                    <?= form_button(['type' => 'submit','content' => 'Kembalikan', 'class' => 'btn btn-warning','onclick' => "return confirm('Anda yakin akan mengembalikan buku?')"]) ?>
                                    <?= form_close() ?>
                                </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <p>Data peminjaman untuk anggota tersebut tidak ada, atau buku yang dipinjam sudah dikembalikan</p>
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



