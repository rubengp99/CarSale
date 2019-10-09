@include('nav')
@include('modals')
@include('footer')
@include('filter-tab')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
<title>Find a {{ ucwords($filter) }}</title>
<style>
    

    @media only screen and (max-width:800px){
        .content{
            margin-left:50px;
            margin-top: 60px;
        }
    }

    @media only screen and (min-width:800px){
        .content{
            margin-left:80px;
            width:calc(100% - 325px);
        }
    }

</style>
</head>
<body>
    @yield('filters')
    <main>
        <aside class="col">
            @if (!Auth::guest())
                @yield('logged-sidebar')
            @else
                @yield('sidebar')
            @endif
        </aside>
        <div class="content"  id="products">
            <div class="twit-container">
                <div class="twit new ford">
                    <div class="product-card ">
                            <div class="product-front">
                                <div class="shadow"></div>
                                <img src="{{ URL::asset('storage/pickup-example.jpg') }}" alt=""/>
                                <div class="image_overlay"></div>
                                <div class="view_details"><a class="text">More photos</a></div>
                                <div class="stats">        	
                                    <div class="stats-container">
                                        <div class="row">
                                          <div class="column">
                                              <span class="product_name">Ford Ranger </span>
                                          </div>
                                          <div class="column">
                                              <span class="product_price">$16500</span>                                              
                                          </div>
                                        </div>
                                        <div class="product-options" style="margin-top:20px;">
                                            <div class="row" style="text-align:center;">
                                              <div class="column">
                                                <strong class="condition">New</strong>
                                                <span style="margin-top:7px;">5000 km</span>
                                              </div>
                                              <div class="column" >
                                                  <strong >Age</strong>
                                                  <span style="margin-top:7px;">2018</span>
                                            </div>  
                                            <div class="row">
      
                                            </div>                                         
                                          </div>                       
                                      </div>                         
                                  </div>
                              </div>
                            </div>
                            <div class="product-back">
                                <div class="shadow"></div>
                                <div class="carousel">
                                    <ul>
                                        <li><img src="{{ URL::asset('storage/ranger1.jpg')}}" alt="" /></li>
                                        <li><img src="{{ URL::asset('storage/ranger2.jpg')}}" alt="" /></li>
                                        <li></li>
                                    </ul>
                                    <div class="arrows-perspective">
                                        <div class="carouselPrev">
                                            <div class="y"></div>
                                            <div class="x"></div>
                                        </div>
                                        <div class="carouselNext">
                                            <div class="y"></div>
                                            <div class="x"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-back">
                                    <div class="cy"></div>
                                    <div class="cx"></div>
                                </div>
                            </div>	  
                        </div>                 
                  </div>
                  <div class="twit used toyota">
                  <div class="product-card">
                            <div class="product-front">
                                <div class="shadow"></div>
                                <img src="{{ URL::asset('storage/pickup-example2.jpg') }}" alt=""/>
                                <div class="image_overlay"></div>
                                <div class="view_details">More photos</div>
                                <div class="stats">        	
                                    <div class="stats-container">
                                        <div class="row">
                                          <div class="column">
                                              <span class="product_name">Toyota 4x4 </span>
                                          </div>
                                          <div class="column">
                                              <span class="product_price">$5000</span>                                              
                                          </div>
                                        </div>
                                        <div class="product-options" style="margin-top:20px;">
                                            <div class="row" style="text-align:center;">
                                              <div class="column">
                                                <strong class="condition">Used</strong>
                                                <span style="margin-top:7px;">85000 km</span>
                                              </div>
                                              <div class="column" >
                                                <strong >Age</strong>
                                                <span style="margin-top:7px;">1989</span>
                                            </div>  
                                            <div class="row">
      
                                            </div>                                         
                                          </div>                       
                                      </div>                         
                                  </div>
                              </div>
                            </div>
                            <div class="product-back">
                                <div class="shadow"></div>
                                <div class="carousel">
                                    <ul>
                                        <li><img src="{{ URL::asset('storage/4x4-1.jpg') }}" alt="" /></li>
                                        <li><img src="{{ URL::asset('storage/4x4-2.jpg') }}" alt="" /></li>
                                        <li><img src="{{ URL::asset('storage/4x4-1.jpg') }}" alt="" /></li>
                                        <li></li>
                                    </ul>
                                    <div class="arrows-perspective">
                                        <div class="carouselPrev">
                                            <div class="y"></div>
                                            <div class="x"></div>
                                        </div>
                                        <div class="carouselNext">
                                            <div class="y"></div>
                                            <div class="x"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-back">
                                    <div class="cy"></div>
                                    <div class="cx"></div>
                                </div>
                            </div>	  
                        </div>
                  </div>
                  <div class="twit unew toyota">
                  <div class="product-card">
                            <div class="product-front">
                                <div class="shadow"></div>
                                <img src="{{ URL::asset('storage/pickup-example3.jpg') }}" alt=""/>
                                <div class="image_overlay"></div>
                                <div class="view_details">More photos</div>
                                <div class="stats">        	
                                    <div class="stats-container">
                                        <div class="row">
                                          <div class="column">
                                              <span class="product_name">Toyota Hilux</span>
                                          </div>
                                          <div class="column">
                                              <span class="product_price">$9000</span>                                              
                                          </div>
                                        </div>
                                        <div class="product-options" style="margin-top:20px;">
                                            <div class="row" style="text-align:center;">
                                              <div class="column">
                                                <strong class="condition">Used but New</strong>
                                                <span style="margin-top:7px;">15000 km</span>
                                              </div>
                                              <div class="column" >
                                                    <strong >Age</strong>
                                                    <span style="margin-top:7px;">2018</span>
                                            </div>  
                                            <div class="row">
      
                                            </div>                                         
                                          </div>                       
                                      </div>                         
                                  </div>
                              </div>
                            </div>
                            <div class="product-back">
                                <div class="shadow"></div>
                                <div class="carousel">
                                    <ul>
                                        <li><img src="{{ URL::asset('storage/hilux1.jpg') }}" alt="" /></li>
                                        <li><img src="{{ URL::asset('storage/hilux2.jpg') }}" alt="" /></li>
                                        <li><img src="{{ URL::asset('storage/hilux3.jpg') }}" alt="" /></li>
                                        <li><img src="{{ URL::asset('storage/hilux4.jpg') }}" alt="" /></li>
                                        <li></li>
                                    </ul>
                                    <div class="arrows-perspective">
                                        <div class="carouselPrev">
                                            <div class="y"></div>
                                            <div class="x"></div>
                                        </div>
                                        <div class="carouselNext">
                                            <div class="y"></div>
                                            <div class="x"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-back">
                                    <div class="cy"></div>
                                    <div class="cx"></div>
                                </div>
                            </div>	  
                        </div>
                  </div>
                  <div class="twit used nissan">
                  <div class="product-card">
                            <div class="product-front">
                                <div class="shadow"></div>
                                <img src="{{ URL::asset('storage/pickup-example4.jpg') }}" alt=""/>
                                <div class="image_overlay"></div>
                                <div class="view_details">More photos</div>
                                <div class="stats">        	
                                    <div class="stats-container">
                                        <div class="row">
                                          <div class="column">
                                              <span class="product_name">Nissan D21</span>
                                          </div>
                                          <div class="column">
                                              <span class="product_price">$2000</span>                                              
                                          </div>
                                        </div>
                                        <div class="product-options" style="margin-top:20px;">
                                            <div class="row" style="text-align:center;">
                                              <div class="column">
                                                <strong class="condition">Used</strong>
                                                <span style="margin-top:7px;">100000 km</span>
                                              </div>
                                              <div class="column" >
                                                    <strong >Age</strong>
                                                    <span style="margin-top:7px;">2006</span>
                                            </div>  
                                            <div class="row">
      
                                            </div>                                         
                                          </div>                       
                                      </div>                         
                                  </div>
                              </div>
                            </div>
                            <div class="product-back">
                                <div class="shadow"></div>
                                <div class="carousel">
                                    <ul>
                                        <li><img src="{{ URL::asset('storage/d21-1.jpg') }}" alt="" /></li>
                                        <li><img src="{{ URL::asset('storage/d21-2.jpg') }}" alt="" /></li>
                                        <li><img src="{{ URL::asset('storage/d21-3.jpg') }}" alt="" /></li>
                                        <li></li>
                                    </ul>
                                    <div class="arrows-perspective">
                                        <div class="carouselPrev">
                                            <div class="y"></div>
                                            <div class="x"></div>
                                        </div>
                                        <div class="carouselNext">
                                            <div class="y"></div>
                                            <div class="x"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-back">
                                    <div class="cy"></div>
                                    <div class="cx"></div>
                                </div>
                            </div>	  
                        </div>
                  </div>
                  <div class="twit new ford">
                  <div class="product-card">
                            <div class="product-front">
                                <div class="shadow"></div>
                                <img src="{{ URL::asset('storage/pickup-example5.jpg') }}" alt=""/>
                                <div class="image_overlay"></div>
                                <div class="view_details">More photos</div>
                                <div class="stats">        	
                                    <div class="stats-container">
                                        <div class="row">
                                          <div class="column">
                                              <span class="product_name">Ford F100</span>
                                          </div>
                                          <div class="column">
                                              <span class="product_price">$4000</span>                                              
                                          </div>
                                        </div>
                                        <div class="product-options" style="margin-top:20px;">
                                            <div class="row" style="text-align:center;">
                                              <div class="column">
                                                <strong class="condition">New</strong>
                                                <span style="margin-top:7px;">3000 km</span>
                                              </div>
                                              <div class="column" >
                                                    <strong >Age</strong>
                                                    <span style="margin-top:7px;">1979</span>
                                            </div>  
                                            <div class="row">
      
                                            </div>                                         
                                          </div>                       
                                      </div>                         
                                  </div>
                              </div>
                            </div>
                            <div class="product-back">
                                <div class="shadow"></div>
                                <div class="carousel">
                                    <ul>
                                        <li><img src="{{ URL::asset('storage/f100-1.jpg') }}" alt="" /></li>
                                        <li><img src="{{ URL::asset('storage/f100-2.jpg') }}" alt="" /></li>
                                        <li></li>
                                    </ul>
                                    <div class="arrows-perspective">
                                        <div class="carouselPrev">
                                            <div class="y"></div>
                                            <div class="x"></div>
                                        </div>
                                        <div class="carouselNext">
                                            <div class="y"></div>
                                            <div class="x"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-back">
                                    <div class="cy"></div>
                                    <div class="cx"></div>
                                </div>
                            </div>	  
                        </div>
                  </div>
                  <div class="twit new kia">
                  <div class="product-card">
                            <div class="product-front">
                                <div class="shadow"></div>
                                <img src="{{ URL::asset('storage/pickup-example6.jpg') }}" alt=""/>
                                <div class="image_overlay"></div>
                                <div class="view_details">More photos</div>
                                <div class="stats">        	
                                    <div class="stats-container">
                                        <div class="row">
                                          <div class="column">
                                              <span class="product_name">Kia Mohave</span>
                                          </div>
                                          <div class="column">
                                              <span class="product_price">$12000</span>                                              
                                          </div>
                                        </div>
                                        <div class="product-options" style="margin-top:20px;">
                                            <div class="row" style="text-align:center;">
                                              <div class="column">
                                                <strong class="condition">New</strong>
                                                <span style="margin-top:7px;">10000 km</span>
                                              </div>
                                              <div class="column" >
                                                  <strong >Age</strong>
                                                  <span style="margin-top:7px;">2018</span>
                                            </div>  
                                            <div class="row">
      
                                            </div>                                         
                                          </div>                       
                                      </div>                         
                                  </div>
                              </div>
                            </div>
                            <div class="product-back">
                                <div class="shadow"></div>
                                <div class="carousel">
                                    <ul>                 
                                        <li><img src="{{ URL::asset('storage/mohave-1.jpg') }}" alt="" /></li>
                                        <li><img src="{{ URL::asset('storage/mohave-2.jpg') }}" alt="" /></li>
                                        <li></li>
                                    </ul>
                                    <div class="arrows-perspective">
                                        <div class="carouselPrev">
                                            <div class="y"></div>
                                            <div class="x"></div>
                                        </div>
                                        <div class="carouselNext">
                                            <div class="y"></div>
                                            <div class="x"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-back">
                                    <div class="cy"></div>
                                    <div class="cx"></div>
                                </div>
                            </div>	  
                        </div>
                  </div>
                </div>
      
        </div>
        @yield('non-base-footer')
    </main>

    @yield('modal-login')

    @yield('modal-register')

    @yield('modal-sell');
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
    <script  src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>

