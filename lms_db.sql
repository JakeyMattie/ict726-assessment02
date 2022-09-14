-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 07:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `first_name`, `last_name`) VALUES
(1, 'William', 'Shakespeare'),
(2, 'Charles', 'Dickens'),
(3, 'Fyodor', 'Dostoevsky'),
(4, 'J R R', 'Tolkien'),
(5, 'Leo', 'Tolstoy'),
(6, 'Ernest', 'Hemingway'),
(7, 'Jane', 'Austen'),
(8, 'George', 'Orwell'),
(9, 'John', 'Steinbeck'),
(10, 'Mark', 'Twain'),
(11, 'James', 'Joyce'),
(12, 'C S', 'Lewis'),
(13, 'Alexander', 'Dumas'),
(14, 'Edgar Allan', 'Poe'),
(15, 'F Scott', 'Fitzgerald'),
(16, 'Oscar', 'Wilde'),
(17, 'Kurt', 'Vonnegut'),
(18, 'Franz', 'Kafka'),
(19, 'J K', 'Rowling'),
(20, 'William', 'Faulkner'),
(21, 'Stephen', 'King'),
(22, 'Gabriel Garcia', 'Marqez'),
(23, 'J D', 'Sallinger'),
(24, 'Vladimir', 'Nabokov'),
(25, 'Homer', ''),
(26, 'Victor', 'Hugo'),
(27, 'Charlotte', 'Bronte'),
(28, 'Agatha', 'Christie'),
(29, 'Ayn', 'Rand'),
(30, 'Robert Louis', 'Stevenson'),
(31, 'Virginia', 'Woolf'),
(32, 'Albert', 'Camus'),
(33, 'Douglas', 'Adams'),
(34, 'Thomas', 'Hardy'),
(35, 'Herman', 'Melville'),
(36, 'Dante', 'Alighieri'),
(37, 'Harper', 'Lee'),
(38, 'Joseph', 'Conrad'),
(39, 'Jack', 'Kerouac'),
(40, 'Emily', 'Bronte'),
(41, 'Marcel', 'Proust'),
(42, 'Jules', 'Verne'),
(43, 'W Somerset', 'Maugham'),
(44, 'Roald', 'Dahl'),
(45, 'Phillip', 'Pullman'),
(46, 'Aldous', 'Huxley'),
(47, 'Anton', 'Chekhov'),
(48, 'Jack', 'London'),
(49, 'H G', 'Wells'),
(50, 'Sir Arthur Conan', 'Doyle'),
(51, 'Terry', 'Pratchett'),
(52, 'Ray', 'Bradbury'),
(53, 'Paulo', 'Coelho'),
(54, 'John', 'Milton'),
(55, 'Henry', 'Miller'),
(56, 'Dr Suess', ''),
(57, 'George', 'Eliot'),
(58, 'Jodi', 'Piccoult'),
(59, 'Khaled', 'Hosseini'),
(60, 'Hunter S ', 'Thompson'),
(61, 'John', 'Grisham'),
(62, 'Henry David', 'Thoreau'),
(63, 'Ian', 'McEwan'),
(64, 'Joseph', 'Heller'),
(65, 'Miguel', 'De Cervantes'),
(66, 'Johann Wolfgang', 'Von Goethe'),
(67, 'John', 'Irving'),
(68, 'H P', 'Lovecraft'),
(69, 'Salman', 'Rushdie'),
(70, 'Plato', ''),
(71, 'Issac', 'Asimov'),
(72, 'Thomas', 'Mann'),
(73, 'Nicholas', 'Sparks'),
(74, 'Rudyard', 'Kipling'),
(75, 'Bram', 'Stoker'),
(76, 'Cormac', 'McCarthy'),
(77, 'Sylvia', 'Plath'),
(78, 'Jean Paul', 'Satre'),
(79, 'Jorge Luis', 'Borges'),
(80, 'Orson Scott', 'Card'),
(81, 'Nikolai', 'Gogol'),
(82, 'Honore', 'De Balzac'),
(83, 'Nathaniel', 'Hawthorne'),
(84, 'Graham', 'Greene'),
(85, 'D H', 'Lawrence'),
(86, 'Charles', 'Bukowski'),
(87, 'Friedrich', 'Nietzsche'),
(88, 'Ralph Waldo', 'Emerson'),
(89, 'Toni', 'Morrison'),
(90, 'Margaret', 'Atwood'),
(91, 'Emily', 'Dickinson'),
(92, 'Gustave', 'Flaubert'),
(93, 'Mikhail', 'Bulgakov'),
(94, 'Edith', 'Wharton'),
(95, 'Evelyn', 'Waugh'),
(96, 'Samuel', 'Beckett'),
(97, 'Sidney', 'Sheldon'),
(98, 'William', 'Blake'),
(99, 'Daphne', 'Du Maurier'),
(100, 'Umberto', 'Eco'),
(103, 'Jake', 'Calub'),
(104, 'Coleen ', 'Hoover'),
(105, 'asd', 'asd'),
(106, 'Jenny ', 'Han');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `publish_date` date NOT NULL,
  `genre_id` int(11) NOT NULL,
  `list_price` double NOT NULL,
  `author_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN`, `title`, `publish_date`, `genre_id`, `list_price`, `author_id`, `user_id`) VALUES
