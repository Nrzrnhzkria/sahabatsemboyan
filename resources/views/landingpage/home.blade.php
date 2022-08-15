@extends('layouts.frontend')

@section('title')
  Home
@endsection

@section('content')

<style>

.banner {
  background-image: url("{{ asset('storage/img/perjuangan.jpeg') }}");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

</style>

<main>

  <section class="banner py-3">
    
    <div class="container">
      <div class="row justify-content-end p-5">
        <div class="col-md-auto">
        </div>
        <div class="col-md-auto">
        </div>
        <div class="col-md-4">
          
          <!-- Register/Login -->
          <div class="card border-0 shadow">
            <div class="card-body">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Daftar Ahli</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Login</button>
                </div>
              </nav>
              <div class="tab-content px-4 pb-3" id="nav-tabContent">
                <!-- Register Tab -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

                  <p class="mt-3 fw-bold text-danger">Pendaftaran Sebagai Ahli</p>
                  <p class="text-muted">Masukkan maklumat di bawah sekiranya berminat menjadi ahli Semboyan</p>
              
                  <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="my-3">
                      <label for="staticName" class="form-label">Nama Penuh</label>
                      <input type="email" class="form-control" id="staticName" placeholder="Masukkan nama penuh" required autofocus>
                    </div>

                    <div class="my-3">
                      <label for="staticPhoneNo" class="form-label">Nombor Telefon</label>
                      <input type="number" class="form-control" id="phoneno" name="phoneno" placeholder="+60" required autofocus>
                    </div>

                    <div class="my-3">
                      <label for="staticEmail" class="form-label">Emel</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat emel" required autofocus>
                    </div>

                    <div class="row pt-3">
                      <button type="submit" class="btn btn-danger">{{ __('Register') }}</button>
                    </div>
                  </form>
                </div>

                <!-- Login Tab -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="my-3">
                        <label for="email" class="form-label">Emel</label>
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="my-3">
                        <label for="password" class="form-label">Kata Laluan</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="my-3">
                      <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                      </label>
                    </div>

                    <div class="row justify-content-end my-3">
                      <div class="col-auto">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Forgot your password?') }}
                        </a>
                        @endif
                      </div>
                      <div class="col-auto">
                        <button type="submit" class="btn btn-danger">{{ __('Log in') }}</button>
                      </div>     
                    </div>

                  </form>
                </div>
                
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>

  <section class="bg-light py-5">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-md-5">
          <h4>Bukan sekadar mendengar rintihan pengguna-pengguna, tetapi kami akan memperjuangkan dan membela nasib rakyat Malaysia yang ditindas!</h4>
          <p class="text-muted py-3">Kami komited terhadap misi kami membantu pengguna di Malaysia yang menghadapi pelbagai jenis permasalahan dan pihak kami juga
            menawarkan bantuan khidmat rundingan dalam mencari penyelesaian terbaik di antara pihak terlibat.
          </p>
        </div>
        <div class="col-md-5">
          <img src="{{ asset('storage/img/perjuangan.jpeg') }}" alt="banner1" width="100%">
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light py-5">
    <div class="container">
      <h4 class="text-center pb-5">Perkhidmatan & Keistimewaan Bakal Ahli Semboyan Malaysia</h4>

      <div class="row justify-content-center text-center">
        <div class="col-md-4 p-3">
          <div class="card" style="height:12rem;">
            <div class="card-body">
              <h5 class="text-danger py-3">Crisis Response Team</h5>
              <p>Bantuan dan sokongan sekiranya berlaku perkara yang tidak diingini</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 p-3">
          <div class="card" style="height:12rem;">
            <div class="card-body">
              <h5 class="text-danger py-3">Nasihat Guaman</h5>
              <p>Nasihat guaman melalui panel-panel peguam yang bertauliah melibatkan kes-kes berkaitan dengan undang-undang</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 p-3">
          <div class="card" style="height:12rem;">
            <div class="card-body">
              <h5 class="text-danger py-3">Surat Tuntutan Undang-Undang</h5>
              <p>Semboyan Malaysia membantu untuk mengeluarkan surat tuntutan berkaitan undang-undang</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-4 p-3">
          <div class="card" style="height:12rem;">
            <div class="card-body">
            <h5 class="text-danger py-3">Menjawab surat tuntutan</h5>
            <p>Membantu ahli untuk menjawab surat tuntutan undang-undang yang dikeluarkan kepada ahli untuk mendapatkan penyelesaian di luar mahkamah</p>
          </div>
          </div>
        </div>

        <div class="col-md-4 p-3">
          <div class="card" style="height:12rem;">
            <div class="card-body">
            <h5 class="text-danger py-3">Khairat Kematian</h5>
            <p>Setiap ahli dan waris layak mendapat perlindungan bantuan khairat kematian (kos urus jenazah) berjumlah RM1,000</p>
          </div>
          </div>
        </div>
      </div>
        
    </div>
  </section>

  <section class="bg-light py-5">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-md-5 py-3">
        <img src="{{ asset('storage/img/hands.jpeg') }}" alt="banner2" width="100%">
        </div>
        <div class="col-md-5 py-3">
          <h4 class="pb-4">Ayuh Menyumbang Bersama Kami</h4>
          <p>Sumbangan anda dapat membantu:</p>
          <p><i class="bi bi-check-square-fill text-success"></i> Penyelesaian Kes & Aduan Penganiayaan Serta Penipuan</p>
          <p><i class="bi bi-check-square-fill text-success"></i> Bantuan Kepada Mangsa Ditindas</p>
          <p><i class="bi bi-check-square-fill text-success"></i> Program Kesedaran Masyarakat</p>
          <p><i class="bi bi-check-square-fill text-success"></i> Sumbangan Bantuan Kepada Golongan Kurang Berkemampuan</p>
          <p><i class="bi bi-check-square-fill text-success"></i> Pendidikan Pengguna</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">

      <h4 class="text-center">Bangkit Semangat Juang</h4>
      <p class="text-center pb-3">Dapatkan t-shirt Semboyan Limited Edition sekarang melalui platform digital kami</p>

      <div class="row">

        <div class="col-md-3 p-3">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 p-3">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 p-3">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 p-3">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        
      </div>

      <div class="row justify-content-center">
        <div class="col-auto p-3">
          <a href="" class="btn btn-outline-danger">Lihat Semua Produk <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
        
    </div>
  </section>

  <section class="bg-light py-5">
  </section>

</main>

@endsection