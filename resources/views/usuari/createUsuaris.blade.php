@extends('layouts.master')
@section('content')
{{--borrar los br y hacer css--}}

<div>

    <h1>Afegir usuari</h1>

    <div>
        <form class="forms" method="POST" action="{{ url('/usuari/crear/formulari') }}">
            {{ csrf_field() }}

            <table>

                <tr>
                    <td>Alias: </td>
                    <td><input type="text" name="alias" id="alias"></td>
                </tr>

                <tr>
                    <td>Contrasenya: </td>
                    <td><input type="password" name="contrasenya" id="contrasenya"></td>
                </tr>

                <tr>
                    <td>Repeteix la contrasenya: </td>
                    <td><input type="password" name="recontrasenya" id="recontrasenya"></td>
                </tr>

                <tr>
                    <td>DNI: </td>
                    <td><input type="text" name="dni" id="dni"></td>
                </tr>

                <tr>
                    <td>Nom: </td>
                    <td><input type="text" name="nom" id="nom"></td>
                </tr>

                <tr>
                    <td>Primer cognom: </td>
                    <td><input type="text" name="primer_cognom" id="primer_cognom"></td>
                </tr>

                <tr>
                    <td>Segon cognom: </td>
                    <td><input type="text" name="segon_cognom" id="segon_cognom"></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>

                <tr>
                    <td>Telèfon: </td>
                    <td><input type="number" name="telefon" id="telefon"></td>
                </tr>

                <tr>
                    <td>Deprtament: </td> 

                    <td><select name="departament" id="departament">
                            <option>Selecciona departament...</option>
                            {{-- @while --}}
                            @foreach ($deps as $dep)
                                <option value="{{$dep->id_rol}}">{{$dep->nom_rol}}</option>
                            @endforeach
                        </select></td>
                </tr>

            </table>

            <button type="sumbit">Afegir usuari</button>
        </form>
    </div>
</div>

@stop