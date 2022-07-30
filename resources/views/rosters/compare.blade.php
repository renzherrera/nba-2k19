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





        <div class="w-full  justify-center items-center text-gray-700">
        <h2 class="text-3xl text-gray-700 mx-5 font-bold">COMPARE</h2>


            <div class="row mx-auto">

                <div class="container flex flex-row gap-4 ">
                    <div class="w-full mt-8 flex md:flex">

                    <div class="bg-white shadow-md m-2 flex mb-5 rounded-lg w-full md:w-1/2 h-auto py-4 flex flex-col p-8 justify-between ">
                        <h1 class="text-2xl font-bold mb-2 text-gray-700">Roster 1</h1>
                        <div class="p-2 my-3">
                                <div class="relative mt-1">
                                    <select type="text" id="player1"  name="player" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                                        <option value="">Select Player 1</option>
                                    @foreach ($rosters as $roster)
                                        <option value="{{$roster->id}}">{{$roster->name}}</option>
                                    @endforeach
                                    </select>
                            </div>
                        </div>

                     <div class="flex flex-col gap-1 text-center items-center">
                        {{-- <img class="h-32 w-32 bg-white p-2 rounded-full shadow mb-4" src="https://media.istockphoto.com/vectors/default-avatar-profile-icon-grey-photo-placeholder-hand-drawn-modern-vector-id1273297967?k=20&m=1273297967&s=170667a&w=0&h=Iqo2x8teHMYPDg1OWFuPJOr6xBAFRLtJyIdTBPcLW7k=&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2000&amp;q=80" alt=""> --}}
                        <p class="font-bold text-3xl player1Name" id="player1Name">--</p>
                        <div id="player1Position" class="text-xl leading-normal text-gray-600 flex justify-center items-center player1Position">
                        Position
                        </div>
                        <div id="player1Team" class="text-xl leading-normal text-gray-600 flex justify-center items-center player1Team">
                        Team Name
                        </div>
                    
                        <div class="text-lg leading-normal text-gray-400 flex justify-center items-center">
                        <svg viewBox="0 0 24 24" class="mr-1" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                       <span id="player1University">University</span>
                        </div>

               
                    </div>
                    <div class="flex justify-center items-center gap-6 my-3">
                        <div class=" text-center mx-4">
                            <p class="text-gray-700 text-2xl font-bold" id="player1Number">-</p>
                            <span class="text-gray-400">Number</span>
                        </div>
                        <div class="text-center mx-4">
                            <p class="text-gray-700 text-2xl font-bold"id="player1Height">-</p>
                            <span class="text-gray-400">Height</span>
                        </div>
                        <div class=" text-center mx-4">
                            <p class="text-gray-700 text-2xl font-bold" id="player1Weight">-</p>
                            <span class="text-gray-400">Weight(lbs)</span>
                        </div>
                    </div>
                     
                       
                      
                    </div>

                    <div class="bg-white shadow-md m-2 flex mb-5 rounded-lg w-full md:w-1/2 h-auto py-4 flex flex-col p-6 justify-between ">
                        <h1 class="text-2xl font-bold mb-2 text-gray-700">Roster 2</h1>
                        <div class="p-2 my-3">
                                <div class="relative mt-1">
                                    <select type="text" id="player2"  name="player" class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                                        <option value="">Select Player 2</option>
                                        @foreach ($rosters as $roster)
                                        <option value="{{$roster->id}}">{{$roster->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>

                     <div class="flex flex-col gap-1 text-center items-center">
                        {{-- <img class="h-32 w-32 bg-white p-2 rounded-full shadow mb-4" src="https://media.istockphoto.com/vectors/default-avatar-profile-icon-grey-photo-placeholder-hand-drawn-modern-vector-id1273297967?k=20&m=1273297967&s=170667a&w=0&h=Iqo2x8teHMYPDg1OWFuPJOr6xBAFRLtJyIdTBPcLW7k=&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2000&amp;q=80" alt=""> --}}
                        <p id="player2Name" class="font-bold text-3xl player2Name">--</p>
                        <div id="player2Position" class="text-xl player2Position leading-normal text-gray-600 flex justify-center items-center">
                        Position
                        </div>
                        <div id="player2Team" class="player2Team text-xl leading-normal text-gray-600 flex justify-center items-center">
                        Team Name
                        </div>
                    
                        <div class="text-lg leading-normal text-gray-400 flex justify-center items-center">
                        <svg viewBox="0 0 24 24" class="mr-1" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <span id="player2University">University</span>
                        </div>

               
                    </div>
                    <div class="flex justify-center items-center gap-6 my-3 ">
                        <div class=" text-center mx-4">
                            <p class="text-gray-700 text-2xl font-bold"  id="player2Number">-</p>
                            <span class="text-gray-400">Number</span>
                        </div>
                        <div class="text-center mx-4">
                            <p class="text-gray-700 text-2xl font-bold"  id="player2Height">-</p>
                            <span class="text-gray-400">Height</span>
                        </div>
                        <div class=" text-center mx-4">
                            <p class="text-gray-700 text-2xl font-bold" id="player2Weight">-</p>
                            <span class="text-gray-400">Weight (lbs)</span>
                        </div>
                    </div>
                     
                       
                      
                    </div>

                  

    
                    
                  </div>

                </div>



              </div>

              <section class="container mx-auto ">

                <h1 class="text-2xl font-bold mx-4 my-5">Statistics | Head to Head</h1>
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                  <div class="w-full overflow-x-auto">
                    <table class="w-full">
                      <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                          <th class="px-2 py-3">Name</th>
                          <th class="px-2 py-3">Age</th>
                          <th class="px-2 py-3">Game</th>
                          <th class="px-2 py-3">G. Strt</th>
                          <th class="px-2 py-3">MP</th>
                          <th class="px-2 py-3">FG</th>
                          <th class="px-2 py-3">FGA</th>
                          <th class="px-2 py-3">FG%</th>
                          <th class="px-2 py-3">3PT</th>
                          <th class="px-2 py-3">3PTA</th>
                          <th class="px-2 py-3">3PT%</th>
                          <th class="px-2 py-3">2PT</th>
                          <th class="px-2 py-3">2PTA</th>
                          <th class="px-2 py-3">2PT%</th>
                          <th class="px-2 py-3">FT</th>
                          <th class="px-2 py-3">FTA</th>
                          <th class="px-2 py-3">FT%</th>
                          <th class="px-2 py-3">OREB</th>
                          <th class="px-2 py-3">DREB</th>
                          <th class="px-2 py-3">Ast</th>
                          <th class="px-2 py-3">Stl</th>
                          <th class="px-2 py-3">Blk</th>
                          <th class="px-2 py-3">TOV</th>
                          <th class="px-2 py-3">Fouls</th>
                        </tr>
                      </thead>
                      <tbody class="bg-white">
                        <tr class="text-gray-700">
                          <td class="px-4 py-3 border">
                            <div class="flex items-center text-sm">
                             
                              <div>
                                <p class="font-semibold text-black player1Name" >Player 1</p>
                                <p class="text-xs text-gray-600 player1Team">Team Name</p>
                              </div>
                            </div>
                          </td>
                          <td class="px-4 py-3 text-ms font-semibold border player1Age" id="player1Age">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1Game">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1GameStarted">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1Mp">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1Fg">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1FgA">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1FgPercent">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player13pt">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player13ptA">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player13ptPercent">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player12pt">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player12ptA">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player12ptPercent">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1Ft">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1FtA">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1FtPercent">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1Oreb">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1Dreb">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1Ast">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1Stl">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1Blk">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1Tov">-</td>
                          <td class="px-4 py-3 text-ms font-semibold border" id="player1Fouls">-</td>
                       
                        </tr>

                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                              <div class="flex items-center text-sm">
                               
                                <div>
                                  <p class="font-semibold text-black player2Name" >Player 2</p>
                                  <p class="text-xs text-gray-600 player2Team">Team Name</p>
                                </div>
                              </div>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border player2Age" id="player2Age">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2Game">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2GameStarted">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2Mp">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2Fg">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2FgA">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2FgPercent">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player23pt">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player23ptA">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player23ptPercent">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player22pt">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player22ptA">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player22ptPercent">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2Ft">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2FtA">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2FtPercent">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2Oreb">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2Dreb">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2Ast">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2Stl">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2Blk">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2Tov">-</td>
                            <td class="px-4 py-3 text-ms font-semibold border" id="player2Fouls">-</td>
                         
                          </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </section>




     
    </div>
</div>
<script>
    $('#player1').on('change',function(){
        // alert($(this).val())

        player_id = $(this).val()

         
         // ajax
         $.ajax({
             type:"POST",
             url: "{{ url('single-roster') }}",
             data: { player_id: player_id,_token : $('meta[name="csrf-token"]').attr('content')},
             dataType: 'json',
             header:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             success: function(res){
                console.log(res)
            //    $('#ajaxBookModel').html("Edit Book");
            //    $('#ajax-book-model').modal('show');
               $('.player1Name').html(res.name);
               $('.player1Age').html(res.get_statistic.age);
               $('.player1Position').html(res.pos);
               $('.player1Team').html(res.get_team.name);
               $('#player1Height').html(res.height);
               $('#player1Weight').html(res.weight);
               $('#player1Number').html(res.number);
               $('#player1University').html(res.college);

               //td data
               $('#player1Age').html(res.get_statistic.age);
               $('#player1Game').html(res.get_statistic.games);
               $('#player1GameStarted').html(res.get_statistic.games_started);
               $('#player1Mp').html(res.get_statistic.minutes_played);
               $('#player1Fg').html(res.get_statistic.field_goals);
               $('#player1FgA').html(res.get_statistic.field_goals_attempted);
               $('#player1FgPercent').html((100 *( res.get_statistic.field_goals/ res.get_statistic.field_goals_attempted)).toFixed(2));
               $('#player13pt').html(res.get_statistic.t3pt);
               $('#player13ptA').html(res.get_statistic.t3pt_attempted);
               $('#player13ptPercent').html((100 *( res.get_statistic.t3pt/ res.get_statistic.t3pt_attempted)).toFixed(2));
               $('#player12pt').html(res.get_statistic.t2pt);
               $('#player12ptA').html(res.get_statistic.t2pt_attempted);
               $('#player12ptPercent').html((100 *( res.get_statistic.t2pt/ res.get_statistic.t2pt_attempted)).toFixed(2));
               $('#player1Ft').html(res.get_statistic.free_throws);
               $('#player1FtA').html(res.get_statistic.free_throws_attempted);
               $('#player1FtPercent').html((100 *( res.get_statistic.free_throws/ res.get_statistic.free_throws_attempted)).toFixed(2));
               $('#player1Oreb').html(res.get_statistic.offensive_rebounds);
               $('#player1Dreb').html(res.get_statistic.defensive_rebounds);
               $('#player1Ast').html(res.get_statistic.assists);
               $('#player1Stl').html(res.get_statistic.steals);
               $('#player1Blk').html(res.get_statistic.blocks);
               $('#player1Tov').html(res.get_statistic.turnovers);
               $('#player1Fouls').html(res.get_statistic.personal_fouls);


               //end of td data
            }
         });




    })



    $('#player2').on('change',function(){
        // alert($(this).val())

        player_id = $(this).val()

         
         // ajax
         $.ajax({
             type:"POST",
             url: "{{ url('single-roster') }}",
             data: { player_id: player_id,_token : $('meta[name="csrf-token"]').attr('content')},
             dataType: 'json',
             header:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             success: function(res){
                console.log(res)
            //    $('#ajaxBookModel').html("Edit Book");
            //    $('#ajax-book-model').modal('show');
               $('.player2Name').html(res.name);
               $('.player2Age').html(res.get_statistic.age);
               $('.player2Position').html(res.pos);
               $('.player2Team').html(res.get_team.name);
               $('#player2Height').html(res.height);
               $('#player2Weight').html(res.weight);
               $('#player2Number').html(res.number);
               $('#player2University').html(res.college);

               //td data
               $('#player2Age').html(res.get_statistic.age);
               $('#player2Game').html(res.get_statistic.games);
               $('#player2GameStarted').html(res.get_statistic.games_started);
               $('#player2Mp').html(res.get_statistic.minutes_played);
               $('#player2Fg').html(res.get_statistic.field_goals);
               $('#player2FgA').html(res.get_statistic.field_goals_attempted);
               $('#player2FgPercent').html((100 *( res.get_statistic.field_goals/ res.get_statistic.field_goals_attempted)).toFixed(2));
               $('#player23pt').html(res.get_statistic.t3pt);
               $('#player23ptA').html(res.get_statistic.t3pt_attempted);
               $('#player23ptPercent').html((100 *( res.get_statistic.t3pt/ res.get_statistic.t3pt_attempted)).toFixed(2));
               $('#player22pt').html(res.get_statistic.t2pt);
               $('#player22ptA').html(res.get_statistic.t2pt_attempted);
               $('#player22ptPercent').html((100 *( res.get_statistic.t2pt/ res.get_statistic.t2pt_attempted)).toFixed(2));
               $('#player2Ft').html(res.get_statistic.free_throws);
               $('#player2FtA').html(res.get_statistic.free_throws_attempted);
               $('#player2FtPercent').html((100 *( res.get_statistic.free_throws/ res.get_statistic.free_throws_attempted)).toFixed(2));
               $('#player2Oreb').html(res.get_statistic.offensive_rebounds);
               $('#player2Dreb').html(res.get_statistic.defensive_rebounds);
               $('#player2Ast').html(res.get_statistic.assists);
               $('#player2Stl').html(res.get_statistic.steals);
               $('#player2Blk').html(res.get_statistic.blocks);
               $('#player2Tov').html(res.get_statistic.turnovers);
               $('#player2Fouls').html(res.get_statistic.personal_fouls);


               //end of td data
            }
         });




    })
</script>
@endsection