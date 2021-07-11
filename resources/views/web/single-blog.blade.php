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

          <section class="ftco-section">
			<div class="container">
				<div class="row {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'dir-rtl' : ''}}">
					<div class="col-lg-8 ftco-animate">
						<p>
							<img src="{{asset('uploads/blogs')}}/{{$blog->image ?? ''}}" alt="" class="img-fluid">
						</p>
						<div> 
                        <?php

$blogId = $blog->id;
if( LaravelLocalization::getCurrentLocale() === "en"){
    $url = 'http://127.0.0.1:8000/en/single-blog/'. $blogId;
}else{
    $url = 'http://127.0.0.1:8000/ar/single-blog/'. $blogId;
}
						 

?>
							<ul class="ftco-footer-social ftco-blog-social list-unstyled {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'float-md-right float-rtl' : ''}}">
								<li class="ftco-animate"><a <a href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}"  target="popup" onclick="window.open('https://twitter.com/intent/tweet?url={{ urlencode($url) }}','popup','width=600,height=600'); return false;" class="border-white"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}','popup','width=600,height=600'); return false;" class="border-white"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a
                                href="https://www.instagram.com/sharer/sharer.php?u={{ urlencode($url) }}" target="popup" onclick="window.open('https://www.instagram.com/sharer/sharer.php?u={{ urlencode($url) }}','popup','width=600,height=600'); return false;"
                                 class="border-white"><span class="icon-instagram"></span></a></li>
							</ul>
							<p class="ftco-footer-social ftco-blog-social list-unstyled  pt-1 mr-2 {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'float-md-right float-rtl' : ''}}"> نشر  </p>
						</div>
						<br /><br />
						<div>
							<h5 class="clr-green mt-2">>@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$blog->en_title ?? ''}}
						  @else
						  {{$blog->ar_title ?? ''}}
						  @endif
                        </h5></h5>
							<br />
							<p>
                            >@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$blog->en_text ?? ''}}
						  @else
						  {{$blog->ar_text ?? ''}}
						  @endif							<p>
								
							
							
</div>
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

					<div class="sidebar-box ftco-animate">
						<h3>{{ __('links.tags') }}</h3>
						<ul class="tagcloud m-0 p-0">
                            @foreach($tags as $tag)
							<a href="#" class="tag-cloud-link">@if( LaravelLocalization::getCurrentLocale() === "en")
						  {{$tag->en_tag ?? ''}}
						  @else
						  {{$tag->ar_tag ?? ''}}
						  @endif</a>
							@endforeach
						</ul>
					</div>

				</div><!-- END COL -->
        </div>
			</div>
		</section>
          @endsection