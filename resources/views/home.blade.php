@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form class="form-horizontal" method="POST" action="{{route('Insert')}}">
                            {{csrf_field()}}
                            INSERTAR
                            <div>
                                <label for="id_UserInf" class="col-md-4 control-label" >Id User:</label>
                               <div  class="col-md-6">
                                <input type="id_UserInf" type="text" class="form-control" name="id_UserInf"/>
                               </div>
                           </div>
                            <div>
                                <label for="nick" class="col-md-4 control-label" >Nick:</label>
                                <div  class="col-md-6">
                                    <input type="nick" type="text" class="form-control" name="nick"/>
                                </div>
                            </div>
                            <div>
                                <label for="age" class="col-md-4 control-label" >Age:</label>
                                <div  class="col-md-6">
                                    <input type="age" type="text" class="form-control" name="age"/>
                                </div>
                            </div>
                            <div>
                                <label for="dni" class="col-md-4 control-label" >Dni:</label>
                                <div  class="col-md-6">
                                    <input type="dni" type="text" class="form-control" name="dni"/>
                                </div>
                            </div>
                            <div>
                                <label for="height" class="col-md-4 control-label" >Height:</label>
                                <div  class="col-md-6">
                                    <input type="height" type="text" class="form-control" name="height"/>
                                </div>
                            </div>
                            <div class="form-group" >
                                <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Insertar</button>
                                </div>
                            </div>
                        </form>

                        <form class="form-horizontal" method="POST" action="{{route('Actualizar')}}">
                            {{csrf_field()}}
                            ACTUALIZAR
                            <div>
                                <label for="id" class="col-md-4 control-label" >Id:</label>
                                <div  class="col-md-6">
                                    <input type="id" type="text" class="form-control" name="id"/>
                                </div>
                            </div>
                            <div>
                                <label for="nick" class="col-md-4 control-label" >Nick:</label>
                                <div  class="col-md-6">
                                    <input type="nick" type="text" class="form-control" name="nick"/>
                                </div>
                            </div>
                            <div class="form-group" >
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>

                        </form>
                        <form class="form-horizontal" method="POST" action="{{route('Eliminar')}}">
                            {{csrf_field()}}
                            ELIMINAR
                            <div>
                                <label for="id" class="col-md-4 control-label" >Id:</label>
                                <div  class="col-md-6">
                                    <input type="id" type="text" class="form-control" name="id"/>
                                </div>
                            </div>
                            <div class="form-group" >
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                </div>
                            </div>
                        </form>

                    <div>
                        LISTADO DE LA INFORMACION DE LOS USUARIOS
                        <br>
                        <span>
                        @foreach($allUser as $key =>$data)
                                <span><label>ID User:</label>{{$data['id_UserInf']}}</span><BR>
                                <span><label>Nick:</label>{{$data['nick']}}</span><BR>
                                <span><label>Edad:</label>{{$data['age']}}</span><BR>
                                <span><label>Dni:</label>{{$data['dni']}}</span><BR>
                                <span><label>Altura</label>{{$data['height']}}</span><BR>

                            @endforeach

                        </span>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
