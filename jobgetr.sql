-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2024 at 01:10 PM
-- Server version: 8.0.40-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobgetr`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issued_date` date DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `user_id`, `name`, `organization`, `issued_date`, `url`, `description`, `created_at`, `updated_at`) VALUES
(1, 41, 'Web Development Certificate', 'Coding Academy', '2022-01-01', 'http://127.0.0.1:8000/create-resume', '<p>Successfully completed an intensive web development program, covering front-end and back-end technologies.</p>', '2024-01-23 05:43:21', '2024-03-04 04:49:37'),
(2, 41, 'Project Management Professional (PMP)', 'Project Management Institute (PMI)', '2022-03-03', 'http://127.0.0.1:8000/create-resume', '<p>Attained the globally recognized Project Management Professional (PMP) certification.</p>', '2024-01-23 05:43:21', '2024-03-04 04:49:37'),
(3, 2, 'sdfgds', 'dsfgd', '2024-01-16', NULL, '<p>dfgs</p>', '2024-01-29 02:38:33', '2024-04-18 18:50:41'),
(6, 3, 'techwork', 'IBM', '2024-02-01', 'https://www.google.com/hello', '<p>Add the name of your certificate, where it is located, what degree you obtained, your field of study, and your graduation year.</p>', '2024-02-05 09:07:34', '2024-02-15 14:03:52'),
(7, 27, 'WorkTech', 'Tech Info', '2024-02-10', 'https://www.google.com/WorkTech', '<p>Certifications are designated credentials earned by an individual&nbsp;to verify their legitimacy and competence to perform a job.&nbsp;</p>', '2024-02-09 08:33:31', '2024-02-09 08:55:05'),
(8, 30, 'Sunt quis in nobis l', 'Dolorem ipsa amet', '1984-03-07', 'Cumque ullam vel est', '<p>Add the name of your school, where it is located, what degree you obtained, your field of study, and your graduation year.</p>', '2024-02-09 09:58:04', '2024-02-09 09:58:04'),
(13, 29, 'Rem ipsum iure quod', 'Distinctio Dolorem', '1988-02-10', 'Quisquam tempor nesc', '<p>sdfgsdfg</p>', '2024-02-09 10:45:17', '2024-02-09 10:45:17'),
(14, 29, 'Ipsum sint esse vel', 'Voluptatem Facilis', '2016-07-01', 'Deleniti proident v', '<p>ssdfgsdfg</p>', '2024-02-09 10:45:17', '2024-02-09 10:45:17'),
(15, 41, 'Project Management Professional (PMP)2', 'Project Management Institute (PMI)', '2024-01-31', NULL, '', '2024-02-09 11:49:02', '2024-03-04 04:49:37'),
(17, 44, 'HDJ', 'KKK', '2024-01-31', NULL, NULL, '2024-02-13 04:49:04', '2024-02-13 04:49:04'),
(18, 46, '1', 'testing1', '2024-02-08', '2', '<p>2</p>', '2024-02-13 06:07:08', '2024-02-13 06:07:08'),
(19, 46, '3', '3', '2024-02-03', '3', '<p>3</p>', '2024-02-13 06:07:08', '2024-02-13 06:07:08'),
(20, 45, 'Officia qui vel assu', 'Incidunt animi lab', '1982-06-09', 'https://jobgetr.daedaltech.online/create-resume', '<p>c</p>', '2024-02-13 06:43:20', '2024-02-13 06:48:40'),
(21, 50, 'Carissa Stephenson', 'Rocha and Gilbert Associates', '1971-06-25', 'Ipsam dolor ad vel a', '<p>a</p>', '2024-02-13 12:30:50', '2024-02-13 12:30:50'),
(26, 51, 'sdfg', 'fgsdfgsdfg', '2024-02-14', 'https://jobgetr.daedaltech.online/create-resume', '<p>a</p>', '2024-02-13 12:49:05', '2024-02-13 13:08:19'),
(28, 57, 'AIBD', 'IUGKBD', '2024-02-01', 'https://jobgetr.daedaltech.online/admin/user-management/create', '<p>ewretbtrd</p>', '2024-02-15 13:30:07', '2024-02-15 13:30:07'),
(29, 58, 'Drew Craig', 'a', '2024-02-15', NULL, '<p>gsdfgsdf</p>', '2024-02-15 14:22:09', '2024-02-19 06:53:57'),
(30, 60, 'pai', 'url', '2022-03-07', NULL, '', '2024-02-15 15:28:05', '2024-02-15 15:28:05'),
(35, 52, 'Ashton Tate', 'Stokes and Finley Plc', '2009-06-28', NULL, NULL, '2024-02-19 12:59:40', '2024-02-19 12:59:40'),
(36, 67, 'Laboriosam fugit a', 'Non qui sapiente bea', '1977-11-24', 'https://jobgetr.daedaltech.online/create-resume', '<p>sdfg</p>', '2024-02-23 11:17:34', '2024-02-23 11:20:49'),
(37, 119, 'Voluptatem vel quod', 'Est eligendi culpa', '1977-05-06', 'http://3.88.200.133/create-resume', '<p>dfghjk</p>', '2024-06-14 11:05:21', '2024-06-14 11:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Anshuman', 'Sharma', 'musicw583@gmail.com', 'Activate hosting', 'This is my message...', '2024-03-05 04:57:29', '2024-03-05 04:57:29'),
(2, 'Anshuman', 'Sharma', 'musicw583@gmail.com', 'Renew SSL Certificate', 'This is my message...', '2024-03-05 05:03:38', '2024-03-05 05:03:38'),
(3, 'Holly', 'Solis', 'resume_testing_55@yopmail.com', 'Astra Orr', 'Animi minus a facil', '2024-07-06 04:45:36', '2024-07-06 04:45:36'),
(4, 'Jamal', 'Davenport', 'resume_testing_55@yopmail.com', 'Quon James', 'Explicabo Adipisci', '2024-07-06 04:47:03', '2024-07-06 04:47:03'),
(5, 'Kirsten', 'Gallagher', 'kudexon@mailinator.com', 'Merritt Howell', 'Saepe voluptatem cum', '2024-07-06 04:50:15', '2024-07-06 04:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `contant_management`
--

CREATE TABLE `contant_management` (
  `id` bigint UNSIGNED NOT NULL,
  `personal_details` text COLLATE utf8mb4_unicode_ci,
  `contact_information` text COLLATE utf8mb4_unicode_ci,
  `professional_summary` text COLLATE utf8mb4_unicode_ci,
  `employment_history` text COLLATE utf8mb4_unicode_ci,
  `education` text COLLATE utf8mb4_unicode_ci,
  `skills` text COLLATE utf8mb4_unicode_ci,
  `internships` text COLLATE utf8mb4_unicode_ci,
  `certificate` text COLLATE utf8mb4_unicode_ci,
  `courses` text COLLATE utf8mb4_unicode_ci,
  `references` text COLLATE utf8mb4_unicode_ci,
  `links` text COLLATE utf8mb4_unicode_ci,
  `languages` text COLLATE utf8mb4_unicode_ci,
  `hobbies` text COLLATE utf8mb4_unicode_ci,
  `custom_section` text COLLATE utf8mb4_unicode_ci,
  `additional_section` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contant_management`
--

INSERT INTO `contant_management` (`id`, `personal_details`, `contact_information`, `professional_summary`, `employment_history`, `education`, `skills`, `internships`, `certificate`, `courses`, `references`, `links`, `languages`, `hobbies`, `custom_section`, `additional_section`, `created_at`, `updated_at`) VALUES
(1, 'Personal details such as name and job title are essential in a resume to give the recruiter a quick overview of the candidate.', 'Including your contacts in your resume is crucial so potential employers can easily get in touch with you.', 'Include your professional title, years of experience, and your most impressive achievements. Each achievement should be measurable and expressed in numbers.', 'Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.', 'Add the name of your school, where it is located, what degree you obtained, your field of study, and your graduation year.', 'Highlight your most important and applicable professional skills.', 'Internships test', 'Add the name of your certificate, where it is located, what degree you obtained, your field of study, and your graduation year.', NULL, NULL, 'Add relevant links: personal website, socials, LinkedIn profile, etc.', NULL, 'Showcase your passion and highlight your achievements, such as special projects completed, unique skills developed, or notable experiences gained.', 'You can add anything you want in the custom section.', 'You should only add resume categories if they are relevant and you can list a few things in each section. Pick the most impactful categories first.', '2024-02-23 10:45:04', '2024-04-29 12:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_currently_pursuing_course` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `user_id`, `institution`, `course`, `start_date`, `end_date`, `is_currently_pursuing_course`, `created_at`, `updated_at`) VALUES
(1, 41, 'University of Science and Technology', 'Bachelor of Science in Computer Science', '2016-03-03', '2019-01-29', 0, '2024-01-23 05:45:10', '2024-03-04 04:49:38'),
(2, 41, 'Language Institute', 'Advanced Spanish Language Course', '2019-03-06', '2020-01-28', 0, '2024-01-23 05:45:10', '2024-03-04 04:49:38'),
(9, 3, 'Jaipur Institution', 'Typing', '2024-02-05', NULL, 0, '2024-02-09 05:47:35', '2024-02-15 14:04:03'),
(10, 3, 'World makers', 'Hackings', '2024-02-06', '2024-02-06', 0, '2024-02-09 05:47:35', '2024-02-15 14:04:03'),
(11, 3, 'fighting club', 'kho', '2024-02-01', '2024-02-10', 0, '2024-02-09 05:47:35', '2024-02-15 14:04:03'),
(12, 27, 'RU', 'Bca', '2023-01-01', NULL, 0, '2024-02-09 08:36:27', '2024-02-09 08:55:06'),
(13, 27, 'Shabod', 'Mca', '2024-01-01', '2024-02-29', 0, '2024-02-09 08:36:27', '2024-02-09 08:55:06'),
(14, 30, 'Id et qui sit pariat', 'Qui esse lorem et v', '2003-07-23', '1999-01-23', 0, '2024-02-09 09:58:14', '2024-02-09 09:58:14'),
(19, 29, 'sdfgsdf', 'sdfgsdfg', '2024-02-10', '2024-02-15', 0, '2024-02-09 10:32:58', '2024-02-09 10:44:56'),
(20, 41, 'YYUD', 'BBC', '2024-01-29', '2024-02-08', 0, '2024-02-09 11:49:21', '2024-03-04 04:49:38'),
(23, 44, 'HDJ', 'IREO', '2024-01-30', '2024-02-06', 0, '2024-02-13 04:49:43', '2024-02-13 04:49:43'),
(24, 46, '1', '1', '2024-02-01', '2024-02-01', 0, '2024-02-13 06:07:35', '2024-02-13 06:07:35'),
(25, 46, '2', '2', '2024-02-01', '2024-02-01', 0, '2024-02-13 06:07:35', '2024-02-13 06:07:35'),
(26, 45, 'Nulla et recusandae', 'Minima laudantium v', '2024-02-12', '2024-02-13', 0, '2024-02-13 06:43:35', '2024-02-13 06:48:41'),
(27, 50, 'Ut ipsum aliquam no', 'Facilis temporibus n', '1996-02-17', '1984-05-26', 0, '2024-02-13 12:30:50', '2024-02-13 12:30:50'),
(30, 51, 'Deleniti sit necess', 'Labore sed nulla des', '2021-01-25', '1972-11-25', 0, '2024-02-13 12:46:52', '2024-02-13 13:08:21'),
(31, 51, 'Iure excepteur aliqu', 'Minus aut nulla dolo', '2014-07-02', '1972-01-26', 0, '2024-02-13 12:46:52', '2024-02-13 13:08:21'),
(32, 51, 's', 's', '2024-01-31', '2024-02-09', 0, '2024-02-13 12:46:52', '2024-02-13 13:08:21'),
(37, 58, 'Impedit ut exceptur', 'testing', '2024-02-15', NULL, 1, '2024-02-15 14:22:09', '2024-02-19 06:54:00'),
(38, 60, 'JSSSM', 'Newwalik', '2024-02-15', NULL, 0, '2024-02-15 15:20:38', '2024-02-15 15:23:58'),
(39, 60, 'hhjs', 'msc', '2024-02-15', '2024-02-15', 0, '2024-02-15 15:20:38', '2024-02-15 15:23:58'),
(42, 52, 'Dolor eos cum tempor', 'Sit enim eum dolore', '1971-02-03', NULL, 1, '2024-02-19 13:21:55', '2024-02-19 13:21:55'),
(43, 52, 'Odit non nemo sed re', 'Lorem temporibus vel', '1980-12-10', '2024-02-14', 0, '2024-02-19 13:21:55', '2024-02-19 13:21:55'),
(44, 67, 'Quidem asperiores co', 'Nisi praesentium ani', '1985-05-03', NULL, 1, '2024-02-23 11:17:40', '2024-02-23 11:20:50'),
(45, 149, 'Show employers your', 'Show employers your', '2023-01-01', NULL, 1, '2024-05-01 09:26:00', '2024-05-01 09:26:00'),
(46, 149, 'Show employers your', 'Show employers your', '2024-03-01', NULL, 1, '2024-05-01 09:26:00', '2024-05-01 09:26:00'),
(47, 119, 'Rem corrupti qui se', 'Fugiat id Nam sint', '2007-01-13', NULL, 1, '2024-06-14 11:05:40', '2024-06-14 11:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `custom_sections`
--

CREATE TABLE `custom_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_sections`
--

INSERT INTO `custom_sections` (`id`, `user_id`, `header`, `sub_header`, `description`, `created_at`, `updated_at`) VALUES
(1, 41, 'Innovation Projects', 'Pioneering Creative Solutions', '<p>Over the years, I have led innovative projects that push the boundaries of creativity and technology.</p>', '2024-01-23 06:33:56', '2024-03-04 04:49:54'),
(5, 3, 'Circket', 'Love to play', '<p>Cricket is&nbsp;<em>a bat-and-ball game played between two teams of eleven players on a field at the centre</em>&nbsp;of which is a 22-yard (20-metre)&nbsp;</p>', '2024-02-05 09:17:16', '2024-02-15 13:43:19'),
(6, 3, 'volleyball', 'Love to volleyball', '<p><em>Volleyball</em>&nbsp;is a team sport in which two teams of six players are separated by a net. Each team tries to score points by grounding a ball on the other team&#39;s&nbsp;</p>', '2024-02-09 05:25:42', '2024-02-15 13:43:19'),
(7, 27, 'Circket', 'Love to play', '<p>Cricket is&nbsp;<em>a bat-and-ball game played between two teams of eleven players on a field at the centre</em>&nbsp;of which is a 22-yard (20-metre) pitch with a wicket at</p>', '2024-02-09 08:40:37', '2024-02-09 08:55:13'),
(8, 30, 'Inventore consectetu', 'Eaque eius voluptate', '<p>Add the name of your school, where it is located, what degree you obtained, your field of study, and your graduation year.</p>', '2024-02-09 09:59:25', '2024-02-09 09:59:25'),
(13, 29, 'Nostrum obcaecati ex', 'Eius magnam rerum as', '<p>asdfasdf</p>', '2024-02-09 10:44:32', '2024-02-09 10:45:02'),
(14, 29, 'Consequatur Sunt te', 'Omnis sapiente sequi', '<p>sdfg</p>', '2024-02-09 10:44:32', '2024-02-09 10:45:02'),
(15, 41, 'Header 2', 'sub header 2', '<p>You can add anything you want in the custom section.</p>', '2024-02-09 11:50:45', '2024-03-04 04:49:54'),
(19, 46, 'w', 'w', '<p>w</p>', '2024-02-13 06:19:41', '2024-02-13 06:19:41'),
(20, 45, 'd', 'd', '<p>d</p>', '2024-02-13 06:49:13', '2024-02-13 06:49:13'),
(21, 50, 'Porro necessitatibus', 'Ut officia culpa qu', '<p>a</p>', '2024-02-13 12:30:51', '2024-02-13 12:30:51'),
(24, 51, 'Sapiente nisi sed ad', 'Est quis iure quia e', '<p>s</p>', '2024-02-13 12:45:49', '2024-02-13 13:08:42'),
(28, 57, 'jkwgb', 'efsv', '<p>iygukwevg</p>', '2024-02-15 13:30:08', '2024-02-15 13:30:08'),
(29, 58, 'Unde velit maiores n', 'Dolor et cupidatat e', '<p>https://jobgetr.daedaltech.online/admin/user-management/create</p>', '2024-02-15 14:22:09', '2024-02-15 14:22:09'),
(30, 60, 'h1', 'sh1', '<p>Showcase your passion and highlight your achievements, such as special projects completed, unique skills developed, or notable experiences gained.</p>', '2024-02-15 15:20:38', '2024-02-15 15:25:08'),
(31, 60, 'h2', 'sb2', '<p>d2</p>', '2024-02-15 15:20:38', '2024-02-15 15:25:08'),
(32, 52, 'Assumenda et quia qu', 'Sunt repellendus Pa', '<p>xcvbnm,.</p>', '2024-02-19 13:00:34', '2024-02-19 13:00:34'),
(33, 67, 'Qui vero distinctio', 'Quaerat sit laborios', '<p>Showcase your passion and highlight your achievements, such as special projects completed, unique skills developed, or notable experiences gained.</p>', '2024-02-23 11:18:31', '2024-02-23 11:20:59'),
(35, 119, 'Fugiat totam eum sun', 'Amet sit voluptatem', '<p>qsdfvbnhujkm,klol.l;pk,m jkumnjhyu7hbgtgvfrfdcde3dsxswsazqaz</p>', '2024-06-14 11:04:58', '2024-06-14 11:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_current_studying` int NOT NULL DEFAULT '0',
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `institution`, `degree`, `start_date`, `end_date`, `is_current_studying`, `city`, `state_id`, `description`, `created_at`, `updated_at`) VALUES
(3, 2, 'College 1', 'dsfgdsg', '2024-01-29', '2024-02-02', 0, 'dsfgds', 14, '<p>asdfasgasgf</p>', '2024-01-29 02:38:05', '2024-04-18 18:50:35'),
(4, 2, 'School 1', 'PHD', '2024-01-24', '2024-01-17', 0, 'Here', 13, NULL, '2024-01-29 23:35:47', '2024-04-18 18:50:35'),
(5, 4, 'Ea nobis doloribus r', 'Asperiores quo nostr', '2018-01-28', '1978-11-23', 0, 'Nostrud et quam pari', 48, '<p>Testing</p>', '2024-01-30 10:31:47', '2024-01-30 10:31:47'),
(8, 13, 'MGSU', 'B.COM', '2018-01-30', '2021-06-15', 0, 'Jaipur', 3, '<p>Add the name of your school, where it is located, what degree you obtained, your field of study, and your graduation year.</p>', '2024-02-01 06:27:32', '2024-02-01 06:27:32'),
(9, 18, 'INS', 'BCA', '2020-02-11', '2022-02-02', 0, 'Jaipur', 4, '<p>Add the name of your school, where it is located, what degree you obtained, your field of study, and your graduation year.</p>', '2024-02-01 09:14:18', '2024-02-01 09:14:18'),
(10, 21, 'Iind', 'GHGJH', '2023-10-17', NULL, 1, 'Jaipur', 12, NULL, '2024-02-01 13:15:15', '2024-02-01 13:15:15'),
(11, 21, 'UUI', 'YTD', '2020-07-08', '2022-06-08', 0, NULL, 11, '<p>kugvlsjkkjlsvd</p>', '2024-02-01 13:15:15', '2024-02-01 13:15:15'),
(12, 21, 'YYUTT', 'UUI', '2024-01-03', NULL, 1, 'Jaipur', 3, '<p>dsfd</p>', '2024-02-01 13:21:32', '2024-02-01 13:21:32'),
(13, 21, 'UIOH', 'IOO', '2020-01-28', '2024-02-07', 0, 'Jaipur', 3, '<p>aefs</p>', '2024-02-01 13:21:32', '2024-02-01 13:21:32'),
(14, 22, 'ugug', 'iuuuu', '2024-02-29', NULL, 1, 'yufyu', 15, '<p>fyuiugiu</p>', '2024-02-03 05:23:25', '2024-02-03 05:23:25'),
(30, 9, NULL, NULL, NULL, NULL, 0, 'ugkkj', 15, NULL, '2024-02-08 13:36:43', '2024-02-08 13:36:43'),
(35, 3, 'professional isa', 'MBBS', '2024-02-14', '2024-02-15', 0, 'jaipur', 5, '<p>MBBS course is a professional UG degree in Medical Science which helps the aspirants who wish to fulfil their dream of becoming a doctor.</p>', '2024-02-09 05:37:42', '2024-02-15 14:11:52'),
(36, 24, 'IGD INST', 'BDP', '2023-02-09', '2023-12-05', 0, 'Jaipur', 12, '<p>Add the name of your school, where it is located, what degree you obtained, your field of study, and your graduation year.</p>', '2024-02-09 05:46:21', '2024-02-09 05:49:12'),
(37, 24, 'INST IYT', 'UUD', '2024-01-01', NULL, 1, 'Jaipur', 12, '<p>Add the name of your school, where it is located, what degree you obtained, your field of study, and your graduation year.</p>', '2024-02-09 05:46:21', '2024-02-09 05:49:12'),
(38, 25, 'IUD', 'KJKJ', '2024-01-28', NULL, 1, 'Jaipur', 12, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality</p>', '2024-02-09 05:51:15', '2024-02-09 05:51:15'),
(39, 26, 'Consequuntur facere', 'Rem inventore est in', '1987-01-26', NULL, 0, 'Voluptatem Porro si', 38, '<p>bmnbmnb</p>', '2024-02-09 05:53:29', '2024-02-09 05:55:26'),
(40, 41, 'Rajasthan Uni.', 'Bca', '2020-07-09', NULL, 1, 'jaipur', 1, '<p>your school, where it is located, what degree you obtained,</p>', '2024-02-09 07:17:00', '2024-03-04 04:49:13'),
(41, 27, 'Empire', 'Bachelor of Computer Application', '2022-02-01', NULL, 1, 'canada', 14, '<p>A Bachelor of Computer Application degree is the core of Computer Science in today&#39;s world. BCA is a three-year degree program. This degree is&nbsp;for those who want to study computer science, software engineering, information technology, information security, and networking technology.</p>', '2024-02-09 08:26:00', '2024-02-09 08:54:54'),
(45, 29, 'Minima officia dolor', 'Atque earum deserunt', '2023-08-13', '1976-11-21', 0, 'Veniam voluptates r', 40, '<p>sdfgsdfgdfg</p>', '2024-02-09 09:29:54', '2024-02-09 10:44:51'),
(47, 41, 'Raj UNC', 'BCA', '2024-01-31', NULL, 1, 'Jaipur', 12, '<p>Add the name of your school, where it is located, what degree you obtained, your field of study, and your graduation year.</p>', '2024-02-09 09:41:15', '2024-03-04 04:49:13'),
(48, 30, 'INM', 'DEGR', '2024-01-29', NULL, 1, 'Jaipur', 14, '<p>Add the name of your school, where it is located, what degree you obtained, your field of study, and your graduation year.</p>', '2024-02-09 09:57:04', '2024-02-09 09:57:04'),
(49, 41, 'INST', 'DEG', '2024-01-30', NULL, 1, 'Jaipur', 11, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-09 11:47:10', '2024-03-04 04:49:13'),
(50, 41, 'RAJ UNV', 'YYU', '2024-02-05', '2024-02-08', 0, 'Jaipur', 48, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-09 11:47:10', '2024-03-04 04:49:13'),
(56, 44, 'INS', 'HFJ', '2024-01-31', '2024-02-05', 0, 'Jaipur', 2, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-13 04:47:37', '2024-02-13 05:08:58'),
(57, 46, 'Necessitatibus magna', 'Minima ut voluptatem', '2000-07-08', '1988-10-14', 0, 'Veniam dolor reicie', 16, '<p>dsafasdfasdf</p>', '2024-02-13 06:05:50', '2024-02-13 06:05:50'),
(58, 46, 'Esse alias velit et', 'Excepturi deleniti r', '1977-01-11', '2024-02-12', 0, 'Irure tempor corpori', 19, '<p>vvv</p>', '2024-02-13 06:05:50', '2024-02-13 06:05:50'),
(59, 47, 'q', 'q', '2024-02-13', '2024-02-13', 0, 'q', 3, '<p>q</p>', '2024-02-13 06:31:31', '2024-02-13 06:31:31'),
(60, 45, 'Optio quae facere d', 'Irure et exercitatio', '1976-09-27', NULL, 0, 'Sit voluptatem Eius', 14, '<p>g</p>', '2024-02-13 06:49:30', '2024-02-13 06:49:30'),
(62, 49, 'INST', 'HDJM', '2024-01-31', NULL, 1, 'Jaipur', 10, '<p>This is description</p>', '2024-02-13 11:43:03', '2024-02-23 13:15:54'),
(63, 50, 'Cupidatat necessitat', 'Elit veritatis mole', '1979-05-08', NULL, 1, 'Repudiandae officia', 8, '<p>a</p>', '2024-02-13 12:30:50', '2024-02-13 12:30:50'),
(74, 51, 'n', 'n', '2024-02-09', NULL, 1, 'n', 13, '<p>n</p>', '2024-02-14 05:30:02', '2024-02-14 05:41:03'),
(75, 56, 'inst1', 'deg2', '2024-02-01', NULL, 1, 'Jaipur', 11, '<p>HDNEJKBN</p>', '2024-02-15 13:24:22', '2024-02-15 13:24:22'),
(76, 60, 'bva', 'bca', '2024-02-15', NULL, 1, 'canda', 4, '<p>HOW</p>', '2024-02-15 15:20:38', '2024-02-15 15:23:01'),
(77, 60, 'jaipuria', 'mbs', '2024-02-15', '2024-02-15', 0, 'hello', 2, '<p>hhello</p>', '2024-02-15 15:20:38', '2024-02-15 15:23:01'),
(79, 67, 'Nisi ipsum laboris n', 'Doloribus impedit e', '2020-05-10', NULL, 0, 'Aut doloremque sed s', 14, '<p>sdfg</p>', '2024-02-23 11:17:04', '2024-02-23 11:20:41'),
(80, 70, 'Nihil dolorem omnis', 'Laboris maxime anim', '1982-06-26', NULL, 1, 'Placeat quia optio', 27, '<p>kh</p>', '2024-02-28 05:13:44', '2024-02-28 05:13:44'),
(81, 71, 'demonstrate', 'demonstrate', '2024-02-27', '2024-02-28', 0, 'demonstrate', 17, '<p>demonstrate&nbsp;</p>', '2024-02-28 09:20:21', '2024-02-28 09:21:33'),
(84, 52, 'Libero fuga Incidid', 'Nisi esse maiores re', '2024-02-19', NULL, 1, 'Mollitia qui deserun', 22, NULL, '2024-03-12 04:51:49', '2024-03-12 04:51:49'),
(85, 103, 'Asperiores provident', 'Aliquip omnis dolore', '1989-03-13', NULL, 1, 'Fugiat eu est in vol', 46, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality</p>', '2024-03-12 04:52:25', '2024-03-12 08:49:49'),
(86, 119, 'Sed quo exercitation', 'Amet ut labore null', '2003-06-13', NULL, 1, 'Perferendis in ex si', 28, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality, allowing you to highlight your accomplishment, relevant skills, and experiences that align with the job&#39;s requirements and set you apart.</p>', '2024-04-13 06:29:31', '2024-04-21 13:49:29'),
(87, 113, 'Add the name', 'Add the name', '2023-01-16', NULL, 1, 'jaipur', NULL, '<p>Add the name&nbsp;Add the name&nbsp;Add the name&nbsp;Add the name&nbsp;Add the name&nbsp;Add the name&nbsp;Add the name&nbsp;</p>', '2024-05-01 09:16:27', '2024-05-01 09:16:27'),
(88, 149, 'Show employers your', 'Show employers your', '2023-01-01', NULL, 1, 'jaipur', 17, '<p>Show employers yourShow employers yourShow employers yourShow employers yourShow employers yourShow employers your</p>', '2024-05-01 09:25:32', '2024-05-01 09:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `employment_histories`
--

CREATE TABLE `employment_histories` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_current_working` int NOT NULL DEFAULT '0',
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employment_histories`
--

INSERT INTO `employment_histories` (`id`, `user_id`, `job_title`, `company`, `start_date`, `end_date`, `is_current_working`, `city`, `state_id`, `description`, `created_at`, `updated_at`) VALUES
(3, 2, 'Technical Account Manager', 'Company #1', '2024-01-08', '2024-02-09', 0, 'Pablo', 44, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality, allowing you to highlight your accomplishment, relevant skills, and experiences that align with the job&#39;s requirements and set you apart.</p>', '2024-01-29 02:37:33', '2024-04-18 18:50:29'),
(4, 2, 'Chief Data Officer', 'Company #2', '2023-10-02', '2024-01-18', 0, 'this city', 13, '<p>Company #2</p>', '2024-01-29 23:34:20', '2024-04-18 18:50:29'),
(5, 4, 'Maxime ex eum quas o', 'Dicta aspernatur iur', '1977-08-10', '2014-07-03', 0, NULL, NULL, '<p>Testing</p>', '2024-01-30 10:31:31', '2024-01-30 10:31:31'),
(9, 13, 'Accountant', 'IMF Pvt. Ltd.', '2022-01-01', '2023-01-10', 0, 'Jaipur', 5, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-01 06:24:12', '2024-02-01 06:26:23'),
(10, 13, 'Accountant', 'OPPO India Pvt. Ltd.', '2023-01-01', NULL, 0, NULL, NULL, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-01 06:26:23', '2024-02-01 06:26:23'),
(11, 18, 'PHP Developer', 'ABC', '2020-02-04', '2023-02-07', 0, NULL, NULL, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-01 09:13:34', '2024-02-01 09:13:34'),
(12, 21, 'PHP DEV', 'IHJ', '2024-01-29', NULL, 1, 'Jaipur', 5, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate you</p>', '2024-02-01 13:13:55', '2024-02-01 13:20:48'),
(13, 21, 'React DEV', 'JHJK', '2022-02-01', '2023-01-31', 0, 'Jaipur', 2, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate you</p>', '2024-02-01 13:13:55', '2024-02-01 13:20:48'),
(14, 22, 'php', 'iiu', '2024-01-31', NULL, 1, 'ouiug', 14, '<p>kjhjg</p>', '2024-02-03 05:23:08', '2024-02-03 05:23:08'),
(18, 6, 'PHP DEV', NULL, '1999-04-28', NULL, 0, NULL, 1, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-08 05:32:28', '2024-02-08 05:32:28'),
(44, 24, 'React Dev', 'COM PVT LTD', '2023-01-01', NULL, 1, 'Jaipur', 7, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-09 05:43:44', '2024-02-09 05:49:10'),
(45, 24, 'PHP DEV', 'COMP PVT LTD', '2022-02-01', NULL, 1, 'Jaipur', 16, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-09 05:43:44', '2024-02-09 05:49:10'),
(46, 25, 'PHP DEBV', 'UIHJ', '2024-01-30', NULL, 1, 'Jaipur', 7, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality</p>', '2024-02-09 05:50:59', '2024-02-09 05:50:59'),
(47, 26, 'Labore obcaecati err', 'Explicabo Facere pr', '1991-10-23', NULL, 0, 'Qui quis eos except', 4, '<p>ljhbmb,mb</p>', '2024-02-09 05:53:20', '2024-02-09 05:55:24'),
(51, 3, 'manager', 'Andrews and Emerson Traders', '2024-02-15', NULL, 0, 'jaipur', 49, '<p>what you have accomplished.</p>', '2024-02-09 06:17:24', '2024-02-15 14:11:40'),
(52, 41, 'manager', 'ABC Pvt. Ltd.', '2019-06-14', NULL, 1, 'jaipur', 18, '<p>Including your contacts in your resume is crucial so potential employers can easily get in touch with you.</p>', '2024-02-09 07:16:23', '2024-03-04 04:49:11'),
(53, 27, 'Call', 'Telecom', '2024-02-01', NULL, 1, 'jaipur', 6, '<p>call &middot;&nbsp;to bring forward for consideration or discussion. &middot; to cause to remember; evoke. &middot; to communicate or try to communicate with by telephone. &middot; to summon</p>', '2024-02-09 08:24:47', '2024-02-09 08:54:54'),
(70, 29, 'Maxime distinctio Q', 'Hughes and Ochoa Plc', '1975-03-08', NULL, 1, 'Atque eius velit eiu', 50, '<p>asdfasdfasdf</p>', '2024-02-09 09:28:42', '2024-02-09 10:44:50'),
(71, 41, 'React Dev', 'IBM', '2024-01-28', NULL, 1, 'Jaipur', 14, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-09 09:40:43', '2024-03-04 04:49:11'),
(73, 30, 'PHP DEV', 'ING', '2024-01-30', NULL, 1, 'Jaipur', 17, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-09 09:55:55', '2024-02-09 09:55:55'),
(74, 30, 'React Js', 'IMH', '2024-02-23', NULL, 1, 'Jaipur', 11, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-09 09:55:55', '2024-02-09 09:55:55'),
(77, 41, 'TYU', 'HJM', '2024-01-30', NULL, 1, 'Jaipur', 11, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-09 11:46:18', '2024-03-04 04:49:11'),
(78, 41, 'Node Dev', 'IIU', '2024-01-31', '2024-02-08', 0, 'Jaipur', 14, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-09 11:46:18', '2024-03-04 04:49:11'),
(79, 1, 'MONGO DEV', 'JJH', '2024-01-28', '2024-02-07', 0, 'Jaipur', 13, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-09 11:46:18', '2024-02-09 11:46:18'),
(86, 9, 'Ullamco laboris temp', 'Sherman and Forbes LLC', '1988-07-28', NULL, 0, 'Quis in perspiciatis', 21, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-12 05:04:24', '2024-02-12 05:04:24'),
(87, 9, 'Doloremque voluptas', 'Mathis and Mcdowell Co', '1984-12-21', NULL, 0, 'Et quia eu placeat', 9, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-12 05:04:24', '2024-02-12 05:04:24'),
(88, 44, 'PHP DEV', 'KKJ', '2021-01-01', NULL, 0, 'Jaipur', 15, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-13 04:46:22', '2024-02-13 05:08:36'),
(89, 44, 'DJQ', 'DJJN', '2020-01-29', '2021-02-01', 0, 'Jaipur', 5, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-13 04:46:22', '2024-02-13 05:08:36'),
(92, 46, 'Ut animi dolore est', 'Rhodes Gutierrez Co', '2016-05-21', '2024-02-13', 0, 'Asperiores voluptas', 37, '<p>asdfasdfasdf</p>', '2024-02-13 06:05:01', '2024-02-13 06:05:01'),
(93, 47, 'Dolorem odit consect', 'Error nihil laborios', '2024-02-01', NULL, 1, 'Sed ipsum dolores e', 23, '<p>fun</p>', '2024-02-13 06:31:15', '2024-02-13 06:31:15'),
(94, 47, 'bbb', 'Culpa eum ipsa quo', '1980-05-23', NULL, 0, 'Labore pariatur Dol', 24, '<p>bb</p>', '2024-02-13 06:31:15', '2024-02-13 06:31:15'),
(95, 45, 'Soluta laudantium a', 'Quod incidunt qui r', '2008-10-20', NULL, 1, 'Aute aut velit ea to', 7, '<p>f</p>', '2024-02-13 06:49:22', '2024-02-13 06:49:22'),
(96, 49, 'PHP DEV', 'COMP', '2024-02-01', '2024-02-07', 0, 'Jaipur', 1, '<p>This is desc</p>', '2024-02-13 11:42:00', '2024-02-23 13:15:58'),
(163, 50, 'Est fuga Vel corpor', 'Washington Jacobs Plc', '2003-04-02', NULL, 1, 'Voluptas consequatur', 43, '<p>b</p>', '2024-02-14 05:23:03', '2024-02-14 05:23:03'),
(164, 50, 'Et omnis iusto offic', 'Weber Richard Trading', '2011-10-23', '2024-02-14', 0, 'Do iure ex veritatis', 15, '<p>a</p>', '2024-02-14 05:23:03', '2024-02-14 05:23:03'),
(165, 50, 'Non soluta alias cul', 'Sampson Bryant LLC', '2018-08-16', NULL, 1, 'Est labore iusto ap', 42, '<p>b</p>', '2024-02-14 05:23:03', '2024-02-14 05:23:03'),
(166, 50, 'Minus enim sequi aut', 'Ayers and Booker Plc', '1979-08-16', '2024-02-13', 0, 'Eligendi sint doloru', 5, '<p>fg</p>', '2024-02-14 05:23:03', '2024-02-14 05:23:03'),
(167, 50, 'g', 'g', '2024-02-02', NULL, 0, 'g', 6, '<p>g</p>', '2024-02-14 05:23:03', '2024-02-14 05:23:03'),
(173, 51, 'Excepturi voluptas n', 'Stewart Mccray Co', '1984-12-16', NULL, 1, 'Dolore rerum cillum', 49, '<p>a</p>', '2024-02-14 05:26:33', '2024-02-14 05:41:02'),
(180, 55, 'JOB1', 'COM1', '2021-01-01', NULL, 1, 'Jaipur', 15, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-15 13:16:18', '2024-02-15 13:16:18'),
(181, 55, 'PHP Dev', 'INM', '2024-02-01', '2024-02-14', 0, 'Jaipur', 11, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-15 13:16:18', '2024-02-15 13:16:18'),
(182, 58, 'Nemo ex velit facil', 'Kline and Russell Plc', '2024-02-15', NULL, 1, 'Ut aperiam laboriosa', 35, '<p>asdfasdf</p>', '2024-02-15 14:22:09', '2024-02-19 08:48:55'),
(183, 60, 'Player', 'High tech', '2024-02-15', NULL, 1, 'might', 5, '<p>hello every one how are you</p>', '2024-02-15 15:20:38', '2024-02-15 15:22:52'),
(184, 60, 'tell come', 'hcl', '2021-08-08', '2024-02-15', 0, 'Home', 8, '<p>Playing in the show</p>', '2024-02-15 15:20:38', '2024-02-15 15:22:52'),
(191, 67, 'Eos dolorum qui cupi', 'Minim quisquam facer', '2010-03-25', NULL, 1, 'Aut ab in autem non', 12, '<p>sdfg</p>', '2024-02-23 11:16:59', '2024-02-23 11:20:39'),
(192, 70, 'Obcaecati sint mole', 'Enim possimus quaer', '1998-09-23', NULL, 1, 'Aut accusamus simili', 7, '<p>lgjb</p>', '2024-02-28 05:14:12', '2024-02-28 05:14:12'),
(193, 71, 'demonstrate', 'demonstrate', '2024-02-27', '2024-02-28', 0, 'demonstrate', 15, '<p>demonstrate&nbsp;</p>', '2024-02-28 09:20:06', '2024-02-28 09:21:32'),
(198, 52, 'Et expedita et aut s', 'Dickson Silva Traders', '1992-12-25', '2024-02-19', 0, 'Voluptatem molestiae', 30, '<p>zxcvbnm,</p>', '2024-03-12 04:51:26', '2024-03-12 04:51:26'),
(199, 103, 'Ducimus dolor ullam', 'Sunt corrupti tenet', '1985-03-08', NULL, 1, 'Doloremque ipsum omn', 23, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality</p>', '2024-03-12 04:52:48', '2024-03-12 04:52:48'),
(200, 119, 'Ut quia quod volupta', 'Praesentium aut susc', '1981-12-18', NULL, 0, 'Odio sunt qui conse', 50, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality, allowing you to highlight your accomplishment, relevant skills, and experiences that align with the job&#39;s requirements and set you apart.</p>', '2024-04-13 06:29:23', '2024-04-21 13:49:17'),
(201, 113, 'Show employers you', 'Show employers you', '2022-02-01', NULL, 1, 'jaipur', 14, '<p>Show employers youShow employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-05-01 09:14:49', '2024-05-01 09:14:49'),
(202, 149, 'Show employers your', 'Show employers', '2022-01-01', NULL, 1, 'jaipur', 15, '<p>Show employers yourShow employers yourShow employers yourShow employers yourShow employers yourShow employers yourShow employers yourShow employers yourShow employers yourShow employers your</p>', '2024-05-01 09:25:09', '2024-05-01 09:25:09'),
(203, 155, 'Vel dolorem eu exerc', 'Juarez and Conner Plc', '1976-08-28', NULL, 1, 'Perferendis voluptat', 27, '<p>Description&nbsp;*</p>', '2024-06-26 05:58:40', '2024-06-26 05:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_currently_pursuing_internship` int NOT NULL DEFAULT '0',
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `user_id`, `job_title`, `company`, `start_date`, `end_date`, `is_currently_pursuing_internship`, `city`, `state_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 41, 'Software Development Intern', 'Tech Innovators Inc.', '2018-02-01', '2019-02-01', 0, 'Silicon Valley, CA', 7, '<p>Worked as part of a dynamic development team to create and enhance software applications. Gained hands-on experience with coding, debugging, and testing.</p>', '2024-01-23 05:41:19', '2024-03-04 04:49:36'),
(2, 41, 'Marketing Intern', 'Global Marketing Solutions', '2020-02-04', '2021-02-01', 0, 'New York City, NY', 14, '<p>Assisted in the execution of marketing campaigns and initiatives. Conducted market research and analyzed data to identify trends. Contributed creative ideas to enhance social media presence.</p>', '2024-01-23 05:41:19', '2024-03-04 04:49:36'),
(9, 9, 'INT', 'COIM', '2024-01-29', NULL, 0, 'KHHH', 10, '<p>LKJJJJ</p>', '2024-02-08 07:29:57', '2024-02-08 07:29:57'),
(10, 9, 'INT2', 'COIM2', '2024-01-29', NULL, 0, 'wswef3', 11, '<p>3eqreef</p>', '2024-02-08 07:29:57', '2024-02-08 07:29:57'),
(12, 3, 'php', 'Info soft', '2023-01-05', '2024-01-22', 0, 'Jaipur', 13, '<p>A three-year undergraduate program in computer science, software, and hardware is known as the Bachelor of Computer ScienceA three-year undergraduate program in computer science, software, and hardware is known as the Bachelor of Computer ScienceA three-year undergraduate program in computer science, software, and hardware is known as the Bachelor of Computer ScienceA three-year undergraduate program in computer science, software, and hardware is known as the Bachelor of Computer ScienceA three-year undergraduate program in computer science, software, and hardware is known as the Bachelor of Computer Science</p>', '2024-02-09 05:44:20', '2024-02-15 14:03:20'),
(15, 27, 'Manager', 'IBM', '2024-02-01', NULL, 0, 'hindus', 18, '<p>Maintains staff by recruiting, selecting, orienting, and training employees. Ensures a safe, secure, and legal work environment. Develops</p>', '2024-02-09 08:31:14', '2024-02-09 08:55:04'),
(22, 29, 'Optio ut dolorem te', 'Aute quo voluptatem', '2009-10-19', '1979-11-06', 0, 'Aspernatur mollitia', 16, '<p>sdfgsdfgsdfg</p>', '2024-02-09 09:35:57', '2024-02-09 10:44:55'),
(23, 29, 'Earum mollit ipsam l', 'Officia facere occae', '1979-01-24', '1987-06-20', 0, 'Possimus nihil blan', 50, '<p>sdfgdsfg</p>', '2024-02-09 09:36:22', '2024-02-09 10:44:55'),
(24, 30, 'Sint enim et ex et o', 'Culpa ut voluptatib', '2004-11-17', '2023-05-23', 0, 'Proident ea itaque', 7, '<p>Add the name of your school, where it is located, what degree you obtained, your field of study, and your graduation year.</p>', '2024-02-09 09:57:43', '2024-02-09 09:57:43'),
(25, 41, 'UUI', 'PPI', '2024-01-29', '2024-02-08', 0, 'Jaipur', 43, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-09 11:48:19', '2024-03-04 04:49:36'),
(26, 41, 'DATA SC', 'YYTH', '2024-01-28', '2024-02-07', 0, 'Jaipur', 45, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-09 11:48:19', '2024-03-04 04:49:36'),
(28, 44, 'FIDD', 'FJ', '2024-01-30', NULL, 1, 'Jaipur', 14, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-13 04:48:42', '2024-02-13 05:09:23'),
(33, 46, 'Blanditiis tempore', 'Hess and Russo Traders', '2007-08-05', NULL, 1, 'Autem est elit in n', 12, '<p>d</p>', '2024-02-13 06:06:44', '2024-02-13 06:06:44'),
(34, 46, 'Omnis qui harum ex q', 'Pace Stafford LLC', '2005-11-06', NULL, 1, 'Consequatur Placeat', 31, '<p>dffffffff</p>', '2024-02-13 06:06:44', '2024-02-13 06:06:44'),
(38, 50, 'Excepturi nemo ipsa', 'Christensen and Martinez Plc', '2021-11-19', NULL, 1, 'Pariatur Molestiae', 10, '<p>b</p>', '2024-02-13 12:30:50', '2024-02-13 12:30:50'),
(59, 51, 'j', 'j', '2024-02-08', NULL, 1, 'j', 7, '<p>j</p>', '2024-02-14 05:34:50', '2024-02-14 05:36:25'),
(60, 51, 'j', 'j', '2024-02-01', NULL, 1, 'j', 16, '<p>j</p>', '2024-02-14 05:35:37', '2024-02-14 05:35:37'),
(61, 51, 'x', 'x', '2024-02-09', '2024-02-10', 0, 'x', 17, '<p>x</p>', '2024-02-14 05:36:25', '2024-02-14 05:36:25'),
(62, 52, 'Python Developer', 'IMG MEH', '2018-01-02', '2019-01-01', 0, 'Jaipur', 14, '<p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>', '2024-02-15 06:06:31', '2024-02-15 10:41:06'),
(63, 56, 'INT', 'COIM', '2024-02-01', NULL, 1, 'Jaipur', 14, '<p>Thisi so s</p>', '2024-02-15 13:24:22', '2024-02-15 13:24:22'),
(64, 58, 'Exercitationem susci', 'Sherman and Dalton Co', '2024-02-15', NULL, 1, 'Aute minim dolor imp', 31, '<p>asdfasdf</p>', '2024-02-15 14:22:09', '2024-02-19 06:04:51'),
(65, 60, 'runner', 'cmd', '2024-02-15', NULL, 1, 'jaipr', 8, '<p>Runing how to runing</p>', '2024-02-15 15:20:38', '2024-02-15 15:23:22'),
(66, 60, 'fighter', 'jjm', '2024-02-15', NULL, 0, 'rolls', 4, '<p>KJLSKDJFL;SKADJFLKSADJF</p>', '2024-02-15 15:20:38', '2024-02-15 15:23:22'),
(67, 67, 'Quo omnis ut dolore', 'Do itaque omnis poss', '1982-06-18', NULL, 1, 'Quis laborum quo qua', 13, '<p>sdfg</p>', '2024-02-23 11:17:20', '2024-02-23 11:20:47'),
(70, 119, 'Quo aperiam maxime c', 'Sunt est ea ipsum', '2000-01-20', NULL, 0, 'Odit praesentium et', 16, '<p>dfghnjmk,l.</p>', '2024-06-14 11:04:41', '2024-06-14 11:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_general_ci,
  `video_path` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_password_2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `thumbnail_path` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `profile_link` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interviews`
--

INSERT INTO `interviews` (`id`, `user_id`, `title`, `description`, `video_path`, `link`, `link_password`, `link_password_2`, `file`, `thumbnail_path`, `profile_link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 139, 'testing', NULL, 'uploads/1713861274_video.mp4', '7NVYwdWVT15fP8D8iYmn8nIgZjLGdbIi6Ou', '$2y$10$X4Lqp1paEBteLuhAybaTV.jbsEbXyEpWsuDYwRqZNy1CbY6ulrTba', '12345678', NULL, NULL, '', '2024-04-23 08:34:07', '2024-04-23 08:34:34', NULL),
(4, 141, 'testing', NULL, 'uploads/1713865702_video.mp4', 'dibfUx1ctQL3pP5EnnAcnJEAHge7VCNcCN9', '$2y$10$M2CguQZs8EfYGtfgbgLSt.4zSwBx3F1PCd/yNaXbqpSQEFPTqcbbK', '123456789', 'uploads/1713865763_file.jpg', NULL, '', '2024-04-23 09:47:53', '2024-04-23 09:49:23', NULL),
(5, 142, 'testing', NULL, 'uploads/1713866208_video.mp4', 'wDhqK0vEG967X8JPq3xccWOwHwsezt9wkDm', '$2y$10$FHub43qF29h5AtiCKqlh.O8twzumTV0Vy.Azf40kfaGeGTw.vv2GC', '123456789', NULL, NULL, '', '2024-04-23 09:56:27', '2024-04-23 09:56:49', NULL),
(6, 143, 'testing', 'testing', 'uploads/1713866457_video.mp4', 'DCZPsOKfzn5bgiSciIcQftmSL8xAJxUIzTa', '$2y$10$mUs9EyCtn7X5Ui6XJLhBUerPqkaAx.uIrc4vA8Ffs5BrNnS43nN4i', '123456789', 'uploads/1713866498_file.png', NULL, '', '2024-04-23 10:00:34', '2024-04-23 10:01:38', NULL),
(7, 144, 'testing', NULL, 'uploads/1713867241_video.mp4', 'ZgmM3XIZN0PraLDZ75nlP8LFH6udZsSVkCi', '$2y$10$HhocvpvJT.sfRJpQLrtTcOnoA1VcVkmBejSgAc/2kVjc9Um20q3XK', '123456789', NULL, NULL, '', '2024-04-23 10:13:10', '2024-04-23 10:14:01', NULL),
(8, 145, 'testing Title Title', 'Description Description Description', 'uploads/1713867515_video.mp4', '1EvD1OQufiCVC1KLkZMnRj4qBDgB8DVXUpG', '$2y$10$W9Xzpn0e5C6z.h/RryiKv.Ppka4V6LC4Q8DUIysUKe3008eY1tJqy', '123456789', 'uploads/1713867598_file.jpg', NULL, '', '2024-04-23 10:17:53', '2024-04-23 10:19:58', NULL),
(13, 150, 'testing testing', NULL, 'uploads/1714958877_video.mp4', 'QFgCzhnhOjMfUfzwI3XlD4NtkVtHHkMoICm', '$2y$10$8TfNxG4xG0AY4FDNsRb1V.T3ax1avyiU5txMAXvhYdyxzRtHoEX32', '123456789', 'uploads/1714958950_file.png', NULL, '', '2024-05-06 01:26:51', '2024-05-06 01:29:10', NULL),
(47, 119, 'testing', NULL, 'uploads/1716281680_video.mp4', 'ElOuNzyoOP14qk9eD1F4uBsHWptvqoyMLff', '$2y$10$YP2HrZuRhTFyrUVDL8BzqOQS11DAXrG4f/y2zRHNlMgoXLrG.44QW', '123456789', NULL, 'uploads/1716281681_thumbnail.png', NULL, '2024-05-21 08:54:42', '2024-05-21 08:54:42', NULL),
(60, 2, 'test interview 4', NULL, 'uploads/1716841730_video.mp4', 'sCddLlJvDSwwlnZgcpbxdksvZ09BaQZKt8O', '$2y$10$EDYm/dSxHgtV7w5xgMOxZupICuS6LoOApDTFN5BbzJiWYbowJP5Lu', '12345678', NULL, 'uploads/1716841730_thumbnail.png', NULL, '2024-05-27 20:28:50', '2024-05-27 20:28:50', NULL),
(64, 119, 'dfgs', NULL, 'uploads/1719403021_video.mp4', 'v0JqjMWCOYp5VbFkkJXUf6r1CqgFOa7drwM', '$2y$10$dVoJ1b.6M58LGYMPaCeu7eVN98R/G3NY5G8klYMBtoMlzNgQXrWcO', '12345678', NULL, 'uploads/1719403021_thumbnail.png', NULL, '2024-06-26 11:57:01', '2024-06-26 11:57:01', NULL),
(65, 119, 'Hello', NULL, 'uploads/1719403863_video.mp4', 'PYOfINkqNkbzVJ07f5TSIZHslJcfJcAVSnn', '$2y$10$QDWukTpRwiKT6d5vxCrULesBHJFXUlzedvQXWlYSP6t9dCmGkTtYe', '12345678', NULL, NULL, NULL, '2024-06-26 12:11:03', '2024-06-26 12:11:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interview_plans`
--

CREATE TABLE `interview_plans` (
  `id` bigint UNSIGNED NOT NULL,
  `plan_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) DEFAULT NULL,
  `shared_Interviews` int DEFAULT NULL,
  `stripe_price_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interview_plans`
--

INSERT INTO `interview_plans` (`id`, `plan_name`, `description`, `price`, `shared_Interviews`, `stripe_price_id`, `stripe_product_id`, `created_at`, `updated_at`) VALUES
(1, 'Starter', NULL, 5.00, 1, 'price_1PGJDDBkxOqzrK2JgYlIJLtL', 'prod_Q6WFVaKa5jkcrn', '2024-05-14 11:08:03', '2024-05-14 11:08:03'),
(2, 'Most Popular', '20% OFF\r\njobgetr.ai\r\n($40 value) *premium account', 7.00, 5, 'price_1PGJE0BkxOqzrK2JTF26IMSY', 'prod_Q6WG5fSbvvdl1H', '2024-05-14 11:08:52', '2024-05-14 11:08:52'),
(3, 'Best', '20% OFF\r\njobgetr.ai\r\n($40 value) *premium account', 10.00, 10, 'price_1PGJEHBkxOqzrK2J8WJ774Up', 'prod_Q6WGFhPbyqjphE', '2024-05-14 11:09:09', '2024-05-14 11:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `interview_user_plans`
--

CREATE TABLE `interview_user_plans` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `plan_id` bigint UNSIGNED DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interview_user_plans`
--

INSERT INTO `interview_user_plans` (`id`, `user_id`, `plan_id`, `price`, `payment_id`, `to_date`, `from_date`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 1, 5.00, 'sub_1PXCzXBkxOqzrK2Ja3S5H2XO', '2024-07-30', '2024-06-30', 'active', '2024-05-19 13:00:20', '2024-06-30 01:55:51'),
(6, 119, 3, 10.00, 'sub_1PVXAGBkxOqzrK2JSQsyFaQE', '2024-07-25', '2024-06-25', 'active', '2024-05-20 13:11:55', '2024-06-25 11:04:01'),
(14, 122, 1, 5.00, 'sub_1PJrK1BkxOqzrK2JGX925hZ4', '2024-06-24', '2024-05-24', 'active', '2024-05-24 06:09:50', '2024-05-24 06:09:50'),
(15, 153, 2, 7.00, 'sub_1PRX2xBkxOqzrK2JXDGDEHw1', '2024-07-14', '2024-06-14', 'active', '2024-06-14 10:08:11', '2024-06-14 10:08:11'),
(17, 164, 2, 7.00, 'sub_1PZSTMBkxOqzrK2JZ2WZ0uaY', '2024-08-06', '2024-07-06', 'active', '2024-07-06 06:49:33', '2024-07-06 06:51:56'),
(18, 169, 1, 5.00, 'sub_1Q5rHxBkxOqzrK2JulmPWFUN', '2024-11-03', '2024-10-03', 'active', '2024-10-03 15:50:09', '2024-10-03 15:50:09'),
(19, 170, 3, 10.00, 'sub_1Q5rKIBkxOqzrK2J0sdvWAWu', '2024-11-03', '2024-10-03', 'active', '2024-10-03 15:52:29', '2024-10-03 15:52:29'),
(20, 171, 2, 7.00, 'sub_1Q5rWyBkxOqzrK2J39MP25pg', '2024-11-03', '2024-10-03', 'active', '2024-10-03 16:05:41', '2024-10-03 16:05:41'),
(21, 172, 2, 7.00, 'sub_1Q5zfPBkxOqzrK2J9Dm75ofY', '2024-11-04', '2024-10-04', 'active', '2024-10-04 00:46:52', '2024-10-04 00:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply_management`
--

CREATE TABLE `job_apply_management` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `remark` text,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_apply_management`
--

INSERT INTO `job_apply_management` (`id`, `user_id`, `job_title`, `company_name`, `date`, `remark`, `link`, `created_at`, `updated_at`) VALUES
(4, 52, 'Magnam sit aspernat', 'Holder Gonzalez Plc', '2024-04-24', 'Provident cumque vo', NULL, '2024-04-24 07:11:17', '2024-04-24 07:11:17'),
(6, 52, 'Sunt voluptatem anim', 'Chase Henderson Co', '2024-04-24', 'In natus ducimus de', NULL, '2024-04-24 07:30:27', '2024-04-24 07:30:27'),
(7, 117, 'Fugiat eu placeat e', 'Bradshaw Fry LLC', '2024-04-24', 'Exercitationem aut i', NULL, '2024-04-24 07:46:10', '2024-04-24 07:46:10'),
(12, 52, 'Rem dolore labore ex', 'House Mclean Trading', '2024-04-26', 'Iure sunt tempore f', NULL, '2024-04-26 09:51:30', '2024-04-26 09:51:30'),
(13, 52, 'Voluptate ea autem i', 'House Sosa Associates', '2024-04-26', 'Officiis reprehender', 'https://jobgetr.daedaltech.online/admin/app-management/create/52', '2024-04-26 09:53:56', '2024-04-26 09:53:56'),
(14, 122, 'Aperiam delectus si', 'Kirby Dean LLC', '2024-04-26', 'Voluptate pariatur', 'https://jobgetr.daedaltech.online/admin/app-management/create/122', '2024-04-26 10:32:35', '2024-04-26 10:32:35'),
(15, 119, 'data entry', 'Kaufman Wolf Co', '2024-04-29', 'testing', 'https://jobgetr.daedaltech.online/admin/app-management/create/52', '2024-04-29 12:14:38', '2024-04-29 12:14:38'),
(18, 148, 'data entry', 'Kaufman Wolf Co', '2024-04-29', 'testing', 'https://jobgetr.daedaltech.online/admin/app-management/create/148', '2024-04-29 13:04:07', '2024-04-29 13:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `job_preferences`
--

CREATE TABLE `job_preferences` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `job_titles` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `race_ethnicity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_range` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hourly_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_level` enum('entry','intermediate','advanced','senior') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('true','false') COLLATE utf8mb4_unicode_ci DEFAULT 'true',
  `legal_authorization` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visa_sponsorship` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity` enum('American Indian or Alaska Natic (Not Hispanic or Latino) (United States)','Asian (Not Hispanic or Latino) (United States)','Black or African American (Not Hispanic or Latino) (United States)','Decline to State (United States)','Hispanic or Latino (United States)','Native Hawaiian or Pacific Islander (Not Hispanic or Latino) (United States)','Two or More Races (Not Hispanic or Latino) (United States)','White (Not Hispanic or Latino) (United States)') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protected_veterans` enum('I identify as one or more of the classifications or protected veterans listed above','I identify as a veteran, just not a protected veteran','I am not a veteran','I do not wish to self-identify') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disability` enum('Yes','No','No Answer','permission','certify') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_preferences`
--

INSERT INTO `job_preferences` (`id`, `user_id`, `job_titles`, `gender`, `race_ethnicity`, `salary_range`, `hourly_rate`, `job_level`, `status`, `legal_authorization`, `visa_sponsorship`, `ethnicity`, `protected_veterans`, `languages`, `disability`, `created_at`, `updated_at`) VALUES
(9, 113, 'aaa', 'male', 'standard', NULL, NULL, 'entry', 'true', 'Yes', 'Yes', 'American Indian or Alaska Natic (Not Hispanic or Latino) (United States)', 'I do not wish to self-identify', 'hindi, english', 'No', '2024-04-11 10:24:08', '2024-04-11 10:24:08'),
(10, 119, 'Ut voluptatem Volup', 'male', 'Options', 'Quas tempor molestia', 'Harum ullam ut saepe', 'intermediate', 'true', 'Yes', 'Yes', 'Black or African American (Not Hispanic or Latino) (United States)', 'I do not wish to self-identify', 'Velit et aliqua Lor', 'permission', '2024-04-15 05:46:46', '2024-06-14 11:08:57'),
(11, 2, 'programmer, developer', 'male', 'standard', '200-250k USD', NULL, 'entry', 'true', 'Yes', 'Yes', 'Asian (Not Hispanic or Latino) (United States)', 'I am not a veteran', NULL, 'No', '2024-04-18 19:06:14', '2024-04-18 19:06:14'),
(12, 122, 'Velit incididunt eli', 'other', NULL, 'Quasi consectetur e', 'Necessitatibus asper', 'senior', 'true', 'Yes', 'Yes', 'Native Hawaiian or Pacific Islander (Not Hispanic or Latino) (United States)', 'I identify as a veteran, just not a protected veteran', 'Iste aperiam et duci', 'permission', '2024-04-25 05:49:59', '2024-04-25 05:49:59'),
(13, 147, 'Dolorum est commodi', 'female', NULL, NULL, NULL, 'intermediate', 'true', 'No', 'No', 'American Indian or Alaska Natic (Not Hispanic or Latino) (United States)', 'I identify as a veteran, just not a protected veteran', 'Sed ut sit assumend', 'No Answer', '2024-04-25 08:58:42', '2024-04-25 09:07:25'),
(14, 150, 'Omnis iure adipisci', 'female', NULL, 'Id obcaecati laborum', 'Nam quae architecto', 'entry', 'true', 'No', 'No', 'Decline to State (United States)', 'I identify as one or more of the classifications or protected veterans listed above', 'Sed maxime consequat', 'No', '2024-05-06 01:43:14', '2024-05-06 01:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proficiency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `user_id`, `language`, `proficiency`, `created_at`, `updated_at`) VALUES
(1, 41, 'English', 'Proficient (B1-B2)', '2024-01-23 06:30:58', '2024-01-23 06:30:58'),
(2, 41, 'Hindi', 'Native', '2024-01-23 06:30:58', '2024-01-23 06:30:58'),
(3, 41, 'Punjabi', 'Proficient (B1-B2)', '2024-01-23 06:30:58', '2024-01-23 06:30:58'),
(4, 13, 'English', 'Proficient (B1-B2)', '2024-02-01 06:28:33', '2024-02-01 06:28:33'),
(5, 13, 'Hindi', 'Native', '2024-02-01 06:28:33', '2024-02-01 06:28:33'),
(6, 13, 'Punjabi', 'Proficient (B1-B2)', '2024-02-01 06:28:33', '2024-02-01 06:28:33'),
(10, 3, 'hindi', NULL, '2024-02-05 09:16:51', '2024-02-15 08:57:10'),
(11, 3, 'english', NULL, '2024-02-05 09:16:51', '2024-02-15 08:57:55'),
(12, 27, 'Hindi', 'Native', '2024-02-09 08:38:52', '2024-02-09 08:38:52'),
(13, 27, 'English', 'Novice (A1-A2)', '2024-02-09 08:38:52', '2024-02-09 08:38:52'),
(14, 30, 'Facere sed inventore', NULL, '2024-02-09 09:59:13', '2024-02-09 09:59:13'),
(15, 30, 'Aut quo adipisicing', 'Proficient (B1-B2)', '2024-02-09 09:59:13', '2024-02-09 09:59:13'),
(16, 30, 'Quia incididunt quae', 'Novice (A1-A2)', '2024-02-09 09:59:13', '2024-02-09 09:59:13'),
(17, 30, 'Et qui quidem est si', 'Native', '2024-02-09 09:59:13', '2024-02-09 09:59:13'),
(20, 29, 'testing', NULL, '2024-02-09 10:33:55', '2024-02-09 10:33:55'),
(21, 41, 'Telgu', 'Highly proficient (C1-C2)', '2024-02-09 11:50:24', '2024-02-09 11:50:24'),
(50, 46, 'n', 'Proficient (B1-B2)', '2024-02-13 06:19:06', '2024-02-13 06:19:06'),
(51, 46, 'n', 'Highly proficient (C1-C2)', '2024-02-13 06:19:06', '2024-02-13 06:19:06'),
(52, 45, 's', 'Proficient (B1-B2)', '2024-02-13 06:49:03', '2024-02-13 06:49:03'),
(55, 50, 'Adipisicing Nam id p', 'Novice (A1-A2)', '2024-02-13 12:30:50', '2024-02-13 12:30:50'),
(58, 51, 'Est officia rerum do', 'Highly proficient (C1-C2)', '2024-02-13 12:46:11', '2024-02-13 12:46:11'),
(59, 51, 'Deserunt consectetur', 'Native', '2024-02-13 12:46:11', '2024-02-13 12:46:11'),
(60, 51, 's', 'Proficient (B1-B2)', '2024-02-13 12:46:11', '2024-02-13 12:46:11'),
(64, 57, 'JFEBKJ', NULL, '2024-02-15 13:30:07', '2024-02-15 13:30:07'),
(65, 58, 'n', 'Highly proficient (C1-C2)', '2024-02-15 14:22:09', '2024-02-15 14:22:09'),
(66, 60, 'cgasdgads', 'Proficient (B1-B2)', '2024-02-15 15:28:15', '2024-02-15 15:28:15'),
(69, 52, 'dfsgd', 'Novice (A1-A2)', '2024-02-19 13:07:30', '2024-02-19 13:07:30'),
(70, 67, 'Adipisicing pariatur', 'Novice (A1-A2)', '2024-02-23 11:18:19', '2024-02-23 11:18:19'),
(72, 119, 'v', 'Proficient (B1-B2)', '2024-06-14 11:04:25', '2024-06-14 11:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `email`, `job_title`, `location`, `created_at`, `updated_at`) VALUES
(1, 'mu583@gmail.com', 'PHP Developer', 'USA', '2024-02-29 03:24:16', '2024-02-29 03:24:16'),
(2, 'rs9613609@gmail.com', 'laravel developer', 'New York, USA', '2024-02-29 09:59:37', '2024-02-29 09:59:37'),
(3, 'rasoolm@gmail.com', 'data engineer', 'atlanta, ga', '2024-03-01 04:10:42', '2024-03-01 04:10:42'),
(4, NULL, 'PHP Developer', 'Altanta, GA', '2024-03-07 03:50:37', '2024-03-07 03:50:37'),
(5, 'abc123@gmail.com', 'React Developer', 'Bangalore, india', '2024-03-07 05:45:26', '2024-03-07 05:45:26'),
(6, 'abc@gmail.com', 'data engineer', 'atlanta, ga', '2024-03-11 02:20:16', '2024-03-11 02:20:16'),
(7, 'rofij@mailinator.com', 'Atque labore exercit', 'Excepturi sunt repr', '2024-04-11 09:30:44', '2024-04-11 09:30:44'),
(8, 'student1@yopmail.com', 'data entry', 'usa', '2024-04-11 09:31:44', '2024-04-11 09:31:44'),
(9, 'admin@admin.com', 'data', 'atlanta', '2024-04-12 09:06:18', '2024-04-12 09:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `link_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `user_id`, `link_title`, `url`, `created_at`, `updated_at`) VALUES
(2, 41, 'E-Commerce Website', 'https://www.ecommercestore.com', '2024-01-23 06:30:30', '2024-03-04 04:49:47'),
(6, 3, 'deadaltech', 'https://jobgetr.daedaltech.online', '2024-02-05 09:16:35', '2024-02-15 14:04:40'),
(7, 3, 'Create-resume', 'https://jobgetr.daedaltech.online/create-resume', '2024-02-05 09:16:35', '2024-02-15 14:04:40'),
(8, 27, 'indeed', 'https://in.indeed.com/', '2024-02-09 08:38:06', '2024-02-09 08:55:08'),
(9, 27, 'linked', 'https://in.linkedin.com/', '2024-02-09 08:38:06', '2024-02-09 08:55:08'),
(10, 30, 'Nemo et proident in', 'Harum nisi in et aut', '2024-02-09 09:59:04', '2024-02-09 09:59:04'),
(11, 30, 'Eos repellendus Re', 'Vitae blanditiis tem', '2024-02-09 09:59:04', '2024-02-09 09:59:04'),
(12, 30, 'Impedit ut eu animi', 'Non suscipit delenit', '2024-02-09 09:59:04', '2024-02-09 09:59:04'),
(13, 30, 'Quae id exercitation', 'Est neque sed quae a', '2024-02-09 09:59:04', '2024-02-09 09:59:04'),
(19, 29, 'sdfg', 'sdfg', '2024-02-09 10:33:41', '2024-02-09 10:44:58'),
(20, 41, 'Online Portfolio test', 'https://www.ecommercestore.com', '2024-02-09 11:50:08', '2024-03-04 04:49:47'),
(23, 44, 'eag', 'https://jobgetr.daedaltech.online/create-resume', '2024-02-13 04:50:45', '2024-02-13 04:50:45'),
(24, 46, 'Est reprehenderit ex', 'A distinctio Exerci', '2024-02-13 06:08:21', '2024-02-13 06:08:21'),
(25, 46, 'Ut et sit et earum', 'Sit dolores molesti', '2024-02-13 06:08:21', '2024-02-13 06:08:21'),
(26, 45, 'q', 'https://jobgetr.daedaltech.online/create-resume', '2024-02-13 06:48:59', '2024-02-13 06:48:59'),
(27, 45, 'c', 'https://jobgetr.daedaltech.online/create-resume', '2024-02-13 06:48:59', '2024-02-13 06:48:59'),
(28, 50, 'Eum ullamco possimus', 'Laboriosam architec', '2024-02-13 12:30:50', '2024-02-13 12:30:50'),
(31, 51, 'Sed provident qui i', 'https://jobgetr.daedaltech.online/create-resume', '2024-02-13 12:46:20', '2024-02-13 13:08:35'),
(32, 51, 'Temporibus irure qui', 'https://jobgetr.daedaltech.online/create-resume', '2024-02-13 12:46:20', '2024-02-13 13:08:35'),
(36, 57, 'urwodvh', 'https://jobgetr.daedaltech.online/admin/user-management/create', '2024-02-15 13:30:07', '2024-02-15 13:30:07'),
(37, 58, 'testing', 'https://jobgetr.daedaltech.online/admin/user-management/create', '2024-02-15 14:22:09', '2024-02-15 14:22:09'),
(38, 60, 'ktl', 'https://ktl.com', '2024-02-15 15:20:38', '2024-02-15 15:24:49'),
(39, 60, 'linked', 'https://linked.com', '2024-02-15 15:20:38', '2024-02-15 15:24:49'),
(40, 52, 'ertwer', 'https://jobgetr.daedaltech.online/admin/user-management/create', '2024-02-19 13:05:59', '2024-02-19 13:05:59'),
(41, 67, 'Aut obcaecati esse', 'https://jobgetr.daedaltech.online/create-resume', '2024-02-23 11:18:14', '2024-02-23 11:20:53'),
(44, 49, 'efsv', 'https://jobgetr.daedaltech.online/create-resume', '2024-02-24 03:54:13', '2024-02-24 03:54:13'),
(45, 119, 'Et in neque aut ad d', 'https://jobgetr.daedaltech.online/create-resume', '2024-04-13 06:29:45', '2024-06-14 10:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `sender_id` bigint UNSIGNED NOT NULL,
  `receiver_id` bigint UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_status` enum('true','false') COLLATE utf8mb4_unicode_ci DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message`, `attachment`, `read_status`, `created_at`, `updated_at`) VALUES
(1, 119, 1, 'Hello', NULL, 'true', '2024-06-26 06:13:21', '2024-10-04 09:10:04'),
(2, 1, 119, 'hello', NULL, 'true', '2024-06-25 06:13:38', '2024-06-26 06:30:09'),
(3, 1, 119, 'how are you', NULL, 'true', '2024-06-24 06:13:47', '2024-06-26 06:30:09'),
(4, 1, 119, 'yes nice to meet you', NULL, 'true', '2024-06-26 06:15:21', '2024-06-26 06:30:09'),
(5, 119, 1, 'Hello', NULL, 'true', '2024-06-23 06:13:21', '2024-10-04 09:10:04'),
(6, 1, 119, 'hello', NULL, 'true', '2024-06-22 06:13:38', '2024-06-26 06:30:09'),
(7, 1, 119, 'how are you', NULL, 'true', '2024-06-21 06:13:47', '2024-06-26 06:30:09'),
(8, 1, 119, 'yes nice to meet you', NULL, 'true', '2024-06-20 06:15:21', '2024-06-26 06:30:09'),
(9, 156, 1, 'asdf', NULL, 'true', '2024-07-04 07:09:57', '2024-10-04 09:10:04'),
(10, 1, 177, 'hello', NULL, 'false', '2024-10-04 09:10:04', '2024-10-04 09:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_08_19_000000_create_failed_jobs_table', 1),
(21, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(22, '2024_01_13_052912_create_employment_histories_table', 1),
(23, '2024_01_13_052929_create_education_table', 1),
(24, '2024_01_13_052945_create_skills_table', 1),
(25, '2024_01_13_053009_create_internships_table', 1),
(26, '2024_01_13_053025_create_courses_table', 1),
(27, '2024_01_13_053038_create_references_table', 1),
(28, '2024_01_13_053050_create_links_table', 1),
(29, '2024_01_13_053103_create_languages_table', 1),
(30, '2024_01_13_053117_create_custom_sections_table', 1),
(31, '2024_01_19_053226_create_resume_templates_table', 1),
(32, '2024_01_19_061110_create_user_resume_templates_table', 1),
(33, '2024_01_22_070749_create_states_table', 1),
(34, '2024_01_22_092228_create_certificates_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_managers`
--

CREATE TABLE `page_managers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0',
  `key` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_managers`
--

INSERT INTO `page_managers` (`id`, `name`, `content`, `status`, `key`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '<section class=\"innerbanner\" style=\"background: url(\'https://jobgetr.daedaltech.online/assets/images/inresume.jpg\');\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n        <div class=\"col-md-12\">\r\n            <div class=\"innerheading\">\r\n            <h2>About us</h2>\r\n            <ul class=\"breadcrumb\">\r\n                <li><a href=\"https://jobgetr.daedaltech.online/home\" target=\"_blank\">Home</a></li>\r\n                <li>About us</li>\r\n            </ul>\r\n            </div>\r\n        </div>\r\n        </div>\r\n    </div>\r\n</section>\r\n<section class=\"inner-sec faq-sec\">\r\n  <div class=\"container\">\r\n   \r\n   <div class=\"row\">\r\n     <div class=\"col-md-6\">\r\n       <div class=\"whyresume-left\">\r\n        <img src=\"https://jobgetr.daedaltech.online/assets/images/bannerimgcvnew.png\" class=\"img-fluid\" alt=\"\">\r\n       </div>\r\n     </div>\r\n     <div class=\"col-md-6\">\r\n       <div class=\"whychoose-right\">\r\n        <h2><span>About Us</span></h2>\r\n        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>\r\n        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat.</p>\r\n        <a href=\"https://jobgetr.daedaltech.online/create-resume\" class=\"btn btn-info\">Build my resume</a>\r\n       </div>\r\n     </div>\r\n    </div>\r\n\r\n  </div>\r\n</section>\r\n<section class=\"whychoose-sec\">\r\n  <!-- <div class=\"container\">\r\n    <div class=\"row aligncenter\">     \r\n      <div class=\"col-md-12\">\r\n        <div class=\"whychoose-right\">\r\n          <h2>Why Choose <span>Our Platform?</span></h2>\r\n          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span>Duis at dictum</span> risus, non suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>\r\n          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. <span>Quisque</span> aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>\r\n          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eius <strong>molestiae facere, natus reprehenderit</strong> eaque eum, autem ipsam. Magni, error. Tempora odit laborum iure inventore possimus laboriosam qui nam. Fugit!</p>\r\n          <a href=\"#\" class=\"btn btn-info\">lets build your Resume</a>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </div> -->\r\n   <div class=\"whychoose-leftcol\">\r\n   <div class=\"col-md-12\">\r\n        <div class=\"whychoose-left\">\r\n          <ul>\r\n            <li class=\"whychooseli1\" data-toggle=\"modal\" data-target=\"#myModal\"><img src=\"https://jobgetr.daedaltech.online/assets/images/choose1.jpg\" class=\"img-fluid whychooseimg\" alt=\"\"><!-- <span><img src=\"https://jobgetr.daedaltech.online/assets/images/d1.png\" class=\"img-fluid\" alt=\"\"></span> -->\r\n             <div class=\"whychoose-lefttext\"> <h3>Easy Online Resume Builder</h3>\r\n              <p>Lorem ipsum dolor <strong>sit amet</strong>, consectetur adipisicing elit. Laudantium modi assumenda.</p>\r\n              <span><i class=\"la la-plus\"></i></span>\r\n            </div>\r\n            </li>\r\n            <li class=\"whychooseli2\" data-toggle=\"modal\" data-target=\"#myModal2\"><img src=\"https://jobgetr.daedaltech.online/assets/images/choose2.jpg\" class=\"img-fluid whychooseimg\" alt=\"\"><!-- <span><img src=\"https://jobgetr.daedaltech.online/assets/images/d3.png\" class=\"img-fluid\" alt=\"\"></span> -->\r\n              <div class=\"whychoose-lefttext\"><h3>Online Creative Templates</h3>\r\n              <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing</strong> elit. Laudantium modi assumenda.</p>\r\n                <span class=\"videobtn\"><i class=\"la la-play\"></i>Watch “How Jobgetr Works”</span>\r\n              </div>\r\n            </li>\r\n            <li class=\"whychooseli3\" data-toggle=\"modal\" data-target=\"#myModal3\"><img src=\"https://jobgetr.daedaltech.online/assets/images/choose3.jpg\" class=\"img-fluid whychooseimg\" alt=\"\"><!-- <span><img src=\"https://jobgetr.daedaltech.online/assets/images/d2.png\" class=\"img-fluid\" alt=\"\"></span> -->\r\n             <div class=\"whychoose-lefttext\"><h3>Step By Step Expert Tips</h3>\r\n              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Laudantium</strong> modi assumenda.</p>\r\n              <span><i class=\"la la-plus\"></i></span>\r\n            </div>\r\n            </li>            \r\n          </ul>\r\n        </div>\r\n      </div>\r\n    </div>\r\n</section>\r\n<div class=\"modal fade modalimg\" id=\"myModal\">\r\n    <div class=\"modal-dialog\">\r\n      <div class=\"modal-content\">\r\n        <div class=\"modal-header\">\r\n          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>\r\n        </div>        \r\n       \r\n        <div class=\"modal-body\">\r\n          <div class=\"modalimgshow\">\r\n              <div class=\"container\">\r\n                    <img src=\"https://jobgetr.daedaltech.online/assets/images/choose1.jpg\" class=\"img-fluid\" alt=\"\">\r\n              </div>\r\n          </div>\r\n        </div>        \r\n        \r\n      </div>\r\n    </div>\r\n</div>\r\n\r\n<div class=\"modal fade modalimg\" id=\"myModal2\">\r\n    <div class=\"modal-dialog\">\r\n      <div class=\"modal-content\">\r\n        <div class=\"modal-header\">\r\n          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>\r\n        </div>        \r\n       \r\n        <div class=\"modal-body\">\r\n          <div class=\"modalimgshow\">\r\n              <div class=\"container\">\r\n                  \r\n                <iframe width=\"775\" height=\"409\" src=\"https://www.youtube.com/embed/HMBtyE0wL60\" title=\"How Basecamp Works - A Quick Overview\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen=\"\"></iframe>\r\n              </div>\r\n          </div>\r\n        </div>        \r\n        \r\n      </div>\r\n    </div>\r\n</div>\r\n\r\n<div class=\"modal fade modalimg\" id=\"myModal3\">\r\n    <div class=\"modal-dialog\">\r\n      <div class=\"modal-content\">\r\n        <div class=\"modal-header\">\r\n          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>\r\n        </div>        \r\n       \r\n        <div class=\"modal-body\">\r\n          <div class=\"modalimgshow\">\r\n              <div class=\"container\">\r\n                  \r\n                    <img src=\"https://jobgetr.daedaltech.online/assets/images/choose3.jpg\" class=\"img-fluid\" alt=\"\">\r\n              </div>\r\n          </div>\r\n        </div>        \r\n        \r\n      </div>\r\n    </div>\r\n</div>\r\n<section class=\"teamsec\">\r\n  <div class=\"container\">\r\n    <div class=\"row\">\r\n      <div class=\"col-md-12\">\r\n        <div class=\"heading\">\r\n        <h2>Resume <span>Builder Team</span></h2>\r\n        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>\r\n      </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"row\">\r\n      <div class=\"col-md-3\">\r\n        <div class=\"team-card\">\r\n          <div class=\"team-img\">\r\n            <img src=\"https://jobgetr.daedaltech.online/assets/images/img-1.jpg\" class=\"img-fluid\" alt=\"\">\r\n          </div>\r\n          <div class=\"team-desc\">\r\n          <h3>WILLIAMSON</h3>\r\n          <h5>Head Manager</h5>\r\n        </div>\r\n        </div>\r\n      </div>\r\n      <div class=\"col-md-3\">\r\n        <div class=\"team-card\">\r\n          <div class=\"team-img\">\r\n            <img src=\"https://jobgetr.daedaltech.online/assets/images/img-2.jpg\" class=\"img-fluid\" alt=\"\">\r\n          </div>\r\n          <div class=\"team-desc\">\r\n          <h3>KRISTIANA</h3>\r\n          <h5>Founder &amp; CEO</h5>\r\n        </div>\r\n        </div>\r\n      </div>\r\n      <div class=\"col-md-3\">\r\n        <div class=\"team-card\">\r\n          <div class=\"team-img\">\r\n            <img src=\"https://jobgetr.daedaltech.online/assets/images/img-3.jpg\" class=\"img-fluid\" alt=\"\">\r\n          </div>\r\n          <div class=\"team-desc\">\r\n          <h3>STEVE THOMAS</h3>\r\n          <h5>Lead Developer</h5>\r\n        </div>\r\n        </div>\r\n      </div>\r\n      <div class=\"col-md-3\">\r\n        <div class=\"team-card\">\r\n          <div class=\"team-img\">\r\n            <img src=\"https://jobgetr.daedaltech.online/assets/images/img-4.jpg\" class=\"img-fluid\" alt=\"\">\r\n          </div>\r\n          <div class=\"team-desc\">\r\n          <h3>MIRANDA JOY</h3>\r\n          <h5>Pro Developer</h5>\r\n        </div>\r\n        </div>\r\n      </div>\r\n      \r\n      \r\n    </div>\r\n  </div>\r\n</section>', 0, 'AboutUs', '2024-03-12 05:33:51', '2024-04-15 09:45:51'),
(2, 'contact us', '<section class=\"innerbanner\" style=\"background: url(\'https://jobgetr.daedaltech.online/assets/images/inresume.jpg\');\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-12\">\r\n                <div class=\"innerheading\">\r\n                    <h2>Contact Us</h2>\r\n                    <ul class=\"breadcrumb\">\r\n                        <li><a href=\"https://jobgetr.daedaltech.online/home\" target=\"_blank\">Home</a></li>\r\n                        <li>Contact Us</li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>', 0, 'ContactUs', '2024-03-12 05:47:26', '2024-04-15 09:46:45'),
(3, 'FAQ', '<section class=\"innerbanner\" style=\"background: url(\'https://jobgetr.daedaltech.online/assets/images/inresume.jpg\');\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-12\">\r\n                <div class=\"innerheading\">\r\n                    <h2>FAQ</h2>\r\n                    <ul class=\"breadcrumb\">\r\n                        <li><a href=\"https://jobgetr.daedaltech.online/home\">Home</a></li>\r\n                        <li>FAQ</li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>\r\n<section class=\"inner-sec faq-sec\">\r\n  <div class=\"container\">\r\n   \r\n   <div class=\"row\">\r\n      <div class=\"col-md-12\">\r\n        <div id=\"accordion\" class=\"tab-content\">\r\n            <div class=\"card\">\r\n              <div class=\"card-header\"><a class=\"card-link\" data-toggle=\"collapse\" href=\"#collapse1\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></div>\r\n              <div id=\"collapse1\" class=\"collapse show\" data-parent=\"#accordion\">\r\n              <div class=\"card-body\">\r\n              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>\r\n              </div>\r\n              </div>\r\n            </div>\r\n            <div class=\"card\">\r\n              <div class=\"card-header\">\r\n              <a class=\"card-link collapsed\" data-toggle=\"collapse\" href=\"#collapse2\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>\r\n              </div>\r\n              <div id=\"collapse2\" class=\"collapse\" data-parent=\"#accordion\">\r\n              <div class=\"card-body\">\r\n              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>\r\n              </div>\r\n              </div>\r\n            </div>\r\n            <div class=\"card\">\r\n              <div class=\"card-header\">\r\n              <a class=\"card-link collapsed\" data-toggle=\"collapse\" href=\"#collapse3\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>\r\n              </div>\r\n              <div id=\"collapse3\" class=\"collapse\" data-parent=\"#accordion\">\r\n              <div class=\"card-body\">\r\n              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>\r\n              </div>\r\n              </div>\r\n            </div>\r\n            <div class=\"card\">\r\n              <div class=\"card-header\">\r\n              <a class=\"card-link collapsed\" data-toggle=\"collapse\" href=\"#collapse4\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>\r\n              </div>\r\n              <div id=\"collapse4\" class=\"collapse\" data-parent=\"#accordion\">\r\n              <div class=\"card-body\">\r\n              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>\r\n              </div>\r\n              </div>\r\n            </div>\r\n            <div class=\"card\">\r\n              <div class=\"card-header\">\r\n              <a class=\"card-link collapsed\" data-toggle=\"collapse\" href=\"#collapse5\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>\r\n              </div>\r\n              <div id=\"collapse5\" class=\"collapse\" data-parent=\"#accordion\">\r\n              <div class=\"card-body\">\r\n              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>\r\n              </div>\r\n              </div>\r\n            </div>\r\n            <div class=\"card\">\r\n              <div class=\"card-header\">\r\n              <a class=\"card-link collapsed\" data-toggle=\"collapse\" href=\"#collapse6\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>\r\n              </div>\r\n              <div id=\"collapse6\" class=\"collapse\" data-parent=\"#accordion\">\r\n              <div class=\"card-body\">\r\n              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>\r\n              </div>\r\n              </div>\r\n            </div>\r\n            <div class=\"card\">\r\n              <div class=\"card-header\">\r\n              <a class=\"card-link collapsed\" data-toggle=\"collapse\" href=\"#collapse7\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>\r\n              </div>\r\n              <div id=\"collapse7\" class=\"collapse\" data-parent=\"#accordion\">\r\n              <div class=\"card-body\">\r\n              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>\r\n              </div>\r\n              </div>\r\n            </div>\r\n            <div class=\"card\">\r\n              <div class=\"card-header\">\r\n              <a class=\"card-link collapsed\" data-toggle=\"collapse\" href=\"#collapse8\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>\r\n              </div>\r\n              <div id=\"collapse8\" class=\"collapse\" data-parent=\"#accordion\">\r\n              <div class=\"card-body\">\r\n              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>\r\n              </div>\r\n              </div>\r\n            </div>\r\n            <div class=\"card\">\r\n              <div class=\"card-header\">\r\n              <a class=\"card-link collapsed\" data-toggle=\"collapse\" href=\"#collapse9\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>\r\n              </div>\r\n              <div id=\"collapse9\" class=\"collapse\" data-parent=\"#accordion\">\r\n              <div class=\"card-body\">\r\n              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>\r\n              </div>\r\n              </div>\r\n            </div>\r\n            <div class=\"card\">\r\n              <div class=\"card-header\">\r\n              <a class=\"card-link collapsed\" data-toggle=\"collapse\" href=\"#collapse10\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>\r\n              </div>\r\n              <div id=\"collapse10\" class=\"collapse\" data-parent=\"#accordion\">\r\n              <div class=\"card-body\">\r\n              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>\r\n              </div>\r\n              </div>\r\n            </div>\r\n\r\n        </div>\r\n      </div>\r\n    </div>\r\n\r\n  </div>\r\n</section>', 0, 'FAQ', '2024-03-12 06:48:46', '2024-04-15 09:47:01'),
(4, 'Terms Of Use', '<section class=\"innerbanner\" style=\"background: url(\'https://jobgetr.daedaltech.online/assets/images/inresume.jpg\');\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-12\">\r\n                <div class=\"innerheading\">\r\n                    <h2>Terms Of Use</h2>\r\n                    <ul class=\"breadcrumb\">\r\n                        <li><a href=\"https://jobgetr.daedaltech.online/home\" target=\"_blank\">Home</a></li>\r\n                        <li style=\"text-align: right; \">Terms Of Use</li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>\r\n<section class=\"inner-sec faq-sec\">\r\n  <div class=\"container\">\r\n   \r\n   <div class=\"row\">\r\n      <div class=\"col-md-12\">\r\n        <div class=\"content-design\">\r\n            \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                <ul>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing \r\n                and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n                </ul>\r\n                    \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n            \r\n        </div>\r\n      </div>\r\n    </div>\r\n\r\n  </div>\r\n</section>', 0, 'TermsofUse', '2024-03-12 07:11:44', '2024-04-15 09:47:13'),
(6, 'Privacy', '<section class=\"innerbanner\" style=\"background: url(\'https://jobgetr.daedaltech.online/assets/images/inresume.jpg\');\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-12\">\r\n                <div class=\"innerheading\">\r\n                    <h2>Privacy Policy</h2>\r\n                    <ul class=\"breadcrumb\">\r\n                        <li><a href=\"https://jobgetr.daedaltech.online/home\">Home</a></li>\r\n                        <li>Privacy Policy</li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>\r\n<section class=\"inner-sec faq-sec\">\r\n  <div class=\"container\">\r\n   \r\n   <div class=\"row\">\r\n      <div class=\"col-md-12\">\r\n        <div class=\"content-design\">\r\n            \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                <ul>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing \r\n                and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n                </ul>\r\n                    \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p></p></div></div></div></div></section>', 0, 'privacypolicy', '2024-03-12 07:14:33', '2024-04-15 09:47:24'),
(7, NULL, '<section class=\"innerbanner\" style=\"background: url(\'{{asset(\'assets/images/inresume.jpg\')}}\');\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-12\">\r\n                <div class=\"innerheading\">\r\n                    <h2>Terms Of Use</h2>\r\n                    <ul class=\"breadcrumb\">\r\n                        <li><a href=\"{{route(\'home\')}}\">Home</a></li>\r\n                        <li>Terms Of Use</li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>\r\n<section class=\"inner-sec faq-sec\">\r\n  <div class=\"container\">\r\n   \r\n   <div class=\"row\">\r\n      <div class=\"col-md-12\">\r\n        <div class=\"content-design\">\r\n            \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                <ul>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing \r\n                and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n                </ul>\r\n                    \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n            \r\n        </div>\r\n      </div>\r\n    </div>\r\n\r\n  </div>\r\n</section>', 0, 'TermsofUse', '2024-03-12 07:57:55', '2024-03-12 07:57:55'),
(8, 'Terms Of Use', '<section class=\"innerbanner\" style=\"background: url(\'https://jobgetr.daedaltech.online/assets/images/inresume.jpg\');\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-12\">\r\n                <div class=\"innerheading\">\r\n                    <h2>Terms Of Use</h2>\r\n                    <ul class=\"breadcrumb\">\r\n                        <li><a href=\"{{route(\'home\')}}\">Home</a></li>\r\n                        <li>Terms Of Use</li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>\r\n<section class=\"inner-sec faq-sec\">\r\n  <div class=\"container\">\r\n   \r\n   <div class=\"row\">\r\n      <div class=\"col-md-12\">\r\n        <div class=\"content-design\">\r\n            \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                <ul>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing \r\n                and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n                </ul>\r\n                    \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n            \r\n        </div>\r\n      </div>\r\n    </div>\r\n\r\n  </div>\r\n</section>', 0, 'TermsofUse', '2024-03-13 02:45:25', '2024-03-13 02:45:25'),
(9, NULL, '<section class=\"innerbanner\" style=\"background: url(\'https://jobgetr.daedaltech.online/assets/images/inresume.jpg\');\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-12\">\r\n                <div class=\"innerheading\">\r\n                    <h2>Terms Of Use</h2>\r\n                    <ul class=\"breadcrumb\">\r\n                        <li><a href=\"{{route(\'home\')}}\">Home</a></li>\r\n                        <li>Terms Of Use</li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>\r\n<section class=\"inner-sec faq-sec\">\r\n  <div class=\"container\">\r\n   \r\n   <div class=\"row\">\r\n      <div class=\"col-md-12\">\r\n        <div class=\"content-design\">\r\n            \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                <ul>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing \r\n                and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n                </ul>\r\n                    \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n            \r\n        </div>\r\n      </div>\r\n    </div>\r\n\r\n  </div>\r\n</section>', 0, 'TermsofUse', '2024-03-13 02:45:47', '2024-03-13 02:45:47');
INSERT INTO `page_managers` (`id`, `name`, `content`, `status`, `key`, `created_at`, `updated_at`) VALUES
(10, 'Terms Of Use', '<section class=\"innerbanner\" style=\"background: url(\'{{asset(\'assets/images/inresume.jpg\')}}\');\">\r\n    <div class=\"container\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-12\">\r\n                <div class=\"innerheading\">\r\n                    <h2>Terms Of Use</h2>\r\n                    <ul class=\"breadcrumb\">\r\n                        <li><a href=\"{{route(\'home\')}}\">Home</a></li>\r\n                        <li>Terms Of Use</li>\r\n                    </ul>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</section>\r\n<section class=\"inner-sec faq-sec\">\r\n  <div class=\"container\">\r\n   \r\n   <div class=\"row\">\r\n      <div class=\"col-md-12\">\r\n        <div class=\"content-design\">\r\n            \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n                <ul>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing \r\n                and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>\r\n                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n                </ul>\r\n                    \r\n                <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since \r\n                the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, \r\n                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets\r\n                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n            \r\n        </div>\r\n      </div>\r\n    </div>\r\n\r\n  </div>\r\n</section>', 0, 'TermsofUse', '2024-03-13 02:46:01', '2024-03-13 02:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rs9613609@gmail.com', 'ftA2xVJeAH7uuzEG8XoDZ51nlqhHM99hVTAYZgptLGfvtllUD1JuDYI0UuUg', '2024-02-20 12:55:10'),
('rasoolm@gmail.com', 'q6e3iYfawFVyo5Nrl3eQnDxztb7GoGTwtyYxE26X7PfP9fp4kU8mUURDK3Pk', '2024-02-22 01:46:08'),
('rs9613609@gmail.com', 'BxEDxZB6onAW4xErJVetb5iwGLoVRGg98DeJ2gn6MSONZLjJbFKYUF2sfvv8', '2024-03-02 03:39:43'),
('ashokkumar5620@gmail.com', 'P4GiCDGon6QsIl3erTOGBoiu10HNS36QthWoPfeN8oy6WRFFXRA1BlhiZzbN', '2024-03-02 03:40:52'),
('rs9613609@gmail.com', 'ceeB2tBQNtlV8o4KYQnLb8iUabBRx1Z6NOIUSZO7NAPzmPRuucjZS9jUc8Nz', '2024-03-02 05:11:06'),
('ashokkumar5620@gmail.com', 'JY9G8YUxYrzlwHDCZ5kV01oIdBeM6DRrMJ2X0gHiv0J4BgaUd4SYO8SgSLmy', '2024-03-09 02:49:48'),
('kake02@yopmail.com', 'aPdhSiW5V1cwvspEiEYza3lvVU4bX10TVblZGk6Y0TFpSreIJC0BcXPMSb8M', '2024-03-12 04:58:34'),
('rs9613609@gmail.com', 'ftA2xVJeAH7uuzEG8XoDZ51nlqhHM99hVTAYZgptLGfvtllUD1JuDYI0UuUg', '2024-02-20 12:55:10'),
('rasoolm@gmail.com', 'q6e3iYfawFVyo5Nrl3eQnDxztb7GoGTwtyYxE26X7PfP9fp4kU8mUURDK3Pk', '2024-02-22 01:46:08'),
('rs9613609@gmail.com', 'BxEDxZB6onAW4xErJVetb5iwGLoVRGg98DeJ2gn6MSONZLjJbFKYUF2sfvv8', '2024-03-02 03:39:43'),
('ashokkumar5620@gmail.com', 'P4GiCDGon6QsIl3erTOGBoiu10HNS36QthWoPfeN8oy6WRFFXRA1BlhiZzbN', '2024-03-02 03:40:52'),
('rs9613609@gmail.com', 'ceeB2tBQNtlV8o4KYQnLb8iUabBRx1Z6NOIUSZO7NAPzmPRuucjZS9jUc8Nz', '2024-03-02 05:11:06'),
('ashokkumar5620@gmail.com', 'JY9G8YUxYrzlwHDCZ5kV01oIdBeM6DRrMJ2X0gHiv0J4BgaUd4SYO8SgSLmy', '2024-03-09 02:49:48'),
('kake02@yopmail.com', 'aPdhSiW5V1cwvspEiEYza3lvVU4bX10TVblZGk6Y0TFpSreIJC0BcXPMSb8M', '2024-03-12 04:58:34'),
('resume@yopmail.com', 'XkWXwJMd7TczNxeUZM3JCtcenqwDUtBmSYmqVyTHxu1fh6CQQrZzC6KCDmGV', '2024-04-01 09:21:40'),
('student1@yopmail.com', '$2y$10$qZLNM0Uq28QIddhbaEsgAed5FWcZ1EJvMwFiim4Q55fZKUoNQ60mm', '2024-04-15 06:53:27'),
('studentnewuser@yopmail.com', '$2y$10$XnAGYSkGeaV6IA2pPlHj1uzkUqiyH3lepsCAzG.qM6IqorsKB7lMi', '2024-04-15 06:53:58'),
('mulicicef@mailinator.com', 'SfVuBX4QDkDebvDO0VKQozrk6HS60BybiY6t8cCFtBS5s8AQfnbea9Fzmed4', '2024-04-15 10:54:16'),
('deepak@gmail.com', '$2y$10$tRkwrXoqoO.Ie.p1d5/zs.9BXdip08Z1j4BIlzPH.e/3dgXLNlLEO', '2024-04-17 10:10:26'),
('resume_testing_55@yopmail.com', 'q2DXqbQEYqaUdSUYPFcNv8yPdxpF9TJBXwGZUMj4pOLb9Pw6Y1FvywknWux2', '2024-07-06 04:28:56'),
('resume_testing_55@yopmail.com', 'S15skyVF5GrsA4ZwzlKxtf36Qw85l2hkhT0XmdAWjdAMznFms4e7PEirmnoj', '2024-07-06 04:32:35'),
('open_test_1@yopmail.com', '$2y$10$xuLBE/ud9QJZ84MYWeI4EexE/Z6fmvKUUEurRlNSvtZN41YSERCUG', '2024-07-06 05:28:50'),
('info@jobgetr.ai', 'TGdHeumLO3011oIvPAIBrqtUTjmaA2P4i7HVQfiFSFkWeqTc9rrYC49K2XyM', '2024-10-03 15:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `number_of_job_applications` int DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stripe_price_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `stripe_product_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `description`, `number_of_job_applications`, `price`, `stripe_price_id`, `stripe_product_id`, `created_at`, `updated_at`) VALUES
(1, 'Good Plan', '30 days of automated customer job applications', 50, 99.00, 'price_1Ot5OrKNFFD1WFDOUzOlJ9WB', 'prod_PiWRtbuWayUodp', '2024-03-11 04:14:04', '2024-03-11 04:14:07'),
(2, 'Better Plan', '60 days of automated customer job applications', 100, 199.00, 'price_1Ot5PtKNFFD1WFDO1Z7jIooy', 'prod_PiWSp9G1kPJZo1', '2024-03-11 04:15:09', '2024-03-11 04:15:11'),
(3, 'Best Plan', '90 days of automated customer job applications', 200, 299.00, 'price_1Ot5QQKNFFD1WFDOTvPdxWcK', 'prod_PiWTn5ZvDdP8HE', '2024-03-11 04:15:42', '2024-03-11 04:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `profile_links`
--

CREATE TABLE `profile_links` (
  `id` int NOT NULL,
  `interview_id` int DEFAULT NULL,
  `links` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_links`
--

INSERT INTO `profile_links` (`id`, `interview_id`, `links`, `created_at`, `updated_at`) VALUES
(1, 45, 'https://jobgetr.daedaltech.online/OpenInterview/public/aftersubmit?interview=44', '2024-05-21 06:02:18', '2024-05-21 06:23:46'),
(5, 46, 'https://jobgetr.daedaltech.online/1', '2024-05-21 06:36:52', '2024-05-21 06:36:52'),
(6, 46, 'https://jobgetr.daedaltech.online/2', '2024-05-21 06:36:52', '2024-05-21 06:36:52'),
(7, 46, 'https://jobgetr.daedaltech.online/3', '2024-05-21 06:36:52', '2024-05-21 06:36:52'),
(8, 48, 'https://jobgetr.daedaltech.online/OpenInterview/public/aftersubmit?interview=44', '2024-05-21 09:45:16', '2024-05-21 09:45:16'),
(9, 48, 'https://jobgetr.daedaltech.online/OpenInterview/public/aftersubmit?interview=40', '2024-05-21 09:45:16', '2024-05-21 09:45:16'),
(10, 49, NULL, '2024-05-21 10:19:52', '2024-05-21 10:19:52'),
(11, 50, NULL, '2024-05-21 10:25:48', '2024-05-21 10:25:48'),
(12, 51, NULL, '2024-05-21 10:50:38', '2024-05-21 10:50:38'),
(13, 54, 'https://www.linkedin.com/in/rasoolm/', '2024-05-23 20:36:17', '2024-05-23 20:36:17'),
(14, 54, 'https://www.instagram.com/brassclay/', '2024-05-23 20:36:17', '2024-05-23 20:36:17'),
(15, 55, 'https://www.linkedin.com/in/rasoolm/', '2024-05-23 20:40:08', '2024-05-23 20:40:08'),
(16, 55, 'https://www.instagram.com/rasoolm/', '2024-05-23 20:40:08', '2024-05-23 20:40:08'),
(17, 56, 'https://www.linkedin.com/in/rasoolm/', '2024-05-23 20:45:02', '2024-05-23 20:45:19'),
(18, 56, 'https://www.linkedin.com/in/rasoolm/', '2024-05-23 20:45:19', '2024-05-23 20:45:19'),
(19, 57, 'https://www.linkedin.com/in/rasoolm/1', '2024-05-23 20:50:18', '2024-05-23 20:50:18'),
(20, 57, 'https://www.linkedin.com/in/rasoolm/2', '2024-05-23 20:50:18', '2024-05-23 20:50:18'),
(21, 59, NULL, '2024-05-24 06:18:29', '2024-05-24 06:18:29'),
(22, 62, NULL, '2024-05-29 05:43:20', '2024-05-29 05:43:20'),
(23, 65, NULL, '2024-06-26 12:12:32', '2024-06-26 12:12:32'),
(24, 66, 'http://www.linkedin.com/rm', '2024-06-30 01:47:49', '2024-06-30 01:51:44'),
(25, 66, 'http://www.instagram.com', '2024-06-30 01:51:44', '2024-06-30 01:51:44'),
(26, 66, 'http://www.me.com', '2024-06-30 01:51:44', '2024-06-30 01:51:44'),
(27, 60, NULL, '2024-07-11 13:35:06', '2024-07-11 13:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `questions` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questions`, `created_at`, `updated_at`) VALUES
(1, 'Tell Me About Yourself.?', '2024-03-26 01:49:15', '2024-03-26 05:05:38'),
(2, 'What are your weaknesses ?', '2024-03-26 04:16:28', '2024-03-26 05:06:18'),
(3, 'Why do you want this job ?', '2024-03-26 05:06:39', '2024-03-26 05:06:39'),
(4, 'What are your salary expectations ?', '2024-03-26 05:06:57', '2024-03-26 05:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE `references` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `referent_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referent_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referent_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referent_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `user_id`, `referent_name`, `referent_company`, `referent_email`, `referent_phone_number`, `created_at`, `updated_at`) VALUES
(6, 3, 'john', 'Zeeworks', 'Zeeworks@gmail.com', '+1 (627) 482-5918', '2024-02-05 09:16:06', '2024-02-15 14:04:16'),
(7, 9, NULL, NULL, NULL, NULL, '2024-02-08 06:05:38', '2024-02-08 06:05:38'),
(8, 27, 'Du university', 'logic get', 'logicget@gmail.com', '2558997441', '2024-02-09 08:37:23', '2024-02-09 08:55:07'),
(9, 30, 'Similique magna dolo', 'Corrupti et maiores', 'gego@mailinator.com', 'Minim eligendi repud', '2024-02-09 09:58:56', '2024-02-09 09:58:56'),
(13, 29, 'g', 'g', 'g', 'g', '2024-02-09 10:33:23', '2024-02-09 10:44:57'),
(16, 44, 'Necessitatibus quide', 'Aperiam sequi tempor', 'jinamil@mailinator.com', '+1 (966) 516-9573', '2024-02-13 04:50:22', '2024-02-13 04:50:22'),
(17, 46, 'Randall Mcclure', 'Clark and Branch LLC', 'mezoziper@mailinator.com', '+1 (643) 896-1152', '2024-02-13 06:08:07', '2024-02-13 06:08:07'),
(18, 46, 'Kamal Franco', 'Mcpherson Lewis LLC', 'sykekofyw@mailinator.com', '+1 (103) 765-8782', '2024-02-13 06:08:07', '2024-02-13 06:08:07'),
(19, 45, 'Voluptate fugit off', 'Molestiae ut ratione', 'xihef@mailinator.com', '+1 (599) 907-8989', '2024-02-13 06:48:45', '2024-02-13 06:48:45'),
(20, 50, 'Alexandra Cantu', 'Solomon and Ortega Co', 'dylihyxa@mailinator.com', '+1 (151) 185-8457', '2024-02-13 12:30:50', '2024-02-13 12:30:50'),
(23, 51, 'Finn Koch', 'Howe and Gutierrez Co', 'xawyzade@mailinator.com', '+1 (618) 469-9388', '2024-02-13 12:46:36', '2024-02-13 13:08:24'),
(25, 51, 'd', 'd', 'ar@mailinator.com', '+1 (396) 441-7129', '2024-02-13 12:46:36', '2024-02-13 13:08:24'),
(26, 52, 'John Doe', 'XYZ Corporation', 'johndoe@example.com', '(555) 123-4567', '2024-02-15 07:15:18', '2024-02-15 10:41:31'),
(27, 52, 'Jane Smith', 'ABC Enterprises', 'janesmith@example.com', '(555) 987-6543', '2024-02-15 07:15:59', '2024-02-15 10:41:31'),
(28, 57, 'ljkenwlfkn', 'wriln', 'anv@gmail.com', '+1(966) 516-9573', '2024-02-15 13:30:07', '2024-02-15 13:30:07'),
(29, 58, 'Isabelle Boone', 'Cohen and Alvarado Inc', 'xisoxu@mailinator.com', '+1 (763) 924-8337', '2024-02-15 14:22:09', '2024-02-19 06:54:02'),
(30, 60, 'jai', 'hhyke', 'hy@gmail.com', '(555) 555-1234', '2024-02-15 15:20:38', '2024-02-15 15:24:33'),
(31, 60, 'hii', 'nyyy', 'jkk@gmail.com', '(555) 555-1234', '2024-02-15 15:20:38', '2024-02-15 15:24:33'),
(32, 41, 'ABC', 'INOH Pvt. Ltd', 'abc@gmail.com', '+1 (966) 516-9573', '2024-02-22 06:09:11', '2024-03-04 04:49:41'),
(33, 67, 'Dolores voluptas des', 'Incidunt dolore aut', 'naqy@mailinator.com', '+1 (966) 516-9573', '2024-02-23 11:18:01', '2024-02-23 11:20:51'),
(34, 119, 'Ipsum molestiae duci', 'Voluptatem Sint ess', 'volobeqy@mailinator.com', '(555) 555-1234', '2024-06-14 11:04:13', '2024-06-14 11:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `resume_templates`
--

CREATE TABLE `resume_templates` (
  `id` bigint UNSIGNED NOT NULL,
  `template_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf_file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_preview_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume_templates`
--

INSERT INTO `resume_templates` (`id`, `template_path`, `pdf_file_path`, `template_preview_image`, `created_at`, `updated_at`) VALUES
(1, 'templates\\template_1\\template_1', 'templates\\template_1\\template_pdf_1', 'templates\\template_1\\images\\templates1.webp', NULL, NULL),
(2, 'templates\\template_2\\template_2', 'templates\\template_2\\template_pdf_2', 'templates\\template_2\\images\\templates2.webp', NULL, NULL),
(3, 'templates\\template_3\\template_3', 'templates\\template_3\\template_pdf_3', 'templates\\template_3\\images\\templates3.webp', NULL, NULL),
(4, 'templates\\template_4\\template_4', 'templates\\template_4\\template_pdf_4', 'templates\\template_4\\images\\templates4.webp', NULL, NULL),
(5, 'templates\\template_5\\template_5', 'templates\\template_5\\template_pdf_5', 'templates\\template_5\\images\\templates5.webp', NULL, NULL),
(6, 'templates\\template_6\\template_6', 'templates\\template_6\\template_pdf_6', 'templates\\template_6\\images\\templates6.webp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salary_calculator_data`
--

CREATE TABLE `salary_calculator_data` (
  `id` int NOT NULL,
  `job_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_period` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_salary` int DEFAULT NULL,
  `median_salary` int DEFAULT NULL,
  `max_salary` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary_calculator_data`
--

INSERT INTO `salary_calculator_data` (`id`, `job_title`, `location`, `publisher_name`, `publisher_link`, `salary_period`, `salary_currency`, `min_salary`, `median_salary`, `max_salary`, `created_at`, `updated_at`) VALUES
(1, 'PHP Developer', 'Jaipur, Rajasthan, India', 'Payscale', 'https://www.payscale.com/research/IN/Job=PHP_Developer/Salary/c4f17f3e/Jaipur', 'YEAR', 'INR', 117916, 296381, 598921, '2024-02-26 10:47:28', '2024-02-26 10:47:28'),
(2, 'laravel developer', 'New York, USA', 'ZipRecruiter', 'https://www.ziprecruiter.com/Salaries/Laravel-Developer-Salary--in-New-York', 'HOUR', 'USD', 44, 58, 87, '2024-02-26 10:48:10', '2024-02-26 10:48:10'),
(3, 'data engineer', 'atlanta, ga', 'Indeed', 'https://www.indeed.com/cmp/Microsoft/salaries/Data-Engineer/Atlanta-GA', 'YEAR', 'USD', 114644, 123273, 138066, '2024-03-01 04:10:45', '2024-03-01 04:10:45'),
(4, 'Data Engineer', 'Altanta, GA', 'Indeed', 'https://www.indeed.com/cmp/Microsoft/salaries/Data-Engineer/Atlanta-GA', 'YEAR', 'USD', 114644, 123273, 138066, '2024-03-01 04:54:44', '2024-03-01 04:54:44'),
(5, 'PHP Developer', 'Altanta, GA', 'ZipRecruiter', 'https://www.ziprecruiter.com/Salaries/PHP-Developer-Salary-in-Atlanta,GA', 'YEAR', 'USD', 62026, 90841, 125977, '2024-03-04 10:24:43', '2024-03-04 10:24:43'),
(6, 'React Developer', 'Bangalore, india', 'Glassdoor', 'https://www.glassdoor.co.in/Monthly-Pay/Mphasis-React-Developer-Bangalore-Monthly-Pay-EJI_IE29275.0,7_KO8,23_IL.24,33_IM1091.htm', 'MONTH', 'INR', 30457, 31743, 33030, '2024-03-07 05:45:27', '2024-03-07 05:45:27'),
(7, 'PHP Developer', 'Jaipur india', 'Payscale', 'https://www.payscale.com/research/IN/Job=PHP_Developer/Salary/c4f17f3e/Jaipur', 'YEAR', 'INR', 117916, 296381, 598921, '2024-03-11 11:40:45', '2024-03-11 11:40:45'),
(8, 'data entry', 'usa', 'Indeed', 'https://www.indeed.com/career/data-entry-clerk/salaries/MD', 'HOUR', 'USD', 12, 20, 34, '2024-04-11 09:31:46', '2024-04-11 09:31:46'),
(9, 'data', 'atlanta', 'Indeed', 'https://www.indeed.com/cmp/State-Farm-Mutual-Automobile-Insurance-Company/salaries/Data-Analyst/Atlanta-GA?period=HOURLY', 'HOUR', 'USD', 25, 26, 30, '2024-04-12 09:06:20', '2024-04-12 09:06:20'),
(10, 'fighter', 'uae', 'Glassdoor', 'https://www.glassdoor.com/Salary/Al-Asab-Fire-Fighter-Recruit-Sharjah-EJI_IE829690.0,7_KO8,28_IL.29,36_IM1189.htm?filter.payPeriod=MONTHLY', 'YEAR', 'AED', 17340, 18000, 18659, '2024-04-13 08:47:49', '2024-04-13 08:47:49'),
(11, 'fighter', 'asia', 'ZipRecruiter', 'https://www.ziprecruiter.com/Salaries/Ufc-Fighter-Salary-in-Brooklyn,NY', 'HOUR', 'USD', 25, 38, 57, '2024-04-13 08:48:47', '2024-04-13 08:48:47'),
(12, 'operator', 'india', 'AmbitionBox', 'https://www.ambitionbox.com/salaries/google-salaries/operator', 'YEAR', 'INR', 70000, 187997, 420000, '2024-04-13 08:50:15', '2024-04-13 08:50:15'),
(13, 'php developer', 'jaipur', 'Payscale', 'https://www.payscale.com/research/IN/Job=PHP_Developer/Salary/c4f17f3e/Jaipur', 'YEAR', 'INR', 117916, 296381, 598921, '2024-04-15 12:07:46', '2024-04-15 12:07:46'),
(14, 'labour', 'india', 'Glassdoor', 'https://www.glassdoor.co.in/Monthly-Pay/Minister-of-Labour-and-Employment-India-Government-Account-Manager-New-Delhi-Monthly-Pay-EJI_IE1267793.0,39_KO40,66_IL.67,76_IM1083.htm', 'YEAR', 'INR', 96521, 100178, 103834, '2024-04-16 05:58:38', '2024-04-16 05:58:38'),
(15, 'data entry', 'uae', 'Glassdoor', 'https://www.glassdoor.com/Monthly-Pay/Emirates-Data-Entry-Emiratos-%C3%81rabes-Unidos-Monthly-Pay-EJI_IE23433.0,8_KO9,19_IL.20,42_IN6.htm', 'YEAR', 'AED', 900, 2200, 3500, '2024-04-16 12:35:01', '2024-04-16 12:35:01'),
(16, 'data entry', 'europ', 'Glassdoor', 'https://www.glassdoor.com/Salaries/germany-data-entry-salary-SRCH_IL.0,7_IN96_KO8,18.htm', 'MONTH', 'EUR', 1475, 2468, 2700, '2024-04-16 13:08:39', '2024-04-16 13:08:39'),
(17, 'technical project manager', 'atlanta, ga', 'Glassdoor', 'https://www.glassdoor.com/Salary/Cisco-Systems-Technical-Project-Manager-Atlanta-Salaries-EJI_IE1425.0,13_KO14,39_IL.40,47_IM52.htm', 'YEAR', 'USD', 113663, 129398, 147311, '2024-05-08 02:40:21', '2024-05-08 02:40:21'),
(18, 'technical project manager', 'houston, texas', 'ZipRecruiter', 'https://www.ziprecruiter.com/Salaries/Technical-Project-Manager-Salary-in-Houston,TX', 'YEAR', 'USD', 78307, 117465, 152795, '2024-05-19 14:13:01', '2024-05-19 14:13:01'),
(19, 'Technical Project Manager', 'Houston', 'ZipRecruiter', 'https://www.ziprecruiter.com/Salaries/Technical-Project-Manager-Salary-in-Houston,TX', 'YEAR', 'USD', 78307, 117465, 152795, '2024-05-20 07:17:09', '2024-05-20 07:17:09'),
(20, 'mern developer', 'india', 'AmbitionBox', 'https://www.ambitionbox.com/salaries/infosys-salaries/mern-stack-developer', 'YEAR', 'INR', 360000, 444075, 530000, '2024-05-29 05:28:48', '2024-05-29 05:28:48'),
(21, 'Technical Project Manager', 'asia', 'Payscale', 'https://www.payscale.com/research/MY/Job=Technical_Project_Manager/Salary', 'YEAR', 'MYR', 11957, 109957, 285426, '2024-07-05 05:10:00', '2024-07-05 05:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `selected_questions`
--

CREATE TABLE `selected_questions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `question_id` int NOT NULL,
  `type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `selected_questions`
--

INSERT INTO `selected_questions` (`id`, `user_id`, `question_id`, `type`, `created_at`, `updated_at`) VALUES
(6, 139, 1, 'admin', '2024-04-23 08:46:23', '2024-04-23 08:46:23'),
(7, 139, 4, 'admin', '2024-04-23 08:46:23', '2024-04-23 08:46:23'),
(8, 141, 1, 'admin', '2024-04-23 09:47:34', '2024-04-23 09:47:34'),
(9, 141, 3, 'admin', '2024-04-23 09:47:34', '2024-04-23 09:47:34'),
(10, 141, 7, 'user', '2024-04-23 09:47:34', '2024-04-23 09:47:34'),
(11, 142, 1, 'admin', '2024-04-23 09:56:16', '2024-04-23 09:56:16'),
(12, 142, 3, 'admin', '2024-04-23 09:56:16', '2024-04-23 09:56:16'),
(13, 142, 8, 'user', '2024-04-23 09:56:16', '2024-04-23 09:56:16'),
(14, 143, 1, 'admin', '2024-04-23 10:00:25', '2024-04-23 10:00:25'),
(15, 143, 3, 'admin', '2024-04-23 10:00:25', '2024-04-23 10:00:25'),
(16, 143, 9, 'user', '2024-04-23 10:00:25', '2024-04-23 10:00:25'),
(17, 144, 1, 'admin', '2024-04-23 10:12:39', '2024-04-23 10:12:39'),
(18, 144, 3, 'admin', '2024-04-23 10:12:39', '2024-04-23 10:12:39'),
(19, 144, 10, 'user', '2024-04-23 10:12:39', '2024-04-23 10:12:39'),
(20, 145, 1, 'admin', '2024-04-23 10:17:19', '2024-04-23 10:17:19'),
(21, 145, 4, 'admin', '2024-04-23 10:17:19', '2024-04-23 10:17:19'),
(22, 145, 11, 'user', '2024-04-23 10:17:19', '2024-04-23 10:17:19'),
(36, 150, 1, 'admin', '2024-05-06 01:26:20', '2024-05-06 01:26:20'),
(37, 150, 14, 'user', '2024-05-06 01:26:20', '2024-05-06 01:26:20'),
(60, 119, 1, 'admin', '2024-05-21 06:34:37', '2024-05-21 06:34:37'),
(61, 119, 2, 'admin', '2024-05-21 06:34:37', '2024-05-21 06:34:37'),
(62, 152, 1, 'admin', '2024-05-21 10:46:18', '2024-05-21 10:46:18'),
(63, 152, 16, 'user', '2024-05-21 10:46:18', '2024-05-21 10:46:18'),
(77, 122, 1, 'admin', '2024-05-29 05:24:49', '2024-05-29 05:24:49'),
(80, 153, 1, 'admin', '2024-06-14 10:19:44', '2024-06-14 10:19:44'),
(81, 2, 4, 'admin', '2024-06-30 01:46:29', '2024-06-30 01:46:29'),
(82, 2, 21, 'user', '2024-06-30 01:46:29', '2024-06-30 01:46:29'),
(83, 2, 22, 'user', '2024-06-30 01:46:29', '2024-06-30 01:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `key_` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key_`, `value`, `created_at`, `updated_at`) VALUES
(1, 'twitter_link', '<a class=\"twitter-timeline\" data-lang=\"en\" href=\"https://twitter.com/Glassdoor?ref_src=twsrc%5Etfw\">Tweets by Glassdoor</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', NULL, NULL),
(2, 'youtube_video_url', 'https://www.youtube.com/embed/HMBtyE0wL60', '2024-03-05 07:09:46', '2024-03-05 09:56:46'),
(3, 'youtube_video_description', '<p><img alt=\"\" src=\"https://www.google.com/url?sa=i&amp;url=https%3A%2F%2Fwww.digitalocean.com%2Fcommunity%2Ftutorials%2Fhow-to-add-a-background-image-to-the-top-section-of-your-webpage-with-html&amp;psig=AOvVaw2Qhb-XFGebJRsAxefmdime&amp;ust=1709719258513000&amp;source=images&amp;cd=vfe&amp;opi=89978449&amp;ved=0CBMQjRxqFwoTCOiUndvu3IQDFQAAAAAdAAAAABAE\">How to get started,<br></p><p>1 - Upload or create your resume.<br></p><p>2 - Update your job preferences.</p><p>3 - Track the jobs applied for in the bottom section. Check your email regularly for updates and interview requests from potential employers. </p><p>That\'s it!</p><p>You can always upload or edit your resume. We will always use the last resume updated on the platform.<br></p>', NULL, '2024-04-29 10:14:17'),
(4, 'profile_text_block', '<div class=\"row\"><div class=\"col-md-3\"><div class=\"extrablog\"><h2></h2><h2 style=\"letter-spacing: 0.4992px;\">Test1</h2><h3><a href=\"#\">Lorem Ipsum is simply dummy text of the printing</a></h3><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div></div><div class=\"col-md-3\"><div class=\"extrablog\"><h2>Test 2<br></h2><h3><a href=\"#\">Lorem Ipsum is simply dummy text of the printing</a></h3><p><a href=\"https://jobgetr.daedaltech.online/OpenInterview/public/home\" target=\"_blank\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></p></div></div><div class=\"col-md-3\"><div class=\"extrablog\"><h2>Politics</h2><h3><a href=\"#\">Lorem Ipsum is simply dummy text of the printing</a></h3><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div></div><div class=\"col-md-3\"><div class=\"extrablog\"><h2>Equality</h2><h3><a href=\"#\">Lorem Ipsum is simply dummy text of the printing</a></h3><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div></div></div>', NULL, '2024-04-29 10:09:10'),
(6, 'interview_price_1', '5', '2024-04-26 06:39:51', '2024-04-26 06:39:51'),
(7, 'interview_price_5', '7', '2024-04-26 06:39:51', '2024-04-26 06:39:51'),
(8, 'interview_price_10', '10', '2024-04-26 06:39:51', '2024-04-26 06:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `skill`, `level`, `created_at`, `updated_at`) VALUES
(10, 2, 'dsfgds', 'Beginner', '2024-01-29 02:38:21', '2024-04-18 18:50:39'),
(11, 2, 'dsfgd', '', '2024-01-29 02:38:21', '2024-04-18 18:50:39'),
(12, 4, 'Testing', '', '2024-01-30 10:32:02', '2024-01-30 10:32:02'),
(17, 6, 'PHP', 'Beginner', '2024-01-31 09:35:31', '2024-01-31 09:35:31'),
(20, 13, 'Telly', 'Experienced', '2024-02-01 06:28:07', '2024-02-01 06:28:07'),
(21, 13, 'Account', 'Experienced', '2024-02-01 06:28:07', '2024-02-01 06:28:07'),
(22, 13, 'Billing', 'Expert', '2024-02-01 06:28:07', '2024-02-01 06:28:07'),
(23, 18, 'Laravel', 'Experienced', '2024-02-01 09:14:34', '2024-02-01 09:14:34'),
(24, 18, 'PHP', 'Experienced', '2024-02-01 09:14:34', '2024-02-01 09:14:34'),
(25, 22, 'laravel', '', '2024-02-03 05:23:33', '2024-02-03 05:23:33'),
(40, 9, 'PHP', 'Experienced', '2024-02-08 05:38:29', '2024-02-08 05:38:29'),
(41, 9, 'Laravel', 'Experienced', '2024-02-08 05:38:29', '2024-02-08 05:38:29'),
(49, 27, 'Laravel', 'Experienced', '2024-02-09 08:26:46', '2024-02-09 08:54:57'),
(50, 27, 'react', 'Beginner', '2024-02-09 08:26:46', '2024-02-09 08:54:57'),
(51, 27, 'css', 'Expert', '2024-02-09 08:26:47', '2024-02-09 08:54:57'),
(52, 27, 'bootstrap', 'Beginner', '2024-02-09 08:26:47', '2024-02-09 08:54:57'),
(63, 29, 'sdfgsdf', 'Beginner', '2024-02-09 09:32:40', '2024-02-09 10:44:52'),
(64, 29, 'sdfg', 'Skillful', '2024-02-09 09:32:40', '2024-02-09 10:44:52'),
(65, 29, 'nbnbn', 'Experienced', '2024-02-09 09:32:40', '2024-02-09 10:44:52'),
(66, 41, 'Laravel', 'Expert', '2024-02-09 09:42:06', '2024-03-04 04:49:19'),
(67, 41, 'PHP', 'Skillful', '2024-02-09 09:42:06', '2024-03-04 04:49:19'),
(68, 41, 'React Js', 'Skillful', '2024-02-09 09:42:06', '2024-03-04 04:49:19'),
(69, 41, 'Node Js', 'Beginner', '2024-02-09 09:42:06', '2024-03-04 04:49:19'),
(70, 30, 'Adipisci dolor labor', 'Skillful', '2024-02-09 09:58:39', '2024-02-09 09:58:39'),
(71, 30, 'Cupiditate error id', 'Experienced', '2024-02-09 09:58:39', '2024-02-09 09:58:39'),
(72, 30, 'Voluptatum aut modi', 'Experienced', '2024-02-09 09:58:39', '2024-02-09 09:58:39'),
(73, 30, 'Aut tempora est adip', 'Expert', '2024-02-09 09:58:39', '2024-02-09 09:58:39'),
(74, 41, 'MONGO', 'Novice', '2024-02-09 11:47:26', '2024-03-04 04:49:19'),
(75, 41, 'MYSQL', 'Skillful', '2024-02-09 11:47:26', '2024-03-04 04:49:19'),
(88, 46, 'a', 'Novice', '2024-02-13 06:06:04', '2024-02-13 06:06:04'),
(89, 46, 's', 'Skillful', '2024-02-13 06:06:05', '2024-02-13 06:06:05'),
(90, 45, 'g', 'Novice', '2024-02-13 06:49:36', '2024-02-13 06:49:36'),
(91, 45, 'h', 'Skillful', '2024-02-13 06:49:36', '2024-02-13 06:49:36'),
(92, 48, 'Est aut molestiae re', 'Not applicable', '2024-02-13 09:00:25', '2024-02-13 09:00:25'),
(93, 48, 'jljk', 'Novice', '2024-02-13 09:00:25', '2024-02-13 09:00:25'),
(97, 50, 'Cillum ipsum aut su', 'Experienced', '2024-02-13 12:30:50', '2024-02-13 12:30:50'),
(103, 51, 'Culpa et natus est', 'Beginner', '2024-02-13 12:50:06', '2024-02-14 05:40:36'),
(107, 51, 'cxcx', 'Beginner', '2024-02-14 05:40:36', '2024-02-14 05:40:36'),
(115, 56, 'Laravel', 'Beginner', '2024-02-15 13:24:22', '2024-02-15 13:24:22'),
(116, 3, 'fdgdsfgsdf', '', '2024-02-15 13:52:22', '2024-02-15 14:02:55'),
(117, 58, 'asdf', 'Beginner', '2024-02-15 14:22:09', '2024-02-19 06:04:47'),
(118, 60, 'laravel', 'Skillful', '2024-02-15 15:20:38', '2024-02-15 15:23:10'),
(119, 60, 'hcl', 'Experienced', '2024-02-15 15:20:38', '2024-02-15 15:23:10'),
(124, 67, 'sdfg', 'Skillful', '2024-02-23 11:17:12', '2024-02-23 11:20:43'),
(126, 49, 'jyfjg', 'Experienced', '2024-02-23 13:15:57', '2024-02-23 13:18:15'),
(127, 119, 'test', 'Expert', '2024-04-15 10:15:15', '2024-06-14 10:59:13'),
(129, 119, 'cvbnm,', 'Experienced', '2024-06-14 10:59:13', '2024-06-14 10:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Alabama', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(2, 'Alaska', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(3, 'Arizona', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(4, 'Arkansas', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(5, 'California', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(6, 'Colorado', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(7, 'Connecticut', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(8, 'Delaware', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(9, 'Florida', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(10, 'Georgia', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(11, 'Hawaii', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(12, 'Idaho', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(13, 'Illinois', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(14, 'Indiana', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(15, 'Iowa', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(16, 'Kansas', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(17, 'Kentucky', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(18, 'Louisiana', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(19, 'Maine', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(20, 'Maryland', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(21, 'Massachusetts', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(22, 'Michigan', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(23, 'Minnesota', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(24, 'Mississippi', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(25, 'Missouri', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(26, 'Montana', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(27, 'Nebraska', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(28, 'Nevada', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(29, 'New Hampshire', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(30, 'New Jersey', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(31, 'New Mexico', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(32, 'New York', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(33, 'North Carolina', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(34, 'North Dakota', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(35, 'Ohio', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(36, 'Oklahoma', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(37, 'Oregon', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(38, 'Pennsylvania', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(39, 'Rhode Island', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(40, 'South Carolina', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(41, 'South Dakota', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(42, 'Tennessee', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(43, 'Texas', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(44, 'Utah', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(45, 'Vermont', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(46, 'Virginia', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(47, 'Washington', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(48, 'West Virginia', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(49, 'Wisconsin', '2024-01-23 11:00:00', '2024-01-23 11:00:00'),
(50, 'Wyoming', '2024-01-23 11:00:00', '2024-01-23 11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `time_tracks`
--

CREATE TABLE `time_tracks` (
  `id` bigint UNSIGNED NOT NULL,
  `interview_id` int DEFAULT NULL,
  `question_id` int DEFAULT NULL,
  `question_type` enum('admin','user') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` time DEFAULT NULL,
  `end` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_tracks`
--

INSERT INTO `time_tracks` (`id`, `interview_id`, `question_id`, `question_type`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'admin', '00:00:00', '00:00:06', '2024-04-17 13:22:50', '2024-04-17 13:22:50'),
(2, 1, 1, 'user', '00:00:07', '00:00:12', '2024-04-17 13:22:57', '2024-04-17 13:22:57'),
(3, 2, 1, 'admin', '00:00:00', '00:00:07', '2024-04-23 08:34:07', '2024-04-23 08:34:07'),
(4, 2, 3, 'admin', '00:00:08', '00:00:16', '2024-04-23 08:34:16', '2024-04-23 08:34:16'),
(5, 2, 2, 'user', '00:00:17', '00:00:23', '2024-04-23 08:34:23', '2024-04-23 08:34:23'),
(6, 3, 1, 'admin', '00:00:00', '00:00:03', '2024-04-23 08:46:33', '2024-04-23 08:46:33'),
(7, 3, 4, 'admin', '00:00:04', '00:00:10', '2024-04-23 08:46:40', '2024-04-23 08:46:40'),
(8, 4, 1, 'admin', '00:00:00', '00:00:10', '2024-04-23 09:47:53', '2024-04-23 09:47:53'),
(9, 4, 3, 'admin', '00:00:11', '00:00:22', '2024-04-23 09:48:06', '2024-04-23 09:48:06'),
(10, 4, 7, 'user', '00:00:23', '00:00:29', '2024-04-23 09:48:13', '2024-04-23 09:48:13'),
(11, 5, 1, 'admin', '00:00:00', '00:00:03', '2024-04-23 09:56:27', '2024-04-23 09:56:27'),
(12, 5, 3, 'admin', '00:00:04', '00:00:09', '2024-04-23 09:56:33', '2024-04-23 09:56:33'),
(13, 5, 8, 'user', '00:00:10', '00:00:16', '2024-04-23 09:56:40', '2024-04-23 09:56:40'),
(14, 6, 1, 'admin', '00:00:00', '00:00:03', '2024-04-23 10:00:34', '2024-04-23 10:00:34'),
(15, 6, 3, 'admin', '00:00:04', '00:00:10', '2024-04-23 10:00:41', '2024-04-23 10:00:41'),
(16, 6, 9, 'user', '00:00:11', '00:00:16', '2024-04-23 10:00:46', '2024-04-23 10:00:46'),
(17, 7, 1, 'admin', '00:00:00', '00:00:22', '2024-04-23 10:13:10', '2024-04-23 10:13:10'),
(18, 7, 3, 'admin', '00:00:23', '00:00:40', '2024-04-23 10:13:27', '2024-04-23 10:13:27'),
(19, 7, 10, 'user', '00:00:41', '00:01:00', '2024-04-23 10:13:54', '2024-04-23 10:13:54'),
(20, 8, 1, 'admin', '00:00:00', '00:00:24', '2024-04-23 10:17:53', '2024-04-23 10:17:53'),
(21, 8, 4, 'admin', '00:00:25', '00:00:35', '2024-04-23 10:18:03', '2024-04-23 10:18:03'),
(22, 8, 11, 'user', '00:00:36', '00:00:54', '2024-04-23 10:18:22', '2024-04-23 10:18:22'),
(23, 9, 1, 'admin', '00:00:00', '00:00:03', '2024-04-29 11:30:37', '2024-04-29 11:30:37'),
(24, 9, 4, 'admin', '00:00:04', '00:00:10', '2024-04-29 11:30:43', '2024-04-29 11:30:43'),
(25, 10, 1, 'admin', '00:00:00', '00:00:04', '2024-04-29 12:17:06', '2024-04-29 12:17:06'),
(26, 10, 1, 'user', '00:00:05', '00:00:11', '2024-04-29 12:17:12', '2024-04-29 12:17:12'),
(27, 11, 1, 'admin', '00:00:00', '00:00:03', '2024-05-04 04:50:22', '2024-05-04 04:50:22'),
(28, 11, 4, 'admin', '00:00:04', '00:00:09', '2024-05-04 04:50:29', '2024-05-04 04:50:29'),
(29, 11, 13, 'user', '00:00:10', '00:00:20', '2024-05-04 04:50:39', '2024-05-04 04:50:39'),
(30, 12, 1, 'admin', '00:00:00', '00:00:05', '2024-05-04 06:12:58', '2024-05-04 06:12:58'),
(31, 12, 13, 'user', '00:00:06', '00:00:14', '2024-05-04 06:13:08', '2024-05-04 06:13:08'),
(32, 13, 1, 'admin', '00:00:00', '00:00:21', '2024-05-06 01:26:51', '2024-05-06 01:26:51'),
(33, 13, 14, 'user', '00:00:22', '00:01:04', '2024-05-06 01:27:34', '2024-05-06 01:27:34'),
(34, 14, 1, 'admin', '00:00:00', '00:00:12', '2024-05-08 02:06:50', '2024-05-08 02:06:50'),
(35, 15, 1, 'admin', '00:00:00', '00:00:05', '2024-05-08 02:16:30', '2024-05-08 02:16:30'),
(36, 19, 1, 'admin', '00:00:00', '00:00:06', '2024-05-11 05:57:46', '2024-05-11 05:57:46'),
(37, 19, 2, 'admin', '00:00:07', '00:00:13', '2024-05-11 05:57:52', '2024-05-11 05:57:52'),
(38, 19, 3, 'admin', '00:00:14', '00:00:20', '2024-05-11 05:57:59', '2024-05-11 05:57:59'),
(39, 19, 4, 'admin', '00:00:21', '00:00:26', '2024-05-11 05:58:05', '2024-05-11 05:58:05'),
(40, 20, 1, 'admin', '00:00:00', '00:00:01', '2024-05-11 06:31:58', '2024-05-11 06:31:58'),
(41, 20, 2, 'admin', '00:00:02', '00:00:07', '2024-05-11 06:32:04', '2024-05-11 06:32:04'),
(42, 20, 3, 'admin', '00:00:08', '00:00:12', '2024-05-11 06:32:09', '2024-05-11 06:32:09'),
(43, 23, 1, 'admin', '00:00:00', '00:00:02', '2024-05-11 06:52:45', '2024-05-11 06:52:45'),
(44, 23, 2, 'admin', '00:00:03', '00:00:08', '2024-05-11 06:52:51', '2024-05-11 06:52:51'),
(45, 23, 3, 'admin', '00:00:09', '00:00:15', '2024-05-11 06:52:58', '2024-05-11 06:52:58'),
(46, 23, 4, 'admin', '00:00:16', '00:00:43', '2024-05-11 06:53:26', '2024-05-11 06:53:26'),
(47, 25, 2, 'admin', '00:00:00', '00:00:04', '2024-05-19 13:48:14', '2024-05-19 13:48:14'),
(48, 25, 3, 'admin', '00:00:05', '00:00:10', '2024-05-19 13:48:20', '2024-05-19 13:48:20'),
(49, 25, 4, 'admin', '00:00:11', '00:00:17', '2024-05-19 13:48:27', '2024-05-19 13:48:27'),
(50, 26, 1, 'admin', '00:00:00', '00:00:03', '2024-05-20 06:15:46', '2024-05-20 06:15:46'),
(51, 26, 4, 'admin', '00:00:04', '00:00:09', '2024-05-20 06:15:51', '2024-05-20 06:15:51'),
(52, 28, 1, 'admin', '00:00:00', '00:00:03', '2024-05-20 06:26:52', '2024-05-20 06:26:52'),
(53, 28, 12, 'user', '00:00:04', '00:00:10', '2024-05-20 06:27:00', '2024-05-20 06:27:00'),
(54, 46, 1, 'admin', '00:00:00', '00:00:13', '2024-05-21 06:35:00', '2024-05-21 06:35:00'),
(55, 46, 2, 'admin', '00:00:14', '00:00:20', '2024-05-21 06:35:06', '2024-05-21 06:35:06'),
(56, 52, 1, 'admin', '00:00:00', '00:00:04', '2024-05-21 10:47:20', '2024-05-21 10:47:20'),
(57, 52, 16, 'user', '00:00:05', '00:00:10', '2024-05-21 10:47:25', '2024-05-21 10:47:25'),
(58, 54, 2, 'admin', '00:00:00', '00:00:01', '2024-05-23 20:31:39', '2024-05-23 20:31:39'),
(59, 54, 3, 'admin', '00:00:02', '00:00:08', '2024-05-23 20:31:45', '2024-05-23 20:31:45'),
(60, 61, 1, 'admin', '00:00:00', '00:00:06', '2024-05-28 11:15:10', '2024-05-28 11:15:10'),
(61, 63, 2, 'admin', '00:00:00', '00:00:00', '2024-05-30 15:47:57', '2024-05-30 15:47:57'),
(62, 66, 4, 'admin', '00:00:00', '00:00:04', '2024-06-30 01:46:44', '2024-06-30 01:46:44'),
(63, 66, 21, 'user', '00:00:05', '00:00:10', '2024-06-30 01:46:50', '2024-06-30 01:46:50'),
(64, 66, 22, 'user', '00:00:11', '00:00:16', '2024-06-30 01:46:56', '2024-06-30 01:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `plan_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `plan_id`, `payment_id`, `payment_status`, `date`, `amount`, `created_at`, `updated_at`) VALUES
(1, 51, '2', 'sub_1OommfKNFFD1WFDOND52XP5e', 'paid', '2024-02-28', 120.00, '2024-02-28 13:03:08', '2024-02-28 13:03:08'),
(2, 75, '2', 'sub_1OpM8hKNFFD1WFDOkJVi9Ui4', 'paid', '2024-03-01', 99.00, '2024-03-01 02:48:07', '2024-03-01 02:48:07'),
(3, 75, '1', 'sub_1OpMMCKNFFD1WFDOXYrRz7ud', 'paid', '2024-03-01', 0.00, '2024-03-01 03:02:00', '2024-03-01 03:02:00'),
(4, 75, '3', 'sub_1Op8NHKNFFD1WFDOdkSTYEqf', 'active', '2024-03-01', 199.00, '2024-03-01 03:41:34', '2024-03-01 03:41:34'),
(5, 76, '2', 'sub_1OpO4AKNFFD1WFDOEORLUhaO', 'paid', '2024-03-01', 99.00, '2024-03-01 04:51:34', '2024-03-01 04:51:34'),
(6, 77, '3', 'sub_1OpOhvKNFFD1WFDOZJQrv1e7', 'paid', '2024-03-01', 199.00, '2024-03-01 05:32:38', '2024-03-01 05:32:38'),
(7, 78, '3', 'sub_1OpPFIKNFFD1WFDOXfbdOSS3', 'incomplete', '2024-03-01', 199.00, '2024-03-01 06:07:03', '2024-03-01 06:07:03'),
(8, 78, '3', 'sub_1OpPFIKNFFD1WFDOXfbdOSS3', 'active', '2024-03-01', 199.00, '2024-03-01 06:07:03', '2024-03-01 06:07:03'),
(9, 78, '3', 'sub_1OpPFIKNFFD1WFDOXfbdOSS3', 'paid', '2024-03-01', 199.00, '2024-03-01 06:07:06', '2024-03-01 06:07:06'),
(10, 78, '2', 'sub_1OpPGGKNFFD1WFDOBjLa1XCa', 'incomplete', '2024-03-01', 120.00, '2024-03-01 06:08:03', '2024-03-01 06:08:03'),
(11, 78, '2', 'sub_1OpPGGKNFFD1WFDOBjLa1XCa', 'active', '2024-03-01', 120.00, '2024-03-01 06:08:03', '2024-03-01 06:08:03'),
(12, 78, '2', 'sub_1OpPGGKNFFD1WFDOBjLa1XCa', 'paid', '2024-03-01', 120.00, '2024-03-01 06:08:06', '2024-03-01 06:08:06'),
(13, 79, '2', 'sub_1OpPM4KNFFD1WFDO5rRSpuCY', 'incomplete', '2024-03-01', 99.00, '2024-03-01 06:14:04', '2024-03-01 06:14:04'),
(14, 79, '2', 'sub_1OpPM4KNFFD1WFDO5rRSpuCY', 'active', '2024-03-01', 99.00, '2024-03-01 06:14:04', '2024-03-01 06:14:04'),
(15, 79, '2', 'sub_1OpPM4KNFFD1WFDO5rRSpuCY', 'paid', '2024-03-01', 99.00, '2024-03-01 06:14:07', '2024-03-01 06:14:07'),
(16, 80, '2', 'sub_1OpPouKNFFD1WFDOjRD2yXD2', 'incomplete', '2024-03-01', 99.00, '2024-03-01 06:43:52', '2024-03-01 06:43:52'),
(17, 80, '2', 'sub_1OpPouKNFFD1WFDOjRD2yXD2', 'active', '2024-03-01', 99.00, '2024-03-01 06:43:52', '2024-03-01 06:43:52'),
(18, 80, '2', 'sub_1OpPouKNFFD1WFDOjRD2yXD2', 'paid', '2024-03-01', 99.00, '2024-03-01 06:43:55', '2024-03-01 06:43:55'),
(19, 80, '3', 'sub_1OpPrgKNFFD1WFDORdZgq5MM', 'incomplete', '2024-03-01', 199.00, '2024-03-01 06:46:44', '2024-03-01 06:46:44'),
(20, 80, '3', 'sub_1OpPrgKNFFD1WFDORdZgq5MM', 'active', '2024-03-01', 199.00, '2024-03-01 06:46:44', '2024-03-01 06:46:44'),
(21, 80, '3', 'sub_1OpPrgKNFFD1WFDORdZgq5MM', 'paid', '2024-03-01', 199.00, '2024-03-01 06:46:48', '2024-03-01 06:46:48'),
(22, 80, '3', 'sub_1OpPrgKNFFD1WFDORdZgq5MM', 'active', '2024-03-01', 199.00, '2024-03-01 07:05:21', '2024-03-01 07:05:21'),
(38, 83, '2', 'sub_1OpTi7KNFFD1WFDO4w0952Pc', 'paid', '2024-03-01', 99.00, '2024-03-01 10:53:08', '2024-03-01 10:53:08'),
(39, 83, '2', 'sub_1OpTi7KNFFD1WFDO4w0952Pc', 'paid', '2024-03-01', 99.00, '2024-03-01 11:12:57', '2024-03-01 11:12:57'),
(43, 89, '2', 'sub_1OqwpzKNFFD1WFDOHzXAc6Q5', 'paid', '2024-03-05', 99.00, '2024-03-05 12:11:20', '2024-03-05 12:11:20'),
(44, 89, '2', 'sub_1OqwpzKNFFD1WFDOHzXAc6Q5', 'paid', '2024-03-05', 99.00, '2024-03-05 12:11:20', '2024-03-05 12:11:20'),
(45, 90, '21', 'sub_1OrEauKNFFD1WFDOZdx3vGoQ', 'paid', '2024-03-06', 199.00, '2024-03-06 07:08:57', '2024-03-06 07:08:57'),
(46, 90, '21', 'sub_1OrEauKNFFD1WFDOZdx3vGoQ', 'paid', '2024-03-06', 199.00, '2024-03-06 08:09:00', '2024-03-06 08:09:00'),
(47, 51, '20', 'sub_1Os1pkKNFFD1WFDOGH5J9wto', 'paid', '2024-03-08', 99.00, '2024-03-08 11:43:32', '2024-03-08 11:43:32'),
(48, 51, '20', 'sub_1Os1pkKNFFD1WFDOGH5J9wto', 'paid', '2024-03-08', 99.00, '2024-03-08 11:43:32', '2024-03-08 11:43:32'),
(49, 92, '22', 'sub_1Os1wsKNFFD1WFDOIUk6DN1D', 'paid', '2024-03-08', 299.00, '2024-03-08 11:50:55', '2024-03-08 11:50:55'),
(50, 92, '21', 'sub_1Os1xLKNFFD1WFDO5WOcEg5T', 'paid', '2024-03-08', 199.00, '2024-03-08 11:51:24', '2024-03-08 11:51:24'),
(51, 92, '22', 'sub_1Os1wsKNFFD1WFDOIUk6DN1D', 'paid', '2024-03-08', 299.00, '2024-03-08 12:50:17', '2024-03-08 12:50:17'),
(52, 92, '21', 'sub_1Os1xLKNFFD1WFDO5WOcEg5T', 'paid', '2024-03-08', 199.00, '2024-03-08 12:52:38', '2024-03-08 12:52:38'),
(53, 95, '21', 'sub_1OsH01KNFFD1WFDOjjef45nC', 'paid', '2024-03-09', 199.00, '2024-03-09 03:55:10', '2024-03-09 03:55:10'),
(54, 84, '22', 'sub_1OsHXsKNFFD1WFDOGIlY76lW', 'paid', '2024-03-09', 299.00, '2024-03-09 04:30:09', '2024-03-09 04:30:09'),
(55, 84, '21', 'sub_1OsHmsKNFFD1WFDOnpLnHSoK', 'paid', '2024-03-09', 199.00, '2024-03-09 04:45:39', '2024-03-09 04:45:39'),
(56, 84, '22', 'sub_1OsHXsKNFFD1WFDOGIlY76lW', 'paid', '2024-03-09', 299.00, '2024-03-09 05:29:25', '2024-03-09 05:29:25'),
(57, 84, '21', 'sub_1OsHmsKNFFD1WFDOnpLnHSoK', 'paid', '2024-03-09', 199.00, '2024-03-09 05:45:30', '2024-03-09 05:45:30'),
(58, 84, '22', 'sub_1OsJ8LKNFFD1WFDOc2YT7CfH', 'paid', '2024-03-09', 299.00, '2024-03-09 06:11:53', '2024-03-09 06:11:53'),
(59, 84, '22', 'sub_1OsJ8LKNFFD1WFDOc2YT7CfH', 'paid', '2024-03-09', 299.00, '2024-03-09 06:11:54', '2024-03-09 06:11:54'),
(60, 96, '20', 'sub_1OsJBhKNFFD1WFDO80cJhj7m', 'paid', '2024-03-09', 99.00, '2024-03-09 06:15:23', '2024-03-09 06:15:23'),
(61, 96, '21', 'sub_1OsJCfKNFFD1WFDOV8H1rVsu', 'paid', '2024-03-09', 199.00, '2024-03-09 06:16:21', '2024-03-09 06:16:21'),
(62, 96, '21', 'sub_1OsJCfKNFFD1WFDOV8H1rVsu', 'paid', '2024-03-09', 199.00, '2024-03-09 06:16:22', '2024-03-09 06:16:22'),
(63, 96, '22', 'sub_1OsJDrKNFFD1WFDOMPd7dgJJ', 'paid', '2024-03-09', 299.00, '2024-03-09 06:17:36', '2024-03-09 06:17:36'),
(64, 96, '22', 'sub_1OsJDrKNFFD1WFDOMPd7dgJJ', 'paid', '2024-03-09', 299.00, '2024-03-09 06:17:36', '2024-03-09 06:17:36'),
(65, 97, '20', 'sub_1OsJFUKNFFD1WFDORY2tEeY4', 'paid', '2024-03-09', 99.00, '2024-03-09 06:19:17', '2024-03-09 06:19:17'),
(66, 97, '21', 'sub_1OsJG7KNFFD1WFDOCwjLs90G', 'paid', '2024-03-09', 199.00, '2024-03-09 06:19:55', '2024-03-09 06:19:55'),
(67, 97, '21', 'sub_1OsJG7KNFFD1WFDOCwjLs90G', 'paid', '2024-03-09', 199.00, '2024-03-09 06:19:56', '2024-03-09 06:19:56'),
(68, 97, '21', 'sub_1OsJLrKNFFD1WFDOUOtKvaCY', 'paid', '2024-03-09', 199.00, '2024-03-09 06:25:52', '2024-03-09 06:25:52'),
(69, 97, '21', 'sub_1OsJLrKNFFD1WFDOUOtKvaCY', 'paid', '2024-03-09', 199.00, '2024-03-09 06:25:52', '2024-03-09 06:25:52'),
(70, 97, '21', 'sub_1OsJRIKNFFD1WFDONMl9o22V', 'paid', '2024-03-09', 199.00, '2024-03-09 06:31:29', '2024-03-09 06:31:29'),
(71, 97, '21', 'sub_1OsJRIKNFFD1WFDONMl9o22V', 'paid', '2024-03-09', 199.00, '2024-03-09 06:31:29', '2024-03-09 06:31:29'),
(72, 97, '22', 'sub_1OsJUVKNFFD1WFDOl3eIw4yl', 'paid', '2024-03-09', 299.00, '2024-03-09 06:34:47', '2024-03-09 06:34:47'),
(73, 97, '22', 'sub_1OsJUVKNFFD1WFDOl3eIw4yl', 'paid', '2024-03-09', 299.00, '2024-03-09 06:34:48', '2024-03-09 06:34:48'),
(74, 98, '20', 'sub_1OsJVLKNFFD1WFDOegYGiDze', 'paid', '2024-03-09', 99.00, '2024-03-09 06:35:41', '2024-03-09 06:35:41'),
(75, 98, '22', 'sub_1OsJVhKNFFD1WFDOQi6mnkVG', 'paid', '2024-03-09', 299.00, '2024-03-09 06:36:01', '2024-03-09 06:36:01'),
(76, 98, '22', 'sub_1OsJVhKNFFD1WFDOQi6mnkVG', 'paid', '2024-03-09', 299.00, '2024-03-09 06:36:02', '2024-03-09 06:36:02'),
(77, 98, '21', 'sub_1OsJYpKNFFD1WFDOthJulj8G', 'paid', '2024-03-09', 199.00, '2024-03-09 06:39:15', '2024-03-09 06:39:15'),
(78, 98, '21', 'sub_1OsJZXKNFFD1WFDOkIeLGGtx', 'paid', '2024-03-09', 199.00, '2024-03-09 06:39:59', '2024-03-09 06:39:59'),
(79, 98, '21', 'sub_1OsJZXKNFFD1WFDOkIeLGGtx', 'paid', '2024-03-09', 199.00, '2024-03-09 06:40:32', '2024-03-09 06:40:32'),
(80, 98, '22', 'sub_1OsJcCKNFFD1WFDO23JBHhRU', 'paid', '2024-03-09', 299.00, '2024-03-09 06:42:44', '2024-03-09 06:42:44'),
(81, 98, '22', 'sub_1OsJcCKNFFD1WFDO23JBHhRU', 'paid', '2024-03-09', 299.00, '2024-03-09 06:42:44', '2024-03-09 06:42:44'),
(82, 98, '21', 'sub_1OsJghKNFFD1WFDOv39Y7txc', 'paid', '2024-03-09', 199.00, '2024-03-09 06:47:24', '2024-03-09 06:47:24'),
(83, 98, '21', 'sub_1OsJghKNFFD1WFDOv39Y7txc', 'paid', '2024-03-09', 199.00, '2024-03-09 06:47:24', '2024-03-09 06:47:24'),
(84, 98, '22', 'sub_1OsJj1KNFFD1WFDOHITkMZCw', 'paid', '2024-03-09', 299.00, '2024-03-09 06:53:09', '2024-03-09 06:53:09'),
(85, 98, '20', 'sub_1OsJmbKNFFD1WFDO4M48Nu6R', 'paid', '2024-03-09', 99.00, '2024-03-09 06:53:29', '2024-03-09 06:53:29'),
(86, 98, '22', 'sub_1OsJnBKNFFD1WFDOxFCtgypN', 'paid', '2024-03-09', 299.00, '2024-03-09 06:54:06', '2024-03-09 06:54:06'),
(95, 99, '21', 'sub_1OsJuCKNFFD1WFDOPGAlGRqb', 'paid', '2024-03-09', 199.00, '2024-03-09 07:01:20', '2024-03-09 07:01:20'),
(96, 99, '22', 'sub_1OsJvXKNFFD1WFDOPdCVfCCe', 'paid', '2024-03-09', 299.00, '2024-03-09 07:02:43', '2024-03-09 07:02:43'),
(97, 99, '22', 'sub_1OsJvyKNFFD1WFDOhkVByziD', 'paid', '2024-03-09', 299.00, '2024-03-09 07:03:11', '2024-03-09 07:03:11'),
(98, 99, '20', 'sub_1OsJwaKNFFD1WFDOAnuzWUTx', 'paid', '2024-03-09', 99.00, '2024-03-09 07:03:48', '2024-03-09 07:03:48'),
(99, 99, '22', 'sub_1OsJwsKNFFD1WFDOj0uO2BAo', 'paid', '2024-03-09', 299.00, '2024-03-09 07:04:07', '2024-03-09 07:04:07'),
(100, 100, '22', 'sub_1OsJxpKNFFD1WFDOVF7yj7bL', 'paid', '2024-03-09', 299.00, '2024-03-09 07:05:06', '2024-03-09 07:05:06'),
(101, 100, '22', 'sub_1OsJxpKNFFD1WFDOVF7yj7bL', 'paid', '2024-03-09', 299.00, '2024-03-09 07:05:06', '2024-03-09 07:05:06'),
(102, 100, '20', 'sub_1OsJyJKNFFD1WFDO5QCZrDfc', 'paid', '2024-03-09', 99.00, '2024-03-09 07:05:35', '2024-03-09 07:05:35'),
(103, 100, '22', 'sub_1OsJyZKNFFD1WFDOlT6UGq05', 'paid', '2024-03-09', 299.00, '2024-03-09 07:05:52', '2024-03-09 07:05:52'),
(104, 100, '21', 'sub_1OsK22KNFFD1WFDO74Z9X5oE', 'paid', '2024-03-09', 199.00, '2024-03-09 07:09:27', '2024-03-09 07:09:27'),
(105, 101, '22', 'sub_1OsK5LKNFFD1WFDOSiC6pUGl', 'paid', '2024-03-09', 299.00, '2024-03-09 07:12:53', '2024-03-09 07:12:53'),
(106, 101, '20', 'sub_1OsK6UKNFFD1WFDOuN2n0kK9', 'paid', '2024-03-09', 99.00, '2024-03-09 07:14:03', '2024-03-09 07:14:03'),
(107, 101, '20', 'sub_1OsK6vKNFFD1WFDOyxh3nQfZ', 'paid', '2024-03-09', 99.00, '2024-03-09 07:14:30', '2024-03-09 07:14:30'),
(108, 101, '22', 'sub_1OsK7GKNFFD1WFDOyUHWued2', 'paid', '2024-03-09', 299.00, '2024-03-09 07:14:51', '2024-03-09 07:14:51'),
(109, 96, '20', 'sub_1OsJBhKNFFD1WFDO80cJhj7m', 'paid', '2024-03-09', 99.00, '2024-03-09 07:15:07', '2024-03-09 07:15:07'),
(110, 101, '21', 'sub_1OsK8xKNFFD1WFDOQo41iAAI', 'paid', '2024-03-09', 199.00, '2024-03-09 07:16:37', '2024-03-09 07:16:37'),
(111, 101, '20', 'sub_1OsK9KKNFFD1WFDOF6BhINdB', 'paid', '2024-03-09', 99.00, '2024-03-09 07:16:59', '2024-03-09 07:16:59'),
(112, 97, '20', 'sub_1OsJFUKNFFD1WFDORY2tEeY4', 'paid', '2024-03-09', 99.00, '2024-03-09 07:19:24', '2024-03-09 07:19:24'),
(113, 98, '20', 'sub_1OsJVLKNFFD1WFDOegYGiDze', 'paid', '2024-03-09', 99.00, '2024-03-09 07:36:08', '2024-03-09 07:36:08'),
(114, 98, '22', 'sub_1OsJj1KNFFD1WFDOHITkMZCw', 'paid', '2024-03-09', 299.00, '2024-03-09 07:48:49', '2024-03-09 07:48:49'),
(115, 2, '20', 'sub_1OsyLdKNFFD1WFDOHgJBLCav', 'paid', '2024-03-11', 99.00, '2024-03-11 02:12:25', '2024-03-11 02:12:25'),
(119, 66, '1', 'pi_3Ot8spKNFFD1WFDO0why9c9D', 'paid', '2024-03-11', 99.00, '2024-03-11 13:27:20', '2024-03-11 13:27:20'),
(120, 66, '1', 'pi_3Ot8tvKNFFD1WFDO1RMyGYjc', 'paid', '2024-03-11', 99.00, '2024-03-11 13:28:27', '2024-03-11 13:28:27'),
(121, 66, '3', 'pi_3Ot8uJKNFFD1WFDO08NfPSFR', 'paid', '2024-03-11', 299.00, '2024-03-11 13:28:52', '2024-03-11 13:28:52'),
(122, 66, '1', 'pi_3Ot8vNKNFFD1WFDO14Gbu2Ed', 'paid', '2024-03-11', 99.00, '2024-03-11 13:29:58', '2024-03-11 13:29:58'),
(123, 107, '3', 'pi_3Ot921KNFFD1WFDO1rRLK0xM', 'paid', '2024-03-11', 299.00, '2024-03-11 13:36:49', '2024-03-11 13:36:49'),
(124, 107, '1', 'pi_3Ot951KNFFD1WFDO1UxyVOTO', 'paid', '2024-03-11', 99.00, '2024-03-11 13:45:30', '2024-03-11 13:45:30'),
(125, 107, '3', 'pi_3Ot9BXKNFFD1WFDO11l2uUUw', 'paid', '2024-03-11', 299.00, '2024-03-11 13:46:41', '2024-03-11 13:46:41'),
(126, 107, '1', 'pi_3Ot9D6KNFFD1WFDO1jyT7z9W', 'paid', '2024-03-11', 99.00, '2024-03-11 13:48:18', '2024-03-11 13:48:18'),
(127, 107, '1', 'pi_3Ot9DwKNFFD1WFDO05eD5PV8', 'paid', '2024-03-11', 99.00, '2024-03-11 13:49:10', '2024-03-11 13:49:10'),
(128, 103, '1', 'pi_3OtNIwKNFFD1WFDO17DUf4C0', 'paid', '2024-03-12', 99.00, '2024-03-12 04:51:15', '2024-03-12 04:51:15'),
(129, 51, '2', 'pi_3OtOkvKNFFD1WFDO0QbKqSpp', 'paid', '2024-03-12', 199.00, '2024-03-12 06:24:14', '2024-03-12 06:24:14'),
(130, 49, '3', 'pi_3OtOojKNFFD1WFDO1EVy4aF3', 'paid', '2024-03-12', 299.00, '2024-03-12 06:28:09', '2024-03-12 06:28:09'),
(131, 103, '1', 'pi_3OtPOUKNFFD1WFDO1ZAWv5Dn', 'paid', '2024-03-12', 99.00, '2024-03-12 07:05:08', '2024-03-12 07:05:08'),
(132, 103, '3', 'pi_3OtRHjKNFFD1WFDO0cFsFrmK', 'paid', '2024-03-12', 299.00, '2024-03-12 09:06:15', '2024-03-12 09:06:15'),
(133, 112, '2', 'pi_3OtjPwKNFFD1WFDO0QVFFXfW', 'paid', '2024-03-13', 199.00, '2024-03-13 04:27:56', '2024-03-13 04:27:56'),
(134, 113, '1', 'pi_3OtlpTKNFFD1WFDO1QiTtUKJ', 'paid', '2024-03-13', 99.00, '2024-03-13 07:02:27', '2024-03-13 07:02:27'),
(163, 122, '2', 'pi_3P93PgBkxOqzrK2J3zWomZNV', 'paid', '2024-04-24', 199.00, '2024-04-24 10:51:12', '2024-04-24 10:51:12'),
(164, 122, '3', 'pi_3P93ZwBkxOqzrK2J3qUjZqhv', 'paid', '2024-04-24', 299.00, '2024-04-24 11:01:48', '2024-04-24 11:01:48'),
(165, 122, '1', 'pi_3P93bDBkxOqzrK2J0pHACPKI', 'paid', '2024-04-24', 99.00, '2024-04-24 11:03:06', '2024-04-24 11:03:06'),
(166, 122, '2', 'pi_3P93cMBkxOqzrK2J0fuZ6JZo', 'paid', '2024-04-24', 199.00, '2024-04-24 11:04:17', '2024-04-24 11:04:17'),
(167, 122, '2', 'pi_3P9KKPBkxOqzrK2J3N9geIAM', 'paid', '2024-04-25', 199.00, '2024-04-25 04:54:59', '2024-04-25 04:54:59'),
(168, 122, '2', 'pi_3P9LBJBkxOqzrK2J0uxZZ5rA', 'paid', '2024-04-25', 199.00, '2024-04-25 05:49:32', '2024-04-25 05:49:32'),
(169, 147, '1', 'pi_3P9O7MBkxOqzrK2J3MUDjtoX', 'paid', '2024-04-25', 99.00, '2024-04-25 08:57:41', '2024-04-25 08:57:41'),
(182, 148, '1', 'pi_3PAtYEBkxOqzrK2J3H5FdFVD', 'paid', '2024-04-29', 99.00, '2024-04-29 12:43:43', '2024-04-29 12:43:43'),
(183, 149, '1', 'pi_3PAtdrBkxOqzrK2J2yAgia93', 'paid', '2024-04-29', 99.00, '2024-04-29 12:50:29', '2024-04-29 12:50:29'),
(184, 149, '2', 'pi_3PAtk0BkxOqzrK2J0jOsk6jE', 'paid', '2024-04-29', 199.00, '2024-04-29 12:56:02', '2024-04-29 12:56:02'),
(189, 122, '1', 'pi_3PCbNPBkxOqzrK2J3nfbjSDy', 'paid', '2024-05-04', 99.00, '2024-05-04 05:43:52', '2024-05-04 05:43:52'),
(197, 150, '1', 'pi_3PDGZABkxOqzrK2J1uvyioIS', 'paid', '2024-05-06', 99.00, '2024-05-06 01:42:27', '2024-05-06 01:42:27'),
(202, 119, '1', 'pi_3PGIVhBkxOqzrK2J2GbkVVfI', 'paid', '2024-05-14', 99.00, '2024-05-14 10:23:17', '2024-05-14 10:23:17'),
(205, 119, 'interview_1', 'sub_1PGJFrBkxOqzrK2JbUjSPEjm', 'paid', '2024-05-14', 5.00, '2024-05-14 11:10:52', '2024-05-14 11:10:52'),
(206, 119, 'interview_2', 'sub_1PGJGEBkxOqzrK2J6KHKzrXb', 'paid', '2024-05-14', 7.00, '2024-05-14 11:11:15', '2024-05-14 11:11:15'),
(207, 151, 'interview_3', 'sub_1PGdfoBkxOqzrK2JW7oCFfd2', 'paid', '2024-05-15', 10.00, '2024-05-15 08:59:01', '2024-05-15 08:59:01'),
(208, 151, '3', 'pi_3PGdlgBkxOqzrK2J2m0DoOx5', 'paid', '2024-05-15', 299.00, '2024-05-15 09:05:15', '2024-05-15 09:05:15'),
(214, 119, 'interview_1', 'sub_1PITecBkxOqzrK2J4lTL0UX0', 'paid', '2024-05-20', 5.00, '2024-05-20 10:41:23', '2024-05-20 10:41:23'),
(215, 119, 'interview_2', 'sub_1PITfMBkxOqzrK2JpL9LYqvQ', 'paid', '2024-05-20', 7.00, '2024-05-20 10:42:09', '2024-05-20 10:42:09'),
(216, 119, 'interview_1', 'sub_1PITgdBkxOqzrK2JNDjdU9O8', 'paid', '2024-05-20', 5.00, '2024-05-20 10:43:28', '2024-05-20 10:43:28'),
(217, 119, 'interview_2', 'sub_1PITh0BkxOqzrK2JbtlPahhN', 'paid', '2024-05-20', 7.00, '2024-05-20 10:43:50', '2024-05-20 10:43:50'),
(218, 119, 'interview_2', 'sub_1PITkxBkxOqzrK2JsLwuPYdq', 'paid', '2024-05-20', 7.00, '2024-05-20 10:47:55', '2024-05-20 10:47:55'),
(219, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:50:52', '2024-05-20 10:50:52'),
(220, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:51:06', '2024-05-20 10:51:06'),
(221, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:51:09', '2024-05-20 10:51:09'),
(222, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:51:49', '2024-05-20 10:51:49'),
(223, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:51:51', '2024-05-20 10:51:51'),
(224, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:07', '2024-05-20 10:52:07'),
(225, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:26', '2024-05-20 10:52:26'),
(226, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:29', '2024-05-20 10:52:29'),
(227, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:31', '2024-05-20 10:52:31'),
(228, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:32', '2024-05-20 10:52:32'),
(229, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:33', '2024-05-20 10:52:33'),
(230, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:35', '2024-05-20 10:52:35'),
(231, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:37', '2024-05-20 10:52:37'),
(232, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:39', '2024-05-20 10:52:39'),
(233, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:40', '2024-05-20 10:52:40'),
(234, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:41', '2024-05-20 10:52:41'),
(235, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:42', '2024-05-20 10:52:42'),
(236, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:43', '2024-05-20 10:52:43'),
(237, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:45', '2024-05-20 10:52:45'),
(238, 119, 'interview_2', 'sub_1PITnmBkxOqzrK2JlwC9FyKD', 'paid', '2024-05-20', 7.00, '2024-05-20 10:52:47', '2024-05-20 10:52:47'),
(239, 119, 'interview_2', 'sub_1PITq2BkxOqzrK2JJBQlTWtw', 'paid', '2024-05-20', 7.00, '2024-05-20 10:53:11', '2024-05-20 10:53:11'),
(240, 119, 'interview_2', 'sub_1PITq2BkxOqzrK2JJBQlTWtw', 'paid', '2024-05-20', 7.00, '2024-05-20 10:53:37', '2024-05-20 10:53:37'),
(241, 119, 'interview_2', 'sub_1PITq2BkxOqzrK2JJBQlTWtw', 'paid', '2024-05-20', 7.00, '2024-05-20 10:53:40', '2024-05-20 10:53:40'),
(242, 119, 'interview_2', 'sub_1PITq2BkxOqzrK2JJBQlTWtw', 'paid', '2024-05-20', 7.00, '2024-05-20 10:53:42', '2024-05-20 10:53:42'),
(243, 119, 'interview_2', 'sub_1PITqsBkxOqzrK2JhJvBeah4', 'paid', '2024-05-20', 7.00, '2024-05-20 10:54:03', '2024-05-20 10:54:03'),
(244, 119, 'interview_2', 'sub_1PITqsBkxOqzrK2JhJvBeah4', 'paid', '2024-05-20', 7.00, '2024-05-20 10:54:19', '2024-05-20 10:54:19'),
(245, 119, 'interview_2', 'sub_1PITqsBkxOqzrK2JhJvBeah4', 'paid', '2024-05-20', 7.00, '2024-05-20 10:54:45', '2024-05-20 10:54:45'),
(246, 119, 'interview_2', 'sub_1PITqsBkxOqzrK2JhJvBeah4', 'paid', '2024-05-20', 7.00, '2024-05-20 10:56:12', '2024-05-20 10:56:12'),
(247, 119, 'interview_2', 'sub_1PIU2FBkxOqzrK2JuRsahrn8', 'paid', '2024-05-20', 7.00, '2024-05-20 11:05:48', '2024-05-20 11:05:48'),
(248, 119, 'interview_2', 'sub_1PIU49BkxOqzrK2Jsz6OotIc', 'paid', '2024-05-20', 7.00, '2024-05-20 11:07:46', '2024-05-20 11:07:46'),
(249, 119, 'interview_3', 'sub_1PIU54BkxOqzrK2Jp2qHnxEA', 'paid', '2024-05-20', 10.00, '2024-05-20 11:08:43', '2024-05-20 11:08:43'),
(250, 119, 'interview_2', 'sub_1PIU69BkxOqzrK2JKGWnsqrv', 'paid', '2024-05-20', 7.00, '2024-05-20 11:09:50', '2024-05-20 11:09:50'),
(251, 119, 'interview_1', 'sub_1PIU7zBkxOqzrK2JC7xbCMM3', 'paid', '2024-05-20', 5.00, '2024-05-20 11:11:44', '2024-05-20 11:11:44'),
(252, 119, 'interview_2', 'sub_1PIU8NBkxOqzrK2JB0yVG2q5', 'paid', '2024-05-20', 7.00, '2024-05-20 11:12:08', '2024-05-20 11:12:08'),
(253, 119, 'interview_1', 'sub_1PIUKPBkxOqzrK2J9uyfOVfZ', 'paid', '2024-05-20', 5.00, '2024-05-20 11:24:35', '2024-05-20 11:24:35'),
(254, 119, 'interview_2', 'sub_1PIUKkBkxOqzrK2JlQuQFAn0', 'paid', '2024-05-20', 7.00, '2024-05-20 11:24:55', '2024-05-20 11:24:55'),
(255, 119, 'interview_1', 'sub_1PIULSBkxOqzrK2JzVfieH7i', 'paid', '2024-05-20', 5.00, '2024-05-20 11:25:40', '2024-05-20 11:25:40'),
(256, 119, 'interview_2', 'sub_1PIUP6BkxOqzrK2JdfnsC6vu', 'paid', '2024-05-20', 7.00, '2024-05-20 11:29:25', '2024-05-20 11:29:25'),
(257, 119, 'interview_2', 'sub_1PIUQhBkxOqzrK2JHVYnmSGd', 'paid', '2024-05-20', 7.00, '2024-05-20 11:31:04', '2024-05-20 11:31:04'),
(258, 119, 'interview_1', 'sub_1PIUeiBkxOqzrK2JiStf4SBn', 'paid', '2024-05-20', 5.00, '2024-05-20 11:45:33', '2024-05-20 11:45:33'),
(259, 119, 'interview_2', 'sub_1PIUhMBkxOqzrK2JEI2A8UKh', 'paid', '2024-05-20', 7.00, '2024-05-20 11:48:17', '2024-05-20 11:48:17'),
(260, 119, 'interview_3', 'sub_1PIUi7BkxOqzrK2JsJvI9ZD8', 'paid', '2024-05-20', 10.00, '2024-05-20 11:49:04', '2024-05-20 11:49:04'),
(261, 119, 'interview_2', 'sub_1PIUwDBkxOqzrK2J2QQEqpp0', 'paid', '2024-05-20', 7.00, '2024-05-20 12:03:39', '2024-05-20 12:03:39'),
(262, 119, 'interview_1', 'sub_1PIUyuBkxOqzrK2JhzQHJPBc', 'paid', '2024-05-20', 5.00, '2024-05-20 12:06:25', '2024-05-20 12:06:25'),
(263, 119, 'interview_2', 'sub_1PIVAVBkxOqzrK2JyhhXBeVs', 'paid', '2024-05-20', 7.00, '2024-05-20 12:18:24', '2024-05-20 12:18:24'),
(264, 119, 'interview_1', 'sub_1PIVBqBkxOqzrK2Jgh2YsyqK', 'paid', '2024-05-20', 5.00, '2024-05-20 12:19:47', '2024-05-20 12:19:47'),
(265, 119, 'interview_1', 'sub_1PIVi9BkxOqzrK2JPmV2qBmh', 'paid', '2024-05-20', 5.00, '2024-05-20 12:53:10', '2024-05-20 12:53:10'),
(266, 119, 'interview_1', 'sub_1PIW0HBkxOqzrK2J4DqSlYxU', 'paid', '2024-05-20', 5.00, '2024-05-20 13:11:55', '2024-05-20 13:11:55'),
(267, 152, 'interview_1', 'sub_1PIpEcBkxOqzrK2JRxGYRLu1', 'paid', '2024-05-21', 5.00, '2024-05-21 09:43:59', '2024-05-21 09:43:59'),
(268, 152, 'interview_1', 'sub_1PIpJcBkxOqzrK2JsdqmLnGc', 'paid', '2024-05-21', 5.00, '2024-05-21 09:49:09', '2024-05-21 09:49:09'),
(269, 152, 'interview_1', 'sub_1PIpQ8BkxOqzrK2JQXBnKrmH', 'paid', '2024-05-21', 5.00, '2024-05-21 09:55:53', '2024-05-21 09:55:53'),
(270, 152, 'interview_1', 'sub_1PIpeqBkxOqzrK2Jj0LOonzd', 'paid', '2024-05-21', 5.00, '2024-05-21 10:11:05', '2024-05-21 10:11:05'),
(271, 152, 'interview_1', 'sub_1PIplyBkxOqzrK2Ji91dtP5V', 'paid', '2024-05-21', 5.00, '2024-05-21 10:18:27', '2024-05-21 10:18:27'),
(272, 152, 'interview_1', 'sub_1PIpwNBkxOqzrK2JZ58w2TR1', 'paid', '2024-05-21', 5.00, '2024-05-21 10:29:12', '2024-05-21 10:29:12'),
(273, 152, 'interview_2', 'sub_1PIq5IBkxOqzrK2JVP41jmhp', 'paid', '2024-05-21', 7.00, '2024-05-21 10:38:26', '2024-05-21 10:38:26'),
(274, 152, 'interview_1', 'sub_1PIq9fBkxOqzrK2JtMysDVwn', 'paid', '2024-05-21', 5.00, '2024-05-21 10:43:40', '2024-05-21 10:43:40'),
(275, 152, 'interview_2', 'sub_1PIqBlBkxOqzrK2JDYxXdyUo', 'paid', '2024-05-21', 7.00, '2024-05-21 10:45:06', '2024-05-21 10:45:06'),
(276, 152, 'interview_1', 'sub_1PIqFZBkxOqzrK2JEgh9xT2i', 'paid', '2024-05-21', 5.00, '2024-05-21 10:49:02', '2024-05-21 10:49:02'),
(277, 152, 'interview_3', 'sub_1PIqGQBkxOqzrK2JI65DdEzB', 'paid', '2024-05-21', 10.00, '2024-05-21 10:49:55', '2024-05-21 10:49:55'),
(278, 2, 'interview_3', 'sub_1PJimOBkxOqzrK2JnzhCKmks', 'paid', '2024-05-23', 10.00, '2024-05-23 21:02:33', '2024-05-23 21:02:33'),
(279, 122, 'interview_1', 'sub_1PJrK1BkxOqzrK2JGX925hZ4', 'paid', '2024-05-24', 5.00, '2024-05-24 06:09:51', '2024-05-24 06:09:51'),
(280, 2, 'interview_1', 'sub_1PQKJ5BkxOqzrK2J3rEEvoVe', 'paid', '2024-06-11', 5.00, '2024-06-11 02:19:37', '2024-06-11 02:19:37'),
(281, 2, 'interview_2', 'sub_1PQKKKBkxOqzrK2J5WaCJ9L1', 'paid', '2024-06-11', 7.00, '2024-06-11 02:20:53', '2024-06-11 02:20:53'),
(282, 153, 'interview_2', 'sub_1PRX2xBkxOqzrK2JXDGDEHw1', 'paid', '2024-06-14', 7.00, '2024-06-14 10:08:11', '2024-06-14 10:08:11'),
(283, 119, 'interview_3', 'sub_1PVXAGBkxOqzrK2JSQsyFaQE', 'paid', '2024-06-25', 10.00, '2024-06-25 11:04:01', '2024-06-25 11:04:01'),
(284, 119, '3', 'pi_3PVo8OBkxOqzrK2J0fy8uz8d', 'paid', '2024-06-26', 299.00, '2024-06-26 05:11:20', '2024-06-26 05:11:20'),
(285, 2, 'interview_3', 'sub_1PXCyLBkxOqzrK2JWBYGz2ys', 'paid', '2024-06-30', 10.00, '2024-06-30 01:54:37', '2024-06-30 01:54:37'),
(286, 2, 'interview_1', 'sub_1PXCzXBkxOqzrK2Ja3S5H2XO', 'paid', '2024-06-30', 5.00, '2024-06-30 01:55:51', '2024-06-30 01:55:51'),
(287, 156, '1', 'pi_3PYjleBkxOqzrK2J3PXti8jC', 'paid', '2024-07-04', 99.00, '2024-07-04 07:08:11', '2024-07-04 07:08:11'),
(288, 164, 'interview_2', 'sub_1PZSOXBkxOqzrK2JRYL9viO4', 'paid', '2024-07-06', 7.00, '2024-07-06 06:46:58', '2024-07-06 06:46:58'),
(289, 164, 'interview_1', 'sub_1PZSR2BkxOqzrK2J9V0Z8J22', 'paid', '2024-07-06', 5.00, '2024-07-06 06:49:33', '2024-07-06 06:49:33'),
(290, 164, 'interview_2', 'sub_1PZSTMBkxOqzrK2JZ2WZ0uaY', 'paid', '2024-07-06', 7.00, '2024-07-06 06:51:56', '2024-07-06 06:51:56'),
(291, 169, 'interview_1', 'sub_1Q5rHxBkxOqzrK2JulmPWFUN', 'paid', '2024-10-03', 5.00, '2024-10-03 15:50:09', '2024-10-03 15:50:09'),
(292, 170, 'interview_3', 'sub_1Q5rKIBkxOqzrK2J0sdvWAWu', 'paid', '2024-10-03', 10.00, '2024-10-03 15:52:29', '2024-10-03 15:52:29'),
(293, 171, 'interview_2', 'sub_1Q5rWyBkxOqzrK2J39MP25pg', 'paid', '2024-10-03', 7.00, '2024-10-03 16:05:41', '2024-10-03 16:05:41'),
(294, 172, 'interview_2', 'sub_1Q5zfPBkxOqzrK2J9Dm75ofY', 'paid', '2024-10-04', 7.00, '2024-10-04 00:46:52', '2024-10-04 00:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `userplans`
--

CREATE TABLE `userplans` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `plan_id` bigint UNSIGNED DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userplans`
--

INSERT INTO `userplans` (`id`, `user_id`, `plan_id`, `price`, `to_date`, `from_date`, `payment_id`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 0.00, NULL, NULL, NULL, '2024-02-22 10:16:27', '2024-02-22 10:16:27'),
(2, 63, 1, 0.00, NULL, NULL, NULL, '2024-02-22 10:19:52', '2024-02-22 10:19:52'),
(3, 64, 1, 0.00, NULL, NULL, NULL, '2024-02-22 10:20:17', '2024-02-22 10:20:17'),
(4, 25, 1, 0.00, NULL, NULL, NULL, '2024-02-22 10:27:58', '2024-02-22 10:27:58'),
(5, 65, 1, 0.00, NULL, NULL, NULL, '2024-02-22 10:45:26', '2024-02-22 10:45:26'),
(7, 67, 1, 0.00, NULL, NULL, NULL, '2024-02-23 10:55:19', '2024-02-23 10:55:19'),
(8, 68, 1, 0.00, NULL, NULL, NULL, '2024-02-23 12:47:09', '2024-02-23 12:47:09'),
(9, 69, 1, 0.00, NULL, NULL, NULL, '2024-02-23 13:10:07', '2024-02-23 13:10:07'),
(10, 70, 1, 0.00, NULL, NULL, NULL, '2024-02-28 05:07:54', '2024-02-28 05:07:54'),
(11, 71, 1, 0.00, NULL, NULL, NULL, '2024-02-28 09:15:47', '2024-02-28 09:15:47'),
(12, 72, 1, 0.00, NULL, NULL, NULL, '2024-02-28 09:32:38', '2024-02-28 09:32:38'),
(13, 52, 1, 99.00, NULL, NULL, NULL, '2024-02-28 12:36:01', '2024-03-11 13:06:36'),
(14, 51, 2, 199.00, NULL, NULL, 'pi_3OtOkvKNFFD1WFDO0QbKqSpp', '2024-02-28 13:02:19', '2024-03-12 06:24:14'),
(15, 73, 1, 0.00, NULL, NULL, NULL, '2024-02-29 09:20:31', '2024-02-29 09:20:31'),
(16, 74, 2, 99.00, NULL, NULL, NULL, '2024-02-29 11:19:37', '2024-02-29 11:19:37'),
(17, 75, 3, 199.00, '2024-04-01', '2024-03-01', 'sub_1Op8NHKNFFD1WFDOdkSTYEqf', '2024-03-01 02:47:13', '2024-03-01 03:41:34'),
(18, 76, 2, 99.00, '2024-04-01', '2024-03-01', 'sub_1OpO4AKNFFD1WFDOEORLUhaO', '2024-03-01 04:50:08', '2024-03-01 04:51:34'),
(19, 77, 3, 199.00, '2024-04-01', '2024-03-01', 'sub_1OpOhvKNFFD1WFDOZJQrv1e7', '2024-03-01 05:31:56', '2024-03-01 05:32:38'),
(20, 78, 2, 199.00, '2025-03-01', '2024-03-01', 'sub_1OpPGGKNFFD1WFDOBjLa1XCa', '2024-03-01 06:05:30', '2024-03-01 06:08:03'),
(21, 79, 2, 99.00, '2024-04-01', '2024-03-01', 'sub_1OpPM4KNFFD1WFDO5rRSpuCY', '2024-03-01 06:13:05', '2024-03-01 06:14:04'),
(22, 80, 19, 10.00, '2024-03-06', '2024-03-05', 'sub_1OqpldKNFFD1WFDOdfpZV72w', '2024-03-01 06:41:25', '2024-03-05 05:39:48'),
(23, 81, 1, 0.00, NULL, NULL, NULL, '2024-03-01 07:12:21', '2024-03-01 07:47:51'),
(24, 82, 2, 10.00, '2024-04-01', '2024-03-01', 'sub_1OpR3fKNFFD1WFDOqoqA16hl', '2024-03-01 07:29:52', '2024-03-01 11:49:18'),
(25, 83, 2, 0.00, '2024-04-01', '2024-03-01', 'sub_1OpTi7KNFFD1WFDO4w0952Pc', '2024-03-01 10:52:34', '2024-03-01 11:50:23'),
(27, 85, 1, 0.00, NULL, NULL, NULL, '2024-03-04 05:26:45', '2024-03-04 05:26:45'),
(28, 86, 2, 99.00, NULL, NULL, NULL, '2024-03-04 05:29:25', '2024-03-04 05:29:25'),
(29, 87, 1, 0.00, NULL, NULL, NULL, '2024-03-04 10:02:40', '2024-03-04 10:02:40'),
(30, 88, 1, 0.00, NULL, NULL, NULL, '2024-03-05 04:43:37', '2024-03-05 04:43:37'),
(31, 89, 1, 0.00, NULL, NULL, NULL, '2024-03-05 12:07:58', '2024-03-05 12:13:31'),
(32, 90, 21, 199.00, '2024-04-06', '2024-03-06', 'sub_1OrEauKNFFD1WFDOZdx3vGoQ', '2024-03-06 07:08:57', '2024-03-06 08:09:35'),
(34, 92, 21, 199.00, '2024-04-08', '2024-03-08', 'sub_1Os1xLKNFFD1WFDO5WOcEg5T', '2024-03-08 11:51:24', '2024-03-08 12:52:38'),
(38, 96, 20, 99.00, '2024-04-09', '2024-03-09', 'sub_1OsJBhKNFFD1WFDO80cJhj7m', '2024-03-09 06:15:23', '2024-03-09 07:15:23'),
(39, 97, 20, 99.00, '2024-04-09', '2024-03-09', 'sub_1OsJFUKNFFD1WFDORY2tEeY4', '2024-03-09 06:19:17', '2024-03-09 07:20:02'),
(40, 98, 22, 299.00, '2024-04-09', '2024-03-09', 'sub_1OsJj1KNFFD1WFDOHITkMZCw', '2024-03-09 06:35:41', '2024-03-09 07:49:44'),
(41, 99, 22, 299.00, '2024-04-09', '2024-03-09', 'sub_1OsJwsKNFFD1WFDOj0uO2BAo', '2024-03-09 06:56:06', '2024-03-09 07:04:08'),
(42, 100, 21, 199.00, '2024-04-09', '2024-03-09', 'sub_1OsK22KNFFD1WFDO74Z9X5oE', '2024-03-09 07:05:06', '2024-03-09 07:12:09'),
(43, 101, 20, 99.00, '2024-04-09', '2024-03-09', 'sub_1OsK6vKNFFD1WFDOyxh3nQfZ', '2024-03-09 07:12:53', '2024-03-09 07:44:20'),
(44, 2, 20, 99.00, '2024-04-11', '2024-03-11', 'sub_1OsyLdKNFFD1WFDOHgJBLCav', '2024-03-11 02:12:25', '2024-03-11 02:12:25'),
(45, 106, 1, 99.00, NULL, NULL, NULL, '2024-03-11 13:06:55', '2024-03-11 13:06:55'),
(47, 66, 1, 99.00, NULL, NULL, 'pi_3Ot8vNKNFFD1WFDO14Gbu2Ed', '2024-03-11 13:27:20', '2024-03-11 13:29:58'),
(51, 107, 1, 99.00, NULL, NULL, 'pi_3Ot9DwKNFFD1WFDO05eD5PV8', '2024-03-11 13:49:10', '2024-03-11 13:49:10'),
(53, 49, 3, 299.00, NULL, NULL, 'pi_3OtOojKNFFD1WFDO1EVy4aF3', '2024-03-12 06:28:09', '2024-03-12 06:28:09'),
(57, 113, 1, 99.00, NULL, NULL, 'pi_3OtlpTKNFFD1WFDO1QiTtUKJ', '2024-03-13 07:02:27', '2024-03-13 07:02:27'),
(58, 3, 2, 199.00, NULL, NULL, 'pi_3P0hjdBkxOqzrK2J0nleW4Af', '2024-04-01 10:07:49', '2024-04-01 10:07:49'),
(59, 118, 1, 99.00, NULL, NULL, 'pi_3P14zSBkxOqzrK2J3jzNIOxE', '2024-04-02 10:55:29', '2024-04-02 10:55:29'),
(63, 119, 3, 299.00, NULL, NULL, 'pi_3PVo8OBkxOqzrK2J0fy8uz8d', '2024-04-19 09:34:24', '2024-06-26 05:11:20'),
(65, 122, 1, 99.00, NULL, NULL, 'pi_3PCbNPBkxOqzrK2J3nfbjSDy', '2024-04-25 05:49:32', '2024-05-04 05:43:52'),
(66, 147, 1, 99.00, NULL, NULL, 'pi_3P9O7MBkxOqzrK2J3MUDjtoX', '2024-04-25 08:57:41', '2024-04-25 08:57:41'),
(67, 148, 1, 99.00, NULL, NULL, 'pi_3PAtYEBkxOqzrK2J3H5FdFVD', '2024-04-29 12:43:43', '2024-04-29 12:43:43'),
(68, 149, 2, 199.00, NULL, NULL, 'pi_3PAtk0BkxOqzrK2J0jOsk6jE', '2024-04-29 12:50:29', '2024-04-29 12:56:02'),
(69, 150, 1, 99.00, NULL, NULL, 'pi_3PDGZABkxOqzrK2J1uvyioIS', '2024-05-06 01:42:27', '2024-05-06 01:42:27'),
(70, 151, 3, 299.00, NULL, NULL, 'pi_3PGdlgBkxOqzrK2J2m0DoOx5', '2024-05-15 09:05:15', '2024-05-15 09:05:15'),
(71, 154, 1, 99.00, NULL, NULL, NULL, '2024-06-26 05:56:34', '2024-06-26 05:56:34'),
(72, 155, 1, 99.00, NULL, NULL, NULL, '2024-06-26 05:57:29', '2024-06-26 05:57:29'),
(73, 156, 1, 99.00, NULL, NULL, 'pi_3PYjleBkxOqzrK2J3PXti8jC', '2024-07-04 07:08:11', '2024-07-04 07:08:11'),
(74, 167, 1, 99.00, NULL, NULL, NULL, '2024-09-07 14:04:40', '2024-09-07 14:04:40'),
(75, 168, 1, 99.00, NULL, NULL, NULL, '2024-09-07 14:05:01', '2024-09-07 14:05:01'),
(76, 169, 2, 199.00, NULL, NULL, NULL, '2024-10-03 14:57:39', '2024-10-03 14:57:39'),
(77, 171, 1, 99.00, NULL, NULL, NULL, '2024-10-04 00:53:01', '2024-10-04 00:53:01'),
(78, 173, 1, 99.00, NULL, NULL, NULL, '2024-10-04 06:44:32', '2024-10-04 06:44:32'),
(79, 174, 1, 99.00, NULL, NULL, NULL, '2024-10-04 07:14:14', '2024-10-04 07:14:14'),
(82, 177, 1, 99.00, NULL, NULL, NULL, '2024-10-04 09:01:14', '2024-10-04 09:01:14'),
(83, 178, 1, 99.00, NULL, NULL, NULL, '2024-10-04 23:14:29', '2024-10-04 23:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desired_job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver_license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` int DEFAULT NULL,
  `professional_summary` text COLLATE utf8mb4_unicode_ci,
  `hobbies` text COLLATE utf8mb4_unicode_ci,
  `completion_status` longtext COLLATE utf8mb4_unicode_ci,
  `otp_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_time` timestamp NULL DEFAULT NULL,
  `project_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint DEFAULT '0',
  `upload_resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_resume_verify` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `video_credits` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `slug`, `email_verified_at`, `password`, `profile_image`, `desired_job_title`, `nationality`, `driver_license`, `date_of_birth`, `phone_number`, `country`, `city`, `address`, `postal_code`, `professional_summary`, `hobbies`, `completion_status`, `otp_token`, `expire_time`, `project_url`, `status`, `upload_resume`, `remember_token`, `upload_resume_verify`, `created_at`, `updated_at`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`, `video_credits`) VALUES
(1, 'Admin', 'Account', 'admin@admin.com', 'MsZK4LN9UUrI01lT41FT', NULL, '$2y$10$86lWPvINJjHIkD985C23dOW4DI6O47eJ2bFBCRfg7Gr2nu6U6KIqq', 'https://jobgetr.daedaltech.online/uploads/_1714029902_download.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '2024-02-12 11:15:39', NULL, NULL, NULL, NULL, 0),
(2, 'Rasool', 'Muttalib', 'rasoolm@gmail.com', 'MsZK4LN9RUrI02lT41SX', '2024-07-11 13:34:19', '$2y$10$8Iq4EKYNIkX0hUvmcBZ3ZeK0Zl..1QB7qqDkbuN4B7sT6QqLFeNoe', 'https://jobgetr.daedaltech.online/OpenInterview/public/uploads/1716128107_image.png', NULL, NULL, NULL, '2024-01-29', '4046548533', 'UYS', 'cyu', '2330 river', 30039, '<p>Your professional summary is a personalized introduction to a potential employer. It complements your resume by adding a human voice and personality, allowing you to highlight your accomplishment, relevant skills,</p>', NULL, '{\"choosePlan\":1,\"personalDetai\":1,\"contact_information\":1,\"professionalsummary\":1,\"side_employment_history\":1,\"side_education\":1}', '$2y$10$gd/Sbu2PcUzV7qG.FTmydeHpMQHsOBDikiLcdtXjbMHPblCS1YLOm', '2024-07-11 14:03:55', NULL, 0, NULL, 'iR1Lj6tDdOjJ2Akz8haqvlDSvfYI89ifF83aY9PpwllQEpghWAsTurGr9DEe', NULL, '2024-01-29 02:36:01', '2024-07-11 13:34:19', 'cus_Q2lhjUUcNvlG2F', 'visa', '4242', NULL, 0),
(3, 'Armand', 'Huber', 'resume@yopmail.com', '4zqBwNUDP6hyvDGWD3ie', NULL, '$2y$10$yjZx74DLqU/sJPRTXPXRHuRtXxhQLQf6qdqrnD9lBTFn56jmsbJty', 'uploads/_1706619816_user.jpeg', 'Hello user', 'Hindu', 'DL0004', '2024-01-24', '+1 (756) 582-1664', 'India', 'Jaipur', 'Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016', 302020, '<p><strong>I thrive on challenge and constantly set goals for myself, so I have something to strive towards. I am not comfortable with settling, and I am always&nbsp;</strong></p>', NULL, '{\"personalDetai\":0,\"choosePlan\":1,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-01-30 10:24:34', '2024-04-01 10:07:49', 'cus_PqNrrWpuhhaWff', 'mastercard', '4444', NULL, 0),
(4, 'Leilani', 'Torres', 'repecunodi@mailinator.com', 'ULMGpK1ktRFGUucL8R4a', NULL, '$2y$10$L.VPyHPN0LlVQDTwNRq/kekeaLgeD4dIqvhd2/lCRADaVIKx10hCu', 'uploads/_1706610392_user.jpeg', NULL, 'Molestiae laborum D', 'Est culpa id nisi f', '2001-10-07', '1123455678', 'Dolore fugiat quos i', 'Corporis in dolorum', 'Ea non ipsa exceptu', 32, '<p>Testing</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-01-30 10:26:28', '2024-01-30 10:31:16', NULL, NULL, NULL, NULL, 0),
(5, 'Aspen', 'Sellers', 'mysoli@mailinator.com', '7Cn9gLEz4jBv3bhT4NUo', NULL, '$2y$10$8gVcXPgznS8jILUeaw33q.oXuT2qLMbmi638GEDx1cc1Wc3FKJPqe', NULL, NULL, NULL, 'Magnam voluptas temp', '1982-07-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-01-31 09:30:54', '2024-01-31 09:30:58', NULL, NULL, NULL, NULL, 0),
(6, 'Ravi', 'Sharma', 'geqic@mailinator.com', 'nRvDoytmMwOH4yLukwnG', NULL, '$2y$10$9FW6l.dG4fvnctwoNvgDsORCkLGaDuvyR8BNi6hsgCBlug9EvQ0QC', 'uploads/_1706694420_65_1679457880_7361154dc8f0844896df62d88f25634f--boy-character-character-ideas.jpg', NULL, NULL, 'Aut in est aperiam o', '2019-08-18', '9665169573', 'India', 'Jaipur', 'Sardarshahr', 334102, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality, allowing you to highlight your accomplishment, relevant skills.</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-01-31 09:33:11', '2024-02-08 05:32:00', NULL, NULL, NULL, NULL, 0),
(7, 'Sade', 'Serrano', 'ashokkumar562000@gmail.com', 'pO6cwTLMXcUIAurKRyGT', NULL, '$2y$10$Uj7LCRLDbOedeffaTXeNYudI4KDcPP1D8rtAuFB7Px33FqaMZHRi2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0}', '$2y$10$jpeb3bBxoEE/psmEf9quteCiVBP0X/E085doOjQGDMgRmN7k6RQqm', '2024-03-12 05:16:30', NULL, 2, NULL, NULL, NULL, '2024-01-31 10:38:33', '2024-03-12 04:46:30', NULL, NULL, NULL, NULL, 0),
(8, 'Tamara', 'Lambert', 'debyhi@mailinator.com', 'SMCpB55BIFh8fw23AjGs', NULL, '$2y$10$/igJjPNgIUzQX4PdBp4mw.F4nTvPyln9n79RT2fx4Z15Qq24nmjxW', NULL, NULL, NULL, NULL, '1985-08-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-01-31 10:42:05', '2024-01-31 10:42:09', NULL, NULL, NULL, NULL, 0),
(9, 'Angelica', 'Walls', 'byko@mailinator.com', 'pngW6MaoikzYw3IA60AR', NULL, '$2y$10$SDr3mQ1RDWzPAhfrwG.d3eq6bF5Ah7srKHplh3vNB4yE9Dq66sGDG', 'uploads/_1707317847_65_1679457880_7361154dc8f0844896df62d88f25634f--boy-character-character-ideas.jpg', NULL, NULL, 'DL502444', '2018-08-22', '9665169573', 'India', 'Jaipur', '123 Main Street Dallas, TX 75201 USA', 334102, '<p><strong>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality</strong></p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-01-31 11:16:00', '2024-02-14 12:08:16', NULL, NULL, NULL, NULL, 0),
(10, 'Anshuman', 'Sharma', 'musicw583@gmail.com', 'xWenK1wcib3iRUUD7MdH', NULL, '$2y$10$T7PJHj8an5yDp/A667DQxemTqAZEF6zCFK.9VyqcJede1mi8yc2Mi', NULL, NULL, NULL, NULL, NULL, '9665169573', 'India', 'Jaipur', 'Sardarshahr', 334102, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality, all</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-01-31 11:55:00', '2024-01-31 11:56:08', NULL, NULL, NULL, NULL, 0),
(11, 'Josiah', 'Everett', 'tonatiruhe@mailinator.com', 'LKCHRH5L5qRg9KGUkg0b', NULL, '$2y$10$UjN2NE64np0lUCMRvT3YGuH1n0tYtKzpEzJRRns86G68oQZNbcZ0i', 'uploads/_1706703802_images (3).jpg', NULL, NULL, NULL, '2008-10-14', '+19665169573', 'India', 'Jaipur', 'Sardarshahr', 334102, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-01-31 12:22:22', '2024-01-31 12:23:22', NULL, NULL, NULL, NULL, 0),
(12, 'MacKensie', 'Reilly', 'zuzalozy@mailinator.com', '27zFwwVQwQgA883ZY4Bk', NULL, '$2y$10$1hLq/Qlc32x8bRsAqp8JhOUpMfHByrMtTCWCu38j2AN5DrT2lq7kS', NULL, NULL, NULL, NULL, '2018-11-26', '+19665169573', 'India', 'Jaipur', 'Sardarshahr', 334102, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human vo</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-01-31 12:25:35', '2024-01-31 12:25:54', NULL, NULL, NULL, NULL, 0),
(13, 'Ravi', 'Sharma', 'rs96136009@gmail.com', 'YsIRZvfNq2i0YCGSx5oi', NULL, '$2y$10$cVQ9FMjnRLqaDrA3Vj1o9OmFqt.yrokZ4WqJC0gqtGF51QjZfaUBm', 'uploads/_1706769438_images (2).jpg', NULL, NULL, NULL, '1997-01-19', '+1 (966) 516-9573', 'India', 'Jaipur', '13th Street. 47 W 13th St', 334102, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-01 06:21:50', '2024-02-01 06:54:27', NULL, NULL, NULL, NULL, 0),
(14, 'Macon', 'Contreras', 'qakojo@mailinator.com', 'h5yDaO6SKS0NkIiZx13C', NULL, '$2y$10$s1Cdr84keSCGYIHkRcBCrelMOUIIcqhhRXgMSkO5norgX.PBzXfmq', NULL, NULL, NULL, 'Nisi mollitia eiusmo', '1980-12-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-01 07:10:56', '2024-02-01 07:10:59', NULL, NULL, NULL, NULL, 0),
(15, 'Sonia', 'Hester', 'bulakodulo@mailinator.com', 'GD95WsnbmAaHmyFIgIUH', NULL, '$2y$10$2wmJAPogQsHzS7MVfTubTOF5MUF6RXHyN37RP.ND5nVNHwFNhKqwy', NULL, NULL, NULL, NULL, '2001-07-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-01 07:12:00', '2024-02-01 07:12:04', NULL, NULL, NULL, NULL, 0),
(16, 'Byron', 'Huff', 'cabitimom@mailinator.com', '2zBeRkQRW63vtgmxPxap', NULL, '$2y$10$d28lAObpdB4ayO80oqXLaOyhT0w/YdlgdNi1duk897IrTz2tgBIuu', NULL, NULL, NULL, NULL, '1978-09-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-01 07:37:06', '2024-02-01 07:37:09', NULL, NULL, NULL, NULL, 0),
(17, 'Aspen', 'Waller', 'guvym@mailinator.com', '5oHZvex2rWUFOUcQGCwQ', NULL, '$2y$10$70IUJd6yY1tXrjQ3oSlnre3sKP8zWYvXSgtQu.nDu2Is9skQoDL5u', NULL, NULL, NULL, 'Unde ea reprehenderi', '2003-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-01 07:48:54', '2024-02-01 07:48:57', NULL, NULL, NULL, NULL, 0),
(18, 'Selma', 'Lambert', 'jeqypepu@mailinator.com', 'SlITGmaNTgQo6tpTXkYl', NULL, '$2y$10$O27Z2pZrEAY3.eW271IaIuxt/UrDDw6sB924x7rF3YgTMfajpQKsC', 'uploads/_1706778697_download.jpg', NULL, NULL, NULL, '1990-06-05', '+1 (595) 328-3091', 'India', 'Jaipur', 'Sardarshahr', 334102, '<p>our professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-01 09:11:34', '2024-02-01 09:12:52', NULL, NULL, NULL, NULL, 0),
(19, 'Ralph', 'Decker', 'kycy@mailinator.com', 'FtiSQvkuHb4slp0FkNGD', NULL, '$2y$10$puNl8l721m4UHHS/GyySmu86lQXTeFcPyjDieBNBpGHBXzUnCWsru', 'uploads/_1706781159_2_1668581591_avatar-people-person-business.jpg', NULL, NULL, 'Voluptatem quis anim', '1972-09-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-01 09:52:35', '2024-02-01 09:52:39', NULL, NULL, NULL, NULL, 0),
(20, 'Kristen', 'Williamson', 'risana@mailinator.com', 'VX80mKeWDjgE6qVKh51y', NULL, '$2y$10$2kJE9ZDA57WnDV7RB0ADUO.dB4BLRxrJTjQrTeBOxcqM7lOun6m/m', 'uploads/_1706781626_2_1668581591_avatar-people-person-business.jpg', NULL, NULL, 'Necessitatibus solut', '1987-03-26', '+1 (966) 516-9573', 'India', 'Jaipur', 'Sardarshahr', 334102, '<p>Your professional summary is a short (255 characters),</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-01 10:00:21', '2024-02-01 10:01:23', NULL, NULL, NULL, NULL, 0),
(21, 'Zachary', 'Thomas', 'pyhogad@mailinator.com', 'M0jYwwSDnzFtEnCzSzpz', NULL, '$2y$10$SWRgGvs84/1h4.XaV1R.keEMHKAVYpJcPLVtMsLTdeDIAq.di4s.O', 'uploads/_1706793137_images (4).jpg', NULL, NULL, NULL, '1992-07-05', '+1 (243) 218-5872', 'Esse voluptatem ten', 'Placeat enim et nat', 'A tempora exercitati', 89, '<p>Your professional summary is a short (255 characters),</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-01 13:12:06', '2024-02-01 13:20:46', NULL, NULL, NULL, NULL, 0),
(22, 'Anshuman', 'Sharma', 'ansh1@gmail.com', 'GuiNAHRWwLk4NLaRNChy', NULL, '$2y$10$1pnVT0BBnkzY501upxunhOp8eTOe/kx8janb5uUdshloysO9zOnKq', 'uploads/_1706937716_font3.png', NULL, NULL, NULL, NULL, '(987) 878-8979', 'India', 'Sardarshahar', 'usfshk', 87899, '<p>Your professional summary is a short (255 ch</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-03 05:21:38', '2024-02-20 13:10:38', NULL, NULL, NULL, NULL, 0),
(23, 'Anshuman', 'Sharma', 'anshuman635068@gmail.com', 'daoDm69F54NRBccqifKg', NULL, '$2y$10$2kaR3IomLAPyBQxMf7jblewmkudixsH.dxHOdj9Wke71tpZzk5WSO', NULL, NULL, NULL, NULL, NULL, '(688) 688-7979', 'India', 'Sardarshahar', 'Anandwasi', 331022, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-04 08:52:17', '2024-02-04 08:54:35', NULL, NULL, NULL, NULL, 0),
(24, 'Anshuman', 'Sharma', 'ansh@gmail.com', 'TWXXx31S5wMg6RVnSwQe', NULL, '$2y$10$ca.ic96r0/DptPDu.IZNaekx4GSzKB.BYkhAhH2AgjZ17qPKVsxYG', 'uploads/_1707457269_65_1679457880_7361154dc8f0844896df62d88f25634f--boy-character-character-ideas.jpg', NULL, NULL, 'A123456789012', '2000-02-01', '+1 (966) 516-9573', 'India', 'Jaipur', 'Sardarshahr', 334102, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-09 05:41:05', '2024-02-09 05:49:06', NULL, NULL, NULL, NULL, 0),
(25, 'Anshuman', 'Sharma', 'ansh2@gmail.com', 'I1JllKkUK2PNfiEEQtr1', NULL, '$2y$10$ieC6Gw/pV5vBfDMWHRy/duiUX932C/EGgDpnV2m5wkHCYftWGebUW', 'uploads/_1707457818_2_1668581591_avatar-people-person-business.jpg', NULL, NULL, 'A123456789012', '2024-02-05', '+1 (966) 516-9573', 'India', 'Jaipur', 'Sardarshahr', 334102, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-09 05:50:13', '2024-02-09 05:50:40', NULL, NULL, NULL, NULL, 0),
(26, 'Rajiv', 'sharma', 'Rajiv@gmail.com', '2nMbzfEWEYFEZXJUbqtH', NULL, '$2y$10$q2H6BGPvpdNqIkiRmL.wy.9x6aa7Hv2YMmD1tZpApBB1MgfWXnGkW', 'uploads/_1707458257_user.jpeg', NULL, NULL, 'DL0055', '2024-02-01', '+1 (713) 394-7649', 'Est saepe aut vel no', 'Quo consequatur nobi', 'Iste facere voluptat', 95, '<p>bmnb,mb,mb</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-09 05:52:42', '2024-02-09 05:57:53', NULL, NULL, NULL, NULL, 0),
(27, 'Sacha', 'Conley', 'Sacha@gmail.com', 'OWUlPHdCPwJzCGMhJWk1', NULL, '$2y$10$BLHS.wcQu7mvgUBo67vNBuCKlDvyHUTSj40D29q7fVBpAAWwc0Gke', 'uploads/_1707466881_user.jpeg', NULL, NULL, 'DL502444', '2008-02-23', '+1 (315) 556-9804', 'India', 'jaipur', 'Wester Rajasthan , Jaipur', 22555, '<p><strong>Statement, is&nbsp;a short description at the top of your resume that describes your experience, qualities and skills. Including a resume summary allows you to showcase your strongest assets right away.</strong></p>', '<p>Student life is greatly influenced by their interests. After a long, tiring day, you need a break from your studies to unwind and forget about your worries so you can resume with a clearer head.&nbsp;</p>', '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-09 08:21:16', '2024-02-09 09:15:21', NULL, NULL, NULL, NULL, 0),
(28, 'Guy', 'Tanner', 'pawysobury@mailinator.com', 'miOTWo0OD6UQI9g6HMIY', NULL, '$2y$10$k03D8v6WwYpd06CFoufwrepREf0pEBF1VyeHHgj0a1n7PM1EEfqKW', 'uploads/_1707469621_user.jpeg', NULL, NULL, 'Tenetur et est non', '1996-02-18', '+1 (515) 671-1328', 'In quod exercitation', 'Eos quis et quos lab', 'Nulla in aspernatur', 14, '<p>bmnb,mbm,</p>', '<p>fghfdh</p>', '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-09 09:06:57', '2024-02-09 09:10:48', NULL, NULL, NULL, NULL, 0),
(29, 'Isadora', 'Sloan', 'xuqoxyf@mailinator.com', 'CiDtjZptIudJZ14HWD35', NULL, '$2y$10$8r1twN3k.TMWaPrPtIAS1OwR3E5lkhBWua8rB2Itrj1g0tc81Cfau', 'uploads/_1707470342_download.jpeg', NULL, NULL, 'Elit ab labore vita', '1977-12-17', '+1 (771) 836-5069', 'India', 'jaipur', 'jaipur, rajasthan', 1112254, '<p>Personal details or data is&nbsp;information that is personal to you, which could or does identify you. What do we mean by personal details? All these things and more: Your name</p>', '<p>fghdfhdfh</p>', '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-09 09:17:39', '2024-02-09 10:45:00', NULL, NULL, NULL, NULL, 0),
(30, 'Hayfa', 'Cohen', 'ansh4@mailinator.com', 'HJF995u4WmDH5Vt9UOCj', NULL, '$2y$10$wy.NVL1IL6K9bXo.te0mzeTp3VDmPdlti5D/FRWA/g/o30741A4t2', 'uploads/_1707472491_65_1679457880_7361154dc8f0844896df62d88f25634f--boy-character-character-ideas.jpg', NULL, NULL, NULL, NULL, '+1 (966) 516-9573', 'India', 'Jaipur', 'Sardarshahr', 334102, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice</p>', '<p>Add the name of your school, where it is located, what degree you obtained, your field of study, and your graduation year.</p>', '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-09 09:51:37', '2024-02-09 09:59:18', NULL, NULL, NULL, NULL, 0),
(31, 'Caldwell', 'Frazier', 'surud@gmail.com', 'RL7sfcTJxrqvFbrAOteb', NULL, '$2y$10$V34ZqLxaYzCH2HDS49znYuFcNKOdQP11yJhtUZog9CaUzrX1TvaXW', 'uploads/_1707483003_download.jpeg', NULL, NULL, 'DLSDM12341', '2019-01-11', '+1 (227) 491-1218', 'Canada', 'Varansi', 'western streets canada', 66968, '<p><strong>Software developers&nbsp;design, program, build, deploy and maintain software using many different skills and tools</strong></p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-09 12:39:39', '2024-02-09 13:23:35', NULL, NULL, NULL, NULL, 0),
(32, 'Haviva', 'Brennan', 'rokikela@mailinator.com', 'jwcpQIQrlPom3hoLyCsa', NULL, '$2y$10$ySoIWKP6YwJ/WHLvhq./A.x3y4BmfyvZfA4A6WpgMy9ULkwWUDLQq', 'uploads/_1707535874_download.jpeg', NULL, NULL, 'Vel perferendis comm', '1975-07-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-10 03:30:46', '2024-02-10 03:31:14', NULL, NULL, NULL, NULL, 0),
(33, 'Jelani', 'Pickett', 'cuce@mailinator.com', 'lPwImkzTzoUWGnXQrqNE', NULL, '$2y$10$aARcCvQsV.3BNOiKo4d6juIKQg757xsj8F49p/dFaOqINOZpQT5GG', 'uploads/_1707536034_download.jpeg', NULL, NULL, 'In voluptas dolores', '1999-07-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-10 03:33:51', '2024-02-10 03:33:54', NULL, NULL, NULL, NULL, 0),
(35, 'Zane', 'Hanson', 'doxajoquc@mailinator.com', '3fQR0BJdTY675Odg0EXk', NULL, '$2y$10$5sq6dUb8Hs6vLsqE1Fab7.Y2Ku492ztCqyy7fzduRIemosElLFql6', 'uploads/_1707536294_download.jpeg', NULL, NULL, 'Odit aut unde conseq', '2007-10-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-10 03:38:11', '2024-02-10 03:38:14', NULL, NULL, NULL, NULL, 0),
(36, 'Kai', 'Kline', 'luzyxise@mailinator.com', 'upQFJOlqALitNmrYFaLs', NULL, '$2y$10$REz7.Frh4s.zIygMBIYjW.nq4jWL9AlX0rBFUg/rwtFnQu7k7dAly', 'uploads/_1707536420_download.jpeg', NULL, NULL, 'Non voluptatem qui', '2009-03-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-10 03:39:42', '2024-02-10 03:40:20', NULL, NULL, NULL, NULL, 0),
(37, 'Devin', 'Reed', 'dycosulejy@mailinator.com', 'd11EhBuRZIts2ASEoJM7', NULL, '$2y$10$WBsjr8K3.slsrhg1/mLjg.V4AhtbqWKRnTCqnK1EsYk2MHXi0NSFK', 'uploads/_1707536459_user.jpeg', NULL, NULL, 'Commodi illo labore', '2007-03-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-02-10 03:40:52', '2024-09-07 14:03:33', NULL, NULL, NULL, NULL, 0),
(38, 'Keefe', 'Reynolds', 'budawol@mailinator.com', 'Wdm8tB2v5XHTk6cXNiWp', NULL, '$2y$10$CY2dWBSNBOS5CLpBx99XxuwPvqhwOapWJv4bsS9wJqYoZRhWyynR.', 'uploads/_1707536558_download.jpeg', NULL, NULL, 'Lorem earum ex moles', '2014-01-19', '+1 (543) 252-9054', 'Velit non minima vol', 'Ex aspernatur praese', 'Omnis anim nihil in', 51, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-10 03:41:44', '2024-02-10 03:42:38', NULL, NULL, NULL, NULL, 0),
(39, 'Cyrus', 'Buckner', 'vosikadupe@mailinator.com', 'rl07CiVnLz5kG9JjCryq', NULL, '$2y$10$6cMUzZhGT49GZ9Ml6p4ZyurNhv/KkD6SwxE2KtxJn2FY8HuTGpXv2', 'uploads/_1707536908_download.jpeg', NULL, NULL, 'Sit sed iste harum q', '2008-09-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-10 03:48:24', '2024-02-10 03:48:28', NULL, NULL, NULL, NULL, 0),
(40, 'Echo', 'Dillard', 'badugujemo@mailinator.com', '5tLznvtN5uG7sHaedpKK', NULL, '$2y$10$KzQjlPnB1D5I1CK7hHZPO.WwWuegi6.u9tG5xNml7LKKWD0npw2Ia', 'uploads/_1707538020_user.jpeg', NULL, NULL, 'Tenetur officia repe', '1970-09-18', '+1 (704) 619-6504', 'Itaque ea non volupt', 'Et dolorum rerum mol', 'Nobis voluptate nece', 34, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-02-10 04:05:58', '2024-09-07 14:03:26', NULL, NULL, NULL, NULL, 0),
(41, 'Ravi', 'Tester', 'rs961360009@gmail.com', 'ImdyNPleG6xTwQQ5lXNO', NULL, '$2y$10$TTc39J60jImSC9tou6xv1eV37wG99a1TIPdHR551KfJ3rsHwMm77G', 'uploads/_1706777216_2_1668581591_avatar-people-person-business.jpg', NULL, 'English', 'A123456789012', '2000-07-28', '(212)-456-7890', 'United State of America', 'Dallas, Texas', '123 Main Street Dallas', 3456346, '<p>Experienced PHP developer with a strong background in building dynamic and scalable web applications. Proficient in PHP, MySQL, and Laravel, with a focus on delivering high-quality, efficient, and maintainable code</p>', '<ul>\r\n	<li>Enjoying a good book, whether it&#39;s fiction, non-fiction, or a specific genre like mystery or science fiction.</li>\r\n</ul>', '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-01-23 05:22:56', '2024-03-06 10:05:49', 'cus_PgdG4EpLTfxmsC', NULL, NULL, NULL, 0),
(43, 'Reed', 'Hammond', 'bijoryqi@mailinator.com', 'PI1xsChEhRzKeveMTbZN', NULL, '$2y$10$5gwV/Clv1f1Pyog4DdqI5efZX4CHO2497vWcqQwlOzlBRwGLUgGte', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-13 04:43:48', '2024-02-13 04:43:48', NULL, NULL, NULL, NULL, 0),
(44, 'Logan', 'Workman', 'sosuk@mailinator.com', 'VVyTVLbGStubdK5vRZgy', NULL, '$2y$10$WUpZ1oopnny41N3ZBmujYeWmqe8B1/iMkUiBLZNmpnZ3W2vHYr526', NULL, NULL, NULL, NULL, '1988-05-14', '+1 (201) 603-3266', 'Rerum sint enim ist', 'Occaecat ipsum eos', 'Est lorem dolor fugi', 90022, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-13 04:44:34', '2024-02-13 05:08:33', NULL, NULL, NULL, NULL, 0),
(45, 'Devin', 'Harper', 'resumeyixcxzffff@yopmail.com', 'HZx1M7xwwtvoet80WPn4', NULL, '$2y$10$KBhnkV5Uv88IJmDDz7cdL.Rm/YCmAmXKUTIFjGVPwaLJwncNvXGXq', 'uploads/_1707802608_download.jpeg', NULL, NULL, 'Harum commodi ut del', '1970-11-05', '+1 (599) 907-8989', 'Dicta facilis velit', 'Minus fugit eius co', 'Ducimus molestias l', 78, '<p>xvgdfgdf</p>', '<p>dsdsd</p>', '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-13 05:36:48', '2024-02-13 06:49:08', NULL, NULL, NULL, NULL, 0),
(46, 'Natalie', 'Rivas', 'nehoh@yopmail.com', 'axAcP5T242huf1RyG6bp', NULL, '$2y$10$.nGSQJf83hvLNws0rLQqe.g0k7s9mGAjyLZrrk68fgbbTH8WyQS7m', 'uploads/_1707804113_download.jpeg', NULL, NULL, 'Accusantium assumend', '2001-06-07', '+1 (147) 576-3085', 'Sunt aute eveniet e', 'Ut deleniti nesciunt', 'Eos rerum veritatis', 123456, '<p>Professional Summary</p>\r\n\r\n<p>Include your professional title, years of experience, and your most impressive achievements. Each achievement should be measurable and expressed in numbers.</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-13 06:01:53', '2024-02-13 06:04:40', NULL, NULL, NULL, NULL, 0),
(47, 'Gage', 'Norris', 'dinasyz@yopmail.com', 'sqldosJxG8pprMAcZo18', NULL, '$2y$10$oKjG823Rb9r00cg2jnO2AuFeXkV6q9ItcIqnlJ0HF/zKag/t618Re', 'uploads/_1707805751_user.jpeg', NULL, NULL, '32131231312', '1999-11-13', '+1 (328) 479-3744', 'Quam ea magnam eum e', 'Ad sequi officia dol', 'Ad quam dolor ut inc', 83, '<p><strong>by adding a human voice and personality, allowing you to highlight your accomplishment, relevant skills, and experiences that align with the job&#39;s requirements and set you apa</strong></p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-13 06:29:08', '2024-02-13 06:29:28', NULL, NULL, NULL, NULL, 0),
(48, 'Roth', 'Vincent', 'xisyc@mailinator.com', '5tGcuLen6fAk2HhJYwHw', NULL, '$2y$10$ymUfT3UzWK6yWhYXp2t0COcQx1.jhh1Ysw2GcY.sy4J6VJRpOSkce', 'uploads/_1707814682_user.jpeg', NULL, NULL, 'Nostrum molestiae Na', '1996-10-30', '+1 (507) 935-2752', 'Occaecat temporibus', 'Magni provident har', 'Tenetur proident ex', 16, '<p>xcvzxvc</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-13 08:57:59', '2024-02-13 08:58:19', NULL, NULL, NULL, NULL, 0),
(49, 'Anshuman', 'Sharma', 'validator@mailinator.com', 'WR3Co9EhpNjRZ4HAvxPu', NULL, '$2y$10$L3H8mT73.p4BSjz6wbV8PeOiT3Vn5mB1HcTc6Dx0aY7NFS062dwtW', 'uploads/_1707912359_65_1679457880_7361154dc8f0844896df62d88f25634f--boy-character-character-ideas.jpg', NULL, NULL, NULL, NULL, '+1 (792) 207-9423', 'Aliquip hic cum expe', 'Odio corrupti qui i', 'Et illum incididunt', 171152, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality, allowing you</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":1,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, 'https://jobgetr.daedaltech.online/my-profile', 0, NULL, NULL, NULL, '2024-02-13 11:40:57', '2024-03-12 06:28:10', 'cus_PiqV7HPTSixNNT', 'visa', '4242', NULL, 0),
(50, 'Amena', 'Hall', 'dai11h@yopmail.com', '1oGoe3kL05zM8IxtOHYq', NULL, '$2y$10$PH2lcaAWBTClcAY6.ish..3ljxNK3e3lQ840efBgwPzmHL4I4hj.2', 'uploads/_1707827447_user.jpeg', NULL, NULL, 'Quis odio hic ut vol', '2000-06-10', '+1 (454) 807-1858', 'Non amet sapiente v', 'Sed rerum ea explica', 'Quas incidunt accus', 12345, '<p><strong>Include your professional title, years of experience, and your most impressive achievements. Each achievement should be measurable and expressed in numbers.</strong></p>', '<p>howcase your passion and highlight your achievements, such as special projects completed, unique skills developed, or notable experiences gained.</p>', '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-02-13 12:30:47', '2024-09-07 14:03:04', NULL, NULL, NULL, NULL, 0),
(51, 'Tyrone', 'Wheeler', 'daih@yopmail.com', '1xszKGXi29RgjS0nsQ7u', NULL, '$2y$10$rD6RwFWNxJIUuk7PAGVrse2a539MS3xx9KfFm/93hLy0nzdcq8QSi', 'uploads/_1707828082_download.jpeg', NULL, NULL, 'Excepteur quis molli', '2004-06-21', '+1 (455) 666-4741', 'Omnis non asperiores', 'Mollitia modi accusa', 'Voluptates maiores e', 123456, '<p><strong>Include your professional title, years of experience, and your most impressive achievements. Each achievement should be measurable and expressed in numbers.</strong></p>', '<p>Showcase your passion and highlight your achievements, such as special projects completed, unique skills developed, or notable experiences gained.</p>\r\n\r\n<p>Summary d</p>', '{\"choosePlan\":1}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-13 12:41:22', '2024-03-12 06:24:14', 'cus_PhQg3QDfvMETlK', 'visa', '4242', NULL, 0),
(52, 'ABC', 'Tester', 'abctester@malinator.com', 'JJ2KTcv2k4K6xPXhPPOF', NULL, '$2y$10$RatjVvXQKxvDUscH5slJr.XzM17/Meze.DgJ1HQ8b3dFCehJD476i', 'uploads/_1707976913_images (2).jpg', NULL, NULL, NULL, '2024-02-28', '+19665169573', 'India', 'Jaipur', 'Sardarshahr', 334102, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer.</p>', '<p>Showcase your passion and highlight your achievements, such as special projects completed, unique skills developed</p>', '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-02-15 05:13:10', '2024-09-07 14:02:44', NULL, NULL, NULL, NULL, 0),
(53, 'Anshuman', 'Sharma', 'abctester2@malinator.com', 'MSxkQ5RwFmh6I2K2qAaM', NULL, '$2y$10$jAHFoIqd1FXKLq0SM3vEfuD078hAJ.9yM4ulQxJR5Z19EWDjDNTwK', 'uploads/_1707974622_images (2).jpg', NULL, NULL, NULL, '2008-02-01', '+1 (966) 516-9573', 'India', 'Jaipur', 'Kakkan St Tambaram West Tambaram, Chennai', 334102, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-15 05:20:41', '2024-02-15 05:25:07', NULL, NULL, NULL, NULL, 0),
(54, 'Clark', 'Lambert', 'muqog@mailinator.com', 'DYYLVkHUazUFsmHANR7r', NULL, '$2y$10$4smyqnJm9Qw0AXb/janpXusZGZEJxih/W49BqWtjY3IBjVwqZIOqm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-15 05:43:30', '2024-02-15 05:43:30', NULL, NULL, NULL, NULL, 0),
(55, 'Anshuman', 'Sharma', 'abc@gmail.com', 'YOUZ1pImjjcKJHZkp7kW', NULL, '$2y$10$9NcNV68rAiu9Yrkq1NqreOBsRXKLr5h97LYVjmyYonwgl7Lq2gUde', 'uploads/_1708002974_2_1668581591_avatar-people-person-business.jpg', NULL, NULL, NULL, '2019-01-01', '+1(966) 516-9573', 'India', 'Jaipur', 'Sardarshahr', 334102, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-15 13:16:14', '2024-02-15 13:16:14', NULL, NULL, NULL, NULL, 0),
(56, 'Anshuman', 'Sharma', 'arvind@gmail.com', 'xqSniyoO9uqQPfRWwrq3', NULL, '$2y$10$FJaSnKFHc5RKDNXOWjqpsObi5TIxIOcKU468OCelXrhHRDgo1wLge', 'uploads/_1708003458_2_1668581591_avatar-people-person-business.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-02-15 13:24:18', '2024-03-09 03:58:38', NULL, NULL, NULL, NULL, 0),
(57, 'Anshuman', 'Sharma', 'rohit@gmail.com', 'VYH6FWTwaPDlDhLvhKlE', NULL, '$2y$10$7dvjPDYN4tFumZNODYHzbuCYcX68TPttZZOoVlOGbWBKHU86uiy0q', 'uploads/_1708003804_2_1668581591_avatar-people-person-business.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>Showcase your passion and highlight your achievements, such as special projects completed, unique skills developed, or notable experiences gained.</p>', '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-15 13:30:04', '2024-02-15 13:30:04', NULL, NULL, NULL, NULL, 0),
(58, 'Chaney', 'Bates', 'newws@yopmail.com', 'wKJkc87oWM0wuEvN2MD3', NULL, '$2y$10$/hGosgRNfaRt/iLNUHxFDOKws47k/M9B3dofk6ERVaYdirqTFoCwe', NULL, NULL, NULL, NULL, '2024-02-14', '+1 (454) 807-1858', 'Sunt', 'testing', 'a', 123455, '<p>Include your professional title, years of experience, and your most impressive achievements. Each achievement should be measurable and expressed in numbers.</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-15 14:22:05', '2024-02-19 08:48:53', NULL, NULL, NULL, NULL, 0),
(59, 'asdf', 'asdf', 'resusdafme@yopmail.com', 'FtZP0fhDFnovNisdcjqL', NULL, '$2y$10$Qm4EVEfgNifWQ9frIFzcl.yGdHncrHeWGNxsOMFjhwGCExf5bl8qu', NULL, NULL, NULL, 'asdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-15 14:29:55', '2024-02-15 14:29:55', NULL, NULL, NULL, NULL, 0),
(60, 'Rahul', 'KUMAR', 'masteruser@yopmail.com', 'ptxUHz4lDr2P24TXL20Z', NULL, '$2y$10$66m2QtMBMuP.HdnhobLXnO55D55enoMNeNqlHlXE.GYCJdu3KfMCi', 'uploads/_1708010434_dummy.jpeg', NULL, NULL, NULL, '2013-01-01', '(555) 555-1234', 'japan', 'new york', 'Dubai khuli nagar', 44758574, '<p><strong>Include your professional title, years of experience, and your most impressive achievements. Each achievement should be measurable and expressed in numbers.</strong></p>', '<p>Showcase your passion and highlight your achievements, such as special projects completed, unique skills developed, or notable experiences gained.</p>', '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-15 15:20:34', '2024-02-15 15:24:59', NULL, NULL, NULL, NULL, 0),
(61, 'August', 'Griffith', 'cusyju@mailinator.com', '8W8tz0LR8xj0G93SFC1R', NULL, '$2y$10$9Gp0qxGEIkhoyBHhGaYBF.c1/fQs1n3Xe/JlWTyhJfJSBQlPo8pLC', NULL, NULL, NULL, 'Quo et est esse iur', '2013-04-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-19 06:10:16', '2024-02-19 06:10:16', NULL, NULL, NULL, NULL, 0),
(62, 'Anshuman', 'Sharma', 'testuser@mailinator.com', 'wTFDCoXLZYS3hVcVvdVB', NULL, '$2y$10$EZfB.emcvAZjfHjaCRR00OAo9VePRsFTi9UkuscAiiXYbPUFgfjwK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-20 04:54:10', '2024-02-20 13:07:52', NULL, NULL, NULL, NULL, 0),
(63, 'Halla', 'Combs', 'wejegodos@mailinator.com', 'Yimcw4DKfKFMfwzkhugl', NULL, '$2y$10$ec08jh2gG7ZeY3ZGrE7qUuSLlQgAS38WUaIRPUWR7YXte0war1tSC', NULL, NULL, NULL, 'Obcaecati ut ad blan', '2017-07-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-22 10:19:52', '2024-02-22 10:19:56', NULL, NULL, NULL, NULL, 0),
(64, 'Price', 'Peterson', 'pycojixi@mailinator.com', 'HmRxjEMaK9gdh0jwy62I', NULL, '$2y$10$0tKW9.h2pTORJ1PSRGyFRuB/Vx3k0o9uwbmyD9kdAevzGirK5c5o6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-22 10:20:17', '2024-02-22 10:25:33', NULL, NULL, NULL, NULL, 0),
(65, 'Alexander', 'Black', 'towavy@mailinator.com', 'oeTkp9ryQuO2WpVHiqWC', NULL, '$2y$10$DhJ7Wy7qvv5UzMsGPTvZeeyL2Dp79TRBrJC3CPtaW0lYTVKDbB/ES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-02-22 10:45:26', '2024-09-07 14:02:58', NULL, NULL, NULL, NULL, 0),
(66, 'Harding', 'Lara', 'begetujyh@mailinator.com', 'LtoW2cpi9WKbx3mpss6O', NULL, '$2y$10$ULG98QY9nJ1Wd7xo2SWm3OvKOfzNTfLzSLBhtrqlGSu8URj7zgDUO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":1,\"choosePlan\":1,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-23 05:05:47', '2024-03-11 13:29:58', 'cus_PgJQbInxBU7Vja', 'visa', '4242', NULL, 0),
(67, 'Cynthia', 'Fitzgerald', 'focejoz@mailinator.com', 'Z0mRGwS5teM1EEK7eyVo', NULL, '$2y$10$gGJLxAIolSROpx/yvFu9feWHU9uNJYQrKT/xvY6.bjaoFTxuSvCCi', NULL, NULL, NULL, 'Aperiam consequat S', '1995-03-09', '+1 (761) 121-8291', 'Quia dolor labore co', 'Cillum aspernatur do', 'Eius in obcaecati nu', 52, '<p>cvhgd</p>', '<p>Showcase your passion and highlight your achievements, such as special projects completed, unique skills developed, or notable experiences gained.</p>', '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-23 10:55:19', '2024-02-23 11:20:57', NULL, NULL, NULL, NULL, 0),
(68, 'Vincent', 'Thornton', 'cyselazanu@mailinator.com', 'OLC6saXYXsKAuqTdTtdm', NULL, '$2y$10$b60yS3WyaR6QvzKqN2xDbeWJOAQ5tYLpsjGmhaHGKecyduMqOlxs6', NULL, NULL, NULL, 'Porro excepteur reic', '2001-03-08', '+1 (953) 904-8752', 'Veritatis dolor porr', 'Minus rerum dolor co', 'Non culpa et dolorum', 82, '<p>Zxcvgbnm,.</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-23 12:47:09', '2024-02-23 12:50:22', NULL, NULL, NULL, NULL, 0),
(69, 'Chastity', 'Sparks', 'gyxa@mailinator.com', 'nxcuODjxdqsbzyxhxTyE', NULL, '$2y$10$X0rhTE5z3HUhpWScTRuLWu4qbwr4YEKuXt/BTPnDHJJoEXNXZuhkO', NULL, NULL, NULL, 'Excepturi labore rer', '2001-12-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-23 13:10:07', '2024-02-23 13:10:11', NULL, NULL, NULL, NULL, 0),
(70, 'Axel', 'Hays', 'kuqax@mailinator.com', 'pD18d2rYnIVQCm1h2WR5', NULL, '$2y$10$zKwGVb/hEW8kd4oECY21XulBxOWzJxan3W0rdv.3foOyCDS293N7a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>uigkkj</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-28 05:07:54', '2024-02-28 05:14:00', NULL, NULL, NULL, NULL, 0),
(71, 'ashok', 'kumar', 'lokeshnagar@gmail.com', 'm1klDXUAR5wH3M7B0cIC', NULL, '$2y$10$5pN5b4LHDZc9.wwrGXswCeHNqB4D5kb7s7NN.pmEdyJT4hnE12dKC', 'uploads/_1709112133_Untitled-1.png', NULL, NULL, 'sd636436463', '2024-02-28', '8769272659', 'india', 'jaipur', 'ssdds', 3039808, '<p>Include your professional title, years of experience, and your most impressive achievements. Each achievement should be measurable and expressed in numbers.</p>', NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-28 09:15:47', '2024-02-28 09:22:13', NULL, NULL, NULL, NULL, 0),
(72, 'ashok', 'kumar', 'r609@gmail.com', 'lDD4VBghoyLGBRXxTDR5', NULL, '$2y$10$EjsCw8jR0IO3v102UfGRhuoiDLY.4M2aIz6gB3UBNr9.5nHH/zRbq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-28 09:32:38', '2024-02-28 09:32:38', NULL, NULL, NULL, NULL, 0),
(73, 'Tamekah', 'Barron', 'xynajo@mailinator.com', 'w4ShfQgzgBRKAHVTWsvg', NULL, '$2y$10$b8IYuiei981qH1/30KV4oeoO4hBBtTaHNqkuPKk9iugCsAXPBi1m2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-29 09:20:31', '2024-02-29 09:20:31', NULL, NULL, NULL, NULL, 0),
(74, 'Anne', 'Boone', 'gorazobe@mailinator.com', 'lNMEb1cqXob1ODJtnhNG', NULL, '$2y$10$/Yj2OyIHXD3MJASRTwroB.1SrMKsPGptrVU9.Da1cP9ZwwAz9rFuu', 'uploads/_1709205577_65_1679457880_7361154dc8f0844896df62d88f25634f--boy-character-character-ideas.jpg', NULL, NULL, 'Illo enim repellendu', '1985-06-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-02-29 11:19:37', '2024-02-29 11:19:37', NULL, NULL, NULL, NULL, 0),
(75, 'Evangeline', 'Kent', 'qodamupeh@mailinator.com', '9ZiEKpPJxd0QPtbKAVXj', NULL, '$2y$10$TR1ARxsPy6nBlUTYsoJ2T.LARqakzoBhbkAyHmjCeTpueslRzp8DO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-01 02:47:13', '2024-03-01 02:47:13', NULL, NULL, NULL, NULL, 0),
(76, 'Clark', 'Gilliam', 'qanupylel@mailinator.com', 'azQewZirE4W3mx6YBvs7', NULL, '$2y$10$xup4NHIMWHIF7R85kIJNu.jYGycELyQCUyCmhJPbITWpnS4i2EOWS', NULL, NULL, NULL, 'Culpa aut rerum ips', '1976-02-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-01 04:50:08', '2024-03-01 04:50:12', NULL, NULL, NULL, NULL, 0),
(77, 'Sawyer', 'Lancaster', 'pyjyhaguni@mailinator.com', 'd46VlXN5b09aTPCCF5C9', NULL, '$2y$10$eoJOa4sCpmeoOLKPfHg9BeamOb7pqQ9IHrNlXRT6n/vjb.1cYPeIy', NULL, NULL, NULL, 'Impedit cum nihil o', '2003-07-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-01 05:31:56', '2024-03-01 05:32:00', NULL, NULL, NULL, NULL, 0),
(78, 'Yael', 'Christian', 'eed@mailinator.com', '1sWzgMMItuxrqMgBPq8R', NULL, '$2y$10$e9ybkPAyk4LEle7UIWj8/Ov3TRkyJEDdSvSewL3Je0hx3x8LUiM8q', NULL, NULL, NULL, 'Modi cum ratione vol', '2014-09-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-01 06:05:30', '2024-03-01 06:08:06', 'cus_PeigG81jprJexJ', '[\"card\",\"link\",\"cashapp\"]', NULL, NULL, 0),
(79, 'Odysseus', 'Gardner', 'Deep@mailinator.com', 'AEmFU55RTCl8oM4J85r7', NULL, '$2y$10$GVopfAiGndD8iRN628lYCOvnR4osXIExIAmne7devFDEFI9j85s4C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-01 06:13:05', '2024-03-01 06:14:07', 'cus_PeinjfOcKsoVOw', '[\"card\",\"link\",\"cashapp\"]', NULL, NULL, 0),
(80, 'Lila', 'Perry', 'wygehecif@mailinator.com', 'boS8wTwxoW2WqX0Qi1Kn', NULL, '$2y$10$Rzwys6xj5mPPb3JA2PNAPeeoxV2YnJYckwTyo0YX7.WFvd6U4EDde', NULL, NULL, NULL, 'Ratione amet archit', '1982-02-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-01 06:41:25', '2024-03-01 07:26:14', 'cus_PejGB6rvOIy84z', '[\"card\",\"link\",\"cashapp\"]', NULL, NULL, 0),
(81, 'testuser', 'j', 'testuser@gmail.com', '1N1jFZwh3tXXf0JrA5o3', NULL, '$2y$10$XQV0hIRM1Azg7MERzYetE.VqqHWPhvQSrHlX92rM4RyEo8vV2HeqC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-01 07:12:21', '2024-03-01 07:43:40', 'cus_PekERypQvZrAYr', '[\"card\",\"link\",\"cashapp\"]', NULL, NULL, 0);
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `slug`, `email_verified_at`, `password`, `profile_image`, `desired_job_title`, `nationality`, `driver_license`, `date_of_birth`, `phone_number`, `country`, `city`, `address`, `postal_code`, `professional_summary`, `hobbies`, `completion_status`, `otp_token`, `expire_time`, `project_url`, `status`, `upload_resume`, `remember_token`, `upload_resume_verify`, `created_at`, `updated_at`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`, `video_credits`) VALUES
(82, 'Fleur', 'fdfdf', 'fddee@mailinator.com', 'Tyo3euAEifXKRJYlLQjI', NULL, '$2y$10$Rzwys6xj5mPPb3JA2PNAPeeoxV2YnJYckwTyo0YX7.WFvd6U4EDde', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-01 07:29:52', '2024-03-01 08:03:14', 'cus_PekA0i6m3HiLqu', '[\"card\",\"link\",\"cashapp\"]', NULL, NULL, 0),
(83, 'Carson', 'Levine', 'liqaguqy@mailinator.com', '5uBAtJnIGKWi5Ir7wRg6', NULL, '$2y$10$.C8t3MLGc3p8PhiGU7bUcOKg28/2zsPDGZ8cr.UmFfCGR.fSP1tta', NULL, NULL, NULL, 'Ipsa illo molestias', '2015-08-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetail\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-01 10:52:34', '2024-03-01 11:12:57', 'cus_PenIgZMB0uLVpI', '[\"card\",\"link\",\"cashapp\"]', NULL, NULL, 0),
(85, 'abhi', 'kumar', 'ashokkumar@gmail.com', 'hkUrNJXJhZglQ4AxrZCJ', NULL, '$2y$10$cTiJ1Fyx6o.rVdKZIr52qOKrDtZAGLSS430b.10pB9ipnnntZbDzS', NULL, NULL, NULL, 'dsfsf34433434', '2024-02-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-03-04 05:26:45', '2024-09-07 14:02:52', NULL, NULL, NULL, NULL, 0),
(86, 'ashok', 'kumar', 'admin@gmail.com', 'T4PhwEnxxAUGaYBGpTO5', NULL, '$2y$10$bxjDPCWXaTFwNMo5fg.CyObh4/Ypo6UKdjBkjJFS4LgcMZOhK7ixS', NULL, NULL, NULL, 'dsfsf34433434', '2024-02-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-04 05:29:25', '2024-03-04 05:29:25', NULL, NULL, NULL, NULL, 0),
(87, 'Ursula', 'Burnett', 'favynukyf@mailinator.com', 'ArUN7HL7hIhMDtWjilf2', NULL, '$2y$10$94xvzjXfmnEoX1/uOhXRTe5dztQm/0NBRaB4JtovYZo8q/D/x3UWW', NULL, NULL, NULL, 'Fugit officia et do', '1971-04-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-04 10:02:40', '2024-03-04 10:02:44', NULL, NULL, NULL, NULL, 0),
(88, 'Kevin', 'Berger', 'gexekiqum@mailinator.com', 'dGlybhaa1TQwzGqD6HcJ', NULL, '$2y$10$i6ZiZQkP/CqlgZqQOpe4GOfXTSmI0j7yzdOJ6qWxkBYNvJlouF.iq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-05 04:43:37', '2024-03-05 04:43:58', 'cus_PgCFDGxzIxW91I', NULL, NULL, NULL, 0),
(89, 'Vance', 'Fox', 'testsub@mailinator.com', 'DbRkhMwqrwGVcSzPJ7MR', NULL, '$2y$10$wNz8eT2O4gXIgrB5gyTjcOeO51.qYfmjhuB7tciQPM0KrCPSk7nRW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-05 12:07:58', '2024-03-05 12:21:31', 'cus_PgJQOZtQyCA7eh', '[\"card\",\"link\",\"cashapp\"]', NULL, NULL, 0),
(90, 'Aspen', 'Mays', 'xitijuxo@mailinator.com', '0NhN6jBPoyS7yB171nyb', NULL, '$2y$10$TfteT51vSAboobx01KTAEuEYWrPgplYGZU1IfYivCvG8Q2II8FP4O', NULL, NULL, NULL, NULL, '2011-07-31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-06 07:01:54', '2024-03-06 07:08:05', 'cus_PgbncylungwJCY', NULL, NULL, NULL, 0),
(91, 'Justin', 'Hutchinson', 'webakal@mailinator.com', 'Vg8Y8RVTPd8EcGZTF3sV', NULL, '$2y$10$GNgqNaGrGuYv8A6OupofBeXholXY6rWbwlQSxObk6e9Y5o9zN2oSq', NULL, NULL, NULL, 'Ut vel corporis repe', '2005-02-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-06 12:03:50', '2024-03-06 12:03:54', NULL, NULL, NULL, NULL, 0),
(92, 'Oleg', 'Espinoza', 'hicoqycuk@mailinator.com', '5MCuOJFocrejPjxILdlk', NULL, '$2y$10$6ef.8t1M7ZiGL2xywroyc.ExzQVXbPw1yckdwHSyYShsHYPb4Tav.', NULL, NULL, NULL, 'Maxime nemo est porr', '2005-08-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"choosePlan\":1}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-08 11:50:06', '2024-03-08 11:55:53', 'cus_PhQolwDdakzOls', NULL, NULL, NULL, 0),
(93, 'Risa', 'Barnett', 'xezu@mailinator.com', 'JekNabkgsdjIl99HEXFI', NULL, '$2y$10$wjVAEBTZ0k.kqftf5EFm3OvAfSXZnNCuqCarMmob/xIncfo28pSb.', NULL, NULL, NULL, 'Cupiditate sit molli', '2011-03-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-08 12:08:47', '2024-03-08 12:08:52', 'cus_PhR6zPmOZ5yl0u', NULL, NULL, NULL, 0),
(94, 'Adele', 'Gay', 'solawec@mailinator.com', 'NhqPhHjKlFXJCtcD0htZ', NULL, '$2y$10$RCRbca/5Kpq5mlUtX35IjuKBDLm44fVDXPKd78yhjeontPWihadsi', NULL, NULL, NULL, 'Possimus magna enim', '1992-03-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-03-09 02:51:29', '2024-09-07 14:02:57', 'cus_PhfLzRhqLE4lgK', NULL, NULL, NULL, 0),
(95, 'Reece', 'Hayes', 'jufabog@mailinator.com', '05gvKL4jrtnYo3RG5dhO', NULL, '$2y$10$UA5EOqA/L1Hu8y77klNWf.uPjJBrE15.5FEBHNdAC4AchyQokuv7i', NULL, NULL, NULL, 'In beatae tenetur au', '1996-04-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"choosePlan\":1}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-09 03:53:28', '2024-03-09 03:55:10', 'cus_PhgMVwBOOWG5mr', NULL, NULL, NULL, 0),
(96, 'Cruz', 'Raymond', 'medujil@mailinator.com', 'GLpDjdMWKyyBBnBbBrEy', NULL, '$2y$10$TFAcAt9OwZbakTRfknWOSebubsvCPQdEZ31gluKrCyVqypm9xeIWq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"choosePlan\":1}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-09 06:14:34', '2024-03-09 06:17:36', 'cus_PhicN8OVFjxjv8', NULL, NULL, NULL, 0),
(97, 'Olympia', 'Welch', 'cepinupoti@mailinator.com', 'r6u4DOG4ohPqhwYtL8cO', NULL, '$2y$10$4NKmfvisuKkDt3aVE0NKSO4iqIYrX6SYpvykyz9Iuyqexb7MpHe0u', NULL, NULL, NULL, 'Ducimus aliquip aut', '2024-01-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"choosePlan\":1}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-09 06:18:05', '2024-03-09 06:34:48', 'cus_Phig1O4KZQAgTG', NULL, NULL, NULL, 0),
(98, 'Micah', 'Morris', 'kamixequgu@mailinator.com', 'dXZo2QoYRI5pmDlVNSWD', NULL, '$2y$10$xO0LcMM144.q9fgHeSRxaue1EB5JD7gqij054bDZJzgK8x.89t4WW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"choosePlan\":1}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-09 06:35:08', '2024-03-09 06:54:06', 'cus_PhixvuEERpLW6m', NULL, NULL, NULL, 0),
(99, 'Dominique', 'Holt', 'lavopogoki@mailinator.com', 'JLclwEiSH1Z1Zssp4svn', NULL, '$2y$10$dDtNayxgq2VcoTWAu5krq.hjE.6ywbYEAHo52cLkxVZjokS64IJye', NULL, NULL, NULL, 'Molestias magni cill', '2019-12-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"choosePlan\":1}', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-03-09 06:55:43', '2024-09-07 14:03:30', 'cus_PhjHJkj0HqRAiW', NULL, NULL, NULL, 0),
(100, 'Kiona', 'Blevins', 'zumitu@mailinator.com', 'UVbrE89FMfpOiFRLfFOY', NULL, '$2y$10$n8inD1h8LNkWFjjB6/YkEuiO32y3XGtZKEMh4NKuKmx5V.DuEUTz.', NULL, NULL, NULL, 'Voluptas perferendis', '1997-12-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"choosePlan\":1}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-09 07:04:30', '2024-03-09 07:12:09', 'cus_PhjQReTL6w7FpK', NULL, NULL, NULL, 0),
(101, 'Macy', 'Bowers', 'zumodyxi@mailinator.com', 'trAJIVHQ7oNqvSllTuC5', NULL, '$2y$10$O8lMzSMcgk8Z1/cYOugdo.usYjpWfvBUlwgVCFzXpGSN.PcvcU7Q.', NULL, NULL, NULL, 'Officia quod sed tem', '1986-08-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"choosePlan\":1}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-09 07:12:28', '2024-03-09 07:16:59', 'cus_PhjYRSJDsJ04ad', NULL, NULL, NULL, 0),
(102, 'Anshuman', 'Sharma', 'ras9613609@gmail.com', 'hr4a4roX8Falfsbzp0wY', NULL, '$2y$10$gcqAsYMLkWUYgwyVFn4UauVK/L1b5jY8.i76qX8aT.qDtNCzmx.Fm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-03-11 09:24:30', '2024-03-11 09:24:34', NULL, NULL, NULL, NULL, 0),
(104, 'Dai', 'Berry', 'hyzukef@mailinator.com', 'LkJaWF4ae7mEumuxdHRG', NULL, '$2y$10$HcYMVESuV8pJUBiPwstgYen2OWehJk5SMDq2v.vAqDBIaYXRFJJkO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0}', '$2y$10$X44JT5Za2FX8/xPSKLaE9OvS8s/5FAGB.aw99rrNmZM9iI0XpbFVC', '2024-03-11 12:29:27', NULL, 2, NULL, NULL, NULL, '2024-03-11 11:59:24', '2024-03-11 11:59:27', NULL, NULL, NULL, NULL, 0),
(105, 'Cassandra', 'Mccarthy', 'cubeje@mailinator.com', 'sQsjMmFptnrG635iruRs', NULL, '$2y$10$GOSGXAlueqfJiEsex5rR5ubT7LGCrmBeBDyU9Vu73IBP52QNtcOJK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0}', '$2y$10$7JRFSK8oRtiwQT9oAGMwKeY8DPvFD8bHAFjHGvuFjVn.5awrWeWMG', '2024-03-11 12:30:25', NULL, 2, NULL, NULL, NULL, '2024-03-11 12:00:25', '2024-03-11 12:00:25', NULL, NULL, NULL, NULL, 0),
(106, 'Oscar', 'Mcfarland', 'zobox@mailinator.com', 'MAO8RUw0OOFSWXUyFt3z', NULL, '$2y$10$pRs.ocE72EjNwfbbJOshGOlzACTbLSz.VrYyKJmLP8JbJu0Z6KiPK', NULL, NULL, NULL, 'Tempor facere qui es', '2015-10-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalSummary\":0,\"side_employment_history\":0,\"side_education\":0}', NULL, NULL, 'https://jobgetr.daedaltech.online/admin/user-management/52/edit', 0, NULL, NULL, NULL, '2024-03-11 13:06:55', '2024-03-11 13:07:05', NULL, NULL, NULL, NULL, 0),
(107, 'Karly', 'Riggs', 'kake02@yopmail.com', '0XkZiiSsYDN9jEiRFk2R', NULL, '$2y$10$FaMc7pmc6UQNbMOU.PvZO.1ci6mGX7KuHM4tehpTW/18B/7N18kxe', 'uploads/_1710219624_planPremium.png', NULL, NULL, NULL, NULL, '+1 (958) 921-9333', 'Amet repellendus I', 'Quam eaque laudantiu', 'Voluptatem Ipsam nu', 90, '<p>Include your professional title, years of experience, and your most impressive achievements. Each achievement should be measurable and expressed in numbers.</p>', NULL, '{\"personalDetai\":1,\"choosePlan\":1,\"contact_information\":1,\"professionalsummary\":1,\"side_employment_history\":0,\"side_education\":0}', '$2y$10$5yt8lk43tFaFs9ocXLYUxOQJN5VNik3lERg6rvZ9A3CoacQXn9O0y', '2024-03-11 14:05:40', NULL, 0, NULL, NULL, NULL, '2024-03-11 13:35:40', '2024-03-12 05:01:34', 'cus_PiaBZZrjk18dVp', 'visa', '4242', NULL, 0),
(108, 'Jenette', 'Fowler', 'cyrahoxo@mailinator.com', 'VituKelOoUrmbtLty1hT', NULL, '$2y$10$tXUDXvbqVn7mhUvAcv0RPuDC2TKBSAafUG2jWyGOVDQYpg/OkMj1e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0}', '$2y$10$n4eyjZOoMz4/Z6dMxRKdJuKOrbDhL5uL7hSPzymrxyLkOKKKelhRu', '2024-03-12 05:03:53', NULL, 2, NULL, NULL, NULL, '2024-03-12 04:33:49', '2024-03-12 04:33:53', NULL, NULL, NULL, NULL, 0),
(109, 'dsd', 'sdsd', 'fsd@gmail.com', 'uM9Coh0r9jj2qnpxPf22', NULL, '$2y$10$KsxlZoIxNtEbg4fWauFxn.yqE3.FcTRzIWnaPyAT0Qq3jqhNgYrIu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0}', '$2y$10$KHBW5vHdoDDVoQE30WZri.SWMQDArSsvFL4qumZ1/CAsJSur.zGJy', '2024-03-12 05:05:18', NULL, 1, NULL, NULL, NULL, '2024-03-12 04:35:14', '2024-09-07 14:03:29', NULL, NULL, NULL, NULL, 0),
(110, 'sdad', 'asdasd', 'sad@gmail.com', 'GrwPI4Mrf6wV4VmMv9pV', NULL, '$2y$10$HC3dLequPucUzQwz88O4y.16z//trSsXHHm7xVabO5G1Xzp31a8ye', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0}', '$2y$10$JFzUPM5pL.G8JBMEGM2tg.vMekTC3WP7D2Y9EDE4NzboSZLIfbzRi', '2024-03-12 05:31:55', NULL, 2, NULL, NULL, NULL, '2024-03-12 04:56:52', '2024-03-12 05:01:55', NULL, NULL, NULL, NULL, 0),
(111, 'Quon', 'Marks', 'perepugus@mailinator.com', '8lk9TGMDp7zDLn4QoJNi', NULL, '$2y$10$pDF/y/n8KiUdx8WXqx1dSODFWub95Wz1.7s3ZovykYmMGpSul6l9K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"choosePlan\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0}', '$2y$10$8IPrQzhPwK8lO/ismh1iv.jwqTD8YWhINiUNteq9iqbd7LV8s4rr2', '2024-03-12 05:34:36', NULL, 2, NULL, NULL, NULL, '2024-03-12 05:04:33', '2024-03-12 05:04:36', NULL, NULL, NULL, NULL, 0),
(113, 'Malik', 'Mcconnell', 'rs9613609@gmail.com', 'e7xg3Jd6yueheYil1ylF', '2024-04-01 11:02:12', '$2y$10$WrKGY790ncZrzeYwjOX2Eu5L0aJRtC786YUtur6YKBM/cIiJ4fPNu', NULL, NULL, NULL, NULL, NULL, '+1 (222) 464-5679', 'Nihil nihil eius rat', 'Ullam do necessitati', 'Tenetur rerum sed te', 83, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a</p>', NULL, '{\"personalDetai\":1,\"contact_information\":1,\"professionalsummary\":1,\"side_employment_history\":1,\"side_education\":1,\"choosePlan\":1}', '$2y$10$mAXAASrzbxCkiMF2nZJdoOIe6uMItcK2sGCpyXV6bHUv98eoi30f.', '2024-03-13 06:23:29', NULL, 0, NULL, NULL, NULL, '2024-03-13 05:53:29', '2024-05-01 09:16:27', NULL, 'visa', '4242', NULL, 0),
(114, 'raj', 'bill', 'openinterview@gmail.com', NULL, '2024-04-03 10:30:06', '$2y$10$8llM/ImO4Kn35/yXtz2a8.fml1vmBTUe8Rx1MH/.9SsrAZUwTC6zK', NULL, NULL, NULL, NULL, NULL, '+1 (997) 859-2495', NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', NULL, NULL, NULL, 4, NULL, NULL, NULL, '2024-03-30 07:09:40', '2024-04-03 05:24:31', 'cus_Pr4RtcuvLR2Xsh', 'mastercard', '4444', NULL, 1),
(115, 'Naomi', 'Hill', 'boryc@mailinator.com', 'IzNI4cgmLvE7PdIJ77zW', NULL, '$2y$10$/eiVtIhpeRastz8EOf53P.ld8Hdo4HHZdlt2iI6XLifyOMk19srty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$E3aPanbrrvjt6mGassMp5OVyvtECH4YjwGi75yheLs.p8o41Sop0S', '2024-04-01 05:16:18', NULL, 2, NULL, NULL, NULL, '2024-04-01 04:46:17', '2024-04-01 04:46:18', NULL, NULL, NULL, NULL, 0),
(116, 'Jin', 'Hoover', 'student@yopmail.com', 'UlKiULLqtf7n6sgONdlg', NULL, '$2y$10$dpLW7URzDMQZxkhqM6ZAJ.ERZPYrfIYOueha/KdwrN2ZJMfkAiD5e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$NhmlbtFhv/lsPSKx8F3LBOjUNQlCsOX6UauEuTqzKHyreDaNq47bu', '2024-04-01 06:17:55', NULL, 2, NULL, NULL, NULL, '2024-04-01 05:16:22', '2024-04-01 05:47:55', NULL, NULL, NULL, NULL, 0),
(117, 'Addison', 'Ferrell', 'hinihix@mailinator.com', 'XiAvMBF8AWmRUraE4mkm', NULL, '$2y$10$gzImDyvPCCRlivLuKN5ryeMq3q9xczf7aTN.DE4ZxxZW8V1Ldey.G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$qAJZeXeTEYxbQyzbv6mPwem/30MnHiz9va9xZZ6Z31N/nzJDmGXbm', '2024-04-01 06:57:20', NULL, 1, NULL, NULL, NULL, '2024-04-01 06:27:20', '2024-09-07 14:02:54', NULL, NULL, NULL, NULL, 0),
(118, 'Tad', 'Nolan', 'student1@yopmail.com', 'IUnHSpwEqIro7B6cTBrez', '2024-04-16 11:42:28', '$2y$10$oLqXITM.7.5luY79X2YxwuWg/voqRzL1JmcR1raCmG0Qt5L3Bn5o.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":1,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":1}', '$2y$10$hkF0ASK8mBmunENBHvKkcOMKGbarbH2udSpVoyrxYS70SRdridZgy', '2024-04-02 11:23:23', NULL, 0, NULL, 'fRXDMs3LyzmbS0l7n0vOBPpiTK6e3MZeWfzCQIieGleCWDrxhLuT989GWahN', NULL, '2024-04-02 10:53:23', '2024-04-11 12:36:20', 'cus_PqmYnXB8sETGeZ', 'mastercard', '4444', NULL, 0),
(119, 'Athena', 'Knight', 'studentuser@yopmail.com', 'IUnHSpwEqIro7B6cTBre', '2024-04-03 04:51:22', '$2y$10$GrVUOj1IMmQXTMC4JFh4E.LHRv37mu.ZGqS5pcZkmBkqpIHTcLlay', 'https://jobgetr.daedaltech.online/uploads/_1713505683_download.jpg', NULL, NULL, NULL, NULL, '+1 (492) 677-6347', 'Adipisicing quia tem', 'Unde et qui in nesci', 'Ipsum provident Na', 67, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human&nbsp;</p>', '<p>Showcase your passion and highlight your achievements, such as special projects completed, unique skills developed, or notable experiences gained.</p>', '{\"personalDetai\":1,\"contact_information\":1,\"professionalsummary\":1,\"side_employment_history\":1,\"side_education\":1,\"choosePlan\":1}', '$2y$10$kQdkDPZnT2CyOKC.NgKf9.7RWAffr5VW3Uq.zP/3JuE/fC6waaPcy', '2024-04-15 06:52:56', NULL, 0, 'http://app.resumegpt.co/uploads/_1719315827_d2.png', 'FPed5lF6b7kd4xpObo6U6knBGlyKK2uP8vyaeUR55OkV7FoFOVexwxpldW5i', '2024-06-14 11:08:24', '2024-04-03 04:50:05', '2024-06-26 12:11:03', 'cus_Q6WIwzsqWGNdoj', 'mastercard', '4444', NULL, 7),
(120, 'studentusersss', 'studentusersss', 'studentusersss@yopmail.com', 'TXfGtYwfJgfIvFTdfQzH', '2024-04-05 05:24:07', '$2y$10$b/z.wu34w8jPFXihzTOEnOSe1BAnwjnYfzn.b.XGU6GYtZ8QUMsYG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$T8vUbC5GYgduBRCyNkgO5.Vxe/ux8y5IrCiuFfhgTBdrI9ZQNPn8O', '2024-04-05 05:53:03', NULL, 4, NULL, 'vzXT3NOpoWhOqEShNAR1gfGll8go7ZBe0zTeuS5uPkdUWVBp1Lxik4tSKgkN', NULL, '2024-04-05 05:23:03', '2024-04-05 05:35:48', 'cus_Prp3hhmgX9cnJx', NULL, NULL, NULL, 0),
(121, 'Reuben', 'Mcgowan', 'buggertttt@yopmail.com', 'dlw2ineZs0KlCKJ99TEa', '2024-04-13 07:09:54', '$2y$10$7GTVwzL6IKDMwWsmwo0uFelZIYHwmY8tA1uuTxoq4KPqdStl2B3pK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$gHfMdAOLEWK.chR4H3vM7e5ozb/q/sOX4CfMhv.oenohePhonlEDO', '2024-04-13 07:39:32', NULL, 4, NULL, NULL, NULL, '2024-04-13 07:04:40', '2024-04-13 07:10:31', 'cus_PuqPkoGSJzke7B', 'mastercard', '4444', NULL, 0),
(122, 'Xandra', 'Diaz', 'studentnewuser@yopmail.com', 'dES3II37atBEWVIIWPiJ', '2024-04-15 06:41:21', '$2y$10$siHXG3yjGmf/lAlsmd4TMetFopTfB6na0f5X0oO6KR7Rixs/SEaSO', NULL, NULL, NULL, NULL, NULL, '+1 (484) 884-9205', 'Aperiam enim maxime', 'Debitis voluptatibus', 'Totam magna exercita', 83, '<p>sdfgsdfg</p>', NULL, '{\"personalDetai\":1,\"contact_information\":1,\"professionalsummary\":1,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":1}', '$2y$10$Fe4gZyq1GCH3pWWfuFtkXO.OecvvAo5dz8mC3wOIoEX0IUCn7jY3u', '2024-04-15 07:10:57', NULL, 4, 'https://jobgetr.daedaltech.online/uploads/_1714029902_download.png', 'qWOX742m55QXfWuWh87EHJNBP3gpa7oEWnV5uh2byPpTFMHBQKHQFXdHpDbZ', '2024-04-25 07:25:29', '2024-04-15 06:40:57', '2024-05-29 05:49:20', 'cus_Q2gkUpFRPCFiNK', 'mastercard', '4444', NULL, 1),
(134, 'Griffin', 'Gallagher', 'mulicicef@mailinator.com', 'ceLcdhdX1wlbX7OZajns', NULL, '$2y$10$K4PddfM.i5cI0pipSapjSOhT2OBZJPkoy6nycEW55DyUMMQB7N1UK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$Mdy51ZHGlkewS81xqp0LNuDwhU4YHn7mKKaRIq6QFqAquLNhovL5u', '2024-04-15 10:14:05', NULL, 2, NULL, NULL, NULL, '2024-04-15 09:44:05', '2024-04-15 09:44:05', NULL, NULL, NULL, NULL, 0),
(135, 'deepak', 'deepak', 'deepak@gmail.com', 'iQpx6qUKnWXUPkE314SF', NULL, '$2y$10$xk6Ri016ulokU9vewDfif.nb0nYTGLoC0mnCuXFg8epXkBK7yQTY2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$ZyFHjg0dHNtdZ9y1b744Wul0RQxaNv4uWKYohG3val1vyQKCVGyyy', '2024-04-16 06:18:04', NULL, 4, NULL, NULL, NULL, '2024-04-16 05:48:04', '2024-04-16 05:48:04', NULL, NULL, NULL, NULL, 0),
(136, 'Xavier', 'c', 'cageciqawo@mailinator.com', 'MhEIOlKa4G67WnH4XjiD', NULL, '$2y$10$bXi62IRJHsHdVln9Kp1RJ.X6r1eWD46LTSKSMFTSpjHSgNPUK8i0u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$NTL2MqpvlgO0ykhiw3TMte5fJ8xOxBrXjxyjI95sJ8O.zyIitezJu', '2024-04-16 06:34:45', NULL, 4, NULL, NULL, NULL, '2024-04-16 06:04:45', '2024-04-16 06:04:45', NULL, NULL, NULL, NULL, 0),
(138, 'Angelica', 'Kent', 'daihaaa@yopmail.com', 'lEMDpKOncTaba5KllPMt', NULL, '$2y$10$7HFwCVTBZvBT0Zn8wv02IO5IUQEgWVhKu35bPOl50/mgRwG4RbKMi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$cctTOPh2FUvNt1g86gwgrOUhflrTxXdNk15vDUNoJBt4w0JLkpoiO', '2024-04-19 10:40:02', NULL, 4, NULL, NULL, NULL, '2024-04-19 09:58:38', '2024-09-02 11:11:56', 'cus_Qm6NXi6HelcUnA', NULL, NULL, NULL, 0),
(139, 'Nita', 'Hendricks', 'newtestinghub@yopmail.com', 'kliU9iksxEvljpcJGNZP', '2024-04-23 08:32:26', '$2y$10$7lGV4w2.YhIwqHNKeB7eF.uEb4Y735FOjTflXRNgIv4hQCT0ARCbe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$xhL2A8oF3SDAsaP2T7Q0aOzcaAgE0dCraiTGkIF6Jgch5yYvCBVQe', '2024-04-23 09:02:02', NULL, 4, NULL, NULL, NULL, '2024-04-23 08:32:02', '2024-04-23 08:45:50', 'cus_Pyc0rPAF2iS4kk', 'mastercard', '4444', NULL, 1),
(140, 'Gareth user', 'Schultz', 'newtesting@yopmail.com', 'oj738Q0aM1RGOdird59F', '2024-04-23 09:40:46', '$2y$10$1az2YV5HcXwB0O8ZWiWjqeovi6Qg7aMHcyV4TD2kBvF6N0cjXPCca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$0bFB11UoLoHgo9NLiXAZfuCP1J5wo7290EUJ1e3GMhjmreyGwz9/O', '2024-04-23 10:10:26', NULL, 4, NULL, NULL, NULL, '2024-04-23 09:40:26', '2024-04-23 09:41:56', 'cus_Pyd7Fjsh7CIgui', 'mastercard', '4444', NULL, 1),
(141, 'Eric user', 'Montoya', 'testinghub@yopmail.com', 'VspyuphV7QNZHQcsCGuL', '2024-04-23 09:46:16', '$2y$10$JzSBPJ2WsIHqbQ65tJrGhuW6gVdAXHv3j629pA4NmxdhfumE2efny', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$MN3jsr8AdZ8h4/jfdro7Ze/xicYQCsaHnF.0kQfs2gt9Kr0lu0iG2', '2024-04-23 10:15:59', NULL, 4, NULL, 'NBhEbDr1g3zPqy4r6o5FNHvaVlhz9dUmnofcuXCCxybHFjCHOTtF3iykqXsS', NULL, '2024-04-23 09:45:59', '2024-04-23 09:48:22', 'cus_PydCgXk7VBfPab', 'mastercard', '4444', NULL, 0),
(142, 'Preston user', 'Dillard user', 'testinghub1@yopmail.com', '8PWnQVBCN1j4jvv4JWHJ', '2024-04-23 09:54:54', '$2y$10$E2d0i7xFyk8tML.VAFZ0je3M3NP9iuQDttXIFhNGQpCp11.2tjxPW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$Mr4S8X/p53CWqfu6c/har.WNCkdDjuOXZNQZZRv3x9Q2iwHB5sq6i', '2024-04-23 10:24:38', NULL, 4, NULL, NULL, NULL, '2024-04-23 09:54:38', '2024-04-23 09:56:49', 'cus_PydLEzHbN2488w', 'mastercard', '4444', NULL, 0),
(143, 'Otto user', 'Duran user', 'testinghub0@yopmail.com', 'uNSrdQXBLx7GUoKoIsOx', '2024-04-23 09:59:13', '$2y$10$D/1AOOGzwUJ4MtKCaOQgF.MPpqs/8JV.13TjN65TNrs2duKqfjv2S', 'https://jobgetr.daedaltech.online/OpenInterview/public/uploads/1713866684_image.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$ZNjrfYuZoQWw9iriHvgtyeH7N/HzfxPSV2N4LZnRc/UgTG626SnTW', '2024-04-23 10:28:55', NULL, 4, NULL, 'hxDolfukOx5LZnsFntAMEh2oFmQIz7c5ckZ', NULL, '2024-04-23 09:58:55', '2024-04-23 10:22:18', 'cus_PydPNbn8nC3K5l', 'mastercard', '4444', NULL, 0),
(144, 'Jordan user', 'Mcmillan user', 'testinghub00@yopmail.com', '5f1aNYG2PflqyOTkkMII', '2024-04-23 10:11:21', '$2y$10$M2L01lS5/vBCDitUGTVU/eAqQs8e8tGTqg6OwWcwqJ5MhaYJJ3W/e', 'https://jobgetr.daedaltech.online/OpenInterview/public/uploads/1713867104_image.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$0634o/9pczSWLMGXQeQzXOhUjNXfBsAdUF2FF3roe8oBM7uVJvjQu', '2024-04-23 10:41:05', NULL, 4, NULL, NULL, NULL, '2024-04-23 10:11:05', '2024-04-23 10:14:01', 'cus_PydbfH654NTk5w', 'mastercard', '4444', NULL, 0),
(145, 'Lilah  Fist Name', 'Best  Lilah Last Name', 'testinghub000@yopmail.com', 'gB4yAixAYE5T5e3pmKyV', NULL, '$2y$10$2Q3SVUwDNpxUGi/XDf7DZOzEPxSFfhMv91LNSUAiiKYTvco6yobne', 'https://jobgetr.daedaltech.online/OpenInterview/public/uploads/1713867376_image.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$j8.H6il.lzdyPsi0R.5LQOmv4t897auYmFp63FmG2ClWCIpZPP.9K', '2024-04-23 10:45:31', NULL, 4, NULL, 'YJAKGgnLTZARTgOzdUDOjcvkHNBdbJ0Brgt', NULL, '2024-04-23 10:15:31', '2024-04-23 10:22:12', 'cus_PydgGhHCYGzW4Q', 'mastercard', '4444', NULL, 0),
(146, 'Ava', 'Soto', 'testinghub0000@yopmail.com', 'BdRUF3z1TAbJEvSSEBI4', NULL, '$2y$10$2vLpj2pXV.iKnmgcp.vAT.OrxKq25p0dtayniXCkI7bRBYJTvoJuG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$Xa3Ahn7goif8.e9.uDA/M.deRYAmsEsdWkhzDOJ7MutuA1OZjqgaG', '2024-04-24 12:05:49', NULL, 0, 'https://jobgetr.daedaltech.online/uploads/_1713959046_download.png', NULL, NULL, '2024-04-24 11:35:49', '2024-04-24 11:44:06', NULL, NULL, NULL, NULL, 0),
(147, 'Kaye', 'Ray', 'testingaa@yopmail.com', 'DA5osfQWjEuFZeUFD72O', '2024-04-25 08:56:18', '$2y$10$rjhssqeHfcIg2jUNt3ac0e9X/7bnmiLOKRR5qQ5d51plf4E0UFU5m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":1}', '$2y$10$Y.Lm6bhxUplprkyw6QlWeO.CLy6X17yjnMJ22RLLCANKF.2hNWGey', '2024-04-25 09:26:03', NULL, 0, 'https://jobgetr.daedaltech.online/uploads/_1714035414_logo (1).jpg', NULL, '2024-04-25 08:57:09', '2024-04-25 08:56:03', '2024-04-25 08:57:41', 'cus_PzMrr3JwxbRGa4', 'mastercard', '4444', NULL, 0),
(148, 'Wesley', 'Sexton', 'testingaaaaaa@yopmail.com', 'xgz1UKlvpOPLo6wV832h', '2024-04-29 12:36:42', '$2y$10$F624kzt/joEdvoaEIeb6ZOnFh/tbBzexCuO7yMpsWuSUGKk/cEl8G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":1}', '$2y$10$WyMqC7BCVWaltP2SqglZhOIRIeGUNmxadT4MSM2y/GZYneMQ4e.MO', '2024-04-29 13:06:18', NULL, 0, NULL, 'PXha45WplaMkPzN4UnQ7XKMB2CAKajwuoitBmJ3VOVculiCjpix2ZhX2k4GI', NULL, '2024-04-29 12:36:18', '2024-04-29 13:15:16', 'cus_Q0vNKOe4r6pdqI', 'mastercard', '4444', NULL, 16),
(149, 'ashok', 'kumar', 'ashokkumar5620@gmail.com', 'l6gbnFopiwlijvaaORXG', '2024-04-29 12:48:33', '$2y$10$ZEcQO4EN5nyPZ5tiy6318exg4akBtKg.Jk1cFU16GYDOd/gBy9nOK', 'https://jobgetr.daedaltech.online/uploads/_1714555435_card.png', NULL, NULL, 'dsfsf34433434', '1994-08-30', '8769272659', 'india', 'jaipur', 'jaipur', 303702, '<p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human</p>', NULL, '{\"personalDetai\":1,\"contact_information\":1,\"professionalsummary\":1,\"side_employment_history\":1,\"side_education\":1,\"choosePlan\":1}', '$2y$10$LgEgQJYu.FK/0FRV2njkjuMJjuGGZPHZgCdt5KFAk1PgK.cZCK02W', '2024-04-29 13:18:06', NULL, 0, NULL, NULL, NULL, '2024-04-29 12:48:06', '2024-05-01 09:25:32', 'cus_Q0vUegsHEOOP4C', 'visa', '4242', NULL, 0),
(150, 'Brian', 'Oneal', 'jobtesting@yopmail.com', 'nGud4PpGcRb83F3lpjuX', '2024-05-06 01:23:14', '$2y$10$Bf9thtblVi.xWnS4UK.h5ecPOAcJ0S4JMSzeyePJ9pAUkM0nD2TyG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":1}', '$2y$10$IS6CyFrTR71FV1idz9z5ze/BuZSjQqCfLEE62fCBtMfilTO3.JQ96', '2024-05-06 01:52:45', NULL, 4, 'https://jobgetr.daedaltech.online/uploads/_1714959688_1714958950_file.png', NULL, '2024-05-06 01:41:49', '2024-05-06 01:22:45', '2024-05-06 01:42:27', 'cus_Q3N20j9zEqIu09', 'mastercard', '4444', NULL, 5),
(151, 'Russian', 'Odom', 'testinghubmost@yopmail.com', '9WaYi5icMEmnTk7HR1Oj', '2024-05-15 07:17:44', '$2y$10$LmGWvcrpAPJNNR6xQZ489eQHc3nB3qsiwog3OFjgzYp/lI593K3z6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":1}', '$2y$10$HXiffPPfigsPmBBMYhv6kONVcud6zbJE1ud/8hQqcWn7NzdElK3uy', '2024-05-15 07:47:22', NULL, 0, NULL, 'mrAoCI9dsbTJ2wrzsfUeDWRYvlietq97G8m8wBm9Eqla5ezTbhcRV3gubAxj', NULL, '2024-05-15 07:17:21', '2024-05-15 09:05:15', 'cus_Q6rOkBQQnsAJir', 'mastercard', '4444', NULL, 10),
(152, 'Tamara', 'Ross', 'testinghhud@yopmail.com', 'bYgIczBsYLB9h7mGno5s', '2024-05-21 09:43:27', '$2y$10$OaecnbsZdWo/kWKQbEU56uEPkYUy5N7C58FSOytmioo5mmQLKLEkW', 'https://jobgetr.daedaltech.online/OpenInterview/public/uploads/1716289965_image.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$4uS1WY5EPUMYSirawTZM5e6m9epG9E3QCyoixEstRXcv5aSgUBVLW', '2024-05-21 10:13:11', NULL, 4, NULL, '1RRM1Rwefp9rlUr1ZmwyL4cBiEYVAk6CrYZnHHz9u1mot00CUmC8gKErgHQn', NULL, '2024-05-21 09:43:11', '2024-05-21 11:12:45', 'cus_Q97TvaxALueZay', NULL, NULL, NULL, 0),
(153, 'youp', 'tesying', 'deepakyo@yopmail.com', 'qnByATuwc20pkjtuzTan', '2024-06-14 08:34:13', '$2y$10$N9CazGgMmFfEpArj8n5mLuRx8FDoGAguGwyl1xRbAGA5ieCTPT3i2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$gnv5.UAwAjq0iIid9B0JdOHlTmt0ciuY/jiYnlUeu5DzXEkVmpuqa', '2024-06-14 09:03:44', NULL, 4, NULL, NULL, NULL, '2024-06-14 08:33:44', '2024-06-14 10:08:11', 'cus_QI7HdjyA0uECEA', NULL, NULL, NULL, 5),
(154, 'Amber', 'England', 'resume_testing_1@yopmail.com', 'jK9HQSpoNxeevF3aUBla', NULL, '$2y$10$ApCu3WZBNpqap5RCt5hPZOcnRZcvkcVB9K3xF05lWf6heV58ynXX6', 'uploads/_1719381394_about2.png', NULL, NULL, 'Quia consequatur ul', '2003-11-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-06-26 05:56:34', '2024-09-07 14:03:02', NULL, NULL, NULL, NULL, 0),
(155, 'Garrett', 'Stokes', 'resume_testing_2@yopmail.com', 'HKbAj4wTYpbiSR0XsWjE', NULL, '$2y$10$kwzzruUgKQvprBY1faKIzOkgYdnUCUmB7Mzlh6dg21H/AXg1VeQSy', NULL, NULL, NULL, 'Ipsa ut quis deseru', '2018-09-09', '+1 (416) 726-5315', 'Officia perspiciatis', 'Velit illo doloribus', 'Ipsum ad provident', 1, '<p>Professional Summary</p>\r\n\r\n<p>Include your professional title, years of experience, and your most impressive achievements. Each achievement should be measurable and expressed in numbers.</p>', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-06-26 05:57:29', '2024-06-26 05:58:23', NULL, NULL, NULL, NULL, 0),
(156, 'testing', '1', 'restume_testing_1@yopmail.com', 'aLKtj3UfKvKHUKRu7YUA', '2024-07-04 07:05:28', '$2y$10$vJ.2Gvk2mAtoRSjGdx1tKuYnLFGqar2GCgYS0j7BGNwFp8bSN9P5u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":1}', '$2y$10$tdHzEU0odeFBPqkp.UwIxOzQOP8BywiPNFZ32OHXZ8/njKOXmLMU.', '2024-07-04 07:35:12', NULL, 0, NULL, NULL, NULL, '2024-07-04 07:05:12', '2024-07-04 07:08:11', 'cus_QPYtAu3Tuay4V5', 'mastercard', '4444', NULL, 0),
(157, 'testing', '1', 'openinterview_testing_1@yopmail.com', 'yV88KUEhg4kYNhZ9u2dv', '2024-07-04 07:14:10', '$2y$10$WhN4eRY3glwgB2jxhRCMvuF6HiWb5aeQgspp.IIPKHMMq/sOKdgz.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$I6ynW.m0Ip8Oh02Vqhr.vuhER2rQrMURET0DH5sPDcrzkO9pMDVmy', '2024-07-04 07:43:37', NULL, 4, NULL, NULL, NULL, '2024-07-04 07:13:37', '2024-07-04 07:14:10', NULL, NULL, NULL, NULL, 0),
(158, 'testing', '2', 'openinterview_testing_2@yopmail.com', 'zfKQ8r9YdmX5jRLo4mxp', NULL, '$2y$10$7yfhRUw8t38AzkstJ2edHOG6o7BIcWrNoDZOGXDdSOoyI2kbjgxZa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$6ppYEf/e02ApIrriDhOFyeGHcm3.VOUeNbSdvAviJfRPEfjUA0xdW', '2024-07-05 05:51:40', NULL, 4, NULL, NULL, NULL, '2024-07-04 07:37:31', '2024-07-05 05:21:40', NULL, NULL, NULL, NULL, 0),
(159, 'Tatiana', 'Case', 'openinterview_testing_585@yopmail.com', 'yWUQsluVHl7YYUubXiYW', NULL, '$2y$10$RJ7XHGa1St7PPHmnNR4tZuy0w6s1Y8zUtsBghfxQk2B5t/Vj3napO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$nSL2OIZW42BgnrngAOdXH.OAWFhcR7k1S0jNxIBzB9TyIWdl/DmEm', '2024-07-05 05:53:45', NULL, 4, NULL, NULL, NULL, '2024-07-05 05:23:45', '2024-07-05 05:23:45', NULL, NULL, NULL, NULL, 0),
(160, 'Tatiana', 'Case', 'deepaklappy0@gmail.com', 'FsBgepTpzs7qWbyeJZAg', NULL, '$2y$10$dwjn//f/PNZxKHL128XOTOzECoUbcFM4GYt9L2PXtVIrM3UA5o/4a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$..fDFFYkFMboJ4jxMj5St.InO9mRqenuXlgx2DfwQEeSkKjQ9IAJi', '2024-07-05 06:00:42', NULL, 4, NULL, NULL, NULL, '2024-07-05 05:24:19', '2024-07-05 05:30:42', NULL, NULL, NULL, NULL, 0),
(161, 'Anne', 'Sharp', 'resume_testing_585@yopmail.com', 'WDVXwtgFcKBeJs3enx2Y', NULL, '$2y$10$A/blcHOeTco1/U7WcN94Xu8bSp2.j.Fs12vI3hCCkmAovnrcnScjy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$wtF/UFOp44ZoVaFmMbghBuAerULZ4hI5BDzVQwpdN4nzS/goSvuLu', '2024-07-05 12:32:14', NULL, 2, NULL, NULL, NULL, '2024-07-05 08:47:38', '2024-07-05 12:02:14', NULL, NULL, NULL, NULL, 0),
(162, 'Cameran', 'Sutton', 'resume_testing_5@yopmail.com', 'sWzpF6v3gty650jYWSzm', '2024-07-06 03:41:25', '$2y$10$yaKJNFThIbfqFYrufuGsy.UDIFqJAo/rw5gODGU7cFazI3FCyugqW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$8xMev7NaqyzRrthsLrJ3.eoZEs1FjCxCR0Dtz0rP0MCkFTUs6qs0.', '2024-07-06 04:11:12', NULL, 0, NULL, NULL, NULL, '2024-07-06 02:33:25', '2024-07-06 03:41:25', NULL, NULL, NULL, NULL, 0),
(163, 'Michael', 'West', 'resume_testing_55@yopmail.com', 'YtRZ0jNjZW5jIkIUqGJR', NULL, '$2y$10$EAPRBH7Ruri8ZxO0Z9IO0OEhpHtnasYU5lZiWZqtzFDULNNlIhZFe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$H2qB.D7iKwXGoYk4jlbSUOHPF4T1mTUdMlffP6vgtdvEn04ADJJ0S', '2024-07-06 04:53:20', NULL, 2, 'https://app.resumegpt.co/uploads/_1720240714_mail.PNG', NULL, '2024-07-06 04:38:45', '2024-07-06 03:43:11', '2024-07-06 04:38:45', NULL, NULL, NULL, NULL, 0),
(164, 'Robin', 'Castro', 'open_test_1@yopmail.com', 'qceanHs9KHU24tfDJBXq', '2024-07-06 05:22:46', '$2y$10$TJKbKhyITTm4/E0eBiftnupAFKGFcvFnXkFdTSOZcylK7Ln5HPN72', 'https://app.openinterview.me/uploads/1720248751_image.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$HUvfgd8N47ShvnY7pRWpUO9QBiiDhU/ITOF8MQJ5hRNCNsEr7OlbS', '2024-07-06 05:52:27', NULL, 4, NULL, NULL, NULL, '2024-07-06 05:18:58', '2024-07-06 06:52:31', 'cus_QQJ0cz832RNsEw', NULL, NULL, NULL, 5),
(165, 'rasool', 'm', 'rasoolm@aifarm.llc', 'KAO9FBa9ccBEqBPkoEKK', NULL, '$2y$10$ZuZURuHG3IfwTv7aZwLqIe0DSX6hJ8aFiTzqe1Lg11EQAS5p79KG.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$L.cacmToGRomRCeIBvSFBuaaZMWE1M2afQstXpLl.gmVLUEMDaDHO', '2024-09-06 00:32:15', NULL, 4, NULL, NULL, NULL, '2024-09-05 23:56:57', '2024-09-06 00:02:15', NULL, NULL, NULL, NULL, 0),
(166, 'Testing', '323222', 'testing_0522222@yopmail.com', 'q6a7qwKLvhlwe921rw8P', '2024-09-06 04:23:43', '$2y$10$UYfdD6LwXfYGjomGYQIz.ealWr9j4yD8vkX0e3PuZbcrFJnbPlWO.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$lCsOInvZeZy7Yt.sXS0kEentWYZHt1XRxZLFgWhYodQsjWOamAAUu', '2024-09-06 04:51:56', NULL, 4, NULL, NULL, NULL, '2024-09-06 04:21:56', '2024-09-06 04:23:43', NULL, NULL, NULL, NULL, 0),
(167, 'Rasool', 'M', 'info1@jobgetr.com', 'IEExTlevZnXGF7zoOyIT', '2024-09-06 21:21:35', '$2y$10$.BpnOivBDNI5RRJFaS.rie/uMaAx0spiuUr0RIOtoDP01V1d07XAO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$SEQKJ/TvtigXaZv8C5uk3eBHot2AQd5DJIh.Q2/c/c8qgcyzusxze', '2024-09-06 21:51:06', NULL, 1, NULL, NULL, NULL, '2024-09-06 21:21:06', '2024-10-03 15:08:48', 'cus_Qnl8ffSIb0eJ02', NULL, NULL, NULL, 0),
(168, 'user', 'test', 'info2@jobgetr.ai', 'evC317mwU67oX1MwauNc', NULL, '$2y$10$lEIfuFlZDk4hrO9Y8n.5jODJFY7Wpi53qnzjawgpWAZpKXQ4/UxLK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'j7CB1ue4eiNFtsmr3VGn0z1QPmdBMorJF03FkRCumzWFAIGjt3otblAYhysA', NULL, '2024-09-07 14:05:01', '2024-10-03 14:58:09', NULL, NULL, NULL, NULL, 0),
(169, 'Rasool', 'Muttalib', 'info@jobgetr.ai', 'zLwHdfh5gK5VoLuO3bR0', '2024-10-03 15:09:26', '$2y$10$JaqSw2EmSYkrlON8iPd/CujedrjqCU7G1Gc7XkCUJZ1ZzRksG1/f2', NULL, NULL, NULL, NULL, NULL, '4046977444', 'US', 'Snellville', NULL, 30039, NULL, NULL, NULL, '$2y$10$DqanSlyvXhsDx9KAeq9T3.eAdEY00rFre7ieuTK6dX9Muwh0yG9FO', '2024-10-03 15:39:08', NULL, 1, NULL, NULL, NULL, '2024-10-03 14:57:39', '2024-10-03 15:50:09', 'cus_QxmDZvCsRcx13P', NULL, NULL, NULL, 1),
(170, 'john', 'doe', 'support@jobgetr.ai', 'SzHW8V5OdSAsHiarXViz', '2024-10-03 15:51:34', '$2y$10$/qBch1JVwyGbmHczVSI2..lqmGkRx/h6YjwpqbVJg1AytX60aEh5W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$cISnLDoc.DOotZSwU22wbe03DRZ2hnKAs3hxcyG2ueKAt2pOIl4/O', '2024-10-03 16:21:12', NULL, 4, NULL, NULL, NULL, '2024-10-03 15:51:12', '2024-10-03 15:52:29', 'cus_QxmtGXPJrBXrFA', NULL, NULL, NULL, 10),
(171, 'test', 'test', 'register1@jobgetr.ai', 'eVcI7XZ3Jv9Vv4bugTbI', '2024-10-03 16:02:15', '$2y$10$4yC.K5W/zTrfCJvxVqj3veQS2dQw3A04uPSLBvJpQfI9sl8gkVFnG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$AFrHsG6RjhEGKC9jO6DGI.LO0R3gAVPMeFaNmQIXSSbznMf7aFaiu', '2024-10-03 16:31:22', NULL, 4, NULL, NULL, NULL, '2024-10-03 16:01:22', '2024-10-04 00:53:01', 'cus_Qxn5J97Xbq2nb2', NULL, NULL, NULL, 5),
(172, 'Julian', 'Mims', 'jmims1741@gmail.com', 'ZXPNoorQ23TcLh6J1W0I', '2024-10-04 00:46:13', '$2y$10$94T5V02JLhIiicwtJJRf3uOi9.hj6JoNLs2CQBZWqFEXPVJd9cRtS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$CDSDaGYIifv1gJ3sqxvdluvYn212nzL9/TicKrAeblipulBTe9x/G', '2024-10-04 01:15:44', NULL, 4, NULL, 'VbbzWkUHwXmTocwe2K0wY1cptN7UEZgGSz6fjA25Sdtrw5XReVwHQ8blOVfN', NULL, '2024-10-04 00:45:44', '2024-10-04 01:35:45', 'cus_QxvWF8X65EEiFE', NULL, NULL, NULL, 5),
(173, 'Deepak', 'testing', 'openunterview@yopmail.com', 'n8DjgbX0GfoPaEHzM1fR', '2024-10-04 00:46:13', '$2y$10$H2Py40e..FhyK95vlBI7RO0Xsen.e.oFMdyLT3PS1GHKxYzL8de1K', NULL, NULL, NULL, NULL, '2024-10-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-10-04 06:44:32', '2024-10-04 06:46:22', NULL, NULL, NULL, NULL, 0),
(174, 'deepak', 'testing', 'testingdeepak@gmail.com', 'YGaVj7zHW6aG6k7wpFbJ', '2024-10-04 07:14:14', '$2y$10$l5kbFqTeBlNxXTEZopRLMutO8R0DP1rM.yf8Nc5kPmisX1WSrIYMS', 'https://app.resumegpt.co/uploads/_1728026687_WhatsApp Image 2024-07-21 at 11.21.04 AM.jpeg', NULL, NULL, 'asdf', '2020-01-04', '+1 (457) 777-6495', 'Neque labore in arch', 'Sit omnis quia labo', 'Atque et quos evenie', 50, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-10-04 07:14:14', '2024-10-04 07:24:47', NULL, NULL, NULL, NULL, 0),
(177, 'testing', 'user', 'tesing_openinterivew_001@yopmail.com', 'YJukwvxVf2TKV4EswKql', '2024-10-04 09:01:14', '$2y$10$lDNlJZg3WY8/gk1KJw7IfOB1K4TuY2bQp4ecFzASzqfj9s.R2keR.', 'https://app.resumegpt.co/uploads/_1728032971_WhatsApp Image 2024-07-21 at 11.21.04 AM.jpeg', NULL, NULL, NULL, '2016-01-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-10-04 09:01:14', '2024-10-04 09:09:31', NULL, NULL, NULL, NULL, 0),
(178, 'test', 'test', 'test12@jobgetr.ai', 'KBPHUTbK4KteLt9qjAtn', '2024-10-04 23:14:29', '$2y$10$pqONkBbaD220TBev4QRAi.GytnJwSfasGaqPu.NdiKrFaTJBZr7bi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-10-04 23:14:29', '2024-10-04 23:16:10', NULL, NULL, NULL, NULL, 0),
(179, 'Jahir', 'Cameron', 'jahircam00@gmail.com', 'RPx4sHLw0UhkmfUriwZB', '2024-10-15 02:34:17', '$2y$10$Wjrgmhiri0ISPLZ56tXxzeIzehlo6scS91knv21yyS0xjkudzeL/i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"personalDetai\":0,\"contact_information\":0,\"professionalsummary\":0,\"side_employment_history\":0,\"side_education\":0,\"choosePlan\":0}', '$2y$10$E0RNtsydO4Ygn/O20NeoN.nta2VlwRwedZ2il9FGYZ/nW3Obu03HK', '2024-10-15 03:03:30', NULL, 4, NULL, NULL, NULL, '2024-10-15 02:33:30', '2024-10-15 02:34:17', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_questions`
--

CREATE TABLE `user_questions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `questions` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_questions`
--

INSERT INTO `user_questions` (`id`, `user_id`, `questions`, `created_at`, `updated_at`) VALUES
(1, 119, 'Q 1', '2024-04-17 13:22:34', '2024-04-17 13:22:34'),
(2, 139, 'where are you form new ?', '2024-04-23 08:33:42', '2024-04-23 08:33:42'),
(3, 140, 'testing question 1', '2024-04-23 09:42:39', '2024-04-23 09:42:39'),
(4, 140, 'testing question 1', '2024-04-23 09:42:39', '2024-04-23 09:42:39'),
(5, 140, 'testing q1', '2024-04-23 09:42:46', '2024-04-23 09:42:46'),
(6, 140, 'asdfasdf', '2024-04-23 09:44:25', '2024-04-23 09:44:25'),
(7, 141, 'how are you ?', '2024-04-23 09:47:26', '2024-04-23 09:47:26'),
(8, 142, 'testing 1', '2024-04-23 09:56:07', '2024-04-23 09:56:07'),
(9, 143, 'where are you form deepak ?', '2024-04-23 10:00:20', '2024-04-23 10:00:20'),
(10, 144, 'where are you form deepak ?', '2024-04-23 10:12:33', '2024-04-23 10:12:33'),
(11, 145, 'where are you form deepak ?', '2024-04-23 10:17:10', '2024-04-23 10:17:10'),
(12, 119, 'TitleTitle', '2024-05-01 04:56:02', '2024-05-01 04:56:02'),
(13, 122, 'testing package ?', '2024-05-04 04:50:02', '2024-05-04 04:50:02'),
(14, 150, 'where are you form deepak ?', '2024-05-06 01:25:46', '2024-05-06 01:25:46'),
(15, 119, 'testing and adding new question', '2024-05-21 06:32:58', '2024-05-21 06:32:58'),
(16, 152, 'where are you form deepak ?', '2024-05-21 10:45:58', '2024-05-21 10:45:58'),
(17, 122, 'where are you form user ?', '2024-05-24 06:10:59', '2024-05-24 06:10:59'),
(18, 122, 'where   are   you   form   deepak   ?', '2024-05-24 06:13:18', '2024-05-24 06:13:18'),
(19, 122, 'where are you form hny ?', '2024-05-28 11:13:06', '2024-05-28 11:13:06'),
(20, 2, 'what about this?', '2024-06-11 02:17:02', '2024-06-11 02:17:02'),
(21, 2, 'why did he do it like this?', '2024-06-11 02:17:30', '2024-06-11 02:17:30'),
(22, 2, 'tell me why', '2024-06-30 01:46:14', '2024-06-30 01:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_resumes`
--

CREATE TABLE `user_resumes` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_resume_templates`
--

CREATE TABLE `user_resume_templates` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `template_id` int NOT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `font_family` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_resume_templates`
--

INSERT INTO `user_resume_templates` (`id`, `user_id`, `template_id`, `color_code`, `font_family`, `layout`, `line_height`, `created_at`, `updated_at`) VALUES
(1, 5, 1, NULL, NULL, NULL, NULL, '2024-01-24 01:23:39', '2024-02-01 08:51:44'),
(2, 2, 3, NULL, NULL, NULL, NULL, '2024-01-29 02:39:41', '2024-04-28 20:31:55'),
(3, 4, 6, 'rgb(33, 211, 30)', 'system-ui', NULL, 'Loose', '2024-01-30 10:32:50', '2024-01-30 10:32:50'),
(4, 3, 4, NULL, NULL, NULL, NULL, '2024-01-30 11:55:52', '2024-02-09 13:52:27'),
(5, 6, 1, 'rgb(6, 182, 212)', 'monospace', NULL, 'Loose', '2024-01-31 09:36:14', '2024-01-31 09:46:35'),
(6, 9, 1, NULL, NULL, NULL, NULL, '2024-01-31 11:17:57', '2024-01-31 11:38:57'),
(7, 10, 1, 'rgb(6, 182, 212)', 'monospace', NULL, 'Loose', '2024-01-31 11:55:07', '2024-01-31 11:56:26'),
(8, 11, 1, NULL, NULL, NULL, NULL, '2024-01-31 12:22:46', '2024-01-31 12:22:46'),
(9, 12, 1, NULL, NULL, NULL, NULL, '2024-01-31 12:25:58', '2024-01-31 12:25:58'),
(10, 13, 1, 'rgb(6, 182, 212)', 'cursive', NULL, 'Dense', '2024-02-01 06:28:40', '2024-02-01 06:32:26'),
(11, 14, 1, NULL, NULL, NULL, NULL, '2024-02-01 07:11:02', '2024-02-01 07:11:02'),
(12, 15, 1, NULL, NULL, NULL, NULL, '2024-02-01 07:12:10', '2024-02-01 07:36:46'),
(14, 16, 1, NULL, NULL, NULL, NULL, '2024-02-01 07:39:53', '2024-02-01 07:48:42'),
(15, 17, 1, NULL, NULL, NULL, NULL, '2024-02-01 07:49:03', '2024-02-01 07:49:22'),
(16, 41, 4, 'rgb(13, 148, 136)', 'cursive', NULL, 'Dense', '2024-02-01 08:55:23', '2024-03-01 04:46:02'),
(17, 18, 1, 'rgb(245, 158, 11)', 'monospace', NULL, 'Dense', '2024-02-01 09:16:16', '2024-02-01 09:16:16'),
(18, 20, 1, NULL, NULL, NULL, NULL, '2024-02-01 10:32:42', '2024-02-01 10:32:42'),
(19, 22, 2, 'rgb(8, 145, 178)', 'monospace', NULL, 'Dense', '2024-02-03 05:24:21', '2024-02-03 05:24:21'),
(20, 23, 1, 'rgb(225, 29, 72)', 'monospace', NULL, NULL, '2024-02-04 08:54:54', '2024-02-04 08:54:54'),
(21, 27, 1, 'rgb(225, 29, 72)', 'cursive', NULL, 'Loose', '2024-02-09 08:27:20', '2024-02-09 09:01:26'),
(22, 28, 2, 'rgb(6, 182, 212)', 'cursive', NULL, 'Loose', '2024-02-09 09:11:06', '2024-02-09 09:11:06'),
(23, 30, 1, 'rgb(6, 182, 212)', 'cursive', NULL, 'Loose', '2024-02-09 09:52:38', '2024-02-09 09:52:38'),
(24, 29, 1, 'rgb(33, 211, 30)', 'cursive', NULL, 'Loose', '2024-02-09 10:45:54', '2024-02-09 10:46:11'),
(25, 31, 4, NULL, NULL, NULL, NULL, '2024-02-09 12:59:50', '2024-02-09 13:26:03'),
(26, 43, 1, NULL, NULL, NULL, NULL, '2024-02-13 04:43:48', '2024-02-13 04:43:48'),
(27, 44, 1, NULL, NULL, NULL, NULL, '2024-02-13 04:44:34', '2024-02-13 04:44:34'),
(28, 45, 1, 'rgb(2, 132, 199)', 'cursive', NULL, 'Loose', '2024-02-13 05:36:48', '2024-02-13 06:51:12'),
(29, 46, 1, NULL, NULL, NULL, NULL, '2024-02-13 06:01:53', '2024-02-13 06:01:53'),
(30, 47, 1, 'rgb(23, 23, 23)', 'cursive', NULL, 'Loose', '2024-02-13 06:29:08', '2024-02-13 06:32:58'),
(31, 48, 1, 'rgb(8, 145, 178)', 'cursive', NULL, 'Loose', '2024-02-13 08:57:59', '2024-02-13 09:01:13'),
(32, 49, 2, 'rgb(225, 29, 72)', 'cursive', NULL, 'Loose', '2024-02-13 11:40:57', '2024-02-14 07:02:04'),
(33, 50, 1, NULL, NULL, NULL, NULL, '2024-02-13 12:30:47', '2024-02-13 12:30:47'),
(34, 51, 2, NULL, 'cursive', NULL, 'Loose', '2024-02-13 12:41:22', '2024-02-14 05:42:47'),
(35, 52, 3, 'rgb(13, 148, 136)', 'cursive', NULL, 'Normal', '2024-02-15 05:13:10', '2024-02-15 08:32:35'),
(36, 53, 1, NULL, NULL, NULL, NULL, '2024-02-15 05:20:41', '2024-02-15 05:20:41'),
(37, 54, 1, NULL, NULL, NULL, NULL, '2024-02-15 05:43:30', '2024-02-15 05:43:30'),
(38, 55, 1, NULL, NULL, NULL, NULL, '2024-02-15 13:16:14', '2024-02-15 13:16:14'),
(39, 56, 1, NULL, NULL, NULL, NULL, '2024-02-15 13:24:18', '2024-02-15 13:24:18'),
(40, 57, 1, NULL, NULL, NULL, NULL, '2024-02-15 13:30:04', '2024-02-15 13:30:04'),
(41, 58, 1, NULL, NULL, NULL, NULL, '2024-02-15 14:22:05', '2024-02-15 14:22:05'),
(42, 59, 1, NULL, NULL, NULL, NULL, '2024-02-15 14:29:55', '2024-02-15 14:29:55'),
(43, 60, 4, 'rgb(2, 132, 199)', 'monospace', NULL, 'Loose', '2024-02-15 15:20:34', '2024-02-15 15:33:32'),
(44, 61, 1, NULL, NULL, NULL, NULL, '2024-02-19 06:10:16', '2024-02-19 06:10:16'),
(45, 62, 1, NULL, NULL, NULL, NULL, '2024-02-20 04:54:10', '2024-02-20 04:54:10'),
(46, 63, 1, NULL, NULL, NULL, NULL, '2024-02-22 10:19:52', '2024-02-22 10:19:52'),
(47, 64, 1, NULL, NULL, NULL, NULL, '2024-02-22 10:20:17', '2024-02-22 10:20:17'),
(48, 65, 1, NULL, NULL, NULL, NULL, '2024-02-22 10:45:26', '2024-02-22 10:45:26'),
(49, 66, 1, NULL, NULL, NULL, NULL, '2024-02-23 05:05:47', '2024-02-23 05:05:47'),
(50, 67, 3, 'rgb(2, 132, 199)', 'cursive', NULL, NULL, '2024-02-23 10:55:19', '2024-02-23 11:22:12'),
(51, 68, 1, NULL, NULL, NULL, NULL, '2024-02-23 12:47:09', '2024-02-23 12:47:09'),
(52, 69, 1, NULL, NULL, NULL, NULL, '2024-02-23 13:10:07', '2024-02-23 13:10:07'),
(53, 70, 1, NULL, NULL, NULL, NULL, '2024-02-28 05:07:54', '2024-02-28 05:07:54'),
(54, 71, 1, NULL, NULL, NULL, NULL, '2024-02-28 09:15:47', '2024-02-28 09:15:47'),
(55, 72, 1, NULL, NULL, NULL, NULL, '2024-02-28 09:32:38', '2024-02-28 09:32:38'),
(56, 73, 1, NULL, NULL, NULL, NULL, '2024-02-29 09:20:31', '2024-02-29 09:20:31'),
(57, 74, 1, NULL, NULL, NULL, NULL, '2024-02-29 11:19:37', '2024-02-29 11:19:37'),
(58, 75, 1, NULL, NULL, NULL, NULL, '2024-03-01 02:47:13', '2024-03-01 02:47:13'),
(59, 76, 1, NULL, NULL, NULL, NULL, '2024-03-01 04:50:08', '2024-03-01 04:50:08'),
(60, 77, 1, NULL, NULL, NULL, NULL, '2024-03-01 05:31:56', '2024-03-01 05:31:56'),
(61, 78, 1, NULL, NULL, NULL, NULL, '2024-03-01 06:05:30', '2024-03-01 06:05:30'),
(62, 79, 1, NULL, NULL, NULL, NULL, '2024-03-01 06:13:05', '2024-03-01 06:13:05'),
(63, 80, 1, NULL, NULL, NULL, NULL, '2024-03-01 06:41:25', '2024-03-01 06:41:25'),
(64, 81, 1, NULL, NULL, NULL, NULL, '2024-03-01 07:12:21', '2024-03-01 07:12:21'),
(65, 82, 1, NULL, NULL, NULL, NULL, '2024-03-01 07:29:52', '2024-03-01 07:29:52'),
(66, 83, 1, NULL, NULL, NULL, NULL, '2024-03-01 10:52:34', '2024-03-01 10:52:34'),
(67, 84, 1, NULL, NULL, NULL, NULL, '2024-03-02 03:46:21', '2024-03-02 03:46:21'),
(68, 85, 1, NULL, NULL, NULL, NULL, '2024-03-04 05:26:45', '2024-03-04 05:26:45'),
(69, 86, 1, NULL, NULL, NULL, NULL, '2024-03-04 05:29:25', '2024-03-04 05:29:25'),
(70, 87, 1, NULL, NULL, NULL, NULL, '2024-03-04 10:02:40', '2024-03-04 10:02:40'),
(71, 88, 1, NULL, NULL, NULL, NULL, '2024-03-05 04:43:37', '2024-03-05 04:43:37'),
(72, 89, 1, NULL, NULL, NULL, NULL, '2024-03-05 12:07:58', '2024-03-05 12:07:58'),
(73, 90, 1, NULL, NULL, NULL, NULL, '2024-03-06 07:01:54', '2024-03-06 07:01:54'),
(74, 91, 1, NULL, NULL, NULL, NULL, '2024-03-06 12:03:50', '2024-03-06 12:03:50'),
(75, 92, 1, NULL, NULL, NULL, NULL, '2024-03-08 11:50:06', '2024-03-08 11:50:06'),
(76, 93, 1, NULL, NULL, NULL, NULL, '2024-03-08 12:08:47', '2024-03-08 12:08:47'),
(77, 94, 1, NULL, NULL, NULL, NULL, '2024-03-09 02:51:29', '2024-03-09 02:51:29'),
(78, 95, 1, NULL, NULL, NULL, NULL, '2024-03-09 03:53:28', '2024-03-09 03:53:28'),
(79, 96, 1, NULL, NULL, NULL, NULL, '2024-03-09 06:14:34', '2024-03-09 06:14:34'),
(80, 97, 1, NULL, NULL, NULL, NULL, '2024-03-09 06:18:05', '2024-03-09 06:18:05'),
(81, 98, 1, NULL, NULL, NULL, NULL, '2024-03-09 06:35:08', '2024-03-09 06:35:08'),
(82, 99, 1, NULL, NULL, NULL, NULL, '2024-03-09 06:55:43', '2024-03-09 06:55:43'),
(83, 100, 1, NULL, NULL, NULL, NULL, '2024-03-09 07:04:30', '2024-03-09 07:04:30'),
(84, 101, 1, NULL, NULL, NULL, NULL, '2024-03-09 07:12:28', '2024-03-09 07:12:28'),
(85, 102, 1, NULL, NULL, NULL, NULL, '2024-03-11 09:24:30', '2024-03-11 09:24:30'),
(86, 103, 4, NULL, NULL, NULL, NULL, '2024-03-11 10:31:48', '2024-03-12 07:06:37'),
(87, 104, 1, NULL, NULL, NULL, NULL, '2024-03-11 11:59:24', '2024-03-11 11:59:24'),
(88, 105, 1, NULL, NULL, NULL, NULL, '2024-03-11 12:00:25', '2024-03-11 12:00:25'),
(89, 106, 1, NULL, NULL, NULL, NULL, '2024-03-11 13:06:55', '2024-03-11 13:06:55'),
(90, 107, 4, 'rgb(23, 23, 23)', 'cursive', NULL, 'Dense', '2024-03-11 13:35:40', '2024-03-12 05:02:41'),
(91, 108, 1, NULL, NULL, NULL, NULL, '2024-03-12 04:33:49', '2024-03-12 04:33:49'),
(92, 109, 1, NULL, NULL, NULL, NULL, '2024-03-12 04:35:15', '2024-03-12 04:35:15'),
(93, 110, 1, NULL, NULL, NULL, NULL, '2024-03-12 04:56:52', '2024-03-12 04:56:52'),
(94, 111, 1, NULL, NULL, NULL, NULL, '2024-03-12 05:04:33', '2024-03-12 05:04:33'),
(95, 112, 2, 'rgb(6, 182, 212)', 'monospace', NULL, 'Loose', '2024-03-13 04:13:58', '2024-03-13 04:30:10'),
(96, 113, 3, 'rgb(6, 182, 212)', 'monospace', NULL, NULL, '2024-03-13 05:53:29', '2024-05-01 09:17:06'),
(97, 115, 1, NULL, NULL, NULL, NULL, '2024-04-01 04:46:18', '2024-04-01 04:46:18'),
(98, 116, 1, NULL, NULL, NULL, NULL, '2024-04-01 05:16:22', '2024-04-01 05:16:22'),
(99, 117, 1, NULL, NULL, NULL, NULL, '2024-04-01 06:27:20', '2024-04-01 06:27:20'),
(100, 118, 1, NULL, NULL, NULL, NULL, '2024-04-02 10:53:23', '2024-04-02 10:53:23'),
(101, 119, 3, 'rgb(2, 132, 199)', 'cursive', NULL, 'Loose', '2024-04-02 10:53:23', '2024-06-26 05:10:09'),
(102, 121, 1, NULL, NULL, NULL, NULL, '2024-04-13 07:04:40', '2024-04-13 07:04:40'),
(103, 122, 1, NULL, NULL, NULL, NULL, '2024-04-15 06:40:57', '2024-04-15 06:40:57'),
(104, 123, 1, NULL, NULL, NULL, NULL, '2024-04-15 06:58:23', '2024-04-15 06:58:23'),
(105, 124, 1, NULL, NULL, NULL, NULL, '2024-04-15 07:25:09', '2024-04-15 07:25:09'),
(106, 132, 1, NULL, NULL, NULL, NULL, '2024-04-15 08:37:06', '2024-04-15 08:37:06'),
(107, 133, 1, NULL, NULL, NULL, NULL, '2024-04-15 08:42:43', '2024-04-15 08:42:43'),
(108, 134, 1, NULL, NULL, NULL, NULL, '2024-04-15 09:44:05', '2024-04-15 09:44:05'),
(109, 135, 1, NULL, NULL, NULL, NULL, '2024-04-16 05:48:04', '2024-04-16 05:48:04'),
(110, 136, 1, NULL, NULL, NULL, NULL, '2024-04-16 06:04:45', '2024-04-16 06:04:45'),
(111, 137, 1, NULL, NULL, NULL, NULL, '2024-04-19 08:48:44', '2024-04-19 08:48:44'),
(112, 138, 1, NULL, NULL, NULL, NULL, '2024-04-19 09:58:38', '2024-04-19 09:58:38'),
(113, 139, 1, NULL, NULL, NULL, NULL, '2024-04-23 08:32:02', '2024-04-23 08:32:02'),
(114, 140, 1, NULL, NULL, NULL, NULL, '2024-04-23 09:40:26', '2024-04-23 09:40:26'),
(115, 141, 1, NULL, NULL, NULL, NULL, '2024-04-23 09:45:59', '2024-04-23 09:45:59'),
(116, 142, 1, NULL, NULL, NULL, NULL, '2024-04-23 09:54:38', '2024-04-23 09:54:38'),
(117, 143, 1, NULL, NULL, NULL, NULL, '2024-04-23 09:58:55', '2024-04-23 09:58:55'),
(118, 144, 1, NULL, NULL, NULL, NULL, '2024-04-23 10:11:05', '2024-04-23 10:11:05'),
(119, 145, 1, NULL, NULL, NULL, NULL, '2024-04-23 10:15:31', '2024-04-23 10:15:31'),
(120, 146, 1, NULL, NULL, NULL, NULL, '2024-04-24 11:35:49', '2024-04-24 11:35:49'),
(121, 147, 1, NULL, NULL, NULL, NULL, '2024-04-25 08:56:03', '2024-04-25 08:56:03'),
(122, 148, 1, NULL, NULL, NULL, NULL, '2024-04-29 12:36:18', '2024-04-29 12:36:18'),
(123, 149, 2, NULL, NULL, NULL, NULL, '2024-04-29 12:48:06', '2024-05-01 09:26:29'),
(124, 150, 1, NULL, NULL, NULL, NULL, '2024-05-06 01:22:45', '2024-05-06 01:22:45'),
(125, 151, 1, NULL, NULL, NULL, NULL, '2024-05-15 07:17:22', '2024-05-15 07:17:22'),
(126, 152, 1, NULL, NULL, NULL, NULL, '2024-05-21 09:43:11', '2024-05-21 09:43:11'),
(127, 153, 1, NULL, NULL, NULL, NULL, '2024-06-14 08:33:44', '2024-06-14 08:33:44'),
(128, 154, 1, NULL, NULL, NULL, NULL, '2024-06-26 05:56:34', '2024-06-26 05:56:34'),
(129, 155, 1, NULL, NULL, NULL, NULL, '2024-06-26 05:57:29', '2024-06-26 05:57:29'),
(130, 156, 1, NULL, NULL, NULL, NULL, '2024-07-04 07:05:12', '2024-07-04 07:05:12'),
(131, 157, 1, NULL, NULL, NULL, NULL, '2024-07-04 07:13:37', '2024-07-04 07:13:37'),
(132, 158, 1, NULL, NULL, NULL, NULL, '2024-07-04 07:37:31', '2024-07-04 07:37:31'),
(133, 159, 1, NULL, NULL, NULL, NULL, '2024-07-05 05:23:45', '2024-07-05 05:23:45'),
(134, 160, 1, NULL, NULL, NULL, NULL, '2024-07-05 05:24:19', '2024-07-05 05:24:19'),
(135, 161, 1, NULL, NULL, NULL, NULL, '2024-07-05 08:47:38', '2024-07-05 08:47:38'),
(136, 162, 1, NULL, NULL, NULL, NULL, '2024-07-06 02:33:25', '2024-07-06 02:33:25'),
(137, 163, 1, NULL, NULL, NULL, NULL, '2024-07-06 03:43:11', '2024-07-06 03:43:11'),
(138, 164, 1, NULL, NULL, NULL, NULL, '2024-07-06 05:18:58', '2024-07-06 05:18:58'),
(139, 165, 1, NULL, NULL, NULL, NULL, '2024-09-05 23:56:58', '2024-09-05 23:56:58'),
(140, 166, 1, NULL, NULL, NULL, NULL, '2024-09-06 04:21:56', '2024-09-06 04:21:56'),
(141, 167, 1, NULL, NULL, NULL, NULL, '2024-09-06 21:21:06', '2024-09-06 21:21:06'),
(142, 168, 1, NULL, NULL, NULL, NULL, '2024-09-07 14:05:01', '2024-09-07 14:05:01'),
(143, 169, 1, NULL, NULL, NULL, NULL, '2024-10-03 14:57:39', '2024-10-03 14:57:39'),
(144, 170, 1, NULL, NULL, NULL, NULL, '2024-10-03 15:51:12', '2024-10-03 15:51:12'),
(145, 171, 1, NULL, NULL, NULL, NULL, '2024-10-03 16:01:22', '2024-10-03 16:01:22'),
(146, 172, 1, NULL, NULL, NULL, NULL, '2024-10-04 00:45:44', '2024-10-04 00:45:44'),
(147, 173, 1, NULL, NULL, NULL, NULL, '2024-10-04 06:44:32', '2024-10-04 06:44:32'),
(148, 174, 1, NULL, NULL, NULL, NULL, '2024-10-04 07:14:14', '2024-10-04 07:14:14'),
(149, 179, 1, NULL, NULL, NULL, NULL, '2024-10-15 02:33:30', '2024-10-15 02:33:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contant_management`
--
ALTER TABLE `contant_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_sections`
--
ALTER TABLE `custom_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment_histories`
--
ALTER TABLE `employment_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_plans`
--
ALTER TABLE `interview_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_user_plans`
--
ALTER TABLE `interview_user_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_apply_management`
--
ALTER TABLE `job_apply_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_preferences`
--
ALTER TABLE `job_preferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_managers`
--
ALTER TABLE `page_managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_links`
--
ALTER TABLE `profile_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_templates`
--
ALTER TABLE `resume_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_calculator_data`
--
ALTER TABLE `salary_calculator_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selected_questions`
--
ALTER TABLE `selected_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_tracks`
--
ALTER TABLE `time_tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `userplans`
--
ALTER TABLE `userplans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userplans_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD UNIQUE KEY `stripe_id` (`stripe_id`);

--
-- Indexes for table `user_questions`
--
ALTER TABLE `user_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_resumes`
--
ALTER TABLE `user_resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_resume_templates`
--
ALTER TABLE `user_resume_templates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contant_management`
--
ALTER TABLE `contant_management`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `custom_sections`
--
ALTER TABLE `custom_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `employment_histories`
--
ALTER TABLE `employment_histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `interview_plans`
--
ALTER TABLE `interview_plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `interview_user_plans`
--
ALTER TABLE `interview_user_plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `job_apply_management`
--
ALTER TABLE `job_apply_management`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `job_preferences`
--
ALTER TABLE `job_preferences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `page_managers`
--
ALTER TABLE `page_managers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile_links`
--
ALTER TABLE `profile_links`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `resume_templates`
--
ALTER TABLE `resume_templates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `salary_calculator_data`
--
ALTER TABLE `salary_calculator_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `selected_questions`
--
ALTER TABLE `selected_questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `time_tracks`
--
ALTER TABLE `time_tracks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `userplans`
--
ALTER TABLE `userplans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `user_questions`
--
ALTER TABLE `user_questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_resumes`
--
ALTER TABLE `user_resumes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_resume_templates`
--
ALTER TABLE `user_resume_templates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userplans`
--
ALTER TABLE `userplans`
  ADD CONSTRAINT `userplans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
