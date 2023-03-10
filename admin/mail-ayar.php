<?php require_once 'header.php' ?>
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
                        <label for="exampleInputUsername1">SMTP Host</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"  name="ayar_smtp_host" value="<?php echo $ayarcek['ayar_smtp_host'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">SMTP User</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="ayar_smtp_user" value="<?php echo $ayarcek['ayar_smtp_user'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">SMTP Şifre</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="ayar_smtp_password" value="<?php echo $ayarcek['ayar_smtp_password'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">SMTP Port</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="ayar_smtp_port" value="<?php echo $ayarcek['ayar_smtp_port'] ?>" >

                      </div>
                    
                      <button type="submit" name="mailayarkaydet" class="btn btn-gradient-primary me-2">Güncelle</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php include 'footer.php' ?>