('1111111111111', 'jake book ', '2022-09-10', 10, 123.22, 103, 102),
('1111111111111', 'Move book test', '2022-09-08', 14, 52.25, 103, 237),
('1111111111113', 'book by kc 3', '2022-08-31', 13, 25.25, 8, 241),
('1111111111116', 'shelf delete book 1', '2022-09-07', 10, 25.5, 1, 102),
('1111111111117', 'delete shelf book 2', '2022-06-15', 8, 45.55, 19, 102),
('1231231231231', 'Book 550', '2014-08-06', 6, 79.95, 33, 238),
('1231231231231', 'asd', '2022-09-02', 9, 123, 103, 241),
('1231231231232', 'book from add', '2020-04-22', 5, 52.45, 29, 238),
('1231231231233', 'Book from add 2', '2022-06-23', 13, 25.45, 103, 102),
('1231231231234', 'juhi\'s book 1', '2022-09-01', 11, 12.25, 103, 238),
('123456777', 'Book 231', '2022-08-08', 2, 43.5, 28, 238),
('123456778', 'Book 524', '2022-09-05', 1, 42, 33, 238),
('123456779', 'Book 203', '2022-09-06', 4, 55, 27, 238),
('123456787', 'Book 301', '2022-07-05', 14, 55, 29, 102),
('123456788', 'Book 201', '2022-08-10', 5, 55, 35, 102),
('123456789', 'Book 101', '2022-09-03', 3, 45, 2, 102),
('1234567890121', 'Ugly Love', '2022-09-08', 1, 12, 104, 242),
('1234567891234', 'Book from add with user id', '2022-06-17', 10, 25.56, 103, 102),
('2222222222222', '22', '2022-09-11', 10, 22, 103, 102),
('2222222222223', '222', '2022-09-08', 13, 22, 103, 102),
('2222222222224', 'delete from ui 1', '2022-09-01', 10, 22, 29, 102),
('2222222222225', 'delete book from ui 2', '2022-07-08', 1, 222, 12, 102),
('9781534427037', 'To all the boy i\'ve loved before', '2018-04-18', 7, 30, 106, 245),
('9781534427038', 'P.S. I Still Love You', '2019-11-24', 15, 33, 106, 245);

-- --------------------------------------------------------

--
-- Table structure for table `bookcase`
--

