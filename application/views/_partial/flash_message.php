<?php
 $success = $this->session->flashdata('success');
 $error = $this->session->flashdata('error');
 $warning = $this->session->flashdata('warning');

 if ($error) {
     $message_status = 'alert alert-danger alert-dismissible';
     $message = $error;
 }

 if ($warning) {
     $message_status = 'alert alert-warning alert-dismissible';
     $message = $warning;
 }

 if ($success) {
     $message_status = 'alert alert-success alert-dismissible';
     $message = $success;
 }
 ?>

<?php if ($success || $warning || $error): ?>
<div class="box-body">
    <div class="<?= $message_status ?>">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Notification</h4>
        <?= $message ?>
    </div>
</div>

<?php endif ?>
