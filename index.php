<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="home.css">
  <title>Document</title>
  <style>
    #menuButton {
      background-color: #11151D;
    }
    #team {
      padding-top: 1%;
      width: 100%;
      height: auto;
      background-color: #11151D;   
      margin-top:3%
    }
    #title {
      font-size: 2.5em;
      color: #3996F3;
      text-decoration: overline;
    }

    #description {
      color: #11151D;
      text-align: center;
    }

    #titleSlide {
      font-size: 1em;
    }
    #achievement {
      display: flex;
      flex-direction: row;
      align-items: center;
      width: 100%;
      height: auto;
      padding: 5%;
    }

    #about_us {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content:center;
      width: 100%;
      height: auto;
      padding: 5%;
    }

    #video {
      margin: 5%;
      width: 60%;
      height: 60vh;
      align-items: flex-end;
    }
    #vision{
 
      height: auto;
    }

    #ifrm {
        width: 60%;
        height: 60vh;
        margin-right: 5%;
        margin-top :16%;
    }

    video {
      width: 95%;
      height: 40vh;
      padding-top: 10%
    }

    #txt {
      width: 50%;
      font-weight: bold;
    }

    #txt-title {
      font-size: 4em;
      color: #3996F3;
    }

    #txt-body {
      font-weight: normal;
    }

    .fnc-nav {
      width: 60%;
    }

    .fnc-nav__control {
      width: 25%;
    }

    #txt-body-achievement {
      margin-left: 5%;
      margin-top: 10%;

    }

    li:not(:last-child) {
      margin-top: 20px;
      margin-bottom: 20px;
    }

    /*---------------------------------vision-------------------------------------------------------------*/
    #about_us1 {
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      align-items: center;
      flex-wrap: wrap;
      width: 100%;
      height: auto;
      background-color: rgba(229, 241, 253, 255);
      padding: 5%; 
    }


    /* ----------------------------------------Cube style---------------------------------------------------------------- */


    .sliderCube {     
      width: 300px;
      height: 300px;
      -webkit-perspective: 600px;
      perspective: 600px;
      margin: 0 auto;
    }

    .sliderCube * {
      -webkit-transition: all 1s cubic-bezier(0.5, -0.75, 0.2, 1.5);
      transition: all 1s cubic-bezier(0.5, -0.75, 0.2, 1.5);
    }

    .containerCube {
      width: inherit;
      height: inherit;
      -webkit-transform-style: preserve-3d;
      transform-style: preserve-3d;
      -webkit-transform: rotateY(0deg) rotateX(0deg);
      transform: rotateY(0deg) rotateX(0deg);
    }

    .slide,
    .slide:after,
    .slide:before {
      display: block;
      width: inherit;
      height: inherit;
      background: url('event.JPG');
      position: absolute;
      -webkit-transform-style: preserve-3d;
      transform-style: preserve-3d;
      background-size: cover;
      background-position: center;
    }

    .slide.x {
      -webkit-transform: rotateY(90deg);
      transform: rotateY(90deg);
    }

    .slide.x:after {
      content: '';
      background-image: url('event.JPG');
      -webkit-transform: translateZ(150px) rotateZ(-90deg);
      transform: translateZ(150px) rotateZ(-90deg);
    }

    .slide.x:before {
      content: '';
      background-image: url('podcast.PNG');
      -webkit-transform: translateZ(-150px) rotateZ(-90deg);
      transform: translateZ(-150px) rotateZ(-90deg);
    }

    .slide.y {
      -webkit-transform: rotateX(90deg);
      transform: rotateX(90deg);
    }

    .slide.y:after {
      content: '';
      background-image: url('podcast.PNG');
      -webkit-transform: translateZ(150px) scale(-1);
      transform: translateZ(150px) scale(-1);
    }

    .slide.y:before {
      content: '';
      background-image: url('competitions.jpg');
      -webkit-transform: translateZ(-150px);
      transform: translateZ(-150px);
    }

    .slide.z {
      -webkit-transform: rotateX(0);
      transform: rotateX(0);
    }

    .slide.z:after {
      content: '';
      background-image: url('competitions.jpg');
      -webkit-transform: translateZ(150px);
      transform: translateZ(150px);
    }

    .slide.z:before {
      content: '';
      background-image: url('partnership.jpg');
      -webkit-transform: translateZ(-150px);
      transform: translateZ(-150px);
    }


    .containerCube {
      -webkit-animation: rotate 15s infinite cubic-bezier(1, -0.75, 0.5, 1.2);
      animation: rotate 15s infinite cubic-bezier(1, -0.75, 0.5, 1.2);
    }

    @-webkit-keyframes rotate {

      0%,
      10% {
        -webkit-transform: rotateY(0deg) rotateX(0deg);
        transform: rotateY(0deg) rotateX(0deg);
      }

      15%,
      20% {
        -webkit-transform: rotateY(180deg) rotateX(0deg);
        transform: rotateY(180deg) rotateX(0deg);
      }

      25%,
      35% {
        -webkit-transform: rotateY(180deg) rotateX(270deg);
        transform: rotateY(180deg) rotateX(270deg);
      }

      40%,
      50% {
        -webkit-transform: rotateY(180deg) rotateX(90deg);
        transform: rotateY(180deg) rotateX(90deg);
      }

      55%,
      65% {
        -webkit-transform: rotateY(-90deg) rotateX(90deg);
        transform: rotateY(-90deg) rotateX(90deg);
      }

      70%,
      80% {
        -webkit-transform: rotateY(90deg) rotateX(90deg);
        transform: rotateY(90deg) rotateX(90deg);
      }

      90%,
      95% {
        -webkit-transform: rotateY(0deg) rotateX(90deg);
        transform: rotateY(0deg) rotateX(90deg);
      }
    }

    @keyframes rotate {

      0%,
      10% {
        -webkit-transform: rotateY(0deg) rotateX(0deg);
        transform: rotateY(0deg) rotateX(0deg);
      }

      15%,
      20% {
        -webkit-transform: rotateY(180deg) rotateX(0deg);
        transform: rotateY(180deg) rotateX(0deg);
      }

      25%,
      35% {
        -webkit-transform: rotateY(180deg) rotateX(270deg);
        transform: rotateY(180deg) rotateX(270deg);
      }

      40%,
      50% {
        -webkit-transform: rotateY(180deg) rotateX(90deg);
        transform: rotateY(180deg) rotateX(90deg);
      }

      55%,
      65% {
        -webkit-transform: rotateY(-90deg) rotateX(90deg);
        transform: rotateY(-90deg) rotateX(90deg);
      }

      70%,
      80% {
        -webkit-transform: rotateY(90deg) rotateX(90deg);
        transform: rotateY(90deg) rotateX(90deg);
      }

      90%,
      95% {
        -webkit-transform: rotateY(0deg) rotateX(90deg);
        transform: rotateY(0deg) rotateX(90deg);
      }
    }

    .small {
      font-size: smaller;
      opacity: .75;
    }
    /*-----------------------------------------------------------------------subscribe-------------------------------------------------------------------------------------- */
    .wrapper {
      background: #fff;
      max-width: 400px;
      width: 100%;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
    }

    .wrapper .top {
      height: 140px;
      background: #11151D;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 12px 12px 0 0;
      position: relative;
    }

    .wrapper .top::before {
      content: "";
      position: absolute;
      height: 20px;
      width: 20px;
      background: #11151D;
      bottom: -10px;
      transform: rotate(45deg);
    }

    .wrapper .top i {
      font-size: 70px;
      color: #ccc;
    }

    .wrapper .bottom {
      padding: 30px;
    }

    .wrapper .bottom .info {
      font-size: 20px;
      font-weight: 500;
    }

    .wrapper .bottom .input-box {
      width: 100%;
      height: 45px;
      margin: 30px 0 100px 0;
    }

    .wrapper .bottom .input-box input {
      width: 100%;
      height: 100%;
      font-size: 18px;
      border-radius: 25px;
      margin-top: 15px;
      outline: none;
      transition: all 0.4s ease;
    }

    .wrapper .bottom input[type="text"] {
      padding-left: 20px;
      border: 2px solid #cccccc;
    }

    .wrapper .bottom input[type="text"]:focus,
    .wrapper .bottom input[type="text"]:valid {
      border-color: #11151D;
    }

    .wrapper .bottom input[type="submit"] {
      border: none;
      background: #016cec;
      color: #ffffff;
      letter-spacing: 1px;
      cursor: pointer;
    }

    .wrapper .bottom input[type="submit"]:hover {
      background: #11151D;
    }

    .wrapper .bottom .footer {
      font-size: 16px;
    }

    #transition {
      background-color: rgba(229, 241, 253, 255);
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 5rem 1rem;
    }

    /*-----------------------------------------------------------------------footer-------------------------------------------------------------------------------------- */
    #footer {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      width: 100%;
 
      height: auto;

      background-repeat: no-repeat;
      background-size: cover;
      font-size: 1em;
      color: white;
      padding-bottom: 3%;
    
    }

    #itemf {
      width: 20%;
      margin-left: 5%;
      padding-top: 5%
    }


    .arrow {
      border: solid black;
      border-width: 0 3px 3px 0;
      display: inline-block;
      padding: 3px;
      border-color: white;
    }

    .right {
      transform: rotate(-45deg);
      -webkit-transform: rotate(-45deg);
    }
  


    

    @media only screen and (min-width: 768px) and (max-width: 959px) {

    }

    

    /*phone size */
    @media (max-width: 900px) {

    .slide.x {
      -webkit-transform: rotateY(90deg);
      transform: rotateY(90deg);
    }

    .slide.x:after {
      content: '';
      background-image: url('event.JPG');
      -webkit-transform: translateZ(100px) rotateZ(-90deg);
      transform: translateZ(100px) rotateZ(-90deg);
    }

    .slide.x:before {
      content: '';
      background-image: url('podcast.PNG');
      -webkit-transform: translateZ(-100px) rotateZ(-90deg);
      transform: translateZ(-100px) rotateZ(-90deg);
    }

    .slide.y {
      -webkit-transform: rotateX(90deg);
      transform: rotateX(90deg);
    }

    .slide.y:after {
      content: '';
      background-image: url('podcast.PNG');
      -webkit-transform: translateZ(100px) scale(-1);
      transform: translateZ(100px) scale(-1);
    }

    .slide.y:before {
      content: '';
      background-image: url('competitions.jpg');
      -webkit-transform: translateZ(-100px);
      transform: translateZ(-100px);
    }

    .slide.z {
      -webkit-transform: rotateX(0);
      transform: rotateX(0);
    }

    .slide.z:after {
      content: '';
      background-image: url('competitions.jpg');
      -webkit-transform: translateZ(100px);
      transform: translateZ(100px);
    }

    .slide.z:before {
      content: '';
      background-image: url('partnership.jpg');
      -webkit-transform: translateZ(-100px);
      transform: translateZ(-100px);
    }


    .containerCube {
      -webkit-animation: rotate 15s infinite cubic-bezier(1, -0.75, 0.5, 1.2);
      animation: rotate 15s infinite cubic-bezier(1, -0.75, 0.5, 1.2);
    }

    @-webkit-keyframes rotate {

      0%,
      10% {
        -webkit-transform: rotateY(0deg) rotateX(0deg);
        transform: rotateY(0deg) rotateX(0deg);
      }

      15%,
      20% {
        -webkit-transform: rotateY(180deg) rotateX(0deg);
        transform: rotateY(180deg) rotateX(0deg);
      }

      25%,
      35% {
        -webkit-transform: rotateY(180deg) rotateX(270deg);
        transform: rotateY(180deg) rotateX(270deg);
      }

      40%,
      50% {
        -webkit-transform: rotateY(180deg) rotateX(90deg);
        transform: rotateY(180deg) rotateX(90deg);
      }

      55%,
      65% {
        -webkit-transform: rotateY(-90deg) rotateX(90deg);
        transform: rotateY(-90deg) rotateX(90deg);
      }

      70%,
      80% {
        -webkit-transform: rotateY(90deg) rotateX(90deg);
        transform: rotateY(90deg) rotateX(90deg);
      }

      90%,
      95% {
        -webkit-transform: rotateY(0deg) rotateX(90deg);
        transform: rotateY(0deg) rotateX(90deg);
      }
    }

    @keyframes rotate {

      0%,
      10% {
        -webkit-transform: rotateY(0deg) rotateX(0deg);
        transform: rotateY(0deg) rotateX(0deg);
      }

      15%,
      20% {
        -webkit-transform: rotateY(180deg) rotateX(0deg);
        transform: rotateY(180deg) rotateX(0deg);
      }

      25%,
      35% {
        -webkit-transform: rotateY(180deg) rotateX(270deg);
        transform: rotateY(180deg) rotateX(270deg);
      }

      40%,
      50% {
        -webkit-transform: rotateY(180deg) rotateX(90deg);
        transform: rotateY(180deg) rotateX(90deg);
      }

      55%,
      65% {
        -webkit-transform: rotateY(-90deg) rotateX(90deg);
        transform: rotateY(-90deg) rotateX(90deg);
      }

      70%,
      80% {
        -webkit-transform: rotateY(90deg) rotateX(90deg);
        transform: rotateY(90deg) rotateX(90deg);
      }

      90%,
      95% {
        -webkit-transform: rotateY(0deg) rotateX(90deg);
        transform: rotateY(0deg) rotateX(90deg);
      }
    }




      .sliderCube {
       

top: 0;
bottom: 0;
right: 0;
left: 0;
width: 200px;
height: 200px;
margin: 8%;
-webkit-perspective: 600px;
perspective: 600px;
}

      .single-person{
      align-items: center;
      padding-left: 10%;
      background-color: rebeccapurple;
      }
      #transition {
        background-color: rgba(229, 241, 253, 255);
        width: 100%;
        margin-top: 30%;
      }
      #footer {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        height: auto;
        background-color: #11151D;
  
    
        background-repeat: no-repeat;
        background-size: cover;
        font-size: 1em;
        color: white;
      }
      #itemf {
        width: auto;
      }

      #team {
        width: 100%;
        height: auto;
   
   
        margin-top: 10%;
       
        
      }


      #about_us1 {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: auto;
        background-color: rgba(229, 241, 253, 255);
        padding: 5%;
      }

      #vision {
        width: 90%;
        height: 50vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: transparent;
      }

      #icon {
        height: auto;
        align-items: center;
        background-color: transparent;
      }

      #title {
        width: 100%;
        text-align: center;
        color: #11151D;

      }

      #description {
        width: 100%;
        text-align: center;

      }

      #titleSlide {
        font-size: 40px;
        text-align: left;
        margin-left: 3%;
      }

      #menuButton {
        width: 100%;
        position: absolute;
        top: 200px;
        right: 20px;
        margin-right: 5%;

        font-weight: lighter;
        font-style: italic;
        font-size: small;
      }

      #slider {
        background-color: transparent;
        margin-right: 0;
        padding-right: 0;
      }

      .fnc-nav__control {
        width: 25%;
        font-size: 10px;
      }

      .fnc-nav {
        width: 100%;
      }

      #about_us {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: auto;

      }

      #video {
        padding: 5%;
        padding-top: 10%;
        width: 100%;
        margin-top: 2%;
        height: 60vh;
        align-items: center;
     


      }
       #ifrm {
        width: 100%;
        height: 50vh;

      }

      #txt {
        width: 100%;
        margin-right: 5%;
        margin-left: 5%;
        margin-top: 0%;

      }
      #achievement{
        display: flex;
        flex-direction: column;
        width: 100%;
        height: auto;
        padding: 10%;

      }

      #txt-title {
        width: 100%;
        font-size: 50px;
        text-align: center;
        


      }

      #txt-body {
        width: 100%;
        text-align: center;

      }

      .arrow {
        border: solid black;
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 3px;
      }

      .right {
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
      }


    }
  </style>



