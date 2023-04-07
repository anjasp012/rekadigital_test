<nav class="navbar navbar-expand-lg bg-body-tertiary bg-light border-bottom border-opacity-25 border-primary navbar-company fixed-top"
    data-aos="fade-down">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/images/logo.svg" alt="">
            Lkp Mandiri
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-4 me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('home') ? ' active' : '' }}" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('kelas') ? ' active' : '' }}" aria-current="page"
                        href="{{ route('kelas') }}">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('tentang-kami') ? ' active' : '' }}" aria-current="page"
                        href="{{ route('tentang-kami') }}">Tentang Kami</a>
                </li>

            </ul>
            <button class="btn btn-primary btn-lg rounded-pill btn-daftar-kursus" type="submit">Daftar
                Kursus</button>
        </div>
    </div>
</nav>
