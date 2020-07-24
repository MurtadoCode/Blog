@extends('template_backend.home')
@section('sub-judul','Kategori')
@section('content')
        <a href="{{route('category.create')}}" class="btn btn-info btn-sm">Tambah Kategori</a> <br><br>
        <table class="table table-striped table-hover table-sm table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>    
        <tbody>
        @foreach ($category as $result => $hasil)
            <tr> 
                <!-- membuat nomor tabel -->
                <td>{{$result + $category->firstitem()}}</td>  
                <td>{{$hasil->name}}</td>
                <td><a href="" class="btn btn-primary btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>

        <!-- untuk memunculkan pagination -->
        {{$category->links()}}
    
@endsection