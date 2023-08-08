-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 06:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogcerpen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cerpen`
--

CREATE TABLE `tb_cerpen` (
  `id_cerpen` int(11) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(500) NOT NULL,
  `excerpt` varchar(100) NOT NULL,
  `isi` varchar(800) NOT NULL,
  `cover` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_cerpen`
--

INSERT INTO `tb_cerpen` (`id_cerpen`, `penulis`, `id_user`, `id_kategori`, `tanggal`, `judul`, `excerpt`, `isi`, `cover`) VALUES
(1, 'Mr. Dell Nolan', 2, 11, '2023-01-05', 'Numquam voluptatum quis esse voluptatibus.', 'Occaecati similique aspernatur omnis odit rem consectetur beatae. Esse quia explicabo exercitationem', 'Maxime aliquid qui et vel doloremque adipisci nulla. Est tempore ex dolores non quia. Quibusdam molestiae et similique qui mollitia aliquid necessitatibus. Rerum quos sunt aut et similique. Occaecati voluptas blanditiis ratione. Rerum molestias repellat quas tenetur occaecati est quasi. Dolor omnis facere et hic voluptatem. Et saepe esse ab sed quia dicta ex quae. Laboriosam aut qui et dolores et vel veniam. Accusantium tempora quo explicabo quia similique. Illum amet nisi est maxime distinctio. Voluptas veritatis dolorem aut tempore corrupti accusantium. Et non enim enim nemo et temporibus. Esse ut eligendi sapiente deserunt ducimus aperiam veniam.', 'cover3.jpg'),
(2, 'Reed Raynor', 1, 9, '2022-11-14', 'Et vero qui est qui accusamus et.', 'Molestiae aut voluptas ducimus et animi reprehenderit. Neque aut modi ratione repellat accusamus omn', 'Veniam maiores dolorum eveniet omnis culpa blanditiis. Autem odit possimus quia quas ut consequatur. Praesentium ut dolore voluptatem dolorem fuga enim non. Magnam sit occaecati beatae quidem voluptas et. Et qui fuga veritatis voluptatem autem velit beatae. Soluta est assumenda architecto quisquam maxime. Nemo consequuntur accusantium placeat. Tempore debitis excepturi animi tempore voluptatem et voluptatum. Laboriosam est et inventore. Quisquam quidem ratione maiores maxime. Labore alias laboriosam quia rem in.', 'cover4.jpg'),
(3, 'Ms. Katlynn Klocko DDS', 1, 3, '2022-05-20', 'Sunt est reiciendis occaecati ipsa consequatur ipsa quas.', 'Dolorem ducimus esse autem magnam ullam eligendi autem. Qui reiciendis commodi velit. Alias molestia', 'Facere quae ipsum et dolorum odio. Atque aut necessitatibus accusamus recusandae. Facere soluta animi repellat officia. Aliquid explicabo consequatur qui dolor. Quasi ut nobis provident rerum autem qui. Aspernatur harum voluptas porro. Totam totam doloremque nesciunt fuga illo possimus voluptas. Repudiandae quia ab hic a doloribus nulla veniam. Eveniet quos odit et sed repudiandae.', 'cover1.jpg'),
(4, 'Miss Theresa Douglas V', 1, 5, '2023-02-25', 'Libero qui animi quod.', 'Repudiandae ab eos ut. Et quo voluptas ipsa quia inventore rerum. Rerum consequatur corporis corpori', 'Numquam sed beatae dolore modi repudiandae ipsum. Et molestias minus impedit dolores. Architecto id accusamus aut recusandae. Ex tenetur aliquam aut qui aut. Et ut dolor aut voluptas labore nam ut. Est ut aperiam vitae. Quisquam blanditiis voluptatibus dolorem non in enim dolorum. Deserunt saepe nesciunt enim repellat deleniti laborum. Voluptatem repellendus mollitia non omnis ducimus.', 'cover2.jpg'),
(5, 'Oma Schmidt', 1, 2, '2021-12-09', 'Blanditiis omnis aperiam nam.', 'Omnis possimus nisi aut velit. Quibusdam debitis nam ea eum perspiciatis dolore excepturi et. Occaec', 'Repudiandae explicabo sit dolore est qui molestiae nostrum. Quam repudiandae eligendi dolor. Cum quis non voluptas non corporis error. Ipsum dolores maiores eum. Dolor libero et voluptas quia aspernatur aut. Quo delectus quibusdam ut quasi et. Quo molestias eveniet quod odit quisquam.', 'cover2.jpg'),
(6, 'Viviane Bode', 1, 5, '2022-06-20', 'Quia tempora corporis consequuntur.', 'Qui necessitatibus voluptas enim a. Debitis qui debitis nam. Vel accusantium temporibus rerum tenetu', 'Odit debitis laborum soluta. Delectus nulla laboriosam ab omnis consequuntur. Error odit quam delectus expedita eum. Tempora tempore aspernatur sit sequi excepturi. Molestiae recusandae temporibus dolorem impedit est. Voluptas ex quia nulla optio ullam. Deleniti ad rem laborum ex. Ex et sit repellendus nihil eveniet quae corporis harum. Unde quod quia quis eos qui eaque. Beatae facilis sunt quia omnis quo ut maiores. Nobis voluptatem neque porro perferendis aut qui. Beatae et inventore est fugit voluptate occaecati.', 'cover2.jpg'),
(7, 'Mrs. Nakia Gulgowski DDS', 1, 7, '2023-03-10', 'Rerum at.', 'Sequi corrupti dolorem molestias nisi est est quia. Ad quam consectetur numquam. Natus esse non qui ', 'Ut voluptate sit facilis ratione. Recusandae et expedita necessitatibus adipisci. Voluptate voluptatibus aliquid debitis adipisci inventore modi. Provident minima eius recusandae perferendis corporis cum enim expedita. Id quidem rerum qui reprehenderit eligendi dicta. Reprehenderit rerum unde et asperiores. Enim molestiae praesentium aut officia. Facilis est eius ut aperiam dicta. Facilis ut unde impedit explicabo sunt sit odit. Nulla suscipit et explicabo eligendi quae. Ipsa unde quasi consectetur quisquam cupiditate. Dolore cupiditate doloremque magnam quia numquam voluptate nihil. Et esse quo soluta vitae libero deserunt. Laborum assumenda esse quidem sed dolor eius in. Veniam deserunt eum sed sequi neque.', 'cover1.jpg'),
(8, 'Clyde Zulauf', 1, 4, '2023-05-22', 'Omnis et qui rem iusto.', 'Mollitia ut officiis qui dolorem. Aut in dicta magnam. Reiciendis libero sit cupiditate quia illo ev', 'Earum delectus vel tempore qui et nam. Rerum et et qui quam. Asperiores maiores est et voluptatibus ipsam sint occaecati. Id tempore labore neque impedit tempore necessitatibus. Dolore consequatur dolor quas dignissimos commodi nemo. Ipsa est ut accusantium provident. Alias quia eos et distinctio. Alias nulla nulla rerum ut repellendus. Quisquam aut est quae odio. Ullam quidem ea qui accusamus iure sit. Dolor maiores quidem praesentium et corrupti qui. Excepturi incidunt voluptatum alias autem cumque. Quas nostrum et illum et.', 'cover7.jpg'),
(9, 'Edison Hand', 1, 9, '2023-06-09', 'Et reiciendis.', 'Ipsa nam voluptatem ea quod vitae consequuntur natus. Atque eum maiores maiores non rerum quam. Susc', 'Optio est sit facilis. Commodi recusandae molestiae veniam exercitationem necessitatibus. Ipsum rerum optio laudantium repellat amet magni. Esse omnis eligendi nobis enim suscipit. Dolor accusamus suscipit quaerat voluptates. Sint sapiente sed sequi aut voluptate eum blanditiis. Deleniti nihil ex sint. Quos perferendis amet dolorem dolore unde veritatis praesentium. Vero sint reprehenderit beatae aperiam ipsum sed cupiditate iste. Est doloremque corrupti est aut eius et velit facilis. Et qui sed impedit eum omnis quaerat nobis.', 'cover3.jpg'),
(10, 'Erwin Gutkowski', 1, 6, '2021-12-28', 'Est veritatis id maxime rem minima voluptatem quia.', 'Aspernatur qui accusamus vel quo dolorem veritatis odio. Fuga aut sit fugit repellendus consequatur ', 'Quam hic est modi repellat voluptatem. Id qui iste quia laboriosam repudiandae velit nihil est. Dolores ut omnis eum est pariatur. Veniam enim maxime blanditiis in. Molestiae quia beatae adipisci ut nemo repudiandae quia. Voluptatem veritatis non in qui corporis inventore. Magnam deleniti nemo omnis quae pariatur sunt. Voluptates quia architecto et consequatur similique ut similique eum. Minus id omnis consequatur nostrum vel sed. Numquam ullam est inventore. Iste est voluptas animi animi nostrum et illo. Officiis sint non illum sed ducimus sit iure. Consequuntur veritatis temporibus sit. Alias maxime deserunt deleniti.', 'cover7.jpg'),
(11, 'Geovanny Pfeffer', 1, 10, '2022-03-05', 'Aut quisquam eum sint totam nisi aut.', 'Et quia exercitationem corrupti dolor vero tempore quisquam. Corrupti voluptate occaecati mollitia a', 'Assumenda dicta ex quo sint debitis esse. Saepe est nesciunt corporis qui. Quisquam sint aut mollitia. Et et dignissimos voluptatem velit nesciunt. Distinctio incidunt sint velit quasi tempora. At fugit vitae consequuntur iusto. Qui harum consequatur est ducimus. Minima voluptatem consectetur delectus modi est est. Est vitae architecto libero nulla vitae vitae. Optio ullam voluptatum assumenda ut sapiente. Veritatis sint molestiae voluptas et id eos tempora. Porro deserunt dolorem aliquam quia vero tenetur ut labore. Et possimus fugit assumenda totam saepe debitis. Recusandae qui pariatur dolor nobis eos.', 'cover7.jpg'),
(12, 'Tyrel Rolfson', 1, 5, '2022-07-23', 'Ab quo sed.', 'Ipsum modi pariatur tempore nisi perferendis. Incidunt quam vitae qui vel reiciendis eveniet eveniet', 'Dolore molestias sint tempore et illum velit sit. Blanditiis voluptatum asperiores quia ad facere assumenda doloremque. Eligendi tempore laborum labore eum neque non. In sed qui illo reiciendis dolore. In a facere consequatur sit quia quod voluptas. Reiciendis nihil aut ut nisi molestiae quibusdam. Alias animi mollitia soluta dignissimos et. Beatae modi pariatur id sapiente hic porro saepe. Animi dicta commodi velit delectus sed qui et. Suscipit odio suscipit omnis.', 'cover2.jpg'),
(13, 'Dr. Timmothy Kris', 2, 6, '2023-01-01', 'Fugiat non iste.', 'Soluta et dolore id. Amet sit qui harum voluptas in labore odio ut. Eveniet harum tempora earum dict', 'Expedita vero deserunt cum tempora sapiente voluptatem veritatis et. Modi voluptas repudiandae a quia aut id. Facere pariatur reiciendis eaque reiciendis. Est qui minima eveniet reprehenderit quidem sint. Dolorum quo odio vel debitis. Vitae saepe magnam dignissimos sint et id aut. Architecto quod nobis atque et dicta amet accusamus. Suscipit officiis qui sunt aspernatur. Eum natus alias quia quod maxime et. Animi suscipit quo dolores alias sequi. Quis exercitationem sint et doloribus dolores asperiores dolorum. Inventore distinctio voluptatem occaecati voluptatem officia aspernatur ut. Officia quis qui est.', 'cover7.jpg'),
(14, 'Kaylah McDermott', 2, 9, '2022-04-09', 'Aut ut et repudiandae nesciunt.', 'Quo consequatur ipsa cum nam et. Non voluptates consequatur corporis consequatur. Quia asperiores co', 'Odio natus molestiae ab quam. Velit quaerat commodi asperiores numquam qui. Rerum sed sed explicabo excepturi rerum accusamus. Numquam ut sint est error possimus. Nisi aut debitis omnis sunt quia voluptatem ex. Laudantium praesentium itaque animi eum amet. Vero et sit magnam molestias quae eum dolor distinctio. Et sed quam ab qui. Voluptates blanditiis aut quos eius porro officiis. Eos et molestiae architecto voluptatem molestiae. Quia repellat ut quasi aliquam earum ipsa dolorum velit. Non ipsum aperiam voluptatem rerum recusandae et cum. Ea alias placeat ab quia debitis repellat. Inventore magni eligendi sint iure harum.', 'cover3.jpg'),
(15, 'Ruby Kozey', 2, 4, '2023-06-20', 'Aperiam nisi asperiores inventore.', 'Enim necessitatibus dolorem eum dolores autem omnis. Soluta nam nemo aut consequuntur. Dolores magni', 'Non et ut doloribus commodi. Distinctio quibusdam tempore et doloremque qui sint voluptatem. Quis expedita deleniti nihil laborum. Aspernatur voluptatem sunt quaerat et voluptate. Ea velit aliquid nihil et debitis non. Officiis veritatis fugit omnis. Quidem maiores similique ut voluptas. Fugit architecto eaque sunt autem iure velit repudiandae.', 'cover1.jpg'),
(16, 'Alessandro Gislason IV', 1, 3, '2022-12-16', 'Cumque quis qui.', 'Sed ducimus necessitatibus nam voluptatem consequuntur ut. Saepe blanditiis et deserunt aliquid poss', 'Modi sed repellat delectus doloremque accusantium quo. Facilis molestiae tempore non deleniti. Illo mollitia eius voluptas inventore. Accusantium est corrupti eaque et qui qui. Qui modi quia enim et officiis repellendus. Consequatur blanditiis vel esse adipisci molestiae voluptate. Laborum est provident enim enim voluptatem doloremque nulla corporis. Culpa ut fuga facere quia sapiente. Esse dolores tenetur libero delectus. Quaerat magni iste eligendi illum aliquid. Voluptates asperiores velit mollitia temporibus sit. Eaque harum et et asperiores rem aspernatur. Iste aliquid harum praesentium veniam voluptatibus. Qui non eos velit. Sunt dolor similique ut et accusamus. Ut aut nihil quia maiores rem et.', 'cover1.jpg'),
(17, 'Dr. Kaela Mitchell', 1, 9, '2023-01-10', 'Dicta consequuntur qui et alias rerum quia enim repellat.', 'A libero sit consequuntur minus excepturi. Quae et accusamus ullam aperiam. Sunt accusamus quis eos ', 'Non velit aut velit blanditiis sint. Qui recusandae quia rerum dolores culpa alias rerum. Dolorem qui consectetur quia sed sed. Animi porro quibusdam rerum consectetur dolores cumque. Quas ut molestias aut. Et libero cupiditate qui deleniti. Provident corporis delectus ipsum. Quia velit nihil at sunt. Nihil aut architecto enim cum reprehenderit similique minus. Est quia sapiente corrupti sed. Hic cumque enim molestias corrupti. Eaque aut maiores quisquam qui sed quos. Quod est maxime ratione ducimus ut voluptatem.', 'cover3.jpg'),
(18, 'Rafael Christiansen', 2, 4, '2021-10-21', 'Quae consequatur iste modi sed natus a nobis.', 'Non ad ad saepe architecto ut nisi. Laudantium est inventore omnis autem. Explicabo voluptas itaque ', 'Assumenda quis sed praesentium rerum sint rerum accusantium. Nemo dolorum unde consequatur error impedit. Adipisci voluptatibus et voluptas ex natus aut ducimus. Suscipit quae dolorem dicta voluptatem sit nihil minus. Non corporis praesentium sed. Voluptas non dolores similique voluptate et suscipit. Quaerat similique iusto vel aliquid laudantium facilis. Ratione quidem quia ea earum quam in. Exercitationem molestias excepturi et in. Aut debitis rerum quibusdam sit magni sit qui numquam. Rerum velit sit qui quasi perferendis ea possimus. Rerum in optio aspernatur porro hic in. Sint adipisci non adipisci. Deserunt omnis quos porro neque magnam maiores facere. Qui dolorem possimus ratione nostrum.', 'cover2.jpg'),
(19, 'Vincenzo Leffler', 1, 7, '2022-01-27', 'Aut accusantium qui reprehenderit maxime doloribus possimus.', 'Quia consequatur aliquid architecto cumque doloribus. Est dolore quaerat labore vel omnis dolores ne', 'Debitis aut ipsum quis voluptate nostrum illum eos aut. Rerum inventore aut esse omnis eligendi fugiat ut numquam. Perferendis porro ut quisquam qui laudantium eum reiciendis. Suscipit ut sed non laboriosam velit. Nihil reprehenderit dolores magni vero eaque sint voluptates provident. Eum ab facilis qui ullam corporis accusantium quae velit. Fugit voluptates dolor sunt nihil rerum ullam molestiae. Asperiores et sit aperiam nesciunt et. Enim inventore ipsa nostrum dolorem. Minima tempore consequatur neque. Laboriosam et consequatur eveniet eum.', 'cover3.jpg'),
(20, 'Vidal Runte', 2, 10, '2022-12-20', 'Magnam soluta labore officiis quos.', 'Officiis consequatur unde rerum debitis. Voluptate omnis cupiditate non dolorem dolorem commodi magn', 'Velit blanditiis ut adipisci magnam vel. Qui iusto qui reprehenderit consequatur porro aspernatur officia. Delectus rerum nulla nulla blanditiis ex eos. Corporis neque quasi est sint magnam minus assumenda qui. Similique at dolorem et error. Natus harum debitis eius odit doloribus cum provident aliquam. Similique cum ut in aliquam fugit quis. Et et eum et accusantium aspernatur et nobis suscipit. Omnis sed qui sed eius. Aut earum eveniet dolores necessitatibus quod et alias. Quo voluptatem at voluptates. Eveniet a accusamus ullam ut ipsa qui. Rerum accusamus iusto a ut ducimus. Sit saepe fugit sequi.', 'cover7.jpg'),
(22, 'Uta', 1, 11, '2023-07-22', 'tes', 'tes', 'tes', 'cover1.jpg'),
(23, 'Ayy', 2, 1, '2023-07-22', 'Judul Horor', 'Cerita horor', 'isi cerita horor', 'cover6.jpg'),
(24, 'Ini Penulis', 2, 8, '2023-07-22', 'Judul Komedi', 'Cerita Komedi', 'isi cerita komedi hahahahahahha', 'cover7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Horor'),
(2, 'Romansa'),
(3, 'Fiksi Ilmiah'),
(4, 'Sejarah'),
(5, 'Detektif'),
(6, 'Inspiratif'),
(7, 'Religi'),
(8, 'Komedi'),
(9, 'Misteri'),
(10, 'Fiksi Realistis'),
(11, 'Fantasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` enum('1','2') NOT NULL DEFAULT '2' COMMENT '1. Administrator, 2. Penulis',
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `password`, `level`, `gambar`) VALUES
(1, 'Ayu', 'ayuagstna@gmail.com', '123456', '2', ''),
(2, 'Wahyu Agustina', 'wahyuagustinanc@gmail.com', '123456', '2', ''),
(3, 'Juang', 'juang@gmail.com', '12345', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cerpen`
--
ALTER TABLE `tb_cerpen`
  ADD PRIMARY KEY (`id_cerpen`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cerpen`
--
ALTER TABLE `tb_cerpen`
  MODIFY `id_cerpen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
