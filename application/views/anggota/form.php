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



<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Anggota</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?= form_open($form_action) ?>

                <?= isset($input->id_anggota) ? form_hidden('id_anggota', $input->id_anggota) : '' ?>


                <div class="box-body">
                    <div class="form-group col-md-4">
                        <?= form_label('No Induk','no_induk') ?>
                    </div>
                    <div class="form-group col-md-4">
                        <?= form_input('no_induk',$input->no_induk,['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('no_induk') ?>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group col-md-4">
                        <?= form_label('Nama Anggota','nama_anggota') ?>
                    </div>
                    <div class="form-group col-md-4">
                        <?= form_input('nama_anggota',$input->nama_anggota,['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('nama_anggota') ?>
                    </div>
                </div>
                <!-- /.box-body -->

                <!-- radio -->
                <div class="box-body">
                    <div class="form-group">
                        <?= form_label('Jenis Kelamin','jenis_kelamin',[ 'class' => 'col-md-4']) ?>
                    </div>

                    <div class="form-group">
                    <div class="radio">
                        <label class="col-md-2">
                            <?= form_radio('jenis_kelamin','l',
                                isset($input->jenis_kelamin) && ($input->jenis_kelamin == 'l') ? true : false)
                            ?> Laki-laki
                        </label>

                    <div class="radio">
                        <label class="col-md-2">
                            <?= form_radio('jenis_kelamin','p',
                                isset($input->jenis_kelamin) && ($input->jenis_kelamin == 'p') ? true : false)
                            ?> Perempuan
                        </label>
                    </div>
                    </div>

                        <div class="form-group">
                        <?= form_error('jenis_kelamin') ?>
                    </div>
                </div>
                </div>
                <!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group col-md-4">
                        <?= form_label('Kelas','id_kelas') ?>
                    </div>
                    <div class="form-group col-md-4">
                        <?= form_dropdown('id_kelas', getDropdownList('kelas',['id_kelas','nama_kelas']),$input->id_kelas, 'id="kelas"') ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('id_kelas') ?>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <?= form_button(['type' => 'submit','content' => 'Simpan','class' => 'btn btn-primary']) ?>
                    &nbsp;
                    <?= anchor("anggota",'Batal', ['class' => 'btn btn-default']) ?>
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
