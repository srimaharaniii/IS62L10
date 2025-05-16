@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Dosen') }}
                    <a href="dosen/tambah"><button type="button" class="btn btn-primary float-end">Tambah Data</button></a>
                </div>

                <div class="card-body">

                   <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Email</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td scope="row">1</td>
                        <td>5651725271</td>
                        <td>cut putri efrina</td>
                        <td>full time</td>
                        <td>putri@gmail.com</td>
                        <td>0823451326</td>
                        <td>
                                    <a href="" class="btn btn-warning btn-sm">detail</a>
                                    <a href="" class="btn btn-info btn-sm">edit</a>
                                    <a href="" class="btn btn-danger btn-sm">hapus</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
