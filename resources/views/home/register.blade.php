@extends('layouts.first')

@section('title', '新規登録')

@section('content')
<div class="container-fluid">
   　  <div class=" bg-secondary row justify-content-center">  
   　    <div class="login-form bg-secondary">
   　     <div class="login-title">Exprosive Workout</div>
   　       <div class="mb-3">
   　         <label class="form-label" for="e-mail">e-mail</label>
   　          <input type="email" class="form-control" placeholder="✉️ Email Adress"> 
   　       </div>
   　       <div class="mb-3">
   　        <label class="form-label" for="password">password</label>
   　        <input type="password" class="form-control" placeholder="🔒 Password">
   　       </div>
   　        <div class="mb-3">
   　        <label class="form-label" for="password">password再入力</label>
   　        <input type="password" class="form-control" placeholder="🔒 Password">
   　       </div>
   　       <div class="login-button">
   　        <button type="submit" class="btn btn-light btn-lg">login</button>
   　       </div>
   　    </div>
   　  </div>
   </div>