-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2022 at 05:18 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camat`
--

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `youtub` varchar(255) DEFAULT NULL,
  `isi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `id_user`, `foto`, `foto1`, `foto2`, `youtub`, `isi`, `created_at`, `updated_at`) VALUES
(2, NULL, 'app/foto/-1671249591-NERnI.jpg', 'app/foto1/-1671249592-ce5BE.jpg', NULL, 'https://www.youtube.com/embed/Vfu2vyEiOig', 'Dengan mengucapkan puji syukur kehadirat Allah SWT atas segala rahmat dan hidayahnya, Kecamatan Delta Pawan Kota Ketapang dapat menghadirkan website baru pada kecamatan delta pawan kabupaten ketapang. Website ini mempublikasikan informasi dan dokumentasi tentang pelayanan publik, pemerintahan dan pembangunan di wilayah Kecamatan Delta  Pawan. Tujuan tersebut sebagai bentuk pelayanan kepada masyarakat melalui keterbukaan informasi publik. Sebagai media informasi dan publikasi yang dapat diakses melalui internet, berbagai informasi dan pelayanan publik yang dibutuhkan masyarakat di wilayah Kecamatan Delta Pawan pada khususnya dan Pemerintah Kota Ketapang pada umumnya sehingga merupakan solusi yang efektif dan efisien tanpa terbatas pada waktu dan tempat.\r\n\r\nHarapan kami semua stakeholder dapat terus berperan aktif dalam mengawal pelaksanaan, pengelolaan dan penyelenggaran pemerintahan. Demikian kami ucapkan terima kasih dan penghargaan setinggi-tingginya pada semua pihak yang turut serta berkontribusi dalam pengembangan website ini.', '2022-12-17 03:59:52', '2022-12-17 05:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `nama_pembuat` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `id_user`, `tanggal`, `nama_pembuat`, `judul`, `isi`, `foto`, `foto1`, `foto2`, `created_at`, `updated_at`) VALUES
(45, NULL, '30-Novemver-20222', 'admin_kecamatan', 'Pria Delta Pawan Diamankan Polisi Terjerat Kasus Narkoba', 'Pria tersebut berinisial SAM (51) diamankan dirumahnya di Kecamatan Delta Pawan Kabupaten Ketapang, Senin 12 Desember 2022 sekira Pukul 22.30 Wib.\r\n\r\nKapolres Ketapang AKBP Yani Permana, melalui Kapolsek Delta Pawan IPTU Chandra Wirawan menyampaikan bahwa diamankannya pelaku tersebut bermula saat petugas menerima informasi dari warga terkait adanya seorang warga yang sering menggunakan sabu.\r\n\r\n“ Tersangka SAM ini kami amankan di rumahnya yang beralamat di Kecamatan Delta Pawan pada senin kemaren. Dimana kami mendapatkan informasi bahwa pelaku ini sering menggunakan sabu dirumahnya. Kami langsung melakukan penyelidikan dan selanjutnya melakukan penggeledahan rumah dan badan pelaku yang disaksikan perangkat RT setempat,” ujar Chandra.\r\n\r\n\r\n\r\nArtikel ini telah tayang di Tribunkalteng.com dengan judul Pria Delta Pawan Ketapang Diamankan di Rumah, Petugas Sita Plastik Berisi Sabu di Saku Celana, https://kalteng.tribunnews.com/2022/12/15/pria-delta-pawan-ketapang-diamankan-di-rumah-petugas-sita-plastik-berisi-sabu-di-saku-celana.', 'app/foto/-1671196604-EEEsO.jpg', NULL, NULL, '2022-12-16 13:16:45', '2022-12-17 04:18:25'),
(46, NULL, '30-Novemver-20222', 'admin_kecamatan', 'Pria Delta Pawan Diamankan Polisi Terjerat Kasus Narkoba', 'Pria tersebut berinisial SAM (51) diamankan dirumahnya di Kecamatan Delta Pawan Kabupaten Ketapang, Senin 12 Desember 2022 sekira Pukul 22.30 Wib.\r\n\r\nKapolres Ketapang AKBP Yani Permana, melalui Kapolsek Delta Pawan IPTU Chandra Wirawan menyampaikan bahwa diamankannya pelaku tersebut bermula saat petugas menerima informasi dari warga terkait adanya seorang warga yang sering menggunakan sabu.\r\n\r\n“ Tersangka SAM ini kami amankan di rumahnya yang beralamat di Kecamatan Delta Pawan pada senin kemaren. Dimana kami mendapatkan informasi bahwa pelaku ini sering menggunakan sabu dirumahnya. Kami langsung melakukan penyelidikan dan selanjutnya melakukan penggeledahan rumah dan badan pelaku yang disaksikan perangkat RT setempat,” ujar Chandra.\r\n\r\n\r\n\r\nArtikel ini telah tayang di Tribunkalteng.com dengan judul Pria Delta Pawan Ketapang Diamankan di Rumah, Petugas Sita Plastik Berisi Sabu di Saku Celana, https://kalteng.tribunnews.com/2022/12/15/pria-delta-pawan-ketapang-diamankan-di-rumah-petugas-sita-plastik-berisi-sabu-di-saku-celana.', 'app/foto/-1671196638-XitfV.jpg', NULL, NULL, '2022-12-16 13:17:19', '2022-12-17 04:18:18'),
(47, NULL, '30-Novemver-20222', 'admin_kecamatan', 'Pria Delta Pawan Diamankan Polisi Terjerat Kasus Narkoba', 'Pria tersebut berinisial SAM (51) diamankan dirumahnya di Kecamatan Delta Pawan Kabupaten Ketapang, Senin 12 Desember 2022 sekira Pukul 22.30 Wib.\r\n\r\nKapolres Ketapang AKBP Yani Permana, melalui Kapolsek Delta Pawan IPTU Chandra Wirawan menyampaikan bahwa diamankannya pelaku tersebut bermula saat petugas menerima informasi dari warga terkait adanya seorang warga yang sering menggunakan sabu.\r\n\r\n“ Tersangka SAM ini kami amankan di rumahnya yang beralamat di Kecamatan Delta Pawan pada senin kemaren. Dimana kami mendapatkan informasi bahwa pelaku ini sering menggunakan sabu dirumahnya. Kami langsung melakukan penyelidikan dan selanjutnya melakukan penggeledahan rumah dan badan pelaku yang disaksikan perangkat RT setempat,” ujar Chandra.\r\n\r\n\r\n\r\nArtikel ini telah tayang di Tribunkalteng.com dengan judul Pria Delta Pawan Ketapang Diamankan di Rumah, Petugas Sita Plastik Berisi Sabu di Saku Celana, https://kalteng.tribunnews.com/2022/12/15/pria-delta-pawan-ketapang-diamankan-di-rumah-petugas-sita-plastik-berisi-sabu-di-saku-celana.', 'app/foto/-1671196680-9hSVQ.jpg', NULL, NULL, '2022-12-16 13:18:00', '2022-12-17 04:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `datakecamatan`
--

CREATE TABLE `datakecamatan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `level` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datakecamatan`
--

INSERT INTO `datakecamatan` (`id`, `id_user`, `file`, `judul`, `deskripsi`, `level`, `created_at`, `updated_at`) VALUES
(3, NULL, 'app/file/-1670265477-lQYlI.pdf', 'Rencana Kerja Tahunan', 'Rencana kinerja tahunan (RKT) merupakan penjabaran dari sasaran dan program yang telah ditetapkan dalam Renstra, dan akan dilaksanakan oleh satuan organisasi/kerja melalui berbagai kegiatan tahunan.\"', 'Rkt', '2022-12-05 18:37:58', '2022-12-15 19:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `kebudayaan`
--

CREATE TABLE `kebudayaan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `nama_pembuat` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebudayaan`
--

INSERT INTO `kebudayaan` (`id`, `id_user`, `tanggal`, `nama_pembuat`, `judul`, `isi`, `foto`, `foto1`, `foto2`, `created_at`, `updated_at`) VALUES
(2, NULL, '30-oktober-2023', 'admin_kecamatan', 'Digitalisasi Syair Gulung, Upaya Mempertahankan Tradisi Lisan Ketapang', 'Ketapang (Suara Ketapang) – Kelompok Keilmuan Literasi, Media, dan Budaya FSRD ITB melakukan Temu Penyair dengan kegiatan Merekam dan mendokumentasikan para ahli dalam bersyair syair gulung di Ketapang, Kalimantan Barat. \r\nLantunan irama yang merdu membawa nilai-nilai budaya dalam setiap liriknya. Seperti itulah syair gulung terdengar. Cerita yang saling berkesinambungan disampaikan melalui keindahan suara, mengandung nilai kultural Ketapang. Setiap irama dan perubahan intonasi merepresentasikan nilai yang berbeda pula. \r\n\r\nSyair gulung sebagai tradisi di Ketapang, Kalimantan Barat, mulai tenggelam di tengah-tengah pesatnya perkembangan teknologi dan beragam budaya populer. Nilai-nilai luhur yang disampaikan melalui cerita dalam syair mulai luntur.', 'app/foto/-1671252457-ezE5l.jpg', 'app/foto1/-1671252457-Tkc7n.jpg', NULL, '2022-12-17 04:47:37', '2022-12-17 04:47:37'),
(3, NULL, '30-oktober-2022', 'admin_kecamatan', 'Digitalisasi Syair Gulung, Upaya Mempertahankan Tradisi Lisan Ketapang', 'Ketapang (Suara Ketapang) – Kelompok Keilmuan Literasi, Media, dan Budaya FSRD ITB melakukan Temu Penyair dengan kegiatan Merekam dan mendokumentasikan para ahli dalam bersyair syair gulung di Ketapang, Kalimantan Barat. \r\nLantunan irama yang merdu membawa nilai-nilai budaya dalam setiap liriknya. Seperti itulah syair gulung terdengar. Cerita yang saling berkesinambungan disampaikan melalui keindahan suara, mengandung nilai kultural Ketapang. Setiap irama dan perubahan intonasi merepresentasikan nilai yang berbeda pula. \r\n\r\nSyair gulung sebagai tradisi di Ketapang, Kalimantan Barat, mulai tenggelam di tengah-tengah pesatnya perkembangan teknologi dan beragam budaya populer. Nilai-nilai luhur yang disampaikan melalui cerita dalam syair mulai luntur.', 'app/foto/-1671252489-mBhzi.jpg', 'app/foto1/-1671252489-RjHtz.jpg', NULL, '2022-12-17 04:48:09', '2022-12-17 04:48:09'),
(4, NULL, '29/11/2022', 'admin_kecamatan', 'Digitalisasi Syair Gulung, Upaya Mempertahankan Tradisi Lisan Ketapang', 'Ketapang (Suara Ketapang) – Kelompok Keilmuan Literasi, Media, dan Budaya FSRD ITB melakukan Temu Penyair dengan kegiatan Merekam dan mendokumentasikan para ahli dalam bersyair syair gulung di Ketapang, Kalimantan Barat. \r\nLantunan irama yang merdu membawa nilai-nilai budaya dalam setiap liriknya. Seperti itulah syair gulung terdengar. Cerita yang saling berkesinambungan disampaikan melalui keindahan suara, mengandung nilai kultural Ketapang. Setiap irama dan perubahan intonasi merepresentasikan nilai yang berbeda pula. \r\n\r\nSyair gulung sebagai tradisi di Ketapang, Kalimantan Barat, mulai tenggelam di tengah-tengah pesatnya perkembangan teknologi dan beragam budaya populer. Nilai-nilai luhur yang disampaikan melalui cerita dalam syair mulai luntur.', 'app/foto/-1671252515-YavDl.jpg', 'app/foto1/-1671252515-ZqBOY.jpg', NULL, '2022-12-17 04:48:35', '2022-12-17 04:48:35'),
(5, NULL, '30-oktober-2022', 'admin_kecamatan', 'Digitalisasi Syair Gulung, Upaya Mempertahankan Tradisi Lisan Ketapang', 'Ketapang (Suara Ketapang) – Kelompok Keilmuan Literasi, Media, dan Budaya FSRD ITB melakukan Temu Penyair dengan kegiatan Merekam dan mendokumentasikan para ahli dalam bersyair syair gulung di Ketapang, Kalimantan Barat. \r\nLantunan irama yang merdu membawa nilai-nilai budaya dalam setiap liriknya. Seperti itulah syair gulung terdengar. Cerita yang saling berkesinambungan disampaikan melalui keindahan suara, mengandung nilai kultural Ketapang. Setiap irama dan perubahan intonasi merepresentasikan nilai yang berbeda pula. \r\n\r\nSyair gulung sebagai tradisi di Ketapang, Kalimantan Barat, mulai tenggelam di tengah-tengah pesatnya perkembangan teknologi dan beragam budaya populer. Nilai-nilai luhur yang disampaikan melalui cerita dalam syair mulai luntur.', 'app/foto/-1671252666-ojuA8.jpg', 'app/foto1/-1671252666-vHkj5.jpg', NULL, '2022-12-17 04:51:06', '2022-12-17 04:51:06'),
(6, NULL, '28-oktober-2022', 'admin_kecamatan', 'Digitalisasi Syair Gulung, Upaya Mempertahankan Tradisi Lisan Ketapang', 'Ketapang (Suara Ketapang) – Kelompok Keilmuan Literasi, Media, dan Budaya FSRD ITB melakukan Temu Penyair dengan kegiatan Merekam dan mendokumentasikan para ahli dalam bersyair syair gulung di Ketapang, Kalimantan Barat. \r\nLantunan irama yang merdu membawa nilai-nilai budaya dalam setiap liriknya. Seperti itulah syair gulung terdengar. Cerita yang saling berkesinambungan disampaikan melalui keindahan suara, mengandung nilai kultural Ketapang. Setiap irama dan perubahan intonasi merepresentasikan nilai yang berbeda pula. \r\n\r\nSyair gulung sebagai tradisi di Ketapang, Kalimantan Barat, mulai tenggelam di tengah-tengah pesatnya perkembangan teknologi dan beragam budaya populer. Nilai-nilai luhur yang disampaikan melalui cerita dalam syair mulai luntur.', 'app/foto/-1671252691-AqVQd.jpg', 'app/foto1/-1671252691-BD6XC.jpg', NULL, '2022-12-17 04:51:31', '2022-12-17 04:51:31'),
(7, NULL, '30-oktober-2022', 'admin_kecamatan', 'Digitalisasi Syair Gulung, Upaya Mempertahankan Tradisi Lisan Ketapang', 'Ketapang (Suara Ketapang) – Kelompok Keilmuan Literasi, Media, dan Budaya FSRD ITB melakukan Temu Penyair dengan kegiatan Merekam dan mendokumentasikan para ahli dalam bersyair syair gulung di Ketapang, Kalimantan Barat. \r\nLantunan irama yang merdu membawa nilai-nilai budaya dalam setiap liriknya. Seperti itulah syair gulung terdengar. Cerita yang saling berkesinambungan disampaikan melalui keindahan suara, mengandung nilai kultural Ketapang. Setiap irama dan perubahan intonasi merepresentasikan nilai yang berbeda pula. \r\n\r\nSyair gulung sebagai tradisi di Ketapang, Kalimantan Barat, mulai tenggelam di tengah-tengah pesatnya perkembangan teknologi dan beragam budaya populer. Nilai-nilai luhur yang disampaikan melalui cerita dalam syair mulai luntur.', 'app/foto/-1671252713-9kAf4.jpg', 'app/foto1/-1671252713-YIJ9P.jpg', NULL, '2022-12-17 04:51:53', '2022-12-17 04:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `nama_pembuat` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `id_user`, `tahun`, `tanggal`, `nama_pembuat`, `judul`, `foto`, `foto1`, `foto2`, `deskripsi`, `created_at`, `updated_at`) VALUES
(20, NULL, '2020', '30-Novemver-20222', 'admin_kecamatan', 'Camat Delta PawanTarik Proporsal Sumbangan Kegiatan Vaksin Covid-19', 'app/foto/-1671196886-gFjnG.jpg', 'app/foto1/-1671196886-cSbZS.jpg', 'app/foto2/-1671196886-ZLfhJ.jpg', 'KETAPANG, JAPOS.CO – Mendukung program pemerintah pusat, Camat Delta Pawan Kabupaten Ketapang Kalimantan Barat bersama jajarannya akan melaksanakan Vaksinasi Covid-19 pada 22 November 2021, bekerja sama dengan Puskesmas yang ada.\r\n\r\nMenyukseskan kegiatan tersebut pihak kecamatan berencana melibatkan masyarakat/pihak ke tiga, dimana bantuan pihak ketiga (dana), akan digunakan sebagai penunjang kegiatan vaksin, seperti biaya sewa tenda, biaya makan, dorpres dan lain sebagainya.\r\n\r\nHanya saja, sejak program tersebut dikemas dalam produk proporsal bantuan per 1 November 2021 lalu, pihak ke tiga belum memberikan tanggapan. Dana partisipasi yang diharapkan belum satupun masuk ke kas panitia.\r\n\r\nYang celakanya lagi, proporsal yang dibagikan ke sejumlah pihak seakan disambut dingin. Lembaran proporsal di upload ke media Social (akun facebook) salah seorang warga Ketapang sehingga tak terelakan, pihak kecamatan mendapat nyinyiran dan sindiran negatif para netizen.\r\n\r\nDalam hal ini, Ketua LSM Peduli Kayong Suryadi juga ikut berkomentar dan menyayangkan prilaku kecamatan melaksanakan vaksinasi covid-19 meminta sumbangan kepada masyarakat. Menurut dia, hal itu tidak pantas dilakukan meski alasan sebatas biaya penunjang kegiatan bukan untuk biaya vaksin.\r\n\r\nPersoalan covid ini dikatakan, masyarakat sudah cukup menderita dan jangan dibebankan dengan hal serupa. Presiden RI menegaskan, semua biaya terkait vaksin ditanggung oleh pemerintah.\r\n\r\n“Jangan jadi alasan memberi bingkisan kepada mereka harus membuat proporsal bantuan. Jika di pusat Menteri Kabinet terlibat bisnis PCR, sedangkan di bawah/di daerah sibuk mencari sumbangan. Itu kurang etis,” kata Suryadi pada Japos.co, Senin, (8/11/21).\r\n\r\nMeski demikian dia bersyukur, kegiatan ini belum dilaksanakan. “Ya syukurlah vaksinasi belum terlaksana dan masyarakat belum memberikan sumbangan. Untuk itu saya berharap pihak kecamatan Delta Pawan  mempertimbangkan kembali melibatkan pihak ketiga,” ucap Ketua LSM Peduli Kayong ini.\r\n\r\nSementara Camat Delta Pawan Syarif Mahadi, S.AP, ME membenarkan instansi yang dipimpinnya melalui panitia yang dibentuk akan melaksanakan vaksinasi massal Covid-19 dan akan melibatkan pihak lain untuk mendapatkan bantuan dana kegiatan vaksinasi.\r\n\r\nBantuan tersebut dijelaskan Mahadi bersifat sukarela dan tidak ada paksaan. Dana yang terkumpul nantinya direncanakan sebagi biaya penunjang kegiatan yang dikelola oleh panitia pelaksana.\r\n\r\n“Kita akan bekerjasama dengan Puskesmas dan Vaksin itu gratis alias tidak dipungut bayaran,” kata Mahadi di ruang kerjanya, Kamis (8/11) seraya menegaskan bahwa bantuan sukarela yang dicarinya itu sebatas dana penunjang kegiatan.\r\n\r\nMenjawab pertaanyaan watawan, bahwa gagasan melibatkan pihak ketiga adalah gagasan dirinya yang diputuskan dalam rapat. Tidak ada acuan khusus yang menjelaskan boleh atau tidak mencari bantuan partispasi dari pihak ke tiga. Dan diakuinya juga bahwa pembuatan proporsal tersebut belum dilakukan koordinasi dengan atasan seperti Bupati.\r\n\r\nLangkah yang diambil mengingat Kecamatan Delta Pawan prosentase  masyarakat yang di vaksin masih kecil dari target yang diharapkan.\r\n\r\nMahadi mencoba mencari terobosan agar masyarakat lebih termotivasi untuk di vaksin, seperti dengan cara memberi bingkisan/dorpres.\r\n\r\nDiakuinya, dari dua puluhan provorsal yang dilayangkan ke pihak ketiga baik itu katagori perusahaan maupun perorangan, hingga saat ini belum ada jawaban. .\r\n\r\nDia beranggapan, jika langkah yang mereka ambil salah dan melahirkan tanggapan negative berbagai pihak, maka proporsal akan di tarik.\r\n\r\n“Yang jelas hingga saat ini satu  rupiahpun belum ada dana masuk ke panitia,” ucap Mahadi.\r\n\r\nDiakhir penjelasan Mahadi memaparkan akan melakukan rapat dengan jajarannya guna membahas tanggapan masyarakat dan beredarnya proporsal di medsos.\r\n\r\n“Insya Allah kegiatan vaksin akan tetap dilaksanakan, meski dengan seadanya,”pungkas dia.', '2022-12-16 13:21:26', '2022-12-16 13:21:26'),
(21, NULL, '2021', '30-oktober-2023', 'admin_kecamatan', 'Camat Delta PawanTarik Proporsal Sumbangan Kegiatan Vaksin Covid-19', 'app/foto/-1671197120-OsQEn.jpg', 'app/foto1/-1671197120-zJztM.jpg', 'app/foto2/-1671197120-PzxBV.jpg', 'KETAPANG, JAPOS.CO – Mendukung program pemerintah pusat, Camat Delta Pawan Kabupaten Ketapang Kalimantan Barat bersama jajarannya akan melaksanakan Vaksinasi Covid-19 pada 22 November 2021, bekerja sama dengan Puskesmas yang ada.\r\n\r\nMenyukseskan kegiatan tersebut pihak kecamatan berencana melibatkan masyarakat/pihak ke tiga, dimana bantuan pihak ketiga (dana), akan digunakan sebagai penunjang kegiatan vaksin, seperti biaya sewa tenda, biaya makan, dorpres dan lain sebagainya.\r\n\r\nHanya saja, sejak program tersebut dikemas dalam produk proporsal bantuan per 1 November 2021 lalu, pihak ke tiga belum memberikan tanggapan. Dana partisipasi yang diharapkan belum satupun masuk ke kas panitia.\r\n\r\nYang celakanya lagi, proporsal yang dibagikan ke sejumlah pihak seakan disambut dingin. Lembaran proporsal di upload ke media Social (akun facebook) salah seorang warga Ketapang sehingga tak terelakan, pihak kecamatan mendapat nyinyiran dan sindiran negatif para netizen.\r\n\r\nDalam hal ini, Ketua LSM Peduli Kayong Suryadi juga ikut berkomentar dan menyayangkan prilaku kecamatan melaksanakan vaksinasi covid-19 meminta sumbangan kepada masyarakat. Menurut dia, hal itu tidak pantas dilakukan meski alasan sebatas biaya penunjang kegiatan bukan untuk biaya vaksin.\r\n\r\nPersoalan covid ini dikatakan, masyarakat sudah cukup menderita dan jangan dibebankan dengan hal serupa. Presiden RI menegaskan, semua biaya terkait vaksin ditanggung oleh pemerintah.\r\n\r\n“Jangan jadi alasan memberi bingkisan kepada mereka harus membuat proporsal bantuan. Jika di pusat Menteri Kabinet terlibat bisnis PCR, sedangkan di bawah/di daerah sibuk mencari sumbangan. Itu kurang etis,” kata Suryadi pada Japos.co, Senin, (8/11/21).\r\n\r\nMeski demikian dia bersyukur, kegiatan ini belum dilaksanakan. “Ya syukurlah vaksinasi belum terlaksana dan masyarakat belum memberikan sumbangan. Untuk itu saya berharap pihak kecamatan Delta Pawan  mempertimbangkan kembali melibatkan pihak ketiga,” ucap Ketua LSM Peduli Kayong ini.\r\n\r\nSementara Camat Delta Pawan Syarif Mahadi, S.AP, ME membenarkan instansi yang dipimpinnya melalui panitia yang dibentuk akan melaksanakan vaksinasi massal Covid-19 dan akan melibatkan pihak lain untuk mendapatkan bantuan dana kegiatan vaksinasi.\r\n\r\nBantuan tersebut dijelaskan Mahadi bersifat sukarela dan tidak ada paksaan. Dana yang terkumpul nantinya direncanakan sebagi biaya penunjang kegiatan yang dikelola oleh panitia pelaksana.\r\n\r\n“Kita akan bekerjasama dengan Puskesmas dan Vaksin itu gratis alias tidak dipungut bayaran,” kata Mahadi di ruang kerjanya, Kamis (8/11) seraya menegaskan bahwa bantuan sukarela yang dicarinya itu sebatas dana penunjang kegiatan.\r\n\r\nMenjawab pertaanyaan watawan, bahwa gagasan melibatkan pihak ketiga adalah gagasan dirinya yang diputuskan dalam rapat. Tidak ada acuan khusus yang menjelaskan boleh atau tidak mencari bantuan partispasi dari pihak ke tiga. Dan diakuinya juga bahwa pembuatan proporsal tersebut belum dilakukan koordinasi dengan atasan seperti Bupati.\r\n\r\nLangkah yang diambil mengingat Kecamatan Delta Pawan prosentase  masyarakat yang di vaksin masih kecil dari target yang diharapkan.\r\n\r\nMahadi mencoba mencari terobosan agar masyarakat lebih termotivasi untuk di vaksin, seperti dengan cara memberi bingkisan/dorpres.\r\n\r\nDiakuinya, dari dua puluhan provorsal yang dilayangkan ke pihak ketiga baik itu katagori perusahaan maupun perorangan, hingga saat ini belum ada jawaban. .\r\n\r\nDia beranggapan, jika langkah yang mereka ambil salah dan melahirkan tanggapan negative berbagai pihak, maka proporsal akan di tarik.\r\n\r\n“Yang jelas hingga saat ini satu  rupiahpun belum ada dana masuk ke panitia,” ucap Mahadi.\r\n\r\nDiakhir penjelasan Mahadi memaparkan akan melakukan rapat dengan jajarannya guna membahas tanggapan masyarakat dan beredarnya proporsal di medsos.\r\n\r\n“Insya Allah kegiatan vaksin akan tetap dilaksanakan, meski dengan seadanya,”pungkas dia.', '2022-12-16 13:25:20', '2022-12-16 13:25:20'),
(22, NULL, '2020', '30-Novemver-20222', 'admin_kecamatan', 'Camat Delta PawanTarik Proporsal Sumbangan Kegiatan Vaksin Covid-19', 'app/foto/-1671197155-dAiJ9.jpg', 'app/foto1/-1671197155-XuUOB.jpg', 'app/foto2/-1671197155-n64rl.jpg', 'KETAPANG, JAPOS.CO – Mendukung program pemerintah pusat, Camat Delta Pawan Kabupaten Ketapang Kalimantan Barat bersama jajarannya akan melaksanakan Vaksinasi Covid-19 pada 22 November 2021, bekerja sama dengan Puskesmas yang ada.\r\n\r\nMenyukseskan kegiatan tersebut pihak kecamatan berencana melibatkan masyarakat/pihak ke tiga, dimana bantuan pihak ketiga (dana), akan digunakan sebagai penunjang kegiatan vaksin, seperti biaya sewa tenda, biaya makan, dorpres dan lain sebagainya.\r\n\r\nHanya saja, sejak program tersebut dikemas dalam produk proporsal bantuan per 1 November 2021 lalu, pihak ke tiga belum memberikan tanggapan. Dana partisipasi yang diharapkan belum satupun masuk ke kas panitia.\r\n\r\nYang celakanya lagi, proporsal yang dibagikan ke sejumlah pihak seakan disambut dingin. Lembaran proporsal di upload ke media Social (akun facebook) salah seorang warga Ketapang sehingga tak terelakan, pihak kecamatan mendapat nyinyiran dan sindiran negatif para netizen.\r\n\r\nDalam hal ini, Ketua LSM Peduli Kayong Suryadi juga ikut berkomentar dan menyayangkan prilaku kecamatan melaksanakan vaksinasi covid-19 meminta sumbangan kepada masyarakat. Menurut dia, hal itu tidak pantas dilakukan meski alasan sebatas biaya penunjang kegiatan bukan untuk biaya vaksin.\r\n\r\nPersoalan covid ini dikatakan, masyarakat sudah cukup menderita dan jangan dibebankan dengan hal serupa. Presiden RI menegaskan, semua biaya terkait vaksin ditanggung oleh pemerintah.\r\n\r\n“Jangan jadi alasan memberi bingkisan kepada mereka harus membuat proporsal bantuan. Jika di pusat Menteri Kabinet terlibat bisnis PCR, sedangkan di bawah/di daerah sibuk mencari sumbangan. Itu kurang etis,” kata Suryadi pada Japos.co, Senin, (8/11/21).\r\n\r\nMeski demikian dia bersyukur, kegiatan ini belum dilaksanakan. “Ya syukurlah vaksinasi belum terlaksana dan masyarakat belum memberikan sumbangan. Untuk itu saya berharap pihak kecamatan Delta Pawan  mempertimbangkan kembali melibatkan pihak ketiga,” ucap Ketua LSM Peduli Kayong ini.\r\n\r\nSementara Camat Delta Pawan Syarif Mahadi, S.AP, ME membenarkan instansi yang dipimpinnya melalui panitia yang dibentuk akan melaksanakan vaksinasi massal Covid-19 dan akan melibatkan pihak lain untuk mendapatkan bantuan dana kegiatan vaksinasi.\r\n\r\nBantuan tersebut dijelaskan Mahadi bersifat sukarela dan tidak ada paksaan. Dana yang terkumpul nantinya direncanakan sebagi biaya penunjang kegiatan yang dikelola oleh panitia pelaksana.\r\n\r\n“Kita akan bekerjasama dengan Puskesmas dan Vaksin itu gratis alias tidak dipungut bayaran,” kata Mahadi di ruang kerjanya, Kamis (8/11) seraya menegaskan bahwa bantuan sukarela yang dicarinya itu sebatas dana penunjang kegiatan.\r\n\r\nMenjawab pertaanyaan watawan, bahwa gagasan melibatkan pihak ketiga adalah gagasan dirinya yang diputuskan dalam rapat. Tidak ada acuan khusus yang menjelaskan boleh atau tidak mencari bantuan partispasi dari pihak ke tiga. Dan diakuinya juga bahwa pembuatan proporsal tersebut belum dilakukan koordinasi dengan atasan seperti Bupati.\r\n\r\nLangkah yang diambil mengingat Kecamatan Delta Pawan prosentase  masyarakat yang di vaksin masih kecil dari target yang diharapkan.\r\n\r\nMahadi mencoba mencari terobosan agar masyarakat lebih termotivasi untuk di vaksin, seperti dengan cara memberi bingkisan/dorpres.\r\n\r\nDiakuinya, dari dua puluhan provorsal yang dilayangkan ke pihak ketiga baik itu katagori perusahaan maupun perorangan, hingga saat ini belum ada jawaban. .\r\n\r\nDia beranggapan, jika langkah yang mereka ambil salah dan melahirkan tanggapan negative berbagai pihak, maka proporsal akan di tarik.\r\n\r\n“Yang jelas hingga saat ini satu  rupiahpun belum ada dana masuk ke panitia,” ucap Mahadi.\r\n\r\nDiakhir penjelasan Mahadi memaparkan akan melakukan rapat dengan jajarannya guna membahas tanggapan masyarakat dan beredarnya proporsal di medsos.\r\n\r\n“Insya Allah kegiatan vaksin akan tetap dilaksanakan, meski dengan seadanya,”pungkas dia.', '2022-12-16 13:25:55', '2022-12-16 13:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `jumlah_rt` varchar(255) DEFAULT NULL,
  `jumlah_rw` varchar(255) DEFAULT NULL,
  `jumlah_dusun` varchar(255) DEFAULT NULL,
  `nama_kelurahan` varchar(255) DEFAULT NULL,
  `nama_desa` varchar(255) DEFAULT NULL,
  `kepala_desa` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `isi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `id_user`, `judul`, `jumlah_rt`, `jumlah_rw`, `jumlah_dusun`, `nama_kelurahan`, `nama_desa`, `kepala_desa`, `alamat`, `isi`, `created_at`, `updated_at`) VALUES
(8, NULL, NULL, NULL, NULL, NULL, 'Sukaharja', 'Sukaharja', NULL, 'Jl.Brigjen Katamso,Sukahrja Delta Pawan Ketapang', NULL, '2022-12-06 19:16:18', '2022-12-06 19:16:18'),
(9, NULL, NULL, NULL, NULL, NULL, 'Kalinilam', 'Kalinilam', NULL, 'Jl.Gajah Mada, Kalinilam Delta Pawan Ketapang', NULL, '2022-12-06 19:17:08', '2022-12-06 19:17:08'),
(10, NULL, NULL, NULL, NULL, NULL, 'Kampung Sampit', 'Kampung Sampit', NULL, NULL, NULL, '2022-12-06 19:17:33', '2022-12-06 19:17:33'),
(11, NULL, NULL, NULL, NULL, NULL, 'Payak Kumang', 'Payak Kumang', NULL, 'Jl. Gatot Subroto, Kec. Delta Pawan', NULL, '2022-12-06 19:17:54', '2022-12-08 02:02:27'),
(12, NULL, NULL, NULL, NULL, NULL, 'Sukabangun', 'Sukabangun', NULL, NULL, NULL, '2022-12-06 19:18:09', '2022-12-06 19:18:09'),
(13, NULL, NULL, NULL, NULL, NULL, 'Kampung Tengah', 'Kampung Tengah', NULL, NULL, NULL, '2022-12-07 17:40:25', '2022-12-07 17:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `deskripsi` text,
  `tanggal_masuk` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `keterangan`, `user_id`, `deskripsi`, `tanggal_masuk`, `file`, `level`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'pembuatan KK', NULL, 'Pembuatan kk dengan dokumeen nya', '30-NOVEMBER-2022', 'app/file/-1669819609-CGhsA.pdf', 'Kk', 'app/foto/-1669819609-vWgb0.png', '2022-11-30 14:46:49', '2022-11-30 14:46:49'),
(2, 'Surat Waris', NULL, NULL, '30-NOVEMBER-2022', 'app/file/-1670433567-dwGBu.pdf', 'Waris', 'app/foto/-1670433568-LZ96H.png', '2022-12-07 17:19:28', '2022-12-07 17:22:24'),
(3, 'Mikro', NULL, NULL, '16-Desember-2022', 'app/file/-1671131601-dOVUJ.docx', 'Mikro', 'app/foto/-1671131601-63DPQ.png', '2022-12-15 19:13:22', '2022-12-15 19:13:22'),
(4, 'Pensiun', NULL, 'Surat Pensiun', '16-Desember-2022', 'app/file/-1671131684-7pGFe.docx', 'Pensiun', 'app/foto/-1671131684-hZKLM.png', '2022-12-15 19:14:44', '2022-12-15 19:14:44'),
(5, 'Nikah', NULL, 'Surat Diapsensi Nikah', '16-Desember-2022', 'app/file/-1671131765-OjPWC.docx', 'Nikah', 'app/foto/-1671131765-vOB4t.png', '2022-12-15 19:16:05', '2022-12-15 19:16:05'),
(6, 'public', NULL, 'informasi publik', '16-Desember-2022', 'app/file/-1671131827-JYnVJ.docx', 'Informasi', 'app/foto/-1671131827-xGMTQ.png', '2022-12-15 19:17:08', '2022-12-15 19:17:08'),
(7, 'penelitian', NULL, 'Penelitian', '16-Desember-2022', 'app/file/-1671131881-zEzig.docx', 'Penelitian', 'app/foto/-1671131881-O7Epy.png', '2022-12-15 19:18:01', '2022-12-15 19:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `pariwisata`
--

CREATE TABLE `pariwisata` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `nama_pembuat` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pariwisata`
--

INSERT INTO `pariwisata` (`id`, `id_user`, `tanggal`, `nama_pembuat`, `judul`, `isi`, `foto`, `foto1`, `foto2`, `created_at`, `updated_at`) VALUES
(2, NULL, '30-oktober-2022', 'admin_kecamatan', 'Dinas Pariwisata Ketapang akan Perbaiki Fasilitas Wisata di Akhir Tahun', 'Ketapang (Suara Ketapang) - Gelombang tinggi dan angin kencang yang menerjang pesisir pantai Ketapang bebera waktu lalu membuat sejumlah bangunan rusak. Fasilitas yang dibangun pemerintah juga rusak akibat musibah tersebut. Di antaranya adalah dermaga dan gazebo di Pantai Pecal Desa Kinjil Pesisir Kecamatan Benua Kayong.\r\nMenanggapi hal tersebut, Kepala Dinas Kebudayaan dan Pariwisata Ketapang, Yulianus, mengatakan ada beberapa fasilitas yang dibangun pemerintah, khususnya Dinas Kebudayaan dan Pariwisata Ketapang, yang rusak akibat diterjang gelombang tinggi dan angin kencang. Di antaranya dermaga dan beberapa gazebo di Pantai Pecal dan Pantai Tanjung Bawang.\r\n\r\nMenanggapi hal tersebut, pihaknya sudah melakukan pendataan terhadap fasilitas wisata yang rusak tersebut. \"Saya sudah memerintahkan Bidang Pariwisata untuk melakukan pendataan terhadap fasilitas yang rusak akibat gelombang tinggi dan angin kencang tersebut. Hasilnya, beberapa bangunan di Pantai Pecal dan Tanjung Bawang rusak,\" katanya, Senin (18/1/2021).\r\n\r\nDia menjelaskan, saat ini pihaknya baru melakukan pendataan. Perbaikan tehadap bangunan yang rusak tersebut diakui Yulianus, tidak bisa dilakukan secara langsung. \"Untuk langsung memperbaiki tidak bisa, karena tidak ada dana tanggap darurat. Kami sudah melakukan koordinasi dan rapat dengan DPRD dan disampaikan bahwa di APBD Perubahan 2021 dianggarkan untuk diperbaiki,\" jelasnya.\r\n\r\nMenurutnya, ketika melakukan rapat kerja dengan DPRD Ketapang, anggota DPRD mendukung rencana perbaikan tersebut dan akan dianggarkan di APBD Perubahan 2021. \"Ini merupakan respon dari kami terhadap bencana tersebut. Namun, perbaikan secara langsung tidak bisa, harus menunggu APBD Perubahan 2021,\" ungkapnya.\r\n\r\nYulianus menambahkan, pihaknya sudah menyampaikan hal tersebut kepada Bappeda Ketapang supaya dimasukkan dalam renja perubahan. \"Bangunan yang akan diperbaiki di antaranya gazebo yang rusak, pembangunan dan perbaikan dermaga yang rusak di Pantai Pecal dan Tanjung Bawang. Sementara bangunan dan warung milik warga yang rusak tidak bisa diperbaiki dan dibantu oleh pemerintah, karena tidak memiliki dana untuk tanggap darurat,\" paparnya.\r\n\r\nSementara itu, pihaknya juga terus mengajukan pembangunan batu pemecah ombak di Pantai Pecal. \"Batu pemecah ombak di Pantai Pecal itu dibangun oleh Dinas Pariwisata pada tahun 2019 melalui DAK. Pembangunan barau tersebut juga satu pekerjaan dengan dermaga. Di tahun 2020 diajukan kembali, tapi tidak dapat karena Covid-19,\" ujarnya\r\n\r\n\"Tapi kita terus mengajukan untuk membangun baru pemecah ombak. Kalaupun dinas pariwisata tidak bisa membangun, mungkin dinas lain bisa melanjutkan pembangunan barau pemecah ombak tersebut. Pembangunan batu pemecah ombak tersebut sangat penting untuk menahan ombak agar tidak terdampak ke permukiman warga,\" tambah Yulianus. (Ndi).', 'app/foto/-1671252148-3Ke5u.jpg', 'app/foto1/-1671252148-xPWpS.jpg', NULL, '2022-12-17 04:42:28', '2022-12-17 04:42:28'),
(3, NULL, '30-Novemver-20222', 'admin_kecamatan', 'Dinas Pariwisata Ketapang akan Perbaiki Fasilitas Wisata di Akhir Tahun', 'Ketapang (Suara Ketapang) - Gelombang tinggi dan angin kencang yang menerjang pesisir pantai Ketapang bebera waktu lalu membuat sejumlah bangunan rusak. Fasilitas yang dibangun pemerintah juga rusak akibat musibah tersebut. Di antaranya adalah dermaga dan gazebo di Pantai Pecal Desa Kinjil Pesisir Kecamatan Benua Kayong.\r\nMenanggapi hal tersebut, Kepala Dinas Kebudayaan dan Pariwisata Ketapang, Yulianus, mengatakan ada beberapa fasilitas yang dibangun pemerintah, khususnya Dinas Kebudayaan dan Pariwisata Ketapang, yang rusak akibat diterjang gelombang tinggi dan angin kencang. Di antaranya dermaga dan beberapa gazebo di Pantai Pecal dan Pantai Tanjung Bawang.\r\n\r\nMenanggapi hal tersebut, pihaknya sudah melakukan pendataan terhadap fasilitas wisata yang rusak tersebut. \"Saya sudah memerintahkan Bidang Pariwisata untuk melakukan pendataan terhadap fasilitas yang rusak akibat gelombang tinggi dan angin kencang tersebut. Hasilnya, beberapa bangunan di Pantai Pecal dan Tanjung Bawang rusak,\" katanya, Senin (18/1/2021).', 'app/foto/-1671252193-t4Tf9.jpg', 'app/foto1/-1671252193-bcP8s.jpg', NULL, '2022-12-17 04:43:13', '2022-12-17 04:43:13'),
(4, NULL, '30-oktober-2023', 'admin_kecamatan', 'Dinas Pariwisata Ketapang akan Perbaiki Fasilitas Wisata di Akhir Tahun', 'Ketapang (Suara Ketapang) - Gelombang tinggi dan angin kencang yang menerjang pesisir pantai Ketapang bebera waktu lalu membuat sejumlah bangunan rusak. Fasilitas yang dibangun pemerintah juga rusak akibat musibah tersebut. Di antaranya adalah dermaga dan gazebo di Pantai Pecal Desa Kinjil Pesisir Kecamatan Benua Kayong.\r\nMenanggapi hal tersebut, Kepala Dinas Kebudayaan dan Pariwisata Ketapang, Yulianus, mengatakan ada beberapa fasilitas yang dibangun pemerintah, khususnya Dinas Kebudayaan dan Pariwisata Ketapang, yang rusak akibat diterjang gelombang tinggi dan angin kencang. Di antaranya dermaga dan beberapa gazebo di Pantai Pecal dan Pantai Tanjung Bawang.\r\n\r\nMenanggapi hal tersebut, pihaknya sudah melakukan pendataan terhadap fasilitas wisata yang rusak tersebut. \"Saya sudah memerintahkan Bidang Pariwisata untuk melakukan pendataan terhadap fasilitas yang rusak akibat gelombang tinggi dan angin kencang tersebut. Hasilnya, beberapa bangunan di Pantai Pecal dan Tanjung Bawang rusak,\" katanya, Senin (18/1/2021).', 'app/foto/-1671252214-NTeom.jpg', 'app/foto1/-1671252214-BuDqN.jpg', NULL, '2022-12-17 04:43:34', '2022-12-17 04:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `pemerintah`
--

CREATE TABLE `pemerintah` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) DEFAULT NULL,
  `periode` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemerintah`
--

INSERT INTO `pemerintah` (`id`, `id_user`, `nama`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `pendidikan_terakhir`, `periode`, `jabatan`, `level`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(9, NULL, 'Martin rantan', '14-juli-1965', 'Ketapang', 'JL.Khatulistiwa', 'S-1  Universitas Tanjung Pura', '2020-2024', 'bupati', 'Bupati', 'app/foto/9-1667364235-uSqun.jpg', NULL, '2022-10-28 05:19:33', '2022-12-17 05:04:29'),
(15, NULL, 'Farhan', '14-juli-1965', 'Ketapang', 'Jl.Gajah Madaa', 'S-1 Universitas Tanjung Pura', '2020-2024', 'wakil bupati', 'WakilBupati', 'app/foto/15-1667364999-5HZVd.jpg', NULL, '2022-10-28 21:43:40', '2022-12-17 05:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `nama_pembuat` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `foto` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `id_user`, `tanggal`, `nama_pembuat`, `judul`, `isi`, `foto`, `foto1`, `foto2`, `created_at`, `updated_at`) VALUES
(2, NULL, '29/11/2022', 'admin_kecamatan', 'Politap, Dinparbud dan Masata Ketapang Kerjasama Project Based Learning Kembangkan Desa Wisata', 'Ketapang, 29 Nopember 2022, bertempat di Aula Direktorat Politeknik Negeri Ketapang dilakukan Workshop Pengelolaan Desa Wisata Di Kabupaten Ketapang, kegiatan terselenggara atas Kerjasama Politeknik Negeri Ketapang, Dinas pariwisata dan Kebudayaan Kabupaten Ketapang serta Masyarakat Sadar Wisata (Masata) Kabupaten Ketapang. Kegiatan ini diikuti Kepala desa, manajer Bumdes dan Podarwis Desa Wisata di delapan Desa Kendawangan Kiri, Desa Laman Satong, Desa Sinar Kuri, Desa Jelayan, Desa Sungai Awan Kanan, Desa Mekar Utama, Desa Suka Baru dan Desa Kinjil Pesisir.\r\n\r\nEndang Kusmana Direktur Politap dalam sambutan pembukaan kegiatan menyatakan kegiatan ini merupakan salah satu program membangun vokasi dari desa melalui kegiatan desa wisata, yaitu ikhtiar Politap untuk mendukung pembangunan desa bidang pariwisata melalui pengembangan potensi desa.\r\n\r\nEndang menambahkan pihaknya melalui Project Based Learning (PBL) pada program studi DIII Teknologi Informasi telah menghasilkan produk aplikasi e-KTG yaitu Ketapang Travel Guide elektronik yang saat ini sedang dikembangkan bersama Masyarakat sadar Wisata (Masata) Kabupaten Ketapang, melalui e-KTG dikembangkan paket desa wisata di delapan desa yang dapat diakses wisatawan domestik maupun mancanegara\r\n\r\nSementara itu Kepala Dinas Pariwisata dan Kebudayaan Kabupaten Ketapang bapak Absalon, SE., M.Sos dalam sambutan pembukaan menyampaikan bahwa pemerintah daerah siap memanfaatkan peluang penerapan teknologi melalui pelaksanaan kuliah berbasis Project Based Learning khususnya untuk mendukung industri pariwisata yang ada di desa.\r\n\r\nKegiatan workshop pengelolaan desa wisata diisi berbagai materi yaitu peranan Pokdarwis pada desa wisata dengan pemateri  dari Dinas Pariwisata dan Kebudayaan Kabupatan Ketapang, materi Peranan Badan Usaha di Desa Wisata dan kampung wisata dari Dinas Pemberdayaan Masyarakat dan Pemerintahan Desa Kabupaten Ketapang,\r\n\r\nMateri perizinan usaha pariwisaya dari Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu Kabupaten Ketapang dan materi Informasi dan promosi pawisata serta peran Perguruan Tinggi dari Eka Wahyudi Ketua Jurusan Teknologi Informasi serta materi Manajemen Desa Wisata dari Setra Kusumardana Ketua Masyarakat Sadar Wisata.', 'app/foto/-1671250907-yl2lr.jpg', 'app/foto1/-1671250907-G6pJU.jpg', 'app/foto2/-1671250907-aLyRy.jpg', '2022-12-17 04:21:47', '2022-12-17 04:21:47'),
(5, NULL, '29/11/2022', 'admin_kecamatan', 'Politap, Dinparbud dan Masata Ketapang Kerjasama Project Based Learning Kembangkan Desa Wisata', 'Ketapang, 29 Nopember 2022, bertempat di Aula Direktorat Politeknik Negeri Ketapang dilakukan Workshop Pengelolaan Desa Wisata Di Kabupaten Ketapang, kegiatan terselenggara atas Kerjasama Politeknik Negeri Ketapang, Dinas pariwisata dan Kebudayaan Kabupaten Ketapang serta Masyarakat Sadar Wisata (Masata) Kabupaten Ketapang. Kegiatan ini diikuti Kepala desa, manajer Bumdes dan Podarwis Desa Wisata di delapan Desa Kendawangan Kiri, Desa Laman Satong, Desa Sinar Kuri, Desa Jelayan, Desa Sungai Awan Kanan, Desa Mekar Utama, Desa Suka Baru dan Desa Kinjil Pesisir.\r\n\r\nEndang Kusmana Direktur Politap dalam sambutan pembukaan kegiatan menyatakan kegiatan ini merupakan salah satu program membangun vokasi dari desa melalui kegiatan desa wisata, yaitu ikhtiar Politap untuk mendukung pembangunan desa bidang pariwisata melalui pengembangan potensi desa.\r\n\r\nEndang menambahkan pihaknya melalui Project Based Learning (PBL) pada program studi DIII Teknologi Informasi telah menghasilkan produk aplikasi e-KTG yaitu Ketapang Travel Guide elektronik yang saat ini sedang dikembangkan bersama Masyarakat sadar Wisata (Masata) Kabupaten Ketapang, melalui e-KTG dikembangkan paket desa wisata di delapan desa yang dapat diakses wisatawan domestik maupun mancanegara\r\n\r\nSementara itu Kepala Dinas Pariwisata dan Kebudayaan Kabupaten Ketapang bapak Absalon, SE., M.Sos dalam sambutan pembukaan menyampaikan bahwa pemerintah daerah siap memanfaatkan peluang penerapan teknologi melalui pelaksanaan kuliah berbasis Project Based Learning khususnya untuk mendukung industri pariwisata yang ada di desa.\r\n\r\nKegiatan workshop pengelolaan desa wisata diisi berbagai materi yaitu peranan Pokdarwis pada desa wisata dengan pemateri  dari Dinas Pariwisata dan Kebudayaan Kabupatan Ketapang, materi Peranan Badan Usaha di Desa Wisata dan kampung wisata dari Dinas Pemberdayaan Masyarakat dan Pemerintahan Desa Kabupaten Ketapang,\r\n\r\nMateri perizinan usaha pariwisaya dari Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu Kabupaten Ketapang dan materi Informasi dan promosi pawisata serta peran Perguruan Tinggi dari Eka Wahyudi Ketua Jurusan Teknologi Informasi serta materi Manajemen Desa Wisata dari Setra Kusumardana Ketua Masyarakat Sadar Wisata.', 'app/foto/-1671251995-KBp3H.jpg', 'app/foto1/-1671251995-HyQca.jpg', NULL, '2022-12-17 04:39:55', '2022-12-17 04:39:55'),
(6, NULL, '29/11/2022', 'admin_kecamatan', 'Politap, Dinparbud dan Masata Ketapang Kerjasama Project Based Learning Kembangkan Desa Wisata', 'Ketapang, 29 Nopember 2022, bertempat di Aula Direktorat Politeknik Negeri Ketapang dilakukan Workshop Pengelolaan Desa Wisata Di Kabupaten Ketapang, kegiatan terselenggara atas Kerjasama Politeknik Negeri Ketapang, Dinas pariwisata dan Kebudayaan Kabupaten Ketapang serta Masyarakat Sadar Wisata (Masata) Kabupaten Ketapang. Kegiatan ini diikuti Kepala desa, manajer Bumdes dan Podarwis Desa Wisata di delapan Desa Kendawangan Kiri, Desa Laman Satong, Desa Sinar Kuri, Desa Jelayan, Desa Sungai Awan Kanan, Desa Mekar Utama, Desa Suka Baru dan Desa Kinjil Pesisir.\r\n\r\nEndang Kusmana Direktur Politap dalam sambutan pembukaan kegiatan menyatakan kegiatan ini merupakan salah satu program membangun vokasi dari desa melalui kegiatan desa wisata, yaitu ikhtiar Politap untuk mendukung pembangunan desa bidang pariwisata melalui pengembangan potensi desa.\r\n\r\nEndang menambahkan pihaknya melalui Project Based Learning (PBL) pada program studi DIII Teknologi Informasi telah menghasilkan produk aplikasi e-KTG yaitu Ketapang Travel Guide elektronik yang saat ini sedang dikembangkan bersama Masyarakat sadar Wisata (Masata) Kabupaten Ketapang, melalui e-KTG dikembangkan paket desa wisata di delapan desa yang dapat diakses wisatawan domestik maupun mancanegara\r\n\r\nSementara itu Kepala Dinas Pariwisata dan Kebudayaan Kabupaten Ketapang bapak Absalon, SE., M.Sos dalam sambutan pembukaan menyampaikan bahwa pemerintah daerah siap memanfaatkan peluang penerapan teknologi melalui pelaksanaan kuliah berbasis Project Based Learning khususnya untuk mendukung industri pariwisata yang ada di desa.\r\n\r\nKegiatan workshop pengelolaan desa wisata diisi berbagai materi yaitu peranan Pokdarwis pada desa wisata dengan pemateri  dari Dinas Pariwisata dan Kebudayaan Kabupatan Ketapang, materi Peranan Badan Usaha di Desa Wisata dan kampung wisata dari Dinas Pemberdayaan Masyarakat dan Pemerintahan Desa Kabupaten Ketapang,\r\n\r\nMateri perizinan usaha pariwisaya dari Dinas Penanaman Modal Pelayanan Terpadu Satu Pintu Kabupaten Ketapang dan materi Informasi dan promosi pawisata serta peran Perguruan Tinggi dari Eka Wahyudi Ketua Jurusan Teknologi Informasi serta materi Manajemen Desa Wisata dari Setra Kusumardana Ketua Masyarakat Sadar Wisata.', 'app/foto/-1671252096-qcYGK.jpg', 'app/foto1/-1671252096-1dPGn.jpg', NULL, '2022-12-17 04:41:36', '2022-12-17 04:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `potensi`
--

CREATE TABLE `potensi` (
  `id` int(11) NOT NULL,
  `id_user` int(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `level`, `id_user`, `nama`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Visi', NULL, 'visi', NULL, 'Terwujudnya Kepuasan Masyarakat Melalui Pelayanan Secara Terpadu', '2022-10-12 10:53:16', '2022-12-06 19:06:50'),
(2, 'Misi', NULL, 'misi', 'app/foto/-1665598041-PJ8rR.docx', '1.Mewujudkan Tertib Adminitrasi Pelayanan Untuk Memberikan Kepastian Hukum Dalam Proses Maupun Produk Pelayanan Sebagai Tanggung Jawab Pelaksanaan Tugas.\r\n\r\n2.Meningkatkan Profesionalisme Petugas Dan Sistem Pelayanan Untuk Memperoleh Pelayanan Berkualitas Sesuai Dengan Asas Penyelenggraaan Pelayana Publik.\r\n\r\n3.Menjunjung Tinggi Nilai-nilai Akuntabilitas Dan Intregitas Serta Membangun Mekanisme Kontrol Menumbuhan Pelayanan Yang Bersih Dari KKN.\r\n\r\n4.Melakukan Penilaian Kinerja Pelayanan Dan Pengukuran Kepuasan Masyarakat Secara Periodik.', '2022-10-12 11:07:22', '2022-12-06 19:13:52'),
(4, 'Galeri', NULL, 'struktur', 'app/foto/-1666074439-D3gIw.png', NULL, '2022-10-17 23:27:20', '2022-11-03 13:49:38'),
(7, 'Tupoksi', NULL, 'Tugas dan Fungsi', NULL, 'TUGAS :\r\nKecamatan mempunyai tugas melaksanakan koordinasi penyelenggaraan pemerintahan, pelayanan publik dan pemberdayaan masyarakat desa atau kelurahan.\r\n\r\nFUNGSI :\r\n1.Penyelenggaraan urusan pemerintahan umum\r\n2.Pengoordinasian kegiatan pemberdayaan masyarakat\r\n3.Pengoordinasian upaya penyelenggaraan ketenteraman dan ketertiban umu\r\n4.Pengoordinasian penerapan dan penegakan peraturan daerah dan peraturan bupati\r\n5.Pengoordinasian pemeliharaan prasarana dan sarana pelayanan umum\r\n6.Pengoordinasian penyelenggaraan kegiatan pemerintah yang dilakukan oleh perangkat daerah di tingkat kecamatan\r\nMelaksanakan urusan pemerintahan dan pengawasan terhadap penyelenggaraan kegiatan desa atau kelurahan\r\n6.Pelaksanaan urusan pemerintahan  yang menjadi kewenangan daerah yang tidak dilaksanakan oleh unit kerja pemerintahan daerah yang ada di kecamatan\r\n7.Pelaksanaan tugas lain yang diperintahkan oleh peraturan perundang-undangan\r\n8.Pelaksanaan tugas yang dilimpahkan oleh Bupati untuk melaksanakan sebagai urusan pemerintahan yang menjadi kewenangan daerah', '2022-10-19 23:15:00', '2022-10-21 18:51:59'),
(13, 'Sejarah', NULL, 'Tugu Ale-ale', 'app/foto/-1666894474-766Lx.jpg', 'Menurut Atlas Sejarah yang disusun oleh Muhammad Yamin (1965), wilayah geografi Kota Ketapang dulunya diberi nama Tandjungpura. Selanjutnyapada masa Kesultanan Riau-Johor, nama Tandjungpura berubah menjadi Matan, lalu Ketapang. Perubahan tersebut terjadi diduga akibat perubahan letak kerajaan atau raja yang berkuasa di tempat tersebut. Namun, kepastian sejarah berdirinya Kota Ketapang hingga saat ini masih samar. Tetapi semua dugaan yang ada didasarkan beberapa kronik Cina, Nagarajertagama,Prasasti Waringin Pitu dan penelitian para ahli linguistic di Kepulauan Indo-Malaya.', '2022-10-27 11:14:34', '2022-10-27 11:28:43'),
(14, 'Sejarah', NULL, 'Keraton Matan', 'app/foto/14-1667146820-hTlUs.jpg', 'Keraton Matan ini adalah keraton Melayu yang merupakan kerato peninggalan kesulatan atau kerajaan Melayu sehingga warnanya didominasi oleh warna kuning dan hijau.\r\n\r\nSeperti yang kita Tahu jika Provinsi Kalimantan Barat sendiri dihuni oleh mayoritas warga suku Melayu sehingga tak heran jika mayoritas disemua kabupaten di Kalbar ada sebuah kerajaan dan Keraton.', '2022-10-30 09:19:48', '2022-10-30 09:20:20'),
(15, '--- Level ---', NULL, NULL, NULL, NULL, '2022-11-30 04:40:36', '2022-11-30 04:40:36'),
(18, '--- Level ---', NULL, NULL, NULL, NULL, '2022-12-14 07:42:34', '2022-12-14 07:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'irsyad', 'ariktpa@gmail.com', 'ari', '$2y$10$dNdcz6uchT3dKSbw7EJOkuGFNFlQAXV.zyuRwKgdV.pIyE/zKnz4K', NULL, '2022-09-29 22:39:14', '2022-12-07 05:07:47'),
(10, 'Husain', 'Admin@gmail.com', 'Irsyad', '$2y$10$xH/RQvWCsxckEMCheX3mZeaBE9LBiVTheEk8GyetGHvL2ktA5c95.', NULL, '2022-12-04 18:24:30', '2022-12-04 18:24:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datakecamatan`
--
ALTER TABLE `datakecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kebudayaan`
--
ALTER TABLE `kebudayaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pariwisata`
--
ALTER TABLE `pariwisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemerintah`
--
ALTER TABLE `pemerintah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potensi`
--
ALTER TABLE `potensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `datakecamatan`
--
ALTER TABLE `datakecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kebudayaan`
--
ALTER TABLE `kebudayaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pariwisata`
--
ALTER TABLE `pariwisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemerintah`
--
ALTER TABLE `pemerintah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `potensi`
--
ALTER TABLE `potensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
