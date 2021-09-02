@extends('web.layout.main')
@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url('{{ asset('webassets/img/21.jpg') }}');margin-top:-20px">
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
    @if (Session::has('flash_success'))
        <div class="col-lg-12">
            <div
                class="alert alert-success alert-block {{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'text-right' : '' }}">
                <button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
                <strong><i class="fa fa-check-circle"></i> {!! session('flash_success') !!}</strong>
            </div>
        </div>
    @endif
    @if (Session::has('flash_danger'))
        <div class="col-lg-12">
            <div
                class="alert alert-danger alert-block {{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'text-right' : '' }}">
                <button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
                <strong><i class="fa fa-info-circle"></i> {!! session('flash_danger') !!}</strong>
            </div>

        </div>
    @endif
    <section class="ftco-section">
        <div class="container">
            <div class="row dir-rtl">
                <div class="col-lg-6 sidebar ftco-animate">
                    @if ($images[0])
                        <img src="{{ asset('uploads/product_imgs/' . $images[0]->image) }}" alt="test" class="w-100"
                            height="400px" />

                    @endif

                </div><!-- END COL -->
                <div class="col-lg-6 sidebar ftco-animate ">
                    <div class="sidebar-box ftco-animate pt-2 ">
                        <h3>
                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                {{ $product->en_name }}
                            @else
                                {{ $product->ar_name }} @endif
                        </h3>
                        <p>
                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                {{ $product->en_description }}
                            @else
                                {{ $product->ar_description }} @endif
                        </p>
                        <h3 class="mt-4 ">{{ __('links.information') }}</h3>
                        <table class="table ">
                            <tbody>
                                <tr class="table-light ">
                                    <td>{{ __('links.total_thickness') }}</td>
                                    <td>{{ $product->thickness }} {{ __('links.thick_mm') }}</td>
                                </tr>
                                <tr class="table-light ">
                                    <td>{{ __('links.chambers') }}</td>
                                    <td>{{ $product->chambers }} {{ __('links.chamber_no') }}</td>
                                </tr>
                                <tr class="table-light ">
                                    <td>{{ __('links.glass') }}</td>
                                    <td>{{ $product->glass }} {{ __('links.galss_mm') }}</td>
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
						<!--<h4 class="features-active ">{{ __('links.description') }}</h4>-->
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
                @foreach ($features as $key)
                    <div class="col-md-6 ftco-animate text-center">
                        <div class="py-5 pr-md-4 ftco-animate ">
                            <h6 class="mb-4 "><strong>
                                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                                        {{ $key->en_title }}
                                    @else
                                        {{ $key->ar_title }} @endif
                                </strong></h6>
                            <p>
                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {{ $key->en_feature }}
                                @else
                                    {{ $key->ar_feature }} @endif
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

                        <img class="pro-img w-100" src="{{ asset('uploads/products/' . $product->product_details_img) }}" />
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

                        <img class="pro-img w-100" src="{{ asset('uploads/products/' . $product->product_profile_img) }}" />
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
									<a href="{{ LaravelLocalization::localizeUrl('/single-product/'.$other->id) }}" class="block-20 d-flex align-items-end related-img " style="background-image: url( '{{asset('uploads/products')}}/{{$other->master_image ?? ''}}'); "></a>
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

