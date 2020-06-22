@if (\Session::has('success'))
<div class="row justify-content-start">
  <div class="col-12 text-left text-light">
	<div class="alert bg-success" role="alert">
		<em class="fa fa-check-circle mr-2"></em> 
			{{ \Session::get('success') }} 
				<a href="#" class="float-right"><em class="fa fa-remove"></em></a>
	</div>
	</div>
</div>
@endif