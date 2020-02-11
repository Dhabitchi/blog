@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">
        <h3>Tambah Data</h3>

        <form action="{{route('dhabit')}}" method="post">
            @csrf
            Kode Kota:<br>
            <input type="text" name="k_kode" value="">
            <br>
            Nama Kota:<br>
            <input type="text" name="k_nama" value="">
            <br><br>
            <input type="submit" value="Submit" class="btn btn-dark btn-sm">
            <a href="{{route('TPQ')}}" class="btn btn-dark btn-sm">Back</a>

        </form>
    </div>

@endsection
