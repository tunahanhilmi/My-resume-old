<?php require_once 'header.php' ?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Admin Paneli Kullanıcıları İçin İletişim Ayarları</h3>
              
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
                        <label for="exampleInputUsername1">Telefon</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"  name="ayar_tel" value="<?php echo $ayarcek['ayar_tel'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mail Adresi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Adres</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"name="ayar_adres" value="<?php echo $ayarcek['ayar_adres'] ?>" >
                      </div>
                    
                      <button type="submit" name="iletisimayarkaydet" class="btn btn-gradient-primary me-2">Güncelle</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php include 'footer.php' ?>