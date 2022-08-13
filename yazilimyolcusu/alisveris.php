<?php require_once 'header.php' ?>
<div class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
 

             <?php if ($_GET['durum']=="eklendi") { ?>
               <b style="color: green">ürününüz başarıyla sepete eklendi</b>
           <?php     } ?>
           <form action="islem" method="post"> 
           <input type="hidden" name="toplamfiyat" value="<?php echo $_GET['toplamfiyat'] ?>">
             <input type="hidden" name="kadi" value="<?php echo $kullanicicek['kullanici_id'] ?>">
             Toplam ödenecek tutar:<?php echo $_GET['toplamfiyat'] ?>
            <div class="row">
                <div class="col-md-5 ml-auto">
                    <div class="cart-page-total">
                  <select name="odeme">
             


                      <option value="1">Kapıda ödeme</option>
                      <option value="0">Kart ile ödeme</option>
                  </select>
                  <br><br>
               <button name="alisverisbitir" type="submit" class="btn btn-info">Alışverişi tamamla</button>
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