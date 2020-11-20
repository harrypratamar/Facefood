-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jul 2018 pada 11.11
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facefood`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `adminname`, `password`) VALUES
(1, 'Artika', 'Artika Chandra Hadiana', 'artika123'),
(2, 'Harry Pratama', 'harry', 'harry123'),
(3, 'harry', 'harry', 'harry123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dessert`
--

CREATE TABLE `dessert` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ketersediaan` varchar(11) NOT NULL,
  `harga` mediumtext NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dessert`
--

INSERT INTO `dessert` (`no`, `nama`, `ketersediaan`, `harga`, `foto`) VALUES
(1, 'Banana Puding', 'Masih', '8000', '23062018085901BananaPudding.jpg'),
(2, 'Strawberry Ice Cream', 'Masih', '12000', '15072018090152StrawberryIcereamSundae.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `drink`
--

CREATE TABLE `drink` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ketersediaan` varchar(10) NOT NULL,
  `harga` mediumtext NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `drink`
--

INSERT INTO `drink` (`no`, `nama`, `ketersediaan`, `harga`, `foto`) VALUES
(1, 'Air Es', 'Masih', '8000', '23062018085927AirEs.jpg'),
(2, 'Es Buah', 'Masih', '10000', '23062018094736EsBuahCampur.png'),
(3, 'Es Cincau', 'Masih', '10000', '29062018031048EsCincau.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `food`
--

CREATE TABLE `food` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ketersediaan` varchar(10) NOT NULL,
  `harga` mediumtext NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `food`
--

INSERT INTO `food` (`no`, `nama`, `ketersediaan`, `harga`, `foto`) VALUES
(1, 'Ayam Bakar', 'Masih', '12000', '23062018091916AyamBakar.jpg'),
(2, 'Ayam Goreng', 'Masih', '12000', '23062018094852AyamGoreng.jpg'),
(3, 'Bebek Goreng', 'Masih', '15000', '24062018131400BebekGoreng.jpg'),
(4, 'Ayam Saus Tiram', 'Masih', '15000', '15072018050511AyamGorengTepungSausAsamManisBumbu.jpg'),
(5, 'Cumi Bakar', 'Masih', '25000', '15072018050733CumiBakar.png'),
(6, 'Sate Ayam', 'Masih', '16000', '15072018051045SateAyam.jpg'),
(7, 'Udang Crispy', 'Masih', '12000', '15072018054007UdangKrispi.jpg'),
(8, 'Sop Ayam', 'Masih', '12500', '15072018054055SopAyam.jpg'),
(9, 'Lele Goreng', 'Masih', '12000', '15072018054219LeleGoreng.jpeg'),
(10, 'Udang Asam Manis', 'Masih', '20000', '15072018054336UdangAsamManis.jpg'),
(11, 'Mie Ayam Jamur', 'Masih', '10000', '15072018054500MieAyamJamur.jpg'),
(12, 'Fettucine Carbonara', 'Masih', '25000', '15072018054540FettuccineCarbonara.jpg'),
(13, 'Kerang Dara', 'Masih', '15000', '15072018054657KerangDara.jpg'),
(14, 'Omurice', 'Masih', '13000', '15072018055015Omurice.jpg'),
(15, 'Sop Buntut', 'Masih', '12500', '15072018055137SopBuntut.jpg'),
(16, 'Sop Iga', 'Masih', '25000', '15072018055223SopIga.jpg'),
(17, 'Cumi Sambal Pedas', 'Masih', '25000', '15072018055459CumiSambalPedas.jpg'),
(18, 'Telur Dadar', 'Masih', '8000', '15072018055621TelurDadar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdessert`
--

CREATE TABLE `orderdessert` (
  `id_od` int(11) NOT NULL,
  `namauser` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` mediumtext NOT NULL,
  `jumlah` mediumtext NOT NULL,
  `totalharga` mediumtext NOT NULL,
  `catatan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdrink`
--

CREATE TABLE `orderdrink` (
  `id_od` int(11) NOT NULL,
  `namauser` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` mediumtext NOT NULL,
  `jumlah` mediumtext NOT NULL,
  `totalharga` mediumtext NOT NULL,
  `catatan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderfood`
--

CREATE TABLE `orderfood` (
  `id_od` int(100) NOT NULL,
  `namauser` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` mediumtext NOT NULL,
  `jumlah` mediumtext NOT NULL,
  `totalharga` mediumtext NOT NULL,
  `catatan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `email`, `role`) VALUES
(1, 'Harry Pratama Ramadhan', 'harrypratama', 'harry123', 'harypratama@gmail.com', '3'),
(2, 'Silvia', 'silvia', 'silvia123', 'silviarifaaziza@gmail.com', ''),
(3, 'Artika Chandra Hadiana', 'artika', 'artika123', 'artikachandra@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `orderdessert`
--
ALTER TABLE `orderdessert`
  ADD PRIMARY KEY (`id_od`);

--
-- Indexes for table `orderdrink`
--
ALTER TABLE `orderdrink`
  ADD PRIMARY KEY (`id_od`);

--
-- Indexes for table `orderfood`
--
ALTER TABLE `orderfood`
  ADD PRIMARY KEY (`id_od`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dessert`
--
ALTER TABLE `dessert`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `drink`
--
ALTER TABLE `drink`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `orderdessert`
--
ALTER TABLE `orderdessert`
  MODIFY `id_od` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orderdrink`
--
ALTER TABLE `orderdrink`
  MODIFY `id_od` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orderfood`
--
ALTER TABLE `orderfood`
  MODIFY `id_od` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
