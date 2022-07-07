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
    <title>Join Us</title>
</head>
<body>
    @include('front.navs.topmenu')
    <header class="bg-green position-relative overflow-hidden pt-10">
        <img class="subpage-header-img" src="/assets/img/banner-img-1.png" style="top: -10%; right: 5%;">
        <div class="container">
            <div class="row">
                <div class="col-md offset-md-2" style="z-index: 10;">
                    <h1 class="d-inline-block bg-white text-primary fw-bold rounded-top py-3 px-4 mb-0 ">{!! trans("JoinUs.title") !!}</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="text-md-center py-5" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1 class="fw-bold h3 text-center text-primary mb-4 ">{!! trans("JoinUs.support.title") !!}</h1>
                    <p class="tx-4">{!! trans("JoinUs.support.content") !!}</p>
                </div>
            </div>
        </div>
    </section>

    

    <section id="sponsor">
        <div class="container-fluid px-0">
            <div class="row flex-column-reverse flex-lg-row g-0">
                <div class="col-lg-6">
                    <div class="bg-blue d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-3 px-lg-7" data-aos="fade-up">
                        <h3 class="text-primary fw-bold mb-4 ">{!! trans("JoinUs.sponsor.title") !!}</h3>
                        <p class="tx-4 mb-0">{!! trans("JoinUs.sponsor.content") !!}</p>
                        <div class="mt-4">
                            <a href="#contacForm" class="btn btn-primary btn-lg px-4">{!! trans("JoinUs.sponsor.button") !!}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/joinus/Become_sponsor.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="friends-circle">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/joinus/Join_friends_circle.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="bg-smoke d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-3 px-lg-7" data-aos="fade-up">
                        <h3 class="text-primary fw-bold mb-4 ">{!! trans("JoinUs.friends.title") !!}</h3>
                        <p class="tx-4 mb-0">{!! trans("JoinUs.friends.content") !!}</p>
                        <div class="mt-4">
                            <a href="join-us#contacForm" class="btn btn-primary btn-lg px-4 ">{!! trans("JoinUs.friends.button") !!}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="exchange-programs" class="bg-green py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h1 class="text-primary h3 fw-bold ">{!! trans("JoinUs.title2") !!}</h1>
            </div>
            
            <div class="row gx-4">
                <div class="col-md-5">
                    <div class="accordion accordion-flush custom-accordion mb-4" id="programs">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button js-acc-btn collapsed" type="button" data-img="dualExchange.jpg" data-bs-toggle="collapse" data-bs-target="#flush-collapseCero" aria-expanded="false">
                                {!! trans("JoinUs.title2") !!}
                                </button>
                            </h2>
                            <div id="flush-collapseCero" class="accordion-collapse collapse" data-bs-parent="#programsAccordion">
                                <div class="accordion-body tx-4">
                                    <p>{!! trans("JoinUs.program1.content") !!}</p>
                                    <p>{!! trans("JoinUs.program1.content2") !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item collapse">
                            <h2 class="accordion-header">
                                <button class="accordion-button js-acc-btn collapsed" type="button" data-img="dualExchange.jpg" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false">
                                {!! trans("JoinUs.program1.title") !!}
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#programsAccordion">
                                <div class="accordion-body tx-4">
                                    <p>{!! trans("JoinUs.program1.content") !!}</p>
                                    <p>{!! trans("JoinUs.program1.content2") !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button js-acc-btn collapsed" type="button" data-img="zoompalprogram.jpg" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false">
                                {!! trans("JoinUs.program2.title") !!}
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#programsAccordion">
                                <div class="accordion-body tx-4">
                                    <p>{!! trans("JoinUs.program2.content") !!}</p>
                                    <p>{!! trans("JoinUs.program2.content2") !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button js-acc-btn collapsed" type="button" data-img="furnitureBuilding.jpg" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false">
                                {!! trans("JoinUs.program3.title") !!}
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#programsAccordion">
                                <div class="accordion-body tx-4">
                                    <p>{!! trans("JoinUs.program3.content") !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button js-acc-btn collapsed" type="button" data-img="educationalTours.jpg" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false">
                                {!! trans("JoinUs.program4.title") !!}
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#programsAccordion">
                                <div class="accordion-body tx-4">
                                    <p>{!! trans("JoinUs.program4.content") !!}</p>
                                    <p>{!! trans("JoinUs.program4.content2") !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button js-acc-btn collapsed" type="button" data-img="changeforchange.jpg" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false">
                                {!! trans("JoinUs.program5.title") !!}
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#programsAccordion">
                                <div class="accordion-body tx-4">
                                    <p>{!! trans("JoinUs.program5.content") !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <img id="acc-img" src="/assets/img/joinus/dualExchange.jpg" alt="" class="img-fluid">
                    <div class="text-center text-md-end mt-4">
                        <a href="#contacForm" class="btn btn-primary px-4 text-capitalize">{!! trans("JoinUs.button") !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="donate" class="bg-secondary">
        <div class="container-fluid px-0">
            <div class="row g-0 flex-column-reverse flex-lg-row">
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/joinus/Make_donation.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-3 px-lg-7" data-aos="fade-up">
                        <h3 class="text-primary fw-bold mb-4 ">{!! trans("JoinUs.donation.title") !!}</h3>
                        <p class="tx-4 mb-0">{!! trans("JoinUs.donation.content") !!}</p>
                        
                        <div class="mt-4">
                            <a href="/donate" class="btn btn-primary btn-lg px-4 text-capitalize">{!! trans("Header.donate") !!}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacForm" class="p-5">
        <div class="container px-0">
            <div class="row g-0 flex-column-reverse flex-lg-row justify-content-md-center">
                <div class="col-lg-6">
                    <h3 class="text-primary fw-bold mb-4 ">{!! trans("JoinUs.fromcontact.title") !!}</h3>
                    <form action="/contact" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">{!! trans("JoinUs.fromcontact.list1") !!}</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" maxlength="90" required>
                            <span id="error_name" class="text-danger ms-3"></span>
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label">{!! trans("JoinUs.fromcontact.list2") !!}</label>
                            <input type="text" class="form-control" id="mail" aria-describedby="mail" name="email" maxlength="85" required>
                            <span id="error_mail" class="text-danger ms-3"></span>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">{!! trans("JoinUs.fromcontact.list3") !!}</label>
                            <input type="text" class="form-control" id="subject" aria-describedby="subject" name="subject" minlength="6" maxlength="90" required>
                            <span id="error_subject" class="text-danger ms-3"></span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{!! trans("JoinUs.fromcontact.list4") !!}</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="message" style="height: 100px" name="message" minlength="6" maxlength="250" required></textarea>
                            <span id="error_message" class="text-danger ms-3"></span>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" id="submit" >{!! trans("JoinUs.fromcontact.button") !!}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('front.navs.footer')
    @if(Session::has('exito'))
    <div class="modal fade" id="modalexito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="background: #fff;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="color: #245947">Congratulations</h5>
          </div>
          <div class="modal-body">{!! Session::get('exito') !!}</div>
        </div>
      </div>
    </div>
    @endif
    @if(Session::has('error'))
    <div class="modal fade" id="modalerror" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="background: #fff;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="color: #245947">oops, something happened</h5>
          </div>
          <div class="modal-body">{!! Session::get('error') !!}</div>
        </div>
      </div>
    </div>
    @endif
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
    <script>
      jQuery(document).ready(function(){
        @if(Session::has('exito'))
          $('#modalexito').modal('show')
        @endif
        @if(Session::has('error'))
          $('#modalerror').modal('show')
        @endif
      });
    </script>
</body>
</html>
