@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">

            @if(auth()->user()->role=='admin')
                <a href="{{route('create.ustad')}}" type="button" class="btn btn-dark btn-sm m-1">Tambah Data</a>
            @endif
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Ustadz/Ustadzah</th>
                    @if(auth()->user()->role=='admin')
                        <th>edit/hapus</th>
                    @endif
            </tr>
            </thead>
            <tbody>

            @foreach ($utd as $data )


                <tr>
                    <td>{{$loop -> iteration }}</td>
                    <td>{{$data -> nama}}</td>
                    <td>{{$data -> ustad}}</td>
                        @if(auth()->user()->role=='admin')
                            <td>
                                <a href="{{route('edit.ustad',['data'=>$data->u_id])}}" class="btn btn-dark btn-sm">edit</a>
                                <a href="{{route('delete.ustad',['data'=>$data->u_id])}}" class="btn btn-dark btn-sm">hapus</a>
                            </td>
                        @endif
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
