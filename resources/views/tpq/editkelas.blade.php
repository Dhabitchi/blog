@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">
        <h3>Edit Data</h3>
        <form action="{{route('update.kelas',['kelas'=>$kelas->k_id])}}" method="post">
            @method('patch')
            @csrf
            Nama :<br>
            <input type="text" name="nama" value="{{$kelas->nama}}">
            <br>
            Kelas :<br>
            <input type="text" name="kelas" value="{{$kelas->kelas}}">
            <br><br>
            <input type="submit" value="Submit" class="btn btn-dark btn-sm">
            <a href="{{route('kelas')}}" class="btn btn-dark btn-sm">Back</a>
        </form>
    </div>

@endsection
