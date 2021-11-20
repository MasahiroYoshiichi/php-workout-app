@extends('layouts.admin')

@section('title', 'イベント内容編集')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>イベント内容編集画面</h2>
            <form>
                <div class="form-group row">
                    <label class="col-md-2">投稿年月日</label>
                    <div clas="col-md-6">
                        <input type="text" class="form-control" id="data" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">イベント内容</label>
                    <div clas="col-md-10" style="width: 40rem">
                        <input type="text" class="form-control" id="post" value="">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>