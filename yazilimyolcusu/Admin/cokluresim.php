<?php include 'header.php';

require_once 'sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <?php 

        if (@$_GET['yuklenme']=="basarili") { ?>
          <h6 style="color:green">(Yükleme işlemi başarılı)</h6>
        <?php }
        elseif(@$_GET['yuklenme']=="basarisiz"){ ?>
          <h6 style="color:red">(Yükleme işlemi başarısız)</h6><?php }


          ?>


          <div class="col-12">
            <form action="resimyukle" method="post" enctype="multipart/form-data" class="dropzone">
  


<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">



</form>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">çoklu resim</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->   
              <div class="card-body table-responsive p-0">

                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th> resim</th>
                      
                      <th>Sil</th>

                    </tr>
                   </thead>
                  <tbody>
                    <?php  
                    $cokluresim=$baglanti->prepare("SELECT * FROM  cokluresim where urun_id=:urun_id order by id ASC");
                    $cokluresim->execute(array(

                  'urun_id'=>$_GET['id']
                    ));
                    while ($cokluresimcek=$cokluresim->fetch(PDO::FETCH_ASSOC)) { ?>
                      <tr>
                        <td><img style="width:370px" src="resimler/cokluresim/<?php echo $cokluresimcek['resim'] ?>"></td>
                        
                        

                  
                      <form action="islem/islem.php" method="post">
                           <input type="hidden" name="urunid" value="<?php echo $_GET['id'] ?>">
                            <input type="hidden" name="id" value="<?php echo $cokluresimcek['id'] ?>">
                           <input type="hidden" name="resim" value="<?php echo $cokluresimcek['resim'] ?>">
                        <td><button name="cokluresimsil" type="submit" class="btn btn-danger">Sil</button></td>

                      </form>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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