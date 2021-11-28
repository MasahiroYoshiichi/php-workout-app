@extends('layouts.general')

@section('title', 'コース選択')

@section('content')
<div class="jumbotron selection-image">
   <div class="container">
       <div class="row">
           <div class="col-md-3 mx-auto" >
               <h1 class="selection_title">cours selection</h1>
           </div>
       </div>
       <div class="row selection_layout">
           <div class="col-md-12 mt-4 text-center">
               <div class="col-md-6 mx-auto">
                   <a type="button" class="btn btn-light section_button">アスリートコース</a>
               </div>
               <div class="col-md-6 mx-auto">
                   <a type="button" class="btn btn-light section_button">エクササイズコース</a>
               </div>
               <div class="col-md-6 mx-auto">
                   <a type="button" class="btn btn-light section_button">アスリートコース</a>
               </div>
           </div>
        </div>
   </div>
</div>
@endsection