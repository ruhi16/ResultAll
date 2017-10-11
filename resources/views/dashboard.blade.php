@extends('layouts.baselayout')
@section('title','Dashboard')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')
<h1 class="page-header">Dashboard</h1>


<script type="text/javascript">
  $(document).ready(function(e){
     // $('.datepicker').datepicker()

  });
</script>





    <input class="date form-control" type="text">





<script type="text/javascript">

    $('.date').datepicker({  
      format: 'dd-mm-yyyy' //,changeMonth: false, changeYear: true
     });  

</script> 



@endsection


@section('footer')
	@include('layouts.footer')
@endsection
