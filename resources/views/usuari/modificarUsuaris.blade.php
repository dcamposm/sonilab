@extends('layouts.master')
@section('content')

<div>
    <h1>Modificar usuari</h1>
    <div>
        <form method="POST" action="{{ url('/usuari/modificar/formulari') }}/{{ $user->alias_usuari }}">
            @method('PUT')
            {{ csrf_field() }}
            
            <table class="formTable">
            
                <tr>
                    <td>Alias: </td>
                    <td><input type="text" name="alias" id="alias" value="{{$user->alias_usuari}}" readonly="readonly"></td>                
                    <td>Contrasenya: </td>
                    <td><input type="password" name="contrasenya" id="contrasenya" value="{{$user->contrasenya_usuari}}"></td>
                </tr>
                
                <tr>
                    <td>DNI: </td>
                    <td><input type="text" name="dni" id="dni" value="{{$user->dni_usuari}}"></td>
                    <td>Nom: </td>
                    <td><input type="text" name="nom" id="nom" value="{{$user->nom_usuari}}" ></td>
                </tr>

                <tr>
                    <td>Primer cognom: </td>
                    <td><input type="text" name="primer_cognom" id="primer_cognom" value="{{$user->primer_cognom_usuari}}"></td>
                    <td>Segon cognom: </td>
                    <td><input type="text" name="segon_cognom" id="segon_cognom" value="{{$user->segon_cognom_usuari}}"></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" id="email" value="{{$user->email_usuari}}"></td>
                    <td>Telèfon: </td>
                    <td><input type="number" name="telefon" id="telefon" value="{{$user->telefon_usuari}}"></td>
                </tr>

                <tr>
                    <td>Departament: </td> 
                    
                    <td><select name="departament" id="departament">
                            @foreach ($departament as $dep)
                                @if ($user->id_departament == $dep->id_rol)
                                    <option value="{{$user->id_departament}}">{{$dep->nom_rol}}</option>
                                @endif
                            @endforeach
                            @foreach ($departament as $dep)
                                @if ($user->id_departament != $dep->id_rol)
                                    <option value="{{$dep->id_rol}}">{{$dep->nom_rol}}</option>
                                @endif
                            @endforeach                            
                        </select></td>
                </tr>
    
            </table>
            
            <button type="sumbit">Modificar usuari</button>
        </form>
    </div>
</div>

@stop