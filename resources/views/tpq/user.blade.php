@extends('layouts.dashboard')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Daftar User's</div>

                    <div class="card-body">
                        @foreach($user as $data)
                            <ul class="list-group">
                                <li class="list-group-item">
                                    {{$loop->iteration}}
                                    {{$data->name}}
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
