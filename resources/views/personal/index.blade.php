@extends('layouts.master')
@section('content')
<h1>Personal</h1>

<div class="menuTarifes">
    <a href='{{url('tarifa/index/actor')}}'>Tarifes Actors</a>
    <a href='{{url('tarifa/index/traductor')}}'>Tarifes Traductors</a>
</div>
<table class="tableShow">
    <tr>
        <th>DNI</th>
        <th>Nom</th>
        <th>Cognom</th>
        <th>Segon cognom</th>
        <th>Email</th>
        <th>Telèfon</th>
        <th>Direccio</th>
        <th>Data naixement</th>
        <th>Sexe</th>
        <th>Nacionalitat</th>
        <th>NSS</th>
        <th>IBAN</th>
        <th>Rol</th>
        <th>Acciones</th>
    </tr>


    @foreach ($actors as $actor)
        <tr class="selected">
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
                <a href="{{url('personal/modificar/'.$actor->rol."/".$actor->dni_actor)}}">Modificar</a>
                <a href="{{url('personal/eliminar/'.$actor->rol."/".$actor->dni_actor)}}">Eliminar</a>
            </td>
        </tr>
    @endforeach
    
    @foreach ($directors as $dir)
        <tr class="selected">
            <td>{{$dir->dni_director}}</td>
            <td>{{$dir->nom_director}}</td>
            <td>{{$dir->primer_cognom_director}}</td>
            <td>{{$dir->segon_cognom_director}}</td>
            <td>{{$dir->email_director}}</td>
            <td>{{$dir->telefon_director}}</td>
            <td>{{$dir->direccio_director}}</td>
            <td>{{$dir->data_naixement_director}}</td>
            <td>{{$dir->sexe_director}}</td>
            <td>{{$dir->nacionalitat_director}}</td>
            <td>{{$dir->nss_director}}</td>
            <td>{{$dir->iban_director}}</td>
            <td>{{$dir->rol}}</td>
            <td>
                <a href="{{url('personal/modificar/'.$dir->rol."/".$dir->dni_director)}}">Modificar</a>
                <a href="{{url('personal/eliminar/'.$dir->rol."/".$dir->dni_director)}}">Eliminar</a>
            </td>
        </tr>
    @endforeach
    
    @foreach ($tecnics as $tecnic)
        <tr class="selected">
            <td>{{$tecnic->dni_tecnic_sala}}</td>
            <td>{{$tecnic->nom_tecnic_sala}}</td>
            <td>{{$tecnic->primer_tecnic_sala}}</td>
            <td>{{$tecnic->segon_tecnic_sala}}</td>
            <td>{{$tecnic->email_tecnic_sala}}</td>
            <td>{{$tecnic->telefon_tecnic_sala}}</td>
            <td>{{$tecnic->direccio_tecnic_sala}}</td>
            <td>{{$tecnic->data_naixement_tecnic_sala}}</td>
            <td>{{$tecnic->sexe_tecnic_sala}}</td>
            <td>{{$tecnic->nacionalitat_tecnic_sala}}</td>
            <td>{{$tecnic->nss_tecnic_sala}}</td>
            <td>{{$tecnic->iban_tecnic_sala}}</td>
            <td>{{$tecnic->rol}}</td>
            <td>
                <a href="{{url('personal/modificar/'.$tecnic->rol."/".$tecnic->dni_tecnic_sala)}}">Modificar</a>
                <a href="{{url('personal/eliminar/'.$tecnic->rol."/".$tecnic->dni_tecnic_sala)}}">Eliminar</a>
            </td>
        </tr>
    @endforeach
    
    @foreach ($traductors as $traductor)
        <tr class="selected">
            <td>{{$traductor->dni_traductor}}</td>
            <td>{{$traductor->nom_traductor}}</td>
            <td>{{$traductor->primer_cognom_traductor}}</td>
            <td>{{$traductor->segon_cognom_traductor}}</td>
            <td>{{$traductor->email_traductor}}</td>
            <td>{{$traductor->telefon_traductor}}</td>
            <td>{{$traductor->direccio_traductor}}</td>
            <td>{{$traductor->data_naixement_traductor}}</td>
            <td>{{$traductor->sexe_traductor}}</td>
            <td>{{$traductor->nacionalitat_traductor}}</td>
            <td>{{$traductor->nss_traductor}}</td>
            <td>{{$traductor->iban_traductor}}</td>
            <td>{{$traductor->rol}}</td>
            <td>
                <a href="{{url('personal/modificar/'.$traductor->rol."/".$traductor->dni_traductor)}}">Modificar</a>
                <a href="{{url('personal/eliminar/'.$traductor->rol."/".$traductor->dni_traductor)}}">Eliminar</a>
            </td>
        </tr>
    @endforeach


</table>
<a href='{{url('personal/crear')}}'>Afegir Personal</a>
{{--
<label>Por hacer la conexion a la base de datos</label>
--}}
@stop 
