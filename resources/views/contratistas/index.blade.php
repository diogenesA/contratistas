@extends('layouts.app')
@section('content')



    @if(Session::has('Mensaje'))

    <div class="alert alert-success" role="alert">
        {{ Session::get('Mensaje') }}
    </div>

    @endif

    <div class="container-fluid">
        <a href="{{ url('contratistas/create')}}" class="btn btn-success">Agregar Empleado</a>
        <br/>
        <br/>
    </div>
    <div class="container-fluid">
        <div class="table-responsive">
                <table class="table table-light table-hover" id = "myTable">

                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nombre Completo</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Cedula</th>
                            <th>Edad</th>
                            <th>Perfil/Formacion</th>
                            <th>Experiencia (Publico o Privado)</th>
                            <th>Celular</th>
                            <th>Correo</th>
                            <th>Direccion</th>
                            <th>IBC</th>
                            <th>Honorarios</th>
                            <th>Diferencia</th>
                            <th>Referidos</th>
                            <th>Tecnica</th>
                            <th>Participacion</th>
                            <th>Redes</th>
                            <th>Necesidad</th>
                            <th>Indicador</th>
                            <th>Grupo interno de trabajo</th>
                            <th>Observaciones</th>
                            <th>Universidad</th>
                            <th>EPS</th>
                            <th>Pension</th>
                            <th>ARL</th>
                            <th>Numero de contrato</th>
                            <th>Tiempo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($contratistas as $contratista)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                <img src="{{ asset('storage').'/' .$contratista->Foto}}" class="img-thumbnail img-fluid" alt="" height="110" width="100">
                                </td>

                                <!--<td>{{ $contratista->Foto}}</td>-->
                                <td>{{ $contratista->NombreCompleto}}</td>
                                <td>{{ $contratista->FechaNacimiento}}</td>
                                <td>{{ $contratista->Cedula}}</td>
                                <td>{{ $contratista->Edad}}</td>
                                <td>{{ $contratista->PerfilFormacion}}</td>
                                <td>{{ $contratista->ExperienciaPublicoPrivado}}</td>
                                <td>{{ $contratista->Celular}}</td>
                                <td>{{ $contratista->Correo}}</td>
                                <td>{{ $contratista->Direccion}}</td>
                                <td>{{ $contratista->IBC}}</td>
                                <td>{{ $contratista->Honorarios}}</td>
                                <td>{{ $contratista->Diferencia}}</td>
                                <td>{{ $contratista->Referidos}}</td>
                                <td>{{ $contratista->Tecnica}}</td>
                                <td>{{ $contratista->Participacion}}</td>
                                <td>{{ $contratista->Redes}}</td>
                                <td>{{ $contratista->Necesidad}}</td>
                                <td>{{ $contratista->Indicador}}</td>
                                <td>{{ $contratista->GrupoInternoTrabajo}}</td>
                                <td>{{ $contratista->Observaciones}}</td>
                                <td>{{ $contratista->Universidad}}</td>
                                <td>{{ $contratista->EPS}}</td>
                                <td>{{ $contratista->Pension}}</td>
                                <td>{{ $contratista->ARL}}</td>
                                <td>{{ $contratista->NumeroContrato}}</td>
                                <td>{{ $contratista->Tiempo}}</td>
                                <td>

                                <a class="btn btn-warning" href="{{ url('/contratistas/'.$contratista->id.'/edit') }}" >Editar
                                </a> 

                                <form method="post" action="{{ url('/contratistas/'.$contratista->id) }}" style="display: inline-block">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');" >Borrar</button>
                                    
                                </form >
                                
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
        </div>
    </div>    
    <!--{ $contratistas->links() }}-->



@endsection