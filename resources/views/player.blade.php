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
            Back
        </div>
    </div>
    <div class="forms">
        <form action="{{route('editPlayer',($data->id))}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="forms__title">Edit player:</div>
            <label for="playerName">New name</label>
            <input type="text" name="playerName" value="{{$data->name}}" placeholder="Name"/>
            <label for="playerCity">New city</label>
            <input type="text" name="playerCity" value="{{$data->city}}" placeholder="City"/>
            <button type="submit">Edit</button>
        </form>
    </div>
@endsection

