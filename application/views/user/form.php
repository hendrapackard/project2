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



<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah User</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?= form_open($form_action) ?>

                <?= isset($input->id_user) ? form_hidden('id_user', $input->id_user) : '' ?>



                <div class="box-body">
                    <div class="form-group col-md-2">
                        <?= form_label('Nama User','nama_user') ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?= form_input('nama_user',$input->nama_user,['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('nama_user') ?>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group col-md-2">
                        <?= form_label('Username','username') ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?= form_input('username',$input->username,['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('username') ?>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group col-md-2">
                        <?= form_label('Password','password') ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?= form_password('password',$input->password,['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('password') ?>
                    </div>
                </div>
                <!-- /.box-body -->

                <!-- radio -->
                <div class="box-body">
                    <div class="form-group">
                        <?= form_label('Level','level',['class' => 'col-md-4']) ?>
                    </div>

                    <div class="form-group">
                        <div class="radio">
                            <label class="col-md-2">
                                <?= form_radio('level','operator',
                                    isset($input->level) && ($input->level == 'operator') ? true : false)
                                ?> Operator
                            </label>

                            <div class="radio">
                                <label class="col-md-2">
                                    <?= form_radio('level','admin',
                                        isset($input->level) && ($input->level == 'admin') ? true : false)
                                    ?> Administrator
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <?= form_error('level') ?>
                        </div>
                    </div>
                </div>
                    <!-- /.box-body -->

                <!-- radio -->
                <div class="box-body">
                    <div class="form-group">
                        <?= form_label('Blokir?','is_blokir',['class' => 'col-md-4']) ?>
                    </div>

                    <div class="form-group">
                        <div class="radio">
                            <label class="col-md-2">
                                <?= form_radio('is_blokir','y',
                                    isset($input->is_blokir) && ($input->is_blokir == 'y') ? true : false)
                                ?> Ya
                            </label>

                            <div class="radio">
                                <label class="col-md-2">
                                    <?= form_radio('is_blokir','n',
                                        isset($input->is_blokir) && ($input->is_blokir == 'n') ? true : false)
                                    ?> Tidak
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <?= form_error('is_blokir') ?>
                        </div>
                    </div>
                </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <?= form_button(['type' => 'submit','content' => 'Simpan','class' => 'btn btn-primary']) ?>
                        &nbsp;
                        <?= anchor("user",'Batal', ['class' => 'btn btn-default']) ?>
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
</div>
<!-- /.content-wrapper -->
<?= form_close() ?>
