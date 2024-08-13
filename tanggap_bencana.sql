-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2024 at 05:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanggap_bencana`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('adminkedai@gmail.com|127.0.0.1', 'i:1;', 1718162566),
('adminkedai@gmail.com|127.0.0.1:timer', 'i:1718162566;', 1718162566);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('MUVShyJ2IW3n8XSsqjmrgeNeaVPkq66SGMjFaCx5', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiaENzT1JmU3NHS2hUdUlBTnRFMzJHTTJJdjdFYWtUNEg4VDlpOTA2dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MjIwNDIwNTc7fXM6NToiYWxlcnQiO2E6MDp7fX0=', 1722052318),
('slOG39NlxAoe0WflDe8YawrN4gWdrp2JstT4By4b', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTW9tYklQbXBQYWZ0SUF5R291QkZCUjJmdUZ3bGhvaWZWRHR1bjU3NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rb250YWsiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MjIzMjY2NzM7fX0=', 1722328991);

-- --------------------------------------------------------

--
-- Table structure for table `tb_donasi`
--

CREATE TABLE `tb_donasi` (
  `id_donasi` varchar(11) NOT NULL,
  `id_informasi_bencana` int(11) NOT NULL,
  `id_donatur` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_donasi` decimal(10,0) NOT NULL,
  `status` enum('pending','success','failed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_donasi`
--

INSERT INTO `tb_donasi` (`id_donasi`, `id_informasi_bencana`, `id_donatur`, `tanggal`, `jumlah_donasi`, `status`) VALUES
('029a10', 1, 11, '2024-02-07', 750000, 'success'),
('10a0e5', 1, 17, '2024-04-10', 500000, 'success'),
('151cd4', 1, 10, '2024-01-10', 600000, 'success'),
('4b1123', 1, 14, '2024-05-01', 400000, 'success'),
('6cee4a', 1, 3, '2024-01-09', 300000, 'success'),
('6de2be', 3, 19, '2024-07-30', 50000, 'success'),
('758663', 2, 18, '2024-07-27', 100000, 'success'),
('7996f3', 3, 19, '2024-07-30', 5000, 'success'),
('8cf4a3', 3, 15, '2024-07-20', 5000, 'success'),
('a1044c', 3, 2, '2024-06-08', 10000, 'success'),
('d6c616', 4, 16, '2024-07-20', 300000, 'success'),
('dkw2ma', 4, 9, '2024-07-19', 500000, 'success'),
('ebc1e7', 1, 12, '2024-03-16', 450000, 'success'),
('f039e5', 1, 13, '2024-04-19', 495000, 'success'),
('f4ec39', 4, 6, '2024-06-29', 300000, 'success'),
('jwq3ha', 2, 8, '2024-06-13', 50000, 'success');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donatur`
--

CREATE TABLE `tb_donatur` (
  `id_donatur` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_donatur`
--

INSERT INTO `tb_donatur` (`id_donatur`, `nama`, `no_telepon`, `email`) VALUES
(1, 'Ahmad', '0892221113', 'ahmad03@gmail.com'),
(2, 'Miftah', '0822101000', 'miftah05@gmail.com'),
(3, 'Ujang', '0821345110', 'ujang09@gmail.com'),
(5, 'Yanto', '129318923', 'awdaw@gmail.com'),
(6, 'koawkdoakw', '1290839123', 'Wdmawd@gmail.com'),
(8, 'yanto', '729312', 'yanto@gmail.com'),
(9, 'hayato', '372913', 'hayato@gmail.com'),
(10, 'jujun', '34234', 'jujun@gmail.com'),
(11, 'yuyun', '397123', 'yunyun@gmail.com'),
(12, 'wawang', '37289', 'wangwang@gmail.com'),
(13, 'julianto', '93812', 'anto@gmail.com'),
(14, 'yaowimi', '89213', 'wimi@gmail.com'),
(15, 'yuanmu', '123232', 'yuanmu@gmail.com'),
(16, 'irfan', '08123456', 'irfan@gmail.com'),
(17, 'wahyudi', '091283012', 'wahyud@gmail.com'),
(18, 'ikhlas', '08123343', 'ikhlas@gmail.com'),
(19, 'arya', '123456', 'arya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasibencana`
--

CREATE TABLE `tb_informasibencana` (
  `id_bencana` int(11) NOT NULL,
  `tgl_bencana` date NOT NULL,
  `tingkat_keparahan` enum('Ringan','Sedang','Berat','Sangat Berat') NOT NULL,
  `keterangan` text DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `target_donasi` varchar(255) NOT NULL,
  `id_laporan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_informasibencana`
--

INSERT INTO `tb_informasibencana` (`id_bencana`, `tgl_bencana`, `tingkat_keparahan`, `keterangan`, `judul`, `target_donasi`, `id_laporan`) VALUES
(1, '2024-05-15', 'Sedang', 'Hujan deras menyebabkan banjir bandang di Jakarta, Pemerintah menetapkan status darurat bencana dan mendirikan posko pengungsian.', 'Banjir Bandang Terjang Jakarta, Ribuan Warga Mengungsi', '50000000', 1),
(2, '2024-05-12', 'Berat', 'Gempa bumi berkekuatan 7.2 SR mengguncang Jawa Barat, menyebabkan kerusakan parah dan kepanikan warga.', 'Gempa Bumi Berkekuatan 7.2 SR Guncang Lombok, Kerusakan Meluas', '200000', 2),
(3, '2024-05-01', 'Berat', 'Kebakaran hutan di Kalimantan meluas, membakar lebih dari 5.000 hektar lahan dan menyebabkan asap tebal menyebar.', 'Kebakaran Hutan di Kalimantan Meluas, Ribuan Hektar Lahan Terbakar', '100000', 3),
(4, '2024-05-03', 'Sangat Berat', 'Gunung Merapi meletus pagi ini, Warga diimbau mengenakan masker dan menghindari area dalam radius 5 km dari puncak.', 'Gunung Merapi Meletus, Warga Diimbau untuk Tetap Waspada', '24000000', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisbencana`
--

CREATE TABLE `tb_jenisbencana` (
  `id_jenis_bencana` int(11) NOT NULL,
  `nama_bencana` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_jenisbencana`
--

INSERT INTO `tb_jenisbencana` (`id_jenis_bencana`, `nama_bencana`) VALUES
(1, 'Gempa Bumi'),
(2, 'Banjir Besar'),
(3, 'Gunung Meletus'),
(4, 'Tsunami'),
(5, 'Kebakaran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(11) NOT NULL,
  `tgl_laporan` date NOT NULL,
  `isi_laporan` text NOT NULL,
  `lokasi_kejadian` varchar(20) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `id_relawan` int(11) NOT NULL,
  `id_jenis_bencana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_laporan`, `tgl_laporan`, `isi_laporan`, `lokasi_kejadian`, `foto`, `id_relawan`, `id_jenis_bencana`) VALUES
(1, '2024-05-15', '<p><strong>Jakarta, 23 Juni 2024</strong> - Hujan deras yang mengguyur Jakarta dan sekitarnya selama dua hari berturut-turut menyebabkan banjir bandang yang melanda beberapa wilayah di ibu kota. Banjir ini telah merendam ribuan rumah dan memaksa ribuan warga mengungsi ke tempat yang lebih aman.</p><p>Badan Penanggulangan Bencana Daerah (BPBD) DKI Jakarta melaporkan bahwa banjir kali ini merupakan yang terparah dalam lima tahun terakhir. Ketinggian air di beberapa titik mencapai 2 meter, membuat akses jalan utama terputus dan aktivitas warga terganggu.</p><p>Pemerintah Provinsi DKI Jakarta telah menetapkan status darurat bencana dan mengerahkan berbagai tim penyelamat, termasuk petugas SAR, TNI, dan Polri untuk membantu evakuasi warga yang terdampak. Posko-posko pengungsian telah didirikan di berbagai lokasi, seperti gedung sekolah dan balai warga, untuk menampung para pengungsi.</p><p>Gubernur DKI Jakarta, Anies Baswedan, menyatakan bahwa pihaknya telah berkoordinasi dengan pemerintah pusat untuk mendapatkan bantuan tambahan, termasuk pasokan makanan, air bersih, dan kebutuhan medis. \"Kami berkomitmen untuk memastikan keselamatan dan kenyamanan warga selama masa darurat ini,\" ujarnya dalam konferensi pers.</p><p>Banjir juga menyebabkan kerugian materiil yang signifikan. Banyak kendaraan terendam air dan sejumlah fasilitas umum mengalami kerusakan. Listrik di beberapa daerah dipadamkan untuk menghindari risiko korsleting. Selain itu, banyak warga yang mengalami gangguan kesehatan akibat kondisi lingkungan yang tidak higienis.</p><p>Pakar meteorologi dari Badan Meteorologi, Klimatologi, dan Geofisika (BMKG), Dr. Dwikorita Karnawati, menyebutkan bahwa curah hujan yang tinggi dipicu oleh fenomena La Nina yang meningkatkan intensitas hujan di wilayah Indonesia. BMKG memperingatkan bahwa cuaca ekstrem diperkirakan masih akan terjadi dalam beberapa hari ke depan.</p><p>Masyarakat dihimbau untuk selalu mengikuti informasi cuaca dari BMKG dan segera mengungsi jika berada di daerah rawan banjir. Pihak berwenang juga meminta agar warga tidak membuang sampah sembarangan, yang dapat menyumbat saluran air dan memperparah kondisi banjir.</p>', 'Jakarta', 'foto-.jpg', 1, 2),
(2, '2024-05-12', '<p><strong>Lombok, 23 Juni 2024</strong> - Gempa bumi berkekuatan 7.2 Skala Richter mengguncang Pulau Lombok pada pukul 14.30 WITA, mengakibatkan kerusakan parah di berbagai wilayah. Badan Meteorologi, Klimatologi, dan Geofisika (BMKG) melaporkan bahwa pusat gempa berada di kedalaman 10 km di bawah permukaan laut, sekitar 25 km dari pesisir Lombok Utara.</p><p>Guncangan kuat terasa hingga Bali dan Sumbawa, menyebabkan kepanikan di kalangan warga. Beberapa bangunan, termasuk rumah, sekolah, dan fasilitas umum, mengalami kerusakan berat. Listrik padam di beberapa daerah dan jaringan komunikasi terganggu.</p><p>Tim SAR dan TNI/Polri segera dikerahkan untuk melakukan evakuasi dan pertolongan pertama kepada korban. Rumah sakit dan pusat kesehatan lainnya beroperasi dalam kondisi darurat untuk menangani luka-luka akibat reruntuhan.</p><p>Kepala BNPB, Letjen TNI Doni Monardo, mengumumkan bahwa pihaknya sedang mendirikan posko darurat dan menyalurkan bantuan logistik kepada para korban gempa. \"Kami berkomitmen untuk memberikan bantuan semaksimal mungkin kepada masyarakat yang terdampak,\" ujarnya.</p><p>BMKG menyatakan tidak ada potensi tsunami akibat gempa ini, namun masyarakat diimbau untuk tetap waspada terhadap gempa susulan yang mungkin terjadi. Warga diminta untuk menghindari bangunan yang rusak dan selalu mengikuti arahan dari petugas.</p><p>Banyak warga yang memilih mengungsi ke tempat yang lebih aman, seperti lapangan terbuka dan posko pengungsian yang didirikan oleh pemerintah setempat. Kondisi ini menyebabkan peningkatan kebutuhan akan tenda, makanan, air bersih, dan obat-obatan.</p><p>Pemerintah pusat telah mengirimkan tim bantuan dan berkoordinasi dengan pihak berwenang di Lombok untuk memastikan pemulihan segera. Masyarakat diminta untuk tetap tenang dan saling membantu dalam menghadapi bencana ini.</p>', 'Jawa Barat', 'foto-66782884e22fe.jpg', 2, 1),
(3, '2024-05-10', '<p><strong>Kalimantan, 23 Juni 2024</strong> - Kebakaran hutan yang melanda wilayah Kalimantan terus meluas, membakar ribuan hektar lahan hutan dan perkebunan. Asap tebal yang dihasilkan dari kebakaran ini telah menyebar ke berbagai daerah, menyebabkan gangguan kesehatan dan aktivitas sehari-hari warga.</p>\r\n<p>Badan Nasional Penanggulangan Bencana (BNPB) melaporkan bahwa hingga saat ini, lebih dari 5.000 hektar lahan terbakar di beberapa titik di Kalimantan Tengah dan Kalimantan Selatan. Penyebab kebakaran diduga kuat akibat aktivitas pembukaan lahan yang dilakukan dengan cara pembakaran, meski ada juga faktor cuaca kering yang memperparah kondisi.</p>\r\n<p>Tim pemadam kebakaran, TNI, Polri, dan relawan dikerahkan untuk memadamkan api, namun upaya mereka terkendala oleh medan yang sulit dijangkau dan keterbatasan peralatan. Pemerintah setempat telah menetapkan status darurat bencana dan meminta bantuan dari pemerintah pusat serta organisasi internasional.</p>\r\n<p>Gubernur Kalimantan Tengah, Sugianto Sabran, menyatakan bahwa pihaknya terus berupaya untuk mengatasi kebakaran ini dengan mengerahkan seluruh sumber daya yang ada. \"Kami tidak hanya fokus pada pemadaman api, tetapi juga pada pencegahan agar kebakaran tidak meluas,\" ujarnya.<p>\r\n<p>Asap tebal dari kebakaran hutan ini telah menyebabkan kualitas udara menurun drastis, dengan Indeks Standar Pencemaran Udara (ISPU) mencapai level berbahaya di beberapa daerah. Sekolah-sekolah diliburkan, dan warga dihimbau untuk mengenakan masker serta mengurangi aktivitas di luar rumah.</p>\r\n<p>Badan Meteorologi, Klimatologi, dan Geofisika (BMKG) memperkirakan bahwa kondisi cuaca kering masih akan berlangsung dalam beberapa minggu ke depan, sehingga potensi kebakaran hutan masih tinggi. BMKG juga memberikan peringatan dini kepada masyarakat untuk waspada dan melaporkan segera jika melihat tanda-tanda kebakaran.\r\n<p>\r\nUpaya bantuan dan evakuasi terus dilakukan, dengan ribuan warga yang tinggal di sekitar area kebakaran dievakuasi ke tempat yang lebih aman. Bantuan logistik seperti makanan, air bersih, dan obat-obatan disalurkan ke posko-posko pengungsian.</p>', 'Kalimantan', 'foto-66799768b80e0.jpg', 3, 5),
(4, '2024-05-12', '<p><strong>Yogyakarta, 23 Juni 2024</strong> - Gunung Merapi, salah satu gunung berapi paling aktif di Indonesia, kembali meletus pada pagi hari ini pukul 07.45 WIB. Letusan kali ini mengeluarkan awan panas setinggi 5.000 meter di atas puncak gunung, disertai dengan hujan abu yang menyebar hingga radius 15 kilometer.</p>\r\n<p>Badan Nasional Penanggulangan Bencana (BNPB) melaporkan bahwa letusan ini menyebabkan beberapa desa di sekitar lereng Gunung Merapi terdampak hujan abu tebal. Warga diimbau untuk mengenakan masker dan kacamata pelindung untuk menghindari gangguan pernapasan dan iritasi mata akibat abu vulkanik.</p>\r\n<p>Pusat Vulkanologi dan Mitigasi Bencana Geologi (PVMBG) meningkatkan status Gunung Merapi menjadi Siaga Level 3, yang berarti aktivitas vulkanik dinilai cukup tinggi dengan potensi letusan yang lebih besar. Masyarakat diminta untuk tidak melakukan aktivitas dalam radius 5 kilometer dari puncak gunung dan untuk selalu mengikuti arahan dari petugas di lapangan.</p>\r\n<p>Evakuasi telah dilakukan terhadap ribuan warga yang tinggal di daerah berisiko tinggi. Mereka dipindahkan ke posko-posko pengungsian yang telah disiapkan oleh pemerintah daerah. Tim medis dan relawan juga telah dikerahkan untuk memberikan bantuan dan memastikan kebutuhan dasar para pengungsi terpenuhi.</p>\r\n<p>Kepala BNPB, Dr. Sutopo Purwo Nugroho, menyatakan bahwa pihaknya terus memantau perkembangan situasi dan siap memberikan bantuan tambahan jika diperlukan. \"Kami mengutamakan keselamatan warga dan terus berkoordinasi dengan pihak terkait untuk penanganan bencana ini,\" ujarnya.</p>\r\n<p>Masyarakat di seluruh Indonesia dihimbau untuk tetap tenang namun waspada, serta memperhatikan informasi resmi dari pemerintah terkait aktivitas Gunung Merapi. Pihak berwenang juga meminta agar tidak menyebarkan berita-berita hoaks yang dapat menimbulkan kepanikan.</p>', 'Jawa Tengah', 'foto-664d2f39b16dc.jpg', 3, 3),
(7, '2024-05-11', '<p><strong>Aceh, 23 Juni 2024</strong> - Tsunami setinggi 5 meter menghantam pesisir Aceh pada pukul 16.00 WIB setelah gempa bumi berkekuatan 8.0 Skala Richter mengguncang wilayah tersebut. Gelombang besar ini menyebabkan kerusakan parah di beberapa desa pesisir dan memaksa ribuan warga mengungsi ke tempat yang lebih aman.</p>\r\n<p>Badan Meteorologi, Klimatologi, dan Geofisika (BMKG) melaporkan bahwa pusat gempa berada di kedalaman 20 km di bawah laut, sekitar 50 km dari pesisir barat Aceh. Peringatan tsunami dikeluarkan segera setelah gempa terjadi, memberikan waktu beberapa menit bagi warga untuk evakuasi.</p>\r\n<p>Badan Nasional Penanggulangan Bencana (BNPB) melaporkan bahwa banyak rumah, fasilitas umum, dan infrastruktur rusak berat akibat terjangan tsunami. Beberapa jalan utama terputus, membuat evakuasi dan pengiriman bantuan menjadi tantangan.</p>\r\n<p>Tim penyelamat dari TNI, Polri, dan relawan segera dikerahkan untuk mengevakuasi korban dan memberikan pertolongan pertama. Posko pengungsian didirikan di berbagai lokasi, termasuk sekolah dan gedung pemerintah yang aman dari gelombang tsunami.</p>\r\n<p>Gubernur Aceh, Irwandi Yusuf, menyatakan bahwa pihaknya bekerja sama dengan pemerintah pusat dan berbagai organisasi kemanusiaan untuk memastikan bantuan cepat sampai kepada para korban. \"Kami fokus pada penyelamatan nyawa dan pemulihan kondisi secepat mungkin,\" ujarnya.</p>\r\n<p>Korban luka-luka segera dibawa ke rumah sakit terdekat, sementara kebutuhan dasar seperti makanan, air bersih, dan obat-obatan terus disalurkan ke posko pengungsian. Tim medis juga dikerahkan untuk menangani kondisi darurat kesehatan.</p>\r\n<p>BMKG mengingatkan warga untuk tetap waspada terhadap gempa susulan yang bisa memicu tsunami lanjutan. Masyarakat diimbau untuk tidak kembali ke rumah sebelum situasi dinyatakan aman oleh pihak berwenang.</p>\r\n<p>Masyarakat di seluruh Indonesia diminta untuk menunjukkan solidaritas dengan memberikan bantuan dan doa bagi warga Aceh yang terdampak bencana ini. Media sosial dan jaringan komunikasi digunakan untuk mengoordinasikan bantuan dan informasi terkini.</p>', 'Aceh', 'foto-6656593434cd1.jpg', 1, 4),
(9, '2024-07-25', '<p><strong>Sumatera Utara, 25 Juli 2024</strong> - Gunung Sinabung di Sumatera Utara kembali meletus dengan tingkat keparahan sedang pada pukul 09.30 WIB. Letusan ini mengeluarkan abu vulkanik setinggi 2.500 meter dan mengakibatkan hujan abu di beberapa desa sekitar gunung.</p><p>Badan Nasional Penanggulangan Bencana (BNPB) melaporkan bahwa letusan kali ini menyebabkan kerusakan pada lahan pertanian dan rumah warga di radius 3 kilometer dari puncak gunung. Meskipun tidak ada korban jiwa, beberapa orang mengalami gangguan pernapasan akibat paparan abu vulkanik.</p><p>Pusat Vulkanologi dan Mitigasi Bencana Geologi (PVMBG) mempertahankan status Siaga Level 2 untuk Gunung Sinabung dan mengimbau warga untuk tetap waspada. Masyarakat diminta untuk menggunakan masker saat beraktivitas di luar ruangan dan menghindari area berbahaya di sekitar gunung.</p><p>Evakuasi sementara dilakukan terhadap ratusan warga yang tinggal di zona rawan. Mereka dipindahkan ke posko pengungsian yang telah disiapkan oleh pemerintah daerah. Kondisi di posko-posko pengungsian cukup memadai, namun masih memerlukan dukungan tambahan terutama untuk kebutuhan sehari-hari.</p><p>Pemerintah dan berbagai organisasi kemanusiaan mengajak masyarakat untuk memberikan donasi guna membantu para pengungsi. Bantuan yang dibutuhkan antara lain makanan, air bersih, masker, dan obat-obatan. \"Kami berharap bantuan dari seluruh masyarakat Indonesia untuk meringankan beban saudara-saudara kita yang terdampak bencana ini,\" ujar Kepala BNPB, Letjen TNI Doni Monardo.</p><p>Bantuan donasi dapat disalurkan melalui rekening resmi yang telah dibuka oleh BNPB dan beberapa lembaga kemanusiaan lainnya. Informasi lebih lanjut mengenai cara berdonasi dapat diakses melalui situs resmi BNPB dan media sosial.</p><p>BMKG dan PVMBG terus memantau aktivitas Gunung Sinabung dan memberikan informasi terkini kepada masyarakat. Warga diimbau untuk tetap tenang dan mengikuti arahan dari petugas terkait, serta tidak menyebarkan informasi yang belum terverifikasi untuk menghindari kepanikan.</p>', 'Sumatra Utara', 'foto-66a459b55d014.jpg', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_relawan`
--

CREATE TABLE `tb_relawan` (
  `id_relawan` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_relawan`
--

INSERT INTO `tb_relawan` (`id_relawan`, `nama`, `jenis_kelamin`, `no_telepon`, `email`, `foto`) VALUES
(1, 'Diar', 'Perempuan', '0892221113', 'diar01@gmail.com', NULL),
(2, 'Irfan', 'Laki-laki', '0897212127', 'irfan02@gmail.com', NULL),
(3, 'Anggi', 'Laki-laki', '0822191902', 'anggi03@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$agFodumFHL49kOX.5l9HDe/dOeEgQX25lCk.J8CUeMZs33.GTTZhC', NULL, '2024-06-01 01:48:18', '2024-06-01 01:48:18'),
(2, 'Relawan1', 'relawan1@gmail.com', NULL, '$2y$12$phOxYMuP7/idzXFjqsd/yu9C61cvYVCu84cmarZnWGbQiRrpFRfAO', NULL, '2024-06-01 16:07:08', '2024-06-01 16:07:08'),
(3, 'Relawan2', 'relawan2@gmail.com', NULL, '$2y$12$bYJPhN0f.4tkvdJ63ueofuPqveoAIqTIbKRNOcf0VQOvGg3GGX.9O', NULL, '2024-06-01 16:10:56', '2024-06-01 16:10:56'),
(4, 'Relawan3', 'relawan3@gmail.com', NULL, '$2y$12$inzC6EnIgmkhsoEbrIFXyu9FoiRKad0YJSoRDqoKAlJM1qTFdZRwG', NULL, '2024-06-01 16:15:14', '2024-06-01 16:15:14'),
(5, 'Relawan4', 'relawan4@gmail.com', NULL, '$2y$12$GtoWijWjmIj8.854X6fY7.B255ufbTtcXTAtG0Z47defMICIz4FfW', NULL, '2024-06-01 16:18:46', '2024-06-01 16:18:46'),
(6, 'Relawan5', 'relawan5@gmail.com', NULL, '$2y$12$DX5Clm.aFSNRZAr.eOTVnuVpORJnatrQEEeCvbI2Abf6YIlyd8kbi', NULL, '2024-06-09 23:54:36', '2024-06-09 23:54:36'),
(7, 'Relawan6', 'relawan6@gmail.com', NULL, '$2y$12$sJMRymiLGY1h0qYChUvloeCGSMIZqWoA1XIj3PbBpfgy2bUwT1Iha', NULL, '2024-06-09 23:56:49', '2024-06-09 23:56:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `fk_tb_donasi_tb_bencana1_idx` (`id_informasi_bencana`),
  ADD KEY `fk_tb_donasi_tb_donatur1_idx` (`id_donatur`);

--
-- Indexes for table `tb_donatur`
--
ALTER TABLE `tb_donatur`
  ADD PRIMARY KEY (`id_donatur`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_informasibencana`
--
ALTER TABLE `tb_informasibencana`
  ADD PRIMARY KEY (`id_bencana`),
  ADD KEY `relasi_tblaporan` (`id_laporan`);

--
-- Indexes for table `tb_jenisbencana`
--
ALTER TABLE `tb_jenisbencana`
  ADD PRIMARY KEY (`id_jenis_bencana`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `fk_tb_laporan_tb_relawan1_idx` (`id_relawan`),
  ADD KEY `fk_tb_laporan_tb_jenisBencana1_idx` (`id_jenis_bencana`);

--
-- Indexes for table `tb_relawan`
--
ALTER TABLE `tb_relawan`
  ADD PRIMARY KEY (`id_relawan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_informasibencana`
--
ALTER TABLE `tb_informasibencana`
  MODIFY `id_bencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_jenisbencana`
--
ALTER TABLE `tb_jenisbencana`
  MODIFY `id_jenis_bencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_relawan`
--
ALTER TABLE `tb_relawan`
  MODIFY `id_relawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD CONSTRAINT `fk_tb_donasi_tb_bencana1` FOREIGN KEY (`id_informasi_bencana`) REFERENCES `tb_informasibencana` (`id_bencana`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_donasi_tb_donatur1` FOREIGN KEY (`id_donatur`) REFERENCES `tb_donatur` (`id_donatur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_informasibencana`
--
ALTER TABLE `tb_informasibencana`
  ADD CONSTRAINT `relasi_tblaporan` FOREIGN KEY (`id_laporan`) REFERENCES `tb_laporan` (`id_laporan`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD CONSTRAINT `fk_tb_laporan_tb_relawan1` FOREIGN KEY (`id_relawan`) REFERENCES `tb_relawan` (`id_relawan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `jenis_bencana` FOREIGN KEY (`id_jenis_bencana`) REFERENCES `tb_jenisbencana` (`id_jenis_bencana`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
