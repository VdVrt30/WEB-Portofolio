<?php
    include('connect.php');
    $fetch = connection('services');
    $infos = connection('home');
    $pages = connection('pages');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arnold Yansens Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .kosong{
      background-color: white;
      width: 800px;
      height: 60px;
      position: absolute;
      top:815px;
      left:0px;
    }

    .services-list{
      display: grid;
      grid-template-columns: repeat(2, 1fr);
    }

    .list2{
      grid-column: 2 / 3;
      grid-row: 1 / 2;
    }

    .list3{
      grid-column: 1 / 2;
      grid-row: 2 / 3;
    }

    .list4{
      grid-column: 2 / 3;
      grid-row: 2 / 3;
    }

  </style>

</head>

<body>

  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu navi">
          
          </ul>
        </div>

      </div>

    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand brand" href="index.php">Portofolio</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>

  <main id="main">

    <section class="section">
      <div class="container">
        <div class="row mb-2 align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <p style="font-size: 50px;">My Services</p>
            <p style="font-size: 20px;">Berikut merupakan jasa dan keahlian yang saya tawarkan diantaranya adalah.</p>

          </div>

        </div>
      </div>

      <div class="site-section pb-0 services">
        <div class="container">

          <div class="services-list">
          </div>
          <div class="kosong"></div>

        </div>
      </div>
    </section>

  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>
  
  <script>
      const list = document.querySelector('.services-list')
      const datas = <?= json_encode($fetch) ?>;
      const hasil = datas.map((data,index)=>`
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-2 list${index+1}" data-aos="fade-up" data-aos-delay="">
              <i class="bi ${data.icon}" style="font-size: 80px;"></i>
              <P class="mb-2" style="font-size: 30px;">${data.service}</P>
            </div>
            `) 
      list.innerHTML = hasil
    
      const infos = <?= json_encode($infos) ?>;
      document.querySelector('.brand').textContent = infos[0].nama

      const navi = document.querySelector('.navi')
      const pages = <?= json_encode($pages) ?>;
      const nav = pages.map(page=>`
          <li class="${page.page === "Services" ? 'active' : false}"><a href="${page.url}">${page.page}</a></li>
      `)

      navi.innerHTML = nav

  </script>

</body>

</html>
