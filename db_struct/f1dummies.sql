-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Out-2022 às 23:02
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `f1dummies`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `driver_name` varchar(60) NOT NULL,
  `number` int(3) NOT NULL,
  `date_of_birth` date NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `nationality_pic` varchar(255) NOT NULL,
  `world_championship` int(2) NOT NULL,
  `curiosity` varchar(1000) NOT NULL,
  `url_ig` varchar(500) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `points` int(3) NOT NULL,
  `visibility` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `drivers`
--

INSERT INTO `drivers` (`id`, `team_id`, `driver_name`, `number`, `date_of_birth`, `nationality`, `nationality_pic`, `world_championship`, `curiosity`, `url_ig`, `picture`, `points`, `visibility`) VALUES
(1, 10, 'Alexander Albon', 23, '1996-03-23', 'Tailândia', 'Img/bandeiras/Tailandia.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/alex_albon/', 'Img/Pilotos/Alex-Albon.jpg', 4, b'1'),
(2, 3, 'Fernando Alonso', 14, '1981-07-29', 'Espanha', 'Img/bandeiras/Espanha.jpg', 2, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/fernandoalo_oficial/', 'Img/Pilotos/Fernando-Alonso.jpg', 59, b'1'),
(3, 1, 'Valtteri Bottas', 77, '1989-08-28', 'Finlândia', 'Img/bandeiras/Finlandia.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/valtteribottas/', 'Img/Pilotos/Valtteri-Bottas-02.jpg', 46, b'1'),
(4, 2, 'Pierre Gasly', 10, '1996-07-02', 'França', 'Img/bandeiras/Franca.gif', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/pierregasly/', 'Img/Pilotos/pierre-gasly.jpeg', 23, b'1'),
(5, 1, 'Zhou Guanyu', 24, '1999-05-30', 'China', 'Img/bandeiras/China.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/zhouguanyu24/', 'Img/Pilotos/guanyu-Zhou.jpg', 6, b'1'),
(6, 8, 'Lewis Hamilton', 44, '1985-01-07', 'Reino Unido', 'Img/bandeiras/UK.jpg', 7, 'Hamilton nunca usou o número 1. \"O meu numero de corridas aos oito anos era 44. Mesmo sendo o número um, mantive o 44\", explica Hamilton', 'https://www.instagram.com/lewishamilton/', 'Img/Pilotos/Lewis-Hamilton.jpg', 170, b'1'),
(7, 10, 'Nicholas Latifi', 6, '1995-06-29', 'Canada', 'Img/bandeiras/Canada.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/nicholaslatifi/', 'Img/Pilotos/Nicholas_Lafiti.jpg', 0, b'1'),
(8, 5, 'Charles Leclerc', 16, '1997-10-16', 'Mónaco', 'Img/bandeiras/Monaco.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/charles_leclerc/', 'Img/Pilotos/leclerc.jpg', 237, b'1'),
(9, 6, 'Kevin Magnussen', 20, '1992-05-10', 'Dinamarca', 'Img/bandeiras/Dinamarca.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/kevinmagnussen/', 'Img/Pilotos/Kevin-Magnussen_.jpg', 22, b'1'),
(10, 7, 'Lando Norris', 4, '1999-11-13', 'Reino Unido', 'Img/bandeiras/UK.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/landonorris/', 'Img/Pilotos/lando-norris.jpg', 100, b'1'),
(11, 3, 'Esteban Ocon', 31, '1996-09-17', 'França', 'Img/bandeiras/Franca.gif', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/estebanocon/', 'Img/Pilotos/Esteban-Ocon.jpg', 66, b'1'),
(12, 9, 'Sergio Perez', 11, '1990-06-01', 'México', 'Img/bandeiras/Mexico.gif', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/schecoperez/', 'Img/Pilotos/sergio-perez-.jpg', 235, b'1'),
(13, 7, 'Daniel Ricciardo', 3, '1989-07-01', 'Austrália', 'Img/bandeiras/Australia.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/danielricciardo/', 'Img/Pilotos/Daniel-Ricciardo.jpg', 29, b'1'),
(14, 8, 'George Russell', 63, '1998-02-15', 'Reino Unido', 'Img/bandeiras/UK.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/georgerussell63/', 'Img/Pilotos/George-Russell.png', 203, b'1'),
(15, 5, 'Carlos Sainz', 55, '1994-09-01', 'Espanha', 'Img/bandeiras/Espanha.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/carlossainz55/', 'Img/Pilotos/Carlos-Sainz.jpg', 202, b'1'),
(16, 6, 'Mick Schumacher', 47, '1999-03-22', 'Alemanha', 'Img/bandeiras/Alemanha.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/mickschumacher/', 'Img/Pilotos/Mick-Schumacher-.jpg', 12, b'1'),
(17, 4, 'Lance Stroll', 18, '1998-10-29', 'Canada', 'Img/bandeiras/Canada.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/lance_stroll/channel/', 'Img/Pilotos/lance-stroll.webp', 13, b'1'),
(18, 2, 'Yuki Tsunoda', 22, '2000-05-11', 'Japão', 'Img/bandeiras/Japao.jpg', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/yukitsunoda0511/', 'Img/Pilotos/tsunoda.jpg', 11, b'1'),
(19, 9, 'Max Verstappen', 1, '1997-09-30', 'Países Baixos', 'Img/bandeiras/holanda.gif', 0, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/maxverstappen1/', 'Img/Pilotos/verstappen1.jpg', 341, b'1'),
(20, 4, 'Sebastian Vettel', 5, '1987-07-03', 'Alemanha', 'Img/bandeiras/Alemanha.jpg', 4, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/sebastianvettel/', 'Img/Pilotos/Sebastian-vettel.png', 24, b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `visibility` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `gallery`
--

INSERT INTO `gallery` (`id`, `picture`, `visibility`) VALUES
(1, 'Img/Gallery/2022-Bahrain-Grand-Prix.jpg', b'1'),
(2, 'Img/Gallery/f1-2022.jpg', b'1'),
(3, 'Img/Gallery/f1-cars.webp', b'1'),
(4, 'Img/Gallery/toto-wolff-chris-horner.jpg', b'1'),
(5, 'Img/Gallery/f1-drivers-2021.jpg', b'1'),
(6, 'Img/Gallery/f1-lineup.webp', b'1'),
(7, 'Img/Gallery/image-F1.jpg', b'1'),
(8, 'Img/Gallery/pit-red-bull.jpg', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grand_prix`
--

CREATE TABLE `grand_prix` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(60) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `circuit` varchar(255) NOT NULL,
  `circuit_image` varchar(255) NOT NULL,
  `country_image` varchar(255) DEFAULT NULL,
  `visibility` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `grand_prix`
--

INSERT INTO `grand_prix` (`id`, `name`, `country`, `start_date`, `end_date`, `circuit`, `circuit_image`, `country_image`, `visibility`) VALUES
(1, 'FORMULA 1 GULF AIR BAHRAIN GRAND PRIX 2022', 'Bahrain', '2022-03-18', '2022-03-20', 'Bahrain International Circuit', 'Img/Circuito/circuito_bahrain.png', 'Img/bandeiras/bahrain.jpg', b'1'),
(2, 'FORMULA 1 STC SAUDI ARABIAN GRAND PRIX 2022', 'Arábia Saudita', '2022-03-25', '2022-03-27', 'Jeddah Corniche Circuit', 'Img/Circuito/circuito_saudi_arabia.png', 'Img/bandeiras/saudi-arabia.jpg', b'1'),
(3, 'FORMULA 1 HEINEKEN AUSTRALIAN GRAND PRIX 2022, Australia 2022', 'Australia', '2022-04-08', '2022-04-10', 'Albert Park Circuit', 'Img/Circuito/cuicuito_australia.png', 'Img/bandeiras/Australia.jpg', b'1'),
(4, 'FORMULA 1 ROLEX GRAN PREMIO DEL MADE IN ITALY E DELL EMILIA-ROMAGNA 2022', 'Itália', '2022-04-22', '2022-04-24', 'Imola or Autodromo Enzo e Dino Ferrari', 'Img/Circuito/circuito_Italy.png', 'Img/bandeiras/italia.jpg', b'1'),
(5, 'FORMULA 1 CRYPTO.COM MIAMI GRAND PRIX 2022', 'EUA', '2022-05-06', '2022-05-08', 'Miami International Autodrome', 'Img/Circuito/circuito_Miami.png', 'Img/bandeiras/EUA.jpg', b'1'),
(6, 'FORMULA 1 PIRELLI GRAN PREMIO DE ESPAÑA 2022', 'Espanha', '2022-05-20', '2022-05-22', 'Circuit de Barcelona-Catalunya', 'Img/Circuito/circuito_Espanha.png', 'Img/bandeiras/Espanha.jpg', b'1'),
(7, 'FORMULA 1 GRAND PRIX DE MONACO 2022', 'Mónaco', '2022-05-27', '2022-05-29', 'Circuit de Monaco', 'Img/Circuito/circuito_monaco.png', 'Img/bandeiras/Monaco.jpg', b'1'),
(8, 'FORMULA 1 AZERBAIJAN GRAND PRIX 2022', 'Azerbeijão', '2022-06-10', '2022-06-12', 'Baku City Circuit', 'Img/Circuito/circuito_azerbaijao.png', 'Img/bandeiras/azerbaijao.jpg', b'1'),
(9, 'FORMULA 1 AWS GRAND PRIX DU CANADA 2022', 'Canada', '2022-06-17', '2022-06-19', 'Circuit Gilles-Villeneuve', 'Img/Circuito/circuito_canada.png', 'Img/bandeiras/Canada.jpg', b'1'),
(10, 'FORMULA 1 LENOVO BRITISH GRAND PRIX 2022', 'Reino Unido', '2022-07-01', '2022-07-03', 'Silverstone Circuit', 'Img/Circuito/circuito_GB.png', 'Img/bandeiras/UK.jpg', b'1'),
(11, 'FORMULA 1 ROLEX GROSSER PREIS VON ÖSTERREICH 2022', 'Áustria', '2022-07-08', '2022-07-10', 'Red Bull Ring', 'Img/Circuito/circuito_Austria.png', 'Img/bandeiras/austria.gif', b'1'),
(12, 'FORMULA 1 LENOVO GRAND PRIX DE FRANCE 2022', 'França', '2022-07-22', '2022-07-24', 'França', 'Img/Circuito/circuito_Franca.png', 'Img/bandeiras/Franca.gif', b'1'),
(13, 'FORMULA 1 ARAMCO MAGYAR NAGYDÍJ 2022', 'Hungria', '2022-07-29', '2022-07-31', 'Hungaroring', 'Img/Circuito/circuito_Hungria.png', 'Img/bandeiras/hungria.gif', b'1'),
(14, 'FORMULA 1 ROLEX BELGIAN GRAND PRIX 2022', 'Bélgica', '2022-08-26', '2022-08-28', 'Circuit de Spa-Francorchamps', 'Img/Circuito/circuito_Belgica.png', 'Img/bandeiras/belgica.jpg', b'1'),
(15, 'FORMULA 1 HEINEKEN DUTCH GRAND PRIX 2022', 'Países Baixos', '2022-09-02', '2022-09-04', 'Circuit Zandvoort', 'Img/Circuito/circuito_Holanda.png', 'Img/bandeiras/holanda.gif', b'1'),
(16, 'FORMULA 1 PIRELLI GRAN PREMIO D\'ITALIA 2022', 'Itália', '2022-09-09', '2022-09-11', 'Autodromo Nazionale Monza', 'Img/Circuito/circuito_MonzaIt.png', 'Img/bandeiras/italia.jpg', b'1'),
(17, 'FORMULA 1 SINGAPORE AIRLINES SINGAPORE GRAND PRIX 2022', 'Singapura', '2022-09-30', '2022-10-02', 'Marina Bay Street Circuit', 'Img/Circuito/circuito_Singapura.png', 'Img/bandeiras/singapura.png', b'1'),
(18, 'FORMULA 1 HONDA JAPANESE GRAND PRIX 2022', 'Japão', '2022-10-07', '2022-10-09', 'Suzuka International Racing Course', 'Img/Circuito/circuito_Japao.png', 'Img/bandeiras/Japao.jpg', b'1'),
(19, 'FORMULA 1 ARAMCO UNITED STATES GRAND PRIX 2022', 'EUA', '2022-10-21', '2022-10-23', 'Circuit of The Americas', 'Img/Circuito/circuito_USA_Austin.png', 'Img/bandeiras/EUA.jpg', b'1'),
(20, 'FORMULA 1 GRAN PREMIO DE LA CIUDAD DE MÉXICO 2022', 'Mexico', '2022-10-28', '2022-10-30', 'Autódromo Hermanos Rodríguez', 'Img/Circuito/circuito_Mexico.png', 'Img/bandeiras/Mexico.gif', b'1'),
(21, 'FORMULA 1 HEINEKEN GRANDE PRÊMIO DE SÃO PAULO 2022', 'Brasil', '2022-11-11', '2022-11-13', 'Autódromo José Carlos Pace', 'Img/Circuito/circuito_brasil.png', 'Img/bandeiras/brasil.jpg', b'1'),
(22, 'FORMULA 1 ETIHAD AIRWAYS ABU DHABI GRAND PRIX 2022', 'Abu Dhabi', '2022-11-18', '2022-11-20', 'Yas Marina Circuit', 'Img/Circuito/circuito_AbuDhabi.png', 'Img/bandeiras/abu-dhabi.jpg', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `iconic_drivers`
--

CREATE TABLE `iconic_drivers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_death` date DEFAULT NULL,
  `team` varchar(50) NOT NULL,
  `world_championship` int(3) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `visibility` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `iconic_drivers`
--

INSERT INTO `iconic_drivers` (`id`, `name`, `nationality`, `date_of_birth`, `date_of_death`, `team`, `world_championship`, `picture`, `visibility`) VALUES
(1, 'Alain Prost', 'França', '1955-02-24', NULL, 'Renault, Ferrari, McLaren e Williams', 4, 'Img/Pilotos iconicos/alainprost.webp', b'1'),
(2, 'Ayrton Senna', 'Brasil', '1960-03-21', '1994-05-01', 'Toleman, Lotus, McLaren e Williams', 3, 'Img/Pilotos iconicos/ayrton-senna.webp', b'1'),
(3, 'Michael Schumacher', 'Alemanha', '1969-01-03', NULL, 'Jordan, Benetton, Ferrari e Mercedes', 7, 'Img/Pilotos iconicos/michael-schumacher.webp', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `text`, `user_id`) VALUES
(1, 'Oficial: Tsunoda fica na AlphaTauri e há menos uma vaga na F1', 1),
(2, 'F1: Hamilton sobre reforma: \"Eu amo o que faço e não pretendo parar tão cedo\"', 1),
(3, 'Horner admite arrependimento por ter perdido a oportunidade de integrar Piastri na academia da Red Bull', 1),
(4, 'Mónaco permanece no calendário da Fórmula 1 até 2025', 1),
(5, 'Binotto admite que a Ferrari precisa de melhorar e fazer alterações para voltar aos títulos', 1),
(6, 'Horner admite arrependimento por ter perdido a oportunidade de integrar Piastri na academia da Red Bull', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `text` varchar(700) NOT NULL,
  `posted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `text`, `posted_at`, `user_id`) VALUES
(1, 'Bom tarde comunidade #F1forDummies! O que acharam do GP de Singapura?', '2022-10-02 17:23:34', 1),
(2, 'Este ano não há hipótese. O Max vai ganhar fácil!', '2022-10-01 12:40:10', 2),
(3, 'Será que o Latifi consegue levar um pontinho para casa? :D', '2022-10-01 14:30:10', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `grand_prix_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `driver_position` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `results`
--

INSERT INTO `results` (`id`, `grand_prix_id`, `driver_id`, `driver_position`) VALUES
(1, 1, 8, 1),
(2, 1, 15, 2),
(3, 1, 6, 3),
(4, 2, 19, 1),
(5, 2, 8, 2),
(6, 2, 15, 3),
(7, 3, 8, 1),
(8, 3, 12, 2),
(9, 3, 14, 3),
(10, 4, 19, 1),
(11, 4, 12, 2),
(12, 4, 10, 3),
(13, 5, 19, 1),
(14, 5, 8, 2),
(15, 5, 15, 3),
(16, 6, 8, 1),
(17, 6, 12, 2),
(18, 6, 14, 3),
(19, 7, 12, 1),
(20, 7, 15, 2),
(21, 7, 19, 3),
(22, 8, 19, 1),
(23, 8, 12, 2),
(24, 8, 14, 3),
(25, 9, 19, 1),
(26, 9, 15, 2),
(27, 9, 6, 3),
(28, 10, 15, 1),
(29, 10, 12, 2),
(30, 10, 6, 3),
(31, 11, 8, 1),
(32, 11, 19, 2),
(33, 11, 6, 3),
(34, 12, 19, 1),
(35, 12, 6, 2),
(36, 12, 14, 3),
(37, 13, 19, 1),
(38, 13, 6, 2),
(39, 13, 14, 3),
(40, 14, 19, 1),
(41, 14, 12, 2),
(42, 14, 15, 3),
(43, 15, 19, 1),
(44, 15, 14, 2),
(45, 15, 8, 3),
(46, 16, 19, 1),
(47, 16, 8, 2),
(48, 16, 14, 3),
(49, 17, 12, 1),
(50, 17, 8, 2),
(51, 17, 15, 3),
(52, 18, NULL, 1),
(53, 18, NULL, 2),
(54, 18, NULL, 3),
(55, 19, NULL, 1),
(56, 19, NULL, 2),
(57, 19, NULL, 3),
(58, 20, NULL, 1),
(59, 20, NULL, 2),
(60, 20, NULL, 3),
(61, 21, NULL, 1),
(62, 21, NULL, 2),
(63, 21, NULL, 3),
(64, 22, NULL, 1),
(65, 22, NULL, 2),
(66, 22, NULL, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `team_name` varchar(60) NOT NULL,
  `full_team_name` varchar(100) NOT NULL,
  `location` varchar(60) NOT NULL,
  `team_chief` varchar(60) NOT NULL,
  `motor` varchar(60) NOT NULL,
  `world_championships` int(3) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `car_pic` varchar(255) NOT NULL,
  `url_site` varchar(500) NOT NULL,
  `url_ig` varchar(500) NOT NULL,
  `points` int(3) NOT NULL,
  `visibility` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `teams`
--

INSERT INTO `teams` (`id`, `team_name`, `full_team_name`, `location`, `team_chief`, `motor`, `world_championships`, `logo`, `car_pic`, `url_site`, `url_ig`, `points`, `visibility`) VALUES
(1, 'Alfa Romeo', 'Alfa Romeo F1 Team ORLEN', 'Hinwil, Switzerland', 'Frédéric Vasseur', 'Ferrari', 0, 'Img/Logos_equipas/alfa_romeo.png', 'Img/Equipas_carros/AlfaRomeo.png', 'https://www.sauber-group.com/motorsport/formula-1/', 'https://www.instagram.com/alfaromeoofficial/', 52, b'1'),
(2, 'Alpha Tauri', 'Scuderia AlphaTauri', 'Faenza, Italy', 'Franz Tost', 'Red Bull Powertrains', 0, 'Img/Logos_equipas/alphatauri.jpg', 'Img/Equipas_carros/alphatauri.png', 'https://scuderia.alphatauri.com/en/', 'https://www.instagram.com/alphataurif1/', 34, b'1'),
(3, 'Alpine', 'BWT Alpine F1 Team', 'Enstone, United Kingdom', 'Otmar Szafnauer', 'Renault', 2, 'Img/Logos_equipas/alpine.jpg', 'Img/Equipas_carros/alpine.png', 'https://www.alpine-cars.co.uk/f1-news.html', 'https://www.instagram.com/alpinef1team/', 125, b'1'),
(4, 'Aston Martin', 'Aston Martin Aramco Cognizant F1 Team', 'Silverstone, United Kingdom', 'Mike Krack', 'Mercedes', 0, 'Img/Logos_equipas/aston_martin.jpg', 'Img/Equipas_carros/astonmartin.png', 'https://www.astonmartinf1.com/en-GB/', 'https://www.instagram.com/astonmartinf1/?hl=pt', 37, b'1'),
(5, 'Ferrari', 'Scuderia Ferrari', 'Maranello, Italy', 'Mattia Binotto', 'Ferrari', 16, 'Img/Logos_equipas/Ferrari.jpg', 'Img/Equipas_carros/ferrari.png', 'https://www.ferrari.com/en-PT', 'https://www.instagram.com/ferrari/', 439, b'1'),
(6, 'Haas F1 Team', 'Haas F1 Team', 'Kannapolis, United States', 'Guenther Steiner', 'Ferrari', 0, 'Img/Logos_equipas/Haas.jpg', 'Img/Equipas_carros/haas.png', 'https://www.haasf1team.com/', 'https://www.instagram.com/haasf1team/', 34, b'1'),
(7, 'McLaren', 'McLaren F1 Team', 'Woking, United Kingdom', 'Andreas Seidl', 'Mercedes', 8, 'Img/Logos_equipas/maclaren.jpg', 'Img/Equipas_carros/McLaren.png', 'https://www.mclaren.com/', 'https://www.instagram.com/mclaren/', 129, b'1'),
(8, 'Mercedes', 'Mercedes-AMG Petronas F1 Team', 'Brackley, United Kingdom', 'Toto Wolff', 'Mercedes', 8, 'Img/Logos_equipas/mercedes.jpg', 'Img/Equipas_carros/mercedes.png', 'https://www.mercedesamgf1.com/en/', 'https://www.instagram.com/mercedesamgf1/', 373, b'1'),
(9, 'Red Bull Racing', 'Oracle Red Bull Racing', 'Milton Keynes, United Kingdom', 'Chefe da Equipa: Christian Horner', 'Red Bull Powertrains', 4, 'Img/Logos_equipas/redbull_logo.jpg', 'Img/Equipas_carros/redbull.png', 'https://www.redbullracing.com/int-en', 'https://www.instagram.com/redbullracing/', 576, b'1'),
(10, 'Williams', 'Williams Racing', 'Base Grove, United Kingdom', 'Jost Capito', 'Mercedes', 9, 'Img/Logos_equipas/williams.jpg', 'Img/Equipas_carros/williams.png', 'https://www.williamsf1.com/', 'https://www.instagram.com/williamsracing/', 6, b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `visibility` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `user_type_id`, `username`, `email`, `password`, `photo`, `visibility`) VALUES
(1, 1, 'Admin', 'admin@admin.pt', '21232f297a57a5a743894a0e4a801fc3', 'admin-pic.jpg', b'1'),
(2, 2, 'Toze#14', 'user@userpt', 'ee11cbb19052e40b07aac0ca060c23ee', 'ayrton-senna.jpg', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_type`
--

CREATE TABLE `users_type` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `visibility` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users_type`
--

INSERT INTO `users_type` (`id`, `description`, `updated_at`, `visibility`) VALUES
(1, 'admin', NULL, b'1'),
(2, 'user', NULL, b'1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`);

--
-- Índices para tabela `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `grand_prix`
--
ALTER TABLE `grand_prix`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `iconic_drivers`
--
ALTER TABLE `iconic_drivers`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices para tabela `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grand_prix_id` (`grand_prix_id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Índices para tabela `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_type_id` (`user_type_id`);

--
-- Índices para tabela `users_type`
--
ALTER TABLE `users_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `grand_prix`
--
ALTER TABLE `grand_prix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `iconic_drivers`
--
ALTER TABLE `iconic_drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de tabela `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users_type`
--
ALTER TABLE `users_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Limitadores para a tabela `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`grand_prix_id`) REFERENCES `grand_prix` (`id`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`);

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `users_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
