-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 02:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flavrrss`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(12) NOT NULL,
  `id_detail_menu` text NOT NULL,
  `id_meja` int(12) NOT NULL,
  `nama_pemesan` varchar(250) NOT NULL,
  `nomor_hp` varchar(250) NOT NULL,
  `tanggal_pesan` datetime NOT NULL,
  `tanggal_reservasi` date NOT NULL,
  `total_pembayaran` int(12) NOT NULL,
  `total_sudah_dibayar` int(12) NOT NULL,
  `notes` text NOT NULL,
  `batas_pembayaran_dp` datetime NOT NULL,
  `status_pembayaran` varchar(250) NOT NULL,
  `bukti_pembayaran` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_detail_menu`, `id_meja`, `nama_pemesan`, `nomor_hp`, `tanggal_pesan`, `tanggal_reservasi`, `total_pembayaran`, `total_sudah_dibayar`, `notes`, `batas_pembayaran_dp`, `status_pembayaran`, `bukti_pembayaran`) VALUES
(28, 'INV20240221081854', 4, 'Yuna', '07867455', '2024-02-21 08:18:54', '2024-02-21', 35000, 35000, 'tanpa es', '2024-02-22 08:18:54', 'Pesanan Selesai', '21022024021914FullSizeRender.jpg'),
(29, 'INV20240222080216', 3, 'Sausan', '0829384832', '2024-02-22 08:02:16', '2024-02-22', 123500, 123500, 'tanpa es', '2024-02-23 08:02:16', 'Pesanan Selesai', '22022024020242slip152.jpg'),
(30, 'INV20240227201312', 4, 'Dita', '082938483273', '2024-02-27 20:13:12', '2024-02-27', 45000, 45000, 'tanpa jelly (salad Buah)', '2024-02-28 20:13:12', 'Pesanan Selesai', '27022024141347WhatsAppImage2024-02-23at17.10.19(1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_menu`
--

CREATE TABLE `gambar_menu` (
  `id_gambar` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gambar_menu`
--

INSERT INTO `gambar_menu` (`id_gambar`, `id_menu`, `gambar`) VALUES
(8, 8, '0610202109160311Jugosylicuadosquetequitanlaansiedadyteayudanabajardepeso.jpg'),
(9, 8, '06102021091612Esjerukphotography.jpg'),
(10, 7, '06102021091833Sips-KatieChrist.jpg'),
(12, 7, '06102021091907EsTehSerai-LemongrassIceTea.jpg'),
(19, 12, '06102021093111NasiGoreng(IndonesianFriedRice).jpg'),
(20, 12, '06102021093206BrownRiceNasiGoreng(IndonesianFriedRice)IGeorgieEats.jpg'),
(25, 15, '06102021093836SopBuntut_IndonesianOxtailSoup.jpg'),
(26, 11, '06102021093956ResepSotoLamonganAsliJawaTimurDenganSuwiranAyamDanKuahKuning.jpg'),
(27, 1, '14022024144547capcay.jpg'),
(28, 1, '14022024144607capcay2.jpg'),
(29, 2, '14022024144942perkedel.jpg'),
(30, 2, '14022024144953perkedel2.jpg'),
(31, 13, '14022024145224salad.jpg'),
(32, 16, '15022024024138alpukat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Makanan'),
(2, 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `lupa_password`
--

CREATE TABLE `lupa_password` (
  `id_lupa_password` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `pertanyaankeamanan1` varchar(255) NOT NULL,
  `pertanyaankeamanan2` varchar(255) NOT NULL,
  `jawabankeamanan1` varchar(255) NOT NULL,
  `jawabankeamanan2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lupa_password`
--

INSERT INTO `lupa_password` (`id_lupa_password`, `id_pegawai`, `pertanyaankeamanan1`, `pertanyaankeamanan2`, `jawabankeamanan1`, `jawabankeamanan2`) VALUES
(1, 1, 'Berapa angka favorit anda?(Contoh: 99)', 'Siapakah nama hewan peliharaan anda?', '7', 'alfan'),
(2, 3, 'Apa hewan kesayangan anda?', 'Apa cita-cita anda semasa kecil?', 'Harimau Sumatra', 'Progamer');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id_meja` int(11) NOT NULL,
  `nomor_meja` varchar(50) NOT NULL,
  `kapasitas_meja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`id_meja`, `nomor_meja`, `kapasitas_meja`) VALUES
(1, '1', 2),
(2, '2', 3),
(3, '3', 4),
(4, '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `detail_menu` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `stok` enum('Tersedia','Kosong') NOT NULL DEFAULT 'Tersedia',
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `detail_menu`, `kategori`, `stok`, `harga`) VALUES
(1, 'Capcay', 'Olahan Sayur, Kembang Tahu dan Bahan Lainnya', 'Makanan', 'Tersedia', 20000),
(2, 'Perkedel', 'Olahan Kentang, Telor dan Daun Bawang', 'Makanan', 'Tersedia', 2500),
(7, 'Es Teh', 'Jasmine, Lychee, Oolong', 'Minuman', 'Tersedia', 8000),
(8, 'Es Jeruk', 'Nipis, Lemon, Jeruk Asli', 'Minuman', 'Tersedia', 10000),
(11, 'Soto Lamongan ', 'Dengan Topping ayam', 'Makanan', 'Tersedia', 15000),
(12, 'Nasi Goreng', 'Jawa, Mawut, Seafood', 'Makanan', 'Tersedia', 25000),
(13, 'Salad Buah', 'Olahan Buah dan Susu', 'Makanan', 'Tersedia', 15000),
(15, 'Sop Buntut', 'Buntut Sapi', 'Makanan', 'Tersedia', 35000),
(16, 'Es Alpukat', 'Alpukat, Susu, Jelly', 'Minuman', 'Tersedia', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `menu_dibooking`
--

CREATE TABLE `menu_dibooking` (
  `id_menu_dibooking` int(12) NOT NULL,
  `id_detail_menu` text NOT NULL,
  `nama_makanan` varchar(250) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `sub_total` int(12) NOT NULL,
  `status_order` varchar(255) NOT NULL DEFAULT 'success'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_dibooking`
--

INSERT INTO `menu_dibooking` (`id_menu_dibooking`, `id_detail_menu`, `nama_makanan`, `jumlah`, `sub_total`, `status_order`) VALUES
(15, 'INV20211015132542', 'Bakso', 1, 20000, 'success'),
(16, 'INV20211015132542', 'Nasi Goreng', 1, 25000, 'success'),
(17, 'INV20211015133852', 'Bakso', 2, 40000, 'success'),
(18, 'INV20211015133852', 'Es Teh', 2, 16000, 'success'),
(19, 'INV20211016130044', 'Bakso', 2, 40000, 'success'),
(20, 'INV20211016130044', 'Es Jeruk', 2, 20000, 'success'),
(21, 'INV20211027131246', 'Nasi Goreng', 2, 50000, 'success'),
(22, 'INV20211027131246', 'Soto Lamongan ', 2, 30000, 'success'),
(23, 'INV20211027131246', 'Es Jeruk', 4, 40000, 'success'),
(24, 'INV20211027134031', 'Es Jeruk', 2, 20000, 'success'),
(25, 'INV20211027134031', 'Bakso', 2, 40000, 'success'),
(26, 'INV20211029135257', 'Es Jeruk', 1, 10000, 'success'),
(27, 'INV20211029135257', 'Nasi Goreng', 1, 25000, 'success'),
(28, 'INV20211029135257', 'Soto Lamongan ', 1, 15000, 'success'),
(29, 'INV20211029200131', 'Nasi Goreng', 1, 25000, 'success'),
(30, 'INV20211029200131', 'Soto Lamongan ', 1, 15000, 'success'),
(31, 'INV20211029200131', 'Es Jeruk', 1, 10000, 'success'),
(32, 'INV20211029201010', 'Nasi Goreng', 1, 25000, 'success'),
(33, 'INV20211016130044', 'Es Teh', 1, 8000, 'success'),
(34, 'INV20211029135257', 'Es Jeruk', 1, 10000, 'success'),
(35, 'INV20211101132112', 'Bakso', 1, 20000, 'success'),
(36, 'INV20211101132112', 'Es Teh', 1, 8000, 'success'),
(37, 'INV20211101132112', 'Es Jeruk', 1, 10000, 'success'),
(38, 'INV20211101132112', 'Sate Daging', 1, 25000, 'success'),
(39, 'INV20211114143545', 'Es Jeruk', 2, 20000, 'success'),
(40, 'INV20211114143545', 'Soto Lamongan ', 2, 30000, 'success'),
(41, 'INV20211114190627', 'Es Teh', 2, 16000, 'success'),
(42, 'INV20211114190627', 'Bakso', 2, 40000, 'success'),
(43, 'INV20211114143545', 'Milkshake', 1, 15000, 'success'),
(44, 'INV20211114143545', 'Milkshake', 1, 15000, 'success'),
(45, 'INV20240209092455', 'Es Jeruk', 3, 30000, 'success'),
(46, 'INV20240209092455', 'Soto Lamongan ', 4, 60000, 'success'),
(47, 'INV20240209202843', 'Es Jeruk', 2, 20000, 'success'),
(48, 'INV20240209202843', 'Sop Buntut', 2, 70000, 'success'),
(49, 'INV20240209202843', 'Milkshake', 1, 15000, 'success'),
(50, 'INV20240211204835', 'Soto Lamongan ', 2, 30000, 'success'),
(51, 'INV20240211204835', 'Bakso', 2, 40000, 'success'),
(52, 'INV20240211204835', 'Es Jeruk', 4, 40000, 'success'),
(53, 'INV20240213104542', 'Soto Lamongan ', 2, 30000, 'success'),
(54, 'INV20240213104542', 'Es Jeruk', 2, 20000, 'success'),
(55, 'INV20240213104542', 'Soto Lamongan ', 1, 15000, 'success'),
(56, 'INV20240213134440', 'Soto Lamongan ', 1, 15000, 'success'),
(57, 'INV20240213134440', 'Sate Daging', 2, 50000, 'success'),
(58, 'INV20240215112953', 'Perkedel', 2, 5000, 'success'),
(59, 'INV20240215112953', 'Es Jeruk', 2, 20000, 'success'),
(60, 'INV20240215113256', 'Es Jeruk', 3, 30000, 'success'),
(61, 'INV20240215113256', 'Soto Lamongan ', 3, 45000, 'success'),
(62, 'INV20240220104539', 'Soto Lamongan ', 2, 30000, 'success'),
(63, 'INV20240220104539', 'Es Teh', 2, 16000, 'success'),
(64, 'INV20240221081854', 'Es Jeruk', 1, 10000, 'success'),
(65, 'INV20240221081854', 'Nasi Goreng', 1, 25000, 'success'),
(66, 'INV20240222080216', 'Perkedel', 3, 7500, 'success'),
(67, 'INV20240222080216', 'Es Alpukat', 2, 30000, 'success'),
(68, 'INV20240222080216', 'Soto Lamongan ', 2, 30000, 'success'),
(69, 'INV20240222080216', 'Es Teh', 2, 16000, 'success'),
(70, 'INV20240222080216', 'Capcay', 2, 40000, 'success'),
(71, 'INV20240227201312', 'Soto Lamongan ', 1, 15000, 'success'),
(72, 'INV20240227201312', 'Es Jeruk', 1, 10000, 'success'),
(73, 'INV20240227201312', 'Salad Buah', 1, 15000, 'success'),
(74, 'INV20240227201312', 'Perkedel', 2, 5000, 'success');

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_metode` int(12) NOT NULL,
  `nama_merchant` varchar(250) NOT NULL,
  `atas_nama` varchar(250) NOT NULL,
  `kode_pembayaran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id_metode`, `nama_merchant`, `atas_nama`, `kode_pembayaran`) VALUES
(1, 'Dana', 'NaFlavrss', '085212349852'),
(2, 'Bank BCA', 'NaFlavrss', '8952317234'),
(4, 'LinkAja', 'NaFlavrss', '082398521045'),
(5, 'GoPay', 'NaFlavrss', '085912394855');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `jabatan` enum('admin','pegawai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `email`, `alamat`, `password`, `telepon`, `jenis_kelamin`, `jabatan`) VALUES
(3, 'Jamal', 'admin@gmail.com', 'Jl. Anggrek 51 Malang', '289dff07669d7a23de0ef88d2f7129e7', '0851248238', 'Pria', 'admin'),
(6, 'Yuna', 'yuna@gmail.com', 'Kuningan', '6531401f9a6807306651b87e44c05751', '0823191184', 'Perempuan', 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `profil_usaha`
--

CREATE TABLE `profil_usaha` (
  `id` int(12) NOT NULL,
  `nama_usaha` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nomor_telepon` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profil_usaha`
--

INSERT INTO `profil_usaha` (`id`, `nama_usaha`, `deskripsi`, `alamat`, `nomor_telepon`) VALUES
(1, 'Taste Like Home', 'It\'s Feel Like You In Mother\'s House. Different Taste and Many Flvrrs\'s.\r\nJust 10 Capacity For Each Day. Visit Us', 'Jl. Nusa Timur No.34, Kuningan, Jawa Barat', '085202430918');

-- --------------------------------------------------------

--
-- Table structure for table `saran_kritik`
--

CREATE TABLE `saran_kritik` (
  `id_saran` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `gambar_menu`
--
ALTER TABLE `gambar_menu`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lupa_password`
--
ALTER TABLE `lupa_password`
  ADD PRIMARY KEY (`id_lupa_password`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `menu_dibooking`
--
ALTER TABLE `menu_dibooking`
  ADD PRIMARY KEY (`id_menu_dibooking`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `profil_usaha`
--
ALTER TABLE `profil_usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran_kritik`
--
ALTER TABLE `saran_kritik`
  ADD PRIMARY KEY (`id_saran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `gambar_menu`
--
ALTER TABLE `gambar_menu`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `lupa_password`
--
ALTER TABLE `lupa_password`
  MODIFY `id_lupa_password` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `id_meja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu_dibooking`
--
ALTER TABLE `menu_dibooking`
  MODIFY `id_menu_dibooking` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id_metode` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profil_usaha`
--
ALTER TABLE `profil_usaha`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saran_kritik`
--
ALTER TABLE `saran_kritik`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
