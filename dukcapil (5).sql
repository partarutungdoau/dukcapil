-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2020 pada 18.12
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dukcapil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `idagama` int(11) NOT NULL,
  `agama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`idagama`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Konghuchu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alasan_pindah`
--

CREATE TABLE `alasan_pindah` (
  `alasan_pindah_id` int(11) NOT NULL,
  `alasan_pindah` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `alasan_pindah`
--

INSERT INTO `alasan_pindah` (`alasan_pindah_id`, `alasan_pindah`) VALUES
(1, 'pekerjaan'),
(2, 'pendidikan'),
(3, 'Keamanan'),
(4, 'Kesehatan'),
(5, 'Perumahan'),
(6, 'Keluarga'),
(7, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa_kel`
--

CREATE TABLE `desa_kel` (
  `id_kel` int(11) NOT NULL,
  `id_kec` int(11) NOT NULL,
  `nama` tinytext NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `desa_kel`
--

INSERT INTO `desa_kel` (`id_kel`, `id_kec`, `nama`, `id_jenis`) VALUES
(1101012001, 110101, 'Keude Bakongan', 4),
(1101012002, 110101, 'Ujung Mangki', 4),
(1101012003, 110101, 'Ujung Padang', 4),
(1101012004, 110101, 'Kampong Drien', 4),
(1101012015, 110101, 'Darul Ikhsan', 4),
(1101012016, 110101, 'Padang Berahan', 4),
(1101012017, 110101, 'Gampong Baro', 4),
(1101022001, 110102, 'Fajar Harapan', 4),
(1101022002, 110102, 'Krueng Batee', 4),
(1101022003, 110102, 'Pasi Kuala Asahan', 4),
(1101022004, 110102, 'Gunung Pulo', 4),
(1101022005, 110102, 'Pulo IE I', 4),
(1101022006, 110102, 'Jambo Manyang', 4),
(1101022007, 110102, 'Simpang Empat', 4),
(1101022008, 110102, 'Limau Purut', 4),
(1101022009, 110102, 'Pulo Kambing', 4),
(1101022010, 110102, 'Kampung Paya', 4),
(1101022011, 110102, 'Krueng Batu', 4),
(1101022012, 110102, 'Krueng Kluet', 4),
(1101022013, 110102, 'Alur Mas', 4),
(1101022014, 110102, 'Simpang Dua', 4),
(1101022015, 110102, 'Simpang Tiga', 4),
(1101022016, 110102, 'Simpang Lhee', 4),
(1101022017, 110102, 'Suag Geuringgeng', 4),
(1101022018, 110102, 'Pasi Kuala Baku', 4),
(1101022019, 110102, 'Kedai Padang', 4),
(1101022020, 110102, 'Kotafajar', 4),
(1101022021, 110102, 'Gunung Pudung', 4),
(1101032001, 110103, 'Suaq Bakong', 4),
(1101032002, 110103, 'Rantau Benuang', 4),
(1101032003, 110103, 'Barat Daya', 4),
(1101032004, 110103, 'Sialang', 4),
(1101032005, 110103, 'Kapeh', 4),
(1101032006, 110103, 'Pulo IE', 4),
(1101032007, 110103, 'Kedai Runding', 4),
(1101032008, 110103, 'Kedai Kandang', 4),
(1101032009, 110103, 'Luar', 4),
(1101032010, 110103, 'Ujong', 4),
(1101032011, 110103, 'Jua', 4),
(1101032012, 110103, 'Pasi Meurapat', 4),
(1101032013, 110103, 'Ujung Pasir', 4),
(1101032014, 110103, 'Geulumbuk', 4),
(1101032015, 110103, 'Pasie Lambang', 4),
(1101032016, 110103, 'Ujung Padang', 4),
(1101032017, 110103, 'Indra Damai', 4),
(1101042001, 110104, 'Bakau Hulu', 4),
(1101042002, 110104, 'Padang Baku', 4),
(1101042003, 110104, 'Manggis Harapan', 4),
(1101042004, 110104, 'Pasar Lama', 4),
(1101042005, 110104, 'Apha', 4),
(1101042006, 110104, 'Ujung Batu', 4),
(1101042007, 110104, 'Pawoh', 4),
(1101042008, 110104, 'Dalam', 4),
(1101042009, 110104, 'Kota Palak', 4),
(1101042010, 110104, 'Cacang', 4),
(1101042011, 110104, 'Tengoh Pisang', 4),
(1101042012, 110104, 'Pisang', 4),
(1101042013, 110104, 'Hulu Pisang', 4),
(1101042014, 110104, 'Tengah Baru', 4),
(1101042015, 110104, 'Lembah Baru', 4),
(1101042016, 110104, 'Padang Baru', 4),
(1101052001, 110105, 'Kuta Buloh II', 4),
(1101052002, 110105, 'Kuta Buloh I', 4),
(1101052003, 110105, 'IE Dingin', 4),
(1101052004, 110105, 'Drien Jalo', 4),
(1101052005, 110105, 'Jambo Papeun', 4),
(1101052006, 110105, 'Buket Mas', 4),
(1101052007, 110105, 'Blang Kuala', 4),
(1101052008, 110105, 'Rot Teungoh', 4),
(1101052009, 110105, 'Alue Baro', 4),
(1101052010, 110105, 'Ladang Tuha', 4),
(1101052011, 110105, 'Lhok Mamplam', 4),
(1101052012, 110105, 'Aron Tunggai', 4),
(1101052013, 110105, 'Blang Teungoh', 4),
(1101052014, 110105, 'Blang Bladeh', 4),
(1101052015, 110105, 'IE Buboh', 4),
(1101052016, 110105, 'Keudai Meukek', 4),
(1101052017, 110105, 'Kota Baro', 4),
(1101052018, 110105, 'Tanjung Harapan', 4),
(1101052019, 110105, 'Labuhan Tarok', 4),
(1101052020, 110105, 'Lhok Aman', 4),
(1101052021, 110105, 'Alue Meutuwah', 4),
(1101052022, 110105, 'Ladang Baro', 4),
(1101052023, 110105, 'Labuhan Tarok II', 4),
(1101062001, 110106, 'Dalam', 4),
(1101062002, 110106, 'Subarang', 4),
(1101062003, 110106, 'Kuta Baro', 4),
(1101062004, 110106, 'Gunung Ketek', 4),
(1101062005, 110106, 'Ladang Panton Luas', 4),
(1101062006, 110106, 'Madat', 4),
(1101062007, 110106, 'Alu Seumirah', 4),
(1101062008, 110106, 'Tengah', 4),
(1101062009, 110106, 'Gunung Cut', 4),
(1101062010, 110106, 'Alur Pinang', 4),
(1101062011, 110106, 'Kuta Blang', 4),
(1101062012, 110106, 'Batee Tunggal', 4),
(1101062013, 110106, 'Ujung Tanoh', 4),
(1101062014, 110106, 'Ujung Kampung', 4),
(1101062015, 110106, 'Jilatang', 4),
(1101062016, 110106, 'Luar', 4),
(1101062017, 110106, 'Lubuk Kayu', 4),
(1101062018, 110106, 'Suaq Hulu', 4),
(1101062019, 110106, 'Tampang', 4),
(1101062020, 110106, 'Payo Nanggadang', 4),
(1101062021, 110106, 'Gadang', 4),
(1101062022, 110106, 'Baru', 4),
(1101062023, 110106, 'Ladang Kasik Putih', 4),
(1101062024, 110106, 'Air Sialang Hilir.', 4),
(1101062025, 110106, 'Air Sialang Hulu', 4),
(1101062026, 110106, 'Air Sialang Tengah', 4),
(1101062027, 110106, 'Balai', 4),
(1101062028, 110106, 'Arafah', 4),
(1101072001, 110107, 'Sikulat', 4),
(1101072002, 110107, 'Sawang I', 4),
(1101072003, 110107, 'Meuligo', 4),
(1101072004, 110107, 'Lhok Pawoh', 4),
(1101072005, 110107, 'Sawang II', 4),
(1101072006, 110107, 'Ujung Karang', 4),
(1101072007, 110107, 'Trieng Meudeuro Baroh', 4),
(1101072008, 110107, 'Trieng Meudeuro Tunong', 4),
(1101072009, 110107, 'Panton Luas', 4),
(1101072010, 110107, 'Simpang Tiga', 4),
(1101072011, 110107, 'Kuta Baro', 4),
(1101072012, 110107, 'Blang Geulinggang', 4),
(1101072013, 110107, 'Mutiara', 4),
(1101072014, 110107, 'Ujung Padang', 4),
(1101072015, 110107, 'Sawang Ba\'u', 4),
(1101082001, 110108, 'Lhok Keutapang', 4),
(1101082002, 110108, 'Hilir', 4),
(1101082003, 110108, 'Padang', 4),
(1101082004, 110108, 'Hulu', 4),
(1101082005, 110108, 'Jambo Apha', 4),
(1101082006, 110108, 'Tepi Air', 4),
(1101082007, 110108, 'Pasar Tapaktuan', 4),
(1101082008, 110108, 'Lhok Bengkuang', 4),
(1101082009, 110108, 'Panton Luas', 4),
(1101082010, 110108, 'Gunung Kerambil', 4),
(1101082011, 110108, 'Air Berundang', 4),
(1101082012, 110108, 'Batu Itam', 4),
(1101082013, 110108, 'Panju Plan', 4),
(1101082014, 110108, 'Lhok Rukam', 4),
(1101082015, 110108, 'Air Pinang', 4),
(1101082016, 110108, 'Lhok Bengkuang Timur', 4),
(1101092001, 110109, 'Kede Trumon', 4),
(1101092002, 110109, 'Ujung Tanoh', 4),
(1101092003, 110109, 'Sigleng', 4),
(1101092004, 110109, 'Ie Meudama', 4),
(1101092005, 110109, 'Tepin Tinggi', 4),
(1101092006, 110109, 'Kuta Baro', 4),
(1101092007, 110109, 'Panton Bilie', 4),
(1101092012, 110109, 'Kuta Padang', 4),
(1101092013, 110109, 'Raket', 4),
(1101092015, 110109, 'Seuneubok Jaya', 4),
(1101092016, 110109, 'Padang Harapan', 4),
(1101102001, 110110, 'Ladang Teungoh', 4),
(1101102002, 110110, 'Pucok Krueng', 4),
(1101102003, 110110, 'Silolo', 4),
(1101102004, 110110, 'Kampong Baru', 4),
(1101102005, 110110, 'Panton Bili', 4),
(1101102006, 110110, 'Paya Teuk', 4),
(1101102007, 110110, 'Ladang Tuha', 4),
(1101102008, 110110, 'Mata Ie', 4),
(1101102009, 110110, 'Ujong Batee', 4),
(1101102010, 110110, 'Lhok Sialang Cut', 4),
(1101102011, 110110, 'Seunebok', 4),
(1101102012, 110110, 'Ie Mirah', 4),
(1101102013, 110110, 'Pasie Rasian', 4),
(1101102014, 110110, 'Ujung Padang Rasian', 4),
(1101102015, 110110, 'Krueng Kalee', 4),
(1101102016, 110110, 'Lhok Sialang Rayeuk', 4),
(1101102017, 110110, 'Pd. Macan Brs', 4),
(1101102018, 110110, 'Teupin Gajah', 4),
(1101102019, 110110, 'Ujung Padang Asahan', 4),
(1101102020, 110110, 'Pulo Ie II', 4),
(1101102021, 110110, 'Pante Raja', 4),
(1101112001, 110111, 'Tengoh Peulumat', 4),
(1101112002, 110111, 'Paya Peulumat', 4),
(1101112003, 110111, 'Padang Peulumat', 4),
(1101112004, 110111, 'Alur Peulumat', 4),
(1101112005, 110111, 'Limau Saring', 4),
(1101112006, 110111, 'Beutong', 4),
(1101112007, 110111, 'Peuneulop', 4),
(1101112008, 110111, 'Gunung Rotan', 4),
(1101112009, 110111, 'Keumumu Hilir', 4),
(1101112010, 110111, 'Keumumu Hulu', 4),
(1101112011, 110111, 'Keumumu Seberang', 4),
(1101112012, 110111, 'Sawang Indah', 4),
(1101122001, 110112, 'Tutong', 4),
(1101122002, 110112, 'Tengah Iboh', 4),
(1101122003, 110112, 'Peulokan', 4),
(1101122004, 110112, 'Kuta Iboh', 4),
(1101122005, 110112, 'Ujung Padang', 4),
(1101122006, 110112, 'Blang Baru', 4),
(1101122007, 110112, 'Blang Poroh', 4),
(1101122008, 110112, 'Pulo Ie', 4),
(1101122009, 110112, 'Suaq Lokan', 4),
(1101122010, 110112, 'Iku Lhung', 4),
(1101122011, 110112, 'Kuta Trieng', 4),
(1101122012, 110112, 'Pante Geulima', 4),
(1101122013, 110112, 'Panton Pawoh', 4),
(1101122014, 110112, 'Batee Meucanang', 4),
(1101122015, 110112, 'Panton Rubek', 4),
(1101132001, 110113, 'Koto Manggamat', 4),
(1101132002, 110113, 'Alur Kejrun', 4),
(1101132003, 110113, 'Jambo Papeun', 4),
(1101132004, 110113, 'Malaka', 4),
(1101132005, 110113, 'Koto Indarung', 4),
(1101132006, 110113, 'Siurai-Urai', 4),
(1101132007, 110113, 'Kampung Sawah', 4),
(1101132008, 110113, 'Kampung Padang', 4),
(1101132009, 110113, 'Pulo Air', 4),
(1101132010, 110113, 'Lawe Melang', 4),
(1101132011, 110113, 'Mersak', 4),
(1101132012, 110113, 'Kampung Tinggi', 4),
(1101132013, 110113, 'Ruak', 4),
(1101142001, 110114, 'Paya Dapur', 4),
(1101142002, 110114, 'Sapik', 4),
(1101142003, 110114, 'Alai', 4),
(1101142004, 110114, 'Durian Kawan', 4),
(1101142005, 110114, 'Lawe Sawah', 4),
(1101142006, 110114, 'Lawe Buluh Didi', 4),
(1101142007, 110114, 'Pucuk Lembang', 4),
(1101142008, 110114, 'Paya Laba', 4),
(1101142009, 110114, 'Lawe Cimanok', 4),
(1101152001, 110115, 'Seubadeh', 4),
(1101152002, 110115, 'Ladang Rimba', 4),
(1101152003, 110115, 'Ujong Pulo Rayeuk', 4),
(1101152004, 110115, 'Sawah Tingkeum', 4),
(1101152005, 110115, 'Simpang', 4),
(1101152006, 110115, 'Ujong Pulo Cut', 4),
(1101152007, 110115, 'Kampung Baru', 4),
(1101152008, 110115, 'Seuleukat', 4),
(1101162005, 110116, 'Pinto Rimba', 4),
(1101162006, 110116, 'Krueng Luas', 4),
(1101162007, 110116, 'Jambo Dalem', 4),
(1101162008, 110116, 'Kapai Seusak', 4),
(1101162009, 110116, 'Seuneubok Punto', 4),
(1101162010, 110116, 'Seuneubok Psk.', 4),
(1101162011, 110116, 'Alur Bujok', 4),
(1101162012, 110116, 'Titi Polem', 4),
(1101172001, 110117, 'Bukit Gadeng', 4),
(1101172002, 110117, 'Rambong', 4),
(1101172003, 110117, 'Seuneubok Keuranji', 4),
(1101172004, 110117, 'Seuneubok Alur Buloh', 4),
(1101172005, 110117, 'Ujong Tanoh', 4),
(1101172006, 110117, 'Gunong Cut', 4),
(1101172007, 110117, 'Gunong Rayeuk', 4),
(1101172008, 110117, 'Beutong', 4),
(1101172009, 110117, 'Jambo Keupok', 4),
(1101172010, 110117, 'Alurduamas', 4),
(1101182001, 110118, 'Ladang Rimba', 4),
(1101182002, 110118, 'Gunong Kapo', 4),
(1101182003, 110118, 'Kampong Teungoh', 4),
(1101182004, 110118, 'Krueng Batee', 4),
(1101182005, 110118, 'Pulo Paya', 4),
(1101182006, 110118, 'Jambo Papeun', 4),
(1101182007, 110118, 'Cot Bayu', 4),
(1101182008, 110118, 'Naca', 4),
(1101182009, 110118, 'Ie Jeureuneh', 4),
(1101182010, 110118, 'Lhok Raya', 4),
(1102012001, 110201, 'Ngkeren', 4),
(1102012002, 110201, 'Rumah Kampung', 4),
(1102012004, 110201, 'Pasir Bangun', 4),
(1102012006, 110201, 'Kubu', 4),
(1102012007, 110201, 'Lawe Kongker', 4),
(1102012008, 110201, 'Kuta Cingkam II', 4),
(1102012009, 110201, 'Muara Baru', 4),
(1102012011, 110201, 'Kuta Batu I', 4),
(1102012012, 110201, 'Kuta Cingkam I', 4),
(1102012013, 110201, 'Kuta Batu II', 4),
(1102012014, 110201, 'Lawe Sempilang', 4),
(1102012015, 110201, 'Prapat Batu Nunggul', 4),
(1102012016, 110201, 'Pulo Sepang', 4),
(1102012017, 110201, 'Rih Mbelang', 4),
(1102012018, 110201, 'Kute Batu Baru', 4),
(1102012019, 110201, 'Darul Amin', 4),
(1102012020, 110201, 'Lawe Lumbang Indah', 4),
(1102012021, 110201, 'Batu Hamparan', 4),
(1102012022, 110201, 'Paye Munje', 4),
(1102012023, 110201, 'Pulo Ndadap', 4),
(1102012024, 110201, 'Pasir Nunggul', 4),
(1102012025, 110201, 'Cingkham Mekhanggun', 4),
(1102012026, 110201, 'Pintu Khimbe', 4),
(1102012027, 110201, 'Lawe Kongker Hilir', 4),
(1102012028, 110201, 'Polu Gadung', 4),
(1102012029, 110201, 'Pasikh Pekhemate', 4),
(1102012030, 110201, 'Pasikh Nunang', 4),
(1102012031, 110201, 'Deleng Kukusen', 4),
(1102022001, 110202, 'Bukit Merdeka', 4),
(1102022002, 110202, 'Darul Aman', 4),
(1102022003, 110202, 'Lawe Kesumpat', 4),
(1102022004, 110202, 'Lawe Tua Gabungan', 4),
(1102022005, 110202, 'Lawe Sigala II', 4),
(1102022006, 110202, 'Lawe Sigala Timur', 4),
(1102022007, 110202, 'Lawe Sigala Barat', 4),
(1102022008, 110202, 'Suka Damai', 4),
(1102022009, 110202, 'Kute Tengah', 4),
(1102022010, 110202, 'Tanah Baru', 4),
(1102022011, 110202, 'Kedataran Gabungan', 4),
(1102022012, 110202, 'Gabungan Parsaroan', 4),
(1102022013, 110202, 'Lawe Loning Gabungan', 4),
(1102022014, 110202, 'Lawe Loning Aman', 4),
(1102022015, 110202, 'Suka Maju', 4),
(1102022016, 110202, 'Lawe Tua Makmur', 4),
(1102022017, 110202, 'Lawe Tua Pusat', 4),
(1102022018, 110202, 'Kute Serke', 4),
(1102022019, 110202, 'Lawe Rakat', 4),
(1102022020, 110202, 'Suka Jaya', 4),
(1102022021, 110202, 'Emiya Batu Dua Ratus', 4),
(1102022022, 110202, 'Sebungke', 4),
(1102022023, 110202, 'Bukit Sepakat', 4),
(1102022024, 110202, 'Lawe Loning Sepakat', 4),
(1102022025, 110202, 'Lawe Loning I', 4),
(1102022026, 110202, 'Gaya Jaya', 4),
(1102022027, 110202, 'Gajah Musara', 4),
(1102022028, 110202, 'Mulie Damai', 4),
(1102022029, 110202, 'Lawe Loning Hakhapen', 4),
(1102022030, 110202, 'Karya Indah', 4),
(1102022031, 110202, 'Kayu Mbelin', 4),
(1102022032, 110202, 'Lawe Sigala Barat Jaya', 4),
(1102022033, 110202, 'Lawe Pekhidinen', 4),
(1102022034, 110202, 'Kertimbang', 4),
(1102022035, 110202, 'Kute Dauh Nitenggau', 4),
(1102032001, 110203, 'Bambel Gabungan', 4),
(1102032002, 110203, 'Kisam', 4),
(1102032005, 110203, 'Lawe Hijo', 4),
(1102032006, 110203, 'Pinding', 4),
(1102032009, 110203, 'Terutung Megara Asli', 4),
(1102032011, 110203, 'Biak Muli', 4),
(1102032012, 110203, 'Kute Lang-Lang', 4),
(1102032013, 110203, 'Pedesi', 4),
(1102032014, 110203, 'Terutung Peyung Hulu', 4),
(1102032015, 110203, 'Terutung Peyung Hilir', 4),
(1102032016, 110203, 'Tualang Sembilar', 4),
(1102032017, 110203, 'Kuning I', 4),
(1102032018, 110203, 'Kuning II', 4),
(1102032019, 110203, 'Cinta Damai', 4),
(1102032020, 110203, 'Likat', 4),
(1102032021, 110203, 'Rikit', 4),
(1102032023, 110203, 'Bambel', 4),
(1102032025, 110203, 'Lawe Kihing', 4),
(1102032026, 110203, 'Terutung Seperai', 4),
(1102032027, 110203, 'Kute Sari', 4),
(1102032028, 110203, 'Kute Antara', 4),
(1102032029, 110203, 'Pulo Perengge', 4),
(1102032031, 110203, 'Pulo Kendondong', 4),
(1102032033, 110203, 'Pancakh Iman', 4),
(1102032034, 110203, 'Biak Muli Bukhu', 4),
(1102032035, 110203, 'Biak Muli Pantai Raja', 4),
(1102032036, 110203, 'Biak Muli Sejahtera', 4),
(1102032037, 110203, 'Lembah Haji', 4),
(1102032038, 110203, 'Terutung Payung Gabungan', 4),
(1102032039, 110203, 'Lawe Hijo Metuah', 4),
(1102032040, 110203, 'Ampera', 4),
(1102032041, 110203, 'Tembilakh Mbakhu', 4),
(1102032042, 110203, 'Kute Lang-Lang Bakhu', 4),
(1102042001, 110204, 'Kota Kutacane', 4),
(1102042002, 110204, 'Perapat Hilir', 4),
(1102042003, 110204, 'Perapat Hulu', 4),
(1102042004, 110204, 'Muara Lawe Bulan', 4),
(1102042005, 110204, 'Mbarung', 4),
(1102042006, 110204, 'Batu Mbulan Asli', 4),
(1102042007, 110204, 'Batu Mbulan I', 4),
(1102042008, 110204, 'Batu Mbulan II', 4),
(1102042009, 110204, 'Kampung Raja', 4),
(1102042010, 110204, 'Pulonas', 4),
(1102042011, 110204, 'Kampung Melayu Gabungan', 4),
(1102042012, 110204, 'Terutung Pedi', 4),
(1102042013, 110204, 'Kute Rih', 4),
(1102042014, 110204, 'Gumpang Jaya', 4),
(1102042015, 110204, 'Pulo Latong', 4),
(1102042016, 110204, 'Kutacane Lama', 4),
(1102042017, 110204, 'Batum Bln Baru', 4),
(1102042018, 110204, 'Pulo Peding', 4),
(1102042019, 110204, 'Mendabe', 4),
(1102042020, 110204, 'Ujung Barat', 4),
(1102042021, 110204, 'Perapat Titi Panjang', 4),
(1102042022, 110204, 'Perapat Sepakat', 4),
(1102042023, 110204, 'Alas Memancar', 4),
(1102042024, 110204, 'Batu Mbulan Sepakat', 4),
(1102042025, 110204, 'Pulo Sanggakh', 4),
(1102042026, 110204, 'Melayu I', 4),
(1102042027, 110204, 'Mburung Datuk Sekhudane', 4),
(1102052005, 110205, 'Salang Alas', 4),
(1102052009, 110205, 'Kute Pasir', 4),
(1102052011, 110205, 'Purwodadi', 4),
(1102052012, 110205, 'Kute Tinggi', 4),
(1102052013, 110205, 'Kampung Baru', 4),
(1102052014, 110205, 'Peranginan', 4),
(1102052015, 110205, 'Natam', 4),
(1102052025, 110205, 'Kumbang Jaya', 4),
(1102052026, 110205, 'Kumbang Indah', 4),
(1102052027, 110205, 'Natam Baru', 4),
(1102052029, 110205, 'Delem Megakhae', 4),
(1102052030, 110205, 'Lawe Bekung', 4),
(1102052031, 110205, 'Lawe Bekung Tampahan', 4),
(1102052032, 110205, 'Badar Indah', 4),
(1102052033, 110205, 'Batu Mberong', 4),
(1102052034, 110205, 'Tanah Merah', 4),
(1102052035, 110205, 'Tanoh Megakhe', 4),
(1102052036, 110205, 'Lawe Sekekhah', 4),
(1102062001, 110206, 'Pardomuan II', 4),
(1102062002, 110206, 'Lawe Desky I', 4),
(1102062003, 110206, 'Lawe Desky Sabas', 4),
(1102062004, 110206, 'Pardomuan I', 4),
(1102062005, 110206, 'Cinta Damai', 4),
(1102062006, 110206, 'Pardamean', 4),
(1102062007, 110206, 'Lawe Desky Tengah', 4),
(1102062008, 110206, 'Kute Bakti', 4),
(1102062010, 110206, 'Muara Situlen', 4),
(1102062011, 110206, 'Sejahtera', 4),
(1102062012, 110206, 'Kute Makmur', 4),
(1102062013, 110206, 'Perdamaian', 4),
(1102062014, 110206, 'Lawe Mantik', 4),
(1102062015, 110206, 'Cinta Makmur', 4),
(1102062016, 110206, 'Muara Setia', 4),
(1102062017, 110206, 'Tanoh Alas', 4),
(1102062018, 110206, 'Sejahtera Baru', 4),
(1102062024, 110206, 'Lawe Tawakh', 4),
(1102062025, 110206, 'Sabilussalam', 4),
(1102062026, 110206, 'Desky Jaya', 4),
(1102062027, 110206, 'Pintu Alas', 4),
(1102072001, 110207, 'Gulo', 4),
(1102072002, 110207, 'Pulo Piku', 4),
(1102072003, 110207, 'Terutung Kute', 4),
(1102072004, 110207, 'Kuta Ujung', 4),
(1102072005, 110207, 'Lawe Setul', 4),
(1102072006, 110207, 'Kite Merangun', 4),
(1102072007, 110207, 'Mamas', 4),
(1102072008, 110207, 'Tanjung Lama', 4),
(1102072009, 110207, 'Tanjung Muda', 4),
(1102072010, 110207, 'Rambung Teldak', 4),
(1102072011, 110207, 'Tanjung Aman', 4),
(1102072012, 110207, 'Seri Muda', 4),
(1102072013, 110207, 'Ujung Baru', 4),
(1102072014, 110207, 'Kute Rambe', 4),
(1102072015, 110207, 'Mamas Baru', 4),
(1102072016, 110207, 'Rambung Jaya', 4),
(1102072017, 110207, 'Makmur Jaya', 4),
(1102072018, 110207, 'Darul Makmur', 4),
(1102072019, 110207, 'Tanjung Mbakhu', 4),
(1102072020, 110207, 'Pulo Gadung', 4),
(1102072021, 110207, 'Kokthan Jaya', 4),
(1102072022, 110207, 'Istikamah', 4),
(1102072023, 110207, 'Lawe Mamas Indah', 4),
(1102072024, 110207, 'Tanjung Leuser', 4),
(1102072025, 110207, 'Simpang Empat Tanjung', 4),
(1102072026, 110207, 'Lawe Pinis', 4),
(1102072027, 110207, 'Buntul Kendawi', 4),
(1102072028, 110207, 'Kuning Abadi', 4),
(1102082001, 110208, 'Pasir Gala', 4),
(1102082002, 110208, 'Pasir Penjengakan', 4),
(1102082003, 110208, 'Kutem Baru', 4),
(1102082004, 110208, 'Lawe Sagu Hulu', 4),
(1102082005, 110208, 'Lawe Sagu Hilir', 4),
(1102082006, 110208, 'Kute Bantil', 4),
(1102082011, 110208, 'Lawe Kolok', 4),
(1102082012, 110208, 'Lawe Rutung', 4),
(1102082013, 110208, 'Kampung Nangka', 4),
(1102082014, 110208, 'Tenembak Juhar', 4),
(1102082015, 110208, 'Simpang Empat', 4),
(1102082016, 110208, 'Kuta Buluh Botong', 4),
(1102082017, 110208, 'Katembaru Bencawan', 4),
(1102082018, 110208, 'Lawe Kinge', 4),
(1102082019, 110208, 'Kd. Mbelang Mandiri', 4),
(1102082020, 110208, 'Mbacang Racun', 4),
(1102082021, 110208, 'Telaga Mekar', 4),
(1102082023, 110208, 'Pulonas Baru', 4),
(1102082025, 110208, 'Kuta Genting', 4),
(1102082026, 110208, 'Lawe Sagu Baru', 4),
(1102082027, 110208, 'Lawe Sagu', 4),
(1102082028, 110208, 'Pekhapat Timur', 4),
(1102082029, 110208, 'Bahagia', 4),
(1102082030, 110208, 'Kuta Galuh Asli', 4),
(1102092001, 110209, 'Kute Lengat Pangan', 4),
(1102092002, 110209, 'Kute Lengat Selian', 4),
(1102092003, 110209, 'Tualang Baru', 4),
(1102092004, 110209, 'Alur Buluh', 4),
(1102092005, 110209, 'Maha Singkil', 4),
(1102092006, 110209, 'Tenembak Bintang', 4),
(1102092007, 110209, 'Kute Lingga', 4),
(1102092008, 110209, 'Rikit Bur', 4),
(1102092010, 110209, 'Kerukunan', 4),
(1102092011, 110209, 'Lawe Dua', 4),
(1102092012, 110209, 'Rema', 4),
(1102092013, 110209, 'Bambel Baru', 4),
(1102092014, 110209, 'Pejuang', 4),
(1102092015, 110209, 'Darussalam', 4),
(1102092016, 110209, 'Amaliah', 4),
(1102092017, 110209, 'Sebudi Jaya', 4),
(1102092018, 110209, 'Gumpang', 4),
(1102092019, 110209, 'Kute Gekhat', 4),
(1102092020, 110209, 'Paye Khambung', 4),
(1102092021, 110209, 'Mbak Sako', 4),
(1102092022, 110209, 'Darul Imami', 4),
(1102092023, 110209, 'Bukit Bur-II', 4),
(1102092024, 110209, 'Kute Empat Lima', 4),
(1102102001, 110210, 'Simpang Semadam', 4),
(1102102002, 110210, 'Semadam Awal', 4),
(1102102003, 110210, 'Semadam Asal', 4),
(1102102004, 110210, 'Lawe Kinga Gabungan', 4),
(1102102005, 110210, 'Lawe Kinga Tebing Tinggi', 4),
(1102102006, 110210, 'Kebun Sere', 4),
(1102102007, 110210, 'Laawe Berigin Horas', 4),
(1102102008, 110210, 'Lawe. Berigin Gayo', 4),
(1102102009, 110210, 'Suka Makmur', 4),
(1102102010, 110210, 'Pasar Puntung', 4),
(1102102011, 110210, 'Titi Pasir', 4),
(1102102012, 110210, 'Lawe Petanduk', 4),
(1102102013, 110210, 'Ngkeran Alur Buluh', 4),
(1102102014, 110210, 'Kampung Baru', 4),
(1102102015, 110210, 'Sepakat Segenap', 4),
(1102102016, 110210, 'Selamat Indah', 4),
(1102102017, 110210, 'Lawe Kinge', 4),
(1102102018, 110210, 'Lawe Mejilai', 4),
(1102102019, 110210, 'Lawe Petanduk-II', 4),
(1102112004, 110211, 'Titi Mas', 4),
(1102112005, 110211, 'Meranti', 4),
(1102112006, 110211, 'Kute Lang-Lang', 4),
(1102112007, 110211, 'Lawe Sumur', 4),
(1102112008, 110211, 'Perdamaian', 4),
(1102112009, 110211, 'Salim Pipit', 4),
(1102112010, 110211, 'Penguhapan', 4),
(1102112011, 110211, 'Lumban Tua', 4),
(1102112012, 110211, 'Mutiara Damai', 4),
(1102112013, 110211, 'Dolok Nauli', 4),
(1102112014, 110211, 'Tuhi Jongkat', 4),
(1102112015, 110211, 'Uning Sigugur', 4),
(1102112016, 110211, 'Lumban Sitio', 4),
(1102112017, 110211, 'Lawe Malum', 4),
(1102112018, 110211, 'Alur Baning', 4),
(1102112019, 110211, 'Lingge Alas', 4),
(1102112020, 110211, 'Khambung Tumbung', 4),
(1102112021, 110211, 'Tuah Mesade', 4),
(1102112022, 110211, 'Sumukh Alas', 4),
(1102112023, 110211, 'Alukh Bakhu', 4),
(1102112024, 110211, 'Sepekhiding', 4),
(1102112025, 110211, 'Tanoh Subukh', 4),
(1102112026, 110211, 'Pinggan Mbelang', 4),
(1102112027, 110211, 'Sigai Indah', 4),
(1102112028, 110211, 'Ukekh Deleng', 4),
(1102112029, 110211, 'Alas Mesikhat', 4),
(1102112030, 110211, 'Titi Hakhapen', 4),
(1102122001, 110212, 'Aunan Sepakat', 4),
(1102122002, 110212, 'Lawe Penanggalan', 4),
(1102122003, 110212, 'Lawe Mengkudu', 4),
(1102122004, 110212, 'Jambur Lak-lak', 4),
(1102122005, 110212, 'Simpang Tiga Jongar', 4),
(1102122006, 110212, 'Jongar Asli', 4),
(1102122007, 110212, 'Ketambe', 4),
(1102122008, 110212, 'Rumah Bundar', 4),
(1102122009, 110212, 'Penyeb. Cingkam', 4),
(1102122010, 110212, 'Deleng Damar', 4),
(1102122011, 110212, 'Bintang Bener', 4),
(1102122012, 110212, 'Sukarimbun', 4),
(1102122013, 110212, 'Lawe Aunen', 4),
(1102122014, 110212, 'Bener Bepapah', 4),
(1102122015, 110212, 'Penungkenen', 4),
(1102122016, 110212, 'Datok Pining', 4),
(1102122017, 110212, 'Kati Maju', 4),
(1102122018, 110212, 'Leuser', 4),
(1102122019, 110212, 'Jati Sara', 4),
(1102122020, 110212, 'Buket Mbakhu', 4),
(1102122021, 110212, 'Kayu Mentangur', 4),
(1102122022, 110212, 'Lawe Sembekan', 4),
(1102122023, 110212, 'Lawe Bekhingin', 4),
(1102122024, 110212, 'Lawe Ger-Ger', 4),
(1102122025, 110212, 'Simpur Jaya', 4),
(1102132001, 110213, 'Salang Baru', 4),
(1102132002, 110213, 'Ranta Dior', 4),
(1102132003, 110213, 'Lembah Alas', 4),
(1102132004, 110213, 'Tenembak Lang-Lang', 4),
(1102132005, 110213, 'Salang Sigotom', 4),
(1102132006, 110213, 'Tualang Lama', 4),
(1102132007, 110213, 'Gusung Batu', 4),
(1102132008, 110213, 'Kayu Pangor', 4),
(1102132009, 110213, 'Sepakat', 4),
(1102132010, 110213, 'Lawe Pangkat', 4),
(1102132011, 110213, 'Bunga Melur', 4),
(1102132012, 110213, 'Penampaan', 4),
(1102132013, 110213, 'Terutung Mbelang', 4),
(1102132014, 110213, 'Salang Muara', 4),
(1102132015, 110213, 'Lawe Hakhum', 4),
(1102132016, 110213, 'Tanoh Khukahen', 4),
(1102132017, 110213, 'Tading Niulihi', 4),
(1102132018, 110213, 'Peseluk Pesimbe', 4),
(1102132019, 110213, 'Kane Lot', 4),
(1102132020, 110213, 'Muhajirin', 4),
(1102132021, 110213, 'Beriring Naru', 4),
(1102132022, 110213, 'Kati Jeroh', 4),
(1102142001, 110214, 'Terutung Megara Lawe Pasaran', 4),
(1102142002, 110214, 'Kisam Gabungan', 4),
(1102142003, 110214, 'Kisam Kute Pasir', 4),
(1102142004, 110214, 'Lawe Sumur', 4),
(1102142005, 110214, 'Lawe Sumur Baru', 4),
(1102142006, 110214, 'Kuta Lesung', 4),
(1102142007, 110214, 'Berandang', 4),
(1102142008, 110214, 'Kute Bunin', 4),
(1102142009, 110214, 'Buah Pala', 4),
(1102142010, 110214, 'Penosan', 4),
(1102142011, 110214, 'Tengku Mbelim', 4),
(1102142012, 110214, 'Megakhe Bakhu', 4),
(1102142013, 110214, 'Kisam Lestari', 4),
(1102142014, 110214, 'Kisam Kue Khambe', 4),
(1102142015, 110214, 'Lawe Polak', 4),
(1102142016, 110214, 'Lawe Semukh Sepakat', 4),
(1102142017, 110214, 'Setia Baru', 4),
(1102142018, 110214, 'Teger Miko', 4),
(1102152001, 110215, 'Salim Pinim', 4),
(1102152002, 110215, 'Jambur Damar', 4),
(1102152003, 110215, 'Alur Langsat', 4),
(1102152004, 110215, 'Rambah Sayang', 4),
(1102152006, 110215, 'Rumah Luar', 4),
(1102152007, 110215, 'Tenembak Alas', 4),
(1102152008, 110215, 'Lawe Tungkal', 4),
(1102152009, 110215, 'Salim Pinim II', 4),
(1102152010, 110215, 'Jambukh Pekhmate', 4),
(1102152011, 110215, 'Khutung Mbelang', 4),
(1102152012, 110215, 'Timang Khase', 4),
(1102152013, 110215, 'Stambul Jaya', 4),
(1102152014, 110215, 'Alukh Nangke', 4),
(1102152015, 110215, 'Mejile', 4),
(1102162001, 110216, 'Bintang Alga Musara', 4),
(1102162002, 110216, 'Bukit Bintang Indah', 4),
(1102162003, 110216, 'Tanjung Sari', 4),
(1102162004, 110216, 'Bunbun Alas', 4),
(1102162005, 110216, 'Naga Timbul', 4),
(1102162006, 110216, 'Gunung Pak-Pak', 4),
(1102162007, 110216, 'Bukit Mekhiah', 4),
(1102162008, 110216, 'Permata Musara', 4),
(1102162009, 110216, 'Laut Tawar', 4),
(1102162010, 110216, 'Kane Mende', 4),
(1102162011, 110216, 'Lawe Sekhakut', 4),
(1102162012, 110216, 'Bunbun Indah War', 4),
(1102162013, 110216, 'Suka Damai', 4),
(1102162014, 110216, 'Tanah Khekhine', 4),
(1102162015, 110216, 'Punce Nali', 4),
(1102162016, 110216, 'Sade Ate', 4),
(1102162017, 110216, 'Akhih Majile', 4),
(1102162018, 110216, 'Ukhat Peseluk', 4),
(1102162019, 110216, 'Tunas Mude', 4),
(1102162020, 110216, 'Gaye Sendah', 4),
(1102162021, 110216, 'Hakhapen', 4),
(1102162022, 110216, 'Kompas', 4),
(1102162023, 110216, 'Sepakat', 4),
(1103012001, 110301, 'Alue Luddin Sa', 4),
(1103012002, 110301, 'Alue Luddin Dua', 4),
(1103012003, 110301, 'Alue Dalam', 4),
(1103012004, 110301, 'Dama Pulo Sa', 4),
(1103012005, 110301, 'Dama Pulo Dua', 4),
(1103012006, 110301, 'Buket Kulam', 4),
(1103012007, 110301, 'Seuneubok Teungoh', 4),
(1103012008, 110301, 'Jungka Gajah', 4),
(1103012009, 110301, 'Seuneubok Simpang', 4),
(1103012010, 110301, 'Matang Pineung', 4),
(1103012011, 110301, 'Lhok Geulumpang', 4),
(1103012012, 110301, 'Blang Buket', 4),
(1103012013, 110301, 'Meunasah Keutapang', 4),
(1103012014, 110301, 'Buket Rumia', 4),
(1103012015, 110301, 'Alue Gadeng', 4),
(1103012016, 110301, 'Kapai Baro', 4),
(1103012017, 110301, 'Seuneubok Tuha Sa', 4),
(1103012018, 110301, 'Seuneubok Tuha Dua', 4),
(1103012019, 110301, 'Seuneubok Buloh', 4),
(1103012020, 110301, 'Gaseh Sayang', 4),
(1103012021, 110301, 'Alue Lhok', 4),
(1103012022, 110301, 'Trieng Gadeng', 4),
(1103012023, 110301, 'Grong-Grong', 4),
(1103012024, 110301, 'Matang Geutou', 4),
(1103012025, 110301, 'Alue Merbo', 4),
(1103012026, 110301, 'Buket Raya', 4),
(1103012027, 110301, 'Gampong Keude', 4),
(1103012028, 110301, 'Peukan Idi Cut', 4),
(1103012029, 110301, 'Gampong Beunot', 4),
(1103012030, 110301, 'Seuneubok Baroh', 4),
(1103012031, 110301, 'Teupin Drum', 4),
(1103012032, 110301, 'Kuala Idi Cut', 4),
(1103012034, 110301, 'Seuneubok Aceh', 4),
(1103012035, 110301, 'Gampong Baro', 4),
(1103012036, 110301, 'Bagok Panah Sa', 4),
(1103012037, 110301, 'Bagok Panah Dua', 4),
(1103012038, 110301, 'Bagok Panah Lhee', 4),
(1103012039, 110301, 'Bagok Panah Peut', 4),
(1103012040, 110301, 'Buket Tualang', 4),
(1103012041, 110301, 'Keumuneng Sa', 4),
(1103012042, 110301, 'Keumuneng Dua', 4),
(1103012043, 110301, 'Keumuneng Lhee', 4),
(1103012044, 110301, 'Keumuneng Peut', 4),
(1103012045, 110301, 'Keumuneng Limong', 4),
(1103012046, 110301, 'Meunasah Blang', 4),
(1103022001, 110302, 'Blang Keumahang', 4),
(1103022002, 110302, 'Blang Jambee', 4),
(1103022003, 110302, 'Keumuneng', 4),
(1103022004, 110302, 'Ladang Baro', 4),
(1103022005, 110302, 'Buket Panyang', 4),
(1103022006, 110302, 'Seuneubok Rambong', 4),
(1103022007, 110302, 'Seuneubok Baro', 4),
(1103022008, 110302, 'Blang Mideun', 4),
(1103022009, 110302, 'Paya Bakong', 4),
(1103022010, 110302, 'Teupin Raya', 4),
(1103022011, 110302, 'Lhok Rambong', 4),
(1103022012, 110302, 'Julok Tunong', 4),
(1103022013, 110302, 'Ulee Ateung', 4),
(1103022014, 110302, 'Ulee Blang', 4),
(1103022015, 110302, 'Labuhan', 4),
(1103022016, 110302, 'Naleung', 4),
(1103022017, 110302, 'Mane Rampak', 4),
(1103022018, 110302, 'Matang', 4),
(1103022019, 110302, 'Blang Uyok', 4),
(1103022020, 110302, 'Blang Pauh Sa', 4),
(1103022021, 110302, 'Blang Pauh Dua', 4),
(1103022022, 110302, 'Ulee Tanoh', 4),
(1103022023, 110302, 'Keude Kuta Binjei', 4),
(1103022024, 110302, 'Buket Seuraja', 4),
(1103022025, 110302, 'Kuala Geulumpang', 4),
(1103022026, 110302, 'Gampong Baro', 4),
(1103022027, 110302, 'Tumpok Teungoh', 4),
(1103022028, 110302, 'Seumatang', 4),
(1103022029, 110302, 'Ujong Tunong', 4),
(1103022030, 110302, 'Bukit Dindeng', 4),
(1103022031, 110302, 'Paya Pasi', 4),
(1103022032, 110302, 'Alue Cek Doi', 4),
(1103022033, 110302, 'Blang Gleum', 4),
(1103022034, 110302, 'Tanjong Tok Blang', 4),
(1103022035, 110302, 'Buket Makmu', 4),
(1103022036, 110302, 'Lhok Seuntang', 4),
(1103022037, 110302, 'Simpang Lhee', 4),
(1103032001, 110303, 'Gampong Jawa', 4),
(1103032002, 110303, 'Keude Blang', 4),
(1103032003, 110303, 'Tanoh Anoe', 4),
(1103032004, 110303, 'Kuala Peudawa Puntong', 4),
(1103032005, 110303, 'Gampong Aceh', 4),
(1103032006, 110303, 'Kuta Blang', 4),
(1103032007, 110303, 'Gampong Tanjong', 4),
(1103032008, 110303, 'Blang Geulumpang', 4),
(1103032009, 110303, 'Meunasah Pu\'uk', 4),
(1103032010, 110303, 'Bantayan Timu', 4),
(1103032011, 110303, 'Keutapang Mameh', 4),
(1103032012, 110303, 'Seuneubok Rambong', 4),
(1103032013, 110303, 'Kuala Idi', 4),
(1103032014, 110303, 'Keude Aceh', 4),
(1103032023, 110303, 'Seuneubok Bacee', 4),
(1103032029, 110303, 'Titi Baro', 4),
(1103032047, 110303, 'Tanjong Kapai', 4),
(1103032048, 110303, 'Alue Dua Muka O', 4),
(1103032049, 110303, 'Alue Dua Muka S', 4),
(1103032050, 110303, 'Ulee Blang', 4),
(1103032051, 110303, 'Buket Jok', 4),
(1103032052, 110303, 'Buket Meulinteung', 4),
(1103032053, 110303, 'Gampong Jalan', 4),
(1103032054, 110303, 'Teupin Batee', 4),
(1103032055, 110303, 'Buket Langa', 4),
(1103032056, 110303, 'Buket Pala', 4),
(1103032057, 110303, 'Buket Juara', 4),
(1103032058, 110303, 'Seuneubok Tutong', 4),
(1103032059, 110303, 'Seuneubok Tuha', 4),
(1103032060, 110303, 'Sampoimah', 4),
(1103032061, 110303, 'Dama pulo', 4),
(1103032062, 110303, 'Gureb Blang', 4),
(1103032064, 110303, 'Gampong Baro', 4),
(1103032065, 110303, 'SeunebokTeungoh P Puntong', 4),
(1103032067, 110303, 'Kuta Lawah', 4),
(1103042001, 110304, 'Jambo Labu', 4),
(1103042002, 110304, 'Alue Canang', 4),
(1103042003, 110304, 'Alue Drien', 4),
(1103042004, 110304, 'Buket Tiga', 4),
(1103042005, 110304, 'Benteng', 4),
(1103042006, 110304, 'Afdeling II Bukit', 4),
(1103042007, 110304, 'Keumuneng Hulu', 4),
(1103042008, 110304, 'Peutow', 4),
(1103042009, 110304, 'Alue Buloh', 4),
(1103042010, 110304, 'Alue Teh', 4),
(1103042011, 110304, 'Paya Rambong', 4),
(1103042012, 110304, 'Alue Gadeng SA', 4),
(1103042013, 110304, 'Paya Tampah', 4),
(1103042014, 110304, 'Paya Bili Dua', 4),
(1103042015, 110304, 'Paya Bili Sa', 4),
(1103042016, 110304, 'Paya Peulawi', 4),
(1103042017, 110304, 'Keude Birem', 4),
(1103042018, 110304, 'Bayeun', 4),
(1103042019, 110304, 'Aramiyah', 4),
(1103042020, 110304, 'Blang Tualang', 4),
(1103042021, 110304, 'Buket Seuleumak', 4),
(1103042022, 110304, 'Birem Rayeuk', 4),
(1103042023, 110304, 'Alue Gadeng GP', 4),
(1103042024, 110304, 'Alue Gadeng II', 4),
(1103042025, 110304, 'Alue Sentang', 4),
(1103042026, 110304, 'Merbou Dua', 4),
(1103042027, 110304, 'Alue Nyamuk', 4),
(1103052001, 110305, 'Lokop', 4),
(1103052002, 110305, 'Terujak', 4),
(1103052003, 110305, 'Tualang', 4),
(1103052004, 110305, 'Leles', 4),
(1103052005, 110305, 'Ujung Karang', 4),
(1103052006, 110305, 'Nalon', 4),
(1103052007, 110305, 'Jering', 4),
(1103052008, 110305, 'Loot', 4),
(1103052009, 110305, 'Sekualan', 4),
(1103052010, 110305, 'Sunti', 4),
(1103052011, 110305, 'Umah Taring', 4),
(1103052012, 110305, 'Bunin', 4),
(1103052013, 110305, 'Sembuang', 4),
(1103052014, 110305, 'Seuleumak', 4),
(1103052015, 110305, 'Mesir', 4),
(1103052016, 110305, 'Rampah', 4),
(1103052022, 110305, 'Arul Durin', 4),
(1103062001, 110306, 'Keude Bagok Sa', 4),
(1103062002, 110306, 'Gampong Keude Bagok Dua', 4),
(1103062003, 110306, 'Asan Tanjong', 4),
(1103062004, 110306, 'Bantayan', 4),
(1103062005, 110306, 'Matang Seuleumak', 4),
(1103062006, 110306, 'Teupin Pukat', 4),
(1103062007, 110306, 'Matang Neuheun', 4),
(1103062008, 110306, 'Kuala Bagok', 4),
(1103062009, 110306, 'Meunasah Teungoh', 4),
(1103062010, 110306, 'Medang Ara', 4),
(1103062011, 110306, 'Peulawi', 4),
(1103062012, 110306, 'Baroh Bugeng', 4),
(1103062013, 110306, 'Seumatang Aron', 4),
(1103062014, 110306, 'Blang Panjou', 4),
(1103062025, 110306, 'Pulo U', 4),
(1103062026, 110306, 'Cot Asan', 4),
(1103062027, 110306, 'Paya Enjee', 4),
(1103062028, 110306, 'Seuleumak Muda', 4),
(1103062029, 110306, 'Matang Panyang', 4),
(1103062030, 110306, 'Meunasah Hagu', 4),
(1103062031, 110306, 'Matang Kunyet', 4),
(1103062032, 110306, 'Buket Panjou', 4),
(1103062033, 110306, 'Buket Meurak', 4),
(1103062034, 110306, 'Buket Panyang', 4),
(1103062035, 110306, 'Seuneubok Dalam', 4),
(1103062036, 110306, 'Gampong Mesjid', 4),
(1103062037, 110306, 'Alue Siwah Serdang', 4),
(1103062038, 110306, 'Gampong Lhee', 4),
(1103062039, 110306, 'Beurandang', 4),
(1103062040, 110306, 'Gampong Jalan', 4),
(1103062041, 110306, 'Seuneubok Rambong', 4),
(1103072001, 110307, 'Pasir Putih', 4),
(1103072002, 110307, 'Tualang', 4),
(1103072003, 110307, 'Keude Peureulak', 4),
(1103072004, 110307, 'Leuge', 4),
(1103072005, 110307, 'Uteun Dama', 4),
(1103072006, 110307, 'Punti', 4),
(1103072007, 110307, 'Alue Dua Paya Gajah', 4),
(1103072008, 110307, 'Blang Bitra', 4),
(1103072009, 110307, 'Kuala Bugak', 4),
(1103072010, 110307, 'Paya Lipah', 4),
(1103072011, 110307, 'Seumatang Muda Itam', 4),
(1103072012, 110307, 'Lhok Dalam', 4),
(1103072013, 110307, 'Beusa Meuranoe', 4),
(1103072014, 110307, 'Bangka Rimung', 4),
(1103072015, 110307, 'Tanoh Rata', 4),
(1103072016, 110307, 'Bandrong', 4),
(1103072017, 110307, 'Blang Balok', 4),
(1103072018, 110307, 'Cot Muda Itam', 4),
(1103072019, 110307, 'Keumuneng', 4),
(1103072020, 110307, 'Kuala Leuge', 4),
(1103072021, 110307, 'Balee Buya', 4),
(1103072022, 110307, 'Alue Nibong', 4),
(1103072023, 110307, 'Seuneubok Peusangan', 4),
(1103072024, 110307, 'Seuneubok Aceh', 4),
(1103072025, 110307, 'Seuneubok Pidie', 4),
(1103072026, 110307, 'Dama Tutong', 4),
(1103072027, 110307, 'Matang Gleum', 4),
(1103072028, 110307, 'Lubok Pempeng', 4),
(1103072029, 110307, 'Buket Pala', 4),
(1103072030, 110307, 'Paya Kalui', 4),
(1103072031, 110307, 'Cek Mbon', 4),
(1103072032, 110307, 'Paya Meuligou', 4),
(1103072033, 110307, 'Blang Simpo', 4),
(1103072034, 110307, 'Blang Batee', 4),
(1103072035, 110307, 'Matang Pelawi', 4),
(1103072036, 110307, 'Cot Geulumpang', 4),
(1103072037, 110307, 'Alue Rambong', 4),
(1103072038, 110307, 'Cot Keh', 4),
(1103082001, 110308, 'Bayeun', 4),
(1103082002, 110308, 'Rantau Panjang', 4),
(1103082003, 110308, 'Alue Raya', 4),
(1103082004, 110308, 'Alue Kumba', 4),
(1103082005, 110308, 'Seuneubok Dalam', 4),
(1103082006, 110308, 'Alue Seuleumak', 4),
(1103082007, 110308, 'Sarah Kayee', 4),
(1103082008, 110308, 'Damar Siput', 4),
(1103082009, 110308, 'Simpang Peut', 4),
(1103082010, 110308, 'Simpang Aneuh', 4),
(1103082011, 110308, 'Alue Punti', 4),
(1103082012, 110308, 'Alue Kaul', 4),
(1103082013, 110308, 'Sarah Taube', 4),
(1103082014, 110308, 'Alue Tuwi', 4),
(1103092001, 110309, 'Peulalu', 4),
(1103092002, 110309, 'Nicah Awe', 4),
(1103092003, 110309, 'Alue Buloh Sa', 4),
(1103092004, 110309, 'Alue Buloh Dua', 4),
(1103092005, 110309, 'Teupin Breuh', 4),
(1103092006, 110309, 'Matang Rayeuk', 4),
(1103092007, 110309, 'Matang Kumbang', 4),
(1103092008, 110309, 'Blang Nie', 4),
(1103092010, 110309, 'Bantayan', 4),
(1103092011, 110309, 'Matang Weng', 4),
(1103092012, 110309, 'Alue Mulieng', 4),
(1103092013, 110309, 'Pucok Alue II', 4),
(1103092014, 110309, 'Gampong Blang', 4),
(1103092015, 110309, 'Keude Tuha', 4),
(1103092016, 110309, 'Kuala Simpang Ulim', 4),
(1103092017, 110309, 'Lampoh Rayeuk', 4),
(1103092018, 110309, 'Teupin Mamplam', 4),
(1103092019, 110309, 'Titi Bareuh', 4),
(1103092020, 110309, 'Pucok Alue Sa', 4),
(1103092021, 110309, 'Pucok Alue Barat', 4),
(1103092022, 110309, 'Arakundo', 4),
(1103092023, 110309, 'Gampong Baro', 4),
(1103092024, 110309, 'Matang Seupeng', 4),
(1103102001, 110310, 'Paya Unou', 4),
(1103102002, 110310, 'Seuneubok Johan', 4),
(1103102003, 110310, 'Seuneubok Baro', 4),
(1103102004, 110310, 'Pulo Blang', 4),
(1103102005, 110310, 'Blang Barom', 4),
(1103102006, 110310, 'Seuneubok Dalam', 4),
(1103102007, 110310, 'Seuleumak Muda', 4),
(1103102008, 110310, 'Bhom Lama', 4),
(1103102009, 110310, 'Pasi Puteh', 4),
(1103102010, 110310, 'Alue Dua', 4),
(1103102011, 110310, 'Buket Pala', 4),
(1103102012, 110310, 'Mata Ie', 4),
(1103102013, 110310, 'Alue Udep', 4),
(1103102014, 110310, 'Seumali', 4),
(1103102015, 110310, 'Punti Payong', 4),
(1103102016, 110310, 'Paya Palas', 4),
(1103102017, 110310, 'Tampak', 4),
(1103102018, 110310, 'Kliet', 4),
(1103102019, 110310, 'Alue Geunteng', 4),
(1103102020, 110310, 'Pertamina', 4),
(1103102021, 110310, 'Alue Batee', 4),
(1103102022, 110310, 'Beurandang', 4),
(1103102024, 110310, 'Seumanah Jaya', 4),
(1103112001, 110311, 'Blang Seunong', 4),
(1103112002, 110311, 'Suka Damai', 4),
(1103112003, 110311, 'Pante Labu', 4),
(1103112004, 110311, 'Pante Rambong', 4),
(1103112005, 110311, 'Alue Ie Mirah', 4),
(1103112006, 110311, 'Seuneubok Tuha', 4),
(1103112007, 110311, 'Seuneubok Saboh', 4),
(1103112008, 110311, 'Buket Kareung', 4),
(1103112009, 110311, 'Buket Bata', 4),
(1103112010, 110311, 'Meunasah Tunong', 4),
(1103112011, 110311, 'Meunasah Teungoh', 4),
(1103112012, 110311, 'Keude Baro', 4),
(1103112013, 110311, 'Matang Perlak', 4),
(1103112014, 110311, 'Grong-grong', 4),
(1103112015, 110311, 'Matang Kruet', 4),
(1103112016, 110311, 'Meunasah Leubok', 4),
(1103112017, 110311, 'Pante Panah', 4),
(1103112018, 110311, 'Paya Demam Sa', 4),
(1103112019, 110311, 'Paya Demam Dua', 4),
(1103112020, 110311, 'Paya Demam Lhee', 4),
(1103112021, 110311, 'Matang Pudeng', 4),
(1103112022, 110311, 'Putoh Sa', 4),
(1103112023, 110311, 'Putoh Dua', 4),
(1103112024, 110311, 'Sah Raja', 4),
(1103112025, 110311, 'Sijudo', 4),
(1103122001, 110312, 'Madat', 4),
(1103122002, 110312, 'Matang Kupula Sa', 4),
(1103122003, 110312, 'Matang Kupula Dua', 4),
(1103122004, 110312, 'Matang Keupula Lhee', 4),
(1103122005, 110312, 'Ulee Ateung', 4),
(1103122006, 110312, 'Blang Ubit', 4),
(1103122007, 110312, 'Matang Guru', 4),
(1103122008, 110312, 'Pantee Bayam', 4),
(1103122009, 110312, 'Meunasah Asan', 4),
(1103122010, 110312, 'Meunasah Tingkeum', 4),
(1103122011, 110312, 'Lueng Dua', 4),
(1103122012, 110312, 'Lueng Peut', 4),
(1103122013, 110312, 'Paya Demam Peut', 4),
(1103122014, 110312, 'Abeuk Geulanteu', 4),
(1103122015, 110312, 'Rambong Lop', 4),
(1103122016, 110312, 'Tanjong Ara', 4),
(1103122017, 110312, 'Matang Jrok', 4),
(1103122018, 110312, 'Paya Naden', 4),
(1103122019, 110312, 'Tanjong Minjey', 4),
(1103122020, 110312, 'Pante Merbo', 4),
(1103122021, 110312, 'Blang Awe', 4),
(1103122022, 110312, 'Bintah', 4),
(1103122023, 110312, 'Seuneubok Pidie', 4),
(1103122024, 110312, 'Blang Andam', 4),
(1103122025, 110312, 'Matang Nibong', 4),
(1103122026, 110312, 'Lueng Sa', 4),
(1103132001, 110313, 'Seuneubok Bayu', 4),
(1103132002, 110313, 'Alue Ie Itam', 4),
(1103132003, 110313, 'Blang Nisan', 4),
(1103132004, 110313, 'Bandar Baro', 4),
(1103132005, 110313, 'Alue Patong', 4),
(1103132006, 110313, 'Alue Ie Mirah', 4),
(1103132007, 110313, 'Suka Makmur', 4),
(1103132008, 110313, 'Jambo Balee', 4),
(1103132009, 110313, 'Jambo Lubok', 4),
(1103132010, 110313, 'Seuneubok Cina', 4),
(1103132011, 110313, 'Pelita Sagop Jaya', 4),
(1103132012, 110313, 'Perkebunan Julok Rayeuk Selatan', 4),
(1103132013, 110313, 'Perkebunan Julok Rayeuk Utara', 4),
(1103142001, 110314, 'Seuneubok Buloh', 4),
(1103142002, 110314, 'Seuneubok Baro', 4),
(1103142003, 110314, 'Seuneubok Meureudu', 4),
(1103142004, 110314, 'Seuneubok Teupin Panah', 4),
(1103142005, 110314, 'Gampong Teupin Panah', 4),
(1103142006, 110314, 'Gampong Keumuneng', 4),
(1103142007, 110314, 'Keude Keumuneng', 4),
(1103142008, 110314, 'Keumuneng Lhok', 4),
(1103142009, 110314, 'Paya Awee', 4),
(1103142010, 110314, 'Paya Gaboh', 4),
(1103142011, 110314, 'Padang Kasah', 4),
(1103142012, 110314, 'Buket Teukuh', 4),
(1103142013, 110314, 'Buket Pu\'uk', 4),
(1103142014, 110314, 'Blang Minjei', 4),
(1103142015, 110314, 'Alue Kumbang A', 4),
(1103142016, 110314, 'Alue Kumbang M', 4),
(1103142017, 110314, 'Alue Lhok', 4),
(1103142018, 110314, 'Seuneubok Buya', 4),
(1103142019, 110314, 'Seuneubok Drien', 4),
(1103142020, 110314, 'Bantayan Barat', 4),
(1103142021, 110314, 'Blang Guci', 4),
(1103142022, 110314, 'Buket Rumiya', 4),
(1103142023, 110314, 'Seuneubok Punti', 4),
(1103142024, 110314, 'Seuneubok Jalan', 4),
(1103142025, 110314, 'Seuneubok Dalam', 4),
(1103152001, 110315, 'Jalan Dua', 4),
(1103152002, 110315, 'Jambo Reuhat', 4),
(1103152003, 110315, 'Seuneubok Benteng', 4),
(1103152004, 110315, 'Seuneubok Pango', 4),
(1103152005, 110315, 'Seuneubok Simpang', 4),
(1103152006, 110315, 'Seuneubok Kandang', 4),
(1103152007, 110315, 'Ulee Jalan', 4),
(1103152008, 110315, 'Uram Jalan', 4),
(1103152009, 110315, 'Seuneubok Bayu', 4),
(1103152010, 110315, 'Blang Rambong', 4),
(1103152011, 110315, 'Buket Drien', 4),
(1103152012, 110315, 'Panton Rayeuk A', 4),
(1103152013, 110315, 'Panton Rayeuk B', 4),
(1103152014, 110315, 'Panton Rayeuk M', 4),
(1103152015, 110315, 'Panton Rayeuk T', 4),
(1103152016, 110315, 'Paya Laman', 4),
(1103162001, 110316, 'Gampong Keude', 4),
(1103162002, 110316, 'Meunasah Krueng', 4),
(1103162003, 110316, 'Kuta Baro', 4),
(1103162004, 110316, 'Alue Batee', 4),
(1103162005, 110316, 'Matang Rayeuk', 4),
(1103162006, 110316, 'Paya Bili Dua', 4),
(1103162007, 110316, 'Alue Ie Itam', 4),
(1103162008, 110316, 'Asan Rampak', 4),
(1103162009, 110316, 'Gampong Kuala', 4),
(1103162010, 110316, 'Paya Dua', 4),
(1103162011, 110316, 'Seuneubok Teungoh', 4),
(1103162012, 110316, 'Buket Kuta', 4),
(1103162013, 110316, 'Sama Dua', 4),
(1103162014, 110316, 'Blang Kuta', 4),
(1103162015, 110316, 'Blang Buket', 4),
(1103162016, 110316, 'Seuneubok Peunteut', 4),
(1103162017, 110316, 'Paya Bili Sa', 4),
(1103172001, 110317, 'Babah Krueng', 4),
(1103172002, 110317, 'Kruet Lintang', 4),
(1103172003, 110317, 'Jeungki', 4),
(1103172004, 110317, 'Buket Meriam', 4),
(1103172005, 110317, 'Alue Gureb', 4),
(1103172006, 110317, 'Seuneubok Teupin', 4),
(1103172007, 110317, 'Seuneubok Teungoh', 4),
(1103172008, 110317, 'Alue Bugeng', 4),
(1103172009, 110317, 'Seuneubok Punti', 4),
(1103172010, 110317, 'Seumatang Keude', 4),
(1103172011, 110317, 'Seuneubok Jalan', 4),
(1103172012, 110317, 'Seuneubok Paya', 4),
(1103172013, 110317, 'Alue Tho', 4),
(1103172014, 110317, 'Seuneubok Rawang', 4),
(1103172015, 110317, 'Alue Bu Alue Nireh', 4),
(1103172016, 110317, 'Seuneubok Dalam', 4),
(1103172017, 110317, 'Seuneubok Lapang', 4),
(1103172018, 110317, 'Geulanggang Meurak', 4),
(1103172019, 110317, 'Alue Bu Alue Lhok', 4),
(1103172020, 110317, 'Tualang Pateng', 4),
(1103182001, 110318, 'Beusa Seberang', 4),
(1103182002, 110318, 'Mon Geudong', 4),
(1103182003, 110318, 'Paya Seungat', 4),
(1103182004, 110318, 'Teumpeun', 4),
(1103182005, 110318, 'Alue Bu Tuha', 4),
(1103182006, 110318, 'Alue Bu Jalan', 4),
(1103182007, 110318, 'Tanjong Tualang', 4),
(1103182008, 110318, 'Beringen', 4),
(1103182009, 110318, 'Kebon Tempeun', 4),
(1103182010, 110318, 'Paya Gajah', 4),
(1103182011, 110318, 'Kabu', 4),
(1103182012, 110318, 'Paya Biek', 4),
(1103182013, 110318, 'Beusa Baroh', 4),
(1103182014, 110318, 'Alue Bu Jalan Baroh', 4),
(1103182015, 110318, 'Alue Bu Tunong', 4),
(1103192001, 110319, 'Alue Rangan', 4),
(1103192002, 110319, 'Geulumpang Payong', 4),
(1103192003, 110319, 'Labuhan Keudee', 4),
(1103192004, 110319, 'Buket Seulamat', 4),
(1103192005, 110319, 'Buket Drien', 4),
(1103192006, 110319, 'Alue Itam', 4),
(1103192007, 110319, 'Paya Keutapang', 4),
(1103192008, 110319, 'Gajah Mentah', 4),
(1103192009, 110319, 'Seuneubok Pase', 4),
(1103192010, 110319, 'Seuneubok Aceh', 4),
(1103192011, 110319, 'Krueng Lingka', 4),
(1103192012, 110319, 'Sungai Simpang', 4),
(1103192013, 110319, 'Kuala Parek', 4),
(1103202001, 110320, 'Simpang Jernih', 4),
(1103202002, 110320, 'Batu Sumbang', 4),
(1103202003, 110320, 'Pante Kera', 4),
(1103202004, 110320, 'Rantau Panjang', 4),
(1103202005, 110320, 'Melidi', 4),
(1103202006, 110320, 'Tampur Paloh', 4),
(1103202007, 110320, 'Tampur Boor', 4),
(1103202008, 110320, 'HTI Rantau Naro', 4),
(1103212001, 110321, 'Meudang Ara', 4),
(1103212002, 110321, 'Gunong Putoh', 4),
(1103212003, 110321, 'Meunasah Aroen', 4),
(1103212004, 110321, 'Keude Dua', 4),
(1103212005, 110321, 'Seuneubok Lapang', 4),
(1103212006, 110321, 'Alue Jangat', 4),
(1103212007, 110321, 'Buket Peulawi', 4),
(1103212008, 110321, 'Lhok Panjoe', 4),
(1103212009, 110321, 'Seuneubok Aceh Baro', 4),
(1103212010, 110321, 'Pulo Blang', 4),
(1103212011, 110321, 'Lhok Dalam', 4),
(1103212012, 110321, 'Lhok Leumak', 4),
(1103212013, 110321, 'Seuneubok Kulam', 4),
(1103212014, 110321, 'Panton Meurebo', 4),
(1103212015, 110321, 'Seuneubok Teungoh', 4),
(1103212016, 110321, 'Lhok Meureu', 4),
(1103222001, 110322, 'Tunong Bugeng', 4),
(1103222002, 110322, 'Cempeudak', 4),
(1103222003, 110322, 'Buket Tufah', 4),
(1103222004, 110322, 'Tunong Ulee Gajah', 4),
(1103222005, 110322, 'Keudondong', 4),
(1103222006, 110322, 'Seuneubok Panton', 4),
(1103222007, 110322, 'Buket Teumpeun', 4),
(1103222008, 110322, 'Keude Blang', 4),
(1103222009, 110322, 'Paya Kruep', 4),
(1103222010, 110322, 'Tunong Paya Kruep', 4),
(1103222011, 110322, 'Alue Siwah', 4),
(1103232001, 110323, 'Keutapang Dua', 4),
(1103232002, 110323, 'Matang Reyeuk PP', 4),
(1103232003, 110323, 'Meunasah Jeumpa', 4),
(1103232004, 110323, 'Lhok Asahan', 4),
(1103232005, 110323, 'Tualang Dalam', 4),
(1103232006, 110323, 'Seuneubok Kuyun', 4),
(1103232007, 110323, 'Ulee Glee', 4),
(1103232008, 110323, 'Seuneubok Barat', 4),
(1103232009, 110323, 'Seuneubok Teungoh', 4),
(1103232010, 110323, 'Seuneubok Timur', 4),
(1103232011, 110323, 'Matang Bungong', 4),
(1103232012, 110323, 'Matang Rayeuk (SMK)', 4),
(1103232013, 110323, 'Seuneubok Dalam', 4),
(1103242001, 110324, 'Arul Pinang', 4),
(1103242002, 110324, 'Peunaron Baru', 4),
(1103242003, 110324, 'Peunaron Lama', 4),
(1103242004, 110324, 'Bukit Tiga', 4),
(1103242006, 110324, 'Sri Mulya', 4),
(1104012003, 110401, 'Delung Sekinel', 4),
(1104012005, 110401, 'Gelampang Gading', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gol_darah`
--

CREATE TABLE `gol_darah` (
  `idgol_darah` int(11) NOT NULL,
  `golongan_darah` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gol_darah`
--

INSERT INTO `gol_darah` (`idgol_darah`, `golongan_darah`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `idjenis_kelamin` int(11) NOT NULL,
  `jenis_kelamin` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`idjenis_kelamin`, `jenis_kelamin`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kepindahan`
--

CREATE TABLE `jenis_kepindahan` (
  `jenis_kepindahan_id` int(11) NOT NULL,
  `jenis_kepindahan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_kepindahan`
--

INSERT INTO `jenis_kepindahan` (`jenis_kepindahan_id`, `jenis_kepindahan`) VALUES
(1, 'Kepala keluarga'),
(2, 'Kepala keluarga & seluruh anggota'),
(3, 'Kepala keluarga & sebagian anggota keluarga'),
(4, 'Anggota keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_permohonan`
--

CREATE TABLE `jenis_permohonan` (
  `jenis_permohonan_id` int(11) NOT NULL,
  `jenis_permohonan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_permohonan`
--

INSERT INTO `jenis_permohonan` (`jenis_permohonan_id`, `jenis_permohonan`) VALUES
(1, 'D. SURAT KETERANGAN KEPENDUDUKAN'),
(2, 'Surat Keterangan Pindah'),
(3, 'Surat Keterangan Pindah Luar Negeri (SKPLN)'),
(4, 'Surat Keterangan Tempat Tinggal (SKTT) Bagi OA Tinggal Terbatas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kab`
--

CREATE TABLE `kab` (
  `id_kab` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `nama` tinytext NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kab`
--

INSERT INTO `kab` (`id_kab`, `id_prov`, `nama`, `id_jenis`) VALUES
(1101, 11, 'KAB. ACEH SELATAN', 1),
(1102, 11, 'KAB. ACEH TENGGARA', 1),
(1103, 11, 'KAB. ACEH TIMUR', 1),
(1104, 11, 'KAB. ACEH TENGAH', 1),
(1105, 11, 'KAB. ACEH BARAT', 1),
(1106, 11, 'KAB. ACEH BESAR', 1),
(1107, 11, 'KAB. PIDIE', 1),
(1108, 11, 'KAB. ACEH UTARA', 1),
(1109, 11, 'KAB. SIMEULUE', 1),
(1110, 11, 'KAB. ACEH SINGKIL', 1),
(1111, 11, 'KAB. BIREUEN', 1),
(1112, 11, 'KAB. ACEH BARAT DAYA', 1),
(1113, 11, 'KAB. GAYO LUES', 1),
(1114, 11, 'KAB. ACEH JAYA', 1),
(1115, 11, 'KAB. NAGAN RAYA', 1),
(1116, 11, 'KAB. ACEH TAMIANG', 1),
(1117, 11, 'KAB. BENER MERIAH', 1),
(1118, 11, 'KAB. PIDIE JAYA', 1),
(1171, 11, 'KOTA BANDA ACEH', 2),
(1172, 11, 'KOTA SABANG', 2),
(1173, 11, 'KOTA LHOKSEUMAWE', 2),
(1174, 11, 'KOTA LANGSA', 2),
(1175, 11, 'KOTA SUBULUSSALAM', 2),
(1201, 12, 'KAB. TAPANULI TENGAH', 1),
(1202, 12, 'KAB. TAPANULI UTARA', 1),
(1203, 12, 'KAB. TAPANULI SELATAN', 1),
(1204, 12, 'KAB. NIAS', 1),
(1205, 12, 'KAB. LANGKAT', 1),
(1206, 12, 'KAB. KARO', 1),
(1207, 12, 'KAB. DELI SERDANG', 1),
(1208, 12, 'KAB. SIMALUNGUN', 1),
(1209, 12, 'KAB. ASAHAN', 1),
(1210, 12, 'KAB. LABUHANBATU', 1),
(1211, 12, 'KAB. DAIRI', 1),
(1212, 12, 'KAB. TOBA SAMOSIR', 1),
(1213, 12, 'KAB. MANDAILING NATAL', 1),
(1214, 12, 'KAB. NIAS SELATAN', 1),
(1215, 12, 'KAB. PAKPAK BHARAT', 1),
(1216, 12, 'KAB. HUMBANG HASUNDUTAN', 1),
(1217, 12, 'KAB. SAMOSIR', 1),
(1218, 12, 'KAB. SERDANG BEDAGAI', 1),
(1219, 12, 'KAB. BATU BARA', 1),
(1220, 12, 'KAB. PADANG LAWAS UTARA', 1),
(1221, 12, 'KAB. PADANG LAWAS', 1),
(1222, 12, 'KAB. LABUHANBATU SELATAN', 1),
(1223, 12, 'KAB. LABUHANBATU UTARA', 1),
(1224, 12, 'KAB. NIAS UTARA', 1),
(1225, 12, 'KAB. NIAS BARAT', 1),
(1271, 12, 'KOTA MEDAN', 2),
(1272, 12, 'KOTA PEMATANG SIANTAR', 2),
(1273, 12, 'KOTA SIBOLGA', 2),
(1274, 12, 'KOTA TANJUNG BALAI', 2),
(1275, 12, 'KOTA BINJAI', 2),
(1276, 12, 'KOTA TEBING TINGGI', 2),
(1277, 12, 'KOTA PADANGSIDIMPUAN', 2),
(1278, 12, 'KOTA GUNUNGSITOLI', 2),
(1301, 13, 'KAB. PESISIR SELATAN', 1),
(1302, 13, 'KAB. SOLOK', 1),
(1303, 13, 'KAB. SIJUNJUNG', 1),
(1304, 13, 'KAB. TANAH DATAR', 1),
(1305, 13, 'KAB. PADANG PARIAMAN', 1),
(1306, 13, 'KAB. AGAM', 1),
(1307, 13, 'KAB. LIMA PULUH KOTA', 1),
(1308, 13, 'KAB. PASAMAN', 1),
(1309, 13, 'KAB. KEPULAUAN MENTAWAI', 1),
(1310, 13, 'KAB. DHARMASRAYA', 1),
(1311, 13, 'KAB. SOLOK SELATAN', 1),
(1312, 13, 'KAB. PASAMAN BARAT', 1),
(1371, 13, 'KOTA PADANG', 2),
(1372, 13, 'KOTA SOLOK', 2),
(1373, 13, 'KOTA SAWAHLUNTO', 2),
(1374, 13, 'KOTA PADANG PANJANG', 2),
(1375, 13, 'KOTA BUKITTINGGI', 2),
(1376, 13, 'KOTA PAYAKUMBUH', 2),
(1377, 13, 'KOTA PARIAMAN', 2),
(1401, 14, 'KAB. KAMPAR', 1),
(1402, 14, 'KAB. INDRAGIRI HULU', 1),
(1403, 14, 'KAB. BENGKALIS', 1),
(1404, 14, 'KAB. INDRAGIRI HILIR', 1),
(1405, 14, 'KAB. PELALAWAN', 1),
(1406, 14, 'KAB. ROKAN HULU', 1),
(1407, 14, 'KAB. ROKAN HILIR', 1),
(1408, 14, 'KAB. SIAK', 1),
(1409, 14, 'KAB. KUANTAN SINGINGI', 1),
(1410, 14, 'KAB. KEPULAUAN MERANTI', 1),
(1471, 14, 'KOTA PEKANBARU', 2),
(1472, 14, 'KOTA DUMAI', 2),
(1501, 15, 'KAB. KERINCI', 1),
(1502, 15, 'KAB. MERANGIN', 1),
(1503, 15, 'KAB. SAROLANGUN', 1),
(1504, 15, 'KAB. BATANGHARI', 1),
(1505, 15, 'KAB. MUARO JAMBI', 1),
(1506, 15, 'KAB. TANJUNG JABUNG BARAT', 1),
(1507, 15, 'KAB. TANJUNG JABUNG TIMUR', 1),
(1508, 15, 'KAB. BUNGO', 1),
(1509, 15, 'KAB. TEBO', 1),
(1571, 15, 'KOTA JAMBI', 2),
(1572, 15, 'KOTA SUNGAI PENUH', 2),
(1601, 16, 'KAB. OGAN KOMERING ULU', 1),
(1602, 16, 'KAB. OGAN KOMERING ILIR', 1),
(1603, 16, 'KAB. MUARA ENIM', 1),
(1604, 16, 'KAB. LAHAT', 1),
(1605, 16, 'KAB. MUSI RAWAS', 1),
(1606, 16, 'KAB. MUSI BANYUASIN', 1),
(1607, 16, 'KAB. BANYUASIN', 1),
(1608, 16, 'KAB. OGAN KOMERING ULU TIMUR', 1),
(1609, 16, 'KAB. OGAN KOMERING ULU SELATAN', 1),
(1610, 16, 'KAB. OGAN ILIR', 1),
(1611, 16, 'KAB. EMPAT LAWANG', 1),
(1612, 16, 'KAB. PENUKAL ABAB LEMATANG ILIR', 1),
(1613, 16, 'KAB. MUSI RAWAS UTARA', 1),
(1671, 16, 'KOTA PALEMBANG', 2),
(1672, 16, 'KOTA PAGAR ALAM', 2),
(1673, 16, 'KOTA LUBUK LINGGAU', 2),
(1674, 16, 'KOTA PRABUMULIH', 2),
(1701, 17, 'KAB. BENGKULU SELATAN', 1),
(1702, 17, 'KAB. REJANG LEBONG', 1),
(1703, 17, 'KAB. BENGKULU UTARA', 1),
(1704, 17, 'KAB. KAUR', 1),
(1705, 17, 'KAB. SELUMA', 1),
(1706, 17, 'KAB. MUKO MUKO', 1),
(1707, 17, 'KAB. LEBONG', 1),
(1708, 17, 'KAB. KEPAHIANG', 1),
(1709, 17, 'KAB. BENGKULU TENGAH', 1),
(1771, 17, 'KOTA BENGKULU', 2),
(1801, 18, 'KAB. LAMPUNG SELATAN', 1),
(1802, 18, 'KAB. LAMPUNG TENGAH', 1),
(1803, 18, 'KAB. LAMPUNG UTARA', 1),
(1804, 18, 'KAB. LAMPUNG BARAT', 1),
(1805, 18, 'KAB. TULANG BAWANG', 1),
(1806, 18, 'KAB. TANGGAMUS', 1),
(1807, 18, 'KAB. LAMPUNG TIMUR', 1),
(1808, 18, 'KAB. WAY KANAN', 1),
(1809, 18, 'KAB. PESAWARAN', 1),
(1810, 18, 'KAB. PRINGSEWU', 1),
(1811, 18, 'KAB. MESUJI', 1),
(1812, 18, 'KAB. TULANG BAWANG BARAT', 1),
(1813, 18, 'KAB. PESISIR BARAT', 1),
(1871, 18, 'KOTA BANDAR LAMPUNG', 2),
(1872, 18, 'KOTA METRO', 2),
(1901, 19, 'KAB. BANGKA', 1),
(1902, 19, 'KAB. BELITUNG', 1),
(1903, 19, 'KAB. BANGKA SELATAN', 1),
(1904, 19, 'KAB. BANGKA TENGAH', 1),
(1905, 19, 'KAB. BANGKA BARAT', 1),
(1906, 19, 'KAB. BELITUNG TIMUR', 1),
(1971, 19, 'KOTA PANGKAL PINANG', 2),
(2101, 21, 'KAB. BINTAN', 1),
(2102, 21, 'KAB. KARIMUN', 1),
(2103, 21, 'KAB. NATUNA', 1),
(2104, 21, 'KAB. LINGGA', 1),
(2105, 21, 'KAB. KEPULAUAN ANAMBAS', 1),
(2171, 21, 'KOTA BATAM', 2),
(2172, 21, 'KOTA TANJUNG PINANG', 2),
(3101, 31, 'KAB. ADM. KEP. SERIBU', 1),
(3171, 31, 'KOTA ADM. JAKARTA PUSAT', 2),
(3172, 31, 'KOTA ADM. JAKARTA UTARA', 2),
(3173, 31, 'KOTA ADM. JAKARTA BARAT', 2),
(3174, 31, 'KOTA ADM. JAKARTA SELATAN', 2),
(3175, 31, 'KOTA ADM. JAKARTA TIMUR', 2),
(3201, 32, 'KAB. BOGOR', 1),
(3202, 32, 'KAB. SUKABUMI', 1),
(3203, 32, 'KAB. CIANJUR', 1),
(3204, 32, 'KAB. BANDUNG', 1),
(3205, 32, 'KAB. GARUT', 1),
(3206, 32, 'KAB. TASIKMALAYA', 1),
(3207, 32, 'KAB. CIAMIS', 1),
(3208, 32, 'KAB. KUNINGAN', 1),
(3209, 32, 'KAB. CIREBON', 1),
(3210, 32, 'KAB. MAJALENGKA', 1),
(3211, 32, 'KAB. SUMEDANG', 1),
(3212, 32, 'KAB. INDRAMAYU', 1),
(3213, 32, 'KAB. SUBANG', 1),
(3214, 32, 'KAB. PURWAKARTA', 1),
(3215, 32, 'KAB. KARAWANG', 1),
(3216, 32, 'KAB. BEKASI', 1),
(3217, 32, 'KAB. BANDUNG BARAT', 1),
(3218, 32, 'KAB. PANGANDARAN', 1),
(3271, 32, 'KOTA BOGOR', 2),
(3272, 32, 'KOTA SUKABUMI', 2),
(3273, 32, 'KOTA BANDUNG', 2),
(3274, 32, 'KOTA CIREBON', 2),
(3275, 32, 'KOTA BEKASI', 2),
(3276, 32, 'KOTA DEPOK', 2),
(3277, 32, 'KOTA CIMAHI', 2),
(3278, 32, 'KOTA TASIKMALAYA', 2),
(3279, 32, 'KOTA BANJAR', 2),
(3301, 33, 'KAB. CILACAP', 1),
(3302, 33, 'KAB. BANYUMAS', 1),
(3303, 33, 'KAB. PURBALINGGA', 1),
(3304, 33, 'KAB. BANJARNEGARA', 1),
(3305, 33, 'KAB. KEBUMEN', 1),
(3306, 33, 'KAB. PURWOREJO', 1),
(3307, 33, 'KAB. WONOSOBO', 1),
(3308, 33, 'KAB. MAGELANG', 1),
(3309, 33, 'KAB. BOYOLALI', 1),
(3310, 33, 'KAB. KLATEN', 1),
(3311, 33, 'KAB. SUKOHARJO', 1),
(3312, 33, 'KAB. WONOGIRI', 1),
(3313, 33, 'KAB. KARANGANYAR', 1),
(3314, 33, 'KAB. SRAGEN', 1),
(3315, 33, 'KAB. GROBOGAN', 1),
(3316, 33, 'KAB. BLORA', 1),
(3317, 33, 'KAB. REMBANG', 1),
(3318, 33, 'KAB. PATI', 1),
(3319, 33, 'KAB. KUDUS', 1),
(3320, 33, 'KAB. JEPARA', 1),
(3321, 33, 'KAB. DEMAK', 1),
(3322, 33, 'KAB. SEMARANG', 1),
(3323, 33, 'KAB. TEMANGGUNG', 1),
(3324, 33, 'KAB. KENDAL', 1),
(3325, 33, 'KAB. BATANG', 1),
(3326, 33, 'KAB. PEKALONGAN', 1),
(3327, 33, 'KAB. PEMALANG', 1),
(3328, 33, 'KAB. TEGAL', 1),
(3329, 33, 'KAB. BREBES', 1),
(3371, 33, 'KOTA MAGELANG', 2),
(3372, 33, 'KOTA SURAKARTA', 2),
(3373, 33, 'KOTA SALATIGA', 2),
(3374, 33, 'KOTA SEMARANG', 2),
(3375, 33, 'KOTA PEKALONGAN', 2),
(3376, 33, 'KOTA TEGAL', 2),
(3401, 34, 'KAB. KULON PROGO', 1),
(3402, 34, 'KAB. BANTUL', 1),
(3403, 34, 'KAB. GUNUNG KIDUL', 1),
(3404, 34, 'KAB. SLEMAN', 1),
(3471, 34, 'KOTA YOGYAKARTA', 2),
(3501, 35, 'KAB. PACITAN', 1),
(3502, 35, 'KAB. PONOROGO', 1),
(3503, 35, 'KAB. TRENGGALEK', 1),
(3504, 35, 'KAB. TULUNGAGUNG', 1),
(3505, 35, 'KAB. BLITAR', 1),
(3506, 35, 'KAB. KEDIRI', 1),
(3507, 35, 'KAB. MALANG', 1),
(3508, 35, 'KAB. LUMAJANG', 1),
(3509, 35, 'KAB. JEMBER', 1),
(3510, 35, 'KAB. BANYUWANGI', 1),
(3511, 35, 'KAB. BONDOWOSO', 1),
(3512, 35, 'KAB. SITUBONDO', 1),
(3513, 35, 'KAB. PROBOLINGGO', 1),
(3514, 35, 'KAB. PASURUAN', 1),
(3515, 35, 'KAB. SIDOARJO', 1),
(3516, 35, 'KAB. MOJOKERTO', 1),
(3517, 35, 'KAB. JOMBANG', 1),
(3518, 35, 'KAB. NGANJUK', 1),
(3519, 35, 'KAB. MADIUN', 1),
(3520, 35, 'KAB. MAGETAN', 1),
(3521, 35, 'KAB. NGAWI', 1),
(3522, 35, 'KAB. BOJONEGORO', 1),
(3523, 35, 'KAB. TUBAN', 1),
(3524, 35, 'KAB. LAMONGAN', 1),
(3525, 35, 'KAB. GRESIK', 1),
(3526, 35, 'KAB. BANGKALAN', 1),
(3527, 35, 'KAB. SAMPANG', 1),
(3528, 35, 'KAB. PAMEKASAN', 1),
(3529, 35, 'KAB. SUMENEP', 1),
(3571, 35, 'KOTA KEDIRI', 2),
(3572, 35, 'KOTA BLITAR', 2),
(3573, 35, 'KOTA MALANG', 2),
(3574, 35, 'KOTA PROBOLINGGO', 2),
(3575, 35, 'KOTA PASURUAN', 2),
(3576, 35, 'KOTA MOJOKERTO', 2),
(3577, 35, 'KOTA MADIUN', 2),
(3578, 35, 'KOTA SURABAYA', 2),
(3579, 35, 'KOTA BATU', 2),
(3601, 36, 'KAB. PANDEGLANG', 1),
(3602, 36, 'KAB. LEBAK', 1),
(3603, 36, 'KAB. TANGERANG', 1),
(3604, 36, 'KAB. SERANG', 1),
(3671, 36, 'KOTA TANGERANG', 2),
(3672, 36, 'KOTA CILEGON', 2),
(3673, 36, 'KOTA SERANG', 2),
(3674, 36, 'KOTA TANGERANG SELATAN', 2),
(5101, 51, 'KAB. JEMBRANA', 1),
(5102, 51, 'KAB. TABANAN', 1),
(5103, 51, 'KAB. BADUNG', 1),
(5104, 51, 'KAB. GIANYAR', 1),
(5105, 51, 'KAB. KLUNGKUNG', 1),
(5106, 51, 'KAB. BANGLI', 1),
(5107, 51, 'KAB. KARANGASEM', 1),
(5108, 51, 'KAB. BULELENG', 1),
(5171, 51, 'KOTA DENPASAR', 2),
(5201, 52, 'KAB. LOMBOK BARAT', 1),
(5202, 52, 'KAB. LOMBOK TENGAH', 1),
(5203, 52, 'KAB. LOMBOK TIMUR', 1),
(5204, 52, 'KAB. SUMBAWA', 1),
(5205, 52, 'KAB. DOMPU', 1),
(5206, 52, 'KAB. BIMA', 1),
(5207, 52, 'KAB. SUMBAWA BARAT', 1),
(5208, 52, 'KAB. LOMBOK UTARA', 1),
(5271, 52, 'KOTA MATARAM', 2),
(5272, 52, 'KOTA BIMA', 2),
(5301, 53, 'KAB. KUPANG', 1),
(5302, 53, 'KAB TIMOR TENGAH SELATAN', 1),
(5303, 53, 'KAB. TIMOR TENGAH UTARA', 1),
(5304, 53, 'KAB. BELU', 1),
(5305, 53, 'KAB. ALOR', 1),
(5306, 53, 'KAB. FLORES TIMUR', 1),
(5307, 53, 'KAB. SIKKA', 1),
(5308, 53, 'KAB. ENDE', 1),
(5309, 53, 'KAB. NGADA', 1),
(5310, 53, 'KAB. MANGGARAI', 1),
(5311, 53, 'KAB. SUMBA TIMUR', 1),
(5312, 53, 'KAB. SUMBA BARAT', 1),
(5313, 53, 'KAB. LEMBATA', 1),
(5314, 53, 'KAB. ROTE NDAO', 1),
(5315, 53, 'KAB. MANGGARAI BARAT', 1),
(5316, 53, 'KAB. NAGEKEO', 1),
(5317, 53, 'KAB. SUMBA TENGAH', 1),
(5318, 53, 'KAB. SUMBA BARAT DAYA', 1),
(5319, 53, 'KAB. MANGGARAI TIMUR', 1),
(5320, 53, 'KAB. SABU RAIJUA', 1),
(5321, 53, 'KAB. MALAKA', 1),
(5371, 53, 'KOTA KUPANG', 2),
(6101, 61, 'KAB. SAMBAS', 1),
(6102, 61, 'KAB. MEMPAWAH', 1),
(6103, 61, 'KAB. SANGGAU', 1),
(6104, 61, 'KAB. KETAPANG', 1),
(6105, 61, 'KAB. SINTANG', 1),
(6106, 61, 'KAB. KAPUAS HULU', 1),
(6107, 61, 'KAB. BENGKAYANG', 1),
(6108, 61, 'KAB. LANDAK', 1),
(6109, 61, 'KAB. SEKADAU', 1),
(6110, 61, 'KAB. MELAWI', 1),
(6111, 61, 'KAB. KAYONG UTARA', 1),
(6112, 61, 'KAB. KUBU RAYA', 1),
(6171, 61, 'KOTA PONTIANAK', 2),
(6172, 61, 'KOTA SINGKAWANG', 2),
(6201, 62, 'KAB. KOTAWARINGIN BARAT', 1),
(6202, 62, 'KAB. KOTAWARINGIN TIMUR', 1),
(6203, 62, 'KAB. KAPUAS', 1),
(6204, 62, 'KAB. BARITO SELATAN', 1),
(6205, 62, 'KAB. BARITO UTARA', 1),
(6206, 62, 'KAB. KATINGAN', 1),
(6207, 62, 'KAB. SERUYAN', 1),
(6208, 62, 'KAB. SUKAMARA', 1),
(6209, 62, 'KAB. LAMANDAU', 1),
(6210, 62, 'KAB. GUNUNG MAS', 1),
(6211, 62, 'KAB. PULANG PISAU', 1),
(6212, 62, 'KAB. MURUNG RAYA', 1),
(6213, 62, 'KAB. BARITO TIMUR', 1),
(6271, 62, 'KOTA PALANGKARAYA', 2),
(6301, 63, 'KAB. TANAH LAUT', 1),
(6302, 63, 'KAB. KOTABARU', 1),
(6303, 63, 'KAB. BANJAR', 1),
(6304, 63, 'KAB. BARITO KUALA', 1),
(6305, 63, 'KAB. TAPIN', 1),
(6306, 63, 'KAB. HULU SUNGAI SELATAN', 1),
(6307, 63, 'KAB. HULU SUNGAI TENGAH', 1),
(6308, 63, 'KAB. HULU SUNGAI UTARA', 1),
(6309, 63, 'KAB. TABALONG', 1),
(6310, 63, 'KAB. TANAH BUMBU', 1),
(6311, 63, 'KAB. BALANGAN', 1),
(6371, 63, 'KOTA BANJARMASIN', 2),
(6372, 63, 'KOTA BANJARBARU', 2),
(6401, 64, 'KAB. PASER', 1),
(6402, 64, 'KAB. KUTAI KARTANEGARA', 1),
(6403, 64, 'KAB. BERAU', 1),
(6407, 64, 'KAB. KUTAI BARAT', 1),
(6408, 64, 'KAB. KUTAI TIMUR', 1),
(6409, 64, 'KAB. PENAJAM PASER UTARA', 1),
(6411, 64, 'KAB. MAHAKAM ULU', 1),
(6471, 64, 'KOTA BALIKPAPAN', 2),
(6472, 64, 'KOTA SAMARINDA', 2),
(6474, 64, 'KOTA BONTANG', 2),
(6501, 65, 'KAB. BULUNGAN', 1),
(6502, 65, 'KAB. MALINAU', 1),
(6503, 65, 'KAB. NUNUKAN', 1),
(6504, 65, 'KAB. TANA TIDUNG', 1),
(6571, 65, 'KOTA TARAKAN', 2),
(7101, 71, 'KAB. BOLAANG MONGONDOW', 1),
(7102, 71, 'KAB. MINAHASA', 1),
(7103, 71, 'KAB. KEPULAUAN SANGIHE', 1),
(7104, 71, 'KAB. KEPULAUAN TALAUD', 1),
(7105, 71, 'KAB. MINAHASA SELATAN', 1),
(7106, 71, 'KAB. MINAHASA UTARA', 1),
(7107, 71, 'KAB. MINAHASA TENGGARA', 1),
(7108, 71, 'KAB. BOLAANG MONGONDOW UTARA', 1),
(7109, 71, 'KAB. KEP. SIAU TAGULANDANG BIARO', 1),
(7110, 71, 'KAB. BOLAANG MONGONDOW TIMUR', 1),
(7111, 71, 'KAB. BOLAANG MONGONDOW SELATAN', 1),
(7171, 71, 'KOTA MANADO', 2),
(7172, 71, 'KOTA BITUNG', 2),
(7173, 71, 'KOTA TOMOHON', 2),
(7174, 71, 'KOTA KOTAMOBAGU', 2),
(7201, 72, 'KAB. BANGGAI', 1),
(7202, 72, 'KAB. POSO', 1),
(7203, 72, 'KAB. DONGGALA', 1),
(7204, 72, 'KAB. TOLI TOLI', 1),
(7205, 72, 'KAB. BUOL', 1),
(7206, 72, 'KAB. MOROWALI', 1),
(7207, 72, 'KAB. BANGGAI KEPULAUAN', 1),
(7208, 72, 'KAB. PARIGI MOUTONG', 1),
(7209, 72, 'KAB. TOJO UNA UNA', 1),
(7210, 72, 'KAB. SIGI', 1),
(7211, 72, 'KAB. BANGGAI LAUT', 1),
(7212, 72, 'KAB. MOROWALI UTARA', 1),
(7271, 72, 'KOTA PALU', 2),
(7301, 73, 'KAB. KEPULAUAN SELAYAR', 1),
(7302, 73, 'KAB. BULUKUMBA', 1),
(7303, 73, 'KAB. BANTAENG', 1),
(7304, 73, 'KAB. JENEPONTO', 1),
(7305, 73, 'KAB. TAKALAR', 1),
(7306, 73, 'KAB. GOWA', 1),
(7307, 73, 'KAB. SINJAI', 1),
(7308, 73, 'KAB. BONE', 1),
(7309, 73, 'KAB. MAROS', 1),
(7310, 73, 'KAB. PANGKAJENE KEPULAUAN', 1),
(7311, 73, 'KAB. BARRU', 1),
(7312, 73, 'KAB. SOPPENG', 1),
(7313, 73, 'KAB. WAJO', 1),
(7314, 73, 'KAB. SIDENRENG RAPPANG', 1),
(7315, 73, 'KAB. PINRANG', 1),
(7316, 73, 'KAB. ENREKANG', 1),
(7317, 73, 'KAB. LUWU', 1),
(7318, 73, 'KAB. TANA TORAJA', 1),
(7322, 73, 'KAB. LUWU UTARA', 1),
(7324, 73, 'KAB. LUWU TIMUR', 1),
(7326, 73, 'KAB. TORAJA UTARA', 1),
(7371, 73, 'KOTA MAKASSAR', 2),
(7372, 73, 'KOTA PARE PARE', 2),
(7373, 73, 'KOTA PALOPO', 2),
(7401, 74, 'KAB. KOLAKA', 1),
(7402, 74, 'KAB. KONAWE', 1),
(7403, 74, 'KAB. MUNA', 1),
(7404, 74, 'KAB. BUTON', 1),
(7405, 74, 'KAB. KONAWE SELATAN', 1),
(7406, 74, 'KAB. BOMBANA', 1),
(7407, 74, 'KAB. WAKATOBI', 1),
(7408, 74, 'KAB. KOLAKA UTARA', 1),
(7409, 74, 'KAB. KONAWE UTARA', 1),
(7410, 74, 'KAB. BUTON UTARA', 1),
(7411, 74, 'KAB. KOLAKA TIMUR', 1),
(7412, 74, 'KAB. KONAWE KEPULAUAN', 1),
(7413, 74, 'KAB. MUNA BARAT', 1),
(7414, 74, 'KAB. BUTON TENGAH', 1),
(7415, 74, 'KAB. BUTON SELATAN', 1),
(7471, 74, 'KOTA KENDARI', 2),
(7472, 74, 'KOTA BAU BAU', 2),
(7501, 75, 'KAB. GORONTALO', 1),
(7502, 75, 'KAB. BOALEMO', 1),
(7503, 75, 'KAB. BONE BOLANGO', 1),
(7504, 75, 'KAB. PAHUWATO', 1),
(7505, 75, 'KAB. GORONTALO UTARA', 1),
(7571, 75, 'KOTA GORONTALO', 2),
(7601, 76, 'KAB. MAMUJU UTARA', 1),
(7602, 76, 'KAB. MAMUJU', 1),
(7603, 76, 'KAB. MAMASA', 1),
(7604, 76, 'KAB. POLEWALI MANDAR', 1),
(7605, 76, 'KAB. MAJENE', 1),
(7606, 76, 'KAB. MAMUJU TENGAH', 1),
(8101, 81, 'KAB. MALUKU TENGAH', 1),
(8102, 81, 'KAB. MALUKU TENGGARA', 1),
(8103, 81, 'KAB MALUKU TENGGARA BARAT', 1),
(8104, 81, 'KAB. BURU', 1),
(8105, 81, 'KAB. SERAM BAGIAN TIMUR', 1),
(8106, 81, 'KAB. SERAM BAGIAN BARAT', 1),
(8107, 81, 'KAB. KEPULAUAN ARU', 1),
(8108, 81, 'KAB. MALUKU BARAT DAYA', 1),
(8109, 81, 'KAB. BURU SELATAN', 1),
(8171, 81, 'KOTA AMBON', 2),
(8172, 81, 'KOTA TUAL', 2),
(8201, 82, 'KAB. HALMAHERA BARAT', 1),
(8202, 82, 'KAB. HALMAHERA TENGAH', 1),
(8203, 82, 'KAB. HALMAHERA UTARA', 1),
(8204, 82, 'KAB. HALMAHERA SELATAN', 1),
(8205, 82, 'KAB. KEPULAUAN SULA', 1),
(8206, 82, 'KAB. HALMAHERA TIMUR', 1),
(8207, 82, 'KAB. PULAU MOROTAI', 1),
(8208, 82, 'KAB. PULAU TALIABU', 1),
(8271, 82, 'KOTA TERNATE', 2),
(8272, 82, 'KOTA TIDORE KEPULAUAN', 2),
(9101, 91, 'KAB. MERAUKE', 1),
(9102, 91, 'KAB. JAYAWIJAYA', 1),
(9103, 91, 'KAB. JAYAPURA', 1),
(9104, 91, 'KAB. NABIRE', 1),
(9105, 91, 'KAB. KEPULAUAN YAPEN', 1),
(9106, 91, 'KAB. BIAK NUMFOR', 1),
(9107, 91, 'KAB. PUNCAK JAYA', 1),
(9108, 91, 'KAB. PANIAI', 1),
(9109, 91, 'KAB. MIMIKA', 1),
(9110, 91, 'KAB. SARMI', 1),
(9111, 91, 'KAB. KEEROM', 1),
(9112, 91, 'KAB PEGUNUNGAN BINTANG', 1),
(9113, 91, 'KAB. YAHUKIMO', 1),
(9114, 91, 'KAB. TOLIKARA', 1),
(9115, 91, 'KAB. WAROPEN', 1),
(9116, 91, 'KAB. BOVEN DIGOEL', 1),
(9117, 91, 'KAB. MAPPI', 1),
(9118, 91, 'KAB. ASMAT', 1),
(9119, 91, 'KAB. SUPIORI', 1),
(9120, 91, 'KAB. MAMBERAMO RAYA', 1),
(9121, 91, 'KAB. MAMBERAMO TENGAH', 1),
(9122, 91, 'KAB. YALIMO', 1),
(9123, 91, 'KAB. LANNY JAYA', 1),
(9124, 91, 'KAB. NDUGA', 1),
(9125, 91, 'KAB. PUNCAK', 1),
(9126, 91, 'KAB. DOGIYAI', 1),
(9127, 91, 'KAB. INTAN JAYA', 1),
(9128, 91, 'KAB. DEIYAI', 1),
(9171, 91, 'KOTA JAYAPURA', 2),
(9201, 92, 'KAB. SORONG', 1),
(9202, 92, 'KAB. MANOKWARI', 1),
(9203, 92, 'KAB. FAK FAK', 1),
(9204, 92, 'KAB. SORONG SELATAN', 1),
(9205, 92, 'KAB. RAJA AMPAT', 1),
(9206, 92, 'KAB. TELUK BINTUNI', 1),
(9207, 92, 'KAB. TELUK WONDAMA', 1),
(9208, 92, 'KAB. KAIMANA', 1),
(9209, 92, 'KAB. TAMBRAUW', 1),
(9210, 92, 'KAB. MAYBRAT', 1),
(9211, 92, 'KAB. MANOKWARI SELATAN', 1),
(9212, 92, 'KAB. PEGUNUNGAN ARFAK', 1),
(9271, 92, 'KOTA SORONG', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_kk` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `idjenis_kelamin` int(11) NOT NULL,
  `pekerjaan` int(11) NOT NULL,
  `tempat_lahir` varchar(250) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_kewarganegaraan` int(11) NOT NULL,
  `no_akta_kelahiran` varchar(100) NOT NULL,
  `idagama` int(11) NOT NULL,
  `id_gol_darah` int(11) NOT NULL,
  `idsts_perkawinan` int(11) NOT NULL,
  `tgl_perkawinan` date NOT NULL,
  `no_akta_perkawinan` varchar(20) NOT NULL,
  `status_hubungan_keluarga` int(11) NOT NULL,
  `pendidikan_terakhir` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat_lengkap` varchar(300) NOT NULL,
  `jlh_anggota_keluarga` int(11) NOT NULL,
  `surat_pengantar` varchar(500) NOT NULL,
  `fc_akta_nikah` varchar(500) NOT NULL,
  `fc_akta_kelahiran` varchar(500) NOT NULL,
  `id_status_request` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kec`
--

CREATE TABLE `kec` (
  `id_kec` int(11) NOT NULL,
  `id_kab` int(11) NOT NULL,
  `nama` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kec`
--

INSERT INTO `kec` (`id_kec`, `id_kab`, `nama`) VALUES
(110101, 1101, 'Bakongan'),
(110102, 1101, 'Kluet Utara'),
(110103, 1101, 'Kluet Selatan'),
(110104, 1101, 'Labuhan Haji'),
(110105, 1101, 'Meukek'),
(110106, 1101, 'Samadua'),
(110107, 1101, 'Sawang'),
(110108, 1101, 'Tapaktuan'),
(110109, 1101, 'Trumon'),
(110110, 1101, 'Pasi Raja'),
(110111, 1101, 'Labuhan Haji Timur'),
(110112, 1101, 'Labuhan Haji Barat'),
(110113, 1101, 'Kluet Tengah'),
(110114, 1101, 'Kluet Timur'),
(110115, 1101, 'Bakongan Timur'),
(110116, 1101, 'Trumon Timur'),
(110117, 1101, 'Kota Bahagia'),
(110118, 1101, 'Trumon Tengah'),
(110201, 1102, 'Lawe Alas'),
(110202, 1102, 'Lawe Sigala-Gala'),
(110203, 1102, 'Bambel'),
(110204, 1102, 'Babussalam'),
(110205, 1102, 'Badar'),
(110206, 1102, 'Babul Makmur'),
(110207, 1102, 'Darul Hasanah'),
(110208, 1102, 'Lawe Bulan'),
(110209, 1102, 'Bukit Tusam'),
(110210, 1102, 'Semadam'),
(110211, 1102, 'Babul Rahmah'),
(110212, 1102, 'Ketambe'),
(110213, 1102, 'Deleng Pokhkisen'),
(110214, 1102, 'Lawe Sumur'),
(110215, 1102, 'Tanoh Alas'),
(110216, 1102, 'Leuser'),
(110301, 1103, 'Darul Aman'),
(110302, 1103, 'Julok'),
(110303, 1103, 'Idi Rayeuk'),
(110304, 1103, 'Birem Bayeun'),
(110305, 1103, 'Serbajadi'),
(110306, 1103, 'Nurussalam'),
(110307, 1103, 'Peureulak'),
(110308, 1103, 'Rantau Selamat'),
(110309, 1103, 'Simpang Ulim'),
(110310, 1103, 'Rantau Peureulak'),
(110311, 1103, 'Pante Bidari'),
(110312, 1103, 'Madat'),
(110313, 1103, 'Indra Makmu'),
(110314, 1103, 'Idi Tunong'),
(110315, 1103, 'Banda Alam'),
(110316, 1103, 'Peudawa'),
(110317, 1103, 'Peureulak Timur'),
(110318, 1103, 'Peureulak Barat'),
(110319, 1103, 'Sungai Raya'),
(110320, 1103, 'Simpang Jernih'),
(110321, 1103, 'Darul Ihsan'),
(110322, 1103, 'Darul Falah'),
(110323, 1103, 'Idi Timur'),
(110324, 1103, 'Peunaron'),
(110401, 1104, 'Linge'),
(110402, 1104, 'Silih Nara'),
(110403, 1104, 'Bebesen'),
(110407, 1104, 'Pegasing'),
(110408, 1104, 'Bintang'),
(110410, 1104, 'Ketol'),
(110411, 1104, 'Kebayakan'),
(110412, 1104, 'Kute Panang'),
(110413, 1104, 'Celala'),
(110417, 1104, 'Laut Tawar'),
(110418, 1104, 'Atu Lintang'),
(110419, 1104, 'Jagong Jeget'),
(110420, 1104, 'Bies'),
(110421, 1104, 'Rusip Antara'),
(110501, 1105, 'Johan Pahwalan'),
(110502, 1105, 'Kaway XVI'),
(110503, 1105, 'Sungai Mas'),
(110504, 1105, 'Woyla'),
(110505, 1105, 'Samatiga'),
(110506, 1105, 'Bubon'),
(110507, 1105, 'Arongan Lambalek'),
(110508, 1105, 'Pante Ceureumen'),
(110509, 1105, 'Meureubo'),
(110510, 1105, 'Woyla Barat'),
(110511, 1105, 'Woyla Timur'),
(110512, 1105, 'Panton Reu'),
(110601, 1106, 'Lhoong'),
(110602, 1106, 'Lhoknga'),
(110603, 1106, 'Indrapuri'),
(110604, 1106, 'Seulimeum'),
(110605, 1106, 'Montasik'),
(110606, 1106, 'Sukamakmur'),
(110607, 1106, 'Darul Imarah'),
(110608, 1106, 'Peukan Bada'),
(110609, 1106, 'Mesjid Raya'),
(110610, 1106, 'Ingin Jaya'),
(110611, 1106, 'Kuta Baro'),
(110612, 1106, 'Darussalam'),
(110613, 1106, 'Pulo Aceh'),
(110614, 1106, 'Lembah Seulawah'),
(110615, 1106, 'Kota Jantho'),
(110616, 1106, 'Kota Cot Glie'),
(110617, 1106, 'Kuta Malaka'),
(110618, 1106, 'Simpang Tiga'),
(110619, 1106, 'Darul Kamal'),
(110620, 1106, 'Baitussalam'),
(110621, 1106, 'Krueng Barona Jaya'),
(110622, 1106, 'Leupung'),
(110623, 1106, 'Blang Bintang'),
(110703, 1107, 'Batee'),
(110704, 1107, 'Delima'),
(110705, 1107, 'Geumpang'),
(110706, 1107, 'Geulumpang Tiga'),
(110707, 1107, 'Indra Jaya'),
(110708, 1107, 'Kembang Tanjong'),
(110709, 1107, 'Kota Sigli'),
(110711, 1107, 'Mila'),
(110712, 1107, 'Muara Tiga'),
(110713, 1107, 'Mutiara'),
(110714, 1107, 'Padang Tiji'),
(110715, 1107, 'Peukan Baro'),
(110716, 1107, 'Pidie'),
(110717, 1107, 'Sakti'),
(110718, 1107, 'Simpang Tiga'),
(110719, 1107, 'Tangse'),
(110721, 1107, 'Tiro/Truseb'),
(110722, 1107, 'Keumala'),
(110724, 1107, 'Mutiara Timur'),
(110725, 1107, 'Grong-grong'),
(110727, 1107, 'Mane'),
(110729, 1107, 'Glumpang Baro'),
(110731, 1107, 'Titeue'),
(110801, 1108, 'Baktiya'),
(110802, 1108, 'Dewantara'),
(110803, 1108, 'Kuta Makmur'),
(110804, 1108, 'Lhoksukon'),
(110805, 1108, 'Matangkuli'),
(110806, 1108, 'Muara Batu'),
(110807, 1108, 'Meurah Mulia'),
(110808, 1108, 'Samudera'),
(110809, 1108, 'Seunuddon'),
(110810, 1108, 'Syamtalira Aron'),
(110811, 1108, 'Syamtalira Bayu'),
(110812, 1108, 'Tanah Luas'),
(110813, 1108, 'Tanah Pasir'),
(110814, 1108, 'T. Jambo Aye'),
(110815, 1108, 'Sawang'),
(110816, 1108, 'Nisam'),
(110817, 1108, 'Cot Girek'),
(110818, 1108, 'Langkahan'),
(110819, 1108, 'Baktiya Barat'),
(110820, 1108, 'Paya Bakong'),
(110821, 1108, 'Nibong'),
(110822, 1108, 'Simpang Kramat'),
(110823, 1108, 'Lapang'),
(110824, 1108, 'Pirak Timur'),
(110825, 1108, 'Geuredong Pase'),
(110826, 1108, 'Banda Baro'),
(110827, 1108, 'Nisam Antara'),
(110901, 1109, 'Simeulue Tengah'),
(110902, 1109, 'Salang'),
(110903, 1109, 'Teupah Barat'),
(110904, 1109, 'Simeulue Timur'),
(110905, 1109, 'Teluk Dalam'),
(110906, 1109, 'Simeulue Barat'),
(110907, 1109, 'Teupah Selatan'),
(110908, 1109, 'Alapan'),
(110909, 1109, 'Teupah Tengah'),
(110910, 1109, 'Simeulue Cut'),
(111001, 1110, 'Pulau Banyak'),
(111002, 1110, 'Simpang Kanan'),
(111004, 1110, 'Singkil'),
(111006, 1110, 'Gunung Meriah'),
(111009, 1110, 'Kota Baharu'),
(111010, 1110, 'Singkil Utara'),
(111011, 1110, 'Danau Paris'),
(111012, 1110, 'Suro Makmur'),
(111013, 1110, 'Singkohor'),
(111014, 1110, 'Kuala Baru'),
(111016, 1110, 'Pulau Banyak Barat'),
(111101, 1111, 'Samalanga'),
(111102, 1111, 'Jeunieb'),
(111103, 1111, 'Peudada'),
(111104, 1111, 'Jeumpa'),
(111105, 1111, 'Peusangan'),
(111106, 1111, 'Makmur'),
(111107, 1111, 'Gandapura'),
(111108, 1111, 'Pandrah'),
(111109, 1111, 'Juli'),
(111110, 1111, 'Jangka'),
(111111, 1111, 'Simpang Mamplam'),
(111112, 1111, 'Peulimbang'),
(111113, 1111, 'Kota Juang'),
(111114, 1111, 'Kuala'),
(111115, 1111, 'Peusangan Siblah Krueng'),
(111116, 1111, 'Peusangan Selatan'),
(111117, 1111, 'Kuta Blang'),
(111201, 1112, 'Blang Pidie'),
(111202, 1112, 'Tangan-Tangan'),
(111203, 1112, 'Manggeng'),
(111204, 1112, 'Susoh'),
(111205, 1112, 'Kuala Batee'),
(111206, 1112, 'Babah Rot'),
(111207, 1112, 'Setia'),
(111208, 1112, 'Jeumpa'),
(111209, 1112, 'Lembah Sabil'),
(111301, 1113, 'Blangkejeren'),
(111302, 1113, 'Kutapanjang'),
(111303, 1113, 'Rikit Gaib'),
(111304, 1113, 'Terangun'),
(111305, 1113, 'Pining'),
(111306, 1113, 'Blangpegayon'),
(111307, 1113, 'Puteri Betung'),
(111308, 1113, 'Dabun Gelang'),
(111309, 1113, 'Blangjerango'),
(111310, 1113, 'Teripe Jaya'),
(111311, 1113, 'Pantan Cuaca'),
(111401, 1114, 'Teunom'),
(111402, 1114, 'Krueng Sabee'),
(111403, 1114, 'Setia Bhakti'),
(111404, 1114, 'Sampoiniet'),
(111405, 1114, 'Jaya'),
(111406, 1114, 'Panga'),
(111407, 1114, 'Indra Jaya'),
(111408, 1114, 'Darul Hikmah'),
(111409, 1114, 'Pasie Raya'),
(111501, 1115, 'Kuala'),
(111502, 1115, 'Seunagan'),
(111503, 1115, 'Seunagan Timur'),
(111504, 1115, 'Beutong'),
(111505, 1115, 'Darul Makmur'),
(111506, 1115, 'Suka Makmue'),
(111507, 1115, 'Kuala Pesisir'),
(111508, 1115, 'Tadu Raya'),
(111509, 1115, 'Tripa Makmur'),
(111510, 1115, 'Beutong Ateuh Banggalang'),
(111601, 1116, 'Manyak Payed'),
(111602, 1116, 'Bendahara'),
(111603, 1116, 'Karang Baru'),
(111604, 1116, 'Seruway'),
(111605, 1116, 'Kota Kualasinpang'),
(111606, 1116, 'Kejuruan Muda'),
(111607, 1116, 'Tamiang Hulu'),
(111608, 1116, 'Rantau'),
(111609, 1116, 'Banda Mulia'),
(111610, 1116, 'Bandar Pusaka'),
(111611, 1116, 'Tenggulun'),
(111612, 1116, 'Sekerak'),
(111701, 1117, 'Pintu Rime Gayo'),
(111702, 1117, 'Permata'),
(111703, 1117, 'Syiah Utama'),
(111704, 1117, 'Bandar'),
(111705, 1117, 'Bukit'),
(111706, 1117, 'Wih Pesam'),
(111707, 1117, 'Timang gajah'),
(111708, 1117, 'Bener Kelipah'),
(111709, 1117, 'Mesidah'),
(111710, 1117, 'Gajah Putih'),
(111801, 1118, 'Meureudu'),
(111802, 1118, 'Ulim'),
(111803, 1118, 'Jangka Buaya'),
(111804, 1118, 'Bandar Dua'),
(111805, 1118, 'Meurah Dua'),
(111806, 1118, 'Bandar Baru'),
(111807, 1118, 'Panteraja'),
(111808, 1118, 'Trienggadeng'),
(117101, 1171, 'Baiturrahman'),
(117102, 1171, 'Kuta Alam'),
(117103, 1171, 'Meuraxa'),
(117104, 1171, 'Syiah Kuala'),
(117105, 1171, 'Lueng Bata'),
(117106, 1171, 'Kuta Raja'),
(117107, 1171, 'Banda Raya'),
(117108, 1171, 'Jaya Baru'),
(117109, 1171, 'Ulee Kareng'),
(117201, 1172, 'Sukakarya'),
(117202, 1172, 'Sukajaya'),
(117301, 1173, 'Muara Dua'),
(117302, 1173, 'Banda Sakti'),
(117303, 1173, 'Blang Mangat'),
(117304, 1173, 'Muara Satu'),
(117401, 1174, 'Langsa Timur'),
(117402, 1174, 'Langsa Barat'),
(117403, 1174, 'Langsa Kota'),
(117404, 1174, 'Langsa Lama'),
(117405, 1174, 'Langsa Baro'),
(117501, 1175, 'Simpang Kiri'),
(117502, 1175, 'Penanggalan'),
(117503, 1175, 'Rundeng'),
(117504, 1175, 'Sultan Daulat'),
(117505, 1175, 'Longkib'),
(120101, 1201, 'Barus'),
(120102, 1201, 'Sorkam'),
(120103, 1201, 'Pandan'),
(120104, 1201, 'Pinangsori'),
(120105, 1201, 'Manduamas'),
(120106, 1201, 'Kolang'),
(120107, 1201, 'Tapian Nauli'),
(120108, 1201, 'Sibabangun'),
(120109, 1201, 'Sosor Gadong'),
(120110, 1201, 'Sorkam Barat'),
(120111, 1201, 'Sirandorung'),
(120112, 1201, 'Andam Dewi'),
(120113, 1201, 'Sitahuis'),
(120114, 1201, 'Tukka'),
(120115, 1201, 'Badiri'),
(120116, 1201, 'Pasaribu Tobing'),
(120117, 1201, 'Barus Utara'),
(120118, 1201, 'Suka Bangun'),
(120119, 1201, 'Lumut'),
(120120, 1201, 'Sarudik'),
(120201, 1202, 'Tarutung'),
(120202, 1202, 'Siatas Barita'),
(120203, 1202, 'Adian Koting'),
(120204, 1202, 'Sipoholon'),
(120205, 1202, 'Pahae Julu'),
(120206, 1202, 'Pahae Jae'),
(120207, 1202, 'Simangumban'),
(120208, 1202, 'Purba Tua'),
(120209, 1202, 'Siborong-Borong'),
(120210, 1202, 'Pagaran'),
(120211, 1202, 'Parmonangan'),
(120212, 1202, 'Sipahutar'),
(120213, 1202, 'Pangaribuan'),
(120214, 1202, 'Garoga'),
(120215, 1202, 'Muara'),
(120301, 1203, 'Angkola Barat'),
(120302, 1203, 'Batang Toru'),
(120303, 1203, 'Angkola Timur'),
(120304, 1203, 'Sipirok'),
(120305, 1203, 'Saipar Dolok Hole'),
(120306, 1203, 'Angkola Selatan'),
(120307, 1203, 'Batang Angkola'),
(120314, 1203, 'Arse'),
(120320, 1203, 'Marancar'),
(120321, 1203, 'Sayur Matinggi'),
(120322, 1203, 'Aek Bilah'),
(120329, 1203, 'Muara Batang Toru'),
(120330, 1203, 'Tano Tombangan Angkola'),
(120331, 1203, 'Angkola Sangkunur'),
(120405, 1204, 'Hiliduho'),
(120406, 1204, 'Gido'),
(120410, 1204, 'Idanogawo'),
(120411, 1204, 'Bawolato'),
(120420, 1204, 'Hiliserangkai'),
(120421, 1204, 'Botomuzoi'),
(120427, 1204, 'Ulugawo'),
(120428, 1204, 'Ma\'u'),
(120429, 1204, 'Somolo-molo'),
(120435, 1204, 'Sogae\'adu'),
(120501, 1205, 'Bahorok'),
(120502, 1205, 'Salapian'),
(120503, 1205, 'Kuala'),
(120504, 1205, 'Sei Bingei'),
(120505, 1205, 'Binjai'),
(120506, 1205, 'Selesai'),
(120507, 1205, 'Stabat'),
(120508, 1205, 'Wampu'),
(120509, 1205, 'Secanggang'),
(120510, 1205, 'Hinai'),
(120511, 1205, 'Tanjung Pura'),
(120512, 1205, 'Padang Tualang'),
(120513, 1205, 'Gebang'),
(120514, 1205, 'Babalan'),
(120515, 1205, 'Pangkalan Susu'),
(120516, 1205, 'Besitang'),
(120517, 1205, 'Sei Lepan'),
(120518, 1205, 'Brandan Barat'),
(120519, 1205, 'Batang Serangan'),
(120520, 1205, 'Sawit Seberang'),
(120521, 1205, 'Sirapit'),
(120522, 1205, 'Kutambaru'),
(120523, 1205, 'Pematang Jaya'),
(120601, 1206, 'Kabanjahe'),
(120602, 1206, 'Berastagi'),
(120603, 1206, 'Barusjahe'),
(120604, 1206, 'Tigapanah'),
(120605, 1206, 'Merek'),
(120606, 1206, 'Munte'),
(120607, 1206, 'Juhar'),
(120608, 1206, 'Tigabinanga'),
(120609, 1206, 'Laubaleng'),
(120610, 1206, 'Mardingding'),
(120611, 1206, 'Payung'),
(120612, 1206, 'Simpang Empat'),
(120613, 1206, 'Kutabuluh'),
(120614, 1206, 'Dolat Rayat'),
(120615, 1206, 'Merdeka'),
(120616, 1206, 'Naman Teran'),
(120617, 1206, 'Tiganderket'),
(120701, 1207, 'Gunung Meriah'),
(120702, 1207, 'Tanjung Morawa'),
(120703, 1207, 'Sibolangit'),
(120704, 1207, 'Kutalimbaru'),
(120705, 1207, 'Pancur Batu'),
(120706, 1207, 'Namorambe'),
(120707, 1207, 'Sibiru-biru'),
(120708, 1207, 'STM Hilir'),
(120709, 1207, 'Bangun Purba'),
(120719, 1207, 'Galang'),
(120720, 1207, 'STM Hulu'),
(120721, 1207, 'Patumbak'),
(120722, 1207, 'Deli Tua'),
(120723, 1207, 'Sunggal'),
(120724, 1207, 'Hamparan Perak'),
(120725, 1207, 'Labuhan Deli'),
(120726, 1207, 'Percut Sei Tuan'),
(120727, 1207, 'Batang Kuis'),
(120728, 1207, 'Lubuk Pakam'),
(120731, 1207, 'Pagar Merbau'),
(120732, 1207, 'Pantai Labu'),
(120733, 1207, 'Beringin'),
(120801, 1208, 'Siantar'),
(120802, 1208, 'Gunung Malela'),
(120803, 1208, 'Gunung Maligas'),
(120804, 1208, 'Panei'),
(120805, 1208, 'Panombeian Pane'),
(120806, 1208, 'Jorlang Hataran'),
(120807, 1208, 'Raya Kahean'),
(120808, 1208, 'Bosar Maligas'),
(120809, 1208, 'Sidamanik'),
(120810, 1208, 'Pematang Sidamanik'),
(120811, 1208, 'Tanah Jawa'),
(120812, 1208, 'Hatonduhan'),
(120813, 1208, 'Dolok Panribuan'),
(120814, 1208, 'Purba'),
(120815, 1208, 'Haranggaol Horison'),
(120816, 1208, 'Girsang Sipangan Bolon'),
(120817, 1208, 'Dolok Batu Nanggar'),
(120818, 1208, 'Huta Bayu Raja'),
(120819, 1208, 'Jawa Maraja Bah Jambi'),
(120820, 1208, 'Dolok Pardamean'),
(120821, 1208, 'Pematang Bandar'),
(120822, 1208, 'Bandar Huluan'),
(120823, 1208, 'Bandar'),
(120824, 1208, 'Bandar Masilam'),
(120825, 1208, 'Silimakuta'),
(120826, 1208, 'Dolok Silau'),
(120827, 1208, 'Silou Kahean'),
(120828, 1208, 'Tapian Dolok'),
(120829, 1208, 'Raya'),
(120830, 1208, 'Ujung Padang'),
(120831, 1208, 'Pamatang Silima Huta'),
(120908, 1209, 'Meranti'),
(120909, 1209, 'Air Joman'),
(120910, 1209, 'Tanjung Balai'),
(120911, 1209, 'Sei Kepayang'),
(120912, 1209, 'Simpang Empat'),
(120913, 1209, 'Air Batu'),
(120914, 1209, 'Pulau Rakyat'),
(120915, 1209, 'Bandar Pulau'),
(120916, 1209, 'Buntu Pane'),
(120917, 1209, 'Bandar Pasir Mandoge'),
(120918, 1209, 'Aek Kuasan'),
(120919, 1209, 'Kota Kisaran Barat'),
(120920, 1209, 'Kota Kisaran Timur'),
(120921, 1209, 'Aek Songsongan'),
(120922, 1209, 'Rahunig'),
(120923, 1209, 'Sei Dadap'),
(120924, 1209, 'Sei Kepayang Barat'),
(120925, 1209, 'Sei Kepayang Timur'),
(120926, 1209, 'Tinggi Raja'),
(120927, 1209, 'Setia Janji'),
(120928, 1209, 'Silau Laut'),
(120929, 1209, 'Rawang Panca Arga'),
(120930, 1209, 'Pulo Bandring'),
(120931, 1209, 'Teluk Dalam'),
(120932, 1209, 'Aek Ledong'),
(121001, 1210, 'Rantau Utara'),
(121002, 1210, 'Rantau Selatan'),
(121007, 1210, 'Bilah Barat'),
(121008, 1210, 'Bilah Hilir'),
(121009, 1210, 'Bilah Hulu'),
(121014, 1210, 'Pangkatan'),
(121018, 1210, 'Panai Tengah'),
(121019, 1210, 'Panai Hilir'),
(121020, 1210, 'Panai Hulu'),
(121101, 1211, 'Sidikalang'),
(121102, 1211, 'Sumbul'),
(121103, 1211, 'Tigalingga'),
(121104, 1211, 'Siempat Nempu'),
(121105, 1211, 'Silima Pungga Punga'),
(121106, 1211, 'Tanah Pinem'),
(121107, 1211, 'Siempat Nempu Hulu'),
(121108, 1211, 'Siempat Nempu Hilir'),
(121109, 1211, 'Pegagan Hilir'),
(121110, 1211, 'Parbuluan'),
(121111, 1211, 'Lae Parira'),
(121112, 1211, 'Gunung Sitember'),
(121113, 1211, 'Brampu'),
(121114, 1211, 'Silahisabungan'),
(121115, 1211, 'Sitinjo'),
(121201, 1212, 'Balige'),
(121202, 1212, 'Laguboti'),
(121203, 1212, 'Silaen'),
(121204, 1212, 'Habinsaran'),
(121205, 1212, 'Pintu Pohan Meranti'),
(121206, 1212, 'Borbor'),
(121207, 1212, 'Porsea'),
(121208, 1212, 'Ajibata'),
(121209, 1212, 'Lumban Julu'),
(121210, 1212, 'Uluan'),
(121219, 1212, 'Sigumpar'),
(121220, 1212, 'Siantar Narumonda'),
(121221, 1212, 'Nassau'),
(121222, 1212, 'Tampahan'),
(121223, 1212, 'Bonatua Lunasi'),
(121224, 1212, 'Parmaksian'),
(121301, 1213, 'Panyabungan'),
(121302, 1213, 'Panyabungan Utara'),
(121303, 1213, 'Panyabungan Timur'),
(121304, 1213, 'Panyabungan Selatan'),
(121305, 1213, 'Panyabungan Barat'),
(121306, 1213, 'Siabu'),
(121307, 1213, 'Bukit Malintang'),
(121308, 1213, 'Kotanopan'),
(121309, 1213, 'Lembah Sorik Marapi'),
(121310, 1213, 'Tambangan'),
(121311, 1213, 'Ulu Pungkut'),
(121312, 1213, 'Muara Sipongi'),
(121313, 1213, 'Batang Natal'),
(121314, 1213, 'Lingga Bayu'),
(121315, 1213, 'Batahan'),
(121316, 1213, 'Natal'),
(121317, 1213, 'Muara Batang Gadis'),
(121318, 1213, 'Ranto Baek'),
(121319, 1213, 'Huta Bargot'),
(121320, 1213, 'Puncak Sorik Marapi'),
(121321, 1213, 'Pakantan'),
(121322, 1213, 'Sinunukan'),
(121323, 1213, 'Naga Juang'),
(121401, 1214, 'Lolomatua'),
(121402, 1214, 'Gomo'),
(121403, 1214, 'Lahusa'),
(121404, 1214, 'Hibala'),
(121405, 1214, 'Pulau-Pulau Batu'),
(121406, 1214, 'Teluk Dalam'),
(121407, 1214, 'Amandraya'),
(121408, 1214, 'Lalowa\'u'),
(121409, 1214, 'Susua'),
(121410, 1214, 'Maniamolo'),
(121411, 1214, 'Hilimegai'),
(121412, 1214, 'Toma'),
(121413, 1214, 'Mazino'),
(121414, 1214, 'Umbunasi'),
(121415, 1214, 'Aramo'),
(121416, 1214, 'Pulau-Pulau Batu Timur'),
(121417, 1214, 'Mazo'),
(121418, 1214, 'Fanayama'),
(121419, 1214, 'Ulunoyo'),
(121420, 1214, 'Huruna'),
(121421, 1214, 'O\'o\'u'),
(121422, 1214, 'Onohazumba'),
(121423, 1214, 'Hilisalawa\'ahe'),
(121424, 1214, 'Ulususua'),
(121425, 1214, 'Sidua\'ori'),
(121426, 1214, 'Somambawa'),
(121427, 1214, 'Boronadu'),
(121428, 1214, 'Simuk'),
(121429, 1214, 'Pulau-Pulau Batu Barat'),
(121430, 1214, 'Pulau-Pulau Batu Utara'),
(121431, 1214, 'Tanah Masa'),
(121501, 1215, 'Sitelu Tali Urang Jehe'),
(121502, 1215, 'Kerajaan'),
(121503, 1215, 'Salak'),
(121504, 1215, 'Sitelu Tali Urang Julu'),
(121505, 1215, 'Pergetteng Getteng Sengkut'),
(121506, 1215, 'Pagindar'),
(121507, 1215, 'Tinada'),
(121508, 1215, 'Siempat Rube'),
(121601, 1216, 'Parlilitan'),
(121602, 1216, 'Pollung'),
(121603, 1216, 'Baktiraja'),
(121604, 1216, 'Paranginan'),
(121605, 1216, 'Lintong Nihuta'),
(121606, 1216, 'Dolok Sanggul'),
(121607, 1216, 'Sijamapolang'),
(121608, 1216, 'Onan Ganjang'),
(121609, 1216, 'Pakkat'),
(121610, 1216, 'Tarabintang'),
(121701, 1217, 'Simanindo'),
(121702, 1217, 'Onan Runggu'),
(121703, 1217, 'Nainggolan'),
(121704, 1217, 'Palipi'),
(121705, 1217, 'Harian'),
(121706, 1217, 'Sianjar Mula Mula'),
(121707, 1217, 'Ronggur Nihuta'),
(121708, 1217, 'Pangururan'),
(121709, 1217, 'Sitio-tio'),
(121801, 1218, 'Pantai Cermin'),
(121802, 1218, 'Perbaungan'),
(121803, 1218, 'Teluk Mengkudu'),
(121804, 1218, 'Sei. Rampah'),
(121805, 1218, 'Tanjung Beringin'),
(121806, 1218, 'Bandar Khalifah'),
(121807, 1218, 'Dolok Merawan'),
(121808, 1218, 'Sipispis'),
(121809, 1218, 'Dolok Masihul'),
(121810, 1218, 'Kotarih'),
(121811, 1218, 'Silinda'),
(121812, 1218, 'Serba Jadi'),
(121813, 1218, 'Tebing Tinggi'),
(121814, 1218, 'Pegajahan'),
(121815, 1218, 'Sei Bamban'),
(121816, 1218, 'Tebing Syahbandar'),
(121817, 1218, 'Bintang Bayu'),
(121901, 1219, 'Medang Deras'),
(121902, 1219, 'Sei Suka'),
(121903, 1219, 'Air Putih'),
(121904, 1219, 'Lima Puluh'),
(121905, 1219, 'Talawi'),
(121906, 1219, 'Tanjung Tiram'),
(121907, 1219, 'Sei Balai'),
(122001, 1220, 'Dolok Sigompulon'),
(122002, 1220, 'Dolok'),
(122003, 1220, 'Halongonan'),
(122004, 1220, 'Padang Bolak'),
(122005, 1220, 'Padang Bolak Julu'),
(122006, 1220, 'Portibi'),
(122007, 1220, 'Batang Onang'),
(122008, 1220, 'Simangambat'),
(122009, 1220, 'Hulu Sihapas'),
(122101, 1221, 'Sosopan'),
(122102, 1221, 'Barumun Tengah'),
(122103, 1221, 'Huristak'),
(122104, 1221, 'Lubuk Barumun'),
(122105, 1221, 'Huta Raja Tinggi'),
(122106, 1221, 'Ulu Barumun'),
(122107, 1221, 'Barumun'),
(122108, 1221, 'Sosa'),
(122109, 1221, 'Batang Lubu Sutam'),
(122110, 1221, 'Barumun Selatan'),
(122111, 1221, 'Aek Nabara Barumun'),
(122112, 1221, 'Sihapas Barumun'),
(122201, 1222, 'Kotapinang'),
(122202, 1222, 'Kampung Rakyat'),
(122203, 1222, 'Torgamba'),
(122204, 1222, 'Sungai Kanan'),
(122205, 1222, 'Silangkitang'),
(122301, 1223, 'Kualuh Hulu'),
(122302, 1223, 'Kualuh Leidong'),
(122303, 1223, 'Kualuh Hilir'),
(122304, 1223, 'Aek Kuo'),
(122305, 1223, 'Marbau'),
(122306, 1223, 'Na IX - X'),
(122307, 1223, 'Aek Natas'),
(122308, 1223, 'Kualuh Selatan'),
(122401, 1224, 'Lotu'),
(122402, 1224, 'Sawo'),
(122403, 1224, 'Tuhemberua'),
(122404, 1224, 'Sitolu Ori'),
(122405, 1224, 'Namohalu Esiwa'),
(122406, 1224, 'Alasa Talumuzoi'),
(122407, 1224, 'Alasa'),
(122408, 1224, 'Tugala Oyo'),
(122409, 1224, 'Afulu'),
(122410, 1224, 'Lahewa'),
(122411, 1224, 'Lahewa Timur'),
(122501, 1225, 'Lahomi'),
(122502, 1225, 'Sirombu'),
(122503, 1225, 'Mandrehe Barat'),
(122504, 1225, 'Moro\'o'),
(122505, 1225, 'Mandrehe'),
(122506, 1225, 'Mandrehe Utara'),
(122507, 1225, 'Lolofitu Moi'),
(122508, 1225, 'Ulu Moro\'o'),
(127101, 1271, 'Medan Kota'),
(127102, 1271, 'Medan Sunggal'),
(127103, 1271, 'Medan Helvetia'),
(127104, 1271, 'Medan Denai'),
(127105, 1271, 'Medan Barat'),
(127106, 1271, 'Medan Deli'),
(127107, 1271, 'Medan Tuntungan'),
(127108, 1271, 'Medan Belawan'),
(127109, 1271, 'Medan Amplas'),
(127110, 1271, 'Medan Area'),
(127111, 1271, 'Medan Johor'),
(127112, 1271, 'Medan Marelan'),
(127113, 1271, 'Medan Labuhan'),
(127114, 1271, 'Medan Tembung'),
(127115, 1271, 'Medan Maimun'),
(127116, 1271, 'Medan Polonia'),
(127117, 1271, 'Medan Baru'),
(127118, 1271, 'Medan Perjuangan'),
(127119, 1271, 'Medan Petisah'),
(127120, 1271, 'Medan Timur'),
(127121, 1271, 'Medan Selayang'),
(127201, 1272, 'Siantar Timur'),
(127202, 1272, 'Siantar Barat'),
(127203, 1272, 'Siantar Utara'),
(127204, 1272, 'Siantar Selatan'),
(127205, 1272, 'Siantar Marihat'),
(127206, 1272, 'Siantar Martoba'),
(127207, 1272, 'Siantar Sitalasari'),
(127208, 1272, 'Siantar Marimbun'),
(127301, 1273, 'Sibolga Utara'),
(127302, 1273, 'Sibolga Kota'),
(127303, 1273, 'Sibolga Selatan'),
(127304, 1273, 'Sibolga Sambas'),
(127401, 1274, 'Tanjung Balai Selatan'),
(127402, 1274, 'Tanjung Balai Utara'),
(127403, 1274, 'Sei Tualang Raso'),
(127404, 1274, 'Teluk Nibung'),
(127405, 1274, 'Datuk Bandar'),
(127406, 1274, 'Datuk Bandar Timur'),
(127501, 1275, 'Binjai Utara'),
(127502, 1275, 'Binjai Kota'),
(127503, 1275, 'Binjai Barat'),
(127504, 1275, 'Binjai Timur'),
(127505, 1275, 'Binjai Selatan'),
(127601, 1276, 'Padang Hulu'),
(127602, 1276, 'Rambutan'),
(127603, 1276, 'Padang Hilir'),
(127604, 1276, 'Bajenis'),
(127605, 1276, 'Tebing Tinggi Kota'),
(127701, 1277, 'Padangsidimpuan Utara'),
(127702, 1277, 'Padangsidimpuan Selatan'),
(127703, 1277, 'Padangsidimpuan Batunadua'),
(127704, 1277, 'Padangsidimpuan Hutaimbaru'),
(127705, 1277, 'Padangsidimpuan Tenggara'),
(127706, 1277, 'Padangsidimpuan Angkola Julu'),
(127801, 1278, 'Gunungsitoli'),
(127802, 1278, 'Gunungsitoli Selatan'),
(127803, 1278, 'Gunungsitoli Utara'),
(127804, 1278, 'Gunungsitoli Idanoi'),
(127805, 1278, 'Gunungsitoli Alo\'oa'),
(127806, 1278, 'Gunungsitoli Barat'),
(130101, 1301, 'Pancung Soal'),
(130102, 1301, 'Ranah Pesisir'),
(130103, 1301, 'Lengayang'),
(130104, 1301, 'Batang Kapas'),
(130105, 1301, 'IV Jurai'),
(130106, 1301, 'Bayang'),
(130107, 1301, 'Koto XI Tarusan'),
(130108, 1301, 'Sutera'),
(130109, 1301, 'Linggo Sari Baganti'),
(130110, 1301, 'Lunang'),
(130111, 1301, 'Basa Ampek Balai Tapan'),
(130112, 1301, 'IV Nagari Bayang Utara'),
(130113, 1301, 'Airpura'),
(130114, 1301, 'Ranah Ampek Hulu Tapan'),
(130115, 1301, 'Silaut'),
(130203, 1302, 'Pantai Cermin'),
(130204, 1302, 'Lembah Gumanti'),
(130205, 1302, 'Payung Sekaki'),
(130206, 1302, 'Lembang Jaya'),
(130207, 1302, 'Gunung Talang'),
(130208, 1302, 'Bukit Sundi'),
(130209, 1302, 'IX Koto Sungai Lasi'),
(130210, 1302, 'Kubung'),
(130211, 1302, 'X Koto Singkarak'),
(130212, 1302, 'X Koto Diatas'),
(130213, 1302, 'Junjung Sirih'),
(130217, 1302, 'Hiliran Gumanti'),
(130218, 1302, 'Tigo Lurah'),
(130219, 1302, 'Danau Kembar'),
(130303, 1303, 'Tanjung Gadang'),
(130304, 1303, 'Sijunjung'),
(130305, 1303, 'IV Nagari'),
(130306, 1303, 'Kamang Baru'),
(130307, 1303, 'Lubuak Tarok'),
(130308, 1303, 'Koto VII'),
(130309, 1303, 'Sumpur Kudus'),
(130310, 1303, 'Kupitan'),
(130401, 1304, 'X Koto'),
(130402, 1304, 'Batipuh'),
(130403, 1304, 'Rambatan'),
(130404, 1304, 'Lima Kaum'),
(130405, 1304, 'Tanjung Emas'),
(130406, 1304, 'Lintau Buo'),
(130407, 1304, 'Sungayang'),
(130408, 1304, 'Sungai Tarab'),
(130409, 1304, 'Pariangan'),
(130410, 1304, 'Salimpauang'),
(130411, 1304, 'Padang Ganting'),
(130412, 1304, 'Tanjuang Baru'),
(130413, 1304, 'Lintau Buo Utara'),
(130414, 1304, 'Batipuah Selatan'),
(130501, 1305, 'Lubuk Alung'),
(130502, 1305, 'Batang Anai'),
(130503, 1305, 'Nan Sabaris'),
(130504, 1305, 'x Enam Lingkuang'),
(130505, 1305, 'VII Koto Sungai Sarik'),
(130506, 1305, 'V Koto Kampung Dalam'),
(130507, 1305, 'Sungai Garingging'),
(130508, 1305, 'Sungai Limau'),
(130509, 1305, 'IV Koto Aur Malintang'),
(130510, 1305, 'Ulakan Tapakih'),
(130511, 1305, 'Sintuak Toboh Gadang'),
(130512, 1305, 'Padang Sago'),
(130513, 1305, 'Batang Gasan'),
(130514, 1305, 'V Koto Timur'),
(130515, 1305, 'x Kayu Tanam'),
(130516, 1305, 'Patamuan'),
(130517, 1305, 'Enam Lingkung'),
(130601, 1306, 'Tanjung Mutiara'),
(130602, 1306, 'Lubuk Basung'),
(130603, 1306, 'Tanjung Raya'),
(130604, 1306, 'Matur'),
(130605, 1306, 'IV Koto'),
(130606, 1306, 'Banuhampu'),
(130607, 1306, 'Ampek Angkek'),
(130608, 1306, 'Baso'),
(130609, 1306, 'Tilatang Kamang'),
(130610, 1306, 'Palupuh'),
(130611, 1306, 'Pelembayan'),
(130612, 1306, 'Sungai Pua'),
(130613, 1306, 'Ampek Nagari'),
(130614, 1306, 'Candung'),
(130615, 1306, 'Kamang Magek'),
(130616, 1306, 'Malalak'),
(130701, 1307, 'Suliki'),
(130702, 1307, 'Guguak'),
(130703, 1307, 'Payakumbuh'),
(130704, 1307, 'Luak'),
(130705, 1307, 'Harau'),
(130706, 1307, 'Pangkalan Koto Baru'),
(130707, 1307, 'Kapur IX'),
(130708, 1307, 'Gunuang Omeh'),
(130709, 1307, 'Lareh Sago Halaban'),
(130710, 1307, 'Situjuah Limo Nagari'),
(130711, 1307, 'Mungka'),
(130712, 1307, 'Bukik Barisan'),
(130713, 1307, 'Akabiluru'),
(130804, 1308, 'Bonjol'),
(130805, 1308, 'Lubuk Sikaping'),
(130807, 1308, 'Panti'),
(130808, 1308, 'Mapat Tunggul'),
(130812, 1308, 'Duo Koto'),
(130813, 1308, 'Tigo Nagari'),
(130814, 1308, 'Rao'),
(130815, 1308, 'Mapat Tunggul Selatan'),
(130816, 1308, 'Simpang Alahan Mati'),
(130817, 1308, 'Padang Gelugur'),
(130818, 1308, 'Rao Utara'),
(130819, 1308, 'Rao Selatan'),
(130901, 1309, 'Pagai Utara'),
(130902, 1309, 'Sipora Selatan'),
(130903, 1309, 'Siberut Selatan'),
(130904, 1309, 'Siberut Utara'),
(130905, 1309, 'Siberut Barat'),
(130906, 1309, 'Siberut Barat Daya'),
(130907, 1309, 'Siberut Tengah'),
(130908, 1309, 'Sipora Utara'),
(130909, 1309, 'Sikakap'),
(130910, 1309, 'Pagai Selatan'),
(131001, 1310, 'Koto Baru'),
(131002, 1310, 'Pulau Punjung'),
(131003, 1310, 'Sungai Rumbai'),
(131004, 1310, 'Sitiung'),
(131005, 1310, 'Sembilan Koto'),
(131006, 1310, 'Timpeh'),
(131007, 1310, 'Koto Salak'),
(131008, 1310, 'Tiumang'),
(131009, 1310, 'Padang Laweh'),
(131010, 1310, 'Asam Jujuhan'),
(131011, 1310, 'Koto Besar'),
(131101, 1311, 'Sangir'),
(131102, 1311, 'Sungai Pagu'),
(131103, 1311, 'Koto Parik Gadang Diateh'),
(131104, 1311, 'Sangir Jujuan'),
(131105, 1311, 'Sangir Batang Hari'),
(131106, 1311, 'Pauh Duo'),
(131107, 1311, 'Sangir Balai Janggo'),
(131201, 1312, 'Sungaiberemas'),
(131202, 1312, 'Lembah Melintang'),
(131203, 1312, 'Pasaman'),
(131204, 1312, 'Talamau'),
(131205, 1312, 'Kinali'),
(131206, 1312, 'Gunungtuleh'),
(131207, 1312, 'Ranah Batahan'),
(131208, 1312, 'Koto Balingka'),
(131209, 1312, 'Sungaiaur'),
(131210, 1312, 'Luhak Nan Duo'),
(131211, 1312, 'Sasak Ranah Pesisir'),
(137101, 1371, 'Padang Selatan'),
(137102, 1371, 'Padang Timur'),
(137103, 1371, 'Padang Barat'),
(137104, 1371, 'Padang Utara'),
(137105, 1371, 'Bungus Teluk Kabung'),
(137106, 1371, 'Lubuk Begalung'),
(137107, 1371, 'Lubuk Kilangan'),
(137108, 1371, 'Pauh'),
(137109, 1371, 'Kuranji'),
(137110, 1371, 'Nanggalo'),
(137111, 1371, 'Koto Tangah'),
(137201, 1372, 'Lubuk Sikarah'),
(137202, 1372, 'Tanjung Harapan'),
(137301, 1373, 'Lembah Segar'),
(137302, 1373, 'Barangin'),
(137303, 1373, 'Silungkang'),
(137304, 1373, 'Talawi'),
(137401, 1374, 'Padang Panjang Timur'),
(137402, 1374, 'Padang Panjang Barat'),
(137501, 1375, 'Guguak Panjang'),
(137502, 1375, 'Mandiangin K. Selayan'),
(137503, 1375, 'Aur Birugo Tigo Baleh'),
(137601, 1376, 'Payakumbuh Barat'),
(137602, 1376, 'Payakumbuh Utara'),
(137603, 1376, 'Payakumbuh Timur'),
(137604, 1376, 'Lamposi Tigo Nagori'),
(137605, 1376, 'Payakumbuh Selatan'),
(137701, 1377, 'Pariaman Tengah'),
(137702, 1377, 'Pariaman Utara'),
(137703, 1377, 'Pariaman Selatan'),
(137704, 1377, 'Pariaman Timur'),
(140101, 1401, 'Bangkinang Kota'),
(140102, 1401, 'Kampar'),
(140103, 1401, 'Tambang'),
(140104, 1401, 'XIII Koto Kampar'),
(140105, 1401, 'Kuok'),
(140106, 1401, 'Siak Hulu'),
(140107, 1401, 'Kampar Kiri'),
(140108, 1401, 'Kampar Kiri Hilir'),
(140109, 1401, 'Kampar Kiri Hulu'),
(140110, 1401, 'Tapung'),
(140111, 1401, 'Tapung Hilir'),
(140112, 1401, 'Tapung Hulu'),
(140113, 1401, 'Salo'),
(140114, 1401, 'Rumbio Jaya'),
(140115, 1401, 'Bangkinang'),
(140116, 1401, 'Perhentian Raja'),
(140117, 1401, 'Kampar Timur'),
(140118, 1401, 'Kampar Utara'),
(140119, 1401, 'Kampar Kiri Tengah'),
(140120, 1401, 'Gunung Sahilan'),
(140121, 1401, 'Koto Kampar Hulu'),
(140201, 1402, 'Rengat'),
(140202, 1402, 'Rengat Barat'),
(140203, 1402, 'Kelayang'),
(140204, 1402, 'Pasir Penyu'),
(140205, 1402, 'Peranap'),
(140206, 1402, 'Siberida'),
(140207, 1402, 'Batang Cenaku'),
(140208, 1402, 'Batang Gangsal'),
(140209, 1402, 'Lirik'),
(140210, 1402, 'Kuala Cenaku'),
(140211, 1402, 'Sungai Lala'),
(140212, 1402, 'Lubuk Batu Jaya'),
(140213, 1402, 'Rakit Kulim'),
(140214, 1402, 'Batang Peranap'),
(140301, 1403, 'Bengkalis'),
(140302, 1403, 'Bantan'),
(140303, 1403, 'Bukit Batu'),
(140309, 1403, 'Mandau'),
(140310, 1403, 'Rupat'),
(140311, 1403, 'Rupat Utara'),
(140312, 1403, 'Siak Kecil'),
(140313, 1403, 'Pinggir'),
(140401, 1404, 'Reteh'),
(140402, 1404, 'Enok'),
(140403, 1404, 'Kuala Indragiri'),
(140404, 1404, 'Tembilahan'),
(140405, 1404, 'Tempuling'),
(140406, 1404, 'Gaung Anak Serka'),
(140407, 1404, 'Mandah'),
(140408, 1404, 'Kateman'),
(140409, 1404, 'Keritang'),
(140410, 1404, 'Tanah Merah'),
(140411, 1404, 'Batang Tuaka'),
(140412, 1404, 'Gaung'),
(140413, 1404, 'Tembilahan Hulu'),
(140414, 1404, 'Kemuning'),
(140415, 1404, 'Pelangiran'),
(140416, 1404, 'Teluk Belengkong'),
(140417, 1404, 'Pulau Burung'),
(140418, 1404, 'Concong'),
(140419, 1404, 'Kempas'),
(140420, 1404, 'Sungai Batang'),
(140501, 1405, 'Ukui'),
(140502, 1405, 'Pangkalan Kerinci'),
(140503, 1405, 'Pangkalan Kuras'),
(140504, 1405, 'Pangkalan Lesung'),
(140505, 1405, 'Langgam'),
(140506, 1405, 'Pelalawan'),
(140507, 1405, 'Kerumutan'),
(140508, 1405, 'Bunut'),
(140509, 1405, 'Teluk Meranti'),
(140510, 1405, 'Kuala Kampar'),
(140511, 1405, 'Bandar Sei Kijang'),
(140512, 1405, 'Bandar Petalangan'),
(140601, 1406, 'Ujung Batu'),
(140602, 1406, 'Rokan IV Koto'),
(140603, 1406, 'Rambah'),
(140604, 1406, 'Tambusai'),
(140605, 1406, 'Kepenuhan'),
(140606, 1406, 'Kunto Darussalam'),
(140607, 1406, 'Rambah Samo'),
(140608, 1406, 'Rambah Hilir'),
(140609, 1406, 'Tambusai Utara'),
(140610, 1406, 'Bangun Purba'),
(140611, 1406, 'Tandun'),
(140612, 1406, 'Kabun'),
(140613, 1406, 'Bonai Darussalam'),
(140614, 1406, 'Pagaran Tapah Darussalam'),
(140615, 1406, 'Kepenuhan Hulu'),
(140616, 1406, 'Pendalian IV Koto'),
(140701, 1407, 'Kubu'),
(140702, 1407, 'Bangko'),
(140703, 1407, 'Tanah Putih'),
(140704, 1407, 'Rimba Melintang'),
(140705, 1407, 'Bagan Sinembah'),
(140706, 1407, 'Pasir Limau Kapas'),
(140707, 1407, 'Sinaboi'),
(140708, 1407, 'Pujud'),
(140709, 1407, 'Tanah Putih Tanjung Melawan'),
(140710, 1407, 'Bangko Pusako'),
(140711, 1407, 'Simpang Kanan'),
(140712, 1407, 'Batu Hampar'),
(140713, 1407, 'Rantau Kopar'),
(140714, 1407, 'Pekaitan'),
(140715, 1407, 'Kubu Babussalam'),
(140801, 1408, 'Siak'),
(140802, 1408, 'Sungai Apit'),
(140803, 1408, 'Minas'),
(140804, 1408, 'Tualang'),
(140805, 1408, 'Sungai Mandau'),
(140806, 1408, 'Dayun'),
(140807, 1408, 'Kerinci Kanan'),
(140808, 1408, 'Bunga Raya'),
(140809, 1408, 'Koto Gasib'),
(140810, 1408, 'Kandis'),
(140811, 1408, 'Lubuk Dalam'),
(140812, 1408, 'Sabak Auh'),
(140813, 1408, 'Mempura'),
(140814, 1408, 'Pusako'),
(140901, 1409, 'Kuantan Mudik'),
(140902, 1409, 'Kuantan Tengah'),
(140903, 1409, 'Singingi'),
(140904, 1409, 'Kuantan Hilir'),
(140905, 1409, 'Cerenti'),
(140906, 1409, 'Benai'),
(140907, 1409, 'Gunungtoar'),
(140908, 1409, 'Singingi Hilir'),
(140909, 1409, 'Pangean'),
(140910, 1409, 'Logas Tanah Darat'),
(140911, 1409, 'Inuman'),
(140912, 1409, 'Hulu Kuantan'),
(140913, 1409, 'Kuantan Hilir Seberang'),
(140914, 1409, 'Sentajo Raya'),
(140915, 1409, 'Pucuk Rantau'),
(141001, 1410, 'Tebing Tinggi'),
(141002, 1410, 'Rangsang Barat'),
(141003, 1410, 'Rangsang'),
(141004, 1410, 'Tebing Tinggi Barat'),
(141005, 1410, 'Merbau'),
(141006, 1410, 'Pulaumerbau'),
(141007, 1410, 'Tebing Tinggi Timur'),
(141008, 1410, 'Tasik Putri Puyu'),
(141009, 1410, 'Rangsang Pesisir'),
(147101, 1471, 'Sukajadi'),
(147102, 1471, 'Pekanbaru Kota'),
(147103, 1471, 'Sail'),
(147104, 1471, 'Lima Puluh'),
(147105, 1471, 'Senapelan'),
(147106, 1471, 'Rumbai'),
(147107, 1471, 'Bukit Raya'),
(147108, 1471, 'Tampan'),
(147109, 1471, 'Marpoyan Damai'),
(147110, 1471, 'Tenayan Raya'),
(147111, 1471, 'Payung Sekaki'),
(147112, 1471, 'Rumbai Pesisir'),
(147201, 1472, 'Dumai Barat'),
(147202, 1472, 'Dumai Timur'),
(147203, 1472, 'Bukit Kapur'),
(147204, 1472, 'Sungai Sembilan'),
(147205, 1472, 'Medang Kampai'),
(147206, 1472, 'Dumai Kota'),
(147207, 1472, 'Dumai Selatan'),
(150101, 1501, 'Gunung Raya'),
(150102, 1501, 'Danau Kerinci'),
(150104, 1501, 'Sitinjau Laut'),
(150105, 1501, 'Air Hangat'),
(150106, 1501, 'Gunung Kerinci'),
(150107, 1501, 'Batang Merangin'),
(150108, 1501, 'Keliling Danau'),
(150109, 1501, 'Kayu Aro'),
(150111, 1501, 'Air Hangat Timur'),
(150115, 1501, 'Gunung Tujuh'),
(150116, 1501, 'Siulak'),
(150117, 1501, 'Depati Tujuh'),
(150118, 1501, 'Siulak Mukai'),
(150119, 1501, 'Kayu Aro Barat'),
(150120, 1501, 'Bukitkerman'),
(150121, 1501, 'Air Hangat Barat'),
(150201, 1502, 'Jangkat'),
(150202, 1502, 'Bangko'),
(150203, 1502, 'Muara Siau'),
(150204, 1502, 'Sungai Manau'),
(150205, 1502, 'Tabir'),
(150206, 1502, 'Pamenang'),
(150207, 1502, 'Tabir Ulu'),
(150208, 1502, 'Tabir Selatan'),
(150209, 1502, 'Lembah Masurai'),
(150210, 1502, 'Bangko Barat'),
(150211, 1502, 'Nalo Tatan'),
(150212, 1502, 'Batang Masumai'),
(150213, 1502, 'Pamenang Barat'),
(150214, 1502, 'Tabir Ilir'),
(150215, 1502, 'Tabir Timur'),
(150216, 1502, 'Renah Pembarap'),
(150217, 1502, 'Pangkalan Jambu'),
(150218, 1502, 'Sungai Tenang'),
(150219, 1502, 'Renah Pamenang'),
(150220, 1502, 'Pamenang Selatan'),
(150221, 1502, 'Margo Tabir'),
(150222, 1502, 'Tabir Lintas'),
(150223, 1502, 'Tabir Barat'),
(150224, 1502, 'Tiang Pumpung'),
(150301, 1503, 'Batang Asai'),
(150302, 1503, 'Limun'),
(150303, 1503, 'Sarolangun'),
(150304, 1503, 'Pauh'),
(150305, 1503, 'Pelawan'),
(150306, 1503, 'Mandiangin'),
(150307, 1503, 'Air Hitam'),
(150308, 1503, 'Bathin VIII'),
(150309, 1503, 'Singkut'),
(150310, 1503, 'Cermin Nan Gedang'),
(150401, 1504, 'Mersam'),
(150402, 1504, 'Muara Tembesi'),
(150403, 1504, 'Muara Bulian'),
(150404, 1504, 'Batin XXIV'),
(150405, 1504, 'Pemayung'),
(150406, 1504, 'Maro Sebo Ulu'),
(150407, 1504, 'Bajubang'),
(150408, 1504, 'Maro Sebo Ilir'),
(150501, 1505, 'Jambi Luar Kota'),
(150502, 1505, 'Sekernan'),
(150503, 1505, 'Kumpeh'),
(150504, 1505, 'Maro Sebo'),
(150505, 1505, 'Mestong'),
(150506, 1505, 'Kumpeh Ulu'),
(150507, 1505, 'Sungai Bahar'),
(150508, 1505, 'Sungai Gelam'),
(150509, 1505, 'Bahar Utara'),
(150510, 1505, 'Bahar Selatan'),
(150511, 1505, 'Taman Rajo'),
(150601, 1506, 'Tungkal Ulu'),
(150602, 1506, 'Tungkal Ilir'),
(150603, 1506, 'Pengabuan'),
(150604, 1506, 'Betara'),
(150605, 1506, 'Merlung'),
(150606, 1506, 'Tebing Tinggi'),
(150607, 1506, 'Batang Asam'),
(150608, 1506, 'Renah Mendaluh'),
(150609, 1506, 'Muara Papalik'),
(150610, 1506, 'Seberang Kota'),
(150611, 1506, 'Bram Itam'),
(150612, 1506, 'Kuala Betara'),
(150613, 1506, 'Senyerang'),
(150701, 1507, 'Muara Sabak Timur'),
(150702, 1507, 'Nipah Panjang'),
(150703, 1507, 'Mendahara'),
(150704, 1507, 'Rantau Rasau'),
(150705, 1507, 'S a d u'),
(150706, 1507, 'Dendang'),
(150707, 1507, 'Muara Sabak Barat'),
(150708, 1507, 'Kuala Jambi'),
(150709, 1507, 'Mendahara Ulu'),
(150710, 1507, 'Geragai'),
(150711, 1507, 'Berbak'),
(150801, 1508, 'Tanah Tumbuh'),
(150802, 1508, 'Rantau Pandan'),
(150803, 1508, 'Pasar Muaro Bungo'),
(150804, 1508, 'Jujuhan'),
(150805, 1508, 'Tanah Sepenggal'),
(150806, 1508, 'Pelepat'),
(150807, 1508, 'Limbur Lubuk Mengkuang'),
(150808, 1508, 'Muko-muko Bathin VII'),
(150809, 1508, 'Pelepat Ilir'),
(150810, 1508, 'Batin II Babeko'),
(150811, 1508, 'Bathin III'),
(150812, 1508, 'Bungo Dani'),
(150813, 1508, 'Rimbo Tengah'),
(150814, 1508, 'Bathin III Ulu'),
(150815, 1508, 'Bathin II Pelayang'),
(150816, 1508, 'Jujuhan Ilir'),
(150817, 1508, 'Tanah Sepenggal Lintas'),
(150901, 1509, 'Tebo Tengah'),
(150902, 1509, 'Tebo Ilir'),
(150903, 1509, 'Tebo Ulu'),
(150904, 1509, 'Rimbo Bujang'),
(150905, 1509, 'Sumay'),
(150906, 1509, 'VII Koto'),
(150907, 1509, 'Rimbo Ulu'),
(150908, 1509, 'Rimbo Ilir'),
(150909, 1509, 'Tengah Ilir'),
(150910, 1509, 'Serai Serumpun'),
(150911, 1509, 'VII Koto Ilir'),
(150912, 1509, 'Muara Tabir'),
(157101, 1571, 'Telanaipura'),
(157102, 1571, 'Jambi Selatan'),
(157103, 1571, 'Jambi Timur'),
(157104, 1571, 'Pasar Jambi'),
(157105, 1571, 'Pelayangan'),
(157106, 1571, 'Danau Teluk'),
(157107, 1571, 'Kota Baru'),
(157108, 1571, 'Jelutung'),
(157201, 1572, 'Sungai Penuh'),
(157202, 1572, 'Pesisir Bukit'),
(157203, 1572, 'Hamparan Rawang'),
(157204, 1572, 'Tanah Kampung'),
(157205, 1572, 'Kumun Debai'),
(157206, 1572, 'Pondok Tinggi'),
(157207, 1572, 'Koto Baru'),
(157208, 1572, 'Sungai Bungkal'),
(160107, 1601, 'Sosoh Buay Rayap'),
(160108, 1601, 'Pengandonan'),
(160109, 1601, 'Peninjauan'),
(160113, 1601, 'Baturaja Barat'),
(160114, 1601, 'Baturaja Timur'),
(160120, 1601, 'Ulu Ogan'),
(160121, 1601, 'Semidang Aji'),
(160122, 1601, 'Lubuk Batang'),
(160128, 1601, 'Lengkiti'),
(160129, 1601, 'Sinar Peninjauan'),
(160130, 1601, 'Lubuk Raja'),
(160131, 1601, 'Muara Jaya'),
(160202, 1602, 'Tanjung Lubuk'),
(160203, 1602, 'Pedamaran'),
(160204, 1602, 'Mesuji'),
(160205, 1602, 'Kayu Agung'),
(160208, 1602, 'Sirah Pulau Padang'),
(160211, 1602, 'Tulung Selapan'),
(160212, 1602, 'Pampangan'),
(160213, 1602, 'Lempuing'),
(160214, 1602, 'Air Sugihan'),
(160215, 1602, 'Sungai Menang'),
(160217, 1602, 'Jejawi'),
(160218, 1602, 'Cengal'),
(160219, 1602, 'Pangkalan Lampam'),
(160220, 1602, 'Mesuji Makmur'),
(160221, 1602, 'Mesuji Raya'),
(160222, 1602, 'Lempuing Jaya'),
(160223, 1602, 'Teluk Gelam'),
(160224, 1602, 'Pedamaran Timur'),
(160301, 1603, 'Tanjung Agung'),
(160302, 1603, 'Muara Enim'),
(160303, 1603, 'Rambang Dangku'),
(160304, 1603, 'Gunung Megang'),
(160306, 1603, 'Gelumbang'),
(160307, 1603, 'Lawang Kidul'),
(160308, 1603, 'Semende Darat Laut'),
(160309, 1603, 'Semende Darat Tengah'),
(160310, 1603, 'Semende Darat Ulu'),
(160311, 1603, 'Ujan Mas'),
(160314, 1603, 'Lubai'),
(160315, 1603, 'Rambang'),
(160316, 1603, 'Sungai Rotan'),
(160317, 1603, 'Lembak'),
(160319, 1603, 'Benakat'),
(160321, 1603, 'Kelekar'),
(160322, 1603, 'Muara Belida'),
(160323, 1603, 'Belimbing'),
(160324, 1603, 'Belida Darat'),
(160325, 1603, 'Lubai Ulu'),
(160401, 1604, 'Tanjungsakti Pumu'),
(160406, 1604, 'Jarai'),
(160407, 1604, 'Kota Agung'),
(160408, 1604, 'Pulaupinang'),
(160409, 1604, 'Merapi Barat'),
(160410, 1604, 'Lahat'),
(160412, 1604, 'Pajar Bulan'),
(160415, 1604, 'Mulak Ulu'),
(160416, 1604, 'Kikim Selatan'),
(160417, 1604, 'Kikim Timur'),
(160418, 1604, 'Kikim Tengah'),
(160419, 1604, 'Kikim Barat'),
(160420, 1604, 'Pseksu'),
(160421, 1604, 'Gumay Talang'),
(160422, 1604, 'Pagar Gunung'),
(160423, 1604, 'Merapi Timur'),
(160424, 1604, 'Tanjung Sakti Pumi'),
(160425, 1604, 'Gumay Ulu'),
(160426, 1604, 'Merapi Selatan'),
(160427, 1604, 'Tanjungtebat'),
(160428, 1604, 'Muarapayang'),
(160429, 1604, 'Sukamerindu'),
(160501, 1605, 'Tugumulyo'),
(160502, 1605, 'Muara Lakitan'),
(160503, 1605, 'Muara Kelingi'),
(160508, 1605, 'Jayaloka'),
(160509, 1605, 'Muara Beliti'),
(160510, 1605, 'STL Ulu Terawas'),
(160511, 1605, 'Selangit'),
(160512, 1605, 'Megang Sakti'),
(160513, 1605, 'Purwodadi'),
(160514, 1605, 'BTS. Ulu'),
(160518, 1605, 'Tiang Pumpung Kepungut'),
(160519, 1605, 'Sumber Harta'),
(160520, 1605, 'Tuah Negeri'),
(160521, 1605, 'Suka Karya'),
(160601, 1606, 'Sekayu'),
(160602, 1606, 'Lais'),
(160603, 1606, 'Sungai Keruh'),
(160604, 1606, 'Batang Hari Leko'),
(160605, 1606, 'Sanga Desa'),
(160606, 1606, 'Babat Toman'),
(160607, 1606, 'Sungai Lilin'),
(160608, 1606, 'Keluang'),
(160609, 1606, 'Bayung Lencir'),
(160610, 1606, 'Plakat Tinggi'),
(160611, 1606, 'Lalan'),
(160612, 1606, 'Tungkal Jaya'),
(160613, 1606, 'Lawang Wetan'),
(160614, 1606, 'Babat Supat'),
(160701, 1607, 'Banyuasin I'),
(160702, 1607, 'Banyuasin II'),
(160703, 1607, 'Banyuasin III'),
(160704, 1607, 'Pulau Rimau'),
(160705, 1607, 'Betung'),
(160706, 1607, 'Rambutan'),
(160707, 1607, 'Muara Padang'),
(160708, 1607, 'Muara Telang'),
(160709, 1607, 'Makarti Jaya'),
(160710, 1607, 'Talang Kelapa'),
(160711, 1607, 'Rantau Bayur'),
(160712, 1607, 'Tanjung Lago'),
(160713, 1607, 'Muara Sugihan'),
(160714, 1607, 'Air Salek'),
(160715, 1607, 'Tungkal Ilir'),
(160716, 1607, 'Suak Tapeh'),
(160717, 1607, 'Sembawa'),
(160718, 1607, 'Sumber Marga Telang'),
(160719, 1607, 'Air Kumbang'),
(160801, 1608, 'Martapura'),
(160802, 1608, 'Buay Madang'),
(160803, 1608, 'Belitang'),
(160804, 1608, 'Cempaka'),
(160805, 1608, 'Buay Pemuka Peliung'),
(160806, 1608, 'Madang Suku II'),
(160807, 1608, 'Madang Suku I'),
(160808, 1608, 'Semendawai Suku III'),
(160809, 1608, 'Belitang II'),
(160810, 1608, 'Belitang III'),
(160811, 1608, 'Bunga Mayang'),
(160812, 1608, 'Buay Madang Timur'),
(160813, 1608, 'Madang Suku III'),
(160814, 1608, 'Semendawai Barat'),
(160815, 1608, 'Semendawai Timur'),
(160816, 1608, 'Jayapura'),
(160817, 1608, 'Belitang Jaya'),
(160818, 1608, 'Belitang Madang Raya'),
(160819, 1608, 'Belitang Mulya'),
(160820, 1608, 'Buay Pemuka Bangsa Raja'),
(160901, 1609, 'Muara Dua'),
(160902, 1609, 'Pulau Beringin'),
(160903, 1609, 'Banding Agung'),
(160904, 1609, 'Muara Dua Kisam'),
(160905, 1609, 'Simpang'),
(160906, 1609, 'Buay Sandang Aji'),
(160907, 1609, 'Buay Runjung'),
(160908, 1609, 'Mekakau Ilir'),
(160909, 1609, 'Buay Pemaca'),
(160910, 1609, 'Kisam Tinggi'),
(160911, 1609, 'Kisam Ilir'),
(160912, 1609, 'Buay Pematang Ribu Ranau Tengah'),
(160913, 1609, 'Warkuk Ranau Selatan'),
(160914, 1609, 'Runjung Agung'),
(160915, 1609, 'Sungai Are'),
(160916, 1609, 'Sindang Danau'),
(160917, 1609, 'Buana Pemaca'),
(160918, 1609, 'Tiga Dihaji'),
(160919, 1609, 'Buay Rawan'),
(161001, 1610, 'Muara Kuang'),
(161002, 1610, 'Tanjung Batu'),
(161003, 1610, 'Tanjung Raja'),
(161004, 1610, 'Indralaya'),
(161005, 1610, 'Pemulutan'),
(161006, 1610, 'Rantau Alai'),
(161007, 1610, 'Indralaya Utara'),
(161008, 1610, 'Indralaya Selatan'),
(161009, 1610, 'Pemulutan Selatan'),
(161010, 1610, 'Pemulutan Barat'),
(161011, 1610, 'Rantau Panjang'),
(161012, 1610, 'Sungai Pinang'),
(161013, 1610, 'Kandis'),
(161014, 1610, 'Rambang Kuang'),
(161015, 1610, 'Lubuk Keliat'),
(161016, 1610, 'Payaraman'),
(161101, 1611, 'Muara Pinang'),
(161102, 1611, 'Pendopo'),
(161103, 1611, 'Ulu Musi'),
(161104, 1611, 'Tebing Tinggi'),
(161105, 1611, 'Lintang Kanan'),
(161106, 1611, 'Talang Padang'),
(161107, 1611, 'Pasemah Air Keruh'),
(161108, 1611, 'Sikap Dalam'),
(161109, 1611, 'Saling'),
(161110, 1611, 'Pendopo Barat'),
(161201, 1612, 'Talang Ubi'),
(161202, 1612, 'Penukal Utara'),
(161203, 1612, 'Penukal'),
(161204, 1612, 'Abab'),
(161205, 1612, 'Tanah Abang'),
(161301, 1613, 'Rupit'),
(161302, 1613, 'Rawas Ulu'),
(161303, 1613, 'Nibung'),
(161304, 1613, 'Rawas Ilir'),
(161305, 1613, 'Karang Dapo'),
(161306, 1613, 'Karang Jaya'),
(161307, 1613, 'Ulu Rawas'),
(167101, 1671, 'Ilir Barat II'),
(167102, 1671, 'Seberang Ulu I'),
(167103, 1671, 'Seberang Ulu II'),
(167104, 1671, 'Ilir Barat I'),
(167105, 1671, 'Ilir Timur I'),
(167106, 1671, 'Ilir Timur II'),
(167107, 1671, 'Sukarami'),
(167108, 1671, 'Sako'),
(167109, 1671, 'Kemuning'),
(167110, 1671, 'Kalidoni'),
(167111, 1671, 'Bukit Kecil'),
(167112, 1671, 'Gandus'),
(167113, 1671, 'Kertapati'),
(167114, 1671, 'Plaju'),
(167115, 1671, 'Alang-alang Lebar'),
(167116, 1671, 'Sematang Borang'),
(167201, 1672, 'Pagar Alam Utara'),
(167202, 1672, 'Pagar Alam Selatan'),
(167203, 1672, 'Dempo Utara'),
(167204, 1672, 'Dempo Selatan'),
(167205, 1672, 'Dempo Tengah'),
(167301, 1673, 'Lubuk Linggau Timur I'),
(167302, 1673, 'Lubuk Linggau Barat I'),
(167303, 1673, 'Lubuk Linggau Selatan I'),
(167304, 1673, 'Lubuk Linggau Utara I'),
(167305, 1673, 'Lubuk Linggau Timur II'),
(167306, 1673, 'Lubuk Linggau Barat II'),
(167307, 1673, 'Lubuk Linggau Selatan II'),
(167308, 1673, 'Lubuk Linggau Utara II'),
(167401, 1674, 'Prabumulih Barat'),
(167402, 1674, 'Prabumulih Timur'),
(167403, 1674, 'Cambai'),
(167404, 1674, 'Rambang Kpk Tengah'),
(167405, 1674, 'Prabumulih Utara'),
(167406, 1674, 'Prabumulih Selatan'),
(170101, 1701, 'Kedurang'),
(170102, 1701, 'Seginim'),
(170103, 1701, 'Pino'),
(170104, 1701, 'Manna'),
(170105, 1701, 'Kota Manna'),
(170106, 1701, 'Pino Raya'),
(170107, 1701, 'Kedurang Ilir'),
(170108, 1701, 'Air Nipis'),
(170109, 1701, 'Ulu Manna'),
(170110, 1701, 'Bunga Mas'),
(170111, 1701, 'Pasar Manna'),
(170206, 1702, 'Kota Padang'),
(170207, 1702, 'Padang Ulak Tanding'),
(170208, 1702, 'Sindang Kelingi'),
(170209, 1702, 'Curup'),
(170210, 1702, 'Bermani Ulu'),
(170211, 1702, 'Selupu Rejang'),
(170216, 1702, 'Curup Utara'),
(170217, 1702, 'Curup Timur'),
(170218, 1702, 'Curup Selatan'),
(170219, 1702, 'Curup Tengah'),
(170220, 1702, 'Binduriang'),
(170221, 1702, 'Sindang Beliti Ulu'),
(170222, 1702, 'Sindang Dataran'),
(170223, 1702, 'Sindang Beliti Ilir'),
(170224, 1702, 'Bermani Ulu Raya'),
(170301, 1703, 'Enggano'),
(170306, 1703, 'Kerkap'),
(170307, 1703, 'Kota Arga Makmur'),
(170308, 1703, 'Giri Mulya'),
(170309, 1703, 'Padang Jaya'),
(170310, 1703, 'Lais'),
(170311, 1703, 'Batik Nau'),
(170312, 1703, 'Ketahun'),
(170313, 1703, 'Napal Putih'),
(170314, 1703, 'Putri Hijau'),
(170315, 1703, 'Air Besi'),
(170316, 1703, 'Air Napal'),
(170319, 1703, 'Hulu Palik'),
(170320, 1703, 'Air Padang'),
(170321, 1703, 'Arma Jaya'),
(170322, 1703, 'Tanjung Agung Palik'),
(170323, 1703, 'Ulok Kupai'),
(170401, 1704, 'Kinal'),
(170402, 1704, 'Tanjung Kemuning'),
(170403, 1704, 'Kaur Utara'),
(170404, 1704, 'Kaur Tengah'),
(170405, 1704, 'Kaur Selatan'),
(170406, 1704, 'Maje'),
(170407, 1704, 'Nasal'),
(170408, 1704, 'Semidang Gumay'),
(170409, 1704, 'Kelam Tengah'),
(170410, 1704, 'Luas'),
(170411, 1704, 'Muara Sahung'),
(170412, 1704, 'Tetap'),
(170413, 1704, 'Lungkang Kule'),
(170414, 1704, 'Padang Guci Hilir'),
(170415, 1704, 'Padang Guci Hulu'),
(170501, 1705, 'Sukaraja'),
(170502, 1705, 'Seluma'),
(170503, 1705, 'Talo'),
(170504, 1705, 'Semidang Alas'),
(170505, 1705, 'Semidang Alas Maras'),
(170506, 1705, 'Air Periukan'),
(170507, 1705, 'Lubuk Sandi'),
(170508, 1705, 'Seluma Barat'),
(170509, 1705, 'Seluma Timur'),
(170510, 1705, 'Seluma Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kedatangan`
--

CREATE TABLE `kedatangan` (
  `id_kedatangan` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `jenis_permohonan_id` int(11) NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `alasan_pindah_id` int(11) NOT NULL,
  `alamat_tujuan` varchar(100) NOT NULL,
  `klasifikasi_perpindahan` int(11) NOT NULL,
  `jenis_kepindahan_id` int(11) NOT NULL,
  `tgl_datang` date NOT NULL,
  `no_pindah` varchar(45) NOT NULL,
  `jlh_anggota_keluarga` int(11) NOT NULL,
  `no_KK` varchar(45) NOT NULL,
  `surat_pengantar` varchar(500) NOT NULL,
  `fc_ktp` varchar(500) NOT NULL,
  `fc_kk` varchar(500) NOT NULL,
  `foto_berwarna` varchar(500) NOT NULL,
  `id_status_request` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_kelahiran` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `nama_kepala_keluarga` varchar(100) NOT NULL,
  `nama_lengkap_bayi` varchar(100) NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `id_tempat_dilahirkan` int(11) NOT NULL,
  `tpt_lahir` varchar(100) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `pukul` time NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `berat` varchar(100) NOT NULL,
  `panjang` varchar(100) NOT NULL,
  `anak_ke` varchar(100) NOT NULL,
  `nik_ayah` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `id_pekerjaan_ayah` int(11) NOT NULL,
  `nik_ibu` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `id_pekerjaan_ibu` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nik_saksi1` varchar(30) NOT NULL,
  `nama_saksi_1` varchar(50) NOT NULL,
  `nik_saksi2` varchar(30) NOT NULL,
  `nama_saksi2` varchar(50) NOT NULL,
  `fc_surat_nikah` varchar(500) NOT NULL,
  `surat_kelahiran_bidan` varchar(500) NOT NULL,
  `fc_kk_ortu` varchar(500) NOT NULL,
  `fc_ktp_saksi1` varchar(500) NOT NULL,
  `fc_ktp_saksi2` varchar(500) NOT NULL,
  `id_status_request` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id_kelahiran`, `id_penduduk`, `no_kk`, `nama_kepala_keluarga`, `nama_lengkap_bayi`, `jenis_kelamin`, `id_tempat_dilahirkan`, `tpt_lahir`, `hari`, `pukul`, `tanggal`, `bulan`, `tahun`, `berat`, `panjang`, `anak_ke`, `nik_ayah`, `nama_ayah`, `id_pekerjaan_ayah`, `nik_ibu`, `nama_ibu`, `id_pekerjaan_ibu`, `alamat`, `nik_saksi1`, `nama_saksi_1`, `nik_saksi2`, `nama_saksi2`, `fc_surat_nikah`, `surat_kelahiran_bidan`, `fc_kk_ortu`, `fc_ktp_saksi1`, `fc_ktp_saksi2`, `id_status_request`) VALUES
(11, 1, '2313213', 'sadbkba,bdb', 'dgasmdnb ajm', 1, 0, 'sdabkadmb', 'wjabdsjam', '01:46:00', '15', 'September', '3231', '54', '3123', '3', '2311', 'SBDAJDBH', 9, '12131', 'sdnakjdnak', 0, 'sdakjhdbkab', '23131312', 'bakdjbajm', '31312321', 'sbambd ajm', 'F-1.01 FORMULIR PENDAFTARAN KK (2).pdf', 'F-1.01 FORMULIR PENDAFTARAN KK (2).pdf', 'F-1.01 FORMULIR PENDAFTARAN KK (2).pdf', 'F-1.01 FORMULIR PENDAFTARAN KK (2).pdf', 'F-1.01 FORMULIR PENDAFTARAN KK (2).pdf', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `id_kematian` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `NIK` varchar(45) DEFAULT NULL,
  `nama_lengkap` varchar(45) DEFAULT NULL,
  `id_jenis_kelamin` int(11) NOT NULL,
  `tanggal_lahir` varchar(100) DEFAULT NULL,
  `bulan_lahir` varchar(100) NOT NULL,
  `tahun_lahir` varchar(100) NOT NULL,
  `umur` varchar(45) DEFAULT NULL,
  `tpt_lahir` varchar(45) DEFAULT NULL,
  `idagama` int(11) NOT NULL,
  `idpekerjaan` int(11) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `id_kewarganegaraan` int(11) DEFAULT NULL,
  `anak_ke` varchar(45) DEFAULT NULL,
  `tanggal_kematian` varchar(100) DEFAULT NULL,
  `bulan_kematian` varchar(100) NOT NULL,
  `tahun_kematian` varchar(100) NOT NULL,
  `pukul` time DEFAULT NULL,
  `idsebab_kematian` int(11) NOT NULL,
  `tpt_kematian` varchar(45) DEFAULT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nik_saksi1` varchar(20) NOT NULL,
  `nama_saksi1` varchar(50) NOT NULL,
  `nik_saksi2` varchar(20) NOT NULL,
  `nama_saksi2` varchar(50) NOT NULL,
  `surat_pengantar` varchar(500) NOT NULL,
  `sk_dari_dokter` varchar(500) NOT NULL,
  `fc_ktp` varchar(500) NOT NULL,
  `fc_kk` varchar(500) NOT NULL,
  `fc_ijazah_sk` varchar(500) NOT NULL,
  `id_status_request` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keturunan`
--

CREATE TABLE `keturunan` (
  `idketurunan` int(11) NOT NULL,
  `keturunan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kewarganegaraan`
--

CREATE TABLE `kewarganegaraan` (
  `idkewarganegaraan` int(11) NOT NULL,
  `kewarganegaraan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kewarganegaraan`
--

INSERT INTO `kewarganegaraan` (`idkewarganegaraan`, `kewarganegaraan`) VALUES
(1, 'WNI'),
(2, 'WNA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi_perpindahan`
--

CREATE TABLE `klasifikasi_perpindahan` (
  `klasifikasi_perpindahan_id` int(11) NOT NULL,
  `klasifikasi_perpindahan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `klasifikasi_perpindahan`
--

INSERT INTO `klasifikasi_perpindahan` (`klasifikasi_perpindahan_id`, `klasifikasi_perpindahan`) VALUES
(1, 'Dalam satu desa/kelurahan'),
(2, 'Antar desa/kelurahan dalam satu kecamatan'),
(3, 'Antar kecamatan dalam satu kabupaten'),
(4, 'Antar kabupaten/kota dalam satu provinsi'),
(5, 'Antar provinsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `operator_id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `tgl_lahir` varchar(45) DEFAULT NULL,
  `noTelp` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `idpekerjaan` int(11) NOT NULL,
  `pekerjaan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`idpekerjaan`, `pekerjaan`) VALUES
(1, 'Petani'),
(2, 'Nelayan'),
(3, 'Pedagang'),
(4, 'PNS/TNI/POLRI'),
(5, 'Pegawai Swasta'),
(6, 'Wiraswasta'),
(7, 'Pensiunan'),
(8, 'Pekerja Lepas'),
(9, 'Lainnya'),
(10, 'Tidak/Belum Bekerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_terakhir`
--

CREATE TABLE `pendidikan_terakhir` (
  `idpendidikan_terakhir` int(11) NOT NULL,
  `pendidikan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pendidikan_terakhir`
--

INSERT INTO `pendidikan_terakhir` (`idpendidikan_terakhir`, `pendidikan`) VALUES
(1, 'Tidak Tamat SD/MI'),
(2, 'Masih SD/MI'),
(3, 'Tamat SD/MI'),
(4, 'Masih SLTP/MTSN'),
(5, 'Tamat SLTP/MTSN'),
(6, 'Masih SLTA/MA'),
(7, 'Tamat SLTA/MA'),
(8, 'Masih PT/Akademi'),
(9, 'Tamat PT/Akademi'),
(10, 'Tidak/Belum Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `no_KK` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `no_hp` varchar(45) DEFAULT NULL,
  `idjenis_kelamin` int(11) NOT NULL,
  `tmpt_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `idstatus_penduduk` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `id_kab` int(11) NOT NULL,
  `id_kec` int(11) NOT NULL,
  `id_kel` int(11) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nik`, `password`, `no_KK`, `email`, `nama`, `no_hp`, `idjenis_kelamin`, `tmpt_lahir`, `tgl_lahir`, `idstatus_penduduk`, `id_prov`, `id_kab`, `id_kec`, `id_kel`, `alamat`) VALUES
(2, '876543456789', 'cepo', '6567586', 'cepo@gmail.com', 'Crespo Panjaitan', '098765432', 1, 'vkjb', '2020-08-28', 0, 11, 1101, 110101, 1101012015, 'asdfg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penolong_kelahiran`
--

CREATE TABLE `penolong_kelahiran` (
  `id_penolong` int(11) NOT NULL,
  `penolong_kelahiran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penolong_kelahiran`
--

INSERT INTO `penolong_kelahiran` (`id_penolong`, `penolong_kelahiran`) VALUES
(1, 'Dokter'),
(2, 'Bidan/Perawat'),
(3, 'Dukun'),
(4, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perceraian`
--

CREATE TABLE `perceraian` (
  `id_perceraian` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nik_suami` varchar(45) NOT NULL,
  `nama_lengkap_suami` varchar(50) NOT NULL,
  `tpt_lahir_suami` varchar(100) NOT NULL,
  `tgl_lahir_suami` date NOT NULL,
  `id_kewarganegaraan_suami` int(11) NOT NULL,
  `nik_istri` varchar(45) NOT NULL,
  `nama_lengkap_istri` varchar(50) NOT NULL,
  `tpt_lahir_istri` varchar(100) NOT NULL,
  `tgl_lahir_istri` date NOT NULL,
  `id_kewarganegaraan_istri` int(11) NOT NULL,
  `yg_mengajukan_perceraian` int(11) NOT NULL,
  `no_akta_perkawinan` varchar(50) NOT NULL,
  `tanggal_perkawinan` varchar(100) NOT NULL,
  `bulan_perkawinan` varchar(100) NOT NULL,
  `tahun_perkawinan` varchar(100) NOT NULL,
  `no_putusan_pengadilan` varchar(50) NOT NULL,
  `tanggal_putusan_pengadilan` varchar(100) NOT NULL,
  `bulan_putusan_pengadilan` varchar(100) NOT NULL,
  `tahun_putusan_pengadilan` varchar(100) NOT NULL,
  `id_tingkat_peradilan` int(11) NOT NULL,
  `tpt_lembaga_peradilan` varchar(100) NOT NULL,
  `nama_lembaga_peradilan` varchar(100) NOT NULL,
  `sebab_cerai` int(11) NOT NULL,
  `nik_saksi1` varchar(50) NOT NULL,
  `nama_saksi1` varchar(100) NOT NULL,
  `nik_saksi2` varchar(50) NOT NULL,
  `nama_saksi2` varchar(100) NOT NULL,
  `surat_pengantar` varchar(500) NOT NULL,
  `surat_putusan_pengadilan` varchar(500) NOT NULL,
  `id_status_request` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkawinan`
--

CREATE TABLE `perkawinan` (
  `id_perkawinan` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `nik_suami` varchar(45) NOT NULL,
  `nama_suami` varchar(45) NOT NULL,
  `tpt_lahir_suami` varchar(100) NOT NULL,
  `tgl_lahir_suami` date NOT NULL,
  `id_kewarganegaraan_suami` int(11) NOT NULL,
  `nik_istri` varchar(45) NOT NULL,
  `nama_istri` varchar(45) NOT NULL,
  `tpt_lahir_istri` varchar(50) NOT NULL,
  `tgl_lahir_istri` date NOT NULL,
  `id_kewarganegaraan_istri` int(11) NOT NULL,
  `tanggal_pendaftaran` varchar(100) NOT NULL,
  `bulan_pendaftaran` varchar(100) NOT NULL,
  `tahun_pendaftaran` varchar(100) NOT NULL,
  `tanggal_pemberkatan` varchar(100) NOT NULL,
  `bulan_pemberkatan` varchar(100) NOT NULL,
  `tahun_pemberkatan` varchar(100) NOT NULL,
  `nama_badan_peradilan` varchar(100) NOT NULL,
  `no_putusan_pengadilan` varchar(50) NOT NULL,
  `tgl_putusan_pengadilan` date NOT NULL,
  `idagama` int(11) NOT NULL,
  `nama_pemuka_agama` varchar(50) NOT NULL,
  `nik_saksi1` int(20) NOT NULL,
  `nama_saksi1` varchar(100) NOT NULL,
  `nik_saksi2` varchar(20) NOT NULL,
  `nama_saksi2` varchar(100) NOT NULL,
  `surat_pengantar` varchar(500) NOT NULL,
  `fc_surat_bukti_pemberkatan_perkawinan` varchar(500) NOT NULL,
  `fc_kk` varchar(500) NOT NULL,
  `fc_ktp_yg_bersangkutan` varchar(500) NOT NULL,
  `fptp_yg_bersangkutan` varchar(500) NOT NULL,
  `fc_akta_kelahiran_yang_bersangkutan` varchar(500) NOT NULL,
  `id_status_request` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama`) VALUES
(11, 'Aceh'),
(12, 'Sumatera Utara'),
(13, 'Sumatera Barat'),
(14, 'Riau'),
(15, 'Jambi'),
(16, 'Sumatera Selatan'),
(17, 'Bengkulu'),
(18, 'Lampung'),
(19, 'Kepulauan Bangka Belitung'),
(21, 'Kepulauan Riau'),
(31, 'DKI Jakarta'),
(32, 'Jawa Barat'),
(33, 'Jawa Tengah'),
(34, 'DI Yogyakarta'),
(35, 'Jawa Timur'),
(36, 'Banten'),
(51, 'Bali'),
(52, 'Nusa Tenggara Barat'),
(53, 'Nusa Tenggara Timur'),
(61, 'Kalimantan Barat'),
(62, 'Kalimantan Tengah'),
(63, 'Kalimantan Selatan'),
(64, 'Kalimantan Timur'),
(65, 'Kalimantan Utara'),
(71, 'Sulawesi Utara'),
(72, 'Sulawesi Tengah'),
(73, 'Sulawesi Selatan'),
(74, 'Sulawesi Tenggara'),
(75, 'Gorontalo'),
(76, 'Sulawesi Barat'),
(81, 'Maluku'),
(82, 'Maluku Utara'),
(91, 'Papua Barat'),
(92, 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sebab_kematian`
--

CREATE TABLE `sebab_kematian` (
  `idsebab_kematian` int(11) NOT NULL,
  `sebab_kematian` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sebab_kematian`
--

INSERT INTO `sebab_kematian` (`idsebab_kematian`, `sebab_kematian`) VALUES
(1, 'Sakit biasa/tua'),
(2, 'Wabah penyakit'),
(3, 'Kecelakaan'),
(4, 'Kriminalitas'),
(5, 'Bunuh diri'),
(6, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sebab_perceraian`
--

CREATE TABLE `sebab_perceraian` (
  `idsebab_perceraian` int(11) NOT NULL,
  `sebab_perceraian` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sebab_perceraian`
--

INSERT INTO `sebab_perceraian` (`idsebab_perceraian`, `sebab_perceraian`) VALUES
(1, 'Berbuat zina'),
(2, 'Pemabuk/Pemadat'),
(3, 'Penjudi'),
(4, 'Meninggalkan pasangan lebih 2 thn tanpa izin/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_penduduk`
--

CREATE TABLE `status_penduduk` (
  `idstatus_penduduk` int(11) NOT NULL,
  `status_penduduk` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `status_penduduk`
--

INSERT INTO `status_penduduk` (`idstatus_penduduk`, `status_penduduk`) VALUES
(1, 'Penduduk'),
(2, 'Non Penduduk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_request`
--

CREATE TABLE `status_request` (
  `id_status` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `status_request`
--

INSERT INTO `status_request` (`id_status`, `status`) VALUES
(1, 'Menunggu'),
(2, 'sedang_Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sts_hubungan_keluarga`
--

CREATE TABLE `sts_hubungan_keluarga` (
  `id_sts_hubungan_keluarga` int(11) NOT NULL,
  `sts_hubungan_keluarga` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sts_hubungan_keluarga`
--

INSERT INTO `sts_hubungan_keluarga` (`id_sts_hubungan_keluarga`, `sts_hubungan_keluarga`) VALUES
(1, 'Kepala Keluarga'),
(2, 'Istri'),
(3, 'Anak'),
(4, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sts_hubungan_sbl_kawin`
--

CREATE TABLE `sts_hubungan_sbl_kawin` (
  `idsts_hubungan_sbl_kawin` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sts_hubungan_sbl_kawin`
--

INSERT INTO `sts_hubungan_sbl_kawin` (`idsts_hubungan_sbl_kawin`, `status`) VALUES
(1, 'Kawin'),
(2, 'Belum Kawin'),
(3, 'Cerai Hidup'),
(4, 'Cerai Mati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sts_perkawinan`
--

CREATE TABLE `sts_perkawinan` (
  `idsts_perkawinan` int(11) NOT NULL,
  `status_perkawinan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sts_perkawinan`
--

INSERT INTO `sts_perkawinan` (`idsts_perkawinan`, `status_perkawinan`) VALUES
(1, 'Belum Kawin'),
(2, 'Kawin'),
(3, 'Cerai Hidup'),
(4, 'Cerai Mati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_dilahirkan`
--

CREATE TABLE `tempat_dilahirkan` (
  `id_tempat_dilahirkan` int(11) NOT NULL,
  `tempat_dilahirkan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempat_dilahirkan`
--

INSERT INTO `tempat_dilahirkan` (`id_tempat_dilahirkan`, `tempat_dilahirkan`) VALUES
(1, 'RS/RB'),
(2, 'Puskesmas'),
(3, 'Polindes'),
(4, 'Rumah'),
(5, 'Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tgkt_peradilan_perkara`
--

CREATE TABLE `tgkt_peradilan_perkara` (
  `idtgkt_peradilan_perkara` int(11) NOT NULL,
  `tgkt_peradilan_perkara` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tgkt_peradilan_perkara`
--

INSERT INTO `tgkt_peradilan_perkara` (`idtgkt_peradilan_perkara`, `tgkt_peradilan_perkara`) VALUES
(1, 'Pengadilan Negeri'),
(2, 'Pengadilan Agama'),
(3, 'Pengadilan Tinggi Negeri'),
(4, 'Pengadilan Tinggi Agama'),
(5, 'Mahkamah Agung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `yg_menerangkan_kematian`
--

CREATE TABLE `yg_menerangkan_kematian` (
  `idyg_menerangkan_kematian` int(11) NOT NULL,
  `yg_menerangkan_kematian` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `yg_mengajukan_perceraian`
--

CREATE TABLE `yg_mengajukan_perceraian` (
  `id_yg_mengajukan_perceraian` int(11) NOT NULL,
  `yg_mengajukan_perceraian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `yg_mengajukan_perceraian`
--

INSERT INTO `yg_mengajukan_perceraian` (`id_yg_mengajukan_perceraian`, `yg_mengajukan_perceraian`) VALUES
(1, 'Suami'),
(2, 'Istri');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`idagama`);

--
-- Indeks untuk tabel `alasan_pindah`
--
ALTER TABLE `alasan_pindah`
  ADD PRIMARY KEY (`alasan_pindah_id`);

--
-- Indeks untuk tabel `desa_kel`
--
ALTER TABLE `desa_kel`
  ADD PRIMARY KEY (`id_kel`),
  ADD KEY `fk_Desa_kel_Kec1` (`id_kec`);

--
-- Indeks untuk tabel `gol_darah`
--
ALTER TABLE `gol_darah`
  ADD PRIMARY KEY (`idgol_darah`);

--
-- Indeks untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`idjenis_kelamin`);

--
-- Indeks untuk tabel `jenis_kepindahan`
--
ALTER TABLE `jenis_kepindahan`
  ADD PRIMARY KEY (`jenis_kepindahan_id`);

--
-- Indeks untuk tabel `jenis_permohonan`
--
ALTER TABLE `jenis_permohonan`
  ADD PRIMARY KEY (`jenis_permohonan_id`);

--
-- Indeks untuk tabel `kab`
--
ALTER TABLE `kab`
  ADD PRIMARY KEY (`id_kab`),
  ADD KEY `fk_kab_provinsi1` (`id_prov`);

--
-- Indeks untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_kk`),
  ADD KEY `fk_jenis_kelamin` (`idjenis_kelamin`),
  ADD KEY `fk_pekerjaan` (`pekerjaan`),
  ADD KEY `fk_agama` (`idagama`),
  ADD KEY `fk_status_perkawinan` (`idsts_perkawinan`),
  ADD KEY `fk_status_request` (`id_status_request`),
  ADD KEY `fk_gol_darah2` (`id_gol_darah`),
  ADD KEY `fk_kewarganegaraan9` (`id_kewarganegaraan`),
  ADD KEY `fk_pendidikan_terakhir` (`pendidikan_terakhir`),
  ADD KEY `fk_penduduk0` (`id_penduduk`);

--
-- Indeks untuk tabel `kec`
--
ALTER TABLE `kec`
  ADD PRIMARY KEY (`id_kec`),
  ADD KEY `fk_Kec_kab1` (`id_kab`);

--
-- Indeks untuk tabel `kedatangan`
--
ALTER TABLE `kedatangan`
  ADD PRIMARY KEY (`id_kedatangan`),
  ADD KEY `fk_penduduk` (`id_penduduk`),
  ADD KEY `fk_jns_permohonan` (`jenis_permohonan_id`),
  ADD KEY `fk_jns_kepindahan` (`jenis_kepindahan_id`),
  ADD KEY `fk_sts_request` (`id_status_request`),
  ADD KEY `fk_klasifikasi_kepindahan` (`klasifikasi_perpindahan`),
  ADD KEY `alasan_pindah` (`alasan_pindah_id`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`),
  ADD KEY `fk_jns_kelamin` (`jenis_kelamin`),
  ADD KEY `fk_sts_request2` (`id_status_request`),
  ADD KEY `fk_tempat_dilahirkan` (`id_tempat_dilahirkan`),
  ADD KEY `fk_pekerjaan_ibu` (`id_pekerjaan_ibu`),
  ADD KEY `fk_pekerjaan_ayah` (`id_pekerjaan_ayah`),
  ADD KEY `fk_penduduk6` (`id_penduduk`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id_kematian`),
  ADD KEY `fk_jenis_kelamin9` (`id_jenis_kelamin`),
  ADD KEY `fk_penduduks` (`id_penduduk`),
  ADD KEY `fk_sts_request23` (`id_status_request`),
  ADD KEY `fk_agama8` (`idagama`),
  ADD KEY `fk_pekerjaan8` (`idpekerjaan`),
  ADD KEY `fk_sebabk_kematian` (`idsebab_kematian`),
  ADD KEY `fk_kewarganegaraan` (`id_kewarganegaraan`);

--
-- Indeks untuk tabel `keturunan`
--
ALTER TABLE `keturunan`
  ADD PRIMARY KEY (`idketurunan`);

--
-- Indeks untuk tabel `kewarganegaraan`
--
ALTER TABLE `kewarganegaraan`
  ADD PRIMARY KEY (`idkewarganegaraan`);

--
-- Indeks untuk tabel `klasifikasi_perpindahan`
--
ALTER TABLE `klasifikasi_perpindahan`
  ADD PRIMARY KEY (`klasifikasi_perpindahan_id`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`operator_id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`idpekerjaan`);

--
-- Indeks untuk tabel `pendidikan_terakhir`
--
ALTER TABLE `pendidikan_terakhir`
  ADD PRIMARY KEY (`idpendidikan_terakhir`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD KEY `fk_jns_kelamin1` (`idjenis_kelamin`),
  ADD KEY `fk_status_penduduk` (`idstatus_penduduk`),
  ADD KEY `idjenis_kelamin` (`idjenis_kelamin`,`idstatus_penduduk`);

--
-- Indeks untuk tabel `penolong_kelahiran`
--
ALTER TABLE `penolong_kelahiran`
  ADD PRIMARY KEY (`id_penolong`);

--
-- Indeks untuk tabel `perceraian`
--
ALTER TABLE `perceraian`
  ADD PRIMARY KEY (`id_perceraian`),
  ADD KEY `fk_penduduk2` (`id_penduduk`),
  ADD KEY `fk_request` (`id_status_request`),
  ADD KEY `fk_yg_mengajukan_perceraian` (`yg_mengajukan_perceraian`),
  ADD KEY `fk_id_kewarganegaraan_istri` (`id_kewarganegaraan_istri`),
  ADD KEY `fk_id_kewarganegaraan_suami` (`id_kewarganegaraan_suami`),
  ADD KEY `fk_sebab_cerai` (`sebab_cerai`),
  ADD KEY `fk_tingkat_peradilan` (`id_tingkat_peradilan`);

--
-- Indeks untuk tabel `perkawinan`
--
ALTER TABLE `perkawinan`
  ADD PRIMARY KEY (`id_perkawinan`),
  ADD KEY `fk_penduduk4` (`id_penduduk`),
  ADD KEY `fk_sts_request4` (`id_status_request`),
  ADD KEY `fk_agama1` (`idagama`),
  ADD KEY `fk_kewarganegaraan_istri` (`id_kewarganegaraan_istri`),
  ADD KEY `fk_kewarganegaraan_suami` (`id_kewarganegaraan_suami`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indeks untuk tabel `sebab_kematian`
--
ALTER TABLE `sebab_kematian`
  ADD PRIMARY KEY (`idsebab_kematian`);

--
-- Indeks untuk tabel `sebab_perceraian`
--
ALTER TABLE `sebab_perceraian`
  ADD PRIMARY KEY (`idsebab_perceraian`);

--
-- Indeks untuk tabel `status_penduduk`
--
ALTER TABLE `status_penduduk`
  ADD PRIMARY KEY (`idstatus_penduduk`);

--
-- Indeks untuk tabel `status_request`
--
ALTER TABLE `status_request`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `sts_hubungan_keluarga`
--
ALTER TABLE `sts_hubungan_keluarga`
  ADD PRIMARY KEY (`id_sts_hubungan_keluarga`);

--
-- Indeks untuk tabel `sts_hubungan_sbl_kawin`
--
ALTER TABLE `sts_hubungan_sbl_kawin`
  ADD PRIMARY KEY (`idsts_hubungan_sbl_kawin`);

--
-- Indeks untuk tabel `sts_perkawinan`
--
ALTER TABLE `sts_perkawinan`
  ADD PRIMARY KEY (`idsts_perkawinan`);

--
-- Indeks untuk tabel `tempat_dilahirkan`
--
ALTER TABLE `tempat_dilahirkan`
  ADD PRIMARY KEY (`id_tempat_dilahirkan`);

--
-- Indeks untuk tabel `tgkt_peradilan_perkara`
--
ALTER TABLE `tgkt_peradilan_perkara`
  ADD PRIMARY KEY (`idtgkt_peradilan_perkara`);

--
-- Indeks untuk tabel `yg_menerangkan_kematian`
--
ALTER TABLE `yg_menerangkan_kematian`
  ADD PRIMARY KEY (`idyg_menerangkan_kematian`);

--
-- Indeks untuk tabel `yg_mengajukan_perceraian`
--
ALTER TABLE `yg_mengajukan_perceraian`
  ADD PRIMARY KEY (`id_yg_mengajukan_perceraian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `idagama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `alasan_pindah`
--
ALTER TABLE `alasan_pindah`
  MODIFY `alasan_pindah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `desa_kel`
--
ALTER TABLE `desa_kel`
  MODIFY `id_kel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1104012006;

--
-- AUTO_INCREMENT untuk tabel `gol_darah`
--
ALTER TABLE `gol_darah`
  MODIFY `idgol_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `idjenis_kelamin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_kepindahan`
--
ALTER TABLE `jenis_kepindahan`
  MODIFY `jenis_kepindahan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis_permohonan`
--
ALTER TABLE `jenis_permohonan`
  MODIFY `jenis_permohonan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kab`
--
ALTER TABLE `kab`
  MODIFY `id_kab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9272;

--
-- AUTO_INCREMENT untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kec`
--
ALTER TABLE `kec`
  MODIFY `id_kec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170511;

--
-- AUTO_INCREMENT untuk tabel `kedatangan`
--
ALTER TABLE `kedatangan`
  MODIFY `id_kedatangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `keturunan`
--
ALTER TABLE `keturunan`
  MODIFY `idketurunan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kewarganegaraan`
--
ALTER TABLE `kewarganegaraan`
  MODIFY `idkewarganegaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `klasifikasi_perpindahan`
--
ALTER TABLE `klasifikasi_perpindahan`
  MODIFY `klasifikasi_perpindahan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `operator`
--
ALTER TABLE `operator`
  MODIFY `operator_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `idpekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pendidikan_terakhir`
--
ALTER TABLE `pendidikan_terakhir`
  MODIFY `idpendidikan_terakhir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penolong_kelahiran`
--
ALTER TABLE `penolong_kelahiran`
  MODIFY `id_penolong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `perceraian`
--
ALTER TABLE `perceraian`
  MODIFY `id_perceraian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perkawinan`
--
ALTER TABLE `perkawinan`
  MODIFY `id_perkawinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `sebab_kematian`
--
ALTER TABLE `sebab_kematian`
  MODIFY `idsebab_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sebab_perceraian`
--
ALTER TABLE `sebab_perceraian`
  MODIFY `idsebab_perceraian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `status_penduduk`
--
ALTER TABLE `status_penduduk`
  MODIFY `idstatus_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `status_request`
--
ALTER TABLE `status_request`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sts_hubungan_keluarga`
--
ALTER TABLE `sts_hubungan_keluarga`
  MODIFY `id_sts_hubungan_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sts_hubungan_sbl_kawin`
--
ALTER TABLE `sts_hubungan_sbl_kawin`
  MODIFY `idsts_hubungan_sbl_kawin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sts_perkawinan`
--
ALTER TABLE `sts_perkawinan`
  MODIFY `idsts_perkawinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tempat_dilahirkan`
--
ALTER TABLE `tempat_dilahirkan`
  MODIFY `id_tempat_dilahirkan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tgkt_peradilan_perkara`
--
ALTER TABLE `tgkt_peradilan_perkara`
  MODIFY `idtgkt_peradilan_perkara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `yg_menerangkan_kematian`
--
ALTER TABLE `yg_menerangkan_kematian`
  MODIFY `idyg_menerangkan_kematian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `yg_mengajukan_perceraian`
--
ALTER TABLE `yg_mengajukan_perceraian`
  MODIFY `id_yg_mengajukan_perceraian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `desa_kel`
--
ALTER TABLE `desa_kel`
  ADD CONSTRAINT `fk_Desa_kel_Kec1` FOREIGN KEY (`id_kec`) REFERENCES `kec` (`id_kec`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD CONSTRAINT `fk_agama` FOREIGN KEY (`idagama`) REFERENCES `agama` (`idagama`),
  ADD CONSTRAINT `fk_gol_darah2` FOREIGN KEY (`id_gol_darah`) REFERENCES `gol_darah` (`idgol_darah`),
  ADD CONSTRAINT `fk_jenis_kelamin` FOREIGN KEY (`idjenis_kelamin`) REFERENCES `jenis_kelamin` (`idjenis_kelamin`),
  ADD CONSTRAINT `fk_kewarganegaraan9` FOREIGN KEY (`id_kewarganegaraan`) REFERENCES `kewarganegaraan` (`idkewarganegaraan`),
  ADD CONSTRAINT `fk_pekerjaan` FOREIGN KEY (`pekerjaan`) REFERENCES `pekerjaan` (`idpekerjaan`),
  ADD CONSTRAINT `fk_pendidikan_terakhir` FOREIGN KEY (`pendidikan_terakhir`) REFERENCES `pendidikan_terakhir` (`idpendidikan_terakhir`),
  ADD CONSTRAINT `fk_penduduk0` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`),
  ADD CONSTRAINT `fk_status_perkawinan` FOREIGN KEY (`idsts_perkawinan`) REFERENCES `sts_perkawinan` (`idsts_perkawinan`),
  ADD CONSTRAINT `fk_status_request` FOREIGN KEY (`id_status_request`) REFERENCES `status_request` (`id_status`);

--
-- Ketidakleluasaan untuk tabel `kec`
--
ALTER TABLE `kec`
  ADD CONSTRAINT `fk_Kec_kab1` FOREIGN KEY (`id_kab`) REFERENCES `kab` (`id_kab`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kedatangan`
--
ALTER TABLE `kedatangan`
  ADD CONSTRAINT `fk_jns_kepindahan` FOREIGN KEY (`jenis_kepindahan_id`) REFERENCES `jenis_kepindahan` (`jenis_kepindahan_id`),
  ADD CONSTRAINT `fk_jns_permohonan` FOREIGN KEY (`jenis_permohonan_id`) REFERENCES `jenis_permohonan` (`jenis_permohonan_id`),
  ADD CONSTRAINT `fk_klasifikasi_kepindahan` FOREIGN KEY (`klasifikasi_perpindahan`) REFERENCES `klasifikasi_perpindahan` (`klasifikasi_perpindahan_id`),
  ADD CONSTRAINT `fk_penduduk` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`),
  ADD CONSTRAINT `fk_sts_request` FOREIGN KEY (`id_status_request`) REFERENCES `status_request` (`id_status`);

--
-- Ketidakleluasaan untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD CONSTRAINT `fk_agama8` FOREIGN KEY (`idagama`) REFERENCES `agama` (`idagama`),
  ADD CONSTRAINT `fk_jenis_kelamin9` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`idjenis_kelamin`),
  ADD CONSTRAINT `fk_kewarganegaraan` FOREIGN KEY (`id_kewarganegaraan`) REFERENCES `kewarganegaraan` (`idkewarganegaraan`),
  ADD CONSTRAINT `fk_pekerjaan8` FOREIGN KEY (`idpekerjaan`) REFERENCES `pekerjaan` (`idpekerjaan`),
  ADD CONSTRAINT `fk_penduduks` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`),
  ADD CONSTRAINT `fk_sebabk_kematian` FOREIGN KEY (`idsebab_kematian`) REFERENCES `sebab_kematian` (`idsebab_kematian`),
  ADD CONSTRAINT `fk_sts_request23` FOREIGN KEY (`id_status_request`) REFERENCES `status_request` (`id_status`);

--
-- Ketidakleluasaan untuk tabel `perceraian`
--
ALTER TABLE `perceraian`
  ADD CONSTRAINT `fk_id_kewarganegaraan_istri` FOREIGN KEY (`id_kewarganegaraan_istri`) REFERENCES `kewarganegaraan` (`idkewarganegaraan`),
  ADD CONSTRAINT `fk_id_kewarganegaraan_suami` FOREIGN KEY (`id_kewarganegaraan_suami`) REFERENCES `kewarganegaraan` (`idkewarganegaraan`),
  ADD CONSTRAINT `fk_penduduk2` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`),
  ADD CONSTRAINT `fk_request` FOREIGN KEY (`id_status_request`) REFERENCES `status_request` (`id_status`),
  ADD CONSTRAINT `fk_sebab_cerai` FOREIGN KEY (`sebab_cerai`) REFERENCES `sebab_perceraian` (`idsebab_perceraian`),
  ADD CONSTRAINT `fk_tingkat_peradilan` FOREIGN KEY (`id_tingkat_peradilan`) REFERENCES `tgkt_peradilan_perkara` (`idtgkt_peradilan_perkara`);

--
-- Ketidakleluasaan untuk tabel `perkawinan`
--
ALTER TABLE `perkawinan`
  ADD CONSTRAINT `fk_agama1` FOREIGN KEY (`idagama`) REFERENCES `agama` (`idagama`),
  ADD CONSTRAINT `fk_kewarganegaraan_istri` FOREIGN KEY (`id_kewarganegaraan_istri`) REFERENCES `kewarganegaraan` (`idkewarganegaraan`),
  ADD CONSTRAINT `fk_kewarganegaraan_suami` FOREIGN KEY (`id_kewarganegaraan_suami`) REFERENCES `kewarganegaraan` (`idkewarganegaraan`),
  ADD CONSTRAINT `fk_penduduk4` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`),
  ADD CONSTRAINT `fk_sts_request4` FOREIGN KEY (`id_status_request`) REFERENCES `status_request` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
