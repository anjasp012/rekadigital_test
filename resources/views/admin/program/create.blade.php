@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
        <h1>List Programs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Programs</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Multi Columns Form</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" action="{{ route('programs.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <label for="name" class="form-label">Nama Program</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col-md-12">
                                <label for="photo" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>
                            <div class="col-md-12">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="meeting" class="form-label">Pertemuan</label>
                                <input type="number" class="form-control" id="meeting" name="meeting">
                            </div>
                            <div class="col-md-6">
                                <label for="month" class="form-label">Bulan</label>
                                <input type="number" class="form-control" id="month" name="month">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
