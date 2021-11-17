@extends('layouts.first')

@section('title','コミュニティ')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-md-8">
            <div class="card mx-auto mx-0" style="width: 100%; height: 40rem;">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="25rem" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">投稿画像</text></svg>
                <div class="card-body">
                   <h5 class="card-title text-dark text-left">投稿</h5>
                   <p class="card-text text-dark text-left">投稿内容</p>
                </div>
            </div>
            <div class="card mx-auto mx-0" style="width: 100%; height: 40rem;">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="25rem" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">投稿画像</text></svg>
                <div class="card-body">
                   <h5 class="card-title text-dark text-left">投稿</h5>
                   <p class="card-text text-dark text-left">投稿内容</p>
                </div>
            </div>
            <div class="card mx-auto mx-0" style="width: 100%; height: 40rem;">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="25rem" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">投稿画像</text></svg>
                <div class="card-body">
                   <h5 class="card-title text-dark text-left">投稿</h5>
                   <p class="card-text text-dark text-left">投稿内容</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 bg-secondary">
            <div class="sidebar_content">
              <form>
                  <div class="input-group mt-3">
                      <input type="text" class="form-control" placeholder="ジャンル検索">
                      <span class="input-group-btn ml-1">
                          <button type="button" class="btn btn-light">検索</button>
                      </span>
                  </div>
              </form>
              <div class="field_list text-left">
                  <p>検索ランキング</p>
                  <ul>
                      <li>レッグプレス</li>
                      <li>アームカール</li>
                      <li>ストリートワークアウト</li>
                      <li>etc...</li>
                  </ul>
              </div>
            </div>
            <div class="sidebar_fixed">
                固定するコンテンツ
            </div>
        </div>
    </div>
</div>