<!DOCTYPE html>
<<<<<<< HEAD
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./img/logo (1).ico" type="image/png">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./assets/css/styles.css">

    <title>DPEE - Principal</title>
</head>

<body class="bodypage">

    <div>
        @include('layouts.navBar')
    </div>

    <div class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="img">

            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section d-flex justify-content-center" id="about">
            <div class="d-flex justify-content-center align-items-center flex-wrap " style="width: 80%;">
                <div class="justify-content-center d-flex text-center">
                    <div class="about__data">
                        <h2 class="section__title about__title">FOS TP</h2>
                        <a href="http://www.fostp.ma/" target="_blank" class="button text-nowrap">{{ __('plus information') }}</a>
                    </div>
                </div>
                <div class="about__img">
                    <div class="about__img-overlay">
                        <img src="assets/img/fos.jpeg" alt="" class="about__img-one">
                    </div>

                    <div class="about__img-overlay">
                        <img src="assets/img/foslogo.png" alt="" class="about__img-two">
                    </div>
                </div>
            </div>
        </section>
        <!--==================== services ====================-->

        <div class="d-flex justify-content-center flex-column text-center">
            <h2 class="section__title about__title text-center my-5">Nos services</h2>
            <div class="d-flex me-5 ms-5 justify-content-between flex-wrap">
                @foreach ($services as $service)

                <div class="card my-3" style="width: 250px;">
                    <img src="{{asset('/storage/images'.'/' . $service->image)}}" alt="" style="width: 250px;height: 250px;" class="card-img-top">
                    <div class="card-body text-center">
                        <h2 class="section__title about__title fs-5 text-center card-title">{{$service->title}}</h2>
                    </div>
                </div>
                @endforeach

                <div class="btn_more_service mt-4 d-flex justify-content-center">
                    <a href="/services" class="button"> {{__('Plus de services')}} </a>
                </div>
            </div>
        </div>

        <!--==================== PROJECTS ====================-->
        <div class="d-flex justify-content-center flex-column text-center">
            <h2 class="section__title about__title text-center mb-5" style="margin-top: 200px;">Nos projets</h2>
            <div class="d-flex me-5 ms-5 justify-content-between flex-wrap">
                @foreach ($projets as $projet)

                <div class="card my-3" style="width: 250px;">
                    <img src="{{asset('/storage/projetsPicture'.'/' . $projet->image)}}" alt="" style="width: 250px;height: 250px;" class="card-img-top">
                    <div class="card-body text-center">
                        <h2 class="section__title about__title fs-5 text-center card-title">{{$projet->title}}</h2>
                    </div>
                </div>
                @endforeach

                <div class="btn_more_service mt-4 d-flex justify-content-center">
                    <a href="/projets" class="button"> {{__('Plus de projets')}} </a>
                </div>
            </div>
        </div>




    </div>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content grid">


                <div class="footer__data">
                    <h3 class="footer__subtitle">Régions</h3>
                    <ul>
                        <li class="footer__item">
                        <li><a href="" class="footer__link">Tanger-tétouan-al hoceima</a></li>
                        <li><a href="" class="footer__link">L’oriental</a></li>
                        <li><a href="" class="footer__link">Fès-meknès</a></li>
                        <li><a href="" class="footer__link">Rabat-salé-kénitra</a></li>
                        <li><a href="" class="footer__link">Beni mellal-khénifra</a></li>


                        </li>

                    </ul>
                </div>

                <div class="footer__data">
                    <ul>
                        <li><a href="" class="footer__link">Tanger-tétouan-al hoceima</a></li>
                        <li><a href="" class="footer__link">Tanger-tétouan-al hoceima</a> </li>
                        <li><a href="" class="footer__link">Grand casablanca-settat</a></li>
                        <li><a href="" class="footer__link">Marrakech-safi</a></li>
                        <li><a href="" class="footer__link">Darâa-tafilalet</a></li>
                        <li><a href="" class="footer__link">Souss-massa</a></li>

                    </ul>
                </div>

                <div class="footer__data">
                    <ul>
                        <li><a href="" class="footer__link">Guelmim-oued noun</a></li>
                        <li><a href="" class="footer__link">Laâyoune-saguia el hamra</a></li>
                        <li><a href="" class="footer__link">Dakhla-oued-eddahab</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <a href="https://www.facebook.com/profile.php?id=100077811415111" target="_blank" class="footer__social">
                    <i class="ri-facebook-box-fill"></i>
                </a>
                <a href="https://twitter.com/Equipement_Eau" target="_blank" class="footer__social">
                    <i class="ri-twitter-fill"></i>
                </a>
                <a href="https://www.instagram.com/equipement_eau/" target="_blank" class="footer__social">
                    <i class="ri-instagram-fill"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCBz_S42IrOw5QJh3C9Vckhw" target="_blank" class="footer__social">
                    <i class="ri-youtube-fill"></i>
                </a>
            </div>

            <div class="footer__rights">
                <p class="footer__copy">&#169; 2023 DPEE TANTAN. All rigths reserved.</p>
                <div class="footer__terms">
                    <a href="#" class="footer__terms-link">Terms & Agreements</a>
                    <a href="#" class="footer__terms-link">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>
=======
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="./img/logo (1).ico" type="image/png">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="./assets/css/styles.css">
>>>>>>> 4447606fbc3116dd24972f4b7c06707113612a4e

        <title>DPEE - Principal</title>
    </head>
    <body class="bodypage">
        
    <div>
        @include('layouts.navBar')
    </div>

        <div class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="img">

                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">More News</h2>
                        <p class="about__description">You can find the most beautiful and pleasant places at the best 
                            prices with special discounts, you choose the place we will guide you all the way to wait, get your 
                            place now.
                        </p>
                        <a href="/news" class="button">More News</a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="assets/img/Porttantan.jpg" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="assets/img/t.jpg" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==================== DISCOVER ====================-->
            <div class="discover container " id="discover">
                <h2 class="section__title">Discover Our Services</h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <div class="box1">Service EAU</div>
                        <div class="box1">Service Gestion Et Programmes</div>
                        <div class="box1">Service Transport Routier</div>
                        <div class="box1">Service Infratructure</div>
                        <div class="box1">Service Gestion Du Domaine Public Et Carrieres</div>
                    </div>
                    
                    <div class="btndiscover_services">
                        <a href="/services" class="button">Discover Service</a>     
                    </div>   
                </div>
            </div>

            

            <!--==================== PLACES ====================-->
            <section class="place section" id="place">
                <h2 class="section__title">Our Projects</h2>

                <div class="place__container container grid">
                    <!--==================== PLACES CARD 1 ====================-->
                    <div class="place__card">
                        <img src="assets/img/place1.jpg" alt="" class="place__img">
                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 2 ====================-->
                    <div class="place__card">
                        <img src="assets/img/place2.jpg" alt="" class="place__img">


                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 3 ====================-->
                    <div class="place__card">
                        <img src="assets/img/place3.jpg" alt="" class="place__img">
                        
                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 4 ====================-->
                    <div class="place__card">
                        <img src="assets/img/place4.jpg" alt="" class="place__img">
                        

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/place5.jpg" alt="" class="place__img">
                        
                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>
            </section>

        </div>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">Travel</h3>
                        <p class="footer__description">Travel you choose the <br> destination, 
                            we offer you the <br> experience.
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">About Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Features</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">New & Blog</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Company</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Plan y Pricing</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Become a member</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Support</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">FAQs</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Support Center</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2021 Bedimcode. All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>