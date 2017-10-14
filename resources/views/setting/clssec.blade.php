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
                    <th class="text-center">SL No</th>
                    <th class="text-center">Class</th>
                    <th class="text-center">Sections</th>
                    <th class="text-center">Subjects</th>
                    <th class="text-center">Exam</th>
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
                        <a href="{!! url('/addSec',[$cl->id]) !!}" class="btn btn-primary btn-sm pull-right"><span class="glyphicon glyphicon-plus"></span></a>
                        <a href="{!! url('/delSec',[$cl->id]) !!}" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-minus"></span></a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal">Edit</button>
                            {{--  <a href="{!! url('/#',[$cl->id]) !!}" class="btn btn-primary btn-sm pull-right">Edit</a>  --}}
                        </td>
                        <td></td>
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

				
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
			{!! Form::close() !!}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal Ends -->






<script type="text/javascript">
  $(document).ready(function(e){

  });
</script>

@endsection

@section('footer')
	@include('layouts.footer')
@endsection
