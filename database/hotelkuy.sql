-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2022 at 02:48 AM
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
-- Database: `hotelkuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `nama_pengirim` varchar(128) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `jenis_pembayaran` varchar(128) NOT NULL,
  `no_rek` varchar(128) NOT NULL,
  `bukti_gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nama_pengirim`, `id_pemesanan`, `jenis_pembayaran`, `no_rek`, `bukti_gambar`) VALUES
(1, 'Arif', 1, 'BRI', '123456', ''),
(2, 'Arif', 1, 'Mandiri', '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_user`, `id_room`, `jumlah`, `checkin`, `checkout`) VALUES
(1, 4, 3, 1, '2022-05-31', '2022-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `nama_kamar` varchar(128) NOT NULL,
  `fasilitas` varchar(128) NOT NULL,
  `sisa_kamar` int(128) NOT NULL,
  `harga` int(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `nama_kamar`, `fasilitas`, `sisa_kamar`, `harga`, `gambar`) VALUES
(1, 'Studio Style', '2 Guest, 1 Double Bed Or 2 Single, Without Breakfast, WiFi, AC', 25, 522000, 'hotel-1979406_960_7201.jpg'),
(2, 'Studio Plus', '2 Guest, 1 Double Bed Or 2 Single Bed, With Breakfast, WiFi, AC', 20, 632000, 'hotel-1749602_960_7201.jpg'),
(3, 'Suite', '2 Guest, 1 Double Bed Or 2 Single Bed, Free Breakfast, WiFi, AC', 15, 879000, 'hotel-room-1447201__3401.jpg'),
(4, 'Suite Plus', '2 Guest, 1 Double Bed Or 2 Single Bed, Free Breakfast, WiFi, AC\r\n', 10, 1099000, 'bedroom-6686061__340.webp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `nama_user`, `image`, `jenis_kelamin`, `no_hp`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'admin@hotelkuy.com', 'Admin HotelKuy', 'default.jpg', 'Laki-Laki', '08123456789', '$2y$10$Vmb2OVr2Y2u1Qnul.HiJ0ekPo53nYIDuWqFuTmyiCMuws0Lt65Fl6', 1, 1, 1653409613),
(2, 'User2@gmail.com', 'User 2', 'foto1.jpg', 'Perempuan', '150000', '$2y$10$jmG7mrTEylW9x9cNuh.ufOUBS8s0WjUB78OzcqStZYQ9GlXiK51i.', 2, 1, 1653409829),
(4, 'marifbillah524@gmail.com', 'Muhammad Arif Billah', 'VEIIIIIIIII1.jpg', 'Laki-Laki', '085155186621', '$2y$10$gm7On4YggsMVCCEMTa7Q2.fR1zrJp61dphq3wMH7a.mrzghEI/UlK', 2, 1, 1653443453),
(5, 'joko@gmail.com', 'Joko Susanto', 'default.jpg', 'Perempuan', '2222222', '$2y$10$Y0dF5bnT.BhtOqd7clbAS.QUcKFTyXdFFaPFxhSxIMVSO/ExeDObi', 2, 1, 1653567824);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 1, 3),
(4, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'hotel');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_submenu`
--

CREATE TABLE `user_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_submenu`
--

INSERT INTO `user_submenu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Admin Profile', 'admin', 'fa-solid fa-fw fa-address-card', 1),
(2, 1, 'User List', 'admin/user', 'fas fa-fw fa-user', 1),
(3, 2, 'User Profile', 'admin/profile', 'fas fa-fw fa-user', 1),
(4, 3, 'Room List', 'admin/room', 'fa-solid fa-fw fa-bed', 1),
(5, 3, 'Booking', 'admin/booking', 'fa-solid fa-fw fa-book-bookmark', 1),
(6, 3, 'Payment', 'admin/payment', 'fa-solid fa-fw fa-credit-card', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_submenu`
--
ALTER TABLE `user_submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_submenu`
--
ALTER TABLE `user_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
