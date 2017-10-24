@extends('layouts.baselayout')
@section('title','Dashboard')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')


<div class="container">
	
	<h1 class="page-header">Examination Details ...</h1>
	<h2>Current Session is: {{$session->Name}} <small>From {{$session->stDate}} to {{$session->enDate}} </small></h2>
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
	            <a href="{{url('/examsch')}}" class="list-group-item">Exam Details</a>
	            <a href="{{url('/clssub')}}"  class="list-group-item">Class Subjects Allotment</a>
	            <a href="{{url('/clssubfm')}}"class="list-group-item active">Subject FM Assignment</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	          </div>        
	    </div><!--/1st Column-->
	

       	<div class="col-md-9"> 		
		    <div class="row">
                	<table class="table table-bordered table-condensed">
					<tr>
						<th>sl</th>
						<th>Class</th>
						<th>Exam Type</th>
						<th>Subjects</th>						
						@foreach($exam as $ex)
							<th>{{$ex->name}}</th>
						@endforeach						
						<th>Action</th>
					</tr>
					{{--  =={{$clssub->where('subject_id','1')}}==  --}}
					
					@foreach($clssub->groupby('clss_id') as $cs)					
						<?php $flag = false; ?>
						@foreach($cs as $c)
							@if($flag == false)
							<tr>
							<td>{{$c->id}}</td>
							<td rowspan="{{$cs->count('extype_id')}}">{{$cls->find($cs[0]->clss_id)->cls}}</td>							
							<td>{{$c->extype_id}}</td>
							<td>{{$c->subject_id}}</td>
							@foreach($exam as $ex)
								<td>
								<div class="row">
									<div class="col-lg-6">
									<div class="input-group input-group-sm">
									<span class="input-group-addon input" id="sizing-addon4">FM</span>
									<input type="text" class="form-control" aria-describedby="sizing-addon4">
									</div>
									</div>
									<div class="col-lg-6">
									<div class="input-group input-group-sm">
									<span class="input-group-addon" id="sizing-addon3">PM</span>
									<input type="text" class="form-control" aria-describedby="sizing-addon3">
									</div>
									</div>
								</div>
								</td>
							@endforeach
							<td><button class="btn btn-primary">Update</button></td>
 							</tr>
							<?php $flag = true; ?>
							@else
							<tr>
							<td>{{$c->id}}</td>

							<td>{{$c->extype_id}}</td>
							<td>{{$c->subject_id}}</td>
							@foreach($exam as $ex)
								<td>
								<div class="row">
									<div class="col-lg-6">
									<div class="input-group input-group-sm">
									<span class="input-group-addon input" id="sizing-addon4">FM</span>
									<input type="text" class="form-control" aria-describedby="sizing-addon4">
									</div>
									</div>
									<div class="col-lg-6">
									<div class="input-group input-group-sm">
									<span class="input-group-addon" id="sizing-addon3">PM</span>
									<input type="text" class="form-control" aria-describedby="sizing-addon3">
									</div>
									</div>
								</div>
								</td>
							@endforeach
							<td><button class="btn btn-primary">Update</button></td>							
							</tr>

							@endif
						@endforeach
					
					@endforeach
				
					</table>
                {{--  @foreach($cls as $c)
                    {{$c->cls}}
                    @foreach($c->exams as $ce)
                        {{$ce->name}}
                        @foreach($ce->extypes as $cet)
                            --{{$cet->type}}
                            
                        @endforeach
                    @endforeach
                    <br>
                @endforeach  --}}
				{{$clssub->groupby('clss_id')->count()}}
				@foreach($clssub->groupby('clss_id') as $cs)
					{{$cs}} <br><br><br>
					@foreach($cs as $c)
						{{$cs->groupby('subject_id')->count()}}
					@endforeach
				@endforeach
				{{--  clss:{{$clssub->where('clss_id','1')->count()}}
				@foreach($clssub as $cs)
					<br>{{$cs->id}}-{{$cs->clss_id}}

				@endforeach  --}}
            </div><!--/row-->
        </div><!--/2nd Column-->
</div><!--/container-->


<script type="text/javascript">
  $(document).ready(function(e){
		
  });
</script>


@endsection


@section('footer')
	@include('layouts.footer')
@endsection
