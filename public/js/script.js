
$('input[type="file"]').each(function(){
  // Refs
  var $file = $(this),
      $label = $file.next('label'),
      $labelText = $label.find('span'),
      labelDefault = $labelText.text();
  
  // When a new file is selected
  $file.on('change', function(event){
    var fileName = $file.val().split( '\\' ).pop(),
        tmppath = URL.createObjectURL(event.target.files[0]);
    //Check successfully selection
		if( fileName ){
      $label
        .addClass('file-ok')
        .css('background-image', 'url(' + tmppath + ')');
			$labelText.text(fileName);
    }else{
      $label.removeClass('file-ok');
			$labelText.text(labelDefault);
    }
  });
  
// End loop of file input elements  
});

$(document).ready(function(){
  if(screen.width<800){
    $('.nav__cont').addClass('show hide');
  }
  var URL = window.location;
  if(URL){

  }
});

$('.nav__cont').hover(function(){
  if(screen.width < 800){
    if($(this).hasClass('show')){
      $(this).toggleClass('hide');
    }else{
      
      $(this).toggleClass('show');
    }
  }
});

$(".mat-input").focus(function(){
  $(this).parent().addClass("is-active is-completed");
});


$(".mat-input").keyup(function(){
  if(!this.checkValidity()){
    $(this).parent(".mat-div").find("i").css("color","#FF3C3C")
  }else{
    $(this).parent(".mat-div").find("i").css("color","black")
  }
});

$("#terms").click(function(){
  Swal.fire({
    title:'Terms of Service and Privacy Statement',
    text:'This is a demo project made by Ruben Garcia, so there is nothing to be in here. Good luck and keep watching my project. :)',
    type:'info',
    confirmButtonText:
    '<i class="material-icons" style="vertical-align:middle;">thumb_up</i>'
  })
});

$(".mat-input").focusout(function(){
  if($(this).val() === ""){
    $(this).parent().find(".material-icons").css("color","black");
    $(this).parent().removeClass("is-completed");
  }
  $(this).parent().removeClass("is-active");
});

$("#modal_sell").click(function() {
  if($("#login").hasClass("finished")){
    $("#login").removeClass("finished");
    $("#login").css("background-color","")
  }
  $('#sell, .cover').removeClass("hidden");
  $('#sell').addClass("zoom");
  
});

$("#modal_login").click(function() {
  if($("#login").hasClass("finished")){
    $("#login").removeClass("finished");
    $("#login").css("background-color","")
  }
  $('#Login, .cover').removeClass("hidden");
  $('#Login').addClass("zoom");
  if($("#register").hasClass("zoom")){
    $("#register").removeClass("zoom").addClass("zoom-out");
    setTimeout(() => {
      $("#register").attr('class', 'modal');
    $("#register").addClass("hidden");
    }, 600);
  }
});

$("#modal_register").click(function() {
  if($("#Register").hasClass("finished")){
    $("#Register").removeClass("finished");
    $("#Register").css("background-color","");
    $("#User").parent(".mat-div").find("i").css("color","black");
    $("#Pass").parent(".mat-div").find("i").css("color","black");
    $("#Mail").parent(".mat-div").find("i").css("color","black");
    $("#Fname").parent(".mat-div").find("i").css("color","black");
  }
  $('#register, .cover').removeClass("hidden");
  $('#register').addClass("zoom");
  if($("#Login").hasClass("zoom")){
    $("#Login").removeClass("zoom").addClass("zoom-out");
    setTimeout(() => {
      $("#Login").attr('class', 'modal');
    $("#Login").addClass("hidden");
    }, 600);
  }
});

$("#toggle-register").click(function() {
  $('#Login').removeClass("zoom");
  $('#Login').addClass("zoom-out");
  setTimeout(function(){ 
    $('#Login').attr('class', 'modal');
    $('#Login').addClass("hidden");
    $('#register').removeClass("hidden");
    $('#register').addClass("zoom");
  }, 600);
});


//hide modal
$(".cover, .close").on ("click", function() {
  $('.modal').removeClass("zoom");
  $('.modal').addClass("zoom-out");
  setTimeout(function(){ 
    $('.modal').attr('class', 'modal');
    $('.modal, .cover').addClass("hidden");
    $("#login").removeClass("finished");
    $("#login").css("background-color","")
  }, 600);
});


$("#login").click(function(){
  $(this).removeClass("finished");
  $(this).toggleClass("active");
  $(this).css("background-color","#2ecc71")
});


