@extends('web.layout.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webassets/img/21.jpg')}}');margin-top:-20px">
	  		{{-- <div class="overlay"></div> --}}
	  		<div class="container">
	  			<div class="row no-gutters slider-text align-items-center justify-content-center">
	  				<div class="col-md-9  text-center">
	  					<div class="bg-text"></div>
	  					<h1 class="mb-2 bread">{{ __('links.about_premier') }}</h1>
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

          <section class="ftco-section pt-4 ftc-no-pb mb-4 mt-4">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-4">
  					<div style="width:290px;">
  						<div class="layer-1" style="">
  							<div class="layer-2" style=""></div>
  						</div>
  						<img class="img-layer" src="{{asset('uploads/companies')}}/{{$company->about_image }}" alt="">
  					</div>
  				</div>
  				<div class="col-md-8 pr-md-4   mt-4 {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">
  					<p>
                      @if( LaravelLocalization::getCurrentLocale() === "en")
						  {!! $company->about_en_company !!}
						  @else
						  {!! $company->about_ar_company !!}
						  @endif
                          					</p>

                                              <p><a href="{{asset('uploads/companies')}}/{{$company->company_catalogue_pdf }}" download class="btn btn2 btn-primary">{{ __('links.dawnload_catalog') }}</a></p>
  				</div>
  			</div>
  		</div>
  	</section>
<!-- new -->
<section class="ftco-section pt-4 ftc-no-pb mb-4 mt-3">
	<div class="container">
		<div class="row justify-content-center mb-4 pb-2">
			<div class="col-md-8 text-center heading-section ">
				<h3>{{ __('links.story') }}</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8   mt-2 {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">

				<p>
                @if( LaravelLocalization::getCurrentLocale() === "en")
						  {!! $company->story_en_company !!}
						  @else
						  {!! $company->story_ar_company !!}
						  @endif				</p>

			</div>
			<div class="col-md-4 ">
				<div style="width:290px;">
					<div class="layer-3" style="">
						<div class="layer-4" style=""></div>
					</div>
					<img class="img-layer2" src="{{asset('uploads/companies')}}/{{$company->story_image }}" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section pt-4 ftc-no-pb mb-4 mt-2">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div style="width:290px;">
					<div class="layer-1" style="">
						<div class="layer-2" style=""></div>
					</div>
					<img class="img-layer" src="{{asset('uploads/companies')}}/{{$company->mission_image }}" alt="">
				</div>
			</div>
			<div class="col-md-8 pr-md-4  {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">

                <h2 class="mb-4 " style="color: #8FCDA0;font-weight: bold">{{ __('links.mission') }}</h2>
				<p>
                @if( LaravelLocalization::getCurrentLocale() === "en")
						  {!! $company->mission_en_company !!}
						  @else
						  {!! $company->mission_ar_company !!}
						  @endif				</p>


			</div>
		</div>
	</div>
</section>
<!-- End -->
  	<section class="ftco-section pt-4 ftc-no-pb mb-4 mt-3">
  		<div class="container">
		  	<div class="row justify-content-center mb-4 pb-2">
		  		<div class="col-md-8 text-center heading-section ">
		  			<h3>{{ __('links.vision') }}</h3>
		  		</div>
		  	</div>
  			<div class="row">
  				<div class="col-md-8  {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">

  					<p>
                      @if( LaravelLocalization::getCurrentLocale() === "en")
						  {!! $company->vision_en_company !!}
						  @else
						  {!! $company->vision_ar_company !!}
						  @endif  					</p>

  				</div>
			  	<div class="col-md-4 ">
			  		<div style="width:290px;">
			  			<div class="layer-3" style="">
			  				<div class="layer-4" style=""></div>
			  			</div>
			  			<img class="img-layer2" src="{{asset('uploads/companies')}}/{{$company->vision_image }}" alt="">
			  		</div>
			  	</div>
  			</div>
  		</div>
  	</section>

	<section class="ftco-section">
		<div style="background-color:#8FCDA0;height:300px"></div>
  		<div class="container"style="margin-top:-250px">
  			<div class="row justify-content-center pb-2">
  				<div class="col-md-8 text-center heading-section ">
  					<h2 style="color:rgba(223,223,223,.3);margin-bottom:-50px;font-size:70px">{{ __('links.why_us') }}</h2>
  					<h3 class="text-white">{{ __('links.why_us') }}</h3>
  				</div>
  			</div>
  			<div class="row testimonials">
  				<div class="owl-carousel owl-carousel2">
					  @foreach($whyRows as $whyRow)
  					<div class="item">
  						<h4 class="pb-2"> @if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$whyRow->en_title}}
						  @else
						  {{$whyRow->ar_title}}
						  @endif </h4>
  						<p>
						  @if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$whyRow->en_subTitle}}
						  @else
						  {{$whyRow->ar_subTitle}}
						  @endif   					</div>
						  @endforeach


  				</div>
  			</div>
  		</div>
  	</section>
          @endsection
