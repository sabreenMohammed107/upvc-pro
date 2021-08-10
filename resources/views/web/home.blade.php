@extends('web.layout.main')
@section('content')
<section class="home-slider owl-carousel">
@foreach($homeSliders as $slider)
  		<div class="slider-item  {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}" style="background-image:url({{asset('uploads/home-sliders')}}/{{$slider->image }});max-height:470px">
  			<div class="container">
  				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
  					<div class="col-md-5 ftco-animate">
  						<div class="bg-text"></div>
  						<h2 class="pl-2 pt-2">@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$slider->en_title}}
						  @else
						  {{$slider->ar_title}}
						  @endif</h2>
  						<p class="pl-2">@if( LaravelLocalization::getCurrentLocale() === "en")
						  {!! $slider->en_text !!}
						  @else
						  {!! $slider->ar_text !!}
						  @endif</p>
  						<p class="pl-2"><a href="{{ LaravelLocalization::localizeUrl('/contact-us') }}" class="btn btn-primary">{{ __('links.contact_us') }}</a></p>
  					</div>
  				</div>
  			</div>
  		</div>
  	@endforeach


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
  	<section class="ftco-section pt-4 ftc-no-pb mb-4">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-4">
  					<div style="width:290px;">
  						<div class="layer-1" style="">
  							<div class="layer-2" style=""></div>
  						</div>
  						<img class="img-layer" src="{{asset('uploads/companies')}}/{{$company->about_image }}" alt="no-image">
  					</div>
  				</div>
  				<div class="col-md-8 py-5 pr-md-4 ftco-animate {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">
  					<h1 class="mb-4">{{ __('links.about_us') }}</h1>
  					<p>
					  @if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$company->about_en_company}}
						  @else
						  {{$company->about_ar_company}}
						  @endif					</p>
  					<p>
					  @if( LaravelLocalization::getCurrentLocale() === "en")
					  <a href="{{asset('uploads/companies')}}/{{$company->company_catalogue_pdf }}" download class="btn btn2 btn-primary">{{ __('links.dawnload_catalog') }}</a>
						  @else
						  <a href="{{asset('uploads/companies')}}/{{$company->ar_catalogue_pdf }}" download class="btn btn2 btn-primary">{{ __('links.dawnload_catalog') }}</a>
						  @endif
						</p>
  				</div>
  			</div>
  		</div>
  	</section>
  	<section class="ftco-section"style="background-color:#F9F9F9">
  		<div class="container">
  			<div class="row justify-content-center mb-4 pb-2">
  				<div class="col-md-8 text-center heading-section ftco-animate">
  					<h2 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">{{ __('links.products') }}</h2>
				  	<h3 >{{ __('links.products') }}</h3>
  				</div>
  			</div>
  			<div class="row  {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'dir-rtl' : ''}}">
			  @foreach($products as $product)
			  <div class="col-md-4 course ftco-animate">
			  		<div class="product">
			  			<div class="img product-img" style="background-image: url('{{asset('uploads/products')}}/{{$product->master_image ?? ''}}');"></div>
			  			<div class="text pt-4">
			  				<div class="row">
			  					<div class="col-md-8"><h3> @if( LaravelLocalization::getCurrentLocale() === "en")
						 {{$product->category->en_name ?? ''}}
								  @else
{{$product->category->ar_name ?? ''}}						  @endif</h3></div>
			  					<div class="col-md-4"><p>{{ __('links.show_more') }}</p></div>
			  				</div>
			  			</div>
			  			<div class="product-overlay hvr-sweep-to-bottom">
			  				<div class="product-overlay-text">
			  					<h3> @if( LaravelLocalization::getCurrentLocale() === "en")
								  {{$product->category->en_name ?? ''}}
								  @else
								  {{$product->category->ar_name ?? ''}}							  @endif</h3>
			  					<p>
								  @if( LaravelLocalization::getCurrentLocale() === "en")
						 {{$product->en_description}}
								  @else
{{$product->ar_description}}						  @endif</p>
							    <p><a href="{{ LaravelLocalization::localizeUrl('/single-product/'.$product->id) }}" class="btn btn-primary2">{{ __('links.show_more') }}</a></p>
			  				</div>
			  			</div>
			  		</div>
			  	</div>

			  @endforeach
  			</div>
  		</div>
  	</section>

  	<section class="ftco-section ftco-counter" id="section-counter" style="background-color:#8FCDA0 !important;">
  		<div class="container">
  			<div class="row d-md-flex align-items-center justify-content-center">
  				<div class="col-lg-12">
  					<div class="row d-md-flex align-items-center dir-rtl">
						  @foreach($numbers as $number)
  						<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
  							<div class="block-18">
  								<div class="icon"><span class="flaticon-doctor"></span></div>
  								<div class="text">
  									<strong class="number" data-number="{{$number->no_value}}">0</strong>
  									<span>@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$number->en_name}}
						  @else
						  {{$number->ar_name}}
						  @endif</span>
  								</div>
  							</div>
  						</div>
  						@endforeach
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  	<section class="ftco-section ftco-no-pt ftc-no-pb mb-4">
  		<div class="container">
  			<div class="row dir-rtl">
			  	<div class="col-md-8 py-5 pr-md-4 ftco-animate">
				<h2 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">{{ __('links.color_collection') }}</h2>
			  		<h2 class="mb-4">{{ __('links.color_collection') }}</h2>
			  		<p>
					  {{ __('links.color_text') }}
													 </p>

				<div>
					<img class="pt-4" src="{{ asset('webassets/img/7.png')}}" alt="no-image">
					<img class="pt-4" src="{{ asset('webassets/img/8.png')}}" alt="no-image">
					<img class="pt-4" src="{{ asset('webassets/img/9.png')}}" alt="no-image">
					<img class="pt-4" src="{{ asset('webassets/img/10.png')}}" alt="no-image">
				</div>
			  	</div>
  				<div class="col-md-4">
  					<div>
  						<img class="pt-4 mt-4" src="{{ asset('webassets/img/6.png')}}" alt="no-image">
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  	<section class="ftco-section" style="background-color:#FBF8F8">
  		<div class="container">
		  	<div class="row justify-content-center mb-4 pb-2">
		  		<div class="col-md-8 text-center heading-section ftco-animate">
		  			<h2 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">{{ __('links.why_us') }}</h2>
		  			<h3>{{ __('links.why_us') }}</h3>
		  		</div>
		  	</div>
  			<div class="row d-flex dir-rtl">
  				<div class="col-md-4 wrap-about py-5 pr-md-4 ftco-animate">
					  <div class="row mt-5">

					  @foreach($whyRows as $index=>$whyRow)
					  @if($index <= 2)
  						<div class="col-lg-12">
  							<div class="services-2 d-flex">
  								<div class="icon mt-2 d-flex justify-content-center align-items-center"><a href="#" class=""></a><span>{{$index+1}}</span></div>
  								<div class="text px-3">
									<a href="#"><h3 class="hvr-wobble-skew">@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$whyRow->en_title}}
						  @else
						  {{$whyRow->ar_title}}
						  @endif </h3></a>
								  	<p>
									  @if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$whyRow->en_subTitle}}
						  @else
						  {{$whyRow->ar_subTitle}}
						  @endif
														  	</p>
  								</div>
  							</div>
  						</div>
						   @else
						  @break
						  @endif
  					@endforeach
  					</div>
  				</div>
			  	<div class="col-md-4 wrap-about d-flex align-items-stretch">
			  		<div class="img mt-5 pt-4"><img src="{{ asset('webassets/img/11.png')}}" alt="no-image" /></div>
			  	</div>
			  	<div class="col-md-4 wrap-about py-5 pr-md-4 ftco-animate">
			  		<div class="row mt-5">


					  @foreach($whyRows as $index=>$whyRow)
					  @if($index >= 3)
  						<div class="col-lg-12">
  							<div class="services-2 d-flex">
  								<div class="icon mt-2 d-flex justify-content-center align-items-center"><a href="#" class=""></a><span>{{$index+1}}</span></div>
  								<div class="text px-3">
									<a href="#"><h3 class="hvr-wobble-skew">@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$whyRow->en_title}}
						  @else
						  {{$whyRow->ar_title}}
						  @endif </h3></a>
								  	<p>
									  @if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$whyRow->en_subTitle}}
						  @else
						  {{$whyRow->ar_subTitle}}
						  @endif
														  	</p>
  								</div>
  							</div>
  						</div>
						  @else
						  @continue
						  @endif
  					@endforeach
			  		</div>
			  	</div>
  			</div>
  		</div>
  	</section>

  	<section class="ftco-section ftco-counter ftco-no-pt img" id="section-counter" style="background-color:#8FCDA0" data-stellar-background-ratio="0.5">
  		<div class="mb-5">
  			<div class="row justify-content-center mb-5 pb-2 d-flex pl-3">
  				<div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5  mt-5 {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">
  					<h3 class="mb-4 text-white"> @if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$homeVedio->en_title}}
						  @else
						  {{$homeVedio->ar_title}}
						  @endif </h3>
				  	<p>
					  @if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$homeVedio->en_text}}
						  @else
						  {{$homeVedio->ar_text}}
						  @endif 				  	</p>

  				</div>
			  	<div class="col-md-6 align-items-stretch d-flex">
			  		<div class="img img-video d-flex align-items-center" style="background-image: url('{{asset('uploads/home_vedios')}}/{{$homeVedio->image ?? ''}}');width:700px;height:400px">
			  			<div class="video justify-content-center">
			  				<a href="{{$homeVedio->vedio}}" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
			  					<span class="ion-ios-play"></span>
			  				</a>
			  			</div>
			  		</div>
			  	</div>
  			</div>
  		</div>
  	</section>

	<section class="ftco-section" style="margin-top:-270px" > <!---->
  		<div class="container">
  			<div class="row justify-content-center pb-2">
  				<div class="col-md-8 text-center heading-section ftco-animate">
  					<h2 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">{{ __('links.feedback') }}</h2>
  					<h3 class="text-white">{{ __('links.customer_feedback') }}</h3>
  				</div>
  			</div>
  			<div class="row testimonials">
  				<div class="owl-carousel owl-carousel2">
					  @foreach($feedBacks as $feedback)
  					<div class="item">
  						<h3>@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$feedback->en_name}}
						  @else
						  {{$feedback->ar_name}}
						  @endif</h3>
  						<img class="img-slider" src="{{ asset('webassets/img/no-profile-img.gif')}}" alt="Testimonial" />
					  	<p>@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$feedback->en_review}}
						  @else
						  {{$feedback->ar_review}}
						  @endif</p>
  					</div>
                  @endforeach
  				</div>
  			</div>
  		</div>
  	</section>

  	<section class="ftco-section" style="background-color:#FBF8F8;">
  		<div class="container">
		  	<div class="row justify-content-center mb-4 pb-2">
		  		<div class="col-md-8 text-center heading-section ftco-animate">
		  			<h2 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">{{ __('links.blog') }}</h2>
		  			<h3>{{ __('links.blog') }}</h3>
		  		</div>
		  	</div>
  			<div class="row dir-rtl">
  				<div class="col-lg-6 ftco-animate">
				  	<div class="product" style="height:368px;">
				  		<div>
				  			<img src="{{asset('uploads/blogs')}}/{{$blog->image ?? ''}}" alt="no-image" class="img-fluid" style="height:368px;">
				  		</div>
				  		<div class="mt-n5 pr-3 text">
				  			<h4 class="text-white">@if( LaravelLocalization::getCurrentLocale() === "en")
                                {!! $blog->en_title ?? ''!!}
						  @else
						  {!! $blog->ar_title ?? '' !!}
						  @endif</h4>
				  			<p class="text-white px-2">@if( LaravelLocalization::getCurrentLocale() === "en")
                                {!! str_limit($blog->en_text ?? '', $limit = 100, $end = '...') !!}
						  @else
						  {!! str_limit($blog->ar_text ?? '', $limit = 100, $end = '...') !!}
						  @endif</p>
				  		</div>
				  		<div class="product-overlay hvr-sweep-to-bottom">
				  			<div class="product-overlay-text px-2">
				  				<h3>@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$blog->en_title ?? ''}}
						  @else
						  {{$blog->ar_title ?? ''}}
						  @endif</h3>
				  				<p>
								  @if( LaravelLocalization::getCurrentLocale() === "en")
                          {!! str_limit($blog->en_text ?? '', $limit = 150, $end = '...') !!}
						  @else
						  {!! str_limit($blog->ar_text ?? '', $limit = 150, $end = '...') !!}
						  @endif
										  				</p>
														  @if($blog)
				  				<p><a href="{{ LaravelLocalization::localizeUrl('/single-blog/'.$blog->id ) }}" class="btn btn-primary2"><span class="ion-ios-play"></span>{{ __('links.show_more') }}</a></p>
				  			@endif
							</div>
				  		</div>
				  	</div>
  				</div> <!-- .col-md-6 -->
  				<div class="col-lg-6 sidebar ftco-animate">
  					<div class="sidebar-box ftco-animate">
						  @foreach($blogs as $blog)
  						<div class="block-21 mb-4 d-flex">
						  	<div class="product" style="max-height:171px;">
						  		<a>
						  			<img src="{{asset('uploads/blogs')}}/{{$blog->thumbnail ?? ''}}" alt="no-image" class="img-article" />
						  		</a>
						  		<div class="product-overlay hvr-sweep-to-bottom">
						  			<div class="product-overlay-text">
						  				<p></p>
						  				<a href="{{ LaravelLocalization::localizeUrl('/single-blog/'.$blog->id) }}" class="btn btn-primary2">{{ __('links.show_more') }}</a>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="text pt-2 px-2">
						  		<h3 class="heading pr-3"><a href="#">@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$blog->en_title ?? ''}}
						  @else
						  {{$blog->ar_title ?? ''}}
						  @endif</a></h3>
						  		<p class="px-3">@if( LaravelLocalization::getCurrentLocale() === "en")
                          {!! str_limit($blog->en_text ?? '', $limit = 100, $end = '...') !!}
						  @else
						  {!! str_limit($blog->ar_text ?? '', $limit = 100, $end = '...') !!}
						  @endif</p>
						  	</div>
  						</div>
						  @endforeach

  					</div>
  				</div><!-- END COL -->
  			</div>
  		</div>
  	</section>

  	<section class="ftco-section" style="background-color:#FBF8F8;">
  		<div class="container">
  			<div class="row justify-content-center mb-4 pb-2">
  				<div class="col-md-8 text-center heading-section ftco-animate">
  					<h2 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">{{ __('links.materials') }}</h2>
  					<h3>{{ __('links.best_materials') }}</h3>
  				</div>
  			</div>
  			<div class="row align-items-center h-100">
  				<div class="container container2 rounded">
  					<div class="slider">
  						<div class="logos">
							  @foreach($materials as $material)
  							<img style="padding: 25px; height: 150px; width: 30%;display: inline-block;" alt="no-image" src="{{asset('uploads/materials')}}/{{$material->logo }}" />
  							@endforeach
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

@endsection
