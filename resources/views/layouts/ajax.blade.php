@extends('../master')

@section('content')

<h1>Sample AJAX page</h1>

<div class="container">
	<button class="btn btn-success" id="prBtn">Pending Requests</button>

	<div id="pr">
		
	</div>

</div>

<script type="text/javascript">
	$('#prBtn').click(function(){
		$.get('getPendingRequests',
		{},function(data){
			$('#pr').html(data);
		});
	});
</script>


@endsection