<?php $i = 0;
$keywords = $this->input->get('keywords');

?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        User
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-server"></i> Master</a></li>
        <li class="active">User</li>
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
                    <?php if ($users) : ?>
                        <table id="data_table" class="table table-bordered table-striped table-hover dataTable">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Diblokir?</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>

                                <td><?= ++$i ?></td>
                                <td><?= $user->nama_user ?></td>
                                <td><?= $user->username ?></td>
                                <td><?= $user->level ?></td>
                                <td><?= $user->is_blokir == 'n' ? 'Tidak' : 'Ya' ?></td>
                                <td><?= anchor("user/edit/$user->id_user",'Edit',['class' => 'btn btn-warning']) ?></td>
                                <td>
                                    <?= form_open("user/delete/$user->id_user") ?>
                                    <?= form_hidden('id_user', $user->id_user)?>
                                    <?= form_button(['type' => 'submit', 'content' => 'Delete','class' => 'btn btn-danger','onclick' => "return confirm('Anda yakin akan menghapus?')"]) ?>
                                    <?= form_close() ?>
                                </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>


                        </table>
                    <?php else: ?>
                        <p>Tidak ada data user</p>
                    <?php endif ?>
                    <div class="row">
                        <!--    Button Create-->
                        <div class="col-xs-12">
                            <?= anchor("user/create",'Tambah',['class' => 'btn btn-primary']) ?>
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