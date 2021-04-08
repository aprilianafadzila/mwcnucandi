-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2021 pada 15.34
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mwcnu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(12) NOT NULL,
  `agenda_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT 0,
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(6, 'MAPABA 2018', '2019-01-16 12:11:23', 1, 'Novan El Fattah Putra', 2, 'd04b0aa6d803f76cffc698d6e3536e5b.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ansor`
--

CREATE TABLE `tbl_ansor` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ansor`
--

INSERT INTO `tbl_ansor` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(1, 'LAZISNU di Sidoarjo Canangkan Program 300 Sembako bagi Dluafa', '<p>Sidoarjo,&nbsp;<em><strong>NU Online Jatim</strong></em><br />\r\nBanyak cara yang dapat dilakukan sebagai wujud kepedulian kepada kalangan dluafa. Seperti yang dilakukan NU Care-Lembaga Amil, Zakat, Infaq, Shadaqah Nahdlatul Ulama (LAZISNU) Ranting Tenggulunan, Kecamatan Candi, Sidoarjo.</p>\r\n\r\n<p>Pada rapat &nbsp;yang digelar di kediaman Ketua Ranting Muslimat NU Tenggulunan disepakati mewujudkan komitmen dalam program santunan bagi dluafa dan anak yatim.<br />\r\n<br />\r\nDalam agenda kali ini LAZISNU&nbsp;setempat menghitung anggaran pendapatan yang didapatkan dari program Kotak Infak Nahdlatul Ulama atau Koin NU.&nbsp;</p>\r\n\r\n<p>&quot;Alhamdulillah di bulan Maret ini pendapatan yang diraih dari program Koin NU yang kita sebar ke seluruh Nahdliyin berjumlah Rp3.892.000. Dana ini nantinya&nbsp;kita&nbsp;pergunakan dalam program santunan anak yatim dan dluafa,&rdquo; kata Dewi Ussisa, Bendahara LAZISNU, Sabtu (20/03/2021) malam. &nbsp;<br />\r\n<br />\r\nDalam agenda kali ini pengurus LAZISNU juga melakukan rapat koordinasi tentang kegiatan yang akan dilaksanakan menjelang bulan suci&nbsp;Ramadlan.</p>\r\n\r\n<p>Zainul Arifin menuturkan bahwa LAZISNU akan melaksanakan kegiatan santunan kaum dluafa pada bulan Ramadlan.</p>\r\n\r\n<p>&quot;Insyaallah kita melaksanakan santunan kaum dluafa, di mana akan bekerja sama dengan pemerintah desa. Dan kami mengupayakan bantuan berupa 300 paket sembako yang didistribusikan kepada kaum dluafa,&quot; ujar Ketua LAZISNU Tenggulunan tersebut.</p>\r\n\r\n<p>Rapat juga dihadiri majelis pembina LAZISNU Tenggulunan, serta merapatkan teknis acara yang nantinya&nbsp;dilaksanakan&nbsp;pada 19 Ramadlan.</p>\r\n\r\n<p>&quot;Acara ini nantinya akan menggandeng&nbsp;pemerintah desa dan LAZISNU&nbsp;berperan menjadi fasilitator dalam agenda yang rutin dilaksanakan setiap bulan Ramadlan ini &quot; kata Ustadz Aly&nbsp;Masroeri.&nbsp;</p>\r\n\r\n<p>Pembina LAZISNU Tenggulunan yang juga Ketua&nbsp;Tim Panitia Sosial Dluafa dan Anak Yatim Desa Tenggulunan ini menambahkan bahwa LAZISNU yang bekerja&nbsp;sama dengan pemerintah desa mengupayakan dana senilai 45 juta rupiah.</p>\r\n\r\n<p>&quot;Insyaallah nantinya kami&nbsp;berupaya untuk mengumpulkan dana senilai Rp45 juta, yang kami alokasikan untuk dana bantuan sembako kepada kaum dhuafa,&rdquo; jelasnya.</p>\r\n\r\n<p>Disampaikan pula bahwa pemerintah desa akan mendata dengan detail lewat koordinasi PT dan RW untuk mengumpulkan data kaum dluafa yang ada di kawasan setempat.<br />\r\n<br />\r\n&quot;Di sini kami ingin saudara-saudara kita yang kurang beruntung&nbsp;mendapatkan secercah kebahagiaan dengan program kami ini. Dan ini adalah bukti komitmen bahwa LAZISNU Tenggulunan terus mengupayakan program yang menyejahterakan masyarakat kurang mampu,&quot; pungkasnya.</p>\r\n\r\n<p>Penulis: M Haikal</p>\r\n\r\n<p>Editor: Syaifullah</p>\r\n', '2021-04-07 02:09:34', 3, 'Penelitian dan Pengabdian', 38, 'cb9b7572132c7fa399e1904d8adc8767.jpg', 3, 'April', 0, 'lazisnu-di-sidoarjo-canangkan-program-300-sembako-bagi-dluafa'),
(2, 'Wujudkan madrasah amil zakat, Lazisnu MWC Candi gelar rapat koordinasi ', '<p>Sidoarjo, LAZISNU MWC Candi.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>NU-Care Lembaga Amil Zakat, Infaq, Shodaqoh Nahdlatul Ulama MWC Candi menggelar rapat koordinasi dalam rangka persiapan agenda kegiatan Madrasah Amil Zakat di kediaman H. Nur Salim, ketua umum Lazisnu MWC Candi pada hari hari minggu malam (20/3/2021) .&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Agenda rapat ini dipimpin langsung oleh abah Salim, panggilan akrab H. Nur Salim dan diikuti oleh pengurus serta relawan Lazisnu Candi.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ketua LAZISNU MWC Candi, H.Nur Salim mengatakan bahwa kegiatan tersebut guna mempersiapkan acara Madrasah Amil Zakat agar semakin banyak kader NU Candi yang cakap dalam urusan zakat.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot; Kita saat ini mempersiapkan secara matang konsep dan teknis pada agenda tersebut, tujuan digelarnya kegiatan ini adalah sebagai wadah belajar dan tempat menempa diri bagi kader kader NU Candi &quot; ujar H. Nur salim kepada awak media.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Para pengurus Lazisnu pun berharap diadakan agenda ini agar menjadi awal yang baik bagi kader kader NU maupun petugas pengurus zakat agar dapat mengelola zakat dengan baik dan benar sesuai kaidah kaidah fiqih Ahlussunnah wal jamaah.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot; Harapannya nantinya semakin banyak kader NU yang mengerti akan pengelolaan zakat sesuai dengan kaidah Fiqih Ahlussunnah wal jamaah, agar tidak terjadi hal hal yang melanggar norma keislaman dalam pengelolaan zakat nantinya &quot; tambahnya</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Rencananya Madrasah Amil zakat yang nantinya akan digelar pada tanggal 28 Maret 2021 tersebut akan bertempat di gedung MWC NU Candi, dan meyasar para kader NU se - Kecamatan Candi.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Penulis : M. Haikal</p>\r\n', '2021-04-07 02:10:57', 3, 'Penelitian dan Pengabdian', 1, 'ca68a114464bdee1fed5bb4f3ab72bcb.jpeg', 3, 'April', 0, 'wujudkan-madrasah-amil-zakat-lazisnu-mwc-candi-gelar-rapat-koordinasi'),
(3, 'PERSIAPAN PELATIHAN KHOTIB DAN SHOLAT SEMPURNA-PANITIA GELAR SCREENING PESERTA', '<p>Sidoarjo, MWC NU Candi.&nbsp;</p>\r\n\r\n<p>Departemen bidang dakwah Gerakan pemuda Ansor Kecamatan Candi, yang bekerja sama dengan Lembaga Dakwah Nahdlatul Ulama atau LDNU PAC Candi akan menggelar pelatihan khotib dan sholat sempurna pada hari sabtu dan minggu, 27 - 28 maret 2021, namun sebelumnya, panitia menggelar screening dan pembekalan kepada calon peserta.&nbsp;</p>\r\n\r\n<p>&quot;Pelatihan khotib dan sholat sempurna ini tujuannya adalah mempersiapkan khotib khotib yang mumpuni dalam bidangnya, dan mengetahui dasar hukum tentang khotib, dan bisa menjalankan tugas serta sunnah seorang khotib dengan baik, dan yang diutamakan dalam acara ini adalah bersanad, karena ada ilmu yang bersanad sampai Rasulullah sehingga dapat menyempurnakan ilmu tentang khotib kepada peserta&quot; ujar M. Habibi, Ketua pelaksana pelatihan khotib dan sholat sempurna yang diadakan bekerja sama dengan LDNU Candi.&nbsp;</p>\r\n\r\n<p>Screening ini dilakukan pada Rabu malam (24/3/2021) dan bertempat di aula kantor MWC NU Candi. Tahapan screening yang dilakukan peserta adalah menyetorkan hafalan surat surat dalam Al-qur&#39;an yang ditentukan panitia, dan menyetorkan teks khutbah yang nantinya akan dibacakan pada hari dan tanggal pelaksanaan.&nbsp;</p>\r\n\r\n<p>Tujuan diadakan screening ini adalah untuk memilah antara khotib yang memang memiliki jam terbang, khotib muda yang belum berpengalaman, dan juga kader kader muda Nahdliyin yang tertarik dengan kegiatan khutbah.&nbsp;</p>\r\n\r\n<p>&quot;Untuk peserta kita menyasar dari beberapa kategori yaitu utusan dari Masjid yang ada di kecamatan Candi, utusan dari ranting ranting NU, dan juga terbuka untuk umum, dari dalam maupun luar wilayah candi, dan disini tujuan screening selain untuk mengklasifikasikan asal dan background peserta adalah kita akan mengkelompokkan peserta tergantung dari capaian atau kapasitas peserta&quot; kata M. Habibi.&nbsp;</p>\r\n\r\n<p>Panitia pun berharap kegiatan ini dapat berjalan lancar dan sesuai tujuan pelatihan yakni dapat menimba ilmu dan tips seputar khutbah serta dapat menyempurnakan ilmu seputar khutbah dan sholat.&nbsp;</p>\r\n\r\n<p>&quot;Dan nantinya peserta yang memang mampu dan siap untuk berpraktek akan didistribusikan ke masjid masjid di kecamatan Candi untuk mengaktualisasikan ilmu yang didapat di pelatihan ini&quot; tandas M. Habibi kepada tim media.&nbsp;</p>\r\n\r\n<p>Penulis : M. Haikal</p>\r\n', '2021-04-07 02:11:05', 3, 'Penelitian dan Pengabdian', 4, 'fa12718b853ecae4742619b4c2052fe4.jpg', 3, 'April', 0, 'persiapan-pelatihan-khotib-dan-sholat-sempurna-panitia-gelar-screening-peserta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_aswaja`
--

