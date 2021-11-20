@extends('layouts.first')

@section('title', 'イベント')

@section('content')
<div class="container-fluid event-image">
    <div class="row justify-content-center">
        <div class="col-md-5  bg-light">
           <p class="text-dark text-center" style="font-size: 4rem;">event</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 bg-light vh-100">
            <p class="text-dark text-center" style="font-size: 1.5rem">新着記事</p>
            <ul class="text-dark">
                <dl>
                    <dt>2021.11.15</dt>
                    <dd><a href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/introduction">様々なコースが用意されています。是非一度ご覧ください。</a></dd>
                    <dt>2021.11.15</dt>
                    <dd>数多くのトレーニング記事が掲載される予定です。</dd>
                    <dt>2021.11.15</dt>
                    <dd>配信開始を楽しみにお待ちください。</dd>
                </dl>
            </ul>
        </div>
    </div>
</div>
@endsection