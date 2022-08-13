<?php require_once 'header.php' ?>
<div class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">


             <?php if ($_GET['durum']=="eklendi") { ?>
               <b style="color: green">ürününüz başarıyla sepete eklendi</b>
           <?php     } ?>
           <form action="#">
            <div class="table-content table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="li-product-thumbnail">resim</th>
                            <th class="cart-product-name">başlık</th>
                            <th class="li-product-price">ücret</th>
                            <th class="li-product-quantity">adet</th>
                             <th class="li-product-quantity">Zaman</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
 $kid=$kullanicicek['kullanici_id'];



                            $siparis=$baglanti->prepare("SELECT * FROM  siparisler where kullanici_id=:kullanici_id  ");
                            $siparis->execute(array(
                              'kullanici_id'=>$kid

                          ));
                           while ($sipariscek=$siparis->fetch(PDO::FETCH_ASSOC)) {
                    $alinanid=$sipariscek['urun_id'];
 
$urunler=$baglanti->prepare("SELECT * FROM  urunler where urun_id=:urun_id ");
$urunler->execute(array(
  'urun_id'=>$alinanid

));

$urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);


                            ?>



                            <tr>
    




                                <td class="li-product-thumbnail"><a href="#"><img style="width: 200px" src="Admin/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="Li's Product Image"></a></td>

                                <td class="li-product-name"><a href="#"><?php echo $urunlercek['urun_baslik'] ?></a></td>

                                <td class="li-product-price"><span class="amount"><?php echo $sipariscek['urun_fiyat'] ?>₺</span></td>

                                <td class="quantity">
                                    <label>Adet</label>
                                    <div class="cart-plus-minus">
                                        <input value="<?php echo $sipariscek['urun_adet'] ?>" class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </td>


                                      <td class="li-product-price"><span class="amount"><?php echo $sipariscek['siparis_zaman'] ?></span></td>



                            </tr>
                          



                     

                        <?php } ?>



                    </tbody>
                </table>
            </div>
            
            
        </form>
    </div>
</div>
</div>
</div>
<!--Shopping Cart Area End-->
<?php require_once 'footer.php';  ?>