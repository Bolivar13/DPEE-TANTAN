<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<<<<<<< HEAD
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="/img/logo (1).ico" type="image/png">

  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="/assets/css/styles.css">
  <link rel="stylesheet" href="/assets/css/services.css">

  <title>DPEE - Services</title>
</head>

<body>

  @include('layouts.navBar')

  <div class="body_service">
    <section class="body_service">

      <div class="row_title">
        <h1 class="section-heading my-5"> {{__('services')}} </h1>
      </div>
      <div class="row">
        @foreach ($services as $service)
        <div class="column d-flex justify-content-center">

          <div class="card">
            <div class="img_service">
              <img src="{{asset('/storage/images'.'/' . $service->image)}}" alt="">
            </div>
            <h3 class="title_service">{{$service->title}}</h3>

            <a href="/services/{{$service->id}}/show" class="button">{{__('details')}} </a>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <footer class="footer ">
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

        <div class="footer__rights">
          <p class="footer__copy">&#169; 2021 Bedimcode. All rigths reserved.</p>
          <div class="footer__terms">
            <a href="#" class="footer__terms-link">Terms & Agreements</a>
            <a href="#" class="footer__terms-link">Privacy Policy</a>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!--==================== FOOTER ====================-->


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
=======
        <link rel="shortcut icon" href="./img/logo (1).ico" type="image/png">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="./assets/css/styles.css">

        <title>DPEE - Services</title>
    </head>
    <body>
        
    @include('layouts.navBar')

        <div class="main">
            <h1>Services</h1>
            <div class="box1">
                <h3>Test 1</h3>
                <i class="ri-star-line place__rating-icon"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ad quibusdam ipsum asperiores doloremque error. Quia neque qui fugiat iusto. Vel incidunt sapiente sunt excepturi eum recusandae porro at dolorum!Ipsum ipsa vitae et tempora officia laboriosam temporibus similique amet numquam sit odit cum accusamus nesciunt atque molestias, unde veniam eos eaque animi in possimus ab deleniti asperiores! Maiores, molestiae?</p>
            </div>
        </div>
>>>>>>> 4447606fbc3116dd24972f4b7c06707113612a4e

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