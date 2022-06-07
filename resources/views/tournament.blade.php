@extends('layout')

@section('content')
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

@endsection


