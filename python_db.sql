-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 01:33 PM
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
-- Table structure for table `correlationtable`
--

CREATE TABLE `correlationtable` (
  `Pearsons` varchar(999) NOT NULL,
  `Spearmans` varchar(999) NOT NULL,
  `Kendalltau` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `correlationtable`
--

INSERT INTO `correlationtable` (`Pearsons`, `Spearmans`, `Kendalltau`) VALUES
('(0.758640289091187, 0.010964341301680813)', 'SpearmanrResult(correlation=0.9757575757575757, pvalue=1.4675461874042197e-06)', 'KendalltauResult(correlation=0.911111111111111, pvalue=2.9761904761904762e-05)'),
('(0.758640289091187, 0.010964341301680813)', 'SpearmanrResult(correlation=0.9757575757575757, pvalue=1.4675461874042197e-06)', 'KendalltauResult(correlation=0.911111111111111, pvalue=2.9761904761904762e-05)'),
('(0.758640289091187, 0.010964341301680813)', 'SpearmanrResult(correlation=0.9757575757575757, pvalue=1.4675461874042197e-06)', 'KendalltauResult(correlation=0.911111111111111, pvalue=2.9761904761904762e-05)'),
('(0.758640289091187, 0.010964341301680813)', 'SpearmanrResult(correlation=0.9757575757575757, pvalue=1.4675461874042197e-06)', 'KendalltauResult(correlation=0.911111111111111, pvalue=2.9761904761904762e-05)'),
('(0.758640289091187, 0.010964341301680813)', 'SpearmanrResult(correlation=0.9757575757575757, pvalue=1.4675461874042197e-06)', 'KendalltauResult(correlation=0.911111111111111, pvalue=2.9761904761904762e-05)'),
('(0.758640289091187, 0.010964341301680813)', 'SpearmanrResult(correlation=0.9757575757575757, pvalue=1.4675461874042197e-06)', 'KendalltauResult(correlation=0.911111111111111, pvalue=2.9761904761904762e-05)'),
('(-0.2774806370152767, 0.2809036581109161)', 'SpearmanrResult(correlation=-0.30637254901960786, pvalue=0.23168960494057989)', 'KendalltauResult(correlation=-0.20588235294117643, pvalue=0.27056053596407176)'),
('(-0.2774806370152767, 0.2809036581109161)', 'SpearmanrResult(correlation=-0.30637254901960786, pvalue=0.23168960494057989)', 'KendalltauResult(correlation=-0.20588235294117643, pvalue=0.27056053596407176)'),
('(0.7289150091421902, 0.10026998724554789)', 'SpearmanrResult(correlation=0.8285714285714287, pvalue=0.04156268221574334)', 'KendalltauResult(correlation=0.7333333333333333, pvalue=0.05555555555555555)');

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
('sum_sqdfFPR(>F)\nC(Variable_A)5.781002e+024.01.427408e+010.019468\nC(Variable_B)2.923622e-123.09.625094e-141.000000\nC(Variable_A):C(Variable_B)3.542000e+0212.02.915226e+000.159867\nResidual4.050000e+014.0NaNNaN', '', '', ''),
('sum_sqdfFPR(>F)\nC(Variable_A)5.781002e+024.01.427408e+010.019468\nC(Variable_B)2.923622e-123.09.625094e-141.000000\nC(Variable_A):C(Variable_B)3.542000e+0212.02.915226e+000.159867\nResidual4.050000e+014.0NaNNaN', '', '', ''),
('', '', '', ''),
('sum_sqdfFPR(>F)\nC(Variable_A)1.849114e+083.00.2797920.773719\nC(Variable_B)NaN1.0NaNNaN\nC(Variable_A):C(Variable_B)8.952696e+083.01.3546430.380898\nResidual6.608897e+083.0NaNNaN', '', '', ''),
('sum_sqdfFPR(>F)\nC(Variable_A)5.571926e+084.07.808452e-010.426796\nC(Variable_B)-1.263022e-053.0-2.359986e-141.000000\nC(Variable_A):C(Variable_B)2.665977e+0912.01.245360e+000.434659\nResidual7.135762e+084.0NaNNaN', '', '', ''),
('sum_sqdfFPR(>F)\nC(Variable_A)5.781002e+024.01.427408e+010.019468\nC(Variable_B)2.923622e-123.09.625094e-141.000000\nC(Variable_A):C(Variable_B)3.542000e+0212.02.915226e+000.159867\nResidual4.050000e+014.0NaNNaN', '', '', ''),
('sum_sqdfFPR(>F)\nC(Variable_A)5.781002e+024.01.427408e+010.019468\nC(Variable_B)2.923622e-123.09.625094e-141.000000\nC(Variable_A):C(Variable_B)3.542000e+0212.02.915226e+000.159867\nResidual4.050000e+014.0NaNNaN', '', '', ''),
('sum_sqdfFPR(>F)\nC(Variable_A)1.849114e+083.00.2797920.773719\nC(Variable_B)NaN1.0NaNNaN\nC(Variable_A):C(Variable_B)8.952696e+083.01.3546430.380898\nResidual6.608897e+083.0NaNNaN', '', '', ''),
('', '', '', ''),
('(0.758640289091187, 0.010964341301680813)', 'SpearmanrResult(correlation=0.9757575757575757, pvalue=1.4675461874042197e-06)', 'KendalltauResult(correlation=0.911111111111111, pvalue=2.9761904761904762e-05)', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
