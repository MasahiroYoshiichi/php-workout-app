@extends('layouts.admin')

@section('title', 'イベント作成画面')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 mx-auto" style="margin-top: 5rem">
            <h3>イベント記事作成</h3>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-8 mx-auto text-center">
           <label class="col-md-2" for="date">投稿年月日</label>
           <div class="col-md-4 offset-4">
               <input type="text" class="form-control" id="data" value="{{ old('data') }}"> 
           </div>
           <label class="col-md-2" for="post">イベント内容</label>
           <div class="col-md-8 offset-2 mb-3">
               <input type="text" class="form-control" id="post" value="{{ old('post') }}">
           </div>
            {{ csrf_field() }}
        　  <input type="submit" class="btn btn-light" value="更新">
        </div>
    </div>
</div>
