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
  <div class="row">
  <div class="container mb-1">
  		{!! $post->body !!}
  	
  </div>
</div>

  
  	
  
@endsection
@section('scripts')
@endsection