$("#Register").click(function(){
  $(this).removeClass("finished");
  $(this).toggleClass("active");
  $(this).css("background-color","#2ecc71")
});



var mySwiper = new Swiper(".swiper-container", {
  direction: "vertical",
  loop: true,
  pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
  grabCursor: true,
  speed: 1000,
  paginationClickable: true,
  parallax: true,
  autoplay: {
    delay: 5000,
  },
  effect: "slide",
  simulateTouch: true
});
var card = this;
var carousel = $('.carousel ul');

  $(document).ready(function(){
	// Lift card and show stats on Mouseover
    $('.product-card').hover(function(){
        card = $(this);
        card.parents('.carouselNext, .carouselPrev').addClass('visible');
        carousel = $(this).parent().find('.carousel ul');
        // building the width of the casousel
        carouselWidth = 0;
        MaxWidth = 0;
        carousel.parent().find('li').each(function(){
          carouselWidth += carouselSlideWidth;         
        });
        carousel.parent().find('li img').each(function(){
          MaxWidth += carouselSlideWidth;      
        });
        $(carousel).css('width', carouselWidth);
  });	
	
	// Flip card to the back side
	$('.view_details').click(function(){		
    card.parents('.carouselNext,.carouselPrev').removeClass('visible');
		card.toggleClass('flip-10');
		setTimeout(function(){
			card.removeClass('flip-10').toggleClass('flip90').parent().find('.shadow').show().fadeTo( 80 , 1, function(){
			card.parents('.product-front, .product-front div.shadow').hide();			
			});
		}, 50);
		
		setTimeout(function(){
			card.removeClass('flip90').toggleClass('flip190');
			card.parent().find('.product-back').show().parent().find('.shadow').show().fadeTo( 90 , 0);
			setTimeout(function(){				
				card.removeClass('flip190').toggleClass('flip180').find('div.shadow').hide();						
				setTimeout(function(){
					card.css('transition', '100ms ease-out');			
					card.parent().find('.cx, .cy').toggleClass('s1');
					setTimeout(function(){card.parent().find('.cx, .cy').addClass('s2');}, 15);
					setTimeout(function(){card.parent().find('.cx, .cy').addClass('s3');}, 30);				
					card.parent().find('.carouselNext, .carouselPrev').addClass('visible');				
				}, 50);
			}, 50);			
		}, 50);			
	});			
	var aux_card;
	// Flip card back to the front side
	$('.flip-back').click(function(){		
		aux_card = $(this).parents('.product-card');
    aux_card.removeClass('flip180').toggleClass('flip190')
		setTimeout(function(){
      aux_card.removeClass('flip190').toggleClass('flip90');
			aux_card.parent().find('.product-back .shadow').css('opacity', 0).fadeTo( 100 , 1, function(){
        aux_card.parent().find('.product-back, .product-back div.shadow').hide();
        aux_card.parent().find('.product-front, .product-front div.shadow').show();
			});
		}, 50);
		
		setTimeout(function(){
			aux_card.removeClass('flip90').toggleClass('flip-10');
      aux_card.parent().find('.product-front .shadow').show().fadeTo( 100 , 0);
			setTimeout(function(){						
				aux_card.parent().find('.product-front .shadow').hide();
			  aux_card.removeClass('flip-10').css('transition', '100ms ease-out');		
				aux_card.parent().find('.cx, .cy').removeClass('s1 s2 s3');			
			}, 100);			
		}, 150);			
		
	});	

	
  var carouselSlideWidth = 305;
  var MaxWidth = 0;
	var carouselWidth = 0;	
	var isAnimating = false;
	
	
	
	// Load Next Image
	carousel.parent().find('div.carouselNext').on('click', function(){
		var currentLeft = Math.abs(parseInt($(carousel).css("left")));
    var newLeft = currentLeft + carouselSlideWidth;
    newLeft = (newLeft == MaxWidth)?0:newLeft;
		if(newLeft == carouselWidth || isAnimating === true){return;}
		carousel.parent().find('ul').css({'left': "-" + newLeft + "px",
							   "transition": "300ms ease-out"
							 });
		isAnimating = true;
		setTimeout(function(){isAnimating = false;}, 300);			
	});
	
	// Load Previous Image
	carousel.parent().find('div.carouselPrev').on('click', function(){
    var currentLeft = Math.abs(parseInt($(carousel).css("left")));
    var newLeft = (currentLeft == 0)?(MaxWidth- carouselSlideWidth):(currentLeft - carouselSlideWidth);
		if(newLeft < 0  || isAnimating === true){return;}
		carousel.parent().find('ul').css({'left': "-" + newLeft + "px",
							   "transition": "300ms ease-out"
							 });
	    isAnimating = true;
		setTimeout(function(){isAnimating = false;}, 300);			
	});
});
	
