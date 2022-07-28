<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Profile </title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
    <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
        @include('includes.navbar')
        <div class="w-full flex p-8">
            <div class="w-full md:mx-24 p-8 rounded bg-[#595959] bg-opacity-60 text-white drop-shadow-xl shadow-white">
                <div class="w-full flex flex-wrap flex-row  pb-2 mb-3 border-b-2">
                    <div class="flex mx-2"><div class="rounded bg-white w-5 h-5 mr-1"></div><span class="mx-1">Tidak </span></div>
                    <div class="flex mx-2"><div class="rounded bg-[#34c218] w-5 h-5"></div><span class="mx-1">Tersedia</span></div>
                    <div class="flex mx-2"><div class="rounded bg-[#CCB443] w-5 h-5"></div><span class="mx-1">Pilhanmu</span></div>
                </div>
                <div class="w-full py-3 pb-3 border-b-2">
                    <h5 class="mx-2 uppercase text-lg font-semibold">Ayani Megamall</h5>
                    <h5 class="mx-2">Studio</h5>
                    <h5 class="mx-2">Thor</h5>
                    <h5 class="mx-2">27-07-2022 <span class="mx-2">|</span><span class="mx-2">15.00 </span></h5>
                </div>
                <div class="w-full ">

                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>

    @include('includes.js')
</body>
</html>