CREATE TABLE `bookcase` (
  `bookcase_id` int(11) NOT NULL,
  `bookcase_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookcase`
--

INSERT INTO `bookcase` (`bookcase_id`, `bookcase_name`, `user_id`) VALUES
(1, 'Left Wing Bookcase', 102),
(2, 'Right Wing Bookcase', 102),
(3, 'Staircase Bookcase', 102),
(25, 'bookcase 1', 237),
(26, 'bookcase 2', 237),
(27, 'bookcase 1', 238),
(28, 'bookcase1', 238),
(29, 'bookcase 1', 241),
(30, 'Bedtime', 242),
(31, 'IT', 242),
(32, 'delete bookcase', 102),
(34, 'Self Help Me', 245),
(35, 'Self Help Me 2', 245),
(36, 'asd', 245);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `name`) VALUES
(1, 'Classics'),
(2, 'Tragedy'),
(3, 'Sci-Fi'),
(4, 'Fantasy'),
(5, 'Action and Adventure'),
(6, 'Crime & Mystery'),
(7, 'Romance'),
(8, 'Humor and Satire'),
(9, 'Horror'),
(10, 'Comics'),
(11, 'Biography and Autobiography'),
(12, 'Memoirs'),
(13, 'Cookbooks'),
(14, 'True Stories'),
(15, 'Self Help');

-- --------------------------------------------------------

--
-- Table structure for table `heap`
--

