@extends('web.layout.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webassets/img/21.jpg')}}');margin-top:-20px">
	  		<div class="overlay"></div>
	  		<div class="container">
	  			<div class="row no-gutters slider-text align-items-center justify-content-center">
	  				<div class="col-md-9 ftco-animate text-center">
	  					<div class="bg-text"></div>
	  					<h1 class="mb-2 bread">{{ __('links.gallery_title') }}</h1>
	  				</div>
	  			</div>
	  		</div>
	  	</section>
		  @if(Session::has('flash_success'))
                <div class="col-lg-12">
                    <div class="alert alert-success alert-block {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">
                    <button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
                    <strong ><i class="fa fa-check-circle"></i> {!! session('flash_success') !!}</strong>
                    </div>
                </div>
            @endif
            @if(Session::has('flash_danger'))
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-block {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">
                    <button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
                    <strong ><i class="fa fa-info-circle"></i> {!! session('flash_danger') !!}</strong>
                    </div>
                </div>
            @endif
	  	<section class="ftco-gallery mt-3">
	  		<div class="container-wrap container">
	  			<div class="row no-gutters dir-rtl">
                  @foreach($images as $image)
	  				<div class="col-md-4 ftco-animate p-4">
	  					<a href="img/gallary/1.jpg" class="gallery image-popup img d-flex align-items-center height-2" style="background-image: url({{asset('uploads/galleries')}}/{{$image->image }});">
	  						<div class="icon mb-4 d-flex align-items-center justify-content-center">
	  							<span class="icon-instagram"></span>
	  						</div>
	  					</a>
	  				</div>
	  				
	  			@endforeach
	  				
				
					
	  			</div>
				
	  		</div>
	  	</section>

	  	<section class="ftco-section ftco-counter img" id="section-counter" style="background-color:#F9F9F9">
	  		<div class="container">
				<div class="row justify-content-center mb-4 pb-2">
					<div class="col-md-8 text-center heading-section ftco-animate">
						<h1 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">{{ __('links.our_vedios') }}</h1>
						<h3>{{ __('links.our_vedios') }}</h3>
					</div>
				</div>
	  			<div class="row justify-content-center pb-2 d-flex dir-rtl">
                      @foreach($vedios as $vedio)
	  				<div class="col-md-4 align-items-stretch d-flex ftco-animate p-4">
	  					<div class="img img-video d-flex align-items-center height-2" style="background-image: url({{asset('uploads/galleries')}}/{{$vedio->image }})">
	  						<div class="video justify-content-center">
	  							<a href="{{asset('uploads/galleries')}}/{{$vedio->vedio }}" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
	  								<span class="ion-ios-play"></span>
	  							</a>
	  						</div>
	  					</div>
	  				</div>
					@endforeach
				
	  			</div>

	  		</div>
	  	</section>
@endsection