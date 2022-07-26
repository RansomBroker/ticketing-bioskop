<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Now Playing</title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
    <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
        @include('includes.navbar')
        <div class="w-full p-8">
            <div class="w-full md:w-1/4 uppercase p-1 ">
                <h5 class=" text-center bg-[#FFC107] opacity-90  text-xl font-[800] px-8 py-2 rounded-t-lg">Now Playing</h5>
                <div class=" opacity-90
                    border-l-[5.25rem] border-l-transparent
                    border-t-[2rem] border-t-[#FFC107]
                    border-r-[5.25rem] border-r-transparent
                    rounded-xs
                    ">
                </div>
            </div>
            <div class="w-full p-8 grid grid-cols-1 md:grid-cols-4 md:gap-8 gap-y-8 ">
                <div class=" bg-[#595959] bg-opacity-60 rounded self-center ">
                    <a href="#">
                        <img class=" w-full h-96 rounded-t " src="img/thor.jpeg" alt="" />
                    </a>
                    <div class="transition ease-in-out delay-150 w-full p-2 rounded-b uppercase text-center bg-[#CCB443] font-bold shadow-lg  hover:-translate-y-0.5 hover:scale-105 hover:bg-[#FFC107] cli duration-300 px-2 ">
                        <a href="#" class=" text-xl font-bold">
                             Watch Trailer 
                        </a>
                    </div>
                    <div class="transition ease-in-out delay-150 w-full p-2 rounded-b uppercase text-center bg-[#CCB443] font-bold shadow-lg mt-1 hover:-translate-y-0.5 hover:scale-105 hover:bg-[#FFC107] cli duration-300 px-2 ">
                        <a href="#" class=" text-xl font-bold">
                             buy
                        </a>
                    </div>
                </div>
                <div class=" w-full grid self-center col-span-3  bg-[#595959] bg-opacity-50 rounded gap-3 ">
                    <h1 class="px-5 mt-12 pt-3  text-xl text-center uppercase font-extrabold">Judul</h1>
                    <h2 class="px-5 py-2 text-medium font-bold ">Genre    : <span class=" text-medium font-medium"></span></h3>
                    <h3 class="px-5 pb-3 text-medium font-bold ">Penulis  : <span class=" text-medium font-medium"></span></h3>
                    <h3 class="px-5 pb-3 text-medium font-bold ">Produser : <span class=" text-medium font-medium"></span></h3>
                    <h3 class="px-5 pb-3 text-medium font-bold ">Produksi : <span class=" text-medium font-medium"></span></h3>
                    <h3 class="px-5 pb-3 text-medium font-bold ">Cast     : <span class=" text-medium font-medium"></span></h3>
                    <h1 class="px-5 pb-3 text-medium font-bold "> Sinopsis
                        <br>
                        <br>
                        <span class="text-medium font-medium">Bapak mu</span>
                    </h1>
                    <button type="submit" class="transition ease-in-out delay-150 w-full p-2 rounded-md uppercase text-center bg-[#CCB443] font-bold shadow-lg  hover:-translate-y-0.5 hover:scale-105 hover:bg-[#FFC107] cli duration-300">playing at</button>
                </div>
            </div>
            
        </div>
        @include('includes.footer')
    </div>

    @include('includes.js')
</body>
</html>
