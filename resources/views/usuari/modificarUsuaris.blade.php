@extends('layouts.master')
@section('content')

<div>
    <div>Modificar usuari</div>
    <div>
        <form method="POST" action="{{ url('/usuari/modificar/formulari/') }}{{ $user->alias_usuari }}">
            {{method_field('PUT')}}
            
            {{ csrf_field() }}
            
            <table>
            
                <tr>
                    <td>Contrasenya usuari: </td>
                    <td><input type="password" name="contrasenya" id="contrasenya" value="{{$user->contrasenya_usuari}}"></td>
                </tr>
                
                <tr>
                    <td>DNI usuari: </td>
                    <td><input type="text" name="dni" id="dni" value="{{$user->dni_usuari}}"></td>
                </tr>

                <tr>
                    <td>Nom usuari: </td>
                    <td><input type="text" name="nom" id="nom" value="{{$user->nom_usuari}}" ></td>
                </tr>

                <tr>
                    <td>Primer cognom usuari: </td>
                    <td><input type="text" name="primer_cognom" id="primer_cognom" value="{{$user->primer_cognom_usuari}}"></td>
                </tr>

                <tr>
                    <td>Segon cognom usuari: </td>
                    <td><input type="text" name="segon_cognom" id="segon_cognom" value="{{$user->segon_cognom_usuari}}"></td>
                </tr>

                <tr>
                    <td>Email usuari: </td>
                    <td><input type="text" name="email" id="email" value="{{$user->email_usuari}}"></td>
                </tr>

                <tr>
                    <td>Telèfon usuari: </td>
                    <td><input type="number" name="telefon" id="telefon" value="{{$user->telefon_usuari}}"></td>
                </tr>

                <tr>
                    <td>Departament usuari: </td> 
                    
                    <td><select name="departament" id="departament">
                            <option>{{$departament->nom_rol}}</option>
                            {{-- @while --}}
                            <option>Director</option>
                            <option>Product Manager</option>
                            <option>Tècnic de sala</option>
                        </select></td>
                </tr>
    
            </table>
            
            <button type="sumbit">Modificar usuari</button>
        </form>
    </div>
</div>

@stop