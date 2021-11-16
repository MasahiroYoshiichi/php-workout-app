@extends('layouts.second')

@section('title', 'コース選択')

@section('content')
<div class="container selection-image">
    <div class="row">
        <div class="col-md-4 bg-secondary">
            <h1 class="text-center">コース選択</h1>
        </div>
        <div class="col-md-12 cours-size">
            <div class="form-check">
                <input class="form-check-input mt-4" type="checkbox" value="" id="cours-selection">
               <label class="form-check-label " for="cours-selection">アスリートコース</label>
            </div>
        <div class="col-md-12">
            <div class="form-check">
               <input class="form-check-input mt-4" type="checkbox" value="" id="cours-selection">
               <label class="form-check-label " for="cours-selection">アスリートコース</label>
            </div>
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input mt-4" type="checkbox" value="" id="cours-selection">
               <label class="form-check-label " for="cours-selection">アスリートコース</label>
            </div>
        </div>
    </div>
</div>