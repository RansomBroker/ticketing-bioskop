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
        @include('includes.footer');
    </div>

    @include('includes.js')
</body>
</html>
