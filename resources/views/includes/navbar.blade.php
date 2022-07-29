<nav>
    <div class="w-full py-4 px-3 flex flex-wrap justify-around items-center mx-auto bg-[#151515]">
        <a href="{{ URL::to('') }}" class="flex items-center">
            <img src="{{asset('img/logo.png')}}" class="mr-3 h-6 sm:h-9" alt="XXI LOGO" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false" id="navbar-btn">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="navbar-toggle hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col mt-4 md:flex-row md:mt-0 md:text-sm md:font-medium">
                @if(Auth::check() == false)
                    <li>
                        <a href="{{ URL::to('/now-playing') }}" class="block py-2 pr-4 pl-3 text-white font-bold uppercase" aria-current="page">Now Playing</a>
                    </li>
                    <li>
                        <a href="{{ URL::to("/upcoming") }}" class="block py-2 pr-4 pl-3 text-white font-bold uppercase" aria-current="page">Upcoming</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/theater-list') }}" class="block py-2 pr-4 pl-3 text-white font-bold uppercase" aria-current="page">Theater</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/profile')  }}" class="block py-2 pr-4 pl-3 text-white font-bold uppercase" aria-current="page">Profile</a>
                    </li>
                @endif
                @if(Auth::check() && Auth::user()->role == 0)
                    <li>
                        <a href="{{ URL::to('/now-playing') }}" class="block py-2 pr-4 pl-3 text-white font-bold uppercase" aria-current="page">Now Playing</a>
                    </li>
                    <li>
                        <a href="{{ URL::to("/upcoming") }}" class="block py-2 pr-4 pl-3 text-white font-bold uppercase" aria-current="page">Upcoming</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/theater-list') }}" class="block py-2 pr-4 pl-3 text-white font-bold uppercase" aria-current="page">Theater</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/profile')  }}" class="block py-2 pr-4 pl-3 text-white font-bold uppercase" aria-current="page">Profile</a>
                    </li>
                @endif

                @if(Auth::check() && Auth::user()->role == 1)
                        <li>
                            <button id="dropdownNavbarMenu" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full  text-white border-b border-gray-100 text-white uppercase font-bold md:text-white md:border-0 md:relative">Laman Depan <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbarMenuList" class="hidden md:absolute z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="{{ URL::to('/') }}" class="block py-2 pr-4 pl-3 font-bold uppercase" aria-current="page">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/now-playing') }}" class="block py-2 pr-4 pl-3 font-bold uppercase" aria-current="page">Now Playing</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to("/upcoming") }}" class="block py-2 pr-4 pl-3 font-bold uppercase" aria-current="page">Upcoming</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/theater-list') }}" class="block py-2 pr-4 pl-3 font-bold uppercase" aria-current="page">Theater</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full  text-white border-b border-gray-100 text-white uppercase font-bold md:text-white md:border-0 md:relative">Kelola Film <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="hidden md:absolute z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="{{URL::to('/list-film')}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kelola Film</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/playing-list') }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kelola Playing Now</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="dropdownNavbarTeater" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full  text-white border-b border-gray-100 text-white uppercase font-bold md:text-white md:border-0 md:relative">Kelola Theater <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbarTeaterList" class="hidden md:absolute z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="{{URL::to('/city-list')}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kelola Kota</a>
                                        <a href="{{URL::to('/theater-list')}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kelola Teater</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('/studio-list') }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kelola Studio</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="dropdownNavbarOther" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full  text-white border-b border-gray-100 text-white uppercase font-bold md:text-white md:border-0 md:relative">Others<svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbarOtherList" class="hidden md:absolute z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="{{ URL::to('/admin-list') }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">List Admin</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
            </ul>
        </div>
        <div class="navbar-toggle hidden w-full md:block md:w-auto" id="navbar-default">
            <div class="flex flex-col mt-4 md:flex-row md:mt-0 md:text-sm md:font-medium">
                @if(Auth::check())
                    <button id="dropdownNavbarUser" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full  text-gray-700 border-gray-100 text-white uppercase font-bold md:text-white md:border-0 md:relative"><span class="iconify text-2xl" data-icon="carbon:user-avatar-filled"></span></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbarUserdr" class="hidden md:absolute z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow md:translate-y-8">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <p class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Welcome, {{ Auth::user()->username }}</p>
                            </li>
                            <li>
                                <a class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="{{ URL::to('/history') }}">
                                    History Order</a>
                            </li>
                        </ul>
                    </div>
                @endif
                <!-- Search -->
                <input type="text" placeholder="Search..." class="rounded-l pl-2 focus:outline-0">
                <button class="bg-[#CCB443] p-2 rounded-r hover:bg-[#FFC107]"><span class="iconify text-black text-lg" data-icon="eva:search-outline"></span></button>
                @if(Auth::check())
                    <a class="inline-block px-6 py-2.5 bg-[#CCB443] text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-[#ffc107] hover:shadow-lg focus:bg-[#ffc107] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#ffc107] active:shadow-lg transition duration-150 ease-in-out ml-2 drop-shadow-lg shadow-[#CCB443]" href="{{ URL::to('logout') }}">Logout</a>
                @else
                    <a class="inline-block px-6 py-2.5 bg-[#CCB443] text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-[#ffc107] hover:shadow-lg focus:bg-[#ffc107] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#ffc107] active:shadow-lg transition duration-150 ease-in-out ml-2 drop-shadow-lg shadow-[#CCB443]" href="{{ URL::to('login') }}">Login</a>
                @endif
            </div>
        </div>
    </div>
</nav>

