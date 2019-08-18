
@section('modal-login')
    <!-- Modal for Login-->
    <div class="cover hidden"></div>
    <div id="Login" class="modal hidden">
        <div class="content">
        <div class="card-header" style="background-image:linear-gradient(rgba(49, 29, 63,.5),rgba(0,0,0,.5)),url('/storage/login.jpg');">
        <br>
        <h2 style="color:white">Sign in</h2>
        </div>
        <div class="card">
                <div class="card-content">
                <form method="POST" action="{{route('login')}}">
                  {{ csrf_field() }}
                    <div class="mat-div">
                    <i class="material-icons" style="color:black !important;">person</i>
                    <label for="first-name" class="mat-label-2">Email</label>
                    <input type="text" name="mail" class="mat-input" id="user" required>
                    </div>
                    <div class="mat-div">
                    <i class="material-icons">lock</i>

                    <label for="first-name"  class="mat-label-2">Password</label>
                    <input type="password" name="pass" class="mat-input" id="pass" required>
                    </div>

                    <br>
                    <button id="login" class="button" style=" width:100px;">
                        <span class="submit">Sign in</span>
                        <span class="loading"><i class="material-icons">refresh</i></span>
                        <span class="check"><i class="material-icons">check</i></span>
                    </button> 
                </form>
                
                <br>          
            </div>    
            <div class="card-help">
            <a id="toggle-register">Sign up</a> | <a>Forgot Password</a>
            </div>
        </div>
        </div>
    </div>
    <!--END Modal for Login-->
@endsection

@section('modal-register')
    <!-- Modal for Register-->
    <div id="register" class="modal hidden">
            <div class="content" style="transform:translateY(-110px);">
            <div class="card-header" style="background-image:linear-gradient(rgba(49, 29, 63,.5),rgba(0,0,0,.5)),url('/storage/register.jpg');">
            <br>
            <h2 style="color:white">Sign up</h2>
            </div>
              <div class="card" >
                    <div class="card-content">
                      <form  method="POST" action="/">
                        {{ csrf_field() }}
                        <div class="mat-div">
                          <i class="material-icons">person</i>
                          <label for="first-name" class="mat-label-2">Full Name</label>
                          <input type="text" name="name" pattern="[A-Za-z ]*" title="Please use the english format. Ej: Dylan Connor." class="mat-input" id="Fname" required>
                        </div>
                        <div class="mat-div">
                          <i class="material-icons icon-adjust">account_circle</i>
                          <label for="first-name" class="mat-label-2">Username</label>
                          <input type="text" name="username" pattern="[A-Za-z0-9]*"  title="Please do not include special characters. Ej: User47." class="mat-input" id="User" required>
                        </div>
                        <div class="mat-div">
                          <i class="material-icons">email</i>
                          <label for="first-name" class="mat-label-2">Email</label>
                          <input type="email" name="email" class="mat-input" id="Mail" required>
                        </div>
                        <div class="mat-div">
                          <i class="material-icons">lock</i>
                          <label for="first-name"  class="mat-label-2">Password</label>
                          <input type="password" name="password" pattern="[A-Za-z0-9]{8,16}" title="You must set a password within 8 and 16 characters, including numeric, alphabetic and special characters." class="mat-input" id="Pass" required>
                        </div>
                        <br>
                        <p class="note">
                          Your password must be between 8 and 16 characters. Including letters and numbers.
                        </p>
                        <br>
                      </form>
                    <button id="Register" class="button" style=" width:100px;">
                        <span class="submit">Sign up</span>
                        <span class="loading"><i class="material-icons">refresh</i></span>
                        <span class="check"><i class="material-icons">check</i></span>
                    </button>
                  </div>   
                  <div class="card-help">
                      <p>
                      By clicking “Sign up”, you agree to our <a id="terms">Terms of Service and Privacy Statement</a>.
                      </p>
                    </div>  
              </div>
            </div>
        </div>
    <!-- END Modal for Register-->
@endsection

