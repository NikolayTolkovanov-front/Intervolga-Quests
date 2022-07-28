-- USE something database

DROP TABLE IF EXISTS `Sportsmans`;
CREATE TABLE `Sportsmans` (
  id INT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  surname VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  birthday DATE NOT NULL,
  date_create_record DATE NOT NULL,
  time_create_record TIME NOT NULL,
  passport INT UNSIGNED NOT NULL,
  middle_place INT UNSIGNED NOT NULL,
  biography TEXT NOT NULL,
  video VARCHAR(500) -- хранение видео в бд занимает много пространства, поэтому можно записывать путь до файла
);