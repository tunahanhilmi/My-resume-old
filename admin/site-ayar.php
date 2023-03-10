<?php require_once 'header.php' ?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Site Ayarları </h3>
              
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
                        <label for="exampleInputUsername1">Site Logo</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"  name="ayar_logo" value="<?php echo $ayarcek['ayar_logo'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Site Favicon</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="ayar_favicon" value="<?php echo $ayarcek['ayar_favicon'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Site Title</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"name="ayar_title" value="<?php echo $ayarcek['ayar_title'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Site Description</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1"name="ayar_description" value="<?php echo $ayarcek['ayar_description'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Site Keywords</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Site Author</label>
                        <input type="text" class="form-control" id="exampleInputConfirmPassword1" name="ayar_author" value="<?php echo $ayarcek['ayar_author'] ?>" >
                      </div>
                    
                      <button type="submit" name="siteayarkaydet" class="btn btn-gradient-primary me-2">Güncelle</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php include 'footer.php' ?>