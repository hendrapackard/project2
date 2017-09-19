 <?php $i = 0 ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Kelas
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-server"></i> Master</a></li>
        <li class="active">Kelas</li>
    </ol>
</section>

<!--flash message-->
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
                    <?php if ($kelass) : ?>
                    <table id="table_biasa" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>KELAS</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($kelass as $kelas): ?>

                        <td><?= ++$i ?></td>
                        <td><?= $kelas->nama_kelas ?></td>
                        <td><?= anchor("kelas/edit/$kelas->id_kelas",'Edit', ['class' => 'btn btn-warning']) ?></td>
                        <td>
                            <?= form_open("kelas/delete/$kelas->id_kelas") ?>
                            <?= form_hidden('id_kelas',$kelas->id_kelas) ?>
                            <?= form_button(['type' => 'submit','content' => 'Delete', 'class' => 'btn btn-danger','onclick' => "return confirm('Anda yakin akan menghapus kelas ini?')"]) ?>
                            <?= form_close() ?>
                        </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>


                    </table>
                    <?php else: ?>
                        <p>Tidak ada data kelas.</p>
                    <?php endif ?>
                    <div class="row">
                        <!--    Button Create-->
                        <div class="col-xs-12">
                            <?= anchor("kelas/create",'Tambah',['class' => 'btn btn-primary']) ?>
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

