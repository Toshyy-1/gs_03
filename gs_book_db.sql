-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2020 年 7 月 02 日 14:38
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_book_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `bookinfo`
--

CREATE TABLE `bookinfo` (
  `isbn` int(32) NOT NULL,
  `title` varchar(128) NOT NULL,
  `price` int(8) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `bookinfo`
--

INSERT INTO `bookinfo` (`isbn`, `title`, `price`, `id`) VALUES
(8424, '1111', 1111, 49),
(22222, '22222', 2222, 50),
(999, '33333', 3333, 51);

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bool_db`
--

CREATE TABLE `gs_bool_db` (
  `id` int(12) NOT NULL,
  `isbn` int(48) NOT NULL,
  `title` varchar(128) NOT NULL,
  `author` varchar(64) NOT NULL,
  `genre` varchar(64) NOT NULL,
  `evaluation` int(12) NOT NULL,
  `comment` text NOT NULL,
  `number_times` int(12) NOT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_bool_db`
--

INSERT INTO `gs_bool_db` (`id`, `isbn`, `title`, `author`, `genre`, `evaluation`, `comment`, `number_times`, `indate`) VALUES
(13, 111, 'ttttt', '板垣政樹', '工学', 1, '1', 1, '2020-06-18'),
(16, 40460, '今すぐ書ける１分間プログラミング', '板垣政樹', '工学', 1, '', 1, '2020-06-18'),
(17, 40615, '本を読む本', 'Ｍ．Ｊ．アドラー', '文庫', 5, '勉強になった', 3, '2020-06-18'),
(18, 4569, '日本経済予言の書　２０２０年代、不安な未', '鈴木　貴博', '新書', 1, '', 0, '2020-06-18'),
(19, 4502, 'ｂｅｙｏｎｄ５Ｇはインターネットの危機を', '西　正', '経営', 2, '', 0, '2020-06-18'),
(21, 123, '123', '123', '123', 123, '123', 123, '2020-07-02');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `Keri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `Keri_flg`, `life_flg`) VALUES
(1, 'テスト１管理者', 'test1', '$2y$10$xwsL3Kq8/gmOpOeb.iV.1usDUxpGBpvwhDGXankM7zfY/xjr9OULi', 1, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_bool_db`
--
ALTER TABLE `gs_bool_db`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `bookinfo`
--
ALTER TABLE `bookinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- テーブルのAUTO_INCREMENT `gs_bool_db`
--
ALTER TABLE `gs_bool_db`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- テーブルのAUTO_INCREMENT `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
