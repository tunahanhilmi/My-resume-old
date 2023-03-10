<?php require_once'header.php';

      $iletisimsor = $db -> prepare("SELECT * FROM iletisim");
      $iletisimsor -> execute();
      ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Mailler </h3>

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
                                                <h4 class="card-title" style="color:green"> Silme Başarılı</h4>

                                            <?php }
                                            else if($_GET['durum']=="no"){ ?>
                                                <h4 class="card-title" style="color:red">Silme Başarısız</h4>
                                            <?php }
                                            
                                            ?>
                  <?php 
                  $sira=1;
                  ?>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sıra</th>
                          <th>Gönderen Kişi</th>
                          <th>Mail</th>
                          <th>Başlık</th>
                          <th>Durum</th>
                          <th>Gönderim Zamanı</th>
                          <th>İşlemler</th>
                          <th>Sil</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      
                      while($iletisimcek = $iletisimsor -> fetch(PDO::FETCH_ASSOC)){ ?>
                        <tr>
                            <td><?php echo $sira ?></td>
                            <td><?php echo $iletisimcek['iletisim_isim'] ?></td>
                            <td><?php echo $iletisimcek['iletisim_mail'] ?></td>
                            <td><?php echo $iletisimcek['iletisim_baslik'] ?></td>
                            <td>
                              <?php if($iletisimcek['iletisim_durum']==0) {?>
                                          <button disabled class="btn btn-warning btn-xs btn-rounded">Okunmadı</button>

                                            <?php }
                                            else if($iletisimcek['iletisim_durum']==1){ ?>
                                                <button disabled class="btn btn-success btn-xs btn-rounded">Okundu</button>
                                            <?php }
                                            
                                             ?>
                          
                          
                          
                          
                          </td>
                            <td><?php echo $iletisimcek['iletisim_kayit'] ?></td>
                            <td><center><a href="mail-detay.php?iletisim_id=<?php echo $iletisimcek['iletisim_id']?>"><button class="btn btn-primary btn-xs btn-rounded">Detay</button></a></td>
                            <td><center><a href="process/islem.php?iletisim_id=<?php echo $iletisimcek['iletisim_id']?>&mailsil=ok"><button class="btn btn-danger btn-xs btn-rounded">Sil</button></a></center></td>
                            
                        </tr> 
                        <?php 
                        $sira++;
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
          