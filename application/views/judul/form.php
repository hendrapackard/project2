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



<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?= form_open_multipart($form_action) ?>

                <?= isset($input->id_judul) ? form_hidden('id_judul', $input->id_judul) : '' ?>


                <div class="box-body">
                    <div class="form-group col-md-2">
                        <?= form_label('ISBN','isbn') ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?= form_input('isbn',$input->isbn,['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('isbn') ?>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group col-md-2">
                        <?= form_label('Judul','judul_buku') ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?= form_input('judul_buku',$input->judul_buku,['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('judul_buku') ?>
                    </div>
                </div>


                <div class="box-body">
                    <div class="form-group col-md-2">
                        <?= form_label('Penulis','penulis') ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?= form_input('penulis',$input->penulis,['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('penulis') ?>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group col-md-2">
                        <?= form_label('Penerbit','penerbit') ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?= form_input('penerbit',$input->penerbit,['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('penerbit') ?>
                    </div>
                </div>


                <div class="box-body">
                    <div class="form-group col-md-2">
                        <?= form_label('Cover','cover') ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?= form_upload('cover') ?>
                    </div>
                    <div class="form-group">
                        <?= fileFormError('cover','<p class="form-error">', '</p>'); ?>
                    </div>
                </div>

                <?php if (!empty($input->cover)): ?>
                <div class="box-body">
                    <div class="form-group col-md-4">
                        &nbsp;
                    </div>
                    <div class="form-group col-md-4">
                        <img src="<?= site_url("/cover/$input->cover") ?>"
                             alt="<?= $input->judul_buku ?>">
                    </div>
                    <div class="form-group">
                       &nbsp;
                    </div>
                </div>

                <?php endif ?>
                <div class="box-body">
                    <div class="form-group col-md-2">
                        <?= form_label('Letak','letak') ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?= form_input('letak',$input->letak,['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('letak') ?>
                    </div>
                </div>

                <!-- /.box-body -->


                    <div class="box-footer">
                        <?= form_button(['type' => 'submit','content' => 'Simpan','class' => 'btn btn-primary']) ?>
                        &nbsp;
                        <?= anchor("judul",'Batal', ['class' => 'btn btn-default']) ?>
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
