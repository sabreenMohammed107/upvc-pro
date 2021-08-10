@extends('web.layout.main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webassets/img/21.jpg')}}');margin-top:-20px">
  		<div class="overlay"></div>
  		<div class="container">
  			<div class="row no-gutters slider-text align-items-center justify-content-center">
  				<div class="col-md-9 ftco-animate text-center">
  					<div class="bg-text"></div>
  					<h2 class="mb-2 bread">{{ __('links.partenters') }}</h2>
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
<style>
    .page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #6ABC81;
    border-color: #6ABC81;
}
.page-link{
    color:#6ABC81 ;
}
</style>
  	<section class="ftco-section">
  		<div class="container">
              <div id="partener">

              @include('web.partenersList')
              </div>

  		</div>
  	</section>



@endsection
@section('scripts')
<script>

$(document).ready(function() {



//pagination
$(document).on('click', '#category .pagination a', function(event){
  event.preventDefault();
  var page = $(this).attr('href').split('page=')[1];

  fetch_data(page);
 });


 function fetch_data(page)
 {

  $.ajax({

    url:"{{ URL::to('fetch_partener_data') }}?page="+page,
	data:
		{

			id:$("#partId").val(),


        } ,

   success:function(data)
   {
    $('#partener').html(data);
   }
  });
 }
});
</script>
@endsection
