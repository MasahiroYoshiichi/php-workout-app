@extends('layouts.admin')

@section('title', 'イベント記事一覧')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <h2>イベント記事一覧</h2>
    </div>
    <div class="row">
        <div class="col-md-3" >
            <h4>イベント新規作成</h4>
        </div>
        <div class="col-md-9">
            <form>
                <div class="form-group row">
                    <label class="col-md-2">イベント検索</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="cond_title">
                    </div>
                    <div class="col-md-2">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-light" value="検索">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="row">
                <table class="table table-light" style="height: 50rem;">
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <td width="10%%">日付</td>
                            <td width="70%">イベント内容</td>
                            <td width="10%">操作</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>