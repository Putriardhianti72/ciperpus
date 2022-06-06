<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/dist/css/adminlte.min.css">
</head>

<?php
// Cetak jika ada notifikasi
   if($this->session->flashdata('sukses')) {
        echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
   }
   ?>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url()?>"><b>Perpustakaan</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <?php echo form_open('login');?>
   <p>Username:</p>
   <p>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>"/>
   </p>
   <p> <?php echo form_error('username'); ?> </p>

   <p>Password:</p>
   <p>
        <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
   </p>
   <p> <?php echo form_error('password'); ?> </p>

   <p>
        <input type="submit" name="btnSubmit" value="Login" />
   </p>

   <?php echo form_close();?>

       
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>