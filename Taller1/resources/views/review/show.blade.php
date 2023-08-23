@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card"> 
    <h2 class="no-margin no-padding" >
        {{ $viewData['name_user'] }}
    </h2>
    <h5 class="no-margin no-padding">Review</h5>

    <div class="card-2">
        <p>{{ $viewData['content'] }}</p>
        <form action="{{ route('review.delete', ['id' => $viewData['review']->getId()]) }}" method="POST">
        @csrf
        <button class="button" type="submit">DELETE</button>
        </form>

    </div>

    <a href="{{ route('review.index') }}" class="button">Return</a>
    
</div>
@endsection