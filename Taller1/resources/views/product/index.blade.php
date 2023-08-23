@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="cont_product">
    @foreach ($viewData["products"] as $product)
    <div class="card">
        <img src="{{ $product["img"] }}" class="img--product">
        <div class="center-text">
            <a  class="button" href="{{ route('product.show', ['id'=> $product["id"]])}}">{{ $product["name"] }}</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
