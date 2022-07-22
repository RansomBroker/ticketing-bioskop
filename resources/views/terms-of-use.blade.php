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
        <div class="w-full flex justfy-center p-8">
            <div class=" text-center w-full mx-24 p-8 rounded bg-[#595959] bg-opacity-70 text-white drop-shadow-xl shadow-white">
                <div class="mt-4 mb-3 text-justify  text-white text-md">
                    <h1 class=" mb-8 text-xl text-center font-bold">KETENTUAN PENGGUNAAN
                            <br>
                        Website WWW.21CINEPLEX.COM
                    </h1>
                    <em class="mt-4 font-semibold">DENGAN MEMBUKA, MEMBACA, MENGAKSES ATAU MENGUNDUH INFORMASI, DATA, ATAU MATERIAL APAPUN YANG ADA DALAM WEBSITE INI, SEBAGIAN ATAU SELURUHNYA, DENGAN CARA APAPUN, MAKA ANDA MENYATAKAN TELAH MEMAHAMI DAN SETUJU UNTUK TERIKAT OLEH KETENTUAN-KETENTUAN DALAM KETENTUAN PENGGUNAAN INI</em>
                    
                    <h5 class="mt-4 text-lg ">Segala informasi, data, atau material apapun yang ada dalam website ini adalah hak milik dari PT. Nusantara Sejahtera Raya (selanjutnya disebut 21Cineplex) dan milik pemegang hak resmi atas merek, logo, material yang bersangkutan.</h5>
                    
                    <h5 class="mt-4 mb-6 text-lg  ">21Cineplex memberikan ijin penggunaan atas informasi, material, data, data film, data jadwal film, data teater atau bioskop, layanan dan turunannya dalam bentuk apapun yang ada dalam website ini (selanjutnya disebut Data Website), dengan ketentuan sebagai berikut:</h5>
                    <h5 class=" mb-5 text-lg font-bold"> A. Ijin penggunaan diberikan dengan ketentuan </h5>
                    <p class="ml-8">1.Penggunaan pribadi                        
                        <br>
                       2.Penggunaan yang wajar tidak berlebihan menurut penilaian 21Cineplex secara sendiri. 
                    </p>
                    <h5 class="mt-5 mb-5 text-lg font-bold">B.  Dilarang</h5>
                    <p class="ml-8">1. Menggunakan Data Website untuk kepentingan komersial, atau                      
                        <br>
                       2. Menerbitkan ulang, sebagian atau seluruh Data Website maupun turunannya, untuk keperluan apapun, baik untuk memperoleh keuntungan dari penerbitan tersebut maupun tidak, atau 
                       <br>
                       3.  Memberikan ijin, hak guna, menjual, menyewakan, meminjamkan, meminjam atau menyewa Data Website dan turunannya dalam bentuk apapun.
                    </p>
                    <h5 class="mt-4 text-lg">Jika Anda tidak setuju pada sebagian saja dari Ketentuan Penggunaan ini, Anda harus berhenti menggunakan Website dan Data Website, dan semua salinan Data Website harus dihancukan dengan segera. Setiap pelanggaran terhadap ketentuan ini dapat dijadikan tuntutan hukum, dan akan diupayakan hukuman yang maksimal yang diperbolehkan oleh hukum.
                        <br>
                        <br>
                        21Cineplex dapat memperbaharui Ketentuan Penggunaan ini dari waktu ke waktu. Periksalah selalu Ketentuan Penggunaan ini sebelum menggunakan Website.
                    </h5>
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