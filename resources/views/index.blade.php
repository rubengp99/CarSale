@include('nav')
@include('modals')
@include('footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concessionary</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
    *{
        font-family: "avenir";
        box-sizing: border-box;
     }
    </style>
</head>
<body>
    <aside class="col">

        @if (!Auth::guest())
            @yield('logged-sidebar')
        @else
            @yield('sidebar')
        @endif

    </aside>
    <main>

        <div class="content col">
            <div class="hero-layer-parallax" style="background: linear-gradient(rgba(0,0,0,.6),rgba(20, 45, 76, .7)),url(storage/hero-layer.jpg);">
                <canvas id="spiders" class="hidden-xs" width="1333" height="1147" ></canvas>        
                <div class="logo-container">
                    <a id="logo" class="logo">Find your <em>ideal</em> car with us.</a>
                </div>
            </div>
        </div>
        <div class="twit-container" >
            <div class="section" style="margin-left:15vw;">
                <a class="about">About us</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                         
                </p>
            </div>
            <br><br>
        </div>
        <div class="twit-container col">
            <div class="hero-layer-parallax" style="background: linear-gradient(rgba(0,0,0,.9),rgba(20, 45, 76, .7)),url(storage/body.jpg);height:600px;">
                         <div class="logo-bottom-container">
                                <a id="logo-bottom" class="logo-bottom">
                                        We've got many <em>options</em> for you.
                                     </a>
                        </div>       
                                    
                        <div class="row">
                                <div class="btn-container" id="findcar" >
                                        <a href="/search" class="button12">
                                        <em> </em>   
                                        <span>
                                        Let's find a car
                                    </span>
                                </a>  

                            </div>
                        </div>
            </div>
        </div>
    </main>

    @yield('modal-login')

    @yield('modal-register')

    @yield('modal-sell')

    @yield('footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="js/nodeseffect.js"></script>
<script src="js/script.js"></script>
<script>
   $(document).ready(function(){
        if(scrollY > 0){
            var y = $(window).scrollTop();
            $('html, body').animate({ scrollTop: y -y })
        }else{
            $("#logo").fadeIn(1000);
        }
    });
    $(document).scroll(function(){
       if(scrollY>0){
        $("#logo").fadeOut(1000);
       }else{
        $("#logo").fadeIn(1000);
       }
    });

    $(document).scroll(function(){
       if(scrollY > 700){
        $("#logo-bottom").fadeIn(1000);

       }else{
        $("#logo-bottom").fadeOut(1000);
       }
    });

    </script>
</body>
</html>