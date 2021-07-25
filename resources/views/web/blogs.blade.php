@extends('web.layout.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webassets/img/21.jpg')}}');margin-top:-20px">
	  		<div class="overlay"></div>
	  		<div class="container">
	  			<div class="row no-gutters slider-text align-items-center justify-content-center">
	  				<div class="col-md-9 ftco-animate text-center">
	  					<div class="bg-text"></div>
	  					<h1 class="mb-2 bread">{{ __('links.blog') }}</h1>
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
				<div class="col-lg-8 ftco-animate">
				@foreach($blogs as $blog)
					<div class="mb-2">
						<p>
							<img src="{{asset('uploads/blogs')}}/{{$blog->image ?? ''}}" alt="" class="w-100 img-fluid">
						</p>
						<div>
						</div>
						<div class="mt-5">
							<h5 class="clr-green mt-2">@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$blog->en_title ?? ''}}
						  @else
						  {{$blog->ar_title ?? ''}}
						  @endif</h5>
							<br />
							<p>
							@if( LaravelLocalization::getCurrentLocale() === "en")
                          {{ str_limit($blog->en_text ?? '', $limit = 150, $end = '...') }}
						  @else
						  {{ str_limit($blog->ar_text ?? '', $limit = 150, $end = '...') }}
						  @endif
							</p>
							<a href="{{ LaravelLocalization::localizeUrl('/single-blog/'.$blog->id) }}" class="clr-green">{{ __('links.show_more') }}</a>
						</div>
						<hr />
					</div>
                    @endforeach
				</div>

				<!-- .col-md-8 -->

				<div class="col-lg-4 sidebar ftco-animate">

					<div class="sidebar-box ftco-animate">
						<h3>{{ __('links.popular_blog') }}</h3>
                        @foreach($blogs as $blog)
						<div class="block-21 mb-4 d-flex">
							<a class="blog-img ml-4" style="background-image: url({{asset('uploads/blogs')}}/{{$blog->thumbnail ?? ''}});"></a>
							<div class="text">
								<h3 class="heading"><a href="{{ LaravelLocalization::localizeUrl('/single-blog/'.$blog->id) }}">@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$blog->en_title ?? ''}}
						  @else
						  {{$blog->ar_title ?? ''}}
						  @endif</a></h3>
							</div>
						</div>
                        @endforeach
					</div>

					<!-- <div class="sidebar-box ftco-animate">
						<h3>{{ __('links.tags') }}</h3>
						<ul class="tagcloud m-0 p-0">
							<a href="#" class="tag-cloud-link">الخدمات</a>
							<a href="#" class="tag-cloud-link">الابواب الجرارة</a>
							<a href="#" class="tag-cloud-link">الابواب المنزلقة</a>
							<a href="#" class="tag-cloud-link">الشبابيك الجرارة</a>
							<a href="#" class="tag-cloud-link">الشبابيك المنزلقة</a>
						</ul>
					</div> -->

				</div><!-- END COL -->
			</div>
		</div>
	</section>

          @endsection