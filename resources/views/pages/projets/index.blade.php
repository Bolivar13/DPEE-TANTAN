<!DOCTYPE html>
<html lang='ar'>

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

  <title>DPEE - Projets </title>
</head>

<body>

  @include('layouts.navBar')

  <div class="body_service">
    <section class="body_service">

      <div class="row_title">
        <h1 class="section-heading my-5">Nos Projets</h1>
      </div>
      <div class="row">
        @foreach ($projets as $projet)
        <!-- <a href="{{'projets/'.$projet->id.'/show'}}"></a> -->

        <div class="column d-flex justify-content-center">
          <div class="card">
            <div class="img_service">
              <img src="{{asset('/storage/projetsPicture'.'/' . $projet->image)}}" alt="">
            </div>
            <h3 class="title_service">{{$projet->title}}</h3>
            <h3>La Durée : <span>{{$projet->duree}}</span></h3>
            <a href="{{'projets/'.$projet->id.'/show'}}" class="button mt-5 mb-1">Datails</a>
          </div>
        </div>
        @endforeach
      </div>

  </div>
  </section>
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

</html>