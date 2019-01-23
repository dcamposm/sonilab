@extends('layouts.master')
@section('content')
<h1>Tarifes Traductors</h1>


<table class="tableShow">
    <tr>
        <th colspan="3">Traductor</th>
        <th>Idioma</th>
        <th>Tarifa traductor</th>
        <th>Tarifa ajustador</th>
        <th>Tarifa linguista</th>
        <th>Tarifa Total</th>
        <th>Accions</th>
    </tr>

    <tr>
        <th>DNI</th>
        <th>Cognom</th>
        <th>Nom</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    @foreach ($tarifes as $tarifa)
        <tr class="selected">
            <td>{{$tarifa->dni_traductor}}</td>
        @foreach ($traductors as $traductor)
            @if ($traductor->dni_traductor == $tarifa->dni_traductor)
                <td>{{$traductor->primer_cognom_traductor}}</td>
                <td>{{$traductor->nom_traductor}}</td>
            @endif
        @endforeach
        @foreach ($idiomes as $idioma)
            @if ($idioma->id_idioma == $tarifa->id_idioma)
                <td>{{$idioma->nom_idioma}}</td>
            @endif
        @endforeach
            <td>{{$tarifa->tarifa_traductor}}</td>
            <td>{{$tarifa->tarifa_ajustador}}</td>
            <td>{{$tarifa->tarifa_linguista}}</td>
            <td>{{$tarifa->tarifa_totes}}</td>
            <td>
                <a href="{{url('tarifa/modificar/traductor/'.$tarifa->dni_traductor.'/'.$tarifa->id_idioma)}}">Modificar</a>
                <a href="{{url('tarifa/eliminar/traductor/'.$tarifa->dni_traductor.'/'.$tarifa->id_idioma)}}">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>
<a href='{{url('tarifa/crear/traductor')}}'>Afegir Tarifa</a>
{{--
<label>Por hacer la conexion a la base de datos</label>
--}}
@stop 