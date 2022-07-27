<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Buy</title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
    <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
        @include('includes.navbar')

        <div class="w-full md:p-8 md:px-[12.5rem]">
            <div class="w-full  p-8 rounded bg-[#595959] bg-opacity-70 text-white drop-shadow-xl shadow-white">
                <div class="grid grid-cols-1  justify-center md:grid-cols-5 ">
                    <img class="" src="img/thor.jpeg" alt="">
                    <div class="md:col-span-2 md:px-6">               
                    <h1 class="uppercase text-xl font-bold ">
                        Thor : love and thunder
                    </h1>
                        <p class="align-middle py-3"><span class="iconify-inline inline" data-icon="bxs:time" style="color: #ccb443;" data-width="24"></span>199 Menit</p>
                        <span class="px-3 py-2 rounded-lg bg-[#2d5ad4] font-medium text-xs">R+13</span>
                    </div>
                </div>
                <ul class="mt-2">
                   <li>
                        <div><a class="uppercase font-medium text-lg"href="#">Ayani Megamall</a></div>
                        <div class="w-full mt-2 mb-6 flex justify-between">
                            <div class="pl-2 ">26-7-2022</div>
                            <div class="pr-2"><span>Rp. 60.000</span></div>
                        </div>
                        <div class="w-full flex flex-wrap flex-row ">
                            <div class=" ml-1 mt-3"><a class="bg-white px-2 py-1 rounded text-black "href="">12.00</a></div>
                            <div class=" ml-1 mt-3"><a class="bg-white px-2 py-1 rounded text-black "href="">12.00</a></div>
                            <div class=" ml-1 mt-3"><a class="bg-white px-2 py-1 rounded text-black "href="">12.00</a></div>
                            <div class=" ml-1 mt-3"><a class="bg-white px-2 py-1 rounded text-black "href="">12.00</a></div>
                            <div class=" ml-1 mt-3"><a class="bg-white px-2 py-1 rounded text-black "href="">12.00</a></div>
                            <div class=" ml-1 mt-3"><a class="bg-white px-2 py-1 rounded text-black "href="">12.00</a></div>
                            <div class=" ml-1 mt-3"><a class="bg-white px-2 py-1 rounded text-black "href="">12.00</a></div>
                            <div class=" ml-1 mt-3"><a class="bg-white px-2 py-1 rounded text-black "href="">12.00</a></div>
                            <div class=" ml-1 mt-3"><a class="bg-white px-2 py-1 rounded text-black "href="">12.00</a></div>
                            <div class=" ml-1 mt-3"><a class="bg-white px-2 py-1 rounded text-black "href="">12.00</a></div>
                        </div>
                        <br>
                        <div class="mx-2  border-b-2"></div>
                   </li>

                </ul>
            </div>
        </div>

        
        @include('includes.footer')
    </div>

    @include('includes.js')
</body>
</html>
