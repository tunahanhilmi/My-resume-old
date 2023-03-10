<?php require_once'header.php';

      $kullanicisor = $db -> prepare("SELECT * FROM kullanici");
      $kullanicisor -> execute();
      ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Kullanıcılar </h3>

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
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
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Adı</th>
                          <th>Soyadı</th>
                          <th>Mail</th>
                          <th>Kayıt Zamanı</th>
                          <th>Düzenle</th>
                          <th>Sil</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      
                      while($kullanicicek = $kullanicisor -> fetch(PDO::FETCH_ASSOC)){ ?>
                        <tr>
                            <td><?php echo $kullanicicek['admin_adi'] ?></td>
                            <td><?php echo $kullanicicek['admin_soyadi'] ?></td>
                            <td><?php echo $kullanicicek['admin_mail'] ?></td>
                            <td><?php echo $kullanicicek['admin_zaman'] ?></td>
                            <td><center><a href="admin-duzenle.php?admin_id=<?php echo $kullanicicek['admin_id']?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></td>
                            <td><center><a href="process/islem.php?admin_id=<?php echo $kullanicicek['admin_id']?>&adminsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                            
                        </tr> 
                        <?php 
                      }
                      ?>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>               
              </div>
            </div>
        </div>

          <!-- content-wrapper ends -->
    <?php include'footer.php'?>
          