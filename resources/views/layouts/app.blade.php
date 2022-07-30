<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NBA 2K19</title>
</head>
<body class="bg-gray-200">

 

  <nav class="bg-blue-800 border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-blue-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="flex items-center">
                    <img src="https://cdn.nba.com/logos/leagues/logo-nba.svg" class="w-20" alt="NBA Logo" />
                    <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
                </a>
                
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="/home" class="block py-2 pr-4 pl-3 text-gray-100 rounded bg-blue-700 lg:bg-transparent lg:text-blue-300 lg:p-0 text-white uppercase" aria-current="page">Home</a>
                        </li>
                       
                        <li>
                            <a href="{{route('teams')}}#" class="block py-2 pr-4 pl-3 text-gray-100 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent uppercase lg:border-0 lg:hover:text-blue-300 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">NBA Teams</a>
                        </li>
                        <li>
                            <a href="{{route('rosters')}}" class="block py-2 pr-4 pl-3 text-gray-100 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent uppercase lg:border-0 lg:hover:text-blue-300 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Rosters</a>
                        </li>
                        <li>
                          <a href="{{route('rosters.compare')}}" class="block py-2 pr-4 pl-3 text-gray-100 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent uppercase lg:border-0 lg:hover:text-blue-300 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Compare Rosters</a>
                      </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
@yield('content')
</body>
</html>