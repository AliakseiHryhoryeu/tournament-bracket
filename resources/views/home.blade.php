@extends('layout')

@section('content')
    <div class="settings">
        <div class="forms">
            <form action="{{route('addPlayer')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="forms__title">Players:</div>
                <input type="text" name="playerName" placeholder="Name"/>
                <input type="text" name="playerCity" placeholder="City"/>
                <button type="submit">Add</button>
            </form>

            <form action="{{route('addTournament')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="forms__title">Tournament:</div>
                <input type="text" name="tournamentTitle" placeholder="Title"/>
                <input type="date" name="tournamentDate" placeholder="Date"/>
                <button type="submit">Start Tournament</button>
            </form>
        </div>

        <div class="players">
            <div class="players__title">Players list:</div>

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

                    <img alt="#" src="{{secure_asset('img/cross-01.svg')}}" height="20" width="20"/>
                </div>

            </div>
            @endforeach

        </div>
    </div>
@endsection

