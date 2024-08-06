<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css') }}">

    {{-- Splide --}}
    <link href=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css " rel="stylesheet">

    {{-- LightBox2 --}}
    <link href="{{URL::asset('css/lightbox.css')}}" rel="stylesheet" />

    {{-- JQuery --}}

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Chia Wilsen</title>
</head>
<body>
    <section>
        <nav class="z-50 w-full bg-dark-blue flex flex-col lg:flex-row gap-5 lg:px-60 py-7 justify-between items-center sticky top-0 shadow-sm shadow-black" data-aos="fade-down" data-aos-duration="1000">
            <a href="" class="font-medium text-white tracking-[.25em]">@ChiaWilsen</a>
            <div class="flex gap-4">
                <a href="https://instagram.com/chwlsn_"><img src="{{ URL::asset('images/instagram.png') }}" class="w-full h-5" alt=""></a>
                <a href="https://github.com/wilsench"><img src="{{ URL::asset('images/git_icon.png') }}" class="w-full h-5 bg-white rounded-full" alt=""></a>
                <a href="https://www.linkedin.com/in/chiawilsen"><img src="{{ URL::asset('images/linkedin_icon.png') }}" class="w-full h-5" alt=""></a>
            </div>
        </nav>
    </section>
    <section id="hero" class="w-screen max-h-screen min-h-screen flex justify-start lg:px-60">
        <div class="max-h-screen min-h-screen w-screen backdrop-blur-sm lg:backdrop-blur-none flex flex-col justify-center lg:justify-start lg:flex-row items-center gap-2 lg:gap-5 -mt-20 overflow-hidden">
            <div class="overflow-hidden rounded-full" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ URL::asset('images/avatar.jpg') }}" class="w-32 h-32 lg:w-48 lg:h-48 border-[2px] border-main-blue rounded-full object-cover hover:scale-[1.05] duration-200" alt="">
            </div>
            <div class="flex flex-col items-center lg:items-start rounded-sm w-full lg:w-max p-4 gap-1 lg:gap-3" data-aos="fade-right" data-aos-duration="1000">
                <p class="text-white font-semibold text-xl lg:text-5xl w-max lg:mb-2">Hi There!</p>
                <p class="text-white font-semibold text-xl lg:text-5xl w-max">I'm <span class="font-bold text-main-blue">Chia Wilsen</span></p>
                <p class="text-white font-medium text-sm lg:text-md text-center lg:text-left">Fullstack Web Developer/UIUX Designer</p>
            </div>
        </div>
    </section>
    <section id="skill" class="flex flex-col items-center py-20">
        <h2 class="text-center text-dark-blue font-bold text-3xl lg:text-4xl tracking-[.25em]" data-aos="fade-up" data-aos-duration="1000">My Skills</h2>
        <p class="mt-3 mb-10 text-center text-secondary-dark-blue text-sm uppercase font-bold" data-aos="fade-up" data-aos-duration="1000">a passionate and skilled web developer.</p>
        <div class="w-full px-8 lg:px-0 lg:w-1/3" data-aos="fade" data-aos-duration="1000">
            <section id="skill_slide" class="splide bg-white rounded-lg" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list content-center">
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/figma_icon.png') }}" class="w-[80px] lg:w-[110px] h-auto" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/html_icon.png') }}" class="w-[80px] lg:w-[110px] h-auto" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/css_icon.png') }}" class="w-[80px] lg:w-[110px] h-auto" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/js_icon.png') }}" class="w-[80px] lg:w-[110px] h-auto" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/php_icon.png') }}" class="w-[80px] lg:w-[110px] h-auto" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/laravel_icon.png') }}" class="w-[80px] lg:w-[110px] h-auto" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/livewire_icon.png') }}" class="w-[80px] lg:w-[110px] h-auto rounded-full" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                <img src="{{ URL::asset('images/sass_icon.png') }}" class="w-[80px] lg:w-[110px] h-auto pt-3" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </section>
    <section id="proficiency" class="w-screen flex flex-col-reverse items-center gap-6 lg:gap-10 lg:flex-row px-10 lg:px-80 py-20 bg-dark-blue justify-center select-none">
        <div class="flex flex-col lg:flex-row w-full items-center justify-center gap-5 lg:gap-10">
            <div class="flex flex-col w-full lg:w-max max-w-sm min-h-[250px] border border-white bg-white/10 hover:shadow-sm hover:shadow-white hover:cursor-pointer p-8 lg:p-10 rounded-lg duration-300" data-aos="fade-right" data-aos-duration="1000">
                <div class="flex items-center gap-2">
                    <img src="{{URL::asset('images/figma_icon.png')}}" class="h-10" alt="">
                    <p class="text-md lg:text-xl font-bold text-white">UI/UX Designer</p>
                </div>
                <p class="text-white text-sm lg:text-normal mt-3 text-justify">As a UI/UX designer, I excel in creating intuitive and aesthetically pleasing user interfaces, as well as crafting efficient and satisfying user experiences through a user-centered design approach.</p>
            </div>
            <div class="flex flex-col w-full lg:w-max max-w-sm min-h-[250px] border border-white bg-white/10 hover:shadow-sm hover:shadow-white hover:cursor-pointer p-8 lg:p-10 rounded-lg duration-300" data-aos="fade-right" data-aos-duration="1000">
                <div class="flex items-center gap-2">
                    <img src="{{URL::asset('images/vscode_icon.jpg')}}" class="h-7 lg:h-10 rounded-md" alt="">
                    <p class="text-md lg:text-xl font-bold text-white">Fullstack Web Developer</p>
                </div>
                <p class="text-white text-sm lg:text-normal mt-3 text-justify">As a full-stack web developer, I excel in designing, developing, and maintaining both front-end and back-end components of web applications, ensuring seamless performance, security, and user experience.</p>
            </div>
        </div>
        <div class="flex flex-col w-full lg:rotate-90 justify-center">
            <h2 class="w-full text-center text-white font-bold text-3xl lg:text-4xl tracking-[.25em]" data-aos="fade-up" data-aos-duration="1000">About Me</h2>
            <p class="mt-3 text-center text-gray-200 text-sm uppercase font-bold" data-aos="fade-up" data-aos-duration="1000">As a FullStack Web Developers</p>
        </div>
    </section>
    <section id="project" class="py-16 lg:py-24">
        <div class="">
            <h2 class="text-center text-dark-blue font-bold text-3xl lg:text-4xl tracking-[.25em]" data-aos="fade-up" data-aos-duration="1000">My Projects</h2>
            <p class="mt-3 mb-10 text-center text-secondary-dark-blue text-sm uppercase font-bold" data-aos="fade-up" data-aos-duration="1000">Some projects that i have worked on</p>
        </div>
        <div class="px-10 lg:px-40" data-aos="fade" data-aos-duration="1000">
            <section id="project_slide" class="splide bg-white rounded-lg">
                <div class="splide__track">
                    <ul class="splide__list content-center">
                        @for ($i = 1; $i < 12; $i++)
                            <li class="splide__slide">
                                <div class="max-w-max flex flex-col items-center rounded-lg py-5">
                                    <a href="{{URL::asset('images/project_'.$i.'_full'.'.png')}}"

                                    data-title="
                                    @switch($i)
                                        @case($i == 1)
                                            Coffeeshop Landing Page Website
                                        @break
                                        @case($i == 2)
                                            Store System for ordering Online Coffee
                                        @break
                                        @case($i == 3)
                                            Online Course Landing Page Website
                                        @break
                                        @case($i == 4)
                                            Web Based Application for Automation Bot Subscription
                                        @break
                                        @case($i == 5)
                                            School Profile Website
                                        @break
                                        @case($i == 6)
                                            School Register System
                                        @break
                                        @case($i == 7)
                                            School Login System
                                        @break
                                        @case($i == 8)
                                            Vacation Ordering Website
                                        @break
                                        @case($i == 9)
                                            Content Management System based on Role (CMS Website)
                                        @break
                                        @case($i == 10)
                                            Content Management System based on Role (CMS Website)
                                        @break
                                        @case($i == 11)
                                            Content Management System based on Role (CMS Website)
                                        @break
                                    @endswitch
                                    "

                                    data-lightbox="roadtrip"><img src="{{ URL::asset('images/project_'.$i.'.png') }}"  class="w-full h-full max-h-[400px]" alt=""></a>
                                </div>
                            </li>
                        @endfor
                    </ul>
                </div>
            </section>
        </div>
    </section>
    <section id="contact" class="flex flex-col gap-10 lg:gap-0 items-center lg:flex-row py-20 bg-dark-blue justify-center select-none">
        <div class="flex flex-col w-max lg:-rotate-90 justify-center">
            <h2 class="text-center text-white font-bold text-3xl lg:text-4xl tracking-[.25em]" data-aos="fade-up" data-aos-duration="1000">Contact Me</h2>
            <p class="mt-3 text-center text-gray-200 text-sm uppercase font-bold" data-aos="fade-up" data-aos-duration="1000">Get in touch with me</p>
        </div>
        <div class="flex justify-center gap-10 px-10 lg:px-0 w-full lg:w-1/2">
            <form class="border border-white px-6 lg:px-16 py-6 lg:py-12 rounded-md w-full" data-aos="fade-right" data-aos-duration="1000">
                <div class="flex flex-col mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-white">Name</label>
                    <input type="text" id="name" class="bg-transparent text-white border border-gray-300 text-sm rounded-md block focus:outline-none focus:border-2  w-full p-2.5" placeholder="Your name" required />
                </div>
                <div class="flex flex-col mb-8">
                    <label for="message" class="block mb-2 text-sm font-medium text-white">Message</label>
                    <input type="text" id="message" class="bg-transparent text-white border border-gray-300 text-sm rounded-md block focus:outline-none focus:border-2  w-full p-2.5" placeholder="Your message" required />
                </div>
                <button type="button" onclick="sendMessage()" class="w-full py-2 border border-white bg-white rounded-md text-dark-blue font-semibold hover:bg-transparent hover:text-white duration-300">Send Message</button>
            </form>
        </div>
    </section>
    <section id="footer" class="py-20">
        <div class="w-full flex flex-col justify-center items-center">
            <hr class="w-1/2">
            <div class="flex mt-5 gap-5">
                <a href="https://instagram.com/chwlsn_" target="_blank"><img src="{{ URL::asset('images/instagram.png') }}" class="h-5 grayscale" alt=""></a>
                <a href="https://github.com/wilsench" target="_blank"><img src="{{ URL::asset('images/git_icon.png') }}" class="h-5 grayscale" alt=""></a>
                <a href="https://www.linkedin.com/in/chiawilsen" target="_blank"><img src="{{ URL::asset('images/linkedin_icon.png') }}" class="h-5 grayscale" alt=""></a>
            </div>
            <p class="mb-5 mt-3 text-dark-blue font-semibold">More about me.</p>
            <hr class="w-1/2">
        </div>
    </section>

    {{-- LightBox2 --}}
    <script src="{{URL::asset('js/lightbox-plus-jquery.js')}}"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- Splide --}}
    <script src="{{ URL::asset('js/three.min.js') }}"></script>
    <script src="{{ URL::asset('js/vanta.globe.min.js') }}"></script>
    <script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js "></script>
    <script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js "></script>

    {{-- Scripts --}}
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
          color: 0x007BFF,
          color2: 0xFFFFFF,
          size: 1.50,
          backgroundColor: 0x15193c
        })


        new Splide( '#skill_slide',
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
                    perPage: 3,
                },
            },
            type: 'loop',
            autoScroll: {
                speed: -0.8,
              },
            pagination: false
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
            speed: 0.1,
        })
    </script>

    <script>
        new Splide( '#project_slide',
        {
            perPage: 3,
            gap: '2rem',
            breakpoints: {
                960: {
                    perPage: 3,
                },
                720: {
                    perPage: 3,
                },
                540: {
                    perPage: 1,
                },
            },
            type: 'loop',
            autoScroll: {
                speed: 0.7,
              },
            pagination: false
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
            speed: 0.1,
        })
    </script>

    <script>
        lightbox.option({
            'showImageNumberLabel': false,
        })
    </script>

    <script>
        AOS.init();
    </script>

    {{-- Function Scripts --}}
    <script>
        function sendMessage() {
            const name = document.getElementById('name');
            const msg = document.getElementById('message');

            if (name.value && msg.value != "") {
                window.location.href="https://wa.me/6281319864839?text=Halo! Saya "+name.value+", "+msg.value;
            }
        }
    </script>
</body>
</html>
