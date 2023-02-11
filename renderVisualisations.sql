-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 02:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renderVisualisations`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE customers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  date_of_birth DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `financial_income_and_expenses`
--

CREATE TABLE financial_income_and_expenses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  `month` varchar(250) NOT NULL,
  `income` varchar(250) NOT NULL,
  `expenses` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- CREATE DATABASE workflow;

-- USE workflow;

-- CREATE TABLE customers (
  -- id INT AUTO_INCREMENT PRIMARY KEY,
  -- first_name VARCHAR(255) NOT NULL,
  -- last_name VARCHAR(255) NOT NULL,
  -- date_of_birth DATE NOT NULL
-- );

-- CREATE TABLE financial_data (
  -- id INT AUTO_INCREMENT PRIMARY KEY,
  -- customer_id INT NOT NULL,
  -- month VARCHAR(255) NOT NULL,
  -- income DECIMAL(10,2) NOT NULL,
  -- expenses DECIMAL(10,2) NOT NULL,
  -- FOREIGN KEY (customer_id) REFERENCES customers(id)
-- ); 
