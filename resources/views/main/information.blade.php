@extends('layouts.second')

@section('title', 'ユーザー情報登録')

@section('content')
<form class="bg-secondary">
   <div class="container" style="padding-top: 5rem">
      <div class="row">
        <div class="col-md-2 mt-4 pt-2"><h3>氏名</h3></div>  
        <div class="col-md-4">
          <label for="firstName" class="form-label">姓</label>
          <input type="text" class="form-control" id="firstName" placeholder="First name">
        </div>
        <div class="col-md-4">
          <label for ="lastName" class="form-label">名</label>
          <input type="text" class="form-control" id="lastName"  placeholder="Last name">
        </div>
      </div>
      <div class="row mt-4">
           <div class="col-md-2 mt-4 pt-2"><h3>フリガナ</h3></div>  
        <div class="col-md-4">
          <label for="firstName" class="form-label">セイ</label>
          <input type="text" class="form-control" id="firstName" placeholder="First name">
        </div>
        <div class="col-md-4">
          <label for ="lastName" class="form-label">メイ</label>
          <input type="text" class="form-control" id="lastName"  placeholder="Last name">
        </div>
      </div>
      <div class="row mt-4">
          <div class="col-md-2 mt-4 pt-2"><h3>性別</h3></div>
          <div class="col-md-4 mt-4">
             <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-light active">
                   <input type="radio" name="options" id="men" > 男
                </label>
                <label class="btn btn-light">
                   <input type="radio" name="options" id="woman"> 女
                </label>
             </div>
          </div>
      </div>
      <div class="row mt-4">
          <div class="col-md-2 mt-4 pt-2"><h3>身長</h3></div>
          <div class="col-md-2 mt-4">
             <input type="text" class="form-control" placeholder="height">
          </div>
          <div class="col-md-1 align-self-end"><h5>cm</h5></div>
      </div>
      <div class="row mt-4">
          <div class="col-md-2 mt-4 pt-2"><h3>体重</h3></div>
          <div class="col-md-2 mt-4">
             <input type="text" class="form-control" placeholder="body weight">
          </div>
           <div class="col-md-1 align-self-end"><h5>kg</h5></div>
      </div>
      <div class="row mt-4">
          <div class="col-md-2 mt-4 pt-2"><h3>体型</h3></div>
          <div class="btn-group col-md-5 mt-4" role="group" aria-label="bodyType">
             <button type="button" class="btn btn-light">痩せ型体型</button>
             <button type="button" class="btn btn-light">筋肉質体型</button>
             <button type="button" class="btn btn-light">肥満型体型</button>
         </div>
      </div>
      <div class="row mt-4">
          <div class="col-md-2 mt-4 pt-2"><h3>自己紹介</h3></div>
          <div class="col-md-6 mt-4">
             <label for="self_introduction"></label>
             <textarea class="form-control" id="self_introduction" rows="10"></textarea>
          </div>
      </div>
      <div class="row mt-4">
          <div class="col-md-4 mt-4 pt-2">
              <h3>プロフィール画像</h3>
              <button type="submit" class="btn btn-secondary btn-lg mt-3">画像登録</button></button>
              <img class="img-fluid mt-3" alt="プロフィール画像" src="https://knsoza1.com/wp-content/uploads/2020/07/70b3dd52350bf605f1bb4078ef79c9b9.png">
          </div>
      </div>  
          <div class="row justify-content-end pb-3">
              <button type="submit" class="col-md-2 mt-3 btn btn-light btn-lg">プロフィール登録</button>
          </div>
      </div>
    </div>
 </form>
 
 