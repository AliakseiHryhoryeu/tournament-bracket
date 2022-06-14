/* in this project i use ClearDB (Heroku - sql) */
SET @@auto_increment_increment=1;

INSERT INTO Players (name, city)
VALUES ('Vasya-1', 'Minsk'), ('Petya-2', 'Minsk'), ('Mikhail-3', 'Grodno'),
 ('Ivan-4', 'Gomel'), ('David-5', 'Mogilev'), ('Matvei-6', 'Brest');

INSERT INTO Tournaments (title, start_date)
VALUES ('Tournament 1', '2015/07/12'),('Tournament 2', '2016/08/07'),('Tournament 3', '2017/03/25'),
('Tournament 4', '2018/09/03'), ('Tournament 5', '2019/11/09'), ('Tournament 6', '2020/12/17') ;

/* Tournament 1 */
INSERT INTO player_tournament (player_id, tournament_id)
VALUES ( 1 , 1 ),( 2 , 1 );

/* Tournament 2 */
INSERT INTO player_tournament (player_id, tournament_id)
VALUES ( 1 , 2 ),( 2 , 2 ),( 3 , 2 );

/* Tournament 3 */
INSERT INTO player_tournament (player_id, tournament_id)
VALUES ( 3 , 3 ),( 4 , 3 ),( 5 , 3 );

/* Tournament 4 */
INSERT INTO player_tournament (player_id, tournament_id)
VALUES ( 1 , 4 ),( 2 , 4 ),( 3 , 4 ),( 4 , 4 ),( 5 , 4 ),( 6 , 4 );

/* Tournament 5 */
INSERT INTO player_tournament (player_id, tournament_id)
VALUES ( 1 , 5 ),( 3 , 5 ),( 5 , 5 );

/* Tournament 6 */
INSERT INTO player_tournament (player_id, tournament_id)
VALUES ( 2 , 6 ),( 4 , 6 ),( 6 , 6 );

/* Players Tournament 1 */
INSERT INTO player_player (player1_id, player2_id, tournament_id)
VALUES ( 1 , 2 , 1 );

/* Players Tournament 2 */
INSERT INTO player_player (player1_id, player2_id, tournament_id)
VALUES ( 1 , 2 , 2 ),( 1 , 3 , 2 ),( 2 , 3 , 2 );

/* Players Tournament 3 */
INSERT INTO player_player (player1_id, player2_id, tournament_id)
VALUES ( 3 , 4 , 3 ),( 3 , 5 , 3 ),( 4 , 5 , 3 );

/* Players Tournament 4 */
INSERT INTO player_player (player1_id, player2_id, tournament_id)
VALUES ( 1 , 2 , 4 ),( 1 , 3 , 4 ),( 1 , 4 , 4),( 1 , 5 , 4 ),( 1 , 6 , 4 ),
( 2 , 3 , 4 ), ( 2 , 4 , 4 ),( 2 , 5 , 4 ),( 2 , 6 , 4 ),
( 3 , 4 , 4 ), ( 3 , 5 , 4 ),( 3 , 6 , 4 ),
( 4 , 5 , 4 ),( 4 , 6 , 4 ),
( 5 , 6 , 4 );

/* Players Tournament 5 */
INSERT INTO player_player (player1_id, player2_id, tournament_id)
VALUES ( 1 , 3 , 5 ),( 1 , 5 , 5 ),( 3 , 5 , 5 );

/* Players Tournament 6 */
INSERT INTO player_player (player1_id, player2_id, tournament_id)
VALUES ( 2 , 4 , 5 ),( 2 , 6 , 5 ),( 4 , 6 , 5 );
