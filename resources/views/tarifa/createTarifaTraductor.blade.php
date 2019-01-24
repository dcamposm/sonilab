@extends('layouts.master')
@section('content')
{{--borrar los br y hacer css--}}

<div>

    <h1>
        Afegir tarifa traductor
	</h1>

    <div>
        <form method="POST" action="{{ url('/tarifa/crear/formulari') }}/traductor">
            {{ csrf_field() }}

            <table  class="formTable">
                
                <tr>
                    <td>DNI: </td> 
                    
                    <td>
                        <select name="dni" id="dni">
                            <option>Selecciona dni...</option>
                            {{-- @while --}}
                            @foreach ($traductors as $traductor)
                                <option value="{{$traductor->dni_traductor}}">{{$traductor->dni_traductor}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Idioma: </td> 
                    
                    <td>
                        <select name="idioma">
                            <option>Selecciona idioma...</option>
                            {{-- @while --}}
                            @foreach ($idiomes as $idioma)
                                <option value="{{$idioma->id_idioma}}">{{$idioma->nom_idioma}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Tarifa traductor: </td>
                    <td><input type="number" name="tarifa_traductor"></td>
                </tr>
                
                <tr>
                    <td>Tarifa ajustador: </td>
                    <td><input type="number" name="tarifa_ajustador"></td>
                </tr>
                
                <tr>
                    <td>Tarifa linguista: </td>
                    <td><input type="number" name="tarifa_linguista"></td>
                </tr>
                
            </table>

            <button type="sumbit">Afegir tarifa</button>
        </form>
        <a class="ret" href='{{url('tarifa/index/traductor')}}'>Retornar</a>
    </div>
</div>

@stop