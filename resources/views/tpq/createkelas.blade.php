@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">
        <h3>Tambah Data</h3>

        <form action="{{route('store.kelas')}}" method="post">
            @csrf
            Nama:<br>
            <input type="text" name="nama" value="">
            <br>
            Kelas:<br>
            <input type="text" name="kelas" value="">
            <br><br>
            <input type="submit" value="Submit" class="btn btn-dark btn-sm">
            <a href="{{route('kelas')}}" class="btn btn-dark btn-sm">Back</a>

        </form>
    </div>

@endsection
