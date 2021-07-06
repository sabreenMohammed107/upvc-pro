<div class="row dir-rtl">
    @foreach($parteners as $partener)
    <input type="hidden" id="partId" value="{{$partener->id}}">
			  	<div class="col-md-3 course ">
				<div class="product">
					<div class="img product-img part-img" style="background-image: url({{asset('uploads/partener')}}/{{$partener->logo }});"></div>
					
				</div>
				<div class="p-4 text-center">
                    <a href="{{$partener->website_url}}" target="_blank">
					<h5 class="clr-green">{{$partener->name}}</h5>
                    </a>
				</div>
			  	</div>
			 
			@endforeach  
		
			
		
  			</div>
		  	<div class="row justify-content-center dir-rtl">
              <div id="category" class=" justify-content-center"  >
						
						{!! $parteners->links() !!}
						
						</div>
		  	</div>
            