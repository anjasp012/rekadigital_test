@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
        <h1>Edit Program</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Programs</li>
                <li class="breadcrumb-item active">Edit Program</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" action="{{ route('programs.update', $program->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-12">
                                <label for="name" class="form-label">Nama Program</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $program->name }}">
                            </div>
                            <div class="col-md-12">
                                <label for="photo" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="photo" name="photo"
                                    value="{{ $program->photo }}">
                            </div>
                            <div class="col-md-12">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea name="description" id="description" class="form-control">{{ $program->description }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="meeting" class="form-label">Pertemuan</label>
                                <input type="number" class="form-control" id="meeting" name="meeting"
                                    value="{{ $program->meeting }}">
                            </div>
                            <div class="col-md-6">
                                <label for="month" class="form-label">Bulan</label>
                                <input type="number" class="form-control" id="month" name="month"
                                    value="{{ $program->month }}">
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
