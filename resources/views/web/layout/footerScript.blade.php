<script src="{{ asset('webassets/js/jquery.min.js')}}"></script>
  		<script src="{{ asset('webassets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  		<script src="{{ asset('webassets/js/popper.min.js')}}"></script>
  		<script src="{{ asset('webassets/js/bootstrap.min.js')}}"></script>
  		<script src="{{ asset('webassets/js/jquery.easing.1.3.js')}}"></script>
  		<script src="{{ asset('webassets/js/jquery.waypoints.min.js')}}"></script>
  		<script src="{{ asset('webassets/js/jquery.stellar.min.js')}}"></script>
  		<script src="{{ asset('webassets/js/owl.carousel.min.js')}}"></script>
  		<script src="{{ asset('webassets/js/jquery.magnific-popup.min.js')}}"></script>
  		<script src="{{ asset('webassets/js/aos.js')}}"></script>
  		<script src="{{ asset('webassets/js/jquery.animateNumber.min.js')}}"></script>
  		<script src="{{ asset('webassets/js/scrollax.min.js')}}"></script>
  		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  		<!--<script src="{{ asset('webassets/js/google-map.js')}}"></script>-->

  		<script src="{{ asset('webassets/js/main.js')}}"></script>
		  <!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">function add_chatinline(){var hccid=47139404;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline();</script>
		  @yield('scripts')
	  <script>
	  	$(document).ready(function(){
	  		$('.owl-carousel').owlCarousel({
	  			nav: false,
	  			dots: true,
	  			loop: true,
	  			autoplay: true,
	  			autoplayTimeout: 5000,
	  			margin: 20,
	  			slideSpeed: 3000,
	  			animateIn: 'fadeIn',
	  			animateOut: 'fadeOut',
	  			responsive: {
	  				0:{
	  					items: 1
	  				},
	  				600:{
	  					items: 2
	  				},
	  				960: {
	  					items: 3
	  				}
	  			}
	  		});




	  		var setMinHeight = function(minheight = 0) {
	  			jQuery('.owl-carousel').each(function(i,e){
	  				var oldminheight = minheight;
	  				jQuery(e).find('.owl-item').each(function(i,e){
	  					minheight = jQuery(e).height() > minheight ? jQuery(e).height() : minheight;
	  				});
	  				jQuery(e).find('.item').css("min-height",minheight + "px");
	  				minheight = oldminheight;
	  			});
	  		};

	  			setMinHeight();
	  		});

	  		$(document).on('resize', function(){
	  			setMinHeight();
	  		});
	  </script>
<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
   
  	</body>
</html>
