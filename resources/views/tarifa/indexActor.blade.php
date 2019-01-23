@extends('layouts.master')
@section('content')
<h1>Tarifes Actors</h1>


<table class="tableShow">
    <tr>
        <th colspan="3">Actor</th>
        <th>Idioma</th>
        <th colspan="2">Video</th>
        <th colspan="2">Cine</th>
        <th>Docu</th>
        <th>Narrador</th>
        <th>Cançons</th>
        <th>Accions</th>
    </tr>

    <tr>
        <th>DNI</th>
        <th>Cognom</th>
        <th>Nom</th>
        <th></th>
        <th>CG's</th>
        <th>TK's</th>
        <th>CG's</th>
        <th>TK's</th>
        <th></th>
        <th>EUR/MIN</th>
        <th></th>
        <th></th>
    </tr>
    @foreach ($tarifes as $tarifa)
        <tr class="selected">
            <td>{{$tarifa->dni_actor}}</td>
        @foreach ($actors as $actor)
            @if ($actor->dni_actor == $tarifa->dni_actor)
                <td>{{$actor->primer_cognom_actor}}</td>
                <td>{{$actor->nom_actor}}</td>
            @endif
        @endforeach
        @foreach ($idiomes as $idioma)
            @if ($idioma->id_idioma == $tarifa->id_idioma)
                <td>{{$idioma->nom_idioma}}</td>
            @endif
        @endforeach
            <td>{{$tarifa->tarifa_video_take}}</td>
            <td>{{$tarifa->tarifa_video_cg}}</td>
            <td>{{$tarifa->tarifa_cine_take}}</td>
            <td>{{$tarifa->tarifa_cine_cg}}</td>
            <td>-</td>
            <td>-</td>
            <td>{{$tarifa->tarifa_canso}}</td>
            <td>
                <a href="{{url('tarifa/modificar/actor/'.$tarifa->dni_actor.'/'.$tarifa->id_idioma)}}">Modificar</a>
                <a href="{{url('tarifa/eliminar/actor/'.$tarifa->dni_actor.'/'.$tarifa->id_idioma)}}">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>
<a href='{{url('tarifa/crear/actor')}}'>Afegir Tarifa</a>
{{--
<label>Por hacer la conexion a la base de datos</label>
--}}
@stop 
