@extends('layouts.dashboard')
@section('content')

    <div class="container mt-5">
        <h3>Tambah Data</h3>

        <form action="{{route('store.ustad')}}" method="post">
            @csrf
            Nama:<br>
            <select name="nama" class="custom-select col-3">
                <option selected>Choose...</option>
                @foreach($utd as $data)
                    <option>{{$data->name}}</option>
                @endforeach
            </select>
            <br>
            Ustadz/Ustadzah:<br>
            <select name="ustad" class="custom-select col-3">
                <option selected>Choose...</option>
                <option value="{{$data->role = 'ustadz'}}">Ustadz</option>
                <option value="{{$data->role = 'ustadzah'}}">Ustadzah</option>
            </select>
            <br><br>
            <input type="submit" value="Submit" class="btn btn-dark btn-sm">
            <a href="{{route('ustad')}}" class="btn btn-dark btn-sm">Back</a>

        </form>
    </div>


@endsection
