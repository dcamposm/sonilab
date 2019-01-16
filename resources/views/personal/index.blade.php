@extends('layouts.master')
@section('content')
<h2>Personal</h2>


<table>
    <tr>
        <th>DNI personal</th>
        <th>Nom personal</th>
        <th>Cognom personal</th>
        <th>Segon cognom personal</th>
        <th>Email personal</th>
        <th>Telèfon personal</th>
        <th>Direccio personal</th>
        <th>Data naixement personal</th>
        <th>Sexe personal</th>
        <th>Nacionalitat personal</th>
        <th>NSS personal</th>
        <th>IBAN personal</th>
        <th>Rol personal</th>
        <th>Acciones</th>
    </tr>


    @foreach ($actors as $actor)
        <tr>
            <td>{{$actor->dni_actor}}</td>
            <td>{{$actor->nom_actor}}</td>
            <td>{{$actor->primer_cognom_actor}}</td>
            <td>{{$actor->segon_cognom_actor}}</td>
            <td>{{$actor->email_actor}}</td>
            <td>{{$actor->telefon_actor}}</td>
            <td>{{$actor->direccio_actor}}</td>
            <td>{{$actor->data_naixement_actor}}</td>
            <td>{{$actor->sexe_actor}}</td>
            <td>{{$actor->nacionalitat_actor}}</td>
            <td>{{$actor->nss_actor}}</td>
            <td>{{$actor->iban_actor}}</td>
            <td>{{$actor->rol}}</td>
            <td>
                <a>Detalles</a>
                <a href="{{url('personal/modificar/'.$actor->rol."/".$actor->dni_actor)}}">Modificar</a>
                <a href="{{url('personal/eliminar/'.$actor->rol."/".$actor->dni_actor)}}">Eliminar</a>
            </td>
        </tr>
    @endforeach


</table>
<a href='{{url('personal/crear')}}'>Afegir Usuari</a>
{{--
<label>Por hacer la conexion a la base de datos</label>
--}}
@stop 
