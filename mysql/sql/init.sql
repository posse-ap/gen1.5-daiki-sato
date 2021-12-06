-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: db
-- 生成日時: 2021 年 9 月 07 日 10:02
-- サーバのバージョン： 8.0.25
-- PHP のバージョン: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `ph2_webapp`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `study`
--

CREATE TABLE `study` (
  `id` int NOT NULL,
  `study_date` date DEFAULT NULL,
  `learning_time` int NOT NULL,
  `study_contents_id` int NOT NULL,
  `study_language_id` int NOT NULL,
  `study_contents_number` int NOT NULL,
  `study_language_number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `study`
--

INSERT INTO `study` (`id`, `study_date`,  `learning_time`, `study_contents_id`, `study_language_id`, `study_contents_number`, `study_language_number` ) VALUES
( 1 , '2021-10-07', 1 , 1 , 1 , 2 , 2 ),
( 2 , '2021-10-08', 2 , 1 , 1 , 2 , 2 ),
( 3 , '2021-10-09', 3 , 2 , 1 , 3 , 1 ),
( 4 , '2021-10-10', 4 , 2 , 1 , 2 , 2 ),
( 5 , '2021-10-11', 5 , 2 , 1 , 1 , 4 ),
( 6 , '2021-10-12', 6 , 2 , 1 , 2 , 2 ),
( 7 , '2021-10-13', 7 , 2 , 1 , 3 , 1 ),
( 8 , '2021-10-14', 8 , 2 , 1 , 1 , 3 ),
( 9 , '2021-10-15', 9 , 2 , 1 , 1 , 4 ),
( 10 ,'2021-10-16' , 3 , 3 , 1 , 2 , 2 ),
( 11 ,'2021-10-17' , 3 , 3 , 1 , 2 , 3 ),
( 12 ,'2021-10-18' , 3 , 3 , 3 , 1 , 3 ),
( 13 ,'2021-10-19' , 3 , 3 , 3 , 2 , 3 ),
( 14 ,'2021-10-20' , 6 , 3 , 3 , 1 , 3 ),
( 15 ,'2021-10-21' , 3 , 3 , 3 , 2 , 3 ),
( 16 ,'2021-10-28' , 3 , 3 , 3 , 1 , 3 ),
( 17 ,'2021-10-23' , 3 , 3 , 3 , 1 , 4 ),
( 18 ,'2021-10-24' , 3 , 3 , 3 , 2 , 2 ),
( 19 ,'2021-10-25' , 3 , 3 , 1 , 3 , 1 );
( 20 ,'2021-11-1' , 3 , 3 , 1 , 3 , 1 );
( 21 ,'2021-11-2' , 3 , 3 , 1 , 3 , 1 );

-- --------------------------------------------------------

--
-- テーブルの構造 `study_contents`
--

CREATE TABLE `study_contents` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` VARCHAR(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `study_contents`
--

INSERT INTO `study_contents` (`id`, `name`, `color`) VALUES
(1, 'ドットインストール', '#1B71BD'),
(2, 'N予備校', '#2A54EF'),
(3, 'POSSE課題', '#21BDDE');

-- --------------------------------------------------------

--
-- テーブルの構造 `study_language`
--

CREATE TABLE `study_language` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` VARCHAR(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `study_language`
--

INSERT INTO `study_language` (`id`, `name`, `color`) VALUES
(1, 'JavaScript', '#2A54EF'),
(2, 'CSS', '#1B71BD'),
(3, 'PHP', '#21BDDE'),
(4, 'HTML', '#3DCEFD'),
(5, 'Laravel', '#B39EF3'),
(6, 'SQL', '#6D47EC'),
(7, 'SHELL', '#4A18EF'),
(8, '情報システム基礎知識（その他）', '#3107BF');

-- --------------------------------------------------------

--
-- テーブルの構造 `study_shedule`
--

CREATE TABLE `study_shedule` (
  `id` int NOT NULL,
  `weeks` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `study_shedule`
--

INSERT INTO `study_shedule` (`id`, `weeks`) VALUES
(1, '1th week'),
(2, '2th week'),
(3, '3th week'),
(4, '4th week'),
(5, '5th week'),
(6, '6th week');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `study`
--
ALTER TABLE `study`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `study_contents`
--
ALTER TABLE `study_contents`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `study_language`
--
ALTER TABLE `study_language`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `study_shedule`
--
ALTER TABLE `study_shedule`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `study`
--
ALTER TABLE `study`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `study_contents`
--
ALTER TABLE `study_contents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `study_language`
--
ALTER TABLE `study_language`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `study_shedule`
--
ALTER TABLE `study_shedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
