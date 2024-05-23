@extends('master.app')
@section('konten')


    <a href="{{route('warung.create')}}" class="btn btn-primary mb-2" >Tambah Data</a>
<table class="table" >
    <tr>

        <th>#</th>
        <th>Gambar</th>
        <th>Nama </th>
        <th>Jenis </th>
        <th>Action</th>
    </tr>
    @php
        $no = 1
    @endphp
    @foreach ($warung as $item)
        
    <tr>
        <td>{{$no++}}</td>
        <td><img src="https://picsum.photos/500/500"  alt="{{$item->nama}}"></td>
        <td>{{$item->nama}}</td>
        <td>{{$item->berat}}</td>
        <td >
            <a href="{{route('warung.show', $item->id)}}" class="btn btn-info mb-2" ><i class="fa-solid fa-eye"></i></a>
            <a href="{{route('warung.edit', $item->id)}}" class="btn btn-warning mb-2" ><i class="fa-solid fa-pencil"></i></a>
            <a href="{{route('warung.destroy', $item->id)}}" class="btn btn-danger mb-2" ><i class="fa-solid fa-trash"></i></a> 
        </td>
    </tr>
    @endforeach
    </table>
    @endsection