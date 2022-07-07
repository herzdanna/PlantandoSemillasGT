<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/app.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <!-- Extras -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@400;700&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.png">
    <title>Stories</title>
</head>
<body>
    @include('front.navs.topmenu')
    <header class="bg-blue position-relative overflow-hidden pt-10">
        <img class="subpage-header-img" src="/assets/img/banner-img-4.png" style="top: 10%; right: 15%; max-height: 300px;">
        <img class="subpage-header-img d-none d-lg-block" src="/assets/img/banner-img-4.png" style="top: 15%; left: 10%; max-height: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md offset-md-2" style="z-index: 10;">
                    <h1 class="d-inline-block bg-white text-primary fw-bold rounded-top py-3 px-4 mb-0 text-capitalize">{!! trans("Stories.title") !!}</h1>
                </div>
            </div>
        </div>
    </header>

    <a href="" role="article" class="section-bg text-center text-decoration-none link-white py-8 py-lg-10">
        <img src="/assets/img/story-1.jpg" alt="" class="section-bg-img">
        <div class="container position-relative" style="z-index: 10;">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <h1 class="fw-bold" data-aos="fade-up">{!! trans("Stories.banner.title") !!}</h1>
                    <p data-aos="fade-up" data-aos-delay="200">{!! trans("Stories.banner.text1") !!}</p>
                </div>
            </div>
        </div>
    </a>

    <section class="bg-green py-6">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h1 class="text-primary h3 fw-bold mb-0 text-capitalize">{!! trans("Stories.articles.title") !!}</h1>
            </div>

            <div class="row gx-3 gx-xl-5 gy-3">
                @foreach($blogs as $blog)
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="/blog#post{{$blog->id}}" class="post-card link-primary text-center" data-aos="fade-up">
                        <div class="post-card-img ratio ratio-4x3 mb-3 mb-lg-4">
                            <img class="h-100 w-100 object-cover" src="{{$blog->image}}">
                        </div>
                        <h4 class="tx-3 tx-md-4 mb-0 ">{{$blog->title}}</h4>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-5 mt-lg-7" data-aos="fade-up">
                <a href="/blog" class="btn btn-primary px-4 ">{!! trans("Stories.articles.button") !!}</a>
            </div>
        </div>
    </section>

    <section class="bg-blue py-5">
        <div class="container">
            <header class="text-center mb-5">
                <h1 class="text-primary h3 fw-bold text-capitalize">{!! trans("Stories.videos.title") !!}</h1>
            </header>

            <div class="row gx-3 gx-xl-5 gy-5">
                @foreach($videos as $video)
                <div class="col-md-6 col-md-4 col-lg-4">
                    <a href="#" onclick="openmodal('{{$video->id}}')" class="post-card text-center link-primary clic" data-aos="fade-up" >
                        <div class="post-card-img ratio ratio-4x3 mb-3 mb-md-4">
                            <img class="logo-youtube" src="/assets/img/youtube.png">
                            <img class="h-100 w-100 object-cover" src="{{$video->image}}">
                        </div>
                        <h4 class="tx-4 ">{{$video->title}}</h4>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-5 mt-lg-7" data-aos="fade-up">
                <a href="https://www.youtube.com/channel/UCqm1YqvHZcTkf-ClFNroHlA" target="_blank" class="btn btn-primary px-4 text-capitalize">{!! trans("Stories.videos.button") !!}</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/stories/Staytuned.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="bg-secondary d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-4 px-lg-7">
                        <h3 class="text-primary fw-bold mb-5 text-capitalize" data-aos="fade-up">{!! trans("Stories.suscription.title") !!}</h3>
                        <p class="tx-4 mb-4" data-aos="fade-up">{!! trans("Stories.suscription.text1") !!}</p>
                        <a href="#subscribe-form" class="btn btn-primary btn-lg px-4 text-capitalize" data-aos="fade-up">{!! trans("Stories.suscription.button") !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ************************************** modal videos ******************************************** -->

    <div class="videos">
        @foreach($videos as $video)
        <div class="modal fade" id="m{{$video->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titleModal">{{$video->title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="ratio ratio-16x9">
                        <iframe class="youtube-video" src="{!!$video->url!!}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @include('front.navs.footer')

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
    <!-- Custom Javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="/assets/js/vendors.js" charset="utf-8"></script>
    <script src="/assets/js/main.js" charset="utf-8"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/dinamic.js" charset="utf-8"></script>
    <!-- Home -->
    <script>
        const heroSlider = new Swiper('#hero-slider', {
            slidesPerView: 1,
            spaceBetween: 16,
            loop: true,
            autoplay: {
                delay: 5000,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        const storiesSlider = new Swiper('#stories-slider', {
            slidesPerView: 1,
            spaceBetween: 16,
            autoplay: {
                delay: 2000,
            },

            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 48
                },
            }
        });

        const supportSlider = new Swiper('#support-slider', {
            slidesPerView: 1,
            spaceBetween: 16,
            autoplay: {
                delay: 2000,
            },

            breakpoints: {
                768: {
                    slidesPerView: 4,
                    spaceBetween: 48
                },
            }
        });
    </script>
    <!-- what -->
    <script>
        const sliderOne = new Swiper('#sliderOne', {
            slidesPerView: 1,
            spaceBetween: 16,
            loop: false,
            effect: 'fade',
            autoHeight: true,
            autoplay: false,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                disabledClass: 'd-none',
            },
        });
    </script>

    <!-- where -->
    <script>
        const locationsSlider = new Swiper('#locations-slider', {
            slidesPerView: 1,
            spaceBetween: 16,
            effect: 'fade',
            autoHeight: true,

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                disabledClass: 'd-none'
            },
        });
        
        const programsSlider = new Swiper('#programs-slider', {
            slidesPerView: 2,
            spaceBetween: 16,
            loop: true,
            autoplay: {
                delay: 2000,
            },

            breakpoints: {
                768: {
                    slidesPerView: 6,
                    spaceBetween: 24
                },
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        const newsSlider = new Swiper('#news-slider', {
            slidesPerView: 1,
            spaceBetween: 16,
            autoplay: {
                delay: 2000,
            },

            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 48
                },
            }
        });
    </script>

    <!-- join us -->

    <script>    
        const   btn = document.querySelectorAll('.js-acc-btn'),
                img = document.getElementById('acc-img');

        btn.forEach((b) => {
            b.addEventListener('click', () => {
                img.setAttribute('src', `/assets/img/joinus/${b.dataset.img}`)
            })
        })
    </script>

    <script>
        function openmodal(id){
            $('#m'+id).modal("show");
        }
    </script>

    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7AwT0o-6B1gV12S0RAoOLirqGTygJoEc&callback=initMap"></script>
    <script src="/assets/js/maps.js"></script>
</body>
</html>
