@extends('layouts.baselayout')
@section('title','Dashboard')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')
<div class="container">
@foreach($cls as $c)
    <br>{{$c->cls}}<br>
    @foreach($c->exams as $ce)
        =><b>{{$ce->name}}</b><br>
        @foreach($ce->extypes as $cet)
            => =>{{$cet->type}}({{$ce->name}})
            
            @foreach($sts as $s)
                @if($s->clss_id == $c->id && $s->exam_id == $ce->id && $s->extype_id == $cet->id)
                    {{$s->active}}
                @endif
            @endforeach
            <br>
        @endforeach
    @endforeach
@endforeach	

<!-- Rectangular switch -->
<label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label>

<!-- Rounded switch -->
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>



<input type="checkbox" name="my-checkbox" checked>

</div>


<script type="text/javascript">
  $(document).ready(function(e){
    
  });
</script>


@endsection


@section('footer')
	@include('layouts.footer')
@endsection
