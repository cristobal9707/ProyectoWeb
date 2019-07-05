@extends('layouts.app')
@section('content')
<div id="app">
        <v-app id="inspire" style="background-image: url(https://images2.alphacoders.com/102/1026253.jpg);">
            <v-container grid-list-lg>
            <v-layout align-space-around justify-center column class="form-contenedor">
                    @foreach ($Areas as $item)
                    <v-card style="padding: 10px; margin-bottom: 10px; margin-left: 10px;">
                        <h3>N°{{ $item->id }} - {{ $item->nombre }}</h3>
                        <v-divider></v-divider>
                        <div>{{ $item->descripcion}}</div>
                        
                    </v-card>
                    @endforeach
            </v-layout>
            </v-container>
        </v-app>
    </div>
@endsection
