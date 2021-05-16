@extends('frontend.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('blog/css/newsflow.css')}}">
<style>
/*div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 100%;
}*/

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
@endsection
@section('content')
  @include('frontend.partials.newsFlow')
  	<div class="container">
  		<div class="row">
  			   @if(App::isLocale('en'))
  				@foreach($photos as $photo)
  				<div class="col-md-3">
		  		<div class="gallery">
				  <a target="_blank" href="{{asset('storage/'.$photo->file)}}">
				    <img src="{{asset('storage/'.$photo->file)}}" alt="Cinque Terre" width="600" height="400" class="img-thumbnail">
				  </a>
				  <div class="desc">{{$photo->title_eng}}</div>
				</div>
				</div>
				@endforeach
        @elseif(App::isLocale('nep'))
        @foreach($photos as $photo)
          <div class="col-md-3">
          <div class="gallery">
          <a target="_blank" href="{{asset('storage/'.$photo->file)}}">
            <img src="{{asset('storage/'.$photo->file)}}" alt="Cinque Terre" width="600" height="400" class="img-thumbnail">
          </a>
          <div class="desc">{{$photo->title_nep}}</div>
        </div>
        </div>
        @endforeach
        @endif

  			
  		</div>
  		
  	</div>
@endsection
@section('scripts')
@endsection