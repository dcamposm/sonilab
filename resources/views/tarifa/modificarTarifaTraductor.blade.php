@extends('layouts.master')
@section('content')

<div>
    <h1>Modificar Traductor</h1>
    <div>
        <form method="POST" action="{{ url('/tarifa/modificar/formulari') }}/traductor/{{$tarifes->dni_traductor}}/{{$tarifes->id_idioma}}">
            
            {{ csrf_field() }}
            
            <table>
                
                <tr>
                    <td>DNI: </td> 
                    
                    <td>
                        <select name="dni" id="dni">
                            <option value="{{$tarifes->dni_traductor}}">{{$tarifes->dni_traductor}}</option>
                            {{-- @while --}}
                            @foreach ($traductors as $traductor)
                                @if ($tarifes->dni_traductor != $traductor->dni_traductor)
                                <option value="{{$traductor->dni_traductor}}">{{$traductor->dni_traductor}}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Idioma: </td> 
                    
                    <td>
                        <select name="idioma">
                            @foreach ($idiomes as $idioma)
                                @if ($tarifes->id_idioma == $idioma->id_idioma)
                                    <option value="{{$idioma->id_idioma}}">{{$idioma->nom_idioma}}</option>
                                @endif
                            @endforeach
                            @foreach ($idiomes as $idioma)
                                @if ($tarifes->id_idioma != $idioma->id_idioma)
                                    <option value="{{$idioma->id_idioma}}">{{$idioma->nom_idioma}}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Tarifa traductor: </td>
                    <td><input type="number" name="tarifa_traductor" value="{{$tarifes->tarifa_traductor}}"></td>
                </tr>
                
                <tr>
                    <td>Tarifa ajustador: </td>
                    <td><input type="number" name="tarifa_ajustador" value="{{$tarifes->tarifa_ajustador}}"></td>
                </tr>
                
                <tr>
                    <td>Tarifa linguista: </td>
                    <td><input type="number" name="tarifa_linguista" value="{{$tarifes->tarifa_linguista}}"></td>
                </tr>
                
            </table>
            
            <button type="sumbit">Modificar Tarifa</button>
        </form>
    </div>
</div>

@stop