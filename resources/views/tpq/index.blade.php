@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">


        <a href="{{route('create')}}" type="button" class="btn btn-dark btn-sm m-1">Tambah Data</a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>edit/hapus</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($tpq as $data )


                <tr>
                    <td>{{$loop -> iteration }}</td>
                    <td>{{$data -> k_kode}}</td>
                    <td>{{$data -> k_nama}}</td>
                    <td>
                        <a href="{{route('edit', ['tpq' => $data->k_id])}}" class="btn btn-dark btn-sm">edit</a>
                        <a href="{{route('delete', ['tpq' => $data->k_id])}}" class="btn btn-dark btn-sm">hapus</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection

{{--kamu: bisa ngomong sebentar?--}}
{{--aku : ngomong apa yaa--}}
{{--kamu: kita temenan aja ya, jgn marah ya--}}
{{--aku : oke kita temenan, engga kalo marah--}}

{{--pulang pulang nangis dipojokan kamar hahaha--}}

