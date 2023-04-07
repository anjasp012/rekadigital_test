@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
        <h1>Programs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Programs</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">Programs</h5>
                            <a href="{{ route('programs.create') }}" class="btn btn-success">Add Program</a>
                        </div>
                        <p>List Of Programs</p>

                        <!-- Table with stripped rows -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Program</th>
                                    <th scope="col">Foto Thumbnail</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Jumlah pertemuan</th>
                                    <th scope="col">Jumlah Bulan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($programs as $key => $program)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $program->name }}</td>
                                        <td><img src="{{ asset($program->photo) }}" class="w-25" alt=""></td>
                                        <td>{{ $program->description }}</td>
                                        <td>{{ $program->meeting }}</td>
                                        <td>{{ $program->month }}</td>
                                        <td>
                                            <form action="{{ route('programs.destroy', $program->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('programs.edit', $program->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
