<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
        <!-- swipper css link -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <!-- custom css file link -->
        <link rel="stylesheet" href="style.css">
        
    </head>

    <body>

        <div class="container">
                <?php @include 'header.php'; ?>
                <section class="portfolio">

                <h1 class="heading">Our Services</h1>
                
                    <div class="portfolio-container">
                        <a href="../Photography/index.html" class="box">
                            <div class="image">
                                <img src="How-to-Start-Your-Wedding-Photography-Business.png" alt="">
                            </div>
                                <h3>photography</h3>
                        </a>
                        <a href="../hotels/Index.php" class="box">
                            <div class="image">
                                <img src="hotel-exterior.jpg" alt="">
                            </div>
                                <h3>Hotels</h3>
                        </a>
                        <a href="../Salon/haircare-master/contact.php" class="box">
                            <div class="image">
                                <img src="Bridal-Meke-up-artist-1024x538-1.png" alt="">
                            </div>
                                <h3>Salon</h3>
                        </a>
                        <a href="../Music/index.php" class="box">
                            <div class="image">
                                <img src="joj07234-kecil-2-HydojB1dP.jpg" alt="">
                            </div>
                                <h3>Music</h3>
                        </a>
                        <a href="../jewelllary/contact.php" class="box">
                            <div class="image">
                                <img src="z_p22-show1.jpg" alt="">
                            </div>
                                <h3>Jewellary</h3>
                        </a>
                        <a href="cake.php" class="box">
                            <div class="image">
                                <img src="photo-1535254973040-607b474cb50d.jpg" alt="">
                            </div>
                                <h3>Wedding cakes</h3>
                        </a>
                        <a href="../Decor/index.php" class="box">
                            <div class="image">
                                <img src="wedding-Gal-4.jpg" alt="">
                            </div>
                                <h3>Decorations</h3>
                        </a>
                        <a href="../Dress/Index.php" class="box">
                            <div class="image">
                                <img src="pic2.jpg" alt="">
                            </div>
                                <h3>wedding attire</h3>
                        </a>
                    </div>
                </section>
                <?php @include 'footer.php'; ?>
        </div>














<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>


                 <!--swiper js link-->
                <script src ="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


                 <!-- custom js file link -->
                <script src="script.js"></script>
                <script>
                    lightgallery(document.querySelector('.portfolio .portfolio-container'));
                    </script>
    </body>
</html>
        