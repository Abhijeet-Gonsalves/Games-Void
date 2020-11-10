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

    <link rel="stylesheet" type="text/css" href="css/gamestyle.css">
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16 32x32">

    <title>Ubisoft Pack</title>
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
              <a class="nav-link js-scroll-trigger active" aria-current="page" href="store.php#hero">Store</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="store.php#new">New Releases</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="store.php#free">Free Games</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="store.php#trend">Trending Gams</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="store.php#upcom">Upcomeing</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="store.php#sale">On Sale</a>
            </li>
            <li class="nav-item js-scroll-trigger pl-2 pr-2">
              <a class="nav-link" href="allgame.php">Genre</a>
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

    <!---------------------------------------------------banner------------------------------------------->
    <div class="container ban">
        <div class="row banner justify-content-center">
            <div class="col-lg-10 col-md-10 text-center">
                <div class="back">
                    <a href="store.php"><span class="pr-2"><i class="fas fa-arrow-left pr-2"></i>Go Back to Store</span><pre> |  Ubisoft Pack</pre></a>
                </div>  
            </div>
        </div>
        <div class="row poster">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-img">
                       <img src="images/upack1.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="intro">
                    <h2>Ubisoft Pack</h2>
                    <h5>Ubisoft</h5>
                    <p class="likes "><i class="fas fa-heart pr-3"></i>25,031,120</p>
                    <p class="downloads pt-1"><i class="fas fa-download pr-3"></i>25,031,120</p>
                    <p class="rate pt-1">Rateings:  <i class="fas fa-star pr-1"></i><i class="fas fa-star pr-1"></i><i class="fas fa-star pr-1"></i><i class="fas fa-star-half-alt pr-1"></i><i class="far fa-star pr-1"></i></p>
                    <p class="cost pt-1"><b>$ 59.45 Only</b></p>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#staticBackdrop" >BUY NOW</button>
                        <button type="button" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Add to wishlist"  ><i class="far fa-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
                <div class="bar"></div>
            </div>   
        </div>
    </div>

    <!-----------------------Dis------------------------------------------->
    <div class="container">
        <div class="row dis justify-content-center">
            <div class="col-lg-2 col-md-2">
                <h5>Abot Game</h5>
            </div>
            <div class="col-lg-8 col-md-8">
                <p class="story">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
    <!-----------------------Video/ Screenshot------------------------------------------->
    <div class="container">
        <div class="row vid justify-content-center">
            <div class="col-lg-2 col-md-2">
                <h5>Trailer</h5>
            </div>
            <div class="col-lg-8 col-md-8">
                <iframe width="720" height="420" src="https://www.youtube.com/embed/KmMwCu7scHo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row vid justify-content-center">
            <div class="col-lg-2 col-md-2">
                <h5>Screenshots</h5>
            </div>
            <div class="col-lg-8 col-md-8">
                <img class="screenshot img-fluid" src="images/popf0.png">
            </div>
            <div class="ss col-lg-8 col-md-8">


                <div class="accordion" id="accordionExample">
                  <div class="card">
                        <div class="card-header p-0" id="headingTwo">
                          <h2 class="mb-0">
                            <input  id="show" onclick="change()" class=" showmore text-center btn btn-outline-dark  btn-block text-left collapsed p-3 rounded-0" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" value="Show More">
                            </input>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/popf1.png">
                          </div>
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/popf2.png">
                          </div>
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/popf3.png">
                          </div>
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/popf4.png">
                          </div>
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/popf5.png">
                          </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </div>

    <!-----------------------Video/ Screenshot------------------------------------------->
    <div class="container">
        <div class="row vid justify-content-center">
            <div class="col-lg-2 col-md-2">
                <h5>Trailer</h5>
            </div>
            <div class="col-lg-8 col-md-8">
                <iframe width="720" height="420" src="https://www.youtube.com/embed/WTBbwgsyxvg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row vid justify-content-center">
            <div class="col-lg-2 col-md-2">
                <h5>Screenshots</h5>
            </div>
            <div class="col-lg-8 col-md-8">
                <img class="screenshot img-fluid" src="images/asyn0.png">
            </div>
            <div class="ss col-lg-8 col-md-8">


                <div class="accordion" id="accordionExample">
                  <div class="card">
                        <div class="card-header p-0" id="headingTwo">
                          <h2 class="mb-0">
                            <input  id="show1" onclick="change1()" class=" showmore text-center btn btn-outline-dark  btn-block text-left collapsed p-3 rounded-0" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" value="Show More">
                            </input>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/asyn1.png">
                          </div>
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/asyn2.png">
                          </div>
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/asyn3.png">
                          </div>
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/asyn4.png">
                          </div>
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/asyn5.png">
                          </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </div>

    <!-----------------------Video/ Screenshot------------------------------------------->
    <div class="container">
        <div class="row vid justify-content-center">
            <div class="col-lg-2 col-md-2">
                <h5>Trailer</h5>
            </div>
            <div class="col-lg-8 col-md-8">
                <iframe width="720" height="420" src="https://www.youtube.com/embed/2GIVVsTKTLg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row vid justify-content-center">
            <div class="col-lg-2 col-md-2">
                <h5>Screenshots</h5>
            </div>
            <div class="col-lg-8 col-md-8">
                <img class="screenshot img-fluid" src="images/wdog0.png">
            </div>
            <div class="ss col-lg-8 col-md-8">


                <div class="accordion" id="accordionExample">
                  <div class="card">
                        <div class="card-header p-0" id="headingTwo">
                          <h2 class="mb-0">
                            <input  id="show2" onclick="change2()" class=" showmore text-center btn btn-outline-dark  btn-block text-left collapsed p-3 rounded-0" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" value="Show More">
                            </input>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/wdog1.png">
                          </div>
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/wdog2.png">
                          </div>
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/wdog3.png">
                          </div>
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/wdog4.png">
                          </div>
                          <div class="card-img">
                            <img class="screenshot img-fluid" src="images/wdog5.png">
                          </div>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </div>

    <!------------------------------ Modal ---------------------------------------------------------------------->

        <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Download<i class="fas fa-download pl-3"></i></h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
              </div>
              <div class="modal-body">
                <div class="image text-center">
                  <img class="img-fluid cover" src="images/assassinsvh.png">
                  <h4>Assassin's Creed Valhalla</h4>
                </div>
                <div id="myProgress">
                  <div id="myBar">10%</div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <a  type="button" onclick="move()" class="btn btn-primary">Download</a>
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
    <script type="text/javascript">
        function change() // no ';' here
        {
            var elem = document.getElementById("show");
            if (elem.value=="Show Less") elem.value = "Show More";
            else elem.value = "Show Less";
        }
    </script>
    <script type="text/javascript">
        function change1() // no ';' here
        {
            var elem = document.getElementById("show1");
            if (elem.value=="Show Less") elem.value = "Show More";
            else elem.value = "Show Less";
        }
    </script>
    <script type="text/javascript">
        function change2() // no ';' here
        {
            var elem = document.getElementById("show2");
            if (elem.value=="Show Less") elem.value = "Show More";
            else elem.value = "Show Less";
        }
    </script>
    <script>
      var i = 0;
      function move() {
        if (i == 0) {
          i = 1;
          var elem = document.getElementById("myBar");
          var width = 10;
          var id = setInterval(frame, 10);
          function frame() {
            if (width >= 100) {
              clearInterval(id);
              i = 0;
            } else {
              width++;
              elem.style.width = width + "%";
              elem.innerHTML = width  + "%";
            }
          }
        }
      }
    </script>
    
    </body>
</html>