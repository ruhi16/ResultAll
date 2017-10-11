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
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Default</td>
                    <td>Defaultson</td>
                    <td>def@somemail.com</td>
                </tr>      
                <tr class="success">
                    <td>Success</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
                <tr class="danger">
                    <td>Danger</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                </tr>
                <tr class="info">
                    <td>Info</td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                </tr>
                <tr class="warning">
                    <td>Warning</td>
                    <td>Refs</td>
                    <td>bo@example.com</td>
                </tr>
                <tr class="active">
                    <td>Active</td>
                    <td>Activeson</td>
                    <td>act@example.com</td>
                </tr>
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
                <tr>
                    <td>af</td>
                    <td>dfa</td>
                    <td>fdaf</td>
                </tr>
                <tr>
                    <td>faf</td>
                    <td>fas</td>
                    <td>fdfa</td>
                </tr>
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
                <tr>
                    <td>af</td>
                    <td>dfa</td>
                    <td>fdaf</td>
                </tr>
                <tr>
                    <td>faf</td>
                    <td>fas</td>
                    <td>fdfa</td>
                </tr>
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
