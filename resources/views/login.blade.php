<!doctype html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>Login</title>
    @include('includes.css')
</head>
<body>
<div class="w-full min-h-screen bg-[url('/img/background.png')] bg-repeat flex justify-center  items-center lg:p-10 md:py-4 py-4 ">
    <div class="w-full h-fit md:w-1/3 lg:w-1/3  bg-gradient-to-t from-[#D9D9D9B3] rounded-3xl p-4">
        <div class="w-full flex justify-center mb-3">
            <img src="{{ asset('img/logo.png') }}" class="w-40">
        </div>
        @error('account')
            <div class="w-full p-2 bg-opacity-90  bg-red-400 text-white rounded drop-shadow font-medium text-sm mb-3 ">
                {{ $message }}
            </div>
        @enderror
        <form class="w-full" method="POST" action="{{ URL::to('/login/process') }}">
            <div class="mb-3">
                <label class="block font-bold text-white text-sm" for="username">Username</label>
                <input type="text" class="w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" id="username" name="username" placeholder="username">
                @error('username')
                <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="block font-bold text-white text-sm" for="password">Password</label>
                <input type="password" class="w-full rounded p-1 focus:outline-amber-300 focus:outline focus:outline-2" id="password" name="password" placeholder="Password">
                @error('password')
                <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <a href="{{ URL::to('/register') }}" class="capitalize text-[#CCB443] drop-shadow-lg font-bold mb-3 text-xs underline">Belum mempunyai akun ? Register di sini</a>
            <button type="submit" class="transition ease-in-out delay-150 w-full p-2 rounded-md uppercase text-center bg-[#CCB443] font-bold shadow-lg my-3 hover:-translate-y-0.5 hover:scale-105 hover:bg-[#FFC107] cli duration-300">Login</button>
        </form>
    </div>
</div>
</body>
</html>
