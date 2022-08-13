<?php include 'header.php';

require_once 'sidebar.php';



$kategori=$baglanti->prepare("SELECT * FROM  kategori where kategori_id=:kategori_id");
$kategori->execute(array(

'kategori_id'=>$_GET['id']
));
$kategoricek=$kategori->fetch(PDO::FETCH_ASSOC);


 





 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
       
        <div class="row">
    



 
<div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">Kategoriler </h3>         </div> <?php 

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
                    <label for="exampleInputEmail1">Kategori adı</label>
                    <input value="<?php echo $kategoricek['kategori_adi'] ?>"  name="katadi" type="text" class="form-control"  placeholder="Lütfen  kullanıcı adını giriniz.">
                  </div>
             <input type="hidden" name="katid" value="<?php echo $kategoricek['kategori_id'] ?>">
                       <div class="form-group">
                    <label for="exampleInputPassword1">Kategori sıra</label>
                    <input value="<?php echo $kategoricek['kategori_sira'] ?>" name="sira" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz.">
                  </div>
                  <div class="form-group">
                  <label>Kategori durum</label>
                  <select name="kategoridurum" class="form-control select2" style="width: 100%;">
                    <option value="1" <?php if ($kategoricek['kategori_durum']=="1") { echo 'selected';
                   
                    } ?>>Aktif</option>
                    <option value="0" <?php if ($kategoricek['kategori_durum']=="0") { echo 'selected';
                   
                    } ?>>Pasif</option>
                   
                  </select>
                </div>

                <div class="card-footer">
                  <button name="kategoriduzenle" type="submit" class="btn btn-primary">Gönder</button>
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