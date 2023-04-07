@extends('layouts.app')

@section('content')
    <div class="page-content page-tentang">
        <section class="company-header">
            <div class="header-thumbnail">
                <div class="img-header" style="background-image: url(/images/tentang.png);"></div>
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
    </div>
@endsection
