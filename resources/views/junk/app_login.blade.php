@extends('layouts.general')

@section('title', 'ログイン')

@section('content')
<div class="containe-fluid">
   <div class="row bg-secondary login-layout">
     <div class="col-md-12 mx-auto login-form">
        <div class="col-md-4 mx-auto text-center">
           <h3>Exprosive Workout</h3>
           @if(count($errors) >0)
            <div class="alert alert-danger">
              @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
              @endforeach
            </div>
           @endif
         </div>
         <form action="{{ action('TopController@app_signin') }}" method="post">
         <div class="col-md-3 mt-3 mx-auto form-group">
            <label class="form-label" for="email">e-mail</label>
             <input type="email" class="form-control" name="email" id="email" placeholder="📧Email Adres">
         </div>
         <div class="col-md-3 mt-3 mx-auto form-group">
            <label class="form-label" for="password">password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="🔒password">
         </div>
         <div class="col-md-3 mx-auto text-right mt-5">
            <button type="submit" class="btn btn-light btn-lg">login</button>
         </div>
         {{ csrf_field() }}
         </form>
     </div>
   </div>
</div>
@endsection
 　
 　
 　
 　
 　
 　
 　