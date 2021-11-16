@extends('layouts.second')

@section('title', 'ユーザー情報登録')

@section('content')
<form>
 <div class="container">
  <div class="row">
    <div class="col-md-2 mt-4 pt-2"><h3>氏名</h3></div>  
    <div class="col-md-5">
      <label for="firstName" class="form-label">姓</label>
      <input type="text" class="form-control" id="firstName" placeholder="First name">
    </div>
    <div class="col-md-5">
      <label for ="lastName" class="form-label">名</label>
      <input type="text" class="form-control" id="lastName"  placeholder="Last name">
    </div>
  </div>
  <div class="row mt-4">
       <div class="col-md-2 mt-4 pt-2"><h3>フリガナ</h3></div>  
    <div class="col-md-5">
      <label for="firstName" class="form-label">セイ</label>
      <input type="text" class="form-control" id="firstName" placeholder="First name">
    </div>
    <div class="col-md-5">
      <label for ="lastName" class="form-label">メイ</label>
      <input type="text" class="form-control" id="lastName"  placeholder="Last name">
    </div>
  </div>
  <div class="row mt-4">
      <div class="col-md-2 mt-4 pt-2"><h3>性別</h3></div>
      <div class="col-md-4 mt-4">
         <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary active">
               <input type="radio" name="options" id="men" checked> 男
            </label>
            <label class="btn btn-secondary">
               <input type="radio" name="options" id="woman"> 女
            </label>
         </div>
      </div>
  </div>
  <div class="row mt-4">
      <div class="col-md-2 mt-4 pt-2"><h3>身長</h3></div>
      <div class="col-md-5 mt-4">
         <input type="text" class="form-control" placeholder="height">
      </div>
      <div class="col-md-1 mt-5"><h3>cm</h3></div>
  </div>
  <div class="row mt-4">
      <div class="col-md-2 mt-4 pt-2"><h3>体重</h3></div>
      <div class="col-md-5 mt-4">
         <input type="text" class="form-control" placeholder="body weight">
      </div>
      <div class="col-md-1 mt-5"><h3>kg</h3></div>
  </div>
  <div class="row mt-4">
      <div class="col-md-2 mt-4 pt-2"><h3>体型</h3></div>
      <div class="btn-group ml-3 mt-4" role="group" aria-label="Basic example">
         <button type="button" class="btn btn-secondary">痩せ型体型</button>
         <button type="button" class="btn btn-secondary">筋肉質体型</button>
         <button type="button" class="btn btn-secondary">肥満型体型</button>
     </div>
  </div>
  <div class="row mt-4">
      <div class-"col-md-2 mt-4 pt-2"><h3>自己紹介</h3></div>
      
  </div>
  </div>
 </form>