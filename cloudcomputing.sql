-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 03:17 PM
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
-- Database: `cloudcomputing`
--

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `vlera` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `emri`, `vlera`) VALUES
(1, 'url', 'http://localhost/CloudComputing/'),
(2, 'imgurl', 'http://localhost/CloudComputing/assets/imgs/'),
(3, 'EmriWebit', 'CloudComputing'),
(4, 'email', 'info@doamin.com'),
(5, 'telefoni', '049123456'),
(7, 'FServer', '2,3,5'),
(12, 'Adresa', '08 W 36th St, New York, NY 10001');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `emri` varchar(60) NOT NULL,
  `mbiemri` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `emri`, `mbiemri`, `email`, `message`, `Data`) VALUES
(30, 'Filan', 'Fisteku', 'filan@fisteku.com', 'TEst test tes', '2024-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `faqet`
--

CREATE TABLE `faqet` (
  `id` int(11) NOT NULL,
  `titulli` varchar(30) NOT NULL,
  `permbajtja` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `autori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqet`
--

INSERT INTO `faqet` (`id`, `titulli`, `permbajtja`, `foto`, `Data`, `autori`) VALUES
(1, 'About US', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam sodales tempor. Duis luctus magna lectus, gravida posuere tortor dapibus eu. Pellentesque semper elit nec facilisis interdum. Maecenas in ante at nibh gravida dapibus hendrerit ac lectus. Aenean ut lacinia orci. Donec porttitor lacus sed auctor commodo. Praesent vehicula, nisl rutrum euismod mollis, ante dui volutpat ipsum, ac pretium purus arcu sit amet leo. Pellentesque ut sodales eros.<br><br>\r\n<img class=\"imgpage\" src=\"assets/imgs/banane%201.png\" alt=\"Test\"/><br><br>\r\n\r\nVestibulum dictum aliquam velit, at fringilla leo iaculis vitae. Donec eleifend elit vestibulum, pellentesque sapien sed, ultrices ante. In nec laoreet justo. Sed pretium quam mi, vel gravida velit aliquam eu. Nullam aliquam risus vitae lobortis suscipit. Cras posuere volutpat sapien at lobortis. Vivamus fringilla eros eu lorem pulvinar, vel dictum lorem aliquet. Cras consectetur lacus neque, at consectetur eros rutrum ut. Quisque orci lorem, porta ut volutpat eu, rhoncus quis sapien. Aenean pellentesque quam a fermentum tristique. Donec eu enim ut nibh tempor suscipit ac ut sem. Morbi ex ex, viverra a tellus sed, vulputate varius eros. Aenean rutrum nunc nec cursus elementum. Fusce consectetur ligula eu tincidunt rutrum.<br><br>\r\n\r\nMauris eu tellus vitae diam sodales bibendum. Suspendisse varius, est nec sodales finibus, purus leo ullamcorper tellus, porta volutpat felis eros suscipit ante. Nulla tincidunt dolor ante, a ultricies ipsum tempor eget. Ut efficitur sit amet elit eu aliquet. Suspendisse augue lacus, viverra ut quam eu, aliquam tempus libero. Sed mattis elit vel arcu ultricies sodales. Nunc sed tortor nec nulla accumsan consectetur. Donec a rhoncus diam. Suspendisse varius commodo magna sed aliquam. Sed sit amet convallis libero. Nam in risus vel justo venenatis blandit. Integer at vestibulum mauris, ac venenatis lacus.<br><br>\r\n\r\n<img class=\"imgpage1\" src=\"assets/imgs/banane%201.png\" alt=\"Test\"/><br><br>\r\n\r\nCras dui purus, hendrerit non enim sit amet, faucibus ornare mi. Nullam est lectus, aliquam ac blandit ut, placerat at purus. Ut libero quam, commodo sed lacus faucibus, gravida mollis metus. Fusce fermentum erat eu massa vehicula, non euismod nisl iaculis. Maecenas ac placerat augue, ut rhoncus felis. Etiam feugiat metus orci, nec gravida risus pretium non. Praesent imperdiet aliquet sem, a vulputate enim pretium eget. In lobortis ligula tincidunt, porttitor libero id, imperdiet libero. Sed eu accumsan nisl. Integer luctus egestas est id vulputate. Pellentesque mollis neque eget dui vestibulum volutpat. Praesent in dolor ac orci laoreet cursus et vel velit. Praesent convallis condimentum dui, ac finibus enim ornare at. Cras a sollicitudin massa, non tincidunt neque.<br><br>\r\n\r\nCurabitur lacinia mollis urna cursus commodo. Sed pretium nec purus consequat faucibus. Quisque vulputate at nisi eget vehicula. Phasellus accumsan leo diam, vel suscipit risus cursus eget. In porttitor, est sed pulvinar blandit, arcu mi semper urna, ut consequat ante ante sed eros. Cras vitae molestie ligula. In non porttitor lorem. Aliquam sed massa laoreet, venenatis lorem at, rutrum dui. Mauris vel ornare quam. In hac habitasse platea dictumst. ', 'banane 1.png', '2024-01-30 07:26:16', 'Ndricim');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `vlera` varchar(255) NOT NULL,
  `renditja` int(11) NOT NULL,
  `autori` varchar(255) NOT NULL,
  `Data` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `Emri`, `vlera`, `renditja`, `autori`, `Data`) VALUES
(1, 'Home', 'index.php', 1, 'Ndricim', '2024-01-26 13:08:43'),
(2, 'Servers', 'servers.php', 2, 'Ndricim', '2024-01-26 13:08:39'),
(3, 'News', 'news.php', 3, 'Ndricim', '2024-01-26 13:08:48'),
(4, 'Contact', 'contact.php', 5, 'Ndricim', '2024-01-27 17:21:34'),
(13, 'About US', 'aboutus.php', 4, 'Ndricim', '2024-01-26 13:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `Titulli` varchar(255) NOT NULL,
  `Pershkrimi` text DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `autori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `Titulli`, `Pershkrimi`, `foto`, `Data`, `autori`) VALUES
(2, 'Lajmi 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna fermentum iaculis eu non. Nunc vel risus commodo viverra maecenas. Eget egestas purus viverra accumsan in nisl nisi scelerisque. Nulla aliquet porttitor lacus luctus accumsan. Ultricies mi quis hendrerit dolor magna eget est lorem ipsum. In hac habitasse platea dictumst. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Praesent semper feugiat nibh sed. Commodo ullamcorper a lacus vestibulum sed arcu non.<br><br>\r\n\r\nAc turpis egestas integer eget aliquet nibh praesent. At imperdiet dui accumsan sit. Sed euismod nisi porta lorem mollis aliquam. Pretium vulputate sapien nec sagittis. Diam in arcu cursus euismod quis viverra nibh. Gravida in fermentum et sollicitudin ac orci. Lectus quam id leo in vitae turpis massa sed elementum. Varius morbi enim nunc faucibus a pellentesque. Bibendum enim facilisis gravida neque convallis a. Elit sed vulputate mi sit amet mauris. Tellus orci ac auctor augue. Sed nisi lacus sed viverra tellus in hac.<br><br>\r\n\r\nDui faucibus in ornare quam. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Etiam dignissim diam quis enim. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Dignissim sodales ut eu sem. Et netus et malesuada fames. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Id consectetur purus ut faucibus pulvinar elementum integer enim. Imperdiet nulla malesuada pellentesque elit. Enim facilisis gravida neque convallis a cras semper auctor neque. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Pellentesque dignissim enim sit amet venenatis. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Facilisi nullam vehicula ipsum a arcu cursus. Consequat interdum varius sit amet. Tellus molestie nunc non blandit massa. Dolor morbi non arcu risus quis varius quam quisque. Ultrices neque ornare aenean euismod. Sed lectus vestibulum mattis ullamcorper velit sed.<br><br>\r\n\r\nDiam donec adipiscing tristique risus nec. Nisi lacus sed viverra tellus. Cursus turpis massa tincidunt dui ut ornare. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras. Sed cras ornare arcu dui vivamus arcu felis. Non consectetur a erat nam at lectus urna. Eget velit aliquet sagittis id consectetur purus ut. In hendrerit gravida rutrum quisque non tellus orci. Cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo. Euismod quis viverra nibh cras pulvinar mattis nunc. Lacinia at quis risus sed vulputate odio ut enim blandit. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sit amet nisl purus in mollis nunc. Id consectetur purus ut faucibus pulvinar elementum. Sed euismod nisi porta lorem mollis. Vel turpis nunc eget lorem dolor sed viverra ipsum. Consectetur lorem donec massa sapien faucibus et molestie ac feugiat.<br><br>\r\n\r\nSuspendisse potenti nullam ac tortor. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Commodo elit at imperdiet dui accumsan sit. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Vitae et leo duis ut diam quam nulla porttitor. Erat velit scelerisque in dictum. Sed arcu non odio euismod lacinia at. Sed cras ornare arcu dui vivamus arcu felis. Sagittis vitae et leo duis ut. Tortor condimentum lacinia quis vel eros donec ac odio.', '1.jpg', '2024-01-29 14:16:49', 'Ndricim'),
(3, 'Lajmi 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna fermentum iaculis eu non. Nunc vel risus commodo viverra maecenas. Eget egestas purus viverra accumsan in nisl nisi scelerisque. Nulla aliquet porttitor lacus luctus accumsan. Ultricies mi quis hendrerit dolor magna eget est lorem ipsum. In hac habitasse platea dictumst. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Praesent semper feugiat nibh sed. Commodo ullamcorper a lacus vestibulum sed arcu non.<br><br>\r\n\r\nAc turpis egestas integer eget aliquet nibh praesent. At imperdiet dui accumsan sit. Sed euismod nisi porta lorem mollis aliquam. Pretium vulputate sapien nec sagittis. Diam in arcu cursus euismod quis viverra nibh. Gravida in fermentum et sollicitudin ac orci. Lectus quam id leo in vitae turpis massa sed elementum. Varius morbi enim nunc faucibus a pellentesque. Bibendum enim facilisis gravida neque convallis a. Elit sed vulputate mi sit amet mauris. Tellus orci ac auctor augue. Sed nisi lacus sed viverra tellus in hac.<br><br>\r\n\r\nDui faucibus in ornare quam. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Etiam dignissim diam quis enim. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Dignissim sodales ut eu sem. Et netus et malesuada fames. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Id consectetur purus ut faucibus pulvinar elementum integer enim. Imperdiet nulla malesuada pellentesque elit. Enim facilisis gravida neque convallis a cras semper auctor neque. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Pellentesque dignissim enim sit amet venenatis. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Facilisi nullam vehicula ipsum a arcu cursus. Consequat interdum varius sit amet. Tellus molestie nunc non blandit massa. Dolor morbi non arcu risus quis varius quam quisque. Ultrices neque ornare aenean euismod. Sed lectus vestibulum mattis ullamcorper velit sed.<br><br>\r\n\r\nDiam donec adipiscing tristique risus nec. Nisi lacus sed viverra tellus. Cursus turpis massa tincidunt dui ut ornare. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras. Sed cras ornare arcu dui vivamus arcu felis. Non consectetur a erat nam at lectus urna. Eget velit aliquet sagittis id consectetur purus ut. In hendrerit gravida rutrum quisque non tellus orci. Cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo. Euismod quis viverra nibh cras pulvinar mattis nunc. Lacinia at quis risus sed vulputate odio ut enim blandit. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sit amet nisl purus in mollis nunc. Id consectetur purus ut faucibus pulvinar elementum. Sed euismod nisi porta lorem mollis. Vel turpis nunc eget lorem dolor sed viverra ipsum. Consectetur lorem donec massa sapien faucibus et molestie ac feugiat.<br><br>\r\n\r\nSuspendisse potenti nullam ac tortor. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Commodo elit at imperdiet dui accumsan sit. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Vitae et leo duis ut diam quam nulla porttitor. Erat velit scelerisque in dictum. Sed arcu non odio euismod lacinia at. Sed cras ornare arcu dui vivamus arcu felis. Sagittis vitae et leo duis ut. Tortor condimentum lacinia quis vel eros donec ac odio.', '2.jpg', '2024-01-29 14:16:32', 'Ndricim'),
(4, 'Lajmi 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna fermentum iaculis eu non. Nunc vel risus commodo viverra maecenas. Eget egestas purus viverra accumsan in nisl nisi scelerisque. Nulla aliquet porttitor lacus luctus accumsan. Ultricies mi quis hendrerit dolor magna eget est lorem ipsum. In hac habitasse platea dictumst. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Praesent semper feugiat nibh sed. Commodo ullamcorper a lacus vestibulum sed arcu non.<br><br>\r\n\r\nAc turpis egestas integer eget aliquet nibh praesent. At imperdiet dui accumsan sit. Sed euismod nisi porta lorem mollis aliquam. Pretium vulputate sapien nec sagittis. Diam in arcu cursus euismod quis viverra nibh. Gravida in fermentum et sollicitudin ac orci. Lectus quam id leo in vitae turpis massa sed elementum. Varius morbi enim nunc faucibus a pellentesque. Bibendum enim facilisis gravida neque convallis a. Elit sed vulputate mi sit amet mauris. Tellus orci ac auctor augue. Sed nisi lacus sed viverra tellus in hac.<br><br>\r\n\r\nDui faucibus in ornare quam. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Etiam dignissim diam quis enim. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Dignissim sodales ut eu sem. Et netus et malesuada fames. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Id consectetur purus ut faucibus pulvinar elementum integer enim. Imperdiet nulla malesuada pellentesque elit. Enim facilisis gravida neque convallis a cras semper auctor neque. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Pellentesque dignissim enim sit amet venenatis. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Facilisi nullam vehicula ipsum a arcu cursus. Consequat interdum varius sit amet. Tellus molestie nunc non blandit massa. Dolor morbi non arcu risus quis varius quam quisque. Ultrices neque ornare aenean euismod. Sed lectus vestibulum mattis ullamcorper velit sed.<br><br>\r\n\r\nDiam donec adipiscing tristique risus nec. Nisi lacus sed viverra tellus. Cursus turpis massa tincidunt dui ut ornare. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras. Sed cras ornare arcu dui vivamus arcu felis. Non consectetur a erat nam at lectus urna. Eget velit aliquet sagittis id consectetur purus ut. In hendrerit gravida rutrum quisque non tellus orci. Cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo. Euismod quis viverra nibh cras pulvinar mattis nunc. Lacinia at quis risus sed vulputate odio ut enim blandit. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sit amet nisl purus in mollis nunc. Id consectetur purus ut faucibus pulvinar elementum. Sed euismod nisi porta lorem mollis. Vel turpis nunc eget lorem dolor sed viverra ipsum. Consectetur lorem donec massa sapien faucibus et molestie ac feugiat.<br><br>\r\n\r\nSuspendisse potenti nullam ac tortor. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Commodo elit at imperdiet dui accumsan sit. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Vitae et leo duis ut diam quam nulla porttitor. Erat velit scelerisque in dictum. Sed arcu non odio euismod lacinia at. Sed cras ornare arcu dui vivamus arcu felis. Sagittis vitae et leo duis ut. Tortor condimentum lacinia quis vel eros donec ac odio.', '3.jpg', '2024-01-29 14:16:24', 'Ndricim'),
(5, 'Lajmi 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna fermentum iaculis eu non. Nunc vel risus commodo viverra maecenas. Eget egestas purus viverra accumsan in nisl nisi scelerisque. Nulla aliquet porttitor lacus luctus accumsan. Ultricies mi quis hendrerit dolor magna eget est lorem ipsum. In hac habitasse platea dictumst. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Praesent semper feugiat nibh sed. Commodo ullamcorper a lacus vestibulum sed arcu non.<br><br>\r\n\r\nAc turpis egestas integer eget aliquet nibh praesent. At imperdiet dui accumsan sit. Sed euismod nisi porta lorem mollis aliquam. Pretium vulputate sapien nec sagittis. Diam in arcu cursus euismod quis viverra nibh. Gravida in fermentum et sollicitudin ac orci. Lectus quam id leo in vitae turpis massa sed elementum. Varius morbi enim nunc faucibus a pellentesque. Bibendum enim facilisis gravida neque convallis a. Elit sed vulputate mi sit amet mauris. Tellus orci ac auctor augue. Sed nisi lacus sed viverra tellus in hac.<br><br>\r\n\r\nDui faucibus in ornare quam. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Etiam dignissim diam quis enim. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Dignissim sodales ut eu sem. Et netus et malesuada fames. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Id consectetur purus ut faucibus pulvinar elementum integer enim. Imperdiet nulla malesuada pellentesque elit. Enim facilisis gravida neque convallis a cras semper auctor neque. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Pellentesque dignissim enim sit amet venenatis. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Facilisi nullam vehicula ipsum a arcu cursus. Consequat interdum varius sit amet. Tellus molestie nunc non blandit massa. Dolor morbi non arcu risus quis varius quam quisque. Ultrices neque ornare aenean euismod. Sed lectus vestibulum mattis ullamcorper velit sed.<br><br>\r\n\r\nDiam donec adipiscing tristique risus nec. Nisi lacus sed viverra tellus. Cursus turpis massa tincidunt dui ut ornare. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras. Sed cras ornare arcu dui vivamus arcu felis. Non consectetur a erat nam at lectus urna. Eget velit aliquet sagittis id consectetur purus ut. In hendrerit gravida rutrum quisque non tellus orci. Cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo. Euismod quis viverra nibh cras pulvinar mattis nunc. Lacinia at quis risus sed vulputate odio ut enim blandit. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sit amet nisl purus in mollis nunc. Id consectetur purus ut faucibus pulvinar elementum. Sed euismod nisi porta lorem mollis. Vel turpis nunc eget lorem dolor sed viverra ipsum. Consectetur lorem donec massa sapien faucibus et molestie ac feugiat.<br><br>\r\n\r\nSuspendisse potenti nullam ac tortor. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Commodo elit at imperdiet dui accumsan sit. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Vitae et leo duis ut diam quam nulla porttitor. Erat velit scelerisque in dictum. Sed arcu non odio euismod lacinia at. Sed cras ornare arcu dui vivamus arcu felis. Sagittis vitae et leo duis ut. Tortor condimentum lacinia quis vel eros donec ac odio.', '4.jpg', '2024-01-29 14:16:16', 'Ndricim'),
(6, 'Lajmi 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna fermentum iaculis eu non. Nunc vel risus commodo viverra maecenas. Eget egestas purus viverra accumsan in nisl nisi scelerisque. Nulla aliquet porttitor lacus luctus accumsan. Ultricies mi quis hendrerit dolor magna eget est lorem ipsum. In hac habitasse platea dictumst. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Praesent semper feugiat nibh sed. Commodo ullamcorper a lacus vestibulum sed arcu non.<br><br>\r\n\r\nAc turpis egestas integer eget aliquet nibh praesent. At imperdiet dui accumsan sit. Sed euismod nisi porta lorem mollis aliquam. Pretium vulputate sapien nec sagittis. Diam in arcu cursus euismod quis viverra nibh. Gravida in fermentum et sollicitudin ac orci. Lectus quam id leo in vitae turpis massa sed elementum. Varius morbi enim nunc faucibus a pellentesque. Bibendum enim facilisis gravida neque convallis a. Elit sed vulputate mi sit amet mauris. Tellus orci ac auctor augue. Sed nisi lacus sed viverra tellus in hac.<br><br>\r\n\r\nDui faucibus in ornare quam. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Etiam dignissim diam quis enim. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Dignissim sodales ut eu sem. Et netus et malesuada fames. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Id consectetur purus ut faucibus pulvinar elementum integer enim. Imperdiet nulla malesuada pellentesque elit. Enim facilisis gravida neque convallis a cras semper auctor neque. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Pellentesque dignissim enim sit amet venenatis. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Facilisi nullam vehicula ipsum a arcu cursus. Consequat interdum varius sit amet. Tellus molestie nunc non blandit massa. Dolor morbi non arcu risus quis varius quam quisque. Ultrices neque ornare aenean euismod. Sed lectus vestibulum mattis ullamcorper velit sed.<br><br>\r\n\r\nDiam donec adipiscing tristique risus nec. Nisi lacus sed viverra tellus. Cursus turpis massa tincidunt dui ut ornare. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras. Sed cras ornare arcu dui vivamus arcu felis. Non consectetur a erat nam at lectus urna. Eget velit aliquet sagittis id consectetur purus ut. In hendrerit gravida rutrum quisque non tellus orci. Cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo. Euismod quis viverra nibh cras pulvinar mattis nunc. Lacinia at quis risus sed vulputate odio ut enim blandit. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sit amet nisl purus in mollis nunc. Id consectetur purus ut faucibus pulvinar elementum. Sed euismod nisi porta lorem mollis. Vel turpis nunc eget lorem dolor sed viverra ipsum. Consectetur lorem donec massa sapien faucibus et molestie ac feugiat.<br><br>\r\n\r\nSuspendisse potenti nullam ac tortor. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Commodo elit at imperdiet dui accumsan sit. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Vitae et leo duis ut diam quam nulla porttitor. Erat velit scelerisque in dictum. Sed arcu non odio euismod lacinia at. Sed cras ornare arcu dui vivamus arcu felis. Sagittis vitae et leo duis ut. Tortor condimentum lacinia quis vel eros donec ac odio.', '5.jpg', '2024-01-29 14:16:02', 'Ndricim'),
(7, 'Lajmi 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna fermentum iaculis eu non. Nunc vel risus commodo viverra maecenas. Eget egestas purus viverra accumsan in nisl nisi scelerisque. Nulla aliquet porttitor lacus luctus accumsan. Ultricies mi quis hendrerit dolor magna eget est lorem ipsum. In hac habitasse platea dictumst. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Praesent semper feugiat nibh sed. Commodo ullamcorper a lacus vestibulum sed arcu non.<br><br>\r\n\r\nAc turpis egestas integer eget aliquet nibh praesent. At imperdiet dui accumsan sit. Sed euismod nisi porta lorem mollis aliquam. Pretium vulputate sapien nec sagittis. Diam in arcu cursus euismod quis viverra nibh. Gravida in fermentum et sollicitudin ac orci. Lectus quam id leo in vitae turpis massa sed elementum. Varius morbi enim nunc faucibus a pellentesque. Bibendum enim facilisis gravida neque convallis a. Elit sed vulputate mi sit amet mauris. Tellus orci ac auctor augue. Sed nisi lacus sed viverra tellus in hac.<br><br>\r\n\r\nDui faucibus in ornare quam. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Etiam dignissim diam quis enim. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Dignissim sodales ut eu sem. Et netus et malesuada fames. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Id consectetur purus ut faucibus pulvinar elementum integer enim. Imperdiet nulla malesuada pellentesque elit. Enim facilisis gravida neque convallis a cras semper auctor neque. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Pellentesque dignissim enim sit amet venenatis. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Facilisi nullam vehicula ipsum a arcu cursus. Consequat interdum varius sit amet. Tellus molestie nunc non blandit massa. Dolor morbi non arcu risus quis varius quam quisque. Ultrices neque ornare aenean euismod. Sed lectus vestibulum mattis ullamcorper velit sed.<br><br>\r\n\r\nDiam donec adipiscing tristique risus nec. Nisi lacus sed viverra tellus. Cursus turpis massa tincidunt dui ut ornare. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras. Sed cras ornare arcu dui vivamus arcu felis. Non consectetur a erat nam at lectus urna. Eget velit aliquet sagittis id consectetur purus ut. In hendrerit gravida rutrum quisque non tellus orci. Cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo. Euismod quis viverra nibh cras pulvinar mattis nunc. Lacinia at quis risus sed vulputate odio ut enim blandit. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sit amet nisl purus in mollis nunc. Id consectetur purus ut faucibus pulvinar elementum. Sed euismod nisi porta lorem mollis. Vel turpis nunc eget lorem dolor sed viverra ipsum. Consectetur lorem donec massa sapien faucibus et molestie ac feugiat.<br><br>\r\n\r\nSuspendisse potenti nullam ac tortor. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Commodo elit at imperdiet dui accumsan sit. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Vitae et leo duis ut diam quam nulla porttitor. Erat velit scelerisque in dictum. Sed arcu non odio euismod lacinia at. Sed cras ornare arcu dui vivamus arcu felis. Sagittis vitae et leo duis ut. Tortor condimentum lacinia quis vel eros donec ac odio.', '6.jpg', '2024-01-29 14:15:19', 'Ndricim'),
(25, 'Asd29 30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna fermentum iaculis eu non. Nunc vel risus commodo viverra maecenas. Eget egestas purus viverra accumsan in nisl nisi scelerisque. Nulla aliquet porttitor lacus luctus accumsan. Ultricies mi quis hendrerit dolor magna eget est lorem ipsum. In hac habitasse platea dictumst. Commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Praesent semper feugiat nibh sed. Commodo ullamcorper a lacus vestibulum sed arcu non.<br><br>\r\n\r\nAc turpis egestas integer eget aliquet nibh praesent. At imperdiet dui accumsan sit. Sed euismod nisi porta lorem mollis aliquam. Pretium vulputate sapien nec sagittis. Diam in arcu cursus euismod quis viverra nibh. Gravida in fermentum et sollicitudin ac orci. Lectus quam id leo in vitae turpis massa sed elementum. Varius morbi enim nunc faucibus a pellentesque. Bibendum enim facilisis gravida neque convallis a. Elit sed vulputate mi sit amet mauris. Tellus orci ac auctor augue. Sed nisi lacus sed viverra tellus in hac.<br><br>\r\n\r\nDui faucibus in ornare quam. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Etiam dignissim diam quis enim. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Dignissim sodales ut eu sem. Et netus et malesuada fames. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Id consectetur purus ut faucibus pulvinar elementum integer enim. Imperdiet nulla malesuada pellentesque elit. Enim facilisis gravida neque convallis a cras semper auctor neque. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Pellentesque dignissim enim sit amet venenatis. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Facilisi nullam vehicula ipsum a arcu cursus. Consequat interdum varius sit amet. Tellus molestie nunc non blandit massa. Dolor morbi non arcu risus quis varius quam quisque. Ultrices neque ornare aenean euismod. Sed lectus vestibulum mattis ullamcorper velit sed.<br><br>\r\n\r\nDiam donec adipiscing tristique risus nec. Nisi lacus sed viverra tellus. Cursus turpis massa tincidunt dui ut ornare. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras. Sed cras ornare arcu dui vivamus arcu felis. Non consectetur a erat nam at lectus urna. Eget velit aliquet sagittis id consectetur purus ut. In hendrerit gravida rutrum quisque non tellus orci. Cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo. Euismod quis viverra nibh cras pulvinar mattis nunc. Lacinia at quis risus sed vulputate odio ut enim blandit. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sit amet nisl purus in mollis nunc. Id consectetur purus ut faucibus pulvinar elementum. Sed euismod nisi porta lorem mollis. Vel turpis nunc eget lorem dolor sed viverra ipsum. Consectetur lorem donec massa sapien faucibus et molestie ac feugiat.<br><br>\r\n\r\nSuspendisse potenti nullam ac tortor. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Commodo elit at imperdiet dui accumsan sit. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Vitae et leo duis ut diam quam nulla porttitor. Erat velit scelerisque in dictum. Sed arcu non odio euismod lacinia at. Sed cras ornare arcu dui vivamus arcu felis. Sagittis vitae et leo duis ut. Tortor condimentum lacinia quis vel eros donec ac odio.', 'banane 1.png', '2024-01-30 07:20:53', 'Ndricim');

-- --------------------------------------------------------

--
-- Table structure for table `porosit`
--

CREATE TABLE `porosit` (
  `id` int(11) NOT NULL,
  `id_useri` int(11) NOT NULL,
  `id_server` int(11) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `porosit`
--

INSERT INTO `porosit` (`id`, `id_useri`, `id_server`, `Data`) VALUES
(1, 17, 1, '2024-01-30 13:03:26'),
(2, 17, 2, '2024-01-30 13:03:28'),
(3, 17, 2, '2024-01-30 13:03:30'),
(4, 17, 6, '2024-01-30 13:03:32'),
(5, 17, 3, '2024-01-30 13:03:34'),
(6, 27, 3, '2024-01-30 13:03:48'),
(7, 27, 2, '2024-01-30 13:03:51'),
(8, 27, 5, '2024-01-30 13:03:52'),
(9, 27, 1, '2024-01-30 13:03:53'),
(10, 27, 6, '2024-01-30 13:03:54'),
(11, 27, 2, '2024-01-30 13:03:57'),
(12, 27, 3, '2024-01-30 13:04:20'),
(13, 27, 3, '2024-01-30 13:04:35'),
(14, 17, 2, '2024-01-30 14:13:21');

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `id` int(11) NOT NULL,
  `Titulli` varchar(255) NOT NULL,
  `Pershkrimi` text DEFAULT NULL,
  `Data` date NOT NULL,
  `Cmimi` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `autori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`id`, `Titulli`, `Pershkrimi`, `Data`, `Cmimi`, `foto`, `autori`) VALUES
(1, 'VPS2', '<b>Processor</b></br>\r\nIntel Xeon D1520 - 4c/8t - 2.2 GHz/2.6 GHz</br>\r\n<b>Memory</b></br>\r\n32GB DDR4 ECC 2133MHz</br>\r\n<b>Storage</b></br>\r\n2× 480GB SSD SATA Soft RAID', '2024-01-22', '123', 'icon1.png', 'Ndricim'),
(2, 'VPS', '<b>Processor</b></br>\r\nIntel Xeon D1520 - 4c/8t - 2.2 GHz/2.6 GHz</br>\r\n<b>Memory</b></br>\r\n32GB DDR4 ECC 2133MHz</br>\r\n<b>Storage</b></br>\r\n2× 480GB SSD SATA Soft RAID', '2024-01-22', '33', 'icon2.png', 'Ndricim'),
(3, 'Dedicated', '<b>Processor</b></br>\r\nIntel Xeon D1520 - 4c/8t - 2.2 GHz/2.6 GHz</br>\r\n<b>Memory</b></br>\r\n32GB DDR4 ECC 2133MHz</br>\r\n<b>Storage</b></br>\r\n2× 480GB SSD SATA Soft RAID', '2024-01-22', '33', 'icon3.png', 'Ndricim'),
(4, 'Dedicated', '<b>Processor</b></br>\r\nIntel Xeon D1520 - 4c/8t - 2.2 GHz/2.6 GHz</br>\r\n<b>Memory</b></br>\r\n32GB DDR4 ECC 2133MHz</br>\r\n<b>Storage</b></br>\r\n2× 480GB SSD SATA Soft RAID', '2024-01-22', '33', 'icon1.png', 'Ndricim'),
(5, 'Dedicated Server', '<b>Processor</b></br>\r\nIntel Xeon D1520 - 4c/8t - 2.2 GHz/2.6 GHz</br>\r\n<b>Memory</b></br>\r\n32GB DDR4 ECC 2133MHz</br>\r\n<b>Storage</b></br>\r\n2× 480GB SSD SATA Soft RAID', '2024-01-22', '22.99', 'icon2.png', 'Ndricim'),
(6, 'Shared Hosting', '<b>Processor</b></br>\r\nIntel Xeon D1520 - 4c/8t - 2.2 GHz/2.6 GHz</br>\r\n<b>Memory</b></br>\r\n32GB DDR4 ECC 2133MHz</br>\r\n<b>Storage</b></br>\r\n2× 480GB SSD SATA Soft RAID', '2024-01-22', '12.99', 'icon3.png', 'Ndricim');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `mbiemri` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `kycja` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emri`, `mbiemri`, `username`, `password`, `email`, `role`, `kycja`) VALUES
(4, 'Ndricim', 'Veselaj', 'ndricim@veselaj.com', '$2y$10$QL2DFRhmCithFIfxA8Z1We82aaTl8njfLy1z2qKuV/mz9lMRdjDBS', 'ndricim@veselaj.com', 'admin', '2024-01-30 15:15:11'),
(14, 'Valon', 'Rahimaj', 'valon@gmail.com', '$2y$10$QL2DFRhmCithFIfxA8Z1We82aaTl8njfLy1z2qKuV/mz9lMRdjDBS', 'valon@gmail.com', 'admin', ''),
(17, 'Ndricim', 'Veselaj', 'nv67929@ubt-uni.net', '$2y$10$QL2DFRhmCithFIfxA8Z1We82aaTl8njfLy1z2qKuV/mz9lMRdjDBS', 'nv67929@ubt-uni.net', 'user', '2024-01-30 15:16:35'),
(27, 'Valon', 'Rahimaj', 'vr69556@ubt-uni.net', '$2y$10$QL2DFRhmCithFIfxA8Z1We82aaTl8njfLy1z2qKuV/mz9lMRdjDBS', 'vr69556@ubt-uni.net', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqet`
--
ALTER TABLE `faqet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porosit`
--
ALTER TABLE `porosit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `faqet`
--
ALTER TABLE `faqet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `porosit`
--
ALTER TABLE `porosit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
