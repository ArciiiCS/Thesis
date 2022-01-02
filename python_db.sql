-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 02:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `python_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `test_table`
--

CREATE TABLE `test_table` (
  `dataA` varchar(999) NOT NULL,
  `dataB` varchar(999) NOT NULL,
  `dataC` varchar(999) NOT NULL,
  `dataD` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_table`
--

INSERT INTO `test_table` (`dataA`, `dataB`, `dataC`, `dataD`) VALUES
('1', '2', '3', '4'),
('sum_sqdfFPR(>F)\nC(Variable_A)5.781002e+024.01.427408e+010.019468\nC(Variable_B)2.923622e-123.09.625094e-141.000000\nC(Variable_A):C(Variable_B)3.542000e+0212.02.915226e+000.159867\nResidual4.050000e+014.0NaNNaN', '', '', ''),
('sum_sqdfFPR(>F)\nC(Variable_A)5.781002e+024.01.427408e+010.019468\nC(Variable_B)2.923622e-123.09.625094e-141.000000\nC(Variable_A):C(Variable_B)3.542000e+0212.02.915226e+000.159867\nResidual4.050000e+014.0NaNNaN', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
