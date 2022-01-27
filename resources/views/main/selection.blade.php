@extends('layouts.general')

@section('title', 'コース選択')

@section('content')
<div class="jumbotron selection-image">
   <div class="container d-none d-md-block">
       <div class="row">
           <div class="col-md-6 mx-auto text-center" >
               <h1 class="selection-title">cours selection</h1>
           </div>
       </div>
       <div class="row">
           <div class="col-md-12 selection-bottom text-center">
               <div class="col-md-6 mx-auto">
                   <a type="button" href="/athlete" class="btn selection_button">アスリートコース</a>
               </div>
               <div class="col-md-6 mx-auto">
                   <a type="button" href="/exercise" class="btn selection_button">エクササイズコース</a>
               </div>
               <div class="col-md-6 mx-auto">
                   <a type="button" href="/fitness" class="btn selection_button">フィットネスコース</a>
               </div>
           </div>
        </div>
   </div>
   <div class="container d-block d-md-none">
       <div class="row">
           <div class="col-12 text-center selection-title-sm">
               cours selection
           </div>
       </div>
       <div class="row justify-content-center">
           <div class="col-xs-12 mt-4">
               <div class="col-xs-12">
                   <a type="button" href="/athlete" class="btn selection-button-sm">アスリートコース</a>
               </div>
               <div class="col-xs-12">
                   <a type="button" href="/exercise" class="btn selection-button-sm">エクササイズコース</a>
               </div>
               <div class="col-xs-12">
                   <a type="button" href="/fitness" class="btn selection-button-sm">フィットネスコース</a>
               </div>
           </div>
        </div>
   </div>
</div>
@endsection


