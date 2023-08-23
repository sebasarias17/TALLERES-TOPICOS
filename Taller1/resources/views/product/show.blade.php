@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div>
    <div>
    <div>
        <img class="img--description" src="{{ $viewData["product"]["img"] }}">
    </div>
    <div>
        <div>
        <h5 class="no-margin">
            {{ $viewData["product"]["name"] }}
        </h5>

        <h3 class="no-margin">
            Description
        </h3>
        <p>{{ $viewData["product"]["description"] }}</p>
        </div>
        <h3 >
            Reviews
        </h3>
        
        <a class="button" href="{{ route('review.index') }}">Reviews</a>

    </div>
    </div>
</div>
@endsection
