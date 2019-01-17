@extends('layouts.master')
@section('content')

<div>
    <div>Modificar Traductor</div>
    <div>
        <form method="POST" action="{{ url('/personal/modificar/formulari')}}/{{ $per->rol }}/{{ $per->dni_traductor }}">
            
            {{ csrf_field() }}
            
            <table>
            
                <tr>
                    <td>Nom: </td>
                    <td><input type="text" name="nom" id="nom" value="{{$per->nom_traductor}}"></td>
                </tr>
                
                <tr>
                    <td>Primer Congom: </td>
                    <td><input type="text" name="cog1" id="cog1" value="{{$per->primer_cognom_traductor}}"></td>
                </tr>

                <tr>
                    <td>Segon Cognom: </td>
                    <td><input type="text" name="cog2" id="cog2" value="{{$per->segon_cognom_traductor}}" ></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" id="email" value="{{$per->email_traductor}}"></td>
                </tr>

                <tr>
                    <td>Telèfon: </td>
                    <td><input type="number" name="telefon" id="telefon" value="{{$per->telefon_traductor}}"></td>
                </tr>

                <tr>
                    <td>Direccio: </td>
                    <td><input type="text" name="direccio" id="direccio" value="{{$per->direccio_traductor}}"></td>
                </tr>

                <tr>
                    <td>Data Naixment: </td>
                    <td><input type="date" name="datanaix" id="datanaix" value="{{$per->data_naixement_traductor}}"></td>
                </tr>
                
                <tr>
                    <td>Sexe: </td> 
                    
                    <td><select name="sexe" id="sexe">
                            <option>{{$per->sexe_traductor}}</option>
                            {{-- @while --}}
                            <option value="home">Home</option>
                            <option value="dona">Dona</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Nacionalitat: </td>
                    <td><input type="text" name="nacionalitat" id="nacionalitat" value="{{$per->nacionalitat_traductor}}"></td>
                </tr>

                <tr>
                    <td>NSS: </td>
                    <td><input type="text" name="nss" id="nss" value="{{$per->nss_traductor}}"></td>
                </tr>

                <tr>
                    <td>IBAN: </td>
                    <td><input type="text" name="iban" id="iban" value="{{$per->iban_traductor}}"></td>
                </tr>
                
    
            </table>
            
            <button type="sumbit">Modificar traductor</button>
        </form>
    </div>
</div>

@stop