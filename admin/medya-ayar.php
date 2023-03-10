<?php require_once 'header.php';
    $ayarsor3 = $db -> prepare("SELECT * FROM sosyal_medya where sosyal_id=:id");
    $ayarsor3 -> execute(array(
      'id' => 0
    ));
    $ayarcek3 = $ayarsor3 -> fetch(PDO::FETCH_ASSOC);
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
                        <label for="exampleInputUsername1">İnstagram</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"  name="instagram" value="<?php echo $ayarcek3['instagram'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Facebook</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="facebook" value="<?php echo $ayarcek3['facebook'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Twitter</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"name="twitter" value="<?php echo $ayarcek3['twitter'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">YouTube</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"name="youtube" value="<?php echo $ayarcek3['youtube'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Linkedin</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"name="linkedin" value="<?php echo $ayarcek3['linkedin'] ?>" >
                      </div>
                    
                      <button type="submit" name="medyaayarkaydet" class="btn btn-gradient-primary me-2">Güncelle</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php include 'footer.php' ?>