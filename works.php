<?php
    include('connect.php');
    $works = connection('works');
    $infos = connection('home');
    $pages = connection('pages');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arnold Yansens Works</title>
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
      <a class="navbar-brand brand" href="index.php">Portfolio</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>

  <main id="main">

    <section class="section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
            <h2 class="im"></h2>
            <p class="mb-0 status"></p>
          </div>
         
        </div>
        <div id="portfolio-grid" class="row no-gutter work-list" data-aos="fade-up" data-aos-delay="200">

        
          
          
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
    
    // <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
    //         <a href="" class="item-wrap fancybox">
    //           <div class="work-info">
    //             <h3>Boxed Water</h3>
    //             <span>Web</span>
    //           </div>
    //           <img class="img-fluid" src="assets/img/img_1.jpg">
    //         </a>
    //       </div>

    const list = document.querySelector('.work-list')
    const datas = <?= json_encode($works) ?>;
    const hasil = datas.map(data=>`
        <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
          <a href="" class="item-wrap fancybox">
              <div class="work-info">
                <h3>${data.work}</h3>
                <span>${data.tipe}</span>
              </div>
            <img class="img-fluid" src="${data.img}" alt="${data.work}">
          </a>
        </div>
        `)
    list.innerHTML = hasil

      const infos = <?= json_encode($infos) ?>;
      document.querySelector('.brand').textContent = infos[0].nama
    
      const im = document.querySelector('.im')
      const stats = document.querySelector('.status')
      im.textContent = `Hey, I'm ${infos[0].nama}`
      stats.textContent = `${infos[0].status}`

      const navi = document.querySelector('.navi')
      const pages = <?= json_encode($pages) ?>;
      const nav = pages.map(page=>`
          <li class="${page.page === "Works" ? 'active' : false}"><a href="${page.url}">${page.page}</a></li>
      `)

      navi.innerHTML = nav
  </script>

</body>

</html>
