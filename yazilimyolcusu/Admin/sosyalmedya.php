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
                <h3 class="card-title">Sosyal medya  ayarları </h3>         </div> <?php 

if ($_GET['yuklenme']=="basarili") { ?>
<h6 style="color:green">(Yükleme işlemi başarılı)</h6>
<?php }
elseif($_GET['yuklenme']=="basarisiz"){ ?>
<h6 style="color:red">(Yükleme işlemi başarısız)</h6><?php }


                 ?>
     
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook</label>
                    <input value="<?php echo $ayarcek['facebook'] ?>" name="facebook" type="text" class="form-control"  placeholder="Lütfen sitenizin facebook adresini giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">İnstagram</label>
                    <input value="<?php echo $ayarcek['instagram'] ?>" name="instagram" type="text" class="form-control"  placeholder="Lütfen sitenizin instagram adresini giriniz.">
                  </div>
                       <div class="form-group">
                    <label for="exampleInputPassword1">Twitter</label>
                    <input value="<?php echo $ayarcek['twitter'] ?>" name="twitter" type="text" class="form-control"  placeholder="Lütfen sitenizin twitter adresini giriniz.">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Youtube</label>
                    <input value="<?php echo $ayarcek['youtube'] ?>" name="youtube" type="text" class="form-control"  placeholder="Lütfen sitenizin youtube adresini  giriniz.">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="sosyalmedyakaydet" type="submit" class="btn btn-primary">Gönder</button>
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