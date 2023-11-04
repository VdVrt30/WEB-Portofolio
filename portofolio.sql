-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Nov 2023 pada 02.36
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE IF NOT EXISTS `about` (
`id` int(11) NOT NULL,
  `kemampuan` varchar(255) NOT NULL,
  `persentase` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `kemampuan`, `persentase`) VALUES
(1, 'Web Desain', 80),
(2, 'Fotografi', 70),
(3, 'Desain Grafis', 90),
(4, 'Mobile Programming', 86);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `alamat`, `telepon`, `email`) VALUES
(1, 'Jln. Matahari No. 5 RT: 007/ RW: 009, Kec. Pejaringan, Jakarta Utara, Jakarta', '0812-7358-2375', 'geraldvincent@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE IF NOT EXISTS `home` (
`id` int(11) NOT NULL,
  `ucapan` varchar(255) NOT NULL,
  `subucapan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `ucapan`, `subucapan`, `nama`, `gambar`, `status`) VALUES
(1, 'Selamat Datang.', 'Halo, nama saya Gerald Vincent. Dan ini adalah Web Portofolio Saya.', 'Gerald Vincent', 'assets/img/waving-hand.png', 'Freelance Creative & Professional Graphics Designer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(11) NOT NULL,
  `page` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id`, `page`, `url`) VALUES
(1, 'Home', 'index.php'),
(2, 'About', 'about.php'),
(3, 'Services', 'services.php'),
(4, 'Works', 'works.php'),
(5, 'Contact', 'contact.php');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `icon`, `service`) VALUES
(1, 'bi-card-checklist', 'Web Design'),
(2, 'bi-binoculars', 'Mobile Applications'),
(3, 'bi-brightness-high', 'Graphic Design'),
(4, 'bi-calendar4-week', 'SEO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `works`
--

CREATE TABLE IF NOT EXISTS `works` (
`id` int(11) NOT NULL,
  `work` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `works`
--

INSERT INTO `works` (`id`, `work`, `tipe`, `img`) VALUES
(1, 'Boxed Water', 'Web', 'assets/img/img_1.jpg'),
(2, 'Build Indoo', 'Photography', 'assets/img/img_2.jpg'),
(3, 'Cocooil', 'Branding', 'assets/img/img_3.jpg'),
(4, 'Nike Shoe', 'Design', 'assets/img/img_4.jpg'),
(5, 'Kitchen Sink', 'Photography', 'assets/img/img_5.jpg'),
(6, 'Amazon', 'Branding', 'assets/img/img_6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
