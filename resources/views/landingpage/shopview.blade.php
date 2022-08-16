@extends('layouts.frontend')

@section('title')
    Shop
@endsection

@section('content')

<main>
    <section class="bg-light">

        <div class="container py-5">
            <div class="row justify-content-around">
                <div class="col-md-5">
                    <img src="{{ asset('storage/img/baju.jpeg') }}" class="card-img-top" alt="baju">
                </div>
                <div class="col-md-6 pt-4">

                    <form method="POST" action="{{ url('shop-cart') }}">

                        <h3>Semboyan Jihad T-Shirt (Hitam)</h3>
                        <h4 class="text-danger pb-3">RM55.00</h4>

                        <div class="mb-3 row">
                            <label for="saiz" class="col-sm-2 col-form-label">Saiz</label>
                            <div class="col-sm-4">
                                <select class="form-select" id="saiz" name="saiz" aria-label="Default select example">
                                    <option value="XS" selected>XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="2XL">2XL</option>
                                    <option value="3XL">3XL</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="Kuantiti" class="col-sm-2 col-form-label">Kuantiti</label>
                            <div class="col-sm-4">
                                <select class="form-select" id="Kuantiti" name="kuantiti" aria-label="Default select example">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>

                        <div class="row pt-3 px-2">
                            <button type="submit" class="btn btn-danger"><i class="bi bi-cart"></i> Add To Cart</button>
                        </div>

                    </form>

                    <hr class="my-4">

                    <p class="fw-bold">Description</p>
                    <p class="text-muted">Embrace yourself with our 8th World Constructors' Championship Celebr8, you're definitely drooling over its style and bold design. 
                        Featuring printed logos on the chest, sleeves and back giving a look that’s enhance your style and passion for motor racing. 
                        The main graphic represents challenges, strength, and continuous infinite journey of a champion. Be part of the team.</p>



                </div>
            </div>
        </div>

    </section>
</main>

@endsection