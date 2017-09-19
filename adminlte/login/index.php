<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login form shake effect</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?= base_url();?>adminlte/login/css/style.css">

  
</head>

<body>
  <div class="login-form">
     <h1>Perpustakaan</h1>
      <?php if (!empty($this->session->flashdata('error'))) : ?>
          <p id="message"><?= $this->session->flashdata('error') ?></p>
      <?php endif ?>
     <div class="form-group ">
         <?= form_open('login',['name' => 'login_form','class' => 'login-form']); ?>
         <?= form_input('username',$input->username,['class' => 'form-control'],['placeholder' => 'Username'],['id' => 'UserName']) ?>
<!--       <input type="text" class="form-control" placeholder="Username " id="UserName">-->
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
         <?= form_password('password',$input->password,['class' => 'form-control'],['placeholder' => 'Password'],['id' => 'Password']) ?>
<!--         <input type="password" class="form-control" placeholder="Password" id="Passwod">-->
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      <a class="link" href="#">Lost your password?</a>
     <button type="button" class="log-btn" >Log in</button>
     
    
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?= base_url();?>adminlte/login/js/index.js"></script>

</body>
</html>
