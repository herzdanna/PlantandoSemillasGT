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
    <title>What</title>
</head>
<body>
    @include('front.navs.topmenu')
    <header class="bg-secondary position-relative overflow-hidden pt-10">
        <img class="subpage-header-img d-none d-lg-block" src="/assets/img/banner-img-2.png" style="top: 10%; right: 15%; max-height: 400px;">
        <img class="subpage-header-img" src="/assets/img/banner-img-3.png" style="top: 15%; left: 5%;">
        <div class="container">
            <div class="row">
                <div class="col-md offset-md-2" style="z-index: 10;">
                    <h1 class="d-inline-block bg-white text-primary fw-bold rounded-top py-3 px-4 mb-0 text-capitalize">{!! trans("What.title") !!}</h1>
                </div>
            </div>
        </div>
    </header>
    
    <section id="early-chilhood-education">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/s8g5df5sd5.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-3 px-lg-7" data-aos="fade-up">
                        <h3 class="text-primary fw-bold mb-4">{!! trans("What.earlyEducation.title") !!}</h3>
                        <p class="tx-4 mb-4">{!! trans("What.earlyEducation.content") !!}</p>
                        <p class="tx-4 mb-4">{!! trans("What.earlyEducation.content2") !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section >
        <div class="container-fluid px-0">
            <div id="philosophy-and-methodology" class="row g-0">
                @foreach($texts as $text)
                <div class="col-6 col-lg-3">
                    <a class="d-flex flex-column justify-content-center {{$text->color}} text-primary text-center py-5 px-3 px-md-4 h-100 w-100 text-decoration-none" style="aspect-ratio: 4/3;" data-bs-toggle="collapse" href="#ourwork-what-collapse-{{$text->id}}" role="button" aria-expanded="false">
                        <h4 class="fw-bold mb-3 e" data-aos="fade-up">{{$text->title}}</h4>
                        <div class="collapse" id="ourwork-what-collapse-{{$text->id}}">
                            <p class="tx-3 mb-0">{{$text->text}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="pb-5 pt-8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/JaxM-7OU8N8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="comprehensive-development" class="text-md-center py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <h1 class="fw-bold h3 text-center text-primary mb-4" data-aos="fade-up">{!! trans("What.comprehensive.title") !!}</h1>
                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150">{!! trans("What.comprehensive.content") !!}</p>
                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150">{!! trans("What.comprehensive.content2") !!}</p>

                        <a href="/stories" class="btn btn-green btn-lg px-4 mt-4 ">{!! trans("What.comprehensive.button") !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-n1">
        <div id="sliderOne" class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 position-relative">
                                <img class="w-100 h-100 object-cover" src="/assets/img/what/CommunityCenter.jpg" alt="">
                                
                                <!-- arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="col-lg-6 bg-secondary">
                                <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 px-4 px-lg-7">
                                    <h3 class="text-white fw-bold mb-4 text-capitalize">{!! trans("What.community.title") !!}</h3>
                                    <p class="tx-4 text-white mb-5">{!! trans("What.community.content") !!}</p>
                                    <a href="/work/where#community-center" class="btn btn-primary btn-lg px-4 text-capitalize">{!! trans("What.community.button") !!}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 position-relative">
                                <img class="w-100 h-100 object-cover" src="/assets/img/what/CommunityNetworksMeetings.jpg" alt="">

                                <!-- arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="col-lg-6 bg-secondary">
                                <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 px-4 px-lg-7">
                                    <h3 class="text-white fw-bold mb-4">{!! trans("What.communityNetwork.title") !!}</h3>
                                    <p class="tx-md-4 text-white mb-5">{!! trans("What.communityNetwork.content") !!}</p>
                                    <a href="/join-us#contacForm" class="btn btn-primary btn-lg px-4">{!! trans("What.communityNetwork.button") !!}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 position-relative">
                                <img class="w-100 h-100 object-cover" src="/assets/img/what/CommunityLedPrograms.jpg" alt="">

                                <!-- arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="col-lg-6 bg-secondary">
                                <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 px-4 px-lg-7">
                                    <h3 class="text-white fw-bold mb-4">{!! trans("What.communityPrograms.title") !!}</h3>
                                    <p class="tx-md-4 text-white mb-5">{!! trans("What.communityPrograms.content") !!}</p>
                                    <a href="/join-us" class="btn btn-primary btn-lg px-4">{!! trans("What.communityPrograms.button") !!}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 position-relative">
                                <img class="w-100 h-100 object-cover" src="/assets/img/what/CommunityDevelopmentApproach.jpg" alt="">

                                <!-- arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="col-lg-6 bg-secondary">
                                <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 px-4 px-lg-7">
                                    <h3 class="text-white fw-bold mb-4">{!! trans("What.communityDevelopment.title") !!}</h3>
                                    <p class="tx-md-4 text-white mb-4">{!! trans("What.communityDevelopment.content") !!}</p>
                                    <p class="tx-md-4 text-white mb-4">{!! trans("What.communityDevelopment.content2") !!}</p>
                                    <a href="/join-us" class="btn btn-primary btn-lg px-4 ">{!! trans("What.communityDevelopment.button") !!}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front.currentPrograms')
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