CREATE TABLE `heap` (
  `heap_id` int(11) NOT NULL,
  `ISBN` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heap`
--

INSERT INTO `heap` (`heap_id`, `ISBN`, `user_id`) VALUES
(30, '1231231231231', 102),
(21, '1231231231231', 241),
(56, '1231231231233', 102),
(22, '123456787', 102),
(24, '1234567891234', 102),
(35, '2222222222222', 102),
(36, '2222222222223', 102),
(55, '2222222222224', 102),
(57, '9781534427037', 245);

-- --------------------------------------------------------

--
-- Table structure for table `shelf`
--

CREATE TABLE `shelf` (
  `shelf_id` int(11) NOT NULL,
  `shelf_name` varchar(100) NOT NULL,
  `bookcase_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shelf`
--

INSERT INTO `shelf` (`shelf_id`, `shelf_name`, `bookcase_id`) VALUES
(1, 'left wing shelf#1', 1),
(2, 'left wing shelf#2', 1),
(3, 'right wing shelf#1', 2),
(4, 'right wing shelf#2', 2),
(8, 'shelf 1', 25),
(9, 'shelf 2', 25),
(10, 'shelf 3', 25),
(11, 'shelf 4', 25),
(12, 'bc 1 shelf 1', 27),
(13, 'shelf 1', 28),
(14, 'shelf 2', 28),
(15, 'staircase bc', 3),
(16, 'b1 shelf 1', 29),
(17, '1', 30),
(18, '2', 31),
(22, 'delete shelf 1', 32),
(24, 'dElEtE sHelF 2', 32),
(27, 'Shelf Help Me', 34);

-- --------------------------------------------------------

--
-- Table structure for table `shelf_book`
--

CREATE TABLE `shelf_book` (
  `shelf_id` int(11) NOT NULL,
  `ISBN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shelf_book`
--

INSERT INTO `shelf_book` (`shelf_id`, `ISBN`) VALUES
(1, '1231231231234'),
(1, '123456788'),
(3, '1111111111111'),
(4, '123456789'),
(18, '1234567890121'),
(22, '1111111111116'),
(22, '1111111111117'),
(27, '9781534427038');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`) VALUES
(102, 'jake', 'c8d99c2f7cd5f432c163abcd422672b9f77550bb', 'Jake', 'Jake', 'jake@jake'),
(103, 'admin', 'c8d99c2f7cd5f432c163abcd422672b9f77550bb', 'admin', 'root', 'admin'),
(115, 'aaa', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'a', 'a', 'aa@aa'),
(202, 'jakecalubaa', 'c8d99c2f7cd5f432c163abcd422672b9f77550bb', 'Jake', 'Calub', 'jake'),
(206, 'jakecalubs', 'c8d99c2f7cd5f432c163abcd422672b9f77550bb', 'Jake', 'Calub', 'jake@jake.com'),
(207, 'calubjake', '1ef8d97736e837f10c7647876694da24a1412f62', 'Jake', 'Calub', 'calub@c.com'),
(208, 'asd', 'f10e2821bbbea527ea02200352313bc059445190', 'asd', 'asd', 'asd@asd.c'),
(230, 'jakecalub1', '9470870470ad82c3331eb31c765bdc2081430cff', 'Jake', 'Calub', 'jakecalub@gmail.com'),
(233, 'jakecalub1a', '9470870470ad82c3331eb31c765bdc2081430cff', 'Jake', 'Calub', 'jakecalub@gmail.coma'),
(235, 'jakecalub1as', '9470870470ad82c3331eb31c765bdc2081430cff', 'Jake', 'Calub', 'jakecalub@gmail.comas'),
(236, 'jacob', '4cae342fa43c33bcb59d2243c4daf1aa2dcf9232', 'Jacob', 'Antonio', 'jacob@gmail.com'),
(237, 'peter', '01afb07f45f4e683db616593a34368f5cb930f8c', 'peter', 'de vera', 'peter@gmail.com'),
(238, 'juhi1', 'c17736ac15fe7b675d12eff56ba6208f50dd7cfb', 'juhi', 'juhi', 'juhi@juhi.com'),
(240, 'jake1', '61ee4773fb81d7fc0544c11ad254f90cb28408f5', 'jake', 'jake', 'jake@jake1.com'),
(241, 'kcmar', '4f80a8d1669a99b4c94c03d24c5fc400975a2e70', 'kc marie', 'arce', 'kc@caceres.com'),
(242, 'arcekc', 'bac638493b755cb1f824a2e34b33fcdcb23fb38d', 'KC', 'Arce', 'kcmarie@gmail.com'),
(244, '12345', 'bac638493b755cb1f824a2e34b33fcdcb23fb38d', 'arce', 'kc', 'kcmarie25@gmail.com'),
(245, 'piadcsn', '49efef5f70d47adc2db2eb397fbef5f7bc560e29', 'pia', 'ducusion', 'piadcsn@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`,`user_id`),
  ADD KEY `publisher_id` (`list_price`,`author_id`),
  ADD KEY `publisher_id_2` (`list_price`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `bookcase`
--
ALTER TABLE `bookcase`
  ADD PRIMARY KEY (`bookcase_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `heap`
--
ALTER TABLE `heap`
  ADD PRIMARY KEY (`heap_id`),
  ADD KEY `ISBN` (`ISBN`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `shelf`
--
ALTER TABLE `shelf`
  ADD PRIMARY KEY (`shelf_id`,`bookcase_id`),
  ADD KEY `bookcase_id` (`bookcase_id`);

--
-- Indexes for table `shelf_book`
--
ALTER TABLE `shelf_book`
  ADD PRIMARY KEY (`shelf_id`,`ISBN`),
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `shelf_id` (`shelf_id`,`ISBN`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `bookcase`
--
ALTER TABLE `bookcase`
  MODIFY `bookcase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `heap`
--
ALTER TABLE `heap`
  MODIFY `heap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `shelf`
--
ALTER TABLE `shelf`
  MODIFY `shelf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookcase`
--
ALTER TABLE `bookcase`
  ADD CONSTRAINT `bookcase_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `heap`
--
ALTER TABLE `heap`
  ADD CONSTRAINT `heap_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `heap_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shelf`
--
ALTER TABLE `shelf`
  ADD CONSTRAINT `shelf_ibfk_1` FOREIGN KEY (`bookcase_id`) REFERENCES `bookcase` (`bookcase_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shelf_book`
--
ALTER TABLE `shelf_book`
  ADD CONSTRAINT `shelf_book_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `book` (`ISBN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shelf_book_ibfk_2` FOREIGN KEY (`shelf_id`) REFERENCES `shelf` (`shelf_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
