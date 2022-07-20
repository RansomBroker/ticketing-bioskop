<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/output.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <title>Home</title>  
</head>
<body>
  <header >
    <nav class="relative w-full flex flex-wrap items-center justify-between py-3 bg-[#151515] bg-opacity-90 text-gray-200 shadow-lg navbar navbar-expand-lg navbar-light ">
    <div class="w-full flex justify-between">
      <div class="flex justify-start items-center">
          <a class=" mr-5 " href="#">
            <img class="w-40 " src="{{asset('img/logo.png')}}" alt="" >
          </a>
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="flex items-center" id="navbarSupportedContent">
            <ul class="navbar-nav flex list-style-none mr-auto ml-4">
              <li class="nav-item ml-5">
                <a class="nav-link active fw-bolder hyperlink-hdr" aria-current="page" href="index">HOME</a>
              </li>
              <li class="nav-item ml-5">
                <a class="nav-link  fw-bolder hyperlink-hdr" href="product.html">PRODUCT</a>
              </li>
              <li class="nav-item ml-5">
                <a class="nav-link fw-bolder hyperlink-hdr" href="about.html">ABOUT</a>
              </li>
              <li class="nav-item ml-5">
                <a class="nav-link fw-bolder hyperlink-hdr" href="confirm.html">PAYMENT CONFIRMATION</a>
              </li>
            </ul>
          </div> 
        </div>
        <div class="flex justify-start ">
          <form class="flex ml-2 grow">
              <div class="input-group mt-3 mb-3 w-100">  
                <input type="text" class="border-0" placeholder="Username" aria-label="Username" >
                <button class="btn input-group-text bg-white  " type="submit" id="button-addon2"></button>
              </div>
            </form>
            <a href="login" class="inline-block  px-6 py-3 bg-[#CCB443] text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-[#ffc107] hover:shadow-lg focus:bg-[#ffc107] focus:shadow-lg focus:outline-none focus:ring-0 active:bg-[#ffc107] active:shadow-lg transition duration-150 ease-in-out "> LOGIN </a>
       </div>
       </div>  
    </nav>
  </header>
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
</body>
</html>