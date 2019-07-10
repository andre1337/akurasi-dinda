<?php


//=========================================================================================================================================
Make("Make $tbadmin","CREATE TABLE IF NOT EXISTS `$tbadmin` (
  `id-admin` varchar(8) collate latin1_general_ci NOT NULL,
  `username` varchar(25) collate latin1_general_ci NOT NULL,
  `password` varchar(25) collate latin1_general_ci NOT NULL,
  `telepon` varchar(15) collate latin1_general_ci NOT NULL,
  `email` varchar(50) collate latin1_general_ci NOT NULL,
  `gambar` varchar(50) collate latin1_general_ci NOT NULL,
  `status` enum('Y','N') collate latin1_general_ci NOT NULL default 'Y',
  PRIMARY KEY  (`id-admin` ))"
);

Make("Insert $tbadmin","INSERT INTO `$tbadmin` (`id-admin`, `username`, `password`, `telepon`, `email`, `gambar`, `status`) VALUES
('ADM01', 'admin', 'admin', '085279959498', 'adiarray@yahoo.com', 'Administrator.jpg', 'Y')");

//=========================================================================================================================================
Make("Make $tbgaleri","CREATE TABLE IF NOT EXISTS `$tbgaleri` (
`id-galeri` VARCHAR( 10 ) NOT NULL ,
`judul` VARCHAR( 50 ) NOT NULL ,
`kategori` VARCHAR( 40 ) NOT NULL ,
`deskripsi` TEXT NOT NULL ,
`gambar` VARCHAR( 50 ) NOT NULL ,
`tanggal` DATE NOT NULL ,
PRIMARY KEY ( `id-galeri` ))");
Make("Insert $tbgaleri","INSERT INTO `$tbgaleri` (`id-galeri` ,`judul` ,`kategori` ,`deskripsi` ,`gambar` ,`tanggal`) VALUES 
('G1108001', 'Aktivitas Belajar', 'Belajar Komputer', 'Aktivitas Belajar Komputer di myKampus', 'contoh1.jpg', '2011-12-25'), 
('G1108002', 'Jalan-Jalan Ke Pantai Carita', 'Konsolidasi', 'Jalan-Jalan Ke Pantai Carita untuk Konsolidasi Semanagat', 'contoh2.jpg','2011-12-25'),
('G1108003', 'Belajar Pemrograman', 'Belajar Komputer', 'Aktivitas Belajar Pemrograman di myKampus', 'contoh3.jpg', '2011-12-25'), 
('G1108004', 'Jalan-Jalan Ke Pulau 1000', 'Konsolidasi', 'Jalan-Jalan Ke Kepulauan Seribu untuk Kebersamaan', 'contoh4.jpg','2011-12-25')
");
//==========================================================================================================================================
Make("Make $tbpengunjung","CREATE TABLE IF NOT EXISTS `$tbpengunjung` (
  `id-pengunjung` varchar(10) collate latin1_general_ci NOT NULL,
  `nama` varchar(30) collate latin1_general_ci NOT NULL,
  `telepon` varchar(15) collate latin1_general_ci NOT NULL,
  `pesan` text collate latin1_general_ci NOT NULL,
  `email` varchar(100) collate latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('Y','N') collate latin1_general_ci NOT NULL default 'Y',
  PRIMARY KEY  (`id-pengunjung`))");

Make("Insert $tbpengunjung","INSERT INTO `$tbpengunjung` (`id-pengunjung`, `nama`, `telepon`, `pesan`, `email`, `tanggal`, `status`) VALUES
('T110700001', 'Riadi Marta Dinata', '085279959498', 'Ibarat buah simalakama...dimakan jadi gendut gak dimakan tambah gendut juga....:-)', 'adiarray@yahoo.com', '2011-07-26', ''),
('T110700002', 'Rini Dyah Anggorowati', '02192771708', 'Maju Terus Pantang Mundur....', 'admin@lp2maray.com', '2011-08-20', 'Y'),
('T110700003', 'Jaka Laksamana', '02192771708', 'Gajah Mati meninggalkan Gading, Harimau MAti meninggalkan Belang....Manusia mati meninggalkan Nama....', 'admin@lp2maray.com', '2011-08-20', 'Y'),
('T110700004', 'Nico Purnomo', '021-78889003', 'Hadapi dengan senyuman..apa yang terjadi...terjadilah....Hadapi...dengan ...(dewa)', 'admin@lp2maray.com', '2011-08-25', 'Y')
");
//==========================================================================================================================================
Make("Make $tbpollingask","CREATE TABLE IF NOT EXISTS `$tbpollingask` (
`id-pollingask` VARCHAR( 10 ) NOT NULL ,
`pertanyaan` TEXT NOT NULL ,
`tanggal` DATE NOT NULL ,
`status` CHAR( 1 ) NOT NULL ,
PRIMARY KEY ( `id-pollingask` ))");

Make("Insert $tbpollingask","INSERT INTO `$tbpollingask` (`id-pollingask` ,`pertanyaan` ,`tanggal` ,`status`) VALUES 
('ASK0001', 'Menurut Anda Produk manakah yang memiliki kualitas Hebat dan harga yang murah ?', '2011-12-25', 'Y'),
('ASK0002', 'Menurut Anda Siapakah Teknisi yang paling GUANTENG ?', '2011-12-25', 'N')
");
//==========================================================================================================================================
Make("Make $tbpolling","CREATE TABLE IF NOT EXISTS `$tbpolling` (
  `id-polling` int(4) NOT NULL auto_increment,
  `id-pollingask` varchar(10) collate latin1_general_ci NOT NULL,
  `pilihan` varchar(100) collate latin1_general_ci NOT NULL,
  `rating` int(5) NOT NULL,
  `status` enum('Y','N') collate latin1_general_ci NOT NULL default 'Y',
   PRIMARY KEY  (`id-polling`))");

Make("Insert $tbpolling","INSERT INTO `$tbpolling` (`id-polling`,`id-pollingask`, `pilihan`, `rating`, `status`) VALUES
(1, 'ASK0001','SONY', 17, 'Y'),
(2, 'ASK0001','ACER', 80, 'Y'),
(3, 'ASK0001','TOSHIBA', 59, 'Y'),
(4, 'ASK0001','AXIOO', 22, 'Y'),
(5, 'ASK0001','HP', 5, 'Y'),
(6, 'ASK0001','DELL', 7, 'Y'),
(7, 'ASK0002','Mas CUCAN', 17, 'Y'),
(8, 'ASK0002','Mas THREE', 80, 'Y'),
(9, 'ASK0002','Mas ECHO', 59, 'Y'),
(10, 'ASK0002','Mas DHEDDY', 22, 'Y'),
(11, 'ASK0002','Mas ARIE JUNIOR', 19, 'Y'),
(12, 'ASK0002','Mas TEDHY BEAR', 20, 'Y')
");
//==========================================================================================================================================
Make("Make $tbshoutbox","CREATE TABLE IF NOT EXISTS `$tbshoutbox` (
  `id-shout` int(4) NOT NULL auto_increment,
  `nama` varchar(100) collate latin1_general_ci NOT NULL,
  `email` varchar(50) collate latin1_general_ci NOT NULL,
  `pesan` text collate latin1_general_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` enum('Y','N') collate latin1_general_ci NOT NULL default 'Y',
  PRIMARY KEY  (`id-shout`))");

Make("Insert $tbshoutbox","INSERT INTO `$tbshoutbox` (`id-shout`, `nama`, `email`, `pesan`, `tanggal`, `status`) VALUES
(14, 'adi', 'adi@yahoo.com', 'jangan mau ko....nti kamu disuruh bawain barang2 nya ajah....aku kan &#039;dah pengalaman..... he3x mendingan ikut aku ajah ko beres2 aray ;:D;', '2011-06-17 10:10:10', 'Y'),
(13, 'rini', 'rinianggoro5@yahoo.com', 'boleh boleh aja asal gak boleh nangis.......;;-)', '2011-06-17 10:10:10', 'Y'),
(12, 'nico', 'nicool@yahoo.com', 'mau dunk jalan2 juga.........;-D', '2011-06-17 10:10:10', 'Y'),
(11, 'rini', 'rinianggoro5@yahoo.com', 'iyah....coz lagi sibuk jalan2.....;;-)', '2011-06-17 10:10:10', 'Y'),
(10, 'adi', 'adi@yahoo.com', 'hai apa kabarnya rin...lama gak main lagi ke arayyyyy :-)', '2011-06-17 10:10:10', 'Y')
");
//==========================================================================================================================================
Make("Make $tbstatistik","CREATE TABLE IF NOT EXISTS `$tbstatistik` (
  `id-statistik` int(8) NOT NULL auto_increment,
  `ip` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` varchar(30) NOT NULL,
  `online` varchar(30) NOT NULL,
  UNIQUE KEY `id` (`id-statistik`))");

Make("Insert $tbstatistik","INSERT INTO `$tbstatistik` (`id-statistik`, `ip`, `tanggal`, `hits`, `online`) VALUES
(1, '127.0.0.1', '2011-01-06', '29', '1294325108'),
(2, '127.0.0.1', '2011-06-17', '3', '1308328108'),
(3, '127.0.0.1', '2011-07-25', '1', '1311609099'),
(4, '127.0.0.1', '2011-08-25', '1', '1314279644'),
(5, '127.0.0.1', '2011-08-29', '1', '1314562015'),
(6, '127.0.0.1', '2011-09-03', '35', '1315065513'),
(7, '127.0.0.1', '2011-11-11', '112', '1321029200'),
(8, '127.0.0.1', '2011-11-12', '121', '1321056250')
");
//==========================================================================================================================================
Make("Make $tbgooglemap","CREATE TABLE IF NOT EXISTS `$tbgooglemap` (
  `id-googlemap` int(2) NOT NULL AUTO_INCREMENT,
  `iframe` varchar(1000) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `detail` varchar(1000) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tanggal` DATE NOT NULL ,
  `status` CHAR( 1 ) NOT NULL ,
  PRIMARY KEY (`id-googlemap`))");

Make("Insert $tbgooglemap","INSERT INTO `$tbgooglemap` (`id-googlemap`, `iframe`, `detail`, `tanggal`, `status`) VALUES
(1, 'http://maps.google.com/maps/ms?msa=0&msid=203038942996608606794.000499e7b9b2535ca5b0d&ie=UTF8&t=m&vpsrc=0&z=14&output=embed', 'http://maps.google.com/maps/ms?msa=0&msid=203038942996608606794.000499e7b9b2535ca5b0d&ie=UTF8&t=m&vpsrc=0&z=14&output=embed','2011-12-25','Y')
");

//==========================================================================================================================================
Make("Make $tbkomentar","CREATE TABLE IF NOT EXISTS `$tbkomentar` (
`id-komentar` BIGINT( 20 ) NOT NULL AUTO_INCREMENT ,
`tanggal` DATE NOT NULL ,
`id-$namatabelanggota` VARCHAR( 50 ) NOT NULL ,
`id-produk` VARCHAR( 10 ) NOT NULL ,
`pesan` TEXT NOT NULL ,
`status` CHAR( 1 ) NOT NULL ,
UNIQUE (`id-komentar`))");

//==========================================================================================================================================

Make("Make $tbpengumuman","CREATE TABLE IF NOT EXISTS `$tbpengumuman` (
`id-pengumuman` INT( 4 ) NOT NULL AUTO_INCREMENT ,
`tanggal` DATE NOT NULL ,
`judul` VARCHAR( 50 ) NOT NULL ,
`kalimat` TEXT NOT NULL ,
`status` CHAR( 1 ) NOT NULL ,
UNIQUE (`id-pengumuman`))");

Make("Insert $tbpengumuman","INSERT INTO `$tbpengumuman` (`id-pengumuman` ,`tanggal` ,`judul` ,`kalimat` ,`status`)VALUES 
(1 , '2011-12-25', 'PROMO AWAL TAHUN 2012', 'Dapatkan harga promo yaitu berupa diskon 40%, selama awal Tahun 2012.Ayo kapan lagi belanja murah selain di ARRAYCOM..... (Promo lebih dahsyat bila membawa kartu anggota PNS/Polri)', 'Y'), 
(2 , '2011-12-25', 'DISKON BESAR2 AN ABAD BARU', 'Diskon...DIskon...Diskon... Gebyar Diskon ARRAYCOM....Selama Bulan Januari 2012. Semua service dan produk-produk komputer......', 'Y')
");

//==========================================================================================================================================
Make("Make $tbkategori","CREATE TABLE IF NOT EXISTS `$tbkategori` (
`id-kategori`  varchar(10) collate latin1_general_ci NOT NULL,
`kategori` VARCHAR( 50 ) NOT NULL ,
`tabel` VARCHAR( 20 ) NOT NULL ,
`deskripsi` TEXT NOT NULL ,
PRIMARY KEY  (`id-kategori`))");

Make("Insert $tbkategori","INSERT INTO `$tbkategori` (`id-kategori`,`kategori` ,`tabel`,`deskripsi` )VALUES 
('KAT01' , 'Notebook', 'komputer', 'Periperal Mesin/ Perangkat pada komputer berikut accessoriesnya pada mobile PC'), 
('KAT02' , 'Komputer', 'komputer', 'Periperal Mesin/ Perangkat pada komputer berikut accessoriesnya pada PC Desktop/Server'),
('KAT03' , 'Hardware', 'kursus', 'Kursus/Training/Workshop IT bidang Hardware'),
('KAT04' , 'Web', 'kursus', 'Kursus/Training/Workshop IT bidang Web Base'),
('KAT05' , 'Hardware', 'jasa', 'Perbaikan/Service terhadap Mesin/ Perangkat pada komputer berikut accessoriesnya pada PC Desktop/Server'),
('KAT06' , 'Website', 'jasa', 'Pembuatan Website untuk peribadi/perusahaan/sekolah'),
('KAT07' , 'Komputer', 'lowongan', 'Info Lowongan Kerja Bidang Komputer'),
('KAT08' , 'Non Komputer', 'lowongan', 'Info Lowongan Kerja Bidang Non Komputer'),
('KAT09' , 'Java', 'artikel', 'Artikel Seputar Java'),
('KAT10' , 'PHP', 'artikel', 'Artikel Seputar PHP'),
('KAT11' , 'VB.6', 'artikel', 'Artikel Seputar VB.6'),
('KAT12' , 'Internet', 'artikel', 'Artikel Seputar Internet')
");
//==========================================================================================================================================
Make("Make $tbanggota","CREATE TABLE IF NOT EXISTS `$tbanggota` (
  `id-$namatabelanggota` varchar(8) collate latin1_general_ci NOT NULL,
  `nama` varchar(30) collate latin1_general_ci NOT NULL,
  `tgl-lahir` date NOT NULL,
  `telepon` varchar(15) collate latin1_general_ci NOT NULL,
  `email` varchar(50) collate latin1_general_ci NOT NULL,
  `alamat` text collate latin1_general_ci NOT NULL,
  `username` varchar(30) collate latin1_general_ci NOT NULL,
  `password` varchar(30) collate latin1_general_ci NOT NULL,
  `gambar` varchar(50) collate latin1_general_ci NOT NULL,
  `status` enum('Y','N') collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id-$namatabelanggota`))");

Make("Insert $tbanggota","INSERT INTO `$tbanggota` (`id-$namatabelanggota`, `nama`, `tgl-lahir`, `telepon`, `email`, `alamat`, `username`, `password`, `gambar`, `status`) VALUES
('A1111001', 'Rini Dyah Anggorowati', '1984-04-05', '085291511090', 'rinianggoro5@yahoo.com', 'Jl.Realita No 5 Halte Kampus UI Depok, Jakarta Selatan 16424', 'r', 'r', 'contoh4.jpg', 'Y'),
('A1111002', 'Riadi Marta Dinata', '2011-09-01', '085279959498', 'adiarray@yahoo.com', 'jakarta No 15A', 'adiarray', 'a', 'smple_app.ico', 'Y')
");
//==========================================================================================================================================

Make("Make $tbdownload","CREATE TABLE IF NOT EXISTS `$tbdownload` (
  `id-download` varchar(8) collate latin1_general_ci NOT NULL,
  `judul` varchar(200) collate latin1_general_ci NOT NULL,
  `file` varchar(100) collate latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(3) NOT NULL,
  `deskripsi` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id-download`))");

Make("Insert $tbdownload","INSERT INTO `$tbdownload` (`id-download`, `judul`, `file`, `tanggal`, `hits`, `deskripsi`) VALUES
('F1108001', 'Membuat Shopping Cart dengan PHP', 'shopping cart.pdf', '2011-11-11', 7, 'Membuat Shopping Cart dengan PHP Membuat Shopping Cart dengan PHP'),
('F1108002', 'Skrip Captcha', 'captcha.rar', '2009-02-06', 4, 'Gunakan file seperlunya'),
('F1108003', 'Kalender Tahun 2009', 'kalender2009.rar', '2009-02-06', 9, 'Gunakan file seperlunya'),
('F1108004', 'Wallpaper PHP', 'PHP_weapon.jpg', '2009-10-28', 3, 'Gunakan file seperlunya'),
('F1108005', 'Slide  Pemrograman VBA Excell', 'Excell_VBA.ppt', '2009-11-03', 10, 'Gunakan file seperlunya'),
('F1111001', 'MyMaps', 'Hydrangeas.jpg', '2011-11-11', 2, 'Gunakan file seperlunya')
");
//==========================================================================================================================================

Make("Make $tbtransaksi","CREATE TABLE IF NOT EXISTS `$tbtransaksi` (
 `id-transaksi` varchar(10) collate latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `id-$namatabelanggota` varchar(10) collate latin1_general_ci NOT NULL,
  `keterangan` text collate latin1_general_ci NOT NULL,
  `status` enum('Y','N') collate latin1_general_ci NOT NULL default 'N',
  PRIMARY KEY  (`id-transaksi`))");

Make("Insert $tbtransaksi","INSERT INTO `$tbtransaksi` (`id-transaksi`, `tanggal`, `id-$namatabelanggota`, `keterangan`, `status`) VALUES
('T1111001', '2011-08-26', 'A1111001', 'Antar sesuai Alamat di pendaftaran', 'N'),
('T1111002', '2011-08-27', 'A1111001', 'Antar sesuai alamat pendaftaran ya', 'N')
");
//==========================================================================================================================================
Make("Make $tbtransaksidetail","CREATE TABLE IF NOT EXISTS `$tbtransaksidetail` (
 `id` int(5) NOT NULL auto_increment,
  `id-transaksi` varchar(10) collate latin1_general_ci NOT NULL,
  `id-$produk1` varchar(10) collate latin1_general_ci NOT NULL,
  `jumlah` int(10)  collate latin1_general_ci NOT NULL,
  `subtotal` int(15)  collate latin1_general_ci NOT NULL,
  UNIQUE KEY `id` (`id`))");

Make("Insert $tbtransaksidetail","INSERT INTO `$tbtransaksidetail`(`id`, `id-transaksi`, `id-$produk1`, `jumlah`, `subtotal`) VALUES
(1, 'T1111001', 'B1202001', '8', '24000000'),
(2, 'T1111001', 'B1202002', '7', '21000000'),
(3, 'T1111001', 'B1202003', '1', '3000000'),
(4, 'T1111001', 'B1202004', '1', '3000000'),
(5, 'T1111001', 'B1202001', '1', '2000000'),
(6, 'T1111001', 'B1202002', '1', '3000000'),
(7, 'T1111002', 'B1202003', '6', '18000000'),
(8, 'T1111002', 'B1202004', '4', '12000000'),
(9, 'T1111002', 'B1202001', '3', '6000000'),
(10, 'T1111002', 'B1202002', '9', '18000000')
");
//==========================================================================================================================================

Make("Make $tbkonfirmasi","CREATE TABLE IF NOT EXISTS `$tbkonfirmasi` (
 `id-konfirmasi` VARCHAR( 10 ) NOT NULL ,
`id-transaksi` VARCHAR( 10 ) NOT NULL ,
`tanggal` DATE NOT NULL ,
`bank` TEXT NOT NULL ,
`nominal` VARCHAR( 20 ) NOT NULL ,
`uangdikirim` VARCHAR( 20 ) NOT NULL ,
`catatan` TEXT NOT NULL ,
`gambar` VARCHAR( 100 ) NOT NULL ,
`status` enum('Y','N') collate latin1_general_ci NOT NULL default 'N',
PRIMARY KEY ( `id-konfirmasi` ))");

Make("Insert $tbkonfirmasi","INSERT INTO `$tbkonfirmasi` (
`id-konfirmasi` ,
`id-transaksi` ,
`tanggal` ,
`bank` ,
`nominal` ,`uangdikirim` ,
`catatan` ,
`gambar`,
`status`
)
VALUES (
'CF1108001', 'T1108001', '2012-01-20', 'BNI Cabang UI Depok No.Rek:0190500752 AN. Tn. Riadi Marta Dinata', '1000000','1005000', 'Terimakasih atas sopportnya Mas....Trimks Ya :-)','gambar1.jpg','N')
");
//==========================================================================================================================================

if(!$tbproduk1==""){
Make("Make $tbproduk1","CREATE TABLE IF NOT EXISTS `$tbproduk1` (
  `id-$produk1` varchar(10) collate latin1_general_ci NOT NULL,
  `nama-$produk1` varchar(25) collate latin1_general_ci NOT NULL,
  `id-kategori` varchar(20) collate latin1_general_ci NOT NULL,
  `$produk1ket1` varchar(20) collate latin1_general_ci NOT NULL,
  `gambar` varchar(50) collate latin1_general_ci NOT NULL,
  `$produk1ket2` varchar(100) collate latin1_general_ci NOT NULL,
  `$produk1ket3` text collate latin1_general_ci NOT NULL,
  `$produk1ket4` text collate latin1_general_ci NOT NULL,
  `keterangan` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id-$produk1`))");

Make("Insert $tbproduk1","INSERT INTO `$tbproduk1` (`id-$produk1`, `nama-$produk1`, `id-kategori`, `$produk1ket1`, `gambar`, `$produk1ket2`, `$produk1ket3`,`$produk1ket4`, `keterangan`) VALUES
('B1202001', 'Komputer AMD Duron 2500', 'KAT01',  '900', 'contoh1.jpg', '100', '$produk1ket3 1', '$produk1ket4 1', 'Ready'),
('B1202002', 'Komputer Core 2Duo 2.1GHz', 'KAT01',  '800', 'contoh2.jpg', '100', '$produk1ket3 2', '$produk1ket4 2', 'Ready'),
('B1202003', 'Komputer AMD Duron 2000', 'KAT01',  '700', 'contoh3.jpg', '100', '$produk1ket3 3', '$produk1ket4 3', 'Ready'),
('B1202004', 'Notebook Acer 4552', 'KAT02',  '600', 'contoh4.jpg', '100', '$produk1ket3 4', '$produk1ket4 4', 'Ready')
");
}//if
//--------------------------------------------------------------------------------------------------------------------------------------
if(!$tbproduk2==""){
Make("Make $tbproduk2","CREATE TABLE IF NOT EXISTS `$tbproduk2` (
  `id-$produk2` varchar(10) collate latin1_general_ci NOT NULL,
  `nama-$produk2` varchar(25) collate latin1_general_ci NOT NULL,
  `id-kategori` varchar(20) collate latin1_general_ci NOT NULL,
  `$produk2ket1` varchar(20) collate latin1_general_ci NOT NULL,
  `gambar` varchar(50) collate latin1_general_ci NOT NULL,
  `$produk2ket2` varchar(100) collate latin1_general_ci NOT NULL,
  `$produk2ket3` text collate latin1_general_ci NOT NULL,
  `$produk2ket4` text collate latin1_general_ci NOT NULL,
  `keterangan` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id-$produk2`))");

Make("Insert $tbproduk2","INSERT INTO `$tbproduk2` (`id-$produk2`, `nama-$produk2`, `id-kategori`, `$produk2ket1`, `gambar`, `$produk2ket2`, `$produk2ket3`,`$produk2ket4`, `keterangan`) VALUES
('K1202001', 'Teknisi Komputer', 'KAT03', '$produk2ket1 1', 'contoh1.jpg', '$produk2ket2 1', '$produk2ket3 1', '$produk2ket4 1', 'Ready'),
('K1202002', 'Teknisi Jaringan', 'KAT03',  '$produk2ket1 2', 'contoh2.jpg', '$produk2ket2 2', '$produk2ket3 2', '$produk2ket4 2', 'Ready'),
('K1202003', 'PHP-Mysql', 'KAT03',  '$produk2ket1 3', 'contoh3.jpg', '$produk2ket2 3', '$produk2ket3 3', '$produk2ket4 3', 'Ready'),
('K1202004', 'Design Grafis', 'KAT04',  '$produk2ket1 4', 'contoh4.jpg', '$produk2ket2 4', '$produk2ket3 4', '$produk2ket4 4', 'Ready')
");
}//if
//--------------------------------------------------------------------------------------------------------------------------------------
if(!$tbproduk3==""){
Make("Make $tbproduk3","CREATE TABLE IF NOT EXISTS `$tbproduk3` (
  `id-$produk3` varchar(10) collate latin1_general_ci NOT NULL,
  `nama-$produk3` varchar(25) collate latin1_general_ci NOT NULL,
  `id-kategori` varchar(20) collate latin1_general_ci NOT NULL,
  `$produk3ket1` varchar(20) collate latin1_general_ci NOT NULL,
  `gambar` varchar(50) collate latin1_general_ci NOT NULL,
  `$produk3ket2` varchar(100) collate latin1_general_ci NOT NULL,
  `$produk3ket3` text collate latin1_general_ci NOT NULL,
  `$produk3ket4` text collate latin1_general_ci NOT NULL,
  `keterangan` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id-$produk3`))");

Make("Insert $tbproduk3","INSERT INTO `$tbproduk3` (`id-$produk3`, `nama-$produk3`, `id-kategori`, `$produk3ket1`, `gambar`, `$produk3ket2`, `$produk3ket3`,`$produk3ket4`, `keterangan`) VALUES
('J1202001', 'Perbaikan Printer', 'KAT05', '$produk3ket1 1', 'contoh1.jpg', '$produk3ket2 1', '$produk3ket3 1', '$produk3ket4 1', 'Ready'),
('J1202002', 'Perbaikan Monitor', 'KAT05', '$produk3ket1 2', 'contoh2.jpg', '$produk3ket2 2', '$produk3ket3 2', '$produk3ket4 2', 'Ready'),
('J1202003', 'Perbaikan Laptop', 'KAT05', '$produk3ket1 3', 'contoh3.jpg', '$produk3ket2 3', '$produk3ket3 3', '$produk3ket4 3', 'Ready'),
('J1202004', 'Pembuatan Website1', 'KAT06', '$produk3ket1 4', 'contoh4.jpg', '$produk3ket2 4', '$produk3ket3 4', '$produk3ket4 4', 'Ready')
");
}//if
//--------------------------------------------------------------------------------------------------------------------------------------
if(!$tbproduk4==""){
Make("Make $tbproduk4","CREATE TABLE IF NOT EXISTS `$tbproduk4` (
  `id-$produk4` varchar(10) collate latin1_general_ci NOT NULL,
  `nama-$produk4` varchar(25) collate latin1_general_ci NOT NULL,
  `id-kategori` varchar(20) collate latin1_general_ci NOT NULL,
  `$produk4ket1` varchar(20) collate latin1_general_ci NOT NULL,
  `gambar` varchar(50) collate latin1_general_ci NOT NULL,
  `$produk4ket2` varchar(100) collate latin1_general_ci NOT NULL,
  `$produk4ket3` text collate latin1_general_ci NOT NULL,
  `$produk4ket4` text collate latin1_general_ci NOT NULL,
  `keterangan` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id-$produk4`))");

Make("Insert $tbproduk4","INSERT INTO `$tbproduk4` (`id-$produk4`, `nama-$produk4`, `id-kategori`, `$produk4ket1`, `gambar`, `$produk4ket2`, `$produk4ket3`,`$produk4ket4`, `keterangan`) VALUES
('L1202001', 'Tenaga Pengajar Java', 'KAT07', '$produk4ket1 1', 'contoh1.jpg', '$produk4ket2 1', '$produk4ket3 1', '$produk4ket4 1', 'Ready'),
('L1202002', 'Drafter Autocad', 'KAT07', '$produk4ket1 2', 'contoh2.jpg', '$produk4ket2 2', '$produk4ket3 2', '$produk4ket4 2', 'Ready'),
('L1202003', 'Mekanik Bengkel Motor', 'KAT08', '$produk4ket1 3', 'contoh3.jpg', '$produk4ket2 3', '$produk4ket3 3', '$produk4ket4 3', 'Ready'),
('L1202004', 'Programming CI', 'KAT07', '$produk4ket1 4', 'contoh4.jpg', '$produk4ket2 4', '$produk4ket3 4', '$produk4ket4 4', 'Ready')
");
}//if
//--------------------------------------------------------------------------------------------------------------------------------------
if(!$tbproduk5==""){
Make("Make $tbproduk5","CREATE TABLE IF NOT EXISTS `$tbproduk5` (
  `id-$produk5` varchar(10) collate latin1_general_ci NOT NULL,
  `nama-$produk5` varchar(25) collate latin1_general_ci NOT NULL,
  `id-kategori` varchar(20) collate latin1_general_ci NOT NULL,
  `$produk5ket1` varchar(20) collate latin1_general_ci NOT NULL,
  `gambar` varchar(50) collate latin1_general_ci NOT NULL,
  `$produk5ket2` varchar(100) collate latin1_general_ci NOT NULL,
  `$produk5ket3` text collate latin1_general_ci NOT NULL,
  `$produk5ket4` text collate latin1_general_ci NOT NULL,
  `keterangan` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id-$produk5`))");

Make("Insert $tbproduk5","INSERT INTO `$tbproduk5` (`id-$produk5`, `nama-$produk5`, `id-kategori`, `$produk5ket1`, `gambar`, `$produk5ket2`, `$produk5ket3`,`$produk5ket4`, `keterangan`) VALUES
('R1202001', 'Split String Java', 'KAT09', '$produk5ket1 1', 'contoh1.jpg', '$produk5ket2 1', '$produk5ket3 1', '$produk5ket4 1', 'Ready'),
('R1202002', 'Substring pada PHP', 'KAT10', '$produk5ket1 2', 'contoh2.jpg', '$produk5ket2 2', '$produk5ket3 2', '$produk5ket4 2', 'Ready'),
('R1202003', 'AutoIncrement VB6', 'KAT11', '$produk5ket1 3', 'contoh3.jpg', '$produk5ket2 3', '$produk5ket3 3', '$produk5ket4 3', 'Ready'),
('R1202004', 'Delete Email All', 'KAT12', '$produk5ket1 4', 'contoh4.jpg', '$produk5ket2 4', '$produk5ket3 4', '$produk5ket4 4', 'Ready')
");
}//if

//==========================================================================================================================================
Make("Make $tbberita","CREATE TABLE IF NOT EXISTS `$tbberita` (
  `id-berita` varchar(10) collate latin1_general_ci NOT NULL,
  `judul` varchar(100) collate latin1_general_ci NOT NULL,
  `kategori` varchar(50) collate latin1_general_ci NOT NULL,
  `tag` varchar(200) collate latin1_general_ci NOT NULL,
  `isi` longtext collate latin1_general_ci NOT NULL,
  `gambar` varchar(100) collate latin1_general_ci NOT NULL,
  `hits` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id-berita`))");

Make("Insert $tbberita","INSERT INTO `$tbberita` (`id-berita`, `judul`, `kategori`, `tag`, `isi`, `gambar`, `hits`, `tanggal`, `keterangan`) VALUES
('B1108001', 'Jakarta Indah Bila Malam', 'Berita Umum', 'olahraga,hiburan,sejarah,umum', 'Petenis asal Rusia, Maria Sharapova dengan penghasilan 26 juta dolar AS merupakan petenis wanita berpenghasilan tertinggi. Ia pernah menempati peringkat satu dunia, pasca mundurnya Justine Henin. Ia juga memiliki prestasi dengan menjuarai turnamen grand slam Australia Terbuka dan AS Terbuka. Namun, sebagian besar penghasilannya didapat dari kontrak iklannya bersama Pepsi, Colgate-Palmolive, Nike dan Motorola.<br><br>Berikutnya disusul Williams bersaudara dari Amerika, yaitu Serena Williams dengan penghasilan 14 juta dolar AS. Ia meraih tiga gelar juara tiap tahunnya semenjak tahun 2005. Ia juga merupakan model dari produk Hawlett-Packard, Nike, dan Kraft. Sedangkan kakak kandungnya, yaitu Venus Williams berpenghasilan 13 juta dolar AS. Ia mengalahkan adiknya di final Wimbledon tahun 2008. Ia memiliki dan menjalankan sendiri usaha fashion Eleven.<br><br>Di peringkat ke empat dan kelima adalah petenis Belgia yaitu Justine Henin dengan penghasilan 12,5 juta dolar AS. Dan petenis asal Serbia, yaitu Ana Ivanovic dengan penghasilan 6,5 juta dolar AS.<br>\r\n\r\n', 'contoh1.jpg', 20, '2011-08-20', 'A110801'),

('B1108002', 'Bandung Lautan Api 1946', 'Berita Umum', 'olahraga,hiburan,sejarah,umum', 'Sukses film Laskar Pelangi dalam memecahkan rekor jumlah penonton memberi pembelajaran bahwa penonton film Indonesia bisa menerima inovasi. Mira Lesmana dari Miles Films yang memproduksi film ini mengatakan, sampai Rabu (12/11), pemutaran Laskar Pelangi di 100 layar bioskop di 25 kota menyedot lebih dari 4,4 juta penonton. Padahal, Kamis kemarin, jumlah kota yang memutar film itu bertambah dengan Padang, Tasikmalaya, dan Ambon. Sebelumnya, Ayat-ayat Cinta ditonton 3,7 juta penonton (Kompas, 26/10).<br><br>Jumlah penonton itu belum termasuk penonton layar tancap untuk menjangkau penonton di daerah yang belum memiliki gedung bioskop.<br><br>Menurut Mira, layar tancap di tiga lokasi di Belitung, tempat cerita berlokasi, menyedot penonton lebih dari 60.000 penonton dan di Bangka sekitar 80.000-an orang. Pemutaran layar tancap juga dilakukan di Rantau (Sumatera Utara) dan akan dilakukan di Natuna, Aceh (enam lokasi), Lombok, serta Papua di Timika, Sorong, dan Jayapura.<br><br>Kabar gembira lainnya, film ini menjadi salah satu film yang terpilih untuk menjadi bagian dari Berlin International Film Festival atau Berlinale 2009. Festival ini adalah sebuah peristiwa budaya terpenting di Jerman yang juga adalah salah satu festival film internasional paling bergengsi di dunia.<br><br>Film Laskar Pelangi diangkat dari novel berjudul sama karya Andrea Hirata. Film ini mengangkat realitas sosial masyarakat Belitung, tentang persahabatan, kegigihan dan harapan, dalam bingkai kemiskinan dan ketimpangan kelas sosial.<br><br>Jumlah penonton dan panjangnya masa pemutaran film sejak 25 September memperlihatkan penonton butuh sesuatu yang baru, yang inovatif, walau yang ditampilkan realitas tidak gemerlap, papar Mira.<br><br>Selama ini, kebanyakan film Indonesia bertema drama cinta, horor, dan komedi, sementara Miles Films dalam empat film terakhirnya menggarap tema realisme sosial-politik.<br><br>Mira mengakui, inovasi itu tidak selalu berhasil secara komersial. Contohnya Gie, juga produksi Miles Films. Meskipun dari sisi kritik film dan kreativitas bagus, tetapi tidak sesukses Laskar Pelangi dalam pemasaran.<br><br>Produksi film ini menghabiskan biaya Rp 9 miliar dan 90 persen dikerjakan di dalam negeri. Sound mixing dengan sistem Dolby dan transfer optis untuk suara belum bisa dikerjakan di dalam negeri, ujar Mira.<br><br>Miles Films dan para investor, antara lain Mizan Publishing, kini bersiap memproduksi lanjutan Laskar Pelangi. Sang Pemimpi adalah bagian novel tetralogi Andrea Hirata. (sumber: kompas.com)<br>\r\n\r\n', 'contoh2.jpg', 25, '2011-08-20', 'A110801')
");

//--------------------------------------------------------------------------------------------------------------------------------------

//==========================================================================================================================================


echo"<hr><h1><a href='index.php'>START --> MEMULAI APLIKASI/REFRESH/F8</a></h1><hr>";

//<input type=button value=Batal onclick=self.history.back()>
//echo "Anda belum mengisikan NAMA<br /><a href=javascript:history.go(-1)><b>Ulangi Lagi</b>";
/*
PAKET500:
-ada login bagi user
-ada transaksi 1 buah
-ada konfirmasi pembayaran via email dsb
-ada berita/artikel
-integrasi fb


*/
?>



