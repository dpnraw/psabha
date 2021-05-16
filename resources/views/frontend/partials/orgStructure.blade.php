@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
<style type="text/css">
@media screen and (max-width: 600px) {
  .orgstructure {
    width:450px;
  }
}

</style>
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  <div class="container p-0">
  	<img src = "{{asset('blog/images/organizational structure.png')}}" class="orgstructure" />
  </div>

  
  	
  
@endsection
@section('scripts')
@endsection