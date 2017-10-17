@extends('layouts.baselayout')
@section('title','Dashboard')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')


<div class="container">
	
	<h1 class="page-header">Examination Details ...</h1>
	<h2>Current Session is: {{$session[0]->Name}} <small>From {{$session[0]->stDate}} to {{$session[0]->enDate}} </small></h2>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li><a href="#">Library</a></li>
		<li class="active">Data</li>
	</ol>
	

	<div class="row">
		<div class="col-md-3">	            
	          <div class="list-group">
	            <a href="{{url('/session')}}" class="list-group-item">Session Details</a>
	            <a href="{{url('/clssec')}}"  class="list-group-item">Class & Section Details</a>
	            <a href="{{url('/examsch')}}" class="list-group-item ">Exam Details</a>
	            <a href="{{url('/clssub')}}"  class="list-group-item active">Class Subjects Allotment</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	          </div>        
	    </div><!--/1st Column-->

       	<div class="col-md-9"> 
		
		<div class="row">						
			<div class="panel panel-default">
					<!-- Default panel contents -->
					<div class="panel-heading">
						<h3 class="panel-title pull-left">Examination Details	</h3>
							
							<div class="clearfix"></div>					
					</div>
							<table class="table table-bordered">
							<thead>
								<tr>
									<th>Sl</th>
									<th>Classes</th>
									<th>Subjects : Summative</th>
									<th>Subjects : Formative</th>
									<th>Status</th>
									<th>Action</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							@foreach($cls as $c)
								<tr>
									<td>{{$c->id}}</td>
									<td>{{$c->cls}}</td>
									<td></td>
									<td></td>
									<td></td>
									<td><a href="{{url('/editSubjects', [$c->id])}}" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Edit Subjects</a></td>
									<td></td>
								</tr>
							@endforeach
							</tbody>
							</table>
		</div><!--/panel starting div -->
		</div>











       	</div><!--/2nd column-->
  	</div><!--/row-->
</div><!--/container-->



<!-- Modal Starts -->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      {!! Form::open(['url'=>'/addSession','method'=>'post', 'class'=>'form-horizontal']) !!}
			<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Enter New Session...</h4>
      </div>
      <div class="modal-body">        

		<div class="form-group">
        	<label class="control-label col-sm-3" for="currses">Current Session:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="currses" name="currses" placeholder="Enter Curr. Session">
				</div>

        	{{--  <label class="control-label col-sm-1" for="clss">Class:</label>
					<div class="col-sm-2">
						<select class="form-control" name="clss" id="cl">
							<option value="0"></option>
							
						</select>
					</div>  --}}
      	</div>

		<div class="form-group">
        	<label class="control-label col-sm-3" for="fromdt">From:</label>
				<div class="col-sm-4">						
					<input type="text" class="date form-control" id="fromdt" name="fromdt" placeholder="dd-mm-yyyy">
				</div>

				<label class="control-label col-sm-1" for="todt">To:</label>
				<div class="col-sm-4">
					<input type="text" class="date form-control" id="todt" name="todt" placeholder="dd-mm-yyyy">
				</div>
      	</div>

		<div class="form-group">
        	<label class="control-label col-sm-3" for="prevses">Previo Session:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="prevses" name="prevses" placeholder="Select Prev. Session">
				</div>					
      	</div>

				
      </div><!-- /.modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div><!-- /.modal-footer -->
			{!! Form::close() !!}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal Ends -->



<script type="text/javascript">
  $(document).ready(function(e){
		$('.date').datepicker({  
      format: 'dd-mm-yyyy' //,changeMonth: false, changeYear: true
     }); 
  });
</script>


@endsection


@section('footer')
	@include('layouts.footer')
@endsection