CREATE TABLE `tbl_aswaja` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_aswaja`
--

INSERT INTO `tbl_aswaja` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(1, 'PUASA', '<p>Salat merujuk kepada ibadah pemeluk agama Islam. Menurut syariat Islam, praktik salat harus sesuai dengan segala petunjuk tata cara Nabi Muhammad sebagai figur pengejawantah perintah Allah. Umat muslim diperintahkan untuk mendirikan salat karena menurut Surah Al-&#39;Ankabut dapat mencegah perbuatan keji dan mungkar</p>\r\n', '2021-03-31 11:51:56', 1, 'Politik', 2, '35746fdb2a4bc324e5cd68560d0f438b.jpg', 3, 'April', 0, 'puasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_aswajanucenter`
--

CREATE TABLE `tbl_aswajanucenter` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_datatk`
--

CREATE TABLE `tbl_datatk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(55) NOT NULL,
  `npsn` varchar(55) NOT NULL,
  `nama_yayasan` varchar(55) NOT NULL,
  `akta` varchar(55) NOT NULL,
  `ketua_yayasan` varchar(55) NOT NULL,
  `bentuk` varchar(25) NOT NULL,
  `kegiatan` varchar(25) NOT NULL,
  `awal_berdiri` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `npwp` varchar(55) NOT NULL,
  `profil` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_datatk`
--

INSERT INTO `tbl_datatk` (`id`, `nama`, `alamat`, `no_telp`, `npsn`, `nama_yayasan`, `akta`, `ketua_yayasan`, `bentuk`, `kegiatan`, `awal_berdiri`, `status`, `npwp`, `profil`) VALUES
(5, 'TK MUSLIMAT NU 02 NURUL HUDA MIJI', 'Jln Mojopahit Miji Gang 2 No. 8, Mojokerto, 61322', '+6287342368786', '-', '-', '-', 'H. ABD KHAFID BUSYRI', '-', '-', '-', 'TERAKREDITASI', '-', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fatayat`
--

