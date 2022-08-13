<?php require_once 'header.php'; ?>
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form action="islem.php" method="post" >
                                <div class="login-form">
                                     <h4 class="login-title">Giriş yap <?php if (@$_GET['durum']=="hata") { ?>
                                 <i style="color:red">    Kullanıcı adı ya da şifre hatalı</i>
                               <?php     } ?>

<?php if (@$_GET['durum']=="gulegule") { ?>
                                 <i style="color:#FF6347">   Görüşmek üzere yine bekleriz</i>
                               <?php     } ?>

<?php if (@$_GET['durum']=="girisyap") { ?>
                                 <i style="color:#FF6347">  Lütfen giriş yapınız</i>
                               <?php     } ?>
                           </h4>

                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Kullanıcı adı*</label>
                                            <input name="kadi" required="" class="mb-0" type="text" placeholder="Kullanıcı adınızı giriniz.">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Şifre</label>
                                            <input name="sifre" required="" class="mb-0" type="password" placeholder="Şifrenizi giriniz.">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Beni hatırla</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                            <a href="sifremiunuttum"> Şifrenizi mi unuttunuz?</a>
                                        </div>
                                        <div class="col-md-12">
                                            <button name="login" class="register-button mt-0">GİRİŞ yap</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="islem.php" method="post">
                                <div class="login-form">
                                    <h4 class="login-title">Kayıt



sifreeksik



                                     <?php if (@$_GET['durum']=="kullanicivar") { ?>
                                        <i style="color:red">Bu kullanıcı sistemde kayıtlı</i>
                                  <?php    }  elseif(@$_GET['durum']=="sifrehata"){ ?> 

 <i style="color:red">Şifreniz uyuşmuyor lütfen iki şifreyi de aynı girin</i>
<?php } elseif (@$_GET['durum']=="sifreeksik") { ?>
   <i style="color:red">Lütfen minimum 8 karakter olacak şekilde şifre girin</i>
<?php } elseif (@$_GET['durum']=="basarisiz") { ?>
<i style="color:red">İşlem başarısız</i>
<?php } ?>




                                 </h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Kullanıcı adı </label>
                                            <input name="kadi" required="" class="mb-0" type="text" placeholder="Kullanıcı adınızı giriniz.">
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Ad soyad</label>
                                            <input name="adsoyad" required="" class="mb-0" type="text" placeholder="Ad soyadınızı giriniz.">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Email adresi </label>
                                            <input name="email" required="" class="mb-0" type="email" placeholder="Email adresinizi giriniz.">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Şifre</label>
                                            <input name="sifre" required="" class="mb-0" type="password" placeholder="Şifrenizi giriniz.">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Şifre tekrar</label>
                                            <input name="sifretekrar" required="" class="mb-0" type="password" placeholder="Şifrenizi tekrar giriniz.">
                                        </div>
                                        <div class="col-12">
                                            <button name="register" class="register-button mt-0">Kayıt ol</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          <?php require_once 'footer.php'; ?>