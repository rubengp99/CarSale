@include('nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Document</title>
    <style>
     

.car {
  position: relative;
  width: 285px;
  height: 200px;
  border-radius: 3px;
  box-shadow: 0 1px 4px rgba(0, 0, 0, .3);
  text-align:center;
  overflow: hidden;
}
.car img{
  width: 285px;
  height: 200px;
  z-index:100;
  border-radius: 3px;
  transition:all .5s;

}
.car .infos {
  width: auto;
  height: 40px;
  position: relative;
  padding: 14px 24px;
  background: rgba(0, 0, 0,.8);
  top:-40px;
}
.car .infos  a{
  position: relative;
  top: -4px !important;;
  color: #eeeeee;
  font-size: 1.1rem;
  letter-spacing: 1px;
  font-weight:bold;
  z-index:10;
  text-transform: uppercase;
}


.car .infos:before,
.car .infos:after {
  content: '';
  background: #ff2e63 ;
  height: 20px;
  width: 0;
  position: absolute;
  transition: 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  -webkit-transition:0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
  opacity: .9;
}
.car .infos:before {
  top: 0;
  left: 0;
  right: auto;
}
.car .infos:after {
  bottom: 0;
  right: 0;
  left: auto;
}
.car:hover .infos:before {
  width: 100%;
  right: 0;
  left: auto;
}
.car:hover .infos:after {
  width: 100%;
  left: 0;
  right: auto;
}
 .car:hover{
   cursor:pointer;
 }
 .car:hover img{
   transition:all .5s;
   transform: scale(1.15);
 }

 </style>
</head>
<body>
 <aside class="col">
    @yield('sidebar')
 </aside>
 <main>
   <div class="content" style="background: #393e46;text-align:left;" id="types">
      <div class="twit-container" style="margin-top:20px;margin-bottom:20px;margin-left:30px; width:calc(100% - 70px);">
          <div class="twit" style="width:285px;height:200px;margin-left:0;">
            <div class="car">
              <img src="storage/pickup.jpg" alt="" >
              <div class="infos">
                  <a >Pick Up - Car</a>
              </div>
            </div>
          </div>
          <div class="twit" style="width:285px;height:200px;margin-left:0;">
            <div class="car">
              <img src="storage/SUV.jpg" alt="" >
              <div class="infos">
                  <a class="car-type">SUV - Car</a>
              </div>
            </div>
          </div>
          <div class="twit" style="width:285px;height:200px;margin-left:0;">
            <div class="car">
              <img src="storage/sport.jpg" alt="" >
              <div class="infos">
                  <a class="car-type">Sport - Car</a>
              </div>
            </div>
          </div>
          <div class="twit" style="width:285px;height:200px;margin-left:0;">
            <div class="car">
              <img src="storage/MPV.jpg" alt="" >
              <div class="infos">
                  <a class="car-type">MPV - Car</a>
              </div>
            </div>
          </div>
          <div class="twit" style="width:285px;height:200px;margin-left:0;">
            <div class="car">
              <img src="storage/executive.jpg" alt="" >
              <div class="infos">
                  <a class="car-type">Executive - Car</a>
              </div>
            </div>
          </div>
          <div class="twit" style="width:285px;height:200px;margin-left:0;">
            <div class="car">
              <img src="storage/swagon.jpg" alt="" >
              <div class="infos">
                  <a class="car-type">Wagon - Car</a>
              </div>
            </div>
          </div>
          <div class="twit" style="width:285px;height:200px;margin-left:0;">
            <div class="car">
              <img src="storage/roadster.jpg" alt="" >
              <div class="infos">
                  <a class="car-type">Roadster - Car</a>
              </div>
            </div>
          </div>
          <div class="twit" style="width:285px;height:200px;margin-left:0;">
            <div class="car">
              <img src="storage/van.jpg" alt="" >
              <div class="infos">
                  <a class="car-type">Van - Car</a>
              </div>
            </div>
          </div>
        </div>
   </div>
 </main>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script  src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="js/script.js"></script>
<script>
$('#types').isotope({
       itemSelector: '.twit',
       layoutMode: 'masonry',
        masonry: {
            columnWidth: 310
        }
          
   });
 </script>
</html>