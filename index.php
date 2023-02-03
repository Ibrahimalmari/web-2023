<?php
session_start();
////////////////////////////////////////////////////////////////////////////////////
include "./init.php";
include $function_lang;
include $template_header; 
/////////////////////////////////////

?>
  <style>
 .im1 {
            background-image:url("layout/images/IMG_7991.JPG");
            background-repeat:no-repeat;
            background-size:cover;
        }  
        .im2 {
            background-image:url("layout/images/IMG_6646.JPG");
            background-repeat:no-repeat;
            background-size:cover;
        } 
        .im3 {
            background-image:url("layout/images/IMG_6049.JPG");
            background-repeat:no-repeat;
            background-size:cover;
        }
       
        .im4 {
            background-image:url("layout/images/IMG_7985.JPG");
            background-repeat:no-repeat;
            background-size:cover;
        } 
        .im5 {
            background-image:url("layout/images/IMG_9798.JPG");
            background-repeat:no-repeat;
            background-size:cover;
        } 
        .im6 {
            background-image:url("layout/images/WhatsApp\ Image\ 2022-05-28\ at\ 3.52.15\ PM\ \(1\).jpeg");
            background-repeat:no-repeat;
            background-size:cover;
        } 
        .im7 {
            background-image:url("layout/images/IMG_7975.JPG");
            background-repeat:no-repeat;
            background-size:cover;
        } 
         
        .im8 {
            background-image:url("layout/images/IMG_7992.JPG");
            background-repeat:no-repeat;
            background-size:cover;
        } 
        .im9 {
            background-image:url("layout/images/012839F8-089E-4FAC-9260-6B7B2E6AD50D.JPEG");
            background-repeat:no-repeat;
            background-size:cover;
        } 
       /* Image Fade */
        .ihv {
            opacity:0;
            transition-duration:1.25s;
        }
        .ihv:hover {
            opacity:1;
        }
        
    </style>
<div class="section_1">
    <div class="carousel-caption  d-none d-md-block d-lg-block ">
        <h5 style="font-style: italic;">LAZENART</h5>
        <p style="font-size:22px; font-style: italic;">Welcome To Our World Of ART</p>
        <button style="font-style: italic;" type="button" class="btn btn-dark btn-lg" >Explore Our Products</button>
      </div>
</div>
<!-- end section_1/-->
 <div class="section_2 text-center">
        <h2 >THE ART LAZENART</h2>
        <img  class="img-circle" style="width:200px; border-radius:500px; margin-bottom:20px;" src="layout/images/WhatsApp Image 2022-12-25 at 10.36.05 PM.jpeg"/>
        <div class="container">
        <p class="lead">Welcome to my world of ART
Our 50 years of experience provides you with a unique world of art designed specially for you!
You can either choose from one of our world of art ready made products or we can customise it to suit your imaginations
“ You Dream It We Draw It “</p>
</div>
<button style="font-style: italic;" type="button" class="btn btn-dark btn-lg" >Read More</button>
</div>
<!--end section_2/-->
<div class="section_3 text-center pt-5">
<h3 style="padding-bottom:20px;" >FEATURE ARTWORK</h3>
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <div class="im1">
    <img class="img-fluid ihv" src="layout/images/main.jpg" alt="open sign">
    </div>
      <div class="card-body">
        <h5 class="card-title">Poem by HH Sheikh Mohammad Bin Rasshid Al Maktoum</h5>
        <p class="card-text">Giclee Print on canvas with hand applications rolled in a hard cardboard tube.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">almost 1,390.00 AED</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <div class="im2">
    <img class="img-fluid ihv" src="layout/images/blue.jpg" alt="open sign">
    </div>
      <div class="card-body">
        <h5 class="card-title">Al Iklas (Sincerity) - الإخلاص</h5>
        <p class="card-text">Giclee Print on canvas with hand applications rolled in a hard cardboard tube.
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">almost 850.00 AED</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <div class="im3">
    <img class="img-fluid ihv" src="layout/images/A4B928FD-FEF3-4CC0-BB21-3AABF30765F8.JPG" alt="open sign">
    </div>
      <div class="card-body">
        <h5 class="card-title">A prayer (God is the greatest</h5>
        <p class="card-text">Giclee Print on canvas with hand applications rolled in a hard cardboard tube.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">almost 1,900.00 AED</small>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card h-100">
    <div class="im4">
    <img class="img-fluid ihv" src="layout/images/4img.jpeg" alt="open sign">
    </div>
      <div class="card-body">
        <h5 class="card-title">Premium Calligraphy Islamic Art with Prayers</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">almost 1.500 AED </small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <div class="im5">
    <img class="img-fluid ihv" src="layout/images/e.jpg" alt="open sign">
    </div>
      <div class="card-body">
        <h5 class="card-title">Premium Calligraphy Islamic Art with Prayers</h5>
        <p class="card-text">Giclee Print on canvas with hand applications rolled in a hard cardboard tube.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">almost 1,500.00 AED</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <div class="im6">
    <img class="img-fluid ihv" src="layout/images/IMG_7517.JPG" alt="open sign">
    </div>
      <div class="card-body">
        <h5 class="card-title">Satisfaction is an infinite treasureCard title</h5>
        <p class="card-text">Giclee Print on canvas with hand applications rolled in a hard cardboard tube.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">almost 1,900.00 AED</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <div class="im7">
    <img class="img-fluid ihv" src="layout/images/IMG_7923.jpg" alt="open sign">
    </div>
      <div class="card-body">
        <h5 class="card-title">Bismillah</h5>
        <p class="card-text">Giclee Print on canvas with hand applications rolled in a hard cardboard tube.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">almost 850.00 AED</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
    <div class="im8">
    <img class="img-fluid ihv" src="layout/images/D0E0CB75-AFAC-4CC8-AA85-D955AA4B4E6B.jpg" alt="open sign">
    </div>
      <div class="card-body">
        <h5 class="card-title">ومكرو والله خير الماكرين</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">almost 1.500 AED </small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <div class="im9">
    <img class="img-fluid ihv" src="layout/images/Untitled-1.jpg" alt="open sign">
    </div>
      <div class="card-body">
        <h5 class="card-title">الاستعاذة :اعوذ بالله من الشيطان الرجيم</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">almost 1.500 AED </small>
      </div>
    </div>
  </div>
</div>
</div>
<button type="submit" class="btn btn-dark btn-lg mt-5 mb-5">View All</button>
</div>


<?php include $template_footer; ?>
 

 