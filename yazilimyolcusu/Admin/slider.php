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
                <h3 class="card-title">slider tablosu</h3>

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
                  <a href="slider-ekle"><button style="float:right" type="submit" class="btn btn-success">Yeni slider ekle</button></a>
                  <thead>
                    <tr>
                      <th>slider resim</th>
                      <th>slider başlık</th>
                      <th>slider açıklama</th>
                      <th>slider button ismi</th>
                      <th>slider durum </th>
                      <th>Slider sıra</th>
                      <th>Slider banner</th>
                      <th>Düzenle</th>
                      <th>Sil</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php  
                    $slider=$baglanti->prepare("SELECT * FROM  slider  order by slider_id ASC");
                    $slider->execute();
                    while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { ?>
                      <tr>
                        <td><img style="width:100px; height: 100px; object-fit: cover;" src="resimler/slider/<?php echo $slidercek['slider_resim'] ?>"></td>
                        <td><?php echo $slidercek['slider_baslik'] ?></td>
                        <td><?php echo $slidercek['slider_aciklama'] ?></td>
                        <td><?php echo $slidercek['slider_button'] ?></td>
                      <td><span class="tag tag-success">
                          <?php if ($slidercek['slider_durum']=="1") {
                            echo "Aktif";
                          }elseif($slidercek['slider_durum']=="0"){
                            echo "Pasif";
                          } ?>




                        </span></td>
                        <td><?php echo $slidercek['slider_sira'] ?></td>
                       <td><span class="tag tag-success">
                          <?php if ($slidercek['slider_banner']=="1") {
                            echo "slider";
                          }elseif($slidercek['slider_banner']=="0"){
                            echo "banner";
                          } ?>




                        </span></td>
                        

                        <td><a href="slider-duzenle?id=<?php echo $slidercek['slider_id'] ?>"><button type="submit" class="btn btn-info">Düzenle</button></a></td>
                      <form action="islem/islem.php" method="post">
                           <input type="hidden" name="id" value="<?php echo $slidercek['slider_id'] ?>">
                           <input type="hidden" name="resim" value="<?php echo $slidercek['slider_resim'] ?>">
                        <td><button name="slidersil" type="submit" class="btn btn-danger">Sil</button></td>

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