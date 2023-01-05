@extends('layouts.app')

@section('content')
<div id="homeCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#homeCarousel" data-slide-to="1"></li>
        <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block" src="/png/sample.jpg" style="width:100%; height: 300px;" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Headline 1</h5>
                <p>Summary</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block" src="/png/sample.jpg" style="width:100%; height: 300px;" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Headline 2</h5>
                <p>Summary</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block" src="/png/sample.jpg" style="width:100%; height: 300px;" alt="Third slide">
            <div class="carousel-caption d-none d-md-block" style="text-align:left">
                <h5>Headline 3</h5>
                <p>Summary</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
</div>
<div class="container-fluid d-flex px-4 py-4" id="content">
    <div id="content-item" style="margin: auto;">
        <div class="card" style="width: 40rem; position:relative;">
            <div class="card-body">
                <h5 class="card-title">Welcome to SNHS Student Center</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad vero maxime similique asperiores. Veritatis esse enim illum. Obcaecati ut delectus voluptate, natus velit id sapiente! At amet veritatis in sapiente? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem sint placeat tempore nobis minima qui impedit ullam enim est, fuga, quasi laborum maiores iste reprehenderit! Consectetur libero ratione fugiat magni.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div id="content-item" style="margin: auto;">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">Welcome to SNHS Student Center</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad vero maxime similique asperiores. Veritatis esse enim illum. Obcaecati ut delectus voluptate, natus velit id sapiente! At amet veritatis in sapiente? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem sint placeat tempore nobis minima qui impedit ullam enim est, fuga, quasi laborum maiores iste reprehenderit! Consectetur libero ratione fugiat magni.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>

@endsection
