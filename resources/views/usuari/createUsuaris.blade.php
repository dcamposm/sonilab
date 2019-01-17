@extends('layouts.master')
@section('content')
{{--borrar los br y hacer css--}}

<div>

    <div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        Afegir usuari</div>

    <div>
        <form method="POST" action="{{ url('/usuari/crear/formulari') }}">
            {{ csrf_field() }}

            <table>

                <tr>
                    <td>Alias usuari: </td>
                    <td><input type="text" name="alias" id="alias"></td>
                </tr>

                <tr>
                    <td>Contrasenya usuari: </td>
                    <td><input type="password" name="contrasenya" id="contrasenya"></td>
                </tr>

                <tr>
                    <td>DNI usuari: </td>
                    <td><input type="text" name="dni" id="dni"></td>
                </tr>

                <tr>
                    <td>Nom usuari: </td>
                    <td><input type="text" name="nom" id="nom"></td>
                </tr>

                <tr>
                    <td>Primer cognom usuari: </td>
                    <td><input type="text" name="primer_cognom" id="primer_cognom"></td>
                </tr>

                <tr>
                    <td>Segon cognom usuari: </td>
                    <td><input type="text" name="segon_cognom" id="segon_cognom"></td>
                </tr>

                <tr>
                    <td>Email usuari: </td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>

                <tr>
                    <td>Telèfon usuari: </td>
                    <td><input type="number" name="telefon" id="telefon"></td>
                </tr>

                <tr>
                    <td>Deprtament usuari: </td> 

                    <td><select name="departament" id="departament">
                            <option>Selecciona departament...</option>
                            {{-- @while --}}
                            <option value="1">Director</option>
                            <option value="2">Product Manager</option>
                            <option value="3">Departament tecnic</option>
                        </select></td>
                </tr>

            </table>

            <button type="sumbit">Afegir usuari</button>
        </form>
    </div>
</div>

@stop