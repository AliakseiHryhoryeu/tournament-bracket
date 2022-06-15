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
             onclick="location.href='{{ route('tournaments') }}'"
        >
            Back
        </div>
    </div>
    <div class="tournament">
        <div class="tournament__title">Tournament Schedule</div>
        <div class="tournament__title">{{$tournament->title}} - {{$tournament->start_date}}</div>

        @foreach($groups as $group)
            <div class="tournament__list">
                <div class="tournament__date">{{$group['date']}}</div>
                <div class="tournament__group">
                    @foreach($group['pairs'] as $pair)
                        <div class="tournament__players">{{$pair['player1']->name}} - {{$pair['player2']->name}}</div>
                    @endforeach
                </div>
            </div>

        @endforeach


    </div>

@endsection

