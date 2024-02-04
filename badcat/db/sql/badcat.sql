DROP DATABASE IF EXISTS badcat;

CREATE DATABASE badcat;
use badcat;

DROP TABLE IF EXISTS userinfo, catsinfo;

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `passwd` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `super` varchar(2) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `userinfo` (`id`, `userid`, `passwd`, `email`, `super`) VALUES
(1, 'admin', 'passwd', 'root@example.jp', 'A'),
(2, 'badcat', '1234', 'badcat@example.jp', 'U'),
(3, 'nyanko', '2525', 'nekonyan@example.jp', 'U');

CREATE TABLE `catsinfo` (
  `id` int(11) NOT NULL,
  'photo' varchar(64) NOT NULL,
  'c_name' varchar(64) NOT NULL,
  'birth' TEXT NOT NULL,
  'age' int(11),
  'pattern' varchar(64) NOT NULL,
  'about' text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `catsinfo` (`id`, `pic`, `c_name`, `birth`, `age`,'patten','about') VALUES
(1, `cat_01.jpg`, `ショコラ`, `2019/2/14`, 4,'茶トラ','元気いっぱいの男の子'),
(2, `cat_02.jpg`, `ミルク`, `2017/5/21`, 6,'茶トラ','のんびりやの女の子');
