@extends('layouts.first')

@section('title', '新規登録')

@section('content')
<div class="containe-fluid">
   <div class="row bg-secondary" style="height: 100%;">
     <div class="col-md-12 mx-auto login-form">
        <div class="col-md-4 mx-auto text-center"><h3>Exprosive Workout</h3></div>
         <div class="col-md-3 mt-3 mx-auto">
            <label class="form-label" for="e-mail">e-mail</label>
             <input type="email" class="form-control" placeholder="📧Email Adres">
         </div>
         <div class="col-md-3 mt-3 mx-auto">
            <label class="form-label" for="password">password</label>
            <input type="password" class="form-control" placeholder="🔒password">
         </div>
         <div class="col-md-3 mt-3 mx-auto">
            <label class="form-label" for="e-mail">password再入力</label>
            <input type="password" class="form-control" placeholder="🔒password">
         </div>
         <div class="col-md-3 mx-auto text-right mt-5">
            <button type="submit" class="btn btn-light btn-lg">新規登録</button>
         </div>
     </div>
   </div>
</div>
 　
 　

