@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
        <h1>Edit Pertanyaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pertanyaan</li>
                <li class="breadcrumb-item active">Edit Pertanyaan</li>
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
                        <form class="row g-3" action="{{ route('pertanyaan.update', $ask->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="col-md-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $ask->title }}">
                            </div>
                            <div class="col-md-12">
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea name="description" id="description" class="form-control">{{ $ask->description }}</textarea>
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
