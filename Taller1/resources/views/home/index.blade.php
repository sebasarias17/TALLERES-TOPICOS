@extends('layouts.app')
@section('title', 'StellarCo')
@section('content')
<div>
    <h5>Welcome to StellarCo</h5>
</div>

<section class="card">
    <div class="img_grid">
        <div class = "nasa">
            <img class="img_description img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/NASA_logo.svg/1200px-NASA_logo.svg.png" alt="Nasa logo">
        </div>

        <div class = "spacex">
            <img class="img_description img--spacex" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/SpaceX-Logo.svg/2560px-SpaceX-Logo.svg.png" alt="Nasa logo">
        </div>

        <div class = "blueo">
            <img class="img_description img" src="https://seeklogo.com/images/B/blue-origin-logo-5D6380B50D-seeklogo.com.png" alt="Nasa logo">
        </div>
    </div>

    <div class="descriptionn_stellar">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error voluptate praesentium culpa nesciunt eos numquam, velit porro optio doloribus autem voluptates ad cupiditate iste! Suscipit saepe consequuntur laborum quos necessitatibus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat ratione vitae tempora nam dignissimos dolor distinctio commodi repudiandae, sequi enim. Voluptatum aut odit ullam maiores doloremque esse. Ut, quis necessitatibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo magni labore vel porro repellat fugit numquam est quaerat! Dicta aperiam perferendis fugit error quam repellat dignissimos? Culpa dicta nulla asperiores?
        </p>
    </div>
</section>
@endsection