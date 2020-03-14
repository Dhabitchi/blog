@extends('layouts.dashboard')
@section('content')
    <div class="container mt-5">
        <h3>Tambah Data</h3>

        <form action="{{route('store')}}" method="post">
            @csrf
            Nama:<br>
            <input type="text" name="nama" value="">
            <br>
            Kelas :<br>
            <select name="kelas">
                @php($kelas = ['PAUD', 'TK', '1 SD', '2 SD', '3 SD', '4 SD', '5 SD', '6 SD', '1 SMP', '2 SMP', '3 SMP'])
                @foreach($kelas as $k)
                    <option value="{{ $k }}">{{ $k }}</option>
                @endforeach
            </select>
            <br>
            Progres  :<br>
            @php($jilid = (function () {
                $jilid = collect();

                for($i = 1; $i <= 6; $i++) {
                    $jilid->push("Iqra': Jilid {$i}");
                }

                for($i = 1; $i <= 30; $i++) {
                    $jilid->push("Al-Qur'an: Juz {$i}");
                }

                return $jilid;
            })())
            <select name="jilid">
                @foreach($jilid as $j)
                    <option value="{{ $j }}">{{ $j }}</option>
                @endforeach
            </select><br>
            Tgl/Bln/Thn Lahir :<br>
            <input type="date" name="lahir"><br>
            Tempat Lahir :<br>
            <input name="tempat">
            <br><br>
            <input type="submit" value="Submit" class="btn btn-dark btn-sm">
            <a href="{{route('santri')}}" class="btn btn-dark btn-sm">Back</a>

        </form>
    </div>
@endsection
