@extends('layouts.general')

@section('title', 'イベント')

@section('content')
<div class="container-fluid event-image ">
    <div class="row">
        <div class="col-md-5 mx-auto  bg-light">
           <p class="text-dark text-center" style="font-size: 4rem;">event</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 mx-auto bg-light vh-100">
            <p class="text-dark text-center" style="font-size: 1.5rem">新着記事</p>
            <ul class="text-dark pl-5">
                <dl>
                    <dt>2021.11.15</dt>
                    <dd>様々なコースが用意されています。是非一度ご覧ください。</a></dd>
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