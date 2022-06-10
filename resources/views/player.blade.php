@extends('layout')

@section('content')
    <div class="goBack" id="goBack">
        <img
            src="{{asset('img/left-arrow.svg')}}"
            alt="back-img"
            height="20"
            width="20"
        />
        <div class="goBack__title"
             onclick="location.href='{{ route('players') }}'"
        >
            Назад
        </div>
    </div>
    <div class="forms">
        <form action="{{route('editPlayer',($data->id))}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="forms__title">Редактирование игрока:</div>
            <label for="playerName">Player name</label>
            <input type="text" name="playerName" value="{{$data->name}}" placeholder="player name"/>
            <label for="playerCity">Player city</label>
            <input type="text" name="playerCity" value="{{$data->city}}" placeholder="player city"/>
            <button type="submit">Редактировать</button>
        </form>
    </div>
@endsection

