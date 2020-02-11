@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">
        <h3>Edit Data</h3>
        <form action="{{route('update.santri',['santri'=>$santri->s_id])}}" method="post">
            @method('patch')
            @csrf
            Nama :<br>
            <input type="text" name="nama" value="{{$santri->nama}}">
            <br>
            Kelas :<br>
            <input type="text" name="kelas" value="{{$santri->kelas}}">
            <br>
            Jilid :<br>
            <input type="text" name="jilid" value="{{$santri->jilid}}">
            <br><br>
            <input type="submit" value="Submit" class="btn btn-dark btn-sm">
            <a href="{{route('santri')}}" class="btn btn-dark btn-sm">Back</a>
        </form>
    </div>

@endsection
