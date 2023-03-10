<?php 
ob_start();
session_start();
include 'db.php';

//ADMİN GİRİŞ
if(isset($_POST['admingiris'])){
    $admin_kad = $_POST['admin_kad'];
    $admin_sifre = md5($_POST['admin_sifre']);

    $kullanici_sor = $db -> prepare("SELECT * FROM kullanici where admin_kad=:kad and admin_sifre=:sifre and admin_yetki=:yetki");
    $kullanici_sor -> execute(array(
    'kad' => $admin_kad,
    'sifre' => $admin_sifre,
    'yetki' => 5
  ));

 $say = $kullanici_sor -> rowCount();


 if ($say==1) {
    $_SESSION['admin_kad']=$admin_kad;
    header("Location:../index.php");
    exit;
}
else {
    header("Location:../login.php?durum=no");
    exit;
}
}


//Site Ayarları Güncelleme

if(isset($_POST['siteayarkaydet'])){

    $ayarkaydet= $db -> prepare("UPDATE site_ayar SET
        ayar_logo=:ayar_logo,
        ayar_favicon=:ayar_favicon,
        ayar_title=:ayar_title,
        ayar_description=:ayar_description,
        ayar_keywords=:ayar_keywords,
        ayar_author=:ayar_author 
        WHERE ayar_id=0");
    
    $update=$ayarkaydet -> execute(array(
        'ayar_logo' => $_POST['ayar_logo'],
        'ayar_favicon' => $_POST['ayar_favicon'],
        'ayar_title' => $_POST['ayar_title'],
        'ayar_description' => $_POST['ayar_description'],
        'ayar_keywords' => $_POST['ayar_keywords'],
        'ayar_author' => $_POST['ayar_author']
    ));
    
    if ($update) {
        header("Location: ../site-ayar.php?durum=ok");
    }
    else {
        header("Location: ../site-ayar.php?durum=no");
    
    }
    }



    //İletişim Ayarları Güncelleme

    if(isset($_POST['iletisimayarkaydet'])){

        $ayarkaydet= $db -> prepare("UPDATE site_ayar SET
            ayar_tel=:ayar_tel,
            ayar_mail=:ayar_mail,
            ayar_adres=:ayar_adres
            WHERE ayar_id=0");
        
        $update=$ayarkaydet -> execute(array(
            'ayar_tel' => $_POST['ayar_tel'],
            'ayar_mail' => $_POST['ayar_mail'],
            'ayar_adres' => $_POST['ayar_adres']
        ));
        
        if ($update) {
            header("Location: ../iletisim-ayar.php?durum=ok");
        }
        else {
            header("Location: ../iletisim-ayar.php?durum=no");
        
        }
        }


        //Sosyal Medya Ayarları Güncelleme

        if (isset($_POST['sosyalayarkaydet'])) {
            $ayarkaydet= $db -> prepare("UPDATE site_ayar SET
            ayar_linkedin=:ayar_linkedin,
            ayar_twitter=:ayar_twitter,
            ayar_instagram=:ayar_instagram,
            ayar_youtube=:ayar_youtube
            WHERE ayar_id=0");

            $update=$ayarkaydet -> execute(array(
            'ayar_linkedin' => $_POST['ayar_linkedin'],
            'ayar_twitter' => $_POST['ayar_twitter'],
            'ayar_instagram' => $_POST['ayar_instagram'],
            'ayar_youtube' => $_POST['ayar_youtube']

            ));

            if ($update) 
                header("Location: ../sosyal-ayar.php?durum=ok");
            else
                header("Location: ../sosyal-ayar.php=durum=no");
        }


        //Mail Ayarları Güncelleme

        if (isset($_POST['mailayarkaydet'])) {
            $ayarkaydet= $db -> prepare("UPDATE site_ayar SET
            ayar_smtp_host=:ayar_smtp_host,
            ayar_smtp_user=:ayar_smtp_user,
            ayar_smtp_password=:ayar_smtp_password,
            ayar_smtp_port=:ayar_smtp_port
            WHERE ayar_id=0");

            $update=$ayarkaydet -> execute(array(
            'ayar_smtp_host' => $_POST['ayar_smtp_host'],
            'ayar_smtp_user' => $_POST['ayar_smtp_user'],
            'ayar_smtp_password' => $_POST['ayar_smtp_password'],
            'ayar_smtp_port' => $_POST['ayar_smtp_port']

            ));

            if ($update) 
                header("Location: ../mail-ayar.php?durum=ok");
            else
                header("Location: ../mail-ayar.php=durum=no");
        }



         //kullanıcı kayıt düzenleme
    if(isset($_POST['adminguncelle'])){

        $admin_id=$_POST['admin_id'];

        $ayarkaydet= $db -> prepare("UPDATE kullanici SET
            admin_adi=:admin_adi,
            admin_soyadi=:admin_soyadi,
            admin_mail=:admin_mail,
            admin_kad=:admin_kad,
            admin_sifre=:admin_sifre,
            admin_resim=:admin_resim
            
            WHERE admin_id={$_POST['admin_id']}");
        
        $update=$ayarkaydet -> execute(array(
            'admin_adi' => $_POST['admin_adi'],
            'admin_soyadi' => $_POST['admin_soyadi'],
            'admin_mail' => $_POST['admin_mail'],
            'admin_kad' => $_POST['admin_kad'],
            'admin_sifre' => $_POST['admin_sifre'],
            'admin_resim' => $_POST['admin_resim']
            
        ));
        
        if ($update) {
            header("Location: ../admin-duzenle.php?admin_id=$admin_id&durum=ok");
        }
        else {
            header("Location: ../admin-duzenle.php?admin_id=$admin_id&durum=no");
        
        }
        }


        //kullanici silme

        if ($_GET['adminsil']=='ok'){
            $sil=$db ->prepare("DELETE from kullanici WHERE admin_id=:id");
            $kontrol=$sil -> execute(array(
                'id'=> $_GET['admin_id']
            ));

            if($kontrol)
                header("Location:../kullanicilar.php?durum=ok");
            else
            header("Location:../kullanicilar.php?durum=no");
        }



        //Arayüz Hakkımda Bölümü

        if(isset($_POST['arayuz_hakkimda_kaydet'])){

    
            $ayarkaydet= $db -> prepare("UPDATE hakkimda_ayar SET
                type_veri=:type_veri,
                hakkimda_ana_aciklama=:hakkimda_ana_aciklama,
                hakkimda_pp=:hakkimda_pp,
                hakkimda_k_baslik=:hakkimda_k_baslik,
                hakkimda_kucuk_aciklama=:hakkimda_kucuk_aciklama,
                hakkimda_dogum_gunu=:hakkimda_dogum_gunu,
                hakkimda_website=:hakkimda_website,
                hakkimda_tel=:hakkimda_tel,
                hakkimda_adres=:hakkimda_adres,
                hakkimda_yas=:hakkimda_yas,
                hakkimda_derece=:hakkimda_derece,
                hakkimda_mail=:hakkimda_mail,
                hakkimda_freelance=:hakkimda_freelance,
                hakkimda_metin=:hakkimda_metin
                
                WHERE hakkimda_id=1");
            
            $update=$ayarkaydet -> execute(array(
                'type_veri' => $_POST['type_veri'],
                'hakkimda_ana_aciklama' => $_POST['hakkimda_ana_aciklama'],
                'hakkimda_pp' => $_POST['hakkimda_pp'],
                'hakkimda_k_baslik' => $_POST['hakkimda_k_baslik'],
                'hakkimda_kucuk_aciklama' => $_POST['hakkimda_kucuk_aciklama'],
                'hakkimda_dogum_gunu' => $_POST['hakkimda_dogum_gunu'],
                'hakkimda_website' => $_POST['hakkimda_website'],
                'hakkimda_tel' => $_POST['hakkimda_tel'],
                'hakkimda_adres' => $_POST['hakkimda_adres'],
                'hakkimda_yas' => $_POST['hakkimda_yas'],
                'hakkimda_derece' => $_POST['hakkimda_derece'],
                'hakkimda_mail' => $_POST['hakkimda_mail'],
                'hakkimda_freelance' => $_POST['hakkimda_freelance'],
                'hakkimda_metin' => $_POST['hakkimda_metin']
                
            ));
            
            if ($update)
                header("Location: ../hakkimda-ayar.php?durum=ok");
            else 
                header("Location: ../hakkimda-ayar.php?durum=no");
            }



            //arayüz hakkımda bölümü 2
            if(isset($_POST['arayuz_hakkimda_kaydet2'])){

    
                $ayarkaydet= $db -> prepare("UPDATE hakkimda_ayar SET
                    yaptiklar_aciklama=:yaptiklar_aciklama,
                    bol1_deger=:bol1_deger,
                    bol1_aciklama=:bol1_aciklama,
                    bol2_deger=:bol2_deger,
                    bol2_aciklama=:bol2_aciklama,
                    bol3_deger=:bol3_deger,
                    bol3_aciklama=:bol3_aciklama,
                    bol4_deger=:bol4_deger,
                    bol4_aciklama=:bol4_aciklama,
                    yetenekler_aciklama=:yetenekler_aciklama,
                    yet1=:yet1,
                    yet2=:yet2,
                    yet3=:yet3,
                    yet4=:yet4,
                    yet5=:yet5,
                    yet6=:yet6
                    
                    WHERE hakkimda_id=1");
                
                $update=$ayarkaydet -> execute(array(
                    'yaptiklar_aciklama' => $_POST['yaptiklar_aciklama'],
                    'bol1_deger' => $_POST['bol1_deger'],
                    'bol1_aciklama' => $_POST['bol1_aciklama'],
                    'bol2_deger' => $_POST['bol2_deger'],
                    'bol2_aciklama' => $_POST['bol2_aciklama'],
                    'bol3_deger' => $_POST['bol3_deger'],
                    'bol3_aciklama' => $_POST['bol3_aciklama'],
                    'bol4_deger' => $_POST['bol4_deger'],
                    'bol4_aciklama' => $_POST['bol4_aciklama'],
                    'yetenekler_aciklama' => $_POST['yetenekler_aciklama'],
                    'yet1' => $_POST['yet1'],
                    'yet2' => $_POST['yet2'],
                    'yet3' => $_POST['yet3'],
                    'yet4' => $_POST['yet4'],
                    'yet5' => $_POST['yet5'],
                    'yet6' => $_POST['yet6']
                    
                ));
                
                if ($update) {
                    header("Location: ../hakkimda-ayar.php?durum=ok2");
                }
                else {
                    header("Location: ../hakkimda-ayar.php?durum=no2");
                
                }
                }



                //Arayüz sosyal medya linklerini güncelleme

                if (isset($_POST['medyaayarkaydet'])) {
                    $ayarkaydet= $db -> prepare("UPDATE sosyal_medya SET
                    instagram=:instagram,
                    facebook=:facebook,
                    twitter=:twitter,
                    youtube=:youtube,
                    linkedin=:linkedin
                    WHERE sosyal_id=0");
        
                    $update=$ayarkaydet -> execute(array(
                    'instagram' => $_POST['instagram'],
                    'facebook' => $_POST['facebook'],
                    'twitter' => $_POST['twitter'],
                    'youtube' => $_POST['youtube'],
                    'linkedin' => $_POST['linkedin']
        
                    ));
        
                    if ($update) 
                        header("Location: ../medya-ayar.php?durum=ok");
                    else
                        header("Location: ../medya-ayar.php?durum=no");
                }



                
                
                if (isset($_POST['mailgonder'])) {
                    $iletisim_isim=htmlspecialchars($_POST['iletisim_isim']);
                    $iletisim_mail=htmlspecialchars($_POST['iletisim_mail']);
                    $iletisim_baslik=htmlspecialchars($_POST['iletisim_baslik']);
                    $iletisim_mesaj=htmlspecialchars($_POST['iletisim_mesaj']);
                    $ip = $_SERVER["REMOTE_ADDR"];
                

                    $mail= $db -> prepare("INSERT INTO iletisim SET
                    iletisim_isim=:iletisim_isim,
                    iletisim_mail=:iletisim_mail,
                    iletisim_baslik=:iletisim_baslik,
                    iletisim_mesaj=:iletisim_mesaj,
                    iletisim_ip=:iletisim_ip
                    ");
                    $insert=$mail->execute(array(
                        'iletisim_isim' => $iletisim_isim,
                        'iletisim_mail' => $iletisim_mail,
                        'iletisim_baslik' => $iletisim_baslik,
                        'iletisim_mesaj' => $iletisim_mesaj,
                        'iletisim_ip' => $ip
                    ));
                
                    if ($insert) {
                        header("Location: ../../index.php?durum=basarili#contact");
                    }
                    else{
                        header("Location: ../../index.php?durum=basarisiz#contact");
                    }
                }
               
                
                //mail silme

                if ($_GET['mailsil']=='ok'){
                    $sil=$db ->prepare("DELETE from iletisim WHERE iletisim_id=:id");
                    $kontrol=$sil -> execute(array(
                        'id'=> $_GET['iletisim_id']
                    ));
        
                    if($kontrol)
                        header("Location:../mailler.php?durum=ok");
                    else
                        header("Location:../mailler.php?durum=no");
                }



                //mail okundu işaretleme
                if (isset($_POST['okunduisaretle'])) {
                    $id=$_POST['iletisim_id'];

                    $ayarkaydet= $db -> prepare("UPDATE iletisim SET
                    iletisim_durum=:iletisim_durum
                    WHERE iletisim_id=$id");
        
                    $update=$ayarkaydet -> execute(array(
                    'iletisim_durum' => 1
                    ));
        
                    if ($update) 
                        header("Location:../mailler.php");
                    else
                        header("Location:../mailler.php");
                }


?>