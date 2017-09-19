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



    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Kelas</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?= form_open($form_action) ?>

                    <?= isset($input->id_kelas) ? form_hidden('id_kelas', $input->id_kelas) : '' ?>


                        <div class="box-body">
                            <div class="form-group col-md-2">
                                <?= form_label('Nama Kelas','nama_kelas') ?>
                            </div>
                            <div class="form-group col-md-4">
                                <?= form_input('nama_kelas',$input->nama_kelas,['class' => 'form-control']) ?>
                            </div>
                            <div class="form-group">
                                <?= form_error('nama_kelas') ?>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <?= form_button(['type' => 'submit','content' => 'Simpan','class' => 'btn btn-primary']) ?>
                            &nbsp;
                            <?= anchor("kelas",'Batal', ['class' => 'btn btn-default']) ?>
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