{{-- Single Products Design Eidts --}}
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-7 ftco-animate">
                <div class="mb-2">
                    <p>
                        <img src="{{ asset('uploads/product_imgs/70.jpg') }}" alt="" class="img-fluid">
                    </p>
                    <div>
                    </div>
                </div>

            </div>

            <!-- .col-md-8 -->

            <div class="col-lg-4 sidebar ftco-animate">
              <div class="sidebar-box ftco-animate pt-2 fadeInUp ftco-animated">
                  <h3>
                      SLIDING WINDOW PRE-S 120
                  </h3>
                  <p>
                      Improve performance in every single way
                  </p>
                  <h3 class="mt-4 ">Information</h3>
                  <table class="table ">
                      <tbody>
                          <tr class="table-light ">
                              <td>Total thickness</td>
                              <td class="clr-mgreen">|</td>
                              <td class="clr-mgreen">2.5 mm</td>
                          </tr>
                          <tr class="table-light ">
                              <td>Chambers</td>
                              <td class="clr-mgreen">|</td>
                              <td class="clr-mgreen">3 chamber</td>
                          </tr>
                          <tr class="table-light ">
                              <td>Glass</td>
                              <td class="clr-mgreen">|</td>
                              <td class="clr-mgreen">5 - 30 mm</td>
                          </tr>

                      </tbody>
                  </table>
              </div>
                </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <h3 class="mb-4">Related Product</h3>
        <div class="row">
            <div class="col-lg-3 ftco-animate">
                <div>
                    <p><img src="{{ asset('uploads/product_imgs/3.PNG') }}" alt="" class="img-fluid"></p>
                    <h5 class="clr-green mt-2"><a href="#" class="font-18">SLIDING WINDOW PRE-S 120</a></h5>
                </div>
            </div>
            <div class="col-lg-3 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <div class="block-21 mb-2 d-flex">
                        <a class="blog-img blog-img2 mr-4" style="background-image:url( '{{ asset('uploads/products/r3.PNG') }}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="blog-single4.html" class="clr-grey">SLIDING WINDOW PRE-S 120</a></h3>
                        </div>
                    </div>

                    <div class="block-21 mb-2 d-flex">
                        <a class="blog-img blog-img2 mr-4" style="background-image:url( '{{ asset('uploads/products/r3.PNG') }}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="blog-single4.html" class="clr-grey">SLIDING WINDOW PRE-S 120</a></h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 ftco-animate">
                <div>
                    <p><img src="{{ asset('uploads/product_imgs/3.PNG') }}" alt="" class="img-fluid"></p>
                    <h5 class="clr-green mt-2"><a href="#" class="font-18">SLIDING WINDOW PRE-S 120</a></h5>
                </div>
            </div>
            <div class="col-lg-3 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <div class="block-21 mb-2 d-flex">
                        <a class="blog-img blog-img2 mr-4" style="background-image:url( '{{ asset('uploads/products/r3.PNG') }}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="blog-single4.html" class="clr-grey">SLIDING WINDOW PRE-S 120</a></h3>
                        </div>
                    </div>

                    <div class="block-21 mb-2 d-flex">
                        <a class="blog-img blog-img2 mr-4" style="background-image:url( '{{ asset('uploads/products/r3.PNG') }}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="blog-single4.html" class="clr-grey">SLIDING WINDOW PRE-S 120</a></h3>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h3>Related Products</h3>
            </div>
        </div>
        <div class="row testimonials">
            <div class="owl-carousel owl-carousel2">
                <div class="item item2">
                    <img class="mb-2" src="{{ asset('uploads/product_imgs/3.PNG') }}" alt="" />
                    <h5>SLIDING WINDOW PRE-S 120</h3>
                </div>
                <div class="item item2">
                    <img class="mb-2" src="{{ asset('uploads/product_imgs/3.PNG') }}" alt="" />
                    <h5>SLIDING WINDOW PRE-S 120</h3>
                </div>
                <div class="item item2">
                    <img class="mb-2" src="{{ asset('uploads/product_imgs/3.PNG') }}" alt="" />
                    <h5>SLIDING WINDOW PRE-S 120</h3>
                </div>
                <div class="item item2">
                    <img class="mb-2" src="{{ asset('uploads/product_imgs/3.PNG') }}" alt="" />
                    <h5>SLIDING WINDOW PRE-S 120</h3>
                </div>
                <div class="item item2">
                    <img class="mb-2" src="{{ asset('uploads/product_imgs/3.PNG') }}" alt="" />
                    <h5>SLIDING WINDOW PRE-S 120</h3>
                </div>
                <div class="item item2">
                    <img class="mb-2" src="{{ asset('uploads/product_imgs/3.PNG') }}" alt="" />
                    <h5>SLIDING WINDOW PRE-S 120</h3>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ftco-animate">
                <h3 class="mb-4">Related Product</h3>
                <div class="row">
                    <div class="col-md-6 col-lg-2 ftco-animate">
                        <div class="blog-entry">
                            <a href="#" class="block-20 d-flex align-items-end related-img" style="background-image: url( '{{ asset('uploads/products/3.PNG') }}');"></a>
                            <div class="text bg-white p-4">
                                <h3 class="heading text-center"><a href="" class="clr-green text-center">SLIDING WINDOW PRE-S 120</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 ftco-animate">
                        <div class="blog-entry">
                            <a href="#" class="block-20 d-flex align-items-end related-img" style="background-image:  url( '{{ asset('uploads/products/3.PNG') }}');"></a>
                            <div class="text bg-white p-4">
                                <h3 class="heading text-center"><a href="#" class="text-center font-18">Snow White</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 ftco-animate">
                        <div class="blog-entry">
                            <a href="#" class="block-20 d-flex align-items-end related-img" style="background-image:  url( '{{ asset('uploads/products/3.PNG') }}');"></a>
                            <div class="text bg-white p-4">
                                <h3 class="heading text-center"><a href="#" class="text-center font-18">Snow White</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 ftco-animate">
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20 d-flex align-items-end related-img" style="background-image:  url( '{{ asset('uploads/products/3.PNG') }}');"></a>
                            <div class="text bg-white p-4">
                                <h3 class="heading text-center"><a href="#" class="text-center font-18">Snow White</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 ftco-animate">
                        <div class="blog-entry">
                            <a href="#" class="block-20 d-flex align-items-end related-img" style="background-image:  url( '{{ asset('uploads/products/3.PNG') }}');"></a>
                            <div class="text bg-white p-4">
                                <h3 class="heading text-center"><a href="#" class="text-center font-18">Snow White</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 ftco-animate">
                        <div class="blog-entry">
                            <a href="#" class="block-20 d-flex align-items-end related-img" style="background-image:  url( '{{ asset('uploads/products/3.PNG') }}');"></a>
                            <div class="text bg-white p-4">
                                <h3 class="heading text-center"><a href="#" class="text-center font-18">Snow White</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

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
