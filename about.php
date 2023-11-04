<?php
  include('connect.php');
  $fetch = connection('about');
  $infos = connection('home');
  $pages = connection('pages');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arnoldus Yansens About</title>
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
    .gap{
      background-color: white;
      width: 400px;
      height: 10px; 
      position: relative;
      top: 48px;
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

    <section class="section pb-5">
      <div class="container">
        <div class="row mb-1 align-items-end">
          <div class="col-md-6" data-aos="fade-up">
            <h2>About Me</h2>
          </div>

        </div>

        <div class="row">
          <div class="col-md-5 ml-auto order-2" data-aos="fade-up">
            <h3 class="h3 mb-4">Skills</h3>
            <ul class="list-unstyled kemampuan">

            </ul>
          </div>

          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <p><img src="assets/img/person_1_sq.jpg" alt="Image" class="img-fluid"></p>
            <p style="text-align: justify; font-size: 18px; text-indent: 10px;">Arnoldus Yansens adalah seorang desainer grafis profesional yang berbakat dan berpengalaman dalam industri kreatif. Dengan latar belakang pendidikan yang kuat dan dedikasi terhadap seni visual, ia telah membangun reputasi yang kuat sebagai inovator dalam desain grafis. Ia dikenal dengan kemampuannya untuk menggabungkan kreativitas dengan keahlian teknis, menciptakan karya-karya visual yang memukau dan efektif.</p>

            <p style="text-align: justify; font-size: 18px; text-indent: 10px;">Arnoldus Yansens pemahaman mendalam tentang estetika dan desain yang kuat, dan mampu menghasilkan karya-karya yang memenuhi kebutuhan dan visi klien dengan sempurna. Ia telah bekerja dengan berbagai merek terkemuka dan lembaga, memberikan solusi desain yang memikat untuk berbagai proyek, mulai dari identitas merek hingga kampanye iklan.
            </p>

            <p style="text-align: justify; font-size: 18px; text-indent: 10px;">Selain keahlian teknisnya, Arnold juga memiliki kemampuan komunikasi yang luar biasa, yang memungkinkannya untuk bekerja sama dengan klien dan tim dengan baik. Ia sangat peduli terhadap detail dan selalu berusaha untuk mencapai hasil terbaik dalam setiap proyek yang ia tangani.</p>

            <p style="text-align: justify; font-size: 18px; text-indent: 10px;">Sebagai seorang desainer grafis profesional yang berdedikasi, Arnoldus Yansens adalah aset berharga dalam dunia desain, membawa kreativitas dan ketajaman teknisnya ke setiap proyek yang ia kerjakan, dan terus berkontribusi pada perkembangan industri ini.</p>
            
          </div>

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

    const list = document.querySelector('.kemampuan')
    const datas = <?= json_encode($fetch) ?>;
    const hasil = datas.map(data=>`
              <li class="mb-3">
                <div class="d-flex mb-1" style="font-size: 30px;">
                  <p style="margin-right: 15px;">${data.kemampuan}</p>
                  <span>${data.persentase}%</span>
                </div>
                <div class="gap"></div>
                <div class="progress custom-progress">
                  <div class="progress-bar" role="progressbar" style="width: ${data.persentase}%" aria-valuenow="${data.persentase}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
            `)
    list.innerHTML = hasil

    const infos = <?= json_encode($infos) ?>;
      document.querySelector('.brand').textContent = infos[0].nama

      const navi = document.querySelector('.navi')
      const pages = <?= json_encode($pages) ?>;
      const nav = pages.map(page=>`
          <li class="${page.page === "About" ? 'active' : false}"><a href="${page.url}">${page.page}</a></li>
      `)

      navi.innerHTML = nav
  </script>

</body>

</html>