</head>




<body style=" background-color:#11151D ; width:100%;  overflow-x: hidden;" >
  <!-- 
Please note, that you can apply .m--global-blending-active to .fnc-slider 
to enable blend-mode for all background-images or apply .m--blend-bg-active
to some specific slides (.fnc-slide). It's disabled by default in this demo,
because it requires specific images, where more than 50% of bg is transparent or monotone
-->

  <div class="demo-cont" id="slider" style="width: 100%">
    <!-- slider start -->
    <div class="fnc-slider example-slider" style="width: 100%;">


      <div class="fnc-slider__slides">

        <!-- slide start -->
        <div class="fnc-slide m--blend-green m--active-slide">
          <div class="fnc-slide__inner" style="background: linear-gradient(0deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 75%, rgba(0,0,0,0.5) 90%), url('./slider_pictures/one.jpg');background-size:cover;">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner" style="background-image:url('./slider_pictures/one.jpg')"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span id="titleSlide">AIAC</span>
                </div>
                <div class="fnc-slide__heading-line">
                  <span id="titleSlide">SPACE CLUB</span>
                </div>
              </h2>
              <button type="button" class="fnc-slide__action-btn" id="menuButton">
                a journey to the stars
                <span data-text=" a journey to the stars" style="border-color:transparent"> a journey to the stars</span>
              </button>
            </div>
          </div>
        </div>

        <!-- slide end -->
        <!-- slide start -->
        <div class="fnc-slide m--blend-dark">
          <div class="fnc-slide__inner" style="background: linear-gradient(0deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 75%, rgba(0,0,0,0.5) 90%), url('./slider_pictures/astronomy.jpg');background-size:cover;">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner" style="background-image:url('./slider_pictures/astronomy.jpg')"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span style="color: white;" id="titleSlide">DISCOVER</span>
                </div>
                <div class="fnc-slide__heading-line">
                  <span style="color: transparent;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
              </h2>

              <button type="button" class="fnc-slide__action-btn" style="border-color: #fff; border-top:1px;border-bottom:1px" id="menuButton">
                Discover more<i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i>
                <span data-text="Menu ">Discover more<i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i></span>
              </button>
            </div>
          </div>
        </div>

        <!-- slide end -->
        <!-- slide start -->
        <div class="fnc-slide m--blend-red">
          <div class="fnc-slide__inner" style="background: linear-gradient(0deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 75%, rgba(0,0,0,0.5) 90%), url('./slider_pictures/space_exploration.jpg');background-size:cover;">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner" style="background-image:url('./slider_pictures/space_exploration.jpg')"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span style="color: white;" id="titleSlide">Contribute</span>
                </div>
                <div class="fnc-slide__heading-line">
                  <span style="color:white;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
              </h2>
              <button type="button" class="fnc-slide__action-btn" style="border-color: #fff; border-top:1px;border-bottom:1px" id="menuButton">
                Discover more<i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i>
                <span data-text="Menu ">Discover more<i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i></span>
              </button>
            </div>
          </div>
        </div>

        <!-- slide end -->
        <!-- slide start -->
        <div class="fnc-slide m--blend-blue">
          <div class="fnc-slide__inner" style="background: linear-gradient(0deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 75%, rgba(0,0,0,0.5) 90%), url('./slider_pictures/astronaut.jpg');background-size:cover;">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner" style="background-image:url('./slider_pictures/astronaut.jpg') ;"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span style="color:white;" id="titleSlide">Beyond earth </span>
                </div>
                <div class="fnc-slide__heading-line">
                  <span style="color: transparent;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
              </h2>
              <button type="button" class="fnc-slide__action-btn" id="menuButton">
                Discover more<i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i>
                <span data-text="Menu ">Discover more<i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i></span>
              </button>
            </div>
          </div>
        </div>
        <!-- slide end -->
        <nav class="fnc-nav">
          <div class="fnc-nav__bgs">
            <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
            <div class="fnc-nav__bg m--navbg-dark"></div>
            <div class="fnc-nav__bg m--navbg-red"></div>
            <div class="fnc-nav__bg m--navbg-blue"></div>
          </div>
          <div class="fnc-nav__controls">
            <button class="fnc-nav__control">
              Journey
              <span class="fnc-nav__control-progress"></span>
            </button>
            <button class="fnc-nav__control">
              Astronomy
              <span class="fnc-nav__control-progress"></span>
            </button>
            <button class="fnc-nav__control">
              space_exploration
              <span class="fnc-nav__control-progress"></span>
            </button>

            <button class="fnc-nav__control">
              life beyond earth
              <span class="fnc-nav__control-progress"></span>
            </button>
          </div>
        </nav>


      </div>
      <!-- slider end -->



    </div>
    <div class="demo-cont__credits" id="flex-container" style="background-color:#11151D ; align-items:center">

      <div id="item"> <a href="">Home </a> </div>
      <div id="item"> <a href="/space_club/viewsUserSide/categoryPage.php?category=news&amp;display=noDisplay">News</a></div>
      <div id="item"> <a href="/space_club/viewsUserSide/categoryPage.php?category=magazines&amp;display=noDisplay">Magazines</a></div>
      <div id="item"><a href="/space_club/viewsUserSide/categoryPage.php?category=articles&amp;display=noDisplay">articles</a></div>
      <div id="item"><a href="/space_club/viewsUserSide/categoryPage.php?category=activities&amp;display=noDisplay">activities</a></div>

    </div>

  </div>


  <!-- -------------------------------------------------about Us-------------------------------------------------------------------------------------------- -->
  <div id="about_us" style="background-color:#11151D">
 
    <iframe name="ifrm" id="ifrm" src="https://www.youtube.com/embed/fm-nMndWKek" frameborder="0" allowfullscreen></iframe>
 

    <div id="txt">
      <div id="txt-title">ABOUT Us</span></div>
      <p id="txt-body" style="color:#fff"> AIAC space club was created by passionate engineering students from <a href="https://aiac.ma/">Mohammed VI International Academy of Civil Aviation</a>. It is star dazed Moroccan academic club dedicated to space exploration and astronomical studies Its primary mission is to ignite the flames of curiosity and space exploration all over the country and accompany its members throughout a beautiful journey around the warped corners of the cosmos as they learn about humankind’s endeavors and the latest technological breakthroughs and tools that the different space agencies are developing to take us to the next step of space exploration .
      </p>
    </div>

  </div>

  <!-- -------------------------------------------------Achievements-------------------------------------------------------------------------------------------------------------------->


  <div id="achievement" style="background-color:#11151D;">

    <div id="txt">
      <div id="txt-title"><span style="color:#3996F3 ;">Our Journey</span></div>
      <p id="txt-body-achievement" style="color:#fff">
        At AIAC SPACE CLUB :
      </p>
      <ul style="font-weight: lighter;list-style:circle">
        <li>We Are animating space workshops</li>
        <li>We Are hosting international space events in our country</li>
        <li>We Are Participating on competitions and hackathons</li>
        <li>We Are Creating a quality space content </li>
        <li>We Are hosting Podcasts</li>
      </ul>

    </div>
    <div class="sliderCube">
      <div class="containerCube">
        <div class="slide x"></div>
        <div class="slide y"></div>
        <div class="slide z"></div>
      </div>
    </div>



  </div>
  <style>
    #title {
      color: #11151D;
    }
  </style>


  <!-- -------------------------------------------------Mission vision-------------------------------------------------------------------------------------------- -->


  <div id="about_us1" style="background-color:#8ecae6">

    <div id="vision">
      <div id="icon"> <img src="vision.png" width="170px" height="160px" alt=""></div>
      <div id="title"> Our Vision </div>
      <div id="description">To create a flock of young minds with passion for space , astronomy that aim to use technology to solve the problems of this field . </div>


    </div>
    <div id="vision">
      <div id="icon"> <img src="visibility.png" width="160px" height="160px" alt=""></div>
      <div id="title"> Our Mission </div>
      <div id="description">To assist the creative technological minds in enhancing innovation and achieving excellence to improve the space industry. </div>

    </div>
    <div id="vision">
      <div id="icon"> <img src="mission.png" width="160px" height="160px" alt=""></div>
      <div id="title"> Our Goal </div>
      <div id="description">To be nationally recognized for the contribution of spreading the culture of space and astronomy in Morocco . </div>

    </div>

  </div>


  <!-- -------------------------------------------------Team-------------------------------------------------------------------------------------------- -->

  <div id="team">
    <html>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Responsive Team Section Using HTML5 , CSS3 , Bootstrap 4</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:500,700&display=swap" rel="stylesheet">
      <style>
        /*-- ------------------------------------------------- Custom Style  -------------------------------------------------------------------------------------------- */
        p,
        a,
        h1,
        h2,
        h3,
        h4 {
          margin: 0;
          padding: 0;
        }

        .section-team {
          font-family: "Poppins", sans-serif;
          padding: 80px 0;
        }

        .section-team .header-section {
          margin-bottom: 50px;
        }

        .section-team .header-section .small-title {
          margin-bottom: 25px;
          font-size: 16px;
          font-weight: 500;
          color: #3e64ff;
        }

        .section-team .header-section .title {
          font-weight: 700;
          font-size: 45px;
        }

        .section-team .single-person {
          margin-top: 30px;
          padding: 30px;
          background-color: #8ecae6;
          border-radius: 5px;
          height: 450px;
          display: flex;
          flex-direction: column;
          align-items: center;
        }

        .section-team .single-person:hover {
          background: linear-gradient(to right, #016cec, #00b5f7);
        }

        .section-team .single-person .person-image {
          position: relative;
          margin-bottom: 50px;
          border-radius: 50%;
          border: 4px dashed transparent;
          transition: padding .3s;
          max-width: 200px;
          width:100%;
          height: auto;
        }

        .section-team .single-person:hover .person-image {
          padding: 12px;
          border: 4px dashed #fff;

        }

        .section-team .single-person .person-image img {
          width: 100%;
          border-radius: 50%;
        }

        .section-team .single-person .person-image .icon {
          position: absolute;
          bottom: 0;
          left: 50%;
          transform: translate(-50%, 50%);
          display: inline-block;
          width: 60px;
          height: 60px;
          line-height: 60px;
          text-align: center;
          background: rgba(229, 241, 253, 255);
          color: #fff;
          border-radius: 50%;
          font-size: 24px;
        }

        .section-team .single-person:hover .person-image .icon {
          background: none;
          background-color: rgba(229, 241, 253, 255);
          color: #016cec;

        }

        .section-team .single-person .person-info .full-name {
          margin-bottom: 10px;
          font-size: 28px;
          font-weight: 700;
          text-align: center;
        }
        
        .section-team .single-person .person-info .speciality {
          text-transform: uppercase;
          font-size: 14px;
          color: #016cec;
          text-align: center;
          
        }

        .section-team .single-person:hover .full-name,
        .section-team .single-person:hover .speciality {
          color: #fff;

        }


        @media (max-width: 900px) {
          .single-person {
            align-items: center;
            padding-left: 20%;
          

          }



        }

        /*-- -------------------------------------------------------------------------- -------------------------------------------------------------------------------------------- */
      </style>
    </head>

    <body>

      <section class="section-team">
        <div class="container">
          <!-- Start Header Section -->
          <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
              <div class="header-section">

                <h2 class="title" style="color:#219ebc;">Meet &nbsp; Our &nbsp; Team </br> 2021-2022</h2>
              </div>
            </div>
          </div>
          <!-- / End Header Section -->
          <div class="row">
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img src="./new_pictures/Khadija AL AHYANE.jpg" alt="">
                  <span class="icon">
                    <a href="https://www.linkedin.com/in/khadija-al-ahyane/"><i class="fab fa-linkedin"></i></a>
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">Khadija AL AHYANE</h3>
                  <p class="speciality">President</p>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img src="./new_pictures/Hiba BOURDOUKH.jpeg" alt="" style="">
                  <span class="icon">

                    <a href="https://www.linkedin.com/in/hiba-bourdoukh-3bb891174/"><i class="fab fa-linkedin"></i></a>
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">Hiba BOURDOUKH</h3>
                  <p class="speciality">Vice president</p>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img src="./new_pictures/Yassine.jpeg" alt="" style="">

                  <span class="icon">
                    <a href="https://www.linkedin.com/in/mohamedyassineharrachmin/"><i class="fab fa-linkedin"></i></a>
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">Mohammed Yassine Harrachmine</h3>
                  <p class="speciality">General Secretary</p>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img src="./new_pictures/Mohamed EL KORCHI.jpeg" alt="" style="">
                  <span class="icon">
                    <a href="https://www.linkedin.com/in/mohamed-el-korchi-789920189/"><i class="fab fa-linkedin"></i></a>
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">Mohammed El Korchi</h3>
                  <p class="speciality">Treasure</p>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
          </div>
          <div class="row">
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img src="./new_pictures/Haitam DHAIBI.jpeg" alt="" style="">
                  <span class="icon">
                    <a href="https://www.linkedin.com/in/haitam-dhaibi-38b3201b4/"><i class="fab fa-linkedin"></i></a>
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">Haitam DHAIBI</h3>
                  <p class="speciality">head of Project cell</p>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img src="./new_pictures/Soukaina LHOUBRI.jpeg " alt="" style="">
                  <span class="icon">
                    <a href="https://www.linkedin.com/in/soukaina-lhoubri-8336341b3/"><i class="fab fa-linkedin"></i></a>
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">Soukaina LHOUBRI</h3>
                  <p class="speciality">Head of design cell</p>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img src="./new_pictures/Mohammed El amine  RHAZZAR.jpeg" alt="" style="">
                  <span class="icon">
                    <a href="https://www.linkedin.com/in/mohammed-el-amine-rhazzar-46b901200/"><i class="fab fa-linkedin"></i></a>
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">Mohammed El Amine RHAZZAR</h3>
                  <p class="speciality">Head of training cell</p>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img src="./new_pictures/Amine NAIT BACHIR.jpeg" alt="" style="">
                  <span class="icon">
                    <a href="https://www.linkedin.com/in/amine-nait-bachir-066220/"><i class="fab fa-linkedin"></i></a>
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">Amine NAIT BACHIR</h3>
                  <p class="speciality">Head of media cell</p>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
          </div>
          <div class="row">
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img src="./new_pictures/Abdelhakim AATAFAY.jpeg" alt="" style="">
                  <span class="icon">
                    <a href="https://www.linkedin.com/in/abdelhakim-aatafay-a32a541b4/"><i class="fab fa-linkedin"></i></a>
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">Abdelhakim AATAFAY</h3>
                  <p class="speciality">Head of events</p>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
            <!-- Start Single Person -->

          </div>

          <!-- / End Single Person -->
        </div>
  </div>
  </section>

</body>

</html>

</div>

<!-- -------------------------------------------------Subscribe-------------------------------------------------------------------------------------------- -->
<div id="transition" style="background-color:#8ecae6">

  <div class="wrapper" style="">
    <div class="top">
      <i class="fas fa-envelope-open-text"></i>
    </div>
    <div class="bottom">
      <div class="info">
        Dear Stars Lovers , Subscribe to our NewsLetter and <br />
        get the latest updates.
      </div>
      <form action="./backend/subscribe.php" method="POST">
        <div class="input-box">
          <input type="text" name="email" placeholder="Enter your email" required />
          <input type="hidden" name="path" value="../index.php">

          <input type="submit" name="" value="Subscribe" />
        </div>
      </form>
    
        <div class="footer">Because Space Is Full Of Surprises</div>

     

    </div>
  </div>


</div>

<!-- -------------------------------------------------footer-------------------------------------------------------------------------------------------- -->

<div id="footer" style="background-color:#11151D">
  <div id="itemf">
    <img src="logo.png" style="width:100px;height:100px" alt="">
    <div style="color:#fff;text-align:left;font-weight:300"><strong>AIAC SPACE CLUB</strong></div>
  </div>
  <div id="itemf">
    <strong style="font-weight:bold;color:#3996F3">Contact Info</strong></br>
    Casablanca <br>
    phone : 0607100270 <br>
    Email : contact@aiac.space <br>

  </div>
  <div id="itemf">
    <strong style="font-weight:bold;color:#3996F3">TAGS</strong><br>
    Astronomy-Galaxies <br>
    Solar System-Mars <br>
    Lunar Missions- Cosmology <br>



  </div>
  <div id="itemf">
    <strong style="font-weight:bold;color:#3996F3"> Social media</strong>

    <br>
    <p style="margin-top:5%;">
      <a href="https://www.facebook.com/aiacspace"><i class="fab fa-facebook"></i></a> &nbsp;
      <a href="https://www.linkedin.com/company/aiac-space-club"><i class="fab fa-linkedin"></i></a>&nbsp;
      <a href="https://www.instagram.com/aiacspace/"><i class="fab fa-instagram"></i></a>&nbsp;
      <a href="https://www.youtube.com/channel/UC6r2bC5N2DyAqKMDAicTjMQ"><i class="fab fa-youtube"></i></a>&nbsp;
    </p>
  </div>

</div>



</body>





<script>
  (function() {

    var $$ = function(selector, context) {
      var context = context || document;
      var elements = context.querySelectorAll(selector);
      return [].slice.call(elements);
    };

    function _fncSliderInit($slider, options) {
      var prefix = ".fnc-";

      var $slider = $slider;
      var $slidesCont = $slider.querySelector(prefix + "slider__slides");
      var $slides = $$(prefix + "slide", $slider);
      var $controls = $$(prefix + "nav__control", $slider);
      var $controlsBgs = $$(prefix + "nav__bg", $slider);
      var $progressAS = $$(prefix + "nav__control-progress", $slider);

      var numOfSlides = $slides.length;
      var curSlide = 1;
      var sliding = false;
      var slidingAT = +parseFloat(getComputedStyle($slidesCont)["transition-duration"]) * 1000;
      var slidingDelay = +parseFloat(getComputedStyle($slidesCont)["transition-delay"]) * 1000;

      var autoSlidingActive = false;
      var autoSlidingTO;
      var autoSlidingDelay = 5000; // default autosliding delay value
      var autoSlidingBlocked = false;

      var $activeSlide;
      var $activeControlsBg;
      var $prevControl;

      function setIDs() {
        $slides.forEach(function($slide, index) {
          $slide.classList.add("fnc-slide-" + (index + 1));
        });

        $controls.forEach(function($control, index) {
          $control.setAttribute("data-slide", index + 1);
          $control.classList.add("fnc-nav__control-" + (index + 1));
        });

        $controlsBgs.forEach(function($bg, index) {
          $bg.classList.add("fnc-nav__bg-" + (index + 1));
        });
      };

      setIDs();

      function afterSlidingHandler() {
        $slider.querySelector(".m--previous-slide").classList.remove("m--active-slide", "m--previous-slide");
        $slider.querySelector(".m--previous-nav-bg").classList.remove("m--active-nav-bg", "m--previous-nav-bg");

        $activeSlide.classList.remove("m--before-sliding");
        $activeControlsBg.classList.remove("m--nav-bg-before");
        $prevControl.classList.remove("m--prev-control");
        $prevControl.classList.add("m--reset-progress");
        var triggerLayout = $prevControl.offsetTop;
        $prevControl.classList.remove("m--reset-progress");

        sliding = false;
        var layoutTrigger = $slider.offsetTop;

        if (autoSlidingActive && !autoSlidingBlocked) {
          setAutoslidingTO();
        }
      };

      function performSliding(slideID) {
        if (sliding) return;
        sliding = true;
        window.clearTimeout(autoSlidingTO);
        curSlide = slideID;

        $prevControl = $slider.querySelector(".m--active-control");
        $prevControl.classList.remove("m--active-control");
        $prevControl.classList.add("m--prev-control");
        $slider.querySelector(prefix + "nav__control-" + slideID).classList.add("m--active-control");

        $activeSlide = $slider.querySelector(prefix + "slide-" + slideID);
        $activeControlsBg = $slider.querySelector(prefix + "nav__bg-" + slideID);

        $slider.querySelector(".m--active-slide").classList.add("m--previous-slide");
        $slider.querySelector(".m--active-nav-bg").classList.add("m--previous-nav-bg");

        $activeSlide.classList.add("m--before-sliding");
        $activeControlsBg.classList.add("m--nav-bg-before");

        var layoutTrigger = $activeSlide.offsetTop;

        $activeSlide.classList.add("m--active-slide");
        $activeControlsBg.classList.add("m--active-nav-bg");

        setTimeout(afterSlidingHandler, slidingAT + slidingDelay);
      };



      function controlClickHandler() {
        if (sliding) return;
        if (this.classList.contains("m--active-control")) return;
        if (options.blockASafterClick) {
          autoSlidingBlocked = true;
          $slider.classList.add("m--autosliding-blocked");
        }

        var slideID = +this.getAttribute("data-slide");

        performSliding(slideID);
      };

      $controls.forEach(function($control) {
        $control.addEventListener("click", controlClickHandler);
      });

      function setAutoslidingTO() {
        window.clearTimeout(autoSlidingTO);
        var delay = +options.autoSlidingDelay || autoSlidingDelay;
        curSlide++;
        if (curSlide > numOfSlides) curSlide = 1;

        autoSlidingTO = setTimeout(function() {
          performSliding(curSlide);
        }, delay);
      };

      if (options.autoSliding || +options.autoSlidingDelay > 0) {
        if (options.autoSliding === false) return;

        autoSlidingActive = true;
        setAutoslidingTO();

        $slider.classList.add("m--with-autosliding");
        var triggerLayout = $slider.offsetTop;

        var delay = +options.autoSlidingDelay || autoSlidingDelay;
        delay += slidingDelay + slidingAT;

        $progressAS.forEach(function($progress) {
          $progress.style.transition = "transform " + (delay / 1000) + "s";
        });
      }

      $slider.querySelector(".fnc-nav__control:first-child").classList.add("m--active-control");

    };

    var fncSlider = function(sliderSelector, options) {
      var $sliders = $$(sliderSelector);

      $sliders.forEach(function($slider) {
        _fncSliderInit($slider, options);
      });
    };

    window.fncSlider = fncSlider;
  }());

  /* not part of the slider scripts */

  /* Slider initialization
  options:
  autoSliding - boolean
  autoSlidingDelay - delay in ms. If audoSliding is on and no value provided, default value is 5000
  blockASafterClick - boolean. If user clicked any sliding control, autosliding won't start again
  */
  fncSlider(".example-slider", {
    autoSlidingDelay: 4000
  });

  var $demoCont = document.querySelector(".demo-cont");

  [].slice.call(document.querySelectorAll(".fnc-slide__action-btn")).forEach(function($btn) {
    $btn.addEventListener("click", function() {
      $demoCont.classList.toggle("credits-active");
    });
  });

  document.querySelector(".demo-cont__credits-close").addEventListener("click", function() {
    $demoCont.classList.remove("credits-active");
  });

  document.querySelector(".js-activate-global-blending").addEventListener("click", function() {
    document.querySelector(".example-slider").classList.toggle("m--global-blending-active");
  });
</script>

</html>