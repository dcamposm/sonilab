@extends('layouts.master')
@section('content')

<div>
    <h1>Modificar Tecnic de sala</h1>
    <div>
        <form method="POST" action="{{ url('/personal/modificar/formulari')}}/{{ $per->rol }}/{{ $per->dni_tecnic_sala }}">
            @method('PUT')
            {{ csrf_field() }}
            
            <table class="formTable">
            
                <tr>
                    <td>DNI: </td>
                    <td><input type="text" name="dni" id="dni" value="{{$per->dni_tecnic_sala}}" readonly="readonly"></td>
                    <td>Nom: </td>
                    <td><input type="text" name="nom" id="nom" value="{{$per->nom_tecnic_sala}}"></td>
                </tr>
                
                <tr>
                    <td>Primer Congom: </td>
                    <td><input type="text" name="cog1" id="cog1" value="{{$per->primer_cognom_tecnic_sala}}"></td>
                    <td>Segon Cognom: </td>
                    <td><input type="text" name="cog2" id="cog2" value="{{$per->segon_cognom_tecnic_sala}}" ></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" id="email" value="{{$per->email_tecnic_sala}}"></td>
                    <td>Telèfon: </td>
                    <td><input type="number" name="telefon" id="telefon" value="{{$per->telefon_tecnic_sala}}"></td>
                </tr>

                <tr>
                    <td>Direccio: </td>
                    <td><input type="text" name="direccio" id="direccio" value="{{$per->direccio_tecnic_sala}}"></td>
                    <td>Data Naixment: </td>
                    <td><input type="date" name="datanaix" id="datanaix" value="{{$per->data_naixement_tecnic_sala}}"></td>
                </tr>

                <tr>
                    <td>Sexe: </td> 
                    
                    <td><select name="sexe" id="sexe">
                            <option>{{$per->sexe_tecnic_sala}}</option>
                            {{-- @while --}}
                            @if ($per->sexe_tecnic_sala == 'Dona')
                                <option value="home">Home</option>
                            @else   
                                <option value="dona">Dona</option>
                            @endif
                        </select>
                    </td>
                    <td>Nacionalitat: </td>
                    <td><input type="text" name="nacionalitat" id="nacionalitat" value="{{$per->nacionalitat_tecnic_sala}}"></td>
                </tr>

                <tr>
                    <td>NSS: </td>
                    <td><input type="text" name="nss" id="nss" value="{{$per->nss_tecnic_sala}}"></td>
                    <td>IBAN: </td>
                    <td><input type="text" name="iban" id="iban" value="{{$per->iban_tecnic_sala}}"></td>
                </tr>
    
            </table>
            
            <button type="sumbit">Modificar tecnic de sala</button>
        </form>
        <a class="ret" href='{{url('personal/index')}}'>Retornar</a>
    </div>
</div>

@stop