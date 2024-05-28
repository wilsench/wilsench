<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css') }}">

    {{-- Splide --}}
    <link href=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css " rel="stylesheet">

    <title>Chia Wilsen</title>
</head>
<body>

    <section>
        <nav class="z-50 w-full bg-white flex gap-5 px-20 py-7 justify-between sticky top-0 shadow-sm">
            <a href="" class="tracking-widest">@ChiaWilsen</a>
            <div class="flex gap-3">
                <a href="https://github.com"><img src="{{ URL::asset('images/git_icon.png') }}" class="h-5" alt=""></a>
                <a href="https://github.com"><img src="{{ URL::asset('images/linkedin_icon.png') }}" class="h-5" alt=""></a>
                <a href="https://github.com"><img src="{{ URL::asset('images/instagram.png') }}" class="h-5" alt=""></a>
            </div>
        </nav>
    </section>
    <section id="hero" class="min-h-screen">
        <div class="min-h-screen flex items-center gap-5 -mt-20 px-20 overflow-hidden">
            {{-- <div class="overflow-hidden rounded-full">
                <img src="{{ URL::asset('images/profile.svg') }}" class="w-48 h-48 rounded-full scale-[1.2]" alt="">
            </div> --}}
            <div class="flex flex-col bg-white rounded-sm w-max p-4 gap-3">
                <p class="text-gray-800 font-semibold text-5xl w-max mb-2">Hi There!</p>
                <p class="text-gray-800 font-semibold text-5xl w-max">Im <span class="font-bold text-main-purple">Chia Wilsen</span></p>
                <p class="text-gray-800 font-medium text-md">I'm a Fullstack Web Developer/UIUX Designer</p>
            </div>
        </div>
    </section>
    <section id="skill" class="min-h-screen flex flex-col items-center  mt-10">
        <h2 class="text-center text-gray-800 font-extrabold text-4xl mb-16">My Skills</h2>
        <div class="w-1/3">
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <div class="splide__arrows splide__arrows--ltr hidden">
                        <button
                          class="splide__arrow splide__arrow--prev"
                          type="button"
                          aria-label="Previous slide"
                          aria-controls="splide01-track"
                        >
                          <svg>...</svg>
                        </button>
                        <button
                          class="splide__arrow splide__arrow--next"
                          type="button"
                          aria-label="Next slide"
                          aria-controls="splide01-track"
                        >
                          <svg>...</svg>
                        </button>
                      </div>
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/figma_icon.png') }}" class="w-24" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/html_icon.png') }}" class="w-24" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/css_icon.png') }}" class="w-24" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/js_icon.png') }}" class="w-24" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/php_icon.png') }}" class="w-24" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </section>
    <script src="{{ URL::asset('js/three.min.js') }}"></script>
    <script src="{{ URL::asset('js/vanta.globe.min.js') }}"></script>
    <script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js "></script>
    <script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js "></script>
    <script>
        VANTA.GLOBE({
          el: "#hero",
          mouseControls: true,
          touchControls: true,
          gyroControls: false,
          minHeight: 300.00,
          minWidth: 200.00,
          scale: 1.00,
          scaleMobile: 1.70,
          color: 0xff3fa4,
          color2: 0xb121b1,
          size: 1.50,
          backgroundColor: 0xffffff
        })


        new Splide( '.splide',
        {
            perPage: 3,
            breakpoints: {
                960: {
                    perPage: 3,
                },
                720: {
                    perPage: 3,
                },
                540: {
                    perPage: 2,
                },
            },
            type: 'loop'
        }
        ).mount( window.splide.Extensions );
        new JParticles.Wave('#wave', {
            num: 3,
            line: true,
            lineColor: [
            '#212121',
            '#212121',
            '#212121',
            ],
            lineWidth: [0.5, 0.7, 0.9],
            offsetLeft: [2, 1, 0],
            offsetTop: 0.75,
            crestHeight: [10, 14, 18],
            crestCount: 2,
            speed: 0.05,
        })
    </script>
</body>
</html>
