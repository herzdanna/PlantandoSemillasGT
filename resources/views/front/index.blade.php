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
    <title>Home</title>
</head>
<body>
    @include('front.navs.topmenu')
    <header>
        <div class="container-fluid px-0">
            <div id="hero-slider" class="swiper hero-slider">
                <div class="swiper-wrapper">
                    @foreach($sliders as $slider)
                    <section class="swiper-slide">
                        <img src="{{$slider->image}}" class="hero-slider-img">
                        <div class="hero-slider-content py-4 pb-lg-8">
                            <div class="container">
                                <div class="text-center">
                                    <a href="{{$slider->boton_url}}" target="_blank" class="btn btn-secondary btn-lg">{{$slider->boton_txt}}</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </header>

    <section class="text-center">
        <div class="py-5" data-aos="fade-up">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <h1 class="fw-bold h3 text-primary ">{!! trans("Home.change.title") !!}</h1>
                        <p class="tx-4">{!! trans("Home.change.content") !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row g-0">
                @foreach($numbers as $number)
                <div class="col-6 col-lg-3">
                    <div class="{{$number->color}} text-primary text-center py-5 px-3 px-md-4 h-100">
                        <h2 class="display-3 fw-bold mb-3"><span class="js-counter" data-counter="{{$number->number}}">0</span>{{$number->symbol}}</h2>
                        <p class="tx-3 tx-md-4 mb-0">{{$number->title}}</p>
                    </div>
                </div>
                @endforeach
        	</div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/home/img-1.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-4 px-lg-7" data-aos="fade-up">
                        <h3 class="text-primary fw-bold mb-5">{!! trans("Home.ourCoreBeliefs.title") !!}</h3>
                        <ol class="tx-4 marker-primary mb-4">
                            <li class="mb-4">{!! trans("Home.ourCoreBeliefs.list1") !!}</li>
                            <li class="mb-4">{!! trans("Home.ourCoreBeliefs.list2") !!}</li>
                            <li class="mb-4">{!! trans("Home.ourCoreBeliefs.list3") !!}</li>
                        </ol>
                        <a href="/work/what" class="btn btn-blue btn-lg px-4">{!! trans("Home.ourCoreBeliefs.button") !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary text-white py-5">
        <div class="container">
            <header class="row justify-content-center mb-5" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="h3 fw-bold">{!! trans("Home.ourStories.title") !!}</h1>
                        <p class="tx-4">{!! trans("Home.ourStories.content") !!}</p>
                    </div>
                </div>
            </header>

            <div id="stories-slider" class="swiper mx-n2 mx-sm-0 px-5 px-sm-0" data-aos="fade-up">
                <div class="swiper-wrapper">
                    @foreach($blogs as $blog)
                    <div class="swiper-slide">
                        <a href="/blog#post{{$blog->id}}" class="post-card text-center link-light">
                            <div class="post-card-img ratio ratio-4x3 mb-4">
                                <img class="h-100 w-100 object-cover" src="{{$blog->image}}">
                            </div>
                            <h4 class="mb-0">{{$blog->title}}</h4>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center mt-6">
                <a href="/stories" class="btn btn-primary btn-lg">{!! trans("Home.ourStories.button") !!}</a>
            </div>
        </div>
    </section>


    <section class="bg-green py-6">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h1 class="text-primary h3 fw-bold mb-0 ">{!! trans("Home.supportOurWork.title") !!}</h1>
            </div>

            <div id="support-slider" class="swiper mx-n2 mx-sm-0 px-5 px-sm-0" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="/join-us#donate" class="post-card link-primary text-center">
                            <div class="post-card-img ratio ratio-4x3 mb-4">
                                <img class="h-100 w-100 object-cover" src="/assets/img/home/img-3.jpg">
                            </div>
                            <h4 class="mb-0 ">{!! trans("Header.donate") !!}</h4>   
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/join-us#sponsor" class="post-card link-primary text-center">
                            <div class="post-card-img ratio ratio-4x3 mb-4">
                                <img class="h-100 w-100 object-cover" src="/assets/img/home/img-4.jpg">
                            </div>
                            <h4 class="mb-0 ">{!! trans("Home.supportOurWork.list1") !!}</h4>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/join-us#friends-circle" class="post-card link-primary text-center">
                            <div class="post-card-img ratio ratio-4x3 mb-4">
                                <img class="h-100 w-100 object-cover" src="/assets/img/support-3.jpg">
                            </div>
                            <h4 class="mb-0 ">{!! trans("Home.supportOurWork.list2") !!}</h4>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/join-us#exchange-programs" class="post-card link-primary text-center">
                            <div class="post-card-img ratio ratio-4x3 mb-4">
                                <img class="h-100 w-100 object-cover" src="/assets/img/support-4.jpg">
                            </div>
                            <h4 class="mb-0 ">{!! trans("Home.supportOurWork.list3") !!}</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front.navs.footer')

    <!-- Javascript -->
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
        $(document).ready(function(){
            $(".clic").on("click", function(){
                
                let id = $(this).attr("href");
                let ventanaModal = $('#videoContainer');

                if(id == "#learningLove"){
                    video = 'https://www.youtube.com/embed/9nB0R4cvdEs';
                    title = "Learning with love at home and school";
                }else if(id == "#parentTraining"){
                    video = 'https://www.youtube.com/embed/ZUCX4eeFoi4';
                    title = "Parent training 2021";
                }else if(id == "#plantingSeeds"){
                    video = 'https://www.youtube.com/embed/JaxM-7OU8N8';
                    title = "Planting Seeds Methodology";
                }

                let iframeVideo = $(".youtube-video");
                let titleModal = $("#titleModal").append(title)

                iframeVideo.attr('src',video);

                html = $(
                    '<div class="modal fade" id="videoContainer" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">'+
                        '<div class="modal-dialog modal-dialog-centered">'+
                            '<div class="modal-content">'+
                                '<div class="modal-header">'+
                                    '<h5 class="modal-title" id="titleModal"></h5>'+
                                    '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>'+
                                '</div>'+
                                '<div class="ratio ratio-16x9">' +
                                    '<iframe class="youtube-video"  title="YouTube video" allowfullscreen></iframe>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+ 
                    '</div>' 
                );

                $(".videos").html(html);

                //alert(id);
                ventanaModal.modal("show");

                ventanaModal.on('hidden.bs.modal', function(event){
                    iframeVideo.attr('src',null);
                    titleModal = null;
                });
            });
            
        });
    </script>

    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7AwT0o-6B1gV12S0RAoOLirqGTygJoEc&callback=initMap"></script>
    <script src="/assets/js/maps.js"></script>


</body>
</html>
