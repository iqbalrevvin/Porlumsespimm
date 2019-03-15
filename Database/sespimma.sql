-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mar 2019 pada 17.20
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sespimma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `idAlumni` int(111) NOT NULL,
  `nama_alumni` varchar(100) NOT NULL,
  `no_idnt` varchar(20) NOT NULL,
  `no_induk` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(7) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `desa` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kabupaten` varchar(25) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pas_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`idAlumni`, `nama_alumni`, `no_idnt`, `no_induk`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `no_telp`, `email`, `pas_foto`) VALUES
(1, 'Budi Nugroho, S.H.', '201808003116', '79121113', 'L', 'Semarang', '1979-12-11', 'Islam', 'Jl. Manjuhan Komp. Green Garden 12 No. C1', '-', '-', 'Palangka Raya', 'Kalimantan Tengah', '082156387984', 'inug079@gmail.com', ''),
(3, 'Margus, M.Psi., Psikolog.', '201808003115', '201808003115', 'L', 'Semarang', '1979-12-11', 'Islam', 'Jl. Manjuhan Komp. Green Garden 12 No. C1', '-', '-', 'Palangka Raya', 'Kalimantan Tengah', '082156387984', 'inug079@gmail.com', ''),
(16, 'Iqbal Revvin', '12345', '12345', 'L', 'Garut', '1995-01-22', 'Islam', 'Kp. Tanggulun', 'Tanggulun', 'Kadungora', 'Garut', 'Jawa BArat', '081223142314', 'iqbal.revvin@gmail.com', ''),
(52, 'Agung Nugroho, S.H.', '201808003111', '76110021', 'L', 'Jakarta', '1976-11-07', 'Islam', 'Duta Bintaro Blok B 12 / 1 Kluster ', '-', 'Kintamani Pinang', 'Tanggerang', 'Banten', '08129093049', '-', ''),
(347, 'dr. Benyamin Franklyn Lumban Sitio, M. Sc., Sp. THT-KL', '201808003181', '73090644', 'L', 'Pematang Siantar', '1973-09-23', 'Khatoli', 'Asrama Polda Sulteng, Jl. A. R. Hakim No. 5', '-', '-', 'Palu', 'Sulawesi Tengah', '082291414840', 'bhayangkaraent@gmail.com', ''),
(348, 'Saparyanto, S.H.', '201808003109', '75020154', 'L', 'Karanganyar', '0000-00-00', 'Islam', 'Pembangunan I Jl. Pandan No. 90 Rt. 20 Rw. 02', '-', 'Banjarmasin Barat', 'Banjarmasin', 'Kalimantan Selatan', '081348230123', 'saparyanto1402@gmail.com', ''),
(349, 'Sahat Martua Pasaribu, S.H.', '201808003117', '80100897', 'L', 'Binjai', '1980-10-24', 'Kristen', 'Jl. Kelud No.30', '-', '-', 'Palangkaraya', 'Kalimantan Tengah', '081346681980', 'sahatpsb80@gmail.com', ''),
(350, 'Bartholomeus Dambe, S.H.', '201808003108', '76110045', 'L', 'Manado', '1976-11-12', 'Khatoli', 'Puri Indah Permai II Blok D1 No 5 ', '-', 'Malayang I Timur', 'Manado', 'Sulawesi Utara', '082187669910', 'bartholomeus.dambe@gmail.com', ''),
(351, 'Abidllah Rifai, S.H., M.H.', '201808003106', '86052035', 'L', 'Jakarta', '1986-05-07', 'Islam', 'Asrama Polri Ciledug Jl. Bhayangkara IV No A6 Rt 2 Rw 1 Ciledug ', '-', '-', 'Tangerang', 'Banten', '08111572010', 'abdillah.rifai@polri.go.id', ''),
(352, 'I Made Indra Wijaya, S.H.', '201808003114', '87111379', 'L', 'Bandar Lampung', '1987-11-06', 'Hindu', 'Bandar Lampung', '-', '-', '-', 'Bandar Lampung', '08112441000', 'madeindra0611@gmail.com', ''),
(353, 'Asri Diyni, S.E.', '201808003119', '75120728', 'P', 'Bone-Bone', '1975-12-17', 'Islam', 'BTN Bukit Cempaka Blok A / 11 ', 'Lepo Lepo', '-', 'Kendari', 'Sulawesi Tenggara', '085241717945', 'asridiyni@gmail.com', ''),
(354, 'Muhammad Basri', '201808003112', '73060581', 'L', 'Pangkajene', '1973-06-22', 'Islam', 'Mako Sat Brimob Polda Papua, Jl. Raya Abepura 1 ', '-', '-', 'Jayapura', 'Papua', '085244649073', 'bayubasri@yahoo.co.id', ''),
(355, 'Kholid Mawardi, S.H.', '201808003107', '77060021', 'L', 'Tegal', '1977-06-15', 'Islam', 'Perumahan Undip Jl. Dewi Sartika 7 No 4 ', '-', '-', 'Semarang', 'Jawa Tengah', '08122834074', 'kholidmawardi034@gmail.com', ''),
(356, 'Agus Setyo Pambudi, S.H.', '201808003113', '77080143', 'L', 'Jember', '1977-08-04', 'Kristen', 'Jl. Cangkringan', 'Somodaran', 'Purwomartini', 'Kalasan', 'Yogyakarta', '081392216160', 'agussetyopambudi@gmail.com', ''),
(357, 'dr. Hendy, SpOT.', '201808003101', '79031399', 'L', 'Jakarta', '1979-03-22', 'Budha', 'Jl. Sunter Indah 3 Blok Hc 2 No. 4 Jakarta Utara 14350', '-', '-', '-', '-', '08128928830', 'tj_hendy@yahoo.com', ''),
(358, 'Johanis Horhoruw, AMK., S.H.', '201808003110', '73120012', 'L', 'Ambon', '1973-12-17', 'Kristen', 'Jln. Dr. Kayadoe Rt 006 / Rw 01 ', 'Benteng', 'Nusaniwe', 'Ambon', 'Maluku', '085243403743', 'johor1712@gmail.com', ''),
(359, 'Laksana Wijayanti, S.H.', '201808003103', '75070031', 'L', 'Pemalang', '1975-07-10', 'Islam', 'Vila Bandung Indah Blok Bd Nomer 8 - 10 ', '-', 'Cileunyi', 'Bandung', 'Jawa Barat', '081394305875', 'laksana.wijayanti@gmail.com', ''),
(360, 'Bernando T.R. Damanik, S.H.', '201808003104', '76110281', 'L', 'Emplasmen Sidamanik ', '1976-11-09', 'Kristen', 'Jln Pangkalan No 80 Rt 02 Rw 04 ', 'Pondok Rangon', 'Cipayung', 'Jakarta Timur', 'DKI Jakarta', '081386475757', 'ber22446688@gmail.com ', ''),
(361, 'Endah Pusparini, S.H.', '201808003102', '81030612', 'P', 'Kediri', '1981-03-17', 'Islam', 'Apartemen Semanggi Jalan Gatot Subroto Kav. 53B ', '-', '-', 'Jakarta Pusat', 'DKI Jakarta', '081316521981', 'pusparini1703@gmail.com', ''),
(362, 'Supriyono, S.Adm.', '201808003120', '77020121', 'L', 'Ngawi', '1977-02-01', 'Islam', 'BTN Griya Bhayangkara Asri Blok C1 Jln Industri / Skip Gatep ', '-', 'Ampenan', 'Selatan Mataram', 'Nusa Tenggara Barat', '087865123111', 'sniperbrimob37@gmail.com', ''),
(363, 'Ferry Siswara', '201808003105', '74110031', 'L', 'Jambi', '1974-11-12', 'Islam', 'Jl. Berbah Dalam Rt. 17 ', 'Eka Jaya', 'Pal Merah', 'Kota Jambi', '-', '08127493234', 'ferry.siswara37@gmail.com', ''),
(364, 'Anastasia Mira', '201808003118', '86031931', 'P', 'Bandung', '1986-03-13', 'Khatoli', 'Kompleks Lemdiklat Polri', '-', '-', '-', '-', '081225533619', 'anastasia.mira.mira@gmail.com', ''),
(365, 'Muhammad Asep Muharam, M.Psi., Psikolog.', '201808003171', '86091929', 'L', 'Yogyakarta', '1986-09-27', 'Islam', 'Aspol Base G', 'TJ. Ria', 'Jayapura utara', 'Jayapura', 'Papua', '08114822009', 'asepbbc@gmail.com', ''),
(366, 'R. Ahmad Hari Junianto, S.Kom.', '201808003134', '86062101', 'L', 'Sukadana', '1986-06-23', 'Islam', 'Aspol Labfor No.15. Jln. Sultan Alauddin', 'Pa Baeng-Baeng', 'Tamalate', 'Makassar, ', 'Sulawesi Selatan', '087810052009', 'raden.pipito@gmail.com', ''),
(367, 'Alief Rakhman Banyu Aji, M.Psi., Psikolog.', '201808003133', '85042048', 'L', 'Manokwari', '1985-04-20', 'Islam', 'Jl. Manunggal No.22 ', '-', 'Pangkalan baru', 'Bangka Tengah', 'Bangka', '081266033394', 'alief_aji@yahoo.com', ''),
(368, 'Prasetyo Widodo, S.Pd.', '201808003140', '76030185', 'L', 'Klaten', '1976-03-25', 'Islam', 'Kav Pelangi Jl. Persatuan 2 Rt 5 Rw 1 No 8, Kp Rumbut', 'Pasir gunung Selatan', 'Cimanggis', 'Depok', 'Banten', '08128034381', 'prasetyo3535@gmail.com', ''),
(369, 'Djoko Suprianto, S.H.', '201808003127', '74020413', 'L', 'Jakarta', '1974-02-09', 'Islam', 'Jl Ks Tubun Rt 04 Rw 07 ', 'Cibuluh', 'Bogor Utara', 'Bogor', 'Jawa barat', '081318184024', 'djoko.suprianto12@gmail.com', ''),
(370, 'Toni Rahardian', '201808003129', '76020786', 'L', 'Blitar', '1976-02-08', 'Islam', 'Kesatrian Polisi Udara Blok A1, No. 2,', 'Pondok Cabe', 'Pamulang', 'Tangerang Selatan', 'Banten', '082113226087', 'toonee56@yahoo.com', ''),
(371, 'Idham, S.HI.', '201808003136', '73070109', 'L', 'Bima', '1973-07-04', 'Islam', 'Aspol Tantui Blok G No.19 Jl. Jenderal Sudirman', '-', '-', 'Ambon', 'Maluku', '082197701973', 'idham 1973idham @gmail.com', ''),
(372, 'I Made Ariawan P., S.H.', '201808003122', '79010011', 'L', 'Gianyar', '1979-01-04', 'Hindu', 'Jl Mulawarman No 87', '-', '-', 'Gianyar', 'Bali', '081803617000', 'ariawanmade79@gmail.com', ''),
(373, 'Sutoto, Amk., SH.', '201808003135', '76080117', 'L', 'Boyolali', '1976-08-18', 'Islam', 'Perumahan Kutoharjo Jl. Bima 5/17 ', '-', '-', 'Pati', 'Jawa tengah', '08122566073', 'sutoto35@gmail.com', ''),
(374, 'Eny Tri Retnowati, S.H., M.M.', '201808003137', '76030139', 'P', 'Blora', '1976-03-17', 'Islam', 'Komp.Ptik Flet D Jl Wijaya No 1', '-', 'Kebayoran Baru', 'Jakarta Selatan', 'DKI Jakarta', '082114334197', 'macanbetina0174@gmail.com', ''),
(375, 'Mardiyanto, S.AP., M.H.', '201808003123', '82010273', 'L', 'Karanganyar', '1982-01-11', 'Islam', 'Perum. Griya Jati Indah No. 06 Rt. 05/01', 'Jati', 'Jaten', 'Karanganayar', 'Jawa Tengah', '081351067440', 'mardiyanto813@gmail.com', ''),
(376, 'Musa Bakhtiar Ardhani, S.Sos., M.M.', '201808003128', '77020108', 'L', 'Ngawi', '1977-02-13', 'Islam', 'Perumahan Siwalan Baru No 4, Jl Masjid Al Fallah', 'Kembangbilo', 'Tuban', 'Tuban', 'Jawa Timut', '082140991008', 'musabakhtiar717@gmail.com', ''),
(377, 'Ika Kartika Suhardi, S.IP', '201808003125', '88081126', 'P', 'Bengkulu', '1988-08-23', 'Islam', 'Green Garden Blok K3/7', 'Kedoya Utara', 'Kebon Jeruk', 'Jakarta Barat', 'DKI Jakarta', '081314172010', 'ika.kartika.suhardi@gmail.com', ''),
(378, 'Hendry, S.E.', '200808003139', '79040169', 'L', 'Pengaron', '1979-04-14', 'Khatoli', 'Jl. S. Pasti Utomo No. 38 Madurejo', '-', 'Afsel', 'Pangkalanbun', 'Kaimantan Tengah', '085251791998', 'hendry_200836@yahoo.com', ''),
(379, 'Ramondias', '201808003131', '84061799', 'L', 'Semarang', '1984-06-21', 'Islam', 'Jalan Jengky Gang Melati Rt 01 Rw 02 No 39F ', '-', '-', 'Kebonpala Makasar', 'Jakarta Timur', '081228782009', 'kucingmatikelindestruck@gmail.com', ''),
(380, 'Aunur Rozaq, S.Sos.', '201808003130', '77110061', 'L', 'Grobogan', '1977-11-16', 'Islam', 'Jl. Karangrejo Komplek Citra Bhayangkara Blok C.23 Rt.05 Rw.01 Guntung Manggis', '-', 'Landasan Ulin', 'Banjar Baru', 'Kalimantan Selatan', '085249843126', 'aunurrozaq1977@gmail.com', ''),
(381, 'Eko Santoso', '201808003121', '77101052', 'L', 'Semarang', '1977-10-09', 'Islam', 'Jl. H. Adam Malik No. 40 Thehok ', '-', 'Jambi Selatan', 'Jambi', '', '085366488080', 'eko.santoso9119@gmail.com', ''),
(382, 'Kristinatara Wahyuningrum, S.H., M.H.', '201808003124', '73030693', 'P', 'Padalarang', '1973-03-16', 'Khatoli', 'Kavling Pusbangintel Blok Z No 4', 'Cijujung', 'Sukaraja', 'Bogor', 'Jawa Barat', '08161686035', 'kristinatara.unit1@gmail.com', ''),
(383, 'Suwardi, S.Pd., S.H.', '201808003132', '74050665', 'L', 'Jakarta', '1974-05-27', 'Islam', 'Jl. Flamboyan Rt. 06 Rw. 03 No. 29 ', 'Hanga- Hanga', 'Luwuk Selatan', 'Banggai', 'Sulawesi Tengah', '081355549674', 'suwardi.143560@gmail.com', ''),
(384, 'Rayes Hendra, S.H., M.H.', '201808003126', '76040014', 'L', 'Padang ', '1976-04-10', 'Islam', 'Komp.Cendana Mata Air Tahap Viii Blok E No.34-B Rt.02 Rw. I', 'Kota Baru', 'Lubuk Begalung', 'Padang', 'Sumatra Barat', '08126762507', 'rayeshendra@gmail.com', ''),
(385, 'Supendi, S.H., M.H.', '201808003153', '74070258', 'L', 'Porsea', '1974-07-17', 'Islam', 'Jln. Batang Kuis No.85 ', '-', 'Tanjung Morawa', 'Serdang', 'Sumatra Utara', '081265182168', 'supendi38@gmail.com', ''),
(386, 'Sutrisno, S.E.', '201808003148', '72060359', 'L', 'Solo', '1972-06-12', 'Islam', 'Jln Haji Sajim No 5 Gandaria Utara', '-', 'Kebayoran Baru', 'Jakarta Selatan', 'DKI Jakarta', '081210646873', 'sutrisnodinhaz@gmail.com', ''),
(387, 'dr. Agustini, M.Kes., Sp.PK.', '201808003144', '74080931', 'P', 'Takalar', '1974-08-14', 'Islam', 'Jl. Dg Tata Raya, Permata Mutiara Blok H No.42-46', '-', '-', 'Makasar', 'Sulawesi Selatan', '081287283737', 'agusagustini@yahoo.co.id', ''),
(388, 'Syabain Rahmad Kusriyanto', '201808003147', '74090020', 'L', 'Bondowoso', '1974-09-02', 'Islam', 'Aspol 1 Polres Bojonegoro No 9 Jl Panglima Sudirman', '-', '-', 'Bojonegoro', 'Jawa Timur', '081216263535', 'syabainbojonegoro34@gmail.com', ''),
(389, 'Dedi Hermawan, S.H.', '201808003160', '81060686', 'L', 'Majalaya', '1981-06-29', 'Islam', 'Jln. Cilengkrang 1 No. 63 Rt.01 Rw.03 ', 'Cisurupan', 'Cibiru', 'Kota Bandung', 'Jawa Barat', '081320079363', 'budak.bdg23@gmail.com', ''),
(390, 'Rafenil Yaumil Rahman, S.H.', '201808003142', '80100518', 'P', 'Padang ', '1980-10-15', 'Islam', 'Jl Merawan No 14 ', 'Sawah Lebar Baru', '-', 'Kota Bengkulu', 'Bengkulu', '081274902008', 'rafenilyaumilrahman@gmail.com', ''),
(391, 'Alfahry Marulafau, S.Kom.', '201808003155', '85092045', 'P', 'Nias', '1985-09-25', 'Islam', 'Puri Bintaro Hijau Blok H1/17', '-', 'Ciledug', 'Tangerang', 'Jawa Barat', '085263497974', 'fahrymaru@gmail.com', ''),
(392, 'Nasir Eming, S.H. ', '201808003151', '77010213', 'L', 'Sorong', '1977-01-01', 'Islam', 'Perum Persada Banten Blok D3 No 24', '-', '-', 'Serang', 'Banten', '087770284097', 'rizanebregaju77@gmail.com', ''),
(393, 'Bryan Rio Wicaksono', '201808003154', '88090978', 'L', 'Jakarta', '2018-09-17', 'Islam', 'Jl. Cipinang Empang Barat No.12 Blok BX', '-', '-', '-', '-', '081319152011', 'bryanrio2011@yahoo.com', ''),
(394, 'Abdul Jalil, S.H.', '201808003159', '75080654', 'L', 'Kudus', '1975-08-29', 'Islam', 'Perum Bumi Citra Asri C1 Jambidan ', '-', 'Banguntapan', 'Bantul', 'Jogjakarta', '085254870004', 'abdul.jalilzebrauh@gmail.com', ''),
(395, 'Teguh Santoso', '201808003156', '74110079', 'L', 'Tegal', '1974-11-20', 'Islam', 'Perum Numbay Land No 5 Blkg Smu 4 Entrop ', '-', '-', 'Jayapura', 'Papua', '081386041305', 'teguh santosoik@gmail.com', ''),
(396, 'Aditya Reza Syahputra', '201808003150', '89030760', 'L', 'Painan', '1989-03-03', 'Islam', 'Pekanbaru', '-', '-', 'Pekan Baru', 'Riau', '081314025034', 'adityareza.syahputra@yahoo.com', ''),
(397, 'Dherrie Alim, S.T.', '201808003158', '83121533', 'L', 'Balikpapan', '1983-12-07', 'Islam', 'Perum Taman Beverly A.11 ', '-', '-', 'Samarinda', 'Kalimantan Timur', '081255007682', 'dherrie.alim@gmail.com', ''),
(398, 'Sulis Yudi Rahmawan, S.H., M.H.', '201808003146', '78120223', 'P', 'Kulon Progo', '1978-12-10', 'Islam', 'Jl Ciherang Rt 7 Rw 5 ', '-', 'Sukatani', 'Tapos Depok', 'Jawa Barat', '082110863256', 'sulisyudir05@gmail.com ', ''),
(399, 'Andri Hutagalung, S. AB., M.AP.', '201808003149', '75030101', 'L', 'Medan', '1975-03-16', 'Islam', 'Komp. Mandiri Permai No 72 Rt 34', '-', 'Surgi Mufti', 'Banjarmasin Utara', 'Kalimantan Selatan', '081348081978', 'andrihtg75@gmail.com', ''),
(400, 'Mochamad Isnaini Nurmandoko, S.E. ', '201808003141', '73090630', 'L', 'Semarang', '1973-09-06', 'Islam', 'Jl. Damai 100 Rt. 18 Ekajaya Jambi Selatan, Jambi', '-', '-', '-', '-', '082380077070', 'handokojambi69@gmail.com', ''),
(401, 'Rini Widiastuti, S.H.', '201808003157', '76070093', 'P', 'Sleman', '1976-07-09', 'Islam', 'Jl. Bunder, Pondok Jati Utara Rt. 02/ Rw. 03, Jurang Mangu Barat', '-', 'Pondok Aren', 'Tangerang Selatan', 'Banten', '081296076060', 'riniesaunggul2013@gmail.com', ''),
(402, 'Agustinus David Putraningtyas, S. Sos., M.H.', '201808003152', '86052034', 'P', 'Semarang', '1986-05-05', 'Khatoli', 'Candi Pawon Timur X Rt08 Rw07 Manyaran', '-', '-', 'Semarang Barat', 'Jawa Barat', '081283592010', 'davideagustino@gmail.com', ''),
(403, 'Cahyo Ediwibowo', '201808003143', '78050279', 'L', 'Wonosobo', '1978-05-01', 'Islam', 'Jl Bhineka IV Perum Griya Karya Mandiri No 19 Pasir Gunung Selatan', '-', 'Cimanggis', 'Depok', 'Jawa Barat', '085217178432', 'cahyo.ediwibowo12@gmail.com', ''),
(404, 'Ana Setiyarti, S.H., M.H.', '201808003145', '77070083', 'P', 'Pati', '1977-07-09', 'Islam', 'Jl. Karanganyar Rt 04/05 ', 'Pudak Payung', 'Banyumanik', 'Kota Semarang', 'Jawa Tengah', '081229260877', 'anasetiyarti95@gmail.com', ''),
(405, 'dr. Anton Sudarto', '201808003161', '78091231', 'L', 'Banjarmasin', '1978-09-01', 'Islam', 'Jalan Menteng Xiii No 14', '-', '-', 'Palangka Raya', 'Kalimantan tengah', '081349174324', 'drtoink@gmail.com', ''),
(406, 'Dani Prasetya, S.H., M.H.', '200808003172', '75010170', 'L', 'Cirebon', '1975-01-21', 'Islam', 'Perum Griya Indihiang Asri Blok C12', 'Sukamaju Kidul', 'Indihiang', 'Tasikmalaya', 'Jawa Barat', '081221442009', 'daniprasetya_2007@yahoo.com', ''),
(407, 'Moh. Zainal Arifin, S.Sos.', '201808003174', '76040173', 'L', 'Bojonegoro', '1976-04-19', 'Islam', 'Jl. Kebonsari 2B No. 26 A ', '-', '-', 'Surabaya', 'Jawa Timur', '081330507822', 'arifinabby@gmail.com', ''),
(408, 'Dedi Hartoyo, S.Pi.', '201808003178', '31031578', 'L', 'Konkep', '1983-03-31', 'Islam', 'Jl. Langsat No 2', 'Andonohu', 'Poasia', 'Kota kendari', 'Sulawesi tenggara', '081248128710', 'hartoyo310383@gmail.com', ''),
(409, 'Joko Hendro S., S.Pd., S.E, M.Si', '201808003170', '73120788', 'L', 'Kendal', '1973-12-25', 'Islam', 'Perumnas Bukit Sendang Mulyo Jl Dahlia II No 32', 'Sendang Mulyo', 'Tambalang', 'Kota Semarang', 'Jawa Tengah', '08125157896', 'jokohendro@gmail . com', ''),
(410, 'Anita Taherong', '201808003138', '82070041', 'P', 'Bulukumba', '1982-07-11', 'Islam', 'Batara Ugi Non Blok Kel Sudiang Raya Kec Biringkanaya Kotamadya Makassar  Sulawesi Selatan', 'Sudiang Raya', 'Biring Kanaya', 'Kotamadya Makasar', 'Sulawesi Selatan', '082281599191', 'anitataherong71@gamail.com', ''),
(411, 'Asep Danu Hudaya', '201808003166', '74100630', 'P', 'Bandung', '1974-10-17', 'Islam', 'Perum Gadik Blok B No 11 ', '-', '-', 'Banjar baru', 'Kalimantan Selatan', '081351254800', 'danuhudaya145@gmail.com', ''),
(412, 'Elang Prasetyo, S.I.Kom.', '201808003169', '87091428', 'L', 'Jakarta', '1987-09-28', 'Islam', 'Jalan Ganesha Jakarta', '-', '-', '-', 'DKI Jakarta', '081270082011', 'elangprasetyo28@gmail.com', ''),
(413, 'Rita Saputra', '201808003164', '75060643', 'P', 'Kendal', '1975-06-24', 'Islam', 'Vila Bogor Indah 3 Blok Ad 4/3A', 'Kedunghalang', 'Bogor Utara', 'Kota Bogor', 'Jawa Barat', '08128748651', 'ritabrigade@gmail.com', ''),
(414, 'Untung Komarudin, S.ST.', '201808003179', '77070691', 'L', 'Brebes', '1977-07-04', 'Islam', 'Jl. Zebra Raya 1 No.  9', '-', '-', 'Semarang', 'Jawa Tengah', '085643139264', 'untungkomarudin@gmail.', ''),
(415, 'Yuni Marsianto, S.H.', '201808003165', '76060440', 'P', 'Balikpapan', '1976-06-20', 'Islam', 'Perum Puri Kahuripan J23 Rt 02 Rw 08', '-', 'Jati Jaten', 'Karanganyar', 'Jawa Tengah', '085228686888', 'yuni200676yuni@gmail.com', ''),
(416, 'Roberto Asfrianza, Amd.', '201808003162', '77101048', 'L', 'Tembilahan', '1977-10-05', 'Islam', 'Jl. Jend. Sudirman Rt. 008 Kel. Klandasan Kec. Balikpapan Kota, Kalimantan Timur', 'Klandasan', 'Balikpapan Kota', 'Balikpapan', 'Kalimantan Timur', '081350608888', 'p_bertos09@yahoo.com', ''),
(417, 'Aroni Canra, S.H.', '201808003168', '78080738', 'L', 'Kerinci', '1978-08-09', 'Islam', 'Jl. Abd. Chatab Rt. 27 Kel. Pasir Putih Kec. Jambi Selatan Kota Jambi, Jambi', 'Pasir Putih', 'Jambi Selatan', 'Kota jambi', 'Jambi', '08127404155', 'roniregama@gmail.com', ''),
(418, 'Edi Mulyono, S.Sos.', '201808003163', '78010032', 'L', 'Boyolali', '0000-00-00', 'Islam', 'Pundong I Rt 05 Rw 03 Tirtoadi Mlati ', '-', '-', 'Sleman', 'Yogyakarta', '081227466155', 'ediewsb@gmail.com', ''),
(419, 'Nurhayati, S.IP.', '201808003186', '75100369', 'P', 'Pontianak', '1975-10-30', 'Islam', 'Komplek Taman Anggrek Blok K-15, Jln. Budi Utomo', '-', '-', 'Pontianak', 'Kalimantan Barat', '081257117273', 'nurhansel4@gmail.com', ''),
(420, 'F.A.P. Silalahi, S.S.T., M.M.', '201808003167', '76080555', 'L', 'Pematangsiantar', '1976-08-09', 'Khatoli', 'Aspol Cipinang C/5 Rt.001 Rw.014', '-', '-', 'Jakarta Timur', 'DKI Jakarta', '08157763936', 'fpala736@gmail.com', ''),
(421, 'Umar Maksum, S.H.', '201808003173', '77070306', 'L', 'Majalengka', '1977-07-02', 'Islam', 'Jl. Sawo Buntu No 36 Rt 07 Rw 09 ', '-', 'Bintara', 'Bekasi Barat', 'Jawa Barat', '08161342838', 'umar_maksum@yahoo.co.id', ''),
(422, 'Sumar, S.H.', '201808003177', '80020970', 'L', 'Boyolali', '1980-02-29', 'Islam', 'Flat E Lt. 1 No. 4 Tanah Merah, Kst. Amjiatak Kelapadua', '-', 'Cimanggis', 'Depol', 'Jawa Barat', '081354450241', 'sumar315@gmail.com', ''),
(423, 'Toni Irawan, S.H., M.H.', '201808003180', '77030343', 'L', 'Banyuwangi', '1977-03-08', 'Islam', 'Griya Bhay Permai Ee 27 Ds Urang Agung ', '-', '-', 'Sidoarjo', 'Jawa Timur', '081357747474', 'toniirawan36@gmail.com', ''),
(424, 'Reimond Aries Latuihamallo', '201808003176', '72030114', 'L', 'Ambon', '1972-03-27', 'Kristen', 'Jln. Rijali Rt/Rw 004/05 Karapan', '-', '-', 'Ambon', 'Maluku', '082238647777', 'reimondaries27@gmail.com', ''),
(425, 'Ricky R. Sibarani, S.H.', '201808003191', '82051613', 'L', 'Medan', '1982-05-31', 'Kristen', 'Aspol SPN ', '-', '-', 'Balikpapan', 'Kalimantan Timur', '081258980005', 'rickysibarani8205@gmail.com ', ''),
(426, 'Mujiono, S.H.', '201808003193', '79050990', 'L', 'Demak', '1979-05-11', 'Islam', 'Asrama Sat Brimob Polda Kalbar, Teratai 6/84, Jl. Adi Sucipto Sei Raya', '-', '-', 'Kuburaya', 'Kalimantan Barat', '08118452008', 'muji.g2n_reg36@yahoo.co.id', ''),
(427, 'Fared Yusuf, S.H.', '201808003197', '74030324', 'L', 'Surabaya', '1974-03-17', 'Islam', 'Perum Gunungsari Indah Blok Z No 22 Kel Kedurus, Kec Karangpilang, Surabaya, Jawa Timur', 'Kedurus', 'Karangpilang', 'Surabaya', 'Jawa Timur', '081234668836', 'faredyusuf9@gmail.com', ''),
(428, 'Muhammad Rochmad, S.H.', '201808003189', '75020317', 'L', 'Semarang', '1975-02-21', 'Islam', 'Komplek Ks Tubun Rt 02 Rw 09 ', 'Cibuluh', 'Bogor Utara', 'Kota Bogor', 'Jawa Barat', '082112370707', 'muhammadrochmad210275@gmail.com', ''),
(429, 'Mahendra Yudhi Lubis, S.H.', '201808003188', '81090260', 'L', 'Dumai', '1981-09-27', 'Islam', 'Jl. Selamat Perumahan Oasis Blok A No. 06 Rt/Rw 001/014', 'Tangkerang Timur', 'Tenayan Raya', 'Kota Pekanbaru', 'Riau', '08126832621', 'mahendra.lubis27@gmail.com', ''),
(430, 'Mustofa Kholil, S.Ag.', '201808003182', '72080771', 'L', 'Lubuk Linggau', '1972-08-10', 'Islam', 'Pal Merah Jl. Soekarno Hatta No. 1 Rt.4', '-', '-', 'Jambi Selatan', 'Jambi', '08126909660', 'mustofa@gmail.com', ''),
(431, 'Agus Isnaini, S.Si., M.Si.', '201808003196', '82101362', 'L', 'Palembang', '1982-10-07', 'Islam', 'Asrama Gegana Kelapadua', '-', '-', 'Depok', 'Jawa Barat', '081219282885', 'agusisnaini0710@gmail.com', ''),
(432, 'Wuryanti, S.H.', '201808003198', '78060210', 'P', 'Boyolali', '1978-06-18', 'Islam', 'Perum Taman Aster Blok F.1 No. 30 Rt 10/07', 'Talaga Asih', 'Cikarang Barat', 'Bekasi', 'Jawa Barat', '081295521421', 'kejorakecil21@gmail.com', ''),
(433, 'Edy, S.H., M.H.', '201808003194', '75010678', 'L', 'Singaraja  ', '1975-06-02', 'Islam', 'Jln Oelon 3 Sikumana', '-', '-', 'Kota Kupang', 'Nusa Tenggara Timur', '081246251222', 'edy75010678@gmail.com', ''),
(434, 'Army Sevtiansyah, S.Kom., M.H.', '201808003175', '83091412', 'P', 'Palembang', '1983-09-01', 'Islam', 'Jl. Ks Tubun Asrama Brimob Petamburan Blok A-14 Rt 01 Rw 06', 'Slipi', 'Palmerah', 'Jakarta Selatan', 'DKI Jakarta', '081273067229', 'army01.aa@gmail.com', ''),
(435, 'Mahmud, S.H.', '201808003183', '73060306', 'L', 'Sendangmulyo', '1973-06-17', 'Islam', 'Kel. Kalampangan Rt 02 Rw I', '-', 'Sebangau', 'Palangkaraya', 'Kalimantan Tengah', '081256137228', 'mahmud170673@gmail.com', ''),
(436, 'Kurnianto Seco Hariyono, S.E., M.M.', '201808003190', '79010055', 'L', 'Samarinda', '1979-01-22', 'Islam', 'Jl. Plamongan Indah A. 473, Perum Plamongan Hijau', '-', '-', 'Semarang', 'Jawa Tengah', '081225000709', 'kurnianto.seco@yahoo.com', ''),
(437, 'Ririh Dewi Widowati, S.E., M.M.', '201808003187', '81070185', 'P', 'Semarang', '1981-07-13', 'Islam', 'Jl. Gemah Sari V No. 190 Kedungmundu, Semarang, Jawa Tengah', '-', 'Kedungmundu', 'Semarang', 'Jawa Tengah', '085943312000', 'ririhdewi@yahoo.co.id', ''),
(438, 'Muhammad Sabur, S.Ag.', '201808003200', '74050685', 'L', 'Palembang', '1974-05-29', 'Islam', 'Jalan Soak Simpur Sukabangun 2 Lr. Alamiah Rt. 63 Rw. 09 No. C. 46, ', 'Sukajaya', 'Sukarame', 'Palembang', 'Sumatera Selatan', '08127329197', 'm.sabur35@gmail.com', ''),
(439, 'Dr. Sukardi, S.H., M.Hum.', '201808003184', '73040313', 'L', 'Barru', '1973-04-10', 'Islam', 'Jl. Tirtayasa IV No. 31', '', 'Kebayoran Baru', 'Jakarta Selatan', 'Jakarta', '085881908007', 'sukardi.s3unhas@gmail.com', ''),
(440, 'Raden Haris Purnama', '201808003195', '80101277', 'L', 'Cimahi', '1980-10-09', 'Islam', 'Ksatrian Polisi Udara Blok A2 No. 5m', 'Pondok Cabe Ilir', 'Pamulang', 'Tangerang', 'Banten', '081296782005', 'erde.haris@gmail.com', ''),
(441, 'Lengkap Suherman Siregar, S.H.', '201808003192', '78120064', 'L', 'Air Batu', '1978-12-17', 'Kristen', 'Jln. Kain Suji No. 45 ', 'Bane', 'Siantar Utara', 'Pematangsiantar', 'Sumatera Utara', '08116219517', 'ranarani009@gmail.com ', ''),
(442, 'Suryanto, S.T., S.H., M.H.', '201808003185', '75030756', 'L', 'Boyolali', '1975-03-09', 'Islam', 'Perumahan Klodran Indah No 37', 'Klodran', 'Colomadu', 'Karanganyar', 'Jawa Tengah', '081329412262', '-', ''),
(443, 'Bhakti Yasa Saputri, S.H., M.H.', '201808003199', '78060217', 'L', 'Madiun', '1978-06-20', 'Islam', 'Puri Krakatau Hijau Blok E 3 No 36', 'Kotasari', 'Grogol', 'Cilegon', 'Banten', '081288678374', 'saputribhaktiyasa@gmail.com', ''),
(444, 'aaaaaa', '43452345234', '45342345345', 'L', '', '0000-00-00', 'Islam', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni_biodata_sespimma`
--

