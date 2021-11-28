@extends('layouts.general')

@section('title', 'ユーザー情報登録')




@section('content')
<div class="container-fluid bg-secondary" style="padding-top: 5rem">
  <div class="row">
    <div class="col-md-6 profile_title">
      <h1>プロフィール登録</h1>
    </div>
  </div>
  <form action="{{ action('MainController@profile_create') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
        　  <ul>
        　      @foreach($errors->all() as $e)
        　        <li>{{ $e }}</li>
        　      @endforeach
        　  </ul>
          @endif
      <div class="form-group row">
          <div class="col-md-2 mt-4 pt-2"><h3>氏名</h3></div>  
          <div class="col-md-4">
              <label for="firstName" class="form-label">姓</label>
              <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First name" value="{{ old('firstName') }}">
          </div>
          <div class="col-md-4">
              <label for ="lastName" class="form-label">名</label>
              <input type="text" class="form-control" name="lastName" id="lastName"  placeholder="Last name" value="{{ old('lastName') }}">
          </div>
      </div>
      <div class="form-group row">
          <div class="col-md-2 mt-4 pt-2"><h3>フリガナ</h3></div>  
          <div class="col-md-4">
              <label for="rubyFirst" class="form-label">セイ</label>
              <input type="text" class="form-control" name="rubyFirst" id="rubyFirst" placeholder="First name" value="{{ old('rubyFirst') }}">
          </div>
          <div class="col-md-4">
              <label for ="rubyLast" class="form-label">メイ</label>
              <input type="text" class="form-control" name="rubyLast" id="rubyLast"  placeholder="Last name" value="{{ old('rubyLast') }}">
          </div>
      </div>
      <div class="row">
          <div class="col-md-2 mt-4 pt-2"><h3>性別</h3></div>
          <div class="col-md-4 mt-4">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-light active">
                       <input type="radio" name="gender"  value="men"> 男
                  </label>
                  <label class="btn btn-light">
                       <input type="radio" name="gender"  value="women"> 女
                  </label>
              </div>
          </div>
      </div>
      <div class="form-group row">
          <div class="col-md-2 mt-4 pt-2">
              <h3>身長</h3>
          </div>
          <div class="col-md-2 mt-4">
              <input type="text" class="form-control" name="height" placeholder="height" value="{{ old('height') }}">
          </div>
          <div class="col-md-1 align-self-end">
              <h5>cm</h5>
          </div>
      </div>    
      <div class="form-group row">
          <div class="col-md-2 mt-4 pt-2">
              <h3>体重</h3>
          </div>
          <div class="col-md-2 mt-4">
              <input type="text" class="form-control" name="weight" placeholder="body weight" value="{{ old('weight') }}">
          </div>
          <div class="col-md-1 align-self-end">
            <h5>kg</h5>
          </div>
      </div>
      <div class="row">
          <div class="col-md-2 mt-4 pt-2"><h3>体型</h3></div>
          <div class="col-md-4 mt-4">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-light active">
                       <input type="radio" name="bodyType"  value="slim"> 痩せ型体型
                  </label>
                  <label class="btn btn-light">
                       <input type="radio" name="bodyType"  value="muscular"> 筋肉質体型
                  </label>
                  <label class="btn btn-light">
                       <input type="radio" name="bodyType"  value="obesity"> 肥満型体型
                  </label>
              </div>
          </div>
      </div>
      <div class="form-group row">
          <div class="col-md-2 mt-4 pt-2">
            <h3>自己紹介</h3>
          </div>
          <div class="col-md-6 mt-4">
            <label for="self_introduction"></label>
            <textarea class="form-control" name="introduction" id="self_introduction" rows="10">{{ old('introduction') }}</textarea>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 mt-4 pt-2">
            <h3>プロフィール画像</h3>
          </div>  
          <div class="col-md-6 mt-4">
            <label class="btn btn-light btn-lg">
              画像を選択
              <input type="file" name="image" accept='image/*' onchange="previewImage(this);" value="images/selection.jpeg">
            </label>
            <img id="preview" class="img-fluid  profile_image" alt="プロフィール画像" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
          </div>
      </div>
      
      <div class="row">
          <div class="col-md-12 mb-4">
           {{ csrf_field() }}
            <button type="submit" class="btn btn-light btn-lg">
               プロフィールを登録
            </button>
          </div
      </div>
  </form>
</div>

<script>
function previewImage(obj)
{
	var fileReader = new FileReader();
	fileReader.onload = (function() {
		document.getElementById('preview').src = fileReader.result;
	});
	fileReader.readAsDataURL(obj.files[0]);
}
</script>
@endsection
 
