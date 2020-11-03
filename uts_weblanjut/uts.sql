-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 04:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `kode_about` varchar(10) NOT NULL,
  `judul_about` varchar(255) NOT NULL,
  `isi_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`kode_about`, `judul_about`, `isi_about`) VALUES
('abo001', 'Nama', 'Alexander Mario Gracias Wago'),
('abo002', 'Tempat/Tanggal Lahir ', 'Jakarta, 11 Februari 2000'),
('abo003', 'Umur', '20 Tahun'),
('abo004', 'Kampus', 'Universitas Pembangunan Jaya'),
('abo005', 'Hobi', 'Menonton film, makan, main game'),
('abo006', 'No.Telp', '0895320923057'),
('abo007', 'Instagram', '@alexndrmgw'),
('abo008', 'E-Mail', 'biggomario555@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `kode_detail` varchar(10) NOT NULL,
  `judul_detail` varchar(255) NOT NULL,
  `isi_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`kode_detail`, `judul_detail`, `isi_detail`) VALUES
('det001', 'Alexander Mario', 'Saya menekuni pembelajaran desain web sekitar satu/dua tahun yang lalu. Saya sangat ingin mempelajari semua hal yang berkaitan dengan web, karena satu-satunya minat saya di bidang IT adalah web. Untuk menerapkan ilmu tersebut, saya memilih untuk membuat web bertema kuliner, karena salah satu passion saya yang lain adalah memasak dan makan.'),
('det002', 'Universitas Pembangunan Jaya<br>\r\n(2018-2022)', '<em>Program Studi Informatika</em><br>\r\nDi masa perkuliahan, saya banyak mempelajari berbagai hal yang berkaitan dengan IT, seperti Web Development, Mobile App Development, dll. Namun, saya lebih menyukai bidang web dan mobile app development, karena saya pernah belajar membuat web sendiri saat SMP, dan saya tertarik lagi mempelajari itu sekarang'),
('det003', 'SMA Notre Dame<br>\r\n(2015-2018)', 'Di SMA, saya ada di jurusan IPS. Pada saat itu, saya mempelajari banyak hal seperti Sejarah, Ekonomi, Geografi, dan Sosiologi. Namun saya hanya memiliki minat di 2 pelajaran peminaatan saja yaitu Ekonomi dan Geografi, karena di 2 mata pelajaran tersebut nilai saya masih lumayan bagus'),
('det004', 'HIMAFORKA<br>\r\n(2020-2021)', 'Ini adalah kali pertama saya masuk organisasi mahasiswa di kampus. Di HIMA, saya menjadi koordinator Divisi Penjamin Mutu HIMA. Awalnya terasa berat, karena sebagai pengalaman pertama saya dalam organisasi, namun semua bisa saya hadapi semuanya berkat bantuan dari teman-teman yang HIMA yang lain, khususnya Ketua HIMA yang selalu membimbing anggotanya, terlebih yang baru pertama gabung di HIMA');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `kode_hlmn` varchar(10) NOT NULL,
  `judul_hlmn` varchar(255) NOT NULL,
  `isi_hlmn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`kode_hlmn`, `judul_hlmn`, `isi_hlmn`) VALUES
('hal001', 'Welcome Everyone', 'Selamat Datang di Xander\'s Portofolio. '),
('hal002', 'Contact Us', 'Jika anda mengunjungi website ini, dan terdapat berbagai macam hal yang ingin disampaikan baik kritik, saran maupun keluhan, kalian bisa mengisi form dibawah ini, sebagai bahan introspeksi dari pengembang web ini. Terimakasih..'),
('hal003', 'About Me', 'Saya adalah pribadi yang memiliki introvert dan saya memiliki sifat yang pendiam, tegar, suka tantangan baru, dan suka untuk mencari pengalaman baru. Sifat tersebut membuat banyak orang memiliki berbagai pandangan tentang saya, dari yang baik hingga buruk. Oleh sebab itu, jika kalian ingin mengenal saya lebih lanjut, kalian bisa melihat data-data saya di bawah ini yaa..'),
('hal004', 'My Portofolio', 'Berikut adalah galeri foto portofolio yang berisi makanan-makanan favorit saya, dan salah satu dari makanan tersebut pernah saya buat sendiri. Saya harap, kalian yang melihat galeri portofolio ini bisa tergoda dengan galeri makanan yang saya sukai.....'),
('hal005', 'My Skill', 'Berikut adalah statistik dari hal-hal yang saya kuasai di bidang IT. Saya harap, statistik ini bisa menjadi pertimbangan bagi perusahaan untuk menggunakan jasa saya di bidang IT'),
('hal006', 'My Detail', 'Halaman ini berisi tentang detail yang isinya adalah daftar tempat saya mengenyam pendidikan sebelumnya, dan beberapa pengalaman saya dalam hal organisasi...');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `no_telp` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`no_telp`, `nama`, `email`, `keluhan`) VALUES
(82312312, 'Mister', 'mister@gmail.com', 'Web kurang bagus'),
(812345677, 'Alexander', 'alexander@gmail.com', 'Belum ada saran');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `kode_gambar` varchar(10) NOT NULL,
  `isi_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`kode_gambar`, `isi_gambar`) VALUES
('por001', '<img src=\"images/makan1.jpg\" style=\"width: 200px; height: 200px\">'),
('por002', '<img src=\"images/makan2.jpeg\" style=\"width: 200px; height: 200px\">'),
('por003', '<img src=\"images/makan3.jpg\" style=\"width: 200px; height: 200px\">'),
('por004', '                <img src=\"images/makan4.jpg\" style=\"width: 200px; height: 200px\">'),
('por005', '<img src=\"images/makan5.jpg\" style=\"width: 200px; height: 200px\">'),
('por006', '<img src=\"images/makan6.jpg\" style=\"width: 200px; height: 200px\">\r\n'),
('por007', '<img src=\"images/makan7.jpg\" style=\"width: 200px; height: 200px\">\r\n'),
('por008', '<img src=\"images/makan8.jpg\" style=\"width: 200px; height: 200px\">\r\n'),
('por009', '<img src=\"images/makan9.jpg\" style=\"width: 200px; height: 200px\">\r\n'),
('por010', '<img src=\"images/makan10.jpg\" style=\"width: 200px; height: 200px\">\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`kode_about`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`kode_detail`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`kode_hlmn`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`no_telp`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`kode_gambar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
