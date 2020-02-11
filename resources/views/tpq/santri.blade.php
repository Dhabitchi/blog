@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">


        <a href="{{route('create.santri')}}" type="button" class="btn btn-dark btn-sm m-1">Tambah Data</a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Iqra/Al'quran</th>
                <th>edit/hapus</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($data as $d )


                <tr>
                    <td>{{$loop -> iteration }}</td>
                    <td>{{$d -> nama}}</td>
                    <td>{{$d -> kelas}}</td>
                    <td>{{$d -> jilid}}</td>
                    <td>
                        <a href="{{route('edit.santri', ['santri' => $d->s_id])}}" class="btn btn-dark btn-sm">edit</a>
                        <a href="{{route('delete.santri', ['data' => $d->s_id])}}" class="btn btn-dark btn-sm">hapus</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>




@endsection
