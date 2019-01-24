@extends('layouts.master')
@section('content')
<h1>Usuaris - Actual <?php session_start(); echo $_SESSION["usuari"]; ?></h1>


<table class="tableShow">
    <tr>
        <th>Alias</th>
        <th>Nom</th>
        <th>Cognom</th>
        <th>Segon cognom</th>
        <th>Email</th>
        <th>Telèfon</th>
        <th>Acciones</th>
    </tr>

    @foreach ($users as $user)

    <tr class="selected">
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
