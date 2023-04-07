@extends('layouts.app')

@section('content')
    <div class="page-content page-kelas">
        <section class="company-programs">
            <div class="container">
                <div class="row" data-aos="fade-right">
                    <div class="col-12  col-lg-6">
                        <h4 class="section-title">Program Kursus LKP Mandiri</h4>
                    </div>
                </div>
                <div class="row mt-4 g-4">
                    @forelse ($programs as $program)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
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
                                        <td>{!! Str::words($program->description, 50, '...') !!}</td>
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
                        <p class="section-subtitle text-secondary mt-3 mx-auto">Pertanyaan-pertanyaan yang sering ditanyakan
                            oleh
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
