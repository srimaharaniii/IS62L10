@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Dosen') }}
                    <a href="dosen/tambah"><button type="button" class="btn btn-primary float-end"><i class="fa-solid fa-user-plus"></i> Tambah Data</button></a>
                </div>

                <div class="card-body">

                   <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Email</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ( $dosen as $data )
                            <tr>
                                <th scope="row">{{ $nomor++ }}</th>
                                <td>{{$data->nidn}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->rumpun}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->nohp}}</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm"><i class="fa-solid fa-circle-info"></i></a>
                                    <a href="/dosen/edit/{{ $data->id }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>

                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$data->id}}">
                                        <i class="fa-solid fa-trash"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Yakin Data Dosen a.n. {{$data->nama}} ingin dihapus?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <form action="dosen/{{$data->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                </td>

                            </tr>

                        @empty
                            <tr>
                                <th colspan="5" scope="row">Data Tidak Ada</th>
                            </tr>

                        @endforelse


                    </tbody>
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
