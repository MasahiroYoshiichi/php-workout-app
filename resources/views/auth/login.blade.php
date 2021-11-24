@extends('layouts.general')

@section('title', 'ログイン')

@section('content')
<div class="container-fluid">
    <div class="row bg-secondary login-layout">
        <div class="col-md-12 login-form">
            <div class="col-md-4 mx-auto text-center">
                <h3>Exprosive Workout</h3>
            </div>
            <form method="POST" action="{{ route('login') }}">
             @csrf
                <div class="col-md-3 mt-3 mx-auto form-group">
                    <label for="email" class="form-label">e-mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="📧Email Adres">
                     @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                </div>
                 <div class="col-md-3 mt-3 mx-auto form-group">
                     <label for="password" class="form-label">password</label>
                     <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="🔒password" required autocomplete="current-password">
                     @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                     @if (Route::has('password.request'))
                              <a class="btn btn-link"  href="{{ route('password.request') }}">パスワードをお忘れですか？</a>
                     @endif
                 </div>
                 <div class="col-md-3 form-group mx-auto">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">パスワードを記録しますか？</label>
                     </div>
                 </div>
                 <div class="col-md-1 form-group mx-auto text-center">
                        <button type="submit" class="btn btn-light">ログイン</button>
                 </div>
             </form>
        </div>
    </div>
</div>
@endsection

