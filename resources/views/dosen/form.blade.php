@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Data Dosen') }}
                </div>

                <div class="card-body">

                    <div class="card-body">
                        <form action="/dosen" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIDN</label>
                                <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama Dosen</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Rumpun</label>
                                <select name="rumpun" id="" class="form-control">
                                <option value="">-Pilih Rumpun-</option>
                                <option value="Komputer">Komputer</option>
                                <option value="Bisnis">Bisnis</option>
                                <option value="Sekretaris">Sekretaris</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Wirausaha">Wirausaha</option>
                                <option value="Marketing">Marketing</option>
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">No Handphone</label>
                                <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary float-end">submit</button>
                        </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
