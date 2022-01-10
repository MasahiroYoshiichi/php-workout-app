@extends('layouts.general')

@section('title', 'ユーザー情報登録')




@section('content')
<div class="container-fluid bg-light text-dark">
  <div class="row">
    <div class="col-md-12 text-center profile-title">
      <h1 class="mt-2">プロフィール登録</h1>
    </div>
  </div>
  <form class="d-none d-md-block" action="{{ action('MainController@profile_create') }}" method="post" enctype="multipart/form-data">
    @if (count($errors) > 0)
       <ul class="text-center m-0 p-0">
         @foreach($errors->all() as $e)
        　  <ol style="color: red;">{{ $e }}</ol>
         @endforeach
       </ul>
    @endif
  <div class="form-group row mt-5">
    <div class="col-md-2 offset-3 mt-4 pt-2"><h3>氏名</h3></div>  
      <div class="col-md-4">
        <label for="name">姓と名の間にスペースを入れてください</label>
        <input type="text" class="form-control" required maxlength='20' name="name" id="name" placeholder="name" value="{{ old('name') }}">
      </div>
  </div>
  <div class="form-group row">
  <div class="col-md-2 offset-3 mt-4 pt-2"><h3>アカウント名</h3></div>  
    <div class="col-md-4">
      <label for="accountName">コミュニティで使用する名前です</label>
      <input type="text" class="form-control" required maxlength='20' name="accountName" id="accountName" placeholder="account name" value="{{ old('accountName') }}">
    </div>
  </div>
  <div class="row">
    <div class="col-md-2 offset-3 mt-4 pt-2"><h3>年齢</h3></div>
    <div class="col-md-3 mt-4">
       <input type="number" required class="form-control" name="age" placeholder="age" value="{{ old('age') }}">
    </div>
    <div class="col-md-1 align-self-end">
      <h5>歳</h5>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2 offset-3 mt-4 pt-2"><h3>性別</h3></div>
    <div class="col-md-4 mt-4">
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-dark btn-lg active">
               <input type="radio" name="gender" required value="01" {{(old('gender')=="01")? "checked":"" }}> 男
          </label>
          <label class="btn btn-lg btn-dark">
               <input type="radio" name="gender" required value="02" {{(old('gender')=="02")? "checked":""}}> 女
          </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-md-2 d-none d-md-block offset-3 mt-4 pt-2">
         <h3>身長</h3>
    </div>
    <div class="col-md-2 mt-4">
         <input type="number" class="form-control" name="height" placeholder="height" value="{{ old('height') }}">
    </div>
    <div class="col-md-1 align-self-end">
         <h5>cm</h5>
    </div>
  </div>    
  <div class="form-group row">
    <div class="col-md-2 offset-3 mt-4 pt-2"><h3>体重</h3></div>
    <div class="col-md-2 mt-4">
         <input type="number" required class="form-control" name="weight" placeholder="body weight" value="{{ old('weight') }}">
    </div>
    <div class="col-md-1 align-self-end"><h5>kg</h5></div>
  </div>
  <div class="form-group row">
    <div class="col-md-2 offset-3 mt-4 pt-2"><h3>体脂肪率</h3></div>
    <div class="col-md-2 mt-4">
       <input type="number" class="form-control" name="fat" placeholder="body Fat" value="{{ old('fat') }}">
    </div>
    <div class="col-md-1 align-self-end"><h5>%</h5></div>
  </div>
  <div class="row">
    <div class="col-md-2 offset-3 mt-4 pt-2"><h3>体型</h3></div>
    <div class="col-md-4 mt-4">
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-dark btn-lg active">
            <input type="radio" name="bodyType" required value="01" {{(old('bodyType')=="01")? "checked":"" }}> 痩せ型体型
        </label>
        <label class="btn btn-dark btn-lg">
             <input type="radio" name="bodyType" required  value="02" {{(old('bodyType')=="02")? "checked":"" }}> 筋肉質体型
        </label>
        <label class="btn btn-dark btn-lg">
              <input type="radio" name="bodyType" required  value="03" {{(old('bodyType')=="03")? "checked":"" }}> 肥満型体型
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row ">
    <div class="col-md-2 offset-3 mt-4 pt-2"><h3>自己紹介</h3></div>
    <div class="col-md-4 mt-4">
       <label for="self_introduction"></label>
       <textarea class="form-control" maxlength='300' required name="introduction" id="self_introduction" rows="8">{{ old('introduction') }}</textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-9 offset-3 mt-4 pt-2"><h3>プロフィール画像</h3></div>  
    <div class="col-md-9 offset-3">
      <label class="btn btn-dark btn-lg">
          画像を選択
          <input type="file" name="image" accept='image/*' onchange="previewImage(this);" value="images/selection.jpeg" {{old('image') }}>
      </label>
      <img id="preview" class="profile-image" alt="プロフィール画像" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center mb-4">
      {{ csrf_field() }}
      <p>※体脂肪率の入力は必須ではありません。入力するとより緻密なトレーニング管理を行えます。</p>
      <p class="pb-3">※プロフィール画像の入力は必須ではありません。プロフィール画像はコミュニティで使用します。</p>
      <button type="submit" class="btn btn-dark  profile-register">
        プロフィールを登録
      </button>
    </div>
  </div>
 </form>
 
 <form class="d-block d-md-none" action="{{ action('MainController@profile_create') }}" method="post" enctype="multipart/form-data">
    @if (count($errors) > 0)
       <ul class="text-center m-0 p-0">
         @foreach($errors->all() as $e)
        　  <ol style="color: red;">{{ $e }}</ol>
         @endforeach
       </ul>
    @endif
  <div class="form-group row mt-5">
    <div class="col-12 text-center"><h3>氏名</h3></div>  
      <div class="col-8 mx-auto mt-2 mb-4">
        <label for="name">姓と名の間にスペースを入れてください</label>
        <input type="text" class="form-control" required maxlength="20" name="name" id="name" placeholder="name" value="{{ old('name') }}">
      </div>
  </div>
  <div class="form-group row">
  <div class="col-12 text-center"><h3>アカウント名</h3></div>  
    <div class="col-8 mx-auto mt-2 mb-4">
      <label for="accountName">コミュニティで使用する名前です</label>
      <input type="text" class="form-control" required maxlength="20" name="accountName" id="accountName" placeholder="account name" value="{{ old('accountName') }}">
    </div>
  </div>
  <div class="row">
    <div class="col-12 text-center"><h3>年齢</h3></div>
    <div class="col-7 offset-2 mt-2 mb-4">
       <input type="number" required class="form-control" name="age" placeholder="age" value="{{ old('age') }}">
    </div>
    <div class="col-1 mt-3 p-0">
      <h5>歳</h5>
    </div>
  </div>
  <div class="row">
    <div class="col-12 mt-2 text-center"><h3>性別</h3></div>
    <div class="col-12 text-center mt-2 mb-4">
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-dark btn-gender active">
               <input type="radio" name="gender" required  value="01" {{(old('gender')=="01")? "checked":"" }}> 男
          </label>
          <label class="btn btn-dark btn-gender">
               <input type="radio" name="gender" required  value="02" {{(old('gender')=="02")? "checked":""}}> 女
          </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-12 text-center mt-4"><h3>身長</h3></div>
    <div class="col-7 offset-2 mt-2 mb-4">
         <input type="number" maxlength="3" required class="form-control" name="height" placeholder="height" value="{{ old('height') }}">
    </div>
    <div class="col-1 mt-3 p-0"><h5>cm</h5></div>
  </div>    
  <div class="form-group row">
    <div class="col-12 text-center mt-2"><h3>体重</h3></div>
    <div class="col-7 offset-2 mt-2 mb-4">
         <input type="number" required class="form-control" name="weight" placeholder="body weight" value="{{ old('weight') }}">
    </div>
    <div class="col-1 mt-3 p-0"><h5>kg</h5></div>
  </div>
  <div class="form-group row">
    <div class="col-12 text-center mt-2"><h3>体脂肪率</h3></div>
    <div class="col-7 offset-2 mt-2 mb-4">
       <input type="number" class="form-control" name="fat" placeholder="body Fat" value="{{ old('fat') }}">
    </div>
    <div class="col-1 mt-3 p-0"><h5>%</h5></div>
  </div>
  <div class="row">
    <div class="col-12 text-center mt-2"><h3>体型</h3></div>
    <div class="col-md-12 mt-2 mb-4 text-center">
      <div class="btn-group btn-group-toggle mb-3" data-toggle="buttons">
        <label class="btn btn-dark active">
            <input type="radio" name="bodyType" required value="01" {{(old('bodyType')=="01")? "checked":"" }}> 痩せ型体型
        </label>
        <label class="btn btn-dark">
             <input type="radio" name="bodyType" required value="02" {{(old('bodyType')=="02")? "checked":"" }}> 筋肉質体型
        </label>
        <label class="btn btn-dark">
              <input type="radio" name="bodyType" required value="03" {{(old('bodyType')=="03")? "checked":"" }}> 肥満型体型
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row ">
    <div class="col-12 text-center mt-4"><h3>自己紹介</h3></div>
    <div class="col-10 mx-auto  mb-4">
       <label for="self_introduction"></label>
       <textarea class="form-control" maxlength="300" required name="introduction" id="self_introduction" rows="10">{{ old('introduction') }}</textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-12 text-center mt-2"><h3>プロフィール画像</h3></div>  
    <div class="col-12 text-center mt-2">
      <label class="btn btn-dark">
          画像を選択
          <input type="file" name="image" accept='image/*' onchange="previewImage(this);" value="images/selection.jpeg" {{old('image') }}>
      </label>
      <div class="col-12 text-center">
         <img id="preview2" class="profile-image-sm" alt="プロフィール画像" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 text-center mt-2">
      {{ csrf_field() }}
      <p>※体脂肪率の入力は必須ではありません。<br>入力するとより緻密なトレーニング管理を行えます。</p>
      <p class="pb-3">※プロフィール画像の入力は必須ではありません。<br>プロフィール画像はコミュニティで使用します。</p>
      <button type="submit" class="btn btn-dark  profile-register-sm">
        プロフィールを登録
      </button>
    </div>
  </div>
 </form>
</div>



<script>
function previewImage(obj)
{
	var fileReader = new FileReader();
	fileReader.onload = (function() {
		document.getElementById('preview').src = fileReader.result;
		document.getElementById('preview2').src = fileReader.result;
	});
	fileReader.readAsDataURL(obj.files[0]);
}
</script>



@endsection
 
