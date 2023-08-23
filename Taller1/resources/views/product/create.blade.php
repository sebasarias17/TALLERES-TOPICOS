@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="card">
    <div class="card-header">Create a review</div>

        @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
        <ul id="errors" class="alert">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form method="POST" action="{{ route('product.save') }}">
            @csrf
            <div class="form-container">
                <input type="text" class="form-control mb-2" placeholder="Enter name" name="name_user" value="{{ old('name_user') }}" />
                <input type="text" class="form-control mb-2" placeholder="Enter a review" name="content" value="{{ old('content') }}" />
            </div>
            <input type="submit" class="button button_form" value="Send" />
        </form>
    </div>
</div>
@endsection
