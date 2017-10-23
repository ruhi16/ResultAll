@extends('layouts.baselayout')
@section('title','Home')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')
<h1>Home Page</h1>

	


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal Starts -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">    	
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>

      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal ends -->




<script type="text/javascript">
  $(document).ready(function(e){
    
  });

  // $('#myModal').on('shown.bs.modal', function () {
  // 	$('#myInput').focus()
  // });


  $(document).ready(function() {
		    
  });
</script>


@endsection


@section('footer')
	@include('layouts.footer')
@endsection
