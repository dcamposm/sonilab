@extends('layouts.master')
@section('content')
<h1>Usuaris</h1>


<table class="tableShow">
    <tr>
        <th>Alias usuari</th>
        <th>Nom usuari</th>
        <th>Cognom usuari</th>
        <th>Segon cognom usuari</th>
        <th>Email usuari</th>
        <th>Telèfon usuari</th>
        <th>Acciones</th>
    </tr>

    @foreach ($users as $user)

    <tr>
        <td>{{$user->alias_usuari}}</td>
        <td>{{$user->nom_usuari}}</td>
        <td>{{$user->primer_cognom_usuari}}</td>
        <td>{{$user->segon_cognom_usuari}}</td>
        <td>{{$user->email_usuari}}</td>
        <td>{{$user->telefon_usuari}}</td>
        <td>
            <a href="{{url('usuari/modificar/'.$user->alias_usuari)}}">Modificar</a>
            <a href="{{url('usuari/eliminar/'.$user->alias_usuari)}}">Eliminar</a>
        </td>
    </tr>

    @endforeach

</table>
<a href='{{url('usuari/crear')}}'>Afegir Usuari</a>
{{--
<label>Por hacer la conexion a la base de datos</label>
--}}
@stop 