@section('modal-sell')
    <!-- Modal for Register-->
    <div id="sell" class="modal hidden" style="margin: 120px 25vw;">
            <div class="content" style="transform:translateY(-110px);" >
            <div class="card-header" style="background-image:linear-gradient(rgba(49, 29, 63,.7),rgba(0,0,0,.7)),url('/storage/sell.jpg');width:750px;
            height:150px;">
            <br>
            <h2 style="color:white;transform:translate(30px,20px);">Sell Car</h2>
            </div>
              <div class="card2" style="padding: 15px 40px 30px 40px;" >
                    <div class="card-content" >
                      <form  method="POST" action="/">
                        {{ csrf_field() }}
                        <div class="mat-div" style="transform: translateX(-110px);">
                          <i class="material-icons">dvr</i>
                          <label for="first-name" class="mat-label-2">Car Name</label>
                          <input type="text" name="name" pattern="[A-Za-z0-9]*" title="Please use the english format. Ej: Ranger." class="mat-input" id="Fname" required>
                        </div>
                        <div class="mat-div" style="transform: translate(130px,-54px);">
                          <i class="material-icons icon-adjust">directions_run</i>
                          <label for="first-name" class="mat-label-2">Kilometers</label>
                          <input type="text" name="username" pattern="[0-9km]*"  title="Please do not include special characters. Ej: 5000km." class="mat-input" id="User" required>
                        </div>
                        <div class="cd-filter-block" style="transform: translate(-110px, -50px);">
                          <i class="material-icons" style="transform: translate(-40px,35px);">directions_car</i>                          
                          <div class="cd-filter-content">
                            <div class="cd-select cd-filters">
                              <select class="filter" id="select">
                                <option value="*">Brand of the Car</option>
                                <option value="toyota">Toyota</option>
                                <option value="hyundai">Hyundai</option>
                                <option value="ford">Ford</option>
                                <option value="chevrolet">Chevrolet</option>
                                <option value="kia">Kia</option>
                                <option value="nissan">Nissan</option>
                              </select>
                            </div> <!-- cd-select -->
                          </div> <!-- cd-filter-content -->
                        </div> 
                        <div class="cd-filter-block"  style="transform: translate(130px, -147px);">
                            <i class="material-icons" style="transform: translate(-40px,35px);">date_range</i>                          
                            <div class="cd-filter-content">
                              <div class="cd-select cd-filters">
                                <select class="filter" id="select">
                                  <option value="*">Age of the Car</option>
                                  @for ($i = 1980; $i < 2020; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                  @endfor
                                </select>
                              </div> <!-- cd-select -->
                            </div> <!-- cd-filter-content -->
                          </div>
                          <div class="twit" style="height:0px;">
                              <div class="wrap-custom-file" style="transform:translate(-270px,-150px);">
                                  <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png" />
                                  <label  for="image1">
                                      <span>Main Photo</span>
                                  <i class="material-icons mi">add_circle</i>
                                </label>
                              </div> 
                          </div>
                          <div class="twit" style="height:0px;">
                              <div class="wrap-custom-file" style="transform:translate(-100px,-351px);">
                                  <input type="file" name="image2" id="image2" accept=".gif, .jpg, .png" />
                                  <label  for="image2">
                                      <span>Extra Photo</span>
                                  <i class="material-icons mi">add_circle</i>
                                </label>
                              </div> 
                          </div>
                          <div class="twit" style="height:0px;">
                              <div class="wrap-custom-file" style="transform:translate(70px,-553px);">
                                  <input type="file" name="image3" id="image3" accept=".gif, .jpg, .png" />
                                  <label  for="image3">
                                      <span>Extra Photo</span>
                                  <i class="material-icons mi">add_circle</i>
                                </label>
                              </div> 
                          </div>
                          <div class="twit" style="height:0px;">
                              <div class="wrap-custom-file" style="transform:translate(240px,-755px);">
                                  <input type="file" name="image4" id="image4" accept=".gif, .jpg, .png" />
                                  <label  for="image4">
                                      <span>Extra Photo</span>
                                  <i class="material-icons mi">add_circle</i>
                                </label>
                              </div> 
                          </div>
                      </form>
                    <button id="Register" class="button" style=" width:100px; transform:translate(50px,-725px);">
                        <span class="submit">Publish</span>
                        <span class="loading"><i class="material-icons">refresh</i></span>
                        <span class="check"><i class="material-icons">check</i></span>
                    </button>
                  </div>   
 
              </div>
            </div>
        </div>
    <!-- END Modal for Register-->
@endsection