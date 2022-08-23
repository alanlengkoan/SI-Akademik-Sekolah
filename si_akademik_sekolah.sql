-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2022 at 01:18 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_akademik_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id_agama` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_agama`
--

INSERT INTO `tb_agama` (`id_agama`, `nama`, `ins`, `upd`) VALUES
(30591263, 'Hindu', '2021-08-30 15:10:45', '2021-08-30 15:10:45'),
(30768534, 'Kristen', '2021-08-30 15:10:28', '2021-08-30 15:10:28'),
(56923147, 'Buddha', '2021-08-30 15:10:56', '2021-08-30 15:10:56'),
(73925807, 'Islam', '2021-08-30 15:09:50', '2021-08-30 15:09:50'),
(74932685, 'Katolik', '2021-08-30 15:10:36', '2021-08-30 15:10:36'),
(99263850, 'Konghucu', '2021-08-30 15:11:05', '2021-08-30 15:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_tamu`
--

CREATE TABLE `tb_buku_tamu` (
  `id_buku_tamu` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kelamin` enum('L','P') DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` text,
  `keperluan` text,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku_tamu`
--

INSERT INTO `tb_buku_tamu` (`id_buku_tamu`, `ip_address`, `nama`, `kelamin`, `telepon`, `email`, `alamat`, `keperluan`, `ins`) VALUES
(1, '::1', 'Alan', 'L', '085242907595', 'alanlengkoan@gmail.com', 'asdasddsadsa', 'asddsa', '2022-04-11 13:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dana`
--

CREATE TABLE `tb_dana` (
  `id_dana` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dana`
--

INSERT INTO `tb_dana` (`id_dana`, `nama`, `ins`, `upd`) VALUES
(39128764, 'Bantuan Operasional Sekolah (BOS)', '2021-11-19 17:38:07', '2021-11-19 17:38:07'),
(96241389, 'Bantuan Operasional Penyelenggaraan (BOP)', '2021-11-19 17:38:03', '2021-11-19 17:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `nama`, `gambar`, `keterangan`, `ins`, `upd`) VALUES
(22065741, 'Lab. Komputer', '00df63d9828f3fae21ba2d37de000192.jpg', 'Salah satu laboratorium yang ada di sekolah adalah Laboratorium Komputer. Laboratorium komputer merupakan sarana untuk pembelajaran praktik siswa berkaitan dengan kompetensi di bidang teknologi informasi dan komunikasi.\r\n', '2021-08-30 14:26:08', '2022-01-14 13:47:32'),
(88021945, 'Lab Biologi', '81a2c85b4894454335a31508a81a24df.jpg', 'Laboratorium Biologi\r\nLaboratorium biologi mempunyai tujuan dan fungsi sebagai laboratorium pendidikan dan laboratorium penelitian yang akan menerapkan serta mengembangkan teori-teori dan konsep-konsep dalam bidang biologi dan bidang yang terkait.\r\n\r\nLaboratorium  biologi  digunakan  untuk  melaksanakan  praktikum  5  unit  pendidikan, yakni :\r\n\r\na.     Jurusan PMIPA Program Studi Pendidikan Biologi, untuk 17 mata praktikum :\r\n\r\nMikrobiologi Umum, Mikrobiologi Terapan I (pangan dan industri), Mikrobiologi Terapan II (lingkungan) Biologi Umum, Pengetahuan Lingkungan, Kultur Jaringan, Mikro Teknik, Parasitologi, Histologi, Dasar-dasar Ilmu Gizi, Fisiologi Hewan, Fisiologi Tumbuhan, Pengelolahan Pangan, Sistematika Hewan Invertebrata, Anatomi Tumbuhan, Anatomi dan Fisiologi Manusia.\r\n\r\nb.     Fakultas Pertanian\r\n\r\n¨  Jurusan Agronomi dan Jurusan Agribisnis, untuk 3 mata praktikum :\r\n\r\n1)    Biologi Umum Pertanian\r\n\r\n2)    Botani Umum, dan\r\n\r\n3)    Fisiologi Tumbuhan\r\n\r\n¨  Jurusan THP (Teknologi Hasil Pertanian) 2 mata praktikum yakni :\r\n\r\n1)    Biologi Umum Pertanian\r\n\r\n2)    Mikrobiologi Umum\r\n\r\nc.     Diploma III Keperawatan, untuk tiga mata praktikum :\r\n\r\n1).   Parasitologi\r\n\r\n2).   Mikrobiologi, dan\r\n\r\n3).   Anatomi dan Fisiologi Manusia\r\n\r\nd.     Laboratorium Biologi juga melayani praktikum SMU di sekitar Universitas Muhammadiyah Malang.\r\n\r\nLaboratorium Biologi dimanfaatkan sebagai laboratorium penelitian untuk mahasiswa, dosen, dan siswa SMU di sekitar kampus. Di samping melayani praktikum, pada setiap semester laboratorium biologi melayani beberapa jenis penelitian yang berkenaan dengan, antara lain :\r\n\r\na.       Berbagai macam uji kandungan zat, misalnya, uji kadar gula, uji vitamin, uji protein, uji lemak, uji karbohidrat, uji kafein, uji klorofil,\r\n\r\nb.      Uji kualitas mikrobilogik dan kualitas sumber air bersih, air limbah dan lain-lain.\r\n\r\nc.       Identifikasi mikroba, tumbuhan tingkat rendah, paku-pakuan dan lain-lain.\r\n\r\nd.      Pembuatan preparat Mikroteknik dan tumbuhan antara lain : preparat section penampang, preparat wholemount, preparat maserasi squash, preparat segar dengan pewarnaan supervital.\r\n\r\n ', '2021-08-30 14:21:48', '2022-01-14 13:47:06'),
(96248571, 'Perpustakaan', 'c5febd713be094495b282d09d540e92c.jpg', 'Perpustakaan sekolah merupakan pusat sumber ilmu pengetahuan dan informasi yang berada di sekolah, baik tingkat dasar sampai dengan tingkat menengah. Perpustakaan sebagai lembaga penyedia ilmu pengetahuan dan informasi mempunyai peranan yang signifikan terhadap lembaga induk serta masyarakat penggunanya. Pengertian perpustakaan dewasa ini telah mengarahkan kepada tiga hal yang mendasar sekaligus, yaitu hakikat perpustakaan sebagai salah satu sarana pelestarian bahan pustaka; fungsi perpustakaan sebagai sumber informasi ilmu pengetahuan, teknologi dan kebudayaan; serta tujuan perpustakaan sebagai sarana untuk mencerdaskan kehidupan bangsa dan menunjang pembangunan nasional.\r\n\r\nDemikian halnya di dalam lingkungan pendidikan seperti sekolah. Perpustakaan sekolah merupakan perpustakaan yang diselenggarakan pada sebuah sekolah, dikelola, sepenuhnya oleh sekolah yang bersangkutan, dengan tujuan utama mendukung terlaksananya dan tercapainya tujuan sekolah dan tujuan pendidikan pada umumnya.  Perpustakaan sekolah merupakan pusat sumber ilmu pengetahuan dan informasi yang berada di sekolah, baik tingkat dasar sampai dengan tingkat menengah. Sekolah merupakan tempat penyelenggaraan proses belajar mengajar, menanamkan dan, mengembangkan berbagai nilai, ilmu pengetahuan, dan teknologi, keterampilan, seni, serta, wawasan dalam rangka mencapai tujuan pendidikan nasional.\r\n\r\nUntuk itulah perpustakaan sekolah memiliki beragam  fungsi dan manfaat. Fungsi perpustakaan sekolah secara rinci menurut Keputusan Menteri Pendidikan dan Kebudayaan nomor 0103/O/1981, tanggal 11 Maret 1981, dapat dijelaskan sebagai :\r\n1. Pusat kegiatan belajar-mengajar untuk mencapai tujuan pendidikan seperti tercantum dalam kurikulum sekolah\r\n2. Pusat Penelitian sederhana yang memungkinkan para siswa mengembangkan kreativitas dan imajinasinya.\r\n3. Pusat membaca buku-buku yang bersifat rekreatif dan mengisi waktu luang (buku-buku hiburan)\r\n\r\nMerujuk pada fungsi tersebut dapat dikatakan juga bahwa perpustakaan merupakan “jantungnya” pelaksanaan pendidikan pada lembaga itu. Sedangkan fungsi utamanya yaitu sebagai pusat sumber belajar, pusat sumber informasi dan pusat bacaan rekreasi dan pengisi waktu senggang. Untuk selanjutnya perpustakaan dapat diperankan  sebagai tempat membina minat dan bakat siswa, menuju proses belajar sepanjang hayat (Long Life Education).\r\n\r\nSelain memiliki tiga fungsi pokok, seperti di atas, perpustakaan juga memberikan manfaat yang besar dalam mencerdaskan kehidupan siswa. Secara terinci Bafadal (Neneng Komariah, 2009) menyebutkan manfaat perpustakaan sekolah baik yang diselenggarakan di sekolah dasar maupun di sekolah menengah adalah sebagai berikut:\r\n\r\n1. Perpustakaan sekolah dapat menimbulkan kecintaan siswa-siswa terhadap membaca.\r\n2. Perpustakaan sekolah dapat memperkaya pengalaman belajar siswa-siswa.\r\n3. Perpustakaan sekolah dapat menanamkan kebiasaan belajar mandiri yang akhirnya siswa-siswa mampu belajar mandiri.\r\n4. Perpustakaan sekolah dapat mempercepat proses penguasaan teknik membaca.\r\n5. Perpustakaan sekolah dapat membantu perkembangan kecakapan berbahasa.\r\n6. Perpustakaan sekolah dapat melatih siswa-siswa ke arah tanggung jawab.\r\n7. Perpustakaan sekolah dapat memperlancar siswa-siswa dalam menyelesaikan tugas-tugas sekolah.\r\n8. Perpustakaan sekolah dapat membantu guru-guru menemukan sumber-sumber pengajaran.\r\n9. Perpustakaan sekolah dapat membantu siswa-siswa, guru-guru, dan anggota staf sekolah dalam mengikuti perkembangan ilmu pengetahuan dan teknologi.\r\n\r\nBeragam fungsi dan manfaat yang diperoleh dari perpustakan, membuat peran perpustakaan sekolah menjadi sangat penting. Perpustakaan sekolah harus dapat memainkan peran, khususnya dalam membantu siswa untuk mencapai tujuan pendidikan di sekolah. Untuk tujuan tersebut, perpustakaan sekolah perlu merealisasikan misi dan kebijakannya dalam memajukan masyarakat sekolah dengan mempersiapkan tenaga pustakawan yang memadai, koleksi yang berkualitas serta serangkaian aktifitas layanan yang mendukung suasana pembelajaran yang menarik.\r\n\r\nOleh karena itu, perpustakaan sekolah bukan hanya sekedar tempat penyimpanan bahan pustaka tetapi terdapat upaya untuk mendayagunakan agar koleksi-koleksi yang ada dimanfaatkan oleh pemakainya secara maksimal.', '2021-08-30 14:20:02', '2022-01-14 13:46:44'),
(97239546, 'Ruang Kelas', '9da43b05dcdd918e2c39c2dd99985a60.jpg', 'Ruang Kelas adalah suatu ruangan dalam bangunan sekolah, yang berfungsi sebagai tempat untuk kegiatan tatap muka dalam proses kegiatan belajar mengajar (KBM). Mebeler dalam ruangan ini terdiri dari meja siswa, kursi siswa, meja guru, lemari kelas, papan tulis, serta aksesoris ruangan lainnya yang sesuai.', '2021-08-30 14:26:33', '2022-01-14 13:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `kelamin` enum('L','P') DEFAULT NULL,
  `alamat` text,
  `pendidikan` varchar(200) DEFAULT NULL,
  `thn_masuk` int(11) DEFAULT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `id_agama`, `id_jabatan`, `nip`, `nama`, `kelamin`, `alamat`, `pendidikan`, `thn_masuk`, `ins`, `upd`) VALUES
(14897236, 30768534, 84573619, '-', 'Vinsensia Ernawati', 'P', 'Jln. Buttu lepan', 'S2', 2018, '2021-10-25 00:12:23', '2021-11-22 13:42:14'),
(23810562, 74932685, 14021835, '-', 'Pasolon', 'L', 'Leppann', 'S2', 2013, '2021-10-25 02:59:18', '2021-11-22 13:41:42'),
(26198504, 74932685, 48963741, '-', 'Herlinda Buttu', 'P', 'Kondodewata', 'D3', 2020, '2021-11-22 13:51:01', '2021-11-22 13:51:01'),
(26798145, 56923147, 21759032, '-', 'Benyamin Belo', 'L', 'jln. Palayukan buangin', 'S3', 2012, '2021-10-25 00:13:34', '2021-11-22 13:42:04'),
(33806152, 74932685, 15836741, '-', 'Bongga Senga\'', 'L', 'Leppan', 'S1', 2017, '2021-11-22 13:45:20', '2021-11-22 13:45:20'),
(37258961, 30768534, 48963741, '-', 'suppu', 'L', 'hjj', 's2', 2010, '2021-11-23 11:09:01', '2021-11-23 11:09:01'),
(41620549, 74932685, 48963741, '-', 'Robertus Tobe\'', 'P', 'Buangin', 'S1', 2015, '2021-11-22 13:52:48', '2021-11-22 13:52:48'),
(42498365, 74932685, 48963741, '-', 'Benyamin Bunga\'', 'L', 'Palayukan', 'S1', 2016, '2021-11-22 13:49:57', '2021-11-22 13:49:57'),
(44768905, 74932685, 94523017, '3238772673130050', 'Drs. Sinai', 'L', 'Kondodewata Kec. Mappak', 'S3', 2010, '2021-08-30 16:14:55', '2021-10-25 00:09:58'),
(52538041, 74932685, 48963741, '-', 'Juliana', 'P', 'Tarundung', 'S1', 2020, '2021-11-22 13:51:46', '2021-11-22 13:51:46'),
(54536712, 74932685, 84792580, '-', 'Podon', 'P', 'Kondodewata', 'S1', 2016, '2021-11-22 13:40:20', '2021-11-22 13:40:20'),
(60179635, 30768534, 94651230, '-', 'Nataniel Tangngi', 'L', 'salutallang ', 'S1', 2018, '2021-08-30 16:28:36', '2021-11-22 13:42:49'),
(75198072, 30768534, 26207349, '-', 'Yuliana Maroak', 'P', 'Kondo', 'S1', 2019, '2021-10-25 03:01:31', '2021-11-22 13:41:29'),
(83172695, 30768534, 89234061, '-', 'Jhon Baso\'', 'L', 'Jln. Pongtiku selatan', 'S2', 2017, '2021-08-30 16:14:33', '2021-11-22 13:42:39'),
(89621043, 74932685, 32450381, '-', 'Damaris Kuasa', 'P', 'jln. Salukanan', 'S1', 2019, '2021-10-25 00:11:27', '2021-11-22 13:42:24'),
(93281094, 74932685, 48963741, '199409062019031011', 'Joni Lebang', 'L', 'Kondodewata', 'S1', 2019, '2021-11-22 13:48:02', '2021-11-22 13:48:44'),
(94950361, 30768534, 47852361, '-', 'Alvius Abi', 'L', 'minnagnga', 'S1', 2019, '2021-10-25 02:58:18', '2021-11-22 13:41:53'),
(97896120, 74932685, 84573619, '-', 'Arnoldus Nuslin', 'L', 'Makdandan', 'S1', 2016, '2021-11-22 13:39:34', '2021-11-22 13:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_publish` datetime DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_galeri` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `id_kategori`, `judul`, `isi`, `gambar`, `tgl_publish`, `status`, `status_galeri`, `ins`, `upd`) VALUES
(11538097, 67354098, 'Apel Pagi', '<p>kegiatan pagi</p>\r\n', '4425b22659028ba84ab4061ecb9ce565.jpg', '2021-10-25 07:51:08', '0', '1', '2021-10-24 23:51:08', '2022-01-13 16:34:11'),
(12597418, 33570964, 'Cara Cek Siswa Penerima Kartu Indonesia Pintar untuk SD-SMA  Artikel ini telah tayang di Kompas.com ', '<p>Bantuan pembiayaan pendidikan menjadi salah satu program prioritas Menteri Pendidikan dan Kebudayaan (Mendikbud) Nadiem Makarim di tahun 2021. Melanjutkan Merdeka Belajar, program pembiayaan pendidikan akan menyasar lima lingkup, yakni Kartu Indonesia Pintar (KIP) Kuliah, KIP Sekolah, tunjangan profesi guru, layanan khusus pendidikan masyarakat dan kebencanaan, serta pembinaan SILN dan bantuan pemerintah. Bantuan pembiayaan pendidikan melalui KIP Sekolah yang akan menyasar 17,9 juta siswa. Nadiem mengatakan, semua kebijakan Kementerian Pendidikan dan Kebudayaan (Kemendikbud) di tahun 2021 dan juga tahun sebelumnya berujung pada upaya menghadirkan transformasi yang bermakna dan membawa bangsa ini kepada kemajuan. Baca juga: Nadiem Lanjutkan KIP Kuliah di 2021, Targetkan 1 Juta Mahasiswa \"Strategi transformasi yang begitu besar dan kerja yang tak kenal henti mungkin disalahartikan sebagai tidak fokusnya upaya transformasi. Namun, jika dipahami lebih dalam, semua yang dikerjakan Kemendikbud menyasar pada pendidikan yang berkualitas bagi seluruh rakyat Indonesia,\" papar Nadiem dalam taklimat media secara daring, Selasa (5/1/2020). Dapatkan informasi, inspirasi dan insight di email kamu. Daftarkan email Besaran dana KIP Sekolah Merangkum laman Indonesia Pintar Kemendikbud, Program Indonesia Pintar (PIP) melalui Kartu Indonesia Pintar (KIP) akan memberikan bantuan tunai pendidikan kepada anak usia sekolah (usia 6-21 tahun). Setiap anak penerima bantuan pendidikan PIP hanya berhak mendapatkan 1 (satu) KIP. KIP ditujukan untuk siswa yang berasal dari keluarga miskin, pemilik Kartu Keluarga Sejahtera (KKS), peserta Program Keluarga Harapan (PKH), yatim piatu, penyandang disabilitas, serta korban bencana alam/musibah. Baca juga: Beasiswa S1-S2 Brunei, Kuliah Gratis dan Tunjangan Rp 6 Juta Per Bulan Kartu ini memberi jaminan dan kepastian anak-anak usia sekolah terdaftar sebagai penerima bantuan pendidikan. Pada tahun 2020 sendiri, pemegang KIP Sekolah mendapatkan manfaat bantuan pembiayaan pendidikan berupa: Peserta didik SD/MI/Paket A mendapatkan Rp450.000 per tahun. Peserta didik SMP/MTs/Paket B mendapatkan Rp750.000 per tahun. Peserta didik SMA/SMK/MA/Paket C mendapatkan Rp1.000.000 per tahun. Berikut langkah untuk mengetahui apakah siswa merupakan penerima bantuan KIP Sekolah atau belum: 1. Buka laman https://pip.kemdikbud.go.id/home  2. Masukan NISN. 3. Masukkan tanggal lahir. 4. Masukkan nama ibu kandung. 5. Klik cari. Baca juga: BCA Buka 5 Lowongan Kerja untuk Fresh Graduate Cara dapatkan Kartu Indonesia Pintar Penetapan Penerima PIP Dikdasmen dilakukan berdasarkan: 1. Data Peserta Didik hasil pemadanan terkini antara Dapodik dan DTKS; dan/atau 2. Data Peserta Didik hasil pengolahan data usulan dari: dinas pendidikan provinsi. dinas pendidikan kabupaten/kota. Usulan dari dinas pendidikan dilakukan dengan mekanisme sebagai berikut: 1. Satuan pendidikan mengusulkan calon penerima PIP Dikdasmen sesuai dengan persyaratan melalui Dapodik dengan memperbarui status kelayakan Peserta Didik sebagai penerima PIP Dikdasmen. 2. Dinas pendidikan provinsi dan dinas pendidikan kabupaten/kota melakukan verifikasi dan mengusulkan calon penerima PIP Dikdasmen melalui Aplikasi SIPINTAR berdasarkan hasil verifikasi tersebut. Dapatkan update berita pilihan dan breaking news setiap hari dari Kompas.com. Mari bergabung di Grup Telegram \"Kompas.com News Update\", caranya klik link https://t.me/kompascomupdate, kemudian join. Anda harus install aplikasi Telegram terlebih dulu di ponsel.<br>\r\n<br>\r\nArtikel ini telah tayang di <a href=\"https://www.kompas.com/\">Kompas.com</a> dengan judul \"Cara Cek Siswa Penerima Kartu Indonesia Pintar untuk SD-SMA\", Klik untuk baca: <a href=\"https://www.kompas.com/edu/read/2021/01/08/081003271/cara-cek-siswa-penerima-kartu-indonesia-pintar-untuk-sd-sma?page=all\">https://www.kompas.com/edu/read/2021/01/08/081003271/cara-cek-siswa-penerima-kartu-indonesia-pintar-untuk-sd-sma?page=all</a>.<br>\r\nPenulis : Ayunda Pininta Kasih<br>\r\nEditor : Ayunda Pininta Kasih<br>\r\n<br>\r\nDownload aplikasi <a href=\"https://www.kompas.com/\">Kompas.com</a> untuk akses berita lebih mudah dan cepat:<br>\r\nAndroid: <a href=\"https://bit.ly/3g85pkA\">https://bit.ly/3g85pkA</a><br>\r\niOS: <a href=\"https://apple.co/3hXWJ0L\">https://apple.co/3hXWJ0L</a></p>\r\n', '45dc07f149dc410a77b5acfd095ccf3e.jpg', '2021-10-24 23:51:12', '1', '1', '2021-10-24 15:51:12', '2022-01-13 16:34:34'),
(25709321, 56159482, 'Kondisi SMAN 12 Tana Toraja Terkesan Dibiarkan, Legislator Golkar Ini Geram', '<p>Tanah di sekitar gedung SMA Negeri 12 Tana Toraja longsor lagi pada Minggu, 16 Mei 2021 malam. Padahal, longsor sebelumnya (tahun 2019) yang merusak beberapa ruang kelas di SMA yang terletak di Kelurahan Kondodewata Kecamatan Mappak ini, belum diatasi.</p>\r\n\r\n<p>Kondisi ini memicu kecemasan pada para siswa dan guru dalam melakukan aktivitas belajar mengajar di sekolah tersebut. Kecemasan berdampak pada terganggunya proses belajar mengajar.</p>\r\n\r\n<p>Menanggapi situasi yang terjadi di sekolah tersebut, anggota Fraksi Golkar DPRD Provinsi Sulawesi Selatan, John Rende Mengontan mengaku kecewa dan geram terhadap lambannya respon dari Dinas Pendidikan Provinsi Sulsel terhadap kondisi di sekolah tersebut.</p>\r\n\r\n<p>“Hampir dua tahun lamanya dalam kondisi memprihatinkan, namun hingga kini belum ada tindakan nyata dari Pemprov Sulsel. Ada kesannya terjadi pembiaran, karena kejadian ini sudah dilaporkan oleh pihak Sekolah SMAN 12 ke Dinas Pendidikan Sulsel,” sesal JRM, begitu John Rende Mangontan biasa disapa, dalam keterangan tertulis, Senin, 17 Mei 2021.</p>\r\n\r\n<p>Sebelumnya, John Rende Mangontan turun langsung meninjau kondisi SMAN 12 ketika melakukan reses di Kecamatan Simbuang dan Mappak, 8 Mei 2021 lalu. Dia sangat menyayangkan kondisi ini. Apalagi, berdasarkan laporan pihak sekolah, Dinas Pendidikan dan TGUPP telah meninjau langsung, tapi belum ada penanganan sama sekali.</p>\r\n\r\n<p> </p>\r\n', 'e9ed0efd956e1bebe096f1b05136261c.jpg', '2021-09-01 23:35:44', '1', '1', '2021-09-01 15:35:44', '2022-01-14 13:49:23'),
(42654893, 67354098, 'Gedung SMAN 12 Tana Toraja Kembali Diterjang Tanah Longsor', '<p>Hujan deras disertai angin kencang melanda Kecamatan Mappak, pada Senin 22 November 2021 malam mengakibatkan gedung SMAN 12 Tana Toraja diterjang tanah longsor.</p>\r\n\r\n<p>Longsor tersebut berasal dari tebing yang tepat berada di belakang gedung sekolah.</p>\r\n\r\n<p>Kepala Sekolah SMAN 12 Tana Toraja, Bahar, Selasa (23/11) mengatakan, akibat longsor tiga ruang kelas rusak.</p>\r\n\r\n<blockquote>\r\n<p>“Akibat hujan deras dalam beberapa hari terakhir msngakiibatkan tebing longsor. Mungkin karena tanahnya sudah labil. Ada tiga kelas hancur,” ungkapnya.</p>\r\n</blockquote>\r\n\r\n<p>Bahar mengatakan, bukan kali ini longsor terjadi. Tetapi bencana tanah longsor sering terjadi saat musim hujan.</p>\r\n\r\n<blockquote>\r\n<p>“Sudah sering, ini terhitung sudah empat kali longsor,” ucapnya. .</p>\r\n\r\n<p>Atas kejadian itu aktivitas belajar mengajar terhenti. Untuk sementara direlokasikan ke Sekolah Dasar (SD) Mappak.</p>\r\n\r\n<blockquote>\r\n<p>“Aktivitas sekolah kita sementara di SD setempat, agar proses belajar mengajar tetap bisa berjalan,” paparnya.</p>\r\n</blockquote>\r\n</blockquote>\r\n', 'fe6f0e2158dcfecaf09694d6e1587dd0.jpg', '2022-01-14 00:50:12', '1', '0', '2022-01-13 16:50:12', '2022-01-13 16:50:12'),
(50261843, 33570964, 'Olahraga Pagi', '<p>apalah</p>\r\n', '204599826f17b780330fed867350bc17.jpg', '2021-10-25 07:51:57', '0', '1', '2021-10-24 23:51:57', '2022-01-13 16:34:53'),
(56804532, 33570964, 'Pelulusan ', '<p>2021</p>\r\n', 'b16d6eaa0fd52463a825c787169821d2.jpg', '2021-11-22 21:25:43', '0', '1', '2021-11-22 13:25:43', '2022-01-13 16:35:15'),
(59360215, 33570964, 'Info Penerimaan Siswa Baru ', '<p>Memasuki tahun ajaran baru pendaftaran peserta didik baru akan dimulai pertengahan bulan juni namun bagi sekolah negeri yang memiliki asrama pendaftaran dilakukan tanggal 7 juni 2021. Sistem pendaftaran peserta didik baru tetap melalui daring di laman dinas pendidikan dengan sistem zonasi.</p>\r\n\r\n<p>Dinas pendidikan provinsi sulawesi selatan juga telah bekerja sama dengan 2 dinas lainnya yakni dinas kependudukan dan catatan sipil sulsel dan dinas sosial . Untuk keperluan verifikasi data bagi calon peserta didik. Khususnya dari jalur afirmasi atau keluarga pindahan serta keluarga penerima harapan atau PKH.</p>\r\n\r\n<p>Sementara untuk kuota setiap jalur dibedakan dalam 3 bagian 75 persen untuk jalur zonasi. Afirmasi sebanyak 15 persen dan pkh sebanyak 5 persen. Serta jalur prestasi sebanyak 5 persen.<br>\r\n<br>\r\n#PPDB<br>\r\n#ZONASI<br>\r\n#TAHUNAJARANBARU</p>\r\n', 'b9fa0d94aad4da4a44279f899fd1dad2.jpg', '2021-10-25 07:49:06', '1', '1', '2021-10-24 23:49:06', '2022-01-13 16:35:39'),
(67698243, 67354098, '2 Bulan Terdampak Longsor, SMAN 12 Mappak Belum Digubris Disdik Tana Toraja   Artikel ini telah taya', '<p>Tim Gubernur Untuk Percepatan Pembangunan (TGUPP) bersama Kepala Dinas Pendidikan Provinsi Sulawesi Selatan turun langsung memantau kondisi di Sekolah SMAN 12 <a href=\"https://makassar.tribunnews.com/tag/tana-toraja\">Tana Toraja</a>, Kecamatan <a href=\"https://makassar.tribunnews.com/tag/mappak\">Mappak</a>, Senin (16/9/2019).</p>\r\n\r\n<p>Kunjungan dilakukan setelah mendapatkan laporan bahwa sekolah tersebut terkena bencana <a href=\"https://makassar.tribunnews.com/tag/longsor\">longsor</a>.</p>\r\n\r\n<p>\"Kami rapat hingga tengah malam, hingga memutuskan untuk pergi ke <a href=\"https://makassar.tribunnews.com/tag/mappak\">Mappak</a>, Kabupaten <a href=\"https://makassar.tribunnews.com/tag/tana-toraja\">Tana Toraja</a>,\" ungkap Anggota TGUPP Prof, Dr Syamsul Alam.</p>\r\n\r\n<p>Dia bersama tim, Kepala Dinas Pendidikan Provinsi Sulsel, Drs Asri Sahrun Said, Kabid SMK Dinas Pendidikan, H. Hery Sumiharto, bersama rombongan melakukan kunjungan selama dua hari, 14 hingga 15 September 2019.</p>\r\n\r\n<p>\"Kami mendengar laporan ada sekolah di <a href=\"https://makassar.tribunnews.com/tag/mappak\">Mappak</a> yang sudah dua bulan terkena dampak <a href=\"https://makassar.tribunnews.com/tag/longsor\">longsor</a>,\" kata Prof. Aalm.</p>\r\n\r\n<p>Kunjungan di daerah yang pulsa dan internet tidak ada tersebut dikhususkan di SMA Negeri 12 <a href=\"https://makassar.tribunnews.com/tag/tana-toraja\">Tana Toraja</a>.</p>\r\n\r\n<p>Dikatakan oleh Kepala sekolah SMAN 12 Tator, Drs Sinai, bahwa sudah dua bulan lalu mengusulkan proposal ke dinas pendidikan kabupaten namun belum ada realisasi.</p>\r\n\r\n<p>\"Kami sangat bersyukur karena sekolah kami yang mengalami dampak bencana <a href=\"https://makassar.tribunnews.com/tag/longsor\">longsor</a>, dikunjungi seorang professor dan kepala dinas pendidikan Seulsel,\" ungkap Drs. Sinai.<br>\r\nArtikel ini telah tayang di <a href=\"https:\">Tribun-Timur.com</a> dengan judul 2 Bulan Terdampak Longsor, SMAN 12 Mappak Belum Digubris Disdik Tana Toraja, <a href=\"https://makassar.tribunnews.com/2019/09/16/2-bulan-terdampak-longsor-sman-12-mappak-belum-digubris-disdik-tana-toraja\">https://makassar.tribunnews.com/2019/09/16/2-bulan-terdampak-longsor-sman-12-mappak-belum-digubris-disdik-tana-toraja</a>.<br>\r\nPenulis: Tommy Paseru | Editor: Suryana Anas</p>\r\n\r\n<p> </p>\r\n', 'b0676842c2f124904b7097c14ada625e.jpg', '2021-09-05 10:20:51', '1', '1', '2021-09-05 02:20:51', '2022-01-13 16:36:10'),
(75017349, 33570964, 'Guru Honorer', '<p>hazkaz</p>\r\n', 'de958965b6c0e34d63c237cab569cd47.jpg', '2021-10-24 23:53:31', '0', '1', '2021-10-24 15:53:31', '2022-01-13 16:36:37'),
(81892056, 56159482, 'Tak Hanya Bicara, Anggota Dewan Ini Fasilitas Pengadaan Bibit Pohon untuk SMAN 12 Tana Toraja', '<p>Kondisi tanah di sekitar gedung SMA Negeri 12 Tana Toraja sangat rawan longsor. Saban musim hujan, para siswa dan guru selalu khawatir akan bencana alam tanah longsor.</p>\r\n\r\n<p>Diketahui, sebelumnya lokasi SMAN 12 Tana Toraja dilanda longsor pada tahun 2019 lalu. Sejumlah bangunan sekolah rusak diterjang longsor. Tak hanya itu, longsor juga mengakibatkan rekahan panjang pada bahagian depan dan atas sekolah, yang berpotensi longsor jika diguyur hujan deras.</p>\r\n\r\n<p>Lokasi SMAN 12 Tana Toraja pernah dilanda longsor pada tahun 2019 lalu. Sejumlah bangunan sekolah rusak diterjang longsor. Tak hanya itu, longsor juga mengakibatkan rekahan panjang pada bahagian depan dan atas sekolah, yang berpotensi longsor jika diguyur hujan deras.</p>\r\n\r\n<p><a href=\"https://kareba-toraja.com/provinsi-sulawesi-selatan-bakal-miliki-perda-sistem-pertanian-organik/\" target=\"_blank\">Baca Juga  Provinsi Sulawesi Selatan Bakal Miliki Perda Sistem Pertanian Organik</a></p>\r\n\r\n<p>Longsor terjadi lagi pada Minggu, 16 Mei 2021 malam. Kondisi ini memicu kecemasan pada para siswa dan guru dalam melakukan aktivitas belajar mengajar di sekolah tersebut. Kecemasan berdampak pada terganggunya proses belajar mengajar.</p>\r\n\r\n<p>Menanggapi situasi yang terjadi di sekolah tersebut, anggota Fraksi Golkar DPRD Provinsi Sulawesi Selatan, John Rende Mengontan mengaku kecewa dan geram terhadap lambannya respon dari Dinas Pendidikan Provinsi Sulsel terhadap kondisi di sekolah tersebut.</p>\r\n\r\n<p> </p>\r\n\r\n<p>“Hampir dua tahun lamanya dalam kondisi memprihatinkan, namun hingga kini belum ada tindakan nyata dari Pemprov Sulsel. Ada kesannya terjadi pembiaran, karena kejadian ini sudah dilaporkan oleh pihak Sekolah SMAN 12 ke Dinas Pendidikan Sulsel,” sesal JRM, begitu John Rende Mangontan biasa disapa, dalam keterangan tertulis, Senin, 17 Mei 2021.</p>\r\n\r\n<p><a href=\"https://kareba-toraja.com/ratusan-warga-bittuang-antusias-hadiri-reses-legislator-provinsi-john-mangontan/\" target=\"_blank\">Baca Juga  Ratusan Warga Bittuang Antusias Hadiri Reses Legislator Provinsi, John Mangontan</a></p>\r\n\r\n<p>Sebelumnya, John Rende Mangontan turun langsung meninjau kondisi SMAN 12 ketika melakukan reses di Kecamatan Simbuang dan Mappak, 8 Mei 2021 lalu. Dia sangat menyayangkan kondisi ini. Apalagi, berdasarkan laporan pihak sekolah, Dinas Pendidikan dan TGUPP telah meninjau langsung, tapi belum ada penanganan sama sekali.</p>\r\n\r\n<p>Melihat kondisi sekolah, menurut JRM yang juga Anggota Komisi E berlatar pendidikan tehnik, bahwa diperlukan penanganan matang terhadap longsor, sebab struktur tanahnya sangat labil serta mengandung pasir</p>\r\n\r\n<p> </p>\r\n\r\n<p>Penanganan matang yang ia maksud, yakni rekonstruksi tanah dengan pembuatan talud sistim terasering dan dengan perhitungan konstruksi yang matang, pembangunan atau pembuatan drainase untuk aliran air dan penghijauan disekitar kawasan lokasi sekolah tersebut.</p>\r\n\r\n<p><a href=\"https://kareba-toraja.com/warga-denpina-adukan-pt-nagata-ke-anggota-dprd-sulsel-john-mangontan/\" target=\"_blank\">Baca Juga  Warga Denpina Adukan PT Nagata ke Anggota DPRD Sulsel, John Mangontan</a></p>\r\n\r\n<p>Untuk mewujudkan penghijauan di lokasi sekolah tersebut, Sabtu, 30 Mei 2021, John Mangontan memfasilitasi pengadaan ribuan bibit pohon berbagai jenis untuk kemudian diserahkan kepada Kepala SMAN 12 Tana Toraja, Sinai, dan ditanam di sekitar loksi sekolah.</p>\r\n\r\n<p>Adapun jenis bibit kayu yang diserahkan, diantaranya durian, pete, jati putih, dan beberapa jenis kayu lainnya.</p>\r\n\r\n<p>“Semoga adanya pengadaan bibit pohon ini bisa membantu penghijauan di sekitar lokas SMAN 12 Tana Toraja,  lebih khusus penanganan lokasi yang rusak dampak bencana longsor,” kata JRM</p>\r\n', '85acc95ff978aa302c01fe7560301762.jpg', '2021-09-01 23:10:58', '1', '1', '2021-09-01 15:10:58', '2022-01-13 16:36:52'),
(94820196, 33570964, 'Pemilihan Ketua OSIS Periode 2020/2021', '<p>Dalam rangka memberikan pendidikan demokrasi melalui pengalaman praktis, maka untuk pemilihan ketua OSIS SMA Negeri 2 periode 2020/2021 dilakukan dengan sistem pemungutan suara oleh seluruh warga sekolah secara daring.<br>\r\nPemilihan Ketua OSIS SMA Negeri 12 Tana Toraja dilaksanan pada Sabtu, 10 Oktober 2020. Setelah berakhirnya masa tugas pengurus OSIS periode 2019/2020. Pada kesempatan ini pemilihan ketua OSIS SMA Negeri 12 Tana Toraja dirancang berbeda seperti yang dilaksanakan pada saat pemilihan beberapa waktu lalu.</p>\r\n\r\n<p><br>\r\n            Tahapan-tahapan pemilihan Ketua OSIS dimulai dari pemilihan calon ketua OSIS yang dipilih dari peserta didik kelas X dan XI, yang mempunyai kecakapan dan jiwa kepemimpinan. Para calon ketua OSIS menyampaikan visi dan misi untuk menjelaskan program kerja yang akan dilakukan secara daring pada Web Sekolah.<br>\r\nDiharapkan semua warga sekolah menggunakan hak pilihnya dengan baik, sehingga tidak ada kecurangan. Seluruh warga dapat melakukan pemilihan dengan menggunakan perangkan digital ( HP/Laptop ) dan perhitungan suara dilaksanakan secara realtime Quick Count sehingga hasil dapat langsung diketahui. Pembina OSIS dan panitia pelaksanaan pemilihan ketua OSIS memastikan proses demokrasi di sekolah melalui pemilu ketua OSIS dilakukan secara Luber Jurdil (Langsung, Bersih, Rahasia, Jujur dan Adil).<br>\r\nKegiatan pemilihan Ketua OSIS diharapkan bisa membekali siswa berupa karakter dan kecakapan untuk menjadi warga negara yang baik. Siswa menjadi tahu bagaimana prosedur pemilihan umum yang benar. Pemilihan ketua OSIS dilaksanakan dengan sebaik-baiknya, sportif dan bertanggung jawab serta tidak menimbulkan konflik setelah pelaksanaan pemilihan ketua OSIS.</p>\r\n\r\n<p> </p>\r\n', '5d6a5a5c7f9cb7a43eda0d882cdcf85c.jpg', '2021-09-05 10:07:15', '1', '1', '2021-09-05 02:07:15', '2022-01-13 16:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama`, `ins`, `upd`) VALUES
(14021835, 'Wali Kelas XI IPA', '2021-10-25 00:07:07', '2021-10-25 00:07:07'),
(15836741, 'Wakasek Humas', '2021-10-25 00:04:56', '2021-10-25 00:04:56'),
(21759032, 'Admin Sekolah', '2021-10-25 00:05:14', '2021-10-25 00:05:14'),
(26207349, 'Wali Kelas X IPS', '2021-10-25 00:05:56', '2021-10-25 00:05:56'),
(29425731, 'Wakasek Akademik', '2021-10-25 00:05:36', '2021-10-25 00:05:36'),
(32450381, 'Wali Kelas XI IPS', '2021-10-25 00:06:14', '2021-10-25 00:06:14'),
(47852361, 'Wali Kelas X IPA', '2021-10-25 00:06:54', '2021-10-25 00:06:54'),
(48963741, 'Guru Mapel', '2021-11-22 13:47:07', '2021-11-22 13:47:07'),
(84573619, 'Wali Kelas XII IPA', '2021-11-22 13:37:13', '2021-11-22 13:37:13'),
(84792580, 'Wali Kelas XII IPS', '2021-10-25 00:06:34', '2021-10-25 00:06:34'),
(89234061, 'Wakasek Kesiswaan', '2021-08-30 14:32:49', '2021-10-25 00:04:40'),
(94523017, 'Kepala Sekolah', '2021-08-30 14:32:41', '2021-10-25 00:04:28'),
(94651230, 'Wakasek Akademik', '2021-10-25 00:05:25', '2021-10-25 00:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `nama`, `ins`, `upd`) VALUES
(46427581, 'ss', '2021-09-03 16:16:16', '2021-09-03 16:16:16'),
(69820613, 'adakah', '2021-09-03 16:16:16', '2021-09-03 16:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_rincian`
--

CREATE TABLE `tb_jadwal_rincian` (
  `id_jadwal_rincian` int(11) NOT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_jadwal_rincian`
--

INSERT INTO `tb_jadwal_rincian` (`id_jadwal_rincian`, `id_jadwal`, `id_kelas`, `id_mapel`, `tanggal`, `jam_mulai`, `jam_selesai`) VALUES
(67092156, 46427581, 14738016, 65294610, '2021-09-01', '00:52:00', '00:52:00'),
(79430782, 46427581, 59378061, 65294610, '2021-09-04', '00:01:00', '00:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama`, `ins`, `upd`) VALUES
(33570964, 'Pengumuman', '2021-09-02 16:56:19', '2021-10-24 14:51:04'),
(56159482, 'Berita Terbaru', '2021-09-01 15:00:19', '2021-10-24 14:50:53'),
(67354098, 'Artikel', '2021-08-30 14:36:19', '2021-10-24 14:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama`, `ins`, `upd`) VALUES
(14738016, 'x', '2021-09-03 16:28:58', '2021-09-03 16:28:58'),
(59378061, 'y', '2021-09-03 16:29:04', '2021-09-03 16:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keuangan`
--

CREATE TABLE `tb_keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_keuangan`
--

INSERT INTO `tb_keuangan` (`id_keuangan`, `nama`, `ins`, `upd`) VALUES
(10215387, 'Kegiatan pembelajaran & Ekstrakulikuler', '2021-11-22 11:39:33', '2021-11-22 11:39:33'),
(12398560, 'Belanja Konsumsi Guru  setiap hari', '2021-11-21 11:35:47', '2021-11-21 11:35:47'),
(13460752, 'pengadaan alat multimedia', '2021-11-22 11:41:59', '2021-11-22 11:41:59'),
(17856314, 'Langganan Daya & Jasa', '2021-11-22 11:40:45', '2021-11-22 11:40:45'),
(19307586, 'Belanja LCD', '2021-11-21 11:34:43', '2021-11-21 11:34:43'),
(20769351, 'Belanja Printer', '2021-11-21 11:34:15', '2021-11-21 11:34:15'),
(26952743, 'Belanja ALat Tulis kantor', '2021-11-21 11:33:46', '2021-11-21 11:33:46'),
(31245697, 'Service Komputer', '2021-11-22 11:26:46', '2021-11-22 11:26:46'),
(32058746, 'Belanja ALat Labolatorium', '2021-11-21 11:32:54', '2021-11-21 11:32:54'),
(32570349, 'Belanja Alat Rumah Tangga Kantor', '2021-11-21 11:33:36', '2021-11-21 11:33:36'),
(33729840, 'Pemeliharaan sarana & prasarana sekolah', '2021-11-22 11:41:19', '2021-11-22 11:41:19'),
(34572968, 'Belanja Air', '2021-11-21 11:33:03', '2021-11-21 11:33:03'),
(40936845, 'Konsumsi Rapat', '2021-11-21 11:35:06', '2021-11-21 11:35:06'),
(49105678, 'Pengelolaan Sekolah', '2021-11-22 11:40:18', '2021-11-22 11:40:18'),
(51765834, 'Penerimaan peseta didik baru', '2021-11-22 11:38:46', '2021-11-22 11:38:46'),
(52149750, 'Belanja Listrik', '2021-11-21 11:34:31', '2021-11-21 11:34:31'),
(71402765, 'Belanja ALat Listrik dan elektronik', '2021-11-21 11:33:14', '2021-11-21 11:33:14'),
(81069374, 'Belanja ALat Peraga', '2021-11-21 11:33:24', '2021-11-21 11:33:24'),
(96712859, 'Kegiatan Evaluasi pembelajaran', '2021-11-22 11:40:00', '2021-11-22 11:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keuangan_rincian`
--

CREATE TABLE `tb_keuangan_rincian` (
  `id_keuangan_rincian` int(11) NOT NULL,
  `id_keuangan` int(11) DEFAULT NULL,
  `id_dana` int(11) DEFAULT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci,
  `tanggal` date DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `kredit` int(11) DEFAULT NULL,
  `status_u` enum('d','k') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_keuangan_rincian`
--

INSERT INTO `tb_keuangan_rincian` (`id_keuangan_rincian`, `id_keuangan`, `id_dana`, `keterangan`, `tanggal`, `debit`, `kredit`, `status_u`) VALUES
(10537916, 96712859, 39128764, '-', '2022-03-04', 3000000, NULL, 'd'),
(11905387, 19307586, 96241389, '-', '2021-02-23', NULL, 4000000, 'k'),
(16135097, 26952743, 96241389, '-', '2021-09-10', 5000000, NULL, 'd'),
(16517908, 40936845, 96241389, '-', '2021-08-10', 2000000, NULL, 'd'),
(17941350, 10215387, 39128764, '-', '2022-01-11', NULL, 2000000, 'k'),
(19428370, 12398560, 39128764, '-', '2022-03-13', NULL, 300000, 'k'),
(20192857, 40936845, 96241389, '-', '2021-11-01', 1000000, NULL, 'd'),
(20329674, 10215387, 39128764, '-', '2021-01-02', 50000000, NULL, 'd'),
(21395276, 34572968, 39128764, '-', '2022-01-22', 3000000, NULL, 'd'),
(22140379, 40936845, 39128764, '-', '2022-02-02', NULL, 1200000, 'k'),
(23879546, 51765834, 39128764, '-', '0000-00-00', NULL, 6000000, 'k'),
(25243968, 32570349, 39128764, '-', '2022-06-08', NULL, 7000000, 'k'),
(25432078, 31245697, 96241389, 'apa', '2022-02-03', 15000000, NULL, 'd'),
(32048739, 17856314, 96241389, '-', '2022-04-01', NULL, 3500000, 'k'),
(34367190, 52149750, 96241389, '-', '2021-06-23', NULL, 3500000, 'k'),
(35480271, 31245697, 39128764, 'apa aja', '2002-04-04', 25000000, NULL, 'd'),
(35907684, 81069374, 96241389, '-', '2022-01-03', NULL, 17000000, 'k'),
(41540967, 31245697, 96241389, '-', '2021-12-12', 3000000, NULL, 'd'),
(42940761, 17856314, 39128764, '-', '2021-03-09', 3000000, NULL, 'd'),
(43829504, 10215387, 39128764, '-', '2021-01-05', NULL, 49265000, 'k'),
(45891207, 52149750, 96241389, '-', '2021-06-22', 4000000, NULL, 'd'),
(49456031, 34572968, 96241389, '-', '2021-05-08', 3000000, NULL, 'd'),
(51469587, 32058746, 39128764, '-', '2022-05-05', 50000000, NULL, 'd'),
(55186423, 40936845, 96241389, '-', '2021-11-17', NULL, 900000, 'k'),
(56394821, 33729840, 39128764, '-', '2021-03-09', NULL, 9988800, 'k'),
(57149380, 17856314, 39128764, '-', '2021-03-10', NULL, 3453546, 'k'),
(57409163, 17856314, 96241389, '-', '2022-03-30', 5000000, NULL, 'd'),
(57654082, 34572968, 39128764, '-', '2022-02-03', NULL, 2300000, 'k'),
(58140235, 40936845, 39128764, '-', '2022-01-01', 1000000, NULL, 'd'),
(60165837, 32058746, 39128764, '-', '2002-05-06', NULL, 37000000, 'k'),
(60176243, 71402765, 96241389, '-', '2021-03-24', NULL, 10000000, 'k'),
(61670842, 31245697, 96241389, '-', '2021-12-13', NULL, 2700000, 'k'),
(61936724, 12398560, 39128764, '-', '2022-02-05', NULL, 700000, 'k'),
(62097486, 10215387, 39128764, '-', '2022-01-01', 30000000, NULL, 'd'),
(62501847, 13460752, 39128764, '-', '2022-03-03', 100000000, NULL, 'd'),
(62603158, 19307586, 96241389, '-', '2021-02-21', 7000000, NULL, 'd'),
(64639872, 52149750, 96241389, '-', '2021-10-10', 4000000, NULL, 'd'),
(64659087, 51765834, 39128764, '-', '2021-04-09', 15000000, NULL, 'd'),
(65127649, 32058746, 96241389, '-', '2021-07-22', 20000000, NULL, 'd'),
(66528430, 20769351, 96241389, 'lcd kantor', '2022-03-04', 10000000, NULL, 'd'),
(67296054, 31245697, 96241389, '-', '2022-02-05', NULL, 11000000, 'k'),
(68943075, 33729840, 39128764, '-', '2021-03-03', 10000000, NULL, 'd'),
(71274836, 52149750, 96241389, '-', '2021-10-11', NULL, 3453546, 'k'),
(75190678, 34572968, 96241389, '-', '2021-05-08', NULL, 2700000, 'k'),
(76180523, 12398560, 96241389, '-', '2021-12-22', NULL, 2000000, 'k'),
(76374508, 31245697, 39128764, '-', '2022-04-05', NULL, 20000000, 'k'),
(78140769, 32058746, 96241389, '-', '2021-07-23', NULL, 18000000, 'k'),
(78451972, 20769351, 96241389, '-', '2021-03-22', 5000000, NULL, 'd'),
(78917042, 51765834, 39128764, '-', '2021-04-04', NULL, 14070000, 'k'),
(79423785, 12398560, 39128764, '-', '2022-02-25', NULL, 500000, 'k'),
(80354761, 40936845, 96241389, '-', '2021-08-11', NULL, 1500000, 'k'),
(81732648, 81069374, 96241389, '-', '2022-01-01', 25000000, NULL, 'd'),
(82043716, 13460752, 39128764, '-', '2021-02-08', 25000000, NULL, 'd'),
(82540691, 51765834, 39128764, '-', '2022-04-15', 10000000, NULL, 'd'),
(83107964, 19307586, 96241389, '-', '2022-03-07', NULL, 6700000, 'k'),
(84360275, 26952743, 96241389, 'Buku pulpen', '2021-09-09', NULL, 5000000, 'k'),
(85230674, 96712859, 39128764, '-', '2021-05-06', NULL, 6990000, 'k'),
(86709413, 32570349, 39128764, '-', '2022-06-06', 15000000, NULL, 'd'),
(88243056, 13460752, 39128764, '-', '2022-03-15', NULL, 77000000, 'k'),
(89853764, 13460752, 39128764, '-', '2021-02-04', NULL, 5000000, 'k'),
(90437268, 12398560, 39128764, '-', '2022-02-02', 3000000, NULL, 'd'),
(90872561, 71402765, 96241389, '-', '2021-05-05', 12000000, NULL, 'd'),
(91783504, 81069374, 96241389, '-', '2021-04-04', 1000000, NULL, 'd'),
(92473016, 12398560, 96241389, 'Minuman & Snack', '2021-01-01', 3000000, NULL, 'd'),
(92507863, 96712859, 39128764, '-', '2021-05-05', 7000000, NULL, 'd'),
(96130782, 96712859, 39128764, '-', '2022-03-22', NULL, 700000, 'k');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuisioner`
--

CREATE TABLE `tb_kuisioner` (
  `id_kuisioner` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kuisioner`
--

INSERT INTO `tb_kuisioner` (`id_kuisioner`, `nama`, `ins`, `upd`) VALUES
(27483690, 'Tracer Study', '2021-09-08 12:33:27', '2021-09-08 12:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuisioner_hasil`
--

CREATE TABLE `tb_kuisioner_hasil` (
  `id_kuisioner_hasil` int(11) NOT NULL,
  `id_kuisioner_soal` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kuisioner_hasil`
--

INSERT INTO `tb_kuisioner_hasil` (`id_kuisioner_hasil`, `id_kuisioner_soal`, `id_siswa`, `jawaban`) VALUES
(11472896, 94763025, 15782104, '2'),
(12017436, 89725368, 15782104, '2'),
(12567013, 24386195, 46482507, '4'),
(14510982, 79384051, 34958320, '4'),
(15368791, 30971256, 62139460, '5'),
(15704839, 14028763, 10586732, '3'),
(16043895, 16041582, 34958320, '4'),
(16154738, 79384051, 62139460, '5'),
(16879430, 32189705, 10586732, '5'),
(17024619, 94315928, 26453978, '1'),
(17613850, 32189705, 15782104, '3'),
(19473216, 94315928, 97381269, '3'),
(19516042, 30971256, 97381269, '3'),
(19718205, 79384051, 15782104, '2'),
(20895713, 13612570, 34958320, '5'),
(21589403, 91473629, 97381269, '3'),
(21642735, 94763025, 10586732, '5'),
(22365947, 26815247, 62139460, '5'),
(22436850, 24386195, 34958320, '4'),
(22461398, 24386195, 97381269, '3'),
(22564018, 60415962, 46482507, '4'),
(23041265, 79384051, 97381269, '3'),
(23504291, 94315928, 46482507, '4'),
(24273980, 14028763, 34958320, '2'),
(24695173, 94763025, 26453978, '1'),
(25210749, 14028763, 44103257, '1'),
(25476312, 14028763, 20689435, '3'),
(27284360, 60415962, 15782104, '2'),
(27362598, 30971256, 15782104, '2'),
(30285394, 14028763, 26453978, '2'),
(31496583, 89725368, 97381269, '3'),
(31807653, 60415962, 62139460, '5'),
(32057183, 94763025, 46482507, '4'),
(32516037, 62749853, 15782104, '2'),
(34210897, 16041582, 62139460, '5'),
(34518672, 86725801, 46482507, '4'),
(36059724, 86725801, 97381269, '3'),
(36135078, 94315928, 34958320, '4'),
(37053492, 91473629, 10586732, '5'),
(37863102, 16041582, 10586732, '5'),
(38543617, 44160872, 62139460, '1'),
(38609321, 16041582, 26453978, '1'),
(39875024, 44160872, 46482507, '4'),
(40265781, 94315928, 10586732, '5'),
(40476158, 14028763, 83451697, '1'),
(43257481, 89725368, 26453978, '1'),
(44785109, 30971256, 10586732, '5'),
(46145093, 79384051, 10586732, '5'),
(46405178, 32189705, 34958320, '5'),
(46840953, 79384051, 46482507, '4'),
(49153740, 44160872, 26453978, '5'),
(49654302, 91473629, 15782104, '2'),
(50634752, 89725368, 62139460, '1'),
(51053679, 86725801, 62139460, '5'),
(53921756, 44160872, 34958320, '5'),
(54168723, 26815247, 97381269, '3'),
(54169725, 32189705, 97381269, '4'),
(57109834, 62749853, 97381269, '3'),
(57360254, 14028763, 15782104, '5'),
(57542938, 86725801, 15782104, '2'),
(57863120, 14028763, 62139460, '1'),
(58376052, 91473629, 62139460, '5'),
(58425397, 41046238, 97381269, '3'),
(58509413, 41046238, 34958320, '4'),
(59531270, 41046238, 15782104, '2'),
(59562087, 30971256, 34958320, '4'),
(60134982, 94763025, 34958320, '4'),
(61729850, 16041582, 46482507, '4'),
(61965437, 44160872, 15782104, '2'),
(62671483, 26815247, 15782104, '2'),
(62951840, 86725801, 26453978, '1'),
(64153798, 26815247, 46482507, '4'),
(64807215, 91473629, 46482507, '4'),
(65713628, 32189705, 26453978, '1'),
(65813076, 13612570, 97381269, '3'),
(67140692, 30971256, 46482507, '4'),
(67149068, 60415962, 26453978, '1'),
(67249516, 79384051, 26453978, '1'),
(67643925, 62749853, 62139460, '5'),
(68521769, 60415962, 10586732, '5'),
(69456378, 62749853, 26453978, '1'),
(70452819, 44160872, 97381269, '5'),
(70869453, 13612570, 10586732, '5'),
(71805697, 94315928, 15782104, '2'),
(72013965, 91473629, 34958320, '4'),
(72418360, 86725801, 10586732, '5'),
(73097145, 13612570, 15782104, '2'),
(73250618, 14028763, 97381269, '2'),
(73581974, 32189705, 46482507, '3'),
(73927658, 44160872, 10586732, '5'),
(74128963, 60415962, 34958320, '4'),
(74603571, 13612570, 46482507, '4'),
(74639207, 13612570, 62139460, '1'),
(74952186, 30971256, 26453978, '1'),
(75230974, 41046238, 62139460, '5'),
(75673924, 62749853, 10586732, '5'),
(77436209, 41046238, 26453978, '1'),
(78532974, 24386195, 15782104, '2'),
(78705462, 14028763, 55804961, '5'),
(80163452, 13612570, 26453978, '1'),
(82541698, 91473629, 26453978, '1'),
(84596027, 94315928, 62139460, '5'),
(84752381, 89725368, 10586732, '5'),
(85062371, 26815247, 34958320, '4'),
(85630187, 24386195, 26453978, '1'),
(86497283, 94763025, 97381269, '3'),
(87463905, 24386195, 62139460, '5'),
(88107629, 16041582, 97381269, '3'),
(89514028, 32189705, 62139460, '1'),
(89658731, 94763025, 62139460, '5'),
(89734501, 89725368, 34958320, '5'),
(89785260, 16041582, 15782104, '2'),
(90758193, 14028763, 12804631, '3'),
(93870145, 86725801, 34958320, '4'),
(94601582, 62749853, 46482507, '4'),
(95170296, 41046238, 46482507, '4'),
(96952307, 60415962, 97381269, '3'),
(97316548, 26815247, 26453978, '1'),
(98027491, 62749853, 34958320, '4'),
(98364912, 41046238, 10586732, '5'),
(98367490, 89725368, 46482507, '4'),
(99047358, 24386195, 10586732, '5'),
(99405172, 14028763, 46482507, '1'),
(99630584, 26815247, 10586732, '5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuisioner_soal`
--

CREATE TABLE `tb_kuisioner_soal` (
  `id_kuisioner_soal` int(11) NOT NULL,
  `id_kuisioner` int(11) NOT NULL,
  `soal` text NOT NULL,
  `pil_a` text NOT NULL,
  `pil_b` text NOT NULL,
  `pil_c` text NOT NULL,
  `pil_d` text NOT NULL,
  `pil_e` text NOT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kuisioner_soal`
--

INSERT INTO `tb_kuisioner_soal` (`id_kuisioner_soal`, `id_kuisioner`, `soal`, `pil_a`, `pil_b`, `pil_c`, `pil_d`, `pil_e`, `ins`, `upd`) VALUES
(13612570, 27483690, 'Dari mana Anda mendapatkan informasi tentang Universitas/ Kursus ini?', 'Media Sosial', 'Teman', 'Mahasiswa KKN', 'Dosen', 'Lainnya', '2021-11-22 12:51:24', '2021-11-22 12:51:24'),
(14028763, 27483690, 'Situasi yang menggambarkan Alumni saat ini ', 'Melanjutkan Pendidikan', ' Belum Bekerja', 'Sudah Bekerja', 'sudah Menikah', 'Lainnya', '2021-11-19 14:26:08', '2021-11-19 14:26:08'),
(16041582, 27483690, 'Integritas', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 'Memuaskan', '2021-11-22 12:58:39', '2021-11-22 12:58:39'),
(24386195, 27483690, 'Kemampuan untuk mempresentsikan ide/produk/laporan', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 'Memuaskan', '2021-11-22 12:56:16', '2021-11-22 12:56:16'),
(26815247, 27483690, 'Toleransi', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 'Memuaskan', '2021-11-22 12:59:41', '2021-11-22 12:59:41'),
(30971256, 27483690, 'Inisiatif', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 'Memuaskan', '2021-11-22 12:57:27', '2021-11-22 12:57:27'),
(32189705, 27483690, 'Melalui jalur apa Anda kuliah/kursus di tempat sekarang ?', 'SNMPTN (PMDK)', 'SBMPTN', 'Undangan', 'SNMPTN', ' Lainnya', '2021-11-22 12:49:49', '2021-11-22 12:49:49'),
(41046238, 27483690, 'Kemampuan dalam memegang tanggung jawab', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 'Memuaskan', '2021-11-22 12:55:03', '2021-11-22 12:55:03'),
(44160872, 27483690, 'Melajutkan Pendidikan / Kursus', 'Universitas Negeri', 'Universitas Swasta', 'Sekolah Tinggi ', 'Universitas Luar Negeri', 'Kursus', '2021-11-19 14:56:31', '2021-11-22 12:44:00'),
(60415962, 27483690, 'Kemampuan analisis', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 'Memuaskan', '2021-11-22 12:52:36', '2021-11-22 12:52:36'),
(62749853, 27483690, 'Kepemimpinan', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 'Memuaskan', '2021-11-22 12:58:10', '2021-11-22 12:58:10'),
(79384051, 27483690, 'Kemapuan adaptasi', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 'Memuaskan', '2021-11-22 12:53:09', '2021-11-22 12:53:09'),
(86725801, 27483690, 'Bekerja dengan orang yang berbeda budaya maupun latar belakang', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 'Memuaskan', '2021-11-22 12:54:29', '2021-11-22 12:54:29'),
(89725368, 27483690, 'Fakultas/ Jurusan', 'Kesehatan', 'Komputer', 'Pendidikan ', 'Petanian ', 'Lainnya', '2021-11-19 14:56:46', '2021-11-22 12:45:39'),
(91473629, 27483690, 'Loyalitas', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 'Memuaskan', '2021-11-22 12:59:09', '2021-11-22 12:59:09'),
(94315928, 27483690, 'Kemampuan dalam menulis laporan, memo, dan dokumen', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 'Memuaskan', '2021-11-22 12:56:50', '2021-11-22 12:56:50'),
(94763025, 27483690, 'Manajemen Proyek/Program', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik', 'Memuaskan', '2021-11-22 12:55:39', '2021-11-22 12:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama`, `ins`, `upd`) VALUES
(65294610, 'b', '2021-09-03 16:28:51', '2021-09-03 16:28:51'),
(86192508, 'a', '2021-09-03 16:28:47', '2021-09-03 16:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_organisasi`
--

CREATE TABLE `tb_organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `organisasi` varchar(50) DEFAULT NULL,
  `isi` longtext,
  `gambar` varchar(100) DEFAULT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_organisasi`
--

INSERT INTO `tb_organisasi` (`id_organisasi`, `organisasi`, `isi`, `gambar`, `ins`, `upd`) VALUES
(32391487, 'PRAMUKA', '<p><strong>Pramuka Penegak</strong> adalah anggota muda <a href=\"https://id.wikipedia.org/wiki/Gerakan_Pramuka\">Gerakan Pramuka</a> yang berusia 16 sampai dengan 20 tahun. Secara umum usia tersebut disebut masa sosial atau disebut juga masa remaja awal yaitu masa pencarian jati diri. Penegak dianggap sudah berani meluaskan sayapnya sendiri, membuka lingkaran dunianya lebar-lebar serta mandiri. Maka bentuk upacara pembukaan dan penutupan latihan Penegak ialah berupa barisan yang terbuka dari semua sudut, yakni bersaf satu lurus dimana pemimpin-pemimpin ambalannya berada di sebelah kanan.</p>\r\n', '83151a2b24aafb18a36643c70d42e03a.jpg', '2021-09-13 12:09:30', '2022-01-13 16:32:26'),
(49854706, 'OSIS', '<p><a href=\"https://id.wikipedia.org/wiki/Organisasi\">Organisasi</a> <a href=\"https://id.wikipedia.org/wiki/Siswa\">Siswa</a> Intra <a href=\"https://id.wikipedia.org/wiki/Sekolah\">Sekolah</a> (disingkat OSIS) adalah suatu <a href=\"https://id.wikipedia.org/wiki/Organisasi\">organisasi</a> yang berada di tingkat <a href=\"https://id.wikipedia.org/wiki/Sekolah\">sekolah</a> di <a href=\"https://id.wikipedia.org/wiki/Indonesia\">Indonesia</a> yang dimulai dari <a href=\"https://id.wikipedia.org/wiki/Sekolah_Menengah\">Sekolah Menengah</a> yaitu <a href=\"https://id.wikipedia.org/wiki/Sekolah_Menengah_Pertama\">Sekolah Menengah Pertama</a> (SMP) dan <a href=\"https://id.wikipedia.org/wiki/Sekolah_Menengah_Atas\">Sekolah Menengah Atas</a> (SMA). OSIS diurus oleh guru pembimbing dan dikelola oleh murid-murid yang terpilih untuk menjadi anggota OSIS. Biasanya <a href=\"https://id.wikipedia.org/wiki/Organisasi\">organisasi</a> ini memiliki seorang pembimbing dari <a href=\"https://id.wikipedia.org/wiki/Guru\">guru</a> yang dipilih oleh pihak <a href=\"https://id.wikipedia.org/wiki/Sekolah\">sekolah</a>.</p>\r\n\r\n<p>Anggota OSIS adalah seluruh <a href=\"https://id.wikipedia.org/wiki/Siswa\">siswa</a> yang berada pada satu <a href=\"https://id.wikipedia.org/wiki/Sekolah\">sekolah</a> tempat OSIS itu berada. Seluruh <a href=\"https://id.wikipedia.org/w/index.php?title=Anggota&action=edit&redlink=1\">anggota</a> OSIS berhak untuk memilih calonnya untuk kemudian menjadi pengurus OSIS.</p>\r\n', '4c12109b4f8987a3fe1a40e179a4155e.jpg', '2021-09-13 11:42:01', '2022-01-13 16:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaturan`
--

CREATE TABLE `tb_pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(15) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `youtube` varchar(50) DEFAULT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengaturan`
--

INSERT INTO `tb_pengaturan` (`id_pengaturan`, `logo`, `nama`, `email`, `alamat`, `telepon`, `facebook`, `instagram`, `twitter`, `youtube`, `ins`, `upd`) VALUES
(42517493, '281a7141321aafc526aea09ad15ee7f6.png', 'SMA N 12 TANA TORAJA', 'smansatumappak@yahoo.com', 'Kondodewata, Kec. Mappak, Kab. Tana Toraja, Sulawesi Selatan, Indonesia.', '085299866426', 'asd', 'asd', 'asd', 'asd', '2021-10-24 03:10:54', '2021-10-24 03:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `profil` varchar(50) DEFAULT NULL,
  `isi` longtext,
  `gambar` varchar(100) DEFAULT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `profil`, `isi`, `gambar`, `ins`, `upd`) VALUES
(20756398, 'Visi & Misi', '<h1>VISI</h1>\r\n\r\n<blockquote>\r\n<p>Visi Dinas pendidikan SMA Negeri 12 Tana Toraja  “Menjadikan SMA Negeri 12 Tana Toraja kompetitif, berbudipekerti luhur sesuai dengan budaya lokal..”</p>\r\n</blockquote>\r\n\r\n<h1>MISI</h1>\r\n\r\n<blockquote>\r\n<ul>\r\n <li>Menciptakan lingkungan pembelajaran yang kondusif dalam upaya meningkatkan mutu pembelajaran.</li>\r\n <li>Menumbuh kembngkan semangat keunggulan dan bernalar sehat kepada para peserta didik, guru dan karyawan sehingga berkemauan kuat terus maju.</li>\r\n <li>Meningkatkan komitmen seluruh tenaga kependidikan terhadap tugas pokok dan fungsinya.</li>\r\n <li>Mengembangkan teknologi informasidan kumunikasi dalam pembelajaran dan administrasi sekolah.</li>\r\n</ul>\r\n</blockquote>\r\n\r\n<h1>Tujuan</h1>\r\n\r\n<blockquote>\r\n<ul>\r\n <li>Tujuan sekolah sebagai bagian dari tujuan pendidikan nasional adalah meningkatkan kecerdasan,kepribadian akhlak mulia,serta keterampilan untuk hidup lebih mandiri.</li>\r\n</ul>\r\n</blockquote>\r\n', '8ca7cf44ee322f32359762e15ac1fc63.png', '2021-09-13 12:18:20', '2021-10-24 14:47:19'),
(20978463, 'Struktur Organisasi', '<table>\r\n <tbody>\r\n  <tr>\r\n   <td colspan=\"2\">\r\n   <p><strong>Dewan Pembina</strong></p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>Komite Sekolah </td>\r\n   <td>: Yohanis Bongga S.Pd</td>\r\n  </tr>\r\n  <tr>\r\n   <td>Kepala Sekolah</td>\r\n   <td>: Drs. Sinai</td>\r\n  </tr>\r\n  <tr>\r\n   <td>Kepala Tata Usaha</td>\r\n   <td>: Benyamin Belo A.ma Kom</td>\r\n  </tr>\r\n  <tr>\r\n   <td colspan=\"2\">\r\n   <p> </p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>Wakasek Akademik</td>\r\n   <td>: Nataniel Tanngi S.Pd</td>\r\n  </tr>\r\n  <tr>\r\n   <td>Wakasek Kesiswaan</td>\r\n   <td>: Jhon Basok S.pd</td>\r\n  </tr>\r\n  <tr>\r\n   <td>Wakasek Saspras</td>\r\n   <td>: Suleman Sarrang S.Th S.Pd</td>\r\n  </tr>\r\n  <tr>\r\n   <td>Wakasek Humas</td>\r\n   <td>: Bongga Senga, S.Pd</td>\r\n  </tr>\r\n  <tr>\r\n   <td colspan=\"2\">\r\n   <p><strong>Wali Kelas</strong></p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>WALI KELAS X IPS</td>\r\n   <td>: ALFIUS ABI S.Pd</td>\r\n  </tr>\r\n  <tr>\r\n   <td>WALI KELAS X IPA</td>\r\n   <td>:YULIANA MAROA’ S.E</td>\r\n  </tr>\r\n  <tr>\r\n   <td>WALI KELAS XI IPS</td>\r\n   <td>: DAMARIS KUASA S.Pd</td>\r\n  </tr>\r\n  <tr>\r\n   <td>WALI KELAS XI IPA</td>\r\n   <td>: ARNOLDUS NUSLIN S.E</td>\r\n  </tr>\r\n  <tr>\r\n   <td>WALI KELAS XII IPS</td>\r\n   <td>: PODON S.Pd</td>\r\n  </tr>\r\n  <tr>\r\n   <td>WALI KELAS XII IPA</td>\r\n   <td>: JVINSENSIA ERNAWATI S.Pd</td>\r\n  </tr>\r\n  <tr>\r\n   <td colspan=\"2\"> </td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n\r\n<table>\r\n <tbody>\r\n  <tr>\r\n   <td colspan=\"2\">\r\n   <p><strong>Romongan Kelas</strong></p>\r\n   </td>\r\n  </tr>\r\n  <tr>\r\n   <td>KELAS X IPS</td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td>KELAS X IPA</td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td>KELAS XI IPS</td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td>KELAS XI IPA</td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td>KELAS XII IPS</td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td colspan=\"2\">\r\n   <p>KELAS XII IPA</p>\r\n   </td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n', 'ee58cd50f8595743e397e14e7bf38284.png', '2021-09-13 12:19:33', '2022-01-13 16:33:32'),
(32391487, 'Kurikulum', '<h1>STRUKTUR DAN MUATAN KURIKULUM</h1>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"STRUKTUR DAN MUATAN KURIKULUM\" src=\"https://sman12berau.sch.id/wp-content/uploads/2020/09/4097.jpg\"></p>\r\n\r\n<p>Struktur Kurikulum SMA Negeri 12 Tana Toraja mulai dari Kompetensi Inti (KI), Mata Pelajaran, Beban Belajar dan Kompetensi Dasar.</p>\r\n\r\n<p>Pelaksanaan Kurikulum 2013 untuk SMA ini didasarkan pada Peraturan Menteri Pendidikan dan Kebudayaan Nomor 36 Tahun 2018 tentang Perubahan Atas Peraturan Menteri Pendidikan dan Kebudayaan Nomor 59 Tahun 2014 tentang Kurikulum 2013 SMA/MA.</p>\r\n\r\n<h2><strong>Kompetensi Inti</strong></h2>\r\n\r\n<p>Kompetensi Inti (KI) SMA/MA merupakan tingkat kemampuan untuk mencapai Standar Kompetensi Lulusan (SKL) yang harus dimiliki seorang peserta didik SMA pada setiap tingkat kelas. Kompetensi Inti dirancang untuk setiap kelas. Melalui kompetensi inti, sinkronisasi horisontal berbagai kompetensi dasar antar mata pelajaran pada kelas yang sama dapat dijaga. Selain itu, sinkronisasi vertikal berbagai kompetensi dasar pada mata pelajaran yang sama pada kelas yang berbeda dapat dijaga pula.</p>\r\n\r\n<p>Rumusan Kompetensi Inti menggunakan notasi sebagai berikut :</p>\r\n\r\n<ol>\r\n <li>Kompetensi Inti-1 (KI-1) untuk Kompetensi Inti Sikap Spritual,</li>\r\n <li>Kompetensi Inti-2 (KI-2) untuk Kompetensi Inti Sikap Sosial,</li>\r\n <li>Kompetensi Inti-3 (KI-3) untuk Kompetensi Inti Pengetahuan, dan</li>\r\n <li>Kompetensi Inti-4 (KI-4) untuk Kompetensi Inti Keterampilan.</li>\r\n</ol>\r\n\r\n<p>Uraian tentang Kompetensi Inti (KI) untuk SMA Negeri 12 Berau dapat dilihat pada tabel dibawah ini :</p>\r\n\r\n<table>\r\n <thead>\r\n  <tr>\r\n   <th colspan=\"1\" rowspan=\"1\"> </th>\r\n   <th colspan=\"1\" rowspan=\"1\"> </th>\r\n   <th colspan=\"1\" rowspan=\"1\"> </th>\r\n   <th colspan=\"1\" rowspan=\"1\"> </th>\r\n  </tr>\r\n </thead>\r\n <tbody>\r\n  <tr>\r\n   <td rowspan=\"2\">NO</td>\r\n   <td colspan=\"3\">Kompetensi Inti (KI)</td>\r\n  </tr>\r\n  <tr>\r\n   <td>Kelas X</td>\r\n   <td>Kelas XI</td>\r\n   <td>Kelas XII</td>\r\n  </tr>\r\n  <tr>\r\n   <td>1</td>\r\n   <td>Menghayati dan mengamalkan ajaran agama yang dianutnya</td>\r\n   <td>Menghayati dan mengamalkan ajaran agama yang dianutnya</td>\r\n   <td>Menghayati dan mengamalkan ajaran agama yang dianutnya</td>\r\n  </tr>\r\n  <tr>\r\n   <td>2</td>\r\n   <td>Menghayati dan mengamalkan prilaku jujur, disiplin, bertanggung jawab, peduli (gotong-royong, kerjasama, toleran, damai), santun, responsif dan pro-aktif dan menunjukkan sikap sebagai bagian dari solusi atas permasalahan dalam berinteraksi secara efektif dengan lingkungan sosial dan alam serta dalam menempatkan diri sebagai cerminan bangsa dalam pergaulan dunia</td>\r\n   <td>Menghayati dan mengamalkan prilaku jujur, disiplin, bertanggung jawab, peduli (gotong-royong, kerjasama, toleran, damai), santun, responsif dan pro-aktif dan menunjukkan sikap sebagai bagian dari solusi atas permasalahan dalam berinteraksi secara efektif dengan lingkungan sosial dan alam serta dalam menempatkan diri sebagai cerminan bangsa dalam pergaulan dunia</td>\r\n   <td>Menghayati dan mengamalkan prilaku jujur, disiplin, bertanggung jawab, peduli (gotong-royong, kerjasama, toleran, damai), santun, responsif dan pro-aktif dan menunjukkan sikap sebagai bagian dari solusi atas permasalahan dalam berinteraksi secara efektif dengan lingkungan sosial dan alam serta dalam menempatkan diri sebagai cerminan bangsa dalam pergaulan dunia</td>\r\n  </tr>\r\n  <tr>\r\n   <td>3</td>\r\n   <td>Memahami, menerapkan, menganalisis pengetahuan faktual, konseptual, prosedural berdasarkan rasa ingin tahunya tentang ilmu pengetahuan, teknologi, seni, budaya, dan humaniora dengan wawasan kemanusiaan, kebangsaan, kenegaraan, dan peradaban terkait penyebab fenomena dan kejadian, serta menerapkan pengetahuan prosedural pada bidang kajian yang spesifik sesuai dengan bakat dan minatnya untuk memecahkan masalah</td>\r\n   <td>Memahami, menerapkan, menganalisis pengetahuan faktual, konseptual, prosedural, dan metakognitif berdasarkan rasa ingin tahunya tentang ilmu pengetahuan, teknologi, seni, budaya, dan humaniora dengan wawasan kemanusiaan, kebangsaan, kenegaraan, dan peradaban terkait penyebab fenomena dan kejadian, serta menerapkan pengetahuan prosedural pada bidang kajian yang spesifik sesuai dengan bakat dan minatnya untuk memecahkan masalah</td>\r\n   <td>Memahami, menerapkan, menganalisis, dan mengevaluasi pengetahuan faktual, konseptual, prosedural, dan metakognitif berdasarkan rasa ingin tahunya tentang ilmu pengetahuan, teknologi, seni, budaya, dan humaniora dengan wawasan kemanusiaan, kebangsaan, kenegaraan, dan peradaban terkait penyebab fenomena dan kejadian, serta menerapkan pengetahuan prosedural pada bidang kajian yang spesifik sesuai dengan bakat dan minatnya untuk memecahkan masalah</td>\r\n  </tr>\r\n  <tr>\r\n   <td>4</td>\r\n   <td>Mengolah, menalar, dan menyaji dalam ranah konkrit dan ranah abstrak terkait dengan pengembangan dari yang dipelajarinya di sekolah secara mandiri, dan mampu menggunakan metoda sesuai kaidah keilmuan</td>\r\n   <td>Mengolah, menalar, dan menyaji dalam ranah konkrit dan ranah abstrak terkait dengan pengembangan dari yang dipelajarinya di sekolah secara mandiri, bertindak secara efektif dan kreatif serta mampu menggunakan metoda sesuai kaidah keilmuan</td>\r\n   <td>Mengolah, menalar, menyaji, dan mencipta dalam ranah konkrit dan ranah abstrak terkait dengan pengembangan dari yang dipelajarinya di sekolah secara mandiri, serta bertindak secara efektif dan kreatif, dan mampu menggunakan metoda sesuai kaidah keilmuan</td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n\r\n<h2><strong>Mata Pelajaran</strong></h2>\r\n\r\n<p>Struktur Kurikulum SMA/MA terdiri atas :</p>\r\n\r\n<ul>\r\n <li>Mata Pelajaran Umum Kelompok A,</li>\r\n <li>Mata Pelajaran Umum Kelompok B, dan</li>\r\n <li>Mata Pelajaran Peminatan Akademik Kelompok C.</li>\r\n</ul>\r\n\r\n<p>Untuk Mata Pelajaran Peminatan Akademik Kelompok C dikelompokkan lagi atas mata pelajaran peminatan :</p>\r\n\r\n<ul>\r\n <li>Matematika dan Ilmu Pengetahuan Alam,</li>\r\n <li>Ilmu Pengetahuan Sosial,</li>\r\n <li>Bahasa dan Budaya</li>\r\n</ul>\r\n\r\n<p><strong>Mata Pelajaran Peminatan </strong><strong>dan Lintas Minat</strong></p>\r\n\r\n<p><strong>SMA Negeri 12 Berau</strong></p>\r\n\r\n<table>\r\n <thead>\r\n  <tr>\r\n   <th colspan=\"1\" rowspan=\"1\"> </th>\r\n   <th colspan=\"1\" rowspan=\"1\"> </th>\r\n   <th colspan=\"1\" rowspan=\"1\"> </th>\r\n   <th colspan=\"1\" rowspan=\"1\"> </th>\r\n   <th colspan=\"1\" rowspan=\"1\"> </th>\r\n  </tr>\r\n </thead>\r\n <tbody>\r\n  <tr>\r\n   <td rowspan=\"2\">NO</td>\r\n   <td rowspan=\"2\">Mata Pelajaran</td>\r\n   <td colspan=\"3\">Alokasi Waktu Per Minggu</td>\r\n  </tr>\r\n  <tr>\r\n   <td>Kelas X</td>\r\n   <td>Kelas XI</td>\r\n   <td>Kelas XII</td>\r\n  </tr>\r\n  <tr>\r\n   <td>I</td>\r\n   <td>Kelompok A (Umum)</td>\r\n   <td> </td>\r\n   <td> </td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>1. Pendidikan Agama dan Budi Pekerti</td>\r\n   <td>3</td>\r\n   <td>3</td>\r\n   <td>3</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>2. Pendidikan Pancasila dan Kewarganegaraan</td>\r\n   <td>2</td>\r\n   <td>2</td>\r\n   <td>2</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>3. Bahasa Indonesia</td>\r\n   <td>4</td>\r\n   <td>4</td>\r\n   <td>4</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>4. Matematika</td>\r\n   <td>4</td>\r\n   <td>4</td>\r\n   <td>4</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>5. Sejarah Indonesia</td>\r\n   <td>2</td>\r\n   <td>2</td>\r\n   <td>2</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>6. Bahasa Inggris</td>\r\n   <td>2</td>\r\n   <td>2</td>\r\n   <td>2</td>\r\n  </tr>\r\n  <tr>\r\n   <td>II</td>\r\n   <td>Kelompok B (Umum)</td>\r\n   <td> </td>\r\n   <td> </td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>7. Seni Budaya</td>\r\n   <td>2</td>\r\n   <td>2</td>\r\n   <td>2</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>8. Pendidikan Jasmani, Olahraga dan Kesehatan</td>\r\n   <td>3</td>\r\n   <td>3</td>\r\n   <td>3</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>9. Prakarya dan Kewirausahaan</td>\r\n   <td>2</td>\r\n   <td>2</td>\r\n   <td>2</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Jumlah jam pelajaran kelompok A dan B</td>\r\n   <td>24</td>\r\n   <td>24</td>\r\n   <td>24</td>\r\n  </tr>\r\n  <tr>\r\n   <td>III</td>\r\n   <td>Kelompok C (Peminatan Matematika dan Ilmu Pengetahuan Alam)</td>\r\n   <td> </td>\r\n   <td> </td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>a. Matematika</td>\r\n   <td>3</td>\r\n   <td>4</td>\r\n   <td>4</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>b. Biologi</td>\r\n   <td>3</td>\r\n   <td>4</td>\r\n   <td>4</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>c. Fisika</td>\r\n   <td>3</td>\r\n   <td>4</td>\r\n   <td>4</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>d. Kimia</td>\r\n   <td>3</td>\r\n   <td>4</td>\r\n   <td>4</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Peminatan Ilmu Pengetahuan Sosial</td>\r\n   <td> </td>\r\n   <td> </td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>a. Geografi</td>\r\n   <td>3</td>\r\n   <td>4</td>\r\n   <td>4</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>b. Sejarah</td>\r\n   <td>3</td>\r\n   <td>4</td>\r\n   <td>4</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>c. Sosiologi</td>\r\n   <td>3</td>\r\n   <td>4</td>\r\n   <td>4</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>d. Ekonomi</td>\r\n   <td>3</td>\r\n   <td>4</td>\r\n   <td>4</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Lintas Minat</td>\r\n   <td> </td>\r\n   <td> </td>\r\n   <td> </td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>a. Fisika</td>\r\n   <td>-</td>\r\n   <td>4</td>\r\n   <td>-</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>b. Biologi</td>\r\n   <td>-</td>\r\n   <td>-</td>\r\n   <td>4</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>c. Kimia</td>\r\n   <td>3</td>\r\n   <td>-</td>\r\n   <td>-</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>d. Bahasa Inggris</td>\r\n   <td>3</td>\r\n   <td>-</td>\r\n   <td>-</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Jumlah Jam Pelajaran Kelompok A, B, dan C per minggu</td>\r\n   <td>42</td>\r\n   <td>44</td>\r\n   <td>44</td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n\r\n<h2>Beban Belajar</h2>\r\n\r\n<p>Beban belajar merupakan keseluruhan kegiatan yang harus diikuti peserta didik dalam satu minggu, satu semester, dan satu tahun pembelajaran.</p>\r\n\r\n<p>1. Beban belajar di SMA/MA dinyatakan dalam jam pelajaran per minggu.<br>\r\na. Beban belajar satu minggu Kelas X adalah minimal 42 jam pelajaran.<br>\r\nb. Beban belajar satu minggu Kelas XI dan XII adalah minimal 44 jam pelajaran.</p>\r\n\r\n<p>2. Beban belajar di Kelas X dan XI dalam satu semester minimal 18 minggu.<br>\r\n3. Beban belajar di kelas XII pada semester ganjil minimal 18 minggu<br>\r\n4. Beban belajar di kelas XII pada semester genap minimal 14 minggu.</p>\r\n\r\n<h2><strong>Kegiatan Pengembangan Diri</strong></h2>\r\n\r\n<p>Pengembangan diri merupakan kegiatan pendidikan di luar mata pelajaran sebagai  bagian integral dari kurikulum sekolah. Kegiatan pengembangan diri dilakukan melalui kegiatan pelayanan konseling  berkenaan dengan masalah diri pribadi dan kehidupan sosial, kegiatan belajar, dan pengembangan karir peserta didik, serta kegiatan ekstra kurikuler. Kegiatan pengembangan diri difasilitasi/dilaksanakan oleh konselor, dan kegiatan ekstra kurikuler dapat diselenggarakan oleh konselor, guru dan atau tenaga kependidikan lain sesuai dengan kemampuan dan kewenangannya. Pengembangan diri yang dilakukan dalam bentuk kegiatan pelayanan konseling dan kegiatan ekstra kurikuler dapat megembangkan kompetensi dan kebiasaan dalam kehidupan sehari-hari peserta didik.</p>\r\n\r\n<p>Pengembangan diri bertujuan memberikan kesempatan kepada peserta didik untuk mengembangkan dan mengekspresikan diri sesuai dengan kebutuhan, potensi, bakat,  minat, kondisi dan perkembangan peserta didik dengan memperhatikan kondisi sekolah.</p>\r\n\r\n<p>Pengembangan diri bertujuan menunjang pendidikan peserta didik dalam mengembangkan:</p>\r\n\r\n<p>a. Bakat</p>\r\n\r\n<p>b. Minat</p>\r\n\r\n<p>c. Kreativitas</p>\r\n\r\n<p>d. Kompetensi dan kebiasaan dalam kehidupan</p>\r\n\r\n<p>e. Kemandirian</p>\r\n\r\n<p>f. Kemampuan kehidupan keagamaan</p>\r\n\r\n<p>g. Kemampuan sosial</p>\r\n\r\n<p>h. Kemampuan belajar</p>\r\n\r\n<p>i. Wawasan dan perencanaan karir</p>\r\n\r\n<p>j. Kemampuan pemecahan masalah</p>\r\n\r\n<h2><strong>Pengembangan diri meliputi dua komponen:</strong></h2>\r\n\r\n<p><strong>1. Pelayanan konseling, meliputi :</strong></p>\r\n\r\n<p>a. kehidupan pribadi</p>\r\n\r\n<p>b. kemampuan sosial</p>\r\n\r\n<p>c. kemampuan belajar</p>\r\n\r\n<p>d. wawasan dan perencanaan karir</p>\r\n\r\n<p><strong>2. Ekstra kurikuler</strong></p>\r\n\r\n<p>a. kepramukaan</p>\r\n\r\n<p>b. latihan kepemimpinan, ilmiah remaja, palang merah remaja</p>\r\n\r\n<p>c. seni, olahraga, cinta alam</p>\r\n\r\n<p>d. keagamaan</p>\r\n\r\n<p>Pendidikan sebagai aset bangsa sudah selayaknya mendapat perhatian dan diutamakan oleh semua pihak sebab investasi di bidang ilmu pengetahuan akan membawa kemajuan bangsa di masa yang akan datang.</p>\r\n', '8b33bbeba40356f099386f05109e3cd5.png', '2021-09-13 12:09:30', '2021-10-24 14:45:37'),
(49854706, 'Sejarah', '<p>Untuk meningkatkan layanan pendidikan kepada masyarakat kecamatan Mappak kabupaten Tana Toraja provinsi Sulawesi Selatan, maka masyarakat dan seluruh tokoh pendidikan serta pemangku kepentingan kependidikan mengadakan rapat pada awal tahun pelajaran 2009 dengan tema “ Menyamakan Persepsi Menyatukan Sikap Merespon Eluang Berdirinya SMA Negeri Di Kecamatan Mappak “ hasil rapat menyepakati untuk segera membentuk panitia pembukaan SMA tersebut dengan memberikan kepercayaan kepada Drs. Sinai sebagai ketua.</p>\r\n\r\n<p>Setelah melewati berbagai proses maka SMA Negeri di buka di kecamatan Mappak dengan nama SMA Negeri 1 Mappak dan kepala sekolah terpilih Drs. Sinai . Pada tahun 2018 SMA Negeri 1 Mappak berubah nama menjadi SMA Negeri 12 Tana Toraja.</p>\r\n\r\n<p>Sampai saat ini SMA Negeri 12 Tana Toraja telah berdiri selama 10 tahun namun masih jauh dari harapan karena tenaga guru dan stafnya masih dominan suskrela, demikian juga sara dan prasaran masih dibawah standar nasional hal ini membuat SMA Negeri 12 Tana Toraja saat ini bestatus sekolah 3T (Terdepan Teluar dan Terpencil).</p>\r\n', '0c92e1920429bdc7374f0abdfe081be0.jpg', '2021-09-13 11:42:01', '2022-01-13 16:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `id_agama` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `tmp_lahir` varchar(200) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `ortu_wali` varchar(200) DEFAULT NULL,
  `kelamin` enum('L','P') DEFAULT NULL,
  `alamat` text,
  `thn_lulus` int(11) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `ins` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `id_users`, `id_agama`, `id_kelas`, `nis`, `tmp_lahir`, `tgl_lahir`, `ortu_wali`, `kelamin`, `alamat`, `thn_lulus`, `status`, `ins`, `upd`) VALUES
(10586732, 79530817, 30768534, NULL, '0025117062', 'Leppan', '2002-05-20', 'Yunus', 'L', 'Leppan', 2022, '1', '2021-10-25 02:38:11', '2022-01-13 14:00:59'),
(11873504, 21928604, 30591263, NULL, '0035332735', 'Sarambu', '2003-03-19', 'Makdika', 'L', 'Sarambu', NULL, '0', '2021-11-23 11:45:32', '2021-11-23 11:45:32'),
(12309681, 85143067, 74932685, NULL, '0056352389', 'Kondodewata', '2005-10-04', 'Suriasi S.E', 'P', 'Kondodewata', NULL, '0', '2021-11-23 11:29:36', '2021-11-23 11:29:36'),
(12804631, 77038524, 30591263, NULL, '201702', 'Gowa', '1999-02-02', 'Lukas Sion', 'L', 'Salutallang', 2021, '1', '2021-10-24 14:24:16', '2021-10-25 02:48:10'),
(15190368, 13475291, 30591263, NULL, '0058098330', 'Buangin', '2005-06-30', 'pelipus', 'P', 'Buangin\r\n', NULL, '0', '2022-01-13 13:47:11', '2022-01-13 13:47:11'),
(15309764, 75872469, 30768534, NULL, '0076579475', 'Tondok Buttu', '2005-12-07', 'Pataloan', 'P', 'Tondok Buttu\r\n', NULL, '0', '2022-01-13 13:13:38', '2022-01-13 13:13:38'),
(15782104, 66401378, 30768534, NULL, '0024445972', 'Buttu Kallan', '2002-06-29', 'Kamisik', 'L', 'Buttu Kallan', 2022, '1', '2021-10-25 02:43:32', '2022-01-13 14:01:22'),
(16513027, 90153928, 30591263, NULL, '0064243151', 'Lullungan', '2006-05-04', 'Satia Tammu', 'P', 'Lullungan\r\n', NULL, '0', '2022-01-13 13:18:36', '2022-01-13 13:18:36'),
(17134890, 72693578, 74932685, 59378061, '0040650144', 'Tandungan', '2004-04-28', 'Delita', 'P', 'Tandungan', NULL, '0', '2021-10-25 02:31:55', '2022-02-12 03:13:49'),
(18207519, 89637012, 74932685, NULL, '0041169961', 'Pirri\'', '2004-08-12', 'Siang', 'P', 'Buttu', NULL, '0', '2021-11-23 11:27:24', '2021-11-23 11:27:24'),
(18209435, 33245789, 30591263, NULL, '0046661651', 'Barumbun', '2004-04-28', 'Ruak', 'P', 'Barumbun', NULL, '0', '2021-11-23 11:25:09', '2021-11-23 11:25:09'),
(18621437, 28035672, 30591263, 59378061, '0031431089', 'Tondok Bangak', '2003-04-08', 'Sinei', 'P', 'TOndok Bangak', NULL, '0', '2021-10-25 02:51:28', '2022-02-12 03:14:13'),
(19078265, 78540796, 74932685, NULL, '0048995272', 'Salutallang', '2004-04-16', 'Uli', 'P', 'Salutallang', NULL, '0', '2021-11-22 14:03:48', '2021-11-22 14:03:48'),
(19365782, 70153426, 74932685, NULL, '0048394962', 'Sima', '2004-04-23', 'Besse\'', 'L', '0048394962\r\n', NULL, '0', '2022-01-13 13:41:00', '2022-01-13 13:41:00'),
(19541320, 39078452, 74932685, NULL, '0047646981', 'Tanete', '2004-09-17', 'Sippan', 'L', 'Tanete\r\n', NULL, '0', '2022-01-13 13:23:55', '2022-01-13 13:23:55'),
(19865024, 87041968, 30591263, NULL, '0022167694', 'Pirri\'', '2003-06-09', 'Oran', 'L', 'PIRRIK', 2022, '1', '2021-11-23 11:31:07', '2022-01-13 14:00:21'),
(20576982, 82847365, 30591263, NULL, '0044263868', 'Salutallang', '2003-05-06', 'Rombe linggi\'', 'P', 'Salutallang', NULL, '0', '2021-12-26 14:08:24', '2021-12-26 14:08:24'),
(20689435, 21239758, 30768534, NULL, '21804', 'Kappuan', '2002-09-09', 'Anton', 'P', 'Kappuan', 2021, '1', '2021-10-25 02:53:35', '2021-10-25 02:56:42'),
(21280794, 14015928, 74932685, NULL, '0040430667', 'SALUTALLANG', '2004-03-30', 'TONANG', 'L', 'SALUTALLANG\r\n', NULL, '0', '2022-01-13 13:33:11', '2022-01-13 13:33:11'),
(22639870, 36942850, 74932685, NULL, '0073853044', 'Tokeran', '2004-03-13', 'Oran', 'P', 'tokeran ', NULL, '0', '2021-11-22 14:15:30', '2021-11-22 14:15:30'),
(23680427, 77540921, 30591263, NULL, '0035332746', 'Barumbun', '2002-11-01', 'Lomben', 'L', 'Barumbun', 2022, '1', '2021-11-23 11:21:44', '2022-01-13 14:03:59'),
(24095867, 13920781, 74932685, NULL, '0025117056', 'Kondodewata', '2002-11-11', 'Kamase', 'L', 'Kondodewata', 2022, '1', '2021-11-22 14:33:47', '2022-01-13 14:03:08'),
(24810675, 98469257, 74932685, NULL, '0018127701', 'Lullungan', '2001-11-06', 'Mallun', 'L', 'Lullungan', 2022, '1', '2021-11-23 11:26:19', '2022-01-13 14:03:46'),
(25706243, 30295471, 74932685, NULL, '0018271188', 'Lullungan', '2001-09-06', 'RARRU', 'P', 'Lullungan\r\n', NULL, '0', '2022-01-13 13:35:07', '2022-01-13 13:35:07'),
(25821409, 52136074, 30768534, NULL, '0062575625', 'Tallang', '2005-05-11', 'Sussa', 'L', 'Tallang\r\n', NULL, '0', '2022-01-13 13:36:08', '2022-01-13 13:36:08'),
(26453978, 67924031, 30591263, NULL, '0021703983', 'irak', '2002-01-11', 'Sesa', 'P', 'irak', 2022, '1', '2021-11-22 14:06:32', '2022-01-13 14:01:41'),
(26913452, 10647128, 74932685, 14738016, '0025567508', 'Tokeran', '2004-12-04', 'Lukas', 'P', 'Tokeran', NULL, '0', '2021-10-25 02:35:36', '2022-02-12 03:13:54'),
(27856132, 61734958, 30768534, NULL, '0072681180', 'Makassar', '2005-12-07', 'Pataloan', 'P', 'Tondok Buttu', NULL, '0', '2022-01-13 13:15:22', '2022-01-13 13:15:22'),
(29425078, 70647295, 30768534, NULL, '0032734043', 'Mappak', '2003-12-12', 'Malan', 'L', 'Mappak', NULL, '0', '2021-11-23 11:28:37', '2021-11-23 11:28:37'),
(29507418, 20672958, 30768534, NULL, '0048458158', 'popo\'', '2004-10-24', 'Nilam', 'P', 'popok', NULL, '0', '2021-11-23 11:42:22', '2021-11-23 11:42:22'),
(29605834, 19436251, 74932685, NULL, '0031770998', 'Salutallang', '2003-05-24', 'Yuli sattu', 'P', 'Salutallang', NULL, '0', '2021-12-26 13:57:46', '2021-12-26 13:57:46'),
(30379416, 75907238, 30768534, NULL, '0005848512', 'irak', '2000-10-20', 'Rande', 'L', 'Irak', 2022, '1', '2021-11-23 11:34:59', '2022-01-13 14:05:06'),
(30453627, 16932058, 74932685, NULL, '0004211930', 'Tokeran', '2001-07-06', 'Salle', 'L', 'Tokeran', 2022, '1', '2021-11-22 14:26:00', '2022-01-13 14:02:21'),
(33124867, 11690857, 74932685, NULL, '0032734595', 'Leppangan', '2003-02-03', 'yohanis sattu', 'L', 'Leppangan', NULL, '0', '2021-11-22 14:11:06', '2021-11-22 14:11:06'),
(33245718, 86358291, 30768534, NULL, '0078110469', 'Tallang', '2002-02-08', 'ono', 'P', '\r\nTallang', NULL, '0', '2022-01-13 13:45:18', '2022-01-13 13:45:18'),
(33491827, 59830756, 74932685, NULL, '0047183861', 'Tokeran', '2004-05-19', 'Kamali\'', 'P', 'Tokeran', NULL, '0', '2021-11-22 14:05:11', '2021-11-22 14:05:11'),
(34958320, 56502731, 30768534, NULL, '201701', 'Toraja', '2000-10-23', 'Miranti', 'P', 'Makassar', 2021, '1', '2021-10-23 13:04:36', '2021-10-24 14:23:03'),
(36438109, 99786415, 30768534, 14738016, '0032142726', 'Ratte', '2003-08-06', 'Bandolan', 'P', 'Ratte', NULL, '0', '2021-10-25 02:41:13', '2022-02-12 03:13:59'),
(37259486, 90254687, 74932685, NULL, '0059287814', 'Kondodewata', '2005-03-29', 'Saleo', 'P', 'Kondodewata\r\n', NULL, '0', '2022-01-13 13:36:59', '2022-01-13 13:36:59'),
(38124963, 43268451, 30591263, NULL, '0037972778', 'Ratte ao\'', '2003-12-11', 'Mirantin', 'L', 'Ratte ao\'', NULL, '0', '2021-11-23 11:38:54', '2021-11-23 11:38:54'),
(38459736, 85187296, 30591263, NULL, '0051301286', 'Rura', '2005-12-05', 'Tangngi', 'L', 'Rura', NULL, '0', '2021-11-23 11:50:45', '2021-11-23 11:50:45'),
(38754016, 15037618, 30591263, NULL, '0029158857', 'Kondo', '2002-11-24', 'Sappe', 'L', 'Kondo\r\n', NULL, '0', '2022-01-13 13:24:55', '2022-01-13 13:24:55'),
(38904352, 45139748, 30768534, NULL, '0044652798', 'solo\'', '2004-12-16', 'Suain', 'P', 'Solok', NULL, '0', '2021-11-22 14:35:52', '2021-11-22 14:35:52'),
(40257384, 10917638, 30768534, NULL, '0058406171', 'Lullungan', '2005-05-08', 'Sanda', 'P', 'lullungan', NULL, '0', '2021-12-26 13:59:05', '2021-12-26 13:59:05'),
(40287196, 16231908, 30768534, NULL, '0078557968', 'Lekkong', '2005-08-08', 'Tayai', 'P', 'lekkong', NULL, '0', '2021-11-23 11:20:29', '2021-11-23 11:20:29'),
(40832976, 14956783, 30591263, NULL, '0031709986', 'Tapekong', '2003-12-07', 'Sidundu', 'L', 'Tapekong', NULL, '0', '2021-11-23 11:33:50', '2021-11-23 11:33:50'),
(41286049, 38719420, 30768534, 59378061, '0059327428', 'Leppan', '2005-12-01', 'Miranti', 'P', 'Leppan', NULL, '0', '2021-10-25 02:45:36', '2022-02-12 03:14:03'),
(42345806, 84983021, 74932685, NULL, '0047598767', 'BUTTU', '2004-07-16', 'Kando\'', 'P', 'BUTTU\r\n', NULL, '0', '2022-01-13 13:50:27', '2022-01-13 13:50:27'),
(42578906, 56421795, 30591263, NULL, '0022332982', 'Kondo', '2002-01-15', 'Eni', 'L', 'Kondo\r\n', NULL, '0', '2022-01-13 13:25:46', '2022-01-13 13:25:46'),
(42789063, 26749825, 30591263, NULL, '0031431095', 'Lullungan', '2003-07-09', 'Daen Dia', 'L', 'lullungan', NULL, '0', '2021-11-23 11:43:13', '2021-11-23 11:43:13'),
(43768251, 35823976, 30591263, NULL, '0042161005', 'Kappuan', '2004-01-01', 'Birra\'', 'P', 'Kappuan\r\n', NULL, '0', '2022-01-13 13:49:08', '2022-01-13 13:49:08'),
(44103257, 32085734, 99263850, NULL, '201901', 'Bengkulu', '2001-10-23', 'Malik Intania', 'P', 'Kondodewata', 2021, '1', '2021-10-23 14:01:23', '2021-10-25 02:48:29'),
(45928731, 75031978, 30768534, NULL, '0015105476', 'Leppangan', '2001-09-09', 'Palamba', 'L', 'Leppangan', 2022, '1', '2021-11-23 11:44:08', '2022-01-13 14:04:46'),
(46370415, 80142736, 30768534, 59378061, '0051994814', 'Salutallang', '2006-11-05', 'Indan', 'L', 'Salutallang', NULL, '0', '2021-10-25 02:47:01', '2022-02-12 03:14:08'),
(46375289, 80369472, 74932685, NULL, '0051927652', 'Samaring', '2005-05-25', 'Dallek', 'P', 'Samaring', NULL, '0', '2021-11-22 14:28:43', '2021-11-22 14:28:43'),
(46430857, 16982307, 30591263, NULL, '0048095990', 'Leppangan', '2002-11-30', 'Palulun', 'L', 'Leppangan', 2022, '1', '2021-11-23 11:40:32', '2022-01-13 14:04:33'),
(46482507, 58740312, 30768534, NULL, '25567508', 'Mappak', '2002-12-27', 'Sattu', 'L', 'Mappak', 2021, '1', '2021-10-25 02:37:02', '2021-11-22 14:00:09'),
(46532890, 65498602, 30591263, NULL, '0031431098', 'Makassar', '2003-12-31', 'Tarrapa', 'L', 'Kondo', NULL, '0', '2022-01-13 13:46:16', '2022-01-13 13:46:16'),
(47456932, 42350164, 30768534, NULL, '0024583923', 'Simbuang', '2002-02-14', 'Lando', 'L', 'kondo', 2022, '1', '2021-11-23 11:47:26', '2022-01-13 14:04:59'),
(47530248, 58093267, 30768534, NULL, '0036106039', 'irak', '2003-05-10', 'Rakuk', 'P', 'irak', NULL, '0', '2021-11-23 11:39:44', '2021-11-23 11:39:44'),
(49216835, 62601854, 30768534, NULL, '0050537723', 'Kondodewata', '2005-11-05', 'Herianto', 'L', 'Kondodewata', NULL, '0', '2021-11-22 14:16:47', '2021-11-22 14:16:47'),
(49572481, 51087652, 30768534, NULL, '0017787035', 'Tondok Banga\'', '2005-05-15', 'Sattu', 'L', 'Tondok Banga\'', NULL, '0', '2021-11-22 14:31:31', '2021-11-22 14:31:31'),
(50753629, 25341209, 30591263, NULL, '0034748188', 'Kappuan', '2003-05-09', 'Randa', 'P', 'kappuan', NULL, '0', '2021-11-23 11:52:40', '2021-11-23 11:52:40'),
(52095618, 85790136, 30768534, NULL, '0036820271', 'Sarambu', '2003-04-28', 'LIMBONG', 'P', 'Sarambu\r\n', NULL, '0', '2022-01-13 13:34:02', '2022-01-13 13:34:02'),
(52406593, 90347629, 30591263, NULL, '0050653348', 'Petarian', '2005-08-31', 'Panggalo', 'L', 'leppan', NULL, '0', '2021-11-23 11:32:30', '2021-11-23 11:32:30'),
(52408316, 72495083, 30768534, NULL, '0040430668', 'Buttu', '2004-04-14', 'Mesa', 'P', 'Buttu', NULL, '0', '2021-11-23 11:37:35', '2021-11-23 11:37:35'),
(55612809, 39075163, 74932685, NULL, '0060035334', 'Salutallang', '2005-04-05', 'Uli', 'P', 'Salutallang', NULL, '0', '2021-11-23 11:48:48', '2021-11-23 11:48:48'),
(55804961, 14379251, 30591263, NULL, '201902', 'Minanga', '2000-10-23', 'Dallek', 'P', 'Sakkuang', 2021, '1', '2021-10-23 13:09:07', '2021-10-25 02:48:41'),
(57613298, 85438079, 30591263, NULL, '0028815548', 'Se\'pon Puang', '2002-11-22', 'Bandolan', 'P', 'Se\'pon Puang', 2022, '1', '2021-11-22 14:38:26', '2022-01-13 14:03:32'),
(58156923, 92091463, 74932685, NULL, '0056432338', 'Makassar', '2005-12-03', 'Natalia Bangi\'', 'L', 'Bata', NULL, '0', '2021-11-23 11:49:57', '2021-11-23 11:49:57'),
(59542786, 31087245, 74932685, NULL, '0025117079', 'Pa\'pasaran', '2002-05-11', 'Dominggus sulle', 'P', 'pa\'pasaran', 2022, '1', '2021-12-26 14:02:33', '2022-01-13 14:05:22'),
(59752038, 68327560, 74932685, NULL, '0046360901', 'Barumbun', '2004-04-01', 'Tallok', 'P', 'Barumbun', NULL, '0', '2021-11-22 14:30:05', '2021-11-22 14:30:05'),
(60329741, 13075482, 30768534, NULL, '0031978546', 'Panusuk', '2003-11-16', 'Suppu', 'L', 'Palayukan', NULL, '0', '2021-11-23 11:41:28', '2021-11-23 11:41:28'),
(60731589, 53254879, 30591263, NULL, '0052142596', 'Ratte Bulo', '2006-07-07', 'suleman', 'L', 'RATTE bulo', NULL, '0', '2021-11-22 14:24:38', '2021-11-22 14:24:38'),
(62139460, 89754382, 74932685, NULL, '201703', 'Gowa', '2021-10-23', 'Parents', 'L', 'Gowa', 2021, '1', '2021-10-23 11:18:00', '2021-10-24 14:25:00'),
(62569784, 85670491, 74932685, NULL, '0039604608', 'Tokeran', '2002-05-18', 'Banna', 'P', 'Tokorean', NULL, '0', '2021-11-22 14:56:14', '2021-11-22 14:56:14'),
(63529407, 77481092, 74932685, NULL, '0051318907', 'Rambu\'', '2005-06-06', 'Limbong', 'P', 'rambuk', NULL, '0', '2021-11-23 11:46:34', '2021-11-23 11:46:34'),
(64572638, 78520361, 30591263, NULL, '0040430666', 'Salutallang', '2004-06-11', 'Uli', 'L', 'Salutallang', NULL, '0', '2021-11-23 11:24:08', '2021-11-23 11:24:08'),
(66093817, 18234961, 30591263, NULL, '0031431090', 'Leppan', '2003-09-14', 'Bura', 'L', 'leppan', NULL, '0', '2021-12-26 13:54:09', '2021-12-26 13:54:09'),
(66534197, 50926541, 30768534, NULL, '0049174624', 'Tanete', '2003-10-16', 'Sussa', 'P', 'tanete', NULL, '0', '2021-11-23 11:23:08', '2021-11-23 11:23:08'),
(67650482, 32790143, 74932685, NULL, '38915658', 'sakkombong', '2003-06-25', 'sUPPU', 'L', 'sakkombong\r\n', NULL, '0', '2022-01-13 13:32:02', '2022-01-13 13:32:02'),
(68649715, 38067421, 30768534, NULL, '0047802059', 'Kappuan', '2001-11-11', 'uling', 'L', 'Kappuan\r\n', NULL, '0', '2022-01-13 13:22:45', '2022-01-13 13:22:45'),
(69528130, 82049876, 30768534, NULL, '0024864681', 'Ma\'kale', '2021-08-03', 'Joni', 'P', 'Makale', NULL, '0', '2021-11-22 14:18:07', '2021-11-22 14:18:07'),
(70175283, 63140587, 30591263, NULL, '0041705278', 'Tandungan', '2004-04-12', 'Rabak', 'L', 'Tndungan', NULL, '0', '2021-11-22 14:12:40', '2021-11-22 14:12:40'),
(71984605, 68627391, 30768534, NULL, '0053419524', 'Tallang', '2006-12-02', 'Darius', 'P', 'Tallang', NULL, '0', '2021-11-22 14:34:54', '2021-11-22 14:34:54'),
(72531706, 72351046, 74932685, NULL, '0021283274', 'Paku', '2002-10-31', 'pasa\'', 'L', 'Paku\r\n', NULL, '0', '2022-01-13 13:48:12', '2022-01-13 13:48:12'),
(72591780, 95172098, 74932685, NULL, '0025117067', 'Lullungan', '2002-06-22', 'kamisi\'', 'L', 'Lullungan\r\n', NULL, '0', '2022-01-13 13:27:59', '2022-01-13 13:27:59'),
(73896047, 63716924, 30591263, NULL, '3051082331', 'Riso', '2005-04-25', 'manda', 'P', 'Riso', NULL, '0', '2021-11-22 14:23:33', '2021-11-22 14:23:33'),
(74259130, 18792643, 74932685, NULL, '0035332741', 'ira\'', '2003-03-23', 'Otto lius', 'L', 'ira\'', NULL, '0', '2022-01-13 13:20:42', '2022-01-13 13:20:42'),
(74360815, 31397486, 30591263, NULL, '0041496861', 'Leppangan', '2004-10-07', 'Kamisik', 'L', 'Leppangan', NULL, '0', '2021-11-23 11:11:06', '2021-11-23 11:11:06'),
(74572691, 50432196, 74932685, NULL, '0059744778', 'Salutallang', '2005-10-26', 'Duppa', 'L', 'salutallang', NULL, '0', '2021-11-23 11:51:39', '2021-11-23 11:51:39'),
(74732581, 39438572, 30768534, NULL, '0031431087', 'Kondodewata', '2002-12-22', 'illang', 'L', 'Kondodewata\r\n', NULL, '0', '2022-01-13 13:43:02', '2022-01-13 13:43:02'),
(74987561, 95749063, 30768534, NULL, '0017197315', 'Se\'pon Puang', '2001-07-31', 'Tandi', 'L', 'Se\'pon Puang', 2022, '1', '2021-11-22 14:14:26', '2022-01-13 14:02:51'),
(75471286, 99483267, 74932685, NULL, '0031180705', 'Makassar', '2003-02-28', 'Yunus S,pd', 'P', 'Kondodewata', NULL, '0', '2021-11-22 14:39:29', '2021-11-22 14:39:29'),
(75842906, 75349128, 30768534, NULL, '0046620456', 'Buttu', '2004-09-15', 'Duma\'', 'L', 'Buutu', NULL, '0', '2021-11-22 14:32:40', '2021-11-22 14:32:40'),
(76820345, 43621805, 30768534, NULL, '0022822826', 'Silawa', '2002-01-07', 'Niati Rahma', 'P', 'Silawa', NULL, '0', '2021-11-22 14:55:07', '2021-11-22 14:55:07'),
(76927531, 60254891, 30768534, NULL, '0033525985', 'Buttu Kalla', '2003-06-08', 'Matius ramba', 'L', 'BUTTU KALLAN', NULL, '0', '2021-12-26 14:01:28', '2021-12-26 14:01:28'),
(77306189, 70451697, 74932685, NULL, '0039792360', 'Tokeran', '2001-03-12', 'ronaldus appi', 'L', 'Tokeran\r\n', 2022, '1', '2022-01-13 13:42:00', '2022-01-13 14:05:45'),
(78701964, 37568249, 30768534, NULL, '0069245060', 'Tapekong', '2006-03-06', 'Sussa petrus', 'L', 'Tapekong', NULL, '0', '2021-12-26 14:05:40', '2021-12-26 14:05:40'),
(79561320, 14683509, 74932685, NULL, '0054200510', 'Tondok Banga', '2002-03-19', 'Bangga\'', 'L', 'Tondok Banga\r\n', NULL, '0', '2022-01-13 13:17:23', '2022-01-13 13:17:23'),
(79654832, 46018954, 30591263, NULL, '201805', 'Makassar', '2001-12-02', 'Teresia R ', 'P', 'Makassar', 2021, '1', '2021-10-24 14:26:19', '2021-10-25 02:48:19'),
(79705163, 41385029, 30591263, NULL, '0041150182', 'Tandung Rea', '2003-06-29', 'Daniel narrang', 'L', 'Tandung Rea\r\n', NULL, '0', '2022-01-13 13:19:42', '2022-01-13 13:19:42'),
(82847356, 69140673, 30768534, NULL, '0026023638', 'Sepang', '2002-02-22', 'Bangun', 'P', 'Salukanan', NULL, '0', '2021-12-26 14:09:37', '2021-12-26 14:09:37'),
(82847590, 72601953, 74932685, NULL, '0037477353', 'Kondodewata', '2001-12-20', 'Mangngaya\'', 'L', 'Kondodewata\r\n', NULL, '0', '2022-01-13 13:43:56', '2022-01-13 13:43:56'),
(83174529, 18024695, 74932685, NULL, '0015340231', 'Popo\'', '2002-03-01', 'Salmon', 'L', 'Barumbun', NULL, '0', '2021-11-23 11:14:38', '2021-11-23 11:14:38'),
(83451697, 28761302, 30591263, NULL, '201706', 'Masewe', '2003-02-23', 'Siang', 'P', 'Pirrik', 2021, '1', '2021-10-25 02:52:35', '2021-10-25 02:56:31'),
(83819067, 51758624, 30591263, NULL, '0034973199', 'Wailimbong', '2003-04-14', 'Menan', 'P', 'wailimbong', NULL, '0', '2021-11-22 14:57:20', '2021-11-22 14:57:20'),
(86340521, 43724105, 30591263, NULL, '0043814907', 'Kondodewata', '2004-06-11', 'Arruan', 'L', 'Kondodewata\r\n', NULL, '0', '2022-01-13 13:29:07', '2022-01-13 13:29:07'),
(86714582, 67863251, 30591263, NULL, '0021704627', 'Ratte', '2004-06-04', 'Suka\'', 'P', 'Ratte\r\n', NULL, '0', '2022-01-13 13:39:54', '2022-01-13 13:39:54'),
(86971843, 35932068, 74932685, NULL, '0021909538', 'Tarundung', '2002-09-10', 'Parinding', 'L', 'Tarundung', NULL, '0', '2021-12-26 14:00:12', '2021-12-26 14:00:12'),
(86978103, 85947236, 30768534, NULL, '0050537717', 'Kondodewata', '2003-06-05', 'Ratna Rarru', 'P', 'Kondodewata', NULL, '0', '2021-12-26 14:07:07', '2021-12-26 14:07:07'),
(88320461, 43604752, 30768534, NULL, '0025101109', 'Buttu Manik', '2002-04-06', 'Tangnga', 'L', 'Buttu manik', NULL, '0', '2021-11-23 11:36:11', '2021-11-23 11:36:11'),
(90573982, 62137506, 30768534, NULL, '0033220242', 'Ratte Bulo', '2002-04-08', 'Sattu', 'P', 'Ratte Bulo', 2022, '1', '2021-11-22 14:07:57', '2022-01-13 14:02:13'),
(90634718, 55871469, 30591263, NULL, '0025117063', 'Tondok Banga\'', '2003-05-22', 'Yohanis Bangaran', 'L', 'Tondok Banga\'', NULL, '0', '2021-12-26 13:56:30', '2021-12-26 13:56:30'),
(90759184, 63907186, 74932685, NULL, '0035332744', 'Barumbun', '2003-05-11', 'Banni\'', 'P', 'Barumbun', NULL, '0', '2021-12-26 14:03:43', '2021-12-26 14:03:43'),
(91025387, 71842960, 74932685, NULL, '0025547066', 'Leppan', '2002-12-08', 'Dariana', 'L', 'LEPPAN\r\n', NULL, '0', '2022-01-13 13:21:44', '2022-01-13 13:21:44'),
(91930847, 85641793, 74932685, NULL, '201809', 'Tarundung', '2002-02-08', 'Niati', 'L', 'Tarunddng', 2021, '1', '2021-10-25 02:54:37', '2021-11-22 13:59:57'),
(96017389, 80732194, 74932685, NULL, '0054411371', 'PAKU', '2005-06-13', 'Parindingan', 'L', 'PAKU\r\n', NULL, '0', '2022-01-13 13:26:55', '2022-01-13 13:26:55'),
(97326184, 69850367, 74932685, NULL, '0039378889', 'Sakkombong', '2003-12-11', 'anik', 'P', 'Sakkombong', NULL, '0', '2021-11-22 14:09:22', '2021-11-22 14:09:22'),
(97381269, 64786103, 74932685, NULL, '0025494321', 'Kappuan', '2002-12-07', 'Tata', 'L', 'Kappuan', 2022, '1', '2021-10-25 02:39:45', '2022-01-13 14:01:06'),
(98041536, 54018265, 56923147, NULL, '201907', 'Dewata', '2002-03-04', 'Rande', 'L', 'Tarundung', 2021, '1', '2021-10-25 02:55:43', '2021-11-22 13:59:45'),
(98207491, 97294563, 74932685, NULL, '0025494317', 'Kappuan', '2002-10-05', 'Damba', 'L', 'Kappuan\r\n', NULL, '0', '2022-01-13 13:16:24', '2022-01-13 13:16:24'),
(98532971, 27418065, 30768534, NULL, '0054631788', 'Lullungan', '2005-02-25', 'kandia', 'L', 'lullungan', NULL, '0', '2021-11-22 14:27:18', '2021-11-22 14:27:18'),
(98912453, 87962840, 74932685, NULL, '0034708872', 'Tokeran', '2005-05-09', 'bandun', 'P', 'tokeran', NULL, '0', '2021-11-22 14:37:13', '2021-11-22 14:37:13'),
(98931675, 23851724, 74932685, NULL, '0031770989', 'Kondo', '2003-04-04', 'Bartolomius dullu', 'L', 'Kondo\r\n', NULL, '0', '2022-01-13 13:38:05', '2022-01-13 13:38:05'),
(99203186, 44820316, 74932685, NULL, '0044839317', 'Buttu', '2004-04-24', 'Mase\'', 'P', 'Buttu\r\n', NULL, '0', '2022-01-13 13:52:09', '2022-01-13 13:52:09'),
(99321780, 76781509, 30768534, NULL, '0043814906', 'SAMARING', '2004-11-05', 'indan', 'P', 'SAMARING\r\n', NULL, '0', '2022-01-13 13:39:00', '2022-01-13 13:39:00'),
(99456213, 37250681, 30768534, NULL, '0023499324', 'Makassar', '2002-05-20', 'Bannang', 'L', 'Leppan', 2022, '1', '2021-11-23 11:19:10', '2022-01-13 14:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` enum('admin','users') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_akun` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `id_users`, `nama`, `email`, `foto`, `username`, `password`, `roles`, `status_akun`, `ins`, `upd`) VALUES
(1, 1, 'Benyamin Belo', 'Belo@gmail.com', 'e21958a1930d8ee4e00fba555f405f53.jpg', 'admin', '$2y$10$UrvEbnhpVkCREvEz1WjUAu5EUEdbeTjFtQE0faPjufKxl68AtJmsi', 'admin', NULL, '2021-07-22 01:56:34', '2022-01-14 13:42:31'),
(6, 89754382, 'Alandevan', 'alan567@gmail.com', NULL, '201703', '$2y$10$Dhu7rYG3GTEIqhqo7SRWqOH5QkgDXC7KMGp7i.ckCCdPzwI1H6rnC', 'users', NULL, '2021-10-23 11:18:00', '2021-12-26 14:11:08'),
(7, 56502731, 'yohanis candra', NULL, NULL, '201701', '$2y$10$YaPXVrtPDSvKFJJ76a37zeQIZZxOspV/XyEryPhYEYcMf4lC.Up6q', 'users', NULL, '2021-10-23 13:04:36', '2021-10-24 14:22:56'),
(8, 14379251, 'Levina dian', NULL, NULL, '201902', '$2y$10$xqL7F9SkwYgQ.8LNbOTvyO2xsnh7CVZ/Yy.agnfzlt1q9L98kG3ui', 'users', NULL, '2021-10-23 13:09:07', '2022-01-15 05:04:17'),
(9, 32085734, 'Nonik Dewanti', NULL, NULL, '201901', '$2y$10$fe42vXYxM5h71aQuFeu7j.Xbtqc13P4uLOAISqfFijtq3tASikZnS', 'users', NULL, '2021-10-23 14:01:23', '2021-10-24 14:27:36'),
(10, 77038524, 'Candra Kuasa', NULL, NULL, '201702', '$2y$10$T4t.mZov3pGhNlhDwDtQEezbVYSnlSEsbVb.Hv/9qVbcNBM6Frb6W', 'users', NULL, '2021-10-24 14:24:16', '2021-10-24 14:24:16'),
(11, 46018954, 'Diana Lika', NULL, NULL, '201805', '$2y$10$qlPRsGS10Zryfxz.pfiYC.COdc8a8s8cL7XQjc5Mcdni3eHQ2V2qK', 'users', NULL, '2021-10-24 14:26:19', '2021-10-24 14:26:19'),
(12, 72693578, 'Adelvina Seleng', NULL, NULL, '0040650144', '$2y$10$jL0/sfkm.1dwblhIBUBdzO4XS8jsTtvWwQL4z2irNjYOOz15XjwW6', 'users', NULL, '2021-10-25 02:31:54', '2022-02-12 03:13:49'),
(13, 10647128, 'Adriana Noni\'', NULL, NULL, '0025567508', '$2y$10$X..Is7.DL9sRqlCuMUjVAuOgh6Dz3XpmWw2R2LCydUnA0D5bW2RtG', 'users', NULL, '2021-10-25 02:35:36', '2022-02-12 03:13:54'),
(14, 58740312, 'Agustinus Chandra Gunawan', NULL, NULL, '25567508', '$2y$10$JIF4RlpGOxudUCzYp161YuYen5i/SFApPeRJ38EbACdDtD71aGyXS', 'users', NULL, '2021-10-25 02:37:02', '2021-10-25 02:37:02'),
(15, 79530817, 'Aldi Matoke', NULL, NULL, '0025117062', '$2y$10$df6sPsaRttXjcksHheqZVe6KIzKl/xqmcb53iyK28mTNuPOVK0IOi', 'users', NULL, '2021-10-25 02:38:11', '2021-10-25 02:38:11'),
(16, 64786103, 'Aldianto Tata', NULL, NULL, '0025494321', '$2y$10$M9N/bghxZG...AlPXQKLJ.1R897U/7Aqq0FCCEeiFsspCoTkf2OVe', 'users', NULL, '2021-10-25 02:39:45', '2021-10-25 02:39:45'),
(17, 99786415, 'Alfina', NULL, NULL, '0032142726', '$2y$10$MqwDTMhHVyJDNcCgqq0S2u22g1PkaVe4toa1IS.UPTdKhPZQkDHNC', 'users', NULL, '2021-10-25 02:41:13', '2022-02-12 03:13:59'),
(18, 66401378, 'Arianto Kalinggang', NULL, NULL, '0024445972', '$2y$10$jUhc3wO5thRIJrRVfgDAsuR9ChawnX4ymWwX1tKil86R2Mdkald9y', 'users', NULL, '2021-10-25 02:43:32', '2021-10-25 02:43:32'),
(19, 38719420, 'Engely Fitriani Matoke', NULL, NULL, '0059327428', '$2y$10$ayxgxMu6SoynNTnApY0R3eHporlXB3IxL0LwUUe5FfOmECyaRhvGm', 'users', NULL, '2021-10-25 02:45:36', '2022-02-12 03:14:03'),
(20, 80142736, 'Enol Kamase', NULL, NULL, '0051994814', '$2y$10$ttDRLWPPWCAoJxRgNPKx3OWDj5PdfM52nFlifX9FnHJzQqgt.TZyS', 'users', NULL, '2021-10-25 02:47:01', '2022-02-12 03:14:08'),
(21, 28035672, 'Elisabeth Milka', NULL, NULL, '0031431089', '$2y$10$pvDay9ZV24fSVJ4Z0bYI7.r9BfsCkUV/qhKikrRSH7sd/72QHFFr6', 'users', NULL, '2021-10-25 02:51:28', '2022-02-12 03:14:13'),
(22, 28761302, 'Pianti Sambo', NULL, NULL, '201706', '$2y$10$c8T36YaH1Ak4WCed1WCNn.LDVREIqLmO4E7v3bW0qKA.Y5VsJRdzK', 'users', NULL, '2021-10-25 02:52:35', '2021-10-25 02:52:35'),
(23, 21239758, 'lilis', NULL, NULL, '21804', '$2y$10$4DAWTVpV9Xu/Q2jIrHYuQu5D07LY2PHU7R1BYUkMOSVwBqxMcQJPu', 'users', NULL, '2021-10-25 02:53:35', '2021-10-25 02:53:35'),
(24, 85641793, 'Lorensius Damu', NULL, NULL, '201809', '$2y$10$thnoDuB0kBHqN7tScGoW5.7FR4u4awo9iSu7NVAu..X5VsrUnwzdy', 'users', NULL, '2021-10-25 02:54:37', '2021-10-25 02:54:37'),
(25, 54018265, 'Sandi Karese', NULL, NULL, '201907', '$2y$10$NJ61d5TAMY5.jog5/O.Kyecx/sQ5b82ShuRa5pD6VSHtkOXWH3M0.', 'users', NULL, '2021-10-25 02:55:43', '2021-10-25 02:55:43'),
(26, 78540796, 'Yunita', NULL, NULL, '0048995272', '$2y$10$QpFsPXrSGWEVPfPll5d1weHY3NiQSTwqhrKmmiZ4jzD9PqVYcwQHi', 'users', NULL, '2021-11-22 14:03:48', '2021-11-22 14:03:48'),
(27, 59830756, 'Yulsiana Milsa', NULL, NULL, '0047183861', '$2y$10$0hXI6m9.ozovDmcBg7UBruQkzm.R5.BktSQT7dRrdIRMyTRiDFlka', 'users', NULL, '2021-11-22 14:05:11', '2021-11-22 14:05:11'),
(28, 67924031, 'Yulianti Kanan', NULL, NULL, '0021703983', '$2y$10$Obvcod0LfLVKv15PS3X8vet1VDo/fh.7RuPaylgMe/wex24uq9eim', 'users', NULL, '2021-11-22 14:06:32', '2021-11-22 14:06:32'),
(29, 62137506, 'Yuliana Anna', NULL, NULL, '0033220242', '$2y$10$2bMSsRrWJLvrlKL3h2Y1.evTs1TTERZ1FS8/bGDXakDtsIC9hxXFG', 'users', NULL, '2021-11-22 14:07:57', '2021-11-22 14:07:57'),
(30, 69850367, 'Yoni lisa', NULL, NULL, '0039378889', '$2y$10$WyIkv4.U22MFvDnDBEybeeTXkjCZbMlFzm7ycHRMjZC1JS3g1QXQC', 'users', NULL, '2021-11-22 14:09:22', '2021-11-22 14:09:22'),
(31, 11690857, 'Yohanis Yorim Tombi', NULL, NULL, '0032734595', '$2y$10$Uprt3pSZro0vj0hROVendOWu4xeG2bwUxE3WyAXC1E87qqM/f9VCO', 'users', NULL, '2021-11-22 14:11:06', '2021-11-22 14:11:06'),
(32, 63140587, 'Yohanis Rapa\' Tata', NULL, NULL, '0041705278', '$2y$10$l7mkj4XJF0EvcEYAp2mBJ.ejiVh1zRJWKUebigPzGEvMb3CkynTz2', 'users', NULL, '2021-11-22 14:12:40', '2021-11-22 14:12:40'),
(33, 95749063, 'Yohanis Paligi\'', NULL, NULL, '0017197315', '$2y$10$WAxo293oL5m5cgxR3KmPJOPbIi.ZCfHqBmGvryMrdB76Qvo1qBddW', 'users', NULL, '2021-11-22 14:14:26', '2021-11-22 14:14:26'),
(34, 36942850, 'Yohana Tira', NULL, NULL, '0073853044', '$2y$10$73MI83G/y8iU/vQZvpE3ZePPh6reukVc9UmUQxqG5uFnycgJflEwm', 'users', NULL, '2021-11-22 14:15:30', '2021-11-22 14:15:30'),
(35, 62601854, 'Yoga Lese Kila\'', NULL, NULL, '0050537723', '$2y$10$rtxTpFb2WXDpRwhM8T6.feQAtYk76QSKZc0T3.oTDrhvk7uWiGTqW', 'users', NULL, '2021-11-22 14:16:47', '2021-11-22 14:16:47'),
(36, 82049876, 'Yanti Sanda', NULL, NULL, '0024864681', '$2y$10$n9aeIU0yJomrjVCaZgx.0uf3aTAll9FX3Ch9W3C0NdWSzEZSQOLYW', 'users', NULL, '2021-11-22 14:18:07', '2021-11-22 14:18:07'),
(37, 63716924, 'WILDIA INDI', NULL, NULL, '3051082331', '$2y$10$qAlB/54yEzwdJxSBRtPUbulaqCrqj0LhUjNoCeYgS5DtDo2SZ9uNe', 'users', NULL, '2021-11-22 14:23:33', '2021-11-22 14:23:33'),
(38, 53254879, 'WANDRIANUS TANGNGI PAYUK', NULL, NULL, '0052142596', '$2y$10$sUeT5/H0mN4ihlWMQ4yc9urLd/nZ0JoI2d.ioWZsrpvM5I9lkkv9q', 'users', NULL, '2021-11-22 14:24:38', '2021-11-22 14:24:38'),
(39, 16932058, 'Wandrianus Loa\'', NULL, NULL, '0004211930', '$2y$10$UMNKCY4hUwcRycwGNZqXvODEDIClapX21lUBB8BRJQSitBr4l6lEy', 'users', NULL, '2021-11-22 14:26:00', '2021-11-22 14:26:00'),
(40, 27418065, 'Wandi Prianto', NULL, NULL, '0054631788', '$2y$10$Ii.a8DShhjvjaDENFViFbutJFbdIq9pSb.V067oeaCQQ9XQGZEzKK', 'users', NULL, '2021-11-22 14:27:18', '2021-11-22 14:27:18'),
(41, 80369472, 'Vika Bali', NULL, NULL, '0051927652', '$2y$10$k79MTnxXxCYj4F6wyrh8HeyO0waRO.nKZiuXrpRyOJni1PAqQJ.F.', 'users', NULL, '2021-11-22 14:28:43', '2021-11-22 14:28:43'),
(42, 68327560, 'Veronika Kumman', NULL, NULL, '0046360901', '$2y$10$3IGLWCbmmk9WJ5533e840e.p.Ym7AFNaO8NNHjHlmfMRhpM87W5GK', 'users', NULL, '2021-11-22 14:30:05', '2021-11-22 14:30:05'),
(43, 51087652, 'Tono Thomas', NULL, NULL, '0017787035', '$2y$10$tpNZcoQCRXS8tI..u3IgT.gcQlZFwatQFo4UTHHKzVGB2ldrBKS2m', 'users', NULL, '2021-11-22 14:31:31', '2021-11-22 14:31:31'),
(44, 75349128, 'Tommi Kurniawan Kallung', NULL, NULL, '0046620456', '$2y$10$AQL0k0xpRo8yPbkFk2qpaeEt5dJpt9A9HcCAWhPmVMPN.rMsxEcC6', 'users', NULL, '2021-11-22 14:32:40', '2021-11-22 14:32:40'),
(45, 13920781, 'Tober', NULL, NULL, '0025117056', '$2y$10$ewKmZNj8eDFwzhNkM.5Mdui03lrpC90opRNmhQoGuqcB.fylzYzJK', 'users', NULL, '2021-11-22 14:33:47', '2021-11-22 14:33:47'),
(46, 68627391, 'Tirza Kartini Mamma\'', NULL, NULL, '0053419524', '$2y$10$sAnyB9Ad3AEbRRsThc7s8eeHUDeLOvrvolQudQGBjBjFiXt.q2D4q', 'users', NULL, '2021-11-22 14:34:54', '2021-11-22 14:34:54'),
(47, 45139748, 'SUSANTI BUA\' LANGI\'', NULL, NULL, '0044652798', '$2y$10$2/BFbgnKntVBon0mZaxsRumHkFZqFeeHej6nPYqvZCWYrRO66hk7q', 'users', NULL, '2021-11-22 14:35:52', '2021-11-22 14:35:52'),
(48, 87962840, 'Stevani Yuyun', NULL, NULL, '0034708872', '$2y$10$9WRDyCr.5Z0Haf.q9zqkjOKcnhxsr59xggzjQ6PHZS5ybXsr2bu0S', 'users', NULL, '2021-11-22 14:37:13', '2021-11-22 14:37:13'),
(49, 85438079, 'Sriani Siri\'', NULL, NULL, '0028815548', '$2y$10$sR/KvlxvTOYn577bbNXIG.WJgTh0j8SyZgls4d5BsM0Bnd8fjhlNS', 'users', NULL, '2021-11-22 14:38:26', '2021-11-22 14:38:26'),
(50, 99483267, 'Sofian Untung Pakuli', NULL, NULL, '0031180705', '$2y$10$MCQlEg944Zl2HDglxZQ1Qu5leSy5XLYZBa00/2UVjUi3ccf31fIUC', 'users', NULL, '2021-11-22 14:39:29', '2021-11-22 14:39:29'),
(51, 43621805, 'Sisilia Elsi', NULL, NULL, '0022822826', '$2y$10$KpwPiqK7BhaHOje/8z44D.CZ.KUjUy/cc5c/Tz/TBcgBlsHXiATpu', 'users', NULL, '2021-11-22 14:55:07', '2021-11-22 14:55:07'),
(52, 85670491, 'Sertika Liling', NULL, NULL, '0039604608', '$2y$10$ZYsCyjj9r9VpZKtxtNG6PuwK2IIDZBy6SYX8d8vS4wU7spX7f11/2', 'users', NULL, '2021-11-22 14:56:14', '2021-11-22 14:56:14'),
(53, 51758624, 'Serli', NULL, NULL, '0034973199', '$2y$10$8CJTdFhHXxjqA23eeCaM2.w/XoNKdNqbZ6mVNz3a7Yu2eS9ruVWUy', 'users', NULL, '2021-11-22 14:57:19', '2021-11-22 14:57:19'),
(56, 31397486, 'Rivaldi Wandy Sariri', NULL, NULL, '0041496861', '$2y$10$GTa/RJOW5TanTeZ8qgD8S.G6wqTmfV5T/OqL/HWuOpDaNvElbJ/RO', 'users', NULL, '2021-11-23 11:11:06', '2021-11-23 11:11:06'),
(57, 18024695, 'Salmon Sandi', NULL, NULL, '0015340231', '$2y$10$c1Yvi9.GQBeeXbuYgPmiTeYZIAzkrFbXBzhBjWpXcn0X4hSSNDslu', 'users', NULL, '2021-11-23 11:14:38', '2021-11-23 11:14:38'),
(59, 37250681, 'RIVAL CHRISTIANTO BANNANG', NULL, NULL, '0023499324', '$2y$10$Zc4cyAsyh2LjOqjU5lvdsuscvOQTe4Ffy6fpHhwAKtflFooz8mot2', 'users', NULL, '2021-11-23 11:19:10', '2021-11-23 11:19:10'),
(60, 16231908, 'Rilda Bu\'ka\'', NULL, NULL, '0078557968', '$2y$10$fqvckRjchD10vvd8BuQQ8OCEMnz38C6aMUkglPid3jjIiJ6qvwDdG', 'users', NULL, '2021-11-23 11:20:29', '2021-11-23 11:20:29'),
(61, 77540921, 'RIANTO', NULL, NULL, '0035332746', '$2y$10$Sc5s87mIE1jWg4uRmMGIveWUe1ys.IwtLQngMV/e2BomhEEgN859G', 'users', NULL, '2021-11-23 11:21:44', '2021-11-23 11:21:44'),
(62, 50926541, 'Rianti Devi', NULL, NULL, '0049174624', '$2y$10$DOg55UEJA8NVYTS9RMLUQeV4826TrBn111MILfwWumb4cxdhaEUwK', 'users', NULL, '2021-11-23 11:23:07', '2021-11-23 11:23:07'),
(63, 78520361, 'Rian Takke', NULL, NULL, '0040430666', '$2y$10$8t/tXxYRHNZwKfHmF.EPSekAdZ6E2x61p/MCsnLpnC5Yf8S0xYEee', 'users', NULL, '2021-11-23 11:24:08', '2021-11-23 11:24:08'),
(64, 33245789, 'Resniati Mangnganna', NULL, NULL, '0046661651', '$2y$10$nYuZb/q7Fi7pqcehmMjHu.2gDsQJAZLZ0RapgV5oJEPXOoMmifjJ.', 'users', NULL, '2021-11-23 11:25:09', '2021-11-23 11:25:09'),
(65, 98469257, 'Rei Buttu Masarrang', NULL, NULL, '0018127701', '$2y$10$6ibceRqmtKZrmXoMY.71WeYn/6mW23e8csUAQDaJLMuS6xjsUhqHe', 'users', NULL, '2021-11-23 11:26:19', '2021-11-23 11:26:19'),
(66, 89637012, 'Pianti Sambo', NULL, NULL, '0041169961', '$2y$10$365fEicdG5kacGqt.EmYm.O3vpg88.eWLOUMucZL/XZWWYebLrP7W', 'users', NULL, '2021-11-23 11:27:24', '2021-11-23 11:27:24'),
(67, 70647295, 'Petrus Pendi Tandi Lipu\'', NULL, NULL, '0032734043', '$2y$10$A1XPcwm7f.M/wKpwvkdYLOdhJXE7QiwCV2vNQu5y646YwdMI81Aby', 'users', NULL, '2021-11-23 11:28:37', '2021-11-23 11:28:37'),
(68, 85143067, 'Petronela Angel', NULL, NULL, '0056352389', '$2y$10$t0.1iqeIq8yF2Zmsw2mIK.UrKDH9avWp2CuKmdjp1UQ8nlxuj2Co.', 'users', NULL, '2021-11-23 11:29:36', '2021-11-23 11:29:36'),
(69, 87041968, 'Peni Kuasa', NULL, NULL, '0022167694', '$2y$10$4DFwIfh7OGYQNIdlOL5Y/uCvtAetYCFJh9Gm135rFkZDXc5mYXTYC', 'users', NULL, '2021-11-23 11:31:07', '2021-11-23 11:31:07'),
(70, 90347629, 'Paton Poli\'', NULL, NULL, '0050653348', '$2y$10$CuhltYDJphsC4pTvGH2MQOzAoZT1TRxNMP07Od06MUs87pdtATPY2', 'users', NULL, '2021-11-23 11:32:30', '2021-11-23 11:32:30'),
(71, 14956783, 'Pairunan Sapparan', NULL, NULL, '0031709986', '$2y$10$WjAxuOLYiENdgKmEOxH8JuYdRRGnktV212Dh4Iwqvoq2QL/7MNSH6', 'users', NULL, '2021-11-23 11:33:50', '2021-11-23 11:33:50'),
(72, 75907238, 'ONGKI ALEKSANDER', NULL, NULL, '0005848512', '$2y$10$E4QRF7msIJHx83OboPapeO9J7pI4t9ROA16i27bp0YQZ/Jf1QRiY.', 'users', NULL, '2021-11-23 11:34:59', '2021-11-23 11:34:59'),
(73, 43604752, 'Novian Tangnga', NULL, NULL, '0025101109', '$2y$10$i70sM.JO3VoP3yistgp04e2g/5n7g9kXwRH.bfaim/Xilvr.SRWN2', 'users', NULL, '2021-11-23 11:36:11', '2021-11-23 11:36:11'),
(74, 72495083, 'NOVA', NULL, NULL, '0040430668', '$2y$10$J9P/2BA9P5DhMLzjncJ4gOR7isnCoxH.hMmkMIkd.5J7c8eOsZ7ya', 'users', NULL, '2021-11-23 11:37:35', '2021-11-23 11:37:35'),
(75, 43268451, 'Noprianto', NULL, NULL, '0037972778', '$2y$10$izFTTUVBnRfwbrp9zZgUPeqhQDjiDvPfP2ayTqlsQddlz076Tm.N.', 'users', NULL, '2021-11-23 11:38:54', '2021-11-23 11:38:54'),
(76, 58093267, 'Nobertus Badu', NULL, NULL, '0036106039', '$2y$10$xSWd/4TRSKQMWxKTS4dno.fKt/DkSomS4507NYRidmGWo/gN5onyi', 'users', NULL, '2021-11-23 11:39:44', '2021-11-23 11:39:44'),
(77, 16982307, 'Nober Palulun', NULL, NULL, '0048095990', '$2y$10$PfnjNi8qOuIoQArAaOuaCO8iCTvNqnd0t8oXct3ayty6tv8mXZOM2', 'users', NULL, '2021-11-23 11:40:32', '2021-11-23 11:40:32'),
(78, 13075482, 'Nipen', NULL, NULL, '0031978546', '$2y$10$7qEDcJS4cI4To1XHKsdtM.vVDqNE4nypPlmvOBQYzAXt.pbhNYP/i', 'users', NULL, '2021-11-23 11:41:28', '2021-11-23 11:41:28'),
(79, 20672958, 'Nike Nurjeni', NULL, NULL, '0048458158', '$2y$10$TroddDHW8NOkMhDZ1T/o2u2uEDHExuf1Oq/6jSPGxFza9sUCyVFei', 'users', NULL, '2021-11-23 11:42:21', '2021-11-23 11:42:21'),
(80, 26749825, 'Niel', NULL, NULL, '0031431095', '$2y$10$Qq0jRm2Yr7hL0Eh6U5iTOepyVyEA7RfDosSoIBv9XLpM4TzhCIWrq', 'users', NULL, '2021-11-23 11:43:13', '2021-11-23 11:43:13'),
(81, 75031978, 'Nicolas Palamba', NULL, NULL, '0015105476', '$2y$10$EmcooUIxMqrRmpXd42gFOeInHLfZ3uM/msOZConEgjjCYJKGKwVoq', 'users', NULL, '2021-11-23 11:44:08', '2021-11-23 11:44:08'),
(82, 21928604, 'Nataniel Ma\'dika', NULL, NULL, '0035332735', '$2y$10$JgfKnECsjPT9yFMCjrQFUeWY7cimATYKxDlgtMjSff3330W9BgP1W', 'users', NULL, '2021-11-23 11:45:32', '2021-11-23 11:45:32'),
(83, 77481092, 'Nadia Limbong', NULL, NULL, '0051318907', '$2y$10$MDaFR/.ygXcZaSaxSPma9.DS3Hy973i/KZ/5OJO8.HvX3dtoRY0NC', 'users', NULL, '2021-11-23 11:46:33', '2021-11-23 11:46:33'),
(84, 42350164, 'Milton Lando', NULL, NULL, '0024583923', '$2y$10$lb85JNnIoR/KZfm4SInR9eTx8N9p1VORE8TvWrlWbAyV.6KILB6mC', 'users', NULL, '2021-11-23 11:47:26', '2021-11-23 11:47:26'),
(85, 39075163, 'Milka', NULL, NULL, '0060035334', '$2y$10$qjR9M9kx8hxSFREDu0UeeOAEomcc7v.EMQ2n6tcWUcqRSna40TBxW', 'users', NULL, '2021-11-23 11:48:48', '2021-11-23 11:48:48'),
(86, 92091463, 'Miko Natanael Bangi', NULL, NULL, '0056432338', '$2y$10$6bozrEOS7YuXs/FXexq74eMVja9Ktihq9QnIOAmkCe9HW7X0YEIiK', 'users', NULL, '2021-11-23 11:49:57', '2021-11-23 11:49:57'),
(87, 85187296, 'Mikael Tangngi Lomban', NULL, NULL, '0051301286', '$2y$10$YA0MEWLOlycbTG7rajdEBewlq57dexkBQx693Z5v.ionGTym99EYK', 'users', NULL, '2021-11-23 11:50:45', '2021-11-23 11:50:45'),
(88, 50432196, 'Mikael Agung', NULL, NULL, '0059744778', '$2y$10$/tTJcn7dTtYCaL02oVmfy.XsfXaM33O0/6Tw0JgPNuhAM8VaH4fim', 'users', NULL, '2021-11-23 11:51:39', '2021-11-23 11:51:39'),
(89, 25341209, 'Mersi Dalle\' Rua', NULL, NULL, '0034748188', '$2y$10$B7NuqR9QXAnOaRSLdEe1Oeoo2jlla6i7ZsJjavHlvW69iIBBmPnQO', 'users', NULL, '2021-11-23 11:52:40', '2021-11-23 11:52:40'),
(90, 18234961, 'Melkyanus Parebong', NULL, NULL, '0031431090', '$2y$10$oOAEk42JADrmzie7QlfSkeeQxx59mBRDryCpTRdTYFv5corN/KJim', 'users', NULL, '2021-12-26 13:54:08', '2021-12-26 13:54:08'),
(91, 55871469, 'Melkias', NULL, NULL, '0025117063', '$2y$10$zzbdwnItSB8kiI6twg4yTOCxJXROnQKwFUFDJy8a9pTsEQedgY8EG', 'users', NULL, '2021-12-26 13:56:30', '2021-12-26 13:56:30'),
(92, 19436251, 'MELINDA', NULL, NULL, '0031770998', '$2y$10$qb5AzEElOfdf4MUjjuQArulHu4ObyikUoOVOmInI43JBKTjS1CkeS', 'users', NULL, '2021-12-26 13:57:46', '2021-12-26 13:57:46'),
(93, 10917638, 'Meiyanti Menan', NULL, NULL, '0058406171', '$2y$10$aXnZtOoJakfUYIY3cLEESu/5qYsoGCf7t7tM6ldcmxJ6qC8LS9/9u', 'users', NULL, '2021-12-26 13:59:05', '2021-12-26 13:59:05'),
(94, 35932068, 'Mattau\'', NULL, NULL, '0021909538', '$2y$10$zUvE7MPS3RNhMiVkStm5J.jIQXTKvq9EFIl84QWnkGzryjg5efnM2', 'users', NULL, '2021-12-26 14:00:12', '2021-12-26 14:00:12'),
(95, 60254891, 'MARTINUS SANNANG', NULL, NULL, '0033525985', '$2y$10$nmwz7oA0uBtl3HW.JwKnweqCErwukM0LZf7vfwa0RKR86XHgr7ynG', 'users', NULL, '2021-12-26 14:01:28', '2021-12-26 14:01:28'),
(96, 31087245, 'Mariana Pasa\'', NULL, NULL, '0025117079', '$2y$10$45GR5VNGtxgk2gEKkPn6GucQ6Sft9ISOw2sj/N46twFI1GgliTctC', 'users', NULL, '2021-12-26 14:02:32', '2021-12-26 14:02:32'),
(97, 63907186, 'Lusiana Pia', NULL, NULL, '0035332744', '$2y$10$HJP.CPGXlRNt79M9mTX54.uBwMl4wGQXY5vgbrKGsoRIZ9Wv8.dDm', 'users', NULL, '2021-12-26 14:03:43', '2021-12-26 14:03:43'),
(98, 37568249, 'LUKAS SAMBIRA', NULL, NULL, '0069245060', '$2y$10$3iKPd75Te7qO3i5LQGCCq..0Wbu2X9FszqzfOzYnu1vZOhigCOVBW', 'users', NULL, '2021-12-26 14:05:40', '2021-12-26 14:05:40'),
(99, 85947236, 'Listra Rarru\'', NULL, NULL, '0050537717', '$2y$10$SzGoJ2UIVtBxx8YEz6GUt.j8B59DcIiBEaDRO.AGKHIDqzgF0maZq', 'users', NULL, '2021-12-26 14:07:07', '2021-12-26 14:07:07'),
(100, 82847365, 'Lisda Wati', NULL, NULL, '0044263868', '$2y$10$bHmguhZwjt/qDLIOpxTOQ.3C5JNk5YMOkPpKTc4IJlwg8AEhy1JJW', 'users', NULL, '2021-12-26 14:08:24', '2021-12-26 14:08:24'),
(101, 69140673, 'Kristina Windy', NULL, NULL, '0026023638', '$2y$10$VbbTHz.cLwPfOkkRnQ6u3.f2rk6aypVH6IaxCtnvB9qBfXxGtP0SW', 'users', NULL, '2021-12-26 14:09:37', '2021-12-26 14:09:37'),
(102, 75872469, 'Kristina Rina Pataloan', NULL, NULL, '0076579475', '$2y$10$.S8JGwvf12yp6KL0MOcncuMgT8OE/Nf6cGrxMr2IEXfTvenH.CABC', 'users', NULL, '2022-01-13 13:13:38', '2022-01-13 13:13:38'),
(103, 61734958, 'Kristiani Miriam Pataloan', NULL, NULL, '0072681180', '$2y$10$1X4HZSJbEKq8DYznFZTPeOGGVLOI9Y1UocOy56JeDPYQ9v/VzotBm', 'users', NULL, '2022-01-13 13:15:22', '2022-01-13 13:15:22'),
(104, 97294563, 'Kristian Randi', NULL, NULL, '0025494317', '$2y$10$9FyYeLjJbr9cP2QxuS1nSeBYQRoaB7Q.erzrcB7gpjP9zkluNwAK.', 'users', NULL, '2022-01-13 13:16:24', '2022-01-13 13:16:24'),
(105, 14683509, 'Krisniati Pari\'', NULL, NULL, '0054200510', '$2y$10$HmXxM23UtK7LRcRR608EDOUEuYlC/yZiYOUZv4SpvhNFS2ASxoUNW', 'users', NULL, '2022-01-13 13:17:23', '2022-01-13 13:17:23'),
(106, 90153928, 'Kresensia Leni Pappang', NULL, NULL, '0064243151', '$2y$10$StqB3rONG8fBlzmbipy5lOHZI8CxZ5STwEdXgOE/A03.ImbS7WnUW', 'users', NULL, '2022-01-13 13:18:36', '2022-01-13 13:18:36'),
(107, 41385029, 'Juniel', NULL, NULL, '0041150182', '$2y$10$R4XNKdsFUpfpk6sTWCtpvOs0Fhoh0uCSTlS66UMu62GE8WLBEe8gS', 'users', NULL, '2022-01-13 13:19:42', '2022-01-13 13:19:42'),
(108, 18792643, 'JULIUS ', NULL, NULL, '0035332741', '$2y$10$Zp5E8eSsz9adNTT3zJN89u0hfGLu0Wr4vyyEN55oXuua6LqqsHSwi', 'users', NULL, '2022-01-13 13:20:42', '2022-01-13 13:20:42'),
(109, 71842960, 'JULI', NULL, NULL, '0025547066', '$2y$10$s3pDTWVLK/qY1U8zEwa57.rF/Cz88VWLszlIbNm1briaOA1MJruu6', 'users', NULL, '2022-01-13 13:21:44', '2022-01-13 13:21:44'),
(110, 38067421, 'Juandika Uling', NULL, NULL, '0047802059', '$2y$10$7Za.7ZgJpOPhNP7bHZKvA.ZL4jHG3OnOCK6D211VW.yWoh1ofCd1O', 'users', NULL, '2022-01-13 13:22:45', '2022-01-13 13:22:45'),
(111, 39078452, 'Johan Sippan', NULL, NULL, '0047646981', '$2y$10$LlQm816IsUqjY9eetnEbne5maVdBFcWLsu8Ms/KnGKHJQFfWGjUq2', 'users', NULL, '2022-01-13 13:23:54', '2022-01-13 13:23:54'),
(112, 15037618, 'Johan Assa', NULL, NULL, '0029158857', '$2y$10$QwJCywqN4pyWWnlXSonnde7fHjbisoVL6Tfst25x2iHfkfQK.i2m6', 'users', NULL, '2022-01-13 13:24:55', '2022-01-13 13:24:55'),
(113, 56421795, 'Jeri Sanda Bawan', NULL, NULL, '0022332982', '$2y$10$PYvXzPRGRpGFA2YRXtppA.caXJlwfG5lWxgSWDEymp2X7YbFIeMuW', 'users', NULL, '2022-01-13 13:25:46', '2022-01-13 13:25:46'),
(114, 80732194, 'JELPAN', NULL, NULL, '0054411371', '$2y$10$OBQmm/UUmtfM30RLqWm3CeqrviT6onECZxt0J7ss6ApwBaN3h9dma', 'users', NULL, '2022-01-13 13:26:55', '2022-01-13 13:26:55'),
(115, 95172098, 'Jelis Kamisi\'', NULL, NULL, '0025117067', '$2y$10$rIkGroUmOjAyp3/BQLoCOesVvcDROa3XIsgmZ6CSfBPC2gub41vha', 'users', NULL, '2022-01-13 13:27:59', '2022-01-13 13:27:59'),
(116, 43724105, 'Iwan Resky', NULL, NULL, '0043814907', '$2y$10$S0YgXXIXJs78g9qt33vLMuBnL/aMvmfrTlIyVXVCrm5DCYs8Durwq', 'users', NULL, '2022-01-13 13:29:07', '2022-01-13 13:29:07'),
(117, 32790143, 'Irman', NULL, NULL, '38915658', '$2y$10$EA3.ViPwSDjtThhWreNYE.VNIuRTdaFF3oDA4BYWU6zyYo96AXBUu', 'users', NULL, '2022-01-13 13:32:02', '2022-01-13 13:32:02'),
(118, 14015928, 'IRAYANTI KUASA', NULL, NULL, '0040430667', '$2y$10$csvU8S0A1Iv0JEtLmv1QCuPKnEOgkI9b6LWLR8dxzGHia6brU8W5a', 'users', NULL, '2022-01-13 13:33:11', '2022-01-13 13:33:11'),
(119, 85790136, 'Intania Limbong', NULL, NULL, '0036820271', '$2y$10$bPKTQ8ew2slHgSgrFIRkKexVivN3N8PKPZaP.hweAF9izY.b66wXW', 'users', NULL, '2022-01-13 13:34:02', '2022-01-13 13:34:02'),
(120, 30295471, 'Imelda Rarru', NULL, NULL, '0018271188', '$2y$10$J2oBiOWCtkHVSd6PBLDKzONik1W.lb7ak2NX49IXR5v3/BkVdUwdq', 'users', NULL, '2022-01-13 13:35:07', '2022-01-13 13:35:07'),
(121, 52136074, 'Ignasius Melki Sussa', NULL, NULL, '0062575625', '$2y$10$Whz2.bYZviSV0XILhjFO6OcHEjicevjB6rwBLjydNHcQVeZrtsdry', 'users', NULL, '2022-01-13 13:36:08', '2022-01-13 13:36:08'),
(122, 90254687, 'Hermiati Pane', NULL, NULL, '0059287814', '$2y$10$nGIHQ/GEN4IHGyRxBAYNgeORW4rVF4.oEPlGG0XmxIiJT3WBETubq', 'users', NULL, '2022-01-13 13:36:59', '2022-01-13 13:36:59'),
(123, 23851724, 'Herianto Randaliling', NULL, NULL, '0031770989', '$2y$10$Eb5RQGhDA/rAsU4lYuDiO.66kjSUkQON1B2G0niEQIN3NR.ADN.Vi', 'users', NULL, '2022-01-13 13:38:04', '2022-01-13 13:38:04'),
(124, 76781509, 'GEWI RATNASARI', NULL, NULL, '0043814906', '$2y$10$wz.0t8ECnNYegtH/oOHY9Oxz6Zh2LoM/MN2zHCOE.4PVd32cau2Mu', 'users', NULL, '2022-01-13 13:39:00', '2022-01-13 13:39:00'),
(125, 67863251, 'Gesri', NULL, NULL, '0021704627', '$2y$10$c2kHuClMIslL9b8UTUA7IuajJcCSaqgxgsjCacVcWKvXsU22.dekG', 'users', NULL, '2022-01-13 13:39:54', '2022-01-13 13:39:54'),
(126, 70153426, 'Geben Mangopo', NULL, NULL, '0048394962', '$2y$10$FlyfVF2VGJuWbAJkwplntuG/EARStHW62bj5lp8/lhbS/dfqHbuJq', 'users', NULL, '2022-01-13 13:41:00', '2022-01-13 13:41:00'),
(127, 70451697, 'Fransiskus Ronal', NULL, NULL, '0039792360', '$2y$10$heh1I56RTQ0vusSi7oem4OwiqVvy0hGeEvrLaq3lMZ2ZjTs.J4mfa', 'users', NULL, '2022-01-13 13:42:00', '2022-01-13 13:42:00'),
(128, 39438572, 'Fransiskus Jean Manoro\'', NULL, NULL, '0031431087', '$2y$10$vWS3q.Rv0OGtnKBDUMr5vOiZkO9FzV1rvJ38CtNd6OW2HpxLcamt2', 'users', NULL, '2022-01-13 13:43:02', '2022-01-13 13:43:02'),
(129, 72601953, 'Fernando Aldo Mangngaya\'', NULL, NULL, '0037477353', '$2y$10$HSNavBy6N8a0saY.pa.eDeiVOPlZxTKy.KNmg4YyP0CJ0vLuciXRa', 'users', NULL, '2022-01-13 13:43:56', '2022-01-13 13:43:56'),
(130, 86358291, 'Febrianti Ono', NULL, NULL, '0078110469', '$2y$10$yHjGWkcaS60QQOQJvl5OnOp8LaDAhsSNks2hiH3zHN16fYuTihCdG', 'users', NULL, '2022-01-13 13:45:18', '2022-01-13 13:45:18'),
(131, 65498602, 'Fadel Arjuna Tarrapa\'', NULL, NULL, '0031431098', '$2y$10$vy.gy6QErecFUJgp//HCoeNO7cmq937Lc1vuDg117quspjD0cMxRC', 'users', NULL, '2022-01-13 13:46:16', '2022-01-13 13:46:16'),
(132, 13475291, 'EVIVANIA POLI', NULL, NULL, '0058098330', '$2y$10$Ca1RjVUSaTmWNMDq09kwietiOamDsdXeHyYYMa/9/Q2jz1Brv3zQS', 'users', NULL, '2022-01-13 13:47:11', '2022-01-13 13:47:11'),
(133, 72351046, 'Evaldus', NULL, NULL, '0021283274', '$2y$10$FDQDRwvOliQesVdwJLu5lOLSeuU/ZxYuROyIIXf2qu1LTcwTLYMuy', 'users', NULL, '2022-01-13 13:48:12', '2022-01-13 13:48:12'),
(134, 35823976, 'Etti Yunita Nati', NULL, NULL, '0042161005', '$2y$10$8zNjClo.5TyRJc1XTv8knuu8fR5MnTpOObRAZiwjjcCTqawvudEES', 'users', NULL, '2022-01-13 13:49:08', '2022-01-13 13:49:08'),
(135, 84983021, 'ESRIANTI', NULL, NULL, '0047598767', '$2y$10$znj7MgfAi2Mrn/neRt8UN.U8h97kQzrXhQXG0jkW0NtIJyVdfoDPu', 'users', NULL, '2022-01-13 13:50:27', '2022-01-13 13:50:27'),
(136, 44820316, 'Erika Putri Suppayo', NULL, NULL, '0044839317', '$2y$10$aPg5OXQGvMh5fGYmGeUOVeUWEU.D0QO68.rlSm553U3QNoGFB5mzG', 'users', NULL, '2022-01-13 13:52:09', '2022-01-13 13:52:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tb_buku_tamu`
--
ALTER TABLE `tb_buku_tamu`
  ADD PRIMARY KEY (`id_buku_tamu`);

--
-- Indexes for table `tb_dana`
--
ALTER TABLE `tb_dana`
  ADD PRIMARY KEY (`id_dana`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_agama` (`id_agama`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`) USING BTREE;

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_jadwal_rincian`
--
ALTER TABLE `tb_jadwal_rincian`
  ADD PRIMARY KEY (`id_jadwal_rincian`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- Indexes for table `tb_keuangan_rincian`
--
ALTER TABLE `tb_keuangan_rincian`
  ADD PRIMARY KEY (`id_keuangan_rincian`),
  ADD KEY `id_keuangan` (`id_keuangan`),
  ADD KEY `id_dana` (`id_dana`);

--
-- Indexes for table `tb_kuisioner`
--
ALTER TABLE `tb_kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`);

--
-- Indexes for table `tb_kuisioner_hasil`
--
ALTER TABLE `tb_kuisioner_hasil`
  ADD PRIMARY KEY (`id_kuisioner_hasil`),
  ADD KEY `kuisioner_hasil_to_soal` (`id_kuisioner_soal`);

--
-- Indexes for table `tb_kuisioner_soal`
--
ALTER TABLE `tb_kuisioner_soal`
  ADD PRIMARY KEY (`id_kuisioner_soal`),
  ADD KEY `id_ujian_pilihan_ganda` (`id_kuisioner`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  ADD PRIMARY KEY (`id_organisasi`) USING BTREE;

--
-- Indexes for table `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`) USING BTREE;

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `siswa_to_users` (`id_users`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649FA06E4D9` (`id_users`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku_tamu`
--
ALTER TABLE `tb_buku_tamu`
  MODIFY `id_buku_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_dana`
--
ALTER TABLE `tb_dana`
  MODIFY `id_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96241390;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94651231;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69820614;

--
-- AUTO_INCREMENT for table `tb_jadwal_rincian`
--
ALTER TABLE `tb_jadwal_rincian`
  MODIFY `id_jadwal_rincian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79430783;

--
-- AUTO_INCREMENT for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96712860;

--
-- AUTO_INCREMENT for table `tb_keuangan_rincian`
--
ALTER TABLE `tb_keuangan_rincian`
  MODIFY `id_keuangan_rincian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96130783;

--
-- AUTO_INCREMENT for table `tb_kuisioner`
--
ALTER TABLE `tb_kuisioner`
  MODIFY `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27483691;

--
-- AUTO_INCREMENT for table `tb_kuisioner_hasil`
--
ALTER TABLE `tb_kuisioner_hasil`
  MODIFY `id_kuisioner_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99630585;

--
-- AUTO_INCREMENT for table `tb_kuisioner_soal`
--
ALTER TABLE `tb_kuisioner_soal`
  MODIFY `id_kuisioner_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94763026;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99456214;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `guru_to_agama` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id_agama`) ON DELETE CASCADE,
  ADD CONSTRAINT `guru_to_jabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`) ON DELETE CASCADE;

--
-- Constraints for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD CONSTRAINT `informasi_to_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE;

--
-- Constraints for table `tb_jadwal_rincian`
--
ALTER TABLE `tb_jadwal_rincian`
  ADD CONSTRAINT `jadwal_rincian_to_jadwal` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_rincian_to_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_rincian_to_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`) ON DELETE CASCADE;

--
-- Constraints for table `tb_keuangan_rincian`
--
ALTER TABLE `tb_keuangan_rincian`
  ADD CONSTRAINT `keuangan_rincian_to_dana` FOREIGN KEY (`id_dana`) REFERENCES `tb_dana` (`id_dana`) ON DELETE CASCADE,
  ADD CONSTRAINT `keuangan_rincian_to_keuangan` FOREIGN KEY (`id_keuangan`) REFERENCES `tb_keuangan` (`id_keuangan`) ON DELETE CASCADE;

--
-- Constraints for table `tb_kuisioner_hasil`
--
ALTER TABLE `tb_kuisioner_hasil`
  ADD CONSTRAINT `kuisioner_hasil_to_soal` FOREIGN KEY (`id_kuisioner_soal`) REFERENCES `tb_kuisioner_soal` (`id_kuisioner_soal`) ON DELETE CASCADE;

--
-- Constraints for table `tb_kuisioner_soal`
--
ALTER TABLE `tb_kuisioner_soal`
  ADD CONSTRAINT `kuisioner_soal_to_kuisioner` FOREIGN KEY (`id_kuisioner`) REFERENCES `tb_kuisioner` (`id_kuisioner`) ON DELETE CASCADE;

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `siswa_to_agama` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id_agama`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswa_to_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswa_to_users` FOREIGN KEY (`id_users`) REFERENCES `tb_users` (`id_users`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
