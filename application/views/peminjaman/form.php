<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Peminjaman
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-server"></i> Master</a></li>
        <li class="active">Peminjaman</li>
    </ol>
</section>

<!--flash message-->
<?php $this->load->view('_partial/flash_message') ?>

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
                <?= form_open($form_action,['id' => 'form-peminjaman','autocomplete' => 'off']) ?>


                <div class="box-body">
                    <div class="form-group col-md-3">
                        <?= form_label('Tanggal Pinjam','tanggal_pinjam') ?>
                    </div>
                    <div class="form-group col-md-5">
                        <?= form_input('tanggal_pinjam',$input->tanggal_pinjam,['class' => 'form-control','id' => 'datepicker1']) ?>
                    </div>
                    <div class="form-group">
                        <?= form_error('tanggal_pinjam') ?>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group col-md-3">
                        <?= form_label('Anggota','search_anggota') ?>
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="search_anggota" value="<?= $input->search_anggota ?>" id="search_anggota" onkeyup="anggotaAutoComplete()" placeholder="Masukkan No Induk atau Nama Anggota">
                        <ul id="anggota_list" class="live-search-list"></ul>
                    </div>
                    <div class="form-group">
                        <?= form_error('search_anggota') ?>
                    </div>
                </div>
                <!-- /.box-body -->
                <!-- /.box-body -->

                <div class="box-body">
                    <div class="form-group col-md-3">
                        <?= form_label('Buku','search_buku') ?>
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" name="search_buku" value="<?= $input->search_buku ?>" id="search_buku" onkeyup="bukuAutoComplete()" placeholder="Masukkan Judul buku">
                        <ul id="buku_list" class="live-search-list"></ul>
                    </div>
                    <div class="form-group">
                        <?= form_error('search_buku') ?>
                    </div>
                </div>
                <!-- /.box-body -->

                

                    <div class="box-footer">
                        <?= form_button(['type' => 'submit','content' => 'Simpan','class' => 'btn btn-primary']) ?>
                        &nbsp;
                        <?= anchor("peminjaman",'Batal', ['class' => 'btn btn-default']) ?>
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
