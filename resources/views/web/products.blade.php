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
	  	<section class="ftco-section bg-light">
	  		<div class="container">
	  			<div class="row justify-content-center mb-2 pb-2">
	  				<div class="col-md-8 text-center heading-section ftco-animate">
						<h1 style="color:rgba(223,223,223,.3);margin-bottom:-50px;">{{ __('links.advanced_performance') }}</h1>
						<h3>{{ __('links.advanced_performance') }}</h3>
	  					<p>
						  @if( LaravelLocalization::getCurrentLocale() === "en")
						  Over 30 year, we have accumulated experience in matching the market need and securing the supply. Professionalism in building materials company with innovative products and differentiated solution.
						  @else
						  أكثر من 30 عامًا ، تراكمت لدينا خبرة في مطابقة احتياجات السوق وتأمين التوريد. الاحتراف في شركة مواد البناء بمنتجات مبتكرة وحلول متباينة.
						  @endif
						  </p>
	  				</div>
	  			</div>
	  			<div class="row dir-rtl ">
					  @foreach($performances as $performance)
	  				<div class="col-md-6 col-lg-4 ftco-animate">
	  					<div class="blog-entry">
	  						<a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{asset('uploads/company_performances')}}/{{$performance->image ?? ''}}');">

	  						</a>
	  						<div class="text bg-white p-4">
	  							<h3 class="heading"><a href="#"> @if( LaravelLocalization::getCurrentLocale() === "en")
						 {{$performance->en_title}}
								  @else
{{$performance->ar_title}}						  @endif</a></h3>
	  							<p> @if( LaravelLocalization::getCurrentLocale() === "en")
						 {{$performance->en_subTitle}}
								  @else
{{$performance->ar_subTitle}}						  @endif</p>

	  						</div>
	  					</div>
	  				</div>

				@endforeach
	  			</div>
	  		</div>
	  	</section>

  		<section class="ftco-section">
		  	<div class="container">
		  		<div class="row justify-content-center mb-2 pb-2">
		  			<div class="col-md-8 text-center heading-section ftco-animate">
		  				<h1 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">{{ __('links.products') }}</h1>
		  				<h3>{{ __('links.products') }}</h3>
		  				<p> @if( LaravelLocalization::getCurrentLocale() === "en")
						  PREMIER UPVC always considers the importance of good external appearances as well as making a healthy and comfortable living space. You can feel a more beautiful scene and fresh air through the PREMIER
						  @else
						  تعتبر PREMIER UPVC دائمًا أهمية المظهر الخارجي الجيد بالإضافة إلى توفير مساحة معيشة صحية ومريحة. يمكنك أن تشعر بمشهد أكثر جمالا وهواء نقي من خلال PREMIER
						  @endif</p>
		  			</div>
		  		</div>
		  		<div class="row dir-rtl">
		  			<div class="col-md-2 mb-3">
		  				<ul class="nav nav-pills flex-column" id="myTab" role="tablist">
		  				
							
            <li class="nav-item" class="active">
			<a class="nav-link" id="#home" data-toggle="tab" href="#home" aria-controls="home" aria-selected="false"><i class="ion-ios-arrow-round-forward"></i> @if( LaravelLocalization::getCurrentLocale() === "en")
						All
								  @else
الكل	
				  @endif
			</a>
			@foreach ($categories as $item)
               <a class="nav-link" id="#home{{ $item->id }}" data-toggle="tab" href="#home{{ $item->id }}" aria-controls="home" aria-selected="false"><i class="ion-ios-arrow-round-forward"></i>  @if( LaravelLocalization::getCurrentLocale() === "en")
						 {{$item->en_name}}
								  @else
{{$item->ar_name}}		
				  @endif</a>
				  @endforeach
            </li>
        
		  				</ul>
		  			</div>
		  			<!-- /.col-md-4 -->
		  			<div class="col-md-10">
		  				<div class="tab-content" id="myTabContent">
						  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="all-tab">
		  						<div class="row">
									  <?php




$pro_cat=App\Models\Product::get();
									  ?>
									  @foreach($pro_cat as $cat)
		  							<div class="col-md-6 col-lg-4 ftco-animate">
		  								<div class="blog-entry">
		  									<a href="{{ LaravelLocalization::localizeUrl('/single-product/'.$cat->id) }}" class="block-20 d-flex align-items-end" style="background-image: url('{{asset('uploads/products')}}/{{$cat->master_image ?? ''}}');"></a>
		  									<div class="text bg-white p-4">
		  										<h3 class="heading text-center"><a href="{{ LaravelLocalization::localizeUrl('/single-product/'.$cat->id) }}" class="clr-green text-center">
												  @if( LaravelLocalization::getCurrentLocale() === "en")
						 {{$cat->en_name}}
								  @else
{{$cat->ar_name}}						  @endif</a></h3>
		  									</div>
		  								</div>
		  							</div>
									  @endforeach
		  						
		  						</div>
		  					</div>
							  <!-- End -->
						  @foreach ($categories as $item)
		  					<div class="tab-pane fade show " id="home{{ $item->id }}" role="tabpanel" aria-labelledby="all-tab">
		  						<div class="row">
									  <?php




$pro_cat=App\Models\Product::where('category_id',$item->id)->get();
									  ?>
									  @foreach($pro_cat as $cat)
		  							<div class="col-md-6 col-lg-4 ftco-animate">
		  								<div class="blog-entry">
		  									<a href="{{ LaravelLocalization::localizeUrl('/single-product/'.$cat->id) }}" class="block-20 d-flex align-items-end" style="background-image: url('{{asset('uploads/products')}}/{{$cat->master_image ?? ''}}');"></a>
		  									<div class="text bg-white p-4">
		  										<h3 class="heading text-center"><a href="{{ LaravelLocalization::localizeUrl('/single-product/'.$cat->id) }}" class="clr-green text-center">@if( LaravelLocalization::getCurrentLocale() === "en")
						 {{$cat->en_name}}
								  @else
{{$cat->ar_name}}						  @endif</a></h3>
		  									</div>
		  								</div>
		  							</div>
									  @endforeach
		  						
		  						</div>
		  					</div>
							  @endforeach
		  					
		  				</div>
		  			</div>
		  			<!-- /.col-md-8 -->
		  		</div>
		  		<!-- <div class="row justify-content-center dir-rtl">
		  			<div>
		  				<ul class="ftco-footer-social ftco-blog-social list-unstyled">
		  					<li class="ftco-animate"><a href="#" class="border-white"><span>1</span></a></li>
		  					<li class="ftco-animate"><a href="#" class="border-white"><span>2</span></a></li>
		  					<li class="ftco-animate"><a href="#" class="border-white"><span>3</span></a></li>
		  				</ul>
		  			</div>
		  		</div> -->


		  	</div>
  		</section>
          @endsection
