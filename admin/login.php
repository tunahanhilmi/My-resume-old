<?php require_once 'process/db.php';
$ayarsor = $db -> prepare("SELECT * FROM site_ayar where ayar_id=:id");
$ayarsor -> execute(array(
  'id' => 0
));
$ayarcek = $ayarsor -> fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>">
    <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_author'] ?>">
    <title><?php echo $ayarcek['ayar_title'] ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo $ayarcek['ayar_favicon'] ?>" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="assets/images/logo.svg">
                </div>
                <h4>Merhabalar..</h4>
                <h6 class="font-weight-light">Giriş yapıp admin panele ulaşabilirsin</h6>
                <form class="pt-3" action="process/islem.php" method="POST">
                  <div class="form-group">
                    <input type="text" name="admin_kad" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Kullanıcı Adı">
                  </div>
                  <div class="form-group">
                    <input name="admin_sifre" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Şifre">
                  </div>
                  <div class="mt-3">
                  <?php 
                                            
                                            if($_GET['durum']=="no"){ ?>
                                                <span style="color:red"> Kullanıcı adı ya da şifre hatalı!</span>
                                            <?php }
                                            if($_GET['durum']=="izinsiz"){ ?>
                                                <span style="color:red">İzinsiz Giriş Denemesi!</span>
                                            <?php }
                                            if($_GET['durum']=="exit"){ ?>
                                                <span style="color:green">Çıkış Başarılı</span>
                                            <?php }
                                            
                                            ?>
                  </div>
                  <div class="mt-3">
                    <button name="admingiris" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Giriş Yap</button>
                  </div>
                  <!---<div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>---->
                 
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>