@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Departamentos</div>

                    <div class="card-body">
                        <div>
                            <h3>Administración de departamentos</h3>
                            <div class="col-md-10 mx-auto bg-white p-3">
                                <table class="table">
                                    <thead class="text-light"
                                    style="background-color: #140f07!important;">
                                        <tr>
                                            <th scole="col">Código</th>
                                            <th scole="col">Nombre del departamento</th>
                                            <th scole="col">Cargos relacionados</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($departments as $item)
                                            <tr>
                                                <td>{{$item['id']}}</td>
                                                <td>{{$item['department_name']}}</td>
                                                <td>{{$item['department_positon']}}</td>
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

