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
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <a href="" class="component-program card border-0 shadow">
                            <div class="card-body">
                                <div class="card-thumbnail rounded-4">
                                    <div class="img-thumbnail border-0"
                                        style="background-image: url('/images/program-1.png');"></div>
                                </div>
                                <h5 class="card-title my-3">
                                    Kursus Menjahit (Tingkat Dasar)
                                </h5>
                                <p class="card-subtitle text-secondary">
                                    Dalam kursus ini, peserta kursus akan mempelajari dasar-dasar menjahit dan
                                    memperoleh keterampian serta kepercayaan diri untuk memulai menjahit dan membuat
                                    beberapa produk. Kursus ini akan membahas berbagai jenis kain dan cara memilih kain
                                    yang tepat. Peserta kursus akan belajar cara memotong kain secara akurat dan cara
                                    menata dan menyematkan pola.
                                </p>
                                <div class="card-detail">
                                    <p class="mb-0">62 Pertemuan</p>
                                    <p class="mb-0">5 Bulan</p>
                                </div>
                            </div>
                        </a>
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
                        <p class="section-subtitle text-secondary mt-3 mx-auto">Pertanyaan-pertanyaan yang sering ditanyakan
                            oleh
                            calon peserta didik sebelum mendaftar kursus LKP Mandiri</p>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <div class="accordion accordion-company" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Apakah ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
