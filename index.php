<?php
require('db.php');
 $query= "SELECT * FROM home,section_control,social_media,about,contact,changebackground";
 $run= mysqli_query($db,$query);
 $user_data=mysqli_fetch_array($run);
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    <?=$user_data['tittle']?>
      
    </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/admin2.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.10.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
     
#space {
  left: 0;
  top: 0;
  zoom: 1;
}

#space span {
  position: absolute;
}

  </style>
</head>

<body>
<div class="first" style= "background: #3e3ef1e0 url('./images/<?=$user_data['background']?> ') top right no-repeat;" >
  <!-- ======= Header ======= --> <div id="space" class="space" style="float:right;position: fixed;"></div>
  <header id="header">
    <div class="container">
<script>
  var _3DPretty = (function () {
  var obj = [],
    _x = 0,
    _y = 0,
    _x1 = 0,
    _y1 = 0,
    parts = 500,
    $,
    _tx,
    _ty,
    _w,
    _h;

  var resize = function () {
    _w = window.innerWidth * 0.5;
    _h = window.innerHeight * 0.5;
  };
  var set = function (n, f) {
    if (!!n) parts = n;
    $ = document.getElementById("space");
    window.addEventListener("mousemove", function (e) {
      _x = e.clientX;
      _y = e.clientY;
    });
    window.addEventListener("touchmove", function (e) {
      e.preventDefault();
      _x = e.touches[0].clientX;
      _y = e.touches[0].clientY;
    });
    resize();
    window.addEventListener("resize", resize);
    _set(f);
    run();
  };
  var run = function () {
    window.requestAnimationFrame(run);
    anime();
  };
  var _set = function (f) {
    for (var i = 0; i < parts; i++) {
      var o = {};
      o.p = document.createElement("span");
      $.appendChild(o.p);
      var r = i / parts,
        j,
        a,
        b;
      j = i % (parts * 0.5);
      a = Math.floor(j) / 100 + ((Math.floor(j / 2) % 10) / 5) * Math.PI * 2;
      b = Math.acos(-0.9 + (j % 4) * 0.6);
      r = !!f ? f(r) : r - r * r + 0.5;
      var sbr = Math.sin(b) * r;
      o.x = Math.sin(a) * sbr;
      o.y = Math.cos(a) * sbr;
      o.z = Math.cos(b) * r;
      obj.push(o);
      o.transform = function () {
        var ax = 0.02 * _tx,
          ay = 0.02 * _ty,
          cx = Math.cos(ax),
          sx = Math.sin(ax),
          cy = Math.cos(ay),
          sy = Math.sin(ay);

        var z = this.y * sx + this.z * cx;
        this.y = this.y * cx + this.z * -sx;
        this.z = this.x * -sy + z * cy;
        this.x = this.x * cy + z * sy;

        var sc = 1 / (1 + this.z),
          x = this.x * sc * _h + _w - sc * 2,
          y = this.y * sc * _h + _h - sc * 2;

        var p = this.p.style;
        if (x >= 0 && y >= 0 && x < _w * 2 && y < _h * 2) {
          var c = Math.round(256 + -this.z * 256);
          p.left = Math.round(x) + "px";
          p.top = Math.round(y) + "px";
          p.width = Math.round(sc * 2) + "px";
          p.height = Math.round(sc * 2) + "px";
          p.background = "hsla(" + y + ",80%,80%,1)";
          p.zIndex = 200 + Math.floor(-this.z * 100);
        } else p.width = "0px";
      };
    }
  };
  var anime = function () {
    var se = 1 / _h;
    _tx = (_y - _x1) * se;
    _ty = (_x - _y1) * se;
    _x1 += _tx;
    _y1 += _ty;
    for (var i = 0, o; (o = obj[i]); i++) o.transform();
  };
  return {
    set: set
  };
})();
window.onload = function () {
  _3DPretty.set(500, function (r) {
    return r * r;
  });
};

