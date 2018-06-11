@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
                <div class="row justify-content-center">
                        <div class="col-4">
                                @include('flash::message')
                        </div>
                </div>
        </div>

        <div class="col-12">
            <div class="m-5 text-center">
                <a class="btn btn-primary a-btn" href="/encuestadores/create">Nuevo </a>
            </div>
            <div class="card">
                <div class="card-header card-header-success">
                    <h3>Encuestadores</h3>

                </div>
                <div class="card-body">
                    <table class="table table-striped table-usuarios" id='encuestadores-table'>
                        <thead>
                          <tr>
                            <th class="font-weight-bold" scope="col" data-dynatable-no-sort='true'>Perfil</th>
                            <th class="font-weight-bold" scope="col">Apellido</th>
                            <th class="font-weight-bold" scope="col">Nombre</th>
                            <th class="font-weight-bold" scope="col" data-dynatable-no-sort='true'>Dni</th>
                            <th class="font-weight-bold" scope="col">Localidad</th>
                            <th class="font-weight-bold" scope="col">Cargo</th>
                            <th class="font-weight-bold" scope="col">Encuesta</th>
                            <th class="text-center font-weight-bold" scope="col" >Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($encuestadores as $encuestador)
                            <tr>


                              <td> <img class='img-fluid img-perfil-grid' src="\storage/{{ $encuestador->img}}" alt=""> </td>
                              <td>{{ $encuestador->apellido}}</td>
                              <td>{{ $encuestador->nombre}}</td>
                              <td>{{ $encuestador->dni}}</td>
                              <td class="test">{{ $encuestador->localidad->nombre}}</td>
                              <td>{{ $encuestador->cargo}}</td>
                              <td>{{ $encuestador->encuesta->nombre}}</td>
                              <td class='text-center'>
                                <a class='mr-3 delete-icon delete-encuestador' data-identificador="{{ $encuestador->id }}"> <i class="material-icons text-danger">delete</i></a>
                                <a href="{{ route('encuestadores.edit', ['id' => $encuestador->id])  }}"> <i class="material-icons text-info">edit</i></a>
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>

                </div>
            </div>


        </div>


    </div>


@endsection

