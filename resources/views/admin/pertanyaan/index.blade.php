@extends('layouts.admin')

@section('content')
    <div class="pagetitle">
        <h1>Pertanyaan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Pertanyaan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">Pertanyaan</h5>
                            <a href="{{ route('pertanyaan.create') }}" class="btn btn-success">Add Pertanyaan</a>
                        </div>
                        <p>List Of Pertanyaan</p>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($asks as $key => $ask)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $ask->title }}</td>
                                        <td>{{ $ask->description }}</td>
                                        <td>
                                            <form action="{{ route('pertanyaan.destroy', $ask->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('pertanyaan.edit', $ask->id) }}"
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
