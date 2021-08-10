@extends('web.layout.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webassets/img/21.jpg')}}');margin-top:-20px">
	  		<div class="overlay"></div>
	  		<div class="container">
	  			<div class="row no-gutters slider-text align-items-center justify-content-center">
	  				<div class="col-md-9 ftco-animate text-center">
	  					<div class="bg-text"></div>
	  					<h1 class="mb-2 bread">{{ __('links.products') }}</h1>
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
          <section class="ftco-section">
	  		<div class="container">
	  			<div class="row dir-rtl">
	  				<div class="col-lg-6 sidebar ftco-animate">
	  					<div class="sidebar-box ftco-animate">
	  						<div class="product__carousel">
	  							<!-- Swiper and EasyZoom plugins start -->
	  							<div class="swiper-container gallery-top " style="width: 100% !important;">
	  								<div class="swiper-wrapper">
                                          @foreach($images as $img)
	  									<div class="swiper-slide">
	  										<a href="javascript:;" >
	  											<img   src="{{asset('uploads/product_imgs')}}/{{$img->image ?? ''}}" alt="" />
	  										</a>
	  									</div>
										@endforeach
	  								</div>
	  								<!-- Add Arrows -->
	  								<div class="swiper-button-next swiper-button-white"></div>
	  								<div class="swiper-button-prev swiper-button-white"></div>
	  							</div>
	  							<div class="swiper-container gallery-thumbs" style="">
	  								<div class="swiper-wrapper">
                                      @foreach($images as $img)
                                      <div class="swiper-slide">
	  										<a href="javascript:;">
	  											<img src="{{asset('uploads/product_imgs')}}/{{$img->image ?? ''}}" alt="" />
	  										</a>
	  									</div>
										@endforeach
	  								</div>
	  							</div>
	  							<!-- Swiper and EasyZoom plugins end -->
	  						</div>

	  					</div>

	  				</div><!-- END COL -->
                      <div class="col-lg-6 sidebar ftco-animate ">
					  <div class="sidebar-box ftco-animate pt-2 ">
						  <h3>@if( LaravelLocalization::getCurrentLocale() === "en")
						 {{$product->en_name}}
								  @else
{{$product->ar_name}}						  @endif</h3>
						  <p>
                          @if( LaravelLocalization::getCurrentLocale() === "en")
						 {{$product->en_description}}
								  @else
{{$product->ar_description}}						  @endif
						  </p>
						  <h3 class="mt-4 ">{{ __('links.information') }}</h3>
						  <table class="table ">
							  <tbody>
								  <tr class="table-light ">
									  <td>{{ __('links.total_thickness') }}</td>
									  <td>2 {{$product->thickness}} {{ __('links.thick_mm') }}</td>
								  </tr>
								  <tr class="table-light ">
									  <td>{{ __('links.chambers') }}</td>
									  <td>3 {{$product->chambers}} {{ __('links.chamber_no') }}</td>
								  </tr>
								  <tr class="table-light ">
									  <td>{{ __('links.glass') }}</td>
									  <td>5{{$product->glass}} {{ __('links.galss_mm') }}</td>
								  </tr>

							  </tbody>
						  </table>
					  </div>

				  </div>
					<!-- .col-md-8 -->

				</div>
			</div>
		</section>

		<section class="ftco-section ">
			<div class="container ">
				<div class="row justify-content-center ">
					<div class="col-md-4 text-center heading-section ftco-animate ">
						<h4 class="features-active ">{{ __('links.description') }}</h4>
					</div>

				</div>
			</div>
		</section>

		<section class="ftco-section pb-5 mb-4 pt-5 " style="background-color:#FBF8F8; ">
			<div class="container ">
			  <div class="row justify-content-center mb-4 pb-2 ">
				  <div class="col-md-8 text-center heading-section ftco-animate ">
					  <h3 class="clr-green ">{{ __('links.key_features') }}</h3>
				  </div>
			  </div>
				<div class="row ">
                    @foreach($features as $key)
				  <div class="col-md-6 ftco-animate text-center">
					  <div  class="py-5 pr-md-4 ftco-animate ">
						  <h6 class="mb-4 "><strong>@if( LaravelLocalization::getCurrentLocale() === "en")
						 {{$key->en_title}}
								  @else
{{$key->ar_title}}						  @endif </strong></h6>
						  <p>
                          @if( LaravelLocalization::getCurrentLocale() === "en")
						 {{$key->en_feature}}
								  @else
{{$key->ar_feature}}						  @endif
						  </p>
					  </div>
					  <!-- <div>
						  <h6 class="mb-4 "><strong>Easy and high-quality installation performance</strong></h6>
						  <p>
							Fully welded angles, Rail – integrated frame
						  </p>
					  </div> -->
				  </div>
				  @endforeach
				</div>
			</div>
		</section>

		<section class="ftco-section pb-5 mb-4 pt-5 ">
			<div class="container ">
				<div class="row justify-content-center mb-4 pb-2 ">
					<div class="col-md-8 text-center heading-section ftco-animate ">
						<h3 class="clr-green ">{{ __('links.product_details') }}</h3>
					</div>
				</div>
				<div class="row justify-content-center ">
					<div class="col-md-12 text-center heading-section ftco-animate ">
						<div class="py-5 pr-md-4 ftco-animate ">
							<img class="pro-img w-100" src="{{asset('uploads/products')}}/{{$product->product_details_img ?? ''}}" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section pb-5 mb-4 pt-5 ">
			<div class="container ">
				<div class="row justify-content-center mb-4 pb-2 ">
					<div class="col-md-8 text-center heading-section ftco-animate ">
						<h3 class="clr-green ">{{ __('links.profile_information') }}</h3>
					</div>
				</div>
				<div class="row justify-content-center ">
					<div class="col-md-12 text-center heading-section ftco-animate ">
						<div class="py-5 pr-md-4 ftco-animate ">
							<img class="pro-img w-100" src="{{asset('uploads/products')}}/{{$product->product_profile_img ?? ''}} " />
						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftc-no-pb " style="background-color:#FBF8F8; ">
			<div class="container ">
				<div class="row d-flex ">
					<div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate ">
						<!--<h2 class="mb-4 ">What We Offer</h2>-->
						<!--<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>-->
						<div class="row mt-5  {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'dir-rtl' : ''}}">
							<div class="col-lg-6 ">
								<div class="services-3 d-flex ">
									<div class="icon mt-2 d-flex justify-content-center align-items-center "><span class="icon-file "></span></div>
									<div class="text px-3 pt-2 pdf ">
										<p>  @if( LaravelLocalization::getCurrentLocale() === "en")
                                            <a href="{{asset('uploads/companies')}}/{{$company->company_catalogue_pdf }}" download >{{ __('links.catalogue_pdf') }}</a>
                                            @else
                                            <a href="{{asset('uploads/companies')}}/{{$company->ar_catalogue_pdf }}" download >{{ __('links.catalogue_pdf') }}</a>
                                            @endif
                                            @if( LaravelLocalization::getCurrentLocale() === "en")
                                        <a href="{{asset('uploads/companies')}}/{{$company->company_catalogue_pdf }}" download ><span class="icon-download pt-2 "></span></a>
								  @else
                                  <a href="{{asset('uploads/companies')}}/{{$company->ar_catalogue_pdf}}" download ><span class="icon-download pt-2 "></span></a>					  @endif

                                            </p>
									</div>
								</div>
							</div>

                            <div class="col-lg-6 ">
								<div class="services-3 d-flex ">
									<div class="icon mt-2 d-flex justify-content-center align-items-center "><span class="icon-file "></span></div>
									<div class="text px-3 pt-2 pdf ">
										<p>
                                            <a href="{{asset('uploads/companies')}}/{{$company->company_profile_pdf }}" download >{{ __('links.dawnload_profile') }}</a>


                                        <a href="{{asset('uploads/companies')}}/{{$company->company_profile_pdf }}" download ><span class="icon-download pt-2 "></span></a>

                                            </p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ">
			<div class="container ">
				<div class="row ">
					<div class="col-lg-12 ftco-animate ">
						<h3 class="mb-4  {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">{{ __('links.other_product') }}</h3>
						<div class="row {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'dir-rtl' : ''}}">
                            @foreach($others as $other)
							<div class="col-md-6 col-lg-2 ftco-animate ">
								<div class="blog-entry ">
									<a  class="block-20 d-flex align-items-end related-img " style="background-image: url( '{{asset('uploads/products')}}/{{$other->master_image ?? ''}}'); "></a>
									<div class="text bg-white p-4 ">
										<h3 class="heading text-center "><a href="{{ LaravelLocalization::localizeUrl('/single-product/'.$other->id) }}"  class="text-center font-18 "> @if( LaravelLocalization::getCurrentLocale() === "en")
						 {{$other->en_name}}
								  @else
{{$other->ar_name}}						  @endif</a></h3>
									</div>
								</div>
							</div>
						@endforeach

					</div>
				</div>
			</div>
		</section>
          @endsection

          @section('scripts')
          <script src="https://k1ngzed.com/dist/swiper/swiper.min.js"></script>
	  	<script src="https://k1ngzed.com/dist/EasyZoom/easyzoom.js"></script>
          <script>
			// product Gallery and Zoom

			// activation carousel plugin
			var galleryThumbs = new Swiper('.gallery-thumbs', {
				spaceBetween: 5,
				freeMode: true,
				watchSlidesVisibility: true,
				watchSlidesProgress: true,
				breakpoints: {
					0: {
						slidesPerView: 3,
					},
					992: {
						slidesPerView: 4,
					},
				}
			});
			var galleryTop = new Swiper('.gallery-top', {
				spaceBetween: 10,
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				thumbs: {
					swiper: galleryThumbs
				},
			});
			// change carousel item height
			// gallery-top
			let productCarouselTopWidth = $('.gallery-top').outerWidth();
			$('.gallery-top').css('height', productCarouselTopWidth);

			// gallery-thumbs
			let productCarouselThumbsItemWith = $('.gallery-thumbs .swiper-slide').outerWidth();
			$('.gallery-thumbs').css('height', productCarouselThumbsItemWith);

			// activation zoom plugin
			var $easyzoom = $('.easyzoom').easyZoom();
		</script>
@endsection
