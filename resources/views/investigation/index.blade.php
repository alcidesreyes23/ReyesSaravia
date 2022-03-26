@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Investigaciones</div>

                    <div class="card-body">
                        <div>
                            <h3>Administración de investigaciones</h3>
                            <div class="col-md-10 mx-auto bg-white p-3"
                            style="background-color: #140f07!important;">
                                <table class="table">
                                    <thead class="bg-primary text-light">
                                        <tr>
                                            <th scole="col">Código</th>
                                            <th scole="col">Titulo</th>
                                            <th scole="col">Descripción</th>
                                            <th scole="col">Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($investigations as $item)
                                            <tr>
                                                <td>{{$item['id']}}</td>
                                                <td>{{$item['title']}}</td>
                                                <td>{{$item['description']}}</td>
                                                <td>{{$item['status_id']}}</td>
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

