<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="index.css" />
		<link
			rel="shortcut icon"
			href="img/favicon-black.png"
			type="image/x-icon"
		/>
		<title>Tournament</title>
	</head>

	<body>
		<main class="main">
			<header class="header">
				<div class="wrapper920">
					<div class="header__logo">
						<a href="#" class="header__logo-link">
							<img
								alt="#"
								src="./img/favicon-white.png"
								height="20"
								width="20"
							/>
							<span>Tournament</span>
						</a>
					</div>
				</div>
			</header>
			<section class="content" id="screen1">
				<div class="wrapper920">
					<div class="settings">
						<div class="forms">
							<form action="#" method="get" enctype="multipart/form-data">
								<div class="forms__title">Участники:</div>
								<input type="text" name="players" placeholder="Имя участника" />
								<button type="submit">Добавить</button>
							</form>

							<form action="#" method="get" enctype="multipart/form-data">
								<div class="forms__title">Дата начала турнира:</div>
								<div class="forms__subtitle">
									если не указана, то начало турнира это текущая дата
								</div>
								<input type="date" name="date" placeholder="20.01.2022" />
								<button type="submit">Назначить</button>
							</form>
						</div>

						<div class="players">
							<div class="players__title">Список участников:</div>
							<div class="players__player">
								<span>Вася</span>
								<img alt="#" src="./img/cross-01.svg" height="20" width="20" />
							</div>
						</div>
					</div>
					<div class="start">
						<button id="startTournament">Начать турнир</button>
					</div>
				</div>
			</section>
			<section class="content">
				<div class="wrapper920">
					<div class="goBack" id="goBack">
						<img
							src="img/left-arrow.svg"
							alt="back-img"
							height="20"
							width="20"
						/>
						<div class="goBack__title">Назад</div>
					</div>
					<div class="tournament">
						<div class="tournament__title">Расписание турнира</div>
						<div class="tournament__list">
							<div class="tournament__date">01.01.2022</div>
							<div class="tournament__group">
								<div class="tournament__players">Player1 - Player2</div>
								<div class="tournament__players">Player3 - Player4</div>
							</div>
						</div>
						<div class="tournament__list">
							<div class="tournament__date">02.01.2022</div>
							<div class="tournament__group">
								<div class="tournament__players">Player1 - Player3</div>
								<div class="tournament__players">Player2 - Player4</div>
							</div>
						</div>
						<div class="tournament__list">
							<div class="tournament__date">03.01.2022</div>
							<div class="tournament__group">
								<div class="tournament__players">Player1 - Player4</div>
								<div class="tournament__players">Player2 - Player3</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<script src="js/translateScreen.js"></script>
		<script src="js/main.min.js"></script>
	</body>
</html>
