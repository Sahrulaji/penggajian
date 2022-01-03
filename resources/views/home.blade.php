
@extends('layout.main')

@section('mainstyle')
<title> data pegawai</title>
    <link href="{{ asset('style/home.css') }}" rel="stylesheet">
@endsection
@section('main-content')
<div class="container mb-3">
    <div class="row">
        <div class="title">
        <h2>List Pegawai</h2>
        </div>
    </div>
</div>
<div class="container wrp-contain mb-4">
    <div class="row mb-2">
        <div class="col d-flex align-items-center justify-content-between" id="create">
            <a href="/create" type="button" class="btn btn-outline-success">create</a>
            <form class="w-30">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
        </div>
    </div>

    <div class="row wrap-tabel" id="tabel1">
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead class="table bg-primer text-light">
                    <tr>                     
                        <th>#</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jabatan</th>                    
                        <th>Tanggal Masuk</th>
                        <th> </th>                     
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $item)
                    <tr>
                        <th scope="row" class="">{{ $item->id }}</th>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->masuk }}</td>
                        <td class="d-flex justify-content-between"><a type="button" class="text-dark" href="/view/{{ $item->id }}"><i class="fas fa-eye"></i></a>
                            <a type="button" class="text-dark" href="/edit/{{ $item->id }}"><i class="far fa-edit"></i></a>
                            <form action="/delete/{{ $item->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn-del" type="submit"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection