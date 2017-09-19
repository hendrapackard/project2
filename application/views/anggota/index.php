<?php $i = 0;
$keywords = $this->input->get('keywords');

?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Anggota
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-server"></i> Master</a></li>
        <li class="active">Anggota</li>
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
                    <?php if ($anggotas) : ?>
                        <table id="data_table" class="table table-bordered table-striped table-hover dataTable">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>No Induk</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($anggotas as $anggota): ?>

                                <td><?= ++$i ?></td>
                                <td><?= $anggota->no_induk ?></td>
                                <td><?= $anggota->nama_anggota ?></td>
                                <td><?= $anggota->nama_kelas ?></td>
                                <td><?= anchor("anggota/edit/$anggota->id_anggota",'Edit',['class' => 'btn btn-warning']) ?></td>
                                <td>
                                    <?= form_open("anggota/delete/$anggota->id_anggota") ?>
                                    <?= form_hidden('id_anggota', $anggota->id_anggota)?>
                                    <?= form_button(['type' => 'submit', 'content' => 'Delete','class' => 'btn btn-danger','onclick' => "return confirm('Anda yakin akan menghapus?')"]) ?>
                                    <?= form_close() ?>
                                </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>


                        </table>
                    <?php else: ?>
                        <p>Tidak ada data anggota</p>
                    <?php endif ?>
                    <div class="row">
                        <!--    Button Create-->
                        <div class="col-xs-12">
                            <?= anchor("anggota/create",'Tambah',['class' => 'btn btn-primary']) ?>
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