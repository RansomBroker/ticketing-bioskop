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
        <div class="w-full flex justify-center md:p-8">
            <div class=" text-center w-full md:mx-24 p-8 rounded bg-[#595959] bg-opacity-70 text-white drop-shadow-xl shadow-white">
                <div class="w-full flex justify-center mb-3">
                    <img class="" src="https://21cineplex.com//theme/v5/assets/img/detail-cinema-1.jpg" alt="">
                </div>
                <div class="w-full flex justify-center mt-5 mb-5">
                    <img src="https://media.21cineplex.com/webcontent/gallery/pictures/141396219090038_614x47.png" alt="">
                </div>
                <div class="mt-4 mb-3 text-justify  text-white text-md">
                    <h5 class="mt-4">Cinema XXI berada di bawah naungan PT Nusantara Sejahtera Raya, merupakan kelompok bioskop terbesar di Indonesia yang berdiri sejak tahun 1987. Dengan pengalaman lebih dari 34 tahun di industri hiburan, Cinema XXI berkomitmen untuk senantiasa memberikan pengalaman dan kenyamanan menonton terbaik untuk masyarakat Indonesia. Sampai dengan Januari 2021, Cinema XXI telah menghadirkan 1.216 layar di 226 lokasi bioskop yang tersebar di 53 kota di seluruh Indonesia, dan akan terus berkembang untuk mencapai target 2.000 layar dalam lima tahun ke depan.</h5>

                    <h5 class="mt-4">Cinema XXI berkomitmen untuk terus memberikan hiburan berkualitas terbaik dan tanpa kompromi dengan harga terjangkau. Di tahun 2006, Cinema XXI melahirkan M-Tix untuk memfasilitasi pemesanan tiket bioskop secara online dan di tahun 2012 telah menghadirkan pengalaman menonton dengan teknologi revolusioner, yaitu IMAX teater. Untuk menyempurnakan pelayanan kepada penonton, telah hadir juga bioskop dengan sistem audio mutakhir "Dolby Atmos" yang kini ada di 59 layar Cinema XXI.</h5>

                    <h5 class="mt-4">Bukan hanya tempat untuk menonton film, tetapi juga rumah kedua untuk menghabiskan waktu bersama keluarga dan teman. Cinema XXI menghadirkan pengalaman menonton yang tak terlupakan untuk hari ini dan esok. Selama tiga tahun berturut-turut pada 2017, 2018, 2019 Cinema XXI telah dianugerahi "World Branding Award" di Kensington, London sebagai Merek Terbaik dalam Kategori Bioskop Hiburan (Nation Tier) dan di awal 2019, Cinema XXI juga telah dianugerahi "Millennials Top Brand Awards" oleh salah satu media pilihan generasi muda Indonesia sebagai pilihan pertama millenials untuk kategori jaringan cinema terkemuka di Indonesia. Tidak berhenti disana, terlepas dari kondisi Pandemi yang dialami, di tahun 2020, Cinema XXI telah dinobatkan sebagai "Industry Champion of The Year" oleh Asia Corporate Excellence and Sustainability (ACES) Awards.</h5>

                    <h5 class="mt-4">Informasi lengkap klik: www.21cineplex.com</h5>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>

    @include('includes.js')
</body>
</html>
