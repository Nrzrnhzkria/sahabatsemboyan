@extends('layouts.frontend')

@section('title')
    Hubungi Kami
@endsection

@section('content')

<main>
    <section class="bg-light">

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-4 bg-secondary bg-opacity-10 px-4 py-5">
                    <h5>Jika Anda Ada Persoalan atau Pertanyaan, Sila Hubungi Kami</h5>
                    <p class="fw-bold text-danger">SAHABAT SEMBOYAN</p>
                    <p>Suite C-3-6
                    <br>Megan Avenue 1, Jalan Tun Razak,
                    <br>50400 Kuala Lumpur.</p>
                </div>
                <div class="col-md-4 bg-danger px-4 py-4">
                    <form method="POST" action="{{ url('pertanyaan') }}">
                        @csrf

                        <div class="my-3">
                            <label for="staticName" class="form-label text-white">Nama Penuh</label>
                            <input type="email" class="form-control" id="name" placeholder="Masukkan nama penuh" required autofocus>
                        </div>

                        <div class="my-3">
                            <label for="email" class="form-label text-white">Alamat Emel</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat emel" required autofocus>
                        </div>

                        <div class="my-3">
                            <label for="Pertanyaan" class="form-label text-white">Pertanyaan</label>
                            <textarea class="form-control" id="Pertanyaan" name="pertanyaan" rows="2"></textarea>
                        </div>

                        <div class="row px-2 py-3">
                            <button type="submit" class="btn btn-outline-light">Hantar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
</main>

@endsection