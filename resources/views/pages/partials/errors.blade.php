@if ($errors->any())
<div class="row justify-content-start">
  <div class="col-12 text-left text-light">
	<div class="alert bg-danger" role="alert">
		<em class="fa fa-minus-circle mr-2"></em> Error 
		  <ul>
		      @foreach ($errors->all() as $error)
		          <li>{{ $error }}</li>
		      @endforeach
		  </ul>
		<a href="#" class="float-right"><em class="fa fa-remove"></em></a>
	</div>
  </div>
</div>
@endif