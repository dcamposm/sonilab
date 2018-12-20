@extends('master')<!-- fichero raiz, viene el header, aside y footer -->


@section('content') <!-- se complementa con el @yield -->

<h2>Usuaris</h2>

<!--
<table>
    <tr>
        <th>Alias usuari</th>
        <th>Nom usuari</th>
        <th>Cognom usuari</th>
        <th>Segon cognom usuari</th>
        <th>Email usuari</th>
        <th>Telèfon usuari</th>
    </tr>
    
    @foreach ($users as $user)
    
    <tr>
        <td>{{$user->alias}}</td>
        <td>{{$user->nom}}</td>
        <td>{{$user->primer_cognom}}</td>
        <td>{{$user->segon_cognom}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->telefon}}</td>
    </tr>
    
    @endforeach

</table>
-->

<label>Por hacer la conexion a la base de datos</label>

@stop