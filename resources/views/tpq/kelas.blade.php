@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">


        <a href="{{route('create.kelas')}}" type="button" class="btn btn-dark btn-sm m-1">Tambah Data</a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>edit/hapus</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($klas as $k )
                <tr>
                    <td>{{$loop -> iteration }}</td>
                    <td>{{$k -> nama}}</td>
                    <td>{{$k -> kelas}}</td>
                    <td>
                        <a href="{{route('edit.kelas', ['kelas'=>$k->k_id])}}" class="btn btn-dark btn-sm">edit</a>
                        <a href="{{route('delete.kelas', ['kelas'=>$k->k_id])}}" class="btn btn-dark btn-sm">hapus</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
