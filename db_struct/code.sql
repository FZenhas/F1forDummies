DROP TABLE if EXISTS results;

DROP TABLE if EXISTS team_standings;

DROP TABLE if EXISTS driver_standings;

DROP TABLE if EXISTS races;

DROP TABLE if EXISTS drivers;

DROP TABLE if EXISTS grand_prix;

DROP TABLE if EXISTS teams;

DROP TABLE if EXISTS iconic_drivers;

DROP TABLE IF EXISTS `users`;
DROP TABLE IF EXISTS users_type;

DROP TABLE IF EXISTS news;

CREATE TABLE news (
id INT PRIMARY KEY AUTO_INCREMENT,
text VARCHAR(255)
);

INSERT INTO news(text) VALUES
('Oficial: Tsunoda fica na AlphaTauri e há menos uma vaga na F1'),
('F1: Hamilton sobre reforma: "Eu amo o que faço e não pretendo parar tão cedo"'),
('Horner admite arrependimento por ter perdido a oportunidade de integrar Piastri na academia da Red Bull'),
('Mónaco permanece no calendário da Fórmula 1 até 2025'),
('Binotto admite que a Ferrari precisa de melhorar e fazer alterações para voltar aos títulos'),
('Horner admite arrependimento por ter perdido a oportunidade de integrar Piastri na academia da Red Bull');


CREATE TABLE users_type(
    id INT PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(255)
);

INSERT INTO users_type (description) VALUES
    ('admin'),
    ('user');

CREATE TABLE `users`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_type_id INT,
    FOREIGN KEY (user_type_id) REFERENCES users_type(id),
    username VARCHAR(100) UNIQUE,
    email VARCHAR(255),
    password VARCHAR(100),
    photo VARCHAR(255),
    visibility BIT DEFAULT 1
);

INSERT INTO `users`(username, email, password, user_type_id) VALUES
    ('admin', 'admin@admin.pt',MD5('admin'), 1),
    ('user', 'user@userpt', MD5('user'), 2);
CREATE TABLE iconic_drivers(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(60) NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    date_of_birth date NOT NULL,
    date_of_death date,
    team VARCHAR(50) NOT NULL,
    world_championship INT (3) NOT NULL,
    picture VARCHAR(255) NOT NULL,
    visibility BIT DEFAULT 1

);

INSERT INTO iconic_drivers(name, nationality, date_of_birth, date_of_death, team, world_championship, picture) VALUES
('Alain Prost', 'França', '1955-02-24', NULL, 'Renault, Ferrari, McLaren e Williams', '4', 'Img/Pilotos iconicos/alainprost.webp'),
('Ayrton Senna', 'Brasil', '1960-03-21', '1994-05-01', 'Toleman, Lotus, McLaren e Williams', '3', 'Img/Pilotos iconicos/ayrton-senna.webp'),
('Michael Schumacher', 'Alemanha', '1969-01-03', NULL, 'Jordan, Benetton, Ferrari e Mercedes', '7', 'Img/Pilotos iconicos/michael-schumacher.webp');

CREATE TABLE teams(
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_name VARCHAR(60) NOT NULL,
    full_team_name VARCHAR(100) NOT NULL,
    location VARCHAR(60) NOT NULL,
    team_chief VARCHAR(60) NOT NULL,
    motor VARCHAR(60) NOT NULL,
    world_championships INT (3) NOT NULL,
    logo VARCHAR(255) NOT NULL,
    car_pic VARCHAR(255) NOT NULL,
    url_site VARCHAR (500) NOT NULL,
    url_ig VARCHAR(500) NOT NULL,
    points INT(3) NOT NULL,
    visibility BIT DEFAULT 1
);

