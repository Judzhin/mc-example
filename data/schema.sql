SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `a` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `a` (`id`, `name`) VALUES
(1, 'Eli'),
(2, 'Moshe'),
(3, 'Yossi');

CREATE TABLE `b` (
  `id` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `b` (`id`, `grade`) VALUES
(1, 98),
(3, 55),
(4, 100);

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `saleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `customers` (`id`, `name`, `city`, `saleid`) VALUES
(3001, 'Brad Guzan', 'London', 5005),
(3002, 'Nick Rimando', 'New York', 5001),
(3004, 'Fabian Johns', 'Paris', 5006),
(3005, 'Graham Zusi', 'California', 5002),
(3007, 'Brad Davis', 'New York', 5001),
(3008, 'Julian Green', 'London', 5002),
(3009, 'Geoff Camero', 'Berlin', 5003);

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `commission` decimal(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `sales` (`id`, `name`, `city`, `commission`) VALUES
(5001, 'James Hoog', 'New York', '0.15'),
(5002, 'Nail Knite', 'Paris', '0.13'),
(5003, 'Lauson Hen', 'Berlin', '0.12'),
(5005, 'Pit Alex', 'London', '0.11'),
(5006, 'Mc Lyon', 'Paris', '0.14'),
(5007, 'Paul Adam', 'Rome', '0.13');


ALTER TABLE `a`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `b`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saleid` (`saleid`);

ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3010;

ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5008;


ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`saleid`) REFERENCES `sales` (`id`);
COMMIT;
