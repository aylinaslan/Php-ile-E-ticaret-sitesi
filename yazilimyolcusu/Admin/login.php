<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Yazılım yolcusu e-ticaret giriş</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-color: black" class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a style="color:white" href="../../index2.html"><b style="color:white">Yazılım </b>Yolcusu</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
 
        <?php
           if (@$_GET['durum']=="hata") { ?>
        <p style="color:red" class="login-box-msg">       Kullanıcı adı ya da şifre hatalı
     <?php      }
       elseif (@$_GET['durum']=="gulegule") { ?>
        <p style="color:black" class="login-box-msg">     Görüşmek üzere
     <?php      }
           else{
            echo "Lütfen giriş bilgilerini giriniz.";
           }





         ?>


</p>

      <form action="islem/islem.php" method="post">
        <div class="input-group mb-3">
          <input name="kadi" type="text" class="form-control" placeholder="Email adresinizi giriniz.">
          <div class="input-group-append">
            <div class="input-group-text">
              <span style="color:black" class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="sifre" type="password" class="form-control" placeholder="Şifrenizi giriniz">
          <div class="input-group-append">
            <div class="input-group-text">
              <span style="color:black" class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
               Ben hatırla
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button name="girisyap" type="submit" class="btn btn-success btn-block">Giriş yap</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


</body>
</html>
