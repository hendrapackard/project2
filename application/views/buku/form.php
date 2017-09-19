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
        <div class="col-md-8 no-margin">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                </div>

                <div class="box-body no-padding">
                    <div class="col-md-8">
                        <strong>Anda akan menambahkan buku:</strong>
                    </div>
                    <br><br>
                    <div class="col-md-2">
                        ISBN
                    </div>
                    <div class="col-md-6">
                        <?= $judul->isbn ?>
                    </div>
                    <br><br>
                    <div class="col-md-2">
                        Judul
                    </div>
                    <div class="col-md-8">
                        <?= $judul->judul_buku ?>
                    </div>
                    <br><br>
                    <div class="col-md-2">
                        Penulis
                    </div>
                    <div class="col-md-6">
                        <?= $judul->penulis ?>
                    </div>
                    <br><br>
                    <div class="col-md-2">
                        Penerbit
                    </div>
                    <div class="col-md-4">
                        <?= $judul->penerbit ?>
                    </div>
                    <br><br>
                    <div class="col-md-2">
                        Letak
                    </div>
                    <div class="col-md-4">
                        <?= $judul->letak ?>
                    </div>
                    <br><br>

                </div>
                <div class="col-md-offset-8">
                    <?php if (!empty($judul->cover)): ?>
                        <img src="<?= site_url("cover/$judul->cover") ?>" alt="<?= $judul->judul_buku ?>">
                    <?php else: ?>
                        <img src="<?= site_url("cover/no_cover.jpg") ?> alt="<?= $judul->judul_buku ?>">
                    <?php endif ?>
                </div>
                <br><br>
                <!-- /.box-body -->

                <?= form_open($form_action) ?>

                <?= isset($input->id_judul) ? form_hidden('id_judul',$input->id_judul) : ''?>

                <!--nis-->

                <div class="box-footer">
                <div class="form-group">
                        <?= form_label('Kode Buku','kode_buku') ?>
                    </div>
                    <div class="form-group">
                        <?= form_input('kode_buku', isset($input->kode_buku) ? $input->kode_buku :'') ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('kode_buku') ?>
                    </div>
                </div>



                <div class="box-footer">
                    <div class="col-4">
                    <?= form_button(['type' => 'submit','content' => 'Simpan','class' => 'btn btn-primary']) ?>
                    &nbsp;
                    <?= anchor("judul",'Batal', ['class' => 'btn btn-default']) ?>
                    </div>
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
<!-- /.content-wrapper -->
<?= form_close() ?>


