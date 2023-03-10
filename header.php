<?php include 'admin/process/db.php';
      $ayarsor = $db -> prepare("SELECT * FROM site_ayar where ayar_id=:id");
      $ayarsor -> execute(array(
        'id' => 0
      ));
      $ayarcek = $ayarsor -> fetch(PDO::FETCH_ASSOC);


      //hakkımda veri çekme
      $hakkimda_ayar_sor = $db -> prepare("SELECT * FROM hakkimda_ayar where hakkimda_id=:id");
      $hakkimda_ayar_sor -> execute(array(
        'id' => 1
      ));
      $hakkimda_ayar_cek = $hakkimda_ayar_sor -> fetch(PDO::FETCH_ASSOC);

      //Sosyal Medya Linleri için veri çekme
      $ayarsor3 = $db -> prepare("SELECT * FROM sosyal_medya where sosyal_id=:id");
      $ayarsor3 -> execute(array(
      'id' => 0
      ));
      $ayarcek3 = $ayarsor3 -> fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>">
    <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_author'] ?>">
    <title>Tunahan Hilmi</title>
    <meta name="theme-color" content="#00FFF6" >

  <!-- Favicons -->
  <link rel="shortcut icon" href="assets/img/favicon.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Ana Sayfa</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Hakkımda</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Özgeçmiş</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolyo</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>İlgi Alanları</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>İletişim</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->