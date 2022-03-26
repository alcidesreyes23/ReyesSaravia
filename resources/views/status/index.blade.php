@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Estado de investigacion</div>

                    <div class="card-body">
                        <div>
                            <h3>Administración de estados</h3>
                            <div class="col-md-10 mx-auto bg-white p-3"
                            style="background-color: #140f07!important;">
                                <table class="table">
                                    <thead class="bg-primary text-light">
                                        <tr>
                                            <th scole="col">Código</th>
                                            <th scole="col">Nombre del estado</th>
                                            <th scole="col">Cantidad de proyectos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($status as $item)
                                            <tr>
                                                <td>{{$item['id']}}</td>
                                                <td>{{$item['status_name']}}</td>
                                                <td>{{$item['count']}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
