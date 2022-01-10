@extends('layouts.app')
@section('mytitle', 'Home')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Lolita's Zociac predictions for 2022 </h1>
                <?php
                $zodiacScore = 0;
                $zodiacArr = [];
                $zodiacId = 1;
                foreach ($ratings as $rating) {
                    switch ($zodiacId) {
                        case $rating->zodiac_id == $zodiacId && $rating->day <= 365:
                            $zodiacScore += $rating->rating;
                            if ($rating->day == 365) {
                                $zodiacArr[] = [$rating->zodiac_id => $zodiacScore];
                                $zodiacScore = 0;
                                $zodiacId++;
                            }
                    }
                }
                
                $zodiacArr2 = call_user_func_array('array_merge', $zodiacArr);
                $maxs = array_keys($zodiacArr2, max($zodiacArr2));
                $maxs = implode('', $maxs) + 1;
                
                ?>
                @foreach ($zodiacs as $zodiac)
                    @if ($zodiac->id == $maxs)
                        <h2 class="mt-3 mb-3">2022 is the best year for <b>{{ $zodiac->name }}</b> </h2>
                    @endif
                @endforeach

                @foreach ($zodiacs as $zodiac)

                    <div class="card mt-2 mb-2">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body ">

                            <h5 class="card-title">{{ $zodiac->name }}</h5>
                            <p class="card-text"></p>
                            <a href="{{ route('zodiac_show', $zodiac) }}" class="btn btn-info m-2">Your prediction for
                                2022</a>
                        </div>
                    </div>
                @endforeach





            </div>
        </div>

    @endsection
