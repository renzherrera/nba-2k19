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
<div class=" flex justify-center">
    <div class="w-11/12  p-6 rounded-lg mt-5">

        <div class="container items-center mx-auto">





        <div class="w-full  justify-center items-center">
        <h2 class="text-2xl text-gray-700 mx-12 mb-5 font-bold">Home</h2>

            <div class="container  md:flex md:flex-column   md:mx-8">

                <div class="bg-gray-100 border-blue-700 border-2 rounded-lg w-full mb-2  md:w-2/4 h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400">
                    <div class="relative flex-1 flex flex-col gap-2 px-4">
                        <label class="text-gray-800 text-base font-semibold tracking-wider">Total NBA Rosters</label>
                        <label class="text-green-800 text-4xl font-bold">{{$rostersCount}}</label>
                     
                    </div>
                   
                  
                </div>

                <div class="bg-gray-100 border-red-700 border-2  rounded-lg w-full mb-2 md:w-2/4 md:ml-4 h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400">
                <div class="relative flex-1 flex flex-col gap-2 px-4">
                        <label class="text-gray-800 text-base font-semibold tracking-wider">Total NBA Teams</label>
                        <label class="text-green-800 text-4xl font-bold">{{$teamsCount}}</label>
                       
                    </div>
                   
                  
                </div>
            </div>


            <div class="row">

                <div class="container flex flex-row gap-4 md:mx-8">
                    <div class="w-full mt-8 flex-column md:flex">

                    <div class="bg-red-800 m-2 mb-5 rounded-lg w-full md:w-1/2 h-auto py-4 flex flex-col p-8 justify-between divide-x divide-solid divide-gray-400">
                        <h1 class="text-2xl font-bold mb-2 text-white">Top 5 Field Goaler</h1>
                    
                        <div class="bg-white w-full rounded-xl shadow-xl overflow-hidden p-1 teamContainer">
                            <!-- items -->
                              @if($fieldGoaler->count())
                                  @foreach($fieldGoaler as $goaler)
                                  <div class="w-full flex p-3 pl-4 items-center hover:bg-gray-300 rounded-lg cursor-pointer">
                                      <div class="mr-4">
                                          <div class="h-9 w-9 bg-gray-700 rounded-sm flex items-center justify-center text-3xl" >
                                          <img src="https://cdn.nba.com/logos/leagues/logo-nba.svg "width="200" height="200" alt="">
                                      </div>
                      
                      
                                      </div>
                      
                                      <div class="w-full ">
                      
                                      <div class="font-bold text-lg">{{$goaler->name}}</div>
                                      <div class="text-xs text-gray-500">
                                          <span class="mr-2">{{$goaler->getTeam->name}}</span>
                      
                                      </div>
                      
                                      </div>
                                      <a href="{{route('rosters.show',$goaler->id)}}" class="float-right flex items-center my-auto font-semibold cursor-pointer rounded-lg bg-indigo-900 md:px-4 px-4 md:py-2 text-white hover:bg-indigo-800"> View</a>
                      
                                  </div>
                                  @endforeach
                              @else
                              <h1>No NBA Teams found</h1>
                              @endif
                          </div>
                       
                      
                    </div>

                    <div class="bg-indigo-900 m-2 mb-5 rounded-lg w-full md:w-1/2 h-auto py-4 flex flex-col p-8 justify-between divide-x divide-solid divide-gray-400">
                        <h1 class="text-2xl font-bold mb-2 text-white">Top 5 Three-Point Shooter</h1>
                    
                        <div class="bg-white w-full rounded-xl shadow-xl overflow-hidden p-1 teamContainer">
                            <!-- items -->
                              @if($fieldGoaler->count())
                                  @foreach($threePoint as $goaler)
                                  <div class="w-full flex p-3 pl-4 items-center hover:bg-gray-300 rounded-lg cursor-pointer">
                                      <div class="mr-4">
                                          <div class="h-9 w-9 bg-gray-700 rounded-sm flex items-center justify-center text-3xl" >
                                          <img src="https://cdn.nba.com/logos/leagues/logo-nba.svg "width="200" height="200" alt="">
                                      </div>
                      
                      
                                      </div>
                      
                                      <div class="w-full ">
                      
                                      <div class="font-bold text-lg">{{$goaler->name}}</div>
                                      <div class="text-xs text-gray-500">
                                        <span class="mr-2">{{$goaler->getTeam->name}}</span>
                      
                                      </div>
                      
                                      </div>
                                      <a href="{{route('rosters.show',$goaler->id)}}" class="float-right flex items-center my-auto font-semibold cursor-pointer rounded-lg bg-indigo-900 md:px-4 px-4 md:py-2 text-white hover:bg-indigo-800"> View</a>
                      
                                  </div>
                                  @endforeach
                              @else
                              <h1>No NBA Teams found</h1>
                              @endif
                          </div>
                       
                      
                    </div>

    
                    
                </div>

            </div>



        </div>


    




     
    </div>
</div>
@endsection