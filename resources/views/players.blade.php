@extends('layout')

@section('content')
    <div class="players-page__title">
        Players
    </div>
        @foreach($data as $item)
            <div class="players-page__list">
                <div class="players-page__data"
                     onclick="location.href='{{ route('playerInfo',($item->id)) }}'"
                >
                    <div class="player__id"> {{$item->id}}</div>
                    <div class="player__name">{{$item->name}}</div>
                    <div class="player__city">{{$item->city}}</div>
                </div>
                <div class="players-page__delete">
                    <img alt="#" src="{{asset('./img/cross-01.svg')}}" height="20" width="20"/>
                </div>
            </div>

    @endforeach

@endsection
