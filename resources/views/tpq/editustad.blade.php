@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">
        <h3>Edit Data</h3>
        <form action="{{route('update.ustad',['data'=>$data->u_id])}}" method="post">
            @method('patch')
            @csrf
            Nama :<br>
            <input type="text" name="nama" value="{{$data->nama}}">
            <br>
            Ustadz/Ustadzah :<br>
            <input type="text" name="ustad" value="{{$data->ustad}}">
            <br><br>
            <input type="submit" value="Submit" class="btn btn-dark btn-sm">
            <a href="{{route('ustad')}}" class="btn btn-dark btn-sm">Back</a>
        </form> 
    </div>

@endsection
