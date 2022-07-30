@extends('layouts.app')

@section('content')
<style>
    @media (min-width: 640px) {
    table {
      display: inline-table !important;
    }

    thead tr:not(:first-child) {
      display: none;
    }
  }

  td:not(:last-child) {
    border-bottom: 0;
  }

  th:not(:last-child) {
    border-bottom: 2px solid rgba(0, 0, 0, .1);
  }
</style>
<div class=" md:flex flex-column justify-center">
    <div class="w-full md:w-5/12 bg-white mx-4  p-6 rounded-lg mt-5">

          <h1 class="text-lg font-bold">Player Profile</h1>
      
            <div class="flex flex-col gap-1 text-center items-center">
                <img class="h-32 w-32 bg-white p-2 rounded-full shadow mb-4" src="https://media.istockphoto.com/vectors/default-avatar-profile-icon-grey-photo-placeholder-hand-drawn-modern-vector-id1273297967?k=20&m=1273297967&s=170667a&w=0&h=Iqo2x8teHMYPDg1OWFuPJOr6xBAFRLtJyIdTBPcLW7k=&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2000&amp;q=80" alt="">
                <p class="font-bold text-5xl">{{$roster->name}}</p>
                <div class="text-xl leading-normal text-gray-600 flex justify-center items-center">
                {{$roster->pos}}
                </div>
                <div class="text-xl leading-normal text-gray-600 flex justify-center items-center">
                {{$roster->getTeam->name}}
                </div>
                <p class="text-lg leading-normal text-gray-400 flex justify-center items-center">Age: {{$roster->getStatistic->age}}</p>
               
                <div class="text-lg leading-normal text-gray-400 flex justify-center items-center">
                <svg viewBox="0 0 24 24" class="mr-1" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                {{$roster->college}}
                </div>

               
            </div>
            <div class="flex justify-center items-center gap-6 my-6 ">
                <div class="font-semibold text-center mx-4">
                    <p class="text-black text-2xl">{{$roster->number}}</p>
                    <span class="text-gray-400">Number</span>
                </div>
                <div class="font-semibold text-center mx-4">
                    <p class="text-black text-2xl">{{$roster->height}}</p>
                    <span class="text-gray-400">Height</span>
                </div>
                <div class="font-semibold text-center mx-4">
                    <p class="text-black text-2xl">{{$roster->weight}}<span class="text-md text-gray-600"><small>lb</small></span></p>
                    <span class="text-gray-400">Weight</span>
                </div>
            </div>


     
    </div>

    <div class="w-full md:w-5/12  bg-white mx-4 p-6 rounded-lg mt-5">

        <h1 class="text-lg font-bold">Statistics | Player Totals</h1>
        <div class="my-auto flex flex-col justify-content-center mt-5 items-center">
            <div class="flex flex-col gap-1 my-auto text-center items-center">
                <div class="flex justify-center items-center gap-6 my-3">
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->assists}}</p>
                    <span class="text-gray-400">Assists</span>
                </div>
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->steals}}</p>
                    <span class="text-gray-400">Steals</span>
                </div>
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->blocks}}</p>
                    <span class="text-gray-400">Blocks</span>
                </div>
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->turnovers}}</p>
                    <span class="text-gray-400">Turnovers</span>
                </div>
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->personal_fouls}}</p>
                    <span class="text-gray-400">Personal Fouls</span>
                </div>
            </div>
               
            </div>
            <div class="flex justify-center items-center gap-6 my-3">
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->t2pt_attempted}}</p>
                    <span class="text-gray-400">2-Points Attempted</span>
                </div>
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->t2pt}}</p>
                    <span class="text-gray-400">2-Points Total </span>
                </div>
                @php 
                $twoPoint = $roster->getStatistic->t2pt;
                $twoPointAttempted = $roster->getStatistic->t2pt_attempted;
                $averageTwoPoint = number_format(100 * ($twoPoint / $twoPointAttempted),2) ;
                @endphp
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$averageTwoPoint}}%</p>
                    <span class="text-gray-400">2-Point Average </span>
                </div>
            </div>

            <div class="flex justify-center items-center gap-6 my-3">
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->t3pt_attempted}}</p>
                    <span class="text-gray-400">3-Points Attempted</span>
                </div>
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->t3pt}}</p>
                    <span class="text-gray-400">3-Points Total </span>
                </div>
                @php 
                $ThreePoint = $roster->getStatistic->t3pt;
                $ThreePointAttempted = $roster->getStatistic->t3pt_attempted;
                $averageThreePoint = number_format(100 * ($ThreePoint / $ThreePointAttempted),2) ;
                @endphp
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$averageThreePoint}}%</p>
                    <span class="text-gray-400">3-Point Average </span>
                </div>
            </div>

            <div class="flex justify-center items-center gap-6 my-3">
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->free_throws_attempted}}</p>
                    <span class="text-gray-400">Free Throws Attempted</span>
                </div>
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->free_throws}}</p>
                    <span class="text-gray-400">Free Throws Total </span>
                </div>
                @php 
                $freeThrow = $roster->getStatistic->free_throws;
                $freeThrowAttempted = $roster->getStatistic->free_throws_attempted;
                $averageFreethrow = number_format(100 * ($freeThrow / $freeThrowAttempted),2) ;
                @endphp
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$averageFreethrow}}%</p>
                    <span class="text-gray-400">Free Throws Average </span>
                </div>
            </div>

            <div class="flex justify-center items-center gap-6 my-3">
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->field_goals_attempted}}</p>
                    <span class="text-gray-400">Field Goals Attempted</span>
                </div>
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->field_goals}}</p>
                    <span class="text-gray-400">Field Goals Total </span>
                </div>
                @php 
                $fieldGoals = $roster->getStatistic->field_goals;
                $fieldGoalsAttempted = $roster->getStatistic->field_goals_attempted;
                $averageFieldGoals = number_format(100 * ($fieldGoals / $fieldGoalsAttempted),2) ;
                @endphp
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$averageFieldGoals}}%</p>
                    <span class="text-gray-400">Field Goals Average </span>
                </div>
            </div>

            <div class="flex justify-center items-center gap-6 my-3">
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->games}}</p>
                    <span class="text-gray-400">Games</span>
                </div>
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->games_started}}</p>
                    <span class="text-gray-400">Games Started</span>
                </div>
                <div class="font-semibold text-center mx-4">
                    <p class=" p-2 rounded bg-indigo-800 text-white">{{$roster->getStatistic->minutes_played}}</p>
                    <span class="text-gray-400">Minutes Played</span>
                </div>
            </div>

           
            </div>
    </div>
</div>
@endsection