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
                            <th class="li-product-remove"></th>
                            <th class="li-product-thumbnail">resim</th>
                            <th class="cart-product-name">başlık</th>
                            <th class="li-product-price">ücret</th>
                            <th class="li-product-quantity">adet</th>
                            <th class="li-product-subtotal"> toplam fiyat</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                        foreach ($_COOKIE['sepet'] as $key => $value) {


                            $urunler=$baglanti->prepare("SELECT * FROM  urunler where urun_id=:urun_id  order by urun_sira ASC");
                            $urunler->execute(array(
                              'urun_id'=>$key


                          ));
                            $urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);


                            ?>



                            <tr>
                                <td class="li-product-remove">


                                    <a href="islem?sepetsil&id=<?php echo  $key ?>"><i class="fa fa-times"></i></a>



                                </td>




                                <td class="li-product-thumbnail"><a href="#"><img style="width: 200px" src="Admin/resimler/urunler/<?php echo $urunlercek['urun_resim'] ?>" alt="Li's Product Image"></a></td>
                                <td class="li-product-name"><a href="#"><?php echo $urunlercek['urun_baslik'] ?></a></td>
                                <td class="li-product-price"><span class="amount"><?php echo $urunlercek['urun_fiyat'] ?>₺</span></td>
                                <td class="quantity">
                                    <label>Adet</label>
                                    <div class="cart-plus-minus">
                                        <input value="<?php echo $value ?>" class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </td>
                                <td class="product-subtotal"><span class="amount"><?php echo $value * $urunlercek['urun_fiyat'] ?>₺</span></td>
                            </tr>
                            <?php


                            $sepettoplam+=$value * $urunlercek['urun_fiyat'] ;


                            $kdv=$sepettoplam * 18/100;


                            $geneltoplam=$sepettoplam + $kdv;
                            ?>



                        <?php } ?>





                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="coupon-all">
                        <div class="coupon">
                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                            <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                        </div>
                        <div class="coupon2">
                            <input class="button" name="update_cart" value="Update cart" type="submit">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 ml-auto">
                    <div class="cart-page-total">
                        <h2>Toplam fiyat</h2>
                        <ul>
                            <li>Toplam fiyat <span><?php  echo $sepettoplam; ?>₺</span></li>
                            <li>Kdv <span><?php echo $kdv ?>₺</span></li>
                            <li>Genel toplam <span><?php echo $geneltoplam ?>₺</span></li>
                        </ul>
                        <a href="alisveris?toplamfiyat=<?php echo $geneltoplam ?>">Alışverişi tamamla</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<!--Shopping Cart Area End-->
<?php require_once 'footer.php';  ?>