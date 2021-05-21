DROP TABLE IF EXISTS metode_bayar;

CREATE TABLE `metode_bayar` (
  `id` int(11) NOT NULL AUTO_INCREMENT KEY,
  `metode_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO metode_bayar (id, metode_bayar) values
(1, 'TUNAI LEWAT KASIR'),
(2, 'GOPAY'),
(3, 'OVO'),
(4, 'TRANSFER BANK'),
(5, 'DANA'),
(6, 'KARTU DEBIT'),
(7, 'VIRTUAL ACCOUNT BCA'),
(8, 'QRiS'),
(9, 'ALFAMART'),
(10, 'INDOMART')