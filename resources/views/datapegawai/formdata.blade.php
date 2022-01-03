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
            <div class="col-12">
                <form action="/save" method="post">
                    {{ csrf_field() }}
                <div class="wrp-form mb-3">
                    <div class="item">
                        <label for="profil" class="form-label">upload foto</label>
                        <input name="file" type="file" id="profil" class="form-control" placeholder=" pilih file">
                    </div>
                    <div class="item">
                        <label for="nip" class="form-label">NIP</label>
                        <input name="nip" type="number" id="nip" class="form-control" placeholder="">
                    </div>
                    <div class="item">
                        <label for="nama" class="form-label">Nama</label>
                        <input name="nama" type="text" id="name" class="form-control" placeholder="Nama Lengkap">
                    </div>   
                    <div class="item">
                        <label for="rekening" class="form-label">No Rekening</label>
                        <input name="rekening" type="number" id="rekening" class="form-control" placeholder="">
                    </div>
                    <div class="item">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input name="jabatan" id="jabatan" class="form-control" type="text" placeholder="">
                    </div>
                    <div class="item">
                        <label for="gapok" class="form-label">Gaji Pokok</label>
                        <input name="gapok" type="number" id="gapok" class="form-control" placeholder="">
                    </div> 
                    <div class="item">
                        <label for="masuk" class="form-label">Tanggal Masuk</label>
                        <input name="masuk" type="date" id="masuk" class="form-control" placeholder="">
                    </div>
                </div>
                
                <div class="d-flex align-items-center" id="create">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a type="button" class="btn btn-danger ms-3" href="/">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>    
@endsection