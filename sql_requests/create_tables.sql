/* in this project i use ClearDB (Heroku - sql) */
SET @@auto_increment_increment=1;

CREATE TABLE Players(
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
name varchar(255) NOT NULL,
city varchar(255) NOT NULL
);

CREATE TABLE Tournaments(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title varchar(255) NOT NULL,
start_date date NOT NULL
);

CREATE TABLE player_tournament(
id INT NOT NULL AUTO_INCREMENT,
player_id INT NOT NULL,
tournament_id INT NOT NULL,

PRIMARY KEY (id),
FOREIGN KEY (player_id) REFERENCES Players(id),
FOREIGN KEY (tournament_id) REFERENCES Tournaments(id)
);

CREATE TABLE player_player(
id INT NOT NULL AUTO_INCREMENT,
player1_id INT NOT NULL,
player2_id INT NOT NULL,
tournament_id INT NOT NULL,

PRIMARY KEY (id),
FOREIGN KEY (player1_id) REFERENCES Players(id),
FOREIGN KEY (player2_id) REFERENCES Players(id),
FOREIGN KEY (tournament_id) REFERENCES Tournaments(id)
);
