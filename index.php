<?php
  include('connect.php');
  $fetch = connection('home');
  $pages = connection('pages');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arnoldus Yansens Portofolio</title>
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
    .ucapan{
      font-size: 64px;
    }
    .sub-ucapan{
      font-size: 24px;
      margin-top: -20px;
    }
    .utama{
      display:flex;
      column-gap: 28px;
      height: 100%;

    }

    .content-ucapan{
      width: 70%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
      top: -26px;
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

  <section class="container mt-4 utama">
   
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
    const content = document.querySelector('.utama')
    const datas = <?= json_encode($fetch) ?>;
    const hasil = datas.map(data=>`
    <div class="content-ucapan">
      <p class="ucapan">${data.ucapan}</p>
      <p class="sub-ucapan">${data.subucapan}</p>
    </div>
    <div class="gambar">
      <img src="${data.gambar}" alt="Gambar Header" height="100%" width="100%">
    </div>
            `)
    content.innerHTML = hasil

    document.querySelector('.brand').textContent = datas[0].nama

    const navi = document.querySelector('.navi')
    const pages = <?= json_encode($pages) ?>;
    const nav = pages.map(page=>`
          <li class="${page.page === "Home" ? 'active' : false}"><a href="${page.url}">${page.page}</a></li>
    `)

    navi.innerHTML = nav
    

  </script>
  
</body>

</html>