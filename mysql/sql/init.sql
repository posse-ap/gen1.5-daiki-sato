DROP SCHEMA IF EXISTS p2_quizy;
CREATE SCHEMA p2_quizy;
USE p2_quizy;

-- questionsテーブル
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions`(
  `id` INT NOT NULL PRIMARY KEY,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
);

INSERT INTO `questions` (`id`,`name`) VALUES
(1,'東京の難読地名クイズ'),
(2,'広島県の難読地名クイズ');