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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">urunler tablosu</h3>

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
                  <a href="urunler-ekle?katid=<?php echo $_GET['katid'] ?>"><button style="float:right" type="submit" class="btn btn-success">Yeni urunler ekle</button></a>
                  <thead>
                    <tr>
                      <th>urunler resim</th>
                      <th>urunler başlık</th>
                      <th>urunler model</th>
                      <th>urunler renk</th>
                      <th>urunler durum </th>
                      <th>urunler sıra</th>
                      <th>urunler adet sayısı</th>
                      <th>Düzenle</th>
                      <th>Sil</th>
                      <th></th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php  
                    $urunler=$baglanti->prepare("SELECT * FROM  urunler where kategori_id=:kategori_id  order by urun_id ASC");
                    $urunler->execute(array(
                      'kategori_id'=>$_GET['katid']

                    ));
                    while ($urunlercek=$urunler->fetch(PDO::FETCH_ASSOC)) { ?>
                      <tr>
                        <td><img style="width:250px" src="resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>"></td>
                        <td><?php echo $urunlercek['urun_baslik'] ?></td>
                        <td><?php echo $urunlercek['urun_model'] ?></td>
                        <td><?php echo $urunlercek['urun_renk'] ?></td>
                   
                        <td><?php echo $urunlercek['urun_durum'] ?></td>
                     
                           
                        <td><?php echo $urunlercek['urun_sira'] ?></td>
 <td><?php echo $urunlercek['urun_adet'] ?></td>
                        <td><a href="urunler-duzenle?id=<?php echo $urunlercek['urun_id'] ?>&katid=<?php echo $urunlercek[
                      'kategori_id'] ?>"><button type="submit" class="btn btn-info">Düzenle</button></a></td>
                      <form action="islem/islem.php" method="post">
                           <input type="hidden" name="id" value="<?php echo $urunlercek['urun_id'] ?>">
                           <input type="hidden" name="resim" value="<?php echo $urunlercek['urun_resim'] ?>">
                           <input type="hidden" name="katsid" value="<?php echo $_GET['katid'] ?>">
                        <td><button name="urunlersil" type="submit" class="btn btn-danger">Sil</button></td>

                      </form>
                      <td><a href="cokluresim?id=<?php echo $urunlercek['urun_id'] ?>"><button class="btn btn-success">Çoklu resim</button></a></td>
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