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
    <title>Our Offices</title>
</head>
<body>
    @include('front.navs.topmenu')
    <header class="bg-blue position-relative overflow-hidden pt-10">
        <img class="subpage-header-img" src="/assets/img/banner-img-4.png" style="top: 10%; right: 15%; max-height: 300px;">
        <img class="subpage-header-img d-none d-lg-block" src="/assets/img/banner-img-4.png" style="top: 15%; left: 10%; max-height: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md offset-md-2" style="z-index: 10;">
                    <h1 class="d-inline-block bg-white text-primary fw-bold rounded-top py-3 px-4 mb-0 ">{!! trans("Offices.title") !!}</h1>
                </div>
            </div>
        </div>
    </header>  
    
    <section class="bg-green py-8">
        <header class="text-center py-5" data-aos="fade-up">
            <div class="container">
                <h4 class="mb-0 ">{!! trans("Offices.planting.title") !!}</h4>
            </div>
        </header>
        <div class="container">
            <div class="row justify-content-center align-items-lg-center gx-lg-5" >
                <div class="col-lg-10 d-flex justify-content-center" data-aos="fade-up">
                    <p class="tx-3 mb-4">{!! trans("Offices.planting.content") !!}</p>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="/about-us#staff" class="btn btn-secondary btn-lg px-4 ">{!! trans("Offices.planting.button") !!}</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">

            <div class="row g-0">
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/legaloffices/plantingSeedsCanada.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-4 px-lg-7" data-aos="fade-up">
                        <h3 class="text-primary mb-5">{!! trans("Offices.canada.title") !!}</h3>
                        <p class="tx-3 mb-2">{!! trans("Offices.canada.content") !!}</p>
                        <p class="tx-3 mb-2">{!! trans("Offices.canada.content2") !!}</p>
                        <p class="tx-3 mb-2">{!! trans("Offices.canada.content3") !!}</p>
                        <p class="tx-3 mb-2 fw-bold">{!! trans("Offices.canada.content4") !!}</p>


                    </div>
                </div>
            </div>

            <div class="row flex-column-reverse flex-lg-row g-0">
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-4 px-lg-7" data-aos="fade-up">
                        <h3 class="text-primary mb-5">{!! trans("Offices.usa.title") !!}</h3>
                        <p class="tx-3 mb-2"> {!! trans("Offices.usa.content") !!}</p>
                        <p class="tx-3 mb-2">{!! trans("Offices.usa.content2") !!}</p>
                        <p class="tx-3 mb-2 fw-bold">{!! trans("Offices.usa.content3") !!}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/legaloffices/plantingSeedsUsa.jpg" alt="">
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
