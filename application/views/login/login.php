<!-- komentar -->
<!-- <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title> -->
    <!-- BOOTSTRAP STYLES-->
<!--     <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>"  /> -->
     <!-- FONTAWESOME STYLES-->
<!--     <link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet" /> -->
        <!-- CUSTOM STYLES-->
<!--     <link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet" />

</head>
<body>
    

    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <?php $message = $this->session->flashdata('pesan');?>
                <?php echo !empty($message)? '<p style="color:red;">'.$message.'</p>':'' ; ?>
                <br /><br />
                <h2>APLIKASI RENTAL MOBIL</h2>
               
                <h5>( Login Untuk Masuk )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong><center>    Masukkan Username dan Password  </center></strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST">
                                       <br />
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="txtUser" value="<?php echo set_value('txtUser'); ?>" class="form-control" placeholder="Username ">
                                            <?php echo form_error('txtUser'); ?>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="txtPass" value="<?php echo set_value('txtPass'); ?>" class="form-control" placeholder="Password">
                                            <?php echo form_error('txtPass'); ?>
                                        </div>
                                     
                                     <input type="submit" name="login" value="LOGIN" class="btn btn-primary btn-block">
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
 
</body>
</html>  
 -->


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo base_url('img/favicon.png');?>">

  <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('templatelogin/css/bootstrap.min.css');?>" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('templatelogin/css/bootstrap-theme.css');?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('templatelogin/css/elegant-icons-style.css');?>" rel="stylesheet" />
  <link href="<?php echo base_url('templatelogin/css/font-awesome.css');?>" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url('templatelogin/css/style.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('templatelogin/css/style-responsive.css');?>" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">
    <div class="row text-center ">
            <div class="col-md-12">
                <?php $message = $this->session->flashdata('pesan');?>
                <?php echo !empty($message)? '<h3 style="color:red;">'.$message.'</h3>':'' ; ?>
                
            </div>
    </div>
    <form class="login-form" action="" method="POST">
       <h3 align="center">Aplikasi Rental Mobil</h3> 
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="txtUser" value="<?php echo set_value('txtUser'); ?>" class="form-control" placeholder="Username" autofocus>

        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="txtPass" value="<?php echo set_value('txtPass'); ?>" class="form-control" placeholder="Password">

        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
      </div>
    </form>
    
  </div>


</body>

</html>