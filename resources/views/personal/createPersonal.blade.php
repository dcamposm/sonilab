@extends('layouts.master')
@section('content')
{{--borrar los br y hacer css--}}

<div>

    <h1>
        Afegir personal
	</h1>

    <div>
        <form method="POST" action="{{ url('/personal/crear/formulari') }}">
            {{ csrf_field() }}

            <table class="formTable">

                <tr>
                    <td>DNI: </td>
                    <td><input type="text" name="dni" id="dni"></td>
                    <td>Nom: </td>
                    <td><input type="text" name="nom" id="nom"></td>
                </tr>
                
                <tr>
                    <td>Primer Congom: </td>
                    <td><input type="text" name="cog1" id="cog1"></td>
                    <td>Segon Cognom: </td>
                    <td><input type="text" name="cog2" id="cog2"></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" id="email"></td>
                    <td>Telèfon: </td>
                    <td><input type="number" name="telefon" id="telefon"></td>
                </tr>

                <tr>
                    <td>Direccio: </td>
                    <td><input type="text" name="direccio" id="direccio"></td>
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
                    <td>Nacionalitat: </td>
                    <td><input type="text" name="nacionalitat" id="nacionalitat"></td>
                </tr>
                
                <tr>
                    <td>NSS: </td>
                    <td><input type="text" name="nss" id="nss"></td>
                    <td>IBAN: </td>
                    <td><input type="text" name="iban" id="iban"></td>
                </tr>
                
                <tr>
                    <td>Rol: </td> 

                    <td>
                        <select name="rol" id="rol">
                            <option>Selecciona rol...</option>
                            {{-- @while --}}
                            <option value="actor">Actor</option>
                            <option value="director">Director de doblatge</option>
                            <option value="tecnic_sala">Tècnic de sala</option>
                            <option value="traductor">Traductor/Ajustador/Linguista</option>
                        </select></td>
                </tr>
                
                <tr  id="idioma">
                    <td>Idioma: </td> 

                    <td>
                        <input type="checkbox" name="idioma[]" value="1" checked>Catala
                            <input type="checkbox" name="idioma[]" value="2">Castella
                            <input type="checkbox" name="idioma[]" value="3">Angles
                            <input type="checkbox" name="idioma[]" value="4">Frances
                    </td>
                </tr>
                
                <tr id="tipus_tarifa">
                    <td>Tipus de tarifa: </td> 

                    <td><select name="tipus" id="click_tipus_tarifa">
                            <option>Selecciona tipus...</option>
                            {{-- @while --}}
                            <option value="video">Video</option>
                            <option value="cine">Cine</option>
                            <option value="canso">Canso</option>
                    </select></td>
                </tr>
                
                <tr id="tarifa_video">
                    <td>Tarifa dels take: </td>
                    <td><input type="number" name="tarifa_video_take" id="tarifa_video_take"></td>
                    <td>Tarifa dels cg: </td>
                    <td><input type="number" name="tarifa_video_cg" id="tarifa_video_cg"></td>
                </tr>
                
                <tr id="tarifa_cine">
                    <td>Tarifa dels take: </td>
                    <td><input type="number" name="tarifa_cine_take" id="tarifa_cine_take"></td>
                    <td>Tarifa dels cg: </td>
                    <td><input type="number" name="tarifa_cine_cg" id="tarifa_cine_cg"></td>
                </tr>
                
                <tr id="tarifa_canso">
                    <td>Tarifa: </td>
                    <td><input type="number" name="tarifa_canso" id="tarifa_canso"></td>
                </tr>
                
                <tr id="tipus_traductor">
                    <td>Tarifa per: </td> 

                    <td>
                        <input type="checkbox" name="tipus_traductor[]" id="tipus_traductor_trad" value="1">Traductor
                        <input type="checkbox" name="tipus_traductor[]" id="tipus_traductor_ajus" value="2">Ajustador
                        <input type="checkbox" name="tipus_traductor[]" id="tipus_traductor_ling" value="3">Linguista
                    </td>
                </tr>
                
                <tr id="tarifa_traductor">
                    <td>Tarifa traductor: </td>
                    <td><input type="number" name="tarifa_traductor"></td>
                </tr>
                
                <tr id="tarifa_ajustador">
                    <td>Tarifa ajustador: </td>
                    <td><input type="number" name="tarifa_ajustador"></td>
                </tr>
                
                <tr id="tarifa_linguista">
                    <td>Tarifa linguista: </td>
                    <td><input type="number" name="tarifa_linguista"></td>
                </tr>
                
                <tr id="tarifa_traductor_ajustador">
                    <td>Tarifa traductor i ajustador: </td>
                    <td><input type="number" name="tarifa_traductor_ajustador"></td>
                </tr>
                
                <tr id="tarifa_totes">
                    <td>Tarifa tots: </td>
                    <td><input type="number" name="tarifa_totes"></td>
                </tr>
                
            </table>

            <button type="sumbit">Afegir personal</button>
        </form>
        <a class="ret" href='{{url('personal/index')}}'>Retornar</a>
    </div>
</div>

@stop