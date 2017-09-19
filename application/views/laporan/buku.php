

<?php
$i = 0;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Laporan Buku
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-archive"></i> Laporan</a></li>
        <li class="active">Buku</li>
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
                    <?php if ($bukus) : ?>
                        <table id="data_table" class="table table-bordered table-striped dataTable">
                            <thead>
                            <tr><th>No</th>
                                <th>ISBN</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Jumlah</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($bukus as $judul): ?>
                                <tr>
                                <td><?= ++$i ?></td>
                                <td><?= $judul->isbn ?></td>
                                <td><?= $judul->judul_buku ?></td>
                                <td><?= $judul->penulis ?></td>
                                <td><?= $judul->penerbit ?></td>
                                <td><?= $judul->jumlah ?></td>
                                    </tr>
                            <?php endforeach ?>
                            </tbody>


                        </table>
                    <?php else: ?>
                        <p>Tidak ada data Buku</p>
                    <?php endif ?>
                    <div class="row">
                        <!--    Button Create-->
                        <div class="col-xs-12">
                                <?= anchor("cetak-laporan-buku",'Cetak',['class' => 'btn btn-primary','target' => '_blank']) ?>
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