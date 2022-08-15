@extends('layouts.frontend')

@section('title')
    Keahlian
@endsection

@section('content')

<main>
    <section class="bg-light">

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">

                    <img class="img-fluid pb-3" src="{{ asset('storage/img/wording_semboyan.png') }}" alt="wording_semboyan" width="50%">

                    <div class="card text-start border-0">
                        <div class="card-body">
                            <p class="mt-3 fw-bold text-danger">Pendaftaran Sebagai Ahli</p>
                            <p class="text-muted">Masukkan maklumat di bawah sekiranya berminat menjadi ahli Semboyan</p>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="my-3">
                                    <label for="staticName" class="form-label">Nama Penuh</label>
                                    <input type="text" class="form-control" id="staticName" name="name" placeholder="Masukkan nama penuh" required autofocus>
                                </div>

                                <div class="my-3">
                                    <label for="staticPhoneNo" class="form-label">Nombor Telefon</label>
                                    <input type="number" class="form-control" id="staticPhoneNo" name="phoneno" placeholder="+60" required autofocus>
                                </div>

                                <div class="my-3">
                                    <label for="staticEmail" class="form-label">Emel</label>
                                    <input type="email" class="form-control" id="staticEmail" name="email" placeholder="Masukkan alamat emel" required autofocus>
                                </div>

                                <div class="my-3">
                                    <label for="staticPassword" class="form-label">Kata Laluan</label>
                                    <input type="password" class="form-control" id="staticPassword" name="password" placeholder="Masukkan kata laluan" required autocomplete="new-password">
                                </div>

                                <div class="my-3">
                                    <label for="staticPassword_confirmation" class="form-label">Pastikan Kata Laluan</label>
                                    <input type="password" class="form-control" id="staticPassword_confirmation" name="password_confirmation" placeholder="Masukkan semula kata laluan" required>
                                </div>

                                <div class="row px-2 py-3">
                                    <button type="submit" class="btn btn-danger">Daftar Sekarang</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
</main>

@endsection