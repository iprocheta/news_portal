-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 02:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`) VALUES
(1, 'About us..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.About us..Some text ');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `location`, `caption`) VALUES
(4, 'photos/220px-Dark_Knight.jpg', 'batman'),
(3, 'photos/the_joker_cartoon.jpg', 'caption'),
(5, 'photos/b4a8066395.jpg', 'flag'),
(6, 'photos/846a3d3e9a.jpg', 'pp'),
(7, 'photos/51ba9d5949.jpg', 'culture'),
(8, 'photos/e832efbf56.jpg', 'yyhj'),
(9, 'photos/b49653e094.jpg', 'jjkkj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `address` text NOT NULL,
  `about` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`admin_id`, `admin_name`, `email`, `username`, `password`, `address`, `about`, `mobile`, `role_id`) VALUES
(1, 'Farhana Tazmim Pinki', 'farhana.kucse@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Aparajita hall , rOOM : 437\r\nKU', 'hi i''m Farhana', '01746373966', 1),
(2, 'Nipa Khatun', 'nipakhatun130208@gmail.com', 'nipa', '5cd41af346d5b494e1be90c488685ea7', 'Aparajita hall ku', '', '01833914541', 2),
(3, 'Procheta Nag', 'prothomap@gmail.com', 'Pro', 'e1cb35207fd8e4f4af038c54d32fca0b', 'aparajita hall,room: 301\r\nKU', '', '01746373966', 2),
(4, 'Rahim Uddin', 'rahim@g.com', 'rahim', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', 2),
(9, 'sohel rana', 'sohel@gmail.com', 'sohel', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', 2),
(10, 'nipa khatun', 'nipakhatun130208@gmail.com', 'nipa130208', 'accd7ab206391c34b874fcb07760f5b7', '', '', '', 3),
(11, 'Shaon Irfan', 'shaonirfan@gmail.com', 'shaon', '1cae40f6ac2301c2d790534d97076396', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application`
--

