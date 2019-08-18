@section('footer')
    <footer class="footer">
        <div class="container-footer">
          <div class="center-text">
            <span class="copyright">© 2019
              <span class="copyright__name">Ruben Garcia</span></span>
            <p class="footer-nav">
              <a id="home" class="footer-nav__link">Home</a> &nbsp;|&nbsp;
              <a id="f_contact" class="footer-nav__link">Contact me</a>
            </p>
            <div class="social-media">
              <a href="#" class="hover-zoom" style="margin-right: 10px;"><img src="storage/facebook.png" alt="Facebook" ></a>
              <a href="#" class="hover-zoom" style="margin-right: 10px;" ><img src="storage/instagram.png" alt="Instagram"></a>
              <a href="#" class="hover-zoom" style="margin-right: 10px;"><img src="storage/reddit.png" alt="Reddit"></a>
              <a href="#" class="hover-zoom" style="margin-right: 10px;"><img src="storage/github.png" alt="Github"></a>
              <a href="#" class="hover-zoom" style="margin-right: 10px;"><img src="storage/linkedin.png" alt="LinkedIn"></a>
            </div>
          </div>
        </div>
      </footer>
@endsection

@section('non-base-footer')
    <footer class="footer">
        <div class="container-footer">
          <div class="center-text">
            <span class="copyright">© 2019
              <span class="copyright__name">Ruben Garcia</span></span>
            <p class="footer-nav">
              <a id="home" class="footer-nav__link">Home</a> &nbsp;|&nbsp;
              <a id="f_contact" class="footer-nav__link">Contact me</a>
            </p>
            <div class="social-media">
            <a href="#" class="hover-zoom" style="margin-right: 10px;"><img src="{{URL::asset('storage/facebook.png')}}" alt="Facebook" ></a>
            <a href="#" class="hover-zoom" style="margin-right: 10px;" ><img src="{{URL::asset('storage/instagram.png')}}" alt="Instagram"></a>
            <a href="#" class="hover-zoom" style="margin-right: 10px;"><img src="{{URL::asset('storage/reddit.png')}}" alt="Reddit"></a>
            <a href="#" class="hover-zoom" style="margin-right: 10px;"><img src="{{URL::asset('storage/github.png')}}" alt="Github"></a>
            <a href="#" class="hover-zoom" style="margin-right: 10px;"><img src="{{URL::asset('storage/linkedin.png')}}" alt="LinkedIn"></a>
            </div>
          </div>
        </div>
      </footer>
@endsection