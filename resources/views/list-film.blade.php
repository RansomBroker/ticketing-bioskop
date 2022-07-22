<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>List Film </title>
    @include('includes.css')
    @include('includes.js')
</head>
<body>
    <div class="flex flex-col min-h-screen bg-[url('/img/background.png')] bg-repeat">
        @include('includes.navbar')
        <div class="w-full flex justfy-center p-8">
            <div class="  text-center w-full p-8 rounded bg-[#595959] text-white drop-shadow-xl shadow-white">
                <h1  class="text-[#CCB443] text-xl font-extrabold uppercase ">List Film di Database</h1>
                <table class="uppercase w-full mt-4">
                    <thead class="text-[#CCB443] font-extrabold">
                        <tr>
                        <th scope="col" class="py-3 px-6">Poster FIlm</th>
                        <th scope="col" class="py-3 px-6">Judul Film</th>
                        <th scope="col" class="py-3 px-6">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($films as $film)
                            <tr>
                                <td class="py-4 px-6">
                                    <img src="{{ asset('/img/'.$film->img) }}" class="w-20 text-center">
                                </td>
                                <td>{{$film->title}}</td>
                                <td class="py-4 px-6">
                                    <a class="" href="{{URL::to('edit-film/'.$film->id)}}">Edit</a>
                                    ||
                                    <a class="" href="#">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </table>
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
