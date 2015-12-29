-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Des 2015 pada 04.08
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kompres`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE IF NOT EXISTS `postingan` (
  `id` int(3) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `gambarth` text NOT NULL,
  `gambarbnyk` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`id`, `judul`, `isi`, `gambarth`, `gambarbnyk`) VALUES
(17, 'Kota Serang', 'Kota Serang adalah ibu kota Provinsi Banten, Indonesia. Kota ini berada di bagian utara Provinsi Banten, serta dikelilingi oleh Kabupaten Serang di sebelah selatan, barat, dan timur, dan Laut Jawa di sebelah utara. Kota Serang dilintasi jalan tol lintas Jakarta-Merak.\r\nKota Serang terdiri atas 6 kecamatan, yang dibagi lagi atas sejumlah kelurahan. Dahulu Serang merupakan bagian dari wilayah Kabupaten Serang, kemudian ditetapkan sebagai kota otonom pada tanggal 2 November 2007.\r\n\r\nKota Serang terdiri atas:\r\nLambang Kota Serang berbentuk persegi enam heksagonal dengan gambar utama gerbang Kaibon dan satu bintang. Sedangkan pada pitanya tertulis motto atau semboyan â€˜Kota Serang Madaniâ€™. secara filosofis Madani merupakan bentuk kemandirian suatu daerah. Madani memberikan arti luas untuk pengayoman masyarakat, civil society yang mengedepankan musyawarah untuk mufakat, serta berbudaya.', 'serang-2.jpg', 'serang-1.png#@#serang-3.jpg'),
(18, 'Kota Bandung', 'Kota Bandung (Aksara Sunda:) merupakan kota metropolitan terbesar di Provinsi Jawa Barat, sekaligus menjadi ibu kota provinsi tersebut. Kota ini terletak 140 km sebelah tenggara Jakarta, dan merupakan kota terbesar ketiga di Indonesia setelah Jakarta dan Surabaya menurut jumlah penduduk. Selain itu, Kota Bandung juga merupakan kota terbesar di wilayah Pulau Jawa bagian selatan. Sedangkan wilayah Bandung Raya (Wilayah Metropolitan Bandung) merupakan metropolitan terbesar ketiga di Indonesia setelah Jabodetabek dan Gerbangkertosusila (Gerbangkertosusilo).\n\nDi kota ini tercatat berbagai sejarah penting, di antaranya sebagai tempat berdirinya sebuah perguruan tinggi teknik pertama di Indonesia (Technische Hoogeschool te Bandoeng - TH Bandung, sekarang Institut Teknologi Bandung - ITB)[2], lokasi ajang pertempuran pada masa kemerdekaan[3], serta pernah menjadi tempat berlangsungnya Konferensi Asia-Afrika 1955,[4] suatu pertemuan yang menyuarakan semangat anti kolonialisme, bahkan Perdana Menteri India Jawaharlal Nehru dalam pidatonya mengatakan bahwa Bandung adalah ibu kotanya Asia-Afrika.[5]\n\nPada tahun 1990 kota Bandung terpilih sebagai salah satu kota paling aman di dunia berdasarkan survei majalah Time.[6]\n\nKota kembang merupakan sebutan lain untuk kota ini, karena pada zaman dulu kota ini dinilai sangat cantik dengan banyaknya pohon-pohon dan bunga-bunga yang tumbuh di sana. Selain itu Bandung dahulunya disebut juga dengan Parijs van Java karena keindahannya. Selain itu kota Bandung juga dikenal sebagai kota belanja, dengan mall dan factory outlet yang banyak tersebar di kota ini, dan saat ini berangsur-angsur kota Bandung juga menjadi kota wisata kuliner. Dan pada tahun 2007, British Council menjadikan kota Bandung sebagai pilot project kota terkreatif se-Asia Timur.[7] Saat ini kota Bandung merupakan salah satu kota tujuan utama pariwisata dan pendidikan.', 'bandung-1.png', 'bandung-3.png#@#bandung-2.png'),
(19, 'Kota Depok', 'Kota Depok adalah sebuah kota di Provinsi Jawa Barat, Indonesia. Kota ini terletak tepat di selatan Jakarta, yakni antara Jakarta-Bogor.\r\n\r\nDepok dahulu adalah kota kecamatan dalam wilayah Kabupaten Bogor, yang kemudian mendapat status kota administratif pada tahun 1982. Sejak 20 April 1999, Depok ditetapkan menjadi kotamadya (sekarang: kota) yang terpisah dari Kabupaten Bogor. Kota Depok terdiri atas 11 kecamatan, yang dibagi menjadi 63 kelurahan.\r\n\r\nDepok merupakan kota penyangga Jakarta. Ketika menjadi kota administratif pada tahun 1982, penduduknya hanya 240.000 jiwa, dan ketika menjadi kotamadya pada tahun 1999 penduduknya 1,2 juta jiwa. Universitas Indonesia (kecuali Fakultas Kedokteran, Fakultas Kedokteran Gigi, dan sebagian Program Pasca Sarjana) berada di wilayah Kota Depok.\r\n\r\nSejak bulan Juni 2012, Wali Kota Depok Nur Mahmudi Ismail telah menetapkan program One Day No Car, yaitu program satu hari tanpa mobil bagi pejabat pemerintahan Kotamadya Depok. Program ini dilakukan setiap hari Selasa. [2]\r\n\r\nPada tahun 2015, Depok merupakan satu dari 10 kota di Indonesia yang mendapatkan Penghargaan Laporan Penyelenggaraan Pemerintahan Daerah.[3] Penghargaan ini diberikan kepada pemerintah daerah yang mampu meningkatkan pendapatan daerah. Setiap tahun, Laporan Penyelenggaraan Pemerintahan Daerah (LPPD) "disetor" ke Kementerian Dalam Negeri sebagai indikator tingkat keberhasilan suatu pemerintahan daerah dalam melaksanakan otonomi daerah.', 'depok-1.jpg', 'depok-2.png'),
(21, 'Bogor', 'Kota Bogor adalah sebuah kota di Provinsi Jawa Barat, Indonesia. Kota ini terletak 59 km sebelah selatan Jakarta, dan wilayahnya berada di tengah-tengah wilayah Kabupaten Bogor. Dahulu luasnya 21,56 kmÂ², namun kini telah berkembang menjadi 118,50 kmÂ² dan jumlah penduduknya 949.066 jiwa (2010). Bogor dikenal dengan julukan kota hujan, karena memiliki curah hujan yang sangat tinggi. Kota Bogor terdiri atas 6 Kecamatan yang dibagi lagi atas sejumlah 68 Kelurahan. Pada masa Kolonial Belanda, Bogor dikenal dengan nama Buitenzorg', 'bogor-1.png', 'bogor-3.jpg#@#bogor-2.png'),
(22, 'Jakarta', 'Daerah Khusus Ibukota Jakarta (DKI Jakarta) adalah ibu kota negara Indonesia. Jakarta merupakan satu-satunya kota di Indonesia yang memiliki status setingkat provinsi. Jakarta terletak di Tatar Pasundan, bagian barat laut Pulau Jawa. Dahulu pernah dikenal dengan nama Sunda Kelapa (sebelum 1527), Jayakarta (1527 1619), Batavia/Batauia, atau Jaccatra (1619-1942), Jakarta Tokubetsu Shi (1942-1945) dan Djakarta (1945-1972). Di dunia internasional Jakarta juga mempunyai julukan seperti J-Town,[8] atau lebih populer lagi The Big Durian karena dianggap kota yang sebanding New York City (Big Apple) di Indonesia.[1][9]\r\n\r\nJakarta memiliki luas sekitar 661,52 kmÂ² (lautan: 6.977,5 kmÂ²), dengan penduduk berjumlah 10.187.595 jiwa (2011).[10] Wilayah metropolitan Jakarta (Jabotabek) yang berpenduduk sekitar 28 juta jiwa,[7] merupakan metropolitan terbesar di Asia Tenggara atau urutan kedua di dunia.\r\n\r\nSebagai pusat bisnis, politik, dan kebudayaan, Jakarta merupakan tempat berdirinya kantor-kantor pusat BUMN, perusahaan swasta, dan perusahaan asing. Kota ini juga menjadi tempat kedudukan lembaga-lembaga pemerintahan dan kantor sekretariat ASEAN. Jakarta dilayani oleh dua bandar udara, yakni Bandara Soekarnoâ€“Hatta dan Bandara Halim Perdanakusuma, serta satu pelabuhan laut di Tanjung Priok.', 'jkt-1.png', 'jkt-2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_body` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `project_user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_body`, `date_created`, `project_user_id`) VALUES
(1, 'Jawa Barat', 'Ciri utama daratan Jawa Barat adalah bagian dari busur kepulauan gunung api (aktif dan tidak aktif) yang membentang dari ujung utara Pulau Sumatera hingga ujung utara Pulau Sulawesi. Daratan dapat dibedakan atas wilayah pegunungan curam di selatan dengan ketinggian lebih dari 1.500 m di atas permukaan laut, wilayah lereng bukit yang landai di tengah ketinggian 100 1.500 m dpl, wilayah dataran luas di utara ketinggian 0 . 10 m dpl, dan wilayah aliran sungai.', '2015-12-20 14:52:14', 0),
(2, 'kalimantan', 'Kalimantan adalah sebuah wilayah di Pulau Kalimantan di bawah administrasi Negara Kesatuan Republik Indonesia. Wilayah Kalimantan berbatasan dengan Sabah dan Sarawak di bagian utara, sedangkan di bagian timur berbatasan dengan Selat Karimata, di bagian selatan berbatasan dengan Laut Jawa, dan di sebelah timur berbatasan dengan Selat Makassar, dan Laut Sulawesi. Sebelum pemekaran pada tahun 1957 wilayah ini merupakan satu wilayah administratif/provinsi yang beribukota di Banjarmasin.', '2015-12-20 14:52:14', 0),
(3, 'aDghjk', 'dxghjbknlm', '2015-12-23 03:53:15', 8),
(4, 'dsf', 'sdfasdfds', '2015-12-26 16:01:21', 1),
(5, 'sdffasdf', 'dsfafdsaf', '2015-12-26 16:01:30', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(6) NOT NULL DEFAULT 'Member'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `register_date`, `role`) VALUES
(1, 'testis', '$2y$10$YTWaOdF2aJgcyMVlYQK88O/Vl9m6cO48o7tmBRnQhH.kuzIZw6ST.', 'testis', 'testis', 'testis', '2015-12-17 16:00:20', 'Member'),
(2, 'itulah', 'rahasia', '', '', '', '2015-12-17 11:22:29', 'Member'),
(3, 'sedih amet', 'ke delete', '', '', '', '2015-12-17 11:22:29', 'Member'),
(4, 'andikanugraha11', 'testsistem', 'Andika', 'Nugraha', 'm.andika.nugraha@gmail.com', '2015-12-17 15:43:22', 'Member'),
(5, 'testsistem', 'testsistem', 'testsistem', 'testsistem', 'testsistem', '2015-12-17 15:58:50', 'Member'),
(7, 'andikanugraha', '$2y$10$bnE71tSXXDeTrJyIp3hhuursQkO4Tzz9k.Cxv92LAWbd4QN7.Ww7G', 'Andika', 'Nugraha', 'and', '2015-12-20 16:44:32', 'Member'),
(8, 'admin123', '$2y$10$9gG7mzYYpZiLxUG/LimTHenAafrKuyQWm2oM.SXTYpu1BdgdXTNky', 'Admin1', 'Kompres', 'admin@kompres.com', '2015-12-23 03:29:45', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
