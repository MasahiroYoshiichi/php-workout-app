@extends('layouts.first')

@section('title', '新規登録')

@section('content')
<div class="containe-fluid">
   <div class="row bg-secondary login-layout">
     
     <div class="col-md-12 mx-auto login-form">
        <div class="col-md-4 mx-auto text-center"><h3>Exprosive Workout</h3></div>
         <form action="{{ action('TopController@app_register')}}" method="post">
            <div class="col-md-3 mt-3 mx-auto form-group">
               <label class="form-label" for="email">e-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="📧Email Adres">
            </div>
            <div class="col-md-3 mt-3 mx-auto form-group">
               <label class="form-label" for="password">password</label>
               <input type="password" class="form-control" name="password" id="password" placeholder="🔒password">
            </div>
            <div class="col-md-3 mx-auto text-right mt-5 form-group">
               <button type="submit" class="btn btn-light btn-lg">新規登録</button>
            </div>
         {{ csrf_field() }}
         </form>
     </div>
   </div>
</div>
@endsection