<?php require_once 'header.php' ?>

<div class="content-wraper pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Li's Banner Area -->

                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">

                        <div class="toolbar-amount">
                            <span>Gösteriliyor 1 to 9 </span>
                        </div>
                    </div>
                    <!-- product-select-box start -->
                      <form action="arama" method="post">
                    <div class="product-select-box">
                        <div class="product-short">
                            <p>Sırala:</p>
                            <select name="sirala" class="nice-select">
                                <option value="1">İsime göre (A - Z)</option>

                                <option value="2">İsime göre (Z - A)</option>
                                <option value="3">Düşük fiyat </option>
                                <option value="4">Yüksek fiyat</option>

                            </select> 
                           <input type="hidden" name="katsid" value="<?php echo $_GET['kategori_id']?>">
                              <button style="margin-left:10px" class="btn btn-info" type="submit" name="siralama">Arama yap</button>

                        </div>
                    </div>
                 
                    </form>
                    <!-- product-select-box end -->
                </div>
                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
<?php


if (isset($_POST['siralama'])) {

    if ($_POST['sirala']=="1") {
   

    $urunler=$baglanti->prepare("SELECT * FROM  urunler where kategori_id=:kategori_id and urun_durum=:urun_durum order by urun_baslik ASC");
      $urunler->execute(array(
                                      'kategori_id'=>$_POST['katsid'],
                                      'urun_durum'=>1

                                  ));
  }

    elseif ($_POST['sirala']=="2") {

  
    $urunler=$baglanti->prepare("SELECT * FROM  urunler where kategori_id=:kategori_id and urun_durum=:urun_durum order by urun_baslik DESC");
      $urunler->execute(array(
                                      'kategori_id'=>$_POST['katsid'],
                                      'urun_durum'=>1

                                  ));
  }

 elseif ($_POST['sirala']=="3") {

  
    $urunler=$baglanti->prepare("SELECT * FROM  urunler where kategori_id=:kategori_id and urun_durum=:urun_durum order by urun_fiyat ASC");
      $urunler->execute(array(
                                      'kategori_id'=>$_POST['katsid'],
                                      'urun_durum'=>1

                                  ));
  }
   elseif ($_POST['sirala']=="4") {

  
    $urunler=$baglanti->prepare("SELECT * FROM  urunler where kategori_id=:kategori_id and urun_durum=:urun_durum order by urun_fiyat DESC");
      $urunler->execute(array(
                                      'kategori_id'=>$_POST['katsid'],
                                      'urun_durum'=>1

                                  ));
  }





}

if (isset($_POST['kelimearama'])) {

$aranacakkelime=$_POST['aranacakkelime'];
    $urunler=$baglanti->prepare("SELECT * FROM  urunler where urun_baslik LIKE ?");
  $urunler->execute(array("%$aranacakkelime%"));


}



 ?>

                                  <?php  
                                 
                                
                                  while ($urunlercek=$urunler->fetch(PDO::FETCH_ASSOC)) { ?>

                                    <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="urun-detay-<?=seolink($urunlercek['urun_baslik']).'-'.$urunlercek['urun_id'] ?>">
                                                    <img src="Admin/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">Yeni</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">

                                                    <h4><a class="product_name" href="urun-detay-<?=seolink($urunlercek['urun_baslik']).'-'.$urunlercek['urun_id'] ?>"><?php echo $urunlercek['urun_baslik'] ?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price"><?php echo $urunlercek['urun_fiyat'] ?>₺</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="urun-detay-<?=seolink($urunlercek['urun_baslik']).'-'.$urunlercek['urun_id'] ?>">Detaya GİT</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>



                                <?php } ?>






                            </div>
                        </div>
                    </div>

                    <div class="paginatoin-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <p>Showing 1-12 of 13 item(s)</p>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <ul class="pagination-box">
                                    <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                      <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- shop-products-wrapper end -->
      </div>
  </div>
</div>
</div>
<?php require_once 'footer.php'; ?>