</script>
      <h1><a href="index.php"><?=$user_data['tittle']?></a></h1>
     
     
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2><?=$user_data['subtittle']?></h2>

      <nav id="navbar" class="navbar">
        <ul>

          <?php
          if($user_data['home_section']){
            ?> 

          <li><a class="nav-link active" href="#header">Home</a></li>
          <?php
          }
          if($user_data['about_section']){
          ?>          

          <li><a class="nav-link" href="#about">About</a></li>
          <?php
          }
          if($user_data['resume_section']){
          ?> 


          <li><a class="nav-link" href="#resume">Resume</a></li>
          <?php
          }
          if($user_data['services_section']){
          ?> 


          <li><a class="nav-link" href="#services">Services</a></li>
          <?php
          }
          if($user_data['portfolio_section']){
          ?> 


          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <?php
          }
          if($user_data['contact_section']){
          ?> 


          <li><a class="nav-link" href="#contact">Contact</a></li>
          <?php
          }
          ?> 




        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

<?php
if($user_data['showicons']){
?>
      <div class="social-links">

<?php if($user_data['twitter']!=''){?>
        <a href="https://twitter.com/"<?=$user_data['twitter']?> class="twitter" style="    background: #0646e2;"><i class="bi bi-twitter"></i></a>
<?php
}
?>
        <?php if($user_data['facebook']!=''){?>
        <a href="https://facebook.com/"<?=$user_data['facebook']?> class="facebook" style="background: linear-gradient(90deg, rgba(24,34,200,1) 0%, rgba(20,10,102,1) 100%);"><i class="bi bi-facebook"></i></a>

         <?php 
       }

       if($user_data['instagram']!=''){?>
        <a href="https://instagram.com/"<?=$user_data['instagram']?> class="instagram" style="background: linear-gradient(90deg, rgba(228,64,95,1) 39%, rgba(13,147,207,1) 100%);"><i class="bi bi-instagram"></i></a>
        <?php
        }

 
if($user_data['linkedin']!=''){?>
        <a href="https://www.linkedin.com/feed/"<?=$user_data['linkedin']?> class="linkedin"><i class="bi bi-linkedin"></i></a>
<?php
}
?>

      </div>
<?php
}
?>


    </div>
  </header><!-- End Header -->











  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container"  style="background: linear-gradient( 141deg , #1c324c 53%, #06114a 16%);
    background-attachment: fixed;">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="images/<?=$user_data['profile_pic'] ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <!-- <h3><?=$user_data['about_tittle'] ?></h3> -->
          <p class="fst-italic">
           <?=$user_data['about_subtittle'] ?>
          </p>
          <div class="row">
 <div class="col-lg-6">
<h4>I am Developer at <a href="https://viasacademy.com/" target="_blank">Vedanta IAS Academy</a></h4>
<p>To contribute for the betterment of an organization that also gives me an opportunity to integrate my knowledge Personal skills and also give me a platform to grow with the organization.</p>
 </div>

            <div class="col-lg-6">
               <h3><?=$user_data['about_tittle'] ?></h3>
              <ul>
<?php
 $query2= "SELECT * FROM  personal_info";
 $run2= mysqli_query($db,$query2);
  
 while($personal_info=mysqli_fetch_array($run2)){
  ?>
    <li><i class="bi bi-chevron-right"></i> <strong><?=$personal_info['tittle']?></strong> <span><?=$personal_info['sub_tittle']?></span></li>
  <?php
 }
?>


               
          
              </ul>
            </div>
          </div>
          <p>
          <?=$user_data['about_desc'] ?>
          </p>
        </div>
      </div>

    </div><!-- End About Me -->









    <!-- ======= Counts ======= -->
    <!-- <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>

      </div>

    </div> --><!-- End Counts -->






    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-12">

          <?php
 $query3= "SELECT * FROM  skills";
 $run3= mysqli_query($db,$query3);
  
 while($skills=mysqli_fetch_array($run3)){
  ?>

          <div class="progress">
            <span class="skill"><?=$skills['skill_name']?>
            <!-- <i class="val"><?=$skills['skill_level']?></i> -->
          </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?=$skills['skill_level']?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <?php
        }
          ?>

         

        </div>

      </div>

    </div><!-- End Skills -->




   

    <!-- ======= Testimonials ======= -->
    <!-- <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div> 

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div> 

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div> 

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div> 

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div> -->
          <!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->







  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container" style="background: linear-gradient( 141deg , #06114a 53%, #1c324c 16%);
    background-attachment: fixed;">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
        <a href="upload/resume.pdf" target="_blank"><button class="custom-btn btn-3"><span>Resume</span></button></a>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Education</h3> 

      <?php
 $query4= "SELECT * FROM   resume";
 $run4= mysqli_query($db,$query4);
  
 while($resume=mysqli_fetch_array($run4)){
  if($resume['type']=='edu'){


  ?>

  
          <div class="resume-item">
            <h4><?=$resume['tittle']?></h4>
            <h5><?=$resume['time']?></h5>
            <p><em><?=$resume['org']?></em></p>
            <p><?=$resume['about_exp']?></p>
          </div>
<?php
}
}
?>
     
        </div>


        <div class="col-lg-6">
          <h3 class="resume-title"> Experience</h3>
           
<?php
 $query4= "SELECT * FROM   resume";
 $run4= mysqli_query($db,$query4);

while($resume=mysqli_fetch_array($run4)){
  if($resume['type']=='exp'){


  ?>

  
          <div class="resume-item">
            <h4><?=$resume['tittle']?></h4>
            <h5><?=$resume['time']?></h5>
            <p><em><?=$resume['org']?></em></p>
            <p><?=$resume['about_exp']?></p>

            <ul>
              <li>Creating HTML & CSS and Bootstrap coding languages to build
websites that are responsive, user-friendly, and interactive.
</li>
               <li>create the website’s structure, write code, and verify the code
works. Their responsibilities also may include managing access
points for others who need to manage a website’s content.</li>

            </ul>
          </div>
<?php
}
}
?>





          <div class="resume-item">
            <h4>Projects </h4>
            <h5></h5>
            <p><em>WEB DEVELOPMENT</em></p>
            <p>
            <ul>
              <li>Built responsive, accessible, and dynamic web pages to enable all
users can navigate sites.</li>
              <li>Creating websites frontend and also backend.</li>
              <li>Built Admin Panel Connect To Database Store user data in MYSQL.</li>
              <li>Integrating data from various back-end services and databases.</li>
              <li>Creating websites that are flexible in use for mobile users.</li>
             
            </ul>
            </p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->





  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Lorem Ipsum</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Sed ut perspiciatis</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Magni Dolores</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-slideshow"></i></div>
            <h4><a href="">Dele cardo</a></h4>
            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="">Divera don</a></h4>
            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->





  <!-- ======= Portfolio Section ======= -->
<!--  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Family</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Child</li>
            <li data-filter=".filter-card">Young</li>
            <li data-filter=".filter-web">old</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>child 1</h4>
              <p>child</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>old 1</h4>
              <p>old</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>child 2</h4>
              <p>child</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Young 1</h4>
              <p>Young</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>old 2</h4>
              <p>old</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

 <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Young 2</h4>
              <p>Young</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>child 3</h4>
              <p>child</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Young 3</h4>
              <p>Young</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>child 4</h4>
              <p>child</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Young 4</h4>
              <p>Young</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

         

         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>child 5</h4>
              <p>child</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  -->











<!-- < dynamic forfolio>-->

<section id="portfolio" class="portfolio" style= "background: #3e3ef1e0 url('./images/<?=$user_data['background']?> ') top right no-repeat;background-attachment: fixed;" >
    <div class="container" style="background: linear-gradient( 141deg , #06114a 53%, #1c324c 16%);
    background-attachment: fixed;">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works & Projects</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          
        </div>
      </div>

      <div class="row portfolio-container">
      <?php   
   $query5 = "SELECT * FROM portfolio";
   $run5 = mysqli_query($db,$query5);    
          while($portfolio = mysqli_fetch_array($run5)){

    ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="images/<?=$portfolio['project_pic']?>" class="img-fluid" alt="" height=50% width=100%>
            <div class="portfolio-info">
              <h4><?=$portfolio['project_name']?></h4>
              <p><?=$portfolio['project_type']?></p>
              <div class="portfolio-links">
                <a href="images/<?=$portfolio['project_pic']?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="<?=$portfolio['project_link']?>" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
<?php
          }
?>

      </div>

    </div>
  </section>  
  <!-- End dynamic Portfolio Section --> 












  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact"  style="background: linear-gradient( 141deg , #1c324c 53%, #06114a 16%);
    background-attachment: fixed;">
    <div class="container" style= "background:  url('./images/<?=$user_data['background']?> ') top right no-repeat;background-attachment: fixed;">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?=$user_data['address']?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <?php
if($user_data['showicons']){
?>
      <div class="social-links">

<?php if($user_data['twitter']!=''){?>
        <a href="https://twitter.com/"<?=$user_data['twitter']?> class="twitter"><i class="bi bi-twitter"></i></a>
<?php
}
?>
        <?php if($user_data['facebook']!=''){?>
        <a href="https://facebook.com/"<?=$user_data['facebook']?> class="facebook"><i class="bi bi-facebook"></i></a>

         <?php 
       }

       if($user_data['instagram']!=''){?>
        <a href="https://instagram.com/"<?=$user_data['instagram']?> class="instagram"><i class="bi bi-instagram"></i></a>
        <?php
        }

 if($user_data['skype']!=''){?>
        <a href="https://skype.com/"<?=$user_data['skype']?> class="google-plus"><i class="bi bi-twitter"></i></a>

         <?php 
         }

if($user_data['linkedin']!=''){?>
        <a href="https://linkedin.com/"<?=$user_data['linkedin']?> class="linkedin"><i class="bi bi-linkedin"></i></a>
<?php
}
?>

      </div>
<?php
}
?>
          </div>
        </div>



        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Email</h3>
            <p><span style="color:red"><b>Email:</b></span><?=$user_data['email']?></p>
          </div>
        </div>

      <!--   <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <?php
 $query2= "SELECT * FROM  personal_info";
 $run2= mysqli_query($db,$query2);
  
 while($personal_info=mysqli_fetch_array($run2)){
  if($personal_info['tittle']=='Email:'){
  ?>
    <i class="bi bi-chevron-right"></i> <strong style="color: red"><?=$personal_info['tittle']?></strong> <b style="color: white;"><?=$personal_info['sub_tittle']?></b> 
  <?php
 }
   }
?>
          </div>
        </div> -->



       <!--  <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <?php
 $query2= "SELECT * FROM  personal_info";
 $run2= mysqli_query($db,$query2);
  
 while($personal_info=mysqli_fetch_array($run2)){
  if($personal_info['tittle']=='Mobile-'){
  ?>
    <i class="bi bi-chevron-right"></i> <strong style="color: red"><?=$personal_info['tittle']?></strong> <b style="color: white;"><?=$personal_info['sub_tittle']?></b> 
  <?php
 }
   }
?>
          </div>
        </div> -->

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Contact Number</h3>
            <p><span style="color:red"><b>Mobile:</b></span><?=$user_data['mobile']?></p>
          </div>
        </div>
      </div>

     

    </div>
  </section><!-- End Contact Section -->




  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <img src=""><a href="https://google.com/">sachin</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</div>
</body>

</html>