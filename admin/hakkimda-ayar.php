<?php require_once 'header.php';


//db ayarı
$hakkimda_ayar_sor = $db -> prepare("SELECT * FROM hakkimda_ayar where hakkimda_id=:id");
      $hakkimda_ayar_sor -> execute(array(
        'id' => 1
      ));
      $hakkimda_ayar_cek = $hakkimda_ayar_sor -> fetch(PDO::FETCH_ASSOC);

?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Hakkımda Bölümü / Yetenkler Bölümü </h3>
              
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
                        <label for="exampleInputEmail1">Type verileri (Her yazı arasına virgül koymayı unutmayınız)</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="type_veri" value="<?php echo $hakkimda_ayar_cek['type_veri'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Ana açıklama</label>
                        <textarea type="text" class="form-control" id="editor"  name="hakkimda_ana_aciklama" > <?php echo $hakkimda_ayar_cek['hakkimda_ana_aciklama'] ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Profil Foto</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="hakkimda_pp" value="<?php echo $hakkimda_ayar_cek['hakkimda_pp'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Küçük Başlık</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="hakkimda_k_baslik" value="<?php echo $hakkimda_ayar_cek['hakkimda_k_baslik'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Küçük Açıklama</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="hakkimda_kucuk_aciklama" value="<?php echo $hakkimda_ayar_cek['hakkimda_kucuk_aciklama'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Doğum Günü</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="hakkimda_dogum_gunu" value="<?php echo $hakkimda_ayar_cek['hakkimda_dogum_gunu'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Website</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="hakkimda_website" value="<?php echo $hakkimda_ayar_cek['hakkimda_website'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Telefon</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="hakkimda_tel" value="<?php echo $hakkimda_ayar_cek['hakkimda_tel'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Adres</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="hakkimda_adres" value="<?php echo $hakkimda_ayar_cek['hakkimda_adres'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Yaş</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="hakkimda_yas" value="<?php echo $hakkimda_ayar_cek['hakkimda_yas'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Derece</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="hakkimda_derece" value="<?php echo $hakkimda_ayar_cek['hakkimda_derece'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Mail</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="hakkimda_mail" value="<?php echo $hakkimda_ayar_cek['hakkimda_mail'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Freelance</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="hakkimda_freelance" value="<?php echo $hakkimda_ayar_cek['hakkimda_freelance'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Uzun Metin</label>
                        <textarea style="height:250px" type="text" class="form-control" id="editor2" name="hakkimda_metin" ><?php echo $hakkimda_ayar_cek['hakkimda_metin'] ?></textarea>
                      </div>
                      
                    
                      <button type="submit" name="arayuz_hakkimda_kaydet" class="btn btn-gradient-primary me-2">Güncelle</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                                            <?php 
                                            
                                            if($_GET['durum']=="ok2") {?>
                                                <h4 class="card-title" style="color:green"> Güncelleme Başarılı</h4>

                                            <?php }
                                            else if($_GET['durum']=="no2"){ ?>
                                                <h4 class="card-title" style="color:red">Güncelleme Başarısız</h4>
                                            <?php }
                                            
                                            ?>
                    <form class="forms-sample" action="process/islem.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Ana açıklama</label>
                        <textarea type="text" class="form-control" id="editor3"  name="yaptiklar_aciklama" > <?php echo $hakkimda_ayar_cek['yaptiklar_aciklama'] ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Bölüm 1 Değer (0-100)</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="bol1_deger" value="<?php echo $hakkimda_ayar_cek['bol1_deger'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Bölüm 1 Açıklama</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="bol1_aciklama" value="<?php echo $hakkimda_ayar_cek['bol1_aciklama'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Bölüm 2 Değer (0-100)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="bol2_deger" value="<?php echo $hakkimda_ayar_cek['bol2_deger'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Bölüm 2 Açıklama</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="bol2_aciklama" value="<?php echo $hakkimda_ayar_cek['bol2_aciklama'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Bölüm 3 Değer (0-100)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="bol3_deger" value="<?php echo $hakkimda_ayar_cek['bol3_deger'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Bölüm 3 Açıklama</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="bol3_aciklama" value="<?php echo $hakkimda_ayar_cek['bol3_aciklama'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Bölüm 4 Değer (0-100)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="bol4_deger" value="<?php echo $hakkimda_ayar_cek['bol4_deger'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Bölüm 4 Açıklama</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="bol4_aciklama" value="<?php echo $hakkimda_ayar_cek['bol4_aciklama'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Yetenekler açıklama</label>
                        <textarea type="text" class="form-control" id="editor4"  name="yetenekler_aciklama" > <?php echo $hakkimda_ayar_cek['yetenekler_aciklama'] ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">HTML Başarı Değeri (0-100)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="yet1" value="<?php echo $hakkimda_ayar_cek['yet1'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">CSS Başarı Değeri (0-100)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="yet2" value="<?php echo $hakkimda_ayar_cek['yet2'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">JAVASCRIPT Başarı Değeri (0-100)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="yet3" value="<?php echo $hakkimda_ayar_cek['yet3'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">PHP Başarı Değeri (0-100)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="yet4" value="<?php echo $hakkimda_ayar_cek['yet4'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">WORDPRESS/CMS Başarı Değeri (0-100)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="yet5" value="<?php echo $hakkimda_ayar_cek['yet5'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">PHOTOSHOP Başarı Değeri (0-100)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="yet6" value="<?php echo $hakkimda_ayar_cek['yet6'] ?>" >
                      </div>
                      
                    
                      <button type="submit" name="arayuz_hakkimda_kaydet2" class="btn btn-gradient-primary me-2">Güncelle</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>
              ClassicEditor
              .create( document.querySelector( '#editor' ) )
              .catch( error => {
              console.error( error );
              } );
              ClassicEditor
              .create( document.querySelector( '#editor2' ) )
              .catch( error => {
              console.error( error );
              } );
              ClassicEditor
              .create( document.querySelector( '#editor3' ) )
              .catch( error => {
              console.error( error );
              } );
              ClassicEditor
              .create( document.querySelector( '#editor4' ) )
              .catch( error => {
              console.error( error );
              } );
          </script>
<?php include 'footer.php' ?>