
@extends('master.app')
@section('konten')
<h3>Form Tambah data</h3>
<a href="{{route('warung.index')}}" class="btn btn-warning mb-3" style="margin-left: 88%"><i class="fa-solid fa-arrow-left"></i></a>
<form class="forms-sample" action="{{route('warung.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="exampleInputUsername1">Nama Barang</label>
      <input type="text" class="form-control" id="exampleInputUsername1" style="width: 400px; border-radius: 10px; border:none " name="nama" @error('nama')
          is-invalid
      @enderror>
    </div>
    @error('nama')
        <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="form-group">
      <label for="exampleInputEmail1">Berat Barang</label>
      <input type="text" class="form-control" id="exampleInputEmail1" style="width: 400px; border-radius: 10px; border:none" name="berat" @error('berat')
      is-invalid
  @enderror>
    </div>
    @error('berat')
        <p class="text-danger">{{$message}}</p>
    @enderror
    <button type="submit" class="btn btn-primary mr-2">Tambah</button>
  </form>



@endsection