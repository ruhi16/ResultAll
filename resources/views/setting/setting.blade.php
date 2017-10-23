@extends('layouts.baselayout')
@section('title','Dashboard')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')

<div class="container">
	<h1 class="page-header">Settings...</h1>
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
	            <a href="{{url('/clssubfm')}}"class="list-group-item">Subject FM Assignment</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
	          </div>        
	    </div><!--/1st Column-->

      <div class="col-md-9">

			<p>Body</p>
		
			</div><!--/2nd Column-->
  </div><!--/1st Row-->



</div><!--/container-->





<script type="text/javascript">
  $(document).ready(function(e){

  });
</script>

@endsection

@section('footer')
	@include('layouts.footer')
@endsection
