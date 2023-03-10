<?php require_once 'header.php';
$kullanicisor = $db -> prepare("SELECT * FROM kullanici where admin_id=:id");
$kullanicisor -> execute(array(
  'id' => $_GET['admin_id']
));
$say=$kullanicisor -> rowCount();
$kullanicicek = $kullanicisor -> fetch(PDO::FETCH_ASSOC);
?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">İletişim Ayarları</h3>
              
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                                            <?php 
                                            
                                            if($_GET['durum']=="ok") {?>
                                                <h4 class="card-title" style="color:green"> Güncelleme Başarılı</h4>

                                            <?php }
                                            else if($_GET['durum']=="no"){ ?>
                                                <h4 class="card-title" style="color:red">Güncelleme Başarısız</h4>
                                            <?php }
                                            
                                            ?>
                    
                    <form class="forms-sample" action="process/islem.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Admin Adı</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"  name="admin_adi" value="<?php echo $kullanicicek['admin_adi'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Admin Soyadı</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"  name="admin_soyadi" value="<?php echo $kullanicicek['admin_soyadi'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mail Adresi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="admin_mail" value="<?php echo $kullanicicek['admin_mail'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Kullanıcı Adı</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"name="admin_kad" value="<?php echo $kullanicicek['admin_kad'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Şifre</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"name="admin_sifre" value="<?php echo $kullanicicek['admin_sifre'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Profil Foto (Link)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"name="admin_resim" value="<?php echo $kullanicicek['admin_resim'] ?>" >
                      </div>
                    
                      <input type="hidden" name="admin_id" value="<?php echo $kullanicicek['admin_id'] ?>">

                      <button type="submit" name="adminguncelle" class="btn btn-gradient-primary me-2">Güncelle</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php include 'footer.php' ?>