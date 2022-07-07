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
    <title>About Us</title>
</head>
<body>
    @include('front.navs.topmenu')
    <header class="bg-green position-relative overflow-hidden pt-10">
        <img class="subpage-header-img" src="/assets/img/banner-img-1.png" style="top: -10%; right: 5%;">
        <div class="container">
            <div class="row">
                <div class="col-md offset-md-2" style="z-index: 10;">
                    <h1 class="d-inline-block bg-white text-primary fw-bold rounded-top py-3 px-4 mb-0 text-capitalize">{!! trans("About.title") !!}</h1>
                </div>
            </div>
        </div>
    </header>
    
    <section id="core">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/about/img-1.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-3 px-lg-7" data-aos="fade-up">
                        <h3 class="text-primary fw-bold mb-4 text-capitalize">{!! trans("About.core.title") !!}</h3>
                        <div class="mb-4">
                            <h6 class="text-primary text-uppercase">{!! trans("About.core.subtitle1") !!}</h6>
                            <p class="tx-4 mb-0">{!! trans("About.core.text1") !!}</p>
                        </div>
                        <div class="mb-4">
                            <h6 class="text-primary text-uppercase">{!! trans("About.core.subtitle2") !!}</h6>
                            <p class="tx-4 mb-0">{!! trans("About.core.text2") !!}</p>
                        </div>
                        <a href="/work/what" class="btn btn-blue btn-lg px-4 text-capitalize">{!! trans("About.core.button") !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row flex-column-reverse flex-lg-row g-0">
                <div class="col-lg-6">
                    <div class="bg-blue d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-3 px-lg-7" data-aos="fade-up">
                        <h3 class="text-primary fw-bold mb-4 text-capitalize">{!! trans("About.founders.title") !!}</h3>
                        <p class="tx-4 mb-0">{!! trans("About.founders.text1") !!}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/about/img-2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/about/img-3.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-3 px-lg-7" data-aos="fade-up">
                        <h3 class="text-primary fw-bold mb-4 text-capitalize">{!! trans("About.story.title") !!}</h3>
                        <p class="tx-4 mb-4">{!! trans("About.story.text1") !!}</p>
                        <p class="tx-4 mb-4">{!! trans("About.story.text2") !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row flex-column-reverse flex-lg-row g-0">
                <div class="col-lg-6">
                    <div class="bg-green d-flex flex-column justify-content-center align-items-start h-100 py-5 py-lg-7 px-3 px-lg-7" data-aos="fade-up">
                        <h3 class="text-primary fw-bold mb-4 text-capitalize">{!! trans("About.whereAre.title") !!}</h3>
                        <p class="tx-4 mb-4">{!! trans("About.whereAre.text1") !!}</p>
                        <p class="tx-4 mb-4">{!! trans("About.whereAre.text2") !!}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="w-100 h-100 object-cover" src="/assets/img/about/img-4.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="staff" class="bg-secondary py-8">
        <div class="container">
            <div class="custom-v-tabs d-lg-flex align-items-lg-start gap-5">
                <div class="nav flex-lg-column nav-pills mb-5 mb-lg-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link text-start text-nowrap px-lg-0 tx-md-4 active text-capitalize" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">{!! trans("About.directors") !!}</button>
                    <button class="nav-link text-start text-nowrap px-lg-0 tx-md-4" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">{!! trans("About.leadership") !!}</button>
                    <button class="nav-link text-start text-nowrap px-lg-0 tx-md-4" id="v-pills-educational-tab" data-bs-toggle="pill" data-bs-target="#v-pills-educational" type="button" role="tab" aria-controls="v-pills-educational" aria-selected="false">{!! trans("About.educatioanal") !!}</button>
                    <button class="nav-link text-start text-nowrap px-lg-0 tx-md-4" id="v-pills-community-tab" data-bs-toggle="pill" data-bs-target="#v-pills-community" type="button" role="tab" aria-controls="v-pills-community" aria-selected="false">{!! trans("About.development") !!}</button>
                </div>
                <div class="tab-content flex-grow-1" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row g-3">
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/directors/wayneMoyle.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-4">Wayne Moyle: {!! trans("About.position.president") !!}; Ottawa, ON</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/directors/gabeTobias.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-4">Gabe Tobias:  {!! trans("About.position.vicepresident") !!}; Brooklyn, NY </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/directors/leanneVanBavel.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-4">Leanne Van Bavel: {!! trans("About.position.treasurer") !!}; Pembroke, ON</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/directors/alyWallis.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-4">Aly Wallis: {!! trans("About.position.Secretary") !!}; Chicago, IL</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/directors/andreaGomez.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-4">Andrea Gómez: {!! trans("About.position.boardMember") !!}; Guatemala City</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/directors/oniceArango.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-4">Onice Arango: {!! trans("About.position.boardMember") !!}, Guatemala City</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/directors/annEscott.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-4">Ann Escott: {!! trans("About.position.boardMember") !!}; Ottawa, ON</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/directors/carolynCollinsBennett.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-4">Carolyn Collins-Bennett: {!! trans("About.position.boardMember") !!}; Ottawa, ON</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/directors/sharonWorkman.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-4">Sharon Workman: {!! trans("About.position.boardMember") !!}; Traverse City, MÍ</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/directors/maryLandi.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-4">Mary Landi: {!! trans("About.position.boardMember") !!}; Chicago, IL</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="row g-3">
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/leadershipTeam/macPhilips.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-2 tx-md-3"> {!! trans("About.position.Mac") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/leadershipTeam/shannonMoyle.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-2 tx-md-3"> {!! trans("About.position.Shannon") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/leadershipTeam/madeliQuinonez.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-2 tx-md-3">{!! trans("About.position.Madeli") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/leadershipTeam/martinaGarcia.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-2 tx-md-3">{!! trans("About.position.Martina") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/leadershipTeam/carlaLopez.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-2 tx-md-3">{!! trans("About.position.Carla") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/leadershipTeam/mishelMussali.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-2 tx-md-3">{!! trans("About.position.Mishel") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/leadershipTeam/danielOsorio.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-2 tx-md-3">{!! trans("About.position.Daniel") !!} </h6>
                                    </div>
                                </div>
                            </div>
                   
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-educational" role="tabpanel" aria-labelledby="v-pills-educational-tab">
                        <div class="row g-3">
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/educationalTeam/aleydaMachan.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Aleyda") !!} </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/educationalTeam/blancaHernandez.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Blanca") !!}  </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/educationalTeam/arnerMinas.jpg" class="img-fluid">  
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Aner") !!} </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/educationalTeam/mariaJuanaArmiraAvila.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Maria") !!} </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/educationalTeam/meridaYucute.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Merida") !!}  </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/educationalTeam/marioEsqueque.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Mario") !!} </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/educationalTeam/normaAtz.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Norma") !!}  </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/educationalTeam/monicaRamirez.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Monica") !!}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-community" role="tabpanel" aria-labelledby="v-pills-community-tab">
                        <div class="row g-3">
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/ComunnityDevTeam/carlosYos.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Carlos") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/ComunnityDevTeam/elisaMejicanos.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Eliza") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">                       
                                        <img src="/assets/img/about/ComunnityDevTeam/gasparSucuqui.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Gaspar") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/ComunnityDevTeam/juanaEspanaBerna.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Juana") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/ComunnityDevTeam/juanPabloFlores.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Juan") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/ComunnityDevTeam/lindaLopez.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Linda") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">
                                        <img src="/assets/img/about/ComunnityDevTeam/luisCalel.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Luis") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">  
                                        <img src="/assets/img/about/ComunnityDevTeam/mirianEsquivel.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Mirian") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">                                   
                                        <img src="/assets/img/about/ComunnityDevTeam/sunyGarcia.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Suny") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">                                   
                                        <img src="/assets/img/about/ComunnityDevTeam/yaquiCruz.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Yaqui") !!}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3">
                                <div class="flip-card">
                                    <div class="flip-card-front">                                   
                                        <img src="/assets/img/about/ComunnityDevTeam/VivianSantiago.jpg" class="img-fluid">
                                    </div>
                                    <div class="flip-card-back text-center d-flex justify-content-center align-items-center p-4">
                                        <h6 class="tx-3 tx-md-3">{!! trans("About.position.Vivian") !!}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <section class="bg-smoke py-7">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-primary h3 fw-bold mb-0">{!! trans("About.partners.title") !!}</h1>
            </div>

            <div class="py-3">
                <h4 class="text-primary mb-4">{!! trans("About.partners.text") !!}</h4>
                <div class="row text-center">
                    @foreach($partners as $partner)
                    <div class="col-6 col-sm-6 col-md-3">
                        <img src="{{$partner->foto}}" class="brand-logo" title="{{$partner->title}}">  
                    </div>
                    @endforeach
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
