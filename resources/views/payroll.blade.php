@extends('layout.main')

@section('main-content')
<div class="container mb-3">
    <div class="row">
        <div class="title">
        <h2>Payroll</h2>
        </div>
    </div>
</div>

<div class="container wrp-contain">
    <div class="row mb-2">
        <div class="col d-flex align-items-center justify-content-between" id="create">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-upload"></i> Import absen
            </button>
            <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle" type="button" id="generateGaji" data-bs-toggle="dropdown" aria-expanded="false">
                  Generate Gaji
                </button>
                <ul class="dropdown-menu" aria-labelledby="generateGaji">
                    <li><a class="dropdown-item" href="#">Normal</a></li>
                    <li><a class="dropdown-item" href="#">Custom</a></li>
                </ul>
              </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped table-hover">
            <thead class="bg-primer text-light">
                <tr>
                    <th>
                        <input class="form-check-input" type="checkbox" value="">
                    </th>
                    <th>NIP </th>
                    <th>Nama</th>
                    <th>Total Kerja</th>
                    <th>Gaji</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input class="form-check-input" type="checkbox" value="">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Absen Karyawan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label"></label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection