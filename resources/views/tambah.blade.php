<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Tambah film</title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
        <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
            @include('includes.navbar')
            <div class=" w-full flex justfy-center p-8">
                <div class="w-full p-8 rounded bg-[#595959] text-white">
                    <h1  class=" text-center  text-[#CCB443] text-xl drop-shadow-xl font-extrabold uppercase ">Tambah film</h1>
                    <form>
                        <div class="mb-3">
                            <label class="font-bold">Judul Film</label>
                            <input type="text" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" id="Judul Film" name="title" placeholder="Judul Film ">
                        </div>
                        <div class="mb-3">
                            <label class="font-bold">Sinposis Film</label>
                            <textarea class=" text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" id="Sinopsis" name="synopsis" placeholder="Sinopsis "></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="font-bold">Genre</label>
                            <select class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="genre" id="">
                                <option  class="" value="">Horor</option>
                                <option class="" value="">Thiler</option>
                                <option class="" value="">Comedy</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="font-bold">Produser</label>
                            <input type="text" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" id="Producer" name="producer" placeholder="Producer ">
                        </div>
                        <div class="mb-3">
                            <label class="font-bold">Production</label>
                            <input type="text" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" id="Production" name="production" placeholder="Production ">
                        </div>
                        <div class="mb-3">
                            <label class="font-bold">Rating Usia</label>
                            <select class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" name="rating" id="">
                                <option  class="" value="">SU</option>
                                <option class="" value="">R+13</option>
                                <option class="" value="">D+18</option>
                            </select>
                        </div>
                        {{--  <div class="mb-3">
                            <p class="mb-0 font-bold">Tanggal Penayangan</p>
                            <label class="font-bold">Dari</label>
                            <input type="date" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2">
                            <label class="font-bold">Sampai</label>
                            <input type="date" class="text-black w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2">
                        </div>
                        <p class="mb-3 fw-bold">Kota,Theater dan Studio</p>
                        <div class="mb-3">
                            <select class="form-select">
                                <option selected>Pilih Kota</option>
                                <option class="1">Pontianak</option>
                                <option class="2">Singkawang</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select">
                                <option selected>Pilih Theater</option>
                                <option class="1">Ayani</option>
                                <option class="2">Transmart</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select">
                                <option selected>Pilih Studio</option>
                                <option class="1">Studio 1</option>
                                <option class="2">Studio 2</option>
                            </select>
                        </div> --}}
                        <div class="  shadow-black drop-shadow-xl transition ease-in-out delay-150 w-full p-2 rounded-md uppercase text-center bg-[#CCB443] font-bold shadow-lg my-3 hover:-translate-y-0.5 hover:scale-105 hover:bg-[#FFC107] cli duration-300 ">
                            <button class="text-black font-bold shadow-black drop-shadow-xl">Tambah Film Baru</button>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
        <footer class="bg-[#191919] text-center lg:text-left mt-auto">
            <div class="container p-6 text-[#CCB443]">
                <div class="grid lg:grid-cols-3 gap-4 justify-between">
                    <div class="mb-6 md:mb-0 col-span-2">
                        <a href="#" class="font-extrabold mb-2 uppercase">Terms of Use </a>
                        <span>|</span>
                        <a href="#" class="font-extrabold mb-2 uppercase">Advertising</a>
                        <p class="mt-4 mb-3 text-justify  text-white text-sm opacity-75">
                            © 1999-2012 21Cineplex.com. All materials and contents (texts, graphics, and every attributes) of 21Cineplex or 21Cineplex.com website are copyrights and trademarks of PT Nusantara Sejahtera Raya.
                            Any commercial usage of the materials and contents is forbidden without prior permission from PT Nusantara Sejahtera Raya. There is no other institutions/agencies outside
                            PT Nusantara Sejahtera Raya allowed to use www.21Cineplex.com (21Cineplex website) without prior permission from PT Nusantara Sejahtera Raya
                        </p>
                    </div>

                    <div class="mt-5 mb-6 md:mb-0 flex justify-end">
                        <ul class="mt-5 mb-5 flex justify-center items-center col-span-1">
                            <li><a href="https://www.instagram.com/cinema.21/?hl=id"><span class="iconify" data-icon="mdi:instagram" style="color: #ccb443;" data-width="42" data-height="37"></span></a></li>
                            <li><a href="https://www.facebook.com/cinema21/"><span class="iconify" data-icon="fa6-brands:facebook" style="color: #ccb443;" data-width="42" data-height="37"></span></a></li>
                            <li><a href="https://twitter.com/cinema21"><span class="iconify" data-icon="jam:twitter-circle" style="color: #ccb443;" data-width="42" data-height="40"></span></a></li>
                            <li><a href="https://www.youtube.com/user/KanalXXI/videos"><span class="iconify" data-icon="jam:youtube-circle" style="color: #ccb443;" data-width="42" data-height="40"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center text-white p-4 opacity-75" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="text-white " href="index">Cinema XXI</a>
            </div>
        </footer>
    </div>

    @include('includes.js')
</body>
</html>


