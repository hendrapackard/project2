<?php
$i = 0;
?>
<!--Page heading-->
<section class="content-header">
    <h1>
        Buku (Ada)
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-server"></i> Master</a></li>
        <li class="active">Buku</li>
    </ol>
</section>

<!--Flash message-->
<?php $this->load->view('_partial/flash_message') ?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if ($bukus) : ?>
                        <table id="tabel_biasa" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Buku</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($bukus as $buku): ?>

                                <td><?= ++$i ?></td>
                                <td><?= $buku->kode_buku ?></td>
                                <td><?= $buku->judul_buku ?></td>
                                <td><?= $buku->penulis ?></td>
                                <td><?= $buku->penerbit ?></td>
                                 </tr>
                            <?php endforeach ?>
                            </tbody>


                        </table>
                    <?php else: ?>
                        <p>Tidak ada data buku.</p>
                    <?php endif ?>
                    <div class="row">
                        <!--    Button Create-->
                        <div class="col-xs-12">
                            <?= anchor("judul",'<< Kembali',['class' => 'btn btn-primary']) ?>
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

