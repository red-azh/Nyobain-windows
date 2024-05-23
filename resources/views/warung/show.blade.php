@extends('master.app')
@section('konten')
    <div class="row">
        <div class="col-md-4">
            <img src="https://picsum.photos/300/300" class="rounded" alt="{{$warung->nama}}">
        </div>
        <div class="col-md-8">
            <table class="table mt-3">
                <tr>
                    <th>Nama Barang :</th>
                    <td>{{$warung->nama}}</td>
                </tr>
               
                <tr>
                    <th>Berat Barang :</th>
                    <td>{{$warung->berat}}</td>
                </tr>
                <tr>
                    <th>Ditambahkan pada :</th>
                    <td>{{$warung->created_at}}</td>
                </tr>
                <tr>
                    <th>Diupdate pada :</th>
                    <td>{{$warung->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection