@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">
        <p class="mb-0">Cari Data Santri :</p>
        <form class="mb-3" action="{{route('cari')}}" method="GET">
            <input type="text" name="cari" placeholder="" value="{{ old('cari') }}">
            <input type="submit" value="CARI" class="btn btn-dark btn-sm m-1">
        </form>
        @if(auth()->user()->role=='admin')
            <a href="{{route('create.santri')}}" type="button" class="btn btn-dark btn-sm m-1">Tambah Data</a>
        @endif
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Iqra/Al-quran</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                @if(auth()->user()->role=='admin')
                    <th>edit/hapus</th>
                @endif
            </tr>
            </thead>
            <tbody>

            @foreach ($data as $d )


                <tr>
                    <td>{{$loop -> iteration }}</td>
                    <td>{{$d -> nama}}</td>
                    <td>{{$d -> kelas}}</td>
                    <td>{{$d -> jilid}}</td>
                    <td>{{$d -> lahir}}</td>
                    <td>{{$d -> tempat}}</td>
                    @if(auth()->user()->role=='admin')
                        <td>
                            <a href="{{route('edit.santri', ['santri' => $d->s_id])}}"
                               class="btn btn-dark btn-sm">edit</a>
                            <a href="{{route('delete.santri', ['data' => $d->s_id])}}"
                               class="btn btn-dark btn-sm">hapus</a>
                        </td>
                    @endif
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
{{ $data->links() }}
@endsection
