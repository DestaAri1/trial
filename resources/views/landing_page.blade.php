<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>FitAcademy</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<!-- component -->
<body class="font-display">
    <div class="bg-[#3281C4] mb-16 h-screen w-full relative">
        <nav class="relative flex items-center justify-center py-1 md:py-2 lg:py-3 2xl:py-4">
            <a href="#"><img class="h-12 md:h-16 lg:h-24 2xl:h-28" src="{{ asset('image/Fit Academy 2022 Logo PNG.png') }}" alt=""></a>
        </nav>

        <div class="text-center text-white">
            <div class="mt-10 md:mt-12 lg:mt-16 2xl:mt-20">
                <h1 class="text-base font-bold leading-normal tracking-widest md:text-xl lg:text-3xl 2xl:text-5xl">Mau Belajar Efektif Tapi tetap Asik? <br> FitAcademy Tempatnya!</h1>
            </div>
            <div class="mt-16 lg:mt-16">
                <h2 class="text-sm font-normal md:text-lg lg:text-xl 2xl:text-3xl">Pilih Siapa Dirimu? <br>
                    Temukan Konten Pembelajaran yang Sesuai</h2>
            </div>
        </div>

        <div class="grid mt-8 gap-y-8 lg:mt-24 lg:flex lg:justify-evenly">
                <div class="w-3/4 h-full max-w-xs bg-white border border-gray-200 shadow-xl rounded-3xl dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center pt-10 pb-10">
                        <img class="mb-3 rounded-full shadow-lg w-52 h-52" src="{{ asset('image/si paling ngantor.png') }}" alt="gambar"/>
                        <h5 class="mt-10 mb-1 text-xl font-semibold text-center text-gray-900 dark:text-white">Perusahaan</h5>
                        <span class="px-12 pb-1 mt-16 text-sm text-center text-gray-500 dark:text-gray-400">Anda yang menginginkan karyawan perusahaan menjadi semakin terampil dan profesional</span>
                        <div class="flex pt-10 mt-10 space-x-3 md:mt-6">
                            <a href="#" class="inline-flex items-center px-10 py-3 text-sm font-medium text-center text-white bg-[#2F97D4] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="w-3/4 h-full max-w-xs bg-white border border-gray-200 shadow-xl rounded-3xl dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center pt-10 pb-10">
                        <img class="mb-3 rounded-full shadow-lg w-52 h-52" src="{{ asset('image/si paling ngonten.png') }}" alt="gambar"/>
                        <h5 class="mt-10 mb-1 text-xl font-semibold text-center text-gray-900 dark:text-white">Content <br>Creator</h5>
                        <span class="px-12 mt-10 text-sm text-center text-gray-500 dark:text-gray-400">Siapapun yang ingin menyalurkan ide dengan konten yang kreatif, edukatif, dan interaktif</span>
                        <div class="flex pt-10 mt-10 space-x-3 md:mt-6">
                            <a href="#" class="inline-flex items-center px-10 py-3 text-sm font-medium text-center text-white bg-[#2F97D4] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="w-3/4 h-full max-w-xs bg-white border border-gray-200 shadow-xl rounded-3xl dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center pt-10 pb-10">
                        <img class="mb-3 rounded-full shadow-lg w-52 h-52" src="{{ asset('image/si paling ngide.png') }}" alt="gambar"/>
                        <h5 class="mt-10 mb-1 text-xl font-semibold text-center text-gray-900 dark:text-white">Netizen</h5>
                        <span class="px-12 mt-16 text-sm text-center text-gray-500 dark:text-gray-400">Orang-orang yang suka dan tertarik untuk  mempelajari berbagai hal baru dengan cara seru</span>
                        <div class="flex pt-10 mt-10 space-x-3 md:mt-6">
                            <a href="#" class="inline-flex items-center px-10 py-3 text-sm font-medium text-center text-white bg-[#2F97D4] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get Started</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="h-72"></div>

    <footer class="bg-[#F58726] mt-96 max-h-full text-white">
        <h2 class="text-base font-bold leading-normal tracking-widest text-center pt-28 lg:pt-24 lg:text-5xl">Get More Information</h2>
        <h5 class="pt-10 text-xs text-center lg:text-2xl">Aenean commodo ligula eget dolor. Aenean massa. <br> Cum sociis natoque penatibus et magnis dis parturient monte</h5>

        <div class="grid justify-center lg:flex lg:justify-center">
            <div class="flex items-center lg:mt-24">
                <img class="w-6 lg:w-16" src="{{ asset('image/tiktok icon.svg') }}" alt="tiktok icon">
                <h3 class="ml-8 text-base">fitacademy.id</h3>
            </div>

            <div class="grid lg:mt-24 lg:ml-16 lg:flex lg:items-center">
                <img class="w-6 lg:w-16" src="{{ asset('image/instagram icon.svg') }}" alt="tiktok icon">
                <h3 class="ml-8 text-base">fitacademy_2022</h3>
            </div>
        </div>
        <div class="h-10 bg-[#F58726]"></div>
    </footer>
</body>

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script>
// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});
</script>
</html>