INSERT INTO teams(team_name, full_team_name, location, team_chief, motor, world_championships, logo, car_pic, url_site, url_ig, points) VALUES
('Alfa Romeo', 'Alfa Romeo F1 Team ORLEN', 'Hinwil, Switzerland', 'Frédéric Vasseur', 'Ferrari', '0', 'Img/Logos_equipas/alfa_romeo.png', 'Img/Equipas_carros/AlfaRomeo.png', 'https://www.sauber-group.com/motorsport/formula-1/', 'https://www.instagram.com/alfaromeoofficial/', '52'),
('Alpha Tauri', 'Scuderia AlphaTauri', 'Faenza, Italy', 'Franz Tost', 'Red Bull Powertrains','0', 'Img/Logos_equipas/alphatauri.jpg', 'Img/Equipas_carros/alphatauri.png', 'https://scuderia.alphatauri.com/en/', 'https://www.instagram.com/alphataurif1/', '33'),
('Alpine', 'BWT Alpine F1 Team', 'Enstone, United Kingdom', 'Otmar Szafnauer','Renault', '2', 'Img/Logos_equipas/alpine.jpg', 'Img/Equipas_carros/alpine.png', 'https://www.alpine-cars.co.uk/f1-news.html', 'https://www.instagram.com/alpinef1team/', '125'),
('Aston Martin', 'Aston Martin Aramco Cognizant F1 Team', 'Silverstone, United Kingdom', 'Mike Krack', 'Mercedes', '0', 'Img/Logos_equipas/aston_martin.jpg', 'Img/Equipas_carros/astonmartin.png', 'https://www.astonmartinf1.com/en-GB/', 'https://www.instagram.com/astonmartinf1/?hl=pt', '25'),
('Ferrari', 'Scuderia Ferrari', 'Maranello, Italy', 'Mattia Binotto', 'Ferrari', '16', 'Img/Logos_equipas/Ferrari.jpg', 'Img/Equipas_carros/ferrari.png', 'https://www.ferrari.com/en-PT', 'https://www.instagram.com/ferrari/', '406'),
('Haas F1 Team', 'Haas F1 Team', 'Kannapolis, United States', 'Guenther Steiner', 'Ferrari', '0', 'Img/Logos_equipas/Haas.jpg', 'Img/Equipas_carros/haas.png', 'https://www.haasf1team.com/', 'https://www.instagram.com/haasf1team/', '34'),
('McLaren', 'McLaren F1 Team', 'Woking, United Kingdom', 'Andreas Seidl', 'Mercedes', '8', 'Img/Logos_equipas/maclaren.jpg', 'Img/Equipas_carros/McLaren.png', 'https://www.mclaren.com/', 'https://www.instagram.com/mclaren/', '107'),
('Mercedes', 'Mercedes-AMG Petronas F1 Team', 'Brackley, United Kingdom', 'Toto Wolff', 'Mercedes', '8', 'Img/Logos_equipas/mercedes.jpg', 'Img/Equipas_carros/mercedes.png', 'https://www.mercedesamgf1.com/en/', 'https://www.instagram.com/mercedesamgf1/', '371'),
('Red Bull Racing', 'Oracle Red Bull Racing', 'Milton Keynes, United Kingdom', 'Chefe da Equipa: Christian Horner','Red Bull Powertrains', '4', 'Img/Logos_equipas/redbull_logo.jpg', 'Img/Equipas_carros/redbull.png', 'https://www.redbullracing.com/int-en', 'https://www.instagram.com/redbullracing/', '545'),
('Williams', 'Williams Racing', 'Base Grove, United Kingdom', 'Jost Capito', 'Mercedes', '9', 'Img/Logos_equipas/williams.jpg', 'Img/Equipas_carros/williams.png', 'https://www.williamsf1.com/', 'https://www.instagram.com/williamsracing/', '6');


CREATE TABLE grand_prix(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    country VARCHAR(60) NOT NULL,
    start_date DATE NOT NULL,
    end_date Date NOT NULL,
    circuit VARCHAR (255) NOT NULL,
    circuit_image VARCHAR (255) NOT NULL,
    country_image VARCHAR (255),
    visibility BIT DEFAULT 1

);

