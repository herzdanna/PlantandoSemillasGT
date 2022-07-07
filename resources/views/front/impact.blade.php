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
    <title>Impact</title>
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

    <section>
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/impact/Ourimpact.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="bg-smoke d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-3 px-lg-7">
                        <h3 class="text-primary fw-bold mb-4 text-capitalize" data-aos="fade-up">{!! trans("Impact.impact.title") !!}</h3>
                        <p class="tx-4 mb-4" data-aos="fade-up">{!! trans("Impact.impact.text1") !!}</p>
                        <p class="tx-4 mb-4" data-aos="fade-up">{!! trans("Impact.impact.text2") !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="need-quality-education" class="text-center">
        <div class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <h1 class="fw-bold h3 text-primary mb-4 " data-aos="fade-up">{!! trans("Impact.childhood.title") !!}</h1>
                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150">{!! trans("Impact.childhood.text1") !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-6 col-lg-4">
                    <div class="bg-green d-flex flex-column justify-content-center text-primary text-center py-5 px-3 px-md-4 h-100">
                        <h2 class="display-3 fw-bold mb-3" data-aos="fade-up">{!! trans("Impact.square1.title") !!}</h2>
                        <p class="tx-3 tx-md-4 mb-0" data-aos="fade-up">{!! trans("Impact.square1.text") !!}</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4 d-none d-lg-block">
                    <img class="w-100 h-100 object-cover" src="/assets/img/DSC02345-2.jpg" alt="">
                </div>
                <div class="col-6 col-lg-4">
                    <div class="bg-yellow d-flex flex-column justify-content-center text-primary text-center py-5 px-3 px-md-4 h-100">
                        <h2 class="display-3 fw-bold mb-3" data-aos="fade-up">{!! trans("Impact.square2.title") !!}</h2>
                        <p class="tx-3 tx-md-4 mb-0" data-aos="fade-up">{!! trans("Impact.square2.text") !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="how-we-work" class="text-center">
        <div class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <h1 class="fw-bold h3 text-primary mb-4 text-capitalize" data-aos="fade-up">{!! trans("Impact.work.title") !!}</h1>
                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150">{!! trans("Impact.work.text1") !!}</p>
                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150">{!! trans("Impact.work.text2") !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-6 col-lg-4">
                    <img class="w-100 h-100 object-cover" src="/assets/img/impact/Howwework1.jpg" alt="">
                </div>
                <div class="col-6 col-lg-4">
                    <div class="bg-secondary d-flex flex-column justify-content-center text-primary text-center py-5 px-3 px-md-4 h-100">
                        <h2 class="display-3 fw-bold mb-3" data-aos="fade-up">{!! trans("Impact.square3.title") !!}</h2>
                        <p class="tx-3 tx-md-4 mb-0" data-aos="fade-up">{!! trans("Impact.square3.text") !!}</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="bg-green d-flex flex-column justify-content-center text-primary text-center py-5 px-3 px-md-4 h-100">
                        <h2 class="display-3 fw-bold mb-3" data-aos="fade-up">{!! trans("Impact.square4.title") !!}</h2>
                        <p class="tx-3 tx-md-4 mb-0" data-aos="fade-up">{!! trans("Impact.square4.text") !!}</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="bg-primary d-flex flex-column justify-content-center text-white text-center py-5 px-3 px-md-4 h-100">
                        <p class="tx-3 tx-md-4 mb-3" data-aos="fade-up">{!! trans("Impact.square5.text1") !!}</p>
                        <h2 class="display-3 fw-bold mb-3" data-aos="fade-up">{!! trans("Impact.square5.title") !!}</h2>
                        <p class="tx-3 tx-md-4 mb-0" data-aos="fade-up">{!! trans("Impact.square5.text2") !!}</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <img class="w-100 h-100 object-cover" src="/assets/img/impact/Howwework2.jpg" alt="">
                </div>
                <div class="col-6 col-lg-4">
                    <div class="bg-blue d-flex flex-column justify-content-center text-primary text-center py-5 px-3 px-md-4 h-100">
                        <p class="tx-3 tx-md-4 mb-3" data-aos="fade-up">{!! trans("Impact.square6.text1") !!}</p>
                        <h2 class="display-5 lh-1 fw-bold mb-3" data-aos="fade-up">{!! trans("Impact.square6.title") !!}</h2>
                        <p class="tx-3 tx-md-4 mb-0" data-aos="fade-up">{!! trans("Impact.square6.text2") !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="financial-transparency" class="text-center">
        <div class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="mb-5">
                            <h1 class="fw-bold h3 text-primary mb-4" data-aos="fade-up">{!! trans("Impact.finalcial.title") !!}</h1>
                            <p class="tx-4" data-aos="fade-up" data-aos-delay="150">{!! trans("Impact.finalcial.text") !!}</p>
                        </div>

                        <div class="row gx-lg-5">
                            <div class="col-6 col-lg-6" data-aos="fade-up">
                                <div class="ratio ratio-4x3 mb-4">
                                    <img class="w-100 h-100 object-cover rounded-3" src="/assets/img/DSC02345-2.jpg" alt="">
                                </div>
                                <h5 class="text-primary tx-3 tx-md-4 fw-bold mb-3">{!! trans("Impact.finalcial.subtitle1") !!}</h5>

                                <ul class="list-unstyled">
                                    @foreach($financials as $financial)
                                    <li><a href="{{$financial->doc}}" target="_blank" class="link-primary">{{$financial->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-6 col-lg-6" data-aos="fade-up">
                                <div class="ratio ratio-4x3 mb-4">
                                    <img class="w-100 h-100 object-cover rounded-3" src="/assets/img/impact/annualReports.jpg" alt="">
                                </div>
                                <h5 class="text-primary tx-3 tx-md-4 fw-bold mb-3">{!! trans("Impact.finalcial.subtitle2") !!}</h5>

                                <ul class="list-unstyled">
                                    @foreach($anuals as $anual)
                                    <li><a href="{!!$anual->doc!!}" target="_blank" class="link-primary">{{$anual->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
