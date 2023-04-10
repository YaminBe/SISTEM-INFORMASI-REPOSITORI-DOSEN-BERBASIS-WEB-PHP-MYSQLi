-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 02:49 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_repository`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(5) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama_dosen` varchar(60) NOT NULL,
  `gelar` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(5) NOT NULL,
  `id_prodi` varchar(50) NOT NULL,
  `id_jab` varchar(50) NOT NULL,
  `pendidikan` varchar(60) NOT NULL,
  `asal_pt` varchar(60) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nip`, `nama_dosen`, `gelar`, `jk`, `username`, `password`, `status`, `id_prodi`, `id_jab`, `pendidikan`, `asal_pt`, `foto`) VALUES
(8, 2513001, 'Abdul Yamin', 'S.Pd, M.Kom', 'Laki-laki', 'yamin', 'yamin', 'aktif', 'Bahasa Indonesia', 'Dosen', 'S2', 'UPI', 'userk.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_file`
--

CREATE TABLE `tb_file` (
  `id_file` int(11) NOT NULL,
  `id_karya` int(5) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_file`
--

INSERT INTO `tb_file` (`id_file`, `id_karya`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(22, 28, '2018-08-15', 'tess', 'pdf', '145293', '../file/tess.pdf'),
(21, 27, '2018-08-15', 'Tes', 'pdf', '296266', '../file/Tes.pdf'),
(20, 26, '2018-08-14', 'Sipeg Bebasis Mobile', 'pdf', '798315', '../file/Sipeg Bebasis Mobile.pdf'),
(19, 25, '2018-08-14', 'JURNAL ABUL YAMIN', 'pdf', '798315', '../file/JURNAL ABUL YAMIN.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jab` int(5) NOT NULL,
  `jabatan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jab`, `jabatan`) VALUES
(1, 'Dosen'),
(2, 'Kajur');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jenis` int(5) NOT NULL,
  `jenis` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `jenis`) VALUES
(4, 'Tesis'),
(7, 'Jurnal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karya`
--

CREATE TABLE `tb_karya` (
  `id_karya` int(5) NOT NULL,
  `id_dosen` int(5) NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `alternatif_judul` varchar(255) NOT NULL,
  `abstrak` text NOT NULL,
  `pengarang` varchar(60) NOT NULL,
  `tahun_terbit` int(15) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `tgl_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karya`
--

INSERT INTO `tb_karya` (`id_karya`, `id_dosen`, `id_jenis`, `judul`, `alternatif_judul`, `abstrak`, `pengarang`, `tahun_terbit`, `penerbit`, `bahasa`, `tgl_post`) VALUES
(25, 8, 7, 'Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL', 'Perancangan Sistem Informasi Kepegwaian Sekolah', 'Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQLPerancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQLPerancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;Perancangan Sistem Informasi Kepegwaian Sekolah Bebasis Web Mengunakan Bootstrap PHP/MySQL&nbsp;', '8', 2017, 'Matematika', 'Indonesia', '2018-08-14'),
(26, 8, 7, 'Pengembangan Sistem Informasi Kepegwaian Sekolah Bebasis Mobile Bootstrap PHP/MySQL', 'Sistem Informasi Kepegwaian Sekolah Bebasis Mobile', 'Abstrak', 'Abdul Yamin', 2018, 'Bahasa Indonesia', 'English', '2018-08-14'),
(27, 8, 7, 'T', 'ESSS', '<p>Abstrak</p><p><br></p><p>NHBHB&nbsp; &nbsp; HBHBHB&nbsp;&nbsp;&nbsp;&nbsp;</p>', 'Ipit', 2014, 'Bahasa Indonesia', 'Indonesia', '2018-08-15'),
(28, 8, 7, 'ghggjgj', 'njnjn', '<p>Abstraknjnjnjn&nbsp;&nbsp;&nbsp;&nbsp;</p>', '8', 2007, 'uuuu', 'Indonesia', '2018-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(5) NOT NULL,
  `prodi` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `prodi`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_admin`, `nama`, `username`, `password`, `foto`) VALUES
(2, 'Fitri Veronika', 'admin', 'admin', 'avatar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `id_karya` (`id_karya`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jab`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tb_karya`
--
ALTER TABLE `tb_karya`
  ADD PRIMARY KEY (`id_karya`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_file`
--
ALTER TABLE `tb_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jab` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id_jenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_karya`
--
ALTER TABLE `tb_karya`
  MODIFY `id_karya` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
