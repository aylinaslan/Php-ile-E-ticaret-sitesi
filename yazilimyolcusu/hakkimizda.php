<?php require_once 'header.php'; ?>
           
            <div class="about-us-wrapper pt-60 pb-40">
                <div class="container">
                    <div class="row">
                        <!-- About Text Start --> 
                        <div class="col-lg-6 order-last order-lg-first">
                            <div class="about-text-wrap">
                                <h2><?php echo $hakkimizdacek['hakkimizda_baslik'] ?></h2>

                                <p style="color:black"><?php echo $hakkimizdacek['hakkimizda_detay'] ?></p>
                                

                                 <h4>Vizyonumuz</h4>

                                <p style="color:black"><?php echo $hakkimizdacek['hakkimizda_vizyon'] ?></p>


                                    <h4>Misyonumuz</h4>

                                <p style="color:black"><?php echo $hakkimizdacek['hakkimizda_misyon'] ?></p>
                            </div>
                        </div>
                        <!-- About Text End -->
                        <!-- About Image Start -->
                        <div class="col-lg-5 col-md-10">
                            <div class="about-image-wrap">
                                <img class="img-full" src="Admin/resimler/hakkimizda/<?php echo  $hakkimizdacek['hakkimizda_resim'] ?>" alt="About Us" />
                            </div>
                        </div>
                        <!-- About Image End -->
                    </div>
                </div>
            </div>

      
           <?php require_once 'footer.php'; ?>