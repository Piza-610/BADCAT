DROP DATABASE IF EXISTS badcat;

CREATE DATABASE badcat;
use badcat;

DROP TABLE IF EXISTS userinfo, catsinfo, storeitems;

CREATE TABLE `userinfo` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `userid` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `passwd` varchar(64) NOT NULL,
  `super` varchar(2) NOT NULL DEFAULT 'U'
);

INSERT INTO `userinfo` (`userid`, `email`, `passwd`, `super`) VALUES
('admin', 'root@example.jp', '76a2173be6393254e72ffa4d6df1030a', 'A'),
('badcat', 'badcat@example.jp', '81dc9bdb52d04dc20036dbd8313ed055', 'U'),
('nyanko', 'nekonyan@example.jp', '9407c826d8e3c07ad37cb2d13d1cb641', 'U');

CREATE TABLE `catsinfo` (
  `id` int(11) NOT NULL,
  `photos` varchar(32) NOT NULL,
  `cname` varchar(32) NOT NULL,
  `birth` varchar(32) NOT NULL,
  `age` int(11) NOT NULL,
  `patten` varchar(32) NOT NULL,
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
  `iname` varchar(32) NOT NULL,
  `values` int(11) NOT NULL,
  `photos` varchar(32) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0
);

INSERT INTO `storeitems` (`id`, `iname`, `values`, `photos`,`stock`) VALUES
(1, 'cap', '6', 'item_01.jpg',13),
(2, 'book', '5', 'item_02.jpg',5),
(3, 'cushion', '7', 'item_03.jpg',10),
(4, 'curry', '5', 'item_04.jpg',7),
(5, 'photo''stand', '10', 'item_05.jpg',6),
(6, 'poteto', '3', 'item_06.jpg',17),
(7, 'tea', '4', 'item_07.jpg',14),
(8, 'coffe', '4', 'item_08.jpg',14),
(9, 'cookie', '3', 'item_09.jpg',17),
(10, 'cream puff', '4', 'item_10.jpg',4),
(11, 'waffle', '4', 'item_11.jpg',8),
(12, 'dogfood', '7', 'item_12.jpg',0),
(13, 'toy', '7', 'item_13.jpg',0);