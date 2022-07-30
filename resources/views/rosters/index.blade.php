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

@php
    $export_link_array = array(
        'player' => request()->player,
        'team' => request()->team,
        'position' => request()->position,
    );
    $export_link =http_build_query($export_link_array).'format=csv';


@endphp
<div class=" flex justify-center">
    <div class="w-11/12 bg-white  p-6 rounded-lg mt-5">

        <div class="container items-center mx-auto">
        <h2 class="text-2xl text-gray-700 font-bold">Rosters</h2>
         <form class="flex items-center justify-between mb-3" action="{{route('rosters.search')}}" method="GET">

                <div class="flex items-center">
                    <div class="p-2">
                        <label for="table-search" class="sr-only">Search</label>
                            <div class="relative mt-1">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" id="player" value="{{request('player')}}" name="player" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                        </div>
                    </div>
                    <div class="p-2">
                            <div class="relative mt-1">
                                <select type="text" id="team" value="{{request('team')}}" name="team" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                                    <option value="">Select NBA Team</option>
                                    @foreach ($team as $oneTeam)
                                    <option value="{{$oneTeam->code}}">{{$oneTeam->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                    <div class="p-2">
                        <label for="table-search" class="sr-only">Search</label>
                            <div class="relative mt-1">
                                <select type="text" id="position" name="position" value="{{request('position')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                                    <option value="">Select Position</option>

                                    @foreach ($position as $pos)
                                    <option value="{{$pos->pos}}">{{$pos->pos}}</option>
                                    @endforeach
                                </select>
                        </div>
                    </div>
                    <button type="submit" class="font-semibold h-10 cursor-pointer rounded-lg bg-indigo-700 md:px-6 px-6 md:py-2 hover:bg-indigo-600 text-white"> Search</button>


                </div>
                    <div class="p-2">
                        <button  type="button" id="exportCsvBtn" class="font-semibold cursor-pointer rounded-lg bg-green-700 md:px-4 px-4 md:py-2 hover:bg-green-600 text-white"> Export CSV</button>
                    </div>
         </form>
		<table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
			<thead class="text-white">
            @if($rosters->count())
                @foreach($rosters as $roster)
				<tr class="bg-gray-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-12 lg:mb-2 ">
					<th class="p-3 text-left">Name</th>
					<th class="p-3 text-left">Number</th>
					<th class="p-3 text-left">Team</th>
					<th class="p-3 text-left">Position</th>
					<th class="p-3 text-left" width="110px">Actions</th>
				</tr>
                @endforeach
            @endif
			</thead>
			<tbody class="flex-1 sm:flex-none">
            @if($rosters->count())
                @foreach($rosters as $roster)
				<tr class="flex flex-col flex-no wrap sm:table-row mb-12  rounded-l-lg sm:rounded-none sm:mb-0 lg:mb-2">
					<td class="border-grey-light border hover:bg-gray-100 p-3">{{$roster->name}}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$roster->number}}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$roster->getTeam->name ?? ''}}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$roster->pos}}</td>
					<td class="border-grey-light border hover:bg-gray-100 p-3 text-gray-200 hover:text-gray-100 hover:font-bold truncate"><a href="{{route('rosters.show',$roster->id)}}" class="font-semibold cursor-pointer hover:bg-indigo-800 rounded-lg bg-indigo-900 md:px-4 px-4 md:py-2"> View</a></td>
				</tr>
                @endforeach
                @else
                <h1>No Players found</h1>
                @endif
			</tbody>
		</table>

        {{ $rosters->links() }}
	</div>



     
    </div>
</div>


<script>

    $('#exportCsvBtn').on('click',function(){


        player_id = $(this).val()
        player = $('#player').val()
        positionSelect = $('#position').val()
        teamSelect = $('#team').val()
         
         // ajax
         $.ajax({
             type:"post",
             xhrFields: {
                responseType: 'blob',
            },
             url: "{{ route('rosters.exports') }}",
             data: { 
                player: player,
                positionSelect: positionSelect,
                teamSelect: teamSelect,
                _token : $('meta[name="csrf-token"]').attr('content')}
                ,
             success: function(res){
                
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(res);
                link.download = `Invoice_details_report.xlsx`;
                link.click();
            }
         });
         });


</script>
@endsection