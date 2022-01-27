<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Painted Wooden Key</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('front_end/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('front_end/assets/img/apple-touch-icon.pn')}}g" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front_end/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('front_end/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('front_end/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front_end/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front_end/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('front_end/assets/vendor/glightbox/css/glightbox.min.cs')}}s" rel="stylesheet">
  <link href="{{asset('front_end/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('front_end/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('front_end/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Multi - v4.3.0
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Top menu</a></li>
          
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="getstarted scrollto" href="{{ route('login') }}">เข้าสู่ระบบ</a></li>
          <li><a class="getstarted scrollto" href="{{ route('register') }}">สมัครสมาชิก</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{asset('front_end/assets/img/slide/slide-1.png')}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Painted Wooden Key <span></span></h2>
              <p class="animate__animated animate__fadeInUp">ยินดีต้อนรับเข้าสู่ร้าน Painted Wooden Key  </p>
              
            </div>
          </div>
        </div>


      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>Painted Wooden Key</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              We have a wide variety of products to choose from.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> เรามีสินค้าให้เลือกหลายหลากชิ้น</li>
              <a href="#" class="btn-learn-more">กดเลย</a>
          </div>
          <div class="col-lg-1 col-md-2 ">
            <img src="{{asset('front_end/assets/img/portfolio/portfolio-4.jpg')}}">

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-title">
          <h2></h2>
          <p>ข้อมูลเพิ่มความรู้ที่ไม่รู้</p>
        </div>

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("front_end/assets/img/slide/slide-2.jpg"); ' data-aos="zoom-in" data-aos-delay="100" >
      
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>ตุ๊กตาหมีเท็ดดี้แบร์ที่แพง <strong>ที่แพงที่สุดในโลก</strong></h3>
              <p>
                บริษัท Steiff จึงเป็นบริษัทผลิตหมีเท็ดดี้แบร์ที่ประเทศเยอร์มัน ได้กล่าวยืนยันว่านี้เป็นการผลิต ตุ๊กตาหมีเท็ดดี้แบร์ที่แพงที่สุดในโลกเพื่อเป็นการเฉลิมฉลองเนื่องในโอกาศ 125 ปีของหมีเท็ดดี้แบร์ โดยหมีเท็ดดี้แบร์ตัวนี้ผลิตจากวัสดุราคาแพงจำนวนมากดังรายการดังต่อไปนี้
และด้วยวัสดุราคาแพงจำนวนมากจึงทำให้เจ้าหมีตัวนี้มีราคา 62,446 ยูโร (ประมาณ 84,000 เหรียญยูเอส) หากคุณกระเป๋าหนักพอ ยังต้องการเพิ่มเติมอะไรอีกทางบริษัท Steiff ก็พร้อมจะผลิตตามออเดอร์ ได้ตามที่คุณต้องการ
              </p>
            </div>

            
    </section>
    <!-- End Why Us Section -->

    



     <!-- ======= Cta Section ======= -->
     <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3></h3>

    </section><!-- End Cta Section -->
   
     <!-- Top menu-->
     <section id="portfolio" class="portfolios">
    <div class="container" data-aos="fade-up">
    <div class="section-title">
          <h2>เมนูยอดนิยม</h2>
          <p>Top Menu</p>
        </div>
         </div>
         <div class="container">
  <div class="row">
    <div class="col-sm">
    @foreach ($product as $products)
    <td>
       <img src="{{asset('admin/images/'.$products->image)}}" alt="" style= width ="50"  height="200" margin="30">
       </td>
       
    @endforeach
    </div>
    </div>
    </section>
 
    <!-- end Top menu-->
    
     <!-- ======= Why Us Section ======= -->
     <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="section-title">
          <h2></h2>
          <p>ข้อมูลเพิ่มเติม</p>
        </div>

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("front_end/assets/img/slide/se.jpg");' data-aos="zoom-in" data-aos-delay="100">
      
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>About<strong>Painted Wooden  Key </strong></h3>
              <p>
                พวงกุญที่เป็นไม้และเพ้นท์สีลงบนไม้เป็นลายการ์ตูนต่างๆ ที่ลูกค้าต้องการและมีไม้เปล่าแบบไม้เพ้นท์ที่ลูกค้าอยากจะ
                เขียนหรือวาดลงบนไม้ได้เอง ทางลูกค้าสามารถบอกลายที่อยากจะให้เป็นไม้เพ้นได้
              </p>
            </div>

            
    </section>
    <!-- End Why Us Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{asset('front_end/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Chayutpon Srisopha</h4>
                  <span>ชยุตพล ศรีโสภา</span>
                </div>
                <div class="social">
                 
                  <a href="https://www.facebook.com/chayutpun.blue.5/"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/lube.blue/"><i class="bi bi-instagram"></i></a>
    
                </div>
              </div>
            </div>
          </div>
          <div class="col-1" ></div>
          <div class=" col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{asset('front_end/assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Worawech Sudso</h4>
                  <span>วรเวช สุดโส</span>
                </div>
                <div class="social">
                  
                  <a href="https://www.facebook.com/profile.php?id=100033731466718"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/dredpyon/"><i class="bi bi-instagram"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-1" ></div>
          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{asset('front_end/assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nopparat Intarapat</h4>
                  <span>นพรัตน์ อินทรแพทย์</span>
                </div>
                <div class="social">
                 
                  <a href="https://www.facebook.com/nopparat.intarapat"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/mn_nxw/"><i class="bi bi-instagram"></i></a>
               
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Team Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Painted Wooden key</h3>
              <p class="pb-3"><em> เป็นร้านขายของออนไลน์ที่มีขายทั้งพวงกุญแจน่ารัก ๆ ชุดเซ็ต และ อื่น ๆ ตามที่เจ้าของร้านอยากจะขาย</em></p>
              <p>
                ที่อยู่ร้าน <br>
                ซ.นครอินทร์  8 หมู่ 8 ต.ตลาดขวัญ อ.เมือง จ.นนทบุรี<br><br>
                <strong>Phone:</strong> 0963163959 <br>
                <strong>Email:</strong> <br>
                <strong>line:</strong>faiiomyim<br>
                <strong>FB:</strong>พวงกุญแจไม้เพ้นท์ ไม้เปล่า ปลีก-ส่ง byfaiiomyim <br>
              
              
              
        
        
          
        </div>
      </div>
      <div class="col-1" ></div>
      <div class="col-xl-7 col-lg-5 col-md-5" >
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.0474438136757!2d100.4988784147802!3d13.836189690292906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b0e7dcbad49%3A0xe71d2fb1c8426345!2sSoi%20Nakorninn%208%2C%20Tambon%20Talat%20Kwan%2C%20Amphoe%20Mueang%20Nonthaburi%2C%20Chang%20Wat%20Nonthaburi%2011000!5e0!3m2!1sen!2sth!4v1642735922588!5m2!1sen!2sth" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    </div>
   </div>

  </footer><!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('front_end/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('front_end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('front_end/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('front_end/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('front_end/assets/vendor/php-email-form/validate.j')}}s"></script>
  <script src="{{asset('front_end/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('front_end/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('front_end/assets/js/main.js')}}"></script>

</body>

</html>