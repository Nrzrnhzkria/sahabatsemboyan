<nav class="navbar navbar-expand-lg sticky-top shadow" style="background-color: #ffffff;">
    <div class="container">
        <a class="navbar-brand">
            <img class="img-fluid" src="{{ asset('storage/img/sahabatsemboyan.png') }}" alt="logo" width="60rem">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav fw-bold">
                <li class="nav-item">
                    <a class="nav-link" href="/">Laman Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/keahlian">Keahlian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/news">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/media">Sedekah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hubungi">Hubungi Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function(){
    // make it as accordion for smaller screens
    if (window.innerWidth > 992) {

        document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

            everyitem.addEventListener('mouseover', function(e){

                let el_link = this.querySelector('a[data-bs-toggle]');

                if(el_link != null){
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.add('show');
                    nextEl.classList.add('show');
                }

            });
            everyitem.addEventListener('mouseleave', function(e){
                let el_link = this.querySelector('a[data-bs-toggle]');

                if(el_link != null){
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.remove('show');
                    nextEl.classList.remove('show');
                }


            })
        });

    }
    // end if innerWidth
    }); 
</script>