$(document).ready(function($){
	//open/close lateral filter
	$('.cd-filter-block h4').toggleClass('closed').siblings('.cd-filter-content').slideToggle(300);

	$('.filters').on('click', function(){
		triggerFilter(true);
	});
	$('.cd-filter .cd-close').on('click', function(){
		triggerFilter(false);
	});

	function triggerFilter($bool) {
		var elementsToTrigger = $([$('#trigger-disabled'), $('.cd-filter')]);
		elementsToTrigger.each(function(){
			$(this).toggleClass('filter-is-visible', $bool);
			if ($bool == false){
				$('.filters').fadeIn('slow');
				$('trigger-filter').fadeIn('slow');
				$(this).fadeOut('slow');
			}else{
        $(this).fadeIn('fast');
				$('.filters').fadeOut('fast');
			}
		});
	}

	//mobile version - detect click event on filters tab
	var filter_tab_placeholder = $('.cd-tab-filter .placeholder a'),
		filter_tab_placeholder_default_value = 'Select',
		filter_tab_placeholder_text = filter_tab_placeholder.text();
	
	$('.cd-tab-filter li').on('click', function(event){
		//detect which tab filter item was selected
		var selected_filter = $(event.target).data('type');
			
		//check if user has clicked the placeholder item
		if( $(event.target).is(filter_tab_placeholder) ) {
			(filter_tab_placeholder_default_value == filter_tab_placeholder.text()) ? filter_tab_placeholder.text(filter_tab_placeholder_text) : filter_tab_placeholder.text(filter_tab_placeholder_default_value) ;
			$('.cd-tab-filter').toggleClass('is-open');

		//check if user has clicked a filter already selected 
		} else if( filter_tab_placeholder.data('type') == selected_filter ) {
			filter_tab_placeholder.text($(event.target).text());
			$('.cd-tab-filter').removeClass('is-open');	

		} else {
			//close the dropdown and change placeholder text/data-type value
			$('.cd-tab-filter').removeClass('is-open');
			filter_tab_placeholder.text($(event.target).text()).data('type', selected_filter);
			filter_tab_placeholder_text = $(event.target).text();
			
			//add class selected to the selected filter item
			$('.cd-tab-filter .selected').removeClass('selected');
			$(event.target).addClass('selected');
		}
	});
  
  
	//close filter dropdown inside lateral .cd-filter 
	$('.cd-filter-block h4').on('click', function(){
		$(this).toggleClass('closed').siblings('.cd-filter-content').slideToggle(300);
	})

  });

 //     ajax request     //



  $("#Register").on('transitionend webkitTransitionEnd oTransitionEnd', function (e) {
    $.ajaxSetup({

      headers: {
    
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    
      }
    
    });
    if(User.checkValidity()== true && Pass.checkValidity()==true && Mail.checkValidity()==true && Fname.checkValidity()==true){
      
      e.preventDefault();

      var name = $("input[name=name]").val();

      var username = $("input[name=username]").val();

      var password = $("input[name=password]").val();

      var email = $("input[type=email]").val();
      
      var promise = $.ajax({
        cache:false,
        type:'POST',
        url:'/',
        dataType: 'json',
        data:{name:name, username:username, password:password, email:email },
      });
      
      promise.always(function(data){
        var pattern = /([.*+?"^$|(){}\[\]])/mg;
        var text = data.responseText.replace(new RegExp(pattern),"");
        if(data.status == 401){
            $("#Register").removeClass("active");
            $("#Register").toggleClass("finished");
            $("#Register").parent().find(".check").html("<i class='material-icons'>priority_high</i>");
            $("#Register").css("background-color","#d32f2f");
            Swal.fire({
              type:'error',
              title:'Oh no...',
              text: text,
              confirmButtonText:
              '<i class="material-icons" style="vertical-align:middle;">thumb_up</i>'
            }); 
        }else{
          let timerInterval;
          $("#Register").removeClass("active");
            $("#Register").toggleClass("finished");
            $("#Register").parent().find(".check").html("<i class='material-icons'>check</i>");
            $(this).css("background-color","#2ecc71")
            Swal.fire({
              type:'success',
              title:'Almost done!',
              text: "You've been registered succefully, do you want to sign in?",
              confirmButtonText:
              '<i class="material-icons" style="vertical-align:middle;">thumb_up</i>',
              cancelButtonText:
              '<i class="material-icons" style="vertical-align:middle;">thumb_down</i>',
              cancelButtonColor: '#d33',
              showCancelButton: true,
            }).then((result) => {
            if (result.value) {
              Swal.fire({
                type: 'success',
                title: 'All done!',
                html:"Okay! I'll take you there in <strong></strong> seconds.",
                confirmButtonText:'<i class="material-icons" style="vertical-align:middle;">thumb_up</i>',               
                timer: 2500,
                onBeforeOpen: () => {
                  Swal.showLoading()
                  timerInterval = setInterval(() => {
                    Swal.getContent().querySelector('strong')
                      .textContent = Swal.getTimerLeft()
                  }, 100)
                },
                onClose: () => {
                    $('#register').removeClass("zoom");
                    $('#register').addClass("zoom-out");
                    setTimeout(function(){ 
                      $('#register').attr('class', 'modal');
                      $('#register').addClass("hidden");
                      $('#Login').removeClass("hidden");
                      $('#Login').addClass("zoom");
                    }, 600);
                    clearInterval(timerInterval);
                  }
               })
            }else if(result.dismiss){
              Swal.fire({
                type: 'error',
                title: 'Maybe later.',
                text:"No problem, you can sign in later.",
                confirmButtonText:'<i class="material-icons" style="vertical-align:middle;">thumb_up</i>'
              })
            }
          })
        }
      });
    }else{
        $(this).removeClass("active");
        $(this).toggleClass("finished");
        $(this).parent().find(".check").html("<i class='material-icons'>priority_high</i>");
        $(this).css("background-color","#d32f2f");
          Swal.fire({
            title:'Something went wrong.',
            text:'Looks like there is an invalid field, please check the fields marked with the red color.',
            type:'error',
            confirmButtonText:
            '<i class="material-icons" style="vertical-align:middle;">thumb_up</i>'
            });
        if(!User.checkValidity()){
          $("#User").parent(".mat-div").find("i").css("color","#f44336")
        }
        if(!Pass.checkValidity()){
          $("#Pass").parent(".mat-div").find("i").css("color","#f44336")
        }
        if(!Mail.checkValidity()){
          $("#Mail").parent(".mat-div").find("i").css("color","#f44336")
        }
        if(!Fname.checkValidity()){
          $("#Fname").parent(".mat-div").find("i").css("color","#f44336")
        }
        
     }
  });



  $("#login").on('transitionend webkitTransitionEnd oTransitionEnd', function (e) {
    $.ajaxSetup({

      headers: {
    
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    
      }
    
    });
      
      e.preventDefault();

      var email = $("input[name=mail]").val();

      var password = $("input[name=pass]").val();

      var promise = $.ajax({
        cache:false,
        type:'POST',
        url:"'/auth/login'",
        dataType: 'json',
        data:{password:password, email:email},
      });
      
      promise.always(function(data){
        if (data.status != 407){
          Swal.fire({
            title:'Something went wrong.',
            text:'Looks like there is an invalid field, please check the fields marked with the red color.',
            type:'success',
            confirmButtonText:
            '<i class="material-icons" style="vertical-align:middle;">thumb_up</i>'
            });
      } else {
        Swal.fire({
          title:'Something went wrong.',
          text:'Looks like there is an invalid field, please check the fields marked with the red color.',
          type:'error',
          confirmButtonText:
          '<i class="material-icons" style="vertical-align:middle;">thumb_up</i>'
          });
      }
      });

  });

  /*
$("#login").on('transitionend webkitTransitionEnd oTransitionEnd', function () {
  if(user.checkValidity()== true && pass.checkValidity()==true){
    $(this).removeClass("active");
    $(this).toggleClass("finished");
    $(this).parent().find(".check").html("<i class='material-icons'>check</i>");
    $(this).parent().find(".check").html("<i class='material-icons'>check</i>");
    $('#log').trigger('click');
  }else{
    $(this).removeClass("active");
    $(this).toggleClass("finished");
    $(this).parent().find(".check").html("<i class='material-icons'>priority_high</i>");
    $(this).css("background-color","#d32f2f");
    Swal.fire({
    title:'Something went wrong.',
    text:'Looks like you have not filled all the fields. Please check this.',
    type:'error',
    confirmButtonText:
    '<i class="material-icons" style="vertical-align:middle;">thumb_up</i>'
  })
   }
});*/