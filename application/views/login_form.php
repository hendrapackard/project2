<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login</title>


    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

    <link rel="stylesheet" href="<?= base_url();?>adminlte/login/css/style.css">
<!--    <link rel="stylesheet" href="--><?//= base_url();?><!--adminlte/login/css/login.css">-->


</head>

<body>
<div class="login-wrap">
    <div class="login-html">
        <?php if (!empty($this->session->flashdata('error'))) : ?>
            <p id="message"><?= $this->session->flashdata('error') ?></p>
        <?php endif ?>
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-1" class="tab"></label>
        <?= form_open('login',['name' => 'login_form','class' => 'login-form']); ?>



            <div class="sign-in-htm">
                <div class="group">
                    <?= form_label('Username', 'username',['class' => 'label']) ?>
                    <?= form_input('username', $input->username, ['class' => 'input']) ?>
                    <?= form_error('username','<span class="field_error">', '</span>') ?>
                </div>

                <div class="group">
                    <?= form_label('Password', 'password',['class' => 'label']) ?>
                    <?= form_password('password', $input->password, ['class' => 'input'])?>
                    <?= form_error('password',
                        '<span class="field_error">', '</span>'); ?>
                </div>

                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <input type="submit" name="submit" class="button" value="Sign In">
                </div>
                <?= form_close() ?>
                <div class="hr"></div>

            </div>
        </div>
    </div>
</div>


</body>
</html>
