@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Usuarios</div>

                    <div class="card-body">
                        <div>
                            <h3>Administración de usuarios</h3>
                            <div class="col-md-10 mx-auto bg-white p-3">
                                <table class="table">
                                    <thead class="bg-primary text-light">
                                        <tr>
                                            <th scole="col">Código</th>
                                            <th scole="col">Nombre</th>
                                            <th scole="col">Correo electrónico</th>
                                            <th scole="col">Salario</th>
                                            <th scole="col">Cargo</th>
                                            <th scole="col">Sitio web</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td>{{$item['id']}}</td>
                                                <td>{{$item['name']}}</td>
                                                <td>{{$item['email']}}</td>
                                                <td>${{ number_format($item['salary'],2)}}</td>
                                                <td>{{$item['position']}}</td>
                                                <td>
                                                    <a href="{{$item['web_site']}}" target="_blank">Ver sitio</a>
                                                </td>
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
