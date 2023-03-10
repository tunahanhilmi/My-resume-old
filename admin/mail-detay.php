<?php require_once 'header.php';
$iletisimsor = $db -> prepare("SELECT * FROM iletisim where iletisim_id=:id");
$iletisimsor -> execute(array(
  'id' => $_GET['iletisim_id']
));
$say=$iletisimsor -> rowCount();
$iletisimcek = $iletisimsor -> fetch(PDO::FETCH_ASSOC);
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
                                        
                    <h4 class="card-title text-center" style="color:purple">Mail Detayı</h4>

                    <form class="forms-sample" action="process/islem.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Gönderen Kişi</label>
                        <input disabled type="text" class="form-control" id="exampleInputUsername1"  name="iletisim_isim" value="<?php echo $iletisimcek['iletisim_isim'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Gönderen Mail</label>
                        <input disabled  type="text" class="form-control" id="exampleInputUsername1"  name="iletisim_mail" value="<?php echo $iletisimcek['iletisim_mail'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mesaj Başlığı</label>
                        <input disabled  type="text" class="form-control" id="exampleInputEmail1" name="iletisim_baslik" value="<?php echo $iletisimcek['iletisim_baslik'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Mesaj</label>
                        <textarea disabled type="text" class="form-control" rows="15" name="iletisim_mesaj" ><?php echo $iletisimcek['iletisim_mesaj'] ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Gönderim Zamanı</label>
                        <input disabled type="text" class="form-control" id="exampleInputPassword1"name="iletisim_kayit" value="<?php echo $iletisimcek['iletisim_kayit'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">IP Adresi</label>
                        <input disabled type="text" class="form-control" id="exampleInputPassword1"name="iletisim_ip" value="<?php echo $iletisimcek['iletisim_ip'] ?>" >
                      </div>
                    
                      <input type="hidden" name="iletisim_id" value="<?php echo $iletisimcek['iletisim_id'] ?>">
                      
                      <button type="submit" name="okunduisaretle" class="btn btn-gradient-success me-2 btn-rounded">Okundu Olarak İşaretle</button>
                      
                    </form>
                    <br>
                    <a href="process/islem.php?mailsil=ok&iletisim_id=<?php echo $iletisimcek['iletisim_id']?>"><button  name="mailsil2" class="btn btn-gradient-danger me-2 btn-rounded">Kalıcı Olarak Sil</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
<?php include 'footer.php' ?>