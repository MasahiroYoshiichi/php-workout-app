@extends('layouts.general')

@section('content')
<div class="containe-fluid">
   <div class="row bg-secondary login-layout">
     <div class="col-md-12 mx-auto login-form">
        <div class="col-md-4 mx-auto text-center"><h3>Exprosive Workout</h3></div>
            <form method="POST" action="{{ route('register') }}">
            @csrf
                 <div class="col-md-3 mt-3 mx-auto form-group">
                     <label for="name" class="form-label">氏名</label>
                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                       @error('name')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                       @enderror
                 </div>
                 <div class="col-md-3 mt-3 mx-auto form-group">
                     <label for="email" class="form-label">e-mail</label>
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      @error('email')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                       @enderror
                 </div>
                 <div class="col-md-3 mt-3 mx-auto form-group">
                     <label for="password" class="form-label">password</label>
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      @error('password')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                      @enderror
                 </div>
                 <div class="col-md-3 mt-3 mx-auto form-group">
                     <label for="password-confirm" class="form-label">password再入力</label>
                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                 </div>
                 <div class="col-md-1 text-center mx-auto">
                    <button type="submit" class="btn btn-light">
                        新規登録
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
