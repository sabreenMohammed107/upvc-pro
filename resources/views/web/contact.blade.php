@extends('web.layout.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webassets/img/21.jpg')}}');margin-top:-20px">
  		{{-- <div class="overlay"></div> --}}
  		<div class="container">
  			<div class="row no-gutters slider-text align-items-center justify-content-center">
  				<div class="col-md-9 ftco-animate text-center">
  					<div class="bg-text"></div>
  					<h1 class="mb-2 bread">{{ __('links.contact_us') }}</h1>
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
            <?php
            header("Location: mailto:".$company->email);
            ?>
	<section class="ftco-section contact-section">
		<div class="container">
			<div class="row pt-2 pb-2 dir-rtl">
				<div class="col-md-6 col-lg-4">
					<div class="ftco-footer-widget">
						<div class="py-2">
							<h4 class="ftco-heading-2">{{ __('links.central_office') }}</h4>
							<div class="block-23 mb-3">
								<p>{{ __('links.contact_text') }}</p>
							</div>
						</div>
						<div class="col-md d-flex topper align-items-center align-items-stretch py-2 mb-4 no-pl">
							<div class="icon d-flex justify-content-center align-items-center"><span class="icon-map-marker"></span></div>
							<div class="text mr-2">
								<span>{{ __('links.address') }}</span>
								<span>@if( LaravelLocalization::getCurrentLocale() === "en")
								  {{$company->en_address ?? ''}}
								  @else
								  {{$company->ar_address ?? ''}}
								  @endif</span>
							</div>
						</div>
						<div class="col-md d-flex topper align-items-center align-items-stretch py-2 mb-4 no-pl">
							<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone"></span></div>
							<div class="text mr-2">
								<span>{{ __('links.phone') }}</span>
								<span>{{$company->phone ?? ''}}</span>
							</div>
						</div>
						<div class="col-md d-flex topper align-items-center align-items-stretch py-2 mb-4 no-pl">
							<div class="icon d-flex justify-content-center align-items-center"><span class="icon-envelope"></span></div>
							<div class="text mr-2">
								<span>{{ __('links.email') }}</span>
								<span>{{$company->email ?? ''}}</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="ftco-footer-widget">
						<h4 class="ftco-heading-2">{{ __('links.open_hour') }}</h4>
						<table class="table">
							<tbody>
								<tr class="table-light">
									<td class="clr-green">{{ __('links.sunday') }}</td>
									<td class="clr-mgreen">09:00 - 05:00</td>
								</tr>
								<tr class="table-light">
									<td class="clr-green">{{ __('links.monday') }}</td>
									<td class="clr-mgreen">09:00 - 05:00</td>
								</tr>
								<tr class="table-light">
									<td class="clr-green">{{ __('links.tuesday') }}</td>
									<td class="clr-mgreen">09:00 - 05:00</td>
								</tr>
								<tr class="table-light">
									<td class="clr-green">{{ __('links.wednesday') }}</td>
									<td class="clr-mgreen">09:00 - 05:00</td>
								</tr>
								<tr class="table-light">
									<td class="clr-green">{{ __('links.thursday') }}</td>
									<td class="clr-mgreen">09:00 - 05:00</td>
								</tr>
								<tr class="table-light">
									<td class="clr-green">{{ __('links.friday') }}</td>
									<td class="clr-mgreen">{{ __('links.close') }}</td>
								</tr>
								<tr class="table-light">
									<td class="clr-green">{{ __('links.saturday') }}</td>
									<td class="clr-mgreen">{{ __('links.close') }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="ftco-footer-widget ml-md-4">
						<h4 class="ftco-heading-2">{{ __('links.location') }}</h4>
						<div class="mapouter">
							<div class="gmap_canvas">
								<iframe width="300" height="300" id="gmap_canvas" src="{{$company->map_location ?? ''}}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org">fmovies</a><br>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">

			</div>
		</div>
	</section>



		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section bg-light">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-12 p-4 p-md-5 order-md-last">
                    <form action="{{ LaravelLocalization::localizeUrl('/contact-message') }}" method="post">
							@csrf
						<div class="row dir-rtl">

							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="{{ __('links.name') }}">
								</div>

								<div class="form-group">
									<input type="text" name="email" class="form-control" placeholder="{{ __('links.email') }}">
								</div>
                                <div class="form-group">
									<input type="text" name="subject" class="form-control" placeholder="{{ __('links.subject') }}">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<textarea name="message" id="" rows="7" class="form-control" placeholder="{{ __('links.message') }}"></textarea>
								</div>
							</div>
							<div class="form-group mr-3">
								<input type="submit" value="{{ __('links.send_msg') }}" class="btn btn2 btn-primary">
							</div>

						</div>
                        </form>
					</div>
				</div>
			</div>
		</section>


@endsection
