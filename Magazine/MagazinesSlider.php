<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>AIAC Space Club</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="max-age=120" />
  <link rel="stylesheet" href="styles.css">
  <link href="/space_club/unpkg.com/swiper%406.4.5/swiper-bundle.min.css" rel="stylesheet" />


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Contact</title>


</head>


<style>
  body{
    font-family : monospace ;
  }
  @media screen and (min-width: 992px) {
    .subfoot {
      width: 100%;
      height: 528px;
      position: absolute;
      top: 2338px;
      background-image: url('backnavbar.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  }

  #header-home {
    color: #34baeb;
    font-weight: 600;
  }

  .cool-box {
    background: #fff;
    border-radius: 20px;
    transition: 0.8s cubic-bezier(0, 0, 0.2, 1);
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 10px;
  }

  .cool-box:hover {
    -webkit-filter: grayscale(100%);
    /* Safari 6.0 - 9.0 */
    filter: grayscale(100%);
    transform: translateY(5px);
  }

  .hovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
  }

  .hovereffect .overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
  }


  .hovereffect img {
    display: block;
    position: relative;
    -webkit-transition: all 0.4s ease-in;
    transition: all 0.4s ease-in;
    width: 100%;
  }

  .hovereffect:hover img {
    filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feColorMatrix type="matrix" color-interpolation-filters="sRGB" values="0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0 0 0 1 0" /><feGaussianBlur stdDeviation="3" /></filter></svg>#filter');
    filter: grayscale(1) blur(3px);
    -webkit-filter: grayscale(1) blur(3px);
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2);
  }

  .hovereffect h2 {
    text-transform: uppercase;
    text-align: center;
    position: relative;
    font-size: 17px;
    padding: 10px;
    background: rgba(0, 0, 0, 0.6);
  }

  .hovereffect a.info {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    border: 1px solid #fff;
    margin: 50px 0 0 0;
    background-color: transparent;
  }

  .hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
  }

  .hovereffect a.info,
  .hovereffect h2,
  .hovereffect p {
    -webkit-transform: scale(0.7);
    -ms-transform: scale(0.7);
    transform: scale(0.7);
    -webkit-transition: all 0.4s ease-in;
    transition: all 0.4s ease-in;
    opacity: 0;
    filter: alpha(opacity=0);
    color: #fff;
    text-transform: uppercase;
  }

  .hovereffect:hover a.info,
  .hovereffect:hover h2,
  .hovereffect:hover p {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    transform-origin: 0 0;
  }

  .carousel-item.active,
  .carousel-item-next,
  .carousel-item-prev {
    display: block;
  }

  .carousel-indicators li {
    background-color: #34baeb;
  }

  .btn-custom {
    background-color: #004771;
    border: 1px solid #004771;
  }

  .btn-custom {
    color: #fff;
    background-color: #107fa8;
    border: 1px solid #107fa8;
  }

  .btn-custom:hover {
    color: #34baeb;
    background-color: transparent;
    border: 1px solid #34baeb;
    transition: 0.4s ease;
  }

  .disappear-text {
    opacity: 0;
    transform: translateY(20px);
    transition: 0.5s all ease-in-out;
  }

  .appear-text {
    opacity: 1;
    transform: translateY(0px);
  }

  /* Slider cards */
  .card-custom {
    position: relative;
    background: #fff;
    width: 400px;
    height: auto;
    margin: 0 auto;
  }

  .card-custom .content {
    width: 400px;
    padding: 30px;
    box-sizing: border-box;
    text-align: center;
  }

  .card-custom .content h3 {
    color: black;
    font-family: 'Abel';
  }

  .card-custom .content p a {
    text-decoration: none;
  }

  .card-custom .sliderText {
    position: relative;
    width: 100%;
    height: 250px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .card-custom .sliderText img {
    height: 225px;
    width: 225px;
    object-fit: cover;
  }

  .card-img-top {
    /* height: 300px;
            width: 100%;
            object-fit: cover; */
    height: auto;
    width: 100%;
    object-fit: cover;
  }

  .card-body {
    height: 330px;
    overflow: hidden;
  }

  @media screen and (max-width: 992px) and (min-width: 768px) {
    .card-body {
      height: 250px;
      overflow: hidden;
    }
  }

  .swiper-slide {
    width: 400px;
  }

  .blackout {
    background: #0e111f !important;
  }

  #overlay {
    text-align: center;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #0a0a16;
    z-index: 300;
    cursor: pointer;
  }

  #overlay img {
    margin-top: calc(50vh - 112px);
  }

  .social-links {
    position: relative;
    opacity: 1;
    transition: 0.4s ease-in;
  }

  .goDead {
    height: 42px;
    width: 42px;
    transition: 0.3s ease-out;
  }

  .goDead:hover {
    transform: rotateZ(45deg);
    filter: grayscale(100%);
  }

  #allMembers {
    color: #343a40;
    padding: 0.5em 1em;
    text-decoration: none;
    text-transform: uppercase;
    border: 4px solid #343a40;
    transition: 0.4s ease-out;
  }

  #allMembers:hover {
    color: #fff;
    background-color: #343a40C8;
  }

  .award-1,
  .award-2 {
    width: 250px;
    margin: 2rem auto;
    padding: 1rem;
  }

  .award-1 {
    margin: 2rem 20px 2rem auto;
  }

  .award-2 {
    margin: 2rem auto 2rem 20px;
  }

  @media (max-width: 575.98px) {
    .award-1 {
      margin: 2rem auto 2rem auto !important;
    }

    .award-2 {
      margin: 2rem auto 2rem auto !important;
    }
  }

  @media only screen and (max-width: 440px) {
    .card-custom .content {
      width: 300px;
    }

    .card-custom {
      width: 300px;
    }
  }

  @media only screen and (max-width: 340px) {
    .card-custom .content {
      width: 250px;
    }

    .card-custom {
      width: 250px;
    }
  }

  nav {
    background-image: url('backnavbar.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    margin-bottom: 0%;
  }

  .navbar-toggler {
    background-color: white;
  }

  .carousel-item img {
    width: 100%;
    height: 85.2vh;
  }

  .effect-9 {
    position: relative;
    top: 2.5px;
    left: -150px;
    width: 50%;


  }

  .effect-9~.focus-border:before,
  .effect-9~.focus-border:after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 0;
    height: 3px;
    background-color: #3399FF;
    transition: 0.2s;
    transition-delay: 0.2s;
  }

  .effect-9~.focus-border:after {
    top: auto;
    bottom: 0;
    right: auto;
    left: 0;
    transition-delay: 0.6s;
  }

  .effect-9~.focus-border i:before,
  .effect-9~.focus-border i:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 2px;
    height: 0;
    background-color: #3399FF;
    transition: 0.2s;
  }

  .effect-9~.focus-border i:after {
    left: auto;
    right: 0;
    top: auto;
    bottom: 0;
    transition-delay: 0.4s;
  }

  .effect-9:focus~.focus-border:before,
  .effect-9:focus~.focus-border:after {
    width: 100%;
    transition: 0.2s;
    transition-delay: 0.6s;
  }

  .effect-9:focus~.focus-border:after {
    transition-delay: 0.2s;
  }

  .effect-9:focus~.focus-border i:before,
  .effect-9:focus~.focus-border i:after {
    height: 100%;
    transition: 0.2s;
  }

  .effect-9:focus~.focus-border i:after {
    transition-delay: 0.4s;
  }

  #carouselId {
    width: 100%;
    height: 85.2vh;
  }

  @media (max-width : 700px) {
    #carouselId {
      width: 100%;
      height: 48vh;
    }

    .carousel-item img {
      width: 100%;
      height: 48vh;

    }

  }

  @media screen and (max-width: 500px) {
    .subfoot {
      position: absolute;
      height: 1050px;
      width: 100%;
      top: 3150px;
      background-image: url('backnavbar.jpg');
      background-position: bottom;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .subscribe {
      position: absolute;
      width: 100%;
      top: 11px;

    }

    footer {
      position: absolute;
      width: 100%;
      margin-top: -2590px;

    }
  }


.download {
  cursor: pointer;
  height:  3vw;
  width: 3vw;
  overflow: visible;

  
 
}
:hover .arrow {
    animation: bounce 0.75s both ease-out 1;
  }

@keyframes bounce {
  0% { transform: translateY(0) }
  25% { transform: translateY(-3px) }
  50% { transform: translateY(0) }
  75% { transform: translateY(-3px) }
  100% { transform: translateY(0) }
}

</style>

<body style="background-color:#11151D ">

  <div class="content-sector">


    <?php

    //connect to db and get all the magazines
    include('../dB/config.php');
    //store all the records in this array
    $request = $db->query('SELECT * FROM magazines ORDER BY dateTime DESC; ');

    ?>

    <div class="row justify-content-center w-100" style="margin-top: auto;">
      <div class="swiper-container">

        <div style="left: 10px; " class="swiper-wrapper">
          <?php
          while ($item = $request->fetch()) {
          ?>
            <div class="swiper-slide" style="">
              <div class="card card-custom" style="height: 450px;background-image:url('<?php echo $item['icon']  ?>');background-size : cover ; ">
                <div class='content' >

                  <div class="icon" style="align-items:flex-end">
                  <a href="<?php echo $item['path']  ?>">
                    <svg class="download" xmlns="http://www.w3.org/2000/svg" width="25%" height="25%" viewBox="0 0 14 17" >
                      <path class="arrow" fill="#fff" fill-rule="evenodd" d="M14 6h-4V0H4v6H0l7 7 7-7z" />
                      <path class="line" fill="#fff" fill-rule="evenodd" d="M0 15v2h14v-2H0z" />
                    </svg>
                    </a>
                  </div>


                 

                </div>
              </div>
            </div>

          <?php
          }
          ?>




        </div>

      </div>



    </div>
    <br>
  </div>
  <script src="/space_club/cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="/space_club/unpkg.com/swiper%406.4.5/swiper-bundle.min.js"></script>
  <script src="/space_club/cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js" integrity="sha512-53CQcu9ciJDlqhK7UD8dZZ+TF2PFGZrOngEYM/8qucuQba+a+BXOIRsp9PoMNJI3ZeLMVNIxIfZLbG/CdHI5PA==" crossorigin="anonymous"></script>

  <!-- Custom Scripts -->
  <script>
    $(document).ready(function() {
      var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        disableOnInteraction: true,
        coverflowEffect: {
          rotate: 30,
          stretch: 0,
          depth: 300,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: '.swiper-pagination',
        },
      });
      /*var mySwiper = document.querySelector('.swiper-container').swiper
    
            $(".swiper-container").mouseenter(function() {
                mySwiper.autoplay.stop();
                console.log('slider stopped');
            });
    
            $(".swiper-container").mouseleave(function() {
                mySwiper.autoplay.start();
                console.log('slider started again');
            });*/

      $(window).scroll(function() {
        var ieeeText = document.querySelector('.about-ieee');
        var usText = document.querySelector('.about-us');
        var award = document.getElementById('award-showcase')

        var ieeeLoc = ieeeText.getBoundingClientRect().top;
        var usLoc = usText.getBoundingClientRect().top;
        var awardLoc = award.getBoundingClientRect().top;

        var screenPos = window.innerHeight / 1.2;

        if (ieeeLoc < screenPos) {
          $('.about-ieee').addClass('appear-text');
        } else {
          $('.about-ieee').removeClass('appear-text');
        }
        if (usLoc < screenPos) {
          $('.about-us').addClass('appear-text');
        } else {
          $('.about-us').removeClass('appear-text');
        }
        if (awardLoc < screenPos) {
          $('#award-showcase').addClass('appear-text');
        } else {
          $('#award-showcase').removeClass('appear-text');
        }
      });

      $('.slide-one-item-alt').owlCarousel({
        center: false,
        items: 1,
        dots: false,
        loop: true,
        margin: 0,
        smartSpeed: 1000,
        autoplay: true,
        autoplayHoverPause: true,
        onDragged: function(event) {
          console.log('event: ', event.relatedTarget['_drag']['direction'])
          if (event.relatedTarget['_drag']['direction'] == 'left') {
            $('.slide-one-item-alt-text').trigger('next.owl.carousel');
          } else {
            $('.slide-one-item-alt-text').trigger('prev.owl.carousel');
          }
        }
      });

      $('.slide-one-item-alt-text').owlCarousel({
        center: false,
        items: 1,
        dots: false,
        loop: true,
        margin: 0,
        smartSpeed: 1000,
        autoplay: true,
        autoplayHoverPause: true,
        onDragged: function(event) {
          console.log('event: ', event.relatedTarget['_drag']['direction'])
          if (event.relatedTarget['_drag']['direction'] == 'left') {
            $('.slide-one-item-alt').trigger('next.owl.carousel');
          } else {
            $('.slide-one-item-alt').trigger('prev.owl.carousel');
          }
        }
      });

      $('.custom-next').click(function(e) {
        e.preventDefault();
        $('.slide-one-item-alt').trigger('next.owl.carousel');
        $('.slide-one-item-alt-text').trigger('next.owl.carousel');
      });
      $('.custom-prev').click(function(e) {
        e.preventDefault();
        $('.slide-one-item-alt').trigger('prev.owl.carousel');
        $('.slide-one-item-alt-text').trigger('prev.owl.carousel');
      });

      //Goto top button visibility
      window.onscroll = function() {
        if (pageYOffset >= 150) {
          $('#BTT').prop('hidden', false);
        } else {
          $('#BTT').prop('hidden', true);
        }
      };
    });
  </script>
  <script>
    $(window).on('load', function() {
      setTimeout(function() {
        $(window).scrollTop(0);
        $("#overlay").fadeOut(500);
      }, 100);
    });
    $('.dropdown').on('click touch', function() {
      $(".dropdown_menu").toggleClass("custom-toggle");
      $(".dropdown_icon").toggleClass("toggle-icon");
    })
  </script>



</body>

</html>