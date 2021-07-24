<footer class="ftco-footer ftco-section" style="background-color:#6ABC81">
  		<div class="container">
  			<div class="row pt-2 pb-2 dir-rtl">
  				<div class="col-md-6 col-lg-4">
  					<div class="ftco-footer-widget">
  						<h2 class="ftco-heading-2"> {{ __('links.about_us') }}</h2>
  						<div class="block-23 mb-3">
  							<p>{{ __('links.footer_text') }}</p>
  						</div>
						  @if( LaravelLocalization::getCurrentLocale() === "en") 
  						<ul class="ftco-footer-social list-unstyled float-md-left mt-3">
						  @else
						  <ul class="ftco-footer-social list-unstyled float-md-right mt-3">
						  @endif
  							<li class="ftco-animate"><a href="#" class="border-white"><span class="icon-twitter"></span></a></li>
  							<li class="ftco-animate"><a href="https://www.facebook.com/Premierupvcsections" class="border-white"><span class="icon-facebook"></span></a></li>
  							<li class="ftco-animate"><a href="https://www.instagram.com/premierupvceg/" class="border-white"><span class="icon-instagram"></span></a></li>
  							<li class="ftco-animate"><a href="#" class="border-white"><span class="icon-google-plus"></span></a></li>
  							<li class="ftco-animate"><a href="#" class="border-white"><span class="icon-map-marker"></span></a></li>
  						</ul>
  					</div>
  				</div>
  				
  				<div class="col-md-6 col-lg-2">
  					<div class="ftco-footer-widget ml-md-4">
  						<h2 class="ftco-heading-2">{{ __('links.site_map') }}</h2>
  						<ul class="list-unstyled">
  							<li><a href="{{ LaravelLocalization::localizeUrl('/contact-us') }}"><span class="ion-ios-arrow-round-forward mr-2"></span> {{ __('links.home') }}</a></li>
  							<li><a href="{{ LaravelLocalization::localizeUrl('/about_us') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>  {{ __('links.about_us') }}</a></li>
  							<li><a href="{{ LaravelLocalization::localizeUrl('/products') }}"><span class="ion-ios-arrow-round-forward mr-2"></span> {{ __('links.products') }}</a></li>
  							<li><a href="{{ LaravelLocalization::localizeUrl('/gallery') }}"><span class="ion-ios-arrow-round-forward mr-2"></span> {{ __('links.gallery') }}</a></li>
  							<li><a href="{{ LaravelLocalization::localizeUrl('/contact-us') }}"><span class="ion-ios-arrow-round-forward mr-2"></span> {{ __('links.contact_us') }}</a></li>
  						</ul>
  					</div>
  				</div>
				  <div class="col-md-6 col-lg-2">
  					<div class="ftco-footer-widget">
  						<h2 class="ftco-heading-2"> {{ __('links.blog') }}</h2>
  						<ul class="list-unstyled">
  							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>UPVC {{ __('links.windows') }}</a></li>
  							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>{{ __('links.noise_reduction') }}</a></li>
  							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>{{ __('links.energy_solution') }}</a></li>
  							<li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>UPVC {{ __('links.advantages') }}</a></li>
  						</ul>
  					</div>
  				</div>
  				<div class="col-md-6 col-lg-4">
  					<div class="ftco-footer-widget">
  						<h2 class="ftco-heading-2"> {{ __('links.news_letter') }}</h2>
						  <form id="formLetter" action="{{ LaravelLocalization::localizeUrl('/send-letter') }}" method="post">
							@csrf
  							<div class="input-group">
  								<input type="text" class="form-control" name="email" placeholder=" {{ __('links.enter_email') }}" aria-label="Input group example" aria-describedby="btnGroupAddon" style="background:rgba(255, 255, 255, 0.1) !important;border:white">
  								<div class="input-group-prepend">
  									<div class="input-group-text bg-white" id="btnGroupAddon"><a href="#" class="color-black" onclick="event.preventDefault(); document.getElementById('formLetter').submit();" > {{ __('links.Subscribe') }}</a></div>
  								</div>
  							</div>
  						</form>
  						<a href="{{asset('uploads/companies')}}/{{$company->company_catalogue_pdf }}" download class="btn btn2 btn-primary mt-2 p-5"> {{ __('links.dawnload_catalog') }}</a>
  						<a href="{{asset('uploads/companies')}}/{{$company->company_profile_pdf }}" download class="btn btn2 btn-primary mt-2 p-5"> {{ __('links.dawnload_profile') }}</a>
  					</div>
  				</div>
  			</div>
  			<div class="row">

  			</div>
  		</div>
  		<div class="col-md-12 text-center pt-3 pb-1" style="background-color:#50A166">
  			<p>
			  @if( LaravelLocalization::getCurrentLocale() === "en")
			 {{ __('links.tade_mark') }}<script>document.write(new Date().getFullYear());</script>  {{ __('links.copy_right') }}
  @else
 
    {{ __('links.tade_mark') }} <script>document.write(new Date().getFullYear());</script> 
	{{ __('links.copy_right') }}

  @endif
  </p>
  		</div>
  	</footer>

  		<!-- loader -->
  		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
