@extends('layouts.app')

@section('content')
<div class=" flex justify-center">
    <div class="w-11/12 bg-gray-100  p-6 rounded-lg mt-5">

    

        <div class="container items-center mx-auto">

        <h2 class="text-2xl text-gray-700 font-bold">NBA Teams</h2>

  <div class="w-4/6 z-50 relative mx-auto my-12">
    <form class="flex items-center mb-3" action="{{route('teams.search')}}" method="GET">
    <div class="bg-white w-10/12 h-16 rounded-xl  shadow-lg p-2">
      <input type="text" id="search" name="search" placeholder="Search" class="w-full h-full text-2xl rounded-lg focus:outline-none focus:ring focus:border-blue-300" />
    </div>
    <button type="submit" class="bg-gray-200 ml-2 w-2/12 h-16 text-gray-700 rounded-md p-2 px-4 hover:bg-gray-300">Search</button>
    </form>

    <div class="bg-white w-full rounded-xl shadow-xl overflow-hidden p-1 teamContainer">
      <!-- items -->
        @if($teams->count())
            @foreach($teams as $team)
            <div class="w-full flex p-3 pl-4 items-center hover:bg-gray-300 rounded-lg cursor-pointer">
                <div class="mr-4">
                    <div class="h-9 w-9 bg-gray-700 rounded-sm flex items-center justify-center text-3xl" >
                    <img src="https://cdn.nba.com/logos/leagues/logo-nba.svg "width="200" height="200" alt="">
                </div>


                </div>

                <div class="w-full ">

                <div class="font-bold text-lg">{{$team->name}}</div>
                <div class="text-xs text-gray-500">
                    <span class="mr-2">No: {{$team->code}}</span>

                </div>

                </div>
                <a href="#" class="float-right flex items-center my-auto font-semibold cursor-pointer rounded-lg bg-indigo-900 md:px-4 px-4 md:py-2 text-white hover:bg-indigo-800"> View</a>

            </div>
            @endforeach
        @else
        <h1>No NBA Teams found</h1>
        @endif
    </div>
  </div>



     
			</div>
	
        {{ $teams->links() }}
	</div>



     
</div>
</div>

@endsection