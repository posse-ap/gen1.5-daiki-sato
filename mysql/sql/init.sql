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
  `study_language_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `study`
--

INSERT INTO `study` (`id`, `study_date`,  `learning_time`, `study_contents_id`, `study_language_id`) VALUES
( 1 , '2021-09-07', 1 , 1 , 1 ),
( 2 , '2021-09-08', 2 , 1 , 1 ),
( 3 , '2021-09-09', 3 , 1 , 1 ),
( 4 , '2021-09-10', 4 , 1 , 1 ),
( 5 , '2021-09-11', 5 , 1 , 1 ),
( 6 , '2021-09-12', 6 , 1 , 1 ),
( 7 , '2021-09-13', 7 , 1 , 1 ),
( 8 , '2021-09-14', 8 , 1 , 1 ),
( 9 , '2021-09-15', 9 , 1 , 1 ),
( 10 , '2021-09-16' , 3 , 1 , 1 ),
( 11 , '2021-09-17' , 3 , 1 , 1 ),
( 12 , '2021-09-18' , 3 , 1 , 1 ),
( 13 , '2021-09-19' , 3 , 1 , 1 ),
( 14 , '2021-09-20' , 6 , 1 , 1 ),
( 15 , '2021-09-21' , 3 , 1 , 1 ),
( 16 , '2021-09-22' , 3 , 1 , 1 ),
( 17 , '2021-09-23' , 3 , 1 , 1 ),
( 18 , '2021-09-24' , 3 , 1 , 1 ),
( 19 , '2021-09-25' , 3 , 1 , 1 ),
( 20 , '2021-09-26' , 7 , 1 , 1 ),
( 21 , '2021-09-27' , 3 , 1 , 1 ),
( 22 , '2021-09-28' , 6 , 1 , 1 ),
( 23 , '2021-09-29' , 3 , 1 , 1 ),
( 24 , '2021-10-1' , 3 , 1 , 1 ),
( 25 , '2021-10-2' , 3 , 1 , 1 ),
( 26 , '2021-10-3' , 3 , 1 , 1 ),
( 27 , '2021-10-4' , 7 , 1 , 1 ),
( 28 , '2021-10-5' , 3 , 1 , 1 ),
( 29 , '2021-10-6' , 6 , 1 , 1 ),
( 30 , '2021-10-7' , 3 , 1 , 1 ),
( 31 , '2021-10-8' , 3 , 1 , 1 ),
( 32 , '2021-10-9' , 3 , 1 , 1 ),
( 33 , '2021-10-10' , 3 , 1 , 1 ),
( 34 , '2021-10-11' , 3 , 1 , 1 ),
( 35 , '2021-10-12' , 7 , 1 , 1 );

-- --------------------------------------------------------

--
-- テーブルの構造 `study_contents`
--

CREATE TABLE `study_contents` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `study_contents`
--

INSERT INTO `study_contents` (`id`, `name`) VALUES
(1, 'ドットインストール'),
(2, 'N予備校'),
(3, 'POSSE課題');

-- --------------------------------------------------------

--
-- テーブルの構造 `study_language`
--

CREATE TABLE `study_language` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `study_language`
--

INSERT INTO `study_language` (`id`, `name`) VALUES
(1, 'JavaScript'),
(2, 'CSS'),
(3, 'PHP'),
(4, 'HTML'),
(5, 'Laravel'),
(6, 'SQL'),
(7, 'SHELL'),
(8, '情報システム基礎知識（その他）');

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
