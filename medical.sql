-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 04:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `status_populer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `user_id`, `judul`, `deskripsi`, `isi`, `thumbnail`, `status`, `status_populer`, `created_at`, `updated_at`) VALUES
(9, 9, 'Buah-Buahan', 'Buah-buahan memberikan banyak asupan vitamin sehingga membuat kita pintar', '<h2><strong>Dengan memakan buah&nbsp;</strong></h2>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/9/artikel5.jpg\" style=\"height:175px; width:300px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/storage/photos/9/artikel4.jpg\" /></p>\r\n\r\n<p>Namun, beberapa orang mungkin &lsquo;takut&rsquo; terlalu banyak makan buah karena kandungan gulanya. Adakah batas maksimal berapa banyak makan buah agar tak menjadi bumerang?</p>\r\n\r\n<h2><strong>Manfaat buah bagi kesehatan yang tak boleh disia-siakan</strong></h2>\r\n\r\n<p>Ada banyak alasan sebenarnya yang membuat kita bisa mengonsumsi dan memvariasikan buah-buahan dengan rutin. Namun, manfaat buah bagi kesehatan tersebut dapat dibagi menjadi tiga berikut ini:</p>\r\n\r\n<h3><strong>1. Buah mengandung vitamin dan mineral yang diperlukan tubuh</strong></h3>\r\n\r\n<p>Bukan rahasia lagi, buah adalah gudangnya nutrisi mikro yang amat diperlukan tubuh - seperti vitamin dan mineral. Salah satu jenis vitamin yang banyak terkandung dalam beragam jenis buah adalah vitamin C.<img alt=\"\" src=\"http://localhost:8000/storage/photos/9/artikel4.jpg\" />&nbsp;Vitamin C memainkan multifungsi di berbagai sistem, mulai dari sistem imun, kesehatan jantung, kesehatan mata, kesehatan kulit, hingga penting untuk kehamilan.&nbsp;Buah yang bisa dikonsumsi dengan kulitnya cenderung lebih tinggi akan antioksidan dan serat.</p>\r\n\r\n<h3><strong>2. Makan buah menurunkan risiko penyakit</strong></h3>\r\n\r\n<p>Anda mungkin sudah sering mendengar bahwa manfaat buah bagi kesehatan selalu dikaitkan dengan penurunan risiko beragam penyakit. Dalam sebuah metastudi yang dimuat dalam&nbsp;<em>The Journal of Nutrition</em>, disebutkan bahwa rutin konsumsi konsumsi buah-buahan setiap hari menurunkan risiko penyakit jantung hingga 7%.Studi lain menyebutkan bahwa konsumsi buah dan sayuran dikaitkan dengan penurunan tekanan darah tinggi. Konsumsi buah-buahan juga dilaporkan berpotensi untuk mengendalikan kontrol glikemik pada penderita diabetes.</p>\r\n\r\n<h3><strong>3. Konsumsi buah membantu menurunkan berat badan</strong></h3>\r\n\r\n<p>Sering diabaikan, makan buah sebenarnya membantu memberikan sensasi rasa kenyang untuk perut. Buah-buahan umumnya mengandung kadar&nbsp;<a href=\"https://www.sehatq.com/artikel/apa-itu-serat-dan-mengapa-penting-untuk-tubuh\" target=\"_blank\">serat</a>&nbsp;dan air yang banyak, sehingga perut akan terasa &lsquo;terisi&rsquo; apabila kita menjadikannya camilan yang sehat. Selain itu, aktivitas mengunyah saat makan buah juga berkontribusi terhadap rasa kenyang tersebut.Bahkan, buah-buahan seperti apel dan jeruk dilaporkan lebih mengenyangkan dibandingkan makanan lain seperti daging dan telur. Karena memberikan sensasi kenyang setelah mengonsumsinya, makan buah-buahan dikaitkan dengan penurunan berat badan.</p>\r\n\r\n<h2><strong>Berapa rekomendasi konsumsi buah dalam sehari?</strong></h2>\r\n\r\n<p>Untuk mendapatkan manfaat buah bagi tubuh, direkomendasikan agar Anda mengonsumsi setidaknya 400 gram sajian buah dalam satu hari. Anda juga bisa membaginya menjadi 5 sajian buah seberat 80 gram.Sebuah riset yang dimuat dalam&nbsp;<em>The British Medical Journal</em>&nbsp;menyebutkan bahwa asupan lima sajian buah sehari dikaitkan dengan penurunan risiko kematian akibat penyakit &ndash; seperti penyakit jantung, stroke, dan kanker.</p>\r\n\r\n<h2><strong>Lalu, adakah efek samping jika terlalu banyak makan buah?</strong></h2>\r\n\r\n<p>Sebenarnya, terlalu banyak makan buah dalam sehari sulit terjadi pada seseorang. Hal ini karena serat dan air dalam buah akan membuat kita merasa cepat kenyang. Mengonsumsi satu buah apel saja, misalnya, membuat perut sudah &lsquo;terisi&rsquo; sehingga sulit melanjutkan konsumsi apel berikutnya.Bagaimana jika Anda mengonsumsi hingga, katakanlah, sebanyak 20 sajian buah dalam sehari? Riset dalam jurnal&nbsp;<em>Metabolism</em>&nbsp;menyebutkan, responden yang mengonsumsi 20 sajian buah dalam satu hari tidak memiliki efek samping bagi tubuh.</p>\r\n\r\n<h2><strong>Kapan harus membatasi konsumsi buah-buahan?</strong></h2>\r\n\r\n<p>Manfaat buah untuk kesehatan dapat dinikmati oleh sebagian besar orang. Namun, beberapa kelompok individu mungkin harus membatasi asupan buah-buahan atau bahkan menghindarinya sama sekali.Misalnya, orang yang tengah menjalani&nbsp;atau diet rendah karbo tentu harus membatasi karbohidrat yang banyak terkandung dalam buah-buahan. Biasanya, orang yang menjalani jenis diet di atas akan membatasi asupan kalori di bawah 50 gram dalam sehari.Sementara itu, orang yang memiliki intoleransi terhadap fruktosa &ndash; atau lebih dikenal dengan malabsorpsi fruktosa - akan perlu menghindari beberapa jenis buah-buahan. Mengonsumsi fruktosa, seperti yang terkandung dalam buah-buahan, dapat berujung pada gejala seperti diare, perut kembung, mual, muntah, hingga kelelahan yang kronis.</p>', 'artikel1.jpg', 'publish', 'tidak_populer', '2020-11-24 03:02:25', '2021-01-08 16:06:36'),
(11, 9, 'Beras Hijau', 'Beras hijau memiliki seribu manfaat untuk makanan kamu sehari-hari', '<p>Beras Jepang dikenal bermutu baik, berbiji bulat, dan menghasilkan nasi dengan tekstur pulen. Kini, Jepang sedang mengembangkan beras dengan kualitas yang lebih tinggi lagi. Tentu, dengan harga lebih mahal pula.<br />\r\n<br />\r\nSelama bertahun-tahun, petani padi di Jepang sangat dilindungi pemerintah. Namun, mereka melihat bahwa pasar hasil panen mereka yang berharga dikikis beras-beras impor yang lebih murah. Pemerintahan Perdana Menteri Shinzo Abepun mengusulkan penghentian rasio produksi dan subsidi.<br />\r\n<br />\r\nUntuk mengantisipasi hal ini di tahun-tahun mendatang, sebagian petani kini justru berkonsentrasi menanam sejumlah kecil padi berkualitas. Padi ini mendapat perlakuan khusus, makanya harganya mahal dan hasilnya disebut &#39;beras artisan&#39;.</p>', 'artikel3.jpg', 'publish', 'tidak_populer', '2020-12-02 03:06:28', '2021-01-08 14:03:18'),
(12, 9, 'Tomat Penyembuh Mata Minus', 'Ternyata tomat merupakan buah yang dapat menyembuhkan mata minus', '<p>Dalam dunia botani, buah didefinisikan sebagai bagian yang berkembang dari ovarium bunga yang dibuahi.</p>\r\n\r\n<p>Sayuran adalah bagian tanaman yang bisa dimakan yang bukan buah. Menurut definisi ini, tomat adalah buah.</p>\r\n\r\n<p>Ahli botani tak memiliki kesimpulan akhir soal&nbsp;subjek yang satu itu.</p>\r\n\r\n<p>Alkisah pada tahun 1893, Mahkamah Agung AS diminta untuk memutuskan apakah tomat adalah buah atau sayuran, setelah importir John Nix ditampar dengan pajak impor 10 persen untuk sayuran yang masuk ke Otoritas Pelabuhan New York.</p>\r\n\r\n<p>Dia memperdebatkan definisi botani, tetapi hakim tidak setuju, memutuskan bahwa dalam &quot;bahasa umum masyarakat, baik penjual atau konsumen perbekalan,&quot; tomat adalah sayuran.</p>\r\n\r\n<p>Ahli gizi khususnya suka mengkategorikan&nbsp;<a href=\"https://www.liputan6.com/global/read/3999719/28-6-1820-pertama-kalinya-orang-amerika-buktikan-tomat-tidak-beracun\">tomat</a>&nbsp;sebagai sayuran karena kekurangan jumlah fruktosa (gula) yang ditemukan di banyak buah-buahan seperti jeruk dan apel.</p>\r\n\r\n<p>Dalam istilah yang kurang formal, buah-buahan juga diklasifikasikan berdasarkan kemampuannya untuk dimasukkan ke dalam makanan penutup karena rasa manisnya. Ada alasan mengapa kita memiliki pai apel dan bukan pai brokoli.</p>', 'artikel1.jpg', 'publish', 'populer', '2020-12-02 03:07:44', '2021-01-08 14:04:11'),
(13, 9, 'Bunga Air', 'Bunga air adalah tanaman yang memiliki kesehatan untuk aroma nya', '<h2><strong>Lalu, adakah efek samping jika terlalu banyak makan buah?</strong></h2>\r\n\r\n<p>Sebenarnya, terlalu banyak makan buah dalam sehari sulit terjadi pada seseorang. Hal ini karena serat dan air dalam buah akan membuat kita merasa cepat kenyang. Mengonsumsi satu buah apel saja, misalnya, membuat perut sudah &lsquo;terisi&rsquo; sehingga sulit melanjutkan konsumsi apel berikutnya.Bagaimana jika Anda mengonsumsi hingga, katakanlah, sebanyak 20 sajian buah dalam sehari? Riset dalam jurnal&nbsp;<em>Metabolism</em>&nbsp;menyebutkan, responden yang mengonsumsi 20 sajian buah dalam satu hari tidak memiliki efek samping bagi tubuh.</p>\r\n\r\n<h2><strong>Kapan harus membatasi konsumsi buah-buahan?</strong></h2>\r\n\r\n<p>Manfaat buah untuk kesehatan dapat dinikmati oleh sebagian besar orang. Namun, beberapa kelompok individu mungkin harus membatasi asupan buah-buahan atau bahkan menghindarinya sama sekali.Misalnya, orang yang tengah menjalani&nbsp;<a href=\"https://www.sehatq.com/artikel/5-manfaat-diet-keto-yang-perlu-anda-ketahui\" target=\"_blank\">diet keto</a>&nbsp;atau diet rendah karbo tentu harus membatasi karbohidrat yang banyak terkandung dalam buah-buahan. Biasanya, orang yang menjalani jenis diet di atas akan membatasi asupan kalori di bawah 50 gram dalam sehari.Sementara itu, orang yang memiliki intoleransi terhadap fruktosa &ndash; atau lebih dikenal dengan malabsorpsi fruktosa - akan perlu menghindari beberapa jenis buah-buahan. Mengonsumsi fruktosa, seperti yang terkandung dalam buah-buahan, dapat berujung pada gejala seperti diare, perut kembung, mual, muntah, hingga kelelahan yang kronis.</p>', 'artikel4.jpg', 'publish', 'populer', '2020-12-02 03:08:38', '2020-12-02 10:10:12'),
(14, 9, 'Air Putih Seribu Manfaat', 'Air putih memiliki manfaat yang sangat luas untuk tubuh manusia', '<p>Sering diabaikan, makan buah sebenarnya membantu memberikan sensasi rasa kenyang untuk perut. Buah-buahan umumnya mengandung kadar&nbsp;<a href=\"https://www.sehatq.com/artikel/apa-itu-serat-dan-mengapa-penting-untuk-tubuh\" target=\"_blank\">serat</a>&nbsp;dan air yang banyak, sehingga perut akan terasa &lsquo;terisi&rsquo; apabila kita menjadikannya camilan yang sehat. Selain itu, aktivitas mengunyah saat makan buah juga berkontribusi terhadap rasa kenyang tersebut.Bahkan, buah-buahan seperti apel dan jeruk dilaporkan lebih mengenyangkan dibandingkan makanan lain seperti daging dan telur. Karena memberikan sensasi kenyang setelah mengonsumsinya, makan buah-buahan dikaitkan dengan penurunan berat badan.</p>\r\n\r\n<h2><strong>Berapa rekomendasi konsumsi buah dalam sehari?</strong></h2>\r\n\r\n<p>Untuk mendapatkan manfaat buah bagi tubuh, direkomendasikan agar Anda mengonsumsi setidaknya 400 gram sajian buah dalam satu hari. Anda juga bisa membaginya menjadi 5 sajian buah seberat 80 gram.Sebuah riset yang dimuat dalam&nbsp;<em>The British Medical Journal</em>&nbsp;menyebutkan bahwa asupan lima sajian buah sehari dikaitkan dengan penurunan risiko kematian akibat penyakit &ndash; seperti penyakit jantung, stroke, dan kanker.</p>', 'artikel1.jpg', 'publish', 'populer', '2020-12-02 03:10:00', '2020-12-03 19:13:35'),
(18, 9, 'Demam berdarah', '(DBD) adalah penyakit yang tidak boleh disepelekan', '<h2><strong>Penyakit DBD dan Cara Mencegahnya&nbsp;</strong></h2>\r\n\r\n<p>Demam berdarah alias DBD adalah penyakit yang disebabkan oleh virus dari gigitan nyamuk. Maka dari itu, salah satu cara mencegahnya adalah dengan menghindari gigitan nyamuk. Nyamuk pembawa virus dengue bisa berada di mana saja, termasuk di dalam rumah. Hampir semua bagian rumah bisa menjadi habitat nyamuk ini.&nbsp;</p>\r\n\r\n<p>Sayangnya, nyamuk penyebab demam berdarah tidak hanya selalu bersarang di tempat yang kotor atau tidak terawat. Nyamuk&nbsp;<em>Aedes aegypti</em>&nbsp;nyatanya juga sering ditemukan di tempat bersih di mana terdapat air yang menggenang. Hal itu yang membuat gerakan 3M menjadi salah satu cara untuk mencegah dan menurunkan risiko penyakit demam berdarah.&nbsp;</p>', 'dokter2.jpg', 'publish', 'tidak_populer', '2021-01-08 09:06:14', '2021-01-08 16:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jam_kerja` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `user_id`, `jam_kerja`, `tanggal`, `status`, `created_at`, `updated_at`) VALUES
(18, 37, '02.00 PM - 05.00 PM', '2021-01-08', '', '2021-01-08 14:00:14', '2021-01-08 21:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `jadwal_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `resep` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `status_pengiriman` varchar(255) DEFAULT NULL,
  `total_pembayaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `user_id`, `dokter_id`, `jadwal_id`, `status`, `resep`, `created_at`, `updated_at`, `bukti_pembayaran`, `alamat`, `status_pengiriman`, `total_pembayaran`) VALUES
(15, 38, 37, 18, 'selesai', 'upload resep.jpg', '2021-01-08 14:02:43', '2021-01-08', 'bukti pembayaran.jpg', 'jl raya bromo', 'selesai', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('pasien1@gmail.com', '$2y$10$2Aqs2PU2S/763Kw73MTuT..pW6eFS4v6MdlyuHRRs3BL8jKyNeOiu', '2020-12-02 03:57:32'),
('ayu@gmail.com', '$2y$10$VkZkblM/VFGNTAQ0gbhuk.t9X/xQK2NxJPU5X1U6s3x5RIi5FsLGe', '2020-12-03 16:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telpon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `keahlian`, `no_telpon`, `alamat`, `foto`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'admin', 'admin', '', '0812215050', NULL, 'dokter1.jpg', 'admin@gmail.com', NULL, '$2y$10$gr7FK0O4ucqEgvZzOAAtmOE26Etqqt/TXLghdEDf1IhipH.Ofn4jy', 'N0QDzzTVrqcOTQibmdriZTPjXYlAPQDr7a8ECGMXNVPRMLLqplaLcR43a7WM', '2020-12-02 02:58:04', '2020-12-05 04:25:59'),
(37, 'dokter', 'Ayu', 'mata', '6289666023625', NULL, 'dokter4.jpg', 'ayu@gmail.com', NULL, '$2y$10$XvU.K7EoGIXftLW7/K7yeuCTu9Ddee0X8KqQxEMRqOFPf/X0f7J6O', NULL, '2021-01-08 13:56:28', '2021-01-08 13:56:28'),
(38, 'pasien', 'intan', NULL, '0812345689', 'jl raya bromo', NULL, 'intan@gmail.com', NULL, '$2y$10$dU5Ocl7pBXz3m79QxLh0H.Qr18iggTzA1.CtQuH6GxP9K4qGpFs6e', NULL, '2021-01-08 14:01:07', '2021-01-08 14:01:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
