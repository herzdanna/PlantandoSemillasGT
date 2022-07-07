<nav class="navbar sticky-top navbar-expand-xl navbar-light bg-white py-4 main-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/assets/img/logo.png" alt="" class="logo">
        </a>
        <div class="position-relative">
            <button onclick="document.querySelector('.mobile-menu').classList.toggle('show')" class="navbar-toggler mobile-menu-toggler" type="button" id="mobileMenuNavigation">
                <svg width="3rem" height="3rem" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 14H42" stroke="white" stroke-width="2"/>
                    <path d="M6 24H42" stroke="white" stroke-width="2"/>
                    <path d="M6 34H42" stroke="white" stroke-width="2"/>
                </svg>
            </button>
            <ul class="mobile-menu" aria-labelledby="mobileMenuNavigation">

                <!-- close button -->
                <div class="text-end">
                    <button onclick="document.querySelector('.mobile-menu').classList.remove('show')" class="mobile-menu-close" type="button">
                        <svg width="3rem" height="3rem" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 11L36.4558 36.4558" stroke="white" stroke-width="2"/>
                            <path d="M11 36L36.4558 10.5442" stroke="white" stroke-width="2"/>
                        </svg>
                    </button>
                </div>
                @if (config('locale.status') && count(config('locale.languages')) > 1)
                    <div class="top-right links" style="padding-top: 5px;">
                        @foreach (array_keys(config('locale.languages')) as $lang)
                            @if ($lang != App::getLocale())
                                <a href="{!! route('lang.swap', $lang) !!}" style="text-decoration: none; text-transform: uppercase;">
                                    @if($lang == 'es')
                                    <b style="vertical-align: middle; font-weight: 500">{!! $lang !!}</b> <img src="/assets/img/gt.png" alt="" width="30px">
                                    @else
                                    <b style="vertical-align: middle; font-weight: 500">{!! $lang !!}</b> <img src="/assets/img/{!! $lang !!}.png" alt="" width="30px">
                                    @endif
                                </a>
                            @endif
                        @endforeach
                    </div>
                @endif
              
                <li>
                    <a class="mobile-menu-item" data-bs-toggle="collapse" href="#ourworkCollapse" role="button">{!! trans('Header.work.title') !!}</a>
                    <ul class="list-unstyled mobile-menu-submenu collapse" id="ourworkCollapse">
                        <li><a href="/work/what" class="mobile-submenu-item">{!! trans('Header.work.whatMovil.option1') !!}</a></li>
                        <li><a href="/work/where" class="mobile-submenu-item">{!! trans('Header.work.whatMovil.option2') !!}</a></li>
                        <li><a href="/work/impact" class="mobile-submenu-item">{!! trans('Header.work.whatMovil.option3') !!}</a></li>
                    </ul>
                </li>
                <li>
                    <a class="mobile-menu-item" data-bs-toggle="collapse" href="#aboutusCollapse" role="button">{!! trans('Header.about.title') !!}</a>
                    <ul class="list-unstyled mobile-menu-submenu collapse" id="aboutusCollapse">
                        <li><a href="/about-us#core" class="mobile-submenu-item">{!! trans('Header.about.option1') !!}</a></li>
                        <li><a href="/about-us#staff" class="mobile-submenu-item">{!! trans('Header.about.option2') !!}</a></li>
                    </ul>
                </li>

                <li>
                    <a class="mobile-menu-item" data-bs-toggle="collapse" href="#joinusCollapse" role="button">{!! trans('Header.join.title') !!}</a>
                    <ul class="list-unstyled mobile-menu-submenu collapse" id="joinusCollapse">
                        <li><a href="/join-us#sponsor" class="mobile-submenu-item">{!! trans('Header.join.option1') !!}</a></li>
                        <li><a href="/join-us#friends-circle" class="mobile-submenu-item">{!! trans('Header.join.option2') !!}</a></li>
                        <li><a href="/join-us#exchange-programs" class="mobile-submenu-item">{!! trans('Header.join.option3') !!}</a></li>
                        <li><a href="/join-us#formContact" class="mobile-submenu-item">{!! trans('Header.join.option4') !!}</a></li>
                    </ul>
                </li>
                <li>
                    <a class="mobile-menu-item" data-bs-toggle="collapse" href="#ourImpactCollapse" role="button">{!! trans('Header.work.impact.title') !!}</a>
                    <ul class="list-unstyled mobile-menu-submenu collapse" id="ourImpactCollapse">
                        <li><a href="/work/impact" class="mobile-submenu-item">{!! trans('Header.work.impact.option4') !!}</a></li>
                        <li><a href="/work/impact#need-quality-education" class="mobile-submenu-item">{!! trans('Header.work.impact.option1') !!}</a></li>
                        <li><a href="/work/impact#how-we-work" class="mobile-submenu-item">{!! trans('Header.work.impact.option2') !!}</a></li>
                        <li><a href="/work/impact#financial-transparency" class="mobile-submenu-item">{!! trans('Header.work.impact.option3') !!}</a></li>
                        <li><a href="/stories" class="mobile-submenu-item">{!! trans('Header.stories') !!}</a></li>
                    </ul>
                </li>
                <!--<li>
                    <a href="/work/where#locations" class="mobile-menu-item">Ubicaciones</a>
                </li>-->

              

                <li class="mt-3">
                    <a href="/donate" class="btn btn-primary">{!! trans('Header.donate') !!}</a>
                </li>
                <li>
                    <ul class="list-inline mt-3">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/plantingseedsinternational" class="nav-link text-white px-1" title="Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="http://instagram.com/plantingseedsinternational/" class="nav-link text-white px-1" title="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                  </svg>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/PlantingSeedsIn" class="nav-link text-white px-1" title="Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/channel/UCqm1YqvHZcTkf-ClFNroHlA" class="nav-link text-white px-1" title="Youtube">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="row justify-content-end">
                <div class="col-12">
                    <div style="width: 100%; text-align: right;">                 
                        <ul class="navbar-nav ms-3" style="float: right">
                            <li class="nav-item nav-item2 ms-md-3">
                                <a class="btn btn-secondary text-uppercase" href="/donate">{!! trans('Header.donate') !!}</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.facebook.com/plantingseedsinternational" target="_blank" class="nav-link px-1" title="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://instagram.com/plantingseedsinternational/" target="_blank" class="nav-link px-1" title="Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://twitter.com/PlantingSeedsIn" target="_blank" class="nav-link px-1" title="Twitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.youtube.com/channel/UCqm1YqvHZcTkf-ClFNroHlA" target="_blank" class="nav-link px-1" title="Youtube">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 menu">
                    <ul class="navbar-nav ms-auto float-right" style="float: right;">
                        <li>
                            <a class="nav-link" href="/">{!! trans('Header.home') !!}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle custom-nav-dropdown-toggler" href="#our-work" role="button" data-bs-toggle="dropdown" aria-expanded="false">{!! trans('Header.work.title') !!}</a>
                            <ul class="dropdown-menu custom-nav-dropdown px-3 py-3">
                                <div class="row gx-3">
                                    <div class="col-6">
                                        <a href="/work/what" class="d-block text-white text-decoration-none text-uppercase fw-bold tx-3 lh-1 mb-4">{!! trans('Header.work.what.title') !!}</a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-4">
                                                <a href="/work/what#early-chilhood-education" class="text-white text-decoration-none">{!! trans('Header.work.what.option1') !!}</a>
                                            </li>
                                            <li class="mb-4">
                                                <a href="/work/what#philosophy-and-methodology" class="text-white text-decoration-none">{!! trans('Header.work.what.option2') !!}</a>
                                            </li>
                                            <li class="mb-4">
                                                <a href="/work/what#comprehensive-development" class="text-white text-decoration-none">{!! trans('Header.work.what.option3') !!}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <a href="/work/where" class="d-block text-white text-decoration-none text-uppercase fw-bold tx-3 lh-1 mb-4">{!! trans('Header.work.where.title') !!}</a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-4">
                                                <a href="/work/where#locations" class="text-white text-decoration-none">{!! trans('Header.work.where.option1') !!}</a>
                                            </li>
                                            <li class="">
                                                <a href="/work/where#community-center" class="text-white text-decoration-none">{!! trans('Header.work.where.option2') !!}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about-us">{!! trans('Header.about.title') !!}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/join-us">{!! trans('Header.join.title') !!}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle custom-nav-dropdown-toggler" href="#our-work" role="button" data-bs-toggle="dropdown" aria-expanded="false">{!! trans('Header.work.impact.title') !!}</a>
                            <ul class="dropdown-menu custom-nav-dropdown px-3 py-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-4">
                                        <a href="/work/impact" class="text-white text-decoration-none">{!! trans('Header.work.impact.option4') !!}</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="/work/impact#need-quality-education" class="text-white text-decoration-none">{!! trans('Header.work.impact.option1') !!}</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="/work/impact#how-we-work" class="text-white text-decoration-none">{!! trans('Header.work.impact.option2') !!}</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="/work/impact#financial-transparency" class="text-white text-decoration-none">{!! trans('Header.work.impact.option3') !!}</a>
                                    </li>
                                    <li class="">
                                        <a href="/stories" class="text-white text-decoration-none">{!! trans('Header.stories') !!}</a>
                                    </li>
                                </ul>
                            </ul>
                        </li>

                        @if (config('locale.status') && count(config('locale.languages')) > 1)
                            <div class="top-right links" style="padding-top: 5px; margin-left: 10px;">
                                @foreach (array_keys(config('locale.languages')) as $lang)
                                    @if ($lang != App::getLocale())
                                        <a href="{!! route('lang.swap', $lang) !!}" style="text-decoration: none; text-transform: uppercase;">
                                            @if($lang == 'es')
                                            <b style="vertical-align: middle; font-weight: 500">{!! $lang !!}</b> <img src="/assets/img/gt.png" alt="" width="30px">
                                            @else
                                            <b style="vertical-align: middle; font-weight: 500">{!! $lang !!}</b> <img src="/assets/img/{!! $lang !!}.png" alt="" width="30px">
                                            @endif
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>