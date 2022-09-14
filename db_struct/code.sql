DROP Table if EXISTS pilotos;

CREATE TABLE pilotos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    primeiro_nome VARCHAR (50),
    segundo_nome VARCHAR (50),
    pic_nacionalidade VARCHAR (255),
    logo VARCHAR (255),
    pontos INT
);

INSERT INTO pilotos(primeiro_nome, segundo_nome, pic_nacionalidade, logo, pontos) VALUES
('Max', 'Verstappen', 'holanda.gif','oracle-red-bull-racing-logo.png','335'),
('Daniel', 'Ricciardo', 'Australia.jpg', 'maclaren.jpg', '19' ),
('Charles', ('Leclerc'), 'Monaco.jpg', 'Ferrari.jpg', '219');
