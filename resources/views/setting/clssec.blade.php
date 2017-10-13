@extends('layouts.baselayout')
@section('title','Dashboard')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')

<div class="container">
	<h1 class="page-header">Class & Section Details...</h1>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li><a href="#">Library</a></li>
		<li class="active">Data</li>
	</ol>
	

	<div class="row">
		<div class="col-md-3">	            
	          <div class="list-group">
	            <a href="{{url('/session')}}" class="list-group-item">Session Details</a>
	            <a href="{{url('/clssec')}}"  class="list-group-item active">Class & Section Details</a>
	            <a href="#" class="list-group-item">Link</a>
	            <a href="#" class="list-group-item">Link</a>
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
        <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
				<h3 class="panel-title pull-left">
					Class & Section Details...
            	</h3>
					
					<div class="clearfix"></div>			
			</div><!--/end of panel heading-->
            


            <table class="table table-bordered">
            
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clss as $cl)
                    <tr>
                        <td>{{$cl->id}}</td>
                        <td>{{$cl->cls}}</td>
                        <td>
                        @foreach($cl->sections as $s)
                            {{$s->sec}}
                        @endforeach
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span></button>
                            <button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-minus"></span></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- end of panel-default -->

            </div>
        </div>

        <div class="row">        
            <div class="col-md-6">

            <div class="panel panel-default">
            <div class="panel-heading">
				<h3 class="panel-title pull-left">
					Class Details...
            	</h3>
					<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
					  New Class
					</button>
					<div class="clearfix"></div>			
			</div><!--/end of panel heading-->
            <table class="table table-bordered">           
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>                    
                </tr>
                </thead>
                
                <tbody>
                @foreach($clss as $cl)
                    <tr>
                        <td>{{$cl->id}}</td>
                        <td>{{$cl->cls}}</td>
                        <td>{{$cl->status}}</td>
                    </tr>
                @endforeach
                
                </tbody>
            </table>
            </div>
            </div>
            <div class="col-md-6">
            <div class="panel panel-default">
            <div class="panel-heading">
				<h3 class="panel-title pull-left">
					Section Details...
            	</h3>
					<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
					  New Section
					</button>
					<div class="clearfix"></div>			
			</div><!--/end of panel heading-->
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($section as $sectn)
                    <tr>
                        <td>{{$sectn->id}}</td>
                        <td>{{$sectn->sec}}</td>
                        <td>{{$sectn->status}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            
            </div>
        
        </div>




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
