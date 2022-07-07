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
    <title>Where</title>
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

    <section id="locations">
        <div id="locations-slider" class="swiper">
            <div class="swiper-wrapper">


                <div class="swiper-slide" id="guatemala">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-white position-relative">
                                <div class="px-3 px-lg-5 px-xl-8 py-5" data-aos="fade-up">
                                    <h3 class="text-primary fw-bold mb-5">{!! trans("Where.title") !!}</h3>
            
                                    <h4 class="text-primary fw-bold mb-4">{!! trans("Where.place1.location") !!}</h4>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.departament") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place1.departmenttext") !!}</p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.NameCenter") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place1.NameCentertext") !!}</p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.Foundation") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place1.Foundationtext") !!}</p>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.Beneficiaries") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place1.Beneficiariestext") !!}</p>
                                        </div>
                                        <div class="col-3">
                                            <h6 class="text-primary">{!! trans("Where.Ages") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place1.Agestxt") !!}</p>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-primary">{!! trans("Where.Context") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place1.Contexttext") !!}</p>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <h6 class="text-primary mb-3">{!! trans("Where.Programs") !!}</h6>
                                        <ul class="tx-3">
                                            <li class="mb-3">
                                                <b class="text-primary">{!! trans("Where.place1.program1.name") !!}</b>{!! trans("Where.place1.program1.item") !!}
                                                <ol class="mt-2">
                                                    <li>{!! trans("Where.place1.program1.item1") !!}</li>
                                                    <li>{!! trans("Where.place1.program1.item2") !!}</li>
                                                </ol>
                                            </li>
                                            <li class="mb-3"><b class="text-primary">{!! trans("Where.place1.program2.name") !!}</b>{!! trans("Where.place1.program2.item") !!}</li>
                                            <li><b class="text-primary">{!! trans("Where.place1.program3.name") !!}</b>{!! trans("Where.place1.program3.item") !!}</li>
                                        </ul>
                                    </div>
                                    <a href="/work/impact" class="btn btn-blue text-capitalize">{!! trans("Where.button") !!}</a>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="mapGuatemala" class="maps"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" id="sanLucas">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-white position-relative">
                                <div class="px-3 px-lg-5 px-xl-8 py-5" data-aos="fade-up">
                                    <h3 class="text-primary fw-bold mb-5">{!! trans("Where.title") !!}</h3>
            
                                    <h4 class="text-primary fw-bold mb-4">{!! trans("Where.place2.location") !!}</h4>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.departament") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place2.departmenttext") !!}</p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.NameCenter") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place2.NameCentertext") !!}</p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.Foundation") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place2.Foundationtext") !!}</p>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.Beneficiaries") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place2.Beneficiariestext") !!}</p>
                                        </div>
                                        <div class="col-3">
                                            <h6 class="text-primary">{!! trans("Where.Ages") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place2.Agestxt") !!}</p>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-primary">{!! trans("Where.Context") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place2.Contexttext") !!}</p>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <h6 class="text-primary mb-3">{!! trans("Where.Programs") !!}</h6>
                                        <ul class="tx-3">
                                            <li class="mb-3">
                                                <b class="text-primary">{!! trans("Where.place2.program1.name") !!}</b>{!! trans("Where.place2.program1.item") !!}
                                                <p>{!! trans("Where.place2.program1.item1") !!}</p>
                                            </li>
                                            <li class="mb-3"><b class="text-primary">{!! trans("Where.place2.program2.name") !!}</b>{!! trans("Where.place2.program2.item") !!}</li>
                                            <li class="mb-3"><b class="text-primary">{!! trans("Where.place2.program3.name") !!}</b>{!! trans("Where.place2.program3.item") !!}</li>
                                            <li class="mb-3"><b class="text-primary">{!! trans("Where.place2.program4.name") !!}</b>{!! trans("Where.place2.program4.item") !!}</li>
                                            <li><b class="text-primary">{!! trans("Where.place2.program5.name") !!}</b>{!! trans("Where.place2.program5.item") !!} </li>
                                        </ul>
                                    </div> 
                                    <a href="/work/impact" class="btn btn-blue text-capitalize">{!! trans("Where.button") !!}</a>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="mapSanLucas" class="maps"></div>
                            </div>
                        </div>
                    </div>
                </div> 
                
                
                <div class="swiper-slide" id="sacala">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-white position-relative">
                                <div class="px-3 px-lg-5 px-xl-8 py-5" data-aos="fade-up">
                                    <h3 class="text-primary fw-bold mb-5">{!! trans("Where.title") !!}</h3>
            
                                    <h4 class="text-primary fw-bold mb-4">{!! trans("Where.place3.location") !!}</h4>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.departament") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place3.departmenttext") !!}</p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.NameCenter") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place3.NameCentertext") !!}</p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.Foundation") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place3.Foundationtext") !!}</p>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.Beneficiaries") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place3.Beneficiariestext") !!}</p>
                                        </div>
                                        <div class="col-3">
                                            <h6 class="text-primary">{!! trans("Where.Ages") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place3.Agestxt") !!}</p>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-primary">{!! trans("Where.Context") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place3.Contexttext") !!}</p>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <h6 class="text-primary mb-3">{!! trans("Where.Programs") !!}</h6>
                                        <ul class="tx-3">
                                            <li class="mb-3">
                                                <b class="text-primary"> {!! trans("Where.place3.program1.name") !!}</b>{!! trans("Where.place3.program1.item") !!}
                                            </li>
                                            <li class="mb-3"><b class="text-primary">{!! trans("Where.place3.program2.name") !!}</b>{!! trans("Where.place3.program2.item") !!}</li>
                                            <li class="mb-3"><b class="text-primary">{!! trans("Where.place3.program3.name") !!}</b>{!! trans("Where.place3.program3.item") !!}</li>
                                            <li class="mb-3"><b class="text-primary"> {!! trans("Where.place3.program4.name") !!}</b>{!! trans("Where.place3.program4.item") !!}</li>
                                            <li><b class="text-primary">{!! trans("Where.place3.program5.name") !!}</b>{!! trans("Where.place3.program5.item") !!} </li>
                                        </ul>
                                    </div>
                                    <a href="/work/impact" class="btn btn-blue text-capitalize">{!! trans("Where.button") !!}</a>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="mapSacala" class="maps"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-white position-relative">
                                <div class="px-3 px-lg-5 px-xl-8 py-5" data-aos="fade-up">
                                    <h3 class="text-primary fw-bold mb-5">{!! trans("Where.title") !!}</h3>
            
                                    <h4 class="text-primary fw-bold mb-4">{!! trans("Where.place4.location") !!}</h4>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.departament") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place4.departmenttext") !!}</p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.NameCenter") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place4.NameCentertext") !!}</p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.Foundation") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place4.Foundationtext") !!}</p>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.Beneficiaries") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place4.Beneficiariestext") !!}</p>
                                        </div>
                                        <div class="col-3">
                                            <h6 class="text-primary">{!! trans("Where.Ages") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place4.Agestxt") !!}</p>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-primary">{!! trans("Where.Context") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0"> {!! trans("Where.place4.Contexttext") !!}</p>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <h6 class="text-primary mb-3">{!! trans("Where.Programs") !!}</h6>
                                        <ul class="tx-3">
                                            <li class="mb-3">
                                                <b class="text-primary">{!! trans("Where.place4.program1.name") !!}</b>{!! trans("Where.place4.program1.item") !!}
                                            </li>
                                            <li class="mb-3"><b class="text-primary">{!! trans("Where.place4.program2.name") !!}</b>{!! trans("Where.place4.program2.item") !!}</li>
                                            <li class="mb-3"><b class="text-primary">{!! trans("Where.place4.program3.name") !!}</b>{!! trans("Where.place4.program3.item") !!}</li>
                                            <li class="mb-3"><b class="text-primary">{!! trans("Where.place4.program4.name") !!}</b>{!! trans("Where.place4.program4.item") !!}</li>
                                            <li><b class="text-primary">{!! trans("Where.place4.program5.name") !!}</b>{!! trans("Where.place4.program5.item") !!}</li>
                                        </ul>
                                    </div>
                                    <a href="/work/impact" class="btn btn-blue text-capitalize">{!! trans("Where.button") !!}</a>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="mapTioxya" class="maps"></div> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="container-fluid px-0">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-white position-relative">
                                <div class="px-3 px-lg-5 px-xl-8 py-5" data-aos="fade-up">
                                    <h3 class="text-primary fw-bold mb-5">{!! trans("Where.title") !!}</h3>
            
                                    <h4 class="text-primary fw-bold mb-4">{!! trans("Where.place5.location") !!}</h4>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.departament") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place5.departmenttext") !!}</p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.NameCenter") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place5.NameCentertext") !!}s</p>
                                        </div>
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.Foundation") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place5.Foundationtext") !!}</p>
                                        </div>
                                    </div>
                                    <div class="row gy-3 gx-2 gx-lg-5 border-bottom border-2 border-yellow py-3">
                                        <div class="col-4">
                                            <h6 class="text-primary">{!! trans("Where.Beneficiaries") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place5.Beneficiariestext") !!}</p>
                                        </div>
                                        <div class="col-3">
                                            <h6 class="text-primary">{!! trans("Where.Ages") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place5.Agestxt") !!}</p>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-primary">{!! trans("Where.Context") !!}</h6>
                                            <p class="tx-3 lh-sm mb-0">{!! trans("Where.place5.Contexttext") !!}</p>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <h6 class="text-primary mb-3">{!! trans("Where.Programs") !!}</h6>
                                        <ul class="tx-3">
                                            <li class="mb-3">
                                                <b class="text-primary">{!! trans("Where.place5.program1.name") !!}</b>{!! trans("Where.place5.program1.item") !!}
                                            </li>
                                            <li class="mb-3"><b class="text-primary">{!! trans("Where.place5.program2.name") !!}</b>{!! trans("Where.place5.program2.item") !!}</li>
                                            <li><b class="text-primary">{!! trans("Where.place5.program3.name") !!}</b>{!! trans("Where.place5.program3.item") !!}</li>
                                        </ul>
                                    </div>
                                    <a href="/work/impact" class="btn btn-blue text-capitalize">{!! trans("Where.button") !!}</a>
                                </div>

                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="mapYepocapa" class="maps"></div>  
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section id="community-center" class="bg-smoke text-md-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1 class="fw-bold h3 text-center text-primary mb-4 " data-aos="fade-up">{!! trans("Where.project.title") !!}</h1>
                    
                    <!-- *************************   desktop version  ************************************-->
                    <div class="d-none d-sm-block d-sm-none d-md-block">
                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150">{!! trans("Where.project.desktop.text1") !!}</p>

                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150">{!! trans("Where.project.desktop.text2") !!}</p>

                        <p class="tx-4" data-aos="fade-up" data-aos-delay="150">{!! trans("Where.project.desktop.text3") !!}</p>
                    </div>


                    <!-- *************************    mobile version  ************************************-->
                    <div class="d-md-none d-lg-block d-lg-none d-xl-block d-xl-none d-xxl-block d-xxl-none">
                        <p>{!! trans("Where.Development.desktop.text1") !!}</p>

                        <p>{!! trans("Where.Development.desktop.text2") !!}</p>
                    </div>
                    
                    <div class="ratio ratio-16x9 mt-5" data-aos="fade-up">
                        <iframe src="https://www.youtube.com/embed/uO4IHtnBHEo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="bg-secondary d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-3 px-lg-7">
                        <h3 class="text-primary fw-bold mb-4" data-aos="fade-up">{!! trans("Where.Development.title") !!}</h3>
                        
                        <!-- *************************   desktop version  ************************************-->
                        <div class="d-none d-sm-block d-sm-none d-md-block">
                            <p class="tx-4" data-aos="fade-up">{!! trans("Where.Development.desktop.text1") !!}</p>
                            <p class="tx-4" data-aos="fade-up">{!! trans("Where.Development.desktop.text2") !!}</p>
                            <p class="tx-4 mb-4" data-aos="fade-up">{!! trans("Where.Development.desktop.text3") !!}</p>
                            <p class="tx-4" data-aos="fade-up">{!! trans("Where.Development.desktop.text4") !!}</p>
                        </div>


                    <!-- *************************    mobile version  ************************************-->
                        <div class="d-md-none d-lg-block d-lg-none d-xl-block d-xl-none d-xxl-block d-xxl-none">
                            <p>{!! trans("Where.Development.movil.text1") !!}</p>

                            <p>{!! trans("Where.Development.movil.text2") !!}.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/what/CommunityDevelopmentApproach.jpg" alt="">
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
