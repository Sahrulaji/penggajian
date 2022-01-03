@extends('layout.main')

@section('main-content')
    <div class="container mb-3">
        <div class="row">
            <div class="title">
            <h2>Detail Pegawai</h2>
            </div>
        </div>
    </div>
    <div class="container wrp-contain">
        <div class="row wrap-tabe" id="form">
            <div class="col-12 col-md-7">
                <div class="wrp-form mb-3">
                    <div class="item">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="number" id="nip" class="form-control" value="{{ $item->nip }}">
                    </div>
                    <div class="item">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="name" class="form-control" value="N{{ $item->nama }}">
                    </div>   
                    <div class="item">
                        <label for="rekening" class="form-label">No Rekening</label>
                        <input type="number" id="rekening" class="form-control" value="{{ $item->rekening }}">
                    </div>
                    <div class="item">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input id="jabatan" class="form-control" type="text" value="{{ $item->jabatan }}">
                    </div>
                    <div class="item">
                        <label for="gapok" class="form-label">Gaji Pokok</label>
                        <input type="number" id="gapok" class="form-control" value="{{ $item->gapok }}">
                    </div> 
                    <div class="item">
                        <label for="masuk" class="form-label">Tanggal Masuk</label>
                        <input type="date" id="masuk" class="form-control" value="{{ $item->masuk }}">
                    </div>
                </div>

                <div class="d-flex align-items-center" id="create">
                    <a type="button" class="btn btn-danger ms-3" href="/">Cancel</a>
                </div>
            </div>

            <div class="col-12 col-md-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $item->file }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $item->nama }}</h5>
                        <p class="card-text">{{ $item->nip }}<br>{{ $item->jabatan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection