<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../package/swiper-bundle.min.css">

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16 32x32">


    <title>Games Void</title>
  </head>
  <body data-spy="scroll" data-target="#my_nav">
    <!-- Scrollbar -->
    <!-- <div id="progressbar"></div>
    <div id="scrollPath"></div> -->
    <!------------------------------------------------- Nav ----------------------------------------------------------->
    <nav id="my_nav" class="navbar navbar-expand-lg sticky-top navbar-dark navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand  pl-3" href="#"><i class="fas fa-gamepad fa-lg pr-2"></i>Games Void</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0 p-1">
            <li class="nav-item pl-2 pr-2">
              <a class="nav-link js-scroll-trigger active" aria-current="page" href="#hero">Store</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="#new">New Releases</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="#free">Free Games</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="#trend">Trending Games</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="#upcom">Upcoming</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="#sale">On Sale</a>
            </li>
             <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" data-toggle="modal" data-target="#staticBackdrop" href="#">Genre</a>
            </li>
          </ul>
          <form class="bsearch">
            <div class="input-group">
              <input type="search" class="form-control form-control-sm text-white bg-dark border-0" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-sm btn-info border-0" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
            </div>
          </form>
          <div class="search-bar">
            <input class="search-txt" type="text" name="" placeholder="Search">
            <a href="#" class="search-btn">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
              </svg>
            </a>
          </div>
          <a href="login.php" class="ml-3 btn btn-sm btn-outline-light border-0"><i class="fas fa-sign-out-alt pr-1"></i> Login | Signup</a>
        </div>
      </div>
    </nav>


    <!------------------------------------------------- banner ----------------------------------------------------------->


   <div id="hero" class="container banner">
      <div class="row">
        <div class="col-lg-7 col-md-12  pb-3">
          <h3  class="head">Offer of the month</h3>
        </div>  
      </div>
     <div class="row justify-content-center">
       <div class="col-lg-7 col-md-7 slider rounded-left pr-0">
         
         <div id="game-slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="3000">
                <img src="images/banner.png" class="d-block w-100 rounded-left poster" alt="...">
              </div>
              <div class="carousel-item" data-interval="3000">
                <img src="images/popfs.png" class="d-block w-100 rounded-left poster" alt="...">
              </div>
              <div class="carousel-item" data-interval="3000">
                <img src="images/assassinsyn.png" class="d-block w-100 rounded-left poster" alt="...">
              </div>
              <div class="carousel-item" data-interval="3000">
                <img src="images/dogsout.png" class="d-block w-100 rounded-left poster" alt="...">
              </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#game-slider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#game-slider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a> -->
          </div>
       </div>
       <div class="col-lg-4 col-md-12 rider rounded-right">
        <div>
          <h5 class="dis-head">Ubisoft Super Pack</h5>
          <p class="dis-text">Get 3 best games of ubisoft for only $50,<br>This pack includes<br>Prince of Persia:The Sands of Time<br>Assassin's Creed Syndicate<br>Watch_Dogs 2</p>
        </div>

         <!--  <div id="game-slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active text-left" data-interval="2000">
                <h5 class="dis-head">Prince of Persia: The Sands of Time</h5>
                <p class="dis-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a class="dis-read btn btn-sm" href="#">Learn more</a>
              </div>
              <div class="carousel-item text-left" data-interval="2000">
                <h5 class="dis-head">Assassins Creed</h5>
                <p class="dis-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="carousel-item text-left" data-interval="2000">
                <h5 class="dis-head">Watch_Dogs 2</h5>
                <p class="dis-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div> -->

          <!-- neon button -->
          <div class="neon ml-3  text-left">
            <a data-toggle="modal" data-target="#staticBackdrop" href="#"> Buy Now</a>
          </div>
       </div>
     </div>
   </div>

   <!------------------------------------------------- games ----------------------------------------------------------->

   <div id="new" class="container new-rel">
      <div class="row">
        <div  class="col-lg-7 col-md-7 ml-5">
          <h5 class="game-title">New Releases</h5>
        </div>  
      </div>
     <div class="row pl-3">
       <div class="col-lg-12 col-md-12 ml-4">
         <div id="games-slider">
           <ul id="games_slider_content">
            <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/cyber.png">
                   <h6 class="card-title"><b>Cyber Punk 2077</b></h6>
                   <p class="text-muted card-sub">CD PROJEKT RED</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/devil.png">
                   <h6 class="card-title"><b>Devil May Cry 5</b></h6>
                   <p class="text-muted card-sub">xyz company</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <a data-toggle="modal" data-target="#staticBackdrop" href="#"><img src="images/assassinsvh.png"></a>
                   <h6 class="card-title"><b>Assassins Creed Valhalla</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/origins.png">
                   <h6 class="card-title"><b>Assassins Creed Origins</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/GTA.png">
                   <h6 class="card-title"><b>GTA 5</b></h6>
                   <p class="text-muted card-sub">Rockstar</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/hitman.png">
                   <h6 class="card-title"><b>Hitman</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </div>

   <!-------------------------------------------------free games ----------------------------------------------------------->
   <div id="free" class="container pt-5 ">
    <div class="row">
        <div class="col-lg-7 col-md-7 ">
          <h3 class="freehead mt-5 pb-3">Free for the Day</h3>
        </div>  
      </div>
     <div class="row justify-content-center">
       <div class="col-lg-11 col-md-11 free">
        <div class="text-left left">
          <h1 class="display-5 free-title">Prince Of Persia </br> Warrior Within</h1>
          <p class="free-text text-muted">Pick up your swords and get ready to fight,</br> manipulate time itself and change your fate. </p>
          <div class="red-neon">
            <a data-toggle="modal" data-target="#staticBackdrop" href="#">Get FREE Now</a>
          </div>
        </div>
        <div class="text-right right">
          <img class="img-fluid prince" src="images/prince.png">
        </div>
         
       </div>    
     </div>
   </div>

   <div class="container new-rel">
      <div class="row">
        <div class="col-lg-7 col-md-7 ml-5">
          <h5 class="game-title">Free To Play</h5>
        </div>  
      </div>
     <div class="row pl-3">
       <div class="col-lg-12 col-md-12 ml-4">
         <div id="games-slider">
           <ul id="free_slider_content">
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/fort.png">
                   <h6 class="card-title"><b>Fortnite</b></h6>
                   <p class="text-muted card-sub">Epic Games</p>
                   <p class="card-price">Free</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/watch.png">
                   <h6 class="card-title"><b>Watch Dogs</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">Free</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/god.png">
                   <h6 class="card-title"><b>God Of War</b></h6>
                   <p class="text-muted card-sub">Xyz</p>
                   <p class="card-price">Free</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/border.png">
                   <h6 class="card-title"><b>Borderlands</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">Free</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/resident.png">
                   <h6 class="card-title"><b>Resident Evil</b></h6>
                   <p class="text-muted card-sub"><b>Unreal</b></p>
                   <p class="card-price">Free</p>
                 </div>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </div>


   <!-------------------------------------------------Trending games ----------------------------------------------------------->


   <div id="trend" class="container pt-5 ">
    <div class="row">
        <div class="col-lg-7 col-md-7 ">
          <h3   class="trendhead mt-5 pb-3">Trending</h3>
        </div>  
      </div>
     <div class="row justify-content-center">
       <div class="col-lg-11 col-md-11 trend">
        <div class="text-left trend-left">
          <h1 class="display-5 trend-title">Far Cry Primal</h1>
          <p class="free-text text-muted">Get ready to enter the jungle</br> where only the fittest survives.</br>Hunt or be hunted. </p>
          <div class="green-neon">
            <a data-toggle="modal" data-target="#staticBackdrop" href="#">BUY NOW</a>
          </div>
        </div>
        <div class="text-right trend-right">
          <img class="img-fluid far" src="images/far.png">
        </div>
         
       </div>    
     </div>
   </div>



   <div class="container new-rel">
      <div class="row">
        <div  class="col-lg-7 col-md-7 ml-5">
          <h5 class="game-title">Trending Games</h5>
        </div>  
      </div>
     <div class="row pl-3">
       <div class="col-lg-12 col-md-12 ml-4">
         <div id="games-slider">
           <ul id="games_slider_content">
            <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/devil.png">
                   <h6 class="card-title"><b>Devil May Cry 5</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/spider.png">
                   <h6 class="card-title"><b>Spider-Man</b></h6>
                   <p class="text-muted card-sub">Marvel Studio</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/cyber.png">
                   <h6 class="card-title"><b>Cybepunk 2077</b></h6>
                   <p class="text-muted card-sub">CD PROJEKT RED</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/syndi.png">
                   <h6 class="card-title"><b>Assassin's Creed Syndicate</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/GTA.png">
                   <h6 class="card-title"><b>GTA 5</b></h6>
                   <p class="text-muted card-sub">Rockstar</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/nfsmw.png">
                   <h6 class="card-title"><b>Need For Speed Most Wanted</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </div>


   <!-------------------------------------------------upcoming games ----------------------------------------------------------->
   <div id="upcom" class="container pt-5 ">
    <div class="row">
        <div class="col-lg-7 col-md-7">
          <h3 class="uphead mt-5 pb-3">Upcoming</h3>
        </div>  
      </div>
     <div class="row justify-content-center">
       <div class="col-lg-11 col-md-11 upcom">
        <div class="text-left upcom-left">
          <h1 class="display-5 upcom-title">Ghost Runner</h1>
          <p class="free-text text-muted"> Assume the role of a hero who can fight </br> both in the physical world and in cyberspace. </br> The aim is to ascend the tower and defeat its ruler, </br> the Keymaster</p>
          <div class="pink-neon">
            <a data-toggle="modal" data-target="#staticBackdrop" href="#">Pre Purchase</a>
          </div>
        </div>
        <div class="text-right upcom-right">
          <img class="img-fluid ghost" src="images/ghostrunner.png">
        </div>
         
       </div>    
     </div>
   </div>

   <div class="container new-rel">
      <div class="row">
        <div class="col-lg-7 col-md-7 ml-5">
          <h5 class="game-title">Pre-Purchase</h5>
        </div>  
      </div>
     <div class="row pl-3">
       <div class="col-lg-12 col-md-12 ml-4">
         <div id="games-slider">
           <ul id="free_slider_content">
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/cyber.png">
                   <h6 class="card-title"><b>Cyberpunk 2077</b></h6>
                   <p class="text-muted card-sub">CD PROJEKT RED</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/aribic.png">
                   <h6 class="card-title"><b>Airbone Kingdom</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/princere.png">
                   <h6 class="card-title"><b>Prince Of Persia</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/watchdogsle.png">
                   <h6 class="card-title"><b>Watchdogs Legion</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card">
                 <div class="card-img">
                   <img src="images/hit3.png">
                   <h6 class="card-title"><b>Hitman 3</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                 </div>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </div>

   <!--------------------------------------------------- Sale ------------------------------------------------------------>

   <div  id="sale" class="container pt-5 ">
      <div class="row">
        <div class="col-lg-7 col-md-7 ">
          <h3 class="salehead mt-5 pb-3">Games on Sale</h3>
        </div>  
      </div>
     <div class="row justify-content-center">
       <div class="col-lg-11 col-md-11 sale">
         <div class="text-left sale-left">
            <h4 class="sale-title">
              Special Offer 
              <i class="fas fa-tags ml-1"></i>
              <a class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#staticBackdrop" href="#">View more</a>
            </h4>
          </div>


          <div id="games-slider" class="discount">
           <ul id="sale_slider_content">
             <li>
               <div class="card first-poster">
                 <div class="card-img">
                   <img class="img-fluid" src="images/assassinsodi.png">
                   <h6 class="card-title"><b>Assassins Creed Odyssey</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price"><span class="off">-50%</span> <s class="text-muted pl-1 pr-2">$100</s>$50</p>
                 </div>
               </div>
             </li>
             <li>
               <div class="card second-poster">
                 <div class="card-img ">
                   <img class="img-fluid" src="images/newrogue.png">
                   <h6 class="card-title"><b>Rouge Company</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price"><span class="off">-50%</span> <s class="text-muted pl-1 pr-2">$100</s>$50</p>
                 </div>
               </div>
             </li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <!--------------------------------------------------- Browse ------------------------------------------------------------>
    <div id="other" class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7 ">
          <h3 class="browhead mt-5 pb-3">Other Games</h3>
        </div>  
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-11 col-md-11 brow">
          <div class="brohead">
            <h3>Try them all</h3>
            <p class="text-muted">We have a vast collection of games </br> you must try them all</p>
          </div> 
          
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card">
                  <div class="card-img">
                    <img src="images/control.png">     
                  </div>
                </div>
              </div>
              <div class="swiper-slide">              
                <div class="card">
                  <div class="card-img">
                    <img src="images/doom.png">     
                  </div>
                </div>
              </div>
              <div class="swiper-slide">              
                <div class="card">
                  <div class="card-img">
                    <img src="images/apes.png">     
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <div class="card-img">
                    <img src="images/Mafia.png">     
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <div class="card-img">
                    <img src="images/cdbo.png">     
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <div class="card-img">
                    <img src="images/cdmw.png">     
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <div class="card-img">
                    <img src="images/cdiw.png">     
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <div class="card-img">
                    <img src="images/cdww.png">     
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="blue-neon">
            <a data-toggle="modal" data-target="#staticBackdrop" href="#">Browse-All</a>
          </div>

        </div>
      </div>
    </div>


     <!------------------------------ Modal ---------------------------------------------------------------------->

        <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Access denied<i class="fas fa-lock pl-3"></i></h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">
                <div class="image text-center">
                  <img class="img-fluid cover" src="images/access.png">
                  <h4>You need to Login to use this service</h4>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <a href="login.php" type="button" class="btn btn-primary">Login</a>
              </div>
            </div>
          </div>
        </div>
      <!------------------------------ Modal ---------------------------------------------------------------------->
    
        

    <footer class="main-footer mt-5">
      <div class="container">
        <div class="row ml-3 mr-3">
          <div class="col-lg-4 col-md-4">
            <h3><i class="fas fa-gamepad fa-xl pr-2"></i>Games Void</h3>
            <p  class="dis">Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit, sed do eiusmod
            tempor <br> incididunt ut labore et dolore magna aliqua. </p>
            <div class="social">
              <a href="#"><i class="fab fa-facebook-square "></i></a>
              <a href="#"><i class="fab fa-linkedin "></i></a>
              <a href="#"><i class="fab fa-twitter-square "></i></a>
              <a href="#"><i class="fab fa-google-plus-square "></i></a>
            </div>
          </div> 
          <div class="col-lg-2 col-md-2">
            <div class="foot-content">
             <h6 class="text-muted">Most Downloads</h6>
              <a href="#">Assassins creed</a> </br>
              <a href="#">Prince of Persia</a> </br>
              <a href="#">Devil may cry</a> </br>
              <a href="#">Far cry</a>
            </div>
          </div> 
          <div class="col-lg-2 col-md-2">
            <div class="foot-content">
              <h6 class="text-muted">About Us</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor.</p>
                
            </div>
          </div> 
          <div class="col-lg-2 col-md-2">
            <div class="foot-content">
              <h6 class="text-muted">Address</h6>
              <p>112, Vinewood <br>Star Street,<br>Mumbai,India</p>
          </div> 
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
          <div class="up">
            <a href="#" class="btn btn-lg btn-outline-light"><i class="fas fa-angle-up fa-lg"></i></a>
          </div>
        </div>
        </div>
      </div>
    </footer>
    <div class="container-fluid copyright">
      <div class="row">
          <div class="col-lg-12">
            <div class="copy text-center">
              <p><small>Copyright &copy; 2020. All Rights Reserved | This template is made by <span style="color: #03e9f4;">Abhijeet Gonsalves</span></small></p>
            </div>
          </div>  
        </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
    <script>
      $(document).ready(function(){
        $("#games_slider_content, #free_slider_content").lightSlider({
          item: 4,
          keyPress: true,
          controls: false,
          vThumbWidth:100,
          responsive : [
            {
                breakpoint:1200,
                settings: {
                    item:4,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:992,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:800,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:768,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:762,
                settings: {
                    item:1,
                    slideMove:1,
                    slideMargin:6,

                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
        });
      })
    </script>

    <script>
      $(document).ready(function(){
        $("#sale_slider_content").lightSlider({
          item: 2,
          keyPress: true,
          controls: false,
          
          responsive : [
            {
                breakpoint:800,
                settings: {
                    item:1,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
        });
      })
    </script>
    <!-- <script type="text/javascript">
      let progress = document.getElementById('progressbar');
      let totalHeight = document.body.scrollHeight -  window.innerHeight;
      window.onscroll =  function(){
        let progressHeight = (window.pageYOffset / totalHeight) * 100;
        progress.style.height = progressHeight + "%";
      }
    </script> -->
    <!-- Swiper JS -->

      <script src="../package/swiper-bundle.min.js"></script>
      <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper('.swiper-container', {
          effect: 'coverflow',
          grabCursor: true,
          centeredSlides: true,
          loop: true,
          slidesPerView: 'auto',
          coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 200,
            modifier: 1,
            slideShadows: true,
          },
          pagination: {
            el: '.swiper-pagination',
          },
        });
      </script>
      <!-- navbar close -->
      <script type="text/javascript">
        $('.js-scroll-trigger').click(function(){
          $('.navbar-collapse').collapse('hide');
        });
      </script>
  </body>
</html>