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









-- -- おすすめ記事表示テーブル
-- DROP TABLE IF EXISTS `stSELECT [取得したい要素] FROM [使用テーブル]ar`;
-- CREATE TABLE star(
--   `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
--   `article_id` INT NOT NULL
-- );

-- INSERT INTO `star` (`article_id`) VALUES
-- (1),
-- (2);


-- -- タグ
-- CREATE TABLE `tags` (
--   `id` int NOT NULL,
--   `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- INSERT INTO `tags` (`id`, `name`) VALUES
-- (1,'ベンチャー'),
-- (2,'スタートアップ'),
-- (3,'外資');

-- -- 記事作成者
-- CREATE TABLE `writer` (
--   `id` int NOT NULL,
--   `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- INSERT INTO `writer` (`id`, `name`) VALUES
-- (1,'みきはる'),
-- (2,'もりはる'),
-- (3,'ともはる');

-- -- 会社
-- CREATE TABLE `company` (
--   `id` int NOT NULL,
--   `company_homepage` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
--   `company_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
--   `company_article` varchar(557) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- INSERT INTO `company` (`id`, `company_homepage`, `company_name`, `company_article`) VALUES
-- (1,'https://anti-pattern.co.jp/','株式会社アンチパターン','1_Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nostrum quod qui quae, asperiores reiciendis libero maiores blanditiis assumenda, incidunt modi error. Fugit eligendi eos ipsa ut quia, repellat officiis.'),
-- (2,'https://www.apple.com/jp/','Apple','2_Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nostrum quod qui quae, asperiores reiciendis libero maiores blanditiis assumenda, incidunt modi error. Fugit eligendi eos ipsa ut quia, repellat officiis.'),
-- (3,'https://www.google.co.jp/','Goggle','3_Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nostrum quod qui quae, asperiores reiciendis libero maiores blanditiis assumenda, incidunt modi error. Fugit eligendi eos ipsa ut quia, repellat officiis.');

-- -- インタビュアー
-- CREATE TABLE `interviewer` (
--   `id` int NOT NULL,
--   `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
-- );
-- INSERT INTO `interviewer` (`id`,`name`) VALUES
-- (1,'daiki'),
-- (2,'taiki');

-- -- - 本文
-- CREATE TABLE `main_text` (
--   `id` int NOT NULL,
--   `article_text` varchar(557) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
--   `interviewer-id` int NOT NULL,
--   `interviewed_company` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
--   `interview_date` date
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- INSERT INTO `main_text` (`id`, `article_text`,`interviewer-id`,`interviewed_company`,`interview_date`) VALUES
-- (1,'1_Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nostrum quod qui quae, asperiores reiciendis libero maiores blanditiis assumenda, incidunt modi error. Fugit eligendi eos ipsa ut quia, repellat officiis.',1,'アンチパターン','2021-12-11'),
-- (2,'2_Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nostrum quod qui quae, asperiores reiciendis libero maiores blanditiis assumenda, incidunt modi error. Fugit eligendi eos ipsa ut quia, repellat officiis.',2,'Apple','2021-2-11'),
-- (3,'3_Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nostrum quod qui quae, asperiores reiciendis libero maiores blanditiis assumenda, incidunt modi error. Fugit eligendi eos ipsa ut quia, repellat officiis.',3,'Goggle','2022-1-11');

