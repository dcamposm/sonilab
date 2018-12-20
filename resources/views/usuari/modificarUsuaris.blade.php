{{-- @extends('master')

@section('content') --}}

<div>
    <div>Modificar usuari</div>
    <div>
        <form method="POST">
            {{method_field('PUT')}}
            
            {{ csrf_field() }}
            
            <table>
            
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