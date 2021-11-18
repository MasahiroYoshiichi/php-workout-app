@extends('layouts.second')

@section('title', 'コース選択')

@section('content')
<div class="jumbotron selection-image">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-2">
               <h1 class="mt-5 bg-light text-dark text-center">コース選択</h1>
           </div>
       </div>
       <div class="row ml-1" style="line-height:13rem;">
           <div class="col-md-12">
               <div class="form-check ">
                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="cours-selection1" style="color: black">
                   <label class="form-check-label  ml-3" for="cours-selection1" style="font-size: 2.5rem;">アスリートコース</label>
               </div>
           </div>
           <div class="col-md-12">
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="cours-selection2">
                  <label class="form-check-label ml-3" for="cours-selection2" style="font-size: 2.5rem">エクササイズコース</label>
               </div>
           </div>
           <div class="col-md-12">
               <div class="form-check">
                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="cours-selection3">
                  <label class="form-check-label ml-3" for="cours-selection3" style="font-size: 2.5rem;">フィットネスコース</label>
               </div>
           </div>
       </div>
       <div class="row justify-content-end">
           <div class="col-md-4">
               <button type="submit" class="btn btn-light btn-lg p-3 m-5 w-75">Let's Workout</button> 
           </div>
       </div>
   </div>    
</div>