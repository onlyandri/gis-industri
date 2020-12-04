-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2020 pada 17.06
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `tamu_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `id_kec` int(11) NOT NULL,
  `nama_desa` varchar(25) NOT NULL,
  `longitude` varchar(15) NOT NULL,
  `latitude` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_desa`, `id_kec`, `nama_desa`, `longitude`, `latitude`) VALUES
(1, 11, 'Tanggeran', '109.6045366', '-7.1889232'),
(2, 11, 'Kaliboja', '109.6107289', '-7.1980996'),
(3, 11, 'Kaliombo', '109.6159397', '-7.1815292'),
(4, 11, 'Paninggaran', '109.5850952', '-7.175146'),
(5, 11, 'Werdi', '109.5397564', '-7.1597786'),
(6, 11, 'Lambanggelun', '109.5538855', '-7.1197232'),
(7, 11, 'Tenogo', '109.5784024', '-7.1328862'),
(8, 11, 'Bedagung', '109.611982', '-7.1468927'),
(9, 11, 'Krandegan', '109.5676071', '-7.1803394'),
(10, 11, 'Winduaji', '109.5556557', '-7.1719353'),
(11, 11, 'Sawangan', '109.64492798', '-7.19286959'),
(12, 11, 'Notogiwang', '109.5432623', '-7.1420452'),
(13, 11, 'Domiyang', '109.5746634', '-7.1543118'),
(14, 11, 'Botosari', '109.615243', '-7.1736399'),
(15, 11, 'Lomeneng', '109.5825759', '-7.1936952'),
(16, 14, 'Krompeng', '109.7156225', '-6.9955196'),
(17, 17, 'Kayupuring', '109.7424654', '-7.117024'),
(18, 14, 'Banjarsari', '109.6971714', '-7.0232097'),
(19, 14, 'Batursari', '109.7274465', '-7.0241128'),
(20, 14, 'Donowangun', '109.7229737', '-7.0484788'),
(21, 14, 'Jolotigo', '109.7569149', '-7.0799885'),
(22, 14, 'Kalirejo', '109.7093993', '-7.0139199'),
(23, 14, 'Karangasem', '109.7249126', '-7.0069379'),
(24, 14, 'Mesoyi', '109.7104351', '-7.0597863'),
(25, 14, 'Sengare', '109.7491825', '-7.0451528'),
(26, 14, 'Talun', '109.7130323', '-7.0291837'),
(27, 17, 'Curugmuncar', '109.7164905', '-7.1635842'),
(28, 17, 'Gumelem', '109.7376623', '-7.1798257'),
(29, 17, 'Kasimpar', '109.7304499', '-7.1349137'),
(30, 17, 'Simego', '109.705141', '-7.1811401'),
(31, 17, 'Songgodadi', '109.7009845', '-7.1565045'),
(32, 17, 'Tlogorejo', '109.7009845', '-7.1565045'),
(33, 17, 'Tlogopakis', '109.7049066', '-7.1338398'),
(34, 17, 'Yosorejo', '109.7463575', '-7.1542017'),
(35, 1, 'Babalan Kidul', '109.60269928', '-6.95386183'),
(36, 1, 'Babalan lor', '109.60493088', '-6.94832384'),
(37, 1, 'Bojong minggir', '109.5942626', '-6.9625328'),
(38, 1, 'Bojong wetan', '109.5858535', '-6.9805224'),
(39, 1, 'Bojonglor', '109.57489014', '-6.98223234'),
(40, 1, 'Bukur', '109.5386377', '-7.0040705'),
(41, 1, 'Duwet', '109.5899126', '-6.9849221'),
(42, 1, 'Jajar wayang', '109.611914', '-6.9641787'),
(43, 1, 'Kalipancur', '109.5520538', '-6.9984894'),
(44, 1, 'Karangsari', '109.5520538', '-6.9984894'),
(45, 1, 'Kemasan', '109.6144868', '-6.966382'),
(46, 1, 'Ketitangkidul', '109.6002131', '-6.9764025'),
(47, 1, 'Ketitanglor', '109.6002131', '-6.9764025'),
(48, 1, 'Legok clile', '109.5781016', '-6.9737486'),
(49, 1, 'Menjangan', '109.6087303', '-6.979248'),
(50, 1, 'Pantianom', '109.5374003', '-6.9883961'),
(51, 1, 'Randu muktiwaren', '109.5558028', '-6.9775204'),
(52, 1, 'Rejosari', '109.5942655', '-6.9728622'),
(53, 1, 'Sembung jambu', '109.5863891', '-6.9460854'),
(54, 1, 'Sumur jomblangbogo', '109.5630538', '-6.9902361'),
(55, 1, 'Wangandowo', '109.5897252', '-6.9915269'),
(56, 1, 'Wiroditan', '109.6020671', '-6.9657418'),
(57, 2, 'Coprayan', '109.6361376', '-6.9436949'),
(58, 2, 'Kertijayan', '109.6423704', '-6.9364686'),
(59, 2, 'Pakumbulan', '109.6533685', '-6.9524974'),
(60, 2, 'Paweden', '109.6363233', '-6.9369895'),
(61, 2, 'Simbang wetan', '109.6649545', '-6.9234517'),
(62, 2, 'Watusalam', '109.661612', '-6.9474974'),
(63, 2, 'Wonoyoso', '109.6464408', '-6.9461273'),
(64, 2, 'Bligo', '109.6452455', '-6.9517721'),
(65, 2, 'Sapugarut', '109.6399468', '-6.9468439'),
(66, 2, 'Simbang kulon', '109.6493835', '-6.9373158'),
(67, 3, 'Bligorejo', '109.6849744', '-7.0087147'),
(68, 3, 'Doro', '109.682627', '-7.0324178'),
(69, 3, 'Dororejo', '109.671403', '-7.0316814'),
(70, 3, 'Kalimojosari', '109.6706363', '-7.0038091'),
(71, 3, 'Kutosari', '109.6371976', '-7.0245933'),
(72, 3, 'Larikan', '109.6556388', '-7.0351241'),
(73, 3, 'Lemah Abang', '109.6927263', '-7.063968'),
(74, 3, 'Pungangan', '109.6692944', '-7.0882146'),
(75, 3, 'Randusari', '109.6961522', '-7.0397469'),
(76, 3, 'Rogoselo', '109.6562193', '-7.0571545'),
(77, 3, 'Sawangan', '109.6520199', '-7.0271821'),
(78, 3, 'Sidoharjo', '109.6892701', '-7.0903238'),
(79, 3, 'Wringin agung', '109.6597679', '-7.0097751'),
(80, 4, 'Brengkolang', '109.6023025', '-7.09977'),
(81, 4, 'Gandarum', '', ''),
(82, 4, 'Gejlig', '109.580997', '-7.0127113'),
(83, 4, 'Kajongan', '109.5816518', '-7.0580937'),
(84, 4, 'Kalijoyo', '109.5518024', '-7.067412'),
(85, 4, 'Kebon agung', '109.5664429', '-7.0272179'),
(86, 4, 'Kutorejo', '109.55188751', '-7.03087567'),
(87, 4, 'Pekiringan Alit', '109.55669403', '-7.04399402'),
(88, 4, 'Linggoasri', '109.5836408', '-7.1031889'),
(89, 4, 'Nyamok', '109.5817506', '-7.0356045'),
(90, 4, 'Pekiringan ageng', '109.5769277', '-7.0680906'),
(91, 4, 'Pekiringan alit', '109.5567495', '-7.042898'),
(92, 4, 'Pringsurat', '109.5926564', '-7.0712623'),
(93, 4, 'Rowolaku', '109.5880865', '-7.001766'),
(94, 4, 'Sabarwangi', '109.5516546', '-7.0571703'),
(95, 4, 'Salit', '109.5652291', '-7.0155737'),
(96, 4, 'Sambiroto', '109.570107', '-7.0095271'),
(97, 4, 'Sangkan joyo', '109.5558607', '-7.0174317'),
(98, 4, 'Sinangoh prendeng', '109.5803231', '-7.0472188'),
(99, 4, 'Sokoyoso', '109.5917759', '-7.0531521'),
(100, 4, 'Tambakroto', '109.5350422', '-7.0713392'),
(101, 4, 'Tanjung kulon', '109.5905541', '-7.0404357'),
(102, 4, 'Tanjungsari', '109.5904159', '-7.0288088'),
(103, 4, 'Wonorejo', '109.5382312', '-7.0457096'),
(104, 4, 'Kajen', '109.5765354', '-7.0345294'),
(105, 5, 'Bodas', '109.5579611', '-7.2160635'),
(106, 5, 'Bojongkoneng', '109.508529', '-7.1408587'),
(107, 5, 'Bubak', '109.5224155', '-7.1447776'),
(108, 5, 'Garungwiyoro', '109.5223002', '-7.1696695'),
(109, 5, 'Gembong', '109.5223002', '-7.1696695'),
(110, 5, 'Kandangserang', '109.5184318', '-7.123857'),
(111, 5, 'Karanggondang', '109.6189832', '-7.0624542'),
(112, 5, 'Klesem', '109.5393056', '-7.2253048'),
(113, 5, 'Lambur', '109.515633', '-7.1068184'),
(114, 5, 'Luragung', '109.5002671', '-7.1186459'),
(115, 5, 'Sukoharjo', '109.5510448', '-7.1949483'),
(116, 5, 'Tajur', '109.5255536', '-7.0863079'),
(117, 5, 'Trajumas', '', ''),
(118, 5, 'Wangkelang', '109.533417', '-7.113899'),
(119, 6, 'Banjarejo', '109.6013448', '-7.0337328'),
(120, 6, 'Gutomo', '109.6130833', '-7.0933228'),
(121, 6, 'Karang Gondang', '109.6189832', '-7.0624542'),
(122, 6, 'Karangsari', '109.614023', '-7.0357133'),
(123, 6, 'Kulu', '109.5993746', '-7.0444592'),
(124, 6, 'Kutosari', '109.6371976', '-7.0245933'),
(125, 6, 'Legok kalong', '109.6235107', '-7.0443755'),
(126, 6, 'Limbangan', '109.6131609', '-7.0691088'),
(127, 6, 'Lolong', '109.6413981', '-7.0667235'),
(128, 6, 'Pedawang', '109.6420425', '-7.0656208'),
(129, 6, 'Pododadi', '109.6315986', '-7.0377293'),
(130, 6, 'Sidomukti', '109.6111182', '-7.025059'),
(131, 6, 'Sukosari', '109.6061735', '-7.0076042'),
(132, 6, 'Wonosari', '109.5679045', '-6.9225225'),
(133, 6, 'Kayugeritan', '109.6227754', '-7.0243462'),
(134, 7, 'Jrebeng kembang', '109.6677598', '-6.9797442'),
(135, 7, 'Kaligawe', '-6.9936894', '-6.9936894'),
(136, 7, 'Kalilembu', '109.6981607', '-6.9637041'),
(137, 7, 'Karangdadap', '109.7023203', '-6.9764129'),
(138, 7, 'Kebonrowo pucang', '109.6712717', '-6.969019'),
(139, 7, 'Kebonsari', '109.6849176', '-6.9482434'),
(140, 7, 'Kedung kebo', '109.6869571', '-6.9962193'),
(141, 7, 'Logandeng', '109.6706565', '-6.9886468'),
(142, 7, 'Pagumengan mas', '109.6782336', '-6.9829229'),
(143, 7, 'Pangkah', '109.6892186', '-6.955249'),
(144, 7, 'Pegandon', '109.6892186', '-6.955249'),
(145, 8, 'Ambokembang', '109.6892186', '-6.955249'),
(146, 8, 'Bugangan', '109.6285728', '-6.9615011'),
(147, 8, 'Karangdowo', '109.6346797', '-6.9656227'),
(148, 8, 'Kedung patangewu', '109.6461136', '-6.9849861'),
(149, 8, 'Kwayangan', '109.6547477', '-6.9737922'),
(150, 8, 'Langkap', '109.6615554', '-6.9947514'),
(151, 8, 'Pajomblangan', '109.6628332', '-6.9819218'),
(152, 8, 'Pakisputih', '109.653251', '-6.9858173'),
(153, 8, 'Podo', '109.6475253', '-6.9680551'),
(154, 8, 'Proto', '109.6693466', '-6.9655248'),
(155, 8, 'Rengas', '109.6204115', '-6.9557077'),
(156, 8, 'Rowocacing', '109.6548156', '-6.9987299'),
(157, 8, 'Salakbrojo', '109.6593423', '-6.9635292'),
(158, 8, 'Tangkil kulon', '109.6338931', '-6.9530763'),
(159, 8, 'Tangkil tengah', '109.6338931', '-6.9530763'),
(160, 8, 'Tosaran', '109.6593069', '-6.9864138'),
(161, 8, 'Kedungwuni barat', '109.6393748', '-6.9718577'),
(162, 8, 'Kedungwuni timur', '109.645992', '-6.9769186'),
(163, 8, 'Pekajangan', '', ''),
(164, 9, 'Brondong', '109.6494274', '-6.9578688'),
(165, 9, 'Jagung', '109.5422526', '-7.0207676'),
(166, 9, 'Kalibahan', '109.5124054', '-7.02363487'),
(167, 9, 'Kalimade', '109.5038782', '-7.0089871'),
(168, 9, 'Karangrejo', '109.5245724', '-7.0231185'),
(169, 9, 'Karyomukti', '109.5164471', '-7.0396931'),
(170, 9, 'Kesesi', '109.4991122', '-7.0134776'),
(171, 9, 'Krandon', '109.5212057', '-7.0107312'),
(172, 9, 'Kwasen', '109.528367', '-7.046391'),
(173, 9, 'Kwigaran', '109.5103083', '-6.9838639'),
(174, 9, 'Langensari', '109.5425502', '-7.0349185'),
(175, 9, 'Mulyorejo', '109.5296476', '-6.9916095'),
(176, 9, 'Pantirejo', '109.5209125', '-6.9879237'),
(177, 9, 'Podosari', '109.5281549', '-7.0594251'),
(178, 9, 'Ponolawen', '109.5102621', '-7.0072271'),
(179, 9, 'Sidomulyo', '109.4986503', '-7.0050209'),
(180, 9, 'Sidosari', '109.514718', '-7.0004349'),
(181, 9, 'Srinahan', '109.5014469', '-7.0172341'),
(182, 9, 'Sukorejo', '109.4999517', '-6.9850094'),
(183, 9, 'Ujung negoro', '109.4957202', '-7.0553489'),
(184, 9, 'Watugajah', '109.5315922', '-7.0243568'),
(185, 9, 'Watupayung', '109.5247219', '-7.0167348'),
(186, 9, 'Windurejo', '', ''),
(187, 10, 'Bantar kulon', '109.6640444', '-7.1057857'),
(188, 10, 'Depok', '109.5958193', '-6.8594502'),
(189, 10, 'Kapundutan', '', ''),
(190, 10, 'Kutorembet', '', ''),
(191, 10, 'Lebakbarang', '109.6537328', '-7.1215801'),
(192, 10, 'Mendolo', '', ''),
(193, 10, 'Pamutih', '109.6381923', '-7.0947358'),
(194, 10, 'Sidomulyo', '109.4986503', '-7.0050209'),
(195, 10, 'Tembelang gunung', '109.6426636', '-7.1573638'),
(196, 10, 'Timbangsari', '109.6833665', '-7.1428953'),
(197, 10, 'Wonosido', '109.689899', '-7.150758'),
(198, 12, 'Blacanan', '109.5849216', '-6.8589003'),
(199, 12, 'Blimbing wuluh', '109.5822842', '-6.9156648'),
(200, 12, 'Boyo teluk', '109.6004832', '-6.8734173'),
(201, 12, 'Depok', '109.5958193', '-6.8594502'),
(202, 12, 'Mejasem', '109.5579789', '-6.9264873'),
(203, 12, 'Pait', '109.577934', '-6.9023711'),
(204, 12, 'Rembun', '109.5681372', '-6.8945809'),
(205, 12, 'Siwalan', '109.5865703', '-6.8944422'),
(206, 12, 'Tengeng wetan', '109.5766236', '-6.9245931'),
(207, 12, 'Tengeng kulon', '109.5766236', '-6.9245931'),
(208, 12, 'Tunjungsari', '109.5858314', '-6.9300485'),
(209, 12, 'Wonosari', '109.5679045', '-6.9225225'),
(210, 12, 'Yosorejo', '109.5794047', '-6.8862724'),
(211, 13, 'Bulak pelem', '109.5507979', '-6.9502169'),
(212, 13, 'Bulaksari', '109.5196397', '-6.9708272'),
(213, 13, 'Gebangkerep', '109.5620787', '-6.9576771'),
(214, 13, 'Kalijambe', '109.5485674', '-6.9689176'),
(215, 13, 'Kedungjaran', '109.5801665', '-6.9577753'),
(216, 13, 'Ketanon ageng', '109.5087789', '-6.9624117'),
(217, 13, 'Klunjukan', '109.5810361', '-6.9500998'),
(218, 13, 'Krasakageng', '109.523617', '-6.9544716'),
(219, 13, 'Mrican', '109.5053808', '-6.9706976'),
(220, 13, 'Purwodadi', '109.5622358', '-6.948661'),
(221, 13, 'Purworejo', '109.5701146', '-6.9662711'),
(222, 13, 'Sijeruk', '109.5395676', '-6.9393644'),
(223, 13, 'Sumub kidul', '109.5339287', '-6.9739441'),
(224, 13, 'Sumub lor', '109.5314451', '-6.9652453'),
(225, 13, 'Tegal suruh', '109.5407299', '-6.9544959'),
(226, 13, 'Tegalontar', '109.5700566', '-6.9381758'),
(227, 13, 'Sragi', '109.557176', '-6.9343668'),
(228, 18, 'Bondansari', '109.5922757', '-6.9082513'),
(229, 18, 'Deleg tukang', '109.5967117', '-6.9317946'),
(230, 18, 'Kadipaten', '109.5928924', '-6.9240798'),
(231, 18, 'Kampil', '109.6026809', '-6.9104649'),
(232, 18, 'Karangjati', '109.6030549', '-6.9394927'),
(233, 18, 'Kauman', '109.597462', '-6.9026095'),
(234, 18, 'Kemplong', '109.6062873', '-6.8991866'),
(235, 18, 'Petukangan', '109.6029425', '-6.9250269'),
(236, 18, 'Warukidul', '109.5969025', '-6.9149385'),
(237, 18, 'Warulor', '109.6019337', '-6.9121368'),
(238, 18, 'Wiradesa', '109.6000358', '-6.9191402'),
(239, 18, 'Bener', '109.6232062', '-6.9068074'),
(240, 18, 'Gumawang', '109.60496', '-6.908906'),
(241, 18, 'Kepatihan', '109.6069353', '-6.9049385'),
(242, 18, 'Mayangan', '109.6136172', '-6.8998314'),
(243, 18, 'Pekuncen', '109.6166305', '-6.9045143'),
(244, 19, 'Curug', '109.6321741', '-6.9242698'),
(245, 19, 'Dadirejo', '109.6321741', '-6.9242698'),
(246, 19, 'Jeruksari', '109.6446393', '-6.8719816'),
(247, 19, 'Karang anyar', '109.630211', '-7.0320479'),
(248, 19, 'Karangjompo', '109.632382', '-6.9027133'),
(249, 19, 'Mulyorejo', '109.6372107', '-6.8903155'),
(250, 19, 'Ngalian', '109.6245532', '-6.9438638'),
(251, 19, 'Pacar', '109.6316087', '-6.9088059'),
(252, 19, 'Pandan arum', '109.6305318', '-6.9358124'),
(253, 19, 'Pucung', '109.6174095', '-6.9275088'),
(254, 19, 'Samborejo', '109.6358488', '-6.9161022'),
(255, 19, 'Sidorejo', '109.6244619', '-6.9227841'),
(256, 19, 'Silirejo', '109.6095783', '-6.9295605'),
(257, 19, 'Tanjung', '109.6306935', '-6.9157174'),
(258, 19, 'Tegaldowo', '109.6343392', '-6.8973194'),
(259, 19, 'Wuled', '109.616562', '-6.9437853'),
(260, 20, 'Wonorejo', '109.6165037', '-6.9865184'),
(261, 20, 'Galang Pengampon gede', '109.6431685', '-7.0005026'),
(262, 20, 'Getas', '109.6306146', '-7.0034192'),
(263, 20, 'Gondang', '109.6243329', '-6.991292'),
(264, 20, 'Jetak kidul', '109.6182709', '-7.0095425'),
(265, 20, 'Jetak Lengkong', '109.6220723', '-6.9842143'),
(266, 20, 'kwagean', '109.63488579', '-6.98904782'),
(267, 20, 'Legok gunung', '109.6483884', '-7.0145496'),
(268, 20, 'Pegaden tengah', '109.6280157', '-6.978799'),
(269, 20, 'Rowokembu', '109.6292119', '-6.9903793'),
(270, 20, 'Sampih', '109.6054155', '-6.9915757'),
(271, 20, 'Sastrodirjan', '109.6313443', '-7.0140314'),
(272, 20, 'Surabayan', '109.6213654', '-6.9710715'),
(273, 20, 'Wonopringgo', '109.6181157', '-6.998829'),
(274, 21, 'Api-api', '109.6252446', '-6.8626269'),
(275, 21, 'Bebel', '109.6113037', '-6.8942705'),
(276, 21, 'Pecakaran', '109.6364901', '-6.8625561'),
(277, 21, 'Pesanggrahan', '109.6251398', '-6.8926942'),
(278, 21, 'Rowoyoso', '109.6022246', '-6.8930274'),
(279, 21, 'Semut', '109.6084208', '-6.8635795'),
(280, 21, 'Tratebang', '109.6113495', '-6.8667955'),
(281, 21, 'Werdi', '109.5397564', '-7.1597786'),
(282, 21, 'Wonokerto kulon', '109.61672', '-6.8650736'),
(283, 21, 'Wonokerto wetan', '109.6170013', '-6.8843739'),
(284, 21, 'Sijambe', '109.6201346', '-6.890652'),
(285, 22, 'luar wilayah', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `industri`
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
-- Dumping data untuk tabel `industri`
--

INSERT INTO `industri` (`industri_id`, `id_user`, `nama_pemilik`, `tlp`, `kecamatan`, `desa`, `dukuh`, `rt`, `rw`, `jalan`, `latitude`, `longitude`, `jenis`, `merk`, `pemasaran`, `pendapatan`, `images`) VALUES
(27, 'Admin Disperindag', 'adsasd', '07807808787', 'Buaran', 'asdasd', '', '004', '003', 'kaliwadas', '', '', 'Keripik', 'asda', 'makan sendiri', 1000000000, 'aqua_and_brown.jpg'),
(28, 'user', 'Sasukeeee', '07807808787', 'Doro', 'asdasd', 'Bantul', '99', '003', 'kaliwadas', '', '', 'Lopis', 'asda', 'kesesi', 1000000000, 'lightroom_gray1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `jenis_id` int(11) NOT NULL,
  `jenis_industri` varchar(100) NOT NULL,
  `icons` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`jenis_id`, `jenis_industri`, `icons`) VALUES
(1, 'Kue Basah', '1'),
(2, 'Kue Kering', '2'),
(3, 'Keripik', '3'),
(4, 'Lopis', '4'),
(5, 'Peyek', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` int(11) NOT NULL,
  `nama_kec` varchar(125) NOT NULL,
  `latitud` varchar(100) NOT NULL,
  `longitud` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_kec`, `latitud`, `longitud`) VALUES
(1, ' Bojong', '109.54', '-6.96'),
(2, 'Buaran', '109.61', '-6.9'),
(3, 'Doro', '109.69', '-7.025'),
(4, 'Kajen', '109.56', '-7.06'),
(5, 'Kandangserang', '109.51', '-7.15'),
(6, 'Karanganyar', '109.62', '-7.04'),
(7, 'Karangdadap', '109.68', '-6.97'),
(8, 'Kedungwuni', '109.64', '-6.96'),
(9, 'Kesesi', '109.50', '-7.01'),
(10, 'Lebakbarang', '109.65', '-7.13'),
(11, 'Paninggaran', '109.58', '-7.15'),
(12, 'Siwalan', '109.58', '-6.88'),
(13, 'Sragi', '109.54', '-6.94'),
(14, 'Talun', '109.65', '-7.04'),
(17, 'Petungkriono', '109.73', '-7.14'),
(18, 'Wiradesa', '109.58', '-6.89'),
(19, 'Tirto', '109.54', '-6.94'),
(20, 'Wonopringgo', '109.63', '-6.98'),
(21, 'Wonokerto', '109.62', '-6.86'),
(22, 'luar wilayah', '109.68', '-6.72');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `kelurahan_id` int(11) NOT NULL,
  `kecamatan_id` int(8) NOT NULL,
  `nama_kelurahan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `image`, `desa`, `kecamatan`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'user', 'user@gmail.com', 'IMG-20200215-WA0006.jpg', 'kesesi', 'kesesi', '$2y$10$1kgvYvGGneRxttaHclx2vu/Ilc6pWvfmd4YtAt/l7ROCsxh9NWMom', 2, 1, 1603204122),
(8, 'Admin Disperindag', 'admin@gmail.com', 'mountains_moon_forest_139359_3840x2400.jpg', 'kajen', 'kajen', '$2y$10$PnwiVmOxXzOKREm/fPp51utbNp2e/XKqM/wGnwIGG2/rRZlYffTKy', 1, 1, 1603204184);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
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
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(10, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(6, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
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
-- Dumping data untuk tabel `user_sub_menu`
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
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(11, 'fauzihafizh@gmail.com', 'G5U2kgzakvAqqa68hbTG1j7Xc7Fb4hEFpENOj8c=', 1604636941),
(13, 'pekakomputer21@gmail.com', 'z8GLtyA1zesyHknWjpOAPAi6ATcaRiY4VOsrMec=', 1605414617),
(15, 'useraaa@gmail.com', 'EjhxOa/qvLdXJ9WmWORbVFVHh68xQ2lONoYJ2SA=', 1606105231);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`tamu_id`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `industri`
--
ALTER TABLE `industri`
  ADD PRIMARY KEY (`industri_id`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`kelurahan_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `tamu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT untuk tabel `industri`
--
ALTER TABLE `industri`
  MODIFY `industri_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `jenis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `kelurahan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
