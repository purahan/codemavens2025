-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2025 at 07:31 AM
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
-- Database: `labrats`
--

-- --------------------------------------------------------

--
-- Table structure for table `experiments`
--

CREATE TABLE `experiments` (
  `id` int(11) NOT NULL,
  `aim` varchar(255) NOT NULL,
  `video` varchar(20) NOT NULL,
  `doc` text DEFAULT NULL,
  `perform` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experiments`
--

INSERT INTO `experiments` (`id`, `aim`, `video`, `doc`, `perform`) VALUES
(1, 'To investigate and verify Newton’s three laws of motion by studying the relationship between force, mass, and acceleration, and to observe how objects respond to applied forces in different situations.', 'adLj6kygwds', '<dl>\n  <dt class=\"h3\">Aim of the Experiment</dt>\n  <dd>To demonstrate and understand Newton\'s three laws of motion using a simple setup</dd>\n  <dt class=\"h3 mt-5\">Materials Required</dt>\n  <dd>A toy car or a cart with wheels, a ramp (can be made using a wooden plank or a stack of books), a small weight (e.g., a coin or a small block), a string, a balloon, tape, a measuring tape or a ruler, a stopwatch.</dd>\n  <dt class=\"h3\">Procedure</dt>\n  <dd>\n    <dt>Part 1: Newton\'s First Law (Inertia)</dt>\n    <dd>\n        <b>Step I.</b> Place the toy car on a flat, smooth surface.<br />\n        <b>Step II.</b> Observe the car. It is at rest and will remain at rest unless a force is applied. <br />\n        <b>Step III.</b> Give the car a gentle push. It will move in the direction of the push. <br />\n        <b>Step IV.</b> Observe the car as it moves. It will eventually slow down and stop due to the force of friction.\n    </dd>\n    <dt>Part 2: Newton\'s Second Law (Force, Mass, and Acceleration)</dt>\n    <dd>\n        <b>Step I.</b> Set up the ramp at a certain height. <br />\n        <b>Step II.</b> Place the toy car at the top of the ramp and release it.<br />\n        <b>Step III.</b> Use the stopwatch to measure the time it takes for the car to reach the bottom of the ramp.<br />\n        <b>Step IV.</b> Increase the height of the ramp (which increases the force of gravity acting on the car) and repeat the experiment.<br />\n        <b>Step V.</b> Now, add a small weight to the car (increasing its mass) and release it from the same height as in step 2.<br />\n        <b>Step VI.</b> Measure the time it takes for the car to reach the bottom of the ramp.<br />\n    <dt>Part 3: Newton\'s Third Law (Action and Reaction)</dt>\n    <dd>\n        <b>Step I.</b> Inflate the balloon and hold the opening closed.<br />\n        <b>Step II.</b> Tape the balloon to the top of the toy car.<br />\n        <b>Step III.</b> Place the car on a flat, smooth surface.<br />\n        <b>Step IV.</b> Release the opening of the balloon.<br />\n        <b>Step V.</b> Observe the motion of the car.<br />\n    </dd>\n  </dd>\n  <dt class=\"h3\">Result</dt>\n  <dd>\n    <b>Part-1: </b>The toy car remains at rest until a force is applied to it, and it slows down due to friction.<br />\n    <b>Part 2: </b>When the height of the ramp is increased, the car accelerates faster. When the mass of the car is increased, it accelerates more slowly for the same force.\n    <b>Part 3: </b>As the air rushes out of the balloon in one direction (action), the car moves in the opposite direction (reaction).\n  </dd>\n</dl>', '1216736645'),
(2, 'To study the properties and behavior of magnets, the nature of magnetic fields, and the interaction between magnetic forces and materials, in order to understand the principles of magnetism and its practical applications.', 'yXCeuSiTOug', NULL, '1216738974'),
(3, 'To study the structure and functioning of the circulatory system, and to observe how blood circulates through the heart, arteries, veins, and capillaries to transport nutrients, oxygen, and waste products throughout the body.\r\n', '_vZ0lefPg_0', NULL, '1216745627'),
(4, 'To observe and study the structure, components, and organization of plant and animal cells under a microscope, and to identify the key organelles involved in cellular functions.', '6mgkoqcm6Sg', NULL, '1216748082'),
(5, 'To study the structure, types, and functions of human muscles, and to observe how muscles contract and relax to facilitate movement and support the body\'s activities', 'dpxalWACO7k', NULL, '1216745784'),
(6, 'To study the flow of electric current through a circuit, and to investigate how factors such as voltage, resistance, and the type of conductor affect the magnitude of the current.', '8Posj4WMo0o', NULL, '1216742847'),
(7, 'To investigate and compare the characteristics of circular motion and simple harmonic motion by studying the forces, acceleration, period, and energy involved in each, and to understand the similarities and differences in their motion patterns.', 'jxstE6A_CYQ', NULL, '1216736474'),
(8, 'To study the law of universal gravitation by investigating how the gravitational force between two objects depends on their masses and the distance between them, and to understand how this force governs the motion of celestial bodies.', '7gf6YpdvtE0', NULL, '1216733020'),
(9, 'To explore and study various renewable energy sources such as solar, wind, hydro, geothermal, and biomass energy, and to understand their advantages, limitations, environmental impact, and role in sustainable development.', 'Giek094C_l4', NULL, '1216842254'),
(10, 'To study the structure and composition of the Earth\'s internal layers, including the crust, mantle, outer core, and inner core, and to understand their physical properties, thickness, and role in Earth\'s dynamics.', 'eXiVGEEPQ6c', NULL, '1216736075');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answers`
--

CREATE TABLE `quiz_answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `is_correct` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `id` int(11) NOT NULL,
  `experiment_id` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_result`
--

CREATE TABLE `quiz_result` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `experiment_id` int(11) NOT NULL,
  `answers` varchar(100) NOT NULL,
  `correct_answers` int(11) NOT NULL,
  `incorrect_answers` int(11) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `submitted_on` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(34) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `dob` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL DEFAULT 'assets/img/users/default.jpg',
  `created_on` date NOT NULL,
  `modified_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `pwd`, `phone`, `gender`, `dob`, `profile_pic`, `created_on`, `modified_on`) VALUES
(1, 'Purahan Gupta', 'gpurahan@gmail.com', '5d41402abc4b2a76b9719d911017c592', 9779956677, 'm', '2006-11-16', 'assets/img/users/default.jpg', '2021-10-09', '2025-09-15'),
(2, 'sample', 'purahanisgreat@gmail.com', '49f68a5c8493ec2c0bf489821c21fc3b', 1234567890, 'm', '1111-11-16', 'assets/img/users/68c760ed426d8.jpg', '2025-09-15', '2025-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `user_experiments`
--

CREATE TABLE `user_experiments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `experiment_id` int(11) NOT NULL,
  `type` char(1) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_experiments`
--

INSERT INTO `user_experiments` (`id`, `user_id`, `experiment_id`, `type`, `created_on`) VALUES
(1, 1, 1, 'E', '2025-09-15'),
(2, 1, 1, 'V', '2025-09-15'),
(3, 2, 2, 'E', '2025-09-15'),
(4, 2, 3, 'Q', '2025-09-15'),
(5, 2, 1, 'V', '2025-09-15'),
(6, 2, 1, 'E', '2025-09-15'),
(7, 2, 1, 'Q', '2025-09-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `experiments`
--
ALTER TABLE `experiments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_result`
--
ALTER TABLE `quiz_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- Indexes for table `user_experiments`
--
ALTER TABLE `user_experiments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_experiments_unique` (`user_id`,`experiment_id`,`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `experiments`
--
ALTER TABLE `experiments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_result`
--
ALTER TABLE `quiz_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_experiments`
--
ALTER TABLE `user_experiments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
