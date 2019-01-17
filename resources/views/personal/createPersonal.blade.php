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
        Afegir Personal</div>

    <div>
        <form method="POST" action="{{ url('/personal/crear/formulari') }}">
            {{ csrf_field() }}

            <table>

                <tr>
                    <td>DNI: </td>
                    <td><input type="text" name="dni" id="dni"></td>
                </tr>

                <tr>
                    <td>Nom: </td>
                    <td><input type="text" name="nom" id="nom"></td>
                </tr>
                
                <tr>
                    <td>Primer Congom: </td>
                    <td><input type="text" name="cog1" id="cog1"></td>
                </tr>

                <tr>
                    <td>Segon Cognom: </td>
                    <td><input type="text" name="cog2" id="cog2"></td>
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
                    <td>Direccio: </td>
                    <td><input type="text" name="direccio" id="direccio"></td>
                </tr>

                <tr>
                    <td>Data Naixment: </td>
                    <td><input type="date" name="datanaix" id="datanaix"></td>
                </tr>
                
                <tr>
                    <td>Sexe: </td> 
                    
                    <td><select name="sexe" id="sexe">
                            <option>Selecciona sexe...</option>
                            {{-- @while --}}
                            <option value="home">Home</option>
                            <option value="dona">Dona</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Nacionalitat: </td>
                    <td><input type="text" name="nacionalitat" id="nacionalitat"></td>
                </tr>

                <tr>
                    <td>NSS: </td>
                    <td><input type="text" name="nss" id="nss"></td>
                </tr>

                <tr>
                    <td>IBAN: </td>
                    <td><input type="text" name="iban" id="iban"></td>
                </tr>
                
                <tr>
                    <td>Rol: </td> 

                    <td><select name="rol" id="rol">
                            <option>Selecciona rol...</option>
                            {{-- @while --}}
                            <option value="actor">Actor</option>
                            <option value="director">Director de doblatge</option>
                            <option value="tecnic_sala">Tècnic de sala</option>
                            <option value="traductor">Traductor/Ajustador</option>
                        </select></td>
                </tr>
                
                <tr  id="idioma">
                    <td>Idioma: </td> 

                    <td>
                            <input type="checkbox" name="idioma[]" value="1">Catala
                            <input type="checkbox" name="idioma[]" value="2">Castella
                            <input type="checkbox" name="idioma[]" value="3">Angles
                            <input type="checkbox" name="idioma[]" value="4">Frances
                    </td>
                </tr>
            </table>

            <button type="sumbit">Afegir personal</button>
        </form>
    </div>
</div>

@stop