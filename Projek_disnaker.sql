-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 11, 2018 at 06:11 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `disnaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `NRK` varchar(6) CHARACTER SET utf8 NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `wilayah` varchar(255) NOT NULL,
  `jml_pekerja` int(11) NOT NULL,
  `sektor` varchar(100) NOT NULL,
  `date_answer` date NOT NULL,
  `ump_status` tinyint(1) NOT NULL,
  `umsp_status` tinyint(1) NOT NULL,
  `ss_upah_status` tinyint(1) NOT NULL,
  `bpjs_ktng_status` tinyint(1) NOT NULL,
  `bpjs_khs_status` tinyint(1) NOT NULL,
  `jamsos_hub_luar_status` tinyint(1) NOT NULL,
  `add_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `NRK`, `nama_perusahaan`, `alamat_perusahaan`, `wilayah`, `jml_pekerja`, `sektor`, `date_answer`, `ump_status`, `umsp_status`, `ss_upah_status`, `bpjs_ktng_status`, `bpjs_khs_status`, `jamsos_hub_luar_status`, `add_desc`) VALUES
(1, 'media1', 'GUNDAM', 'GUNDAM KOMPLEK', 'Jakarta', 100, 'Industri', '2018-05-09', 1, 1, 1, 1, 1, 1, 'mantap'),
(2, 'admin', 'PT Hayabusa', 'Komplek', 'Jakarta', 200, 'Teknologi', '2018-05-05', 1, 1, 1, 0, 1, 1, 'mantap'),
(3, 'media1', 'Condet Sentosa', 'Condet', 'Jakarta', 100, 'Industri', '2018-05-09', 1, 1, 1, 1, 1, 1, 'mantap'),
(5, 'media1', 'gundam baru', 'kompel gundam seed', '', 0, '', '2018-05-09', 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(3, 'mediator');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `NRK` varchar(6) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `NRK`, `name`, `password`, `user_role`, `last_login`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin', '$1$Dtqyvz7/$wZSaZbfHgn0UbLlVi1HHp0', 1, '2018-05-01 18:25:45', '2018-05-01 04:00:00', '2018-05-01 04:00:00'),
(4, 'media1', 'media1', '$1$XS1GhKGj$C8Gsfc.iLprxXi20RskEE0', 1, '2018-05-09 19:28:41', '2018-05-01 04:00:00', '2018-05-01 04:00:00'),
(6, 'gundam', 'Denny', '$1$D88xNEo6$LTuINaMtUBtdBF2JwLvy.0', 3, '0000-00-00 00:00:00', '2018-05-11 11:18:03', '0000-00-00 00:00:00'),
(7, '400', 'Gunda', '$1$Tutau4zy$FmLEhs4FxmbkroAApkJEk1', 3, '0000-00-00 00:00:00', '2018-05-11 11:37:31', '0000-00-00 00:00:00'),
(8, '1200', 'Ren', '$1$8ze0Y9wV$zG7Bek.arpNMo74unNRJD1', 3, '0000-00-00 00:00:00', '2018-05-11 11:39:11', '0000-00-00 00:00:00'),
(9, '1300', 'arsenal ', '$1$0NkmELE6$jBEmlEemkXTV01jmwWbWS.', 3, '0000-00-00 00:00:00', '2018-05-11 11:41:51', '0000-00-00 00:00:00'),
(10, '1400', 'liverpool kalah', '$1$D.N8LO7l$cTq70iT/ntsM8onwUl1S2.', 3, '0000-00-00 00:00:00', '2018-05-11 11:43:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `id` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expired_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`id`, `ID_USER`, `token`, `expired_at`, `created_at`, `updated_at`) VALUES
(1, 3, '$1$VA1voZ/.$sqfXYJGWpZArHihldXrzK/', '2018-05-02 05:58:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 3, '$1$YX7MHI45$AUldTtL5ciCLWoo1rg1c9.', '2018-05-02 06:25:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 4, '$1$G5ufJqYa$XWHta95caEs/H9P12OzoS1', '2018-05-02 06:49:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, '$1$xUmQ9GqY$evy7vp2nwCN/YVzXFXW8Z0', '2018-05-02 09:00:06', '0000-00-00 00:00:00', '2018-05-01 21:00:06'),
(5, 4, '$1$e9VpzlZY$/IhsTvk07LigZDdxLFBA70', '2018-05-02 23:26:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 4, '$1$61DwscID$yhNO0Nfhx366kCpx4pbfk1', '2018-05-03 09:15:17', '0000-00-00 00:00:00', '2018-05-02 21:15:17'),
(7, 4, '$1$ARyB4VW2$WhDYu1ePvzj8cIyWRD4hk/', '2018-05-04 02:00:23', '0000-00-00 00:00:00', '2018-05-03 14:00:23'),
(8, 4, '$1$xRB6LEBv$tTH5JcXxyWUMpn.YXmNar0', '2018-05-04 06:56:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 4, '$1$oF.qnmWR$OoxBkCUqJpo/n5s8TFHOf1', '2018-05-05 11:29:45', '0000-00-00 00:00:00', '2018-05-04 23:29:45'),
(10, 4, '_disnaker1znzlFGQqLY', '2018-05-10 07:31:51', '0000-00-00 00:00:00', '2018-05-09 19:31:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD KEY `fk_perusahaan_nrk` (`NRK`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `User_fk0` (`user_role`),
  ADD KEY `NRK` (`NRK`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_auth_fk0` (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `fk_perusahaan_nrk` FOREIGN KEY (`NRK`) REFERENCES `user` (`NRK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `User_fk0` FOREIGN KEY (`user_role`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD CONSTRAINT `user_auth_fk0` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);
