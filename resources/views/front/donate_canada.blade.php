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
    <title>Donate</title>
</head>
<body>
    @include('front.navs.topmenu')
    <iframe id="donateCanada" src="https://donorbox.org/plantingseedsdonations-canada" title="Plantando semillas" width="100%" height="1460" style="border:0; overflow: hidden;"></iframe>
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
