<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:index.php');
}
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../package/swiper-bundle.min.css">

    <link rel="stylesheet" type="text/css" href="css/allgames.css">
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16 32x32">

    <title>All Games</title>
  </head>
  <body>
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
              <a class="nav-link js-scroll-trigger"  href="store.php">Store</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="store.php#new">New Releases</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link " href="store.php#free">Free Games</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="store.php#trend">Trending Games</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="store.php#upcom">Upcoming</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="store.php#sale">On Sale</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link active" aria-current="page" href="#">Genre</a>
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
          <a href="logout.php" class="ml-3 btn btn-sm btn-outline-light border-0">Sign-out <i class="fas fa-sign-out-alt pl-1"></i></a>
        </div>
      </div>
    </nav>


    <!---------------------------------------------------Side pannel------------------------------------------->
    
    <div class="sidenav">
        <h2 class="head"><i class="fas fa-sliders-h pr-3"></i>Filters</h2>
        <h6 class="subhead"></i>CATEGORIES</h6>
      <a  class="tablinks" onclick="openCity(event, 'All')" id="defaultOpen" href="#all">All Games</a>
      <a  class="tablinks" onclick="openCity(event, 'Action')"   href="#about">Action</a>
      <a  class="tablinks" onclick="openCity(event, 'Adventure')"   href="#services">Adventure</a>
      <a  class="tablinks" onclick="openCity(event, 'Strategy')"   href="#contact">Strategy</a>
      <a  class="tablinks" onclick="openCity(event, 'Shoot')"   href="#contact">Shooting</a>
      <a  class="tablinks" onclick="openCity(event, 'Sword')"   href="#clients">Sword fighting</a>
    </div>

    <div class="container main">
         <!-------------------------------------------- All------------------------------------------------ -->

        <div id="All" class="tabcontent">
          <h2 class="gamehead">All Games <i class="fas fa-globe-americas pl-3"></i></h2>
          
          <div class="games row row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="images/cyber.png" class="card-img-top" alt="...">
                   <h6 class="card-title"><b>Cyber Punk 2077</b></h6>
                   <p class="text-muted card-sub">CD PROJEKT RED</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="ghost.php"><img src="images/ghost.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Ghost Runner</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">Pre-Purchase</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="game.php"><img src="images/assassinsvh.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassins Creed Valhalla</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/devil.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Devil May Cry 5</b></h6>
                   <p class="text-muted card-sub">xyz company</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/origins.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassins Creed Origins</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/GTA.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>GTA 5</b></h6>
                   <p class="text-muted card-sub">Rockstar</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/hitman.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Hitman</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/fort.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Fortnite</b></h6>
                   <p class="text-muted card-sub">Epic Games</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/watch.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Watch Dogs</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/god.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>God Of War</b></h6>
                   <p class="text-muted card-sub">Xyz</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="warrior.php"><img src="images/wwpop.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Prince Of Persia: Warrior Within</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="farcry.php"><img src="images/crycry.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Far Cry: Primal</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/border.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Borderlands</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/resident.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Resident Evil</b></h6>
                   <p class="text-muted card-sub"><b>Unreal</b></p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/spider.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Spider-Man</b></h6>
                   <p class="text-muted card-sub">Marvel Studio</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/syndi.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassin's Creed Syndicate</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/nfsmw.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Need For Speed Most Wanted</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/aribic.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Airbone Kingdom</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/princere.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Prince Of Persia</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/hit3.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Hitman 3</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/control.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Control</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/doom.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Doom</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/watchdogsle.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Watchdogs Legion</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/apes.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Ancestors</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/mafia.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Mafia 2</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdbo.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: Black Ops</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdmw.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: MW3</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdiw.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: IW</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdww.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: WW2</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/troy.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>A Total War Saga: Troy</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/civil.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Civilizations 6</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/settler.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>The Settlers 7</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/thesettler.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>The Settlers</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/roll.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Roller Coaster Tycoon 3</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/zoo.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Zoo Tycoon</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/nfh.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Neighbours From Hell</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/nfh2.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Neighbours From Hell 2</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/fllout.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Fallout Shelter</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              
            </div>
        
        </div>

       <!-------------------------------------------- Action------------------------------------------------ -->

        <div id="Action" class="tabcontent">
          
          <h2 class="gamehead">Action <i class="fas fa-fist-raised pl-3"></i></h2>
          
          <div class="games row row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="images/cyber.png" class="card-img-top" alt="...">
                   <h6 class="card-title"><b>Cyber Punk 2077</b></h6>
                   <p class="text-muted card-sub">CD PROJEKT RED</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/devil.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Devil May Cry 5</b></h6>
                   <p class="text-muted card-sub">xyz company</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="ghost.php"><img src="images/ghost.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Ghost Runner</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">Pre-Purchase</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="game.php"><img src="images/assassinsvh.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassins Creed Valhalla</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/origins.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassins Creed Origins</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/syndi.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassin's Creed Syndicate</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/GTA.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>GTA 5</b></h6>
                   <p class="text-muted card-sub">Rockstar</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/hitman.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Hitman</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/fort.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Fortnite</b></h6>
                   <p class="text-muted card-sub">Epic Games</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/watch.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Watch Dogs</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/god.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>God Of War</b></h6>
                   <p class="text-muted card-sub">Xyz</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="farcry.php"><img src="images/crycry.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Far Cry: Primal</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/border.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Borderlands</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/resident.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Resident Evil</b></h6>
                   <p class="text-muted card-sub"><b>Unreal</b></p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/spider.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Spider-Man</b></h6>
                   <p class="text-muted card-sub">Marvel Studio</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/princere.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Prince Of Persia</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/hit3.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Hitman 3</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/control.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Control</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/doom.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Doom</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/watchdogsle.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Watchdogs Legion</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/apes.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Ancestors</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/mafia.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Mafia 2</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdbo.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: Black Ops</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdmw.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: MW3</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdiw.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: IW</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdww.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: WW2</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="warrior.php"><img src="images/wwpop.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Prince Of Persia: Warrior Within</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">Free</p>
                </div>
              </div>

              
            </div>


        </div>

         <!-------------------------------------------- Adventure------------------------------------------------ -->

        <div id="Adventure" class="tabcontent">
          <h2 class="gamehead">Adventure <img src="images/adventurer 1.png" style=" width: 45px; height:auto; margin-left: 10px;"></h2>
          
          <div class="games row row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
              
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="game.php"><img src="images/assassinsvh.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassins Creed Valhalla</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/devil.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Devil May Cry 5</b></h6>
                   <p class="text-muted card-sub">xyz company</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/origins.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassins Creed Origins</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="farcry.php"><img src="images/crycry.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Far Cry: Primal</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/GTA.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>GTA 5</b></h6>
                   <p class="text-muted card-sub">Rockstar</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/watch.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Watch Dogs</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/god.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>God Of War</b></h6>
                   <p class="text-muted card-sub">Xyz</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/border.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Borderlands</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/resident.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Resident Evil</b></h6>
                   <p class="text-muted card-sub"><b>Unreal</b></p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/spider.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Spider-Man</b></h6>
                   <p class="text-muted card-sub">Marvel Studio</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/syndi.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassin's Creed Syndicate</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/aribic.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Airbone Kingdom</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/princere.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Prince Of Persia</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
             
              
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/doom.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Doom</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/watchdogsle.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Watchdogs Legion</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/apes.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Ancestors</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/mafia.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Mafia 2</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdbo.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: Black Ops</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdmw.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: MW3</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdiw.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: IW</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdww.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: WW2</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
            </div>
        </div>


         <!-------------------------------------------- Strategy------------------------------------------------ -->

        <div id="Strategy" class="tabcontent">
          <h2 class="gamehead">Strategy <img src="images/strategy 1.png" style=" width: 45px; height:auto; margin-left: 10px;"></h2>
          
          <div class="games row row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
              
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/troy.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>A Total War Saga: Troy</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/civil.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Civilizations 6</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/settler.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>The Settlers 7</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/thesettler.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>The Settlers</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/roll.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Roller Coaster Tycoon 3</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/zoo.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Zoo Tycoon</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/nfh.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Neighbours From Hell</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/nfh2.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Neighbours From Hell 2</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/fllout.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Fallout Shelter</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
            </div>
        </div>

         <!-------------------------------------------- Shooting------------------------------------------------ -->

        <div id="Shoot" class="tabcontent">
          
          <h2 class="gamehead">Shooting <img src="images/gun.png" style=" width: 45px; height:auto; margin-left: 10px;"></h2>
          
          <div class="games row row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="images/cyber.png" class="card-img-top" alt="...">
                   <h6 class="card-title"><b>Cyber Punk 2077</b></h6>
                   <p class="text-muted card-sub">CD PROJEKT RED</p>
                   <p class="card-price">$50</p>
                </div>
              </div>

              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/mafia.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Mafia 2</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/syndi.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassin's Creed Syndicate</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/GTA.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>GTA 5</b></h6>
                   <p class="text-muted card-sub">Rockstar</p>
                   <p class="card-price">$50</p>
                </div>
              </div>

              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdbo.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: Black Ops</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdmw.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: MW3</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdiw.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: IW</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/cdww.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Call Of Duty: WW2</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>

              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/hitman.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Hitman</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/fort.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Fortnite</b></h6>
                   <p class="text-muted card-sub">Epic Games</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/watch.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Watch Dogs</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/border.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Borderlands</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/resident.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Resident Evil</b></h6>
                   <p class="text-muted card-sub"><b>Unreal</b></p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/hit3.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Hitman 3</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/control.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Control</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/doom.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Doom</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/watchdogsle.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Watchdogs Legion</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/devil.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Devil May Cry 5</b></h6>
                   <p class="text-muted card-sub">xyz company</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
            </div>
        </div>



        <!-------------------------------------------- Sword fighting------------------------------------------------ -->

        <div id="Sword" class="tabcontent">
           <h2 class="gamehead">Sword fighting <img src="images/sword 1.png" style=" width: 35px; height:auto; margin-left: 10px;"></h2>
          
          <div class="games row row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="ghost.php"><img src="images/ghost.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Ghost Runner</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">Pre-Purchase</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="game.php"><img src="images/assassinsvh.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassins Creed Valhalla</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/devil.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Devil May Cry 5</b></h6>
                   <p class="text-muted card-sub">xyz company</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/origins.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassins Creed Origins</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/god.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>God Of War</b></h6>
                   <p class="text-muted card-sub">Xyz</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/syndi.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Assassin's Creed Syndicate</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/aribic.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Airbone Kingdom</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/princere.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Prince Of Persia</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <a href="#"><img src="images/doom.png" class="card-img-top" alt="..."></a>
                  <h6 class="card-title"><b>Doom</b></h6>
                   <p class="text-muted card-sub">xyz</p>
                   <p class="card-price">$50</p>
                </div>
              </div>
               <div class="col mb-4">
                <div class="card h-100">
                  <a href="warrior.php"><img src="images/wwpop.png" class="card-img-top" alt="..."></a>
                   <h6 class="card-title"><b>Prince Of Persia: Warrior Within</b></h6>
                   <p class="text-muted card-sub">Ubisoft</p>
                   <p class="card-price">Free</p>
                </div>
              </div>
            </div>
        </div>
    </div>




    





    <!-----------------------footer------------------------------------------->

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
              <a href="game.php">Assassins creed</a> </br>
              <a href="warrior.php">Prince of Persia</a> </br>
              <a href="#">Devil may cry</a> </br>
              <a href="farcry.php">Far cry</a>
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



    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>

  


    <script src="../package/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- <script type="text/javascript">
        $(".showmore").on('click',function(){
            var replaceText = $(this).hasClass("showless") ? "Show More" : "Show Less";
            $(this).text(replaceText);
        });
    </script> -->
    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
   


    <script type="text/javascript">
        function change() // no ';' here
        {
            var elem = document.getElementById("show");
            if (elem.value=="Show Less") elem.value = "Show More";
            else elem.value = "Show Less";
        }
    </script>
    
    </body>
</html>