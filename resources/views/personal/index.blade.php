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
                <a href="{{url('personal/modificar/'.$actor->rol."/".$actor->dni_actor)}}">Modificar</a>
                <a href="{{url('personal/eliminar/'.$actor->rol."/".$actor->dni_actor)}}">Eliminar</a>
            </td>
        </tr>
    @endforeach
    
    @foreach ($directors as $dir)
        <tr>
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
                <a href="{{url('personal/modificar/'.$actor->rol."/".$actor->dni_director)}}">Modificar</a>
                <a href="{{url('personal/eliminar/'.$actor->rol."/".$actor->dni_director)}}">Eliminar</a>
            </td>
        </tr>
    @endforeach
    
    @foreach ($tecnics as $tecnic)
        <tr>
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
                <a href="{{url('personal/modificar/'.$actor->rol."/".$actor->dni_tecnic_sala)}}">Modificar</a>
                <a href="{{url('personal/eliminar/'.$actor->rol."/".$actor->dni_tecnic_sala)}}">Eliminar</a>
            </td>
        </tr>
    @endforeach
    
    @foreach ($traductors as $traductor)
        <tr>
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
                <a href="{{url('personal/modificar/'.$actor->rol."/".$actor->dni_traductor)}}">Modificar</a>
                <a href="{{url('personal/eliminar/'.$actor->rol."/".$actor->dni_traductor)}}">Eliminar</a>
            </td>
        </tr>
    @endforeach


</table>
<a href='{{url('personal/crear')}}'>Afegir Personal</a>
{{--
<label>Por hacer la conexion a la base de datos</label>
--}}
@stop 
