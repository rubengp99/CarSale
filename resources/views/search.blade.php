@include('modals')
@include('nav')
@include('footer')
@include('mainslider')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/style.css">

    <title>Consessionary - Search</title>
    <style>
      *{
            font-family: "avenir";
        }
        #slider-grid{
          grid-template-columns: 150px 1fr 150px;  /* three columns */
          grid-template-rows: 50px auto 50px; /* three rows  */
        }

        @media only screen and (max-width:800px){
          #hello-adjust{
            margin-left: 0px;
            margin-top:-70px;
          }
        }

        @media only screen and (min-width:800px){
          #hello-adjust{
            margin-left: 10px;
            margin-top:-150px;
          }
        }

        @media only screen and (max-width:350px){
          .twit-container{
            margin-left: 0px;
          }
        }

        @media only screen and (min-width:350px){
          .twit-container{
            margin-left:30px
          }
        }

       

    </style>
</head>

<body>

    <main>
        <aside class="col"> 

            @yield('sidebar') 

        </aside>
        
        <div class="content col">
            <div class="hero-layer-parallax" style="background: linear-gradient(rgba(0,0,0,.6),rgba(20, 45, 76, .7)),url(storage/hero-layer.jpg);">
              <canvas id="spiders" class="hidden-xs" width="1333" height="1147" ></canvas>         
              <div class="logo-container" id="hello-adjust">
                    <a id="logo" class="logo" style="position: fixed;"><br>Hello Again! <br><br> Choose any search filter.</a>
                </div>
            </div>
        </div>
        <div class="content col">
            @yield('mainslider')
        </div>
        <div class="content col" style="margin-top:-1px;background: linear-gradient(to right bottom,#383d44 50%,#2F1D2F 50%);" >
                <div class="twit-container" style="margin-top:-50px;margin-bottom:20px;; width:calc(100% - 70px);padding-bottom:30px;" id="types"> 
                    <div class="twit" style="width:285px;height:200px;margin-left:0;">
                      <a href="/search/pick up">
                        <div class="car">
                          <img src="storage/pickup.jpg" alt="" >
                          <div class="infos">
                              <a>Pick Up - Car</a>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="twit" style="width:285px;height:200px;margin-left:0;">
                      <a href="/search/suv">
                        <div class="car">
                          <img src="storage/SUV.jpg" alt="" >
                          <div class="infos">
                              <a class="car-type">SUV - Car</a>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="twit" style="width:285px;height:200px;margin-left:0;">
                      <a href="/search/sport">
                        <div class="car">
                          <img src="storage/sport.jpg" alt="" >
                          <div class="infos">
                              <a class="car-type">Sport - Car</a>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="twit" style="width:285px;height:200px;margin-left:0;">
                      <a href="/search/mpv">
                        <div class="car">
                          <img src="storage/MPV.jpg" alt="" >
                          <div class="infos">
                              <a class="car-type">MPV - Car</a>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="twit" style="width:285px;height:200px;margin-left:0;">
                      <a href="/search/executive">
                        <div class="car">
                          <img src="storage/executive.jpg" alt="" >
                          <div class="infos">
                              <a class="car-type">Executive - Car</a>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="twit" style="width:285px;height:200px;margin-left:0;">
                      <a href="/search/swagon">
                        <div class="car">
                          <img src="storage/swagon.jpg" alt="" >
                          <div class="infos">
                              <a class="car-type">Wagon - Car</a>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="twit" style="width:285px;height:200px;margin-left:0;">
                      <a href="/search/roadster">
                        <div class="car">
                          <img src="storage/roadster.jpg" alt="" >
                          <div class="infos">
                              <a class="car-type">Roadster - Car</a>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="twit" style="width:285px;height:200px;margin-left:0;">
                      <a href="/search/van">
                        <div class="car">
                          <img src="storage/van.jpg" alt="" >
                          <div class="infos">
                              <a  class="car-type">Van - Car</a>
                          </div>
                        </div>
                      </a>
                    </div>
                </div>
            </div>
        </div>
        @yield('footer')

    </main>
    
    <!-- Look at the "modals.blade.php" file for code -->

    @yield('modal-login')

    @yield('modal-register')

    <!-- End modals section -->



        
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script  src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="js/nodeseffect.js"></script>
<script src="js/script.js"></script>
<script>

     $(document).ready(function(){
        
        $("#logo").fadeIn(1000);
    });
    $(document).scroll(function(){
       if(scrollY>0){
        $("#logo").fadeOut(1000);
       }else{
        $("#logo").fadeIn(1000);
       }
    });

    $('#types').isotope({
       itemSelector: '.twit',
       layoutMode: 'masonry',
        masonry: {
            columnWidth: 300
        }
          
   });
</script>
</body>
</html>
