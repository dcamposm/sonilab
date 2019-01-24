@extends('layouts.master')
@section('content')
{{--borrar los br y hacer css--}}

<div>

    <h1>
        Afegir tarifa actor
	</h1>

    <div>
        <form method="POST" action="{{ url('/tarifa/crear/formulari') }}/actor">
            {{ csrf_field() }}

            <table  class="formTable">
                
                <tr>
                    <td>DNI: </td> 
                    
                    <td>
                        <select name="dni" id="dni">
                            <option>Selecciona dni...</option>
                            {{-- @while --}}
                            @foreach ($actors as $actor)
                                <option value="{{$actor->dni_actor}}">{{$actor->dni_actor}}</option>
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
                    <td>Video:</td>
                    <td>Tarifa dels take: </td>
                    <td><input type="number" name="tarifa_video_take" id="tarifa_video_take"></td>
                    <td>Tarifa dels cg: </td>
                    <td><input type="number" name="tarifa_video_cg" id="tarifa_video_cg"></td>
                </tr>
                <tr>
                    <td>Cine:</td>
                    <td>Tarifa dels take: </td>
                    <td><input type="number" name="tarifa_cine_take" id="tarifa_cine_take"></td>
                    <td>Tarifa dels cg: </td>
                    <td><input type="number" name="tarifa_cine_cg" id="tarifa_cine_cg"></td>
                </tr>
                <tr>
                    <td>Canço:</td>
                    <td>Tarifa: </td>
                    <td><input type="number" name="tarifa_canso"></td>
                </tr>
                
            </table>

            <button type="sumbit">Afegir tarifa</button>
        </form>
    </div>
</div>

@stop