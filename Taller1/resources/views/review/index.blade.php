@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div>
        @if(isset($viewData["reviews"]) && count($viewData["reviews"]) > 0)
            @foreach($viewData['reviews'] as $review)
                <div class = "card list"> 
                    <span class ="logo__bold">{{ $review->name_user }}: </span>
                    {{ $review->content }} &nbsp&nbsp&nbsp 
                    <a class ="button" href="{{ route('review.show', ['id'=> $review["id"]])}}">OPEN REVIEW</a>
                </div>
            @endforeach
        @endif

        <a href="{{ route('product.index') }}" class="button">back</a>
</div>
@endsection