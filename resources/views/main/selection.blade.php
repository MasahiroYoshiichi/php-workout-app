@extends('layouts.general')

@section('title', 'コース選択')

@section('content')
<div class="jumbotron selection-image">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-2 mx-auto" style="margin-top: 3rem">
               <h1 class=" bg-light text-dark text-center">コース選択</h1>
           </div>
       </div>
       <div class="row" style="line-height:10rem;">
           <div class="col-md-12 text-center">
               <div class="form-check">
                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="cours-selection1">
                   <label class="form-check-label" for="cours-selection1" style="font-size: 2.5rem;">アスリートコース</label>
               </div>
           </div>
           <div class="col-md-12 text-center">
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="cours-selection2">
                  <label class="form-check-label" for="cours-selection2" style="font-size: 2.5rem">エクササイズコース</label>
               </div>
           </div>
           <div class="col-md-12 text-center">
               <div class="form-check">
                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="cours-selection3">
                  <label class="form-check-label" for="cours-selection3" style="font-size: 2.5rem;">フィットネスコース</label>
               </div>
           </div>
           <div class="col-md-12 text-center" style="margin-top: 2rem">
               <button type="submit" class="btn btn-light btn-lg">Let's Workout</button>
           </div> 
       </div>
   </div>
</div>