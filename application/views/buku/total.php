<?php
$i = 0;
$is_login = $this->session->userdata('is_login');
?>
<!--Page heading-->
<section class="content-header">
    <h1>
        Semua Buku (Total / Semua)
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
                                <th>Status</th>
                                <?php if ($is_login) : ?>
                                <th>Delete</th>
                                <?php endif ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($bukus as $buku): ?>

                                <td><?= ++$i ?></td>
                                <td><?= $buku->kode_buku ?></td>
                                <td><?= $buku->judul_buku ?></td>
                                <td><?= $buku->penulis ?></td>
                                <td><?= $buku->penerbit ?></td>
                                <td><?= $buku->is_ada == 'y' ? '<span class="label label-success">ada': '<span class="label label-danger">dipinjam</span>' ?></td>
                                <?php if ($is_login) : ?>
                                <td>
                                    <?= form_open("buku/delete") ?>
                                    <?= form_hidden('id_buku',$buku->id_buku) ?>
                                    <?= form_button(['type' => 'submit','content' => 'Delete', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Anda yakin akan menghapus buku ini?')"]) ?>
                                    <?= form_close() ?>
                                </td>
                            <?php endif ?>
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