CREATE TABLE `alumni_biodata_sespimma` (
  `idBiodata` int(111) NOT NULL,
  `no_idnt` varchar(20) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `pokja` varchar(1) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `asal_pengiriman` varchar(100) NOT NULL,
  `suku_bangsa` varchar(50) NOT NULL,
  `status_menikah` varchar(25) NOT NULL,
  `suami_istri` varchar(100) NOT NULL,
  `nama_anak` text NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `kesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni_biodata_sespimma`
--

INSERT INTO `alumni_biodata_sespimma` (`idBiodata`, `no_idnt`, `nama_panggilan`, `pokja`, `pangkat`, `jabatan`, `asal_pengiriman`, `suku_bangsa`, `status_menikah`, `suami_istri`, `nama_anak`, `hobi`, `pesan`, `kesan`) VALUES
(1, '201808003116', 'Budi', 'A', 'AKP', 'Kanit 3 Subdit Politik Ditintelkam', 'Polda Kalimantan Tengah', 'Jawa', 'Menikah', 'Rafina WS., S.H.', 'Nadif Adiwitya Nugroho, Defan Arkana Nugroho', 'Jalan Jalan\r\n', 'Senyum Yang Indah Untuk Keluarga', '60Green..Ruuarr Biasa'),
(12, '201808003115', 'Margus123', 'A', 'AKP', 'Kasubbag Psipers Bagpsi Biro SDM ', 'Polda Kalimantan Barat', 'Jawa', 'Menikah', 'Dona Novia Ujiaryani, M.Psi., Psikolog.', 'Aditya Rizky, Anindya Nayla Putri, Andina Aulia Putri\r\n', 'Sepakbola', 'Never Get So Busy Making A Living That You Forget To Make A Life\r\n', 'Alhamdulillah Disini Saya Diberikan Kesempatan Belajar Kehidupan Dari Teman-Teman Yang Luar Biasa\r\n'),
(15, '12345', 'Iqbal', '-', '-', '-', '-', '-', 'Menikah', '-', '', '-', '-', '-'),
(43, '201808003111', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(338, '201808003181', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(339, '201808003109', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(340, '201808003117', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(341, '201808003108', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(342, '201808003106', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(343, '201808003114', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(344, '201808003119', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(345, '201808003112', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(346, '201808003107', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(347, '201808003113', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(348, '201808003101', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(349, '201808003110', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(350, '201808003103', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(351, '201808003104', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(352, '201808003102', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(353, '201808003120', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(354, '201808003105', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(355, '201808003118', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(356, '201808003171', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(357, '201808003134', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(358, '201808003133', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(359, '201808003140', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(360, '201808003127', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(361, '201808003129', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(362, '201808003136', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(363, '201808003122', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(364, '201808003135', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(365, '201808003137', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(366, '201808003123', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(367, '201808003128', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(368, '201808003125', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(369, '200808003139', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(370, '201808003131', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(371, '201808003130', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(372, '201808003121', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(373, '201808003124', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(374, '201808003132', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(375, '201808003126', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(376, '201808003153', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(377, '201808003148', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(378, '201808003144', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(379, '201808003147', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(380, '201808003160', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(381, '201808003142', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(382, '201808003155', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(383, '201808003151', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(384, '201808003154', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(385, '201808003159', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(386, '201808003156', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(387, '201808003150', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(388, '201808003158', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(389, '201808003146', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(390, '201808003149', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(391, '201808003141', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(392, '201808003157', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(393, '201808003152', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(394, '201808003143', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(395, '201808003145', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(396, '201808003161', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(397, '200808003172', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(398, '201808003174', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(399, '201808003178', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(400, '201808003170', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(401, '201808003138', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(402, '201808003166', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(403, '201808003169', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(404, '201808003164', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(405, '201808003179', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(406, '201808003165', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(407, '201808003162', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(408, '201808003168', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(409, '201808003163', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(410, '201808003186', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(411, '201808003167', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(412, '201808003173', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(413, '201808003177', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(414, '201808003180', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(415, '201808003176', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(416, '201808003191', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(417, '201808003193', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(418, '201808003197', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(419, '201808003189', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(420, '201808003188', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(421, '201808003182', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(422, '201808003196', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(423, '201808003198', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(424, '201808003194', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(425, '201808003175', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(426, '201808003183', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(427, '201808003190', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(428, '201808003187', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(429, '201808003200', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(430, '201808003184', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(431, '201808003195', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(432, '201808003192', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(433, '201808003185', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(434, '201808003199', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-'),
(435, '43452345234', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `idUsers` int(111) NOT NULL,
  `no_idnt` varchar(20) NOT NULL,
  `nama_tampilan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `level` varchar(3) NOT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL,
  `online` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`idUsers`, `no_idnt`, `nama_tampilan`, `username`, `password`, `pass`, `foto`, `level`, `status`, `online`) VALUES
(1, '201808003116', 'Budi', 'budi', '00dfc53ee86af02e742515cdcf075ed3', 'budi', '', '1', 'Aktif', 'on'),
(5, '201808003115', 'Margus', '201808003115', '5bc44e9de58d4cc330f9a029ec8fc25d', '201808003115', '', '2', 'Aktif', 'off'),
(7, '12345', 'Iqbal', '12345', '827ccb0eea8a706c4c34a16891f84e7b', '12345', '', '2', 'Aktif', 'off'),
(22, '201808003111', 'Agung Nugroho, S.H.', '201808003111', '3ca02fdc0a672470c955cdf1c10ab89e', '201808003111', '', '2', 'Aktif', 'off'),
(317, '201808003181', 'dr. Benyamin Franklyn Lumban Sitio, M. Sc., Sp. TH', '201808003181', 'beb0841ea79d3e0db53dcf35892049a7', '201808003181', '', '2', 'Aktif', 'off'),
(318, '201808003109', 'Saparyanto, S.H.', '201808003109', '6908b2ef354c469adea7cfa97cd663b6', '201808003109', '', '2', 'Aktif', 'off'),
(319, '201808003117', 'Sahat Martua Pasaribu, S.H.', '201808003117', '2767bd0937d6238d5a5021e1bbc373b4', '201808003117', '', '2', 'Aktif', 'off'),
(320, '201808003108', 'Bartholomeus Dambe, S.H.', '201808003108', 'f531ad4608e962fa99e4537fa61269d8', '201808003108', '', '2', 'Aktif', 'off'),
(321, '201808003106', 'Abidllah Rifai, S.H., M.H.', '201808003106', 'eab4f5d9145aceaa8bba9321f2a64c50', '201808003106', '', '2', 'Aktif', 'off'),
(322, '201808003114', 'I Made Indra Wijaya, S.H.', '201808003114', '16e8d77dc6233ead4d32347c4ad58e5f', '201808003114', '', '2', 'Aktif', 'off'),
(323, '201808003119', 'Asri Diyni, S.E.', '201808003119', 'e601b07fd7161fea456f72e78a4c9c91', '201808003119', '', '2', 'Aktif', 'off'),
(324, '201808003112', 'Muhammad Basri', '201808003112', '5f18fe0bd07f7fd60dd0fef6ce8ee557', '201808003112', '', '2', 'Aktif', 'off'),
(325, '201808003107', 'Kholid Mawardi, S.H.', '201808003107', 'a69a7961087720719ff50cf415a87d34', '201808003107', '', '2', 'Aktif', 'off'),
(326, '201808003113', 'Agus Setyo Pambudi, S.H.', '201808003113', '0956c4ccf9deef01a4b437b440363683', '201808003113', '', '2', 'Aktif', 'off'),
(327, '201808003101', 'dr. Hendy, SpOT.', '201808003101', '966619212ee4442894d59c0799f46f17', '201808003101', '', '2', 'Aktif', 'off'),
(328, '201808003110', 'Johanis Horhoruw, AMK., S.H.', '201808003110', 'f96a395c206d649f0d9bf150fe867ca9', '201808003110', '', '2', 'Aktif', 'off'),
(329, '201808003103', 'Laksana Wijayanti, S.H.', '201808003103', '0d9719d64bbc19b68331f62d6cd5bd02', '201808003103', '', '2', 'Aktif', 'off'),
(330, '201808003104', 'Bernando T.R. Damanik, S.H.', '201808003104', '88dd3281e5b995c1d9546eb6272fa8c0', '201808003104', '', '2', 'Aktif', 'off'),
(331, '201808003102', 'Endah Pusparini, S.H.', '201808003102', '83e3909e852e92578cc831a57e75b005', '201808003102', '', '2', 'Aktif', 'off'),
(332, '201808003120', 'Supriyono, S.Adm.', '201808003120', '06d111166214e9c0e087afc3ea6ab7c0', '201808003120', '', '2', 'Aktif', 'off'),
(333, '201808003105', 'Ferry Siswara', '201808003105', '64e22db7042865703ba55c5989da9a57', '201808003105', '', '2', 'Aktif', 'off'),
(334, '201808003118', 'Anastasia Mira', '201808003118', 'd35d5955940f61b2ad3121e086d0aa6b', '201808003118', '', '2', 'Aktif', 'off'),
(335, '201808003171', 'Muhammad Asep Muharam, M.Psi., Psikolog.', '201808003171', 'af080ca785a6cbb7ab0a995e2f6ac23e', '201808003171', '', '2', 'Aktif', 'off'),
(336, '201808003134', 'R. Ahmad Hari Junianto, S.Kom.', '201808003134', '2780ef65574bdfd3298587751d741101', '201808003134', '', '2', 'Aktif', 'off'),
(337, '201808003133', 'Alief Rakhman Banyu Aji, M.Psi., Psikolog.', '201808003133', 'bd38a4c642e81000dcb7b7f04038706e', '201808003133', '', '2', 'Aktif', 'off'),
(338, '201808003140', 'Prasetyo Widodo, S.Pd.', '201808003140', '82f9dad4491f0ee442eaa0547a958741', '201808003140', '', '2', 'Aktif', 'off'),
(339, '201808003127', 'Djoko Suprianto, S.H.', '201808003127', '4cfa77ee7ebdf9007482b2d920bb31af', '201808003127', '', '2', 'Aktif', 'off'),
(340, '201808003129', 'Toni Rahardian', '201808003129', '48d77e37224228e65d70ef488cd26c73', '201808003129', '', '2', 'Aktif', 'off'),
(341, '201808003136', 'Idham, S.HI.', '201808003136', '761366533b771ed2aaaedeaceefffde1', '201808003136', '', '2', 'Aktif', 'off'),
(342, '201808003122', 'I Made Ariawan P., S.H.', '201808003122', '51c830fcd29924af41cbafaf19c3c53d', '201808003122', '', '2', 'Aktif', 'off'),
(343, '201808003135', 'Sutoto, Amk., SH.', '201808003135', '186dc5ebc56aa3563cb9ac258d2f6b5d', '201808003135', '', '2', 'Aktif', 'off'),
(344, '201808003137', 'Eny Tri Retnowati, S.H., M.M.', '201808003137', 'cc7b02ac38ca5585d6b7780e4aab5069', '201808003137', '', '2', 'Aktif', 'off'),
(345, '201808003123', 'Mardiyanto, S.AP., M.H.', '201808003123', 'd8b176cf3f8d40d978df837276841183', '201808003123', '', '2', 'Aktif', 'off'),
(346, '201808003128', 'Musa Bakhtiar Ardhani, S.Sos., M.M.', '201808003128', 'cb5d1d81d382b61841b7728a6b2e3e83', '201808003128', '', '2', 'Aktif', 'off'),
(347, '201808003125', 'Ika Kartika Suhardi, S.IP', '201808003125', '1adc02d7e0a1d61f60e1fc359c1123f7', '201808003125', '', '2', 'Aktif', 'off'),
(348, '200808003139', 'Hendry, S.E.', '200808003139', '3ea152d51c581fa837849a148ff34266', '200808003139', '', '2', 'Aktif', 'off'),
(349, '201808003131', 'Ramondias', '201808003131', '64df384cd65a41a19337288be4c2cf2b', '201808003131', '', '2', 'Aktif', 'off'),
(350, '201808003130', 'Aunur Rozaq, S.Sos.', '201808003130', 'a51aabbb72548eecdc54d3ee492bf138', '201808003130', '', '2', 'Aktif', 'off'),
(351, '201808003121', 'Eko Santoso', '201808003121', 'd6978d8f29f0a2f6fc06fbabf60d38e2', '201808003121', '', '2', 'Aktif', 'off'),
(352, '201808003124', 'Kristinatara Wahyuningrum, S.H., M.H.', '201808003124', 'b71cb15ca758dd25f90491f8d5ba1933', '201808003124', '', '2', 'Aktif', 'off'),
(353, '201808003132', 'Suwardi, S.Pd., S.H.', '201808003132', 'a7089701dc8e1c67738dcd7b6daf7b22', '201808003132', '', '2', 'Aktif', 'off'),
(354, '201808003126', 'Rayes Hendra, S.H., M.H.', '201808003126', '2fe2a7cac96d33cb1e9818892cd1fed1', '201808003126', '', '2', 'Aktif', 'off'),
(355, '201808003153', 'Supendi, S.H., M.H.', '201808003153', '2f2df267bdf4826fcbdd4b04c3a57685', '201808003153', '', '2', 'Aktif', 'off'),
(356, '201808003148', 'Sutrisno, S.E.', '201808003148', '31fd17eb92e46d455efaf3bb479c4812', '201808003148', '', '2', 'Aktif', 'off'),
(357, '201808003144', 'dr. Agustini, M.Kes., Sp.PK.', '201808003144', '6a968f4caecf78291bd5f117d59c4316', '201808003144', '', '2', 'Aktif', 'off'),
(358, '201808003147', 'Syabain Rahmad Kusriyanto', '201808003147', 'ad2d1f46d2df42e03daa20d1b358f3ed', '201808003147', '', '2', 'Aktif', 'off'),
(359, '201808003160', 'Dedi Hermawan, S.H.', '201808003160', '73d639a80ac90f2068e08e7a7d26cfac', '201808003160', '', '2', 'Aktif', 'off'),
(360, '201808003142', 'Rafenil Yaumil Rahman, S.H.', '201808003142', 'caa46e55034bbd96326f1a8ee471ce74', '201808003142', '', '2', 'Aktif', 'off'),
(361, '201808003155', 'Alfahry Marulafau, S.Kom.', '201808003155', 'd6671ead6388531bbebb68347fe1481b', '201808003155', '', '2', 'Aktif', 'off'),
(362, '201808003151', 'Nasir Eming, S.H. ', '201808003151', 'a0621900c5c107e1637ec0fe8e934e25', '201808003151', '', '2', 'Aktif', 'off'),
(363, '201808003154', 'Bryan Rio Wicaksono', '201808003154', '244fa7b8ea79f2b07d3013588c84edb2', '201808003154', '', '2', 'Aktif', 'off'),
(364, '201808003159', 'Abdul Jalil, S.H.', '201808003159', '4f396fa97292f49d17bf23a5b080088f', '201808003159', '', '2', 'Aktif', 'off'),
(365, '201808003156', 'Teguh Santoso', '201808003156', 'b8f078c583d0df2134aea0b7b80a5073', '201808003156', '', '2', 'Aktif', 'off'),
(366, '201808003150', 'Aditya Reza Syahputra', '201808003150', 'c39c0de6093677f0a0b7ca147d946e9a', '201808003150', '', '2', 'Aktif', 'off'),
(367, '201808003158', 'Dherrie Alim, S.T.', '201808003158', '8bff47f05d7c21562a8f12726f984b66', '201808003158', '', '2', 'Aktif', 'off'),
(368, '201808003146', 'Sulis Yudi Rahmawan, S.H., M.H.', '201808003146', '17b3356cba345fdb97c6c258259bc83d', '201808003146', '', '2', 'Aktif', 'off'),
(369, '201808003149', 'Andri Hutagalung, S. AB., M.AP.', '201808003149', 'f33cba416def8d56dc09416cdd859854', '201808003149', '', '2', 'Aktif', 'off'),
(370, '201808003141', 'Mochamad Isnaini Nurmandoko, S.E. ', '201808003141', 'a6769e6df3a1b0fdeb303d9b617c1d49', '201808003141', '', '2', 'Aktif', 'off'),
(371, '201808003157', 'Rini Widiastuti, S.H.', '201808003157', '272412af6f309ae713005b7ad904d770', '201808003157', '', '2', 'Aktif', 'off'),
(372, '201808003152', 'Agustinus David Putraningtyas, S. Sos., M.H.', '201808003152', 'a05da04a4cfadb416abc55fd1d4b7331', '201808003152', '', '2', 'Aktif', 'off'),
(373, '201808003143', 'Cahyo Ediwibowo', '201808003143', '235404c6c42957526ddcb99ef68fad10', '201808003143', '', '2', 'Aktif', 'off'),
(374, '201808003145', 'Ana Setiyarti, S.H., M.H.', '201808003145', '60f591fe105ed4fda6c07ff232408333', '201808003145', '', '2', 'Aktif', 'off'),
(375, '201808003161', 'dr. Anton Sudarto', '201808003161', '73d53637737b285edbf5d8d4d8c6afe4', '201808003161', '', '2', 'Aktif', 'off'),
(376, '200808003172', 'Dani Prasetya, S.H., M.H.', '200808003172', '88a11e3d043cb8d2f1cc630779a27cc6', '200808003172', '', '2', 'Aktif', 'off'),
(377, '201808003174', 'Moh. Zainal Arifin, S.Sos.', '201808003174', '8e31b3419d14f7b43e7d44eb23f5b3cd', '201808003174', '', '2', 'Aktif', 'off'),
(378, '201808003178', 'Dedi Hartoyo, S.Pi.', '201808003178', '9aadd3b4d91c545d8c4d89427309f5df', '201808003178', '', '2', 'Aktif', 'off'),
(379, '201808003170', 'Joko Hendro S., S.Pd., S.E, M.Si', '201808003170', '644b518e4544839871dedfd9df271704', '201808003170', '', '2', 'Aktif', 'off'),
(380, '201808003138', 'Anita Taherong', '201808003138', '5550ffeb87233fd24873713542bbd11f', '201808003138', '', '2', 'Aktif', 'off'),
(381, '201808003166', 'Asep Danu Hudaya', '201808003166', 'd47743c96506306b4654eac552fde62b', '201808003166', '', '2', 'Aktif', 'off'),
(382, '201808003169', 'Elang Prasetyo, S.I.Kom.', '201808003169', 'b96a4501977b60f71146491f8eaa6156', '201808003169', '', '2', 'Aktif', 'off'),
(383, '201808003164', 'Rita Saputra', '201808003164', '284c6cddc7817175b987b533d13fcebd', '201808003164', '', '2', 'Aktif', 'off'),
(384, '201808003179', 'Untung Komarudin, S.ST.', '201808003179', '9f289da1eec1554d184746aeb6849892', '201808003179', '', '2', 'Aktif', 'off'),
(385, '201808003165', 'Yuni Marsianto, S.H.', '201808003165', 'cbb2b5829bb4899a08d4006a209b39bc', '201808003165', '', '2', 'Aktif', 'off'),
(386, '201808003162', 'Roberto Asfrianza, Amd.', '201808003162', '261b565416cccc2b5b7eee9a863e10b8', '201808003162', '', '2', 'Aktif', 'off'),
(387, '201808003168', 'Aroni Canra, S.H.', '201808003168', 'bcceeecf48566e28691488000c01a727', '201808003168', '', '2', 'Aktif', 'off'),
(388, '201808003163', 'Edi Mulyono, S.Sos.', '201808003163', '7133d727810a41d19c42eaf1a32b4ad2', '201808003163', '', '2', 'Aktif', 'off'),
(389, '201808003186', 'Nurhayati, S.IP.', '201808003186', 'f1a70e98f3d1c2ffceedbc7ec9cb3a99', '201808003186', '', '2', 'Aktif', 'off'),
(390, '201808003167', 'F.A.P. Silalahi, S.S.T., M.M.', '201808003167', '74935eba911a1ffb18a196b7f65dfd24', '201808003167', '', '2', 'Aktif', 'off'),
(391, '201808003173', 'Umar Maksum, S.H.', '201808003173', 'd5f1e50babe979bac9cb96621de1bb5f', '201808003173', '', '2', 'Aktif', 'off'),
(392, '201808003177', 'Sumar, S.H.', '201808003177', 'bc6fb75dad73b8794a7d8023ced79762', '201808003177', '', '2', 'Aktif', 'off'),
(393, '201808003180', 'Toni Irawan, S.H., M.H.', '201808003180', '8fcf04b1bf4f5f4931fdd1255b1a1639', '201808003180', '', '2', 'Aktif', 'off'),
(394, '201808003176', 'Reimond Aries Latuihamallo', '201808003176', '046bbf67161b5442ce57a1644e44f7c3', '201808003176', '', '2', 'Aktif', 'off'),
(395, '201808003191', 'Ricky R. Sibarani, S.H.', '201808003191', '230ed19e98c049856d6c6b772b9d70c5', '201808003191', '', '2', 'Aktif', 'off'),
(396, '201808003193', 'Mujiono, S.H.', '201808003193', 'fc3e469b4aa83a06f0b8b88506a88a87', '201808003193', '', '2', 'Aktif', 'off'),
(397, '201808003197', 'Fared Yusuf, S.H.', '201808003197', '5b6d05209ab08390e70d9aae8e4c3269', '201808003197', '', '2', 'Aktif', 'off'),
(398, '201808003189', 'Muhammad Rochmad, S.H.', '201808003189', '705c6028314ae04272d821566d84ab33', '201808003189', '', '2', 'Aktif', 'off'),
(399, '201808003188', 'Mahendra Yudhi Lubis, S.H.', '201808003188', 'e8d01e734addba8c6612ec22c1c8ce5e', '201808003188', '', '2', 'Aktif', 'off'),
(400, '201808003182', 'Mustofa Kholil, S.Ag.', '201808003182', '8e4787c8ec05f76a377e677ad4d9f4a1', '201808003182', '', '2', 'Aktif', 'off'),
(401, '201808003196', 'Agus Isnaini, S.Si., M.Si.', '201808003196', '5da6fe0a33f8f9304aa7faa95b6f106a', '201808003196', '', '2', 'Aktif', 'off'),
(402, '201808003198', 'Wuryanti, S.H.', '201808003198', '5d5f136531a95214532562e5c70fbfc8', '201808003198', '', '2', 'Aktif', 'off'),
(403, '201808003194', 'Edy, S.H., M.H.', '201808003194', '24a2a6d65a20aa4966a6376dd44e9f36', '201808003194', '', '2', 'Aktif', 'off'),
(404, '201808003175', 'Army Sevtiansyah, S.Kom., M.H.', '201808003175', 'e6eb52e8f44b9ef528aac81e3e753e8a', '201808003175', '', '2', 'Aktif', 'off'),
(405, '201808003183', 'Mahmud, S.H.', '201808003183', '5daa92cdd72bde297c61c48d9b80c35d', '201808003183', '', '2', 'Aktif', 'off'),
(406, '201808003190', 'Kurnianto Seco Hariyono, S.E., M.M.', '201808003190', '001d14fbd0aefde9bb24653c61275cba', '201808003190', '', '2', 'Aktif', 'off'),
(407, '201808003187', 'Ririh Dewi Widowati, S.E., M.M.', '201808003187', '2ccf0c5f055cdf01e49b429e4ad7586a', '201808003187', '', '2', 'Aktif', 'off'),
(408, '201808003200', 'Muhammad Sabur, S.Ag.', '201808003200', '06480e9ed2690cd9a8c42df248b278bf', '201808003200', '', '2', 'Aktif', 'off'),
(409, '201808003184', 'Dr. Sukardi, S.H., M.Hum.', '201808003184', '2d750088dda0553b7df9b26bf3b44afa', '201808003184', '', '2', 'Aktif', 'off'),
(410, '201808003195', 'Raden Haris Purnama', '201808003195', 'ea1bce2dd92db5d0ecad611492e49d63', '201808003195', '', '2', 'Aktif', 'off'),
(411, '201808003192', 'Lengkap Suherman Siregar, S.H.', '201808003192', '694bee89129fd1e5a7a9fc5afede2ea4', '201808003192', '', '2', 'Aktif', 'off'),
(412, '201808003185', 'Suryanto, S.T., S.H., M.H.', '201808003185', 'e18bb2edbfc33cd7e4968ad4196371c1', '201808003185', '', '2', 'Aktif', 'off'),
(413, '201808003199', 'Bhakti Yasa Saputri, S.H., M.H.', '201808003199', '86794c8baaa052d7df7c6c7eb4369b31', '201808003199', '', '2', 'Aktif', 'off'),
(414, '43452345234', 'aaaaaa', '43452345234', 'd65f5c5cc305fedde1ccb056879c963d', '43452345234', '', '2', 'Aktif', 'off');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`idAlumni`),
  ADD KEY `no_idnt` (`no_idnt`);

--
-- Indexes for table `alumni_biodata_sespimma`
--
ALTER TABLE `alumni_biodata_sespimma`
  ADD PRIMARY KEY (`idBiodata`),
  ADD KEY `no_idnt` (`no_idnt`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`),
  ADD KEY `no_idnt` (`no_idnt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `idAlumni` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445;

--
-- AUTO_INCREMENT for table `alumni_biodata_sespimma`
--
ALTER TABLE `alumni_biodata_sespimma`
  MODIFY `idBiodata` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=436;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=415;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alumni_biodata_sespimma`
--
ALTER TABLE `alumni_biodata_sespimma`
  ADD CONSTRAINT `alumni_biodata_sespimma_ibfk_1` FOREIGN KEY (`no_idnt`) REFERENCES `alumni` (`no_idnt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`no_idnt`) REFERENCES `alumni` (`no_idnt`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
