@extends('layouts.app')

@section('content')
    <div class="page-content page-home">
        <section class="company-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6" data-aos="fade-right">
                        <h3>Advance your career with LKP Mandiri</h3>
                        <p class="mt-3">Tingkatkan kemampuanmu untuk masa depan yang lebih baik dengan program pelatihan
                            komprehensif secara gratis</p>
                        <div class="d-lg-flex align-items-center gap-4 mt-5">
                            <button class="btn btn-primary rounded-pill btn-lg btn-kursus">Daftar Kursus</button>
                            <a href="" class="text-black">Pelajari lebih lanjut</a>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 col-lg-7">
                                <div class="card border-black border-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="title-card">250+</div>
                                                <div class="subtitle-card">Siswa</div>
                                            </div>
                                            <div class="col-4">
                                                <div class="title-card">30</div>
                                                <div class="subtitle-card">Mentor</div>
                                            </div>
                                            <div class="col-4">
                                                <div class="title-card">8</div>
                                                <div class="subtitle-card">Program</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 d-none d-lg-block" data-aos="fade-left">
                        <img src="/images/header.png" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </section>
        <section class="company-cooperation">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12" data-aos="fade-down">
                        <h4 class="section-title">Bekerja Sama Dengan</h4>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="d-flex align-items-center gap-4">
                            <img src="/images/kemdikbud.png" alt="" style="max-width: 20%;">
                            <p class="text-secondary mb-0">Kemdikbud RI</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="d-flex align-items-center gap-4">
                            <img src="/images/kemdikbud.png" alt="" style="max-width: 20%;">
                            <p class="text-secondary mb-0">Kemdikbud RI</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="d-flex align-items-center gap-4">
                            <img src="/images/kemdikbud.png" alt="" style="max-width: 20%;">
                            <p class="text-secondary mb-0">Kemdikbud RI</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="d-flex align-items-center gap-4">
                            <img src="/images/kemdikbud.png" alt="" style="max-width: 20%;">
                            <p class="text-secondary mb-0">Kemdikbud RI</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="d-flex align-items-center gap-4">
                            <img src="/images/kemdikbud.png" alt="" style="max-width: 20%;">
                            <p class="text-secondary mb-0">Kemdikbud RI</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <div class="d-flex align-items-center gap-4">
                            <img src="/images/kemdikbud.png" alt="" style="max-width: 20%;">
                            <p class="text-secondary mb-0">Kemdikbud RI</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                        <div class="d-flex align-items-center gap-4">
                            <img src="/images/kemdikbud.png" alt="" style="max-width: 20%;">
                            <p class="text-secondary mb-0">Kemdikbud RI</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="company-programs">
            <div class="container">
                <div class="row" data-aos="fade-right">
                    <div class="col-12  col-lg-6">
                        <h4 class="section-title">Program-program terbaik untuk mengawali karirmu</h4>
                    </div>
                </div>
                <div class="row mt-4 g-4">
                    @forelse ($programs as $program)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <a href="" class="component-program card border-0 shadow">
                                <div class="card-body">
                                    <div class="card-thumbnail rounded-4">
                                        <div class="img-thumbnail border-0"
                                            style="background-image: url('{{ $program->getPicture() }}');"></div>
                                    </div>
                                    <h5 class="card-title my-3">
                                        {{ $program->name }}
                                    </h5>
                                    <p class="card-subtitle text-secondary">
                                        {!! Str::words($program->description, 50, '...') !!}
                                    </p>
                                    <div class="card-detail">
                                        <p class="mb-0">{{ $program->meeting }} Pertemuan</p>
                                        <p class="mb-0">{{ $program->month }} Bulan</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
        <section class="company-story bg-primary">
            <div class="container">
                <div class="row align-items-center justify-content-between g-4">
                    <div class="col-lg-5" data-aos="fade-right">
                        <h4 class="section-title text-white">LKP Mandiri berdedikasi tinggi untuk terus mengajar</h4>
                        <p class="section-subtitle text-white">Berawal dari kursus rumahan hingga mampu melengkapi segala
                            fasitilas yang
                            dibutuhkan, LKP Mandiri berdedikasi tinggu untuk terus mengajarkan keterampilan kepada
                            masyarakat</p>
                        <button class="btn btn-light rounded-pill btn-lg btn-cerita">Cerita Kami</button>
                    </div>
                    <div class="col-lg-5">
                        <img src="/images/vidio-story.png" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="company-testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5" data-aos="fade-right">
                        <h4 class="section-title">Pendapat orang-orang tentang LKP Mandiri</h4>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 position-relative">
                        <div class="owl-carousel owl-theme bg-white">
                            <div class="item" data-aos="fade-up" data-aos-delay="100">
                                <div class="card border-2 rounded-4">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita,
                                            distinctio. Nam consequatur esse vero explicabo ea inventore libero ut
                                            quibusdam?</p>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/user-1.png" style="max-width: 56px;" alt="">
                                            <div>
                                                <p class="fw-medium mb-0">Anin W.</p>
                                                <small>Kelas menjahit</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up" data-aos-delay="200">
                                <div class="card border-2 rounded-4">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita,
                                            distinctio. Nam consequatur esse vero explicabo ea inventore libero ut
                                            quibusdam?</p>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/user-1.png" style="max-width: 56px;" alt="">
                                            <div>
                                                <p class="fw-medium mb-0">Anin W.</p>
                                                <small>Kelas menjahit</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up" data-aos-delay="300">
                                <div class="card border-2 rounded-4">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita,
                                            distinctio. Nam consequatur esse vero explicabo ea inventore libero ut
                                            quibusdam?</p>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/user-1.png" style="max-width: 56px;" alt="">
                                            <div>
                                                <p class="fw-medium mb-0">Anin W.</p>
                                                <small>Kelas menjahit</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up" data-aos-delay="400">
                                <div class="card border-2 rounded-4">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita,
                                            distinctio. Nam consequatur esse vero explicabo ea inventore libero ut
                                            quibusdam?</p>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/user-1.png" style="max-width: 56px;" alt="">
                                            <div>
                                                <p class="fw-medium mb-0">Anin W.</p>
                                                <small>Kelas menjahit</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up" data-aos-delay="500">
                                <div class="card border-2 rounded-4">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita,
                                            distinctio. Nam consequatur esse vero explicabo ea inventore libero ut
                                            quibusdam?</p>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="/images/user-1.png" style="max-width: 56px;" alt="">
                                            <div>
                                                <p class="fw-medium mb-0">Anin W.</p>
                                                <small>Kelas menjahit</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute" data-aos="fade-up" data-aos-delay="400">
                            <div class="d-none d-xxl-flex gap-5 align-items-center">
                                <img src="/images/thumbs.png" alt="">
                                <img src="/images/starts.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="company-join-now">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <div class="thumbnail-now rounded-4 align-items-center">
                            <div class="img-now d-flex justify-content-center align-items-center"
                                style="background-image: url(/images/section-now.png);">
                                <div class="text-center">
                                    <h4 class="section-title text-white ">Siap untuk mengubah masa depanmu?</h4>
                                    <p class="section-subtitle text-white  mt-3">Daftar kursus sekarang, dan mulai
                                        perjalananmu menuju karir
                                        yang lebih cemerlang</p>
                                    <button class="btn btn-light rounded-pill btn-lg btn-join-now mt-4">Daftar
                                        Kursus</button>

                                </div>
                            </div>
                        </div>
                        <!-- <img src="/images/section-now.png" class="w-100" alt="">
                                                                                                                    <div class="position-absolute top-50 start-50 translate-middle">
                                                                                                                    </div> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="company-asked">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 text-center" data-aos="fade-up">
                        <h4 class="section-title">Frequently Asked Questions</h4>
                        <p class="section-subtitle text-secondary mt-3 mx-auto">Pertanyaan-pertanyaan yang sering
                            ditanyakan oleh
                            calon peserta didik sebelum mendaftar kursus LKP Mandiri</p>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <div class="accordion accordion-company" id="accordionExample">
                            @forelse ($asks as $ask)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#{{ $ask->title }}" aria-expanded="true"
                                            aria-controls="{{ $ask->title }}">
                                            {{ $ask->title }}
                                        </button>
                                    </h2>
                                    <div id="{{ $ask->title }}" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $ask->description }}
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
