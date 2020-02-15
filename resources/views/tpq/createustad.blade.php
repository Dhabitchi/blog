@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">
        <h3>Tambah Data</h3>

        <form action="{{route('store.ustad')}}" method="post">
            @csrf
            Nama:<br>
            <input type="text" name="nama" value="">
            <br>
            Ustadz/Ustadzah:<br>
            <input type="text" name="ustad" value="">
            <br><br>
            <input type="submit" value="Submit" class="btn btn-dark btn-sm">
            <a href="{{route('ustad')}}" class="btn btn-dark btn-sm">Back</a>

        </form>
    </div>


@endsection
