@extends('web.layout.main')
@section('content')
<section class="home-slider owl-carousel">
@foreach($homeSliders as $slider)
  		<div class="slider-item  {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}" style="background-image:url({{asset('uploads/home-sliders')}}/{{$slider->image }});max-height:470px">
  			<div class="container">
  				<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
  					<div class="col-md-5 ftco-animate">
  						<div class="bg-text"></div>
  						<h1 class="pl-2 pt-2">@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$slider->en_title}}
						  @else
						  {{$slider->ar_title}}
						  @endif</h1>
  						<p class="pl-2">@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$slider->en_text}}
						  @else
						  {{$slider->ar_text}}
						  @endif</p>
  						<p class="pl-2"><a href="contact.html" class="btn btn-primary">تواصل معنا</a></p>
  					</div>
  				</div>
  			</div>
  		</div>
  	@endforeach


  	</section>
  	<section class="ftco-section pt-4 ftc-no-pb mb-4">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-4">
  					<div style="width:290px;">
  						<div class="layer-1" style="">
  							<div class="layer-2" style=""></div>
  						</div>
  						<img class="img-layer" src="./img/2.jpg" alt="">
  					</div>
  				</div>
  				<div class="col-md-8 py-5 pr-md-4 ftco-animate text-right">
  					<h2 class="mb-4">عن بريمير</h2>
  					<p>
					  	هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى هذة النصوص إن كنت تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في النص بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم عدة مرات بما تتطلبه الحاجة
					</p>
  					<p><a href="/img/Premier Catalog .pdf" download class="btn btn2 btn-primary">تحميل الكتالوج</a></p>
  				</div>
  			</div>
  		</div>
  	</section>
  	<section class="ftco-section"style="background-color:#F9F9F9">
  		<div class="container">
  			<div class="row justify-content-center mb-4 pb-2">
  				<div class="col-md-8 text-center heading-section ftco-animate">
  					<h1 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">المنتجات</h1>
				  	<h3 >المنتجات</h3>
  				</div>
  			</div>
  			<div class="row dir-rtl">
			  	<div class="col-md-4 course ftco-animate">
			  		<div class="product">
			  			<div class="img product-img" style="background-image: url(img/3667ed0d-5274-4223-beb5-13a2175075f1.jpg);"></div>
			  			<div class="text pt-4">
			  				<div class="row">
			  					<div class="col-md-8"><h3>لوريم إيبسوم</h3></div>
			  					<div class="col-md-4"><p>إقرأ المزيد</p></div>
			  				</div>
			  			</div>
			  			<div class="product-overlay hvr-sweep-to-bottom">
			  				<div class="product-overlay-text">
			  					<h3>الشبابيك المنزلقة</h3>
			  					<p>
								هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم</p>
							    <p><a href="#" class="btn btn-primary2">إقرأ المزيد</a></p>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  	<div class="col-md-4 course ftco-animate">
			  		<div class="product">
					<div class="img product-img" style="background-image: url(img/4.jpg);"></div>
					<div class="text pt-4">
						<div class="row">
							<div class="col-md-8"><h3>لوريم إيبسوم</h3></div>
							<div class="col-md-4"><p>إقرأ المزيد</p></div>
						</div>
					</div>
					<div class="product-overlay hvr-sweep-to-bottom">
						<div class="product-overlay-text">
							<h3>الشبابيك المنزلقة</h3>
							<p>
								هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم
							</p>
							<p><a href="#" class="btn btn-primary2">إقرأ المزيد</a></p>
						</div>
					</div>
					  </div>
			  	</div>
			  	<div class="col-md-4 course ftco-animate">
			  		<div class="product">
			  			<div class="img product-img" style="background-image: url(img/5.jpg);"></div>
					<div class="text pt-4">
						<div class="row">
							<div class="col-md-8"><h3>لوريم إيبسوم</h3></div>
							<div class="col-md-4"><p>إقرأ المزيد</p></div>
						</div>
					</div>
					<div class="product-overlay hvr-sweep-to-bottom">
						<div class="product-overlay-text">
							<h3>الشبابيك المنزلقة</h3>
							<p>
								هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم
							</p>
							<p><a href="#" class="btn btn-primary2">إقرأ المزيد</a></p>
						</div>
					</div>
			  		</div>
			  	</div>
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
				<h1 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">مجموعة الألوان</h1>
			  		<h2 class="mb-4">مجموعة الألوان</h2>
			  		<p>
					هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى هذة النصوص إن كنت تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة
					 </p>
			  		<p>
					هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
					 </p>
				<div>
					<img class="pt-4" src="./img/7.png" alt="">
					<img class="pt-4" src="./img/8.png" alt="">
					<img class="pt-4" src="./img/9.png" alt="">
					<img class="pt-4" src="./img/10.png" alt="">
				</div>
			  	</div>
  				<div class="col-md-4">
  					<div>
  						<img class="pt-4 mt-4" src="./img/6.png" alt="">
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  	<section class="ftco-section" style="background-color:#FBF8F8">
  		<div class="container">
		  	<div class="row justify-content-center mb-4 pb-2">
		  		<div class="col-md-8 text-center heading-section ftco-animate">
		  			<h1 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">لماذا بريميير</h1>
		  			<h3>المميزات الرئيسية</h3>
		  		</div>
		  	</div>
  			<div class="row d-flex dir-rtl">
  				<div class="col-md-4 wrap-about py-5 pr-md-4 ftco-animate">
					  <div class="row mt-5">
  						<div class="col-lg-12">
  							<div class="services-2 d-flex">
  								<div class="icon mt-2 d-flex justify-content-center align-items-center"><a href="#" class=""></a><span>1</span></div>
  								<div class="text pr-3">
									<a href="#"><h3 class="hvr-wobble-skew">لوريم إيبسوم</h3></a>
								  	<p>
								  		نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى هذة النصوص إن كنت تستخدم نص لوريم إيبسوم
								  	</p>
  								</div>
  							</div>
  						</div>
  						<div class="col-lg-12">
						  	<div class="services-2 d-flex">
						  		<div class="icon mt-2 d-flex justify-content-center align-items-center"><a href="#" class=""></a><span>2</span></div>
						  		<div class="text pr-3">
						  			<a href="#"><h3 class="hvr-wobble-skew">لوريم إيبسوم</h3></a>
						  			<p>
									نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى هذة النصوص إن كنت تستخدم نص لوريم إيبسوم
								</p>
						  		</div>
						  	</div>
  						</div>
  						<div class="col-lg-12">
						  	<div class="services-2 d-flex">
						  		<div class="icon mt-2 d-flex justify-content-center align-items-center"><a href="#" class=""></a><span>3</span></div>
						  		<div class="text pr-3">
						  			<a href="#"><h3 class="hvr-wobble-skew">لوريم إيبسوم</h3></a>
						  			<p>
									نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى هذة النصوص إن كنت تستخدم نص لوريم إيبسوم
								</p>
						  		</div>
						  	</div>
  						</div>
  					</div>
  				</div>
			  	<div class="col-md-4 wrap-about d-flex align-items-stretch">
			  		<div class="img mt-5 pt-4"><img src="img/11.png" /></div>
			  	</div>
			  	<div class="col-md-4 wrap-about py-5 pr-md-4 ftco-animate">
			  		<div class="row mt-5">
			  			<div class="col-lg-12">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><a href="#" class=""></a><span>4</span></div>
							<div class="text pr-3">
								<a href="#"><h3 class="hvr-wobble-skew">لوريم إيبسوم</h3></a>
								<p>
									نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى هذة النصوص إن كنت تستخدم نص لوريم إيبسوم
								</p>
							</div>
						</div>
			  			</div>
			  			<div class="col-lg-12">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><a href="#" class=""></a><span>5</span></div>
							<div class="text pr-3">
								<a href="#"><h3 class="hvr-wobble-skew">لوريم إيبسوم</h3></a>
								<p>
									نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى هذة النصوص إن كنت تستخدم نص لوريم إيبسوم
								</p>
							</div>
						</div>
			  			</div>
			  		</div>
			  	</div>
  			</div>
  		</div>
  	</section>

  	<section class="ftco-section ftco-counter ftco-no-pt img" id="section-counter" style="background-color:#8FCDA0" data-stellar-background-ratio="0.5">
  		<div class="mb-5">
  			<div class="row justify-content-center mb-5 pb-2 d-flex pl-3">
  				<div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5  mt-5 text-right">
  					<h3 class="mb-4 text-white">لوريم إيبسوم هو ببساطة نص شكلي ؟ </h3>
				  	<p>
			  	هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى هذة النصوص إن كنت تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في النص بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم عدة مرات بما تتطلبه الحاجة
				  	</p>
				  	<p>
			  	عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في النص بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم عدة مرات بما تتطلبه الحاجة
				  	</p>
				  	<p>
				  		عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في النص بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم عدة مرات بما تتطلبه الحاجة
				  	</p>
  				</div>
			  	<div class="col-md-6 align-items-stretch d-flex">
			  		<div class="img img-video d-flex align-items-center" style="background-image: url(img/13.png);width:700px;height:400px">
			  			<div class="video justify-content-center">
			  				<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
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
  					<h1 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">{{ __('links.feedback') }}</h1>
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
		  			<h1 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">المدونة</h1>
		  			<h3>المدونة</h3>
		  		</div>
		  	</div>
  			<div class="row dir-rtl">
  				<div class="col-lg-6 ftco-animate">
				  	<div class="product" style="height:368px;">
				  		<div>
				  			<img src="img/14.jpg" alt="" class="img-fluid" style="height:368px;">
				  		</div>
				  		<div class="mt-n5 pr-3 text">
				  			<h4 class="text-white">لوريم إيبسوم هو ببساطة نص شكلي</h4>
				  			<p class="text-white">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية</p>
				  		</div>
				  		<div class="product-overlay hvr-sweep-to-bottom">
				  			<div class="product-overlay-text">
				  				<h3>لوريم إيبسوم هو ببساطة نص شكلي</h3>
				  				<p>
						  	هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
				  				</p>
				  				<p><a href="blog-single.html" class="btn btn-primary2"><span class="ion-ios-play"></span> رؤية المزيد</a></p>
				  			</div>
				  		</div>
				  	</div>
  				</div> <!-- .col-md-6 -->
  				<div class="col-lg-6 sidebar ftco-animate">
  					<div class="sidebar-box ftco-animate">
  						<div class="block-21 mb-4 d-flex">
						  	<div class="product" style="max-height:171px;">
						  		<a>
						  			<img src="img/15.png" class="img-article" />
						  		</a>
						  		<div class="product-overlay hvr-sweep-to-bottom">
						  			<div class="product-overlay-text">
						  				<p></p>
						  				<a href="blog-single2.html" class="btn btn-primary2">رؤية المزيد</a>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="text pt-2">
						  		<h3 class="heading pr-3"><a href="#">لوريم إيبسوم هو ببساطة نص شكلي</a></h3>
						  		<p class="pr-3">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما</p>
						  	</div>
  						</div>
  						<div class="block-21 mb-4 d-flex">
						  	<div class="product" style="max-height:171px;">
						  		<a>
						  			<img src="img/16.png" class="img-article"/>
						  		</a>
				  	<div class="product-overlay hvr-sweep-to-bottom">
				  		<div class="product-overlay-text">
				  			<p></p>
				  			<a href="blog-single3.html" class="btn btn-primary2">رؤية المزيد</a>
				  		</div>
				  	</div>
						  	</div>
  							<div class="text pt-2">
  								<h3 class="heading pr-3"><a href="#">لوريم إيبسوم هو ببساطة نص شكلي</a></h3>
							  	<p class="pr-3">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما</p>
  							</div>
  						</div>
  					</div>
  				</div><!-- END COL -->
  			</div>
  		</div>
  	</section>

  	<section class="ftco-section" style="background-color:#FBF8F8;">
  		<div class="container">
  			<div class="row justify-content-center mb-4 pb-2">
  				<div class="col-md-8 text-center heading-section ftco-animate">
  					<h1 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">{{ __('links.materials') }}</h1>
  					<h3>{{ __('links.best_materials') }}</h3>
  				</div>
  			</div>
  			<div class="row align-items-center h-100">
  				<div class="container container2 rounded">
  					<div class="slider">
  						<div class="logos">
							  @foreach($materials as $material)
  							<img style="padding: 25px; height: 150px; width: 30%;display: inline-block;" src="{{asset('uploads/materials')}}/{{$material->logo }}" />
  							@endforeach
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

@endsection
