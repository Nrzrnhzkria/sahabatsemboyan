@extends('layouts.frontend')

@section('title')
    Shop
@endsection

@section('content')

<main>
    <section class="bg-light">

        <div class="row pb-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{ asset('storage/img/banner.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('storage/img/banner.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('storage/img/banner.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        {{-- Keluaran Terbaharu --}}
        <div class="container">
            <p class="fw-bold">Keluaran Terbaharu</p>

            <div class="row">

                <div class="col-md-3 p-3">
                    <a href="#" class="card text-decoration-none">
                        <img src="{{ asset('storage/img/baju.jpeg') }}" class="card-img-top" alt="baju">
                        <div class="card-body fw-bold">
                            <p class="card-text text-dark">Semboyan Jihad T-Shirt (Hitam)</p>
                            <p class="card-text text-danger">RM55.00</p>
                        </div>
                    </a>
                </div>
        
                <div class="col-md-3 p-3">
                    <a href="#" class="card text-decoration-none">
                        <img src="{{ asset('storage/img/baju.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body fw-bold">
                            <p class="card-text text-dark">Semboyan Jihad T-Shirt (Hitam)</p>
                            <p class="card-text text-danger">RM55.00</p>
                        </div>
                    </a>
                </div>
        
                <div class="col-md-3 p-3">
                    <a href="#" class="card text-decoration-none">
                        <img src="{{ asset('storage/img/baju.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body fw-bold">
                            <p class="card-text text-dark">Semboyan Jihad T-Shirt (Hitam)</p>
                            <p class="card-text text-danger">RM55.00</p>
                        </div>
                    </a>
                </div>
        
                <div class="col-md-3 p-3">
                    <a href="#" class="card text-decoration-none">
                        <img src="{{ asset('storage/img/baju.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body fw-bold">
                            <p class="card-text text-dark">Semboyan Jihad T-Shirt (Hitam)</p>
                            <p class="card-text text-danger">RM55.00</p>
                        </div>
                    </a>
                </div>
        
            </div>
        </div>

        {{-- Limited Edition --}}
        <div class="container py-5">
            <p class="fw-bold">Limited Edition</p>

            <div class="row">

                <div class="col-md-3 p-3">
                    <a href="#" class="card text-decoration-none">
                        <img src="{{ asset('storage/img/baju.jpeg') }}" class="card-img-top" alt="baju">
                        <div class="card-body fw-bold">
                            <p class="card-text text-dark">Semboyan Jihad T-Shirt (Hitam)</p>
                            <p class="card-text text-danger">RM55.00</p>
                        </div>
                    </a>
                </div>
        
                <div class="col-md-3 p-3">
                    <a href="#" class="card text-decoration-none">
                        <img src="{{ asset('storage/img/baju.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body fw-bold">
                            <p class="card-text text-dark">Semboyan Jihad T-Shirt (Hitam)</p>
                            <p class="card-text text-danger">RM55.00</p>
                        </div>
                    </a>
                </div>
        
                <div class="col-md-3 p-3">
                    <a href="#" class="card text-decoration-none">
                        <img src="{{ asset('storage/img/baju.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body fw-bold">
                            <p class="card-text text-dark">Semboyan Jihad T-Shirt (Hitam)</p>
                            <p class="card-text text-danger">RM55.00</p>
                        </div>
                    </a>
                </div>
        
                <div class="col-md-3 p-3">
                    <a href="#" class="card text-decoration-none">
                        <img src="{{ asset('storage/img/baju.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body fw-bold">
                            <p class="card-text text-dark">Semboyan Jihad T-Shirt (Hitam)</p>
                            <p class="card-text text-danger">RM55.00</p>
                        </div>
                    </a>
                </div>
        
            </div>
        </div>

    </section>
</main>

@endsection