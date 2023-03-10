-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 10 Mar 2023, 23:21:42
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `myresume`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda_ayar`
--

CREATE TABLE `hakkimda_ayar` (
  `hakkimda_id` int(11) NOT NULL,
  `type_veri` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_ana_aciklama` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_pp` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_k_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_kucuk_aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_dogum_gunu` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_website` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_adres` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_yas` int(100) NOT NULL,
  `hakkimda_derece` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_freelance` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_metin` varchar(2000) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `yaptiklar_aciklama` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `bol1_deger` int(100) NOT NULL,
  `bol1_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `bol2_deger` int(100) NOT NULL,
  `bol2_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `bol3_deger` int(100) NOT NULL,
  `bol3_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `bol4_deger` int(100) NOT NULL,
  `bol4_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `yetenekler_aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `yet1` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `yet2` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `yet3` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `yet4` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `yet5` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `yet6` varchar(3) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimda_ayar`
--

INSERT INTO `hakkimda_ayar` (`hakkimda_id`, `type_veri`, `hakkimda_ana_aciklama`, `hakkimda_pp`, `hakkimda_k_baslik`, `hakkimda_kucuk_aciklama`, `hakkimda_dogum_gunu`, `hakkimda_website`, `hakkimda_tel`, `hakkimda_adres`, `hakkimda_yas`, `hakkimda_derece`, `hakkimda_mail`, `hakkimda_freelance`, `hakkimda_metin`, `yaptiklar_aciklama`, `bol1_deger`, `bol1_aciklama`, `bol2_deger`, `bol2_aciklama`, `bol3_deger`, `bol3_aciklama`, `bol4_deger`, `bol4_aciklama`, `yetenekler_aciklama`, `yet1`, `yet2`, `yet3`, `yet4`, `yet5`, `yet6`) VALUES
(1, 'Web Tasarımcısıyım, Web Geliştiricisiyim, Analiz Uzmanıyım', '<p><i><strong>Kendi hakkımda bilgilerim, projelerimi portfolyolarım ve daha bir çok bilgiyi içeren siteme hoş geldiniz. Aşağı indikçe ya da menüden istediğiniz yere giderek benim hakkımda tüm bilgilere erişebilirsiniz… Tekrardan Hoş Geldiniz…</strong></i></p>', 'https://via.placeholder.com/350x450', 'UI/UX Designer & Web Developer', 'Gündelik hayatta zevkine site kodluyorum. Ayrıca size ait sitenin verimlilik analizlerini yapıyorum', '01.01.2000', 'xxxxx', 'Şimdilik Kullanılabilir Değil', 'Manisa, Türkiye', 20, 'Junior', 'xxxxx', 'Şimdilik Kullanılabilir Değil', '<p><i><strong>Detaylar çok yakında…</strong></i></p>', '<p><i><strong>Bu zamana kadar yaptığım hizmetler, projeler vb işler rakamsal olarak aşağıda gösterilmiştir…</strong></i></p>', 22, 'Hizmetten Memnun Müşteriler', 33, 'Proje <b>(Açılabilir link en kısa sürede eklenecektir)</b>', 138, 'Saatlik Destek', 216, 'Hata Çözümleri', '<p>Bazı yazılım dillerindeki seviyelerim ektedir</p>', '99', '70', '20', '80', '60', '55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_isim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mesaj` varchar(2000) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_ip` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_durum` int(1) NOT NULL DEFAULT '0',
  `iletisim_kayit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `admin_id` int(11) NOT NULL,
  `admin_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_soyadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_kad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_resim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_yetki` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`admin_id`, `admin_adi`, `admin_soyadi`, `admin_mail`, `admin_kad`, `admin_sifre`, `admin_zaman`, `admin_resim`, `admin_yetki`, `admin_durum`) VALUES
(1, 'Tunahan', 'Hilmi', 'baglar4554@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2022-10-22 23:40:40', '../assets/img/screen-0.jpg', '5', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site_ayar`
--

CREATE TABLE `site_ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_favicon` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_linkedin` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtp_host` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtp_user` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtp_password` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtp_port` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `site_ayar`
--

INSERT INTO `site_ayar` (`ayar_id`, `ayar_logo`, `ayar_favicon`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_mail`, `ayar_adres`, `ayar_linkedin`, `ayar_twitter`, `ayar_instagram`, `ayar_youtube`, `ayar_smtp_host`, `ayar_smtp_user`, `ayar_smtp_password`, `ayar_smtp_port`, `ayar_bakim`) VALUES
(0, '', '../assets/img/favicon.png', 'THB / Admin Panel', 'THB CV sitesi', 'THB, Gleech, Tuna, Tunahan Hilmi, Gleech CVV, THB kimdir, Tunahan Hilmi Yazılım', 'Tunahan, Tuna, Gleech', 'Şu anda Kullanılabilir Değil', 'baglar4554@gmail.com', 'Manisa/Türkiye', 'linkedin.com', 'twitter.com/t_hilmii', 'instagram.com/t.hilmii', 'youtube.com', '537', 'tuna', '12345', '8080', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyal_medya`
--

CREATE TABLE `sosyal_medya` (
  `sosyal_id` int(11) NOT NULL,
  `instagram` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `youtube` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `linkedin` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `spotify` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sosyal_medya`
--

INSERT INTO `sosyal_medya` (`sosyal_id`, `instagram`, `facebook`, `twitter`, `youtube`, `linkedin`, `spotify`) VALUES
(0, 't.hilmii', 'Vip.Coder1', 't_hilmii', 'UCmrwfqn9c3i-mPp0sfWJ3Dw', '', '3b34G350zY050JkSo3DkT1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hakkimda_ayar`
--
ALTER TABLE `hakkimda_ayar`
  ADD PRIMARY KEY (`hakkimda_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `site_ayar`
--
ALTER TABLE `site_ayar`
  ADD PRIMARY KEY (`ayar_id`),
  ADD UNIQUE KEY `ayar_id` (`ayar_id`);

--
-- Tablo için indeksler `sosyal_medya`
--
ALTER TABLE `sosyal_medya`
  ADD PRIMARY KEY (`sosyal_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hakkimda_ayar`
--
ALTER TABLE `hakkimda_ayar`
  MODIFY `hakkimda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
