@extends('backend.master')

@section('title', 'Ubah Admin')

@section('content')
<div class="section-header">
    <h1>Ubah Admin</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="">Dashboard</a></div>
      <div class="breadcrumb-item">Ubah Admin</div>
    </div>
  </div>
  
  <div class="section-body">
  
    <form action="{{ route("admin.update", ["admin" => $data->id]) }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="row">
          <div class="col-md-8">
              <div class="card">
              <div class="card-header">
                  <h4>Ubah Admin</h4>
              </div>
              <div class="card-body">
                @if($data->photo != NULL)
                <div class="form-group">
                  <img src="{{ url('profil/'.$data->photo) }}" width="200" alt="">
                </div>
                @endif
                <div class="form-group">
                  <label for="">Photo Profil (kosongi jika tidak ingin ubah)</label>
                  <input type="file" class="form-control" id="" placeholder="Nama Lengkap" name="photo">
                </div>
                <div class="form-group">
                  <label for="">Nama Lengkap</label>
                  <input type="text" class="form-control" id="" placeholder="Nama Lengkap" name="name" value="{{ $data->name }}" required>
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" id="" placeholder="Email" name="email" value="{{ $data->email }}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password (kosongi jika tidak ingin ubah)</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
              </div>
              <div class="card-footer text-right">
                  <a href="{{ route('admin.index') }}" class="btn btn-warning">Kembali</a>
                  <button class="btn btn-primary">Simpan</button>
              </div>
              </div>
          </div>
      </div>
    </form>
  </div>
@endsection