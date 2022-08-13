           <!-- Begin Slider With Banner Area -->
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Slider Area -->
                        <div class="col-lg-8 col-md-8">
                            <div class="slider-area">
                                <div class="slider-active owl-carousel">
                                    <!-- Begin Single Slide Area -->
                                   
  <?php  
                    $slider=$baglanti->prepare("SELECT * FROM  slider where slider_banner=:slider_banner and slider_durum=:slider_durum  order by slider_sira ASC");
                    $slider->execute(array(

                   'slider_banner'=>1,
                   'slider_durum'=>1
                    ));
                    while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { ?>

                                    <div style="background-image: url(Admin/resimler/slider/<?php echo $slidercek['slider_resim'] ?>) !important;" class="single-slide align-center-left  animation-style-01 bg-3">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5><?php echo $slidercek['slider_aciklama'] ?></h5>
                                            <h2><?php echo $slidercek['slider_baslik'] ?></h2>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="<?php echo $slidercek['slider_link'] ?>"><?php echo $slidercek['slider_button'] ?></a>
                                            </div>
                                        </div>
                                    </div>
<?php } ?>

                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                        <!-- Begin Li Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <?php  
                    $slider=$baglanti->prepare("SELECT * FROM  slider where slider_banner=:slider_banner and slider_durum=:slider_durum  order by slider_sira ASC");
                    $slider->execute(array(

                   'slider_banner'=>0,
                   'slider_durum'=>1
                    ));
                    while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { ?>

                            <div style="margin-top:10px" class="li-banner">
                                <a href="<?php echo $slidercek['slider_link'] ?>">
                                    <img src="Admin/resimler/slider/<?php echo $slidercek['slider_resim'] ?>" alt="">
                                </a>
                            </div>
                        <?php } ?>

                        </div>
                        <!-- Li Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider With Banner Area End Here -->