SELECT tour.title, pl.name
FROM player_tournament pltour
INNER JOIN tournaments tour ON pltour.tournament_id=tour.id 
INNER JOIN players pl ON pltour.player_id=pl.id;


