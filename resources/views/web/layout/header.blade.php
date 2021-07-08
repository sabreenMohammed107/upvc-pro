<div class="bg-top navbar-light">
  		<div style="background-color:#51be78;z-index:22;">
  			<div class="container">
  				<div class="row dir-rtl">
  					<div class="col-lg-9 col-sm-9 col-9 d-flex align-items-center">
  						<ul class="mobile-social pl-0">
						  <li><a href="{{$company->facebook_url ?? ''}}" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="{{$company->linkedin_url ?? ''}}" target="_blank" ><i class="icon-linkedin"></i></a></li>
							<li><a href="{{$company->instgram_url ?? ''}}" target="_blank"><i class="icon-instagram"></i></a></li>
						  <li><a href="{{$company->whatsapp ?? ''}}" target="_blank"><i class="icon-whatsapp"></i></a></li>
  						</ul>
  					</div>
  					<div class="col-lg-3 col-sm-3 col-3 d-flex justify-content-md-end">
  						<ul class="list-unstyled float-md-left float-lft mt-2">
						  @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    @if( LaravelLocalization::getCurrentLocale() != "ar" && $localeCode == "ar")    

									<a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ffffff;font-size:15px !important"> {{ __('links.en') }} </a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
 
									    <!--{{ $properties['native'] }}-->

                                        {{ __('links.ar') }}
                                    </a>
									</div>
                                    @endif
                                    @if( LaravelLocalization::getCurrentLocale() != "en" && $localeCode == "en")
									<a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ffffff;font-size:15px !important"> {{ __('links.ar') }} </a>  
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                    {{ __('links.en') }}                                    </a>
									</div>
                                    @endif
                                    <!--|-->
                                </li>
                                @endforeach
  						
  						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="container mobile-show" style="z-index:1 !important">
  			<div class="row">
  				<div class="col-lg-4 col-sm-4 col-4 d-flex align-items-center" ">
  					<a class="navbar-brand" href="index.html"><img src="{{ asset('webassets/img/logo.jpg')}}" alt=""></a>
  				</div>
  				<div class="col-lg-8 col-sm-8 col-8 d-flex justify-content-md-end">
  					<ul class="mobile-info">
  						<li><a href="#"><i class="icon-phone"></i></a><span> {{$company->header_phone ?? ''}}</span></li>
  						<li><a href="#"><i class="icon-envelope"></i></a><span> {{$company->email ?? ''}}</span></li>
  					</ul>
  				</div>
  			</div>
  		</div>
  		<div class="container mobile-hide" style="z-index:1 !important">
  			<div class="row no-gutters d-flex align-items-center align-items-stretch dir-rtl">
  				<div class="col-md-4 d-flex align-items-center py-2">
  					<a class="navbar-brand" href="index.html"><img src="{{ asset('webassets/img/logo.jpg')}}" alt=""></a>
  				</div>
  				<div class="col-lg-8 d-block">
  					<div class="row d-flex">
  						<div class="col-md d-flex topper align-items-center align-items-stretch py-2">
  							<div class="icon d-flex justify-content-center align-items-center"><span class="icon-map-marker"></span></div>
  							<div class="text br-2">
  								<span> {{ __('links.address') }}</span>
  								<span> @if( LaravelLocalization::getCurrentLocale() === "en") 
								  {{$company->header_en_address ?? ''}}
								  @else
								  {{$company->header_ar_address ?? ''}}
								  @endif</span>
  							</div>
  						</div>
  						<div class="col-md d-flex topper align-items-center align-items-stretch py-2">
  							<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone"></span></div>
  							<div class="text br-2">
  								<span> {{ __('links.phone') }}</span>
  								<span> {{$company->header_phone ?? ''}}</span>
  							</div>
  						</div>
  						<div class="col-md d-flex topper align-items-center align-items-stretch py-2">
  							<div class="icon d-flex justify-content-center align-items-center"><span class="icon-envelope"></span></div>
  							<div class="text pr-2">
  								<span> {{ __('links.email') }}</span>
  								<span> {{$company->email ?? ''}}</span>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light dir-rtl" id="ftco-navbar">
  		<div class="container d-flex align-items-center just px-4">
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
  				<span class="oi oi-menu"></span> {{ __('links.menu') }}
  			</button>
  			<div class="collapse navbar-collapse" id="ftco-nav">
  				<ul class="navbar-nav">
  					<li class="nav-item nav-hvr"><a href="{{ LaravelLocalization::localizeUrl('/') }}" class="nav-link">{{ __('links.home') }}</a></li>
  					<li class="nav-item nav-hvr"><a href="about.html" class="nav-link">{{ __('links.about_us') }}</a></li>
  					<li class="nav-item nav-hvr"><a href="product.html" class="nav-link">{{ __('links.products') }}</a></li>
  					<li class="nav-item nav-hvr"><a href="{{ LaravelLocalization::localizeUrl('/gallery') }}" class="nav-link">{{ __('links.gallery') }}</a></li>
  					<li class="nav-item nav-hvr"><a href="blog.html" class="nav-link hvr">{{ __('links.blog') }}</a></li>
  					<li class="nav-item nav-hvr"><a href="{{ LaravelLocalization::localizeUrl('/parteners') }}" class="nav-link">{{ __('links.partenters') }}</a></li>
  					<li class="nav-item nav-hvr"><a href="{{ LaravelLocalization::localizeUrl('/contact-us') }}" class="nav-link">{{ __('links.contact_us') }}</a></li>
  				</ul>
  			</div>
  		</div>
  	</nav>
  	<!-- END nav -->