

<?php
//Login?
$is_login = $this->session->userdata('is_login');
$i = 0;
$keywords = $this->input->get('keywords');

?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Buku
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-server"></i> Master</a></li>
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
                    <?php if ($juduls) : ?>
                        <table id="table_buku" class="table table-bordered table-striped dataTable">
                            <thead>
                            <tr><th>No</th>
                                <th>ISBN</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Jumlah Copy</th>
                                <th>Cover</th>
                                <th>Letak</th>
                                <?php if ($is_login) : ?>
                                <th>Tambah</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <?php endif ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($juduls as $judul): ?>
                                <tr>
                                <td><?= ++$i ?></td>
                                <td><?= $judul->isbn ?></td>
                                <td><?= $judul->judul_buku ?></td>
                                <td><?= $judul->penulis ?></td>
                                <td><?= $judul->penerbit ?></td>
                                <td>Total: <?=  $judul->jumlah_total != 0 ? anchor("buku/total/$judul->id_judul",$judul->jumlah_total) : $judul->jumlah_total ?>
                                    <br>
                                    Ada : <?= $judul->jumlah_ada != 0 ? anchor("buku/ada/$judul->id_judul",$judul->jumlah_ada) : $judul->jumlah_ada ?>
                                    <br>
                                    Dipinjam : <?= $judul->jumlah_dipinjam != 0 ? anchor("buku/dipinjam/$judul->id_judul",$judul->jumlah_dipinjam) : $judul->jumlah_dipinjam ?> </td>
                                <td>
                                    <?php if (!empty($judul->cover)): ?>
                                        <img src="<?= site_url("cover/$judul->cover") ?>" alt="<?= $judul->judul_buku ?>">
                                    <?php else: ?>
                                        <img src="<?= site_url("cover/no_cover.jpg") ?>" alt="<?= $judul->judul_buku ?>">
                                    <?php endif?>
                                </td>
                                <td><?= $judul->letak ?></td>
                                <?php if ($is_login) : ?>
                                    <td>
                                    <?= form_open("buku/create") ?>
                                    <?= form_hidden('id_judul',$judul->id_judul) ?>
                                    <?= form_hidden('first_load',true) ?>
                                    <?= form_button(['type' => 'submit','content' => "Tambah<br>Buku", 'class' => 'btn btn-success']) ?>
                                    <?= form_close() ?></td>
                                    <td>
                                    <?= anchor("judul/edit/$judul->id_judul", 'Edit<br>Judul', ['class' => 'btn btn-warning']) ?>
                                    </td>
                                    <td>
                                    <?= form_open("judul/delete/$judul->id_judul") ?>
                                    <?= form_hidden('id_judul',$judul->id_judul) ?>
                                    <?= form_button(['type' => 'submit', 'content' => 'Delete<br>Judul', 'class' => 'btn btn-danger','onclick' => "return confirm('Anda yakin akan menghapus judul ini?')"]) ?>
                                    <?= form_close() ?>
                                </td>
                                    </tr>
                            <?php endif ?>
                            <?php endforeach ?>
                            </tbody>


                        </table>
                    <?php else: ?>
                        <p>Tidak ada data Buku</p>
                    <?php endif ?>
                    <div class="row">
                        <!--    Button Create-->
                        <div class="col-xs-12">
                            <?php if ($is_login): ?>
                                <?= anchor("judul/create",'Tambah Judul',['class' => 'btn btn-primary']) ?>
                            <?php else: ?>
                                &nbsp;
                            <?php endif ?>
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