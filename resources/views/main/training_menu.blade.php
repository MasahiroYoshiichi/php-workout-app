@extends('layouts.async')

@section('content')
     <div class="row">
         @foreach($movie as $e)
           <div class="col-md-5 ml-5 d-none d-md-block">
            <label class="training_label">{{$e->training_name}}</label>
            <iframe width="100%" height="300" src="{{$e->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-10 mx-auto text-center d-block d-md-none">
            <label class="training_label_sm">{{$e->training_name}}</label>
            <iframe width="100%" height="200" src="{{$e->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        @endforeach
    </div>
@endsection
