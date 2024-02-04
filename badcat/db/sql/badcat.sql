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
);

INSERT INTO `userinfo` (`id`, `userid`, `passwd`, `email`, `super`) VALUES
(1, 'admin', 'passwd', 'root@example.jp', 'A'),
(2, 'badcat', '1234', 'badcat@example.jp', 'U'),
(3, 'nyanko', '2525', 'nekonyan@example.jp', 'U');

CREATE TABLE `catsinfo` (
  `id` int(11) NOT NULL,
  `photos` varchar(64) NOT NULL,
  `cname` varchar(64) NOT NULL,
  `birth` varchar(64) NOT NULL,
  `age` int(11) NOT NULL,
  `patten` varchar(64) NOT NULL,
  `about` varchar(64) NOT NULL  
);

INSERT INTO `catsinfo` (`id`, `photos`, `cname`, `birth`, `age`,`patten`,`about`) VALUES
(1, 'cat_01.jpg', 'Michael', '2019/2/14', 4,'gray tabby','A energetic boy'),
(2, 'cat_02.jpg', 'Becky', '2017/5/21', 6,'calico cat','A little shy girl'),
(3, 'cat_03.jpg', 'Cathy', '2020/10/3', 3,'long-hair breed','A dignified girl'),
(4, 'cat_04.jpg', 'Icey', '2018/7/29', 5,'leopard patten','A herbivore men'),
(5, 'cat_05.jpg', 'Cookie', '2017/12/25', 6,'brown tabby','A boy is sleepyhead'),
(6, 'cat_06.jpg', 'Milk', '2018/1/1', 5,'white','A boy likes heights'),
(7, 'cat_07.jpg', 'Klumi', '2018/1/1', 5,'white','A laid-back girl'),
(8, 'cat_08.jpg', 'Luna', '2019/6/18', 4,'melynx','A listless boy');

CREATE TABLE `storeitems` (
  `id` int(11) NOT NULL,
  `iname` varchar(64) NOT NULL,
  `values` int(11) NOT NULL,
  `photos` varchar(64) NOT NULL
);

INSERT INTO `storeitems` (`id`, `iname`, `values`, `photos`) VALUES
(1, 'cap', '10', 'item_01.jpg'),
(2, 'book', '5', 'item_02.jpg'),
(3, 'cushion', '7', 'item_03.jpg');