@extends('master')

@section('content')

<div>
    <div>Afegir usuari</div>
    <div>
        <form method="POST">
            {{ csrf_field() }}
            
            <div>
                <label>Alias usuari: </label>
            </div>
        </form>
    </div>
</div>