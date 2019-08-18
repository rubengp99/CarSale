@section('sidebar')
<nav class="nav__cont">
        <ul class="nav">
          <li class="nav__items">
              <i id="burger" class="material-icons icon">menu</i>
          </li>
            <li class="nav__title ">
                    <img style="transform:translateX(-22px);" src="{{ URL::asset('storage/logo.png') }}" alt="" srcset="">
                    <a class="__title">Concessionary</a>
            </li>
          <li class="nav__items ">
            <i class="fa fa-home icon" aria-hidden="true"></i>
              <div class="__text">
                    <a href="/" >Home<em></em></a>
              </div>
          </li>
          
          <li class="nav__items" style="height: 68px;">
          <i class="material-icons icon">search</i>
            <div class="__text">
                    <a href="/search" >Search<em></em></a>
            </div>
          </li>
            
          <li class="nav__items ">
          <i class="material-icons icon">person</i>
              <div class="__text">
                    <a id="modal_login" class="zoom-btn">Sign in<em></em></a>
              </div>
          </li>
            
          <li class="nav__items ">
              <i class="material-icons icon">account_circle</i>
              <div class="__text">
                    <a id="modal_register">Sign up <em></em></a>
              </div>
          </li>
              
          <li class="nav__items ">
         
            <i class="fa fa-shopping-cart icon"></i>
            <div class="__text">
                    <a href="">Pay Car<em></em></a>
            </div>
          </li>
        </ul>
      </nav>
@endsection

@section('logged-sidebar')
<nav class="nav__cont">
    <ul class="nav">
      <li class="nav__items">
          <i id="burger" class="material-icons icon">menu</i>
      </li>
        <li class="nav__title ">
              <img style="transform:translateX(-22px);" src="{{ URL::asset('storage/logo.png') }}" alt="" srcset="">
              @if (!Auth::guest())
              <a class="__title">Hi. {{ " ".Auth::user()->username}}</a>
              @endif
        </li>
      <li class="nav__items ">
        <i class="fa fa-home icon" aria-hidden="true"></i>
          <div class="__text">
                <a href="/" >Home<em></em></a>
          </div>
      </li>
      
      <li class="nav__items" style="height: 68px;">
      <i class="material-icons icon">search</i>
        <div class="__text">
                <a href="/search" >Search<em></em></a>
        </div>
      </li>
        
      
        
      <li class="nav__items ">
          <i class="material-icons icon">attach_money</i>
          <div class="__text">
                <a id="modal_sell">Sell Car<em></em></a>
          </div>
      </li>
          
      <li class="nav__items ">
     
        <i class="fa fa-shopping-cart icon"></i>
        <div class="__text">
                <a href="">Pay Car<em></em></a>
        </div>
      </li>

      <li class="nav__items ">
          <i class="material-icons icon">power_settings_new</i>
              <div class="__text">
                    <a href="/logout" class="zoom-btn">Log out<em></em></a>
              </div>
          </li>
    </ul>
  </nav>
@endsection