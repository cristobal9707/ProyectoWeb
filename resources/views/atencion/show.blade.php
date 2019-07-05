@extends('layouts.app')
@section('content')
<div id="app">
        <v-app id="inspire" style="background-color:#2ecc71">
            <v-container grid-list-lg>
                <v-layout align-space-around justify-center column class="form-contenedor">
                    <v-card style="padding: 10px; margin-bottom: 10px;">                  
                        <h2>Informacion</h2>       
                        <v-divider></v-divider>
                        <h5>Parentesco : {{ $Atenciones->persona->nombre }}</h5>
                        <h5>Nombre: {{ $Atenciones->nombre }}</h5>
                        <h5>Area: {{ $Atenciones->recurso->estamento }}</h5>
                        <h5>Descripcion: {{ $Atenciones->descripcion}}</h5>
                        <v-divider></v-divider>
                        <h3>Fechas</h3>
                        <h5>Fecha agregado: {{ $Atenciones->created_at }}</h5>
                        <h5>Fecha editado: {{ $Atenciones->updated_at }}</h5> 
                    </v-card>
                </v-layout>
            </v-container>
        </v-app>
    </div>
@endsection
