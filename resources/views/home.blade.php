@extends('layout')

@section('content')
			<section class="content" id="screen1">
				<div class="wrapper920">
					<div class="settings">
                        @if($errors->any())
                            <div class="alert">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>

                        @endif

						<div class="forms">
							<form action="{{route('addPlayer')}}" method="post" enctype="multipart/form-data">
                                @csrf
								<div class="forms__title">Участники:</div>
                                <input type="text" name="playersName" placeholder="Имя участника" />
                                <input type="text" name="playersCity" placeholder="Город участника" />
								<button type="submit">Добавить</button>
							</form>

							<form action="{{route('addDate')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="forms__title">Дата начала турнира:</div>
								<div class="forms__subtitle">
									если не указана, то начало турнира это текущая дата
								</div>
								<input type="date" name="date"  placeholder="2022.01.20" />
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
@endsection

@section('scripts')

    <script type="text/javascript" src="{{asset('js/translateScreen.js')}}"></script>
@endsection


