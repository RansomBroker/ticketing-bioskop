<nav>
    <div class="w-full p-4 flex flex-wrap justify-around items-center mx-auto bg-[#151515]">
        <a href="https://flowbite.com/" class="flex items-center">
            <img src="{{asset('img/logo.png')}}" class="mr-3 h-6 sm:h-9" alt="XXI LOGO" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false" id="navbar-btn">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="navbar-toggle hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-2 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white font-bold uppercase" aria-current="page">Now Playing</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white font-bold uppercase" aria-current="page">Upcoming</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white font-bold uppercase" aria-current="page">Theater</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white font-bold uppercase" aria-current="page">Profile</a>
                </li>
            </ul>
        </div>
        <div class="navbar-toggle hidden w-full md:block md:w-auto" id="navbar-default">
            <form class="flex flex-row mt-4 md:flex-row md:mt-0 md:text-sm md:font-medium">
                <input type="text" placeholder="Search..." class="rounded-l pl-2 focus:outline-0">
                <button class="bg-[#CCB443] p-2 rounded-r hover:bg-[#FFC107]"><span class="iconify text-black text-lg" data-icon="eva:search-outline"></span></button>
                <a class="inline-block px-6 py-2.5 bg-[#CCB443] text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-[#ffc107] hover:shadow-lg focus:bg-[#ffc107] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#ffc107] active:shadow-lg transition duration-150 ease-in-out ml-2 drop-shadow-lg shadow-[#CCB443]" href="{{ URL::to('login') }}">Login</a>
            </form>
        </div>
    </div>
</nav>