INSERT into grand_prix(name, country, start_date, end_date, circuit, circuit_image, country_image) VALUES
('FORMULA 1 GULF AIR BAHRAIN GRAND PRIX 2022', 'Bahrain', '2022-03-18', '2022-03-20','Bahrain International Circuit', 'Img/Circuito/circuito_bahrain.png', 'Img/bandeiras/bahrain.jpg'),
('FORMULA 1 STC SAUDI ARABIAN GRAND PRIX 2022', 'Arábia Saudita', '2022-03-25', '2022-03-27', 'Jeddah Corniche Circuit', 'Img/Circuito/circuito_saudi_arabia.png', 'Img/bandeiras/saudi-arabia.jpg'),
('FORMULA 1 HEINEKEN AUSTRALIAN GRAND PRIX 2022, Australia 2022', 'Australia', '2022-04-08', '2022-04-10', 'Albert Park Circuit', 'Img/Circuito/cuicuito_australia.png', 'Img/bandeiras/Australia.jpg'),
('FORMULA 1 ROLEX GRAN PREMIO DEL MADE IN ITALY E DELL EMILIA-ROMAGNA 2022', 'Itália', '2022-04-22', '2022-04-24', 'Imola or Autodromo Enzo e Dino Ferrari', 'Img/Circuito/circuito_Italy.png', 'Img/bandeiras/italia.jpg'),
('FORMULA 1 CRYPTO.COM MIAMI GRAND PRIX 2022', 'EUA', '2022-05-06', '2022-05-08', 'Miami International Autodrome', 'Img/Circuito/circuito_Miami.png', 'Img/bandeiras/EUA.jpg'),
('FORMULA 1 PIRELLI GRAN PREMIO DE ESPAÑA 2022', 'Espanha', '2022-05-20', '2022-05-22', 'Circuit de Barcelona-Catalunya', 'Img/Circuito/circuito_Espanha.png', 'Img/bandeiras/Espanha.jpg'),
('FORMULA 1 GRAND PRIX DE MONACO 2022', 'Mónaco', '2022-05-27', '2022-05-29', 'Circuit de Monaco', 'Img/Circuito/circuito_monaco.png', 'Img/bandeiras/Monaco.jpg'),
('FORMULA 1 AZERBAIJAN GRAND PRIX 2022', 'Azerbeijão', '2022-06-10', '2022-06-12', 'Baku City Circuit', 'Img/Circuito/circuito_azerbaijao.png', 'Img/bandeiras/azerbaijao.jpg'),
('FORMULA 1 AWS GRAND PRIX DU CANADA 2022', 'Canada', '2022-06-17', '2022-06-19', 'Circuit Gilles-Villeneuve', 'Img/Circuito/circuito_canada.png', 'Img/bandeiras/Canada.jpg'),
('FORMULA 1 LENOVO BRITISH GRAND PRIX 2022', 'Reino Unido', '2022-07-01', '2022-07-03', 'Silverstone Circuit', 'Img/Circuito/circuito_GB.png', 'Img/bandeiras/UK.jpg'),
('FORMULA 1 ROLEX GROSSER PREIS VON ÖSTERREICH 2022', 'Áustria', '2022-07-08', '2022-07-10', 'Red Bull Ring', 'Img/Circuito/circuito_Austria.png', 'Img/bandeiras/austria.gif'),
('FORMULA 1 LENOVO GRAND PRIX DE FRANCE 2022', 'França', '2022-07-22', '2022-07-24', 'França', 'Img/Circuito/circuito_Franca.png', 'Img/bandeiras/Franca.gif'),
('FORMULA 1 ARAMCO MAGYAR NAGYDÍJ 2022', 'Hungria', '2022-07-29', '2022-07-31', 'Hungaroring', 'Img/Circuito/circuito_Hungria.png', 'Img/bandeiras/hungria.gif'),
('FORMULA 1 ROLEX BELGIAN GRAND PRIX 2022', 'Bélgica', '2022-08-26', '2022-08-28', 'Circuit de Spa-Francorchamps', 'Img/Circuito/circuito_Belgica.png', 'Img/bandeiras/belgica.jpg'),
('FORMULA 1 HEINEKEN DUTCH GRAND PRIX 2022', 'Países Baixos', '2022-09-02', '2022-09-04', 'Circuit Zandvoort', 'Img/Circuito/circuito_Holanda.png', 'Img/bandeiras/holanda.gif'),
("FORMULA 1 PIRELLI GRAN PREMIO D'ITALIA 2022", 'Itália', '2022-09-09', '2022-09-11', 'Autodromo Nazionale Monza', 'Img/Circuito/circuito_MonzaIt.png', 'Img/bandeiras/italia.jpg'),
('FORMULA 1 SINGAPORE AIRLINES SINGAPORE GRAND PRIX 2022', 'Singapura', '2022-09-30', '2022-10-02', 'Marina Bay Street Circuit', 'Img/Circuito/circuito_Singapura.png', 'Img/bandeiras/singapura.png'),
('FORMULA 1 HONDA JAPANESE GRAND PRIX 2022', 'Japão', '2022-10-07', '2022-10-09', 'Suzuka International Racing Course', 'Img/Circuito/circuito_Japao.png', 'Img/bandeiras/Japao.jpg'),
('FORMULA 1 ARAMCO UNITED STATES GRAND PRIX 2022', 'EUA', '2022-10-21', '2022-10-23', 'Circuit of The Americas', 'Img/Circuito/circuito_USA_Austin.png', 'Img/bandeiras/EUA.jpg'),
('FORMULA 1 GRAN PREMIO DE LA CIUDAD DE MÉXICO 2022', 'Mexico', '2022-10-28', '2022-10-30', 'Autódromo Hermanos Rodríguez', 'Img/Circuito/circuito_Mexico.png', 'Img/bandeiras/Mexico.gif'),
('FORMULA 1 HEINEKEN GRANDE PRÊMIO DE SÃO PAULO 2022', 'Brasil', '2022-11-11', '2022-11-13', 'Autódromo José Carlos Pace', 'Img/Circuito/circuito_brasil.png', 'Img/bandeiras/brasil.jpg'),
('FORMULA 1 ETIHAD AIRWAYS ABU DHABI GRAND PRIX 2022', 'Abu Dhabi', '2022-11-18', '2022-11-20', 'Yas Marina Circuit', 'Img/Circuito/circuito_AbuDhabi.png', 'Img/bandeiras/abu-dhabi.jpg');

