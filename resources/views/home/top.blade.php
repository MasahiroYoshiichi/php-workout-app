@extends('layouts.general')

@section('title', 'トップページ')

@section('content')
 <div class="jumbotron jumbotron-extend">
    <div class="container-fluid jumbotron-container">
        <div class="row">
            <div class="col-md-8 top-title">
                <div class="d-none d-md-block top-title">
                    最高のワークアウトを全ての人へ
                </div>
                <div class="d-block d-md-none top-title-sm">
                    最高のワークアウトを全ての人へ
                </div>
                <a type="button" class="btn btn-light btn-lg" href="/introduction">Let's Workout</a>
            </div>
        </div>
    </div>
</div>
@endsection