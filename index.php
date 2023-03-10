<?php include 'header.php' ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
  <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <h1>Tunahan Hilmi</h1>
    <p>Ben <span class="typed" data-typed-items="<?php echo $hakkimda_ayar_cek['type_veri'] ?>"></span></p>
    <div class="social-links">
      <a href="https://www.twitter.com/<?php echo $ayarcek3['twitter'] ?>" target="_blank" class="twitter"><i
          class="bx bxl-twitter"></i></a>
      <a href="https://www.facebook.com/<?php echo $ayarcek3['facebook'] ?>" target="_blank" class="facebook"><i
          class="bx bxl-facebook"></i></a>
      <a href="https://www.instagram.com/<?php echo $ayarcek3['instagram'] ?>" target="_blank" class="instagram"><i
          class="bx bxl-instagram"></i></a>
      <a href="https://www.linkedin.com/<?php echo $ayarcek3['linkedin'] ?>" target="_blank" class="linkedin"><i
          class="bx bxl-linkedin"></i></a>
      <a href="https://www.youtube.com/channel/<?php echo $ayarcek3['youtube'] ?>" target="_blank" class="youtube"><i
          class="bx bxl-youtube"></i></a>
      <a href="https://open.spotify.com/playlist/<?php echo $ayarcek3['spotify'] ?>" target="_blank" class="youtube"><i
          class="bx bxl-spotify"></i></a>
    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Hakkımda</h2>
        <p>
          <?php echo $hakkimda_ayar_cek['hakkimda_ana_aciklama'] ?>
        </p>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <img style="width:380px; max-height:550px; object-fit:cover; border-radius:16px"
            src="<?php echo $hakkimda_ayar_cek['hakkimda_pp'] ?>" class="img-fluid" alt="Tunahan Fotoğraf">
        </div>

        <style>
          @media screen and (max-width: 600px) {
            .img-fluid {
              width: 100%;
              max-height: auto;
            }
          }
        </style>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3>
            <?php echo $hakkimda_ayar_cek['hakkimda_k_baslik'] ?>
          </h3>
          <p class="fst-italic">
            <?php echo $hakkimda_ayar_cek['hakkimda_kucuk_aciklama'] ?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Okul:</strong> <span>
                    <?php echo $hakkimda_ayar_cek['hakkimda_dogum_gunu'] ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>
                    <?php echo $hakkimda_ayar_cek['hakkimda_website'] ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Telefon:</strong> <span>
                    <?php echo $hakkimda_ayar_cek['hakkimda_tel'] ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Şehir:</strong> <span>
                    <?php echo $hakkimda_ayar_cek['hakkimda_adres'] ?>
                  </span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Yaş:</strong> <span>
                    <?php echo $hakkimda_ayar_cek['hakkimda_yas'] ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Derece:</strong> <span>
                    <?php echo $hakkimda_ayar_cek['hakkimda_derece'] ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Mail:</strong> <span>
                    <?php echo $hakkimda_ayar_cek['hakkimda_mail'] ?>
                  </span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>
                    <?php echo $hakkimda_ayar_cek['hakkimda_freelance'] ?>
                  </span></li>
              </ul>
            </div>
          </div>
          <p>
            <?php echo $hakkimda_ayar_cek['hakkimda_metin'] ?>
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Facts Section ======= -->
  <section id="facts" class="facts">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Yaptıklarım</h2>
        <p>
          <?php echo $hakkimda_ayar_cek['yaptiklar_aciklama'] ?>
        </p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $hakkimda_ayar_cek['bol1_deger'] ?>"
              data-purecounter-duration="1" class="purecounter"></span>
            <p>
              <?php echo $hakkimda_ayar_cek['bol1_aciklama'] ?>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $hakkimda_ayar_cek['bol2_deger'] ?>"
              data-purecounter-duration="1" class="purecounter"></span>
            <p>
              <?php echo $hakkimda_ayar_cek['bol2_aciklama'] ?>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $hakkimda_ayar_cek['bol3_deger'] ?>"
              data-purecounter-duration="1" class="purecounter"></span>
            <p>
              <?php echo $hakkimda_ayar_cek['bol3_aciklama'] ?>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-bug"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $hakkimda_ayar_cek['bol4_deger'] ?>"
              data-purecounter-duration="1" class="purecounter"></span>
            <p>
              <?php echo $hakkimda_ayar_cek['bol4_aciklama'] ?>
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Facts Section -->

  <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Yetenekler</h2>
        <p>
          <?php echo $hakkimda_ayar_cek['yetenekler_aciklama'] ?>
        </p>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">
                <?php echo $hakkimda_ayar_cek['yet1'] ?>%
              </i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $hakkimda_ayar_cek['yet1'] ?>"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">
                <?php echo $hakkimda_ayar_cek['yet2'] ?>%
              </i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $hakkimda_ayar_cek['yet2'] ?>"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">
                <?php echo $hakkimda_ayar_cek['yet3'] ?>%
              </i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $hakkimda_ayar_cek['yet3'] ?>"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">
                <?php echo $hakkimda_ayar_cek['yet4'] ?>%
              </i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $hakkimda_ayar_cek['yet4'] ?>"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">WordPress/CMS <i class="val">
                <?php echo $hakkimda_ayar_cek['yet5'] ?>%
              </i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $hakkimda_ayar_cek['yet5'] ?>"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $hakkimda_ayar_cek['yet6'] ?>"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Skills Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Öz Geçmiş</h2>
        <p>Aslında kendim ile ilgili paylaşabileceğim pek fazla bir şey yok. Zaten kendimi bildim bileli gerek
          elektronik olsun gerek bilgisayar olsun aşırı ilgim vardı. Yani sizlere sadece yazılıma ilk girişim ve beni bu
          yolculuğa sürükleyen olay ve devam olaylarını anlatabilirim...</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Her Şeyin Başlangıcı</h3>
          <div class="resume-item pb-0">
            <h4>Yazılıma Ilk Giriş</h4>
            <p><em>Tarihi tam hatırlamasam da 7. sınıfa giderken C# ile oynadığım bir oyun için yaptığım hile
                programıyla yazılıma başladım. İlk başlarda kısa ve küçük küçük hile programıyla devam etmiştim <br><br>
                Daha sonrasında 2 arkadaşım ile tanışıp birlikte daha büyük ve kapsamlı hile programlarıyla devam ettik.
                Yaptığımız programları ücretli bir şekilde satıyorduk. Bu şekilde ilk yazılıma adımımı atmış
                bulunuyorum. Evet biliyorum pek etik bir başlangıç şekli değil :)</em></p>


          </div>

          <h3 class="resume-title"></h3>
          <div class="resume-item">
            <h4>Devam Olayı</h4>
            <h5>8. Sınıf Zamanlarıydı...</h5>
            <p><em>Her şey eski bilgisayarımın herhangi bir internet tarayıcısını açtığımda çökmesiyle başladı.</em></p>
            <p>Bu olay üzerine internette forumlardaki konuları ve YouTube'den videolara yöneldim. Yabancı bir kanal
              üzerinden verilen eğitimlerle kendi tarayıcımı yaptım.</p>
            <p>Çok eski ve aşırı düz mantıkla yapıldığı için uygulamadaki çoğu şey çalışmıyordu. Aşırı fazla hata vardı
              ama işimi görüyordu. Belirli bir süre bunu kullanmaya devam ettim. Ve yazılıma ara verdim ama içimde hala
              bir istek vardı. O zaman kendime 'Bilgisayar Mühendisi' olacağım diye söz vermiştim</p>
          </div>
          <div class="resume-item">
            <h4>Üniversiteye başlamadan önce</h4>
            <h5>2020 - 2021</h5>
            <p><em>Uzun bir aradan sonra gerçek anlamda yazılıma geri döndüm. Öncesinde ufak tefek araştırmalar ve
                uygulamalar yapmıştım</em></p>
            <p>Okulda C dilini göreceğimiz için şimdiden çalışmaya başlamıştım. Ufak tefek uygulamalar ile baya
              ilerlemiştim. <br>
              Okulda gördüğümüz derslerle bildiğim konular üzerine ekleme yaparak dahada kendimi geliştirdim. Hocamızın
              veridiği ödevler ve projeler ile çok iyi ilerleme kaydettim.
            </p>
            <p><em><b>Yaptığımız Bazı Projeler</b></em></p>
            <ul>
              <li>C üzerinden hastane kayıt otomasyonu. (Her kayıt Not defterine kayıt edilecek ve güncellenebilecek
                şeklinde ayarlandı)</li>
              <li>C ile satranca benzer eleme oyunu</li>
            </ul>
          </div>
          <div class="resume-item">
            <h4>Yıllar sonra C#'a Dönme</h4>
            <h5>2021 - Yaz</h5>
            <p><em>Aradan geçen uzun yıllar sonunda C#'a okul için geri döndüm...</em></p>
            <p>2021 yazında okulda C# göreceğiz diye çalışmalara başladım. Birkaç haftalık çalışma sonucu istediğim yere
              gelmiştim</p>
            <p>Ama içimden hiçbir şekilde bu dil üzerinde yoğunluk vermek gelmiyordu. Kısacası hala arayış
              içerisindeydim.</p>
            <p><em><b>Yaptığım projeler: </b></em></p>
            <ul>
              <li>YouTube MP3/Video indirici</li>
              <li>2 kişilik zar oyunu</li>
              <li>Veri tabanlı hastane kayıt otamasyonu</li>
              <li>Harf komutlarıyla robot hareket ettirme oyunu</li>
              <li>Gelişmiş Hesap Makinesi</li>
            </ul>
          </div>
        </div>

        <!---Sağ Bölge-->
        <div class="col-lg-6">
          <h3 class="resume-title">Kararlarımı Şekillendirme Zamanı</h3>

          <div class="resume-item">
            <h4>Web Programlamaya Giriş</h4>
            <h5>2021 - Güz</h5>
            <p><em>Kendime ait bir websitem olmasını çok istiyordum. Bu yüzden araştırmaya başladım</em></p>
            <p>Bu araştırmayla web programlamaya merak saldım. İlk etapta klasik olarak 'HTML, CSS, JS' öğrendim. Ama
              hepsi giriş seviyesinde.</p>
            <p>Web programlamayı ve ders videosu izleyerek yapamıyorum o yüzden başkalarının yaptığı projeler ile neyin
              nerede ve nasıl kullanıldığını öğrendim</p>
          </div>
          <div class="resume-item">
            <h4>Site Templateleri Yapmaya Başlama</h4>
            <p><em>Proje videoları izleyerek kendime bir iş çıkarmak istiyordum</em></p>
            <p>İlk etapta kendime basit bir profil kartı yaparak başladım. Daha sonrasında film sitesi yapmak istedim
            </p>
            <p>Yaptığım film sitesi görünüş olarak güzeldi fakat bir sıkıntısı vardı, mobile uyumlu değildi.</p>
            <p>Araştırma yaparak sitemi zar zorda olsa mobile uyumlu hale getirmiştim. Ufak tefek hataları görmezden
              geldim ve bıraktım ve gelişimime odaklandım.</p>
          </div>
          <div class="resume-item">
            <h4>PHP Giriş</h4>
            <p><em>Artık kendimi daha da geliştirdim ve php ile projeler yapmaya başladım</em></p>
            <p>Klasik olarak Udemy üzerinden aldığım derslerle birkaç proje yaptık</p>
            <p>En etkilisi ve geliştiricisi E-Ticaret Scriptiydi. Elimde hali hazırda bir e-ticaret scripti var fakat bu
              sciripti kendimce şekillendirip öyle paylaşmak istiyorum. Bu da ilerleyen zamanlarda burada paylaşacağım
              anlamına geliyor.</p>
            <p><em><b>PHP ile yaptığım birkaç proje</b></em></p>
            <ul>
              <li>Yayıncı için yaptığım çekiliş sitesi</li>
              <li>Valorantta topluluk için crosshair paylaşma sitesi</li>
              <li>Film sitem için yaptığım admin panel</li>
              <li>Admin panelli CVV sitesi</li>
              <li>Haber sitesi (Geliştirişmekte)</li>
            </ul>
            <p><em>Hala daha kendimi geliştirmeye devam ediyorum. Sırayla Laravel, Node.Js, React, Vue.Js
                öğreneceğim</em></p>
            <p><em><b>Kim bilir belki bu sitelerimi ilerleyen zamanlarda mobil uygulama üzerine dökerim. Bekleyip
                  göreceğiz... :))</b></em></p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>PORTFOLYO</h2>
        <p>Yaptığım projelerin elimde bulunduğunca fotoğraflarını yükledim. Çoğu proje bilgisayarımı formatlayınca
          gitti. Evet "GitHub kullanmıyor musun?" dediğinizi duyar gibiyim. O zaman aklımda tüm projelerimi tekte
          yüklerim diye bir düşünce vardı. Keşke olmasaydı.</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active" id="cfilter2">Hepsi</li>
            <li data-filter=".filter-app" id="cfilter2">C#</li>
            <li data-filter=".filter-card" id="cfilter">C</li>
            <li data-filter=".filter-web">WEB</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap" justify-content="center">
            <img src="assets/img/portfolio/hesapmakine-1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hesap Makinesi</h4>
              <p>C#</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/hesapmakine-1.png" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Hesap Makinesi"><i class="bx bx-plus"></i></a>
                <a disable="disabled" href="portfolio-details.php" class="portfolio-details-lightbox"
                  data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/adminpanel.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>CVV Sitesi Admin Paneli</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/adminpanel.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="CVV Sitesi admin paneli (Yapımı devam etmektedir) (Template hazır olup php ile admin panel kodlanıyor)"><i
                    class="bx bx-plus"></i></a>
                <a disable="disabled" href="portfolio-details.php" class="portfolio-details-lightbox"
                  data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/ytvideo.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>YouTube MP3 / Video İndirici</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/ytvideo.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Youtube Mp3/Video Downloader"><i class="bx bx-plus"></i></a>
                <a disable="disabled" href="portfolio-details.php" class="portfolio-details-lightbox"
                  data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/yayinci.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Yayıncı Çekiliş Dağıtım Sitesi</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/yayinci.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Sitenin genel yapımı Yusuf Öz'e aittir. Ben kullanıcı arayüzünü tamamen geliştirip değiştirdim. Şu an gördüğünüz tasarım bana aittir. Ayrıca performans geliştirmelerinin çoğunu ben yaptım"><i
                    class="bx bx-plus"></i></a>
                <a disable="disabled" href="portfolio-details.php" class="portfolio-details-lightbox"
                  data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/hesapmakine-2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Hesap Makinesi</h4>
              <p>C#</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/hesapmakine-2.png" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Hesap Makinesi 2. Görsel"><i class="bx bx-plus"></i></a>
                <a disable="disabled" href="portfolio-details.php" class="portfolio-details-lightbox"
                  data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 portfolio-item filter-card" style="display:none;" id="cproje">
          <div class="portfolio-wrap" style="background: transparent">
            <p class="">Malesef Fotoğraf Bulunamamakta</p>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/film2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Film Sitesi İletişim</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/film2.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Film Sitesi İletişim Bölümü"><i class="bx bx-plus"></i></a>
                <a disable="disabled" href="portfolio-details.php" class="portfolio-details-lightbox"
                  data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/filmsite2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Film Sitesi Anasayfa</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/filmsite2.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Film Sitesi Ana Sayfa Gösterimi"><i class="bx bx-plus"></i></a>
                <a disable="disabled" href="portfolio-details.php" class="portfolio-details-lightbox"
                  data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/robot.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Komut ile robot yönlendirme</h4>
              <p>C#</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/robot.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Komutlar ile robot yönlendirme projesi"><i class="bx bx-plus"></i></a>
                <a disable="disabled" href="portfolio-details.php" class="portfolio-details-lightbox"
                  data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!---<div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>-->

        <!---<div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>-->

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/web1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sosyal medya klon</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/web1.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Arkadaşım için yaptığım sosyal medya klon"><i class="bx bx-plus"></i></a>
                <a disable="disabled" href="portfolio-details.php" class="portfolio-details-lightbox"
                  data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/filmsite1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Film Sitesi</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/filmsite1.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Film sitesi görünüm (Her şey gözüksün diye küçültüldü)"><i class="bx bx-plus"></i></a>
                <a disable="disabled" href="portfolio-details.php" class="portfolio-details-lightbox"
                  data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>İlgi Alanları</h2>
        <p>Hobilerim Ve Yapmaktan Hoşlandığım Şeyler</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                  d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                </path>
              </svg>
              <i class="bx bxl-dribbble"></i>
            </div>
            <h4><a href="#services">Spor</a></h4>
            <p>Genelde futbol üzerine ilgim var. Fakat lisede yaşadığım bir sakatlıktan dolayı sadece güzel maçları
              takip ediyorum. Tuttuğum takım Fenerbahçe.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange ">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                  d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                </path>
              </svg>
              <i class="bx bx-file"></i>
            </div>
            <h4><a href="#services">Kitap Okumak</a></h4>
            <p>Kitap okumaktan bayağı zevk alıyorum. Polisiye kitaplarından çok haz alıyorum. Seri olarakta John
              Verdonun "Aklından bir sayı tut" serisini önerebilirim. </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-pink">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                  d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                </path>
              </svg>
              <i class="bx bx-tachometer"></i>
            </div>
            <h4><a href="#services">Oyun Oynamak</a></h4>
            <p>Oyun oynamayı küçüklüğümden beri seviyorum. Fps oyunlarında ileri seviyede olduğumu söyleyebilirim.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-yellow">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                  d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                </path>
              </svg>
              <i class="bx bx-layer"></i>
            </div>
            <h4><a href="#services">Yazılım</a></h4>
            <p>Yazılıma ilgim fazla. Sürekli sabah akşam kod yazmam ne zaman canım isterse o zaman hiç durmadan
              delilercesine kod yazarım</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                  d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                </path>
              </svg>
              <i class="bx bx-slideshow"></i>
            </div>
            <h4><a href="#services">Film İzlemek</a></h4>
            <p>Film ve dizi izlemeyi çok severim. Özellikle aksiyon, macera, bilim kurgu kategorileri çok ilglimi
              çekiyor. He birde anime izliyorum.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-teal">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                  d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                </path>
              </svg>
              <i class="bx bx-arch"></i>
            </div>
            <h4><a href="#services">Gezmek / Seyehat Etmek</a></h4>
            <p>Tek başıma gezmeyi hiç sevmem kendimi yabancı gibi hissederim. Ama yanımda yakın arkadaşlarım varsa
              dünyanın her yerine giderim :)</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Özlü Sözler</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/John-Hegarty.jpg" class="testimonial-img" alt="">
              <h3>John Hegarty</h3>
              <h4>Ceo &amp; Kurucu</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Teknoloji bir fikir değil, fikri elde etme yoludur. O yüzden teknolojiye aşırı hayranlık duymamalı,
                ondan korkmamalısınız
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/nazan.jpg" style="obejct-fit:cover" class="testimonial-img" alt="">
              <h3>Nazan Bekiroğlu</h3>
              <h4>Yazar</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Tabiat son sözü söylemeye karar verdiğinde, teknoloji sükut eder
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/Steve.jpg" class="testimonial-img" alt="">
              <h3>Steve Jobs</h3>
              <h4>Apple Kurucu Ortak &amp; Ceo</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Kişisel bir bilgisayar, zekamızın bir parçası olarak bize destek olan araçtır
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/elonmusk.jpg" class="testimonial-img" alt="">
              <h3>Elon Musk</h3>
              <h4>Ceo</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Başarısızlık burada bir seçenektir. Eğer işler başarısız olmazsa, yeterince yenilik yapmıyorsunuz
                demektir.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>İLETİŞİME GEÇ</h2>
      </div>

      <div class="row mt-1">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Konum:</h4>
              <p>
                <?php echo $hakkimda_ayar_cek['hakkimda_adres'] ?>
              </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>
                <?php echo $hakkimda_ayar_cek['hakkimda_mail'] ?>
              </p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Telefon:</h4>
              <p>
                <?php echo $hakkimda_ayar_cek['hakkimda_tel'] ?>
              </p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <div class="text-center">



            <div class="alert alert-success onay" role="alert" style="display:none">
              Mesajınız başarıyla gönderildi. Teşekkür ederiz!
            </div>
            <div class="alert alert-danger hata" role="alert" style="display:none">
              Mesajınız Gönderilemedi. Lütfen tekrar deneyiniz!
            </div>




          </div>
          <form class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="iletisim_isim" class="form-control" placeholder="İsim Soyisim" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="iletisim_mail" placeholder="Mail Adresiniz" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="iletisim_baslik" placeholder="Konu" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="iletisim_mesaj" rows="5" placeholder="Mesajınız" required></textarea>
            </div>
            <div class="text-center"><button name="mailgonder" class="mailgonder" type="submit">Mesaj Gönder</button>
            </div>
          </form>
          <br>

          <script>

            $(document).ready(funtion(){


              $(".mailgonder").click(function () {


                var iletisim_isim = $("input[name=iletisim_isim]").val();
                var iletisim_mail = $("input[name=iletisim_mail]").val();
                var iletisim_baslik = $("input[name=iletisim_baslik]").val();
                var iletisim_mesaj = $("input[name=iletisim_mesaj]").val();

                if (iletisim_isim !== "" && iletisim_mail !== "" && iletisim_baslik !== "" && iletisim_mesaj !== "") {

                  $(".hata").fadeIn(300);

                }
                else {

                  $(".hata").fadeIn(300);
                }
              })
            })


          </script>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->



<?php include 'footer.php' ?>