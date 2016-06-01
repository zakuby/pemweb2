-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jan 2016 pada 18.19
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buat_janji`
--

CREATE TABLE `buat_janji` (
  `id_janji` int(3) NOT NULL,
  `pasien` varchar(20) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `keluhan` text NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buat_janji`
--

INSERT INTO `buat_janji` (`id_janji`, `pasien`, `jam`, `tanggal`, `keluhan`, `dokter`, `keterangan`) VALUES
(12, 'rokkyseptian', '11:00', '17 February', 'sesak napas tiap malam', 'dyanputri', 'Telah Dikonfirmasi'),
(13, 'rokkyseptian', '19:00', '18 March', 'Berdebar saat melihatnya', 'wawansetiawan', 'Telah Dikonfirmasi'),
(14, 'rokkyseptian', '15:00', '18 March', 'anak saya sakit dok', 'wawansetiawan', 'Telah Dikonfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_dokter`
--

CREATE TABLE `konfirmasi_dokter` (
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Kota` varchar(50) NOT NULL,
  `Propinsi` varchar(30) NOT NULL,
  `Spesialis` varchar(20) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Tanggal_Lahir` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `File` varchar(30) NOT NULL,
  `Level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `obat` varchar(50) NOT NULL,
  `gejala1` varchar(50) DEFAULT NULL,
  `gejala2` varchar(50) DEFAULT NULL,
  `gejala3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama`, `obat`, `gejala1`, `gejala2`, `gejala3`) VALUES
(1, 'Influensa', 'Buah yang kaya akan vitamin C, teh hijau dan hitam', 'Panas dingin dan berkeringat', 'Batuk kering', 'Hidung tersumbat'),
(2, 'Sembelit', 'makanan yang mengandung metisellulosa, magnesium s', 'Sulit buang air besar', 'Tekanan pada perut', 'Perasaan terjadi penyumbatan pada dubur'),
(3, 'Anemia', 'makan makanan yang mengandung zat besi, folat, vit', 'Sakit kepala', 'Wajah Pucat', 'Denyut Jantung tidak teratur'),
(4, 'Diabetes Mellitus', 'Zaitun, manggis, daun sirsak, daun salam, minum ai', 'Sering buang air kecil', 'Sering Kesemutan', 'Berat badan berkurang'),
(5, 'Kanker Prostat', 'makan makanan yang kaya nutrisi seperti  sayur dan', 'Nyeri tulang', 'Urin mengandung darah', 'volume urin berkurang'),
(6, 'Panu', 'hindari rokok dan alkohol,makan bawang putih,hinda', 'Rasa Gatal di seluruh tubuh', 'Kulit terlalu berminyak', 'muncul wana putih di kulit yang gatal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id`, `nama`, `alamat`, `no_telp`, `keterangan`) VALUES
(1, 'Rumah Sakit Islam Malang', 'Jalan Mayor Jendral Haryono 139 Malang', '0341455224', 'Berdiri tanggal : 27 Agustus 1994, Status : Swasta/Islam'),
(2, 'Rumah Sakit Saiful Anwar', 'Jalan J. A. Suprapto No.2, Jawa Timur', '(0341) 366242', 'Umum Negeri'),
(3, 'Rumah Sakit Islam Malang', 'Jalan J. A. Suprapto No.2, Jawa Timur', '0341455224', 'afasfsaf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Kota` varchar(50) NOT NULL,
  `Propinsi` varchar(30) NOT NULL,
  `Spesialis` varchar(20) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Tanggal_Lahir` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `File` varchar(30) NOT NULL,
  `Level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`First_Name`, `Last_Name`, `Alamat`, `Kota`, `Propinsi`, `Spesialis`, `Jenis_Kelamin`, `Username`, `Password`, `Tanggal_Lahir`, `Email`, `File`, `Level`) VALUES
('admin', '01', '-', '-', '-', '', 'Male', 'admin01', '18c6d818ae35a3e8279b5330eda01498', '13 September 1994', 'admin01@gmial.com', '', 3),
('andre', 'mahmud', 'jl. sigura-gura no 40', 'Malang', 'Jawa Timur', '', 'Male', 'andrecaw', '055468ce264fef211103839e1c55750a', '17 October 1994', 'andre@gmail.com', '', 1),
('Dyan', 'Putri', 'Jl. Bina Jaya No.31', 'Malang', 'Jawa Timur', 'Paru-Paru', 'Female', 'dyanputri', 'e10adc3949ba59abbe56e057f20f883e', '16 October 1990', 'dyanput@gmail.com', '', 2),
('Rokky', 'Septian Suhartanto', 'jl.joyo suko no 28', 'Malang', 'Jawa Timur', '', 'Male', 'rokkyseptian', 'e10adc3949ba59abbe56e057f20f883e', '13 September 1994', 'rokky.septians@gmail.com', '', 1),
('muhammad noor', 'taufiq', 'jalan pendidikan 4', 'martapura', 'kalimantan selatan', '', 'Male', 'taufiquhuy', 'e10adc3949ba59abbe56e057f20f883e', '29 June 1995', 'taufiqrahman@gmail.com', '', 1),
('Wawan', 'Setiawan', 'jalan pendidikan 4', 'malang', 'jawa timur', 'Jantung', 'Male', 'wawansetiawan', 'e10adc3949ba59abbe56e057f20f883e', '27 November 1995', 'wawandingdong@gmail.com', 'test.docx', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buat_janji`
--
ALTER TABLE `buat_janji`
  ADD PRIMARY KEY (`id_janji`);

--
-- Indexes for table `konfirmasi_dokter`
--
ALTER TABLE `konfirmasi_dokter`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buat_janji`
--
ALTER TABLE `buat_janji`
  MODIFY `id_janji` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
