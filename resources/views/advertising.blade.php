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
                    <img class="" src="https://21cineplex.com/images/ads-info.jpg" alt="">
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>

    @include('includes.js')
</body>
</html>
