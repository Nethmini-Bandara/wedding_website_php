<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>loginhome</title>
        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- swipper css link -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <!-- custom css file link -->
        <link rel="stylesheet" href="style.css">
        
    </head>

    <body>

<div class="container">
    <?php @include 'firstheading.php'; ?>
    
    <section class="home">

        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(photo-1591604466107-ec97de577aff.jpg) no-repeat">
                    <div class="content">
                        <h3>Plan your dream day with us!</h3>
                        
                        <p>My wedding is a website designed for you to choose everything you need for your dream wedding at one place. We provide numerous services in our website. Go through our website at your own pase and select everything you need with a single click! </p>
                        <a href="../Success_story/clients.php" class="btn">Success Stories</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(photo-1591604466107-ec97de577aff.jpg) no-repeat">
                    <div class="content">
                        <h3>Login to Explore More</h3>
                        
                        <p>Create an account in our website and explore everything you need for your dream wedding</p>
                        <a href="../login.php" class="btn">Login Page</a>
                    </div>
                </div>
                


                <!-- <div class="swiper-slide slide" style="background:url(wedding-couple-park-under-tree-rain-kissing-131754743.jpg)no-repeat">
                    <div class="content">
                        <h3>Plan your wedding!</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci odit, id facere omnis voluptatem, quos laudantium 
                             suscipit quam, ratione dolorem nemo aut atque eveniet! Consequatur accusamus quisquam placeat rerum deleniti?.</p>
                        <a href="about.php" class="btn">Discover more </a>
                    </div>
                </div>
            </div> -->

            <div class="swiper-pagination"></div>
        </div>

    </section>

    <section class="services">
        <h1 class="heading">Our Services </h1>
        <div class="swiper service-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                  <img src="How-to-Start-Your-Wedding-Photography-Business.png" alt="">
                    <div class="content">
                        <h3>photography</h3>
                        <p>Find unique and high level photographers</p>
                        <a href="../login.php" class="btn">about us</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                  <img src="hotel-exterior.jpg" alt="">
                    <div class="content">
                         <h3>Hotels</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, repellendus.</p>
                         <a href="../login.php" class="btn">about us</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="Bridal-Meke-up-artist-1024x538-1.png" alt="">
                    <div class="content">
                        <h3>Salon</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, repellendus.</p>
                        <a href="../login.php" class="btn">Look for more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="joj07234-kecil-2-HydojB1dP.jpg" alt="">
                    <div class="content">
                        <h3>Music</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, repellendus.</p>
                        <a href="../login.php" class="btn">about us</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="z_p22-show1.jpg" alt="">
                    <div class="content">
                        <h3>Jewellary</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, repellendus.</p>
                        <a href="../login.php" class="btn">about us</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="photo-1535254973040-607b474cb50d.jpg" alt="">
                    <div class="content">
                        <h3>Wedding cakes</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, repellendus.</p>
                        <a href="../login.php" class="btn">about us</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="wedding-Gal-4.jpg" alt="">
                    <div class="content">
                        <h3>Decorations</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, repellendus.</p>
                        <a href="../login.php" class="btn">about us</a>
                    </div>
                </div>

                 <div class="swiper-slide slide">
                    <img src="pic2.jpg" alt="">
                    <div class="content">
                        <h3>Wedding Attire</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, repellendus.</p>
                        <a href="../login.php" class="btn">about us</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>



    <?php @include 'loginfooter.php'; ?>
</div>

















<!--swiper js link-->
<script src ="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- custom js file link -->
    <script src="script.js"></script>
</body>
</html>
        