CREATE TABLE `tbl_application` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `msg` text NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_application`
--

INSERT INTO `tbl_application` (`id`, `fname`, `lname`, `email`, `about`, `msg`, `cv`) VALUES
(2, 'Rahim', 'Uddin', 'rahim@g.com', 'sdbfjsdhgfsd\r\nsdfbds', 'sdbfhsdhf\r\ndsfbhdsfdss', ''),
(3, 'S. M. Shakir Ahsan', 'Romeo', 'romeo.fbfan@gmail.com', 'ppp', 'mmm', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(2) NOT NULL,
  `cat_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`) VALUES
(1, 'Others'),
(2, 'sports'),
(3, 'Education'),
(4, 'Cultural '),
(5, 'Research'),
(6, 'Academic '),
(7, 'Blood Donation Program');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `fname`, `lname`, `email`, `msg`, `flag`) VALUES
(6, 'zakaria', 'ahammed', 'provincialkid@gmail.com', 'hi i''m zakaria fro khajura', 1),
(7, 'zakaria', 'ahammed', 'provincialkid@gmail.com', 'hi i''m zakaria fro khajura', 1),
(8, 'Rahim', 'Uddin', 'pk@gmail.com', 'hi, blogger i''m rahim', 1),
(10, 'Rahim', 'Uddin', 'pk@gmail.com', 'hi, blogger i''m rahim\r\nhi, blogger i''m rahim\r\nhi, blogger i''m rahim\r\nhi, blogger i''m rahim\r\nhi, blogger i''m rahim', 1),
(11, 'Jamal', 'uddin', 'jamal@gmail.com', 'Hi I am a memeber of news portal', 1),
(12, 'Rahim', 'uddin', 'rahim@gmail.com', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `id` int(11) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`id`, `note`) VALUES
(1, 'Khulna University');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `id` int(11) NOT NULL,
  `send_to` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`id`, `send_to`, `sender`, `subject`, `msg`) VALUES
(1, 'biswajit@gmail.com', 'From: provincialkid@gmail.com', 'jdsfkjf', 'dsfhkjsd sjdfhjsd\r\nsdfjhdsjf ssdhfs'),
(2, 'pk@gmail.com', 'From: shaonirfan@gmail.com', 'jhjjkkj', 'uiuii'),
(3, 'pk@gmail.com', 'From: shaonirfan@gmail.com', 'jhjjkkj', 'uiuii');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(2) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_id` int(2) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `admin_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `title`, `image`, `body`, `date`, `cat_id`, `tag`, `admin_id`) VALUES
(2, 'Admission test 2015-2016', 'upload/74662c243a.jpg\r\n', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2016-09-10 12:08:20', 6, 'academic', 2),
(4, 'Cultural Information', 'upload/de5a82cc9d.jpg', '<p>Cultural information is going here.Cultural information is going here.Cultural information is going here.Cultural information is going here.Cultural information is going here.Cultural information is going here.Cultural information is going here.Cultural information is going here.Cultural information is going here.Cultural information is going here.</p>\r\n', '2016-09-10 12:05:05', 4, 'cultural', 2),
(7, 'Blood donation ', 'upload/ae47ebf653.png', '<p>ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.ku has a blood donation club &#39;Badhon&#39;.</p>\r\n', '2016-09-10 13:36:37', 1, 'blood', 1),
(8, 'Research Information', 'upload/ae1d39217f.jpg', '<p>Reseach information is here. Reseach information is here.Reseach information is here.Reseach information is here.Reseach information is here.Reseach information is here.Reseach information is here.</p>\r\n', '2016-09-10 13:38:04', 5, 'khulna,dhaka', 3),
(10, 'Academic Information', 'upload/85d1d33af0.jpg', '<p>KU&nbsp; has 3 academic building.They are life scienc school,set school,arts and humanities.KU&nbsp; has 3 academic building.They are life scienc school,set school,arts and humanities.KU&nbsp; has 3 academic building.They are life scienc school,set school,arts and humanities.KU&nbsp; has 3 academic building.They are life scienc school,set school,arts and humanities.KU&nbsp; has 3 academic building.They are life scienc school,set school,arts and humanities.KU&nbsp; has 3 academic building.They are life scienc school,set school,arts and humanities.KU&nbsp; has 3 academic building.They are life scienc school,set school,arts and humanities.</p>\r\n', '2016-09-18 04:12:50', 3, 'Ku News', 1),
(11, 'inter discipline football tournament', 'upload/203fcbbc34.jpg', '<p>Inter discipline football tournament will be held at 22 may 2017. Inter discipline football tournament will be held at 22 may 2017.Inter discipline football tournament will be held at 22 may 2017.Inter discipline football tournament will be held at 22 may 2017.Inter discipline football tournament will be held at 22 may 2017.Inter discipline football tournament will be held at 22 may 2017.Inter discipline football tournament will be held at 22 may 2017.</p>\r\n', '2016-10-12 22:23:47', 2, 'sports', 1),
(12, 'Blood donation programme', 'upload/a7599d138a.jpg', '<p>I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.I am a member of &#39;badhon&#39; of ku.</p>\r\n', '2016-10-14 03:38:15', 1, 'blood', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(2) NOT NULL,
  `role_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Author'),
(3, 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `gp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `fb`, `tw`, `ln`, `gp`) VALUES
(1, 'http://facebok.com', 'http://twitter.com', 'http://linkedin.com', 'http://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(2) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `title_slogan`
--

CREATE TABLE `title_slogan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title_slogan`
--

INSERT INTO `title_slogan` (`id`, `title`, `slogan`) VALUES
(1, 'KU News Portal', 'Welcome To Khulna University News Portal');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `v_id` int(255) NOT NULL,
  `video_name` varchar(50000) NOT NULL,
  `url` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`v_id`, `video_name`, `url`) VALUES
(22, '12054367_1719760808261636_754044077_n.mp4', NULL),
(23, '12487475_1700623150180404_1382468934_n.mp4', NULL),
(24, '', 'https://www.youtube.com/watch?v=Dzb5hCrDyC8'),
(25, '', 'https://www.youtube.com/watch?v=Vrb7f7yCjDo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `tbl_application`
--
ALTER TABLE `tbl_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `tag_id` (`tag`),
  ADD KEY `author_id` (`admin_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `title_slogan`
--
ALTER TABLE `title_slogan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_application`
--
ALTER TABLE `tbl_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `v_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD CONSTRAINT `tbl_admins_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_role` (`role_id`);

--
-- Constraints for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD CONSTRAINT `tbl_post_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tbl_category` (`cat_id`),
  ADD CONSTRAINT `tbl_post_ibfk_3` FOREIGN KEY (`admin_id`) REFERENCES `tbl_admins` (`admin_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
