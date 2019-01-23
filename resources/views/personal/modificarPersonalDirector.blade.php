@extends('layouts.master')
@section('content')

<div>
    <h1>Modificar Director</h1>
    <div>
        <form method="POST" action="{{ url('/personal/modificar/formulari')}}/{{ $per->rol }}/{{ $per->dni_director }}">
            @method('PUT')
            {{ csrf_field() }}
            
            <table>
            
                <tr>
                    <td>Nom: </td>
                    <td><input type="text" name="nom" id="nom" value="{{$per->nom_director}}"></td>
                </tr>
                
                <tr>
                    <td>Primer Congom: </td>
                    <td><input type="text" name="cog1" id="cog1" value="{{$per->primer_cognom_director}}"></td>
                </tr>

                <tr>
                    <td>Segon Cognom: </td>
                    <td><input type="text" name="cog2" id="cog2" value="{{$per->segon_cognom_director}}" ></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" id="email" value="{{$per->email_director}}"></td>
                </tr>

                <tr>
                    <td>Telèfon: </td>
                    <td><input type="number" name="telefon" id="telefon" value="{{$per->telefon_director}}"></td>
                </tr>

                <tr>
                    <td>Direccio: </td>
                    <td><input type="text" name="direccio" id="direccio" value="{{$per->direccio_director}}"></td>
                </tr>

                <tr>
                    <td>Data Naixment: </td>
                    <td><input type="date" name="datanaix" id="datanaix" value="{{$per->data_naixement_director}}"></td>
                </tr>
                
                <tr>
                    <td>Sexe: </td> 
                    
                    <td><select name="sexe" id="sexe">
                            <option>{{$per->sexe_director}}</option>
                            {{-- @while --}}
                            <option value="home">Home</option>
                            <option value="dona">Dona</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Nacionalitat: </td>
                    <td><input type="text" name="nacionalitat" id="nacionalitat" value="{{$per->nacionalitat_director}}"></td>
                </tr>

                <tr>
                    <td>NSS: </td>
                    <td><input type="text" name="nss" id="nss" value="{{$per->nss_director}}"></td>
                </tr>

                <tr>
                    <td>IBAN: </td>
                    <td><input type="text" name="iban" id="iban" value="{{$per->iban_director}}"></td>
                </tr>
                
    
            </table>
            
            <button type="sumbit">Modificar director</button>
        </form>
    </div>
</div>

@stop