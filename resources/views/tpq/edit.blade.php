@extends('layouts.dashboard')
@section('content')


    <div class="container mt-5">
        <h3>Edit Data</h3>
        <form action="{{route('update',['tpq'=>$tpq->k_id])}}" method="post">
            @method('patch')
            @csrf
            Kode Kota:<br>
            <input type="text" name="k_kode" value="{{$tpq->k_kode}}">
            <br>
            Nama Kota:<br>
            <input type="text" name="k_nama" value="{{$tpq->k_nama}}">
            <br><br>
            <input type="submit" value="Submit" class="btn btn-dark btn-sm">
            <a href="{{route('TPQ')}}" class="btn btn-dark btn-sm">Back</a>
        </form>
    </div>

@endsection