CREATE TABLE `tbl_fatayat` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text DEFAULT NULL,
  `file_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT 0,
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`) VALUES
(14, 'Form Pendaftaran MINUHASA', 'Form Pendaftaran', '2020-07-29 00:55:47', 'Kepala TU', 0, 'Formulir_Pendaftaran_Siswa_Baru_MINUHASA.pdf'),
(15, 'Coba', 'blablabla', '2021-04-01 08:25:13', 'Admin', 0, '20828-Article_Text-56024-1-10-20180921.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(1, 'adsaffq', '<p>eqffffffffffffffffq</p>\r\n', '2021-03-28 13:26:24', 1, 'Politik', 1, '87b28e30c0dddeb61c3698552dc80f38.png', 3, 'April', 0, 'adsaffq'),
(4, 'PUASA', '<p>Salat merujuk kepada ibadah pemeluk agama Islam. Menurut syariat Islam, praktik salat harus sesuai dengan segala petunjuk tata cara Nabi Muhammad sebagai figur pengejawantah perintah Allah. Umat muslim diperintahkan untuk mendirikan salat karena menurut Surah Al-&#39;Ankabut dapat mencegah perbuatan keji dan mungkar</p>\r\n', '2021-03-30 23:46:52', 1, 'Politik', 123, 'a81abd52793d85a3f2f3ce3d1cf9f6a5.png', 3, 'April', 0, 'puasa'),
(5, 'ASSALAMUALAIKUM', '<p>as</p>\r\n', '2021-03-31 00:50:04', 1, 'Politik', 1, 'c5238423e645b5a5cbe61ccd7aff8a67.jpg', 3, 'April', 0, 'assalamualaikum'),
(6, 'PUASA', '<p>aa</p>\r\n', '2021-03-31 00:50:22', 2, 'Sains dan Teknologi', 0, '77719aa563f892d211eeb6f096df86a5.jpg', 3, 'April', 0, 'puasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeritk`
--

CREATE TABLE `tbl_galeritk` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(55) NOT NULL,
  `galeri_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `galeri_gambar` varchar(55) NOT NULL,
  `galeri_pengguna_id` varchar(10) NOT NULL,
  `galeri_author` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_galeritk`
--

INSERT INTO `tbl_galeritk` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_pengguna_id`, `galeri_author`) VALUES
(1, 'Manasik haji', '2020-08-15 12:22:46', '091af9af4256f71b9f39a43db5340531.jpg', '3', 'April'),
(2, 'Pendaftaran Peserta Didik Baru Th 2020', '2020-08-15 00:27:52', 'cd739765fd8c6011eb042d6f00d9b966.jpeg', '3', 'April'),
(4, 'Brosur', '2020-08-15 11:42:41', '581f745f73ee91d413e5913131440ef2.jpeg', '3', 'April');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `guru_id` int(11) NOT NULL,
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_jenkel` varchar(2) DEFAULT NULL,
  `guru_tmp_lahir` varchar(80) DEFAULT NULL,
  `guru_tgl_lahir` varchar(80) DEFAULT NULL,
  `guru_mapel` varchar(120) DEFAULT NULL,
  `guru_photo` varchar(40) DEFAULT NULL,
  `guru_email` varchar(50) NOT NULL,
  `guru_nohp` varchar(15) NOT NULL,
  `guru_status` varchar(11) NOT NULL,
  `guru_tgl_input` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`guru_id`, `guru_nip`, `guru_nama`, `guru_jenkel`, `guru_tmp_lahir`, `guru_tgl_lahir`, `guru_mapel`, `guru_photo`, `guru_email`, `guru_nohp`, `guru_status`, `guru_tgl_input`) VALUES
(1, '11021998', 'Novan El Fattah Putra', 'L', 'Surabaya', '1998-02-11', '6', '6cd72c79b17f44396578ee4d13f24f31.jpg', 'elfattahn@gmail.com', '1111', 'Aktif', '2019-01-30 01:46:20'),
(14, 'a', 'aa', 'P', 'a', '0011-01-31', '4', NULL, 'a', 'a', 'Aktif', '2019-03-16 16:52:56'),
(15, 'ee', 'ee', 'L', 'ee', '1111-11-11', '2', '73a07c21a2e9a245d9c946be16d96185.png', 'a@a', '11', 'Aktif', '2019-03-23 14:17:25'),
(16, '22', '22', 'L', '22', '2222-02-22', '4', NULL, '2@2', '22', 'Aktif', '2019-03-23 14:17:51'),
(17, '1', '1', 'L', '1', '1111-11-11', '2', NULL, '`a@qw', '123', 'Aktif', '2019-03-23 14:23:28'),
(18, '9', '9', 'L', '9', '0009-09-09', '2', NULL, '9@w', '4', 'Aktif', '2019-03-23 14:26:51'),
(19, 'w', 'w', 'L', 'w', '0001-01-01', '1', NULL, '1@1', '1', 'Aktif', '2019-03-23 14:27:20'),
(20, 'e', 'e', 'L', 'e', '0001-01-01', '1', NULL, 're@w', 'w', 'Aktif', '2019-03-23 14:28:14'),
(21, 'e', 'e', 'L', 'e', '0001-01-01', '1', NULL, 'q@q', 'q', 'Aktif', '2019-03-23 14:31:03'),
(22, 'r', 'r', 'L', 'r', '0001-01-01', '1', NULL, 'q@q', 'ee', 'Aktif', '2019-03-23 14:32:27'),
(23, '1', '1', 'L', '1', '1111-11-11', '1', NULL, '11@q', '1', 'Aktif', '2019-03-23 14:36:07'),
(24, 'w', 'w', 'L', 'w', '0001-01-01', '1', NULL, 'q@q', 'q', 'Aktif', '2019-03-23 14:55:41'),
(25, 'w', 'w', 'L', 'w', '0001-01-01', '1', NULL, 'q@q', '2', 'Aktif', '2019-03-23 15:01:32'),
(26, 'a', 'q', 'L', 'q', '0001-01-11', '1', NULL, 'qs@q', 'a', 'Aktif', '2019-03-23 15:02:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(23, 'April', 'admin@gmail.com', '', 'as', '2020-08-15 00:00:44', 0),
(24, 'April', 'admin@gmail.com', '', 'Assalamualaikum', '2020-08-15 13:03:15', 0),
(28, 'April', 'apriliana@gmail.com', '', 'z', '2021-03-31 05:25:06', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ipnu`
--

CREATE TABLE `tbl_ipnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ishari`
--

CREATE TABLE `tbl_ishari` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_isnu`
--

CREATE TABLE `tbl_isnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jatmannu`
--

CREATE TABLE `tbl_jatmannu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jqhnu`
--

CREATE TABLE `tbl_jqhnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Politik', '2016-09-06 05:50:01'),
(2, 'Sains dan Teknologi', '2016-09-06 05:59:39'),
(3, 'Penelitian dan Pengabdian', '2016-09-06 06:19:26'),
(4, 'Prestasi', '2016-09-07 02:51:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kepalatk`
--

CREATE TABLE `tbl_kepalatk` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `nip` varchar(55) NOT NULL,
  `ttl` varchar(55) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pendidikan` varchar(55) NOT NULL,
  `mulai_bekerja` varchar(55) NOT NULL,
  `mulai_diangkat` varchar(55) NOT NULL,
  `masa_kerja` varchar(55) NOT NULL,
  `pangkat` varchar(55) NOT NULL,
  `golongan` varchar(25) NOT NULL,
  `jurusan` varchar(55) NOT NULL,
  `alamat` varchar(55) NOT NULL,
  `photo` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kepalatk`
--

INSERT INTO `tbl_kepalatk` (`id`, `nama`, `nip`, `ttl`, `jk`, `agama`, `pendidikan`, `mulai_bekerja`, `mulai_diangkat`, `masa_kerja`, `pangkat`, `golongan`, `jurusan`, `alamat`, `photo`) VALUES
(3, 'Nihayah Laila Wardah, S.pd', '-', 'Mojokerto, 19 Januari 1986', 'Perempuan', 'Islam', 'S1', '7 Juli 2003', '17 Juli 2018', '16 Tahun 9 Bulan', '-', '-', 'Bimbingan Konseling Islam', 'Miji, Gang 2. No.8 Kota Mojokerto Jawa Timur', 'b3439ac71084e7642c16cb60ebe13cab.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kepalayayasan`
--

CREATE TABLE `tbl_kepalayayasan` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `ttl` varchar(25) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikan` varchar(40) NOT NULL,
  `alamat` varchar(55) NOT NULL,
  `photo` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kepalayayasan`
--

INSERT INTO `tbl_kepalayayasan` (`id`, `nama`, `ttl`, `jk`, `agama`, `pendidikan`, `alamat`, `photo`) VALUES
(1, 'Muh Khafid Busyri al', 'Tuban, 19 mei', 'Laki-Laki', 'Islam', 'S1', 'Miji, Gang 2. No.8 Kota Mojokerto ', 'df5ea9429a887ae1ef9455e46d8bf8de.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_parent`) VALUES
(6, 'April', 'aprilianamuzumrotul7@gmail.com', ' Bagus.!', '2020-08-15 13:01:58', '1', 31, 0),
(8, 'Ari', 'ap@gmail.com', 'Bagus!', '2021-04-07 09:50:51', '1', 3, 0),
(9, 'April', '', 'Terima kasih', '2021-04-07 09:52:34', '1', 3, 8),
(10, 'aasa', 'ap@gmail.com', 'aaa suka', '2021-04-07 09:55:52', '1', 3, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lakpesdam`
--

CREATE TABLE `tbl_lakpesdam` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_laziznu`
--

CREATE TABLE `tbl_laziznu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lbmnu`
--

CREATE TABLE `tbl_lbmnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ldnu`
--

CREATE TABLE `tbl_ldnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lesbumi`
--

CREATE TABLE `tbl_lesbumi` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lfnu`
--

CREATE TABLE `tbl_lfnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lkknu`
--

CREATE TABLE `tbl_lkknu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lknu`
--

CREATE TABLE `tbl_lknu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lpbhnu`
--

CREATE TABLE `tbl_lpbhnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lpbinu`
--

CREATE TABLE `tbl_lpbinu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lpmaarifnu`
--

CREATE TABLE `tbl_lpmaarifnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lpnu`
--

CREATE TABLE `tbl_lpnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lppnu`
--

CREATE TABLE `tbl_lppnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lptnu`
--

CREATE TABLE `tbl_lptnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ltmnu`
--

CREATE TABLE `tbl_ltmnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ltnnu`
--

CREATE TABLE `tbl_ltnnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ltnu`
--

CREATE TABLE `tbl_ltnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lwpnu`
--

CREATE TABLE `tbl_lwpnu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_muslimat`
--

CREATE TABLE `tbl_muslimat` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pagarnusa`
--

CREATE TABLE `tbl_pagarnusa` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_email`, `pengguna_nohp`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(3, 'April', 'P', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '082264043852', '2', '2020-07-24 08:13:43', '40474971b1a5d3020f9d4e3a8a338c78.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text DEFAULT NULL,
  `pengumuman_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
(9, 'Pendaftaran Peserta Didik Baru Th 2020', 'Tanggal 12 juli-13 juli 2020', '2020-08-10 23:15:32', 'April');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(930, '2018-08-09 08:04:59', '::1', 'Chrome'),
(931, '2018-12-18 11:27:16', '::1', 'Chrome'),
(932, '2018-12-19 04:15:24', '::1', 'Chrome'),
(933, '2019-01-04 16:01:04', '::1', 'Chrome'),
(934, '2019-01-04 17:01:41', '::1', 'Chrome'),
(935, '2019-01-07 06:21:59', '::1', 'Chrome'),
(936, '2019-01-07 20:52:57', '::1', 'Chrome'),
(937, '2019-01-12 03:06:44', '::1', 'Chrome'),
(938, '2019-01-13 02:13:37', '::1', 'Chrome'),
(939, '2019-01-14 11:32:40', '::1', 'Chrome'),
(940, '2019-01-16 11:07:31', '::1', 'Chrome'),
(941, '2019-01-22 04:34:34', '::1', 'Chrome'),
(942, '2019-01-23 15:35:47', '::1', 'Chrome'),
(943, '2019-01-27 12:47:12', '::1', 'Chrome'),
(944, '2019-01-27 12:47:12', '::1', 'Chrome'),
(945, '2018-08-09 08:04:59', '::1', 'Chrome'),
(946, '2018-12-18 11:27:16', '::1', 'Chrome'),
(947, '2018-12-19 04:15:24', '::1', 'Chrome'),
(948, '2019-01-04 16:01:04', '::1', 'Chrome'),
(949, '2019-01-04 17:01:41', '::1', 'Chrome'),
(950, '2019-01-07 06:21:59', '::1', 'Chrome'),
(951, '2019-01-07 20:52:57', '::1', 'Chrome'),
(952, '2019-01-12 03:06:44', '::1', 'Chrome'),
(953, '2019-01-13 02:13:37', '::1', 'Chrome'),
(954, '2019-01-14 11:32:40', '::1', 'Chrome'),
(955, '2019-01-16 11:07:31', '::1', 'Chrome'),
(956, '2019-01-22 04:34:34', '::1', 'Chrome'),
(957, '2019-01-23 15:35:47', '::1', 'Chrome'),
(958, '2019-01-27 12:47:12', '::1', 'Chrome'),
(959, '2019-01-27 12:47:12', '::1', 'Chrome'),
(960, '2018-08-09 08:04:59', '::1', 'Chrome'),
(961, '2018-12-18 11:27:16', '::1', 'Chrome'),
(962, '2018-12-19 04:15:24', '::1', 'Chrome'),
(963, '2019-01-04 16:01:04', '::1', 'Chrome'),
(964, '2019-01-04 17:01:41', '::1', 'Chrome'),
(965, '2019-01-07 06:21:59', '::1', 'Chrome'),
(966, '2019-01-07 20:52:57', '::1', 'Chrome'),
(967, '2019-01-12 03:06:44', '::1', 'Chrome'),
(968, '2019-01-13 02:13:37', '::1', 'Chrome'),
(969, '2019-01-14 11:32:40', '::1', 'Chrome'),
(970, '2019-01-16 11:07:31', '::1', 'Chrome'),
(971, '2019-01-22 04:34:34', '::1', 'Chrome'),
(972, '2019-01-23 15:35:47', '::1', 'Chrome'),
(973, '2019-01-27 12:47:12', '::1', 'Chrome'),
(974, '2019-01-27 12:47:12', '::1', 'Chrome'),
(975, '2018-08-09 08:04:59', '::1', 'Chrome'),
(976, '2018-12-18 11:27:16', '::1', 'Chrome'),
(977, '2018-12-19 04:15:24', '::1', 'Chrome'),
(978, '2019-01-04 16:01:04', '::1', 'Chrome'),
(979, '2019-01-04 17:01:41', '::1', 'Chrome'),
(980, '2019-01-07 06:21:59', '::1', 'Chrome'),
(981, '2019-01-07 20:52:57', '::1', 'Chrome'),
(982, '2019-01-12 03:06:44', '::1', 'Chrome'),
(983, '2019-01-13 02:13:37', '::1', 'Chrome'),
(984, '2019-01-14 11:32:40', '::1', 'Chrome'),
(985, '2019-01-28 02:41:20', '::1', 'Chrome'),
(986, '2019-01-29 12:21:28', '::1', 'Chrome'),
(987, '2019-01-30 01:45:16', '::1', 'Chrome'),
(988, '2019-01-31 03:59:22', '::1', 'Chrome'),
(989, '2019-02-08 05:14:23', '::1', 'Chrome'),
(990, '2019-02-09 06:04:27', '::1', 'Chrome'),
(991, '2019-02-10 12:13:06', '::1', 'Chrome'),
(992, '2019-02-16 05:58:05', '::1', 'Chrome'),
(993, '2019-02-17 12:46:25', '::1', 'Chrome'),
(994, '2019-03-15 14:18:14', '::1', 'Chrome'),
(995, '2019-03-16 02:51:18', '::1', 'Chrome'),
(996, '2019-03-17 01:49:48', '::1', 'Chrome'),
(997, '2019-03-23 11:40:52', '::1', 'Chrome'),
(998, '2020-07-24 08:09:34', '::1', 'Chrome'),
(999, '2020-07-25 10:12:29', '::1', 'Chrome'),
(1000, '2020-07-25 23:10:47', '::1', 'Chrome'),
(1001, '2020-07-27 00:55:00', '::1', 'Chrome'),
(1002, '2020-07-28 02:07:28', '::1', 'Chrome'),
(1003, '2020-07-29 00:22:26', '::1', 'Chrome'),
(1004, '2020-07-30 00:36:20', '::1', 'Chrome'),
(1005, '2020-07-31 23:06:09', '::1', 'Chrome'),
(1006, '2020-08-02 06:28:29', '::1', 'Chrome'),
(1007, '2020-08-02 22:50:55', '::1', 'Chrome'),
(1008, '2020-08-03 22:11:46', '::1', 'Chrome'),
(1009, '2020-08-04 23:19:57', '::1', 'Chrome'),
(1010, '2020-08-05 23:14:45', '::1', 'Chrome'),
(1011, '2020-08-07 00:41:27', '::1', 'Chrome'),
(1012, '2020-08-08 00:53:26', '::1', 'Chrome'),
(1013, '2020-08-08 22:45:00', '::1', 'Chrome'),
(1014, '2020-08-09 22:56:44', '::1', 'Chrome'),
(1015, '2020-08-10 23:06:07', '::1', 'Chrome'),
(1016, '2020-08-11 11:24:43', '127.0.0.1', 'Chrome'),
(1017, '2020-08-12 11:17:21', '::1', 'Chrome'),
(1018, '2020-08-12 23:33:01', '::1', 'Chrome'),
(1019, '2020-08-14 23:01:56', '::1', 'Chrome'),
(1020, '2020-08-16 11:22:24', '127.0.0.1', 'Chrome'),
(1021, '2020-08-16 11:22:24', '::1', 'Chrome'),
(1022, '2020-08-18 06:17:07', '::1', 'Chrome'),
(1023, '2020-08-24 08:33:25', '::1', 'Chrome'),
(1024, '2021-03-21 04:45:14', '::1', 'Chrome'),
(1025, '2021-03-21 23:55:19', '::1', 'Chrome'),
(1026, '2021-03-24 22:43:58', '::1', 'Chrome'),
(1027, '2021-03-25 00:23:26', '127.0.0.1', 'Chrome'),
(1028, '2021-03-28 13:41:44', '::1', 'Chrome'),
(1029, '2021-03-29 00:46:55', '::1', 'Chrome'),
(1030, '2021-03-30 00:56:49', '::1', 'Chrome'),
(1031, '2021-03-30 22:42:46', '::1', 'Chrome'),
(1032, '2021-03-31 23:56:10', '::1', 'Chrome'),
(1033, '2021-04-02 06:03:54', '::1', 'Chrome'),
(1034, '2021-04-03 01:43:25', '::1', 'Chrome'),
(1035, '2021-04-05 10:29:38', '::1', 'Chrome'),
(1036, '2021-04-05 23:24:01', '::1', 'Chrome'),
(1037, '2021-04-06 23:36:34', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengurus`
--

CREATE TABLE `tbl_pengurus` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengurus`
--

INSERT INTO `tbl_pengurus` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(1, 'Pengurus', '<p>akkkk</p>\r\n', '2021-03-31 05:34:06', 3, 'Penelitian dan Pengabdian', 0, '843c8bbe6434fbea26bb6fd427a63e89.jpg', 3, 'April', 0, 'pengurus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pergunu`
--

CREATE TABLE `tbl_pergunu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesantren`
--

CREATE TABLE `tbl_pesantren` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pesantren`
--

INSERT INTO `tbl_pesantren` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(1, 'PESANTREN', '<p>Pesantren adalah sebuah pendidikan tradisional yang para siswanya tinggal bersama dan belajar di bawah bimbingan guru yang lebih dikenal dengan sebutan kiai dan mempunyai asrama untuk tempat menginap santri</p>\r\n', '2021-03-31 11:53:06', 1, 'Politik', 1, 'd5a3b03487eb18577114d5e1e9527282.jpg', 3, 'April', 0, 'pesantren');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pmii`
--

CREATE TABLE `tbl_pmii` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prodi`
--

CREATE TABLE `tbl_prodi` (
  `prodi_id` int(3) NOT NULL,
  `prodi_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_prodi`
--

INSERT INTO `tbl_prodi` (`prodi_id`, `prodi_nama`) VALUES
(1, 'Biologi'),
(2, 'Matematika'),
(3, 'Ilmu Kelautan'),
(4, 'Teknik Lingkungan'),
(5, 'Arsitektur'),
(6, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_profiltk`
--

CREATE TABLE `tbl_profiltk` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_isi` varchar(1000) NOT NULL,
  `tulisan_gambar` varchar(55) NOT NULL,
  `tulisan_author` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_profiltk`
--

INSERT INTO `tbl_profiltk` (`tulisan_id`, `tulisan_isi`, `tulisan_gambar`, `tulisan_author`) VALUES
(3, '<p>Tk muslimat nu 02 nurul huda miji merupakan lembaga tk dibawah naungan yayasan nurul huda miji yang berdiri tahun 1999. Dengan kepala TK x dan wakil kepala tk&nbsp;</p>\r\n', 'c0d87bfd03dbea55be675589e99d0f90.jpeg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ranting25`
--

CREATE TABLE `tbl_ranting25` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingbalongdowo`
--

CREATE TABLE `tbl_rantingbalongdowo` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingbalonggabus`
--

CREATE TABLE `tbl_rantingbalonggabus` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingbligo`
--

CREATE TABLE `tbl_rantingbligo` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingcandi`
--

CREATE TABLE `tbl_rantingcandi` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingdurungbanjar`
--

CREATE TABLE `tbl_rantingdurungbanjar` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingdurungbedug`
--

CREATE TABLE `tbl_rantingdurungbedug` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantinggelam`
--

CREATE TABLE `tbl_rantinggelam` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingjambangan`
--

CREATE TABLE `tbl_rantingjambangan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingkalipecabean`
--

CREATE TABLE `tbl_rantingkalipecabean` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingkebonsari`
--

CREATE TABLE `tbl_rantingkebonsari` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingkedungkendo`
--

CREATE TABLE `tbl_rantingkedungkendo` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingkedungpeluk`
--

CREATE TABLE `tbl_rantingkedungpeluk` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingkendalpecabean`
--

CREATE TABLE `tbl_rantingkendalpecabean` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingkerangtanjung`
--

CREATE TABLE `tbl_rantingkerangtanjung` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingklurak`
--

CREATE TABLE `tbl_rantingklurak` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantinglarangan`
--

CREATE TABLE `tbl_rantinglarangan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingngampelsari`
--

CREATE TABLE `tbl_rantingngampelsari` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingsepande`
--

CREATE TABLE `tbl_rantingsepande` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingsidodadi`
--

CREATE TABLE `tbl_rantingsidodadi` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingsugihwaras`
--

CREATE TABLE `tbl_rantingsugihwaras` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingsumokali`
--

CREATE TABLE `tbl_rantingsumokali` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingsumorame`
--

CREATE TABLE `tbl_rantingsumorame` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingtenggulunan`
--

CREATE TABLE `tbl_rantingtenggulunan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rantingwedoroklurak`
--

CREATE TABLE `tbl_rantingwedoroklurak` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_redaksi`
--

CREATE TABLE `tbl_redaksi` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_redaksi`
--

INSERT INTO `tbl_redaksi` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(1, 'COVID-19', '<p>Masing-masing orang memiliki respons yang berbeda terhadap COVID-19. Sebagian besar orang yang terpapar virus ini akan mengalami gejala ringan hingga sedang, dan akan pulih tanpa perlu dirawat di rumah sakit.</p>\r\n\r\n<hr />\r\n<p>Gejala yang paling umum:</p>\r\n\r\n<p>demam</p>\r\n\r\n<p>batuk kering</p>\r\n\r\n<p>kelelahan</p>\r\n\r\n<p>Gejala yang sedikit tidak umum:</p>\r\n\r\n<p>rasa tidak nyaman dan nyeri</p>\r\n\r\n<p>nyeri tenggorokan</p>\r\n\r\n<p>diare</p>\r\n\r\n<p>konjungtivitis (mata merah)</p>\r\n\r\n<p>sakit kepala</p>\r\n\r\n<p>hilangnya indera perasa atau penciuman</p>\r\n\r\n<p>ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki</p>\r\n', '2021-04-07 02:10:26', 2, 'Sains dan Teknologi', 50, '21d630d95b1c2027f174f7a42641f362.jpg', 3, 'April', 0, 'covid-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rminu`
--

CREATE TABLE `tbl_rminu` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sejarah`
--

CREATE TABLE `tbl_sejarah` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sejarah`
--

INSERT INTO `tbl_sejarah` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(1, 'SEJARAH', '<p>Organisasi yang dibentuk awalnya dimusyawarahkan dengan para kiai, kemudian lahirlah&nbsp;<strong>Nahdlatul Ulama</strong>&nbsp;(<strong>NU</strong>) yang mempunyai arti &ldquo;Kebangkitan Ulama&rdquo;.&nbsp;<strong>NU</strong>&nbsp;lahir pada 16 Rajab 1344 H atau 31 Januari 1926 di bawah kepemimpinan K.H. Hasyim Asy&#39;ari sebagai Rais Akbar</p>\r\n', '2021-03-31 01:19:02', 3, 'Penelitian dan Pengabdian', 0, '8e40ff177cc8ab7c09b5694008596afa.png', 3, 'April', 0, 'sejarah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_nis` varchar(55) NOT NULL,
  `siswa_nama` varchar(70) NOT NULL,
  `siswa_jenkel` varchar(10) NOT NULL,
  `siswa_photo` varchar(40) NOT NULL,
  `ttl` varchar(25) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `pendidikan` varchar(55) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `mulai_bekerja` varchar(25) NOT NULL,
  `mulai_diangkat` varchar(25) NOT NULL,
  `pangkat` varchar(10) NOT NULL,
  `alamat` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`siswa_id`, `siswa_nis`, `siswa_nama`, `siswa_jenkel`, `siswa_photo`, `ttl`, `jabatan`, `pendidikan`, `agama`, `mulai_bekerja`, `mulai_diangkat`, `pangkat`, `alamat`) VALUES
(4, '121236778883', 'April, S.kom', 'P', '820f58d6a31a1d16ef9158e2b1665794.jpg', 'Tuban', 'Guru', 'S1', 'Islam', '7 Juli 2003', '17 Juli 2018', '-', 'Miji, Gang 2. No.8 Kota Mojokerto'),
(5, '31798130811', 'Example, S.pd', 'L', 'f7eabe9653b11cda4b92ac709f17048c.jpg', 'Tuban, 19 mei 1999', 'Guru', 'S1', 'Islam', '9 juli 2002', '20 juli 2002', 'a', 'Miji, Gang 2. No.8 Kota Mojokerto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tokoh`
--

CREATE TABLE `tbl_tokoh` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tokoh`
--

INSERT INTO `tbl_tokoh` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(1, 'COVID-19', '<p>Covid 19 adaah</p>\r\n', '2021-03-31 05:44:39', 2, 'Sains dan Teknologi', 0, '3c3af29bf7a3c460d60177749ea9ec96.png', 3, 'April', 0, 'covid-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) NOT NULL,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(1, 'Ccoba', 'fwfjhqejhfemqds', '2021-04-07 01:10:53', 1, 'As', 4, '1be2c0e9ffc412f9987ea65b2b677be1.jpg', 1, 'april', 0, 'Sdsfdgagrgtye'),
(3, 'PUASA', '<p>Saum atau puasa bagi orang Islam adalah menahan diri dari makan dan minum serta segala perbuatan yang bisa membatalkan puasa, mulai dari terbit fajar hingga terbenam matahari, dengan syarat tertentu, untuk meningkatkan ketakwaan seorang muslim. Berpuasa merupakan salah satu dari lima Rukun Islam.</p>\r\n', '2021-04-07 13:33:35', 2, 'Sains dan Teknologi', 229, 'def963fa9bbb5d4ad0f0065a1459996b.jpg', 3, 'April', 0, 'puasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_yayasan`
--

CREATE TABLE `tbl_yayasan` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `alamat` varchar(55) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `npsn` varchar(25) NOT NULL,
  `nama_yayasan` varchar(40) NOT NULL,
  `akta` varchar(55) NOT NULL,
  `ketua_yayasan` varchar(70) NOT NULL,
  `bentuk` varchar(25) NOT NULL,
  `kegiatan` varchar(55) NOT NULL,
  `awal_berdiri` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL,
  `npwp` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_yayasan`
--

INSERT INTO `tbl_yayasan` (`id`, `nama`, `alamat`, `no_telp`, `npsn`, `nama_yayasan`, `akta`, `ketua_yayasan`, `bentuk`, `kegiatan`, `awal_berdiri`, `status`, `npwp`, `email`) VALUES
(1, 'MWCNU CANDI', 'Sidoarjo', '081-333-786-807 ', '69772760', 'MWCNU', '-', 'H. ABD ', 'organisasi', '-', '1972', 'Aktif', '-', 'mwcnu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indeks untuk tabel `tbl_ansor`
--
ALTER TABLE `tbl_ansor`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_aswaja`
--
ALTER TABLE `tbl_aswaja`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_aswajanucenter`
--
ALTER TABLE `tbl_aswajanucenter`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_datatk`
--
ALTER TABLE `tbl_datatk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_fatayat`
--
ALTER TABLE `tbl_fatayat`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_galeritk`
--
ALTER TABLE `tbl_galeritk`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indeks untuk tabel `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indeks untuk tabel `tbl_ipnu`
--
ALTER TABLE `tbl_ipnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_ishari`
--
ALTER TABLE `tbl_ishari`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_isnu`
--
ALTER TABLE `tbl_isnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_jatmannu`
--
ALTER TABLE `tbl_jatmannu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_jqhnu`
--
ALTER TABLE `tbl_jqhnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `tbl_kepalatk`
--
ALTER TABLE `tbl_kepalatk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kepalayayasan`
--
ALTER TABLE `tbl_kepalayayasan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`);

--
-- Indeks untuk tabel `tbl_lakpesdam`
--
ALTER TABLE `tbl_lakpesdam`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_laziznu`
--
ALTER TABLE `tbl_laziznu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lbmnu`
--
ALTER TABLE `tbl_lbmnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_ldnu`
--
ALTER TABLE `tbl_ldnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lesbumi`
--
ALTER TABLE `tbl_lesbumi`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lfnu`
--
ALTER TABLE `tbl_lfnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lkknu`
--
ALTER TABLE `tbl_lkknu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lknu`
--
ALTER TABLE `tbl_lknu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lpbhnu`
--
ALTER TABLE `tbl_lpbhnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lpbinu`
--
ALTER TABLE `tbl_lpbinu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lpmaarifnu`
--
ALTER TABLE `tbl_lpmaarifnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lpnu`
--
ALTER TABLE `tbl_lpnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lppnu`
--
ALTER TABLE `tbl_lppnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lptnu`
--
ALTER TABLE `tbl_lptnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_ltmnu`
--
ALTER TABLE `tbl_ltmnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_ltnnu`
--
ALTER TABLE `tbl_ltnnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_ltnu`
--
ALTER TABLE `tbl_ltnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lwpnu`
--
ALTER TABLE `tbl_lwpnu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_muslimat`
--
ALTER TABLE `tbl_muslimat`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_pagarnusa`
--
ALTER TABLE `tbl_pagarnusa`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indeks untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indeks untuk tabel `tbl_pengurus`
--
ALTER TABLE `tbl_pengurus`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_pergunu`
--
ALTER TABLE `tbl_pergunu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_pesantren`
--
ALTER TABLE `tbl_pesantren`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_pmii`
--
ALTER TABLE `tbl_pmii`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  ADD PRIMARY KEY (`prodi_id`);

--
-- Indeks untuk tabel `tbl_profiltk`
--
ALTER TABLE `tbl_profiltk`
  ADD PRIMARY KEY (`tulisan_id`);

--
-- Indeks untuk tabel `tbl_ranting25`
--
ALTER TABLE `tbl_ranting25`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingbalongdowo`
--
ALTER TABLE `tbl_rantingbalongdowo`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingbalonggabus`
--
ALTER TABLE `tbl_rantingbalonggabus`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingbligo`
--
ALTER TABLE `tbl_rantingbligo`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingcandi`
--
ALTER TABLE `tbl_rantingcandi`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingdurungbanjar`
--
ALTER TABLE `tbl_rantingdurungbanjar`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingdurungbedug`
--
ALTER TABLE `tbl_rantingdurungbedug`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantinggelam`
--
ALTER TABLE `tbl_rantinggelam`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingjambangan`
--
ALTER TABLE `tbl_rantingjambangan`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingkalipecabean`
--
ALTER TABLE `tbl_rantingkalipecabean`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingkebonsari`
--
ALTER TABLE `tbl_rantingkebonsari`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingkedungkendo`
--
ALTER TABLE `tbl_rantingkedungkendo`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingkedungpeluk`
--
ALTER TABLE `tbl_rantingkedungpeluk`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingkendalpecabean`
--
ALTER TABLE `tbl_rantingkendalpecabean`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingkerangtanjung`
--
ALTER TABLE `tbl_rantingkerangtanjung`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingklurak`
--
ALTER TABLE `tbl_rantingklurak`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantinglarangan`
--
ALTER TABLE `tbl_rantinglarangan`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingngampelsari`
--
ALTER TABLE `tbl_rantingngampelsari`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingsepande`
--
ALTER TABLE `tbl_rantingsepande`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingsidodadi`
--
ALTER TABLE `tbl_rantingsidodadi`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingsugihwaras`
--
ALTER TABLE `tbl_rantingsugihwaras`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingsumokali`
--
ALTER TABLE `tbl_rantingsumokali`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingsumorame`
--
ALTER TABLE `tbl_rantingsumorame`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingtenggulunan`
--
ALTER TABLE `tbl_rantingtenggulunan`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rantingwedoroklurak`
--
ALTER TABLE `tbl_rantingwedoroklurak`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_redaksi`
--
ALTER TABLE `tbl_redaksi`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_rminu`
--
ALTER TABLE `tbl_rminu`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indeks untuk tabel `tbl_tokoh`
--
ALTER TABLE `tbl_tokoh`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`) USING BTREE,
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`) USING BTREE,
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_yayasan`
--
ALTER TABLE `tbl_yayasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_ansor`
--
ALTER TABLE `tbl_ansor`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_aswaja`
--
ALTER TABLE `tbl_aswaja`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_aswajanucenter`
--
ALTER TABLE `tbl_aswajanucenter`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_datatk`
--
ALTER TABLE `tbl_datatk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_fatayat`
--
ALTER TABLE `tbl_fatayat`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeritk`
--
ALTER TABLE `tbl_galeritk`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_ipnu`
--
ALTER TABLE `tbl_ipnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_ishari`
--
ALTER TABLE `tbl_ishari`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_isnu`
--
ALTER TABLE `tbl_isnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_jatmannu`
--
ALTER TABLE `tbl_jatmannu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_jqhnu`
--
ALTER TABLE `tbl_jqhnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_kepalatk`
--
ALTER TABLE `tbl_kepalatk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_kepalayayasan`
--
ALTER TABLE `tbl_kepalayayasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_lakpesdam`
--
ALTER TABLE `tbl_lakpesdam`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_laziznu`
--
ALTER TABLE `tbl_laziznu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_lbmnu`
--
ALTER TABLE `tbl_lbmnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_ldnu`
--
ALTER TABLE `tbl_ldnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_lesbumi`
--
ALTER TABLE `tbl_lesbumi`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_lfnu`
--
ALTER TABLE `tbl_lfnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_lkknu`
--
ALTER TABLE `tbl_lkknu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_lknu`
--
ALTER TABLE `tbl_lknu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_lpbhnu`
--
ALTER TABLE `tbl_lpbhnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_lpbinu`
--
ALTER TABLE `tbl_lpbinu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_lpmaarifnu`
--
ALTER TABLE `tbl_lpmaarifnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_lpnu`
--
ALTER TABLE `tbl_lpnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_lppnu`
--
ALTER TABLE `tbl_lppnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_lptnu`
--
ALTER TABLE `tbl_lptnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_ltmnu`
--
ALTER TABLE `tbl_ltmnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_ltnnu`
--
ALTER TABLE `tbl_ltnnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_ltnu`
--
ALTER TABLE `tbl_ltnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_lwpnu`
--
ALTER TABLE `tbl_lwpnu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_muslimat`
--
ALTER TABLE `tbl_muslimat`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pagarnusa`
--
ALTER TABLE `tbl_pagarnusa`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1038;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengurus`
--
ALTER TABLE `tbl_pengurus`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pergunu`
--
ALTER TABLE `tbl_pergunu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesantren`
--
ALTER TABLE `tbl_pesantren`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pmii`
--
ALTER TABLE `tbl_pmii`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  MODIFY `prodi_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_profiltk`
--
ALTER TABLE `tbl_profiltk`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_ranting25`
--
ALTER TABLE `tbl_ranting25`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingbalongdowo`
--
ALTER TABLE `tbl_rantingbalongdowo`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingbalonggabus`
--
ALTER TABLE `tbl_rantingbalonggabus`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingbligo`
--
ALTER TABLE `tbl_rantingbligo`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingcandi`
--
ALTER TABLE `tbl_rantingcandi`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingdurungbanjar`
--
ALTER TABLE `tbl_rantingdurungbanjar`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingdurungbedug`
--
ALTER TABLE `tbl_rantingdurungbedug`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantinggelam`
--
ALTER TABLE `tbl_rantinggelam`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingjambangan`
--
ALTER TABLE `tbl_rantingjambangan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingkalipecabean`
--
ALTER TABLE `tbl_rantingkalipecabean`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingkebonsari`
--
ALTER TABLE `tbl_rantingkebonsari`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingkedungkendo`
--
ALTER TABLE `tbl_rantingkedungkendo`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingkedungpeluk`
--
ALTER TABLE `tbl_rantingkedungpeluk`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingkendalpecabean`
--
ALTER TABLE `tbl_rantingkendalpecabean`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingkerangtanjung`
--
ALTER TABLE `tbl_rantingkerangtanjung`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingklurak`
--
ALTER TABLE `tbl_rantingklurak`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantinglarangan`
--
ALTER TABLE `tbl_rantinglarangan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingngampelsari`
--
ALTER TABLE `tbl_rantingngampelsari`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingsepande`
--
ALTER TABLE `tbl_rantingsepande`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingsidodadi`
--
ALTER TABLE `tbl_rantingsidodadi`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingsugihwaras`
--
ALTER TABLE `tbl_rantingsugihwaras`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingsumokali`
--
ALTER TABLE `tbl_rantingsumokali`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingsumorame`
--
ALTER TABLE `tbl_rantingsumorame`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingtenggulunan`
--
ALTER TABLE `tbl_rantingtenggulunan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_rantingwedoroklurak`
--
ALTER TABLE `tbl_rantingwedoroklurak`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_redaksi`
--
ALTER TABLE `tbl_redaksi`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_rminu`
--
ALTER TABLE `tbl_rminu`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_tokoh`
--
ALTER TABLE `tbl_tokoh`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_yayasan`
--
ALTER TABLE `tbl_yayasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
