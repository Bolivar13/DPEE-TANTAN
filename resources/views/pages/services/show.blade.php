<!DOCTYPE html>
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
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/services.css">
    <link rel="stylesheet" href="/assets/css/details.css">

    <title>DPEE - Services</title>
</head>

<body>

    @include('layouts.navBar')

    <section>
        <div class="image" style="width: 400px;height: 500px;">
            <img style="margin-top: 100px;" src="{{asset('/storage/images'.'/' . $service->image)}}" alt="">
        </div>

        <div class="content">
            <h2>{{$service->title}}</h2>
            <span><!-- line here --></span>

            <p>{{$service->description}}</p>
        </div>

        <div class="d-flex justify-content-center flex-wrap col-11 flex-column">
            @foreach ($bureaux as $bureau)
            <div class=" mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$bureau->title}}</h5>
                        <p class="card-text">{{$bureau->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

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
    {{-- <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a> --}}
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