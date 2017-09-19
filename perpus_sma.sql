-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2017 at 11:07 AM
-- Server version: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- PHP Version: 5.6.31-4+ubuntu16.04.1+deb.sury.org+4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_sma`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(10) UNSIGNED NOT NULL,
  `no_induk` varchar(12) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `jenis_kelamin` enum('l','p') NOT NULL,
  `id_kelas` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `no_induk`, `nama_anggota`, `jenis_kelamin`, `id_kelas`) VALUES
(57, '1001', 'Abimanyu Kurniadi', 'l', 17),
(58, '1002', 'Achmad Abrori Prawiro Kusumo', 'l', 18),
(59, '1003', 'Achmad Noval Sukmana', 'l', 19),
(60, '1004', 'Achmad Zulfikar', 'l', 20),
(61, '1005', 'Ani Tri Andani', 'p', 21),
(62, '1006', 'Anis Dwi Winarsih', 'p', 22),
(63, '1007', 'Anisa Dwi Wandani', 'p', 17),
(64, '1008', 'Apriana Wike Nur Mahariyanti', 'p', 18),
(65, '1009', 'Danang Febriyanto', 'l', 19),
(66, '1010', 'Deffy Maharani', 'p', 20),
(67, '1011', 'Devi Novitasari', 'p', 21),
(68, '1012', 'Ela Kurniawati', 'p', 22),
(69, '1013', 'Ellys Nofita Sary', 'p', 17),
(70, '1014', 'Erik Firmansyah', 'l', 18),
(71, '1015', 'Fahmi Alfaris Hidayatullah', 'l', 19),
(72, '1016', 'Halimah', 'p', 20),
(73, '1017', 'Haris Wibowo', 'l', 21),
(74, '1018', 'Hendra Pristi Wahyono', 'l', 22),
(75, '1019', 'Lailatul Fitriyah', 'p', 17),
(76, '1020', 'Laili Septian Zufri Yahya', 'l', 18),
(77, '1021', 'Leni Yuliati', 'p', 19),
(78, '1022', 'Ade Minggus Hukom', 'l', 20),
(79, '1023', 'Adinda Derry Variegati', 'p', 21),
(80, '1024', 'Adiningsih Kartika Sari', 'p', 22),
(81, '1025', 'Arfila Fitrianti', 'p', 17),
(82, '1026', 'Arini Sulistyaningati', 'p', 18),
(83, '1027', 'Arisma Binti Awaliyah', 'p', 19),
(84, '1028', 'Ayu Isrotin', 'p', 20),
(85, '1029', 'Ayu Novitasari', 'p', 21),
(86, '1030', 'Dewi Karmila', 'p', 22),
(87, '1031', 'Dewi Lestari', 'p', 17),
(88, '1032', 'Dhimas Agung Pratama', 'l', 18),
(89, '1033', 'Dhoni Grahadi Nugroho', 'l', 19),
(90, '1034', 'Fahmi Nur Azis', 'l', 20),
(91, '1035', 'Fajar Riska Perdana', 'l', 21),
(92, '1036', 'Fajar Rivi Jannati', 'p', 22),
(93, '1037', 'Hendrik Usdiantoro', 'l', 17),
(94, '1038', 'Heri Purwito', 'l', 18),
(95, '1039', 'Husnia Novia Yuhaida', 'p', 19),
(96, '1040', 'M. Bagus Tamyiz', 'l', 20),
(97, '1041', 'Leo Agus Hartono', 'l', 21),
(98, '1042', 'Liliana Niken Sukandar', 'p', 22),
(99, '1043', 'Linda Yuliana', 'p', 17),
(100, '1044', 'Afan Assegaf Wardansyah', 'l', 18),
(101, '1045', 'Agus Dwi Darmawan', 'l', 19),
(102, '1046', 'Ahmad Hamdun', 'l', 20),
(103, '1047', 'Aziza Nur Afifa', 'p', 21),
(104, '1048', 'Bagas Farizi', 'l', 22),
(105, '1049', 'Bagus Sentoso', 'l', 17),
(106, '1050', 'Diah Febril Latifiyanti', 'p', 18),
(107, '1051', 'Dian Tri Cahyono', 'l', 19),
(108, '1052', 'Diane Andrita Sukma', 'p', 20),
(109, '1053', 'Fajar Setiadi', 'l', 21),
(110, '1054', 'Farih Yahya', 'l', 22),
(111, '1055', 'Fathchur Roji', 'l', 17),
(112, '1056', 'Fathurrohmah Maulidah', 'p', 18),
(113, '1057', 'Ika Nur Fatimah', 'p', 19),
(114, '1058', 'Ika Sri Wahyuningsih', 'p', 20),
(115, '1059', 'Imam Mustaqim', 'l', 21),
(116, '1060', 'Mahendra Dedy Pratama', 'l', 22),
(117, '1061', 'Maksum Akbar', 'l', 17),
(118, '1062', 'Ma\'Mum Slamet', 'l', 18),
(119, '1063', 'Manzilatul Habibah', 'p', 19),
(120, '1064', 'Ahmad Mega Jaya', 'l', 20),
(121, '1065', 'Ainun Musrifah', 'p', 21),
(122, '1066', 'Alex Sandria', 'p', 22),
(123, '1067', 'Bakhtiar Adi Nugroho', 'l', 17),
(124, '1068', 'Bambang Eko Proyono', 'l', 18),
(125, '1069', 'Bening Dwiati Sistyowinarsih', 'p', 19),
(126, '1070', 'Dimas Esa Dewa', 'l', 20),
(127, '1071', 'Dimas Septian Ega Putra', 'l', 21),
(128, '1072', 'Dinda Prety Murina', 'p', 22),
(129, '1073', 'Fatola Rudianza', 'l', 17),
(130, '1074', 'Febri Dhity Setiawan', 'l', 18),
(131, '1075', 'Fendi Pradianto', 'l', 19),
(132, '1076', 'Imelda Narolita Pratiwi', 'p', 20),
(133, '1077', 'Indah Nursita', 'p', 21),
(134, '1078', 'Indartiningsih', 'p', 22),
(135, '1079', 'Indri Rahmawati', 'p', 17),
(136, '1080', 'Inna Asyari Rozalina', 'p', 18),
(137, '1081', 'Maria Qulfasia', 'p', 19),
(138, '1082', 'Maria Ulfa', 'p', 20),
(139, '1083', 'Masruli', 'l', 21),
(140, '1084', 'Maulidha Santi Hasanah', 'p', 22),
(141, '1085', 'Alvin Yuliatris Magda', 'p', 17),
(142, '1086', 'Amalia Dewi Aqmarina', 'p', 18),
(143, '1087', 'Amalia Istiqomah', 'p', 19),
(144, '1088', 'Andi Kurniawan', 'l', 20),
(145, '1089', 'Betri Arista Oviana', 'p', 21),
(146, '1090', 'Brianraka Sony Mei Sega', 'l', 22),
(147, '1091', 'Budianto', 'l', 17),
(148, '1092', 'Dody Nurcaharjo', 'l', 18),
(149, '1093', 'Dwi Bagus Aprianto', 'l', 19),
(150, '1094', 'Dwi Octavia Damaiyanti', 'p', 20),
(151, '1095', 'Fikria Hanik', 'p', 21),
(152, '1096', 'Fitria Andalus Handayani', 'p', 22),
(153, '1097', 'Fitria Nurhasanah', 'p', 17),
(154, '1098', 'Fitrianing Wahyu Nur Syahadah', 'p', 18),
(155, '1099', 'Irwinsyah Azizul Hakim', 'l', 19),
(156, '1100', 'Jeffri Eko Rosadi', 'l', 20),
(157, '1101', 'Jimmy Rahmat Darajat', 'l', 21),
(158, '1102', 'Mega Anjarwati', 'p', 22),
(159, '1103', 'Meilinda Ratna Dwi Pratiwi', 'p', 17),
(160, '1104', 'Melisa Nurcayasmi', 'p', 18),
(161, '1105', 'Andik Siswanto', 'l', 19),
(162, '1106', 'Andri Purnomo', 'l', 20),
(163, '1107', 'Angga Prasetya', 'l', 21),
(164, '1108', 'Anggra Prasetya Budi', 'l', 22),
(165, '1109', 'Carina Febriana', 'p', 17),
(166, '1110', 'Christi Mayasari', 'p', 18),
(167, '1111', 'Cynthia Novita', 'p', 19),
(168, '1112', 'Dadang Cahyo Nugroho', 'l', 20),
(169, '1113', 'Dwi Siska Anggraeni', 'p', 21),
(170, '1114', 'Eka Shinta Ayu Firdani', 'l', 22),
(171, '1115', 'Eka Susanti', 'p', 17),
(172, '1116', 'Ekky Riastiandy', 'l', 18),
(173, '1117', 'Galang Rizki Bachtiar', 'l', 19),
(174, '1118', 'Galuh Ayu Dyah Prameswari', 'p', 20),
(175, '1119', 'Gresha Iga Kuswayan Almyanto', 'l', 21),
(176, '1120', 'Khusnul Nur Aisyah', 'p', 22),
(177, '1121', 'Kiky Floresta Bunga Kirana', 'p', 17),
(178, '1122', 'Komariyah Rukhana Putri', 'p', 18),
(179, '1123', 'Mevina Marsella Lausani', 'p', 19),
(180, '1124', 'Mirzafajrin Zaidi Abdat', 'p', 20),
(181, '1125', 'Moch. Samsul Arif', 'l', 21),
(182, '109130640219', 'Syifa', 'p', 23);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(10) UNSIGNED NOT NULL,
  `kode_buku` varchar(10) NOT NULL,
  `id_judul` int(10) UNSIGNED NOT NULL,
  `is_ada` enum('y','n') NOT NULL DEFAULT 'y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `kode_buku`, `id_judul`, `is_ada`) VALUES
(1, 'MRPM-01', 49, 'y'),
(2, 'BWSK-01', 50, 'n'),
(3, 'BWSK-02', 50, 'y'),
(4, 'AMSN-01', 51, 'y'),
(5, 'BONE-01', 89, 'y'),
(6, 'CARR-01', 88, 'y'),
(7, 'ANNAII-01', 87, 'y'),
(8, 'ANNAI-01', 86, 'y'),
(9, 'JACKAL-01', 85, 'y'),
(10, 'GODF-01', 84, 'y'),
(11, 'ALCHE-01', 83, 'y'),
(12, 'HEMING-01', 82, 'y'),
(13, 'EDEN-01', 81, 'y'),
(14, 'PEM-01', 80, 'y'),
(15, 'KOPI-01', 79, 'y'),
(16, 'RABI-01', 78, 'y'),
(17, 'INTI-01', 77, 'n'),
(18, 'MEGABI-01', 76, 'y'),
(19, 'MANBI-01', 75, 'y'),
(20, 'CESBI-01', 74, 'y'),
(21, 'KAMBI-01', 73, 'y'),
(22, 'FUMBI-01', 72, 'y'),
(23, 'POCMAT-01', 70, 'y'),
(24, 'JENFIS-01', 69, 'y'),
(25, 'OLIMFIS-01', 68, 'n'),
(26, 'CCPF-01', 67, 'y'),
(27, 'PRAKFIS-01', 66, 'y'),
(28, 'SMARFIS-01', 65, 'y'),
(29, 'SMAT-01', 64, 'n'),
(30, 'JAWMAT-01', 63, 'y'),
(31, 'JAGMAT-01', 62, 'y'),
(32, 'CCMAT-01', 60, 'n'),
(33, 'MEGAMAT-01', 59, 'n'),
(34, 'EXC-01', 54, 'n'),
(35, 'ZEXC-01', 55, 'n'),
(36, 'POWEXC-01', 56, 'y'),
(37, 'SERUMAT-01', 57, 'y'),
(38, 'SUPMAT-01', 58, 'y'),
(39, 'SERNUX-01', 52, 'n'),
(40, 'WORD-01', 53, 'n'),
(41, 'FRACI-01', 47, 'n'),
(42, 'FRACI-02', 47, 'y'),
(43, 'MUSH-01', 90, 'y'),
(45, 'mush-02', 90, 'y'),
(46, 'CI-01', 91, 'y'),
(47, 'CI-02', 91, 'y'),
(48, 'CI-03', 91, 'y');

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id_pinjam` int(10) UNSIGNED NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `is_dibayar` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`id_pinjam`, `jumlah`, `tanggal_pembayaran`, `is_dibayar`) VALUES
(1, 88000, '2016-07-05', 'y'),
(7, 9000, '2017-06-21', 'y'),
(8, 10000, '2017-05-28', 'y'),
(9, 27000, '2017-07-31', 'y'),
(12, 8500, '2017-06-24', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE `judul` (
  `id_judul` int(10) UNSIGNED NOT NULL,
  `isbn` varchar(15) NOT NULL DEFAULT '0',
  `judul_buku` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `letak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`id_judul`, `isbn`, `judul_buku`, `penulis`, `penerbit`, `cover`, `letak`) VALUES
(47, '9789791758666', 'Membangun Web Berbasis PHP dengan Framework Codeigniter', 'Awan Pribadi Basuki', 'Lokomedia', '20160704064527.jpg', ''),
(49, '9791758603', 'Membongkar Rahasia Para Master PHP', 'Lukmanul Hakim', 'Lokomedia', '20160704064456.jpg', ''),
(50, '9789791758673', 'Bikin Website Super Keren dengan PHP dan JQquery', 'Lukmanul Hakim', 'Lokomedia', '20160704064424.jpg', ''),
(51, '9792905626', 'Ayo Memblok Situs Negatif', 'Onno W Purbo', 'Andi Publisher', '20160704064347.jpg', ''),
(52, '9789792902969', 'Workshop Onno: Panduan Mudah Merakit Menginstall Server Linux', 'Onno W Purbo', 'Andi Publisher', '20160704064247.jpg', ''),
(53, '9786020260006', 'Word 2013 Panduan Karya Tulis Ilmiah', 'Kristian Agung Prasetyo', 'Elex Media Komputindo', '20160704064224.jpg', ''),
(54, '9786020261430', 'Step by Step Excel 2013 Tanpa Guru', 'Arista Prasetyo Adi', 'Elex Media Komputindo', '20160704064205.jpg', ''),
(55, '9792947205', 'From Zero to Advance Macro Excel 2013', 'Wahana Komputer', 'Andi Publisher', '20160704064145.jpg', ''),
(56, '9786020261799', '125+ PowerTips untuk Excel 2007, 2010 & 2013', 'Christopher Lee', 'Elex Media Komputindo', '20160704064122.jpg', ''),
(57, '9789793833057', 'Belajar Seru Matematika SMP Kelas XII, VIII, IX', 'Adi Prasetia, S.Si', 'Pustaka Edukasia', '20160704064106.jpg', ''),
(58, '9786023080212', 'Rumus Super Matematika SMP/MTs Kelas 7, 8, 9 Resep Manjur Lulus Ujian', 'Tim Dian Cipta', 'Prima Ufuk', '20160704064005.jpg', ''),
(59, '9786021609712', 'Fresh Update Mega Bank Soal Matematika SMP Kelas 1, 2, 3', 'Tim Guru Eduka', 'CMedia', '20160704063941.jpg', ''),
(60, '9797752402', 'Cara Cepat & Mudah Taklukkan Matematika SMP', 'M. Alvianto S.Si', 'Indonesia Tera', '20160704063920.jpg', ''),
(62, '9789792942163', 'Jago Matematika SMP Kelas 7, 8, 9', 'TMBooks', 'Andi Publisher', '20160704063717.jpg', ''),
(63, '9789790830950', 'Jawara (Jadi Siswa Juara) Matematika Kelas 7, 8, 9 SMP', 'Purie Anggita, S.Si', 'Tangga Pustaka', '20160704063645.jpg', ''),
(64, '9789790830936', 'Smartdiary: Matematika SMP Kelas 7, 8, 9', 'Wijaya Kurnia Santoso', 'Tangga Pustaka', '20160704063623.jpg', ''),
(65, '9789797752392', 'Mini Smart Book Fisika SMP Kelas VII, VIII & IX', 'Hendri Hartanto', 'Indonesia Tera', '20160704063553.jpg', ''),
(66, '9786021137208', 'Buku Praktikum Fisika SMP/Mts Kelas 7, 8, 9', 'Diyono Harun', 'Laskar Aksara', '20160704063530.jpg', ''),
(67, '9789792942718', 'Cara Cespleng Pintar Fisika SMP Kelas 7, 8, 9', 'Agus Kamaludin', 'Andi Publisher', '20160704063501.jpg', ''),
(68, '9786021380222', 'Sukses Olimpiade Fisika SMP', 'Rini Khamilatul Ula, S.Pd., M.Si.', 'Dunia Cerdas', '20160704063432.jpg', ''),
(69, '9786022515142', 'Super Jenius Fisika SMP Kelas VII, VIII, IX', 'Sienta Sasika Novel', 'Grasindo', '20160704063402.jpg', ''),
(70, '9786021609088', 'Pocket Book: Matematika & Fisika SMP Kelas 1, 2 & 3', 'Tim Math Sains Eduka', 'CMedia', '20160704063339.jpg', ''),
(72, '9786021609729', 'Fresh Update Mega Bank Soal Bahasa Indonesia SMP Kelas 1, 2 & 3', 'Tim Guru Eduka', 'CMedia', '20160704063217.jpg', ''),
(73, '9786023040100', 'Kamus Detail Bahasa Indonesia Untuk SMP/MTs Kelas 1, 2 dan 3', 'Siti Nur\'aisyah, A.md', 'Kunci Aksara', '20160704063141.jpg', ''),
(74, '9789792942637', 'Cara Cespleng Pintar Bahasa Indonesia SMP Kelas 7, 8, 9', 'Agus Kamaludin, Niken Umiyati', 'Andi Publisher', '20160704063112.jpg', ''),
(75, '9786022416159', 'Mandiri Bahasa Indonesia untuk SMP/MTs VII', 'Tim Bahasa', 'Erlangga', '20160704063025.jpg', ''),
(76, '9786028596657', 'Mega Bank Soal Bahasa Indonesia SMP Kelas 1, 2 & 3', 'Tim Guru Eduka', 'CMedia', '20160704062854.jpg', ''),
(77, '9789797751685', 'Intisari Lengkap Bahasa Indonesia Untuk SD, SMP, SMA dan Umum', 'Moh. Kusnadi Wasrie', 'Indonesia Tera', '20160704062829.jpg', ''),
(78, '9789797751272', 'Rangkuman Bahasa Indonesia Lengkap untuk SD, SMP dan SMA', 'Acep Yonny', 'Indonesia Tera', '20160704062749.jpg', ''),
(79, '9786028811613', 'Filosofi Kopi: A Cofee Table Book', 'Dewi Dee Lestari', 'Bentang Pustaka', '20160704062723.jpg', ''),
(80, '9789793062921', 'Sang Pemimpi', 'Andrea Hirata', 'Bentang Pustaka', '20160704062700.jpg', ''),
(81, '9789791227025', 'Edensor', 'Andrea Hirata', 'Bentang Pustaka', '20160704062614.jpg', ''),
(82, '9789791684354', 'The Oldman and The Sea', 'Ernest Hemingway', 'Narasi', '20160704062427.jpg', ''),
(83, '9789792298406', 'The Alchemist', 'Paulo Coelho', 'Gramedia Pustaka Utama', '20160704062357.jpg', ''),
(84, '9789792286342', 'The Godfather', 'Mario Puzo', 'Gramedia Pustaka Utama', '20160704062328.jpg', ''),
(85, '9789790243569', 'The Day of The Jackal', 'Frederick Forsyth', 'Serambi', '20160704062306.jpg', ''),
(86, '9789799100603', 'Anna Karenina I', 'Leo Tolstoi', 'Kepustakaan Populer Gramedia', '20160704062236.jpg', ''),
(87, '9789799100665', 'Anna Karenina II', 'Leo Tolstoi', 'Kepustakaan Populer Gramedia', '20160704062207.jpg', ''),
(88, '9789792299519', 'Carrie', 'Stephen King', 'Gramedia Pustaka Utama', '20160704062040.jpg', ''),
(89, '9789796864379', 'Bag Of Bones', 'Stephen King', 'Gramedia Pustaka Utama', '20160704061649.jpg', ''),
(90, '9789792288131', 'Musashi', 'Eiji Yoshikawa', 'Gramedia Pustaka Utama', '20160704061536.jpg', 'F'),
(91, '9786026231031', 'Menguasai Codeigniter Kasus Membangun Aplikasi Perpustakaan', 'Awan Pribadi Basuki', 'LOKOMEDIA', '20170827124739.jpg', 'G');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(17, 'X A1'),
(18, 'X A2'),
(19, 'X A3'),
(20, 'X A4'),
(21, 'X A5'),
(22, 'X S1'),
(23, 'X S2'),
(24, 'X S3'),
(25, 'XI A1'),
(26, 'XI A2'),
(27, 'XI S1'),
(28, 'XI S2'),
(29, 'XI S3'),
(30, 'XII A'),
(31, 'XII S1'),
(32, 'XII S2'),
(33, 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(10) UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `id_anggota` int(10) UNSIGNED NOT NULL,
  `id_buku` int(10) UNSIGNED NOT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `is_kembali` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `tanggal_pinjam`, `id_anggota`, `id_buku`, `tanggal_kembali`, `is_kembali`) VALUES
(1, '2016-04-01', 57, 1, '2016-07-05', 'y'),
(2, '2016-07-01', 147, 37, '2016-07-05', 'y'),
(3, '2016-06-29', 63, 8, '2016-07-05', 'y'),
(4, '2016-06-29', 63, 7, '2016-07-05', 'y'),
(5, '2017-05-27', 57, 41, '2017-05-27', 'y'),
(6, '2017-05-27', 57, 42, '2017-05-27', 'y'),
(7, '2017-05-27', 93, 41, '2017-06-21', 'y'),
(8, '2017-05-01', 58, 42, '2017-05-28', 'y'),
(9, '2017-05-31', 66, 1, '2017-07-31', 'y'),
(10, '2017-05-31', 155, 35, NULL, 'n'),
(11, '2017-05-31', 116, 2, NULL, 'n'),
(12, '2017-05-31', 153, 3, '2017-06-24', 'y'),
(13, '2017-05-31', 65, 33, NULL, 'n'),
(14, '2017-05-31', 71, 32, NULL, 'n'),
(15, '2017-05-31', 66, 39, NULL, 'n'),
(16, '2017-05-31', 166, 40, NULL, 'n'),
(17, '2017-05-31', 160, 29, NULL, 'n'),
(18, '2017-05-31', 77, 25, NULL, 'n'),
(19, '2017-05-31', 97, 17, NULL, 'n'),
(20, '2017-06-28', 74, 41, NULL, 'n'),
(21, '2017-06-28', 58, 34, NULL, 'n'),
(22, '2017-07-17', 57, 42, '2017-07-17', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('petugas','admin') NOT NULL DEFAULT 'petugas',
  `is_blokir` enum('y','n') NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`, `is_blokir`) VALUES
(1, 'administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'n'),
(3, 'hendra', 'hendra', 'a04cca766a885687e33bc6b114230ee9', 'petugas', 'n'),
(4, 'andri budi', 'andri', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `uq_nisn` (`no_induk`),
  ADD KEY `fk_siswa_kelas` (`id_kelas`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD UNIQUE KEY `uq_kode_buku` (`kode_buku`),
  ADD KEY `fk_buku_judul` (`id_judul`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`id_judul`),
  ADD UNIQUE KEY `uq_isbn` (`isbn`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `fk_peminjaman_siswa` (`id_anggota`),
  ADD KEY `fk_peminjaman_buku` (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `uq_username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `judul`
--
ALTER TABLE `judul`
  MODIFY `id_judul` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `fk_siswa_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_buku_judul` FOREIGN KEY (`id_judul`) REFERENCES `judul` (`id_judul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `denda`
--
ALTER TABLE `denda`
  ADD CONSTRAINT `fk_denda_peminjaman` FOREIGN KEY (`id_pinjam`) REFERENCES `peminjaman` (`id_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_peminjaman_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_peminjaman_siswa` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
