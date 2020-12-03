-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 04:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ingis`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `tamu_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `industri`
--

CREATE TABLE `industri` (
  `industri_id` int(8) NOT NULL,
  `id_user` varchar(110) NOT NULL,
  `nama_pemilik` varchar(250) NOT NULL,
  `tlp` varchar(50) NOT NULL,
  `kecamatan` varchar(250) NOT NULL,
  `desa` varchar(250) NOT NULL,
  `dukuh` varchar(200) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `jalan` varchar(150) NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `jenis` varchar(250) NOT NULL,
  `merk` varchar(150) NOT NULL,
  `pemasaran` varchar(150) NOT NULL,
  `pendapatan` float NOT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industri`
--

INSERT INTO `industri` (`industri_id`, `id_user`, `nama_pemilik`, `tlp`, `kecamatan`, `desa`, `dukuh`, `rt`, `rw`, `jalan`, `latitude`, `longitude`, `jenis`, `merk`, `pemasaran`, `pendapatan`, `images`) VALUES
(27, 'Admin Disperindag', 'adsasd', '07807808787', 'Buaran', 'asdasd', '', '004', '003', 'kaliwadas', '', '', 'Keripik', 'asda', 'makan sendiri', 1000000000, 'aqua_and_brown.jpg'),
(28, 'user', 'Sasukeeee', '07807808787', 'Doro', 'asdasd', 'Bantul', '99', '003', 'kaliwadas', '', '', 'Lopis', 'asda', 'kesesi', 1000000000, 'lightroom_gray1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `jenis_id` int(11) NOT NULL,
  `jenis_industri` varchar(100) NOT NULL,
  `icons` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`jenis_id`, `jenis_industri`, `icons`) VALUES
(1, 'Kue Basah', '1'),
(2, 'Kue Kering', '2'),
(3, 'Keripik', '3'),
(4, 'Lopis', '4'),
(5, 'Peyek', '5');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kecamatan_id` int(8) NOT NULL,
  `nama_kecamatan` varchar(250) NOT NULL,
  `kode_kecamatan` char(8) NOT NULL,
  `kode_pos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kecamatan_id`, `nama_kecamatan`, `kode_kecamatan`, `kode_pos`) VALUES
(1, 'Bojong', '33.26.11', '51156'),
(2, 'Buaran', '33.26.14', '51171'),
(3, 'Doro', '33.26.06', '51191'),
(4, 'Kajen', '33.26.08', '51161'),
(5, 'Kandangserang', '33.26.01', '51163'),
(6, 'Karanganyar', '33.26.07', '51182'),
(7, 'Karangdadap', '33.26.18', '51174'),
(8, 'Kedungwuni', '33.26.13', '51173'),
(9, 'Kesesi', '33.26.09', '51162'),
(10, 'Lebakbarang', '33.26.03', '51183'),
(11, 'Paninggaran', '33.26.02', '51164'),
(12, 'Petungkriono', '33.26.04', '51193'),
(13, 'Siwalan', '33.26.17', '51137'),
(14, 'Sragi', '33.26.10', '51155'),
(32, 'Talun', '33.26.05', '51192'),
(33, 'Tirto', '33.26.15', '51151 - 51182'),
(34, 'Wiradesa', '33.26.16', '51127 - 51152'),
(35, 'Wonokerto', '33.26.19', '51153'),
(36, 'Wonopringgo', '33.26.12', '51181');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `kelurahan_id` int(11) NOT NULL,
  `kecamatan_id` int(8) NOT NULL,
  `nama_kelurahan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `image`, `desa`, `kecamatan`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'user', 'user@gmail.com', 'IMG-20200215-WA0006.jpg', 'kesesi', 'kesesi', '$2y$10$1kgvYvGGneRxttaHclx2vu/Ilc6pWvfmd4YtAt/l7ROCsxh9NWMom', 2, 1, 1603204122),
(8, 'Admin Disperindag', 'admin@gmail.com', 'mountains_moon_forest_139359_3840x2400.jpg', 'kajen', 'kajen', '$2y$10$PnwiVmOxXzOKREm/fPp51utbNp2e/XKqM/wGnwIGG2/rRZlYffTKy', 1, 1, 1603204184);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 3, 9),
(8, 6, 10),
(9, 1, 10),
(10, 1, 2),
(11, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(10, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(6, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Profile', 'user', 'fas fa-fw fa-user-tie', 1),
(3, 2, 'Edit Profile', 'user/editprofile', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder-plus', 1),
(5, 3, 'SubMenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'Daftar Petugas', 'admin/petugas', 'fas fa-fw fa-user', 1),
(10, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(11, 2, 'Input Data Industri', 'user/inputindustri', 'fas fa-fw fa-edit', 1),
(12, 1, 'Wilayah', 'admin/wilayah', 'fas fa-fw fa-map-marker-alt', 1),
(13, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-friends', 1),
(18, 9, 'Home', 'umum', 'fas fa-fw fa-user-home', 1),
(19, 4, 'Tampilan Depan', 'umum', 'fas fa-fw fa-user-globe', 1),
(20, 10, 'Tampilan Depan', 'frontend', 'fas fa-fw fa-globe-asia', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(11, 'fauzihafizh@gmail.com', 'G5U2kgzakvAqqa68hbTG1j7Xc7Fb4hEFpENOj8c=', 1604636941),
(13, 'pekakomputer21@gmail.com', 'z8GLtyA1zesyHknWjpOAPAi6ATcaRiY4VOsrMec=', 1605414617),
(15, 'useraaa@gmail.com', 'EjhxOa/qvLdXJ9WmWORbVFVHh68xQ2lONoYJ2SA=', 1606105231);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`tamu_id`);

--
-- Indexes for table `industri`
--
ALTER TABLE `industri`
  ADD PRIMARY KEY (`industri_id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kecamatan_id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`kelurahan_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `tamu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industri`
--
ALTER TABLE `industri`
  MODIFY `industri_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `jenis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `kecamatan_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `kelurahan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
