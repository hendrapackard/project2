
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Peminjaman
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-shopping-cart"></i> Transaksi</a></li>
        <li class="active">Peminjaman</li>
    </ol>
</section>

<!--flash message-->
<?php $this->load->view('_partial/flash_message') ?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box table-responsive">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if ($peminjaman) : ?>
                        <table id="table_peminjaman" class="table table-bordered table-striped table-hover dataTable">
                            <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>No Induk</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Kode Buku</th>
                                <th>Judul</th>
                                <th>Kembali ?</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($peminjaman as $pinjam): ?>

                                <td><?= $pinjam->tanggal_pinjam ?></td>
                                <td><?= $pinjam->no_induk ?></td>
                                <td><?= $pinjam->nama_anggota ?></td>
                                <td><?= $pinjam->nama_kelas ?></td>
                                <td><?= $pinjam->kode_buku ?></td>
                                <td><?= $pinjam->judul_buku ?></td>
                                <td><?= $pinjam->is_kembali == 'n' ? '<span class="label label-danger">Belum' : '<span class="label label-success">Sudah' ?></td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>


                        </table>
                    <?php else: ?>
                        <p>Tidak ada data peminjaman</p>
                    <?php endif ?>
                    <div class="row">
                        <!--    Button Create-->
                        <div class="col-xs-12">
                            <?= anchor("peminjaman/create",'Tambah',['class' => 'btn btn-primary']) ?>
                        </div>
                    </div>
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