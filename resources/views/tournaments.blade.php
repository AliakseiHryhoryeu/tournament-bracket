@extends('layout')

@section('content')
    <div class="tournaments-page__title">
        Tournaments
    </div>
    @foreach($data as $item)
        <div class="tournaments-page__list">
        <div class="tournaments-page__data сup"
             onclick="location.href='{{ route('tournamentInfo',($item->id)) }}'"
        >
            <div class="tournaments__id">{{$item->id}}</div>
            <div class="tournaments__name">{{$item->title}}</div>
            <div class="tournaments__city"> {{$item->start_date}}</div>
        </div>
        <div class="tournaments__delete cup"
             onclick="location.href='{{ route('deleteTournament',($item->id)) }}'"
        >
            <img alt="#" src="{{asset('./img/cross-01.svg')}}" height="20" width="20"/>
        </div>
    </div>
    @endforeach
@endsection
