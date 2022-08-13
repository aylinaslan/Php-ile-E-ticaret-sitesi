<?php include 'header.php';

require_once 'sidebar.php';










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
                    <input  name="sliderbaslik" type="text" class="form-control"  placeholder="Lütfen  kullanıcı adını giriniz.">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">slider açıklama</label>
                    <input  name="slideraciklama" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">slider sıra</label>
                    <input  name="slidersira" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">slider link</label>
                    <input  name="sliderlink" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">slider button adı</label>
                    <input  name="sliderbutton" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
             
             
               
                  <div class="form-group">
                    <label>slider durum</label>
                    <select name="sliderdurum" class="form-control select2" style="width: 100%;">
                      <option value="1" selected="selected">Aktif</option>
                      <option value="0">Pasif</option>

                    </select>
                  </div>


  
                  <div class="form-group">
                    <label>slider banner</label>
                    <select name="sliderbanner" class="form-control select2" style="width: 100%;">
                      <option value="1" selected="selected">Slider yap</option>
                      <option value="0">Banner yap</option>

                    </select>
                  </div>
                  <div class="card-footer">
                    <button name="sliderkaydet" type="submit" class="btn btn-primary">Gönder</button>
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