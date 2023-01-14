<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>decor</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  
  <div class="wrapper">
        <h2>Wedding Decorations</h2>
        <a href="../wedding_planing/home.php">Home</a>
   
          <p>Weddings are occasions to celebrate with full glamour and grandeur and our sole purpose 
           is to concoct essence of merriment to the divine celebrations of marriages. With constant 
           creative flow, zeal for great work, and total commitment, we have organized more than 100
            weddings till date. From the stressful venue decoration to sumptuous menu selection, we cater
           to requirements of people with all kind of budgets. We have a large repertoire of exclusive 
            tie-ups with national and international floral and set designers of highest repute.</p>

    <!-- filter Items -->
    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="setee">Seteeback</span>
        <span class="item" data-name="poruwa">Poruwa</span>
        <span class="item" data-name="table">Table decor</span>
        <span class="item" data-name="invitation">Invitation cards</span>
        <span class="item" data-name="entrance">Entrance/pathway</span>
        <span class="item" data-name="lamp">Oil lamp</span>
        <span class="item" data-name="cake">Kiribath/Cake Table</span>
        <span class="item" data-name="car">Car decor</span>
      </div>
    </nav>
   
    <!-- filter Images -->
    <div class="gallery">
      <div class="image" data-name="setee"><span><img src="images/setee.jpg" alt=""></span></div>
      <div class="image" data-name="setee"><span><img src="images/setee1.jpg" alt=""></span></div>
      <div class="image" data-name="setee"><span><img src="images/setee2.jpg" alt=""></span></div>
      <div class="image" data-name="poruwa"><span><img src="images/poruwa2.jpg" alt=""></span></div>
      <div class="image" data-name="poruwa"><span><img src="images/poruwa3.jpg" alt=""></span></div>
      <div class="image" data-name="poruwa"><span><img src="images/poruwa.jpg" alt=""></span></div>
      <div class="image" data-name="poruwa"><span><img src="images/poruwa1.jpg" alt=""></span></div>
      <div class="image" data-name="table"><span><img src="images/t4.jpeg" alt=""></span></div>
      <div class="image" data-name="table"><span><img src="images/t5.jpg" alt=""></span></div>
      <div class="image" data-name="table"><span><img src="images/t3.jpeg" alt=""></span></div>
      <div class="image" data-name="table"><span><img src="images/t1.jpg" alt=""></span></div>
      <div class="image" data-name="table"><span><img src="images/t2.jpg" alt=""></span></div>
      <div class="image" data-name="invitation"><span><img src="images/i1.jpg" alt=""></span></div>
      <div class="image" data-name="invitation"><span><img src="images/i2.jpeg" alt=""></span></div>
      <div class="image" data-name="invitation"><span><img src="images/i3.png" alt=""></span></div>
      <div class="image" data-name="invitation"><span><img src="images/i4.jpg" alt=""></span></div>
      <div class="image" data-name="invitation"><span><img src="images/i5.jpg" alt=""></span></div>
      <div class="image" data-name="invitation"><span><img src="images/i6.jpeg" alt=""></span></div>
      <div class="image" data-name="invitation"><span><img src="images/i7.png" alt=""></span></div>
      <div class="image" data-name="entrance"><span><img src="images/e.jpeg" alt=""></span></div>
      <div class="image" data-name="entrance"><span><img src="images/e1.jpeg" alt=""></span></div>
      <div class="image" data-name="entrance"><span><img src="images/e2.jpeg" alt=""></span></div>
      <div class="image" data-name="entrance"><span><img src="images/e3.jpeg" alt=""></span></div>
      <div class="image" data-name="lamp"><span><img src="images/o1.jpg" alt=""></span></div>
      <div class="image" data-name="lamp"><span><img src="images/o2.jpg" alt=""></span></div>
      <div class="image" data-name="lamp"><span><img src="images/o3.jpg" alt=""></span></div>
      <div class="image" data-name="lamp"><span><img src="images/o4.jpg" alt=""></span></div>
      <div class="image" data-name="lamp"><span><img src="images/o5.jpg" alt=""></span></div>
      <div class="image" data-name="cake"><span><img src="images/k2.jpg" alt=""></span></div>
      <div class="image" data-name="cake"><span><img src="images/k3.jpg" alt=""></span></div>
      <div class="image" data-name="cake"><span><img src="images/k4.jpeg" alt=""></span></div>
      <div class="image" data-name="cake"><span><img src="images/k5.jpeg" alt=""></span></div>
      <div class="image" data-name="cake"><span><img src="images/k6.jpg" alt=""></span></div>
      <div class="image" data-name="cake"><span><img src="images/k7.jpg" alt=""></span></div>
      <div class="image" data-name="cake"><span><img src="images/k8.jpg" alt=""></span></div>
      <div class="image" data-name="cake"><span><img src="images/k9.jpeg" alt=""></span></div>
      <div class="image" data-name="car"><span><img src="images/c.jpeg" alt=""></span></div>
      <div class="image" data-name="car"><span><img src="images/c1.jpg" alt=""></span></div>
      <div class="image" data-name="car"><span><img src="images/c2.jpg" alt=""></span></div>
      <div class="image" data-name="car"><span><img src="images/c3.jpg" alt=""></span></div>
      <div class="image" data-name="car"><span><img src="images/c4.jpg" alt=""></span></div>
      <div class="image" data-name="car"><span><img src="images/c5.jpg" alt=""></span></div>
     
    </div>
  </div>
  <!-- fullscreen img preview box -->
  <div class="preview-box">
    <div class="details">
      <span class="title">Image Category: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>

  <script src="script.js"></script>

</body>
</html>
