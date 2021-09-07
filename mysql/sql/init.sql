-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: db
-- 生成日時: 2021 年 9 月 07 日 08:49
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

-- --------------------------------------------------------

--
-- テーブルの構造 `study_time`
--

CREATE TABLE `study_time` (
  `id` int NOT NULL,
  `today` int NOT NULL,
  `month` int NOT NULL,
  `total` int NOT NULL,
  `study_contents_id` int NOT NULL,
  `study_language_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `study_time`
--

INSERT INTO `study_time` (`id`, `today`, `month`, `total`, `study_contents_id`, `study_language_id`) VALUES
(1, 2, 40, 100, 1, 1);

--
-- ダンプしたテーブルのインデックス
--

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
-- テーブルのインデックス `study_time`
--
ALTER TABLE `study_time`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `study_contents`
--
ALTER TABLE `study_contents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `study_language`
--
ALTER TABLE `study_language`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `study_shedule`
--
ALTER TABLE `study_shedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `study_time`
--
ALTER TABLE `study_time`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
