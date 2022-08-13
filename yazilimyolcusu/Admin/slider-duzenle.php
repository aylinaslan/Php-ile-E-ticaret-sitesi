<?php include 'header.php';

require_once 'sidebar.php';


 

$slider=$baglanti->prepare("SELECT * FROM  slider where slider_id=:slider_id");
$slider->execute(array(

'slider_id'=>$_GET['id']
));
$slidercek=$slider->fetch(PDO::FETCH_ASSOC);








?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content">
    <div class="container-fluid">

      <div class="row">





        <div class="card card-primary col-md-12">
          <div class="card-header">
            <h3 class="card-title">sliderler </h3>         </div> <?php 

            if (@$_GET['yuklenme']=="basarili") { ?>
              <h6 style="color:green">(Yükleme işlemi başarılı)</h6>
            <?php }

            elseif(@$_GET['yuklenme']=="basarisiz"){ ?>
              <h6 style="color:red">(Yükleme işlemi başarısız)</h6><?php }
              elseif(@$_GET['yuklenme']=="kullanicivar"){ ?>
                <h6 style="color:red">(Bu kullanıcı kayıtlı)</h6>


              <?php }   ?>

              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" >
                <div class="card-body">

  <div class="form-group">
                    <label for="exampleInputEmail1">slider resim</label>
                    <input  name="slideresim" type="file" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">slider başlık</label>
                    <input value="<?php echo $slidercek['slider_baslik'] ?>"  name="sliderbaslik" type="text" class="form-control"  placeholder="Lütfen  kullanıcı adını giriniz.">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">slider açıklama</label>
                    <input  value="<?php echo $slidercek['slider_aciklama'] ?>"  name="slideraciklama" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">slider sıra</label>
                    <input value="<?php echo $slidercek['slider_sira'] ?>"  name="slidersira" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">slider link</label>
                    <input value="<?php echo $slidercek['slider_link'] ?>"  name="sliderlink" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">slider button adı</label>
                    <input value="<?php echo $slidercek['slider_button'] ?>"  name="sliderbutton" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
             
             
               
                  <div class="form-group">
                    <label>slider durum</label>
                    <select name="sliderdurum" class="form-control select2" style="width: 100%;">
                      <option <?php if ($slidercek['slider_durum']=="1") {
                        echo "selected";
                      } ?> value="1" selected="selected">Aktif</option>
                      <option <?php if ($slidercek['slider_durum']=="0") {
                      echo "selected";
                      } ?> value="0">Pasif</option>

                    </select>
                  </div>

<input type="hidden" name="id" value="<?php echo $slidercek['slider_id'] ?>">
<input type="hidden" name="eskiresim" value="<?php echo $slidercek['slider_resim'] ?>">
  
                  <div class="form-group">
                    <label>slider banner</label>
                    <select name="sliderbanner" class="form-control select2" style="width: 100%;">
                      <option <?php if ($slidercek['slider_banner']=="1") {
                            echo "selected";
                      } ?> value="1" selected="selected">Slider yap</option>
                      <option <?php if ($slidercek['slider_banner']=="0") {
                               echo "selected";
                      } ?> value="0">Banner yap</option>

                    </select>
                  </div>
                  <div class="card-footer">
                    <button name="sliderduzenle" type="submit" class="btn btn-primary">Gönder</button>
                  </div>
                </form>
              </div>











              <!-- right col -->
            </div>
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php require_once 'footer.php'; ?>