<script>


   $('#products').isotope({
       itemSelector: '.twit',
       layoutMode: 'masonry',
        masonry: {
            columnWidth: 335
        },
        getSortData: {
            price : function( $elem ) {
                return parseFloat( $($elem).children().find('.product_price').text().replace('$', '') );
            }
        }
        
   });

   function searchFilter() {
        var qsRegex = new RegExp( $quicksearch.val(), 'gi' );
        var $container = $('#products');
        $container.isotope({ filter: function() {
            return qsRegex ? $(this).text().match( qsRegex ) : true;
        } });
    }

    var $quicksearch = $('#quicksearch').keyup( debounce( searchFilter ) );

    function debounce( fn, threshold ) {
        var timeout;
        return function debounced() {
            if ( timeout ) {
            clearTimeout( timeout );
            }
            function delayed() {
            fn();
            timeout = null;
            }
            setTimeout( delayed, threshold || 100 );
        }
    }

    $('#select').change(function(){
        var Selector = $(this).val();
        $('#products').isotope({filter: Selector});
        if ( !$('#products').data('isotope').filteredItems.length ) {
            Swal.fire({
                    title:'Oh no...',
                    html:"<br>Looks like we haven't found any car with this filter, you can try with other filters for results. :( <br>",
                    type:'error',
                    onClose: () => {
                        $('#select').val('*');
                        $('#products').isotope({filter:'*'});
                    },
                    confirmButtonText:
                    '<i class="material-icons" style="vertical-align:middle;">thumb_up</i>'
                });
        }
    });


   $('input[type="radio"]').click(function(){
        var direction = $(this).attr('data-filter');
        if(direction == 'asc'){
            $('#products').isotope({ sortBy: "price" , sortAscending: true });  
        }else if(direction == 'desc'){
            $('#products').isotope({ sortBy: "price" , sortAscending: false }); 
        }else{
            $('#products').isotope({ sortBy: 'random' }); 
        }
   });

   $('input[type="checkbox"]').click(function(){
       $('#checkboxes li').each(function(){
            $(this).children('input[type="checkbox"]').prop('checked',false);
       });
       $(this).prop('checked',true);
        var selectorA = $(this).attr('data-filter');
        $('#products').isotope({filter: selectorA});
        if ( !$('#products').data('isotope').filteredItems.length ) {
            Swal.fire({
                    title:'Oh no...',
                    html:"<br>Looks like we haven't found any car with this filter, you can try with other filters for results. :( <br>",
                    type:'error',
                    onClose: () => {
                        $(this).prop('checked',false);
                        $('#checkbox5').prop('checked',true);
                        $('#products').isotope({filter:'*'});
                    },
                    confirmButtonText:
                    '<i class="material-icons" style="vertical-align:middle;">thumb_up</i>'
                });
        }

    });
</script>
</body>
</html>