CREATE TABLE drivers(
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id INT,
    FOREIGN KEY (team_id) REFERENCES teams(id),
    driver_name VARCHAR(60) NOT NULL,
    number INT (3) NOT NULL,
    date_of_birth DATE NOT NULL,
    nationality VARCHAR(60) NOT NULL,
    nationality_pic VARCHAR(255) NOT NULL,
    world_championship INT (2) NOT NULL,
    curiosity VARCHAR (1000) NOT NULL,
    url_ig VARCHAR(500) NOT NULL,
    picture VARCHAR(255) NOT NULL,
    points INT(3) NOT NULL,
    visibility BIT DEFAULT 1
);

INSERT INTO drivers (team_id, driver_name, number, date_of_birth, nationality, nationality_pic, world_championship, curiosity, url_ig, picture, points) VALUES
('10', 'Alexander Albon', '23', '1996-03-23', 'Tailândia', 'Img/bandeiras/Tailandia.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/alex_albon/', 'Img/Pilotos/Alex-Albon.jpg', '4'),
('3', 'Fernando Alonso', '14', '1981.07.29', 'Espanha', 'Img/bandeiras/Espanha.jpg', '2', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/fernandoalo_oficial/', 'Img/Pilotos/Fernando-Alonso.jpg', '59'),
('1', 'Valtteri Bottas', '77', '1989-08-28', 'Finlândia', 'Img/bandeiras/Finlandia.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/valtteribottas/', 'Img/Pilotos/Valtteri-Bottas-02.jpg', '46'),
('2', 'Pierre Gasly', '10', '1996.07.02', 'França', 'Img/bandeiras/Franca.gif','0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/pierregasly/', 'Img/Pilotos/pierre-gasly.jpeg', '22'),
('1', 'Zhou Guanyu', '24', '1999-05-30', 'China', 'Img/bandeiras/China.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/zhouguanyu24/', 'Img/Pilotos/guanyu-Zhou.jpg', '6'),
('8', 'Lewis Hamilton', '44', '1985-01-07', 'Reino Unido', 'Img/bandeiras/UK.jpg', '7', 'Hamilton nunca usou o número 1. "O meu numero de corridas aos oito anos era 44. Mesmo sendo o número um, mantive o 44", explica Hamilton', 'https://www.instagram.com/lewishamilton/', 'Img/Pilotos/Lewis-Hamilton.jpg', '168'),
('10', 'Nicholas Latifi', '6', '1995-06-29', 'Canada', 'Img/bandeiras/Canada.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/nicholaslatifi/', 'Img/Pilotos/Nicholas_Lafiti.jpg', '0'),
('5', 'Charles Leclerc', '16', '1997-10-16', 'Mónaco', 'Img/bandeiras/Monaco.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/charles_leclerc/', 'Img/Pilotos/leclerc.jpg', '219'),
('6', 'Kevin Magnussen', '20', '1992-05-10', 'Dinamarca', 'Img/bandeiras/Dinamarca.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/kevinmagnussen/', 'Img/Pilotos/Kevin-Magnussen_.jpg', '22'),
('7', 'Lando Norris', '4', '1999-11-13', 'Reino Unido', 'Img/bandeiras/UK.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/landonorris/', 'Img/Pilotos/lando-norris.jpg', '88'),
('3', 'Esteban Ocon', '31', '1996-09-17', 'França', 'Img/bandeiras/Franca.gif', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/estebanocon/', 'Img/Pilotos/Esteban-Ocon.jpg', '66'),
('9', 'Sergio Perez', '11', '1990-06-01', 'México', 'Img/bandeiras/Mexico.gif', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/schecoperez/', 'Img/Pilotos/sergio-perez-.jpg', '210'),
('7', 'Daniel Ricciardo', '3', '1989-07-01', 'Austrália', 'Img/bandeiras/Australia.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/danielricciardo/', 'Img/Pilotos/Daniel-Ricciardo.jpg', '19'),
('8', 'George Russell', '63', '1998-02-15', 'Reino Unido', 'Img/bandeiras/UK.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/georgerussell63/', 'Img/Pilotos/George-Russell.png', '203'),
('5', 'Carlos Sainz', '55', '1994-09-01', 'Espanha', 'Img/bandeiras/Espanha.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/carlossainz55/', 'Img/Pilotos/Carlos-Sainz.jpg', '187'),
('6', 'Mick Schumacher', '47', '1999-03-22', 'Alemanha', 'Img/bandeiras/Alemanha.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/mickschumacher/', 'Img/Pilotos/Mick-Schumacher-.jpg', '12'),
('4', 'Lance Stroll', '18', '1998-10-29', 'Canada', 'Img/bandeiras/Canada.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/lance_stroll/channel/', 'Img/Pilotos/lance-stroll.webp', '5'),
('2', 'Yuki Tsunoda', '22', '2000-05-11', 'Japão', 'Img/bandeiras/Japao.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/yukitsunoda0511/', 'Img/Pilotos/tsunoda.jpg', '11'),
('9', 'Max Verstappen', '1', '1997-09-30', 'Países Baixos', 'Img/bandeiras/holanda.gif', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/maxverstappen1/', 'Img/Pilotos/verstappen1.jpg', '335'),
('4', 'Sebastian Vettel', '5', '1987-07-03', 'Alemanha', 'Img/bandeiras/Alemanha.jpg', '4', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, cupiditate?', 'https://www.instagram.com/sebastianvettel/', 'Img/Pilotos/Sebastian-vettel.png', '20');


CREATE TABLE results(
    id INT AUTO_INCREMENT PRIMARY KEY,
    grand_prix_id INT, FOREIGN KEY (grand_prix_id) REFERENCES grand_prix(id),
    driver_id INT, FOREIGN KEY (driver_id) REFERENCES drivers(id),
    driver_position INT(2)
);

INSERT INTO results(grand_prix_id,driver_id, driver_position) VALUES
('1', '8', '1'),
('1', '15', '2'),
('1', '6', '3'),
('2', '19', '1'),
('2', '8', '2'),
('2', '15', '3'),
('3', '8', '1'),
('3', '12', '2'),
('3', '14', '3'),
('4', '19', '1'),
('4', '12', '2'),
('4', '10', '3'),
('5', '19', '1'),
('5', '8', '2'),
('5', '15', '3'),
('6', '8', '1'),
('6', '12', '2'),
('6', '14', '3'),
('7', '12', '1'),
('7', '15', '2'),
('7', '19', '3'),
('8', '19', '1'),
('8', '12', '2'),
('8', '14', '3'),
('9', '19', '1'),
('9', '15', '2'),
('9', '6', '3'),
('10', '15', '1'),
('10', '12', '2'),
('10', '6', '3'),
('11', '8', '1'),
('11', '19', '2'),
('11', '6', '3'),
('12', '19', '1'),
('12', '6', '2'),
('12', '14','3'),
('13', '19', '1'),
('13', '6', '2'),
('13', '14', '3'),
('14', '19', '1'),
('14', '12', '2'),
('14', '15', '3'),
('15', '19', '1'),
('15', '14', '2'),
('15', '8', '3'),
('16', '19', '1'),
('16', '8', '2'),
('16', '14', '3'),
('17',NULL,'0'),
('17',NULL,'0'),
('17',NULL,'0'),
('18',NULL,'0'),
('18',NULL,'0'),
('18',NULL,'0'),
('19',NULL,'0'),
('19',NULL,'0'),
('19',NULL,'0'),
('20',NULL,'0'),
('20',NULL,'0'),
('20',NULL,'0'),
('21',NULL,'0'),
('21',NULL,'0'),
('21',NULL,'0'),
('22',NULL,'0'),
('22',NULL,'0'),
('22',NULL,'0');