@extends('layouts.master')
@section('content')

<div>
    <h1>Modificar Tarifa Actor</h1>
    <div>
        <form method="POST" action="{{ url('/tarifa/modificar/formulari') }}/actor/{{ $tarifes->dni_actor }}/{{ $tarifes->id_idioma }}">

            {{ csrf_field() }}
            
            <table class="formTable">
                
                <tr>
                    <td>DNI: </td> 
                    
                    <td>
                        <select name="dni" id="dni">
                            <option value="{{$tarifes->dni_actor}}">{{$tarifes->dni_actor}}</option>
                            {{-- @while --}}
                            @foreach ($actors as $actor)
                                @if ($tarifes->dni_actor != $actor->dni_actor)
                                <option value="{{$actor->dni_actor}}">{{$actor->dni_actor}}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Idioma: </td> 
                    
                    <td>
                        <select name="idioma">
                                
                            {{-- @while --}}
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
                    <td>Video:</td>
                    <td>Tarifa dels take: </td>
                    <td><input type="number" name="tarifa_video_take" id="tarifa_video_take" value="{{$tarifes->tarifa_video_take}}"></td>
                    <td>Tarifa dels cg: </td>
                    <td><input type="number" name="tarifa_video_cg" id="tarifa_video_cg" value="{{$tarifes->tarifa_video_cg}}"></td>
                </tr>
                <tr>
                    <td>Cine:</td>
                    <td>Tarifa dels take: </td>
                    <td><input type="number" name="tarifa_cine_take" id="tarifa_cine_take" value="{{$tarifes->tarifa_cine_take}}"></td>
                    <td>Tarifa dels cg: </td>
                    <td><input type="number" name="tarifa_cine_cg" id="tarifa_cine_cg" value="{{$tarifes->tarifa_cine_cg}}"></td>
                </tr> 
                <tr>
                    <td>Canço:</td>
                    <td>Tarifa: </td>
                    <td><input type="number" name="tarifa_canso" value="{{$tarifes->tarifa_canso}}"></td>
                </tr>
                
            </table>

            <button type="sumbit">Modificar tarifa</button>
        </form>
        <a class="ret" href='{{url('tarifa/index/actor')}}'>Retornar</a>
    </div>
</div>

@stop