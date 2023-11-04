<?php
    include('connect.php');
    $fetch = connection('contact');
    $infos = connection('home');
    $pages = connection('pages');
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gerald Vincent Contact</title>
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

    <section class="section pb-5">
      <div class="container">

        <div class="row mb-4 align-items-end">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Contact</h2>
            <p class="mb-0">Jika tertarik untuk menggunakan jasa saya, bisa langsung kontak nomor atau datang ke alamat yang sudah disediakan.
            </p>
          </div>

        </div>

        <div class="row">

          <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
            <ul class="list-unstyled kontak">
           
             
            </ul>
          </div>

        </div>

      </div>

    </section>

  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
      const list = document.querySelector('.kontak')
      const datas = <?= json_encode($fetch) ?>;
      const hasil = datas.map((data)=>`
              <li class="mb-3" style="font-size: 18px;">
                <strong class="d-block mb-1">Alamat</strong>
                <span>${data.alamat}</span>
              </li>
              <li class="mb-3" style="font-size: 18px;">
                <strong class="d-block mb-1">Telepon</strong>
                <span>${data.telepon}</span>
              </li>
              <li class="mb-3" style="font-size: 18px;">
                <strong class="d-block mb-1">Email</strong>
                <span>${data.email}</span>
              </li>
            `)
      list.innerHTML = hasil

      const infos = <?= json_encode($infos) ?>;
      document.querySelector('.brand').textContent = infos[0].nama

      const navi = document.querySelector('.navi')
      const pages = <?= json_encode($pages) ?>;
      const nav = pages.map(page=>`
          <li class="${page.page === "Contact" ? 'active' : false}"><a href="${page.url}">${page.page}</a></li>
      `)

      navi.innerHTML = nav
  </script>
  
</body>

</html>