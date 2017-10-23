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
                	<table class="table table-bordered">
					<tr>
						<th>sl</th>
						<th>Class</th>
						<th>Exam Type</th>
						<th>Subjects</th>
						<th>Marks</th>
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
							<td>{{}}</td>
							<td></td>
							</tr>
							<?php $flag = true; ?>
							@else
							<tr>
							<td>{{$c->id}}</td>

							<td>{{$c->extype_id}}</td>
							<td>{{$c->subject_id}}</td>
							<td></td>
							<td></td>							
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
