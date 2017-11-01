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
	            <a href="{{url('/clssec')}}"  class="list-group-item">Class &#38 Section Details</a>
	            <a href="{{url('/examsch')}}" class="list-group-item ">Exam Details</a>
	            <a href="{{url('/clssub')}}"  class="list-group-item active">Class Subjects Allotment</a>
	            <a href="{{url('/clssubfm')}}"class="list-group-item">Subject FM Assignment</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	          </div>        
	    </div><!--/1st Column-->

       	<div class="col-md-9"> 
		
		<div class="row">	
			{{--  {{$extypes->count()}}  --}}
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
							<?php $flag = false; ?>
								<tr>
									<td rowspan="{!! $extypes->count() !!}}">{{$c->id}}</td>
									<td rowspan="{!! $extypes->count() !!}}">{{$c->cls}}</td>
									@foreach($extypes as $ext)
										@if($flag == false)
											<td>
											@foreach($clssub as $row)
												@if($row->clss_id == $c->id && $row->extype_id == $ext->id)														
													@foreach($subjects as $s)
														@if($s->id == $row->subject_id)
															{{$s->subj}}<br>
														@endif
													@endforeach
												@endif
											@endforeach
											</td>
											<td></td>
											<td></td>
											<td><button class="btn btn-primary pull-right opmd" value="{{$c->id}}/{{$c->cls}}/{{$ext->id}}">Edit Subjects</button></td>
											<td rowspan="{!! $extypes->count() !!}">
												<a href="{{url('/refSubjForClss', [$c->id])}}" class="btn btn-success pull-right">Refresh</a>
											</td>
										@else
											<tr>											
											<td>
											@foreach($clssub as $row)
												@if($row->clss_id == $c->id && $row->extype_id == $ext->id)
													@foreach($subjects as $s)
														@if($s->id == $row->subject_id)
															{{$s->subj}}<br>
														@endif
													@endforeach
												@endif
											@endforeach
											</td>
											<td></td>
											<td></td>
											<td><button class="btn btn-primary pull-right opmd" value="{{$c->id}}/{{$c->cls}}/{{$ext->id}}">Edit Subjects</button></td>
											{{--  <td><a href="{{url('/editSubjects', [$c->id])}}" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal">Edit Subjects</a></td>  --}}
											{{--  <td></td>  --}}
											</tr>
										@endif
										<?php $flag = true; ?>
									@endforeach
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
      {!! Form::open(['url'=>'/addSubjForClss','method'=>'post', 'class'=>'form-horizontal']) !!}
		<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        	<h4 class="modal-title">Enter New Session...</h4>
      	</div>
		<div class="modal-body">    
			<input type="text"  id="clsid" name="clsid">
			
				<div class="row">
					<div class="col-sm-6">						
						<table class="table table-bordered">
							<caption>Summative</caption>
							<thead>
								<tr>
									<th>Suubject</th>
									<th>Option</th>
								</tr>
							</thead>
							<tbody>
							
							@foreach($subjects as $subject)								
							@if($subject->extype_id == 1)
							<tr>							
								<td>{{$subject->subj}}</td>
								<td><input type="checkbox" name="mybox[]" value="{{$subject->subj}}"></td>
							</tr>
							<tr>							
								<td>{{$subject->subj}}</td>
								<td><input type="checkbox" name="mybox1[]" value="{{$subject->subj}}"></td>
							</tr>
							@endif
							@endforeach
							
							</tbody>
						</table>											
					</div><!-- /.1st Column -->
					<div class="col-sm-6">
						<table class="table table-bordered">
							<caption>Formative</caption>
							<thead>
								<tr>
									<th>Suubject</th>
									<th>Option</th>
								</tr>
							</thead>
							<tbody>
							@foreach($subjects as $subject)															
							<tr>							
								<td>{{$subject->subj}}</td>
								<td><input type="checkbox" name="mybox1[]" value="{{$subject->id}}"></td>
							</tr>
							
							@endforeach
							</tbody>
							</table>
					</div><!-- /.2nd Column -->
				</div><!-- /.row -->
				
			
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
		


		$('.opmd').click(function(){ 
			v = $(this).val();
			//alert(v);
			$('input[name="clsid"]').val(v);  

			$('#myModal').modal('show');
		});
  });
</script>


@endsection


@section('footer')
	@include('layouts.footer')
@endsection
