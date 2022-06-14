@extends('layout')

@section('content')
    <div class="settings">
        <div class="forms">
            <form action="{{route('addPlayer')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="forms__title">Участники:</div>
                <input type="text" name="playerName" placeholder="Имя участника"/>
                <input type="text" name="playerCity" placeholder="Город участника"/>
                <button type="submit">Добавить</button>
            </form>

            <form action="{{route('addTournament')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="forms__title">Турнир:</div>
                <input type="text" name="tournamentTitle" placeholder="Турнир 1"/>
                <input type="date" name="tournamentDate" placeholder="2022.01.20"/>
                <button type="submit">Начать турнир</button>
            </form>
        </div>

        <div class="players">
            <div class="players__title">Список участников:</div>

            @foreach($data as $item)

            <div class="players__player">
                <div class="players__player-data cup"
                     onclick="location.href='{{ route('playerInfo',($item->id)) }}'"
                >
                    <span>{{$item->id}}.</span>
                    <span>{{$item->name}}</span>
                    <span>{{$item->city}}</span>
                </div>
                <div class="players__player-delete"
                     onclick="location.href='{{ route('deletePlayer',($item->id)) }}'"
                >

                    <img alt="#" src="{{asset('img/cross-01.svg')}}" height="20" width="20"/>
                </div>

            </div>
            @endforeach

        </div>
    </div>
@endsection

