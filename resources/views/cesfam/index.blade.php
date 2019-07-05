@extends('layouts.app')
@section('content')
<div id="app">
        <v-app id="inspire" style="background-image: url(https://images2.alphacoders.com/102/1026253.jpg);">
            <v-container grid-list-lg>
            <v-layout v-layout align-start justify-center row wrap>  
                    @foreach ($Cesfam as $item)
                    <v-card height="160px" width="500px" style="padding: 10px; margin-bottom: 10px; margin-left: 10px;">
                        <h3>{{ $item->nombre }}</h3>
                        <v-divider></v-divider>
                        <div>Director(a): {{ $item->director}} </div>
                        <div>Ubicacion: {{ $item->ubicacion}} </div>
                        <div>Comuna: {{ $item->comuna}} </div>
                        <div>Fono: {{ $item->fono}} </div>
                    </v-card>
                    @endforeach
            </v-layout>
            </v-container>
        </v-app>
    </div>
@endsection
