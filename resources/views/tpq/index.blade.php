@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">

        @auth
            @if(auth()->user()->role=='admin')
                <a href="{{route('create')}}" type="button" class="btn btn-dark btn-sm m-1">Tambah Data</a>
            @endif
        @endauth
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                    @if(auth()->user()->role=='admin')
                        <th>edit/hapus</th>
                    @endif
            </tr>
            </thead>
            <tbody>

            @foreach ($tpq as $data )


                <tr>
                    <td>{{$loop -> iteration }}</td>
                    <td>{{$data -> k_kode}}</td>
                    <td>{{$data -> k_nama}}</td>
                        @if(auth()->user()->role=='admin')
                            <td>
                                <a href="{{route('edit', ['tpq' => $data->k_id])}}" class="btn btn-dark btn-sm">edit</a>
                                <a href="{{route('delete', ['tpq' => $data->k_id])}}"
                                   class="btn btn-dark btn-sm">hapus</a>
                            </td>
                        @endif
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

